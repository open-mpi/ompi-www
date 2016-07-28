<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jun  2 11:30:27 2006" -->
<!-- isoreceived="20060602153027" -->
<!-- sent="Fri, 02 Jun 2006 09:30:03 -0600" -->
<!-- isosent="20060602153003" -->
<!-- name="Troy Telford" -->
<!-- email="ttelford_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI and Dual Core (machinefile)" -->
<!-- id="op.taiyodi0ies9li_at_rygel.local" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="op.taixzgrkies9li_at_rygel.local" -->
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
<strong>From:</strong> Troy Telford (<em>ttelford_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-06-02 11:30:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1364.php">Ralph Castain: "Re: [OMPI users] Open MPI and Dual Core (machinefile)"</a>
<li><strong>Previous message:</strong> <a href="1362.php">Troy Telford: "Re: [OMPI users] Open MPI and Dual Core (machinefile)"</a>
<li><strong>In reply to:</strong> <a href="1362.php">Troy Telford: "Re: [OMPI users] Open MPI and Dual Core (machinefile)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1364.php">Ralph Castain: "Re: [OMPI users] Open MPI and Dual Core (machinefile)"</a>
<li><strong>Reply:</strong> <a href="1364.php">Ralph Castain: "Re: [OMPI users] Open MPI and Dual Core (machinefile)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, 02 Jun 2006 09:15:06 -0600, Troy Telford  
<br>
&lt;ttelford_at_[hidden]&gt; wrote:
<br>
<span class="quotelev2">&gt;&gt; Can you confirm that your Linux installation thinks that it has 4
</span><br>
<span class="quotelev2">&gt;&gt; processors and will schedule 4 processes simultaneously?
</span><br>
<p>D'oh.  Still too early in the morning...
<br>
<p>OK, Linux thinks it has two CPUs.  Period.
<br>
<p>For some reason I forgot that 'cpuinfo' simply returns what the CPU  
<br>
reports... so the CPU knows it's dual-core, and reports this.  That  
<br>
doesn't mean Linux has to recognize that there are really 4 CPUs...
<br>
<p>So, problem solved (at least from Open MPI's standpoint...)
<br>
<pre>
-- 
Troy Telford
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1364.php">Ralph Castain: "Re: [OMPI users] Open MPI and Dual Core (machinefile)"</a>
<li><strong>Previous message:</strong> <a href="1362.php">Troy Telford: "Re: [OMPI users] Open MPI and Dual Core (machinefile)"</a>
<li><strong>In reply to:</strong> <a href="1362.php">Troy Telford: "Re: [OMPI users] Open MPI and Dual Core (machinefile)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1364.php">Ralph Castain: "Re: [OMPI users] Open MPI and Dual Core (machinefile)"</a>
<li><strong>Reply:</strong> <a href="1364.php">Ralph Castain: "Re: [OMPI users] Open MPI and Dual Core (machinefile)"</a>
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
