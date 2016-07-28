<?
$subject_val = "Re: [OMPI users] OPENMPI-1.8.3: missing fortran bindings for	MPI_SIZEOF";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 11 10:22:20 2014" -->
<!-- isoreceived="20141111152220" -->
<!-- sent="Tue, 11 Nov 2014 15:22:17 +0000" -->
<!-- isosent="20141111152217" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OPENMPI-1.8.3: missing fortran bindings for	MPI_SIZEOF" -->
<!-- id="71A00845-0FDA-463B-A8D4-EACF03F7736A_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="87vbmln6p0.fsf_at_pc102091.liv.ac.uk" -->
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
<strong>Subject:</strong> Re: [OMPI users] OPENMPI-1.8.3: missing fortran bindings for	MPI_SIZEOF<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-11 10:22:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25749.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OPENMPI-1.8.3: missing fortran	bindings	for	MPI_SIZEOF"</a>
<li><strong>Previous message:</strong> <a href="25747.php">Ralph Castain: "Re: [OMPI users] oversubscription of slots with GridEngine"</a>
<li><strong>In reply to:</strong> <a href="25744.php">Dave Love: "Re: [OMPI users] OPENMPI-1.8.3: missing fortran bindings for MPI_SIZEOF"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25692.php">Dave Love: "Re: [OMPI users] OPENMPI-1.8.3: missing fortran bindings for MPI_SIZEOF"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 11, 2014, at 9:38 AM, Dave Love &lt;d.love_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev2">&gt;&gt; 1. All modern compilers have ignore-TKR syntax,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hang on!  (An equivalent of) ignore_tkr only appeared in gfortran 4.9
</span><br>
<span class="quotelev1">&gt; (the latest release) as far as I know.  The system compiler of the bulk
</span><br>
<span class="quotelev1">&gt; of GNU/Linux HPC systems currently is distinctly older (and the RHEL
</span><br>
<span class="quotelev1">&gt; devtoolset packaging of gcc-4.9 is still beta).  RHEL 6 has gcc 4.4 as
</span><br>
<span class="quotelev1">&gt; te system compiler and Debian stable has 4.7 and older.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm just pointing that out in case decisions are being made assuming
</span><br>
<span class="quotelev1">&gt; everyone has this.  No worries if not.
</span><br>
<p>Sorry, that statement was loaded with my assumption that &quot;gfortran 4.9 is a modern fortran compiler; prior versions are not.&quot;
<br>
<p>So don't worry: we're well aware that only gfortran &gt;=4.9 has these features, and most everyone is not using it yet.
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
<li><strong>Next message:</strong> <a href="25749.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OPENMPI-1.8.3: missing fortran	bindings	for	MPI_SIZEOF"</a>
<li><strong>Previous message:</strong> <a href="25747.php">Ralph Castain: "Re: [OMPI users] oversubscription of slots with GridEngine"</a>
<li><strong>In reply to:</strong> <a href="25744.php">Dave Love: "Re: [OMPI users] OPENMPI-1.8.3: missing fortran bindings for MPI_SIZEOF"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25692.php">Dave Love: "Re: [OMPI users] OPENMPI-1.8.3: missing fortran bindings for MPI_SIZEOF"</a>
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
