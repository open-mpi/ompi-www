<?
$subject_val = "Re: [OMPI users] How OMPI picks ethernet interfaces";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 12 17:45:57 2014" -->
<!-- isoreceived="20141112224557" -->
<!-- sent="Wed, 12 Nov 2014 23:45:43 +0100" -->
<!-- isosent="20141112224543" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How OMPI picks ethernet interfaces" -->
<!-- id="6EEDB7E6-0AAB-443C-B49E-91B3D99443BD_at_staff.uni-marburg.de" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="FA3C7359-9541-4763-B5AB-DF22440FE41D_at_staff.uni-marburg.de" -->
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
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-12 17:45:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25782.php">Ralph Castain: "Re: [OMPI users] How OMPI picks ethernet interfaces"</a>
<li><strong>Previous message:</strong> <a href="25780.php">Emmanuel Thom&#195;&#169;: "Re: [OMPI users] mmaped memory and openib btl."</a>
<li><strong>In reply to:</strong> <a href="25777.php">Reuti: "Re: [OMPI users] How OMPI picks ethernet interfaces"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25782.php">Ralph Castain: "Re: [OMPI users] How OMPI picks ethernet interfaces"</a>
<li><strong>Reply:</strong> <a href="25782.php">Ralph Castain: "Re: [OMPI users] How OMPI picks ethernet interfaces"</a>
<li><strong>Reply:</strong> <a href="25784.php">Gus Correa: "Re: [OMPI users] How OMPI picks ethernet interfaces"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Am 12.11.2014 um 17:27 schrieb Reuti:
<br>
<p><span class="quotelev1">&gt; Am 11.11.2014 um 02:25 schrieb Ralph Castain:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Another thing you can do is (a) ensure you built with &#151;enable-debug, and then (b) run it with -mca oob_base_verbose 100  (without the tcp_if_include option) so we can watch the connection handshake and see what it is doing. The &#151;hetero-nodes will have not affect here and can be ignored.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Done. It really tries to connect to the outside interface of the headnode. But being there a firewall or not: the nodes have no clue how to reach 137.248.0.0 - they have no gateway to this network at all.
</span><br>
<p>I have to revert this. They think that there is a gateway although it isn't. When I remove the entry by hand for the gateway in the routing table it starts up instantly too.
<br>
<p>While I can do this on my own cluster I still have the 30 seconds delay on a cluster where I'm not root, while this can be because of the firewall there. The gateway on this cluster is indeed going to the outside world.
<br>
<p>Personally I find this behavior a little bit too aggressive to use all interfaces. If you don't check this carefully beforehand and start a long running application one might even not notice the delay during the startup.
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev1">&gt; It tries so independent from the internal or external name of the headnode given in the machinefile - I hit ^C then. I attached the output of Open MPI 1.8.1 for this setup too.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- Reuti
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;openmpi1.8.3.txt&gt;&lt;openmpi1.8.1.txt&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/11/25777.php">http://www.open-mpi.org/community/lists/users/2014/11/25777.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25782.php">Ralph Castain: "Re: [OMPI users] How OMPI picks ethernet interfaces"</a>
<li><strong>Previous message:</strong> <a href="25780.php">Emmanuel Thom&#195;&#169;: "Re: [OMPI users] mmaped memory and openib btl."</a>
<li><strong>In reply to:</strong> <a href="25777.php">Reuti: "Re: [OMPI users] How OMPI picks ethernet interfaces"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25782.php">Ralph Castain: "Re: [OMPI users] How OMPI picks ethernet interfaces"</a>
<li><strong>Reply:</strong> <a href="25782.php">Ralph Castain: "Re: [OMPI users] How OMPI picks ethernet interfaces"</a>
<li><strong>Reply:</strong> <a href="25784.php">Gus Correa: "Re: [OMPI users] How OMPI picks ethernet interfaces"</a>
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
