<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Feb 28 12:18:51 2006" -->
<!-- isoreceived="20060228171851" -->
<!-- sent="Tue, 28 Feb 2006 18:17:41 +0100" -->
<!-- isosent="20060228171741" -->
<!-- name="Emanuel Ziegler" -->
<!-- email="eziegler_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Memory allocation problem with OpenIB" -->
<!-- id="1141147061.9676.7.camel_at_localhost.localdomain" -->
<!-- inreplyto="44032857.7010802_at_lanl.gov" -->
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
<strong>From:</strong> Emanuel Ziegler (<em>eziegler_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-02-28 12:17:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0725.php">Brian Barrett: "Re: [OMPI users] Memory allocation problem with OpenIB"</a>
<li><strong>Previous message:</strong> <a href="0723.php">John Robinson: "Re: [OMPI users] cannot mak a simple ping-pong"</a>
<li><strong>In reply to:</strong> <a href="0718.php">Tim S. Woodall: "Re: [OMPI users] Memory allocation problem with OpenIB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0725.php">Brian Barrett: "Re: [OMPI users] Memory allocation problem with OpenIB"</a>
<li><strong>Reply:</strong> <a href="0725.php">Brian Barrett: "Re: [OMPI users] Memory allocation problem with OpenIB"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Am Montag, den 27.02.2006, 09:27 -0700 schrieb Tim S. Woodall:
<br>
<span class="quotelev1">&gt; Hello Emanuel,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You might want to try an actual hard limit, say 8GB, rather than
</span><br>
<span class="quotelev1">&gt; unlimited. I've run into issues w/ unlimited in the past.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Tim
</span><br>
<p>Oh, stupid me! On Debian /etc/pam.d/rsh does not contain
<br>
&nbsp;&nbsp;&nbsp;&nbsp;session required pam_limits.so
<br>
After adding this line it worked. I was sure that the limits were set
<br>
since
<br>
&nbsp;&nbsp;&nbsp;&nbsp;mpirun -np 4 bash -c ulimit -l
<br>
always returned unlimited, but
<br>
&nbsp;&nbsp;&nbsp;&nbsp;rsh node02 ulimit -l
<br>
just showed 32 which is indeed way too small. The additional bash call
<br>
seems to change the limits and fooled me this way.
<br>
<p>Just another question: Is is possible to use a 32 Bit machine as head
<br>
node (without being involved into the computations)? When I try to run a
<br>
program using mpirun from the 32 Bit machine I get
<br>
&nbsp;&nbsp;&nbsp;&nbsp;[headnode:32560] [0,0,0] mca_oob_tcp_recv_handler: \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;invalid message type: 0
<br>
and the debug output shows 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;[node01:01330] [0,0,1]-[0,0,0] mca_oob_tcp_peer_recv_blocking: \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;recv() failed with errno=104
<br>
which means &quot;Connection reset by peer&quot;. In between the 64 Bit machines
<br>
it works fine now.
<br>
<p>Thanks,
<br>
&nbsp;&nbsp;Emanuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0725.php">Brian Barrett: "Re: [OMPI users] Memory allocation problem with OpenIB"</a>
<li><strong>Previous message:</strong> <a href="0723.php">John Robinson: "Re: [OMPI users] cannot mak a simple ping-pong"</a>
<li><strong>In reply to:</strong> <a href="0718.php">Tim S. Woodall: "Re: [OMPI users] Memory allocation problem with OpenIB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0725.php">Brian Barrett: "Re: [OMPI users] Memory allocation problem with OpenIB"</a>
<li><strong>Reply:</strong> <a href="0725.php">Brian Barrett: "Re: [OMPI users] Memory allocation problem with OpenIB"</a>
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
