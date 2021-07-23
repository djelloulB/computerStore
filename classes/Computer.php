<?php
    class Computer {
        protected $components = [];
        protected $devices = [];
        protected string $name;

        public function getComponents(){
            return $this->components;
        }
        public function getDevices(){
            return $this->devices;
        }
        public function getName(){
            return $this->name;
        }

        public function setComponents(array $components){
            $this->components = $components;
            return $this;
        }
        public function addComponent(string $component) {
            $this->components[] = $component;
            return $this;
        }
        public function setDevices(array $devices){
            $this->devices = $devices;
            return $this;
        }
        public function setName(string $name){
            $this->name = $name;
            return $this;
        }
    }