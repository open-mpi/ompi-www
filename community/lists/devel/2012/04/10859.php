<?
$subject_val = "Re: [OMPI devel] r26255 has made openib unusable on Solaris platforms";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 13 11:32:12 2012" -->
<!-- isoreceived="20120413153212" -->
<!-- sent="Fri, 13 Apr 2012 11:32:03 -0400" -->
<!-- isosent="20120413153203" -->
<!-- name="TERRY DONTJE" -->
<!-- email="terry.dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] r26255 has made openib unusable on Solaris platforms" -->
<!-- id="4F8846F3.7080605_at_oracle.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="4F883C1F.50703_at_oracle.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] r26255 has made openib unusable on Solaris platforms<br>
<strong>From:</strong> TERRY DONTJE (<em>terry.dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-13 11:32:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10860.php">Alex Margolin: "[OMPI devel] RTE node allocation component"</a>
<li><strong>Previous message:</strong> <a href="10858.php">TERRY DONTJE: "[OMPI devel] r26255 has made openib unusable on Solaris platforms"</a>
<li><strong>In reply to:</strong> <a href="10858.php">TERRY DONTJE: "[OMPI devel] r26255 has made openib unusable on Solaris platforms"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10861.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: r26255 has made openib unusable on Solaris platforms"</a>
<li><strong>Reply:</strong> <a href="10861.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: r26255 has made openib unusable on Solaris platforms"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am thinking MEMORY_LINUX_PTMALLOC2 is probably the right define to key 
<br>
off of but this is really going to look gross ifdef'ing out the lines 
<br>
that are accessing the Linux memory module.  One other idea I have is to 
<br>
create a dummy __malloc_hook in the Solaris memory module but might 
<br>
there be other OSes that could run into the same problem?   Or what 
<br>
happens if PTMALLOC2 is not used (does that happen)?
<br>
<p>--td
<br>
<p>On 4/13/2012 10:45 AM, TERRY DONTJE wrote:
<br>
<span class="quotelev1">&gt; r26255 is forcing the use of __malloc_hook which is implemented in 
</span><br>
<span class="quotelev1">&gt; opal/mca/memory/linux however that is not compiled in the library when 
</span><br>
<span class="quotelev1">&gt; built on Solaris thus causing a referenced symbol not found when 
</span><br>
<span class="quotelev1">&gt; libmpi tries to load the openib btl.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am looking how to fix this now but if someone has a good idea how to 
</span><br>
<span class="quotelev1">&gt; detect when __malloc_hook is used (or not) I'd be interested in 
</span><br>
<span class="quotelev1">&gt; hearing it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><pre>
-- 
Terry D. Dontje | Principal Software Engineer
Developer Tools Engineering | +1.781.442.2631
Oracle *- Performance Technologies*
95 Network Drive, Burlington, MA 01803
Email terry.dontje_at_[hidden] &lt;mailto:terry.dontje_at_[hidden]&gt;
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10859/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10860.php">Alex Margolin: "[OMPI devel] RTE node allocation component"</a>
<li><strong>Previous message:</strong> <a href="10858.php">TERRY DONTJE: "[OMPI devel] r26255 has made openib unusable on Solaris platforms"</a>
<li><strong>In reply to:</strong> <a href="10858.php">TERRY DONTJE: "[OMPI devel] r26255 has made openib unusable on Solaris platforms"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10861.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: r26255 has made openib unusable on Solaris platforms"</a>
<li><strong>Reply:</strong> <a href="10861.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: r26255 has made openib unusable on Solaris platforms"</a>
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
