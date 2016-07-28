<?
$subject_val = "Re: [OMPI users] some mpi processes &quot;disappear&quot; on a cluster of servers";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep  5 20:40:28 2012" -->
<!-- isoreceived="20120906004028" -->
<!-- sent="Thu, 6 Sep 2012 02:40:19 +0200" -->
<!-- isosent="20120906004019" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] some mpi processes &amp;quot;disappear&amp;quot; on a cluster of servers" -->
<!-- id="F6F521B2-DF90-4827-8ABF-ABE0F3599CF5_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAPUxaiQNMh8BYBK9xbksWwoFn87Ci476ocEgf+TK66wOW=c=aQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] some mpi processes &quot;disappear&quot; on a cluster of servers<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-05 20:40:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20135.php">Yong Qin: "[OMPI users] SIGSEGV in OMPI 1.6.x"</a>
<li><strong>Previous message:</strong> <a href="20133.php">seshendra seshu: "[OMPI users] Regarding the Pthreads"</a>
<li><strong>In reply to:</strong> <a href="20092.php">Andrea Negri: "Re: [OMPI users] some mpi processes &quot;disappear&quot; on a cluster of servers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20111.php">Andrea Negri: "Re: [OMPI users] some mpi processes &quot;disappear&quot; on a cluster of servers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Andrea,
<br>
<p>As suggested by the previous answers I guess the size of your problem is too large for the memory available on the nodes. I can runs ZeusMP without any issues up to 64 processes, both over Ethernet and Infiniband. I tried the 1.6 and the current trunk, and both perform as expected.
<br>
<p>What is the content of your zmp_inp file?
<br>
<p>&nbsp;&nbsp;george.
<br>
<p>On Sep 1, 2012, at 16:01 , Andrea Negri &lt;negri.andre_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I have tried to run with a single process (i.e. the entire grid is
</span><br>
<span class="quotelev1">&gt; contained by one process) and the the command free -m on the compute
</span><br>
<span class="quotelev1">&gt; node returns
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             total       used       free     shared    buffers     cached
</span><br>
<span class="quotelev1">&gt; Mem:          3913       1540       2372          0         49       1234
</span><br>
<span class="quotelev1">&gt; -/+ buffers/cache:        257       3656
</span><br>
<span class="quotelev1">&gt; Swap:         1983          0       1983
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; while top returns
</span><br>
<span class="quotelev1">&gt; top - 16:01:09 up 4 days,  5:56,  1 user,  load average: 0.53, 0.16, 0.10
</span><br>
<span class="quotelev1">&gt; Tasks:  63 total,   3 running,  60 sleeping,   0 stopped,   0 zombie
</span><br>
<span class="quotelev1">&gt; Cpu(s): 49.4% us,  0.7% sy,  0.0% ni, 49.9% id,  0.0% wa,  0.0% hi,  0.0% si
</span><br>
<span class="quotelev1">&gt; Mem:   4007720k total,  1577968k used,  2429752k free,    50664k buffers
</span><br>
<span class="quotelev1">&gt; Swap:  2031608k total,        0k used,  2031608k free,  1263844k cached
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20135.php">Yong Qin: "[OMPI users] SIGSEGV in OMPI 1.6.x"</a>
<li><strong>Previous message:</strong> <a href="20133.php">seshendra seshu: "[OMPI users] Regarding the Pthreads"</a>
<li><strong>In reply to:</strong> <a href="20092.php">Andrea Negri: "Re: [OMPI users] some mpi processes &quot;disappear&quot; on a cluster of servers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20111.php">Andrea Negri: "Re: [OMPI users] some mpi processes &quot;disappear&quot; on a cluster of servers"</a>
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
