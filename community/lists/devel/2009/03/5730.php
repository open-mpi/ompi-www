<?
$subject_val = "Re: [OMPI devel] SM init failures";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Mar 28 17:03:09 2009" -->
<!-- isoreceived="20090328210309" -->
<!-- sent="Sat, 28 Mar 2009 17:02:59 -0400" -->
<!-- isosent="20090328210259" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] SM init failures" -->
<!-- id="D05080F5-79D3-44E9-B8A2-2A4CE97C1844_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="8E13AE19-45C5-425C-A30D-C1A187BD770A_at_cisco.com" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-28 17:02:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5731.php">Thomas Ropars: "[OMPI devel] segmentation fault when trying to connect processes from different jobs (r20888 of the trunk)"</a>
<li><strong>Previous message:</strong> <a href="5729.php">Jeff Squyres: "Re: [OMPI devel] SM init failures"</a>
<li><strong>In reply to:</strong> <a href="5729.php">Jeff Squyres: "Re: [OMPI devel] SM init failures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5743.php">Jeff Squyres: "Re: [OMPI devel] SM init failures"</a>
<li><strong>Reply:</strong> <a href="5743.php">Jeff Squyres: "Re: [OMPI devel] SM init failures"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It is way to expensive to write the whole file. That's why I proposed  
<br>
to only write the last byte. This will force the OS to really map the  
<br>
file on the systems less POSIX compliant.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Mar 28, 2009, at 13:50 , Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; How about just write()ing a bunch of 0's instead of using ftruncate?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 27, 2009, at 11:09 PM, Eugene Loh wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Paul H. Hargrove wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Quoting from a different manpage for ftruncate:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;        [T]he POSIX standard allows two behaviours for ftruncate
</span><br>
<span class="quotelev3">&gt;&gt; &gt;        when length exceeds the file length [...]: either  
</span><br>
<span class="quotelev2">&gt;&gt; returning an
</span><br>
<span class="quotelev3">&gt;&gt; &gt; error, or
</span><br>
<span class="quotelev3">&gt;&gt; &gt;        extending the file.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; So, if that is to be trusted, it is not legal by POSIX to  
</span><br>
<span class="quotelev2">&gt;&gt; *silently*
</span><br>
<span class="quotelev3">&gt;&gt; &gt; not extend the file.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On a Solaris system, the ftruncate man page says:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     truncate, ftruncate - set a file to a specified length
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     The truncate() function causes the  regular  file  named  by
</span><br>
<span class="quotelev2">&gt;&gt;     path to have a size equal to length bytes.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     If the file previously was larger  than  length,  the  extra
</span><br>
<span class="quotelev2">&gt;&gt;     data  is  discarded. If the file was previously shorter than
</span><br>
<span class="quotelev2">&gt;&gt;     length, its size is increased, and the extended area appears
</span><br>
<span class="quotelev2">&gt;&gt;     as if it were zero-filled.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So, the sense is not of &quot;truncating&quot; (shortening) per se, but of  
</span><br>
<span class="quotelev2">&gt;&gt; fixing
</span><br>
<span class="quotelev2">&gt;&gt; a new length, whether that length is longer or shorter.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I guess we could try to track down the ftruncate behavior on the  
</span><br>
<span class="quotelev2">&gt;&gt; systems
</span><br>
<span class="quotelev2">&gt;&gt; in question, but (IMHO) this doesn't feel like the correct  
</span><br>
<span class="quotelev2">&gt;&gt; explanation.
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5731.php">Thomas Ropars: "[OMPI devel] segmentation fault when trying to connect processes from different jobs (r20888 of the trunk)"</a>
<li><strong>Previous message:</strong> <a href="5729.php">Jeff Squyres: "Re: [OMPI devel] SM init failures"</a>
<li><strong>In reply to:</strong> <a href="5729.php">Jeff Squyres: "Re: [OMPI devel] SM init failures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5743.php">Jeff Squyres: "Re: [OMPI devel] SM init failures"</a>
<li><strong>Reply:</strong> <a href="5743.php">Jeff Squyres: "Re: [OMPI devel] SM init failures"</a>
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
