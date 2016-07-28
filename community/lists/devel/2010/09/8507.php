<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r23767";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 20 11:48:26 2010" -->
<!-- isoreceived="20100920154826" -->
<!-- sent="Mon, 20 Sep 2010 09:48:10 -0600" -->
<!-- isosent="20100920154810" -->
<!-- name="Barrett, Brian W" -->
<!-- email="bwbarre_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r23767" -->
<!-- id="0A54D86E-88A1-40CF-8EB2-5147BA9FEFCB_at_sandia.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="326AAD88-F7E3-4EB0-888F-370D274DF6F6_at_cisco.com" -->
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
<strong>From:</strong> Barrett, Brian W (<em>bwbarre_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-20 11:48:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8508.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r23767"</a>
<li><strong>Previous message:</strong> <a href="8506.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r23774"</a>
<li><strong>In reply to:</strong> <a href="8503.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r23767"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8508.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r23767"</a>
<li><strong>Reply:</strong> <a href="8508.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r23767"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff -
<br>
<p>Sorry, was out of town last week.  The patch undoes the discussion we had -- we always run component macros, even if the component couldn't build, to solve the issue of AC_CONFIG_FILES needing to always be run.  So the first part of the patch is incorrect and should not be committed.  We might need to make the valgrind configure.m4 macro smarter, but the other option is really painful.
<br>
<p>I think the second issue is a typo and can be changed.  Originally, I think we needed to know whether the component configure failed or the component was told not to build, but that no longer seems necessary.
<br>
<p>Brian
<br>
<p>On Sep 18, 2010, at 9:48 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On Sep 18, 2010, at 4:54 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Good point - nothing secret about it!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes, nothing secret, but it's kinda deep in our ompi_mca.m4 file.  I'm not quite sure why Brian removed the AS_IF clause when we did the changes; I don't know if he had a deep reason for it or not.  But it seems like we clearly need it because the memcheck framework tries to disable itself by setting $DISABLE_memcheck=1 if you don't --enable-memcheck.  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The new ompi_mca.m4 always calls MCA_$1_$2_$3_CONFIG (i.e., the component's config macro in its configure.m4 script) -- the old version checked $should_build first before calling it.  I put the AS_IF back in the patch below.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Index: config/ompi_mca.m4
</span><br>
<span class="quotelev2">&gt;&gt; ===================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- config/ompi_mca.m4	(revision 23770)
</span><br>
<span class="quotelev2">&gt;&gt; +++ config/ompi_mca.m4	(working copy)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -564,10 +564,12 @@
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   # try to configure the component.  pay no attention to
</span><br>
<span class="quotelev2">&gt;&gt;   # --enable-dist, since we'll always have makefiles.
</span><br>
<span class="quotelev2">&gt;&gt; -    m4_ifdef([MCA_$1_$2_$3_CONFIG],
</span><br>
<span class="quotelev2">&gt;&gt; +    AS_IF([test &quot;$should_build&quot; = &quot;1&quot;],
</span><br>
<span class="quotelev2">&gt;&gt; +          [m4_ifdef([MCA_$1_$2_$3_CONFIG],
</span><br>
<span class="quotelev2">&gt;&gt;            [MCA_$1_$2_$3_CONFIG([should_build=$should_build], 
</span><br>
<span class="quotelev2">&gt;&gt;                                 [should_build=0])],
</span><br>
<span class="quotelev2">&gt;&gt;            [m4_fatal([MCA_$1_$2_$3_CONFIG macro not found])])
</span><br>
<span class="quotelev2">&gt;&gt; +          ])
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   AS_IF([test &quot;$should_build&quot; = &quot;1&quot;],
</span><br>
<span class="quotelev2">&gt;&gt;         [MCA_PROCESS_COMPONENT($1, $2, $3, $4, $5, $6, $7, $compile_mode)],
</span><br>
<span class="quotelev2">&gt;&gt; @@ -619,7 +621,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;           if test &quot;$should_build&quot; = &quot;1&quot; ; then
</span><br>
<span class="quotelev2">&gt;&gt;               OMPI_CONFIG_SUBDIR([$1/mca/$2/$component],
</span><br>
<span class="quotelev2">&gt;&gt;                                  [$ompi_subdir_args],
</span><br>
<span class="quotelev2">&gt;&gt; -                                   [should_build=1], [should_build=2])
</span><br>
<span class="quotelev2">&gt;&gt; +                                   [should_build=1], [should_build=0])
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This just looked like a typo.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
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
<span class="quotelev1">&gt; 
</span><br>
<p><pre>
-- 
  Brian W. Barrett
  Dept. 1423: Scalable System Software
  Sandia National Laboratories
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8508.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r23767"</a>
<li><strong>Previous message:</strong> <a href="8506.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r23774"</a>
<li><strong>In reply to:</strong> <a href="8503.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r23767"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8508.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r23767"</a>
<li><strong>Reply:</strong> <a href="8508.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r23767"</a>
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
