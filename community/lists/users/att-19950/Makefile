# >>> DESIGNED FOR GMAKE <<<


FC=mpif90

FFLAGS= -O -fopenmp


hangs : hangs.o
	$(FC) $(FFLAGS) hangs.o -o $@

%.o: %.F90
	$(FC) $(FFLAGS) $(INCLUDE) -c $<

clean:
	rm *.$(ext) *.o *.mod

