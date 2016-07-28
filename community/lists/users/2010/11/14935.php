<?
$subject_val = "Re: [OMPI users] Solaris10/SPARC: atomic_cmpset_64 broken";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 29 17:21:55 2010" -->
<!-- isoreceived="20101129222155" -->
<!-- sent="Mon, 29 Nov 2010 17:21:50 -0500" -->
<!-- isosent="20101129222150" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Solaris10/SPARC: atomic_cmpset_64 broken" -->
<!-- id="F6C70B70-39FD-408F-8B4A-D8A385140815_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1289655614.2199.4.camel_at_nic-desktop" -->
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
<strong>Subject:</strong> Re: [OMPI users] Solaris10/SPARC: atomic_cmpset_64 broken<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-29 17:21:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14936.php">George Bosilca: "Re: [OMPI users] Question about collective messages implementation"</a>
<li><strong>Previous message:</strong> <a href="14934.php">Jeff Squyres: "Re: [OMPI users] Help!!!!!!!!!!!!Openmpi instal for ubuntu 64 bits"</a>
<li><strong>In reply to:</strong> <a href="14752.php">Nicolai Stange: "[OMPI users] Solaris10/SPARC: atomic_cmpset_64 broken"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We're in process of analyzing this issue. I'll keep you updated.
<br>
<p>&nbsp;&nbsp;george.
<br>
<p><p>On Nov 13, 2010, at 08:40 , Nicolai Stange wrote:
<br>
<p><span class="quotelev1">&gt; Hi everybody,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; gcc 4.5.1 with -O2 optimizes the 'ret = newval' away because %0 is
</span><br>
<span class="quotelev1">&gt; declared as being write only.
</span><br>
<span class="quotelev1">&gt; Fix is attached.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Nicolai
</span><br>
<span class="quotelev1">&gt; &lt;02_fix_atomic_cmpset_64.diff&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14936.php">George Bosilca: "Re: [OMPI users] Question about collective messages implementation"</a>
<li><strong>Previous message:</strong> <a href="14934.php">Jeff Squyres: "Re: [OMPI users] Help!!!!!!!!!!!!Openmpi instal for ubuntu 64 bits"</a>
<li><strong>In reply to:</strong> <a href="14752.php">Nicolai Stange: "[OMPI users] Solaris10/SPARC: atomic_cmpset_64 broken"</a>
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
