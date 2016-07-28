<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jun 15 13:48:06 2005" -->
<!-- isoreceived="20050615184806" -->
<!-- sent="Wed, 15 Jun 2005 13:47:57 -0500" -->
<!-- isosent="20050615184757" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] Wrapper names [was: shell interaction]" -->
<!-- id="D73392E2-4971-40D7-9EA7-0C349079FE8D_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="Pine.LNX.4.63.0506151916180.4260_at_dingo.iwr.uni-heidelberg.de" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-06-15 13:47:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0070.php">Benjamin Allan: "[O-MPI users] re build time"</a>
<li><strong>Previous message:</strong> <a href="0068.php">Matthew Knepley: "Re: [O-MPI users] Questions on status"</a>
<li><strong>In reply to:</strong> <a href="0064.php">Bogdan Costescu: "[O-MPI users] Wrapper names [was: shell interaction]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0078.php">Bogdan Costescu: "Re: [O-MPI users] Wrapper names [was: shell interaction]"</a>
<li><strong>Reply:</strong> <a href="0078.php">Bogdan Costescu: "Re: [O-MPI users] Wrapper names [was: shell interaction]"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 15, 2005, at 12:23 PM, Bogdan Costescu wrote:
<br>
<p><span class="quotelev1">&gt; On Tue, 14 Jun 2005, Brian Barrett wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It would be nice if the c++ compiler wrapper were
</span><br>
<span class="quotelev3">&gt;&gt;&gt; installed under mpicxx, mpiCC, and mpic++ instead of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; just the latter 2.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Yeah, we can do that, no problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sorry for the silly question, but is there any kind of document or
</span><br>
<span class="quotelev1">&gt; formal recommendation regarding the naming of these wrappers ?
</span><br>
<p>Not really.  They are traditionally mpicc, mpiCC, and mpif77 because  
<br>
the comercial Unix systems traditionally named their compilers cc,  
<br>
CC, and f77.  LAM added mpic++ because on OS X and Windoes, mpicc and  
<br>
mpiCC may be the same file.  The choice of mpic++ was because it's  
<br>
the C++ compiler and because GNU chose g++ as the name of their C++  
<br>
compiler.
<br>
<p>That's about it for logic.  cxx is the usual way of specifying C++  
<br>
when you can't use a + sign (such as variable names).  I'm assuming  
<br>
the request was due to something along those lines.  Right now, the  
<br>
following wrapper compilers are provided by Open MPI:
<br>
<p>C:          mpicc
<br>
C++:        mpic++, mpicxx, mpiCC (last one is only on case-sensitive  
<br>
file systems)
<br>
Fortran 77: mpif77
<br>
Fortran 90: mpif90
<br>
<p><p>Make any sense?
<br>
<p>Brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0070.php">Benjamin Allan: "[O-MPI users] re build time"</a>
<li><strong>Previous message:</strong> <a href="0068.php">Matthew Knepley: "Re: [O-MPI users] Questions on status"</a>
<li><strong>In reply to:</strong> <a href="0064.php">Bogdan Costescu: "[O-MPI users] Wrapper names [was: shell interaction]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0078.php">Bogdan Costescu: "Re: [O-MPI users] Wrapper names [was: shell interaction]"</a>
<li><strong>Reply:</strong> <a href="0078.php">Bogdan Costescu: "Re: [O-MPI users] Wrapper names [was: shell interaction]"</a>
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
