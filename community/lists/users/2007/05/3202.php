<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon May  7 13:21:30 2007" -->
<!-- isoreceived="20070507172130" -->
<!-- sent="Mon, 7 May 2007 11:21:23 -0600" -->
<!-- isosent="20070507172123" -->
<!-- name="Brian Barrett" -->
<!-- email="bbarrett_at_[hidden]" -->
<!-- subject="Re: [OMPI users] 1.2.1 configure bug report: set CC variable may produce broken *wrapper-data.txt" -->
<!-- id="861F6EB5-BF1A-4AA7-8ECE-9BEDEA5C8C8E_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="463F173F.9020902_at_free.fr" -->
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
<strong>From:</strong> Brian Barrett (<em>bbarrett_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-05-07 13:21:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3203.php">Paul Van Allsburg: "[OMPI users] openmpi-1.2.1 mpicc error"</a>
<li><strong>Previous message:</strong> <a href="3201.php">Jeff Squyres: "Re: [OMPI users] Allenia message queues."</a>
<li><strong>In reply to:</strong> <a href="3199.php">livelfs: "[OMPI users] 1.2.1 configure bug report: set CC variable may produce broken *wrapper-data.txt"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for the bug report.  I'm able to replicate your problem, and  
<br>
it will be fixed in the 1.2.2 release.
<br>
<p>Brian
<br>
<p>On May 7, 2007, at 6:10 AM, livelfs wrote:
<br>
<p><span class="quotelev1">&gt; Hi all
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have observed a regression between 1.2 and 1.2.1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; if CC is assigned an absolute path (i.e. export
</span><br>
<span class="quotelev1">&gt; CC=/opt/gcc/gcc-3.4.4/bin/gcc like in attached logs),
</span><br>
<span class="quotelev1">&gt; the */tools/wrappers/*-wrapper-data.txt files
</span><br>
<span class="quotelev1">&gt; produced by configure script have then a broken libs macro definition:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; libs=-lmpi -lopen-rte -lopen-pal   -ldl   dummy ranlib
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; instead of
</span><br>
<span class="quotelev1">&gt; libs=-lmpi -lopen-rte -lopen-pal   -ldl   -Wl,--export-dynamic -lnsl
</span><br>
<span class="quotelev1">&gt; -lutil -lm -ldl
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Stephane Rouberol
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;ompi-output.tar.gz&gt;
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
<li><strong>Next message:</strong> <a href="3203.php">Paul Van Allsburg: "[OMPI users] openmpi-1.2.1 mpicc error"</a>
<li><strong>Previous message:</strong> <a href="3201.php">Jeff Squyres: "Re: [OMPI users] Allenia message queues."</a>
<li><strong>In reply to:</strong> <a href="3199.php">livelfs: "[OMPI users] 1.2.1 configure bug report: set CC variable may produce broken *wrapper-data.txt"</a>
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
