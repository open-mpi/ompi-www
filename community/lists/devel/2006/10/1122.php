<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Oct 17 23:40:34 2006" -->
<!-- isoreceived="20061018034034" -->
<!-- sent="Tue, 17 Oct 2006 20:40:19 -0700" -->
<!-- isosent="20061018034019" -->
<!-- name="Christian Bell" -->
<!-- email="christian.bell_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r12157" -->
<!-- id="20061018034019.GG3778_at_pathscale.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="200610180002.k9I02MVY009197_at_sourcehaven.osl.iu.edu" -->
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
<strong>From:</strong> Christian Bell (<em>christian.bell_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-10-17 23:40:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1123.php">Brian Barrett: "[OMPI devel] (no subject)"</a>
<li><strong>Previous message:</strong> <a href="1121.php">Adrian Knoth: "Re: [OMPI devel] IPv6 in btl/tcp"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'd propose using inttypes defines to handle this issue portably:
<br>
<p>On Tue, 17 Oct 2006, bosilca_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; -#define ORTE_TRANSPORT_KEY_FMT &quot;%016lx-%016lx&quot;
</span><br>
<span class="quotelev1">&gt; +#define ORTE_TRANSPORT_KEY_FMT &quot;%016llx-%016llx&quot;
</span><br>
<p>&nbsp;&nbsp;&nbsp;#include &lt;inttypes.h&gt;
<br>
<p>&nbsp;&nbsp;&nbsp;#define ORTE_TRANSPORT_KEY_FMT &quot;%016&quot; PRIx64 &quot;-%016&quot; PRIx64
<br>
<p><p>cheers,
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;. . christian
<br>
<p><pre>
-- 
christian.bell_at_[hidden]
(QLogic SIG, formerly Pathscale)
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1123.php">Brian Barrett: "[OMPI devel] (no subject)"</a>
<li><strong>Previous message:</strong> <a href="1121.php">Adrian Knoth: "Re: [OMPI devel] IPv6 in btl/tcp"</a>
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
