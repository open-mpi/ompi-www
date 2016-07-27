<?
$subject_val = "Re: [hwloc-devel] &quot;file name is too long&quot; error during make	distwith libpci branch";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan  8 10:41:15 2010" -->
<!-- isoreceived="20100108154115" -->
<!-- sent="Fri, 08 Jan 2010 16:41:09 +0100" -->
<!-- isosent="20100108154109" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] &amp;quot;file name is too long&amp;quot; error during make	distwith libpci branch" -->
<!-- id="4B475215.2010306_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="915A7A32-74B3-445F-98AB-C5F24A377B9E_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] &quot;file name is too long&quot; error during make	distwith libpci branch<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-08 10:41:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0567.php">Jeff Squyres: "Re: [hwloc-devel] &quot;file name is too long&quot; error during make	distwith libpci branch"</a>
<li><strong>Previous message:</strong> <a href="0565.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.0a1r1569)"</a>
<li><strong>In reply to:</strong> <a href="0560.php">Jeff Squyres: "Re: [hwloc-devel] &quot;file name is too long&quot; error during make distwith libpci branch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0567.php">Jeff Squyres: "Re: [hwloc-devel] &quot;file name is too long&quot; error during make	distwith libpci branch"</a>
<li><strong>Reply:</strong> <a href="0567.php">Jeff Squyres: "Re: [hwloc-devel] &quot;file name is too long&quot; error during make	distwith libpci branch"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Jan 6, 2010, at 3:26 PM, Samuel Thibault wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; C&#233;dric Augonnet, le Wed 06 Jan 2010 21:20:48 +0100, a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tar:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hwloc-1.0a1r1568/doc/doxygen-doc/latex/structhwloc__obj__attr__u_1_1hwloc__bridge__attr__u_1_1hwloc__bridge__downstream__attr__u_1_1hwl68ed11ab93c48099bfcc01f3e8bca322.tex:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; file name is too long (cannot be split); not dumped
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev2">&gt;&gt; I'm wondering whether we could not just remove latex/ on distclean (but
</span><br>
<span class="quotelev2">&gt;&gt; keeping the generated PDFs).
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Wow -- doxy sure makes long filenames!  I'm amazed that even the ustar format wasn't enough!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If we want to whack the .tex files, we certainly can (and just include the HTML and PDFs).  I don't think I have a strong feeling either way.
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>Are these tex files shipped because people might want to rebuild the PDF
<br>
? I am ok if we don't ship them.
<br>
<p>But we still have to fix the HTML and manpage long filenames. We could:
<br>
* use shorter type names in the device attributes, but it'll be hard
<br>
anyway since we it's waaaaaay too long. doxygen didn't actually go the
<br>
lastest level of nested struct/unions: we have union hwloc_obj_attr_u -&gt;
<br>
struct hwloc_bridge_attr_u -&gt; union hwloc_bridge_downstream_attr_u -&gt;
<br>
struct hwloc_bridge_downstream_pci_attr_u
<br>
* stop doing nested declarations of all these attribute union/structs so
<br>
that doxygen generates foo and bar instead of foo and foo_bar. but we'll
<br>
end up having many struct/union declarations and I think it would be
<br>
hard for people to read them while traversing the unique nested
<br>
declaration is easy.
<br>
<p>I am looking for a way to tell doxygen to output foo and bar even when
<br>
bar is declared inside foo but I didn't find anything yet.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0567.php">Jeff Squyres: "Re: [hwloc-devel] &quot;file name is too long&quot; error during make	distwith libpci branch"</a>
<li><strong>Previous message:</strong> <a href="0565.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.0a1r1569)"</a>
<li><strong>In reply to:</strong> <a href="0560.php">Jeff Squyres: "Re: [hwloc-devel] &quot;file name is too long&quot; error during make distwith libpci branch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0567.php">Jeff Squyres: "Re: [hwloc-devel] &quot;file name is too long&quot; error during make	distwith libpci branch"</a>
<li><strong>Reply:</strong> <a href="0567.php">Jeff Squyres: "Re: [hwloc-devel] &quot;file name is too long&quot; error during make	distwith libpci branch"</a>
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
