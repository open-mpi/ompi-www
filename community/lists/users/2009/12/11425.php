<?
$subject_val = "Re: [OMPI users] MPI_Comm_spawn, caller uses CPU while waiting for 	spawned processes";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec  4 15:05:13 2009" -->
<!-- isoreceived="20091204200513" -->
<!-- sent="Fri, 4 Dec 2009 13:04:49 -0700" -->
<!-- isosent="20091204200449" -->
<!-- name="Nicolas Bock" -->
<!-- email="nicolasbock_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Comm_spawn, caller uses CPU while waiting for 	spawned processes" -->
<!-- id="dcf611bd0912041204n23750a0et2ae035011a90abf1_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="4B195E96.4070105_at_sun.com" -->
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
<strong>Date:</strong> 2009-12-04 15:04:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11426.php">Tim Prince: "Re: [OMPI users] Mimicking timeout for MPI_Wait"</a>
<li><strong>Previous message:</strong> <a href="11424.php">Richard Treumann: "Re: [OMPI users] Mimicking timeout for MPI_Wait"</a>
<li><strong>In reply to:</strong> <a href="11422.php">Eugene Loh: "Re: [OMPI users] MPI_Comm_spawn, caller uses CPU while waiting for 	spawned processes"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, Dec 4, 2009 at 12:10, Eugene Loh &lt;Eugene.Loh_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;  Nicolas Bock wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Fri, Dec 4, 2009 at 10:29, Eugene Loh &lt;Eugene.Loh_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I think you might observe a world of difference if the master issued some
</span><br>
<span class="quotelev2">&gt;&gt; non-blocking call and then intermixed MPI_Test calls with sleep calls.  You
</span><br>
<span class="quotelev2">&gt;&gt; should see *much* more subservient behavior.  As I remember, putting such
</span><br>
<span class="quotelev2">&gt;&gt; passivity into OMPI is on somebody's to-do list, but just not very high.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; could you give me more details?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Nope, sorry.  I'm going to drop out here.  The basic idea was something
</span><br>
<span class="quotelev1">&gt; like:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPI_Irecv();
</span><br>
<span class="quotelev1">&gt; while ( !flag ) {
</span><br>
<span class="quotelev1">&gt;   nanosleep(...);
</span><br>
<span class="quotelev1">&gt;   MPI_Test(...&amp;flag...);
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; but I was hoping to &quot;leave the rest to the reader&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
HI Eugene,
<br>
<p>thanks for the help. I think I got it now:
<br>
<p>master.c:
<br>
<p>MPI_Irecv(buffer+buffer_index, 1, MPI_CHAR, MPI_ANY_SOURCE, 0, spawn,
<br>
request+buffer_index);
<br>
<p>and slave.c
<br>
<p>MPI_Send(&amp;buffer, 1, MPI_CHAR, 0, 0, spawn);
<br>
<p>That seems to do the trick. Since our &quot;slave&quot; processes are expected to have
<br>
rather long runtimes, the sleep statement in master is simply
<br>
<p>sleep(2);
<br>
<p>to sleep 2 seconds. The load on the master process is basically zero now.
<br>
<p>Thanks again for your help,
<br>
<p>nick
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11425/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11426.php">Tim Prince: "Re: [OMPI users] Mimicking timeout for MPI_Wait"</a>
<li><strong>Previous message:</strong> <a href="11424.php">Richard Treumann: "Re: [OMPI users] Mimicking timeout for MPI_Wait"</a>
<li><strong>In reply to:</strong> <a href="11422.php">Eugene Loh: "Re: [OMPI users] MPI_Comm_spawn, caller uses CPU while waiting for 	spawned processes"</a>
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
