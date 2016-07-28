<?
$subject_val = "Re: [OMPI users] MPI debugger";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 15 04:07:52 2010" -->
<!-- isoreceived="20100115090752" -->
<!-- sent="Fri, 15 Jan 2010 09:07:42 +0000" -->
<!-- isosent="20100115090742" -->
<!-- name="Ashley Pittman" -->
<!-- email="ashley_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI debugger" -->
<!-- id="53E7D23D-E21D-4947-8DD5-9012620E46C8_at_pittman.co.uk" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="87ljg5rwmk.fsf_at_59A2.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI debugger<br>
<strong>From:</strong> Ashley Pittman (<em>ashley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-15 04:07:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11790.php">Shiqing Fan: "Re: [OMPI users] Windows CMake build problems ... (cont.)"</a>
<li><strong>Previous message:</strong> <a href="11788.php">Ralph Castain: "[OMPI users] Open MPI v1.4.1 released"</a>
<li><strong>In reply to:</strong> <a href="11729.php">Jed Brown: "Re: [OMPI users] MPI debugger"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 11 Jan 2010, at 06:20, Jed Brown wrote:
<br>
<p><span class="quotelev1">&gt; On Sun, 10 Jan 2010 19:29:18 +0000, Ashley Pittman &lt;ashley_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; It'll show you parallel stack traces but won't let you single step for
</span><br>
<span class="quotelev2">&gt;&gt; example.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Two lightweight options if you want stepping, breakpoints, watchpoints,
</span><br>
<span class="quotelev1">&gt; etc.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * Use serial debuggers on some interesting processes, for example with
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    mpiexec -n 1 xterm -e gdb --args ./trouble args : -n 2 ./trouble args : -n 1 xterm -e gdb --args ./trouble args
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  to put an xterm on rank 0 and 3 of a four process job (there are lots
</span><br>
<span class="quotelev1">&gt;  of other ways to get here).
</span><br>
<p>You can also achieve something similar with padb by starting the job normally and then using padb to launch xterms in a similar manner although it's been pointed out to me that this only works with one process per node right now.
<br>
<p><span class="quotelev1">&gt; * MPICH2 has a poor-man's parallel debugger, mpiexec.mpd -gdb allows you
</span><br>
<span class="quotelev1">&gt;  to send the same gdb commands to each process and collate the output.
</span><br>
<p>True, I'd forgotten about that, the MPICH2 people are moving away from mpd though so I don't know how much longer that will be an option.
<br>
<p>Ashley,
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11790.php">Shiqing Fan: "Re: [OMPI users] Windows CMake build problems ... (cont.)"</a>
<li><strong>Previous message:</strong> <a href="11788.php">Ralph Castain: "[OMPI users] Open MPI v1.4.1 released"</a>
<li><strong>In reply to:</strong> <a href="11729.php">Jed Brown: "Re: [OMPI users] MPI debugger"</a>
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
