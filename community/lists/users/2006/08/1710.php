<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Aug  2 11:10:06 2006" -->
<!-- isoreceived="20060802151006" -->
<!-- sent="Wed, 02 Aug 2006 09:11:54 -0600" -->
<!-- isosent="20060802151154" -->
<!-- name="Robert Cummins" -->
<!-- email="rcummins_at_[hidden]" -->
<!-- subject="[OMPI users] How do I debug this?" -->
<!-- id="44D0C0BA.5000407_at_lnxi.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> Robert Cummins (<em>rcummins_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-08-02 11:11:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1711.php">Swamy Kandadai: "[OMPI users] Swamy Kandadai is out of the office."</a>
<li><strong>Previous message:</strong> <a href="1709.php">Wen Long at UMCES/HPL: "Re: [OMPI users] Open MPI on Dual Core Laptop?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1712.php">Jeff Squyres: "Re: [OMPI users] How do I debug this?"</a>
<li><strong>Reply:</strong> <a href="1712.php">Jeff Squyres: "Re: [OMPI users] How do I debug this?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm trying to run a 64 way mpi benchmark on my system.  I
<br>
*always* get the following error and I'm wondering how do
<br>
I debug the problem node?  I can not reproduce the problem
<br>
with a smaller number of nodes.
<br>
<p>snip...
<br>
[p1d049:18547] [0,1,48]-[0,1,20] mca_oob_tcp_peer_complete_connect:
<br>
connect() fa
<br>
iled with errno=113
<br>
[p1d049:18547] [0,1,48]-[0,1,21] mca_oob_tcp_peer_complete_connect:
<br>
connect() fa
<br>
iled with errno=113
<br>
[p1d049:18547] [0,1,48]-[0,1,24] mca_oob_tcp_peer_complete_connect:
<br>
connect() fa
<br>
iled with errno=113
<br>
[p1d049:18547] [0,1,48]-[0,1,25] mca_oob_tcp_peer_complete_connect:
<br>
connect() fa
<br>
iled with errno=113
<br>
...
<br>
<p>It looks like I have well over 128 lines of similar output.  A quick
<br>
eyeball of
<br>
the output seems to indicate about 1/2 of all nodes are reporting this
<br>
problem.
<br>
<p>I have checked the error counters on my IB switch and I
<br>
have 0 new errors during the run.
<br>
<p>TIA.
<br>
<p><p>R.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1711.php">Swamy Kandadai: "[OMPI users] Swamy Kandadai is out of the office."</a>
<li><strong>Previous message:</strong> <a href="1709.php">Wen Long at UMCES/HPL: "Re: [OMPI users] Open MPI on Dual Core Laptop?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1712.php">Jeff Squyres: "Re: [OMPI users] How do I debug this?"</a>
<li><strong>Reply:</strong> <a href="1712.php">Jeff Squyres: "Re: [OMPI users] How do I debug this?"</a>
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
