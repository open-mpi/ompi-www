<?
$subject_val = "Re: [OMPI users] Using Open MPI as a communication library";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul  8 12:42:16 2016" -->
<!-- isoreceived="20160708164216" -->
<!-- sent="Fri, 8 Jul 2016 12:42:14 -0400" -->
<!-- isosent="20160708164214" -->
<!-- name="Supun Kamburugamuve" -->
<!-- email="skamburugamuve_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Using Open MPI as a communication library" -->
<!-- id="CAPytMehbNSV2VVqV4Y2NzscL9oYugzErCAsA37XnL=m5QmBvDg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="989C3FA5-6108-4662-A277-F125811F6265_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Using Open MPI as a communication library<br>
<strong>From:</strong> Supun Kamburugamuve (<em>skamburugamuve_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-07-08 12:42:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29615.php">Ralph Castain: "Re: [OMPI users] Using Open MPI as a communication library"</a>
<li><strong>Previous message:</strong> <a href="29613.php">Ralph Castain: "Re: [OMPI users] Using Open MPI as a communication library"</a>
<li><strong>In reply to:</strong> <a href="29613.php">Ralph Castain: "Re: [OMPI users] Using Open MPI as a communication library"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29615.php">Ralph Castain: "Re: [OMPI users] Using Open MPI as a communication library"</a>
<li><strong>Reply:</strong> <a href="29615.php">Ralph Castain: "Re: [OMPI users] Using Open MPI as a communication library"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes, the processes are not spawned by MPI and they are not spawned by
<br>
something like Slurm/PBS.
<br>
<p>How does MPI get to know what processes running in what nodes in a general
<br>
sense? Do we need to write some plugin so that it can figure out this
<br>
information? I guess this must be the way it is supporting Slurm/PBS etc.
<br>
<p>Thanks,
<br>
Supun..
<br>
<p>On Fri, Jul 8, 2016 at 12:06 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; You mean you didn&#226;&#128;&#153;t launch those procs via mpirun, yes? If you started
</span><br>
<span class="quotelev1">&gt; them via some resource manager, then you might just be able to call
</span><br>
<span class="quotelev1">&gt; MPI_Init and have them wireup.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Jul 8, 2016, at 8:55 AM, Supun Kamburugamuve &lt;
</span><br>
<span class="quotelev1">&gt; skamburugamuve_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I have a set of processes running and these are not managed/spawned by
</span><br>
<span class="quotelev1">&gt; Open MPI. Is it possible to use Open MPI as a pure communication library
</span><br>
<span class="quotelev1">&gt; among these processes?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks,
</span><br>
<span class="quotelev2">&gt; &gt; Supun..
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/07/29612.php">http://www.open-mpi.org/community/lists/users/2016/07/29612.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/07/29613.php">http://www.open-mpi.org/community/lists/users/2016/07/29613.php</a>
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29614/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29615.php">Ralph Castain: "Re: [OMPI users] Using Open MPI as a communication library"</a>
<li><strong>Previous message:</strong> <a href="29613.php">Ralph Castain: "Re: [OMPI users] Using Open MPI as a communication library"</a>
<li><strong>In reply to:</strong> <a href="29613.php">Ralph Castain: "Re: [OMPI users] Using Open MPI as a communication library"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29615.php">Ralph Castain: "Re: [OMPI users] Using Open MPI as a communication library"</a>
<li><strong>Reply:</strong> <a href="29615.php">Ralph Castain: "Re: [OMPI users] Using Open MPI as a communication library"</a>
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
