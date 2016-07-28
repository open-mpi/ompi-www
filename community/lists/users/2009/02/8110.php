<?
$subject_val = "Re: [OMPI users] WRF, OpenMPI and PGI 7.2";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 19 11:27:04 2009" -->
<!-- isoreceived="20090219162704" -->
<!-- sent="Thu, 19 Feb 2009 11:26:59 -0500" -->
<!-- isosent="20090219162659" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] WRF, OpenMPI and PGI 7.2" -->
<!-- id="636292A4-442C-4A43-AAB8-409365D7CF90_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="499D850A.3080801_at_tamu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] WRF, OpenMPI and PGI 7.2<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-19 11:26:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8111.php">Elvedin Trnjanin: "Re: [OMPI users] WRF, OpenMPI and PGI 7.2"</a>
<li><strong>Previous message:</strong> <a href="8109.php">Gerry Creager: "Re: [OMPI users] WRF, OpenMPI and PGI 7.2"</a>
<li><strong>In reply to:</strong> <a href="8109.php">Gerry Creager: "Re: [OMPI users] WRF, OpenMPI and PGI 7.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8111.php">Elvedin Trnjanin: "Re: [OMPI users] WRF, OpenMPI and PGI 7.2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 19, 2009, at 11:12 AM, Gerry Creager wrote:
<br>
<p><span class="quotelev1">&gt; Elvedin,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yeah, I thought about that after finding a reference to this in the  
</span><br>
<span class="quotelev1">&gt; archives, so I redirected the path to MPI toward the gnu-compiled  
</span><br>
<span class="quotelev1">&gt; version.  It died in THIS manner:
</span><br>
<span class="quotelev1">&gt; make[3]: Entering directory `/home/gerry/WRFv3/WRFV3/external/ 
</span><br>
<span class="quotelev1">&gt; RSL_LITE'
</span><br>
<span class="quotelev1">&gt; mpicc -cc=gcc -DFSEEKO64_OK  -w -O3 -DDM_PARALLEL   -c c_code.c
</span><br>
<span class="quotelev1">&gt; pgcc-Error-Unknown switch: -cc=gcc
</span><br>
<span class="quotelev1">&gt; make[3]: [c_code.o] Error 1 (ignored)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Methinks the wrf configuration script and make file will need some  
</span><br>
<span class="quotelev1">&gt; tweeks.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Interesting thing: I have another system (alas, with mpich) where it  
</span><br>
<span class="quotelev1">&gt; compiles just fine.  I'm trying to sort this out, as on 2 systems,  
</span><br>
<span class="quotelev1">&gt; with openMPI, it does odd dances before dying.
</span><br>
<p>I believe that the -cc=gcc switch is an MPICH-specific switch...?   
<br>
(not 100% sure about that, but I know that OMPI doesn't intercept that  
<br>
switch -- so it just gets passed back to the back-end compiler, which,  
<br>
in your case, pgcc says &quot;I have no idea what that is&quot;).
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8111.php">Elvedin Trnjanin: "Re: [OMPI users] WRF, OpenMPI and PGI 7.2"</a>
<li><strong>Previous message:</strong> <a href="8109.php">Gerry Creager: "Re: [OMPI users] WRF, OpenMPI and PGI 7.2"</a>
<li><strong>In reply to:</strong> <a href="8109.php">Gerry Creager: "Re: [OMPI users] WRF, OpenMPI and PGI 7.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8111.php">Elvedin Trnjanin: "Re: [OMPI users] WRF, OpenMPI and PGI 7.2"</a>
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
