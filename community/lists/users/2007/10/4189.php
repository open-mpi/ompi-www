<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Oct 10 11:09:08 2007" -->
<!-- isoreceived="20071010150908" -->
<!-- sent="Wed, 10 Oct 2007 08:09:03 -0700" -->
<!-- isosent="20071010150903" -->
<!-- name="Jim Kusznir" -->
<!-- email="jkusznir_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI and torque/maui -&amp;gt; crashing on MPI_Send()" -->
<!-- id="df8c8a6d0710100809r26ae7e29ua0b2d34f6ce0f8c0_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="2C69BC22-9321-4519-90CD-2CD1E5B3F02F_at_cisco.com" -->
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
<strong>From:</strong> Jim Kusznir (<em>jkusznir_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-10 11:09:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4190.php">Dirk Eddelbuettel: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<li><strong>Previous message:</strong> <a href="4188.php">Josh Hursey: "Re: [OMPI users] mca_oob_tcp_peer_try_connect error when checkpoint and restart."</a>
<li><strong>In reply to:</strong> <a href="4186.php">Jeff Squyres: "Re: [OMPI users] OpenMPI and torque/maui -&gt; crashing on MPI_Send()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4198.php">Jeff Squyres: "Re: [OMPI users] OpenMPI and torque/maui -&gt; crashing on MPI_Send()"</a>
<li><strong>Reply:</strong> <a href="4198.php">Jeff Squyres: "Re: [OMPI users] OpenMPI and torque/maui -&gt; crashing on MPI_Send()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi:
<br>
<p>I've added:
<br>
btl = ^openib
<br>
to /etc/openmpi-mca-params.conf on the head node, but this doesn't
<br>
seem to help.  Does this need to be pushed out to all the compute
<br>
nodes as well?
<br>
<p>The program is known to work on other clusters.  I finally figured out
<br>
what was happening, though: Openmpi was compiled without torque/PBS
<br>
support (redhat/CentOS .rpm), so it was launching with a single
<br>
process on the node it was started on.  When MPI_Send() was called, it
<br>
had nothing to send it to, and crashed.  Once I manually set the -np
<br>
value, it stared working.
<br>
<p>--Jim
<br>
<p>On 10/9/07, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; If you do not have IB hardware, you might want to permanently disable
</span><br>
<span class="quotelev1">&gt; the IB support.  You can do this by setting an MCA parameter or
</span><br>
<span class="quotelev1">&gt; simply removing the $prefix/lib/openmpi/mca_btl_openib.* files.  This
</span><br>
<span class="quotelev1">&gt; will suppress the warning that you're seeing.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As for your problem with MPI_SEND, do you know that your program is
</span><br>
<span class="quotelev1">&gt; correct?  I.e., it's a little odd that you're failing directly in
</span><br>
<span class="quotelev1">&gt; seedSends, not in an MPI function.  Are you getting a core dump that
</span><br>
<span class="quotelev1">&gt; you can examine, or can you attach a debugger to see where exactly it
</span><br>
<span class="quotelev1">&gt; is failing?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 4, 2007, at 8:36 PM, Jim Kusznir wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi all:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I'm having trouble getting torque/maui working with OpenMPI.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Currently, I am getting hard failures when an MPI_Send is called.
</span><br>
<span class="quotelev2">&gt; &gt; When
</span><br>
<span class="quotelev2">&gt; &gt; run without qsub (no torque/maui), the mpi job runs fine, so its
</span><br>
<span class="quotelev2">&gt; &gt; something that
</span><br>
<span class="quotelev2">&gt; &gt; qsub/torque/maui is doing (I think).  Here's the error:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; libibverbs: Fatal: couldn't open sysfs class 'infiniband_verbs'.
</span><br>
<span class="quotelev2">&gt; &gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; ----
</span><br>
<span class="quotelev2">&gt; &gt; [0,1,0]: OpenIB on host localhost was unable to find any HCAs.
</span><br>
<span class="quotelev2">&gt; &gt; Another transport will be used instead, although this may result in
</span><br>
<span class="quotelev2">&gt; &gt; lower performance.
</span><br>
<span class="quotelev2">&gt; &gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; ----
</span><br>
<span class="quotelev2">&gt; &gt; Signal:8 info.si_errno:0(Success) si_code:1(FPE_INTDIV)
</span><br>
<span class="quotelev2">&gt; &gt; Failing at addr:0x40cc2d
</span><br>
<span class="quotelev2">&gt; &gt; [0] func:/usr/lib64/openmpi/libopal.so.0 [0x3ecfb21dc5]
</span><br>
<span class="quotelev2">&gt; &gt; [1] func:/lib64/tls/libpthread.so.0 [0x3ed040c4f0]
</span><br>
<span class="quotelev2">&gt; &gt; [2] func:repdig_mpi(sendSeeds+0x3d) [0x40cc2d]
</span><br>
<span class="quotelev2">&gt; &gt; [3] func:repdig_mpi(main+0x3b6) [0x40c026]
</span><br>
<span class="quotelev2">&gt; &gt; [4] func:/lib64/tls/libc.so.6(__libc_start_main+0xdb) [0x3ecfd1c3fb]
</span><br>
<span class="quotelev2">&gt; &gt; [5] func:repdig_mpi [0x4030ea]
</span><br>
<span class="quotelev2">&gt; &gt; *** End of error message ***
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I don't really know where to begin looking.  I know in the stack trace
</span><br>
<span class="quotelev2">&gt; &gt; the actual problem is occurring in #2 (sendSeeds), but that is a basic
</span><br>
<span class="quotelev2">&gt; &gt; MPI_Send(), and works when not using torque.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; My system (installed from Rocks 4.3) does not have infiniband; I think
</span><br>
<span class="quotelev2">&gt; &gt; I just figured out how to disable it; in any case, the same warning
</span><br>
<span class="quotelev2">&gt; &gt; shows up when not running it through torque, and the job runs
</span><br>
<span class="quotelev2">&gt; &gt; successfully.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thoughts/suggestions?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks!
</span><br>
<span class="quotelev2">&gt; &gt; --Jim
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4190.php">Dirk Eddelbuettel: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<li><strong>Previous message:</strong> <a href="4188.php">Josh Hursey: "Re: [OMPI users] mca_oob_tcp_peer_try_connect error when checkpoint and restart."</a>
<li><strong>In reply to:</strong> <a href="4186.php">Jeff Squyres: "Re: [OMPI users] OpenMPI and torque/maui -&gt; crashing on MPI_Send()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4198.php">Jeff Squyres: "Re: [OMPI users] OpenMPI and torque/maui -&gt; crashing on MPI_Send()"</a>
<li><strong>Reply:</strong> <a href="4198.php">Jeff Squyres: "Re: [OMPI users] OpenMPI and torque/maui -&gt; crashing on MPI_Send()"</a>
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
