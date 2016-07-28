# Fixes to correctly identify PGI compiler versions 1 through 5
mv openmpi-1.4.2/config/libtool.m4{,.original}
sed -e '5899s/\[\[1-5\]\]\*/\[\[1-5\]\].\*/g' \
    openmpi-1.4.2/config/libtool.m4.original \
    >openmpi-1.4.2/config/libtool.m4
mv openmpi-1.4.2/opal/libltdl/m4/libtool.m4{,.original}
sed -e '5899s/\[\[1-5\]\]\*/\[\[1-5\]\].\*/g' \
    openmpi-1.4.2/opal/libltdl/m4/libtool.m4.original \
    >openmpi-1.4.2/opal/libltdl/m4/libtool.m4

# Disable inline assembly for PGI C++, as is done for PGI C (34579), and
# Fix PGI C compiler warning (10393, 26106): Pragma ignored - string
# expected after #pragma ident
mv openmpi-1.4.2/configure{,.original}
sed -e '34579{x;s/^.*$/    if test "$ompi_cv_cxx_compiler_vendor" = "portland group" ; then/;p;
                s/^.*$/        # PGI seems to have some issues with our inline assembly./;p;
                s/^.*$/        # Disable for now./;p;
                s/^.*$/        asm_result="no (Portland Group)"/;p;
                s/^.*$/    else/;G;}' \
    -e '34702{x;s/^.*$/    fi/;G;}' \
    -e '10393{s/#pragma ident/#define IDENT/;p;
              s/^.*$/#pragma ident \$IDENT/;}' \
    -e '26106{s/#pragma ident/#define IDENT/;p;
              s/^.*$/#pragma ident \$IDENT/;}' \
    openmpi-1.4.2/configure.original \
    >openmpi-1.4.2/configure
chmod +x openmpi-1.4.2/configure

# Fix PGI compiler warning: Array name used in logical expression
mv openmpi-1.4.2/opal/libltdl/ltdl.h{,.original}
sed -e '44s/((s) && (s)\[0\])/(s!=NULL)/' \
    openmpi-1.4.2/opal/libltdl/ltdl.h.original \
    >openmpi-1.4.2/opal/libltdl/ltdl.h

# Fix PGI compiler warning: Pointer value created from a nonlong integral type
mv openmpi-1.4.2/opal/mca/memory/ptmalloc2/hooks.c{,.original}
sed -e '434s/: 0;/: NULL;/' \
    -e '449s/: 0;/: NULL;/' \
    openmpi-1.4.2/opal/mca/memory/ptmalloc2/hooks.c.original \
    >openmpi-1.4.2/opal/mca/memory/ptmalloc2/hooks.c
mv openmpi-1.4.2/opal/mca/memory/ptmalloc2/malloc.c{,.original}
sed -e '3446s/: 0,/: NULL,/' \
    -e '3664s/: 0,/: NULL,/' \
    -e '3789s/: 0,/: NULL,/' \
    openmpi-1.4.2/opal/mca/memory/ptmalloc2/malloc.c.original \
    >openmpi-1.4.2/opal/mca/memory/ptmalloc2/malloc.c

# Remove declarations of Logical and Character specific procedures from
# Generic Subroutine MPI_SIZEOF and fix dummy arrays to be assumed-shape
mv openmpi-1.4.2/ompi/mpi/f90/scripts/mpi-f90-interfaces.h.sh{,.original}
sed -e $'34{p;
           s/^.*$/array_dims[0]=\'\'/;p;
           s/^.*$/array_dims[1]=\', dimension(:)\'/;p;
           s/^.*$/array_dims[2]=\', dimension(:,:)\'/;p;
           s/^.*$/array_dims[3]=\', dimension(:,:,:)\'/;p;
           s/^.*$/array_dims[4]=\', dimension(:,:,:,:)\'/;p;
           s/^.*$/array_dims[5]=\', dimension(:,:,:,:,:)\'/;p;
           s/^.*$/array_dims[6]=\', dimension(:,:,:,:,:,:)\'/;p;
           s/^.*$/array_dims[7]=\', dimension(:,:,:,:,:,:,:)\'/;p;
           s/^.*$//;}' \
   -e '/case "$rank" in  [0-6])  dim=/d' \
   -e '/case "$rank" in  7)  dim=.*$/s//dim=${array_dims[${rank}]}/' \
   -e '7129,7130d' \
   openmpi-1.4.2/ompi/mpi/f90/scripts/mpi-f90-interfaces.h.sh.original \
   >openmpi-1.4.2/ompi/mpi/f90/scripts/mpi-f90-interfaces.h.sh
chmod +x openmpi-1.4.2/ompi/mpi/f90/scripts/mpi-f90-interfaces.h.sh
mv openmpi-1.4.2/ompi/mpi/f90/scripts/mpi_sizeof.f90.sh{,.original}
sed -e '25,84d' \
   -e '85s/^.*$/allranks="0 $ranks"/' \
   -e '87s/\$ranks/$allranks/' \
   -e $'88{p;s/^.*$/  case "$rank" in  0)  dim=\'\'  ;  esac/;}' \
   -e $'89,95{s/dim=\'/dim=\', dimension(/;s/1,/:,/g;s/\*\'/:)\'/;}' \
   -e '97,110d' \
   -e '118s/, dimension(\${dim})/${dim}/' \
   -e '133s/, dimension(\${dim})/${dim}/' \
   -e '148s/, dimension(\${dim})/${dim}/' \
   openmpi-1.4.2/ompi/mpi/f90/scripts/mpi_sizeof.f90.sh.original \
   >openmpi-1.4.2/ompi/mpi/f90/scripts/mpi_sizeof.f90.sh
chmod +x openmpi-1.4.2/ompi/mpi/f90/scripts/mpi_sizeof.f90.sh

