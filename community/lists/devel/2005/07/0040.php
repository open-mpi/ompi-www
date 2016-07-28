<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jul 22 06:03:48 2005" -->
<!-- isoreceived="20050722110348" -->
<!-- sent="Fri, 22 Jul 2005 07:03:46 -0400" -->
<!-- isosent="20050722110346" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="bproc problem" -->
<!-- id="dbf5998277bbeb13f27c934444d261d9_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-07-22 06:03:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0041.php">Jeff Squyres: "(REVISED) next week - schedule/list of topics"</a>
<li><strong>Previous message:</strong> <a href="0039.php">Jeff Squyres: "Fwd: [O-MPI svn-full] svn:open-mpi r6589 - trunk/orte/mca/soh/bproc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0042.php">Timothy B. Prins: "Re:  bproc problem"</a>
<li><strong>Reply:</strong> <a href="0042.php">Timothy B. Prins: "Re:  bproc problem"</a>
<li><strong>Reply:</strong> <a href="0045.php">Timothy B. Prins: "Re:  bproc problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
There appear to be 2 bproc problems in the tree right now:
<br>
<p>1. I mailed Tim Prins / Greg Watson about one of them already (trying 
<br>
to compile bproc on systems that don't have bproc -- perhaps related to 
<br>
the .ompi_unignore from last night?).
<br>
<p>2. The second was noticed by Joel Krauska from Cisco (he'll probably be 
<br>
on this list shortly).  Here's a mail he sent to me last night:
<br>
<p><span class="quotelev1">&gt; I haven't done the due diligence to attempt to disable the bproc stuff 
</span><br>
<span class="quotelev1">&gt; -- it just appears to not agree with my system and it's in the stock 
</span><br>
<span class="quotelev1">&gt; &quot;make&quot;..   I will later read the documentation, but it looks like
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ompi/orte/mca/pls/bproc_seed/pls_bproc_seed.c:446
</span><br>
<span class="quotelev1">&gt;     rc = bproc_vrfork(num_nodes, node_list, daemon_pids);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; conflicts with my scyld system's
</span><br>
<span class="quotelev1">&gt; /usr/include/sys/bproc.h
</span><br>
<span class="quotelev1">&gt; 	int  bproc_vrfork     (int *nodes, int nnodes);
</span><br>
<p>Right now, I think we're just checking for bproc.h to determine if the 
<br>
system has bproc -- we're not doing anything to figure out *which* 
<br>
bproc you have (LANL vs. Scyld).
<br>
<p>Does anyone have any Scyld machines lying around?  The prototype for 
<br>
vrfork() is one indicator, but not the easiest to test fork -- are they 
<br>
any other telltale #define's or such that we can use for testing in 
<br>
configure?
<br>
<p><pre>
-- 
{+} Jeff Squyres
{+} The Open MPI Project
{+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0041.php">Jeff Squyres: "(REVISED) next week - schedule/list of topics"</a>
<li><strong>Previous message:</strong> <a href="0039.php">Jeff Squyres: "Fwd: [O-MPI svn-full] svn:open-mpi r6589 - trunk/orte/mca/soh/bproc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0042.php">Timothy B. Prins: "Re:  bproc problem"</a>
<li><strong>Reply:</strong> <a href="0042.php">Timothy B. Prins: "Re:  bproc problem"</a>
<li><strong>Reply:</strong> <a href="0045.php">Timothy B. Prins: "Re:  bproc problem"</a>
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
