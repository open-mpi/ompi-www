<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25476";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 17 22:17:16 2011" -->
<!-- isoreceived="20111118031716" -->
<!-- sent="Thu, 17 Nov 2011 20:17:08 -0700" -->
<!-- isosent="20111118031708" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r25476" -->
<!-- id="EACE1A67-D79E-4DD9-BB03-B99F6337BCC6_at_open-mpi.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="39A2D41F-6A65-47A0-B285-5F64221CAD11_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn] svn:open-mpi r25476<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-17 22:17:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9994.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25476"</a>
<li><strong>Previous message:</strong> <a href="9992.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25476"</a>
<li><strong>In reply to:</strong> <a href="9992.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25476"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9994.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25476"</a>
<li><strong>Reply:</strong> <a href="9994.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25476"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 17, 2011, at 8:13 PM, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; I have a fresh checkout. In your example where are your hosts coming from? How do you specify the hostile?
</span><br>
<p>The hosts are coming from the slurm allocation, though I also tried adding -host arguments. The error you describe comes well after the hostfile has been read - it comes after the procs are mapped - and so how the hosts enter the system is irrelevant.
<br>
<p>I'm still building on odin, but will check there again to see if I can replicate - perhaps something didn't get committed cleanly.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  george.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Nov 17, 2011, at 19:06 , Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hmmm...well, things seem to work just fine for me:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; [rhc_at_odin ~/ompi-hwloc]$ mpirun -np 2 -bynode -mca plm rsh hostname
</span><br>
<span class="quotelev2">&gt;&gt; odin090.cs.indiana.edu
</span><br>
<span class="quotelev2">&gt;&gt; odin091.cs.indiana.edu
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; [rhc_at_odin mpi]$ mpirun -np 2 -bynode -mca plm rsh ./hello_nodename
</span><br>
<span class="quotelev2">&gt;&gt; Hello, World, I am 1 of 2 on host odin091.cs.indiana.edu from app number 0 universe size 8
</span><br>
<span class="quotelev2">&gt;&gt; Hello, World, I am 0 of 2 on host odin090.cs.indiana.edu from app number 0 universe size 8
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'll get a fresh checkout and see if I can replicate from that...
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Nov 17, 2011, at 7:42 PM, George Bosilca wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I guess I reach one of these corner-cases that didn't got tested. I can't start any apps (not even a hostname) after this commit using the rsh PLM (as soon as I add a hostile). The mpirun is blocked in an infinite loop (after it spawned the daemons) in orte_rmaps_base_compute_vpids. Attaching with gdb indicates that cnt is never incremented, thus the mpirun is stuck forever in the while loop at line 397.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I used &quot;mpirun -np 2 --bynode ./tp_lb_ub_ng&quot; to start my application, and I have a machine file containing two nodes:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; node01 slots=8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; node02 slots=8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In addition CTRL+C seems to be broken &#133;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; george.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Begin forwarded message:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Author: rhc
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Date: 2011-11-14 22:40:11 EST (Mon, 14 Nov 2011)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; New Revision: 25476
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/25476">https://svn.open-mpi.org/trac/ompi/changeset/25476</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Log:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; At long last, the fabled revision to the affinity system has arrived. A more detailed explanation of how this all works will be presented here:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="https://svn.open-mpi.org/trac/ompi/wiki/ProcessPlacement">https://svn.open-mpi.org/trac/ompi/wiki/ProcessPlacement</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The wiki page is incomplete at the moment, but I hope to complete it over the next few days. I will provide updates on the devel list. As the wiki page states, the default and most commonly used options remain unchanged (except as noted below). New, esoteric and complex options have been added, but unless you are a true masochist, you are unlikely to use many of them beyond perhaps an initial curiosity-motivated experimentation.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; In a nutshell, this commit revamps the map/rank/bind procedure to take into account topology info on the compute nodes. I have, for the most part, preserved the default behaviors, with three notable exceptions:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 1. I have at long last bowed my head in submission to the system admin's of managed clusters. For years, they have complained about our default of allowing users to oversubscribe nodes - i.e., to run more processes on a node than allocated slots. Accordingly, I have modified the default behavior: if you are running off of hostfile/dash-host allocated nodes, then the default is to allow oversubscription. If you are running off of RM-allocated nodes, then the default is to NOT allow oversubscription. Flags to override these behaviors are provided, so this only affects the default behavior.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 2. both cpus/rank and stride have been removed. The latter was demanded by those who didn't understand the purpose behind it - and I agreed as the users who requested it are no longer using it. The former was removed temporarily pending implementation.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 3. vm launch is now the sole method for starting OMPI. It was just too darned hard to maintain multiple launch procedures - maybe someday, provided someone can demonstrate a reason to do so.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; As Jeff stated, it is impossible to fully test a change of this size. I have tested it on Linux and Mac, covering all the default and simple options, singletons, and comm_spawn. That said, I'm sure others will find problems, so I'll be watching MTT results until this stabilizes.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9994.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25476"</a>
<li><strong>Previous message:</strong> <a href="9992.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25476"</a>
<li><strong>In reply to:</strong> <a href="9992.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25476"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9994.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25476"</a>
<li><strong>Reply:</strong> <a href="9994.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25476"</a>
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
