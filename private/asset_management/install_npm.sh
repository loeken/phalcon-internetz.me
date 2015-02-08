#!/bin/bash
sudo apt-get update
sudo apt-get install -y gcc g++ make
wget http://nodejs.org/dist/node-latest.tar.gz
tar -zxvf node-latest.tar.gz
cd node-v*
./configure
make
sudo make install
