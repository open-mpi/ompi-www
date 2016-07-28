<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Feb  8 00:46:29 2006" -->
<!-- isoreceived="20060208054629" -->
<!-- sent="Wed, 8 Feb 2006 00:46:24 -0500 (EST)" -->
<!-- isosent="20060208054624" -->
<!-- name="Graham E Fagg" -->
<!-- email="fagg_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] does btl_openib work with multiple ports ?" -->
<!-- id="Pine.GSO.4.62.0602080044280.19625_at_enterprise" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="Pine.LNX.4.62.0602072056440.20304_at_io.cs.unm.edu" -->
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
<strong>From:</strong> Graham E Fagg (<em>fagg_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-02-08 00:46:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0599.php">Jeff Squyres: "Re: [O-MPI users] forrtl: severe (39): error during read, unit 5, file /dev/ptmx - OpenMPI 1.0.2"</a>
<li><strong>Previous message:</strong> <a href="0597.php">Galen M. Shipman: "Re: [O-MPI users] does btl_openib work with multiple ports ?"</a>
<li><strong>In reply to:</strong> <a href="0597.php">Galen M. Shipman: "Re: [O-MPI users] does btl_openib work with multiple ports ?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; On Tue, 7 Feb 2006, Jean-Christophe Hugly wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Thu, 2006-02-02 at 21:49 -0700, Galen M. Shipman wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I suspect the problem may be in the bcast,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_coll_tuned_bcast_intra_basic_linear. Can you try the same run using
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun -prefix /opt/ompi -wdir `pwd` -machinefile /root/machines -np
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2 -mca coll self,basic -d xterm -e gdb PMB-MPI1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This will use the basic collectives and may isolate the problem.
</span><br>
<p>Strange, ompi_coll_tuned_bcast_intra_basic_linear is an exact copy of the 
<br>
basic .. add -mca coll_base_verbose 1 to the mpirun line to see what else 
<br>
is happening.
<br>
<p>G
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0599.php">Jeff Squyres: "Re: [O-MPI users] forrtl: severe (39): error during read, unit 5, file /dev/ptmx - OpenMPI 1.0.2"</a>
<li><strong>Previous message:</strong> <a href="0597.php">Galen M. Shipman: "Re: [O-MPI users] does btl_openib work with multiple ports ?"</a>
<li><strong>In reply to:</strong> <a href="0597.php">Galen M. Shipman: "Re: [O-MPI users] does btl_openib work with multiple ports ?"</a>
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
