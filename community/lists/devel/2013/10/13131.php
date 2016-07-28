<?
$subject_val = "Re: [OMPI devel] shmem vs. oshmem";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 25 12:58:16 2013" -->
<!-- isoreceived="20131025165816" -->
<!-- sent="Fri, 25 Oct 2013 20:58:00 +0400" -->
<!-- isosent="20131025165800" -->
<!-- name="Igor Ivanov" -->
<!-- email="igor.ivanov_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] shmem vs. oshmem" -->
<!-- id="526AA318.1030803_at_itseez.com" -->
<!-- charset="windows-1251" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC4F991076_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] shmem vs. oshmem<br>
<strong>From:</strong> Igor Ivanov (<em>igor.ivanov_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-10-25 12:58:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13132.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] shmem vs. oshmem"</a>
<li><strong>Previous message:</strong> <a href="13130.php">Jeff Squyres (jsquyres): "[OMPI devel] shmem vs. oshmem"</a>
<li><strong>In reply to:</strong> <a href="13130.php">Jeff Squyres (jsquyres): "[OMPI devel] shmem vs. oshmem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13132.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] shmem vs. oshmem"</a>
<li><strong>Reply:</strong> <a href="13132.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] shmem vs. oshmem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
<p>I would like to add few notes inline
<br>
<p>Igor
<br>
<p>On 25.10.2013 20:33, Jeff Squyres (jsquyres) wrote:
<br>
<span class="quotelev1">&gt; We had a few emails a little while ago, and decided that the branding should be &quot;oshmem&quot; because Open SHMEM is different than (original) SHMEM.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I notice that there's still:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - shmemcc / shmemfort / shmem_info / shmemrun
</span><br>
<span class="quotelev1">&gt;    --&gt; should these all be &quot;oshmem*&quot; ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - the examples are hello_shmem* and ring_shmem*
</span><br>
<span class="quotelev1">&gt;    --&gt; should these all be &quot;*_oshmem*&quot; ?
</span><br>
These examples are not OpenSHMEM specific.
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - there are header files named shmem*
</span><br>
<span class="quotelev1">&gt;    --&gt; I'm guessing the names &quot;shmem.h&quot; and &quot;shmem.fh&quot; are mandated
</span><br>
OpenSHMEM specification says
<br>
<span class="quotelev3"> &gt;&gt;&gt;
</span><br>
10.1 Incorporating OpenSHMEM into Programs
<br>
C and C++ programs that use the OpenSHMEM library must
<br>
#include &lt;shmem.h&gt;
<br>
All Fortran OpenSHMEM programs should
<br>
include &#146;shmem.fh&#146;
<br>
and Fortran OpenSHMEM programs that use constants defined by OpenSHMEM must
<br>
include &#146;shmem.fh&#146;
<br>
10.1.1 Compatibility Note
<br>
Implementations must also provide these header files so that they can be 
<br>
referenced in C
<br>
and C++ as
<br>
#include &lt;mpp/shmem.h&gt;
<br>
and in Fortran as
<br>
include &#146;mpp/shmem.fh&#146;
<br>
for backward compatbility with OpensHMEM 1.0 and SGI SHMEM.
<br>
&lt;&lt;&lt;
<br>
<p><span class="quotelev1">&gt;    --&gt; shmem_portable_platform.h.in should probably be oshmem_portable_platform.h.in, right?
</span><br>
<span class="quotelev1">&gt;    --&gt; same for the internal headers shmem_api_logger.h and shmem_lock.h
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13132.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] shmem vs. oshmem"</a>
<li><strong>Previous message:</strong> <a href="13130.php">Jeff Squyres (jsquyres): "[OMPI devel] shmem vs. oshmem"</a>
<li><strong>In reply to:</strong> <a href="13130.php">Jeff Squyres (jsquyres): "[OMPI devel] shmem vs. oshmem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13132.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] shmem vs. oshmem"</a>
<li><strong>Reply:</strong> <a href="13132.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] shmem vs. oshmem"</a>
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
