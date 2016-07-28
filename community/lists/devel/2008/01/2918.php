<?
$subject_val = "Re: [OMPI devel] Minor patch for !IPV6_V6ONLY";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan  1 06:03:53 2008" -->
<!-- isoreceived="20080101110353" -->
<!-- sent="Tue, 1 Jan 2008 12:03:40 +0100" -->
<!-- isosent="20080101110340" -->
<!-- name="Adrian Knoth" -->
<!-- email="adi_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Minor patch for !IPV6_V6ONLY" -->
<!-- id="20080101110340.GY11368_at_ltw.loris.tv" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4779BC12.20808_at_lbl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Minor patch for !IPV6_V6ONLY<br>
<strong>From:</strong> Adrian Knoth (<em>adi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-01 06:03:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2919.php">Josh Hursey: "Re: [OMPI devel] Cisco MTT runs"</a>
<li><strong>Previous message:</strong> <a href="2917.php">Patrick Geoffray: "Re: [OMPI devel] SDP support for OPEN-MPI"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2007/12/2914.php">Paul H. Hargrove: "[OMPI devel] Minor patch for !IPV6_V6ONLY"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, Dec 31, 2007 at 08:05:38PM -0800, Paul H. Hargrove wrote:
<br>
<p><span class="quotelev1">&gt; I just tried today to build the OMPI trunk on an old RH8 box and found 
</span><br>
<span class="quotelev1">&gt; that for
</span><br>
<span class="quotelev1">&gt;   OPAL_WANT_IPV6 &amp;&amp; !defined(IPV6_V6ONLY)
</span><br>
<span class="quotelev1">&gt; the file oob_tcp.c fails to compile due to unbalanced braces.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Swapping an #endif with a closing branc (patch below) fixed the problem 
</span><br>
<span class="quotelev1">&gt; for me.
</span><br>
<p>Thanks for the patch, you were absolutely right. Fixed in r17028.
<br>
<p><p><p><pre>
-- 
Cluster and Metacomputing Working Group
Friedrich-Schiller-Universit&#228;t Jena, Germany
private: <a href="http://adi.thur.de">http://adi.thur.de</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2919.php">Josh Hursey: "Re: [OMPI devel] Cisco MTT runs"</a>
<li><strong>Previous message:</strong> <a href="2917.php">Patrick Geoffray: "Re: [OMPI devel] SDP support for OPEN-MPI"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2007/12/2914.php">Paul H. Hargrove: "[OMPI devel] Minor patch for !IPV6_V6ONLY"</a>
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
