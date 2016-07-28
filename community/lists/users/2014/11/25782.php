<?
$subject_val = "Re: [OMPI users] How OMPI picks ethernet interfaces";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 12 18:34:52 2014" -->
<!-- isoreceived="20141112233452" -->
<!-- sent="Wed, 12 Nov 2014 15:34:48 -0800" -->
<!-- isosent="20141112233448" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How OMPI picks ethernet interfaces" -->
<!-- id="2BB708FD-888D-478F-AA1B-C9A0DE7CCAE9_at_open-mpi.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="6EEDB7E6-0AAB-443C-B49E-91B3D99443BD_at_staff.uni-marburg.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] How OMPI picks ethernet interfaces<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-12 18:34:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25783.php">Gilles Gouaillardet: "Re: [OMPI users] OMPI users] How OMPI picks ethernet interfaces"</a>
<li><strong>Previous message:</strong> <a href="25781.php">Reuti: "Re: [OMPI users] How OMPI picks ethernet interfaces"</a>
<li><strong>In reply to:</strong> <a href="25781.php">Reuti: "Re: [OMPI users] How OMPI picks ethernet interfaces"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25800.php">Reuti: "Re: [OMPI users] How OMPI picks ethernet interfaces"</a>
<li><strong>Reply:</strong> <a href="25800.php">Reuti: "Re: [OMPI users] How OMPI picks ethernet interfaces"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; On Nov 12, 2014, at 2:45 PM, Reuti &lt;reuti_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Am 12.11.2014 um 17:27 schrieb Reuti:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Am 11.11.2014 um 02:25 schrieb Ralph Castain:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Another thing you can do is (a) ensure you built with &#151;enable-debug, and then (b) run it with -mca oob_base_verbose 100  (without the tcp_if_include option) so we can watch the connection handshake and see what it is doing. The &#151;hetero-nodes will have not affect here and can be ignored.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Done. It really tries to connect to the outside interface of the headnode. But being there a firewall or not: the nodes have no clue how to reach 137.248.0.0 - they have no gateway to this network at all.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have to revert this. They think that there is a gateway although it isn't. When I remove the entry by hand for the gateway in the routing table it starts up instantly too.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; While I can do this on my own cluster I still have the 30 seconds delay on a cluster where I'm not root, while this can be because of the firewall there. The gateway on this cluster is indeed going to the outside world.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Personally I find this behavior a little bit too aggressive to use all interfaces. If you don't check this carefully beforehand and start a long running application one might even not notice the delay during the startup.
</span><br>
<p>Agreed - do you have any suggestions on how we should choose the order in which to try them? I haven&#146;t been able to come up with anything yet. Jeff has some fancy algo in his usnic BTL that we are going to discuss after SC that I&#146;m hoping will help, but I&#146;d be open to doing something better in the interim for 1.8.4
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- Reuti
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; It tries so independent from the internal or external name of the headnode given in the machinefile - I hit ^C then. I attached the output of Open MPI 1.8.1 for this setup too.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- Reuti
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; &lt;openmpi1.8.3.txt&gt;&lt;openmpi1.8.1.txt&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/11/25777.php">http://www.open-mpi.org/community/lists/users/2014/11/25777.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/11/25781.php">http://www.open-mpi.org/community/lists/users/2014/11/25781.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25783.php">Gilles Gouaillardet: "Re: [OMPI users] OMPI users] How OMPI picks ethernet interfaces"</a>
<li><strong>Previous message:</strong> <a href="25781.php">Reuti: "Re: [OMPI users] How OMPI picks ethernet interfaces"</a>
<li><strong>In reply to:</strong> <a href="25781.php">Reuti: "Re: [OMPI users] How OMPI picks ethernet interfaces"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25800.php">Reuti: "Re: [OMPI users] How OMPI picks ethernet interfaces"</a>
<li><strong>Reply:</strong> <a href="25800.php">Reuti: "Re: [OMPI users] How OMPI picks ethernet interfaces"</a>
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
