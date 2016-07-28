<?
$subject_val = "Re: [hwloc-devel] SWIG bindings";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec  2 15:00:27 2010" -->
<!-- isoreceived="20101202200027" -->
<!-- sent="Thu, 2 Dec 2010 21:00:21 +0100" -->
<!-- isosent="20101202200021" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] SWIG bindings" -->
<!-- id="20101202200021.GE4426_at_const.famille.thibault.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="440036960.219109.1291318960937.JavaMail.root_at_zmbs4.inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] SWIG bindings<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-02 15:00:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1660.php">Bernd Kallies: "Re: [hwloc-devel] SWIG bindings"</a>
<li><strong>Previous message:</strong> <a href="1658.php">Jeff Squyres: "Re: [hwloc-devel] SWIG bindings"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2010/11/1635.php">Jeff Squyres: "[hwloc-devel] SWIG bindings"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres, le Thu 02 Dec 2010 20:42:40 +0100, a &#233;crit :
<br>
<span class="quotelev2">&gt; &gt; These were my ideas. Comments are welcome. Note that we have very big
</span><br>
<span class="quotelev2">&gt; &gt; machines with complicated topologies. Executing lstopo (pure C API)
</span><br>
<span class="quotelev2">&gt; &gt; takes up to a second there. It made no sense to me to slow this down
</span><br>
<span class="quotelev2">&gt; &gt; more.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Also agreed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Do you have any feel for if there are particular bottlenecks in hwloc / lstopo that make it take so long?  I wonder if we should just attack those (if possible)...?  Samuel and Brice have done all the work in the guts of the API, so they might know offhand if there are places that can be optimized or not...
</span><br>
<p>Actually, considering the huge pile of /proc and /sys files that parsing
<br>
1024 processors requires, one second doesn't seem so much to me :) But
<br>
yes, an somethingprof output could be useful to determine whether there
<br>
is room for improvement.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1660.php">Bernd Kallies: "Re: [hwloc-devel] SWIG bindings"</a>
<li><strong>Previous message:</strong> <a href="1658.php">Jeff Squyres: "Re: [hwloc-devel] SWIG bindings"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2010/11/1635.php">Jeff Squyres: "[hwloc-devel] SWIG bindings"</a>
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
