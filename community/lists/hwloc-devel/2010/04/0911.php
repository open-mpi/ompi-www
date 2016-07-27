<?
$subject_val = "Re: [hwloc-devel] dplace";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 20 11:54:38 2010" -->
<!-- isoreceived="20100420155438" -->
<!-- sent="Tue, 20 Apr 2010 10:54:32 -0500" -->
<!-- isosent="20100420155432" -->
<!-- name="Michael Raymond" -->
<!-- email="mraymond_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] dplace" -->
<!-- id="4BCDCE38.5030309_at_sgi.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4BCDCB2F.6020309_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] dplace<br>
<strong>From:</strong> Michael Raymond (<em>mraymond_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-20 11:54:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0912.php">Bert Wesarg: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1961"</a>
<li><strong>Previous message:</strong> <a href="0910.php">Brice Goglin: "[hwloc-devel] dplace"</a>
<li><strong>In reply to:</strong> <a href="0910.php">Brice Goglin: "[hwloc-devel] dplace"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0913.php">Brice Goglin: "Re: [hwloc-devel] dplace"</a>
<li><strong>Reply:</strong> <a href="0913.php">Brice Goglin: "Re: [hwloc-devel] dplace"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;&nbsp;As of SGI ProPack 7 dplace uses hwloc internally to specify stride
<br>
patterns.  For example:
<br>
<p>mpirun -np 8 dplace -c SC a.out
<br>
<p>&nbsp;&nbsp;means to pin ranks to every core inside a socket before jumping to the
<br>
next socket and doing the same.
<br>
<p>&nbsp;&nbsp;From the man page:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;For  striding  patterns  any
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;subset of the characters (B)lade, (S)ocket, (C)ore,
<br>
(T)hread may
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;be used and their ordering specifies the nesting of  the
<br>
itera-
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;tion.   For  example  &quot;SC&quot;  means  to iterate all the
<br>
cores in a
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;socket before moving to the next CPU socket, while &quot;CB&quot;
<br>
means to
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;pin  to  the  first  core of each blade, then the second
<br>
core of
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;every blade, etc.
<br>
<p>&nbsp;&nbsp;I've been trying to evangelize more hwloc usage with mixed results.
<br>
<p>Brice Goglin wrote:
<br>
<span class="quotelev1">&gt; I discovered &quot;dplace&quot; today. I don't know how many people install/use it
</span><br>
<span class="quotelev1">&gt; on their cluster, but it's something that looks interesting when you
</span><br>
<span class="quotelev1">&gt; don't have advanced binding capabilities in the MPI implementation. For
</span><br>
<span class="quotelev1">&gt; instance, you could do:
</span><br>
<span class="quotelev1">&gt;   $ mpirun -np 8 dplace 0,4,2,6,1,5,3,7 myprogram
</span><br>
<span class="quotelev1">&gt; to bind process ranks according to the machine topology.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; hwloc-calc can easily generate such list of physical processors, for
</span><br>
<span class="quotelev1">&gt; instance:
</span><br>
<span class="quotelev1">&gt;   $ hwloc-calc --physical proc:all --pulist
</span><br>
<span class="quotelev1">&gt;   0,4,2,6,1,5,3,7
</span><br>
<span class="quotelev1">&gt; or even restrict of one PU per socket with:
</span><br>
<span class="quotelev1">&gt;   $ hwloc-calc --physical socket:all.core:0 --pulist
</span><br>
<span class="quotelev1">&gt;   0,1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So hwloc-calc could help dplace significantly. Maybe we should put such
</span><br>
<span class="quotelev1">&gt; examples somewhere in the doc.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brice
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
<p><pre>
-- 
Michael A. Raymond
Message Passing Toolkit Team
Silicon Graphics Inc
(651) 683-3434
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0912.php">Bert Wesarg: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1961"</a>
<li><strong>Previous message:</strong> <a href="0910.php">Brice Goglin: "[hwloc-devel] dplace"</a>
<li><strong>In reply to:</strong> <a href="0910.php">Brice Goglin: "[hwloc-devel] dplace"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0913.php">Brice Goglin: "Re: [hwloc-devel] dplace"</a>
<li><strong>Reply:</strong> <a href="0913.php">Brice Goglin: "Re: [hwloc-devel] dplace"</a>
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
