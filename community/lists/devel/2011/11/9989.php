<?
$subject_val = "[OMPI devel] Fwd: [OMPI svn] svn:open-mpi r25476";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 17 21:42:10 2011" -->
<!-- isoreceived="20111118024210" -->
<!-- sent="Thu, 17 Nov 2011 18:42:03 -0800" -->
<!-- isosent="20111118024203" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="[OMPI devel] Fwd: [OMPI svn] svn:open-mpi r25476" -->
<!-- id="2E3E7153-F189-4A65-AD02-715A4DAF4663_at_eecs.utk.edu" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="201111150340.pAF3eC3C016181_at_sourcehaven.osl.iu.edu" -->
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
<strong>Subject:</strong> [OMPI devel] Fwd: [OMPI svn] svn:open-mpi r25476<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-17 21:42:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9990.php">Ralph Castain: "Re: [OMPI devel] Fwd: [OMPI svn] svn:open-mpi r25476"</a>
<li><strong>Previous message:</strong> <a href="9988.php">Paul H. Hargrove: "Re: [OMPI devel] [EXTERNAL] Re:  Rename &quot;vader&quot; BTL to &quot;xpmem&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9990.php">Ralph Castain: "Re: [OMPI devel] Fwd: [OMPI svn] svn:open-mpi r25476"</a>
<li><strong>Reply:</strong> <a href="9990.php">Ralph Castain: "Re: [OMPI devel] Fwd: [OMPI svn] svn:open-mpi r25476"</a>
<li><strong>Reply:</strong> <a href="9991.php">Ralph Castain: "Re: [OMPI devel] Fwd: [OMPI svn] svn:open-mpi r25476"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I guess I reach one of these corner-cases that didn't got tested. I can't start any apps (not even a hostname) after this commit using the rsh PLM (as soon as I add a hostile). The mpirun is blocked in an infinite loop (after it spawned the daemons) in orte_rmaps_base_compute_vpids. Attaching with gdb indicates that cnt is never incremented, thus the mpirun is stuck forever in the while loop at line 397.
<br>
<p>I used &quot;mpirun -np 2 --bynode ./tp_lb_ub_ng&quot; to start my application, and I have a machine file containing two nodes:
<br>
<p>node01 slots=8
<br>
node02 slots=8
<br>
<p>In addition CTRL+C seems to be broken &#133;
<br>
<p>&nbsp;&nbsp;george.
<br>
<p>Begin forwarded message:
<br>
<p><span class="quotelev1">&gt; Author: rhc
</span><br>
<span class="quotelev1">&gt; Date: 2011-11-14 22:40:11 EST (Mon, 14 Nov 2011)
</span><br>
<span class="quotelev1">&gt; New Revision: 25476
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/25476">https://svn.open-mpi.org/trac/ompi/changeset/25476</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; At long last, the fabled revision to the affinity system has arrived. A more detailed explanation of how this all works will be presented here:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="https://svn.open-mpi.org/trac/ompi/wiki/ProcessPlacement">https://svn.open-mpi.org/trac/ompi/wiki/ProcessPlacement</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The wiki page is incomplete at the moment, but I hope to complete it over the next few days. I will provide updates on the devel list. As the wiki page states, the default and most commonly used options remain unchanged (except as noted below). New, esoteric and complex options have been added, but unless you are a true masochist, you are unlikely to use many of them beyond perhaps an initial curiosity-motivated experimentation.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In a nutshell, this commit revamps the map/rank/bind procedure to take into account topology info on the compute nodes. I have, for the most part, preserved the default behaviors, with three notable exceptions:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. I have at long last bowed my head in submission to the system admin's of managed clusters. For years, they have complained about our default of allowing users to oversubscribe nodes - i.e., to run more processes on a node than allocated slots. Accordingly, I have modified the default behavior: if you are running off of hostfile/dash-host allocated nodes, then the default is to allow oversubscription. If you are running off of RM-allocated nodes, then the default is to NOT allow oversubscription. Flags to override these behaviors are provided, so this only affects the default behavior.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2. both cpus/rank and stride have been removed. The latter was demanded by those who didn't understand the purpose behind it - and I agreed as the users who requested it are no longer using it. The former was removed temporarily pending implementation.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 3. vm launch is now the sole method for starting OMPI. It was just too darned hard to maintain multiple launch procedures - maybe someday, provided someone can demonstrate a reason to do so.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As Jeff stated, it is impossible to fully test a change of this size. I have tested it on Linux and Mac, covering all the default and simple options, singletons, and comm_spawn. That said, I'm sure others will find problems, so I'll be watching MTT results until this stabilizes.
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9990.php">Ralph Castain: "Re: [OMPI devel] Fwd: [OMPI svn] svn:open-mpi r25476"</a>
<li><strong>Previous message:</strong> <a href="9988.php">Paul H. Hargrove: "Re: [OMPI devel] [EXTERNAL] Re:  Rename &quot;vader&quot; BTL to &quot;xpmem&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9990.php">Ralph Castain: "Re: [OMPI devel] Fwd: [OMPI svn] svn:open-mpi r25476"</a>
<li><strong>Reply:</strong> <a href="9990.php">Ralph Castain: "Re: [OMPI devel] Fwd: [OMPI svn] svn:open-mpi r25476"</a>
<li><strong>Reply:</strong> <a href="9991.php">Ralph Castain: "Re: [OMPI devel] Fwd: [OMPI svn] svn:open-mpi r25476"</a>
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
