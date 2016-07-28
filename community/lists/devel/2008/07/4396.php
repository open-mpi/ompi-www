<?
$subject_val = "Re: [OMPI devel] ibcm private header file";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 22 12:38:40 2008" -->
<!-- isoreceived="20080722163840" -->
<!-- sent="Tue, 22 Jul 2008 12:38:35 -0400" -->
<!-- isosent="20080722163835" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] ibcm private header file" -->
<!-- id="07B04BAE-CC0E-4BE7-9E40-D02B138D133D_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="adabq0p5176.fsf_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] ibcm private header file<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-22 12:38:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4397.php">Ralph Castain: "Re: [OMPI devel] LSF &amp; ompi r18978"</a>
<li><strong>Previous message:</strong> <a href="4395.php">Thomas Herault: "[OMPI devel] LSF &amp; ompi r18978"</a>
<li><strong>In reply to:</strong> <a href="4394.php">Roland Dreier: "Re: [OMPI devel] ibcm private header file"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4400.php">Jeff Squyres: "Re: [OMPI devel] ibcm private header file"</a>
<li><strong>Reply:</strong> <a href="4400.php">Jeff Squyres: "Re: [OMPI devel] ibcm private header file"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 22, 2008, at 12:32 PM, Roland Dreier wrote:
<br>
<p><span class="quotelev2">&gt;&gt; So I think using byteorder.h is not a good idea (note the warning).
</span><br>
<span class="quotelev2">&gt;&gt; How about just having two #defines, picking the Right one based on
</span><br>
<span class="quotelev2">&gt;&gt; WORDS_BIGENDIAN?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Linux, the public &lt;byteswap.h&gt; header might have what you need.
</span><br>
<span class="quotelev1">&gt; For that matter &lt;infiniband/arch.h&gt; has htonll() defined.
</span><br>
<p>The problematic line is:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#define IB_CM_ASSIGN_SERVICE_ID __cpu_to_be64(0x0200000000000000ULL)
<br>
<p>There's no reason this has to be byte-swapped at compile time, right?   
<br>
Using htonll or OMPI's hton64() should be sufficient, right?
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4397.php">Ralph Castain: "Re: [OMPI devel] LSF &amp; ompi r18978"</a>
<li><strong>Previous message:</strong> <a href="4395.php">Thomas Herault: "[OMPI devel] LSF &amp; ompi r18978"</a>
<li><strong>In reply to:</strong> <a href="4394.php">Roland Dreier: "Re: [OMPI devel] ibcm private header file"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4400.php">Jeff Squyres: "Re: [OMPI devel] ibcm private header file"</a>
<li><strong>Reply:</strong> <a href="4400.php">Jeff Squyres: "Re: [OMPI devel] ibcm private header file"</a>
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
