<?
$subject_val = "Re: [OMPI users] openmpi/openib problems";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 19 14:35:51 2008" -->
<!-- isoreceived="20080219193551" -->
<!-- sent="Tue, 19 Feb 2008 13:35:06 -0600" -->
<!-- isosent="20080219193506" -->
<!-- name="jessie puls" -->
<!-- email="pulsj_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi/openib problems" -->
<!-- id="47BB2F6A.5040501_at_uni.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="47BB2C22.6020400_at_uni.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi/openib problems<br>
<strong>From:</strong> jessie puls (<em>pulsj_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-19 14:35:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5041.php">Ben Allan: "[OMPI users] mpi.h macro naming"</a>
<li><strong>Previous message:</strong> <a href="5039.php">jessie puls: "[OMPI users] openmpi/openib problems"</a>
<li><strong>In reply to:</strong> <a href="5039.php">jessie puls: "[OMPI users] openmpi/openib problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5049.php">Jeff Squyres: "Re: [OMPI users] openmpi/openib problems"</a>
<li><strong>Reply:</strong> <a href="5049.php">Jeff Squyres: "Re: [OMPI users] openmpi/openib problems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
jessie puls wrote:
<br>
<span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm having problems getting openmpi to work correctly using verbs on 
</span><br>
<span class="quotelev1">&gt; some systems.  It's been working using openib for quite some time, but I 
</span><br>
<span class="quotelev1">&gt; need to get it working using verbs for some research I'm doing.  
</span><br>
<p><p>This would make a whole lot more sense if I'd typed it correctly.  It's 
<br>
been working using ipoib.
<br>
<p><p>Anyway
<br>
<span class="quotelev1">&gt; all seems to be good on the openib side of things.  ibv_devinfo and 
</span><br>
<span class="quotelev1">&gt; ibv_devices returns device information, and they are listed as active on 
</span><br>
<span class="quotelev1">&gt; each node.  Also all hosts are visible to each other (ibhosts shows a 
</span><br>
<span class="quotelev1">&gt; full list).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The problem I see with openmpi is I have the openib btl, but not the 
</span><br>
<span class="quotelev1">&gt; openib mpool, and when looking at the contents of ompi/mca/mpool/ I 
</span><br>
<span class="quotelev1">&gt; don't see openib there (sm and rdma are both listed and ompi_info shows 
</span><br>
<span class="quotelev1">&gt; they've been included in the build).  Any help would be appreciated.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jessie
</span><br>
<span class="quotelev1">&gt; _______________________________________________
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
<li><strong>Next message:</strong> <a href="5041.php">Ben Allan: "[OMPI users] mpi.h macro naming"</a>
<li><strong>Previous message:</strong> <a href="5039.php">jessie puls: "[OMPI users] openmpi/openib problems"</a>
<li><strong>In reply to:</strong> <a href="5039.php">jessie puls: "[OMPI users] openmpi/openib problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5049.php">Jeff Squyres: "Re: [OMPI users] openmpi/openib problems"</a>
<li><strong>Reply:</strong> <a href="5049.php">Jeff Squyres: "Re: [OMPI users] openmpi/openib problems"</a>
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
