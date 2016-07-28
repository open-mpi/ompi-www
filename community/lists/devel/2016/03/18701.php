<?
$subject_val = "Re: [OMPI devel] MPI Error";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 16 03:02:04 2016" -->
<!-- isoreceived="20160316070204" -->
<!-- sent="Wed, 16 Mar 2016 16:02:00 +0900" -->
<!-- isosent="20160316070200" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI Error" -->
<!-- id="56E904E8.7060103_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CALimjmUkLdbnVm2p+-fp7SAMJ1=pM6s+P6a0UFG=SG21CtLudA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] MPI Error<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-16 03:02:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18702.php">Howard: "Re: [OMPI devel] RFC: RML change to multi-select"</a>
<li><strong>Previous message:</strong> <a href="18700.php">Dominic Kedelty: "Re: [OMPI devel] MPI Error"</a>
<li><strong>In reply to:</strong> <a href="18700.php">Dominic Kedelty: "Re: [OMPI devel] MPI Error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18719.php">Dominic Kedelty: "Re: [OMPI devel] MPI Error"</a>
<li><strong>Reply:</strong> <a href="18719.php">Dominic Kedelty: "Re: [OMPI devel] MPI Error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dominic,
<br>
<p>at first, you might try to add
<br>
call MPI_Barrier(comm,ierr)
<br>
between
<br>
<p>&nbsp;&nbsp;&nbsp;if (file_is_there .and. irank.eq.iroot) call 
<br>
MPI_FILE_DELETE(file,MPI_INFO_NULL,ierr)
<br>
<p>and
<br>
<p>&nbsp;&nbsp;&nbsp;call 
<br>
MPI_FILE_OPEN(comm,file,IOR(MPI_MODE_WRONLY,MPI_MODE_CREATE),MPI_INFO_NULL,iunit,ierr)
<br>
<p>/* there might me a race condition, i am not sure about that */
<br>
<p><p>fwiw, the
<br>
<p>STOP A configuration file is required
<br>
<p>error message is not coming from OpenMPI.
<br>
it might be indirectly triggered by an ompio bug/limitation, or even a 
<br>
bug in your application.
<br>
<p>did you get your application work with an other flavor of OpenMPI ?
<br>
e.g. are you reporting an OpenMPI bug ?
<br>
or are you asking some help with your application (the bug could either 
<br>
be in your code or in OpenMPI, and you do not know for sure)
<br>
<p>i am a bit surprised you are using the same fileview_node type with both 
<br>
MPI_INTEGER and MPI_REAL_SP, but since they should be the same size, 
<br>
that might not be an issue.
<br>
<p>the subroutine depends on too many external parameters
<br>
(nnodes_, fileview_node, ncells_hexa, ncells_hexa_, unstr2str, ...)
<br>
so writing a simple reproducer might not be trivial.
<br>
<p>i recommend you first write a self contained program that can be 
<br>
evidenced to reproduce the issue,
<br>
and then i will investigate that. for that, you might want to dump the 
<br>
array sizes and the description of fileview_node in your application, 
<br>
and then hard code them into your self contained program.
<br>
also how many nodes/tasks are you running and what filesystem are you 
<br>
running on ?
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 3/16/2016 3:05 PM, Dominic Kedelty wrote:
<br>
<span class="quotelev1">&gt; Gilles,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I do not have the latest mpich available. I tested using openmpi 
</span><br>
<span class="quotelev1">&gt; version 1.8.7 as well as mvapich2 version 1.9. both produced similar 
</span><br>
<span class="quotelev1">&gt; errors. I tried the mca flag that you had provided and it is telling 
</span><br>
<span class="quotelev1">&gt; me that a configuration file is needed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; all processes return:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; STOP A configuration file is required
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am attaching the subroutine of the code that I believe is where the 
</span><br>
<span class="quotelev1">&gt; problem is occuring.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, Mar 14, 2016 at 6:25 PM, Gilles Gouaillardet 
</span><br>
<span class="quotelev1">&gt; &lt;gilles.gouaillardet_at_[hidden] &lt;mailto:gilles.gouaillardet_at_[hidden]&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Dominic,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     this is a ROMIO error message, and ROMIO is from MPICH project.
</span><br>
<span class="quotelev1">&gt;     at first, I recommend you try the same test with the latest mpich,
</span><br>
<span class="quotelev1">&gt;     in order to check
</span><br>
<span class="quotelev1">&gt;     whether the bug is indeed from romio, and has been fixed in the
</span><br>
<span class="quotelev1">&gt;     latest release.
</span><br>
<span class="quotelev1">&gt;     (ompi is a few version behind the latest romio)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     would you be able to post a trimmed version of your application
</span><br>
<span class="quotelev1">&gt;     that evidences the test ?
</span><br>
<span class="quotelev1">&gt;     that will be helpful to understand what is going on.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     you might also want to give a try to
</span><br>
<span class="quotelev1">&gt;     mpirun --mca io ompio ...
</span><br>
<span class="quotelev1">&gt;     and see whether this helps.
</span><br>
<span class="quotelev1">&gt;     that being said, I think ompio is not considered as production
</span><br>
<span class="quotelev1">&gt;     ready on the v1.10 series of ompi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     On Tuesday, March 15, 2016, Dominic Kedelty &lt;dkedelty_at_[hidden]
</span><br>
<span class="quotelev1">&gt;     &lt;mailto:dkedelty_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         I am getting the following error using openmpi and I am
</span><br>
<span class="quotelev1">&gt;         wondering if anyone would have clue as to why it is happening.
</span><br>
<span class="quotelev1">&gt;         It is an error coming from openmpi.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Error in ADIOI_Calc_aggregator(): rank_index(40) &gt;=
</span><br>
<span class="quotelev1">&gt;         fd-&gt;hints-&gt;cb_nodes (40) fd_size=213909504 off=8617247540
</span><br>
<span class="quotelev1">&gt;         Error in ADIOI_Calc_aggregator(): rank_index(40) &gt;=
</span><br>
<span class="quotelev1">&gt;         fd-&gt;hints-&gt;cb_nodes (40) fd_size=213909504 off=8617247540
</span><br>
<span class="quotelev1">&gt;         application called MPI_Abort(MPI_COMM_WORLD, 1) - process 157
</span><br>
<span class="quotelev1">&gt;         application called MPI_Abort(MPI_COMM_WORLD, 1) - process 477
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Any help would be appreciated. Thanks.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     _______________________________________________
</span><br>
<span class="quotelev1">&gt;     devel mailing list
</span><br>
<span class="quotelev1">&gt;     devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;     Link to this post:
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/community/lists/devel/2016/03/18697.php">http://www.open-mpi.org/community/lists/devel/2016/03/18697.php</a>
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
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/03/18700.php">http://www.open-mpi.org/community/lists/devel/2016/03/18700.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18701/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18702.php">Howard: "Re: [OMPI devel] RFC: RML change to multi-select"</a>
<li><strong>Previous message:</strong> <a href="18700.php">Dominic Kedelty: "Re: [OMPI devel] MPI Error"</a>
<li><strong>In reply to:</strong> <a href="18700.php">Dominic Kedelty: "Re: [OMPI devel] MPI Error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18719.php">Dominic Kedelty: "Re: [OMPI devel] MPI Error"</a>
<li><strong>Reply:</strong> <a href="18719.php">Dominic Kedelty: "Re: [OMPI devel] MPI Error"</a>
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
