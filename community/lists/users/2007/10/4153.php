<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Oct  4 14:36:36 2007" -->
<!-- isoreceived="20071004183636" -->
<!-- sent="Thu, 4 Oct 2007 11:36:32 -0700" -->
<!-- isosent="20071004183632" -->
<!-- name="Jim Kusznir" -->
<!-- email="jkusznir_at_[hidden]" -->
<!-- subject="[OMPI users] OpenMPI and torque/maui -&amp;gt; crashing on MPI_Send()" -->
<!-- id="df8c8a6d0710041136g44fbbd88i9482095f6813ebea_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Date:</strong> 2007-10-04 14:36:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4154.php">Jinhui Qin: "[OMPI users] problem in runing MPI job through XGrid"</a>
<li><strong>Previous message:</strong> <a href="4152.php">Dino Rossegger: "Re: [OMPI users] mpirun ERROR: The daemon exited unexpectedly with status 255."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4186.php">Jeff Squyres: "Re: [OMPI users] OpenMPI and torque/maui -&gt; crashing on MPI_Send()"</a>
<li><strong>Reply:</strong> <a href="4186.php">Jeff Squyres: "Re: [OMPI users] OpenMPI and torque/maui -&gt; crashing on MPI_Send()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all:
<br>
<p>I'm having trouble getting torque/maui working with OpenMPI.
<br>
<p>Currently, I am getting hard failures when an MPI_Send is called.  When
<br>
run without qsub (no torque/maui), the mpi job runs fine, so its something that
<br>
qsub/torque/maui is doing (I think).  Here's the error:
<br>
<p>libibverbs: Fatal: couldn't open sysfs class 'infiniband_verbs'.
<br>
--------------------------------------------------------------------------
<br>
[0,1,0]: OpenIB on host localhost was unable to find any HCAs.
<br>
Another transport will be used instead, although this may result in
<br>
lower performance.
<br>
--------------------------------------------------------------------------
<br>
Signal:8 info.si_errno:0(Success) si_code:1(FPE_INTDIV)
<br>
Failing at addr:0x40cc2d
<br>
[0] func:/usr/lib64/openmpi/libopal.so.0 [0x3ecfb21dc5]
<br>
[1] func:/lib64/tls/libpthread.so.0 [0x3ed040c4f0]
<br>
[2] func:repdig_mpi(sendSeeds+0x3d) [0x40cc2d]
<br>
[3] func:repdig_mpi(main+0x3b6) [0x40c026]
<br>
[4] func:/lib64/tls/libc.so.6(__libc_start_main+0xdb) [0x3ecfd1c3fb]
<br>
[5] func:repdig_mpi [0x4030ea]
<br>
*** End of error message ***
<br>
<p>I don't really know where to begin looking.  I know in the stack trace
<br>
the actual problem is occurring in #2 (sendSeeds), but that is a basic
<br>
MPI_Send(), and works when not using torque.
<br>
<p>My system (installed from Rocks 4.3) does not have infiniband; I think
<br>
I just figured out how to disable it; in any case, the same warning
<br>
shows up when not running it through torque, and the job runs
<br>
successfully.
<br>
<p>Thoughts/suggestions?
<br>
<p>Thanks!
<br>
--Jim
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4154.php">Jinhui Qin: "[OMPI users] problem in runing MPI job through XGrid"</a>
<li><strong>Previous message:</strong> <a href="4152.php">Dino Rossegger: "Re: [OMPI users] mpirun ERROR: The daemon exited unexpectedly with status 255."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4186.php">Jeff Squyres: "Re: [OMPI users] OpenMPI and torque/maui -&gt; crashing on MPI_Send()"</a>
<li><strong>Reply:</strong> <a href="4186.php">Jeff Squyres: "Re: [OMPI users] OpenMPI and torque/maui -&gt; crashing on MPI_Send()"</a>
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
