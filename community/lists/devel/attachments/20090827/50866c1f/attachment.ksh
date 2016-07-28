#!/bin/csh -x

ls

setenv CFLAGS      "-O -m64 -g"
setenv CXXFLAGS    "-O -m64 -g"
setenv FFLAGS      "-O -m64 -g"
setenv FCFLAGS     "-O -m64 -g"

pwd

set INSTALLDIR = `pwd`/myopt
set path = ( $INSTALLDIR/bin /usr/ccs/bin /usr/bin /bin )

foreach PACKAGE ( m4-1.4.13 autoconf-2.63 automake-1.10.2 )
  bunzip2 $PACKAGE.tar.bz2
  tar xf  $PACKAGE.tar
  pushd   $PACKAGE
    ./configure --prefix=$INSTALLDIR
    make
    make install
  popd
end

bunzip2 openmpi-1.4a1r20984.tar.bz2
tar xf  openmpi-1.4a1r20984.tar
pushd   openmpi-1.4a1r20984
  ./autogen.sh
# ./configure                         \
#   --disable-visibility              \
#   --enable-mpirun-prefix-by-default \
#   --prefix=$INSTALLDIR
# make
# make install
popd

ls

