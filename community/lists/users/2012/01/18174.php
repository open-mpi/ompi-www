<?
$subject_val = "Re: [OMPI users] localhost only";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 16 19:27:04 2012" -->
<!-- isoreceived="20120117002704" -->
<!-- sent="Mon, 16 Jan 2012 17:26:56 -0700" -->
<!-- isosent="20120117002656" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc.openmpi_at_[hidden]" -->
<!-- subject="Re: [OMPI users] localhost only" -->
<!-- id="7D441C6F-1307-4EE8-84E9-433A271217C7_at_gmail.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="F5516929-6B1D-4CE2-A07A-D77CF6685880_at_ldeo.columbia.edu" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc.openmpi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-16 19:26:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18175.php">Ralph Castain: "Re: [OMPI users] Possible bug in finalize, OpenMPI v1.5, head revision"</a>
<li><strong>Previous message:</strong> <a href="18173.php">Gustavo Correa: "Re: [OMPI users] localhost only"</a>
<li><strong>In reply to:</strong> <a href="18173.php">Gustavo Correa: "Re: [OMPI users] localhost only"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18180.php">TERRY DONTJE: "Re: [OMPI users] localhost only"</a>
<li><strong>Reply:</strong> <a href="18180.php">TERRY DONTJE: "Re: [OMPI users] localhost only"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The problem is that OMPI is looking for a tcp port for your computer. With no network enabled, you don't have one, and so mpirun aborts. I don't know of any way around this at the moment.
<br>
<p>Sent from my iPad
<br>
<p>On Jan 16, 2012, at 4:53 PM, Gustavo Correa &lt;gus_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Have you tried to specify the hosts with something like this?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun -np 2 -host localhost ./my_program
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; See 'man mpirun' for more details.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I hope it helps,
</span><br>
<span class="quotelev1">&gt; Gus Correa
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jan 16, 2012, at 6:34 PM, MM wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; hi,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; when my wireless adapter is down on my laptop, only localhost is configured.
</span><br>
<span class="quotelev2">&gt;&gt; In this case, when I mpirun 2 binaries on my laptop, mpirun fails with this error:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; It looks like orte_init failed for some reason; your parallel process i
</span><br>
<span class="quotelev2">&gt;&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev2">&gt;&gt; fail during orte_init; some of which are due to configuration or
</span><br>
<span class="quotelev2">&gt;&gt; environment problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev2">&gt;&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev2">&gt;&gt; Open MPI developer):
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;  orte_rml_base_select failed
</span><br>
<span class="quotelev2">&gt;&gt;  --&gt; Returned value Error (-1) instead of ORTE_SUCCESS
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; when I turn on the wireless adapter back on, the mpirun works fine
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Is there a way to make mpirun realize all my binaries run on the same box, and therefore don't need any other interface but localhost?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; PS: this is ipconfig when the wireless adapter is off
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ipconfig /all
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Windows IP Configuration
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;        Host Name . . . . . . . . . . . . :
</span><br>
<span class="quotelev2">&gt;&gt;        Primary Dns Suffix  . . . . . . . :
</span><br>
<span class="quotelev2">&gt;&gt;        Node Type . . . . . . . . . . . . : Hybrid
</span><br>
<span class="quotelev2">&gt;&gt;        IP Routing Enabled. . . . . . . . : No
</span><br>
<span class="quotelev2">&gt;&gt;        WINS Proxy Enabled. . . . . . . . : No
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Ethernet adapter Wireless Network Connection:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;        Media State . . . . . . . . . . . : Media disconnected
</span><br>
<span class="quotelev2">&gt;&gt;        Description . . . . . . . . . . . : Intel(R) WiFi Link 5100 AGN
</span><br>
<span class="quotelev2">&gt;&gt;        Physical Address. . . . . . . . . :
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; rds,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; MM
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
<li><strong>Next message:</strong> <a href="18175.php">Ralph Castain: "Re: [OMPI users] Possible bug in finalize, OpenMPI v1.5, head revision"</a>
<li><strong>Previous message:</strong> <a href="18173.php">Gustavo Correa: "Re: [OMPI users] localhost only"</a>
<li><strong>In reply to:</strong> <a href="18173.php">Gustavo Correa: "Re: [OMPI users] localhost only"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18180.php">TERRY DONTJE: "Re: [OMPI users] localhost only"</a>
<li><strong>Reply:</strong> <a href="18180.php">TERRY DONTJE: "Re: [OMPI users] localhost only"</a>
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
