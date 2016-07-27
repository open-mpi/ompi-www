<?
$subject_val = "Re: [hwloc-devel] MPICH2 question";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 21 18:46:39 2009" -->
<!-- isoreceived="20091021224639" -->
<!-- sent="Wed, 21 Oct 2009 17:46:28 -0500" -->
<!-- isosent="20091021224628" -->
<!-- name="Pavan Balaji" -->
<!-- email="balaji_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] MPICH2 question" -->
<!-- id="4ADF8F44.2060109_at_mcs.anl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20091021214404.GF4419_at_const.famille.thibault.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] MPICH2 question<br>
<strong>From:</strong> Pavan Balaji (<em>balaji_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-21 18:46:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0232.php">Samuel Thibault: "Re: [hwloc-devel] MPICH2 question"</a>
<li><strong>Previous message:</strong> <a href="0230.php">Samuel Thibault: "Re: [hwloc-devel] MPICH2 question"</a>
<li><strong>In reply to:</strong> <a href="0230.php">Samuel Thibault: "Re: [hwloc-devel] MPICH2 question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0232.php">Samuel Thibault: "Re: [hwloc-devel] MPICH2 question"</a>
<li><strong>Reply:</strong> <a href="0232.php">Samuel Thibault: "Re: [hwloc-devel] MPICH2 question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 10/21/2009 04:44 PM, Samuel Thibault wrote:
<br>
<span class="quotelev1">&gt; Pavan Balaji, le Wed 21 Oct 2009 16:40:42 -0500, a &#233;crit :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Please read this thread:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2009/09/0054.php">http://www.open-mpi.org/community/lists/hwloc-devel/2009/09/0054.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; Thanks. Is the only issue to not use AC_C_RESTRICT that of conflicting
</span><br>
<span class="quotelev2">&gt;&gt; name space?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Not only, it's also that you never know in advance which compiler will
</span><br>
<span class="quotelev1">&gt; be used while including hwloc.h, and thus what _that_ compiler will
</span><br>
<span class="quotelev1">&gt; support, thus the dynamic discovery.
</span><br>
<p>I'm not sure I understand the problem here. Let me illustrate what I
<br>
mean. Suppose you are using gcc to compile hwloc and suncc to compile
<br>
some application using hwloc. Let's say gcc uses __restrict and suncc
<br>
uses _Restrict (I didn't check what these compilers use; these are just
<br>
for illustration).
<br>
<p>hwloc configure.in will have --
<br>
<p>AX_PREFIX_CONFIG_H([include/hwloc_config.h], [hwloc])
<br>
AC_C_RESTRICT
<br>
<p>Suppose you compiled hwloc with gcc, you'll get the following in your
<br>
new config file --
<br>
<p>/* Note the hwloc_ prefix added by the AX_PREFIX_CONFIG_H macro */
<br>
#define hwloc_restrict __restrict
<br>
<p>Now, if the application is using suncc, and it tries to find what
<br>
spelling for restrict it needs to use, it'll come up with --
<br>
<p>#define restrict _Restrict
<br>
<p>These do not conflict at all; hwloc will use its definition of restrict
<br>
and the application will use its. Why is this a problem?
<br>
<p>&nbsp;-- Pavan
<br>
<p><pre>
-- 
Pavan Balaji
<a href="http://www.mcs.anl.gov/~balaji">http://www.mcs.anl.gov/~balaji</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0232.php">Samuel Thibault: "Re: [hwloc-devel] MPICH2 question"</a>
<li><strong>Previous message:</strong> <a href="0230.php">Samuel Thibault: "Re: [hwloc-devel] MPICH2 question"</a>
<li><strong>In reply to:</strong> <a href="0230.php">Samuel Thibault: "Re: [hwloc-devel] MPICH2 question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0232.php">Samuel Thibault: "Re: [hwloc-devel] MPICH2 question"</a>
<li><strong>Reply:</strong> <a href="0232.php">Samuel Thibault: "Re: [hwloc-devel] MPICH2 question"</a>
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
