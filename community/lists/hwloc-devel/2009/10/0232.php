<?
$subject_val = "Re: [hwloc-devel] MPICH2 question";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 21 18:51:48 2009" -->
<!-- isoreceived="20091021225148" -->
<!-- sent="Thu, 22 Oct 2009 00:51:41 +0200" -->
<!-- isosent="20091021225141" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] MPICH2 question" -->
<!-- id="20091021225141.GS4419_at_const.famille.thibault.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4ADF8F44.2060109_at_mcs.anl.gov" -->
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
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-21 18:51:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0233.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.0a1r1216)"</a>
<li><strong>Previous message:</strong> <a href="0231.php">Pavan Balaji: "Re: [hwloc-devel] MPICH2 question"</a>
<li><strong>In reply to:</strong> <a href="0231.php">Pavan Balaji: "Re: [hwloc-devel] MPICH2 question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0207.php">Jeff Squyres: "Re: [hwloc-devel] MPICH2 question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Pavan Balaji, le Wed 21 Oct 2009 17:46:28 -0500, a &#233;crit :
<br>
<span class="quotelev1">&gt; Suppose you compiled hwloc with gcc, you'll get the following in your
</span><br>
<span class="quotelev1">&gt; new config file --
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /* Note the hwloc_ prefix added by the AX_PREFIX_CONFIG_H macro */
</span><br>
<span class="quotelev1">&gt; #define hwloc_restrict __restrict
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Now, if the application is using suncc, and it tries to find what
</span><br>
<span class="quotelev1">&gt; spelling for restrict it needs to use, it'll come up with --
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #define restrict _Restrict
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; These do not conflict at all; hwloc will use its definition of restrict
</span><br>
<span class="quotelev1">&gt; and the application will use its. Why is this a problem?
</span><br>
<p>Because the hwloc headers are full with hwloc_restrict qualifiers,
<br>
translated into __restrict, which suncc will not understand, and thus
<br>
hwloc.h will not compile.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0233.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.0a1r1216)"</a>
<li><strong>Previous message:</strong> <a href="0231.php">Pavan Balaji: "Re: [hwloc-devel] MPICH2 question"</a>
<li><strong>In reply to:</strong> <a href="0231.php">Pavan Balaji: "Re: [hwloc-devel] MPICH2 question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0207.php">Jeff Squyres: "Re: [hwloc-devel] MPICH2 question"</a>
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
