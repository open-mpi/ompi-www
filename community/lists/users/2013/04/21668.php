<?
$subject_val = "Re: [OMPI users] FCA collectives disabled by default";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr  3 13:10:42 2013" -->
<!-- isoreceived="20130403171042" -->
<!-- sent="Wed, 3 Apr 2013 13:10:36 -0400" -->
<!-- isosent="20130403171036" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="Re: [OMPI users] FCA collectives disabled by default" -->
<!-- id="5F72C5E2-C8EA-44C6-A23B-D207A2E2F72B_at_umich.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="0137BBC5-37F8-4B20-936A-1ADC32FE6D03_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] FCA collectives disabled by default<br>
<strong>From:</strong> Brock Palen (<em>brockp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-04-03 13:10:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21669.php">Reza Bakhshayeshi: "Re: [OMPI users] Segmentation fault with HPCC benchmark"</a>
<li><strong>Previous message:</strong> <a href="21667.php">Gus Correa: "Re: [OMPI users] Segmentation fault with HPCC benchmark"</a>
<li><strong>In reply to:</strong> <a href="21666.php">Ralph Castain: "Re: [OMPI users] FCA collectives disabled by default"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
That would do it. 
<br>
<p>Thanks!
<br>
<p>Now to make even the normal ones work....
<br>
<p>Brock Palen
<br>
www.umich.edu/~brockp
<br>
CAEN Advanced Computing
<br>
brockp_at_[hidden]
<br>
(734)936-1985
<br>
<p><p><p>On Apr 3, 2013, at 10:31 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Looking at the source code, it is because those other collectives aren't implemented yet :-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Apr 2, 2013, at 12:07 PM, Brock Palen &lt;brockp_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; We are starting to play with FCA on our Mellonox based IB fabric.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I noticed from ompi_info that FCA support for a lot of collectives are disabled by default:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Any idea why only barrier/bcast/reduce  are on by default and all the more complex values are disabled?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;               MCA coll: parameter &quot;coll_fca_enable_barrier&quot; (current value: &lt;1&gt;, data source: default value)
</span><br>
<span class="quotelev2">&gt;&gt;               MCA coll: parameter &quot;coll_fca_enable_bcast&quot; (current value: &lt;1&gt;, data source: default value)
</span><br>
<span class="quotelev2">&gt;&gt;               MCA coll: parameter &quot;coll_fca_enable_reduce&quot; (current value: &lt;1&gt;, data source: default value)
</span><br>
<span class="quotelev2">&gt;&gt;               MCA coll: parameter &quot;coll_fca_enable_reduce_scatter&quot; (current value: &lt;0&gt;, data source: default value)
</span><br>
<span class="quotelev2">&gt;&gt;               MCA coll: parameter &quot;coll_fca_enable_allreduce&quot; (current value: &lt;1&gt;, data source: default value)
</span><br>
<span class="quotelev2">&gt;&gt;               MCA coll: parameter &quot;coll_fca_enable_allgather&quot; (current value: &lt;1&gt;, data source: default value)
</span><br>
<span class="quotelev2">&gt;&gt;               MCA coll: parameter &quot;coll_fca_enable_allgatherv&quot; (current value: &lt;1&gt;, data source: default value)
</span><br>
<span class="quotelev2">&gt;&gt;               MCA coll: parameter &quot;coll_fca_enable_gather&quot; (current value: &lt;0&gt;, data source: default value)
</span><br>
<span class="quotelev2">&gt;&gt;               MCA coll: parameter &quot;coll_fca_enable_gatherv&quot; (current value: &lt;0&gt;, data source: default value)
</span><br>
<span class="quotelev2">&gt;&gt;               MCA coll: parameter &quot;coll_fca_enable_alltoall&quot; (current value: &lt;0&gt;, data source: default value)
</span><br>
<span class="quotelev2">&gt;&gt;               MCA coll: parameter &quot;coll_fca_enable_alltoallv&quot; (current value: &lt;0&gt;, data source: default value)
</span><br>
<span class="quotelev2">&gt;&gt;               MCA coll: parameter &quot;coll_fca_enable_alltoallw&quot; (current value: &lt;0&gt;, data source: default value)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Brock Palen
</span><br>
<span class="quotelev2">&gt;&gt; www.umich.edu/~brockp
</span><br>
<span class="quotelev2">&gt;&gt; CAEN Advanced Computing
</span><br>
<span class="quotelev2">&gt;&gt; brockp_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; (734)936-1985
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="21669.php">Reza Bakhshayeshi: "Re: [OMPI users] Segmentation fault with HPCC benchmark"</a>
<li><strong>Previous message:</strong> <a href="21667.php">Gus Correa: "Re: [OMPI users] Segmentation fault with HPCC benchmark"</a>
<li><strong>In reply to:</strong> <a href="21666.php">Ralph Castain: "Re: [OMPI users] FCA collectives disabled by default"</a>
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
