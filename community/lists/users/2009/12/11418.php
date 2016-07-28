<?
$subject_val = "Re: [OMPI users] MPI_Comm_spawn, caller uses CPU while waiting for 	spawned processes";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec  4 12:59:20 2009" -->
<!-- isoreceived="20091204175920" -->
<!-- sent="Fri, 4 Dec 2009 10:58:11 -0700" -->
<!-- isosent="20091204175811" -->
<!-- name="Nicolas Bock" -->
<!-- email="nicolasbock_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Comm_spawn, caller uses CPU while waiting for 	spawned processes" -->
<!-- id="dcf611bd0912040958r26657541q932bb2cf7a5b2357_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="4B194702.5000007_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Comm_spawn, caller uses CPU while waiting for 	spawned processes<br>
<strong>From:</strong> Nicolas Bock (<em>nicolasbock_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-04 12:58:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11419.php">Jed Brown: "[OMPI users] Wrappers should put include path *after* user args"</a>
<li><strong>Previous message:</strong> <a href="11417.php">Eugene Loh: "Re: [OMPI users] MPI_Comm_spawn, caller uses CPU while waiting for 	spawned processes"</a>
<li><strong>In reply to:</strong> <a href="11417.php">Eugene Loh: "Re: [OMPI users] MPI_Comm_spawn, caller uses CPU while waiting for 	spawned processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11422.php">Eugene Loh: "Re: [OMPI users] MPI_Comm_spawn, caller uses CPU while waiting for 	spawned processes"</a>
<li><strong>Reply:</strong> <a href="11422.php">Eugene Loh: "Re: [OMPI users] MPI_Comm_spawn, caller uses CPU while waiting for 	spawned processes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, Dec 4, 2009 at 10:29, Eugene Loh &lt;Eugene.Loh_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;  Nicolas Bock wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Fri, Dec 4, 2009 at 10:10, Eugene Loh &lt;Eugene.Loh_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Yield helped, but not as effectively as one might have imagined.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes, that's the impression I get as well, the master process might be
</span><br>
<span class="quotelev1">&gt; yielding, but it doesn't appear to be a lot. Maybe I should do this
</span><br>
<span class="quotelev1">&gt; differently to avoid this CPU usage in master. All I really want is to
</span><br>
<span class="quotelev1">&gt; execute another process somewhere on a free node in my MPI universe, wait
</span><br>
<span class="quotelev1">&gt; for it to be done and go on. From my limited understanding of MPI,
</span><br>
<span class="quotelev1">&gt; MPI_Comm_spawn() and MPI_Barrier() seemed just like what I needed, but as I
</span><br>
<span class="quotelev1">&gt; said, maybe there are other ways to do this.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think you might observe a world of difference if the master issued some
</span><br>
<span class="quotelev1">&gt; non-blocking call and then intermixed MPI_Test calls with sleep calls.  You
</span><br>
<span class="quotelev1">&gt; should see *much* more subservient behavior.  As I remember, putting such
</span><br>
<span class="quotelev1">&gt; passivity into OMPI is on somebody's to-do list, but just not very high.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Hi Eugene,
<br>
<p>could you give me more details? I can't figure out how to do this. I could
<br>
see that one way to implement what you are describing is:
<br>
<p>in slave.c:
<br>
MPI_Send() to rank 0
<br>
<p>in master.c
<br>
MPI_IRecv() from the spawned processes
<br>
while (1) {  MPI_Test(); }
<br>
<p>I can't figure out how to find the ranks that MPI_Comm_spawn() used. What's
<br>
the source argument in MPI_IRecv() supposed to be?
<br>
<p>Thanks, nick
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11418/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11419.php">Jed Brown: "[OMPI users] Wrappers should put include path *after* user args"</a>
<li><strong>Previous message:</strong> <a href="11417.php">Eugene Loh: "Re: [OMPI users] MPI_Comm_spawn, caller uses CPU while waiting for 	spawned processes"</a>
<li><strong>In reply to:</strong> <a href="11417.php">Eugene Loh: "Re: [OMPI users] MPI_Comm_spawn, caller uses CPU while waiting for 	spawned processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11422.php">Eugene Loh: "Re: [OMPI users] MPI_Comm_spawn, caller uses CPU while waiting for 	spawned processes"</a>
<li><strong>Reply:</strong> <a href="11422.php">Eugene Loh: "Re: [OMPI users] MPI_Comm_spawn, caller uses CPU while waiting for 	spawned processes"</a>
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
