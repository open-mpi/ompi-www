<?
$subject_val = "Re: [OMPI users] boost + openmpi link errors: missing openmpi libraries";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 22 11:00:04 2010" -->
<!-- isoreceived="20101122160004" -->
<!-- sent="Mon, 22 Nov 2010 10:59:59 -0500" -->
<!-- isosent="20101122155959" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] boost + openmpi link errors: missing openmpi libraries" -->
<!-- id="7FC21594-04CD-4866-BE63-BCF7A5E8119C_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20101119144042.20401_at_web005.roc2.bluetie.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] boost + openmpi link errors: missing openmpi libraries<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-22 10:59:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14863.php">Jeff Squyres: "Re: [OMPI users] Infiniband problem, kernel mismatch"</a>
<li><strong>Previous message:</strong> <a href="14861.php">Jeff Squyres: "Re: [OMPI users] launching the mpi runtime"</a>
<li><strong>In reply to:</strong> <a href="14839.php">Hicham Mouline: "[OMPI users] boost + openmpi link errors: missing openmpi libraries"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This looks like something the boost people will have to support you with -- we don't know anything about their installer.
<br>
<p>Sorry!  :(
<br>
<p><p>On Nov 19, 2010, at 2:40 PM, Hicham Mouline wrote:
<br>
<p><span class="quotelev1">&gt; hello,sorry for cross posting. I've built openmpi 1.4.3 on win32 and generated only 4 release libs:
</span><br>
<span class="quotelev1">&gt; 3,677,712 libmpi.lib
</span><br>
<span class="quotelev1">&gt;   336,466 libmpi_cxx.lib
</span><br>
<span class="quotelev1">&gt;   758,686 libopen-pal.lib
</span><br>
<span class="quotelev1">&gt; 1,307,592 libopen-rte.lib
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've installed the boostPro 1.44 mpi library with the installer. But I have link errors:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1&gt;libboost_mpi-vc90-mt-1_44.lib(broadcast.obj) : error LNK2001: unresolved external symbol _MPI_Bcast_at_20
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; is boostpro's mpi lib against openmpi or another MPI implementation?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; regards,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14863.php">Jeff Squyres: "Re: [OMPI users] Infiniband problem, kernel mismatch"</a>
<li><strong>Previous message:</strong> <a href="14861.php">Jeff Squyres: "Re: [OMPI users] launching the mpi runtime"</a>
<li><strong>In reply to:</strong> <a href="14839.php">Hicham Mouline: "[OMPI users] boost + openmpi link errors: missing openmpi libraries"</a>
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
