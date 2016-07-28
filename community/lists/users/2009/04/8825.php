<?
$subject_val = "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr  7 15:23:01 2009" -->
<!-- isoreceived="20090407192301" -->
<!-- sent="Tue, 7 Apr 2009 15:22:56 -0400" -->
<!-- isosent="20090407192256" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Factor of 10 loss in performance with 1.3.x" -->
<!-- id="20090407192255.GH26929_at_sun.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20090406163346.GA84785_at_troutmask.apl.washington.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Factor of 10 loss in performance with 1.3.x<br>
<strong>From:</strong> Ethan Mallove (<em>ethan.mallove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-07 15:22:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8826.php">Steve Kargl: "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
<li><strong>Previous message:</strong> <a href="8824.php">George Bosilca: "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
<li><strong>In reply to:</strong> <a href="8787.php">Steve Kargl: "[OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Steve,
<br>
<p>I see improvements in 1.3.1 as compared to 1.2.9 in Netpipe results.
<br>
The below Open MPI installations were compiled with the same compiler,
<br>
configure options, run on the same cluster, and run with the same MCA
<br>
parameters. (Note, ClusterTools 8.2 is essentially
<br>
1.3.1r20828.)
<br>
<p>&nbsp;&nbsp;<a href="http://www.open-mpi.org/mtt/index.php?do_redir=990">http://www.open-mpi.org/mtt/index.php?do_redir=990</a>
<br>
<p>Though the above are just two selected Netpipe runs out of thousands
<br>
in the MTT database. It's possible with some digging, one could come
<br>
up with a couple runs showing 1.2.9 outperforming 1.3.1 (given a
<br>
certain set of MCA params, configure options, platform, etc).
<br>
<p>-Ethan
<br>
<p>On Mon, Apr/06/2009 09:33:46AM, Steve Kargl wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I recently upgraded OpenMPI from 1.2.9 to 1.3 and then 1.3.1.
</span><br>
<span class="quotelev1">&gt; One of my colleagues reported a dramatic drop in performance
</span><br>
<span class="quotelev1">&gt; with one of his applications.  My investigation shows a factor
</span><br>
<span class="quotelev1">&gt; of 10 drop in communication over the memory bus.  I've placed
</span><br>
<span class="quotelev1">&gt; a figure that iilustrates the problem at 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://troutmask.apl.washington.edu/~kargl/ompi_cmp.jpg">http://troutmask.apl.washington.edu/~kargl/ompi_cmp.jpg</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The legend in the figure has 'ver. 1.2.9  11 &lt;--&gt; 18'.  This
</span><br>
<span class="quotelev1">&gt; means communication between node 11 and node 18 over GigE 
</span><br>
<span class="quotelev1">&gt; ethernet in my cluster.  'ver. 1.2.9  20 &lt;--&gt; 20' means
</span><br>
<span class="quotelev1">&gt; communication between processes on node 20 where node 20 has
</span><br>
<span class="quotelev1">&gt; 8 processors.  The image clearly shows that communication over
</span><br>
<span class="quotelev1">&gt; GigE is consistent among the versions of OpenMPI.  However, some
</span><br>
<span class="quotelev1">&gt; change in going from 1.2.9 to 1.3.x is causing a drop in
</span><br>
<span class="quotelev1">&gt; communication between processes on a single node.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Things to note.  Nodes 11, 18, and 20 are essentially idle
</span><br>
<span class="quotelev1">&gt; before and after a test.  configure was run with the same set
</span><br>
<span class="quotelev1">&gt; of options except with 1.3 and 1.3.1 I needed to disable ipv6:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   ./configure --prefix=/usr/local/openmpi-1.2.9 \
</span><br>
<span class="quotelev1">&gt;    --enable-orterun-prefix-by-default --enable-static
</span><br>
<span class="quotelev1">&gt;    --disable-shared
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   ./configure --prefix=/usr/local/openmpi-1.3.1 \
</span><br>
<span class="quotelev1">&gt;    --enable-orterun-prefix-by-default --enable-static
</span><br>
<span class="quotelev1">&gt;    --disable-shared --disable-ipv6
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   ./configure --prefix=/usr/local/openmpi-1.3.1 \
</span><br>
<span class="quotelev1">&gt;    --enable-orterun-prefix-by-default --enable-static
</span><br>
<span class="quotelev1">&gt;    --disable-shared --disable-ipv6
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The operating system is FreeBSD 8.0 where nodes 18 and 20
</span><br>
<span class="quotelev1">&gt; are quad-core, dual-cpu opteron based systems and node 11
</span><br>
<span class="quotelev1">&gt; is a dual-core, dual-cpu opteron based system.  For additional
</span><br>
<span class="quotelev1">&gt; information, I've placed the output of ompi_info at
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://troutmask.apl.washington.edu/~kargl/ompi_info-1.2.9">http://troutmask.apl.washington.edu/~kargl/ompi_info-1.2.9</a>
</span><br>
<span class="quotelev1">&gt; <a href="http://troutmask.apl.washington.edu/~kargl/ompi_info-1.3.0">http://troutmask.apl.washington.edu/~kargl/ompi_info-1.3.0</a>
</span><br>
<span class="quotelev1">&gt; <a href="http://troutmask.apl.washington.edu/~kargl/ompi_info-1.3.1">http://troutmask.apl.washington.edu/~kargl/ompi_info-1.3.1</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any hints on tuning 1.3.1 would be appreciated?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; steve
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Steve
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8826.php">Steve Kargl: "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
<li><strong>Previous message:</strong> <a href="8824.php">George Bosilca: "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
<li><strong>In reply to:</strong> <a href="8787.php">Steve Kargl: "[OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
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
