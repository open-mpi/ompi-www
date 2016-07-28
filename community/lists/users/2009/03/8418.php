<?
$subject_val = "Re: [OMPI users] PGI 8.0-4 doesn't like ompi/mca/op/op.h";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 12 23:29:18 2009" -->
<!-- isoreceived="20090313032918" -->
<!-- sent="Thu, 12 Mar 2009 21:29:06 -0600" -->
<!-- isosent="20090313032906" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] PGI 8.0-4 doesn't like ompi/mca/op/op.h" -->
<!-- id="8B6EDC21-F347-40FE-B6F8-F8B0AB467649_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4ACDF412-495C-4479-BE1D-0657D67D37A7_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] PGI 8.0-4 doesn't like ompi/mca/op/op.h<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-12 23:29:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8419.php">Peter Teoh: "[OMPI users] MPI jobs ending up in one node"</a>
<li><strong>Previous message:</strong> <a href="8417.php">Jeff Squyres: "Re: [OMPI users] PGI 8.0-4 doesn't like ompi/mca/op/op.h"</a>
<li><strong>In reply to:</strong> <a href="8417.php">Jeff Squyres: "Re: [OMPI users] PGI 8.0-4 doesn't like ompi/mca/op/op.h"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8421.php">Andrew J Caird: "Re: [OMPI users] PGI 8.0-4 doesn't like ompi/mca/op/op.h"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I believe Mostyn's error is due to a change in PGI 8.0-x from earlier  
<br>
releases (PGI has been known to do these kind of things). My point was  
<br>
only that PGI is a tad different from our other compilers, and that we  
<br>
do typically see kernel-related issues as well. So one needs to watch  
<br>
out for PGI compiler issues.
<br>
<p>Note a recent commit by Rainer on the trunk relating to PGI compile  
<br>
issues on a different kernel...where we haven't seen those problems  
<br>
before on any of the kernels here. :-)
<br>
<p><p>On Mar 12, 2009, at 9:22 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On Mar 12, 2009, at 11:17 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I believe I reported this before on a different mailing list, but  
</span><br>
<span class="quotelev2">&gt;&gt; will
</span><br>
<span class="quotelev2">&gt;&gt; repeat it here. The PGI compilers rely on the Linux kernel for some
</span><br>
<span class="quotelev2">&gt;&gt; things. We found that the ability of the PGI compilers to build OMPI,
</span><br>
<span class="quotelev2">&gt;&gt; therefore, was highly dependent upon the specific Linux kernel on the
</span><br>
<span class="quotelev2">&gt;&gt; machine.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The error Mostyn was reporting seem to be related to the &quot;restrict&quot;  
</span><br>
<span class="quotelev1">&gt; keyword -- not particular kernel or glibc functionality.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Never say &quot;never&quot; though; I'll admit that the inner workings of  
</span><br>
<span class="quotelev1">&gt; compilers are a mystery to me.  :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8419.php">Peter Teoh: "[OMPI users] MPI jobs ending up in one node"</a>
<li><strong>Previous message:</strong> <a href="8417.php">Jeff Squyres: "Re: [OMPI users] PGI 8.0-4 doesn't like ompi/mca/op/op.h"</a>
<li><strong>In reply to:</strong> <a href="8417.php">Jeff Squyres: "Re: [OMPI users] PGI 8.0-4 doesn't like ompi/mca/op/op.h"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8421.php">Andrew J Caird: "Re: [OMPI users] PGI 8.0-4 doesn't like ompi/mca/op/op.h"</a>
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
