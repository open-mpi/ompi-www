<?
$subject_val = "Re: [OMPI users] Possible Memory Leak in simple PingPong-Routine with OpenMPI 1.8.3?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 28 11:17:07 2014" -->
<!-- isoreceived="20141028151707" -->
<!-- sent="Tue, 28 Oct 2014 16:16:52 +0100" -->
<!-- isosent="20141028151652" -->
<!-- name="Marco Atzeri" -->
<!-- email="marco.atzeri_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Possible Memory Leak in simple PingPong-Routine with OpenMPI 1.8.3?" -->
<!-- id="544FB364.8000102_at_gmail.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="544F7859.4010907_at_iferc.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Possible Memory Leak in simple PingPong-Routine with OpenMPI 1.8.3?<br>
<strong>From:</strong> Marco Atzeri (<em>marco.atzeri_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-28 11:16:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25631.php">Gilles Gouaillardet: "Re: [OMPI users] SIGBUS in openmpi-dev-178-ga16c1e4 on Solaris 10 Sparc"</a>
<li><strong>Previous message:</strong> <a href="25629.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Java FAQ Page out of date"</a>
<li><strong>In reply to:</strong> <a href="25623.php">Gilles Gouaillardet: "Re: [OMPI users] Possible Memory Leak in simple PingPong-Routine with OpenMPI 1.8.3?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 10/28/2014 12:04 PM, Gilles Gouaillardet wrote:
<br>
<span class="quotelev1">&gt; Marco,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; here is attached a patch that fixes the issue
</span><br>
<span class="quotelev1">&gt; /* i could not find yet why this does not occurs on Linux ... */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; could you please give it a try ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>It solves the issue on 64 bit.
<br>
I see no growing memory usage anymore
<br>
<p>I will build 32 bit and then upload both as 1.8.3-2
<br>
<p>Thanks
<br>
Marco
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25631.php">Gilles Gouaillardet: "Re: [OMPI users] SIGBUS in openmpi-dev-178-ga16c1e4 on Solaris 10 Sparc"</a>
<li><strong>Previous message:</strong> <a href="25629.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Java FAQ Page out of date"</a>
<li><strong>In reply to:</strong> <a href="25623.php">Gilles Gouaillardet: "Re: [OMPI users] Possible Memory Leak in simple PingPong-Routine with OpenMPI 1.8.3?"</a>
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
