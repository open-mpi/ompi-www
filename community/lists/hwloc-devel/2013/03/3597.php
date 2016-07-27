<?
$subject_val = "Re: [hwloc-devel] Solaris chiptype / rename.h";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 26 12:15:11 2013" -->
<!-- isoreceived="20130326161511" -->
<!-- sent="Tue, 26 Mar 2013 16:15:07 +0000" -->
<!-- isosent="20130326161507" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Solaris chiptype / rename.h" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC43FC6807_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="5151C876.7030805_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] Solaris chiptype / rename.h<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-03-26 12:15:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3598.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.7a1r5517)"</a>
<li><strong>Previous message:</strong> <a href="3596.php">Brice Goglin: "Re: [hwloc-devel] Solaris chiptype / rename.h"</a>
<li><strong>In reply to:</strong> <a href="3596.php">Brice Goglin: "Re: [hwloc-devel] Solaris chiptype / rename.h"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
K; I'll commit on the trunk.  Thanks.
<br>
<p><p>On Mar 26, 2013, at 12:10 PM, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Indeed the problem is not reported by my custom check in tests/rename/
</span><br>
<span class="quotelev1">&gt; because it includes hwloc.h before solaris-chiptype.h. So your
</span><br>
<span class="quotelev1">&gt; conclusion looks ok to me.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Le 26/03/2013 16:56, Jeff Squyres (jsquyres) a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; Brice --
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I just committed <a href="https://svn.open-mpi.org/trac/hwloc/changeset/5513">https://svn.open-mpi.org/trac/hwloc/changeset/5513</a> on the v1.5 branch, which ensures that the symbols in topology-solaris-chiptype.c are subject to &lt;hwloc/rename.h&gt;.  We discovered this problem on the OMPI SVN trunk, which embeds hwloc 1.5.2.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On the hwloc trunk, I see that  #include &lt;hwloc/autogen/config.h&gt; was added to chiptype.c.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Just to be sure before I commit (and because I don't have a Solaris machine with which to test), this will *not* include &lt;hwloc/rename.h&gt;, and therefore merging over r5513 to the trunk is still a good idea (i.e., include &lt;hwloc.h&gt;).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Is that right?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3598.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.7a1r5517)"</a>
<li><strong>Previous message:</strong> <a href="3596.php">Brice Goglin: "Re: [hwloc-devel] Solaris chiptype / rename.h"</a>
<li><strong>In reply to:</strong> <a href="3596.php">Brice Goglin: "Re: [hwloc-devel] Solaris chiptype / rename.h"</a>
<!-- nextthread="start" -->
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
