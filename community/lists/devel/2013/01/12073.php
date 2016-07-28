<?
$subject_val = "Re: [OMPI devel] RFC: Remove (broken) heterogeneous support";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 30 09:36:28 2013" -->
<!-- isoreceived="20130130143628" -->
<!-- sent="Wed, 30 Jan 2013 14:36:23 +0000" -->
<!-- isosent="20130130143623" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Remove (broken) heterogeneous support" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC42CBD0EC_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201301301237.r0UCa0BH019527_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Remove (broken) heterogeneous support<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-30 09:36:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12074.php">Andreas Schäfer: "Re: [OMPI devel] RFC: Remove (broken) heterogeneous support"</a>
<li><strong>Previous message:</strong> <a href="12072.php">Siegmar Gross: "Re: [OMPI devel] RFC: Remove (broken) heterogeneous support"</a>
<li><strong>In reply to:</strong> <a href="12072.php">Siegmar Gross: "Re: [OMPI devel] RFC: Remove (broken) heterogeneous support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12074.php">Andreas Schäfer: "Re: [OMPI devel] RFC: Remove (broken) heterogeneous support"</a>
<li><strong>Reply:</strong> <a href="12074.php">Andreas Schäfer: "Re: [OMPI devel] RFC: Remove (broken) heterogeneous support"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 30, 2013, at 7:36 AM, Siegmar Gross &lt;Siegmar.Gross_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; HiI have no problem with the option --enable-heterogeneous, when I build
</span><br>
<span class="quotelev1">&gt; Open MPI, but Open MPI will not work in a heterogeneous environment
</span><br>
<span class="quotelev1">&gt; with little and big endian machines,
</span><br>
<p>Right -- that's the issue: --enable-heterogeneous is broken (and has been for a long time).  No one has stepped up to fix it, so we might as well disable the option so that users don't think that we support it.
<br>
<p><span class="quotelev1">&gt; while LAM MPI can handle such
</span><br>
<span class="quotelev1">&gt; environments. You wanted to solve this problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="https://svn.open-mpi.org/trac/ompi/ticket/3430">https://svn.open-mpi.org/trac/ompi/ticket/3430</a>
</span><br>
<p>Understood.  But the reality is that this is a very uncommon feature, and we apparently don't have the resources to fix it.  :-\
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12074.php">Andreas Schäfer: "Re: [OMPI devel] RFC: Remove (broken) heterogeneous support"</a>
<li><strong>Previous message:</strong> <a href="12072.php">Siegmar Gross: "Re: [OMPI devel] RFC: Remove (broken) heterogeneous support"</a>
<li><strong>In reply to:</strong> <a href="12072.php">Siegmar Gross: "Re: [OMPI devel] RFC: Remove (broken) heterogeneous support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12074.php">Andreas Schäfer: "Re: [OMPI devel] RFC: Remove (broken) heterogeneous support"</a>
<li><strong>Reply:</strong> <a href="12074.php">Andreas Schäfer: "Re: [OMPI devel] RFC: Remove (broken) heterogeneous support"</a>
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
