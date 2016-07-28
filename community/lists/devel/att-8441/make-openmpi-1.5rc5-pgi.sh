# Patch OpenMPI 1.5rc5
cd /usr/local/src
tar -xjf openmpi-1.5rc5.tar.bz2
source patch-openmpi-1.5rc5.sh

# Configure OpenMPI 1.5rc5 for PGI 10.3 compilers
cd openmpi-1.5rc5
export PGI_DIR=/opt/pgi/linux86-64/10.3
export PATH=$PGI_DIR/bin:$PATH
./configure >configure.log 2>&1 \
   --prefix=$PGI_DIR/openmpi --with-sge \
   --with-wrapper-cflags="-DNO_PGI_OFFSET" \
   --with-wrapper-cxxflags="-DNO_PGI_OFFSET" \
   CC="pgcc -m64" \
   CFLAGS="-g -O3 -tp amd64 -DNO_PGI_OFFSET" \
   CXX="pgcpp -m64" \
   CXXFLAGS="-g -O3 -tp amd64 -DNO_PGI_OFFSET" \
   FC="pgf90 -m64" \
   FCFLAGS="-g -O3 -tp amd64" \
   F77="pgf90 -m64" \
   FFLAGS="-g -O3 -tp amd64"

# Would like to do Makefile fixups here, but make recreates them

# Do the make until the link fails
make >make_part1.log 2>&1

# Apply Makefile fixups to add -lpthread to the LIBS variable
find . -name Makefile -exec cp {} {}.original ';' \
-exec sh -c "sed -e '/^LIBS = -lnsl  -lutil$/s/$/  -lpthread/' {}.original >{}" ';'

# Finish the make
make >make_part2.log 2>&1

# Validate the library
make check >check.log 2>&1

