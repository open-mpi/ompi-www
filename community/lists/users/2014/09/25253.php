<?
$subject_val = "[OMPI users] compilation problem with ifort";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep  3 17:20:51 2014" -->
<!-- isoreceived="20140903212051" -->
<!-- sent="Thu, 4 Sep 2014 00:20:51 +0300" -->
<!-- isosent="20140903212051" -->
<!-- name="Elio Physics" -->
<!-- email="elio-physics_at_[hidden]" -->
<!-- subject="[OMPI users] compilation problem with ifort" -->
<!-- id="BLU179-W13FE2D253083E5B858645EEAC40_at_phx.gbl" -->
<!-- charset="iso-8859-1" -->
<!-- expires="-1" -->
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<p class="headers">
<strong>Subject:</strong> [OMPI users] compilation problem with ifort<br>
<strong>From:</strong> Elio Physics (<em>elio-physics_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-03 17:20:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25254.php">Gus Correa: "Re: [OMPI users] compilation problem with ifort"</a>
<li><strong>Previous message:</strong> <a href="25252.php">Ralph Castain: "Re: [OMPI users] `return EXIT_FAILURE;` triggers error message"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25254.php">Gus Correa: "Re: [OMPI users] compilation problem with ifort"</a>
<li><strong>Reply:</strong> <a href="25254.php">Gus Correa: "Re: [OMPI users] compilation problem with ifort"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear all,
<br>
I am really a beginner in Fortran and Linux. I was trying to compile a software (EPW). Everything was going fine (or maybe this is what I think):
<br>
mpif90 -o epw.x ../../Modules/atom.o ../../Modules/basic_algebra_routines.o ../../Modules/cell_base.o ../../Modules/check_stop.o ../../Modules/clocks.o ../../Modules/constraints_module.o ../../Modules/control_flags.o ../../Modules/descriptors.o ../../Modules/dspev_drv.o ../../Modules/electrons_base.o ../../Modules/error_handler.o ../../Modules/exc_t.o ../../Modules/fft_base.o ../../Modules/fft_parallel.o ../../Modules/fft_scalar.o ../../Modules/fft_types.o ../../Modules/functionals.o ../../Modules/input_parameters.o ../../Modules/io_files.o ../../Modules/io_global.o ../../Modules/ions_base.o ../../Modules/kind.o ../../Modules/metagga.o ..................................................\ a2f.o allocate_epwq.o bcast_epw_input.o broyden.o close_epw.o constants_epw.o create_mesh.o create_mesh_mp.o createkmap.o dasmio.o deallocate_epw.o deallocate_eliashberg.o distribution.o dmebloch2wan.o dmewan2bloch.o dvanqq2.o dvqpsi_us3.o dvqpsi_us_only3.o dynbloch2wan.o dynwan2bloch.o eliashberg.o 
<br>
Then I get the following error:ifort: error #10236: File not found:  'a2f.o'ifort: error #10236: File not found:  'allocate_epwq.o'ifort: error #10236: File not found:  'bcast_epw_input.o'ifort: error #10236: File not found:  'broyden.o'ifort: error #10236: File not found:  'close_epw.o'ifort: error #10236: File not found:  'constants_epw.o'ifort: error #10236: File not found:  'create_mesh.o'ifort: error #10236: File not found:  'create_mesh_mp.o'ifort: error #10236: File not found:  'createkmap.o'ifort: error #10236: File not found:  'dasmio.o'ifort: error #10236: File not found:  'deallocate_epw.o'ifort: error #10236: File not found:  'deallocate_eliashberg.o'ifort: error #10236: File not found:  'distribution.o'ifort: error #10236: File not found:  'dmebloch2wan.o'ifort: error #10236: File not found:  'dmewan2bloch.o'ifort: error #10236: File not found:  'dvanqq2.o'ifort: error #10236: File not found:  'dvqpsi_us3.o'ifort: error #10236: File not found:  'dvqpsi_us_only3.o'ifort: error #10236: File not found:  'dynbloch2wan.o'ifort: error #10236: File not found:  'dynwan2bloch.o'ifort: error #10236: File not found:  'eliashberg.o'ifort: error #10236: File not found:  'eliashbergcom.make[1]: *** [epw] Error 1make[1]: Leaving directory `/home_cluster/fis718/eliemouj/espresso-4.0.3/EPW-3.0.0/src'make: *** [epw] Error 2
<br>
I reckon that there is an error in the Makefile. However the Makefile content is just:&quot;default: epw
<br>
all: epw
<br>
epw:        (cd src ; make )        (cd bin ; ln -fs ../src/epw.x . )
<br>
clean:        cd src ; rm -f *.o *.mod *.F90 *~
<br>
release:        cd ../ ; cp -r EPW EPW-release; cd EPW-release ; \        rm -f src/*.o src/*.mod src/*.F90 src/*~ ; \        rm bin/*.x ; \        rm -rf examples/*/epw/out/* examples/*/epw/tmp/* \         examples/*/phonons/out/* examples/*/phonons/tmp/* \         examples/*/phonons/save/* ; \        rm -rf .svn */.svn */*/*.svn */*/*/*.svn */*/*/*/*.svn        cd .. ; tar cfz EPW/EPW-release.tgz EPW-release ; \        rm -rf EPW-release ; cd EPW &quot;
<br>
Please can anyone help me and guide me how to fix this error step by step as I am no FOrtran or Linux professional
<br>
Regards
<br>
ELIO MOUJAESUniversity of Rondonia Brazil 
<br>
<p><p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25253/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25254.php">Gus Correa: "Re: [OMPI users] compilation problem with ifort"</a>
<li><strong>Previous message:</strong> <a href="25252.php">Ralph Castain: "Re: [OMPI users] `return EXIT_FAILURE;` triggers error message"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25254.php">Gus Correa: "Re: [OMPI users] compilation problem with ifort"</a>
<li><strong>Reply:</strong> <a href="25254.php">Gus Correa: "Re: [OMPI users] compilation problem with ifort"</a>
<!-- reply="end" -->
</ul>
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<!-- trailer="footer" -->
<? include("../../include/msg-footer.inc") ?>
