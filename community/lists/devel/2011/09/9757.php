<?
$subject_val = "Re: [OMPI devel] RFC: make hwloc be a 1st-class citizen";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 12 09:46:08 2011" -->
<!-- isoreceived="20110912134608" -->
<!-- sent="Mon, 12 Sep 2011 07:46:06 -0600" -->
<!-- isosent="20110912134606" -->
<!-- name="Kenneth Lloyd" -->
<!-- email="kenneth.lloyd_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: make hwloc be a 1st-class citizen" -->
<!-- id="00f901cc7152$526e5080$f74af180$_at_lloyd@wattsys.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="C8FD33F7-24C4-4FB5-A2A2-39A76B4928CA_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: make hwloc be a 1st-class citizen<br>
<strong>From:</strong> Kenneth Lloyd (<em>kenneth.lloyd_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-12 09:46:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9758.php">Jeff Squyres: "Re: [OMPI devel] RFC: make hwloc be a 1st-class citizen"</a>
<li><strong>Previous message:</strong> <a href="9756.php">Jeff Squyres: "Re: [OMPI devel] RFC: make hwloc be a 1st-class citizen"</a>
<li><strong>In reply to:</strong> <a href="9756.php">Jeff Squyres: "Re: [OMPI devel] RFC: make hwloc be a 1st-class citizen"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9758.php">Jeff Squyres: "Re: [OMPI devel] RFC: make hwloc be a 1st-class citizen"</a>
<li><strong>Reply:</strong> <a href="9758.php">Jeff Squyres: "Re: [OMPI devel] RFC: make hwloc be a 1st-class citizen"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
According to <a href="http://gcc.gnu.org/onlinedocs/cpp/If.html">http://gcc.gnu.org/onlinedocs/cpp/If.html</a>
<br>
<p>&quot;The `#if' directive allows you to test the value of an arithmetic
<br>
expression, rather than the mere existence of one macro.&quot;
<br>
<p>Is the objective to test for the existence of the macro, its value, or its
<br>
value IFF it exists?
<br>
<p>Ken Lloyd
<br>
<p>-----Original Message-----
<br>
From: devel-bounces_at_[hidden] [mailto:devel-bounces_at_[hidden]] On
<br>
Behalf Of Jeff Squyres
<br>
Sent: Monday, September 12, 2011 7:07 AM
<br>
To: Open MPI Developers
<br>
Subject: Re: [OMPI devel] RFC: make hwloc be a 1st-class citizen
<br>
<p>On Sep 12, 2011, at 8:51 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; *** Remember that although the opal_hwloc_topology global variable will
</span><br>
always be available, ##IT MAY BE NULL## on platforms where hwloc was
<br>
compiled out / not supported.  Therefore, you MUST protect access to hwloc
<br>
API calls with #if OPAL_HAVE_HWLOC!  See the original RFC text below.
<br>
<p>Oops!  Ralph just reminded me that this was slightly inaccurate.
<br>
<p>If hwloc is not present, then the global variable opal_hwloc_topology won't
<br>
be present at all (because its corresponding hwloc type won't be available).
<br>
Hence, the example in the original RFC isn't quite right:
<br>
<p><span class="quotelev2">&gt;&gt;  if (NULL != opal_hwloc_topology) {
</span><br>
<span class="quotelev2">&gt;&gt; #if OPAL_HAVE_HWLOC
</span><br>
<span class="quotelev2">&gt;&gt;      // ...use hwloc API, etc.
</span><br>
<span class="quotelev2">&gt;&gt; #endif
</span><br>
<span class="quotelev2">&gt;&gt;  }
</span><br>
<p>This really should be:
<br>
<p>#if OPAL_HAVE_HWLOC
<br>
&nbsp;&nbsp;if (NULL != opal_hwloc_topology) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// ...use hwloc API, etc.
<br>
&nbsp;&nbsp;}
<br>
#endif
<br>
<p>Sorry for the confusion!
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
_______________________________________________
devel mailing list
devel_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
-----
No virus found in this message.
Checked by AVG - www.avg.com
Version: 10.0.1392 / Virus Database: 1520/3891 - Release Date: 09/11/11
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9758.php">Jeff Squyres: "Re: [OMPI devel] RFC: make hwloc be a 1st-class citizen"</a>
<li><strong>Previous message:</strong> <a href="9756.php">Jeff Squyres: "Re: [OMPI devel] RFC: make hwloc be a 1st-class citizen"</a>
<li><strong>In reply to:</strong> <a href="9756.php">Jeff Squyres: "Re: [OMPI devel] RFC: make hwloc be a 1st-class citizen"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9758.php">Jeff Squyres: "Re: [OMPI devel] RFC: make hwloc be a 1st-class citizen"</a>
<li><strong>Reply:</strong> <a href="9758.php">Jeff Squyres: "Re: [OMPI devel] RFC: make hwloc be a 1st-class citizen"</a>
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
