<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r26804 -	trunk/ompi/mca/btl/openib";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 19 13:47:36 2012" -->
<!-- isoreceived="20120719174736" -->
<!-- sent="Thu, 19 Jul 2012 17:47:30 +0000" -->
<!-- isosent="20120719174730" -->
<!-- name="Hjelm, Nathan T" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r26804 -	trunk/ompi/mca/btl/openib" -->
<!-- id="AE45F2F55FE69B4F99BB3455E821D71517018E18_at_ECS-EXG-P-MB07.win.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="F980903C-E38A-4B61-BCB1-1618707DAE89_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn] svn:open-mpi r26804 -	trunk/ompi/mca/btl/openib<br>
<strong>From:</strong> Hjelm, Nathan T (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-19 13:47:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11308.php">Dmitry N. Mikushin: "[OMPI devel] Existing frameworks for remote device memory exclusive read/write"</a>
<li><strong>Previous message:</strong> <a href="11306.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r26804 - trunk/ompi/mca/btl/openib"</a>
<li><strong>In reply to:</strong> <a href="11306.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r26804 - trunk/ompi/mca/btl/openib"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I see what happened. My LANL tree is somehow out of sync and I didn't notice (in Chicago right now). I will commit the complete patch now.
<br>
<p>-Nathan
<br>
<p>On Jul 19, 2012 at 10:18 AM, rhc_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; I've spent hours trying to fix this commit so openib would even compile again, but failed. Just too many errors. Setting aside the need to include &lt;sys/types.h&gt;, &lt;sys/stat.h&gt;, and &lt;unistd.h&gt; to handle the stat call under linux, there is no function &quot;read_module_param&quot; anywhere, nor is &quot;device&quot; defined in btl_openib_component.c
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please - a tad more care in what gets committed??
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I finally just reverted it so the trunk could build.
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11308.php">Dmitry N. Mikushin: "[OMPI devel] Existing frameworks for remote device memory exclusive read/write"</a>
<li><strong>Previous message:</strong> <a href="11306.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r26804 - trunk/ompi/mca/btl/openib"</a>
<li><strong>In reply to:</strong> <a href="11306.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r26804 - trunk/ompi/mca/btl/openib"</a>
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
