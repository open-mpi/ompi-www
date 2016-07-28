<?
$subject_val = "Re: [OMPI users] MPI Problem";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 25 09:39:03 2012" -->
<!-- isoreceived="20120625133903" -->
<!-- sent="Mon, 25 Jun 2012 09:39:02 -0400" -->
<!-- isosent="20120625133902" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI Problem" -->
<!-- id="BEE64E30-AB18-40B6-B32E-74E12C1F0EA9_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1340611644.50011.YahooMailNeo_at_web125704.mail.ne1.yahoo.com" -->
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
<strong>Date:</strong> 2012-06-25 09:39:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19660.php">Mohamad Ali Rostami: "Re: [OMPI users] MPI Problem"</a>
<li><strong>Previous message:</strong> <a href="19658.php">Josh Hursey: "[OMPI users] Re: [OMPI users] &#187;&#216;&#184;&#180;: [OMPI users] Fault Tolerant Features in OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="19655.php">Mohamad Ali Rostami: "[OMPI users] MPI Problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19660.php">Mohamad Ali Rostami: "Re: [OMPI users] MPI Problem"</a>
<li><strong>Reply:</strong> <a href="19660.php">Mohamad Ali Rostami: "Re: [OMPI users] MPI Problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 25, 2012, at 4:07 AM, Mohamad Ali Rostami wrote:
<br>
<p><span class="quotelev1">&gt; I have an error since a week ago which it makes me crazy. :P
</span><br>
<span class="quotelev1">&gt; I have a OpenMP parallelized fortran (f90) program which I am going to parallelize some part of it, using MPI (OpenMPI).
</span><br>
<span class="quotelev1">&gt; When I want to compile the code with my new MPI code, I get this problem: 
</span><br>
<span class="quotelev1">&gt; &quot;Error: There is no specific subroutine for the generic 'mpi_init'&quot;, while the compilation has no problem
</span><br>
<span class="quotelev1">&gt; with the header &quot;use mpi&quot; and even it seems that it does not have any problems with the variables and parameters from
</span><br>
<span class="quotelev1">&gt; MPI and the problem is just with subroutines.
</span><br>
<p>This *usually* means that you are calling the subroutine incorrectly (MPI_Init, in this case).  The prototype for MPI_Init is:
<br>
<p>subroutine MPI_Init(ierr)
<br>
&nbsp;&nbsp;integer, intent(out) :: ierr
<br>
end subroutine MPI_Init
<br>
<p>Are you passing a writable integer parameter?
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19660.php">Mohamad Ali Rostami: "Re: [OMPI users] MPI Problem"</a>
<li><strong>Previous message:</strong> <a href="19658.php">Josh Hursey: "[OMPI users] Re: [OMPI users] &#187;&#216;&#184;&#180;: [OMPI users] Fault Tolerant Features in OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="19655.php">Mohamad Ali Rostami: "[OMPI users] MPI Problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19660.php">Mohamad Ali Rostami: "Re: [OMPI users] MPI Problem"</a>
<li><strong>Reply:</strong> <a href="19660.php">Mohamad Ali Rostami: "Re: [OMPI users] MPI Problem"</a>
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
