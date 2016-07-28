<?
$subject_val = "Re: [OMPI users] Question on MPI_Comm_spawn timing";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Apr  3 05:52:54 2016" -->
<!-- isoreceived="20160403095254" -->
<!-- sent="Sun, 3 Apr 2016 18:52:51 +0900" -->
<!-- isosent="20160403095251" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Question on MPI_Comm_spawn timing" -->
<!-- id="CAAkFZ5u863RR3FR8fq9G=rmUyyjr6xN1jKCh02GaQtZHadcxeg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="D325FD43.1E9D%emani1_at_llnl.gov" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-04-03 05:52:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28873.php">Ralph Castain: "Re: [OMPI users] Question on MPI_Comm_spawn timing"</a>
<li><strong>Previous message:</strong> <a href="28871.php">Emani, Murali: "[OMPI users] Question on MPI_Comm_spawn timing"</a>
<li><strong>In reply to:</strong> <a href="28871.php">Emani, Murali: "[OMPI users] Question on MPI_Comm_spawn timing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28873.php">Ralph Castain: "Re: [OMPI users] Question on MPI_Comm_spawn timing"</a>
<li><strong>Reply:</strong> <a href="28873.php">Ralph Castain: "Re: [OMPI users] Question on MPI_Comm_spawn timing"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>performance of MPI_Comm_spawn in the v1.8/v1.10 series is known to be poor,
<br>
especially compared to v1.6
<br>
<p>generally speaking, I cannot recommend v1.6 since it is no more maintained.
<br>
that being said, if performance is critical, you might want to give it a
<br>
try.
<br>
<p>I did not run any performance measurement with master, especially since we
<br>
moved to PMIx,
<br>
that might be worth a try too
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Sunday, April 3, 2016, Emani, Murali &lt;emani1_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi all,
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/04/28871.php">http://www.open-mpi.org/community/lists/users/2016/04/28871.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28872/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28873.php">Ralph Castain: "Re: [OMPI users] Question on MPI_Comm_spawn timing"</a>
<li><strong>Previous message:</strong> <a href="28871.php">Emani, Murali: "[OMPI users] Question on MPI_Comm_spawn timing"</a>
<li><strong>In reply to:</strong> <a href="28871.php">Emani, Murali: "[OMPI users] Question on MPI_Comm_spawn timing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28873.php">Ralph Castain: "Re: [OMPI users] Question on MPI_Comm_spawn timing"</a>
<li><strong>Reply:</strong> <a href="28873.php">Ralph Castain: "Re: [OMPI users] Question on MPI_Comm_spawn timing"</a>
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
