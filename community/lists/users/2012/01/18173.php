<?
$subject_val = "Re: [OMPI users] localhost only";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 16 18:54:27 2012" -->
<!-- isoreceived="20120116235427" -->
<!-- sent="Mon, 16 Jan 2012 18:53:59 -0500" -->
<!-- isosent="20120116235359" -->
<!-- name="Gustavo Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] localhost only" -->
<!-- id="F5516929-6B1D-4CE2-A07A-D77CF6685880_at_ldeo.columbia.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="000001ccd4a7$751fff80$5f5ffe80$_at_com" -->
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
<strong>Subject:</strong> Re: [OMPI users] localhost only<br>
<strong>From:</strong> Gustavo Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-16 18:53:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18174.php">Ralph Castain: "Re: [OMPI users] localhost only"</a>
<li><strong>Previous message:</strong> <a href="18172.php">MM: "[OMPI users] localhost only"</a>
<li><strong>In reply to:</strong> <a href="18172.php">MM: "[OMPI users] localhost only"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18174.php">Ralph Castain: "Re: [OMPI users] localhost only"</a>
<li><strong>Reply:</strong> <a href="18174.php">Ralph Castain: "Re: [OMPI users] localhost only"</a>
<li><strong>Reply:</strong> <a href="18182.php">MM: "Re: [OMPI users] localhost only"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Have you tried to specify the hosts with something like this?
<br>
<p>mpirun -np 2 -host localhost ./my_program
<br>
<p>See 'man mpirun' for more details.
<br>
<p>I hope it helps,
<br>
Gus Correa
<br>
<p>On Jan 16, 2012, at 6:34 PM, MM wrote:
<br>
<p><span class="quotelev1">&gt; hi,
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; when my wireless adapter is down on my laptop, only localhost is configured.
</span><br>
<span class="quotelev1">&gt; In this case, when I mpirun 2 binaries on my laptop, mpirun fails with this error:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; It looks like orte_init failed for some reason; your parallel process i
</span><br>
<span class="quotelev1">&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during orte_init; some of which are due to configuration or
</span><br>
<span class="quotelev1">&gt; environment problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev1">&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev1">&gt; Open MPI developer):
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;   orte_rml_base_select failed
</span><br>
<span class="quotelev1">&gt;   --&gt; Returned value Error (-1) instead of ORTE_SUCCESS
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; when I turn on the wireless adapter back on, the mpirun works fine
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Is there a way to make mpirun realize all my binaries run on the same box, and therefore don't need any other interface but localhost?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; PS: this is ipconfig when the wireless adapter is off
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev2">&gt; &gt;ipconfig /all
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Windows IP Configuration
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;         Host Name . . . . . . . . . . . . :
</span><br>
<span class="quotelev1">&gt;         Primary Dns Suffix  . . . . . . . :
</span><br>
<span class="quotelev1">&gt;         Node Type . . . . . . . . . . . . : Hybrid
</span><br>
<span class="quotelev1">&gt;         IP Routing Enabled. . . . . . . . : No
</span><br>
<span class="quotelev1">&gt;         WINS Proxy Enabled. . . . . . . . : No
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Ethernet adapter Wireless Network Connection:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;         Media State . . . . . . . . . . . : Media disconnected
</span><br>
<span class="quotelev1">&gt;         Description . . . . . . . . . . . : Intel(R) WiFi Link 5100 AGN
</span><br>
<span class="quotelev1">&gt;         Physical Address. . . . . . . . . :
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; rds,
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; MM
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
<li><strong>Next message:</strong> <a href="18174.php">Ralph Castain: "Re: [OMPI users] localhost only"</a>
<li><strong>Previous message:</strong> <a href="18172.php">MM: "[OMPI users] localhost only"</a>
<li><strong>In reply to:</strong> <a href="18172.php">MM: "[OMPI users] localhost only"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18174.php">Ralph Castain: "Re: [OMPI users] localhost only"</a>
<li><strong>Reply:</strong> <a href="18174.php">Ralph Castain: "Re: [OMPI users] localhost only"</a>
<li><strong>Reply:</strong> <a href="18182.php">MM: "Re: [OMPI users] localhost only"</a>
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
