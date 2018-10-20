<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud_model extends CI_Model{

    public function cadastrar($tabela="", $dados=NULL){
        if($dados!=NULL) {
            $this->db->insert($tabela,$dados);
            $this->session->set_flashdata('cadastrook','Cadastro realizado com sucesso!');
		}
    }

    public function atualizar($dados=NULL,$condicao=NULL){
        if($dados!=NULL && $condicao!=NULL) {
            $this->db->update('teste',$dados,$condicao);
            $this->session->set_flashdata('edicaook','Dados atualizados com sucesso!');
            //redirect(current_url());//volta pra url anterior
		}
    }
    public function listar_todos(){
        return $this->db->get('teste');
    }

    public function listar_por_id($id=NULL, $tabela){
        if($id!=NULL){
            $this->db->where('id',$id);
            $this->db->limit(1);
            return $this->db->get($tabela);
        }else{
            return false;
		}
    }

    public function excluir($condicao = NULL){
        if($condicao!=NULL){
            $this->db->delete('teste',$condicao);
            $this->session->set_flashdata('excluidook','Excluido com sucesso!');
            //redirect('crud/listar');//volta pra url anterior
		}
    }
}
