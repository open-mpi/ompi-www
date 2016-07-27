<?
$subject_val = "Re: [hwloc-devel] dplace";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 20 12:18:01 2010" -->
<!-- isoreceived="20100420161801" -->
<!-- sent="Tue, 20 Apr 2010 18:17:56 +0200" -->
<!-- isosent="20100420161756" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] dplace" -->
<!-- id="4BCDD3B4.6040506_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4BCDCE38.5030309_at_sgi.com" -->
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
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-20 12:17:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0914.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1961"</a>
<li><strong>Previous message:</strong> <a href="0912.php">Bert Wesarg: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1961"</a>
<li><strong>In reply to:</strong> <a href="0911.php">Michael Raymond: "Re: [hwloc-devel] dplace"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0915.php">Michael Raymond: "Re: [hwloc-devel] dplace"</a>
<li><strong>Reply:</strong> <a href="0915.php">Michael Raymond: "Re: [hwloc-devel] dplace"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Does dplace do something clever like reading the MPI rank and
<br>
communicator size and try to figure out how to distribute among the
<br>
cores so as to maximize memory bandwidth or cache sharing ?
<br>
<p>Brice
<br>
<p><p><p>Michael Raymond wrote:
<br>
<span class="quotelev1">&gt;   As of SGI ProPack 7 dplace uses hwloc internally to specify stride
</span><br>
<span class="quotelev1">&gt; patterns.  For example:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -np 8 dplace -c SC a.out
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   means to pin ranks to every core inside a socket before jumping to the
</span><br>
<span class="quotelev1">&gt; next socket and doing the same.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   From the man page:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  	For  striding  patterns  any
</span><br>
<span class="quotelev1">&gt;               subset of the characters (B)lade, (S)ocket, (C)ore,
</span><br>
<span class="quotelev1">&gt; (T)hread may
</span><br>
<span class="quotelev1">&gt;               be used and their ordering specifies the nesting of  the
</span><br>
<span class="quotelev1">&gt; itera-
</span><br>
<span class="quotelev1">&gt;               tion.   For  example  &quot;SC&quot;  means  to iterate all the
</span><br>
<span class="quotelev1">&gt; cores in a
</span><br>
<span class="quotelev1">&gt;               socket before moving to the next CPU socket, while &quot;CB&quot;
</span><br>
<span class="quotelev1">&gt; means to
</span><br>
<span class="quotelev1">&gt;               pin  to  the  first  core of each blade, then the second
</span><br>
<span class="quotelev1">&gt; core of
</span><br>
<span class="quotelev1">&gt;               every blade, etc.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   I've been trying to evangelize more hwloc usage with mixed results.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brice Goglin wrote:
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; I discovered &quot;dplace&quot; today. I don't know how many people install/use it
</span><br>
<span class="quotelev2">&gt;&gt; on their cluster, but it's something that looks interesting when you
</span><br>
<span class="quotelev2">&gt;&gt; don't have advanced binding capabilities in the MPI implementation. For
</span><br>
<span class="quotelev2">&gt;&gt; instance, you could do:
</span><br>
<span class="quotelev2">&gt;&gt;   $ mpirun -np 8 dplace 0,4,2,6,1,5,3,7 myprogram
</span><br>
<span class="quotelev2">&gt;&gt; to bind process ranks according to the machine topology.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-calc can easily generate such list of physical processors, for
</span><br>
<span class="quotelev2">&gt;&gt; instance:
</span><br>
<span class="quotelev2">&gt;&gt;   $ hwloc-calc --physical proc:all --pulist
</span><br>
<span class="quotelev2">&gt;&gt;   0,4,2,6,1,5,3,7
</span><br>
<span class="quotelev2">&gt;&gt; or even restrict of one PU per socket with:
</span><br>
<span class="quotelev2">&gt;&gt;   $ hwloc-calc --physical socket:all.core:0 --pulist
</span><br>
<span class="quotelev2">&gt;&gt;   0,1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So hwloc-calc could help dplace significantly. Maybe we should put such
</span><br>
<span class="quotelev2">&gt;&gt; examples somewhere in the doc.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Brice
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0914.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1961"</a>
<li><strong>Previous message:</strong> <a href="0912.php">Bert Wesarg: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1961"</a>
<li><strong>In reply to:</strong> <a href="0911.php">Michael Raymond: "Re: [hwloc-devel] dplace"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0915.php">Michael Raymond: "Re: [hwloc-devel] dplace"</a>
<li><strong>Reply:</strong> <a href="0915.php">Michael Raymond: "Re: [hwloc-devel] dplace"</a>
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
