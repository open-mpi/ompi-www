<?
$subject_val = "Re: [hwloc-devel] dplace";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 20 13:09:08 2010" -->
<!-- isoreceived="20100420170908" -->
<!-- sent="Tue, 20 Apr 2010 12:09:02 -0500" -->
<!-- isosent="20100420170902" -->
<!-- name="Michael Raymond" -->
<!-- email="mraymond_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] dplace" -->
<!-- id="4BCDDFAE.3050404_at_sgi.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4BCDD3B4.6040506_at_inria.fr" -->
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
<strong>Date:</strong> 2010-04-20 13:09:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0916.php">Brice Goglin: "[hwloc-devel] backward API compat or not?"</a>
<li><strong>Previous message:</strong> <a href="0914.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1961"</a>
<li><strong>In reply to:</strong> <a href="0913.php">Brice Goglin: "Re: [hwloc-devel] dplace"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;&nbsp;dplace is a general purpose tool for placing applications and doesn't
<br>
know anything about MPI.  It does do internal accounting system wide to
<br>
spread and pin processes and threads.  For example if you run a job with
<br>
dplace and tell it to just pin your job anywhere it can and another user
<br>
does the same, if there are enough cores / hyperthreads available it
<br>
will keep the jobs from being pinned to the same cores / hyperthreads.
<br>
<p>Brice Goglin wrote:
<br>
<span class="quotelev1">&gt; Does dplace do something clever like reading the MPI rank and
</span><br>
<span class="quotelev1">&gt; communicator size and try to figure out how to distribute among the
</span><br>
<span class="quotelev1">&gt; cores so as to maximize memory bandwidth or cache sharing ?
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
<span class="quotelev1">&gt; Michael Raymond wrote:
</span><br>
<span class="quotelev2">&gt;&gt;   As of SGI ProPack 7 dplace uses hwloc internally to specify stride
</span><br>
<span class="quotelev2">&gt;&gt; patterns.  For example:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -np 8 dplace -c SC a.out
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   means to pin ranks to every core inside a socket before jumping to the
</span><br>
<span class="quotelev2">&gt;&gt; next socket and doing the same.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   From the man page:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  	For  striding  patterns  any
</span><br>
<span class="quotelev2">&gt;&gt;               subset of the characters (B)lade, (S)ocket, (C)ore,
</span><br>
<span class="quotelev2">&gt;&gt; (T)hread may
</span><br>
<span class="quotelev2">&gt;&gt;               be used and their ordering specifies the nesting of  the
</span><br>
<span class="quotelev2">&gt;&gt; itera-
</span><br>
<span class="quotelev2">&gt;&gt;               tion.   For  example  &quot;SC&quot;  means  to iterate all the
</span><br>
<span class="quotelev2">&gt;&gt; cores in a
</span><br>
<span class="quotelev2">&gt;&gt;               socket before moving to the next CPU socket, while &quot;CB&quot;
</span><br>
<span class="quotelev2">&gt;&gt; means to
</span><br>
<span class="quotelev2">&gt;&gt;               pin  to  the  first  core of each blade, then the second
</span><br>
<span class="quotelev2">&gt;&gt; core of
</span><br>
<span class="quotelev2">&gt;&gt;               every blade, etc.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   I've been trying to evangelize more hwloc usage with mixed results.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Brice Goglin wrote:
</span><br>
<span class="quotelev2">&gt;&gt;   
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I discovered &quot;dplace&quot; today. I don't know how many people install/use it
</span><br>
<span class="quotelev3">&gt;&gt;&gt; on their cluster, but it's something that looks interesting when you
</span><br>
<span class="quotelev3">&gt;&gt;&gt; don't have advanced binding capabilities in the MPI implementation. For
</span><br>
<span class="quotelev3">&gt;&gt;&gt; instance, you could do:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   $ mpirun -np 8 dplace 0,4,2,6,1,5,3,7 myprogram
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to bind process ranks according to the machine topology.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hwloc-calc can easily generate such list of physical processors, for
</span><br>
<span class="quotelev3">&gt;&gt;&gt; instance:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   $ hwloc-calc --physical proc:all --pulist
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   0,4,2,6,1,5,3,7
</span><br>
<span class="quotelev3">&gt;&gt;&gt; or even restrict of one PU per socket with:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   $ hwloc-calc --physical socket:all.core:0 --pulist
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   0,1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So hwloc-calc could help dplace significantly. Maybe we should put such
</span><br>
<span class="quotelev3">&gt;&gt;&gt; examples somewhere in the doc.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Brice
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     
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
<li><strong>Next message:</strong> <a href="0916.php">Brice Goglin: "[hwloc-devel] backward API compat or not?"</a>
<li><strong>Previous message:</strong> <a href="0914.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1961"</a>
<li><strong>In reply to:</strong> <a href="0913.php">Brice Goglin: "Re: [hwloc-devel] dplace"</a>
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
