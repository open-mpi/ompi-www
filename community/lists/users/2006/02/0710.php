<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Feb 25 00:26:00 2006" -->
<!-- isoreceived="20060225052600" -->
<!-- sent="Sat, 25 Feb 2006 00:25:53 -0500" -->
<!-- isosent="20060225052553" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Toubles with Open-mpi on AMD opteron with gfortran/g95" -->
<!-- id="5CF9C330-2DE6-4048-934E-61133C16D698_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20060225002410.GC2255_at_greglaptop.internal.keyresearch.com" -->
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
<strong>Date:</strong> 2006-02-25 00:25:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0711.php">Brian Barrett: "Re: [OMPI users] Ethernet bonding and Open MPI"</a>
<li><strong>Previous message:</strong> <a href="0709.php">Allan Menezes: "[OMPI users] Ethernet bonding and Open MPI"</a>
<li><strong>In reply to:</strong> <a href="0708.php">Greg Lindahl: "Re: [OMPI users] Toubles with Open-mpi on AMD opteron with gfortran/g95"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 24, 2006, at 7:24 PM, Greg Lindahl wrote:
<br>
<p><span class="quotelev1">&gt; On Fri, Feb 24, 2006 at 04:44:19PM +0100, Benoit Semelin wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Rainer wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PS: When compiling OpenMPI are You using a combination of gcc for  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; C/C++
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and ifort for Fortan compilation?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This will not work, as the compilers have different views on e.g.  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; boolean
</span><br>
<span class="quotelev3">&gt;&gt;&gt; variables and values, so parameter passing from Your code into  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OpenMPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt; will be botched up. Currently, You may only use C / Fortran  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Compiler from
</span><br>
<span class="quotelev3">&gt;&gt;&gt; one vendor.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That's kind of surprising, I don't know why you would want to require
</span><br>
<span class="quotelev1">&gt; that bool and LOGICAL have the same values. We (and Intel) both do
</span><br>
<span class="quotelev1">&gt; bool like g++ does, but we each do LOGICAL to match the history of our
</span><br>
<span class="quotelev1">&gt; Fortran compilers. I never imagined anyone would think these should be
</span><br>
<span class="quotelev1">&gt; the same.
</span><br>
<p>I believe this is something that is fixed in the upcoming 1.0.2  
<br>
release.  One of those things that slipped through the cracks during  
<br>
the runup to 1.0, since only a couple of functions in the MPI  
<br>
interface deal with Fortran LOGICALs directly (other than sending  
<br>
them around, that is).
<br>
<p>Brian
<br>
<p><pre>
-- 
   Brian Barrett
   Open MPI developer
   <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0711.php">Brian Barrett: "Re: [OMPI users] Ethernet bonding and Open MPI"</a>
<li><strong>Previous message:</strong> <a href="0709.php">Allan Menezes: "[OMPI users] Ethernet bonding and Open MPI"</a>
<li><strong>In reply to:</strong> <a href="0708.php">Greg Lindahl: "Re: [OMPI users] Toubles with Open-mpi on AMD opteron with gfortran/g95"</a>
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
