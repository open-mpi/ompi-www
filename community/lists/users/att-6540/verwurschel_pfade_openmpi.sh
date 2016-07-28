#!/bin/bash
# for all files, make a file.bak copy, and replace PATH1 through PATH2
# slasches mit backslasches escapen!

#PATH1='\/bla\/1'
PATH1='\/opt\/SUNWhpc\/HPC8.0'

#PATH2='\/bla\/2'
#PATH2='\/opt\/MPI\/clustertools\/studio\/HPC8.0'
PATH2='\/opt\/MPI\/clustertools\/gcc\/HPC8.0'

for i in $@ ; do mv $i $i.bak; cat $i.bak | sed "s/${PATH1}/${PATH2}/g" > $i; done

