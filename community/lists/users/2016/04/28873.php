<?
$subject_val = "Re: [OMPI users] Question on MPI_Comm_spawn timing";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Apr  3 09:41:34 2016" -->
<!-- isoreceived="20160403134134" -->
<!-- sent="Sun, 3 Apr 2016 06:41:31 -0700" -->
<!-- isosent="20160403134131" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Question on MPI_Comm_spawn timing" -->
<!-- id="5535A1EF-9C86-442A-A616-F813E16CC3BF_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAAkFZ5u863RR3FR8fq9G=rmUyyjr6xN1jKCh02GaQtZHadcxeg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Question on MPI_Comm_spawn timing<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-04-03 09:41:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28874.php">Walt Brainerd: "[OMPI users] Building on Windows w/o Cygwin"</a>
<li><strong>Previous message:</strong> <a href="28872.php">Gilles Gouaillardet: "Re: [OMPI users] Question on MPI_Comm_spawn timing"</a>
<li><strong>In reply to:</strong> <a href="28872.php">Gilles Gouaillardet: "Re: [OMPI users] Question on MPI_Comm_spawn timing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28893.php">Emani, Murali: "Re: [OMPI users] Question on MPI_Comm_spawn timing"</a>
<li><strong>Reply:</strong> <a href="28893.php">Emani, Murali: "Re: [OMPI users] Question on MPI_Comm_spawn timing"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I honestly don&#226;&#128;&#153;t think anyone has been concerned about the speed of MPI_Comm_spawn, and so there hasn&#226;&#128;&#153;t been any effort made to optimize it
<br>
<p><p><span class="quotelev1">&gt; On Apr 3, 2016, at 2:52 AM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; performance of MPI_Comm_spawn in the v1.8/v1.10 series is known to be poor, especially compared to v1.6
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; generally speaking, I cannot recommend v1.6 since it is no more maintained.
</span><br>
<span class="quotelev1">&gt; that being said, if performance is critical, you might want to give it a try.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I did not run any performance measurement with master, especially since we moved to PMIx,
</span><br>
<span class="quotelev1">&gt; that might be worth a try too
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Sunday, April 3, 2016, Emani, Murali &lt;emani1_at_[hidden] &lt;mailto:emani1_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am trying to evaluate the time taken for MPI_Comm_spawn operation in the
</span><br>
<span class="quotelev1">&gt; latest version of OpenMPI. Here a parent communicator (all processes, not
</span><br>
<span class="quotelev1">&gt; just the root) spawns one new child process (separate executable). The
</span><br>
<span class="quotelev1">&gt; code I&#194;&#185;m executing is
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; main(){
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt; &#197;&#160;..
</span><br>
<span class="quotelev1">&gt; // MPI initialization
</span><br>
<span class="quotelev1">&gt; &#197;&#160;..
</span><br>
<span class="quotelev1">&gt; start1 = MPI_Wtime();
</span><br>
<span class="quotelev1">&gt; MPI_Comm_spawn(&#194;&#179;./child&quot;, MPI_ARGV_NULL,1, MPI_INFO_NULL, 0,
</span><br>
<span class="quotelev1">&gt; MPI_COMM_WORLD, &amp;inter_communicator, MPI_ERRCODES_IGNORE );
</span><br>
<span class="quotelev1">&gt; End = MPI_Wtime();
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; printf(&#194;&#179; spawn time: %f&#194;&#178;, (end-start));
</span><br>
<span class="quotelev1">&gt; MPI_Barrier(inter_communicator); // spawn is collective, but still want to
</span><br>
<span class="quotelev1">&gt; ensure it using a barrier
</span><br>
<span class="quotelev1">&gt; ..
</span><br>
<span class="quotelev1">&gt; ..
</span><br>
<span class="quotelev1">&gt; // MPI finalize
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In child.c
</span><br>
<span class="quotelev1">&gt; main(){
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt; &#197;&#160;..
</span><br>
<span class="quotelev1">&gt; // MPI initialization
</span><br>
<span class="quotelev1">&gt; &#197;&#160;..
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MPI_Comm_get_parent(&amp;parentcomm); // gets the inter-communicator
</span><br>
<span class="quotelev1">&gt; MPI_Barrier(parentcomm);
</span><br>
<span class="quotelev1">&gt; ..
</span><br>
<span class="quotelev1">&gt; ..
</span><br>
<span class="quotelev1">&gt; // MPI finalize
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My observation is that the spawn time is very high (almost 80% of the
</span><br>
<span class="quotelev1">&gt; total program execution time). It increases exponentially with the number
</span><br>
<span class="quotelev1">&gt; of processes in the parent communicator. Is this method correct, and is
</span><br>
<span class="quotelev1">&gt; the MPI_Comm_spawn operation expensive.
</span><br>
<span class="quotelev1">&gt; I have also tried MPI_Comm_spawn_multiple but it still measures the same
</span><br>
<span class="quotelev1">&gt; time.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Could kindly someone guide me in this issue.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Murali
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
<span class="quotelev1">&gt; users_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/04/28871.php">http://www.open-mpi.org/community/lists/users/2016/04/28871.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2016/04/28871.php">http://www.open-mpi.org/community/lists/users/2016/04/28871.php</a>&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/04/28872.php">http://www.open-mpi.org/community/lists/users/2016/04/28872.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28873/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28874.php">Walt Brainerd: "[OMPI users] Building on Windows w/o Cygwin"</a>
<li><strong>Previous message:</strong> <a href="28872.php">Gilles Gouaillardet: "Re: [OMPI users] Question on MPI_Comm_spawn timing"</a>
<li><strong>In reply to:</strong> <a href="28872.php">Gilles Gouaillardet: "Re: [OMPI users] Question on MPI_Comm_spawn timing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28893.php">Emani, Murali: "Re: [OMPI users] Question on MPI_Comm_spawn timing"</a>
<li><strong>Reply:</strong> <a href="28893.php">Emani, Murali: "Re: [OMPI users] Question on MPI_Comm_spawn timing"</a>
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
