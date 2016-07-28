<?
$subject_val = "Re: [OMPI devel] 1.3 PML default choice";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 13 20:25:17 2009" -->
<!-- isoreceived="20090114012517" -->
<!-- sent="Tue, 13 Jan 2009 20:25:09 -0500" -->
<!-- isosent="20090114012509" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.3 PML default choice" -->
<!-- id="BDE30567-7FC8-4DC1-907C-641B486E0891_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4B7E567A-A331-46DA-8618-37C8CB997DB8_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.3 PML default choice<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-13 20:25:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5162.php">George Bosilca: "Re: [OMPI devel] 1.3 PML default choice"</a>
<li><strong>Previous message:</strong> <a href="5160.php">Brian Barrett: "Re: [OMPI devel] 1.3 PML default choice"</a>
<li><strong>In reply to:</strong> <a href="5160.php">Brian Barrett: "Re: [OMPI devel] 1.3 PML default choice"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5162.php">George Bosilca: "Re: [OMPI devel] 1.3 PML default choice"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Brian -- I updated the README here and will CMR it over to v1.3:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/changeset/20265">https://svn.open-mpi.org/trac/ompi/changeset/20265</a>
<br>
<p><p>On Jan 13, 2009, at 8:18 PM, Brian Barrett wrote:
<br>
<p><span class="quotelev1">&gt; On Jan 13, 2009, at 5:48 PM, Patrick Geoffray wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Gaah!  I specifically asked Patrick and George about this and they  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; said that the README text was fine.  Grr...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; When I looked at that time, I vaguely remember that _both_ PMLs  
</span><br>
<span class="quotelev2">&gt;&gt; were initialized but CM was eventually used because it was the last  
</span><br>
<span class="quotelev2">&gt;&gt; one. It looked broken, but it worked in the end (MTL was used with  
</span><br>
<span class="quotelev2">&gt;&gt; CM PML). I don't know if that behavior changed since.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I just tested 1.3rc4 with MX and it uses the btl by default.  The  
</span><br>
<span class="quotelev1">&gt; reason is the cm init lowers the priority to 1 unless the MTL that  
</span><br>
<span class="quotelev1">&gt; loaded is psm, in which case it stays at the higher default of 30.   
</span><br>
<span class="quotelev1">&gt; It's a fairly easy fix, I think.  But the last time this was  
</span><br>
<span class="quotelev1">&gt; discussed people in the group had objections to using the MTL by  
</span><br>
<span class="quotelev1">&gt; default with MX.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brian
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
<li><strong>Next message:</strong> <a href="5162.php">George Bosilca: "Re: [OMPI devel] 1.3 PML default choice"</a>
<li><strong>Previous message:</strong> <a href="5160.php">Brian Barrett: "Re: [OMPI devel] 1.3 PML default choice"</a>
<li><strong>In reply to:</strong> <a href="5160.php">Brian Barrett: "Re: [OMPI devel] 1.3 PML default choice"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5162.php">George Bosilca: "Re: [OMPI devel] 1.3 PML default choice"</a>
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
