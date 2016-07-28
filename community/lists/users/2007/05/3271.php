<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon May 14 16:27:03 2007" -->
<!-- isoreceived="20070514202703" -->
<!-- sent="Mon, 14 May 2007 14:26:32 -0600" -->
<!-- isosent="20070514202632" -->
<!-- name="Brian Barrett" -->
<!-- email="bbarrett_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_TYPE_STRUCT Not" -->
<!-- id="BD6D6D85-A9A7-473B-AEE3-D3F5798AFBBD_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="eb51483d0705140921x6cd7b285l573b99bdf68fb823_at_mail.gmail.com" -->
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
<strong>From:</strong> Brian Barrett (<em>bbarrett_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-05-14 16:26:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3272.php">Nym: "Re: [OMPI users] MPI_TYPE_STRUCT Not"</a>
<li><strong>Previous message:</strong> <a href="3270.php">Adrian Knoth: "Re: [OMPI users] multiple MPI_Reduce"</a>
<li><strong>In reply to:</strong> <a href="3267.php">Nym: "[OMPI users] MPI_TYPE_STRUCT Not"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3272.php">Nym: "Re: [OMPI users] MPI_TYPE_STRUCT Not"</a>
<li><strong>Reply:</strong> <a href="3272.php">Nym: "Re: [OMPI users] MPI_TYPE_STRUCT Not"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 14, 2007, at 10:21 AM, Nym wrote:
<br>
<p><span class="quotelev1">&gt; I am trying to use MPI_TYPE_STRUCT in a 64 bit Fortran 90 program. I'm
</span><br>
<span class="quotelev1">&gt; using the Intel Fortran Compiler 9.1.040 (and C/C++ compilers
</span><br>
<span class="quotelev1">&gt; 9.1.045).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If I try to call MPI_TYPE_STRUCT with the array of displacements that
</span><br>
<span class="quotelev1">&gt; are of type INTEGER(KIND=MPI_ADDRESS_KIND), then I get a compilation
</span><br>
<span class="quotelev1">&gt; error:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; fortcom: Error: ./test_basic.f90, line 34: There is no matching
</span><br>
<span class="quotelev1">&gt; specific subroutine for this generic subroutine call.
</span><br>
<span class="quotelev1">&gt; [MPI_TYPE_STRUCT]
</span><br>
<span class="quotelev1">&gt;  CALL MPI_TYPE_STRUCT(numTypes, blockLengths, displacements,  
</span><br>
<span class="quotelev1">&gt; oldTypes &amp;
</span><br>
<span class="quotelev1">&gt; -------^
</span><br>
<span class="quotelev1">&gt; compilation aborted for ./test_basic.f90 (code 1)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Attached is a small test program to demonstrate this. I thought
</span><br>
<span class="quotelev1">&gt; according to the MPI specs that the displacement array should be of
</span><br>
<span class="quotelev1">&gt; type MPI_ADDRESS_KIND. Am I wrong?
</span><br>
<p>Have a look at the last paragraph of Section 10.2.2 of the MPI-2  
<br>
standard.  Functions from MPI-1 that take address-sized arguments use  
<br>
INTEGER in Fortran.  This was obviously a problem, which is why the  
<br>
functions from MPI-1 that take an address-sized argument are  
<br>
depricated in favor of new functions in MPI-2 that take proper  
<br>
address kind arguments.
<br>
<p>Two options:
<br>
<p>&nbsp;&nbsp;&nbsp;1) Use MPI_TYPE_STRUCT with INTEGER arguments
<br>
&nbsp;&nbsp;&nbsp;2) Use MPI_TYPE_CREATE_STRUCT with ADDRESS_KIND arguments
<br>
<p>Hope this helps,
<br>
<p>Brian
<br>
<p><pre>
-- 
   Brian W. Barrett
   Open MPI Team, CCS-1
   Los Alamos National Laboratory
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3272.php">Nym: "Re: [OMPI users] MPI_TYPE_STRUCT Not"</a>
<li><strong>Previous message:</strong> <a href="3270.php">Adrian Knoth: "Re: [OMPI users] multiple MPI_Reduce"</a>
<li><strong>In reply to:</strong> <a href="3267.php">Nym: "[OMPI users] MPI_TYPE_STRUCT Not"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3272.php">Nym: "Re: [OMPI users] MPI_TYPE_STRUCT Not"</a>
<li><strong>Reply:</strong> <a href="3272.php">Nym: "Re: [OMPI users] MPI_TYPE_STRUCT Not"</a>
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
