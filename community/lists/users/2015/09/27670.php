<?
$subject_val = "Re: [OMPI users] Open MPI 1.10.0: Works on one Sandybridge Node, not on another: tcp_peer_send_blocking";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 24 11:41:28 2015" -->
<!-- isoreceived="20150924154128" -->
<!-- sent="Thu, 24 Sep 2015 08:41:24 -0700" -->
<!-- isosent="20150924154124" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI 1.10.0: Works on one Sandybridge Node, not on another: tcp_peer_send_blocking" -->
<!-- id="98288B20-B383-4FF9-B41E-797CFFB02026_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAFb48S8MY7jpwsskBZ-DaWpTEPRyT7uaKD+YZ0Fdzi9c5Vm8RA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Open MPI 1.10.0: Works on one Sandybridge Node, not on another: tcp_peer_send_blocking<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-24 11:41:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27671.php">Matt Thompson: "Re: [OMPI users] Open MPI 1.10.0: Works on one Sandybridge Node, not on another: tcp_peer_send_blocking"</a>
<li><strong>Previous message:</strong> <a href="27669.php">Matt Thompson: "[OMPI users] Open MPI 1.10.0: Works on one Sandybridge Node, not on another: tcp_peer_send_blocking"</a>
<li><strong>In reply to:</strong> <a href="27669.php">Matt Thompson: "[OMPI users] Open MPI 1.10.0: Works on one Sandybridge Node, not on another: tcp_peer_send_blocking"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27671.php">Matt Thompson: "Re: [OMPI users] Open MPI 1.10.0: Works on one Sandybridge Node, not on another: tcp_peer_send_blocking"</a>
<li><strong>Reply:</strong> <a href="27671.php">Matt Thompson: "Re: [OMPI users] Open MPI 1.10.0: Works on one Sandybridge Node, not on another: tcp_peer_send_blocking"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Starting in the 1.7 series, OMPI by default launches daemons on all nodes in the allocation during startup. This is done so we can &#226;&#128;&#156;probe&#226;&#128;&#157; the topology of the nodes and use that info during the process mapping procedure - e.g., if you want to map-by NUMA regions.
<br>
<p>What is happening here is that some of the nodes in your allocation aren&#226;&#128;&#153;t allowing those daemons to callback to mpirun. Either a firewall is in the way, or something is preventing it.
<br>
<p>If you don&#226;&#128;&#153;t want to launch on those other nodes, you could just add &#226;&#128;&#148;novm to your cmd line, or use the &#226;&#128;&#148;host option to restrict us to your local node. However, I imagine you got the bigger allocation so you could use it :-)
<br>
<p>In which case, you need to remove the obstacle. You might check for firewall, or check to see if multiple NICs are on the non-maia nodes (this can sometimes confuse things, especially if someone put the NICs on the same IP subnet)
<br>
<p>HTH
<br>
Ralph
<br>
<p><p><p><span class="quotelev1">&gt; On Sep 24, 2015, at 8:18 AM, Matt Thompson &lt;fortran_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Open MPI Users,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm hoping someone here can help. I built Open MPI 1.10.0 with PGI 15.7 using this configure string:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  ./configure --disable-vt --with-tm=/PBS --with-verbs --disable-wrapper-rpath \
</span><br>
<span class="quotelev1">&gt;     CC=pgcc CXX=pgCC FC=pgf90 F77=pgf77 CFLAGS='-fpic -m64' \
</span><br>
<span class="quotelev1">&gt;     CXXFLAGS='-fpic -m64' FCFLAGS='-fpic -m64' FFLAGS='-fpic -m64' \
</span><br>
<span class="quotelev1">&gt;     --prefix=/nobackup/gmao_SIteam/MPI/pgi_15.7-openmpi_1.10.0 |&amp; tee configure.pgi15.7.log
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It seemed to pass 'make check'. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm working at pleiades at NAS, and there they have both Sandy Bridge nodes with GPUs (maia) and regular Sandy Bridge compute nodes (here after called Sandy) without. To be extra careful (since PGI compiles to the architecture you build on) I took a Westmere node and built Open MPI there just in case.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So, as I said, all seems to work with a test. I now grab a maia node, maia1, of an allocation of 4 I had:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (102) $ mpicc -tp=px-64 -o helloWorld.x helloWorld.c
</span><br>
<span class="quotelev1">&gt; (103) $ mpirun -np 2 ./helloWorld.x
</span><br>
<span class="quotelev1">&gt; Process 0 of 2 is on maia1 
</span><br>
<span class="quotelev1">&gt; Process 1 of 2 is on maia1 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Good. Now, let's go to a Sandy Bridge (non-GPU) node, r321i7n16, of an allocation of 8 I had:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (49) $ mpicc -tp=px-64 -o helloWorld.x helloWorld.c
</span><br>
<span class="quotelev1">&gt; (50) $ mpirun -np 2 ./helloWorld.x
</span><br>
<span class="quotelev1">&gt; [r323i5n11:13063] [[62995,0],7] tcp_peer_send_blocking: send() to socket 9 failed: Broken pipe (32)
</span><br>
<span class="quotelev1">&gt; [r323i5n6:57417] [[62995,0],2] tcp_peer_send_blocking: send() to socket 9 failed: Broken pipe (32)
</span><br>
<span class="quotelev1">&gt; [r323i5n7:67287] [[62995,0],3] tcp_peer_send_blocking: send() to socket 9 failed: Broken pipe (32)
</span><br>
<span class="quotelev1">&gt; [r323i5n8:57429] [[62995,0],4] tcp_peer_send_blocking: send() to socket 9 failed: Broken pipe (32)
</span><br>
<span class="quotelev1">&gt; [r323i5n10:35329] [[62995,0],6] tcp_peer_send_blocking: send() to socket 9 failed: Broken pipe (32)
</span><br>
<span class="quotelev1">&gt; [r323i5n9:13456] [[62995,0],5] tcp_peer_send_blocking: send() to socket 9 failed: Broken pipe (32)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hmm. Let's try turning off tcp (often my first thought when on an Infiniband system):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (51) $ mpirun --mca btl sm,openib,self -np 2 ./helloWorld.x
</span><br>
<span class="quotelev1">&gt; [r323i5n6:57420] [[62996,0],2] tcp_peer_send_blocking: send() to socket 9 failed: Broken pipe (32)
</span><br>
<span class="quotelev1">&gt; [r323i5n9:13459] [[62996,0],5] tcp_peer_send_blocking: send() to socket 9 failed: Broken pipe (32)
</span><br>
<span class="quotelev1">&gt; [r323i5n8:57432] [[62996,0],4] tcp_peer_send_blocking: send() to socket 9 failed: Broken pipe (32)
</span><br>
<span class="quotelev1">&gt; [r323i5n7:67290] [[62996,0],3] tcp_peer_send_blocking: send() to socket 9 failed: Broken pipe (32)
</span><br>
<span class="quotelev1">&gt; [r323i5n11:13066] [[62996,0],7] tcp_peer_send_blocking: send() to socket 9 failed: Broken pipe (32)
</span><br>
<span class="quotelev1">&gt; [r323i5n10:35332] [[62996,0],6] tcp_peer_send_blocking: send() to socket 9 failed: Broken pipe (32)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Now, the nodes reporting the issue seem to be the &quot;other&quot; nodes on the allocation that are in a different rack:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (52) $ cat $PBS_NODEFILE | uniq
</span><br>
<span class="quotelev1">&gt; r321i7n16
</span><br>
<span class="quotelev1">&gt; r321i7n17
</span><br>
<span class="quotelev1">&gt; r323i5n6
</span><br>
<span class="quotelev1">&gt; r323i5n7
</span><br>
<span class="quotelev1">&gt; r323i5n8
</span><br>
<span class="quotelev1">&gt; r323i5n9
</span><br>
<span class="quotelev1">&gt; r323i5n10
</span><br>
<span class="quotelev1">&gt; r323i5n11
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Maybe that's a clue? I didn't think this would matter if I only ran two processes...and it works on the multi-node maia allocation.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've tried searching the web, but the only place I've seen tcp_peer_send_blocking is in a PDF where they say it's an error that can be seen:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.hpc.mcgill.ca/downloads/checkpointing_workshop/20150326%20-%20McGill%20-%20Checkpointing%20Techniques.pdf">http://www.hpc.mcgill.ca/downloads/checkpointing_workshop/20150326%20-%20McGill%20-%20Checkpointing%20Techniques.pdf</a> &lt;<a href="http://www.hpc.mcgill.ca/downloads/checkpointing_workshop/20150326%20-%20McGill%20-%20Checkpointing%20Techniques.pdf">http://www.hpc.mcgill.ca/downloads/checkpointing_workshop/20150326%20-%20McGill%20-%20Checkpointing%20Techniques.pdf</a>&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any ideas for what this error can mean?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Matt Thompson
</span><br>
<span class="quotelev1">&gt; Man Among Men
</span><br>
<span class="quotelev1">&gt; Fulcrum of History
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/09/27669.php">http://www.open-mpi.org/community/lists/users/2015/09/27669.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27670/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27671.php">Matt Thompson: "Re: [OMPI users] Open MPI 1.10.0: Works on one Sandybridge Node, not on another: tcp_peer_send_blocking"</a>
<li><strong>Previous message:</strong> <a href="27669.php">Matt Thompson: "[OMPI users] Open MPI 1.10.0: Works on one Sandybridge Node, not on another: tcp_peer_send_blocking"</a>
<li><strong>In reply to:</strong> <a href="27669.php">Matt Thompson: "[OMPI users] Open MPI 1.10.0: Works on one Sandybridge Node, not on another: tcp_peer_send_blocking"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27671.php">Matt Thompson: "Re: [OMPI users] Open MPI 1.10.0: Works on one Sandybridge Node, not on another: tcp_peer_send_blocking"</a>
<li><strong>Reply:</strong> <a href="27671.php">Matt Thompson: "Re: [OMPI users] Open MPI 1.10.0: Works on one Sandybridge Node, not on another: tcp_peer_send_blocking"</a>
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
