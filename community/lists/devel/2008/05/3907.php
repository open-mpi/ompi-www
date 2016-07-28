<?
$subject_val = "Re: [OMPI devel] btl_openib_iwarp.c : making platform specific calls";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 13 13:53:04 2008" -->
<!-- isoreceived="20080513175304" -->
<!-- sent="Tue, 13 May 2008 12:52:58 -0500" -->
<!-- isosent="20080513175258" -->
<!-- name="Jon Mason" -->
<!-- email="jon_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] btl_openib_iwarp.c : making platform specific calls" -->
<!-- id="200805131252.58214.jon_at_opengridcomputing.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="Pine.LNX.4.64.0805131319340.4271_at_marvin.we-be-smart.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] btl_openib_iwarp.c : making platform specific calls<br>
<strong>From:</strong> Jon Mason (<em>jon_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-13 13:52:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3908.php">Brad Benton: "[OMPI devel] v1.3 Feature Freeze in effect"</a>
<li><strong>Previous message:</strong> <a href="3906.php">Brian W. Barrett: "Re: [OMPI devel] btl_openib_iwarp.c : making platform specific calls"</a>
<li><strong>In reply to:</strong> <a href="3906.php">Brian W. Barrett: "Re: [OMPI devel] btl_openib_iwarp.c : making platform specific calls"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tuesday 13 May 2008 12:20:57 pm Brian W. Barrett wrote:
<br>
<span class="quotelev1">&gt; On Tue, 13 May 2008, Don Kerr wrote:
</span><br>
<span class="quotelev2">&gt; &gt; I believe there are similar operations being used by other areas of open
</span><br>
<span class="quotelev2">&gt; &gt; mpi, place to start looking would be, opal/util/if.c.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes, opal/util/if.h and opal/util/net.h provide a portable interface to
</span><br>
<span class="quotelev1">&gt; almost everything that comes from getifaddrs().
</span><br>
<p>Cool, it looks like it has everything I need.  I'll see if I can churn this 
<br>
out and get it working.  Of course, I make no promises that it will actually 
<br>
work on Solaris...only that it shouldn't build break you anymore.
<br>
<p>Thanks,
<br>
Jon
<br>
<p><span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3908.php">Brad Benton: "[OMPI devel] v1.3 Feature Freeze in effect"</a>
<li><strong>Previous message:</strong> <a href="3906.php">Brian W. Barrett: "Re: [OMPI devel] btl_openib_iwarp.c : making platform specific calls"</a>
<li><strong>In reply to:</strong> <a href="3906.php">Brian W. Barrett: "Re: [OMPI devel] btl_openib_iwarp.c : making platform specific calls"</a>
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
