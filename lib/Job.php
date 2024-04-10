<?php

class Job
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    // Get all jobs from the database
    public function getAllJobs()
    {
        $this->db->query("SELECT jobs.*, categories.name AS category_name 
            FROM jobs 
            INNER JOIN categories 
            ON jobs.category_id = categories.id
            ");

        $this->db->execute();
        return $this->db->resultSet();
    }

    // Get all categories from the database
    public function getCategories()
    {
        $this->db->query("SELECT * FROM categories");
        $this->db->execute();
        return $this->db->resultSet();
    }

    // get all job in a category with id
    public function getAllJobsByCategoryId($id)
    {
        $this->db->query("SELECT jobs.*, categories.name AS category_name 
            FROM jobs 
            INNER JOIN categories 
            ON jobs.category_id = categories.id
            WHERE jobs.category_id = $id
            ORDER BY post_date DESC
            ");

        $this->db->execute();
        return $this->db->resultSet();
    }

    // get all job in a category with id
    public function getCategory($category_id)
    {
        $this->db->query("SELECT * FROM categories WHERE id = :category_id");
        $this->db->bind(':category_id', $category_id);
        $row = $this->db->single();
        return $row;
    }

    // get single job with id
    public function getJob($id)
    {
        $this->db->query("SELECT * FROM jobs WHERE id = :id");
        $this->db->bind(':id', $id);
        $row = $this->db->single();
        return $row;
    }
}
