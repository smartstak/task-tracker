<?php

namespace Smartstak\TaskTracker;

class Task
{
    private string $status = "to-do";
    private string $createdAt;
    private string $updatedAt;

    public function __construct(
        private int $id,
        private string $description
    ) {
        $this->createdAt = date("Y-m-d H:i:s");
        $this->updatedAt = date("Y-m-d H:i:s");
    }

    public function create(): array
    {
        return [
            "id" => $this->id,
            "status" => $this->status,
            "description" => $this->description,
            "createdAt" => $this->createdAt,
            "updatedAt" => $this->updatedAt
        ];
    }
}
