<?
$subject_val = "Re: [OMPI devel] oshmem only supports Linux ?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 24 15:00:16 2014" -->
<!-- isoreceived="20140724190016" -->
<!-- sent="Thu, 24 Jul 2014 22:00:15 +0300" -->
<!-- isosent="20140724190015" -->
<!-- name="Mike Dubman" -->
<!-- email="miked_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] oshmem only supports Linux ?" -->
<!-- id="CAAO1KyZbKqDgP9c5P_ZSswLDS+gEgGqwDD0-RqcDng3eQqjRqQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="53D14ECB.2010306_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] oshmem only supports Linux ?<br>
<strong>From:</strong> Mike Dubman (<em>miked_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-24 15:00:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15260.php">Dave Goodell (dgoodell): "Re: [OMPI devel] oshmem only supports Linux ?"</a>
<li><strong>Previous message:</strong> <a href="15258.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] v1.8 - compile/dist problem"</a>
<li><strong>In reply to:</strong> <a href="15256.php">Marco Atzeri: "[OMPI devel] oshmem  only supports Linux ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15260.php">Dave Goodell (dgoodell): "Re: [OMPI devel] oshmem only supports Linux ?"</a>
<li><strong>Reply:</strong> <a href="15260.php">Dave Goodell (dgoodell): "Re: [OMPI devel] oshmem only supports Linux ?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
OSHMEM memheap implementation relies on the  &quot;_end&quot; symbol provided by linux
<br>
linker. The _end symbol indicates the beginning of the program dynamic
<br>
allocation area.
<br>
This is needed to allow programmatic access to the process global/static
<br>
variables.
<br>
<p><p><p><p>On Thu, Jul 24, 2014 at 9:22 PM, Marco Atzeri &lt;marco.atzeri_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; I had the impression that the scope of using autotools is
</span><br>
<span class="quotelev1">&gt; to check for features not platforms.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *** OSHMEM Configuration options
</span><br>
<span class="quotelev1">&gt; checking if want oshmem... yes
</span><br>
<span class="quotelev1">&gt; configure: WARNING: OpenSHMEM support was requested, but currently
</span><br>
<span class="quotelev1">&gt; configure: WARNING: only supports Linux.
</span><br>
<span class="quotelev1">&gt; configure: error: Cannot continue
</span><br>
<span class="quotelev1">&gt; *** ERROR: configure failed
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; last time, some time ago, I built 1.9.x with oshmem this statement,
</span><br>
<span class="quotelev1">&gt; configure error, was not present.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Which feature is really needed ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards
</span><br>
<span class="quotelev1">&gt; Marco
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/07/">http://www.open-mpi.org/community/lists/devel/2014/07/</a>
</span><br>
<span class="quotelev1">&gt; 15256.php
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15259/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15260.php">Dave Goodell (dgoodell): "Re: [OMPI devel] oshmem only supports Linux ?"</a>
<li><strong>Previous message:</strong> <a href="15258.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] v1.8 - compile/dist problem"</a>
<li><strong>In reply to:</strong> <a href="15256.php">Marco Atzeri: "[OMPI devel] oshmem  only supports Linux ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15260.php">Dave Goodell (dgoodell): "Re: [OMPI devel] oshmem only supports Linux ?"</a>
<li><strong>Reply:</strong> <a href="15260.php">Dave Goodell (dgoodell): "Re: [OMPI devel] oshmem only supports Linux ?"</a>
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
