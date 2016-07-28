<?
$subject_val = "Re: [OMPI users] Unexpected behavior: MPI_Comm_accept, MPI_Comm_connect, and MPI_THREAD_MULTIPLE";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 14 15:56:26 2013" -->
<!-- isoreceived="20130514195626" -->
<!-- sent="Tue, 14 May 2013 19:56:19 +0000" -->
<!-- isosent="20130514195619" -->
<!-- name="Damien Kick" -->
<!-- email="dkick_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Unexpected behavior: MPI_Comm_accept, MPI_Comm_connect, and MPI_THREAD_MULTIPLE" -->
<!-- id="7364AB234369D348AE1CEBC1A86132DB949EB2_at_SVLITMX02.shoretel.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1FC6A56D-A874-43AD-85F4-F4C5855BF641_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Unexpected behavior: MPI_Comm_accept, MPI_Comm_connect, and MPI_THREAD_MULTIPLE<br>
<strong>From:</strong> Damien Kick (<em>dkick_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-05-14 15:56:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21902.php">Ralph Castain: "Re: [OMPI users] Unexpected behavior: MPI_Comm_accept, MPI_Comm_connect, and MPI_THREAD_MULTIPLE"</a>
<li><strong>Previous message:</strong> <a href="21900.php">Ralph Castain: "Re: [OMPI users] Unexpected behavior: MPI_Comm_accept, MPI_Comm_connect, and MPI_THREAD_MULTIPLE"</a>
<li><strong>In reply to:</strong> <a href="21900.php">Ralph Castain: "Re: [OMPI users] Unexpected behavior: MPI_Comm_accept, MPI_Comm_connect, and MPI_THREAD_MULTIPLE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21902.php">Ralph Castain: "Re: [OMPI users] Unexpected behavior: MPI_Comm_accept, MPI_Comm_connect, and MPI_THREAD_MULTIPLE"</a>
<li><strong>Reply:</strong> <a href="21902.php">Ralph Castain: "Re: [OMPI users] Unexpected behavior: MPI_Comm_accept, MPI_Comm_connect, and MPI_THREAD_MULTIPLE"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 14, 2013, at 1:46 PM, Ralph Castain &lt;rhc_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; Problem is that comm_accept isn't thread safe in 1.6 series - we have a devel branch that might solve it, but is still under evaluation
</span><br>
<p>So then probably the only way to implement an MPI server which handles multiple concurrent clients with Open MPI 1.6.4 is to use multiple processes to handle each client connection, yes?
<br>
<p><p>________________________________
<br>
<p>This e-mail and any attachments are confidential. If it is not intended for you, please notify the sender, and please erase and ignore the contents.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21902.php">Ralph Castain: "Re: [OMPI users] Unexpected behavior: MPI_Comm_accept, MPI_Comm_connect, and MPI_THREAD_MULTIPLE"</a>
<li><strong>Previous message:</strong> <a href="21900.php">Ralph Castain: "Re: [OMPI users] Unexpected behavior: MPI_Comm_accept, MPI_Comm_connect, and MPI_THREAD_MULTIPLE"</a>
<li><strong>In reply to:</strong> <a href="21900.php">Ralph Castain: "Re: [OMPI users] Unexpected behavior: MPI_Comm_accept, MPI_Comm_connect, and MPI_THREAD_MULTIPLE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21902.php">Ralph Castain: "Re: [OMPI users] Unexpected behavior: MPI_Comm_accept, MPI_Comm_connect, and MPI_THREAD_MULTIPLE"</a>
<li><strong>Reply:</strong> <a href="21902.php">Ralph Castain: "Re: [OMPI users] Unexpected behavior: MPI_Comm_accept, MPI_Comm_connect, and MPI_THREAD_MULTIPLE"</a>
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
