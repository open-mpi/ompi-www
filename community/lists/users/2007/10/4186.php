<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Oct 10 01:37:00 2007" -->
<!-- isoreceived="20071010053700" -->
<!-- sent="Tue, 9 Oct 2007 22:05:30 +0200" -->
<!-- isosent="20071009200530" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI and torque/maui -&amp;gt; crashing on MPI_Send()" -->
<!-- id="2C69BC22-9321-4519-90CD-2CD1E5B3F02F_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="df8c8a6d0710041136g44fbbd88i9482095f6813ebea_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2007-10-09 16:05:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4187.php">Jeff Squyres: "Re: [OMPI users] problem in runing MPI job through XGrid"</a>
<li><strong>Previous message:</strong> <a href="4185.php">Jeff Squyres: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<li><strong>In reply to:</strong> <a href="4153.php">Jim Kusznir: "[OMPI users] OpenMPI and torque/maui -&gt; crashing on MPI_Send()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4189.php">Jim Kusznir: "Re: [OMPI users] OpenMPI and torque/maui -&gt; crashing on MPI_Send()"</a>
<li><strong>Reply:</strong> <a href="4189.php">Jim Kusznir: "Re: [OMPI users] OpenMPI and torque/maui -&gt; crashing on MPI_Send()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If you do not have IB hardware, you might want to permanently disable  
<br>
the IB support.  You can do this by setting an MCA parameter or  
<br>
simply removing the $prefix/lib/openmpi/mca_btl_openib.* files.  This  
<br>
will suppress the warning that you're seeing.
<br>
<p>As for your problem with MPI_SEND, do you know that your program is  
<br>
correct?  I.e., it's a little odd that you're failing directly in  
<br>
seedSends, not in an MPI function.  Are you getting a core dump that  
<br>
you can examine, or can you attach a debugger to see where exactly it  
<br>
is failing?
<br>
<p><p>On Oct 4, 2007, at 8:36 PM, Jim Kusznir wrote:
<br>
<p><span class="quotelev1">&gt; Hi all:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm having trouble getting torque/maui working with OpenMPI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Currently, I am getting hard failures when an MPI_Send is called.   
</span><br>
<span class="quotelev1">&gt; When
</span><br>
<span class="quotelev1">&gt; run without qsub (no torque/maui), the mpi job runs fine, so its  
</span><br>
<span class="quotelev1">&gt; something that
</span><br>
<span class="quotelev1">&gt; qsub/torque/maui is doing (I think).  Here's the error:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; libibverbs: Fatal: couldn't open sysfs class 'infiniband_verbs'.
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt; [0,1,0]: OpenIB on host localhost was unable to find any HCAs.
</span><br>
<span class="quotelev1">&gt; Another transport will be used instead, although this may result in
</span><br>
<span class="quotelev1">&gt; lower performance.
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt; Signal:8 info.si_errno:0(Success) si_code:1(FPE_INTDIV)
</span><br>
<span class="quotelev1">&gt; Failing at addr:0x40cc2d
</span><br>
<span class="quotelev1">&gt; [0] func:/usr/lib64/openmpi/libopal.so.0 [0x3ecfb21dc5]
</span><br>
<span class="quotelev1">&gt; [1] func:/lib64/tls/libpthread.so.0 [0x3ed040c4f0]
</span><br>
<span class="quotelev1">&gt; [2] func:repdig_mpi(sendSeeds+0x3d) [0x40cc2d]
</span><br>
<span class="quotelev1">&gt; [3] func:repdig_mpi(main+0x3b6) [0x40c026]
</span><br>
<span class="quotelev1">&gt; [4] func:/lib64/tls/libc.so.6(__libc_start_main+0xdb) [0x3ecfd1c3fb]
</span><br>
<span class="quotelev1">&gt; [5] func:repdig_mpi [0x4030ea]
</span><br>
<span class="quotelev1">&gt; *** End of error message ***
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't really know where to begin looking.  I know in the stack trace
</span><br>
<span class="quotelev1">&gt; the actual problem is occurring in #2 (sendSeeds), but that is a basic
</span><br>
<span class="quotelev1">&gt; MPI_Send(), and works when not using torque.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My system (installed from Rocks 4.3) does not have infiniband; I think
</span><br>
<span class="quotelev1">&gt; I just figured out how to disable it; in any case, the same warning
</span><br>
<span class="quotelev1">&gt; shows up when not running it through torque, and the job runs
</span><br>
<span class="quotelev1">&gt; successfully.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thoughts/suggestions?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks!
</span><br>
<span class="quotelev1">&gt; --Jim
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
<li><strong>Next message:</strong> <a href="4187.php">Jeff Squyres: "Re: [OMPI users] problem in runing MPI job through XGrid"</a>
<li><strong>Previous message:</strong> <a href="4185.php">Jeff Squyres: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<li><strong>In reply to:</strong> <a href="4153.php">Jim Kusznir: "[OMPI users] OpenMPI and torque/maui -&gt; crashing on MPI_Send()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4189.php">Jim Kusznir: "Re: [OMPI users] OpenMPI and torque/maui -&gt; crashing on MPI_Send()"</a>
<li><strong>Reply:</strong> <a href="4189.php">Jim Kusznir: "Re: [OMPI users] OpenMPI and torque/maui -&gt; crashing on MPI_Send()"</a>
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
