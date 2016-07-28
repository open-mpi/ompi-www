<?
$subject_val = "Re: [OMPI users] display-map option in v1.8.8";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 13 09:04:54 2015" -->
<!-- isoreceived="20151013130454" -->
<!-- sent="Tue, 13 Oct 2015 06:04:48 -0700" -->
<!-- isosent="20151013130448" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] display-map option in v1.8.8" -->
<!-- id="4FC692C3-D4C3-491D-A2DF-818C5CAC8D87_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="561BB14E.5000908_at_letai.org.il" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-13 09:04:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27862.php">Diego Avesani: "[OMPI users] MPI_GATHERV error"</a>
<li><strong>Previous message:</strong> <a href="27860.php">Daniel Letai: "[OMPI users] display-map option in v1.8.8"</a>
<li><strong>In reply to:</strong> <a href="27860.php">Daniel Letai: "[OMPI users] display-map option in v1.8.8"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27898.php">Daniel Letai: "Re: [OMPI users] display-map option in v1.8.8"</a>
<li><strong>Reply:</strong> <a href="27898.php">Daniel Letai: "Re: [OMPI users] display-map option in v1.8.8"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; On Oct 12, 2015, at 6:10 AM, Daniel Letai &lt;dani_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; After upgrading to 1.8.8 I can no longer see the map. When looking at the man page for mpirun, display-map no longer exists. Is there a way to show the map in 1.8.8 ?
</span><br>
<p>I don&#226;&#128;&#153;t know why/how it got dropped from the man page, but the display-map option certainly still exists - do &#226;&#128;&#156;mpirun -h&#226;&#128;&#157; to see the full list of options, and you&#226;&#128;&#153;ll see it is there. I&#226;&#128;&#153;ll ensure it gets restored to the man page in the 1.10 series as the 1.8 series is complete.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Another issue - I'd like to map 2 process per node - 1 to each socket.
</span><br>
<span class="quotelev1">&gt; What is the current &quot;correct&quot; syntax? --map-by ppr:2:node doesn't guarantee 1 per Socket. --map-by ppr:1:socket doesn't guarantee 2 per node. I assume it's something obvious, but the documentation is somewhat lacking.
</span><br>
<span class="quotelev1">&gt; I'd like to know the general syntax - even if I have 4 socket nodes I'd still like to map only 2 procs per node.
</span><br>
<p>That&#226;&#128;&#153;s a tough one. I&#226;&#128;&#153;m not sure there is a way to do that right now. Probably something we&#226;&#128;&#153;d have to add. Out of curiosity, if you have 4 sockets and only 2 procs, would you want each proc bound to 2 of the 4 sockets? Or are you expecting them to be bound to only 1 socket (thus leaving 2 sockets idle), or simply leave them unbound?
<br>
<p><span class="quotelev1">&gt; Combining with numa/dist to hca/dist to gpu will be very helpful too.
</span><br>
<p>Definitely no way to do this one today.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/10/27860.php">http://www.open-mpi.org/community/lists/users/2015/10/27860.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27862.php">Diego Avesani: "[OMPI users] MPI_GATHERV error"</a>
<li><strong>Previous message:</strong> <a href="27860.php">Daniel Letai: "[OMPI users] display-map option in v1.8.8"</a>
<li><strong>In reply to:</strong> <a href="27860.php">Daniel Letai: "[OMPI users] display-map option in v1.8.8"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27898.php">Daniel Letai: "Re: [OMPI users] display-map option in v1.8.8"</a>
<li><strong>Reply:</strong> <a href="27898.php">Daniel Letai: "Re: [OMPI users] display-map option in v1.8.8"</a>
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
