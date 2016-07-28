<?
$subject_val = "Re: [OMPI users] Anybody built a working 1.4.1 on Solaris 8 (Sparc)?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb  5 08:57:21 2010" -->
<!-- isoreceived="20100205135721" -->
<!-- sent="Fri, 05 Feb 2010 08:57:16 -0500" -->
<!-- isosent="20100205135716" -->
<!-- name="Iain Bason" -->
<!-- email="Iain.Bason_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Anybody built a working 1.4.1 on Solaris 8 (Sparc)?" -->
<!-- id="B43FB22A-63A8-4410-B83A-6387E6A4B42E_at_sun.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="E1Nd9cL-00016Z-6d_at_mendel.bio.caltech.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Anybody built a working 1.4.1 on Solaris 8 (Sparc)?<br>
<strong>From:</strong> Iain Bason (<em>Iain.Bason_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-05 08:57:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12020.php">Terry Dontje: "Re: [OMPI users] Anybody built a working 1.4.1 on Solaris 8 (Sparc)?"</a>
<li><strong>Previous message:</strong> <a href="12018.php">Marcus G. Daniels: "Re: [OMPI users] INSTALL bug in 64-bit build of OpenMPI Release build on Windows - has workaround"</a>
<li><strong>In reply to:</strong> <a href="12009.php">David Mathog: "[OMPI users] Anybody built a working 1.4.1 on Solaris 8 (Sparc)?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12020.php">Terry Dontje: "Re: [OMPI users] Anybody built a working 1.4.1 on Solaris 8 (Sparc)?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 4, 2010, at 4:52 PM, David Mathog wrote:
<br>
<p><span class="quotelev1">&gt; Has anybody built 1.4.1 on Solaris 8 (Sparc), because it isn't going
</span><br>
<span class="quotelev1">&gt; very well here.  If you succeeded at this please tell me how you did  
</span><br>
<span class="quotelev1">&gt; it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here is my tale of woe.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; First attempt with gcc (3.4.6 from SunFreeware) and
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  ./configure --with-sge --prefix=/opt/ompi141
</span><br>
<p>I think you need to add --enable-heterogeneous because you are trying  
<br>
to run this on a cluster of SPARC and IA32 machines.  (You will also  
<br>
need to use that configure flag to build OMPI on your IA32 machines.)
<br>
<p>Iain
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12020.php">Terry Dontje: "Re: [OMPI users] Anybody built a working 1.4.1 on Solaris 8 (Sparc)?"</a>
<li><strong>Previous message:</strong> <a href="12018.php">Marcus G. Daniels: "Re: [OMPI users] INSTALL bug in 64-bit build of OpenMPI Release build on Windows - has workaround"</a>
<li><strong>In reply to:</strong> <a href="12009.php">David Mathog: "[OMPI users] Anybody built a working 1.4.1 on Solaris 8 (Sparc)?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12020.php">Terry Dontje: "Re: [OMPI users] Anybody built a working 1.4.1 on Solaris 8 (Sparc)?"</a>
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
