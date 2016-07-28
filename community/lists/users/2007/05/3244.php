<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu May 10 21:53:52 2007" -->
<!-- isoreceived="20070511015352" -->
<!-- sent="Thu, 10 May 2007 21:53:41 -0400" -->
<!-- isosent="20070511015341" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] debugging my program in openmpi" -->
<!-- id="5EC6C0FF-2F56-44E5-B740-8D5CB37854F0_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1626092b0705101850u29dd939cl1f450cd8a1f4558f_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-05-10 21:53:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3245.php">Michael Creel: "[OMPI users] openmpi 1.2.1 on PK 2.6, and 64 bit version out"</a>
<li><strong>Previous message:</strong> <a href="3243.php">Code Master: "Re: [OMPI users] debugging my program in openmpi"</a>
<li><strong>In reply to:</strong> <a href="3243.php">Code Master: "Re: [OMPI users] debugging my program in openmpi"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Check out the FAQ:
<br>
<p><a href="http://www.lam-mpi.org/faq/category6.php3">http://www.lam-mpi.org/faq/category6.php3</a>
<br>
<p><p>On May 10, 2007, at 9:50 PM, Code Master wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 5/11/07, Tim Prins &lt;tprins_at_[hidden]&gt; wrote: On Thursday 10  
</span><br>
<span class="quotelev1">&gt; May 2007 07:19 pm, Code Master wrote:
</span><br>
<span class="quotelev2">&gt; &gt; I am a newbie in openmpi.  I have just compiled a program with -g  
</span><br>
<span class="quotelev1">&gt; -pg (an
</span><br>
<span class="quotelev2">&gt; &gt; mpi program with a listener thread, which all MPI calls except
</span><br>
<span class="quotelev2">&gt; &gt; initialization and MPI_Finalize are placed within)  and I run  
</span><br>
<span class="quotelev1">&gt; it.  However
</span><br>
<span class="quotelev2">&gt; &gt; it crashes and I can't find any core dump, even I set the core  
</span><br>
<span class="quotelev1">&gt; dump max
</span><br>
<span class="quotelev2">&gt; &gt; size to 100000 by
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ulimit -c 100000
</span><br>
<span class="quotelev1">&gt; You probably need to set the ulimit in your .bashrc to get a core  
</span><br>
<span class="quotelev1">&gt; dump, since
</span><br>
<span class="quotelev1">&gt; processes are (by default) started via ssh.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Signal:11 info.si_errno:0(Success) si_code:1(SEGV_MAPERR)
</span><br>
<span class="quotelev2">&gt; &gt; Failing at addr:(nil)
</span><br>
<span class="quotelev2">&gt; &gt; [0] func:raytrace [0x8185581]
</span><br>
<span class="quotelev2">&gt; &gt; [1] func:[0xffffe440]
</span><br>
<span class="quotelev2">&gt; &gt; [2] func:raytrace [0x8056736]
</span><br>
<span class="quotelev2">&gt; &gt; [3] func:/lib/tls/libpthread.so.0 [0x40063b63]
</span><br>
<span class="quotelev2">&gt; &gt; [4] func:/lib/tls/libc.so.6(__clone+0x5a) [0x4014618a]
</span><br>
<span class="quotelev2">&gt; &gt; *** End of error message ***
</span><br>
<span class="quotelev2">&gt; &gt; I tried to use gdb and I ran:
</span><br>
<span class="quotelev2">&gt; &gt; gdb mpirun
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; run --hostfile ../hostfile n 16 raytrace -finputs/car.env
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; when I type
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; backtrace
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; after it crashes, it just said &quot;no stack&quot;
</span><br>
<span class="quotelev1">&gt; This is because you are debugging mpirun, and not your application.  
</span><br>
<span class="quotelev1">&gt; Mpirun
</span><br>
<span class="quotelev1">&gt; runs to completion successfully, but it is your program which is  
</span><br>
<span class="quotelev1">&gt; crashing.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That's great, but how can I debug my program under mpi?
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3245.php">Michael Creel: "[OMPI users] openmpi 1.2.1 on PK 2.6, and 64 bit version out"</a>
<li><strong>Previous message:</strong> <a href="3243.php">Code Master: "Re: [OMPI users] debugging my program in openmpi"</a>
<li><strong>In reply to:</strong> <a href="3243.php">Code Master: "Re: [OMPI users] debugging my program in openmpi"</a>
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
