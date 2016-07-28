<?
$subject_val = "Re: [OMPI users] problem with 32-bit mpiJava on openmpi-1.9a1r27361";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 25 16:28:17 2012" -->
<!-- isoreceived="20120925202817" -->
<!-- sent="Tue, 25 Sep 2012 22:28:14 +0200" -->
<!-- isosent="20120925202814" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problem with 32-bit mpiJava on openmpi-1.9a1r27361" -->
<!-- id="31810D42-6069-4588-AB69-62BC6AE94102_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201209251600.q8PFxnLc007670_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] problem with 32-bit mpiJava on openmpi-1.9a1r27361<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-25 16:28:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20314.php">mariana Vargas: "Re: [OMPI users] Problem runing MPI on cluster"</a>
<li><strong>Previous message:</strong> <a href="20312.php">Jeremiah Willcock: "[OMPI users] Memchecker failure with empty struct type"</a>
<li><strong>In reply to:</strong> <a href="20311.php">Siegmar Gross: "Re: [OMPI users] problem with 32-bit mpiJava on openmpi-1.9a1r27361"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20332.php">Siegmar Gross: "Re: [OMPI users] problem with 32-bit mpiJava on openmpi-1.9a1r27361"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 25, 2012, at 5:59 PM, Siegmar Gross wrote:
<br>
<p><span class="quotelev1">&gt; I have had &quot;--enable-orterun-prefix-by-default&quot; in my configure
</span><br>
<span class="quotelev1">&gt; command. I removed it and rebuilt the package and now the environment
</span><br>
<span class="quotelev1">&gt; is OK. Tommorrow I will run some tests and also try to get the
</span><br>
<span class="quotelev1">&gt; information about the topology for our M4000 server. Perhaps it is
</span><br>
<span class="quotelev1">&gt; still useful to find the error even if your Solaris developers leave.
</span><br>
<p><p>It may well be that enable-orterun-prefix-by-default is simply not a good fit for your environment.  That option is for a very specific set of assumptions that perhaps do not fit your situation.
<br>
<p>See <a href="http://www.open-mpi.org/faq/?category=running#mpirun-prefix">http://www.open-mpi.org/faq/?category=running#mpirun-prefix</a> for exactly what this option does (and does not) do.
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
<li><strong>Next message:</strong> <a href="20314.php">mariana Vargas: "Re: [OMPI users] Problem runing MPI on cluster"</a>
<li><strong>Previous message:</strong> <a href="20312.php">Jeremiah Willcock: "[OMPI users] Memchecker failure with empty struct type"</a>
<li><strong>In reply to:</strong> <a href="20311.php">Siegmar Gross: "Re: [OMPI users] problem with 32-bit mpiJava on openmpi-1.9a1r27361"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20332.php">Siegmar Gross: "Re: [OMPI users] problem with 32-bit mpiJava on openmpi-1.9a1r27361"</a>
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
