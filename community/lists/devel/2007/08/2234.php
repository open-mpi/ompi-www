<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Aug 27 15:21:35 2007" -->
<!-- isoreceived="20070827192135" -->
<!-- sent="Mon, 27 Aug 2007 15:21:22 -0400" -->
<!-- isosent="20070827192122" -->
<!-- name="Richard Graham" -->
<!-- email="rlgraham_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Maximum Shared Memory Segment - OK to increase?" -->
<!-- id="C2F89C72.A6B9%rlgraham_at_ornl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="46D321AF.7010400_at_sun.com" -->
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
<strong>From:</strong> Richard Graham (<em>rlgraham_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-27 15:21:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2235.php">Ralf Wildenhues: "Re: [OMPI devel] Trunk issue?"</a>
<li><strong>Previous message:</strong> <a href="2233.php">Rolf vandeVaart: "[OMPI devel] Maximum Shared Memory Segment - OK to increase?"</a>
<li><strong>In reply to:</strong> <a href="2233.php">Rolf vandeVaart: "[OMPI devel] Maximum Shared Memory Segment - OK to increase?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2240.php">Markus Daene: "Re: [OMPI devel] Maximum Shared Memory Segment - OK to increase?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Rolf,
<br>
&nbsp;&nbsp;Would it be better to put this parameter in the system configuration file,
<br>
rather than change the compile time option ?
<br>
<p>Rich
<br>
<p><p><p>On 8/27/07 3:10 PM, &quot;Rolf vandeVaart&quot; &lt;Rolf.Vandevaart_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; We are running into a problem when running on one of our larger SMPs
</span><br>
<span class="quotelev1">&gt; using the latest Open MPI v1.2 branch.  We are trying to run a job
</span><br>
<span class="quotelev1">&gt; with np=128 within a single node.  We are seeing the following error:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &quot;SM failed to send message due to shortage of shared memory.&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We then increased the allowable maximum size of the shared segment to
</span><br>
<span class="quotelev1">&gt; 2Gigabytes-1 which is the maximum allowed on 32-bit application.  We
</span><br>
<span class="quotelev1">&gt; used the mca parameter to increase it as shown here.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -mca mpool_sm_max_size 2147483647
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This allowed the program to run to completion.  Therefore, we would
</span><br>
<span class="quotelev1">&gt; like to increase the default maximum from 512Mbytes to 2G-1 Gigabytes.
</span><br>
<span class="quotelev1">&gt; Does anyone have an objection to this change?  Soon we are going to
</span><br>
<span class="quotelev1">&gt; have larger CPU counts and would like to increase the odds that things
</span><br>
<span class="quotelev1">&gt; work &quot;out of the box&quot; on these large SMPs.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On a side note, I did a quick comparison of the shared memory needs of
</span><br>
<span class="quotelev1">&gt; the old Sun ClusterTools to Open MPI and came up with this table.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;                                          Open MPI
</span><br>
<span class="quotelev1">&gt; np      Sun ClusterTools 6        current   suggested
</span><br>
<span class="quotelev1">&gt; -----------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;   2         20M                      128M        128M
</span><br>
<span class="quotelev1">&gt;   4         20M                      128M        128M
</span><br>
<span class="quotelev1">&gt;   8         22M                      256M        256M
</span><br>
<span class="quotelev1">&gt;  16         27M                      512M        512M
</span><br>
<span class="quotelev1">&gt;  32         48M                      512M          1G
</span><br>
<span class="quotelev1">&gt;  64        133M                      512M        2G-1
</span><br>
<span class="quotelev1">&gt; 128        476M                      512M        2G-1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2235.php">Ralf Wildenhues: "Re: [OMPI devel] Trunk issue?"</a>
<li><strong>Previous message:</strong> <a href="2233.php">Rolf vandeVaart: "[OMPI devel] Maximum Shared Memory Segment - OK to increase?"</a>
<li><strong>In reply to:</strong> <a href="2233.php">Rolf vandeVaart: "[OMPI devel] Maximum Shared Memory Segment - OK to increase?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2240.php">Markus Daene: "Re: [OMPI devel] Maximum Shared Memory Segment - OK to increase?"</a>
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
