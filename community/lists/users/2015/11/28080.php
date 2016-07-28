<?
$subject_val = "Re: [OMPI users] Openmpi 1.10.1 fails with SIGXFSZ on file limit &lt;= 131072";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov 20 06:51:52 2015" -->
<!-- isoreceived="20151120115152" -->
<!-- sent="Fri, 20 Nov 2015 20:51:48 +0900" -->
<!-- isosent="20151120115148" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Openmpi 1.10.1 fails with SIGXFSZ on file limit &amp;lt;= 131072" -->
<!-- id="CAAkFZ5uMTYO3EHKqWa9S2OXh54yYsH4Qqp=Z3f+tj3gQscZNxg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="8FD2FE71-9C4B-43E7-B68C-1241857B204C_at_cisco.com" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-11-20 06:51:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28081.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Openmpi 1.10.1 fails with SIGXFSZ on file limit &lt;=	131072"</a>
<li><strong>Previous message:</strong> <a href="28079.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Openmpi 1.10.1 fails with SIGXFSZ on file limit &lt;=	131072"</a>
<li><strong>In reply to:</strong> <a href="28079.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Openmpi 1.10.1 fails with SIGXFSZ on file limit &lt;=	131072"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28081.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Openmpi 1.10.1 fails with SIGXFSZ on file limit &lt;=	131072"</a>
<li><strong>Reply:</strong> <a href="28081.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Openmpi 1.10.1 fails with SIGXFSZ on file limit &lt;=	131072"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff,
<br>
<p>should we check ulimit in vader/sm btl and disable them with a warning if
<br>
value is too low ?
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Friday, November 20, 2015, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; For what it's worth, that's open MPI creating a chunk of shared memory for
</span><br>
<span class="quotelev1">&gt; use with on-server communication. It shows up as a &quot;file&quot;, but it's really
</span><br>
<span class="quotelev1">&gt; shared memory.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You can disable sm and/or Vader, but your on-server message passing
</span><br>
<span class="quotelev1">&gt; performance will be significantly lower.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is there a reason you have a file size limit?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sent from my phone. No type good.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Nov 19, 2015, at 4:32 PM, Saurabh T &lt;saurabh_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;javascript:_e(%7B%7D,'cvml','saurabh_at_[hidden]');&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I apologize, I have the wrong lines from strace for the initial file there
</span><br>
<span class="quotelev1">&gt; (of course). The file with fd = 11 which causes the problem is called
</span><br>
<span class="quotelev1">&gt; shared_mem_pool.[host] and fruncate(11, 134217736) is called on it. (This
</span><br>
<span class="quotelev1">&gt; is exactly 1024 times the ulimit of 131072 which makes sense as the ulimit
</span><br>
<span class="quotelev1">&gt; is in 1K blocks).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt; From: saurabh_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;javascript:_e(%7B%7D,'cvml','saurabh_at_[hidden]');&gt;
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;javascript:_e(%7B%7D,'cvml','users_at_[hidden]');&gt;
</span><br>
<span class="quotelev1">&gt; Subject: RE: Openmpi 1.10.1 fails with SIGXFSZ on file limit &lt;= 131072
</span><br>
<span class="quotelev1">&gt; Date: Thu, 19 Nov 2015 17:08:22 -0500
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Could you please provide a little more info regarding the environment
</span><br>
<span class="quotelev1">&gt; you
</span><br>
<span class="quotelev2">&gt; &gt; are running under (which resource mgr or not, etc), how many nodes you
</span><br>
<span class="quotelev1">&gt; had
</span><br>
<span class="quotelev2">&gt; &gt; in the allocation, etc?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; There is no reason why something should behave that way. So it would
</span><br>
<span class="quotelev1">&gt; help
</span><br>
<span class="quotelev2">&gt; &gt; if we could understand the setup.
</span><br>
<span class="quotelev2">&gt; &gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; To answer Ralph's above question on the other thread, all nodes are  on
</span><br>
<span class="quotelev1">&gt; the same machine orterun was run on. It's a redhat 7 64-bit gcc 4.8 install
</span><br>
<span class="quotelev1">&gt; of openmpi 1.10.1. The only atypical thing is that
</span><br>
<span class="quotelev1">&gt; btl_tcp_if_exclude = virbr0
</span><br>
<span class="quotelev1">&gt; has been added to openmpi-mca-params.conf based on some failures I was
</span><br>
<span class="quotelev1">&gt; seeing before.
</span><br>
<span class="quotelev1">&gt; (And now of course I've added btl = ^sm as well to fix this issue, see my
</span><br>
<span class="quotelev1">&gt; other response).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Relevant output from strace (without the btl = ^sm) is below. Stuff in
</span><br>
<span class="quotelev1">&gt; square brackets are my minor edits and snips.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; open(&quot;/tmp/openmpi-sessions-[user]@[host]_0/40072/1/1/vader_segment.[host].1&quot;,
</span><br>
<span class="quotelev1">&gt; O_RDWR|O_CREAT, 0600) = 12
</span><br>
<span class="quotelev1">&gt; ftruncate(12, 4194312)                  = 0
</span><br>
<span class="quotelev1">&gt; mmap(NULL, 4194312, PROT_READ|PROT_WRITE, MAP_SHARED, 12, 0) =
</span><br>
<span class="quotelev1">&gt; 0x7fe506c8a000
</span><br>
<span class="quotelev1">&gt; close(12)                               = 0
</span><br>
<span class="quotelev1">&gt; write(9, &quot;\1\0\0\0\0\0\0\0&quot;, 8)         = 8
</span><br>
<span class="quotelev1">&gt; [...]
</span><br>
<span class="quotelev1">&gt; poll([{fd=5, events=POLLIN}, {fd=11, events=POLLIN}], 2, 0)
</span><br>
<span class="quotelev1">&gt; = -1 EFBIG (File too large)
</span><br>
<span class="quotelev1">&gt; --- SIGXFSZ {si_signo=SIGXFSZ, si_code=SI_USER, si_pid=12329, si_uid=1005}
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt; From: saurabh_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;javascript:_e(%7B%7D,'cvml','saurabh_at_[hidden]');&gt;
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;javascript:_e(%7B%7D,'cvml','users_at_[hidden]');&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Openmpi 1.10.1 fails with SIGXFSZ on file limit &lt;= 131072
</span><br>
<span class="quotelev1">&gt; Date: Thu, 19 Nov 2015 15:24:08 -0500
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sorry my previous email was garbled, sending it again.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; cd examples
</span><br>
<span class="quotelev2">&gt; &gt; make hello_cxx
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; ulimit -f 131073
</span><br>
<span class="quotelev2">&gt; &gt; orterun -np 3 hello_cxx
</span><br>
<span class="quotelev1">&gt; Hello, world
</span><br>
<span class="quotelev1">&gt; (etc)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; ulimit -f 131072
</span><br>
<span class="quotelev2">&gt; &gt; orterun -np 3 hello_cxx
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; orterun noticed that process rank 0 with PID 4473 on node sim16 exited on
</span><br>
<span class="quotelev1">&gt; signal 25 (File size limit exceeded).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any thoughts?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden] &lt;javascript:_e(%7B%7D,'cvml','users_at_[hidden]');&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/11/28070.php">http://www.open-mpi.org/community/lists/users/2015/11/28070.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28080/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28081.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Openmpi 1.10.1 fails with SIGXFSZ on file limit &lt;=	131072"</a>
<li><strong>Previous message:</strong> <a href="28079.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Openmpi 1.10.1 fails with SIGXFSZ on file limit &lt;=	131072"</a>
<li><strong>In reply to:</strong> <a href="28079.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Openmpi 1.10.1 fails with SIGXFSZ on file limit &lt;=	131072"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28081.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Openmpi 1.10.1 fails with SIGXFSZ on file limit &lt;=	131072"</a>
<li><strong>Reply:</strong> <a href="28081.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Openmpi 1.10.1 fails with SIGXFSZ on file limit &lt;=	131072"</a>
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
