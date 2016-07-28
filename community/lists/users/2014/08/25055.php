<?
$subject_val = "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 18 13:00:12 2014" -->
<!-- isoreceived="20140818170012" -->
<!-- sent="Mon, 18 Aug 2014 09:59:57 -0700" -->
<!-- isosent="20140818165957" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1" -->
<!-- id="E4F27AC1-A9FD-4500-A377-B4F3AFD6BDA4_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="53F22FA9.5030504_at_calculquebec.ca" -->
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
<strong>Subject:</strong> Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-18 12:59:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25056.php">Maxime Boissonneault: "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1"</a>
<li><strong>Previous message:</strong> <a href="25054.php">Maxime Boissonneault: "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1"</a>
<li><strong>In reply to:</strong> <a href="25054.php">Maxime Boissonneault: "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25056.php">Maxime Boissonneault: "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1"</a>
<li><strong>Reply:</strong> <a href="25056.php">Maxime Boissonneault: "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ah...now that showed the problem. To pinpoint it better, please add
<br>
<p>-mca oob_base_verbose 10
<br>
<p>and I think we'll have it
<br>
<p>On Aug 18, 2014, at 9:54 AM, Maxime Boissonneault &lt;maxime.boissonneault_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; This is all one one node indeed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Attached is the output of
</span><br>
<span class="quotelev1">&gt; mpirun -np 4 --mca plm_base_verbose 10 -mca odls_base_verbose 5 -mca state_base_verbose 5 -mca errmgr_base_verbose 5  ring_c |&amp; tee output_ringc_verbose.txt
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Maxime
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Le 2014-08-18 12:48, Ralph Castain a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; This is all on one node, yes?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Try adding the following:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -mca odls_base_verbose 5 -mca state_base_verbose 5 -mca errmgr_base_verbose 5
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Lot of garbage, but should tell us what is going on.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Aug 18, 2014, at 9:36 AM, Maxime Boissonneault &lt;maxime.boissonneault_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Here it is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Le 2014-08-18 12:30, Joshua Ladd a &#233;crit :
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpirun -np 4 --mca plm_base_verbose 10
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [mboisson_at_helios-login1 examples]$ mpirun -np 4 --mca plm_base_verbose 10 ring_c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [helios-login1:27853] mca: base: components_register: registering plm components
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [helios-login1:27853] mca: base: components_register: found loaded component isolated
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [helios-login1:27853] mca: base: components_register: component isolated has no register or open function
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [helios-login1:27853] mca: base: components_register: found loaded component rsh
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [helios-login1:27853] mca: base: components_register: component rsh register function successful
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [helios-login1:27853] mca: base: components_register: found loaded component tm
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [helios-login1:27853] mca: base: components_register: component tm register function successful
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [helios-login1:27853] mca: base: components_open: opening plm components
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [helios-login1:27853] mca: base: components_open: found loaded component isolated
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [helios-login1:27853] mca: base: components_open: component isolated open function successful
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [helios-login1:27853] mca: base: components_open: found loaded component rsh
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [helios-login1:27853] mca: base: components_open: component rsh open function successful
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [helios-login1:27853] mca: base: components_open: found loaded component tm
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [helios-login1:27853] mca: base: components_open: component tm open function successful
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [helios-login1:27853] mca:base:select: Auto-selecting plm components
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [helios-login1:27853] mca:base:select:(  plm) Querying component [isolated]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [helios-login1:27853] mca:base:select:(  plm) Query of component [isolated] set priority to 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [helios-login1:27853] mca:base:select:(  plm) Querying component [rsh]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [helios-login1:27853] mca:base:select:(  plm) Query of component [rsh] set priority to 10
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [helios-login1:27853] mca:base:select:(  plm) Querying component [tm]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [helios-login1:27853] mca:base:select:(  plm) Skipping component [tm]. Query failed to return a module
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [helios-login1:27853] mca:base:select:(  plm) Selected component [rsh]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [helios-login1:27853] mca: base: close: component isolated closed
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [helios-login1:27853] mca: base: close: unloading component isolated
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [helios-login1:27853] mca: base: close: component tm closed
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [helios-login1:27853] mca: base: close: unloading component tm
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [helios-login1:27853] mca: base: close: component rsh closed
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [helios-login1:27853] mca: base: close: unloading component rsh
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [mboisson_at_helios-login1 examples]$ echo $?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 65
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Maxime
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/08/25052.php">http://www.open-mpi.org/community/lists/users/2014/08/25052.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/08/25053.php">http://www.open-mpi.org/community/lists/users/2014/08/25053.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; ---------------------------------
</span><br>
<span class="quotelev1">&gt; Maxime Boissonneault
</span><br>
<span class="quotelev1">&gt; Analyste de calcul - Calcul Qu&#233;bec, Universit&#233; Laval
</span><br>
<span class="quotelev1">&gt; Ph. D. en physique
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;output_ringc_verbose.txt.gz&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/08/25054.php">http://www.open-mpi.org/community/lists/users/2014/08/25054.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25056.php">Maxime Boissonneault: "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1"</a>
<li><strong>Previous message:</strong> <a href="25054.php">Maxime Boissonneault: "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1"</a>
<li><strong>In reply to:</strong> <a href="25054.php">Maxime Boissonneault: "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25056.php">Maxime Boissonneault: "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1"</a>
<li><strong>Reply:</strong> <a href="25056.php">Maxime Boissonneault: "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1"</a>
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
