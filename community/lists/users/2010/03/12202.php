<?
$subject_val = "Re: [OMPI users] Option to use only 7 cores out of 8 on each node";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  2 13:08:28 2010" -->
<!-- isoreceived="20100302180828" -->
<!-- sent="Tue, 02 Mar 2010 10:10:22 -0800" -->
<!-- isosent="20100302181022" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Option to use only 7 cores out of 8 on each node" -->
<!-- id="4B8D548E.1030301_at_sun.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="15F71B097D330B42AA606A4AD8CA9640D0AF2F4409_at_CRATUS.ttu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Option to use only 7 cores out of 8 on each node<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-02 13:10:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12203.php">Addepalli, Srirangam V: "Re: [OMPI users] Option to use only 7 cores out of 8 on each node"</a>
<li><strong>Previous message:</strong> <a href="12201.php">Ralph Castain: "Re: [OMPI users] Option to use only 7 cores out of 8 on each node"</a>
<li><strong>In reply to:</strong> <a href="12200.php">Addepalli, Srirangam V: "[OMPI users] Option to use only 7 cores out of 8 on each node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12204.php">Eugene Loh: "Re: [OMPI users] Option to use only 7 cores out of 8 on each node"</a>
<li><strong>Reply:</strong> <a href="12204.php">Eugene Loh: "Re: [OMPI users] Option to use only 7 cores out of 8 on each node"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Addepalli, Srirangam V wrote:
<br>
<p><span class="quotelev1">&gt;i tried using the following syntax with machinefile
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;mpirun -np 14 -npernode 7 -machinefile machinefile ven_nw.e &lt;coll.dt5
</span><br>
<span class="quotelev1">&gt;
</span><br>
It &quot;works&quot; for me.  I'm not using SGE, though.
<br>
<p>% cat machinefile
<br>
node0
<br>
node0
<br>
node0
<br>
node0
<br>
node0
<br>
node0
<br>
node0
<br>
node1
<br>
node1
<br>
node1
<br>
node1
<br>
node1
<br>
node1
<br>
node1
<br>
% mpirun -tag-output -np 14 -npernode 7 -machinefile machinefile hostname
<br>
[1,0]&lt;stdout&gt;:node0
<br>
[1,1]&lt;stdout&gt;:node0
<br>
[1,2]&lt;stdout&gt;:node0
<br>
[1,3]&lt;stdout&gt;:node0
<br>
[1,4]&lt;stdout&gt;:node0
<br>
[1,5]&lt;stdout&gt;:node0
<br>
[1,6]&lt;stdout&gt;:node0
<br>
[1,7]&lt;stdout&gt;:node1
<br>
[1,8]&lt;stdout&gt;:node1
<br>
[1,9]&lt;stdout&gt;:node1
<br>
[1,10]&lt;stdout&gt;:node1
<br>
[1,11]&lt;stdout&gt;:node1
<br>
[1,12]&lt;stdout&gt;:node1
<br>
[1,13]&lt;stdout&gt;:node1
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12203.php">Addepalli, Srirangam V: "Re: [OMPI users] Option to use only 7 cores out of 8 on each node"</a>
<li><strong>Previous message:</strong> <a href="12201.php">Ralph Castain: "Re: [OMPI users] Option to use only 7 cores out of 8 on each node"</a>
<li><strong>In reply to:</strong> <a href="12200.php">Addepalli, Srirangam V: "[OMPI users] Option to use only 7 cores out of 8 on each node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12204.php">Eugene Loh: "Re: [OMPI users] Option to use only 7 cores out of 8 on each node"</a>
<li><strong>Reply:</strong> <a href="12204.php">Eugene Loh: "Re: [OMPI users] Option to use only 7 cores out of 8 on each node"</a>
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
