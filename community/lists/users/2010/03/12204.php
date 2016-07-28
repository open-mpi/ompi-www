<?
$subject_val = "Re: [OMPI users] Option to use only 7 cores out of 8 on each node";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  2 13:24:27 2010" -->
<!-- isoreceived="20100302182427" -->
<!-- sent="Tue, 02 Mar 2010 10:26:06 -0800" -->
<!-- isosent="20100302182606" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Option to use only 7 cores out of 8 on each node" -->
<!-- id="4B8D583E.2020000_at_sun.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4B8D548E.1030301_at_sun.com" -->
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
<strong>Date:</strong> 2010-03-02 13:26:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12205.php">Reuti: "Re: [OMPI users] Option to use only 7 cores out of 8 on each node"</a>
<li><strong>Previous message:</strong> <a href="12203.php">Addepalli, Srirangam V: "Re: [OMPI users] Option to use only 7 cores out of 8 on each node"</a>
<li><strong>In reply to:</strong> <a href="12202.php">Eugene Loh: "Re: [OMPI users] Option to use only 7 cores out of 8 on each node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12205.php">Reuti: "Re: [OMPI users] Option to use only 7 cores out of 8 on each node"</a>
<li><strong>Reply:</strong> <a href="12205.php">Reuti: "Re: [OMPI users] Option to use only 7 cores out of 8 on each node"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Eugene Loh wrote:
<br>
<p><span class="quotelev1">&gt; Addepalli, Srirangam V wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; i tried using the following syntax with machinefile
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -np 14 -npernode 7 -machinefile machinefile ven_nw.e &lt;coll.dt5
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It &quot;works&quot; for me.  I'm not using SGE, though.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; % cat machinefile
</span><br>
<span class="quotelev1">&gt; % mpirun -tag-output -np 14 -npernode 7 -machinefile machinefile hostname
</span><br>
<p>Incidentally, the key ingredient here is the &quot;-npernode 7&quot; part.  The 
<br>
machine file only needs enough slots.  E.g., you could have had:
<br>
<p>% cat machinefile
<br>
node0 slots=20
<br>
node1 slots=20
<br>
<p>mpirun will see that there are enough slots on each node, but load only 
<br>
7 up per node due to the -npernode switch.
<br>
<p>That said, I don't know what's going wrong in your case -- only that 
<br>
things work as advertised for me.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12205.php">Reuti: "Re: [OMPI users] Option to use only 7 cores out of 8 on each node"</a>
<li><strong>Previous message:</strong> <a href="12203.php">Addepalli, Srirangam V: "Re: [OMPI users] Option to use only 7 cores out of 8 on each node"</a>
<li><strong>In reply to:</strong> <a href="12202.php">Eugene Loh: "Re: [OMPI users] Option to use only 7 cores out of 8 on each node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12205.php">Reuti: "Re: [OMPI users] Option to use only 7 cores out of 8 on each node"</a>
<li><strong>Reply:</strong> <a href="12205.php">Reuti: "Re: [OMPI users] Option to use only 7 cores out of 8 on each node"</a>
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
