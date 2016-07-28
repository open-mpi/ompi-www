<?
$subject_val = "Re: [OMPI users] display-map option in v1.8.8";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 20 08:47:17 2015" -->
<!-- isoreceived="20151020124717" -->
<!-- sent="Tue, 20 Oct 2015 15:47:10 +0300" -->
<!-- isosent="20151020124710" -->
<!-- name="Daniel Letai" -->
<!-- email="dani_at_[hidden]" -->
<!-- subject="Re: [OMPI users] display-map option in v1.8.8" -->
<!-- id="562637CE.80306_at_letai.org.il" -->
<!-- charset="utf-8" -->
<!-- inreplyto="4FC692C3-D4C3-491D-A2DF-818C5CAC8D87_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] display-map option in v1.8.8<br>
<strong>From:</strong> Daniel Letai (<em>dani_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-20 08:47:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27899.php">Ralph Castain: "Re: [OMPI users] display-map option in v1.8.8"</a>
<li><strong>Previous message:</strong> <a href="27897.php">John Marshall: "Re: [OMPI users] openib issue with 1.6.5 but not later releases"</a>
<li><strong>In reply to:</strong> <a href="27861.php">Ralph Castain: "Re: [OMPI users] display-map option in v1.8.8"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27899.php">Ralph Castain: "Re: [OMPI users] display-map option in v1.8.8"</a>
<li><strong>Reply:</strong> <a href="27899.php">Ralph Castain: "Re: [OMPI users] display-map option in v1.8.8"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for the reply,
<br>
<p>On 10/13/2015 04:04 PM, Ralph Castain wrote:
<br>
<span class="quotelev2">&gt;&gt; On Oct 12, 2015, at 6:10 AM, Daniel Letai &lt;dani_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt; After upgrading to 1.8.8 I can no longer see the map. When looking at the man page for mpirun, display-map no longer exists. Is there a way to show the map in 1.8.8 ?
</span><br>
<span class="quotelev1">&gt; I don&#226;&#128;&#153;t know why/how it got dropped from the man page, but the display-map option certainly still exists - do &#226;&#128;&#156;mpirun -h&#226;&#128;&#157; to see the full list of options, and you&#226;&#128;&#153;ll see it is there. I&#226;&#128;&#153;ll ensure it gets restored to the man page in the 1.10 series as the 1.8 series is complete.
</span><br>
Thanks for clarifying,
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Another issue - I'd like to map 2 process per node - 1 to each socket.
</span><br>
<span class="quotelev2">&gt;&gt; What is the current &quot;correct&quot; syntax? --map-by ppr:2:node doesn't guarantee 1 per Socket. --map-by ppr:1:socket doesn't guarantee 2 per node. I assume it's something obvious, but the documentation is somewhat lacking.
</span><br>
<span class="quotelev2">&gt;&gt; I'd like to know the general syntax - even if I have 4 socket nodes I'd still like to map only 2 procs per node.
</span><br>
<span class="quotelev1">&gt; That&#226;&#128;&#153;s a tough one. I&#226;&#128;&#153;m not sure there is a way to do that right now. Probably something we&#226;&#128;&#153;d have to add. Out of curiosity, if you have 4 sockets and only 2 procs, would you want each proc bound to 2 of the 4 sockets? Or are you expecting them to be bound to only 1 socket (thus leaving 2 sockets idle), or simply leave them unbound?
</span><br>
I have 2 pci devices (gpu) per node. I need 1 proc per socket to be 
<br>
bound to that socket and &quot;talk&quot; to it's respective gpu, so no matter how 
<br>
many sockets I have - I must distribute the procs 2 per node, each in 
<br>
it's own socket (actually, each in it's own numa) and  be bound.
<br>
<p>So I expect them to be &quot;bound to only 1 socket (thus leaving 2 sockets 
<br>
idle)&quot;.
<br>
<p>I might run other jobs on the idle sockets (depending on mem 
<br>
utilization) but that's not an immediate concern at this time.
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Combining with numa/dist to hca/dist to gpu will be very helpful too.
</span><br>
<span class="quotelev1">&gt; Definitely no way to do this one today.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
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
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/10/27860.php">http://www.open-mpi.org/community/lists/users/2015/10/27860.php</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/10/27861.php">http://www.open-mpi.org/community/lists/users/2015/10/27861.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27899.php">Ralph Castain: "Re: [OMPI users] display-map option in v1.8.8"</a>
<li><strong>Previous message:</strong> <a href="27897.php">John Marshall: "Re: [OMPI users] openib issue with 1.6.5 but not later releases"</a>
<li><strong>In reply to:</strong> <a href="27861.php">Ralph Castain: "Re: [OMPI users] display-map option in v1.8.8"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27899.php">Ralph Castain: "Re: [OMPI users] display-map option in v1.8.8"</a>
<li><strong>Reply:</strong> <a href="27899.php">Ralph Castain: "Re: [OMPI users] display-map option in v1.8.8"</a>
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
