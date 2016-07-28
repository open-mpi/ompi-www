<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r23767";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Sep 18 11:48:48 2010" -->
<!-- isoreceived="20100918154848" -->
<!-- sent="Sat, 18 Sep 2010 17:48:42 +0200" -->
<!-- isosent="20100918154842" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r23767" -->
<!-- id="326AAD88-F7E3-4EB0-888F-370D274DF6F6_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="935E320F-D30D-489C-9957-93F719C03D42_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn] svn:open-mpi r23767<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-18 11:48:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8504.php">Ralph Castain: "[OMPI devel] Libevent update"</a>
<li><strong>Previous message:</strong> <a href="8502.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r23767"</a>
<li><strong>In reply to:</strong> <a href="8502.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r23767"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8507.php">Barrett, Brian W: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r23767"</a>
<li><strong>Reply:</strong> <a href="8507.php">Barrett, Brian W: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r23767"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 18, 2010, at 4:54 PM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; Good point - nothing secret about it!
</span><br>
<p>Yes, nothing secret, but it's kinda deep in our ompi_mca.m4 file.  I'm not quite sure why Brian removed the AS_IF clause when we did the changes; I don't know if he had a deep reason for it or not.  But it seems like we clearly need it because the memcheck framework tries to disable itself by setting $DISABLE_memcheck=1 if you don't --enable-memcheck.  
<br>
<p>The new ompi_mca.m4 always calls MCA_$1_$2_$3_CONFIG (i.e., the component's config macro in its configure.m4 script) -- the old version checked $should_build first before calling it.  I put the AS_IF back in the patch below.
<br>
<p><span class="quotelev1">&gt; Index: config/ompi_mca.m4
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- config/ompi_mca.m4	(revision 23770)
</span><br>
<span class="quotelev1">&gt; +++ config/ompi_mca.m4	(working copy)
</span><br>
<span class="quotelev1">&gt; @@ -564,10 +564,12 @@
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    # try to configure the component.  pay no attention to
</span><br>
<span class="quotelev1">&gt;    # --enable-dist, since we'll always have makefiles.
</span><br>
<span class="quotelev1">&gt; -    m4_ifdef([MCA_$1_$2_$3_CONFIG],
</span><br>
<span class="quotelev1">&gt; +    AS_IF([test &quot;$should_build&quot; = &quot;1&quot;],
</span><br>
<span class="quotelev1">&gt; +          [m4_ifdef([MCA_$1_$2_$3_CONFIG],
</span><br>
<span class="quotelev1">&gt;             [MCA_$1_$2_$3_CONFIG([should_build=$should_build], 
</span><br>
<span class="quotelev1">&gt;                                  [should_build=0])],
</span><br>
<span class="quotelev1">&gt;             [m4_fatal([MCA_$1_$2_$3_CONFIG macro not found])])
</span><br>
<span class="quotelev1">&gt; +          ])
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    AS_IF([test &quot;$should_build&quot; = &quot;1&quot;],
</span><br>
<span class="quotelev1">&gt;          [MCA_PROCESS_COMPONENT($1, $2, $3, $4, $5, $6, $7, $compile_mode)],
</span><br>
<span class="quotelev1">&gt; @@ -619,7 +621,7 @@
</span><br>
<span class="quotelev1">&gt;            if test &quot;$should_build&quot; = &quot;1&quot; ; then
</span><br>
<span class="quotelev1">&gt;                OMPI_CONFIG_SUBDIR([$1/mca/$2/$component],
</span><br>
<span class="quotelev1">&gt;                                   [$ompi_subdir_args],
</span><br>
<span class="quotelev1">&gt; -                                   [should_build=1], [should_build=2])
</span><br>
<span class="quotelev1">&gt; +                                   [should_build=1], [should_build=0])
</span><br>
<p>This just looked like a typo.
<br>
<p><pre>
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
<li><strong>Next message:</strong> <a href="8504.php">Ralph Castain: "[OMPI devel] Libevent update"</a>
<li><strong>Previous message:</strong> <a href="8502.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r23767"</a>
<li><strong>In reply to:</strong> <a href="8502.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r23767"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8507.php">Barrett, Brian W: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r23767"</a>
<li><strong>Reply:</strong> <a href="8507.php">Barrett, Brian W: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r23767"</a>
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
