<?
$subject_val = "Re: [OMPI users] Openmpi 1.10.1 fails with SIGXFSZ on file limit &lt;= 131072";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov 20 10:04:01 2015" -->
<!-- isoreceived="20151120150401" -->
<!-- sent="Fri, 20 Nov 2015 10:03:57 -0500" -->
<!-- isosent="20151120150357" -->
<!-- name="Saurabh T" -->
<!-- email="saurabh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Openmpi 1.10.1 fails with SIGXFSZ on file limit &amp;lt;= 131072" -->
<!-- id="DUB123-W14AFF35BFC3916B6D94E93B11A0_at_phx.gbl" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> Re: [OMPI users] Openmpi 1.10.1 fails with SIGXFSZ on file limit &lt;= 131072<br>
<strong>From:</strong> Saurabh T (<em>saurabh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-11-20 10:03:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28087.php">Dave Love: "Re: [OMPI users] Ubuntu/Debian packages for recent version (for Travis CI support)"</a>
<li><strong>Previous message:</strong> <a href="28085.php">Gilles Gouaillardet: "Re: [OMPI users] help understand unhelpful ORTE error message"</a>
<li><strong>In reply to:</strong> <a href="28070.php">Saurabh T: "Re: [OMPI users] Openmpi 1.10.1 fails with SIGXFSZ on file limit &lt;= 131072"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28089.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Openmpi 1.10.1 fails with SIGXFSZ on file limit &lt;=	131072"</a>
<li><strong>Reply:</strong> <a href="28089.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Openmpi 1.10.1 fails with SIGXFSZ on file limit &lt;=	131072"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; communication. It shows up as a &quot;file&quot;, but it's 
really shared memory.

</span><br>
<p><span class="quotelev1">&gt; You can disable sm and/or Vader, but your on-server message passing performance will be significantly
</span><br>
<span class="quotelev1">&gt; lower.

</span><br>
<p><span class="quotelev1">&gt; Is there a reason you have a file size limit?

</span><br>
<p>The file size limit is so our testing does not write runaway large files. I'm not satisfied that the solution would be to just throw a better error. This to me looks like a bug in openmpi. If it is actually shared memory, it shouldnt be constrained by file size limit.
<br>
<p>saurabh
<br>
<p>From: saurabh_at_[hidden]
<br>
To: users_at_[hidden]
<br>
Subject: RE: Openmpi 1.10.1 fails with SIGXFSZ on file limit &lt;= 131072
<br>
Date: Thu, 19 Nov 2015 17:32:36 -0500
<br>
<p><p><p><p>From: saurabh_at_[hidden]
<br>
To: users_at_[hidden]
<br>
Subject: RE: Openmpi 1.10.1 fails with SIGXFSZ on file limit &lt;= 131072
<br>
Date: Thu, 19 Nov 2015 17:08:22 -0500
<br>
<p><p><span class="quotelev1">&gt; are running under (which resource mgr or not, etc), how many nodes you had

</span><br>
<p><p><span class="quotelev1">&gt; There is no reason why something should behave that way. So it would help

</span><br>
<p><p><p>To answer Ralph's above question on the other thread, all nodes are  on the same machine orterun was run on. It's a redhat 7 64-bit gcc 4.8 install of openmpi 1.10.1. The only atypical thing is that
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
From: saurabh_at_[hidden]
To: users_at_[hidden]
Subject: Openmpi 1.10.1 fails with SIGXFSZ on file limit &lt;= 131072
Date: Thu, 19 Nov 2015 15:24:08 -0500
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
 		 	   		   		 	   		   		 	   		   		 	   		  
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28086/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28087.php">Dave Love: "Re: [OMPI users] Ubuntu/Debian packages for recent version (for Travis CI support)"</a>
<li><strong>Previous message:</strong> <a href="28085.php">Gilles Gouaillardet: "Re: [OMPI users] help understand unhelpful ORTE error message"</a>
<li><strong>In reply to:</strong> <a href="28070.php">Saurabh T: "Re: [OMPI users] Openmpi 1.10.1 fails with SIGXFSZ on file limit &lt;= 131072"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28089.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Openmpi 1.10.1 fails with SIGXFSZ on file limit &lt;=	131072"</a>
<li><strong>Reply:</strong> <a href="28089.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Openmpi 1.10.1 fails with SIGXFSZ on file limit &lt;=	131072"</a>
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
