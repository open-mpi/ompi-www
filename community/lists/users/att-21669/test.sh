OWD=$PWD
GMPD=$OWD/gmp-4.3.2
MPFRD=$OWD/mpfr-2.4.2
MPCD=$OWD/mpc-0.8.1
PPLD=$OWD/ppl-0.11
CLOOG=$OWD/cloog-ppl-0.15.9

export LD_LIBRARY_PATH=$GMPD/lib:$MPFRD/lib:$MPCD/lib:$PPLD/lib:$CLOOG/lib:$OWD/gcc-4.7.2-rhel5/lib64
export PATH=$OWD/gcc-4.7.2-rhel5/bin:/bin:/usr/bin

which gcc
which g++

rm -r test >& /dev/null
c++ -o test test.c
./test



