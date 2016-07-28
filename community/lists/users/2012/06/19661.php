<?
$subject_val = "Re: [OMPI users] MPI Problem";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 25 12:31:26 2012" -->
<!-- isoreceived="20120625163126" -->
<!-- sent="Mon, 25 Jun 2012 12:31:21 -0400" -->
<!-- isosent="20120625163121" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI Problem" -->
<!-- id="0562D90C-CBCC-4CAE-B71B-59CBF8405283_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="1340639250.23895.YahooMailNeo_at_web125703.mail.ne1.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI Problem<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-25 12:31:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19662.php">Mohamad Ali Rostami: "Re: [OMPI users] MPI Problem"</a>
<li><strong>Previous message:</strong> <a href="19660.php">Mohamad Ali Rostami: "Re: [OMPI users] MPI Problem"</a>
<li><strong>In reply to:</strong> <a href="19660.php">Mohamad Ali Rostami: "Re: [OMPI users] MPI Problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19662.php">Mohamad Ali Rostami: "Re: [OMPI users] MPI Problem"</a>
<li><strong>Reply:</strong> <a href="19662.php">Mohamad Ali Rostami: "Re: [OMPI users] MPI Problem"</a>
<li><strong>Reply:</strong> <a href="19663.php">Mohamad Ali Rostami: "Re: [OMPI users] MPI Problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 25, 2012, at 11:47 AM, Mohamad Ali Rostami wrote:
<br>
<p><span class="quotelev1">&gt; I tried some really simple code like:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; use mpi
</span><br>
<span class="quotelev1">&gt; integer ierr
</span><br>
<span class="quotelev1">&gt; call mpi_init(ierr)
</span><br>
<p>Good -- nice, simple test code.
<br>
<p><span class="quotelev1">&gt; The problem still exists.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However, I am running the code from some make file and call
</span><br>
<span class="quotelev1">&gt; the compiler mpif90. Perhaps some special library should be included?
</span><br>
<p>That should be correct.
<br>
<p>Can you try it just on the compile line to make sure nothing extra wonky is going on?  E.g., something as simple as:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;mpif90 my_application.f90 -o my_application
<br>
<p>You can also see what mpif90 is doing under the covers by adding --showme to the command line:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;mpif90 my_application.f90 -o my_application --showme
<br>
<p>Also make sure of two things:
<br>
<p>1. The mpif90 is the one you think it is (e.g., run &quot;which mpif90&quot; and ensure that you're getting the &quot;right&quot; mpif90)
<br>
<p>2. Ensure that your Open MPI has f90 support compiled in.  Run &quot;ompi_info | grep -i fort&quot; and look at the output to ensure that your OMPI installation has F90 support compiled in.
<br>
<p><p><span class="quotelev1">&gt; Could the problem be from the hybrid parallelization?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; And something else which I am thinking of: Can extra flags for compiler make this happen?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The last question came to my mind because when I try this simple example with mpif90 alone (without make file), it works good.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $(MPIFC) -c $(FFLAGS) $(PFLAGS) $&lt; -o $@
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; To: Mohamad Ali Rostami &lt;ma.rostami_at_[hidden]&gt;; Open MPI Users &lt;users_at_[hidden]&gt; 
</span><br>
<span class="quotelev1">&gt; Sent: Monday, June 25, 2012 3:39 PM
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] MPI Problem
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jun 25, 2012, at 4:07 AM, Mohamad Ali Rostami wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I have an error since a week ago which it makes me crazy. :P
</span><br>
<span class="quotelev2">&gt; &gt; I have a OpenMP parallelized fortran (f90) program which I am going to parallelize some part of it, using MPI (OpenMPI).
</span><br>
<span class="quotelev2">&gt; &gt; When I want to compile the code with my new MPI code, I get this problem: 
</span><br>
<span class="quotelev2">&gt; &gt; &quot;Error: There is no specific subroutine for the generic 'mpi_init'&quot;, while the compilation has no problem
</span><br>
<span class="quotelev2">&gt; &gt; with the header &quot;use mpi&quot; and even it seems that it does not have any problems with the variables and parameters from
</span><br>
<span class="quotelev2">&gt; &gt; MPI and the problem is just with subroutines.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This *usually* means that you are calling the subroutine incorrectly (MPI_Init, in this case).  The prototype for MPI_Init is:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; subroutine MPI_Init(ierr)
</span><br>
<span class="quotelev1">&gt;   integer, intent(out) :: ierr
</span><br>
<span class="quotelev1">&gt; end subroutine MPI_Init
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Are you passing a writable integer parameter?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19662.php">Mohamad Ali Rostami: "Re: [OMPI users] MPI Problem"</a>
<li><strong>Previous message:</strong> <a href="19660.php">Mohamad Ali Rostami: "Re: [OMPI users] MPI Problem"</a>
<li><strong>In reply to:</strong> <a href="19660.php">Mohamad Ali Rostami: "Re: [OMPI users] MPI Problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19662.php">Mohamad Ali Rostami: "Re: [OMPI users] MPI Problem"</a>
<li><strong>Reply:</strong> <a href="19662.php">Mohamad Ali Rostami: "Re: [OMPI users] MPI Problem"</a>
<li><strong>Reply:</strong> <a href="19663.php">Mohamad Ali Rostami: "Re: [OMPI users] MPI Problem"</a>
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
