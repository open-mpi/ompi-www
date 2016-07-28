<?
$subject_val = "Re: [OMPI devel] Build failures on trunk? r21235";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 14 16:13:05 2009" -->
<!-- isoreceived="20090514201305" -->
<!-- sent="Thu, 14 May 2009 14:12:59 -0600" -->
<!-- isosent="20090514201259" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Build failures on trunk? r21235" -->
<!-- id="71d2d8cc0905141312r5971f6bcq9a16074a9ccad073_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4A0C78E5.5090501_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Build failures on trunk? r21235<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-14 16:12:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6047.php">Ashley Pittman: "[OMPI devel] ompi-ps broken or just changed?"</a>
<li><strong>Previous message:</strong> <a href="6045.php">Bryan Lally: "Re: [OMPI devel] Build failures on trunk? r21235"</a>
<li><strong>In reply to:</strong> <a href="6045.php">Bryan Lally: "Re: [OMPI devel] Build failures on trunk? r21235"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6039.php">Bryan Lally: "Re: [OMPI devel] Build failures on trunk? r21235"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Wow, that is bizarre. I am building on an identical box (same hardware and
<br>
compilers) without problem - both dynamic and static builds.
<br>
<p>I'll bet the problem is that you are using Mac's default libtool - did you
<br>
install glibtool? Is your path pointing to it?
<br>
<p><p><p>On Thu, May 14, 2009 at 2:02 PM, Bryan Lally &lt;lally_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  I take that back -- I just did 3 more builds and was unable to get the VT
</span><br>
<span class="quotelev2">&gt;&gt; build to fail.  That's not good.  :-(
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And I'm never getting there - I still fail in tools/orte-iof, same way.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I tried removing apple's mpi.h in /usr/include, but that wasn't it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is a very stock OS X box.  Apple's tools, including gcc (4.0.1),
</span><br>
<span class="quotelev1">&gt; libtool and the linker.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        - Bryan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Bryan Lally, lally_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 505.667.9954
</span><br>
<span class="quotelev1">&gt; CCS-2
</span><br>
<span class="quotelev1">&gt; Los Alamos National Laboratory
</span><br>
<span class="quotelev1">&gt; Los Alamos, New Mexico
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-6046/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6047.php">Ashley Pittman: "[OMPI devel] ompi-ps broken or just changed?"</a>
<li><strong>Previous message:</strong> <a href="6045.php">Bryan Lally: "Re: [OMPI devel] Build failures on trunk? r21235"</a>
<li><strong>In reply to:</strong> <a href="6045.php">Bryan Lally: "Re: [OMPI devel] Build failures on trunk? r21235"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6039.php">Bryan Lally: "Re: [OMPI devel] Build failures on trunk? r21235"</a>
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
