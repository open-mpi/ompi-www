<?
$subject_val = "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1961";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 20 11:55:15 2010" -->
<!-- isoreceived="20100420155515" -->
<!-- sent="Tue, 20 Apr 2010 17:55:10 +0200" -->
<!-- isosent="20100420155510" -->
<!-- name="Bert Wesarg" -->
<!-- email="bert.wesarg_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1961" -->
<!-- id="j2g36ca99e91004200855w539fd961rb3e0421189d9a586_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="201004201233.o3KCXXhE027629_at_sourcehaven.osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1961<br>
<strong>From:</strong> Bert Wesarg (<em>bert.wesarg_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-20 11:55:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0913.php">Brice Goglin: "Re: [hwloc-devel] dplace"</a>
<li><strong>Previous message:</strong> <a href="0911.php">Michael Raymond: "Re: [hwloc-devel] dplace"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0914.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1961"</a>
<li><strong>Reply:</strong> <a href="0914.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1961"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>On Tue, Apr 20, 2010 at 14:33,  &lt;sthibaul_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Author: sthibaul
</span><br>
<span class="quotelev1">&gt; Date: 2010-04-20 08:33:33 EDT (Tue, 20 Apr 2010)
</span><br>
<span class="quotelev1">&gt; New Revision: 1961
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/hwloc/changeset/1961">https://svn.open-mpi.org/trac/hwloc/changeset/1961</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; properly include sched.h to get the sched_setaffinity prototype
</span><br>
<span class="quotelev1">&gt; Text files modified:
</span><br>
<span class="quotelev1">&gt; &#194;&#160; trunk/config/hwloc.m4 | &#194;&#160; &#194;&#160; 5 ++++-
</span><br>
<span class="quotelev1">&gt; &#194;&#160; 1 files changed, 4 insertions(+), 1 deletions(-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/config/hwloc.m4
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/config/hwloc.m4 &#194;&#160; &#194;&#160; &#194;&#160; (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/config/hwloc.m4 &#194;&#160; &#194;&#160; &#194;&#160; 2010-04-20 08:33:33 EDT (Tue, 20 Apr 2010)
</span><br>
<span class="quotelev1">&gt; @@ -379,7 +379,10 @@
</span><br>
<span class="quotelev1">&gt; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; AC_MSG_RESULT([yes]),
</span><br>
<span class="quotelev1">&gt; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; AC_MSG_RESULT([no])
</span><br>
<span class="quotelev1">&gt; &#194;&#160; &#194;&#160; &#194;&#160; )
</span><br>
<span class="quotelev1">&gt; - &#194;&#160; &#194;&#160;])
</span><br>
<span class="quotelev1">&gt; + &#194;&#160; &#194;&#160;], , [[
</span><br>
<span class="quotelev1">&gt; +#define GNU_SOURCE
</span><br>
<p>That should be: _GNU_SOURCE. See 'man 7 feature_test_macros'
<br>
<p>Bert
<br>
<p><span class="quotelev1">&gt; +#include &lt;sched.h&gt;
</span><br>
<span class="quotelev1">&gt; +]])
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#194;&#160; &#194;&#160; AC_MSG_CHECKING([for working CPU_SET])
</span><br>
<span class="quotelev1">&gt; &#194;&#160; &#194;&#160; AC_LINK_IFELSE(
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-svn mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-svn_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-svn">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-svn</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0913.php">Brice Goglin: "Re: [hwloc-devel] dplace"</a>
<li><strong>Previous message:</strong> <a href="0911.php">Michael Raymond: "Re: [hwloc-devel] dplace"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0914.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1961"</a>
<li><strong>Reply:</strong> <a href="0914.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1961"</a>
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
