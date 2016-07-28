<?
$subject_val = "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 18 13:31:08 2014" -->
<!-- isoreceived="20140818173108" -->
<!-- sent="Mon, 18 Aug 2014 13:31:15 -0400" -->
<!-- isosent="20140818173115" -->
<!-- name="Maxime Boissonneault" -->
<!-- email="maxime.boissonneault_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1" -->
<!-- id="53F23863.6020900_at_calculquebec.ca" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="F8B9211E-FF21-4929-8B7F-5D4478C4F2E7_at_open-mpi.org" -->
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
<strong>From:</strong> Maxime Boissonneault (<em>maxime.boissonneault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-18 13:31:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25059.php">Ralph Castain: "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1"</a>
<li><strong>Previous message:</strong> <a href="25057.php">Ralph Castain: "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1"</a>
<li><strong>In reply to:</strong> <a href="25057.php">Ralph Castain: "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25059.php">Ralph Castain: "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1"</a>
<li><strong>Reply:</strong> <a href="25059.php">Ralph Castain: "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Indeed, that makes sense now.
<br>
<p>Why isn't OpenMPI attempting to connect with the local loop for same 
<br>
node ? This used to work with 1.6.5.
<br>
<p>Maxime
<br>
<p>Le 2014-08-18 13:11, Ralph Castain a &#233;crit :
<br>
<span class="quotelev1">&gt; Yep, that pinpointed the problem:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [helios-login1:28558] [[63019,1],0] tcp:send_handler CONNECTING
</span><br>
<span class="quotelev1">&gt; [helios-login1:28558] [[63019,1],0]:tcp:complete_connect called for peer [[63019,0],0] on socket 11
</span><br>
<span class="quotelev1">&gt; [helios-login1:28558] [[63019,1],0]-[[63019,0],0] tcp_peer_complete_connect: connection failed: Connection refused (111)
</span><br>
<span class="quotelev1">&gt; [helios-login1:28558] [[63019,1],0] tcp_peer_close for [[63019,0],0] sd 11 state CONNECTING
</span><br>
<span class="quotelev1">&gt; [helios-login1:28558] [[63019,1],0] tcp:lost connection called for peer [[63019,0],0]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The apps are trying to connect back to mpirun using the following addresses:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; tcp://10.10.1.3,132.219.137.36,10.12.1.3:34237
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The initial attempt is here
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [helios-login1:28558] [[63019,1],0] orte_tcp_peer_try_connect: attempting to connect to proc [[63019,0],0] on 10.10.1.3:34237 - 0 retries
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I know there is a failover bug in the 1.8 series, and so if that connection got rejected the proc would abort. Should we be using a different network? If so, telling us via the oob_tcp_if_include param would be the solution.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 18, 2014, at 10:04 AM, Maxime Boissonneault &lt;maxime.boissonneault_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Here it is.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Maxime
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Le 2014-08-18 12:59, Ralph Castain a &#233;crit :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ah...now that showed the problem. To pinpoint it better, please add
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -mca oob_base_verbose 10
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and I think we'll have it
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Aug 18, 2014, at 9:54 AM, Maxime Boissonneault &lt;maxime.boissonneault_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; This is all one one node indeed.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Attached is the output of
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpirun -np 4 --mca plm_base_verbose 10 -mca odls_base_verbose 5 -mca state_base_verbose 5 -mca errmgr_base_verbose 5  ring_c |&amp; tee output_ringc_verbose.txt
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Maxime
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Le 2014-08-18 12:48, Ralph Castain a &#233;crit :
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; This is all on one node, yes?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Try adding the following:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -mca odls_base_verbose 5 -mca state_base_verbose 5 -mca errmgr_base_verbose 5
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Lot of garbage, but should tell us what is going on.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Aug 18, 2014, at 9:36 AM, Maxime Boissonneault &lt;maxime.boissonneault_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Here it is
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Le 2014-08-18 12:30, Joshua Ladd a &#233;crit :
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; mpirun -np 4 --mca plm_base_verbose 10
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [mboisson_at_helios-login1 examples]$ mpirun -np 4 --mca plm_base_verbose 10 ring_c
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [helios-login1:27853] mca: base: components_register: registering plm components
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [helios-login1:27853] mca: base: components_register: found loaded component isolated
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [helios-login1:27853] mca: base: components_register: component isolated has no register or open function
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [helios-login1:27853] mca: base: components_register: found loaded component rsh
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [helios-login1:27853] mca: base: components_register: component rsh register function successful
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [helios-login1:27853] mca: base: components_register: found loaded component tm
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [helios-login1:27853] mca: base: components_register: component tm register function successful
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [helios-login1:27853] mca: base: components_open: opening plm components
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [helios-login1:27853] mca: base: components_open: found loaded component isolated
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [helios-login1:27853] mca: base: components_open: component isolated open function successful
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [helios-login1:27853] mca: base: components_open: found loaded component rsh
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [helios-login1:27853] mca: base: components_open: component rsh open function successful
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [helios-login1:27853] mca: base: components_open: found loaded component tm
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [helios-login1:27853] mca: base: components_open: component tm open function successful
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [helios-login1:27853] mca:base:select: Auto-selecting plm components
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [helios-login1:27853] mca:base:select:(  plm) Querying component [isolated]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [helios-login1:27853] mca:base:select:(  plm) Query of component [isolated] set priority to 0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [helios-login1:27853] mca:base:select:(  plm) Querying component [rsh]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [helios-login1:27853] mca:base:select:(  plm) Query of component [rsh] set priority to 10
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [helios-login1:27853] mca:base:select:(  plm) Querying component [tm]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [helios-login1:27853] mca:base:select:(  plm) Skipping component [tm]. Query failed to return a module
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [helios-login1:27853] mca:base:select:(  plm) Selected component [rsh]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [helios-login1:27853] mca: base: close: component isolated closed
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [helios-login1:27853] mca: base: close: unloading component isolated
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [helios-login1:27853] mca: base: close: component tm closed
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [helios-login1:27853] mca: base: close: unloading component tm
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [helios-login1:27853] mca: base: close: component rsh closed
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [helios-login1:27853] mca: base: close: unloading component rsh
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [mboisson_at_helios-login1 examples]$ echo $?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 65
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Maxime
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/08/25052.php">http://www.open-mpi.org/community/lists/users/2014/08/25052.php</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/08/25053.php">http://www.open-mpi.org/community/lists/users/2014/08/25053.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ---------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Maxime Boissonneault
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Analyste de calcul - Calcul Qu&#233;bec, Universit&#233; Laval
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Ph. D. en physique
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &lt;output_ringc_verbose.txt.gz&gt;_______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/08/25054.php">http://www.open-mpi.org/community/lists/users/2014/08/25054.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/08/25055.php">http://www.open-mpi.org/community/lists/users/2014/08/25055.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; ---------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; Maxime Boissonneault
</span><br>
<span class="quotelev2">&gt;&gt; Analyste de calcul - Calcul Qu&#233;bec, Universit&#233; Laval
</span><br>
<span class="quotelev2">&gt;&gt; Ph. D. en physique
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;output_ringc_verbose2.txt.gz&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/08/25056.php">http://www.open-mpi.org/community/lists/users/2014/08/25056.php</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/08/25057.php">http://www.open-mpi.org/community/lists/users/2014/08/25057.php</a>
</span><br>
<p><p><pre>
-- 
---------------------------------
Maxime Boissonneault
Analyste de calcul - Calcul Qu&#233;bec, Universit&#233; Laval
Ph. D. en physique
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25059.php">Ralph Castain: "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1"</a>
<li><strong>Previous message:</strong> <a href="25057.php">Ralph Castain: "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1"</a>
<li><strong>In reply to:</strong> <a href="25057.php">Ralph Castain: "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25059.php">Ralph Castain: "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1"</a>
<li><strong>Reply:</strong> <a href="25059.php">Ralph Castain: "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1"</a>
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
