<?
$subject_val = "Re: [OMPI users] Memory question and possible bug in 64bit addressing under Leopard!";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 25 17:42:24 2008" -->
<!-- isoreceived="20080425214224" -->
<!-- sent="Fri, 25 Apr 2008 14:42:17 -0700" -->
<!-- isosent="20080425214217" -->
<!-- name="Warner Yuen" -->
<!-- email="wyuen_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Memory question and possible bug in 64bit addressing under Leopard!" -->
<!-- id="5544994D-B0F2-4DBB-9618-D86216B410ED_at_apple.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="mailman.3384.1209154269.5420.users_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Memory question and possible bug in 64bit addressing under Leopard!<br>
<strong>From:</strong> Warner Yuen (<em>wyuen_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-25 17:42:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5534.php">Sharon Brunett: "Re: [OMPI users] openmpi-1.3a1r18241  ompi-restart issue"</a>
<li><strong>Previous message:</strong> <a href="5532.php">Gregory John Orris: "Re: [OMPI users] Memory question and possible bug in 64bit addressing under Leopard!"</a>
<li><strong>Maybe in reply to:</strong> <a href="5527.php">Gregory John Orris: "[OMPI users] Memory question and possible bug in 64bit addressing under Leopard!"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I believe that you can also add this to your LIB or LDFLAGS for 64-bit  
<br>
applications:
<br>
<p>-Wl,-stack_addr,0xF10000000 -Wl,-stack_size,0x64000000
<br>
<p><p>Warner Yuen
<br>
Scientific Computing
<br>
Consulting Engineer
<br>
Apple Computer
<br>
email: wyuen_at_[hidden]
<br>
Tel: 408.718.2859
<br>
Fax: 408.715.0133
<br>
<p><p><p>On Apr 25, 2008, at 1:11 PM, users-request_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Message: 6
</span><br>
<span class="quotelev1">&gt; Date: Fri, 25 Apr 2008 14:10:57 -0600
</span><br>
<span class="quotelev1">&gt; From: Brian Barrett &lt;brbarret_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Memory question and possible bug in 64bit
</span><br>
<span class="quotelev1">&gt; 	addressing under Leopard!
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;C9986452-B565-454D-8F79-E7C5E0571A19_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=US-ASCII; format=flowed; delsp=yes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 25, 2008, at 2:06 PM, Gregory John Orris wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; produces a core dump on a machine with 12Gb of RAM.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; and the error message
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpiexec noticed that job rank 0 with PID 75545 on node mymachine.com
</span><br>
<span class="quotelev2">&gt;&gt; exited on signal 4 (Illegal instruction).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; However, substituting in
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; float *X = new float[n];
</span><br>
<span class="quotelev2">&gt;&gt; for
</span><br>
<span class="quotelev2">&gt;&gt; float X[n];
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Succeeds!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You're running off the end of the stack, because of the large amount
</span><br>
<span class="quotelev1">&gt; of data you're trying to put there.  OS X by default has a tiny stack
</span><br>
<span class="quotelev1">&gt; size, so codes that run on Linux (which defaults to a much larger
</span><br>
<span class="quotelev1">&gt; stack size) sometimes show this problem.  Your best bets are either to
</span><br>
<span class="quotelev1">&gt; increase the max stack size or (more portably) just allocate
</span><br>
<span class="quotelev1">&gt; everything on the heap with malloc/new.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hope this helps,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt;   Brian Barrett
</span><br>
<span class="quotelev1">&gt;   Open MPI developer
</span><br>
<span class="quotelev1">&gt;   <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-5533/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5534.php">Sharon Brunett: "Re: [OMPI users] openmpi-1.3a1r18241  ompi-restart issue"</a>
<li><strong>Previous message:</strong> <a href="5532.php">Gregory John Orris: "Re: [OMPI users] Memory question and possible bug in 64bit addressing under Leopard!"</a>
<li><strong>Maybe in reply to:</strong> <a href="5527.php">Gregory John Orris: "[OMPI users] Memory question and possible bug in 64bit addressing under Leopard!"</a>
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
