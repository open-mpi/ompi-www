<?
$subject_val = "Re: [OMPI users] Strange IO issues in MPI_Finalize";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 18 15:42:49 2013" -->
<!-- isoreceived="20130318194249" -->
<!-- sent="Mon, 18 Mar 2013 19:42:44 +0000" -->
<!-- isosent="20130318194244" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Strange IO issues in MPI_Finalize" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC43FADD4F_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="C56124A4-4403-405C-A360-DAE9D37D6840_at_ornl.gov" -->
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
<strong>Date:</strong> 2013-03-18 15:42:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21553.php">Jeremiah Willcock: "[OMPI users] Minor bug: invalid values for opal_signal MCA parameter cause internal error"</a>
<li><strong>Previous message:</strong> <a href="21551.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi java binding errors"</a>
<li><strong>In reply to:</strong> <a href="21506.php">Smith, Brian E.: "[OMPI users] Strange IO issues in MPI_Finalize"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21555.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Strange IO issues in MPI_Finalize"</a>
<li><strong>Reply:</strong> <a href="21555.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Strange IO issues in MPI_Finalize"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I *believe* that this means that you didn't MPI_File_close a file.
<br>
<p>We're not giving a very helpful error message here (it's downright misleading, actually), but I'm pretty sure that this is the case.
<br>
<p><p>On Mar 6, 2013, at 10:28 AM, &quot;Smith, Brian E.&quot; &lt;smithbe_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; HI all,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have some code that uses parallel netCDF. I've run successfully on Titan (using the Cray MPICH derivative) and on my laptop (also running MPICH). However, when I run on one of our clusters running OMPI, the code barfs in MPI_Finalize() and doesn't write the complete/expected output files:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [:17472] *** An error occurred in MPI_File_set_errhandler
</span><br>
<span class="quotelev1">&gt; [:17472] *** on a NULL communicator
</span><br>
<span class="quotelev1">&gt; [:17472] *** Unknown error
</span><br>
<span class="quotelev1">&gt; [:17472] *** MPI_ERRORS_ARE_FATAL: your MPI job will now abort
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; An MPI process is aborting at a time when it cannot guarantee that all
</span><br>
<span class="quotelev1">&gt; of its peer processes in the job will be killed properly.  You should
</span><br>
<span class="quotelev1">&gt; double check that everything has shut down cleanly.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Reason:     After MPI_FINALIZE was invoked
</span><br>
<span class="quotelev1">&gt;  Local host:
</span><br>
<span class="quotelev1">&gt;  PID:        17472
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The stacks are:
</span><br>
<span class="quotelev1">&gt; PMPI_Finalize (pfinalize.c:46)
</span><br>
<span class="quotelev1">&gt; 	ompi_mpi_finalize (ompi_mpi_finalize.c:272)
</span><br>
<span class="quotelev1">&gt; 		ompi_file_finalize (file.c:196)
</span><br>
<span class="quotelev1">&gt; 			opal_obj_run_destructors (opal_object.h:448)
</span><br>
<span class="quotelev1">&gt; 				file_destructor (file.c:273)
</span><br>
<span class="quotelev1">&gt; 					mca_io_romio_file_close (io_romio_file_open.c:59)
</span><br>
<span class="quotelev1">&gt; 						PMPI_File_set_errhandler (pfile_set_errhandler.c:47)
</span><br>
<span class="quotelev1">&gt; 							ompi_mpi_errors_are_fatal_comm_handler (errhandler_predefined.c:52)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is with OMPI 1.6.2 It is pnetCDF 1.3.1 on all 3 platforms.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The code appears to have the right participants opening/closing the right files on the right communicators (a mixture of rank 0s on subcomms opening across their subcomms and some nodes opening on MPI_COMM_SELF). It looks to me like some IO is getting delayed until MPI_Finalize() suggesting perhaps I missed a wait() or close() pnetCDF call. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I don't necessarily think this is a bug in OMPI, I just don't know where to start looking in my code, since it is working fine on the two different versions of MPICH.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks.
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
<li><strong>Next message:</strong> <a href="21553.php">Jeremiah Willcock: "[OMPI users] Minor bug: invalid values for opal_signal MCA parameter cause internal error"</a>
<li><strong>Previous message:</strong> <a href="21551.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi java binding errors"</a>
<li><strong>In reply to:</strong> <a href="21506.php">Smith, Brian E.: "[OMPI users] Strange IO issues in MPI_Finalize"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21555.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Strange IO issues in MPI_Finalize"</a>
<li><strong>Reply:</strong> <a href="21555.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Strange IO issues in MPI_Finalize"</a>
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
