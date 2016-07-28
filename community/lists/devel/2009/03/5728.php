<?
$subject_val = "Re: [OMPI devel] SM init failures";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 27 23:09:51 2009" -->
<!-- isoreceived="20090328030951" -->
<!-- sent="Fri, 27 Mar 2009 19:09:30 -0800" -->
<!-- isosent="20090328030930" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] SM init failures" -->
<!-- id="49CD94EA.8000802_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="49CD686F.4090907_at_lbl.gov" -->
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
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-27 23:09:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5729.php">Jeff Squyres: "Re: [OMPI devel] SM init failures"</a>
<li><strong>Previous message:</strong> <a href="5727.php">Jeff Squyres: "Re: [OMPI devel] MCA component dependency"</a>
<li><strong>In reply to:</strong> <a href="5725.php">Paul H. Hargrove: "Re: [OMPI devel] SM init failures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5729.php">Jeff Squyres: "Re: [OMPI devel] SM init failures"</a>
<li><strong>Reply:</strong> <a href="5729.php">Jeff Squyres: "Re: [OMPI devel] SM init failures"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Paul H. Hargrove wrote:
<br>
<p><span class="quotelev1">&gt; Quoting from a different manpage for ftruncate:
</span><br>
<span class="quotelev1">&gt;        [T]he POSIX standard allows two behaviours for ftruncate
</span><br>
<span class="quotelev1">&gt;        when length exceeds the file length [...]: either returning an 
</span><br>
<span class="quotelev1">&gt; error, or
</span><br>
<span class="quotelev1">&gt;        extending the file.
</span><br>
<span class="quotelev1">&gt; So, if that is to be trusted, it is not legal by POSIX to *silently* 
</span><br>
<span class="quotelev1">&gt; not extend the file.
</span><br>
<p>On a Solaris system, the ftruncate man page says:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;truncate, ftruncate - set a file to a specified length
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The truncate() function causes the  regular  file  named  by
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;path to have a size equal to length bytes.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;If the file previously was larger  than  length,  the  extra
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;data  is  discarded. If the file was previously shorter than
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;length, its size is increased, and the extended area appears
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;as if it were zero-filled.
<br>
<p>So, the sense is not of &quot;truncating&quot; (shortening) per se, but of fixing 
<br>
a new length, whether that length is longer or shorter.
<br>
<p>I guess we could try to track down the ftruncate behavior on the systems 
<br>
in question, but (IMHO) this doesn't feel like the correct explanation.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5729.php">Jeff Squyres: "Re: [OMPI devel] SM init failures"</a>
<li><strong>Previous message:</strong> <a href="5727.php">Jeff Squyres: "Re: [OMPI devel] MCA component dependency"</a>
<li><strong>In reply to:</strong> <a href="5725.php">Paul H. Hargrove: "Re: [OMPI devel] SM init failures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5729.php">Jeff Squyres: "Re: [OMPI devel] SM init failures"</a>
<li><strong>Reply:</strong> <a href="5729.php">Jeff Squyres: "Re: [OMPI devel] SM init failures"</a>
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
