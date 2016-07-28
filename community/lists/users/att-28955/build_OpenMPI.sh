#! /bin/sh

# parpia@us.ibm.com  2016/04/06

VERSION=1.10.2
BASE=`echo ${VERSION} | sed 's/\.[0-9]*$//'`
OPENMPI=openmpi-${VERSION}

# Fetch a fresh copy of the source tarball

/bin/rm -f ${OPENMPI}.tar.gz
wget https://www.open-mpi.org/software/ompi/v${BASE}/downloads/${OPENMPI}.tar.gz

/bin/rm -rf ${OPENMPI}

gunzip -c ${OPENMPI}.tar.gz | tar -xf -
cd ${OPENMPI}

export CCASFLAGS="-mcpu=power8 -O3"
export CFLAGS="-mcpu=power8 -O3"
export CXXFLAGS="-mcpu=power8 -O3"
export FCFLAGS="-mcpu=power8 -O3"

./configure \
  --prefix=/usr/local/OpenMPI/${VERSION} \
  --with-platform=mellanox/optimized \
   --with-fca=/opt/mellanox/fca \
   --with-mxm=/opt/mellanox/mxm \
  --with-lsf=/vol/ibmplatform/lsf/9.1 \
   --with-lsf-libdir=/vol/ibmplatform/lsf/9.1/linux3.10-glibc2.17-ppc64le/lib \
> configure.log.$$ 2>&1

make > make.log.$$ 2>&1

cd -
echo "Please examine the files `ls ./${OPENMPI}/*.$$`"
