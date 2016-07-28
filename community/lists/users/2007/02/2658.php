<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Feb  8 21:56:22 2007" -->
<!-- isoreceived="20070209025622" -->
<!-- sent="Thu, 8 Feb 2007 19:56:09 -0700" -->
<!-- isosent="20070209025609" -->
<!-- name="Brian W. Barrett" -->
<!-- email="bbarrett_at_[hidden]" -->
<!-- subject="Re: [OMPI users] install script issue" -->
<!-- id="4212658A-FE47-4E9A-A29C-88B3925FD825_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="483C948B-89AD-4C83-86BC-8B270965B218_at_ieee.org" -->
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
<strong>From:</strong> Brian W. Barrett (<em>bbarrett_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-02-08 21:56:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2659.php">Alex Tumanov: "Re: [OMPI users] first time user - can run mpi job SMP but not over cluster"</a>
<li><strong>Previous message:</strong> <a href="2657.php">Alex Tumanov: "Re: [OMPI users] first time user - can run mpi job SMP but not over cluster"</a>
<li><strong>In reply to:</strong> <a href="2638.php">Michael: "[OMPI users] install script issue"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 7, 2007, at 3:26 PM, Michael wrote:
<br>
<p><span class="quotelev1">&gt; Building openmpi-1.3a1r13525 on OS X 10.4.8 (PowerPC), using my
</span><br>
<span class="quotelev1">&gt; standard compile line
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./configure F77=g95 FC=g95 LDFLAGS=-lSystemStubs --with-mpi-f90-
</span><br>
<span class="quotelev1">&gt; size=large --with-f90-max-array-dim=3 ; make all
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and after installing I found that I couldn't compile, because of the
</span><br>
<span class="quotelev1">&gt; following:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -rw-------     1 root      wheel   640216 Feb  7 14:48 libmpi_f90.a
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This has not happened in the past and I followed the same procedures
</span><br>
<span class="quotelev1">&gt; I've been using for many months.
</span><br>
<p>Very odd -- I haven't seen this one before and wasn't able to  
<br>
duplicate on my Mac.  Can you run make install in the ompi/mpi/f90  
<br>
directory of the Open MPI source and send me the output?  I should be  
<br>
able to get some idea of what happened from there.
<br>
<p>Thanks!
<br>
<p>Brian
<br>
<p><pre>
-- 
   Brian Barrett
   Open MPI Team, CCS-1
   Los Alamos National Laboratory
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2659.php">Alex Tumanov: "Re: [OMPI users] first time user - can run mpi job SMP but not over cluster"</a>
<li><strong>Previous message:</strong> <a href="2657.php">Alex Tumanov: "Re: [OMPI users] first time user - can run mpi job SMP but not over cluster"</a>
<li><strong>In reply to:</strong> <a href="2638.php">Michael: "[OMPI users] install script issue"</a>
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
