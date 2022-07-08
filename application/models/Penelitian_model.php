<?php

class Penelitian_model extends CI_Model
{
    public function getAllPenelitian()
    {
        return $this->db->get('tbl_penelitian')->result_array();
    }

    public function tambahDataPenelitian()
    {
        $data = [
            "nama_dosen" => $this->input->post('nama_dosen', true),
            "nik" => $this->input->post('nik', true),
            "topik" => $this->input->post('topik', true),
            "judul" => $this->input->post('judul', true),
            "waktu" => $this->input->post('waktu', true),
            "nama_mhs" => $this->input->post('nama_mhs', true),
            "nim_mhs" => $this->input->post('nim_mhs', true),
            "link" => $this->input->post('link', true)
        ];

        $this->db->insert('tbl_penelitian', $data);
    }

    public function hapusDataPenelitian($id)
    {
        // $this->db->where('id', $id);
        $this->db->delete('tbl_penelitian', ['id' => $id]);
    }

    public function getPenelitianById($id)
    {
        return $this->db->get_where('tbl_penelitian', ['id' => $id])->row_array();
    }

    public function ubahDataPenelitian()
    {
        $data = [
            "nama_dosen" => $this->input->post('nama_dosen', true),
            "nik" => $this->input->post('nik', true),
            "topik" => $this->input->post('topik', true),
            "judul" => $this->input->post('judul', true),
            "waktu" => $this->input->post('waktu', true),
            "nama_mhs" => $this->input->post('nama_mhs', true),
            "nim_mhs" => $this->input->post('nim_mhs', true),
            "link" => $this->input->post('link', true)
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('tbl_penelitian', $data);
    }

    public function cariDataPenelitian()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('nama_dosen', $keyword);
        $this->db->or_like('nik', $keyword);
        $this->db->or_like('topik', $keyword);
        $this->db->or_like('judul', $keyword);
        $this->db->or_like('waktu', $keyword);
        $this->db->or_like('nama_mhs', $keyword);
        $this->db->or_like('nim_mhs', $keyword);

        return $this->db->get('tbl_penelitian')->result_array();
    }
}
