<?
$subject_val = "Re: [OMPI devel] Question about hanging mpirun";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul  1 17:07:29 2011" -->
<!-- isoreceived="20110701210729" -->
<!-- sent="Fri, 1 Jul 2011 21:04:59 +0000" -->
<!-- isosent="20110701210459" -->
<!-- name="Colon, Joseanibal" -->
<!-- email="joseanibal.colon_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Question about hanging mpirun" -->
<!-- id="21316B765A6B9D46A5CCE36DDD1199C26EE2268C66_at_GVW1339EXA.americas.hpqcorp.net" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="2D3C8BB1-8EE4-45C8-803D-12A463235034_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Question about hanging mpirun<br>
<strong>From:</strong> Colon, Joseanibal (<em>joseanibal.colon_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-01 17:04:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9459.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Trunk problem: VT breakage"</a>
<li><strong>Previous message:</strong> <a href="9457.php">Jeff Squyres: "Re: [OMPI devel] Question about hanging mpirun"</a>
<li><strong>In reply to:</strong> <a href="9457.php">Jeff Squyres: "Re: [OMPI devel] Question about hanging mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9473.php">Colon, Joseanibal: "Re: [OMPI devel] Question about hanging mpirun"</a>
<li><strong>Reply:</strong> <a href="9473.php">Colon, Joseanibal: "Re: [OMPI devel] Question about hanging mpirun"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks, will do, I'll get back to you soon
<br>
<p><p>-----Original Message-----
<br>
From: devel-bounces_at_[hidden] [mailto:devel-bounces_at_[hidden]] On Behalf Of Jeff Squyres
<br>
Sent: Friday, July 01, 2011 5:00 PM
<br>
To: Open MPI Developers
<br>
Subject: Re: [OMPI devel] Question about hanging mpirun
<br>
<p>It sounds like you have a deadlock in your MPI application.
<br>
<p>You might want to attach a debugger and see where the MPI processes are stuck.
<br>
<p><p>On Jul 1, 2011, at 4:49 PM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; I'm afraid there isn't enough info here to advise - I don't know which poll is failing. What function is calling poll?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Could be a problem with the event library, but I don't know. Have you tried using &quot;-mca btl sm,self&quot; instead of tcp?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jul 1, 2011, at 2:37 PM, Colon, Joseanibal wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I got the LD_LIBRARY_PATH correct and I don't have other installations on the target machine, but it doesn't fix it. I had the suspicion about &quot;./configure&quot; building support for stuff on my machine that is not available on the target machine. Unfortunately the machines are not exactly identical, definitely in terms of hardware. The only similarities are the OS and the x86_64 architecture (this is OpenSUSE 11, SP1).
</span><br>
<span class="quotelev2">&gt;&gt; As you correctly guessed I want to run this on a single machine, and all processes are local. There is some intercommunication going on as well, but all using MPI API. I am guessing that my problem has to do with intercommunications (since strace shows infinite calls to 'poll()'), probably because mpirun is trying to use features that were configured on my machine but not present on the target. Does that make sense?
</span><br>
<span class="quotelev2">&gt;&gt; I figured I don't need any fancy support to just run a couple of processes in parallel locally.  What would be the most basic configuration I can use to ensure that this will run on my target machine? (a machine that probably doesn't have support for a lot of the components - no IB devices found). I want openmpi to use the simplest form available. Thanks!
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; -Joseanibal
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; From: devel-bounces_at_[hidden] [mailto:devel-bounces_at_[hidden]] On Behalf Of Ralph Castain
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Friday, July 01, 2011 3:50 PM
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Developers
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI devel] Question about hanging mpirun
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; Make sure your LD_LIBRARY_PATH will pickup this installation before anything else - it's possible it is picking up an old one.
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; I take it that you are running this on a single machine? So all the procs are local?
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; Only other issue is that OMPI's configure does a lot of testing to detect the local environment. So you might be building support for things that aren't on your target machine, and vice versa. If you have to do it this way, you need to ensure that the two machines are absolutely identical, both in hardware and software (watch for those installed packages!).
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; On Jul 1, 2011, at 10:42 AM, Colon, Joseanibal wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; My mpi application is hanging forever when called with mpirun -np &gt;1 (that is 2 or more... not actually typing the '&gt;').
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; So I built openmpi 1.4.3 with default options except I used -prefix=/usr/local/openmpi. I compiled an application against it but I need to run this application elsewhere. So brought in my entire installation directory /usr/local/openmpi to this new machine along with my binary to test it. Ran the following command... (If i did't use the -mca options it would print out messages about missing OpenFrabric):
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/openmpi/bin/mpirun --mca btl tcp,self -np 2 ./my_application
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; This actually works for -np 1. But requesting another process makes the call hang forever. 'strace' of the above call shows an never ending calls to &quot;poll&quot; resulting in (timeout) every time.
</span><br>
<span class="quotelev2">&gt;&gt; Executing /usr/local/openmpi/bin/ompi_info still shows the configure and build host as the machine I built on, but I don't know if this may cause a problem. I also see &quot;Thread support: posix (mpi: no, progress: no)&quot;
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; Unfortunately I need to do it this way.. I cannot build openmpi on the target machine, so I need to make it portable. This other machine should be the same architecture and OS and everything.
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; I should have solved this yesterday, please help, and thanks!
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; -Joseanibal
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
_______________________________________________
devel mailing list
devel_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9459.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Trunk problem: VT breakage"</a>
<li><strong>Previous message:</strong> <a href="9457.php">Jeff Squyres: "Re: [OMPI devel] Question about hanging mpirun"</a>
<li><strong>In reply to:</strong> <a href="9457.php">Jeff Squyres: "Re: [OMPI devel] Question about hanging mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9473.php">Colon, Joseanibal: "Re: [OMPI devel] Question about hanging mpirun"</a>
<li><strong>Reply:</strong> <a href="9473.php">Colon, Joseanibal: "Re: [OMPI devel] Question about hanging mpirun"</a>
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
