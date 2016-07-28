
OWD=$PWD
GMPD=$OWD/gmp-4.3.2
MPFRD=$OWD/mpfr-2.4.2
MPCD=$OWD/mpc-0.8.1
PPLD=$OWD/ppl-0.11
CLOOG=$OWD/cloog-ppl-0.15.9
GCC=$OWD/gcc-4.7.2-rhel5

export LD_LIBRARY_PATH=$GCC/lib64:$GMPD/lib:$MPFRD/lib:$MPCD/lib:$PPLD/lib:$CLOOG/lib:$LD_LIBRARY_PATH
export PATH=$GCC/bin:/usr/bin:/bin
export CFLAGS='-I/nm/programs/third-party/gcc-4.7.2-rhel5/include -I/nm/programs/third-party/gcc-4.7.2-rhel5/include/c++ -I/nm/programs/third-party/gcc-4.7.2-rhel5/include/c++/4.7.2'

#mkdir tmp-install >& /dev/null
cd    tmp-install

rm -rf openmpi-1.6.4-$1
cp ../downloads/openmpi-1.6.4.tar.gz .
tar -xvf openmpi-1.6.4.tar.gz

mv openmpi-1.6.4 openmpi-1.6.4-$1
cd openmpi-1.6.4-$1

./configure \
	--prefix=$OWD/openmpi-1.6.4-$1 \
	--enable-static

#make
#make install
cd $OWD



