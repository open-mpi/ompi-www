<?
$subject_val = "Re: [OMPI devel] OpenMPI question";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 14 12:25:34 2009" -->
<!-- isoreceived="20090114172534" -->
<!-- sent="Wed, 14 Jan 2009 12:25:28 -0500" -->
<!-- isosent="20090114172528" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OpenMPI question" -->
<!-- id="1EF19EBA-0D70-479C-8267-548F93A960D0_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="67FFCCF3-0D31-4A9A-AD55-96B154CD9646_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] OpenMPI question<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-14 12:25:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5185.php">Caciano Machado: "[OMPI devel] crcpw verbosity"</a>
<li><strong>Previous message:</strong> <a href="5183.php">Ralph Castain: "Re: [OMPI devel] -display-map"</a>
<li><strong>In reply to:</strong> <a href="5142.php">Jeff Squyres: "Re: [OMPI devel] OpenMPI question"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
To followup for the web archives -- we discussed this more off-list.   
<br>
AFAIK, compiling Open MPI -- including its memory registration cache  
<br>
-- works fine in 32 bit mode, even on 64 bit platforms (there was some  
<br>
confusion between virtual and physical memory addresses and who uses  
<br>
what [OMPI *only* sees virtual memory addresses because it's user- 
<br>
space code]).
<br>
<p><p><p>On Jan 13, 2009, at 2:48 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On Jan 13, 2009, at 7:37 AM, Alex A. Granovsky wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Am I correct assuming that OpenMPI memory registration/cache module
</span><br>
<span class="quotelev2">&gt;&gt; is completely broken by design on any 32-bit system allowing
</span><br>
<span class="quotelev2">&gt;&gt; physical address space larger than 4 GB, and especially when
</span><br>
<span class="quotelev2">&gt;&gt; compiled for 32-bit under 64-bit OS (e.g., Linux)?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm not sure what you mean -- OMPI 32 bit builds on a 64 bit system  
</span><br>
<span class="quotelev1">&gt; should be ok...?  Have you found a problem?
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
<li><strong>Next message:</strong> <a href="5185.php">Caciano Machado: "[OMPI devel] crcpw verbosity"</a>
<li><strong>Previous message:</strong> <a href="5183.php">Ralph Castain: "Re: [OMPI devel] -display-map"</a>
<li><strong>In reply to:</strong> <a href="5142.php">Jeff Squyres: "Re: [OMPI devel] OpenMPI question"</a>
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
