<?
$subject_val = "Re: [OMPI users] MPI debugger";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 11 01:18:36 2010" -->
<!-- isoreceived="20100111061836" -->
<!-- sent="Mon, 11 Jan 2010 07:20:03 +0100" -->
<!-- isosent="20100111062003" -->
<!-- name="Jed Brown" -->
<!-- email="jed_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI debugger" -->
<!-- id="87ljg5rwmk.fsf_at_59A2.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1263151759.3456.7.camel_at_alpha" -->
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
<strong>From:</strong> Jed Brown (<em>jed_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-11 01:20:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11730.php">Mathieu Gontier: "[OMPI users] OpenMPI less fast than MPICH"</a>
<li><strong>Previous message:</strong> <a href="11728.php">Ashley Pittman: "Re: [OMPI users] MPI debugger"</a>
<li><strong>In reply to:</strong> <a href="11728.php">Ashley Pittman: "Re: [OMPI users] MPI debugger"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11789.php">Ashley Pittman: "Re: [OMPI users] MPI debugger"</a>
<li><strong>Reply:</strong> <a href="11789.php">Ashley Pittman: "Re: [OMPI users] MPI debugger"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sun, 10 Jan 2010 19:29:18 +0000, Ashley Pittman &lt;ashley_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; It'll show you parallel stack traces but won't let you single step for
</span><br>
<span class="quotelev1">&gt; example.
</span><br>
<p>Two lightweight options if you want stepping, breakpoints, watchpoints,
<br>
etc.
<br>
<p>* Use serial debuggers on some interesting processes, for example with
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;mpiexec -n 1 xterm -e gdb --args ./trouble args : -n 2 ./trouble args : -n 1 xterm -e gdb --args ./trouble args
<br>
<p>&nbsp;&nbsp;to put an xterm on rank 0 and 3 of a four process job (there are lots
<br>
&nbsp;&nbsp;of other ways to get here).
<br>
<p>* MPICH2 has a poor-man's parallel debugger, mpiexec.mpd -gdb allows you
<br>
&nbsp;&nbsp;to send the same gdb commands to each process and collate the output.
<br>
<p>Jed
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11730.php">Mathieu Gontier: "[OMPI users] OpenMPI less fast than MPICH"</a>
<li><strong>Previous message:</strong> <a href="11728.php">Ashley Pittman: "Re: [OMPI users] MPI debugger"</a>
<li><strong>In reply to:</strong> <a href="11728.php">Ashley Pittman: "Re: [OMPI users] MPI debugger"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11789.php">Ashley Pittman: "Re: [OMPI users] MPI debugger"</a>
<li><strong>Reply:</strong> <a href="11789.php">Ashley Pittman: "Re: [OMPI users] MPI debugger"</a>
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
