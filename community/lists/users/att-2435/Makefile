FC      =  ifort
MPIFC   =  mpif77
FFLAGS  = -r8 -O3 -convert big_endian -assume byterecl
LDFLAGS = 
LIBMPI  = 

explicit_read: explicit_read.f 
	$(MPIFC) $(FFLAGS) $(LDFLAGS) explicit_read.f \
        -o explicit_read $(LIBMPI)

explicit_write: explicit_write.f 
	$(MPIFC) $(FFLAGS) $(LDFLAGS) explicit_write.f \
        -o explicit_write $(LIBMPI)

