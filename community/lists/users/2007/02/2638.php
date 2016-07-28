<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Feb  7 17:26:48 2007" -->
<!-- isoreceived="20070207222648" -->
<!-- sent="Wed, 7 Feb 2007 17:26:36 -0500" -->
<!-- isosent="20070207222636" -->
<!-- name="Michael" -->
<!-- email="mklus_at_[hidden]" -->
<!-- subject="[OMPI users] install script issue" -->
<!-- id="483C948B-89AD-4C83-86BC-8B270965B218_at_ieee.org" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Michael (<em>mklus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-02-07 17:26:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2639.php">Alex Tumanov: "Re: [OMPI users] first time user - can run mpi job SMP but not over cluster"</a>
<li><strong>Previous message:</strong> <a href="2637.php">Mark Kosmowski: "[OMPI users] first time user - can run mpi job SMP but not over cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2658.php">Brian W. Barrett: "Re: [OMPI users] install script issue"</a>
<li><strong>Reply:</strong> <a href="2658.php">Brian W. Barrett: "Re: [OMPI users] install script issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Building openmpi-1.3a1r13525 on OS X 10.4.8 (PowerPC), using my  
<br>
standard compile line
<br>
<p>./configure F77=g95 FC=g95 LDFLAGS=-lSystemStubs --with-mpi-f90- 
<br>
size=large --with-f90-max-array-dim=3 ; make all
<br>
<p>and after installing I found that I couldn't compile, because of the  
<br>
following:
<br>
<p>-rw-------     1 root      wheel   640216 Feb  7 14:48 libmpi_f90.a
<br>
<p>This has not happened in the past and I followed the same procedures  
<br>
I've been using for many months.
<br>
<p>One slight difference is that I installed using the command &quot;make  
<br>
install all&quot; rather then &quot;make install&quot;, also I had uninstalled the  
<br>
previous version prior to installing this version.
<br>
<p>Michael
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2639.php">Alex Tumanov: "Re: [OMPI users] first time user - can run mpi job SMP but not over cluster"</a>
<li><strong>Previous message:</strong> <a href="2637.php">Mark Kosmowski: "[OMPI users] first time user - can run mpi job SMP but not over cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2658.php">Brian W. Barrett: "Re: [OMPI users] install script issue"</a>
<li><strong>Reply:</strong> <a href="2658.php">Brian W. Barrett: "Re: [OMPI users] install script issue"</a>
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
