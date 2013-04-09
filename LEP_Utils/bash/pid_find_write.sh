#!/bin/bash
ps ax | grep $1 | grep -v $0 | awk '!/grep/{print $1}' > $2 
