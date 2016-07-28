<?
$subject_val = "Re: [OMPI devel] openib btl build question";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 22 09:19:56 2008" -->
<!-- isoreceived="20080522131956" -->
<!-- sent="Thu, 22 May 2008 09:19:44 -0400" -->
<!-- isosent="20080522131944" -->
<!-- name="Don Kerr" -->
<!-- email="Don.Kerr_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] openib btl build question" -->
<!-- id="483572F0.2030907_at_sun.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="6C563673-8149-4D45-95E1-1B8CFCAA59BD_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] openib btl build question<br>
<strong>From:</strong> Don Kerr (<em>Don.Kerr_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-22 09:19:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3987.php">Brian W. Barrett: "Re: [OMPI devel] openib btl build question"</a>
<li><strong>Previous message:</strong> <a href="3985.php">Terry Dontje: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>In reply to:</strong> <a href="3975.php">Jeff Squyres: "Re: [OMPI devel] openib btl build question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3987.php">Brian W. Barrett: "Re: [OMPI devel] openib btl build question"</a>
<li><strong>Reply:</strong> <a href="3987.php">Brian W. Barrett: "Re: [OMPI devel] openib btl build question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Jeff. Thanks Brian.
<br>
<p>I ran into this because I was specifically trying to configure with 
<br>
&quot;--disable-progress-threads --disable-mpi-threads&quot; at which point I 
<br>
figured, might as well turn off all threads so I added 
<br>
&quot;--without-threads&quot; as well. But can't live without mpi_leave_pinned so 
<br>
threads are back.
<br>
<p><p>Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On May 21, 2008, at 4:37 PM, Brian W. Barrett wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ptmalloc2 is not *required* by the openib btl.  But it is required on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Linux if you want to use the mpi_leave_pinned functionality.  I see
</span><br>
<span class="quotelev3">&gt;&gt;&gt; one function call to __pthread_initialize in the ptmalloc2 code -- it
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *looks* like it's a function of glibc, but I don't know for sure.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev2">&gt;&gt; There's actually more than that, it's just buried a bit.  There's a  
</span><br>
<span class="quotelev2">&gt;&gt; whole
</span><br>
<span class="quotelev2">&gt;&gt; bunch of thread-specific data stuff, which is wrapped so that  
</span><br>
<span class="quotelev2">&gt;&gt; different
</span><br>
<span class="quotelev2">&gt;&gt; thread packages can be used (although OMPI only supports pthreads).   
</span><br>
<span class="quotelev2">&gt;&gt; The
</span><br>
<span class="quotelev2">&gt;&gt; wrappers are in ptmalloc2/sysdeps/pthreads.
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Doh!  I didn't &quot;grep -r&quot;; my bad...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3987.php">Brian W. Barrett: "Re: [OMPI devel] openib btl build question"</a>
<li><strong>Previous message:</strong> <a href="3985.php">Terry Dontje: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>In reply to:</strong> <a href="3975.php">Jeff Squyres: "Re: [OMPI devel] openib btl build question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3987.php">Brian W. Barrett: "Re: [OMPI devel] openib btl build question"</a>
<li><strong>Reply:</strong> <a href="3987.php">Brian W. Barrett: "Re: [OMPI devel] openib btl build question"</a>
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
