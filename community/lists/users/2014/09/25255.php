<?
$subject_val = "Re: [OMPI users] compilation problem with ifort";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep  3 17:51:43 2014" -->
<!-- isoreceived="20140903215143" -->
<!-- sent="Thu, 4 Sep 2014 00:51:42 +0300" -->
<!-- isosent="20140903215142" -->
<!-- name="Elio Physics" -->
<!-- email="elio-physics_at_[hidden]" -->
<!-- subject="Re: [OMPI users] compilation problem with ifort" -->
<!-- id="BLU179-W26E114561FD593C87DFEC7EAC40_at_phx.gbl" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="54078B90.5000903_at_ldeo.columbia.edu" -->
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
<strong>From:</strong> Elio Physics (<em>elio-physics_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-03 17:51:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25256.php">Gus Correa: "Re: [OMPI users] compilation problem with ifort"</a>
<li><strong>Previous message:</strong> <a href="25254.php">Gus Correa: "Re: [OMPI users] compilation problem with ifort"</a>
<li><strong>In reply to:</strong> <a href="25254.php">Gus Correa: "Re: [OMPI users] compilation problem with ifort"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25256.php">Gus Correa: "Re: [OMPI users] compilation problem with ifort"</a>
<li><strong>Reply:</strong> <a href="25256.php">Gus Correa: "Re: [OMPI users] compilation problem with ifort"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This was the first error yes. What do you mean other files are missing? Do you mean the atom.o, basic_algebra_routines.o.......? Well the f90 files present in the src subdirectory start from a2f.90 , allocate_epwq.o,...and so on... I am not also sure why there is that slash &quot;\&quot; just before the &quot;a2f.o&quot;.... Is there a way to know what is going on? I mean what are the first steps?
<br>
Thank you
<br>
<p>ELIO MOUJAESUniveristy of RondoniaBrazil
<br>
<p><span class="quotelev1">&gt; Date: Wed, 3 Sep 2014 17:43:44 -0400
</span><br>
<span class="quotelev1">&gt; From: gus_at_[hidden]
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] compilation problem with ifort
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Was the error that you listed the *first* error?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Apparently various object files are missing from the
</span><br>
<span class="quotelev1">&gt; ../../Modules/ directory, and were not compiled,
</span><br>
<span class="quotelev1">&gt; suggesting something is amiss even before the
</span><br>
<span class="quotelev1">&gt; compilation of the executable (epw.x).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 09/03/2014 05:20 PM, Elio Physics wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Dear all,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I am really a beginner in Fortran and Linux. I was trying to compile a
</span><br>
<span class="quotelev2">&gt; &gt; software (EPW). Everything was going fine (or maybe this is what I think):
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; mpif90 -o epw.x ../../Modules/atom.o
</span><br>
<span class="quotelev2">&gt; &gt; ../../Modules/basic_algebra_routines.o ../../Modules/cell_base.o
</span><br>
<span class="quotelev2">&gt; &gt; ../../Modules/check_stop.o ../../Modules/clocks.o
</span><br>
<span class="quotelev2">&gt; &gt; ../../Modules/constraints_module.o ../../Modules/control_flags.o
</span><br>
<span class="quotelev2">&gt; &gt; ../../Modules/descriptors.o ../../Modules/dspev_drv.o
</span><br>
<span class="quotelev2">&gt; &gt; ../../Modules/electrons_base.o ../../Modules/error_handler.o
</span><br>
<span class="quotelev2">&gt; &gt; ../../Modules/exc_t.o ../../Modules/fft_base.o
</span><br>
<span class="quotelev2">&gt; &gt; ../../Modules/fft_parallel.o ../../Modules/fft_scalar.o
</span><br>
<span class="quotelev2">&gt; &gt; ../../Modules/fft_types.o ../../Modules/functionals.o
</span><br>
<span class="quotelev2">&gt; &gt; ../../Modules/input_parameters.o ../../Modules/io_files.o
</span><br>
<span class="quotelev2">&gt; &gt; ../../Modules/io_global.o ../../Modules/ions_base.o ../../Modules/kind.o
</span><br>
<span class="quotelev2">&gt; &gt; ../../Modules/metagga.o
</span><br>
<span class="quotelev2">&gt; &gt; ..................................................\ a2f.o
</span><br>
<span class="quotelev2">&gt; &gt; allocate_epwq.o bcast_epw_input.o broyden.o close_epw.o constants_epw.o
</span><br>
<span class="quotelev2">&gt; &gt; create_mesh.o create_mesh_mp.o createkmap.o dasmio.o deallocate_epw.o
</span><br>
<span class="quotelev2">&gt; &gt; deallocate_eliashberg.o distribution.o dmebloch2wan.o dmewan2bloch.o
</span><br>
<span class="quotelev2">&gt; &gt; dvanqq2.o dvqpsi_us3.o dvqpsi_us_only3.o dynbloch2wan.o dynwan2bloch.o
</span><br>
<span class="quotelev2">&gt; &gt; eliashberg.o
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Then I get the following error:
</span><br>
<span class="quotelev2">&gt; &gt; ifort: error #10236: File not found:  'a2f.o'
</span><br>
<span class="quotelev2">&gt; &gt; ifort: error #10236: File not found:  'allocate_epwq.o'
</span><br>
<span class="quotelev2">&gt; &gt; ifort: error #10236: File not found:  'bcast_epw_input.o'
</span><br>
<span class="quotelev2">&gt; &gt; ifort: error #10236: File not found:  'broyden.o'
</span><br>
<span class="quotelev2">&gt; &gt; ifort: error #10236: File not found:  'close_epw.o'
</span><br>
<span class="quotelev2">&gt; &gt; ifort: error #10236: File not found:  'constants_epw.o'
</span><br>
<span class="quotelev2">&gt; &gt; ifort: error #10236: File not found:  'create_mesh.o'
</span><br>
<span class="quotelev2">&gt; &gt; ifort: error #10236: File not found:  'create_mesh_mp.o'
</span><br>
<span class="quotelev2">&gt; &gt; ifort: error #10236: File not found:  'createkmap.o'
</span><br>
<span class="quotelev2">&gt; &gt; ifort: error #10236: File not found:  'dasmio.o'
</span><br>
<span class="quotelev2">&gt; &gt; ifort: error #10236: File not found:  'deallocate_epw.o'
</span><br>
<span class="quotelev2">&gt; &gt; ifort: error #10236: File not found:  'deallocate_eliashberg.o'
</span><br>
<span class="quotelev2">&gt; &gt; ifort: error #10236: File not found:  'distribution.o'
</span><br>
<span class="quotelev2">&gt; &gt; ifort: error #10236: File not found:  'dmebloch2wan.o'
</span><br>
<span class="quotelev2">&gt; &gt; ifort: error #10236: File not found:  'dmewan2bloch.o'
</span><br>
<span class="quotelev2">&gt; &gt; ifort: error #10236: File not found:  'dvanqq2.o'
</span><br>
<span class="quotelev2">&gt; &gt; ifort: error #10236: File not found:  'dvqpsi_us3.o'
</span><br>
<span class="quotelev2">&gt; &gt; ifort: error #10236: File not found:  'dvqpsi_us_only3.o'
</span><br>
<span class="quotelev2">&gt; &gt; ifort: error #10236: File not found:  'dynbloch2wan.o'
</span><br>
<span class="quotelev2">&gt; &gt; ifort: error #10236: File not found:  'dynwan2bloch.o'
</span><br>
<span class="quotelev2">&gt; &gt; ifort: error #10236: File not found:  'eliashberg.o'
</span><br>
<span class="quotelev2">&gt; &gt; ifort: error #10236: File not found:  'eliashbergcom.
</span><br>
<span class="quotelev2">&gt; &gt; make[1]: *** [epw] Error 1
</span><br>
<span class="quotelev2">&gt; &gt; make[1]: Leaving directory
</span><br>
<span class="quotelev2">&gt; &gt; `/home_cluster/fis718/eliemouj/espresso-4.0.3/EPW-3.0.0/src'
</span><br>
<span class="quotelev2">&gt; &gt; make: *** [epw] Error 2
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I reckon that there is an error in the Makefile. However the Makefile
</span><br>
<span class="quotelev2">&gt; &gt; content is just:
</span><br>
<span class="quotelev2">&gt; &gt; &quot;default: epw
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; all: epw
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; epw:
</span><br>
<span class="quotelev2">&gt; &gt;          (cd src ; make )
</span><br>
<span class="quotelev2">&gt; &gt;          (cd bin ; ln -fs ../src/epw.x . )
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; clean:
</span><br>
<span class="quotelev2">&gt; &gt;          cd src ; rm -f *.o *.mod *.F90 *~
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; release:
</span><br>
<span class="quotelev2">&gt; &gt;          cd ../ ; cp -r EPW EPW-release; cd EPW-release ; \
</span><br>
<span class="quotelev2">&gt; &gt;          rm -f src/*.o src/*.mod src/*.F90 src/*~ ; \
</span><br>
<span class="quotelev2">&gt; &gt;          rm bin/*.x ; \
</span><br>
<span class="quotelev2">&gt; &gt;          rm -rf examples/*/epw/out/* examples/*/epw/tmp/* \
</span><br>
<span class="quotelev2">&gt; &gt;           examples/*/phonons/out/* examples/*/phonons/tmp/* \
</span><br>
<span class="quotelev2">&gt; &gt;           examples/*/phonons/save/* ; \
</span><br>
<span class="quotelev2">&gt; &gt;          rm -rf .svn */.svn */*/*.svn */*/*/*.svn */*/*/*/*.svn
</span><br>
<span class="quotelev2">&gt; &gt;          cd .. ; tar cfz EPW/EPW-release.tgz EPW-release ; \
</span><br>
<span class="quotelev2">&gt; &gt;          rm -rf EPW-release ; cd EPW &quot;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Please can anyone help me and guide me how to fix this error step by
</span><br>
<span class="quotelev2">&gt; &gt; step as I am no FOrtran or Linux professional
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Regards
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ELIO MOUJAES
</span><br>
<span class="quotelev2">&gt; &gt; University of Rondonia
</span><br>
<span class="quotelev2">&gt; &gt; Brazil
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/09/25253.php">http://www.open-mpi.org/community/lists/users/2014/09/25253.php</a>
</span><br>
<span class="quotelev2">&gt; &gt;
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/09/25254.php">http://www.open-mpi.org/community/lists/users/2014/09/25254.php</a>
</span><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25255/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25256.php">Gus Correa: "Re: [OMPI users] compilation problem with ifort"</a>
<li><strong>Previous message:</strong> <a href="25254.php">Gus Correa: "Re: [OMPI users] compilation problem with ifort"</a>
<li><strong>In reply to:</strong> <a href="25254.php">Gus Correa: "Re: [OMPI users] compilation problem with ifort"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25256.php">Gus Correa: "Re: [OMPI users] compilation problem with ifort"</a>
<li><strong>Reply:</strong> <a href="25256.php">Gus Correa: "Re: [OMPI users] compilation problem with ifort"</a>
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
