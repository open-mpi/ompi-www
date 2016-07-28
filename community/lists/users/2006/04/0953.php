<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Apr  3 15:36:17 2006" -->
<!-- isoreceived="20060403193617" -->
<!-- sent="Mon, 3 Apr 2006 15:36:02 -0400" -->
<!-- isosent="20060403193602" -->
<!-- name="Michael Kluskens" -->
<!-- email="mkluskens_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI installed locally" -->
<!-- id="22C641C5-32BB-4E6F-B2D6-E314802709A0_at_ieee.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="5C77E1C3-2D02-44B1-8F48-006D3A626CD1_at_open-mpi.org" -->
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
<strong>From:</strong> Michael Kluskens (<em>mkluskens_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-04-03 15:36:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0954.php">sundar j: "[OMPI users] cygwin support"</a>
<li><strong>Previous message:</strong> <a href="0952.php">Brian Barrett: "Re: [OMPI users] Open MPI installed locally"</a>
<li><strong>In reply to:</strong> <a href="0952.php">Brian Barrett: "Re: [OMPI users] Open MPI installed locally"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 3, 2006, at 3:02 PM, Brian Barrett wrote:
<br>
<p><span class="quotelev1">&gt; On Apr 3, 2006, at 2:50 PM, Rolf Vandevaart wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  From what I have read from the Open MPI documentation, it seems
</span><br>
<span class="quotelev2">&gt;&gt; that the recommendation is to install Open MPI on an NFS server
</span><br>
<span class="quotelev2">&gt;&gt; that is accessible to all the nodes in the cell.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Are there any cases where it is recommended to install Open MPI
</span><br>
<span class="quotelev2">&gt;&gt; locally on all the nodes in the cell instead?  Maybe in the case of
</span><br>
<span class="quotelev2">&gt;&gt; larger
</span><br>
<span class="quotelev2">&gt;&gt; clusters if one is concerned about NFS traffic?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sure, installing on each node individually has it's advantages -
</span><br>
<span class="quotelev1">&gt; namely drastically reducing NFS traffic.  I think any suggestion of
</span><br>
<span class="quotelev1">&gt; installing in NFS was mainly because 1) it's easier and 2) it's less
</span><br>
<span class="quotelev1">&gt; likely to be messed up because of version mismatches.  But for those
</span><br>
<span class="quotelev1">&gt; that are careful to keep their nodes in sync, there's no reason not
</span><br>
<span class="quotelev1">&gt; to install Open MPI on local disk.
</span><br>
<p>Configuring a rsync script in cron is a good way to sync machines in  
<br>
a cluster.  One rsync for each directory works nicely.  Update the  
<br>
master and at the next update (or manually) every thing is up-to-date  
<br>
in the chosen directory(ies).  It's best if the script exists on the  
<br>
client nodes rather then the master in case a client is powered down  
<br>
or different architectures.  Simplified my life greatly.
<br>
<p>Michael
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0954.php">sundar j: "[OMPI users] cygwin support"</a>
<li><strong>Previous message:</strong> <a href="0952.php">Brian Barrett: "Re: [OMPI users] Open MPI installed locally"</a>
<li><strong>In reply to:</strong> <a href="0952.php">Brian Barrett: "Re: [OMPI users] Open MPI installed locally"</a>
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
