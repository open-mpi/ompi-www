<?
$subject_val = "Re: [OMPI users] Strange IO issues in MPI_Finalize";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 18 16:16:06 2013" -->
<!-- isoreceived="20130318201606" -->
<!-- sent="Mon, 18 Mar 2013 20:16:01 +0000" -->
<!-- isosent="20130318201601" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Strange IO issues in MPI_Finalize" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC43FAE347_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC43FADD4F_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Strange IO issues in MPI_Finalize<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-03-18 16:16:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21556.php">Francisco Javier Garcia Blas: "[OMPI users] Call For Papers: EuroMPI 2013 Paper. Last days for submissions. Deadline: March 29th, 2013"</a>
<li><strong>Previous message:</strong> <a href="21554.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi java binding errors"</a>
<li><strong>In reply to:</strong> <a href="21552.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Strange IO issues in MPI_Finalize"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brian --
<br>
<p>While I was on a plane today, I took a whack at making OMPI behave better when you forget to MPI_File_close() a file.  Can you try this patch (should apply cleanly to OMPI trunk, v1.6, or v1.7):
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/changeset/28177">https://svn.open-mpi.org/trac/ompi/changeset/28177</a>
<br>
<p><p><p>On Mar 18, 2013, at 12:42 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I *believe* that this means that you didn't MPI_File_close a file.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We're not giving a very helpful error message here (it's downright misleading, actually), but I'm pretty sure that this is the case.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mar 6, 2013, at 10:28 AM, &quot;Smith, Brian E.&quot; &lt;smithbe_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; HI all,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I have some code that uses parallel netCDF. I've run successfully on Titan (using the Cray MPICH derivative) and on my laptop (also running MPICH). However, when I run on one of our clusters running OMPI, the code barfs in MPI_Finalize() and doesn't write the complete/expected output files:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; [:17472] *** An error occurred in MPI_File_set_errhandler
</span><br>
<span class="quotelev2">&gt;&gt; [:17472] *** on a NULL communicator
</span><br>
<span class="quotelev2">&gt;&gt; [:17472] *** Unknown error
</span><br>
<span class="quotelev2">&gt;&gt; [:17472] *** MPI_ERRORS_ARE_FATAL: your MPI job will now abort
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; An MPI process is aborting at a time when it cannot guarantee that all
</span><br>
<span class="quotelev2">&gt;&gt; of its peer processes in the job will be killed properly.  You should
</span><br>
<span class="quotelev2">&gt;&gt; double check that everything has shut down cleanly.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Reason:     After MPI_FINALIZE was invoked
</span><br>
<span class="quotelev2">&gt;&gt; Local host:
</span><br>
<span class="quotelev2">&gt;&gt; PID:        17472
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The stacks are:
</span><br>
<span class="quotelev2">&gt;&gt; PMPI_Finalize (pfinalize.c:46)
</span><br>
<span class="quotelev2">&gt;&gt; 	ompi_mpi_finalize (ompi_mpi_finalize.c:272)
</span><br>
<span class="quotelev2">&gt;&gt; 		ompi_file_finalize (file.c:196)
</span><br>
<span class="quotelev2">&gt;&gt; 			opal_obj_run_destructors (opal_object.h:448)
</span><br>
<span class="quotelev2">&gt;&gt; 				file_destructor (file.c:273)
</span><br>
<span class="quotelev2">&gt;&gt; 					mca_io_romio_file_close (io_romio_file_open.c:59)
</span><br>
<span class="quotelev2">&gt;&gt; 						PMPI_File_set_errhandler (pfile_set_errhandler.c:47)
</span><br>
<span class="quotelev2">&gt;&gt; 							ompi_mpi_errors_are_fatal_comm_handler (errhandler_predefined.c:52)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This is with OMPI 1.6.2 It is pnetCDF 1.3.1 on all 3 platforms.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The code appears to have the right participants opening/closing the right files on the right communicators (a mixture of rank 0s on subcomms opening across their subcomms and some nodes opening on MPI_COMM_SELF). It looks to me like some IO is getting delayed until MPI_Finalize() suggesting perhaps I missed a wait() or close() pnetCDF call. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I don't necessarily think this is a bug in OMPI, I just don't know where to start looking in my code, since it is working fine on the two different versions of MPICH.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21556.php">Francisco Javier Garcia Blas: "[OMPI users] Call For Papers: EuroMPI 2013 Paper. Last days for submissions. Deadline: March 29th, 2013"</a>
<li><strong>Previous message:</strong> <a href="21554.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi java binding errors"</a>
<li><strong>In reply to:</strong> <a href="21552.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Strange IO issues in MPI_Finalize"</a>
<!-- nextthread="start" -->
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
