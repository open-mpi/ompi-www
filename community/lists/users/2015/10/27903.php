<?
$subject_val = "Re: [OMPI users] display-map option in v1.8.8";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 21 06:35:49 2015" -->
<!-- isoreceived="20151021103549" -->
<!-- sent="Wed, 21 Oct 2015 13:35:41 +0300" -->
<!-- isosent="20151021103541" -->
<!-- name="Daniel Letai" -->
<!-- email="dani_at_[hidden]" -->
<!-- subject="Re: [OMPI users] display-map option in v1.8.8" -->
<!-- id="56276A7D.3040809_at_letai.org.il" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="44D83A4E-6ED9-4240-831F-213B283087EA_at_open-mpi.org" -->
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
<strong>Date:</strong> 2015-10-21 06:35:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27904.php">Sebastian Rettenberger: "Re: [OMPI users] MPI_Win_lock with MPI_MODE_NOCHECK"</a>
<li><strong>Previous message:</strong> <a href="27902.php">Ralph Castain: "Re: [OMPI users] IMB-MPI1 stuck at MPI_Finalize with OpenMPI 1.10.0"</a>
<li><strong>In reply to:</strong> <a href="27899.php">Ralph Castain: "Re: [OMPI users] display-map option in v1.8.8"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 10/20/2015 04:14 PM, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Oct 20, 2015, at 5:47 AM, Daniel Letai &lt;dani_at_[hidden] 
</span><br>
<span class="quotelev2">&gt;&gt; &lt;mailto:dani_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for the reply,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 10/13/2015 04:04 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Oct 12, 2015, at 6:10 AM, Daniel Letai &lt;dani_at_[hidden] 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &lt;mailto:dani_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; After upgrading to 1.8.8 I can no longer see the map. When looking 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; at the man page for mpirun, display-map no longer exists. Is there 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; a way to show the map in 1.8.8 ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I don&#146;t know why/how it got dropped from the man page, but the 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; display-map option certainly still exists - do &#147;mpirun -h&#148; to see 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the full list of options, and you&#146;ll see it is there. I&#146;ll ensure it 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; gets restored to the man page in the 1.10 series as the 1.8 series 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; is complete.
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for clarifying,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Another issue - I'd like to map 2 process per node - 1 to each socket.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; What is the current &quot;correct&quot; syntax? --map-by ppr:2:node doesn't 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; guarantee 1 per Socket. --map-by ppr:1:socket doesn't guarantee 2 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; per node. I assume it's something obvious, but the documentation is 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; somewhat lacking.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I'd like to know the general syntax - even if I have 4 socket nodes 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I'd still like to map only 2 procs per node.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; That&#146;s a tough one. I&#146;m not sure there is a way to do that right 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; now. Probably something we&#146;d have to add. Out of curiosity, if you 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; have 4 sockets and only 2 procs, would you want each proc bound to 2 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; of the 4 sockets? Or are you expecting them to be bound to only 1 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; socket (thus leaving 2 sockets idle), or simply leave them unbound?
</span><br>
<span class="quotelev2">&gt;&gt; I have 2 pci devices (gpu) per node. I need 1 proc per socket to be 
</span><br>
<span class="quotelev2">&gt;&gt; bound to that socket and &quot;talk&quot; to it's respective gpu, so no matter 
</span><br>
<span class="quotelev2">&gt;&gt; how many sockets I have - I must distribute the procs 2 per node, 
</span><br>
<span class="quotelev2">&gt;&gt; each in it's own socket (actually, each in it's own numa) and  be bound.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So I expect them to be &quot;bound to only 1 socket (thus leaving 2 
</span><br>
<span class="quotelev2">&gt;&gt; sockets idle)&#148;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Are the gpu&#146;s always near the same sockets for every node? If so, you 
</span><br>
<span class="quotelev1">&gt; might be able to use the cpu-set option to restrict us to those 
</span><br>
<span class="quotelev1">&gt; sockets, and then just &quot;&#151;map-by ppr:2:node &#151;bind-to socket&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  -cpu-set|--cpu-set &lt;arg0&gt;
</span><br>
<span class="quotelev1">&gt;                          Comma-separated list of ranges specifying logical
</span><br>
<span class="quotelev1">&gt;                          cpus allocated to this job [default: none]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>I Believe this should solve the issue. So the cmdline should be 
<br>
something like:
<br>
mpirun --map-by ppr:2:node --bind-to socket --cpu-set 0,2
<br>
BTW --cpu-set also absent from man page.
<br>
<p><span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I might run other jobs on the idle sockets (depending on mem 
</span><br>
<span class="quotelev2">&gt;&gt; utilization) but that's not an immediate concern at this time.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Combining with numa/dist to hca/dist to gpu will be very helpful too.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Definitely no way to do this one today.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this post: 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/10/27860.php">http://www.open-mpi.org/community/lists/users/2015/10/27860.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/10/27861.php">http://www.open-mpi.org/community/lists/users/2015/10/27861.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: 
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/10/27898.php">http://www.open-mpi.org/community/lists/users/2015/10/27898.php</a>
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/10/27899.php">http://www.open-mpi.org/community/lists/users/2015/10/27899.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27903/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27904.php">Sebastian Rettenberger: "Re: [OMPI users] MPI_Win_lock with MPI_MODE_NOCHECK"</a>
<li><strong>Previous message:</strong> <a href="27902.php">Ralph Castain: "Re: [OMPI users] IMB-MPI1 stuck at MPI_Finalize with OpenMPI 1.10.0"</a>
<li><strong>In reply to:</strong> <a href="27899.php">Ralph Castain: "Re: [OMPI users] display-map option in v1.8.8"</a>
<!-- nextthread="start" -->
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
