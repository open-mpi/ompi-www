<?
$subject_val = "Re: [OMPI users] Openmpi 1.10.1 fails with SIGXFSZ on file limit &lt;=	131072";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov 20 06:39:45 2015" -->
<!-- isoreceived="20151120113945" -->
<!-- sent="Fri, 20 Nov 2015 11:39:40 +0000" -->
<!-- isosent="20151120113940" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Openmpi 1.10.1 fails with SIGXFSZ on file limit &amp;lt;=	131072" -->
<!-- id="8FD2FE71-9C4B-43E7-B68C-1241857B204C_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="DUB123-W31ACD8A8CBD907B9B911B8B11B0_at_phx.gbl" -->
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
<strong>Subject:</strong> Re: [OMPI users] Openmpi 1.10.1 fails with SIGXFSZ on file limit &lt;=	131072<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-11-20 06:39:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28080.php">Gilles Gouaillardet: "Re: [OMPI users] Openmpi 1.10.1 fails with SIGXFSZ on file limit &lt;= 131072"</a>
<li><strong>Previous message:</strong> <a href="28078.php">Gilles Gouaillardet: "Re: [OMPI users] Ubuntu and MPI"</a>
<li><strong>In reply to:</strong> <a href="28070.php">Saurabh T: "Re: [OMPI users] Openmpi 1.10.1 fails with SIGXFSZ on file limit &lt;= 131072"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28080.php">Gilles Gouaillardet: "Re: [OMPI users] Openmpi 1.10.1 fails with SIGXFSZ on file limit &lt;= 131072"</a>
<li><strong>Reply:</strong> <a href="28080.php">Gilles Gouaillardet: "Re: [OMPI users] Openmpi 1.10.1 fails with SIGXFSZ on file limit &lt;= 131072"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
For what it's worth, that's open MPI creating a chunk of shared memory for use with on-server communication. It shows up as a &quot;file&quot;, but it's really shared memory.
<br>
<p>You can disable sm and/or Vader, but your on-server message passing performance will be significantly lower.
<br>
<p>Is there a reason you have a file size limit?
<br>
<p>Sent from my phone. No type good.
<br>
<p>On Nov 19, 2015, at 4:32 PM, Saurabh T &lt;saurabh_at_[hidden]&lt;mailto:saurabh_at_[hidden]&gt;&gt; wrote:
<br>
<p>I apologize, I have the wrong lines from strace for the initial file there (of course). The file with fd = 11 which causes the problem is called shared_mem_pool.[host] and fruncate(11, 134217736) is called on it. (This is exactly 1024 times the ulimit of 131072 which makes sense as the ulimit is in 1K blocks).
<br>
<p><p>________________________________
<br>
From: saurabh_at_[hidden]&lt;mailto:saurabh_at_[hidden]&gt;
<br>
To: users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<br>
Subject: RE: Openmpi 1.10.1 fails with SIGXFSZ on file limit &lt;= 131072
<br>
Date: Thu, 19 Nov 2015 17:08:22 -0500
<br>
<p><p><span class="quotelev1">&gt; Could you please provide a little more info regarding the environment you
</span><br>
<span class="quotelev1">&gt; are running under (which resource mgr or not, etc), how many nodes you had
</span><br>
<span class="quotelev1">&gt; in the allocation, etc?
</span><br>
<p><span class="quotelev1">&gt; There is no reason why something should behave that way. So it would help
</span><br>
<span class="quotelev1">&gt; if we could understand the setup.
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<p>To answer Ralph's above question on the other thread, all nodes are  on the same machine orterun was run on. It's a redhat 7 64-bit gcc 4.8 install of openmpi 1.10.1. The only atypical thing is that
<br>
btl_tcp_if_exclude = virbr0
<br>
has been added to openmpi-mca-params.conf based on some failures I was seeing before.
<br>
(And now of course I've added btl = ^sm as well to fix this issue, see my other response).
<br>
<p>Relevant output from strace (without the btl = ^sm) is below. Stuff in square brackets are my minor edits and snips.
<br>
<p>open(&quot;/tmp/openmpi-sessions-[user]@[host]_0/40072/1/1/vader_segment.[host].1&quot;, O_RDWR|O_CREAT, 0600) = 12
<br>
ftruncate(12, 4194312)                  = 0
<br>
mmap(NULL, 4194312, PROT_READ|PROT_WRITE, MAP_SHARED, 12, 0) = 0x7fe506c8a000
<br>
close(12)                               = 0
<br>
write(9, &quot;\1\0\0\0\0\0\0\0&quot;, 8)         = 8
<br>
[...]
<br>
poll([{fd=5, events=POLLIN}, {fd=11, events=POLLIN}], 2, 0)                = -1 EFBIG (File too large)
<br>
--- SIGXFSZ {si_signo=SIGXFSZ, si_code=SI_USER, si_pid=12329, si_uid=1005} ---
<br>
<pre>
--
________________________________
From: saurabh_at_[hidden]&lt;mailto:saurabh_at_[hidden]&gt;
To: users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
Subject: Openmpi 1.10.1 fails with SIGXFSZ on file limit &lt;= 131072
Date: Thu, 19 Nov 2015 15:24:08 -0500
Hi,
Sorry my previous email was garbled, sending it again.
&gt; cd examples
&gt; make hello_cxx
&gt; ulimit -f 131073
&gt; orterun -np 3 hello_cxx
Hello, world
(etc)
&gt; ulimit -f 131072
&gt; orterun -np 3 hello_cxx
--------------------------------------------------------------------------
orterun noticed that process rank 0 with PID 4473 on node sim16 exited on signal 25 (File size limit exceeded).
--------------------------------------------------------------------------
Any thoughts?
_______________________________________________
users mailing list
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/11/28070.php">http://www.open-mpi.org/community/lists/users/2015/11/28070.php</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28079/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28080.php">Gilles Gouaillardet: "Re: [OMPI users] Openmpi 1.10.1 fails with SIGXFSZ on file limit &lt;= 131072"</a>
<li><strong>Previous message:</strong> <a href="28078.php">Gilles Gouaillardet: "Re: [OMPI users] Ubuntu and MPI"</a>
<li><strong>In reply to:</strong> <a href="28070.php">Saurabh T: "Re: [OMPI users] Openmpi 1.10.1 fails with SIGXFSZ on file limit &lt;= 131072"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28080.php">Gilles Gouaillardet: "Re: [OMPI users] Openmpi 1.10.1 fails with SIGXFSZ on file limit &lt;= 131072"</a>
<li><strong>Reply:</strong> <a href="28080.php">Gilles Gouaillardet: "Re: [OMPI users] Openmpi 1.10.1 fails with SIGXFSZ on file limit &lt;= 131072"</a>
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
