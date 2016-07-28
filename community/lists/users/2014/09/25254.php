<?
$subject_val = "Re: [OMPI users] compilation problem with ifort";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep  3 17:41:12 2014" -->
<!-- isoreceived="20140903214112" -->
<!-- sent="Wed, 03 Sep 2014 17:43:44 -0400" -->
<!-- isosent="20140903214344" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] compilation problem with ifort" -->
<!-- id="54078B90.5000903_at_ldeo.columbia.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="BLU179-W13FE2D253083E5B858645EEAC40_at_phx.gbl" -->
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
<strong>Subject:</strong> Re: [OMPI users] compilation problem with ifort<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-03 17:43:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25255.php">Elio Physics: "Re: [OMPI users] compilation problem with ifort"</a>
<li><strong>Previous message:</strong> <a href="25253.php">Elio Physics: "[OMPI users] compilation problem with ifort"</a>
<li><strong>In reply to:</strong> <a href="25253.php">Elio Physics: "[OMPI users] compilation problem with ifort"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25255.php">Elio Physics: "Re: [OMPI users] compilation problem with ifort"</a>
<li><strong>Reply:</strong> <a href="25255.php">Elio Physics: "Re: [OMPI users] compilation problem with ifort"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Was the error that you listed the *first* error?
<br>
<p>Apparently various object files are missing from the
<br>
../../Modules/ directory, and were not compiled,
<br>
suggesting something is amiss even before the
<br>
compilation of the executable (epw.x).
<br>
<p>On 09/03/2014 05:20 PM, Elio Physics wrote:
<br>
<span class="quotelev1">&gt; Dear all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am really a beginner in Fortran and Linux. I was trying to compile a
</span><br>
<span class="quotelev1">&gt; software (EPW). Everything was going fine (or maybe this is what I think):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpif90 -o epw.x ../../Modules/atom.o
</span><br>
<span class="quotelev1">&gt; ../../Modules/basic_algebra_routines.o ../../Modules/cell_base.o
</span><br>
<span class="quotelev1">&gt; ../../Modules/check_stop.o ../../Modules/clocks.o
</span><br>
<span class="quotelev1">&gt; ../../Modules/constraints_module.o ../../Modules/control_flags.o
</span><br>
<span class="quotelev1">&gt; ../../Modules/descriptors.o ../../Modules/dspev_drv.o
</span><br>
<span class="quotelev1">&gt; ../../Modules/electrons_base.o ../../Modules/error_handler.o
</span><br>
<span class="quotelev1">&gt; ../../Modules/exc_t.o ../../Modules/fft_base.o
</span><br>
<span class="quotelev1">&gt; ../../Modules/fft_parallel.o ../../Modules/fft_scalar.o
</span><br>
<span class="quotelev1">&gt; ../../Modules/fft_types.o ../../Modules/functionals.o
</span><br>
<span class="quotelev1">&gt; ../../Modules/input_parameters.o ../../Modules/io_files.o
</span><br>
<span class="quotelev1">&gt; ../../Modules/io_global.o ../../Modules/ions_base.o ../../Modules/kind.o
</span><br>
<span class="quotelev1">&gt; ../../Modules/metagga.o
</span><br>
<span class="quotelev1">&gt; ..................................................\ a2f.o
</span><br>
<span class="quotelev1">&gt; allocate_epwq.o bcast_epw_input.o broyden.o close_epw.o constants_epw.o
</span><br>
<span class="quotelev1">&gt; create_mesh.o create_mesh_mp.o createkmap.o dasmio.o deallocate_epw.o
</span><br>
<span class="quotelev1">&gt; deallocate_eliashberg.o distribution.o dmebloch2wan.o dmewan2bloch.o
</span><br>
<span class="quotelev1">&gt; dvanqq2.o dvqpsi_us3.o dvqpsi_us_only3.o dynbloch2wan.o dynwan2bloch.o
</span><br>
<span class="quotelev1">&gt; eliashberg.o
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Then I get the following error:
</span><br>
<span class="quotelev1">&gt; ifort: error #10236: File not found:  'a2f.o'
</span><br>
<span class="quotelev1">&gt; ifort: error #10236: File not found:  'allocate_epwq.o'
</span><br>
<span class="quotelev1">&gt; ifort: error #10236: File not found:  'bcast_epw_input.o'
</span><br>
<span class="quotelev1">&gt; ifort: error #10236: File not found:  'broyden.o'
</span><br>
<span class="quotelev1">&gt; ifort: error #10236: File not found:  'close_epw.o'
</span><br>
<span class="quotelev1">&gt; ifort: error #10236: File not found:  'constants_epw.o'
</span><br>
<span class="quotelev1">&gt; ifort: error #10236: File not found:  'create_mesh.o'
</span><br>
<span class="quotelev1">&gt; ifort: error #10236: File not found:  'create_mesh_mp.o'
</span><br>
<span class="quotelev1">&gt; ifort: error #10236: File not found:  'createkmap.o'
</span><br>
<span class="quotelev1">&gt; ifort: error #10236: File not found:  'dasmio.o'
</span><br>
<span class="quotelev1">&gt; ifort: error #10236: File not found:  'deallocate_epw.o'
</span><br>
<span class="quotelev1">&gt; ifort: error #10236: File not found:  'deallocate_eliashberg.o'
</span><br>
<span class="quotelev1">&gt; ifort: error #10236: File not found:  'distribution.o'
</span><br>
<span class="quotelev1">&gt; ifort: error #10236: File not found:  'dmebloch2wan.o'
</span><br>
<span class="quotelev1">&gt; ifort: error #10236: File not found:  'dmewan2bloch.o'
</span><br>
<span class="quotelev1">&gt; ifort: error #10236: File not found:  'dvanqq2.o'
</span><br>
<span class="quotelev1">&gt; ifort: error #10236: File not found:  'dvqpsi_us3.o'
</span><br>
<span class="quotelev1">&gt; ifort: error #10236: File not found:  'dvqpsi_us_only3.o'
</span><br>
<span class="quotelev1">&gt; ifort: error #10236: File not found:  'dynbloch2wan.o'
</span><br>
<span class="quotelev1">&gt; ifort: error #10236: File not found:  'dynwan2bloch.o'
</span><br>
<span class="quotelev1">&gt; ifort: error #10236: File not found:  'eliashberg.o'
</span><br>
<span class="quotelev1">&gt; ifort: error #10236: File not found:  'eliashbergcom.
</span><br>
<span class="quotelev1">&gt; make[1]: *** [epw] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory
</span><br>
<span class="quotelev1">&gt; `/home_cluster/fis718/eliemouj/espresso-4.0.3/EPW-3.0.0/src'
</span><br>
<span class="quotelev1">&gt; make: *** [epw] Error 2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I reckon that there is an error in the Makefile. However the Makefile
</span><br>
<span class="quotelev1">&gt; content is just:
</span><br>
<span class="quotelev1">&gt; &quot;default: epw
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; all: epw
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; epw:
</span><br>
<span class="quotelev1">&gt;          (cd src ; make )
</span><br>
<span class="quotelev1">&gt;          (cd bin ; ln -fs ../src/epw.x . )
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; clean:
</span><br>
<span class="quotelev1">&gt;          cd src ; rm -f *.o *.mod *.F90 *~
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; release:
</span><br>
<span class="quotelev1">&gt;          cd ../ ; cp -r EPW EPW-release; cd EPW-release ; \
</span><br>
<span class="quotelev1">&gt;          rm -f src/*.o src/*.mod src/*.F90 src/*~ ; \
</span><br>
<span class="quotelev1">&gt;          rm bin/*.x ; \
</span><br>
<span class="quotelev1">&gt;          rm -rf examples/*/epw/out/* examples/*/epw/tmp/* \
</span><br>
<span class="quotelev1">&gt;           examples/*/phonons/out/* examples/*/phonons/tmp/* \
</span><br>
<span class="quotelev1">&gt;           examples/*/phonons/save/* ; \
</span><br>
<span class="quotelev1">&gt;          rm -rf .svn */.svn */*/*.svn */*/*/*.svn */*/*/*/*.svn
</span><br>
<span class="quotelev1">&gt;          cd .. ; tar cfz EPW/EPW-release.tgz EPW-release ; \
</span><br>
<span class="quotelev1">&gt;          rm -rf EPW-release ; cd EPW &quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please can anyone help me and guide me how to fix this error step by
</span><br>
<span class="quotelev1">&gt; step as I am no FOrtran or Linux professional
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ELIO MOUJAES
</span><br>
<span class="quotelev1">&gt; University of Rondonia
</span><br>
<span class="quotelev1">&gt; Brazil
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/09/25253.php">http://www.open-mpi.org/community/lists/users/2014/09/25253.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25255.php">Elio Physics: "Re: [OMPI users] compilation problem with ifort"</a>
<li><strong>Previous message:</strong> <a href="25253.php">Elio Physics: "[OMPI users] compilation problem with ifort"</a>
<li><strong>In reply to:</strong> <a href="25253.php">Elio Physics: "[OMPI users] compilation problem with ifort"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25255.php">Elio Physics: "Re: [OMPI users] compilation problem with ifort"</a>
<li><strong>Reply:</strong> <a href="25255.php">Elio Physics: "Re: [OMPI users] compilation problem with ifort"</a>
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
