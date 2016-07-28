<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Feb 13 18:45:05 2007" -->
<!-- isoreceived="20070213234505" -->
<!-- sent="Tue, 13 Feb 2007 16:44:57 -0700" -->
<!-- isosent="20070213234457" -->
<!-- name="Troy Telford" -->
<!-- email="ttelford.groups_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI and PBS Pro 8" -->
<!-- id="op.tnpn87knzidtg1_at_rygel.lnxi.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="C1F75F1B.7A52%rhc_at_lanl.gov" -->
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
<strong>From:</strong> Troy Telford (<em>ttelford.groups_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-02-13 18:44:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2689.php">Lydia Heck: "[OMPI users] SEGV in ompi_coll_tuned_reduce_generic (1.2b4r13488)"</a>
<li><strong>Previous message:</strong> <a href="2687.php">Steven A. DuChene: "[OMPI users] where do the openmpi profile.d scripts get created?"</a>
<li><strong>In reply to:</strong> <a href="2685.php">Ralph H Castain: "Re: [OMPI users] Open MPI and PBS Pro 8"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, 13 Feb 2007 12:27:07 -0700, Ralph H Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Oh, I should have made something clear - I believe those command line
</span><br>
<span class="quotelev1">&gt; options aren't available in the 1.1 series. You'll have to upgrade to 1.2
</span><br>
<span class="quotelev1">&gt; (available in beta at the moment).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Actually, that isn't the complete story. Open MPI will automatically  
</span><br>
<span class="quotelev2">&gt;&gt; run in
</span><br>
<span class="quotelev2">&gt;&gt; several ways:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1. one proc in each available slot on every node in your allocation:  
</span><br>
<span class="quotelev2">&gt;&gt; just
</span><br>
<span class="quotelev2">&gt;&gt; don't include -np on your command line.  You can rank them by slot  
</span><br>
<span class="quotelev2">&gt;&gt; (--byslot
</span><br>
<span class="quotelev2">&gt;&gt; or leave out) or by node (--bynode).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2. one proc on each node in your allocation: use --pernode on your  
</span><br>
<span class="quotelev2">&gt;&gt; command
</span><br>
<span class="quotelev2">&gt;&gt; line. You can limit the number of nodes used by combining --pernode  
</span><br>
<span class="quotelev2">&gt;&gt; with -np
</span><br>
<span class="quotelev2">&gt;&gt; &lt;foo&gt; - we will launch &lt;foo&gt; procs, one per node
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 3. a specified number of procs on every node: use --npernode &lt;n&gt;.  
</span><br>
<span class="quotelev2">&gt;&gt; Again, you
</span><br>
<span class="quotelev2">&gt;&gt; can limit the number of procs launched by combining it with -np and can  
</span><br>
<span class="quotelev2">&gt;&gt; rank
</span><br>
<span class="quotelev2">&gt;&gt; by slot or node
</span><br>
<p>This is good to know; for some reason it seemed logical that the batch  
<br>
scheduler should know how many processes per node, and TM should be able  
<br>
to get the information.  But that's making assumptions...
<br>
<p>Thanks!
<br>
<pre>
-- 
Troy Telford
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2689.php">Lydia Heck: "[OMPI users] SEGV in ompi_coll_tuned_reduce_generic (1.2b4r13488)"</a>
<li><strong>Previous message:</strong> <a href="2687.php">Steven A. DuChene: "[OMPI users] where do the openmpi profile.d scripts get created?"</a>
<li><strong>In reply to:</strong> <a href="2685.php">Ralph H Castain: "Re: [OMPI users] Open MPI and PBS Pro 8"</a>
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
