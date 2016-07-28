<?
$subject_val = "Re: [OMPI devel] SM init failures";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Mar 28 13:50:35 2009" -->
<!-- isoreceived="20090328175035" -->
<!-- sent="Sat, 28 Mar 2009 13:50:26 -0400" -->
<!-- isosent="20090328175026" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] SM init failures" -->
<!-- id="8E13AE19-45C5-425C-A30D-C1A187BD770A_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="49CD94EA.8000802_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] SM init failures<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-28 13:50:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5730.php">George Bosilca: "Re: [OMPI devel] SM init failures"</a>
<li><strong>Previous message:</strong> <a href="5728.php">Eugene Loh: "Re: [OMPI devel] SM init failures"</a>
<li><strong>In reply to:</strong> <a href="5728.php">Eugene Loh: "Re: [OMPI devel] SM init failures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5730.php">George Bosilca: "Re: [OMPI devel] SM init failures"</a>
<li><strong>Reply:</strong> <a href="5730.php">George Bosilca: "Re: [OMPI devel] SM init failures"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
How about just write()ing a bunch of 0's instead of using ftruncate?
<br>
<p>On Mar 27, 2009, at 11:09 PM, Eugene Loh wrote:
<br>
<p><span class="quotelev1">&gt; Paul H. Hargrove wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Quoting from a different manpage for ftruncate:
</span><br>
<span class="quotelev2">&gt; &gt;        [T]he POSIX standard allows two behaviours for ftruncate
</span><br>
<span class="quotelev2">&gt; &gt;        when length exceeds the file length [...]: either returning  
</span><br>
<span class="quotelev1">&gt; an
</span><br>
<span class="quotelev2">&gt; &gt; error, or
</span><br>
<span class="quotelev2">&gt; &gt;        extending the file.
</span><br>
<span class="quotelev2">&gt; &gt; So, if that is to be trusted, it is not legal by POSIX to *silently*
</span><br>
<span class="quotelev2">&gt; &gt; not extend the file.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On a Solaris system, the ftruncate man page says:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      truncate, ftruncate - set a file to a specified length
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      The truncate() function causes the  regular  file  named  by
</span><br>
<span class="quotelev1">&gt;      path to have a size equal to length bytes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      If the file previously was larger  than  length,  the  extra
</span><br>
<span class="quotelev1">&gt;      data  is  discarded. If the file was previously shorter than
</span><br>
<span class="quotelev1">&gt;      length, its size is increased, and the extended area appears
</span><br>
<span class="quotelev1">&gt;      as if it were zero-filled.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So, the sense is not of &quot;truncating&quot; (shortening) per se, but of  
</span><br>
<span class="quotelev1">&gt; fixing
</span><br>
<span class="quotelev1">&gt; a new length, whether that length is longer or shorter.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I guess we could try to track down the ftruncate behavior on the  
</span><br>
<span class="quotelev1">&gt; systems
</span><br>
<span class="quotelev1">&gt; in question, but (IMHO) this doesn't feel like the correct  
</span><br>
<span class="quotelev1">&gt; explanation.
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
<li><strong>Next message:</strong> <a href="5730.php">George Bosilca: "Re: [OMPI devel] SM init failures"</a>
<li><strong>Previous message:</strong> <a href="5728.php">Eugene Loh: "Re: [OMPI devel] SM init failures"</a>
<li><strong>In reply to:</strong> <a href="5728.php">Eugene Loh: "Re: [OMPI devel] SM init failures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5730.php">George Bosilca: "Re: [OMPI devel] SM init failures"</a>
<li><strong>Reply:</strong> <a href="5730.php">George Bosilca: "Re: [OMPI devel] SM init failures"</a>
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
