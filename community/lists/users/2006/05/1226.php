<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed May 10 04:57:35 2006" -->
<!-- isoreceived="20060510085735" -->
<!-- sent="Wed, 10 May 2006 10:57:01 +0200" -->
<!-- isosent="20060510085701" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Orted Command Not found" -->
<!-- id="2F8D5E7A-CD8C-4EDA-BD39-E7C6DA937494_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20060510070816.68915.qmail_at_web30704.mail.mud.yahoo.com" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-05-10 04:57:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1227.php">Michael Creel: "[OMPI users] version 1.0.2 on latest parallelknoppix"</a>
<li><strong>Previous message:</strong> <a href="1225.php">Richard Wait: "Re: [OMPI users] Open MPI and MPICH"</a>
<li><strong>In reply to:</strong> <a href="1224.php">Mahesh Barve: "[OMPI users] Orted Command Not found"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 10, 2006, at 9:08 AM, Mahesh Barve wrote:
<br>
<p><span class="quotelev1">&gt;  I am trying to build a cluster with 2 nodes each
</span><br>
<span class="quotelev1">&gt; being a  dual processor xeon machine. I have installed
</span><br>
<span class="quotelev1">&gt; openMPI on one of the machines in /opt/open-mpi folder
</span><br>
<span class="quotelev1">&gt; and have kept the folder shared across the network
</span><br>
<span class="quotelev1">&gt; thru nfs mounted again in the same folder.
</span><br>
<span class="quotelev1">&gt;  Now I would like to run mpi code involving both
</span><br>
<span class="quotelev1">&gt; machines.  I run the code with command
</span><br>
<span class="quotelev1">&gt;  mpirun --hostfile hostfile -np 2 a.out
</span><br>
<span class="quotelev1">&gt; where hostfile has ipaddresses of both the
</span><br>
<span class="quotelev1">&gt; machines(192.168.1.1(master node) and
</span><br>
<span class="quotelev1">&gt; 192.168.1.2(slave node)).
</span><br>
<span class="quotelev1">&gt;  I get the error
</span><br>
<span class="quotelev1">&gt; ----------
</span><br>
<span class="quotelev1">&gt; orte: command not found
</span><br>
<span class="quotelev1">&gt;  ERROR : A daemon on node 192.166.1.2 failed to start
</span><br>
<span class="quotelev1">&gt; as expected
</span><br>
<span class="quotelev1">&gt;  ERROR : there may be more information available from
</span><br>
<span class="quotelev1">&gt; the remote shell (see above)
</span><br>
<span class="quotelev1">&gt;  ERROR : the daemon exited unexpectedly with status
</span><br>
<span class="quotelev1">&gt; 127
</span><br>
<span class="quotelev1">&gt; -----------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Could you please let me know how to get over this
</span><br>
<span class="quotelev1">&gt; problem?
</span><br>
<p>This usually means that on the remote node, /opt/open-mpi/bin is not  
<br>
in your path.  We have an FAQ item on this issue:
<br>
<p>&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/faq/?category=running#adding-ompi-to-path">http://www.open-mpi.org/faq/?category=running#adding-ompi-to-path</a>
<br>
<p>If this doesn't solve your problem, please let us know.
<br>
<p>Brian
<br>
<p><pre>
-- 
   Brian Barrett
   Open MPI developer
   <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1227.php">Michael Creel: "[OMPI users] version 1.0.2 on latest parallelknoppix"</a>
<li><strong>Previous message:</strong> <a href="1225.php">Richard Wait: "Re: [OMPI users] Open MPI and MPICH"</a>
<li><strong>In reply to:</strong> <a href="1224.php">Mahesh Barve: "[OMPI users] Orted Command Not found"</a>
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
