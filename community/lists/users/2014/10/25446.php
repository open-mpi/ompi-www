<?
$subject_val = "Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct  3 10:47:32 2014" -->
<!-- isoreceived="20141003144732" -->
<!-- sent="Fri, 3 Oct 2014 14:47:31 +0000" -->
<!-- isosent="20141003144731" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT" -->
<!-- id="E57D1643-3AB8-4BE7-93D5-34890C976378_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAG8o1y64X=-H3FUhyY3F9+Urfa=998jzOG+A5kZU0=_W2fP3FQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-03 10:47:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25447.php">Diego Avesani: "Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT"</a>
<li><strong>Previous message:</strong> <a href="25445.php">Maxime Boissonneault: "[OMPI users] Compiling OpenMPI 1.8.3 with PGI 14.9"</a>
<li><strong>In reply to:</strong> <a href="25444.php">Diego Avesani: "Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25447.php">Diego Avesani: "Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT"</a>
<li><strong>Reply:</strong> <a href="25447.php">Diego Avesani: "Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 3, 2014, at 10:38 AM, Diego Avesani &lt;diego.avesani_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Dear all, Dear Jeff,
</span><br>
<span class="quotelev1">&gt; when I use 
</span><br>
<span class="quotelev1">&gt; use MPI, I get
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /tmp/ifortiW8IBH.i90: catastrophic error: **Internal compiler error: segmentation violation signal raised** Please report this error along with the circumstances in which it occurred in a Software Problem Report.  Note: File and line given may not be explicit cause of this error.
</span><br>
<span class="quotelev1">&gt; compilation aborted for SPH_MPI.f90 (code 1)
</span><br>
<p>Sounds like you need to upgrade your compiler to get the latest updates/bug fixes.
<br>
<p><span class="quotelev1">&gt; If i use &quot;use mpi_f08&quot;, I get
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; SPH_MPI.f90(43): error #6285: There is no matching specific subroutine for this generic subroutine call.   [MPI_CART_CREATE]
</span><br>
<span class="quotelev1">&gt;    CALL MPI_CART_CREATE (MPI_COMM_WORLD,ndims,dims,periods,.TRUE.,COMM_CART,MPI%iErr)
</span><br>
<span class="quotelev1">&gt; --------^
</span><br>
<p>Sounds like you might have mistakes in this part of the code.
<br>
<p>But note that mpi_f08 involves *changes* to your code, compared to the mpif.h and mpi interfaces -- all MPI handles, for example, have distinct types now -- they're not integers.  For example, you'll need something like this:
<br>
<p>&nbsp;&nbsp;type(MPI_Comm) :: COMM_CART
<br>
<p><span class="quotelev1">&gt; about mpif90 -r8 *.f90
</span><br>
<span class="quotelev1">&gt; when I istalled open MPI I run
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ./configure --prefix/opt/openmpi cc=icc cxx=icpc f77=ifort FC=ifort
</span><br>
<p>F77 is ignored these days; FC is the only one that matters.  And I assume &quot;cc&quot; and &quot;cxx&quot; were typos; I assume you actually used &quot;CC&quot; and &quot;CXX&quot;, right?
<br>
<p>If you're going to compile your application with -r8, then you need to configure OMPI with -r8, e.g., add &quot;FCFLAGS=-r8&quot; in there.  I don't remember what that other flag was you specified offhand, but if it's important, then you need to specify it on the configure command line, for whichever compiler flags are relevant.
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
<li><strong>Next message:</strong> <a href="25447.php">Diego Avesani: "Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT"</a>
<li><strong>Previous message:</strong> <a href="25445.php">Maxime Boissonneault: "[OMPI users] Compiling OpenMPI 1.8.3 with PGI 14.9"</a>
<li><strong>In reply to:</strong> <a href="25444.php">Diego Avesani: "Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25447.php">Diego Avesani: "Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT"</a>
<li><strong>Reply:</strong> <a href="25447.php">Diego Avesani: "Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT"</a>
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
