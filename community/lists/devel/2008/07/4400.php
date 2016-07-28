<?
$subject_val = "Re: [OMPI devel] ibcm private header file";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 23 09:12:36 2008" -->
<!-- isoreceived="20080723131236" -->
<!-- sent="Wed, 23 Jul 2008 09:12:16 -0400" -->
<!-- isosent="20080723131216" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] ibcm private header file" -->
<!-- id="A72B1F78-3D82-4FCC-88C5-60B094B21ED9_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="07B04BAE-CC0E-4BE7-9E40-D02B138D133D_at_cisco.com" -->
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
<strong>Date:</strong> 2008-07-23 09:12:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4401.php">Jeff Squyres: "Re: [OMPI devel] Fwd: [OMPI bugs] [Open MPI] #1250: Performance problem on SM"</a>
<li><strong>Previous message:</strong> <a href="4399.php">Lenny Verkhovsky: "[OMPI devel] Fwd: [OMPI bugs] [Open MPI] #1250: Performance problem on SM"</a>
<li><strong>In reply to:</strong> <a href="4396.php">Jeff Squyres: "Re: [OMPI devel] ibcm private header file"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This has now been fixed as of <a href="https://svn.open-mpi.org/trac/ompi/changeset/18995">https://svn.open-mpi.org/trac/ompi/changeset/18995</a> 
<br>
; MTT should [finally] run tonight without problems.
<br>
<p><p>On Jul 22, 2008, at 12:38 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On Jul 22, 2008, at 12:32 PM, Roland Dreier wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So I think using byteorder.h is not a good idea (note the warning).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; How about just having two #defines, picking the Right one based on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; WORDS_BIGENDIAN?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Linux, the public &lt;byteswap.h&gt; header might have what you need.
</span><br>
<span class="quotelev2">&gt;&gt; For that matter &lt;infiniband/arch.h&gt; has htonll() defined.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The problematic line is:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	#define IB_CM_ASSIGN_SERVICE_ID __cpu_to_be64(0x0200000000000000ULL)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There's no reason this has to be byte-swapped at compile time,  
</span><br>
<span class="quotelev1">&gt; right?  Using htonll or OMPI's hton64() should be sufficient, right?
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
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4401.php">Jeff Squyres: "Re: [OMPI devel] Fwd: [OMPI bugs] [Open MPI] #1250: Performance problem on SM"</a>
<li><strong>Previous message:</strong> <a href="4399.php">Lenny Verkhovsky: "[OMPI devel] Fwd: [OMPI bugs] [Open MPI] #1250: Performance problem on SM"</a>
<li><strong>In reply to:</strong> <a href="4396.php">Jeff Squyres: "Re: [OMPI devel] ibcm private header file"</a>
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
