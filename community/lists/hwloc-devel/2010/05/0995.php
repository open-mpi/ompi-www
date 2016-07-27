<?
$subject_val = "Re: [hwloc-devel] hwloc support on windows";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 14 16:58:10 2010" -->
<!-- isoreceived="20100514205810" -->
<!-- sent="Fri, 14 May 2010 22:58:04 +0200" -->
<!-- isosent="20100514205804" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc support on windows" -->
<!-- id="20100514205804.GA14592_at_const" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4BEDA945.40504_at_mcs.anl.gov" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] hwloc support on windows<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-14 16:58:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0996.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.1a1r2094)"</a>
<li><strong>Previous message:</strong> <a href="0994.php">Pavan Balaji: "[hwloc-devel] hwloc support on windows"</a>
<li><strong>In reply to:</strong> <a href="0994.php">Pavan Balaji: "[hwloc-devel] hwloc support on windows"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Pavan Balaji, le Fri 14 May 2010 14:49:25 -0500, a &#233;crit :
<br>
<span class="quotelev1">&gt; Is the support for hwloc on windows only through Cygwin + gcc/icc, etc?
</span><br>
<p>No, it is also through mingw.
<br>
<p><span class="quotelev1">&gt; We tried it with the Visual Studio compiler and it breaks
</span><br>
<p>Why not just using the build we provide?  It provides the .h and the
<br>
.lib that you will need in Visual Studio.
<br>
<p><span class="quotelev1">&gt; to be an autotools issue (AC_SEARCH_LIBS seem to use the -lfoo format 
</span><br>
<span class="quotelev1">&gt; instead of foo.lib format),
</span><br>
<p>Probably.  I've never used the combination of autotools and Visual
<br>
Studio, and actually never thought it could ever work :)
<br>
<p><span class="quotelev1">&gt; but I was curious on what exactly the status of windows support on
</span><br>
<span class="quotelev1">&gt; hwloc was.
</span><br>
<p>We build it through mingw and cygwin.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0996.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.1a1r2094)"</a>
<li><strong>Previous message:</strong> <a href="0994.php">Pavan Balaji: "[hwloc-devel] hwloc support on windows"</a>
<li><strong>In reply to:</strong> <a href="0994.php">Pavan Balaji: "[hwloc-devel] hwloc support on windows"</a>
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
