<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r23998";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov  5 14:58:11 2010" -->
<!-- isoreceived="20101105185811" -->
<!-- sent="Fri, 5 Nov 2010 14:58:06 -0400" -->
<!-- isosent="20101105185806" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r23998" -->
<!-- id="EC7B0C20-0DA0-4CD3-AAB0-981116FA5E04_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201011051854.oA5IsKB3021763_at_sourcehaven.osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r23998<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-05 14:58:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8664.php">Ralph Castain: "[OMPI devel] Changes to libevent files"</a>
<li><strong>Previous message:</strong> <a href="8662.php">Jeff Squyres: "[OMPI devel] Making an Open MPI release series"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8665.php">Terry Dontje: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r23998"</a>
<li><strong>Reply:</strong> <a href="8665.php">Terry Dontje: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r23998"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This patch should be pushed upstream to libevent.
<br>
<p>Terry / Ralph?
<br>
<p><p><p>On Nov 5, 2010, at 2:54 PM, tdd_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Author: tdd
</span><br>
<span class="quotelev1">&gt; Date: 2010-11-05 14:54:19 EDT (Fri, 05 Nov 2010)
</span><br>
<span class="quotelev1">&gt; New Revision: 23998
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/23998">https://svn.open-mpi.org/trac/ompi/changeset/23998</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; corrected stdbool.h inclusion to allow Oracle C++ compilers to work with OMPI
</span><br>
<span class="quotelev1">&gt; Text files modified: 
</span><br>
<span class="quotelev1">&gt;   trunk/opal/mca/event/libevent207/libevent/include/event2/event.h |     4 +++-                                    
</span><br>
<span class="quotelev1">&gt;   trunk/opal/mca/event/libevent207/libevent207.h                   |     3 ---                                     
</span><br>
<span class="quotelev1">&gt;   2 files changed, 3 insertions(+), 4 deletions(-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/opal/mca/event/libevent207/libevent/include/event2/event.h
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/opal/mca/event/libevent207/libevent/include/event2/event.h	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/opal/mca/event/libevent207/libevent/include/event2/event.h	2010-11-05 14:54:19 EDT (Fri, 05 Nov 2010)
</span><br>
<span class="quotelev1">&gt; @@ -45,7 +45,9 @@
</span><br>
<span class="quotelev1">&gt; #include &lt;sys/time.h&gt;
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt; #ifndef WIN32
</span><br>
<span class="quotelev1">&gt; -#include &lt;stdbool.h&gt;
</span><br>
<span class="quotelev1">&gt; +#    if !(defined(c_plusplus) || defined(__cplusplus))
</span><br>
<span class="quotelev1">&gt; +#        include &lt;stdbool.h&gt;
</span><br>
<span class="quotelev1">&gt; +#    endif
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/opal/mca/event/libevent207/libevent207.h
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/opal/mca/event/libevent207/libevent207.h	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/opal/mca/event/libevent207/libevent207.h	2010-11-05 14:54:19 EDT (Fri, 05 Nov 2010)
</span><br>
<span class="quotelev1">&gt; @@ -42,9 +42,6 @@
</span><br>
<span class="quotelev1">&gt; #include &lt;string.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;assert.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;time.h&gt;
</span><br>
<span class="quotelev1">&gt; -#ifndef WIN32
</span><br>
<span class="quotelev1">&gt; -#include &lt;stdbool.h&gt;
</span><br>
<span class="quotelev1">&gt; -#endif
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #include &quot;opal/class/opal_object.h&quot;
</span><br>
<span class="quotelev1">&gt; #include &quot;opal/threads/mutex.h&quot;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; svn-full mailing list
</span><br>
<span class="quotelev1">&gt; svn-full_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn-full">http://www.open-mpi.org/mailman/listinfo.cgi/svn-full</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8664.php">Ralph Castain: "[OMPI devel] Changes to libevent files"</a>
<li><strong>Previous message:</strong> <a href="8662.php">Jeff Squyres: "[OMPI devel] Making an Open MPI release series"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8665.php">Terry Dontje: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r23998"</a>
<li><strong>Reply:</strong> <a href="8665.php">Terry Dontje: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r23998"</a>
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
