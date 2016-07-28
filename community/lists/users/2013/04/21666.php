<?
$subject_val = "Re: [OMPI users] FCA collectives disabled by default";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr  3 10:32:03 2013" -->
<!-- isoreceived="20130403143203" -->
<!-- sent="Wed, 3 Apr 2013 07:31:56 -0700" -->
<!-- isosent="20130403143156" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] FCA collectives disabled by default" -->
<!-- id="0137BBC5-37F8-4B20-936A-1ADC32FE6D03_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="F63B1B93-40E6-441A-AF59-64E3420E894D_at_umich.edu" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-04-03 10:31:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21667.php">Gus Correa: "Re: [OMPI users] Segmentation fault with HPCC benchmark"</a>
<li><strong>Previous message:</strong> <a href="21665.php">Ralph Castain: "Re: [OMPI users] Segmentation fault with HPCC benchmark"</a>
<li><strong>In reply to:</strong> <a href="21663.php">Brock Palen: "[OMPI users] FCA collectives disabled by default"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21668.php">Brock Palen: "Re: [OMPI users] FCA collectives disabled by default"</a>
<li><strong>Reply:</strong> <a href="21668.php">Brock Palen: "Re: [OMPI users] FCA collectives disabled by default"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Looking at the source code, it is because those other collectives aren't implemented yet :-)
<br>
<p><p>On Apr 2, 2013, at 12:07 PM, Brock Palen &lt;brockp_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; We are starting to play with FCA on our Mellonox based IB fabric.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I noticed from ompi_info that FCA support for a lot of collectives are disabled by default:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any idea why only barrier/bcast/reduce  are on by default and all the more complex values are disabled?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                MCA coll: parameter &quot;coll_fca_enable_barrier&quot; (current value: &lt;1&gt;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                MCA coll: parameter &quot;coll_fca_enable_bcast&quot; (current value: &lt;1&gt;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                MCA coll: parameter &quot;coll_fca_enable_reduce&quot; (current value: &lt;1&gt;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                MCA coll: parameter &quot;coll_fca_enable_reduce_scatter&quot; (current value: &lt;0&gt;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                MCA coll: parameter &quot;coll_fca_enable_allreduce&quot; (current value: &lt;1&gt;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                MCA coll: parameter &quot;coll_fca_enable_allgather&quot; (current value: &lt;1&gt;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                MCA coll: parameter &quot;coll_fca_enable_allgatherv&quot; (current value: &lt;1&gt;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                MCA coll: parameter &quot;coll_fca_enable_gather&quot; (current value: &lt;0&gt;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                MCA coll: parameter &quot;coll_fca_enable_gatherv&quot; (current value: &lt;0&gt;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                MCA coll: parameter &quot;coll_fca_enable_alltoall&quot; (current value: &lt;0&gt;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                MCA coll: parameter &quot;coll_fca_enable_alltoallv&quot; (current value: &lt;0&gt;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                MCA coll: parameter &quot;coll_fca_enable_alltoallw&quot; (current value: &lt;0&gt;, data source: default value)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brock Palen
</span><br>
<span class="quotelev1">&gt; www.umich.edu/~brockp
</span><br>
<span class="quotelev1">&gt; CAEN Advanced Computing
</span><br>
<span class="quotelev1">&gt; brockp_at_[hidden]
</span><br>
<span class="quotelev1">&gt; (734)936-1985
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="21667.php">Gus Correa: "Re: [OMPI users] Segmentation fault with HPCC benchmark"</a>
<li><strong>Previous message:</strong> <a href="21665.php">Ralph Castain: "Re: [OMPI users] Segmentation fault with HPCC benchmark"</a>
<li><strong>In reply to:</strong> <a href="21663.php">Brock Palen: "[OMPI users] FCA collectives disabled by default"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21668.php">Brock Palen: "Re: [OMPI users] FCA collectives disabled by default"</a>
<li><strong>Reply:</strong> <a href="21668.php">Brock Palen: "Re: [OMPI users] FCA collectives disabled by default"</a>
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
