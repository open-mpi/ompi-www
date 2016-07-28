<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Apr  3 15:02:31 2006" -->
<!-- isoreceived="20060403190231" -->
<!-- sent="Mon, 3 Apr 2006 15:02:31 -0400" -->
<!-- isosent="20060403190231" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI installed locally" -->
<!-- id="5C77E1C3-2D02-44B1-8F48-006D3A626CD1_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="44316E67.1080805_at_Sun.COM" -->
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
<strong>Date:</strong> 2006-04-03 15:02:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0953.php">Michael Kluskens: "Re: [OMPI users] Open MPI installed locally"</a>
<li><strong>Previous message:</strong> <a href="0951.php">Rolf Vandevaart: "[OMPI users] Open MPI installed locally"</a>
<li><strong>In reply to:</strong> <a href="0951.php">Rolf Vandevaart: "[OMPI users] Open MPI installed locally"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0953.php">Michael Kluskens: "Re: [OMPI users] Open MPI installed locally"</a>
<li><strong>Reply:</strong> <a href="0953.php">Michael Kluskens: "Re: [OMPI users] Open MPI installed locally"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 3, 2006, at 2:50 PM, Rolf Vandevaart wrote:
<br>
<p><span class="quotelev1">&gt;  From what I have read from the Open MPI documentation, it seems
</span><br>
<span class="quotelev1">&gt; that the recommendation is to install Open MPI on an NFS server
</span><br>
<span class="quotelev1">&gt; that is accessible to all the nodes in the cell.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Are there any cases where it is recommended to install Open MPI
</span><br>
<span class="quotelev1">&gt; locally on all the nodes in the cell instead?  Maybe in the case of  
</span><br>
<span class="quotelev1">&gt; larger
</span><br>
<span class="quotelev1">&gt; clusters if one is concerned about NFS traffic?
</span><br>
<p>Sure, installing on each node individually has it's advantages -  
<br>
namely drastically reducing NFS traffic.  I think any suggestion of  
<br>
installing in NFS was mainly because 1) it's easier and 2) it's less  
<br>
likely to be messed up because of version mismatches.  But for those  
<br>
that are careful to keep their nodes in sync, there's no reason not  
<br>
to install Open MPI on local disk.
<br>
<p>Brian
<br>
<p><p><pre>
-- 
   Brian Barrett
   Open MPI developer
   <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0953.php">Michael Kluskens: "Re: [OMPI users] Open MPI installed locally"</a>
<li><strong>Previous message:</strong> <a href="0951.php">Rolf Vandevaart: "[OMPI users] Open MPI installed locally"</a>
<li><strong>In reply to:</strong> <a href="0951.php">Rolf Vandevaart: "[OMPI users] Open MPI installed locally"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0953.php">Michael Kluskens: "Re: [OMPI users] Open MPI installed locally"</a>
<li><strong>Reply:</strong> <a href="0953.php">Michael Kluskens: "Re: [OMPI users] Open MPI installed locally"</a>
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
