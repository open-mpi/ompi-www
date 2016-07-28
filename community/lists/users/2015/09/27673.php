<?
$subject_val = "Re: [OMPI users] Open MPI 1.10.0: Works on one Sandybridge Node, not on another: tcp_peer_send_blocking";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 24 12:26:56 2015" -->
<!-- isoreceived="20150924162656" -->
<!-- sent="Thu, 24 Sep 2015 12:26:25 -0400" -->
<!-- isosent="20150924162625" -->
<!-- name="Matt Thompson" -->
<!-- email="fortran_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI 1.10.0: Works on one Sandybridge Node, not on another: tcp_peer_send_blocking" -->
<!-- id="CAFb48S_x7TGL9+aqQC27mN==7_Ho=AwkeTP9SV5NsWoEfqJ2aw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="F7DB4A00-86EC-485B-92C6-940956048725_at_open-mpi.org" -->
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
<strong>From:</strong> Matt Thompson (<em>fortran_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-24 12:26:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27674.php">Ralph Castain: "Re: [OMPI users] Open MPI 1.10.0: Works on one Sandybridge Node, not on another: tcp_peer_send_blocking"</a>
<li><strong>Previous message:</strong> <a href="27672.php">Ralph Castain: "Re: [OMPI users] Open MPI 1.10.0: Works on one Sandybridge Node, not on another: tcp_peer_send_blocking"</a>
<li><strong>In reply to:</strong> <a href="27672.php">Ralph Castain: "Re: [OMPI users] Open MPI 1.10.0: Works on one Sandybridge Node, not on another: tcp_peer_send_blocking"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27674.php">Ralph Castain: "Re: [OMPI users] Open MPI 1.10.0: Works on one Sandybridge Node, not on another: tcp_peer_send_blocking"</a>
<li><strong>Reply:</strong> <a href="27674.php">Ralph Castain: "Re: [OMPI users] Open MPI 1.10.0: Works on one Sandybridge Node, not on another: tcp_peer_send_blocking"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, Sep 24, 2015 at 12:10 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Ah, sorry - wrong param. It&#226;&#128;&#153;s the out-of-band that is having the problem.
</span><br>
<span class="quotelev1">&gt; Try adding &#226;&#128;&#148;mca oob_tcp_if_include &lt;foo&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Ooh. Okay. Look at this:
<br>
<p>(13) $ mpirun --mca oob_tcp_if_include ib0 -np 2 ./helloWorld.x
<br>
Process 1 of 2 is on r509i2n17
<br>
Process 0 of 2 is on r509i2n17
<br>
<p>So that is nice. Now the spin up if I have 8 or so nodes is rather...slow.
<br>
But at this point I'll take working over efficient. Quick startup can come
<br>
later.
<br>
<p>Matt
<br>
<p><p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 24, 2015, at 8:56 AM, Matt Thompson &lt;fortran_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I believe these nodes might have both an Ethernet and Infiniband port
</span><br>
<span class="quotelev1">&gt; where the Ethernet port is not the one to use. Is there a way to tell Open
</span><br>
<span class="quotelev1">&gt; MPI to ignore any ethernet devices it sees? I've tried:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --mca btl sm,openib,self
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and (based on the advice of the much more intelligent support at NAS):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --mca btl openib,self --mca btl_openib_if_include mlx4_0,mlx4_1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But neither worked.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Matt
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, Sep 24, 2015 at 11:41 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Starting in the 1.7 series, OMPI by default launches daemons on all nodes
</span><br>
<span class="quotelev2">&gt;&gt; in the allocation during startup. This is done so we can &#226;&#128;&#156;probe&#226;&#128;&#157; the
</span><br>
<span class="quotelev2">&gt;&gt; topology of the nodes and use that info during the process mapping
</span><br>
<span class="quotelev2">&gt;&gt; procedure - e.g., if you want to map-by NUMA regions.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; What is happening here is that some of the nodes in your allocation
</span><br>
<span class="quotelev2">&gt;&gt; aren&#226;&#128;&#153;t allowing those daemons to callback to mpirun. Either a firewall is
</span><br>
<span class="quotelev2">&gt;&gt; in the way, or something is preventing it.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If you don&#226;&#128;&#153;t want to launch on those other nodes, you could just add
</span><br>
<span class="quotelev2">&gt;&gt; &#226;&#128;&#148;novm to your cmd line, or use the &#226;&#128;&#148;host option to restrict us to your
</span><br>
<span class="quotelev2">&gt;&gt; local node. However, I imagine you got the bigger allocation so you could
</span><br>
<span class="quotelev2">&gt;&gt; use it :-)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In which case, you need to remove the obstacle. You might check for
</span><br>
<span class="quotelev2">&gt;&gt; firewall, or check to see if multiple NICs are on the non-maia nodes (this
</span><br>
<span class="quotelev2">&gt;&gt; can sometimes confuse things, especially if someone put the NICs on the
</span><br>
<span class="quotelev2">&gt;&gt; same IP subnet)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; HTH
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Sep 24, 2015, at 8:18 AM, Matt Thompson &lt;fortran_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Open MPI Users,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm hoping someone here can help. I built Open MPI 1.10.0 with PGI 15.7
</span><br>
<span class="quotelev2">&gt;&gt; using this configure string:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  ./configure --disable-vt --with-tm=/PBS --with-verbs
</span><br>
<span class="quotelev2">&gt;&gt; --disable-wrapper-rpath \
</span><br>
<span class="quotelev2">&gt;&gt;     CC=pgcc CXX=pgCC FC=pgf90 F77=pgf77 CFLAGS='-fpic -m64' \
</span><br>
<span class="quotelev2">&gt;&gt;     CXXFLAGS='-fpic -m64' FCFLAGS='-fpic -m64' FFLAGS='-fpic -m64' \
</span><br>
<span class="quotelev2">&gt;&gt;     --prefix=/nobackup/gmao_SIteam/MPI/pgi_15.7-openmpi_1.10.0 |&amp; tee
</span><br>
<span class="quotelev2">&gt;&gt; configure.pgi15.7.log
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It seemed to pass 'make check'.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm working at pleiades at NAS, and there they have both Sandy Bridge
</span><br>
<span class="quotelev2">&gt;&gt; nodes with GPUs (maia) and regular Sandy Bridge compute nodes (here after
</span><br>
<span class="quotelev2">&gt;&gt; called Sandy) without. To be extra careful (since PGI compiles to the
</span><br>
<span class="quotelev2">&gt;&gt; architecture you build on) I took a Westmere node and built Open MPI there
</span><br>
<span class="quotelev2">&gt;&gt; just in case.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So, as I said, all seems to work with a test. I now grab a maia node,
</span><br>
<span class="quotelev2">&gt;&gt; maia1, of an allocation of 4 I had:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; (102) $ mpicc -tp=px-64 -o helloWorld.x helloWorld.c
</span><br>
<span class="quotelev2">&gt;&gt; (103) $ mpirun -np 2 ./helloWorld.x
</span><br>
<span class="quotelev2">&gt;&gt; Process 0 of 2 is on maia1
</span><br>
<span class="quotelev2">&gt;&gt; Process 1 of 2 is on maia1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Good. Now, let's go to a Sandy Bridge (non-GPU) node, r321i7n16, of an
</span><br>
<span class="quotelev2">&gt;&gt; allocation of 8 I had:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; (49) $ mpicc -tp=px-64 -o helloWorld.x helloWorld.c
</span><br>
<span class="quotelev2">&gt;&gt; (50) $ mpirun -np 2 ./helloWorld.x
</span><br>
<span class="quotelev2">&gt;&gt; [r323i5n11:13063] [[62995,0],7] tcp_peer_send_blocking: send() to socket
</span><br>
<span class="quotelev2">&gt;&gt; 9 failed: Broken pipe (32)
</span><br>
<span class="quotelev2">&gt;&gt; [r323i5n6:57417] [[62995,0],2] tcp_peer_send_blocking: send() to socket 9
</span><br>
<span class="quotelev2">&gt;&gt; failed: Broken pipe (32)
</span><br>
<span class="quotelev2">&gt;&gt; [r323i5n7:67287] [[62995,0],3] tcp_peer_send_blocking: send() to socket 9
</span><br>
<span class="quotelev2">&gt;&gt; failed: Broken pipe (32)
</span><br>
<span class="quotelev2">&gt;&gt; [r323i5n8:57429] [[62995,0],4] tcp_peer_send_blocking: send() to socket 9
</span><br>
<span class="quotelev2">&gt;&gt; failed: Broken pipe (32)
</span><br>
<span class="quotelev2">&gt;&gt; [r323i5n10:35329] [[62995,0],6] tcp_peer_send_blocking: send() to socket
</span><br>
<span class="quotelev2">&gt;&gt; 9 failed: Broken pipe (32)
</span><br>
<span class="quotelev2">&gt;&gt; [r323i5n9:13456] [[62995,0],5] tcp_peer_send_blocking: send() to socket 9
</span><br>
<span class="quotelev2">&gt;&gt; failed: Broken pipe (32)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hmm. Let's try turning off tcp (often my first thought when on an
</span><br>
<span class="quotelev2">&gt;&gt; Infiniband system):
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; (51) $ mpirun --mca btl sm,openib,self -np 2 ./helloWorld.x
</span><br>
<span class="quotelev2">&gt;&gt; [r323i5n6:57420] [[62996,0],2] tcp_peer_send_blocking: send() to socket 9
</span><br>
<span class="quotelev2">&gt;&gt; failed: Broken pipe (32)
</span><br>
<span class="quotelev2">&gt;&gt; [r323i5n9:13459] [[62996,0],5] tcp_peer_send_blocking: send() to socket 9
</span><br>
<span class="quotelev2">&gt;&gt; failed: Broken pipe (32)
</span><br>
<span class="quotelev2">&gt;&gt; [r323i5n8:57432] [[62996,0],4] tcp_peer_send_blocking: send() to socket 9
</span><br>
<span class="quotelev2">&gt;&gt; failed: Broken pipe (32)
</span><br>
<span class="quotelev2">&gt;&gt; [r323i5n7:67290] [[62996,0],3] tcp_peer_send_blocking: send() to socket 9
</span><br>
<span class="quotelev2">&gt;&gt; failed: Broken pipe (32)
</span><br>
<span class="quotelev2">&gt;&gt; [r323i5n11:13066] [[62996,0],7] tcp_peer_send_blocking: send() to socket
</span><br>
<span class="quotelev2">&gt;&gt; 9 failed: Broken pipe (32)
</span><br>
<span class="quotelev2">&gt;&gt; [r323i5n10:35332] [[62996,0],6] tcp_peer_send_blocking: send() to socket
</span><br>
<span class="quotelev2">&gt;&gt; 9 failed: Broken pipe (32)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Now, the nodes reporting the issue seem to be the &quot;other&quot; nodes on the
</span><br>
<span class="quotelev2">&gt;&gt; allocation that are in a different rack:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; (52) $ cat $PBS_NODEFILE | uniq
</span><br>
<span class="quotelev2">&gt;&gt; r321i7n16
</span><br>
<span class="quotelev2">&gt;&gt; r321i7n17
</span><br>
<span class="quotelev2">&gt;&gt; r323i5n6
</span><br>
<span class="quotelev2">&gt;&gt; r323i5n7
</span><br>
<span class="quotelev2">&gt;&gt; r323i5n8
</span><br>
<span class="quotelev2">&gt;&gt; r323i5n9
</span><br>
<span class="quotelev2">&gt;&gt; r323i5n10
</span><br>
<span class="quotelev2">&gt;&gt; r323i5n11
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Maybe that's a clue? I didn't think this would matter if I only ran two
</span><br>
<span class="quotelev2">&gt;&gt; processes...and it works on the multi-node maia allocation.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I've tried searching the web, but the only place I've seen
</span><br>
<span class="quotelev2">&gt;&gt; tcp_peer_send_blocking is in a PDF where they say it's an error that can be
</span><br>
<span class="quotelev2">&gt;&gt; seen:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.hpc.mcgill.ca/downloads/checkpointing_workshop/20150326%20-%20McGill%20-%20Checkpointing%20Techniques.pdf">http://www.hpc.mcgill.ca/downloads/checkpointing_workshop/20150326%20-%20McGill%20-%20Checkpointing%20Techniques.pdf</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Any ideas for what this error can mean?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Matt Thompson
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Man Among Men
</span><br>
<span class="quotelev2">&gt;&gt; Fulcrum of History
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
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/09/27669.php">http://www.open-mpi.org/community/lists/users/2015/09/27669.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/09/27670.php">http://www.open-mpi.org/community/lists/users/2015/09/27670.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Matt Thompson
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Man Among Men
</span><br>
<span class="quotelev1">&gt; Fulcrum of History
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/09/27671.php">http://www.open-mpi.org/community/lists/users/2015/09/27671.php</a>
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/09/27672.php">http://www.open-mpi.org/community/lists/users/2015/09/27672.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Matt Thompson
Man Among Men
Fulcrum of History
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27673/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27674.php">Ralph Castain: "Re: [OMPI users] Open MPI 1.10.0: Works on one Sandybridge Node, not on another: tcp_peer_send_blocking"</a>
<li><strong>Previous message:</strong> <a href="27672.php">Ralph Castain: "Re: [OMPI users] Open MPI 1.10.0: Works on one Sandybridge Node, not on another: tcp_peer_send_blocking"</a>
<li><strong>In reply to:</strong> <a href="27672.php">Ralph Castain: "Re: [OMPI users] Open MPI 1.10.0: Works on one Sandybridge Node, not on another: tcp_peer_send_blocking"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27674.php">Ralph Castain: "Re: [OMPI users] Open MPI 1.10.0: Works on one Sandybridge Node, not on another: tcp_peer_send_blocking"</a>
<li><strong>Reply:</strong> <a href="27674.php">Ralph Castain: "Re: [OMPI users] Open MPI 1.10.0: Works on one Sandybridge Node, not on another: tcp_peer_send_blocking"</a>
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
