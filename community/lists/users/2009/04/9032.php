<?
$subject_val = "[OMPI users] Question about restart";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 22 15:14:00 2009" -->
<!-- isoreceived="20090422191400" -->
<!-- sent="Wed, 22 Apr 2009 14:13:41 -0500" -->
<!-- isosent="20090422191341" -->
<!-- name="Yaakoub El Khamra" -->
<!-- email="yye00_at_[hidden]" -->
<!-- subject="[OMPI users] Question about restart" -->
<!-- id="47a831090904221213p58a0fa8cmea3cad8bc8b89872_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Question about restart<br>
<strong>From:</strong> Yaakoub El Khamra (<em>yye00_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-22 15:13:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9033.php">Luis Vitorio Cargnini: "Re: [OMPI users] few Problems"</a>
<li><strong>Previous message:</strong> <a href="9031.php">Jeff Squyres: "Re: [OMPI users] Problems with SSH"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9034.php">Yaakoub El Khamra: "Re: [OMPI users] Question about restart"</a>
<li><strong>Reply:</strong> <a href="9034.php">Yaakoub El Khamra: "Re: [OMPI users] Question about restart"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Greetings
<br>
I am trying to get the checkpoint/restart to work on a single machine
<br>
with openmpi 1.3 (also tried an svn check-out) and ran into a few
<br>
problems. I am guessing I am doing something wrong, and would
<br>
appreciate some help.
<br>
<p>I built openmpi with:
<br>
&nbsp;./configure --prefi=/usr/local/openmpi-1.3/ --enable-picky
<br>
--enable-debug --enable-mpi-f77 --enable-mpi-f90 --enable-mpi-profile
<br>
--enable-mpi-cxx --enable-pretty-print-stacktrace --enable-binaries
<br>
--enable-trace --enable-static=yes --enable-debug
<br>
--with-devel-headers=1 --with-mpi-param-check=always --with-ft=cr
<br>
--enable-ft-thread --with-blcr=/usr/local/blcr/
<br>
--with-blcr-libdir=/usr/local/blcr/lib --enable-mpi-threads=yes
<br>
<p>I am using blcr 0.8.1 configured with:
<br>
&nbsp;./configure --prefix=/usr/local/blcr/ --enable-debug=yes
<br>
--enable-libcr-tracing=yes --enable-kernel-tracing=yes
<br>
--enable-testsuite=yes --enable-all-static=yes --enable-static=yes
<br>
<p>Checkpoint works fine, without any problems, I run with:
<br>
&nbsp;mpirun  -np 2 -mca ft_cr_enabled 1 -mca ompi_cr_verbose 1  -am
<br>
ft-enable-cr -mca crs_verbose 1 -mca crs_blcr_verbose 1  matmultf.exe
<br>
<p>I am able to checkpoint without any problems using ompi-checkpoint
<br>
--status --term &lt;pid&gt;
<br>
but when I try to restart, I get the following error:
<br>
<p>[yye00_at_localhost FTOpenMPI]$ ompi-restart -v  ompi_global_snapshot_23858.ckpt
<br>
[localhost.localdomain:24394] Checking for the existence of
<br>
(/home/yye00/ompi_global_snapshot_23858.ckpt)
<br>
[localhost.localdomain:24394] Restarting from file
<br>
(ompi_global_snapshot_23858.ckpt)
<br>
[localhost.localdomain:24394] 	 Exec in self
<br>
malloc debug: Invalid free (signal.c, 304)
<br>
malloc debug: Invalid free (signal.c, 304)
<br>
[localhost:23860] *** Process received signal ***
<br>
[localhost:23860] Signal: Bus error (7)
<br>
[localhost:23860] Signal code:  (2)
<br>
[localhost:23860] Failing at address: 0x7fcbb737ef88
<br>
[localhost:23860] [ 0] /lib64/libpthread.so.0 [0x32d720f0f0]
<br>
[localhost:23860] [ 1] /usr/local/openmpi-1.3_svn/lib/libmpi.so.0
<br>
[0x7fcbbd1eccae]
<br>
[localhost:23860] [ 2] /usr/local/openmpi-1.3_svn/lib/libmpi.so.0
<br>
[0x7fcbbd1ed5ba]
<br>
[localhost:23860] [ 3] /usr/local/openmpi-1.3_svn/lib/libmpi.so.0
<br>
[0x7fcbbd1ed745]
<br>
[localhost:23860] [ 4]
<br>
/usr/local/openmpi-1.3_svn/lib/libopen-pal.so.0(opal_progress+0xbc)
<br>
[0x7fcbbcba2aa0]
<br>
[localhost:23860] [ 5] /usr/local/openmpi-1.3_svn/lib/libopen-pal.so.0
<br>
[0x7fcbbcbdead1]
<br>
[localhost:23860] [ 6] /usr/local/openmpi-1.3_svn/lib/libopen-pal.so.0
<br>
[0x7fcbbcbde8e2]
<br>
[localhost:23860] [ 7]
<br>
/usr/local/openmpi-1.3_svn/lib/libopen-pal.so.0(opal_crs_blcr_checkpoint+0x19c)
<br>
[0x7fcbbcbde17c]
<br>
[localhost:23860] [ 8]
<br>
/usr/local/openmpi-1.3_svn/lib/libopen-pal.so.0(opal_cr_inc_core+0xb2)
<br>
[0x7fcbbcba45e9]
<br>
[localhost:23860] [ 9] /usr/local/openmpi-1.3_svn/lib/libopen-rte.so.0
<br>
[0x7fcbbced1d9d]
<br>
[localhost:23860] [10]
<br>
/usr/local/openmpi-1.3_svn/lib/libopen-pal.so.0(opal_cr_test_if_checkpoint_ready+0x11b)
<br>
[0x7fcbbcba4509]
<br>
[localhost:23860] [11] /usr/local/openmpi-1.3_svn/lib/libopen-pal.so.0
<br>
[0x7fcbbcba4bc2]
<br>
[localhost:23860] [12] /lib64/libpthread.so.0 [0x32d72073da]
<br>
[localhost:23860] [13] /lib64/libc.so.6(clone+0x6d) [0x32d66e62bd]
<br>
[localhost:23860] *** End of error message ***
<br>
--------------------------------------------------------------------------
<br>
mpirun noticed that process rank 1 with PID 24396 on node
<br>
localhost.localdomain exited on signal 7 (Bus error).
<br>
--------------------------------------------------------------------------
<br>
<p>running strace on the ompi-restart did not provide any useful
<br>
information. Any suggestions are greatly appreciated. Incidentally,
<br>
looking at the signal.c line 304, it is a deallocation subroutine in
<br>
opal, it is the evsignal_dealloc subroutine, the actual line is the
<br>
&quot;free(base-&gt;sig.sh_old);&quot; line . I am about to add debug statements to
<br>
that subroutine and see if I can get further information, but was
<br>
hoping the problem is more user-related than code-related.
<br>
<p><p>Regards
<br>
Yaakoub El Khamra
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9033.php">Luis Vitorio Cargnini: "Re: [OMPI users] few Problems"</a>
<li><strong>Previous message:</strong> <a href="9031.php">Jeff Squyres: "Re: [OMPI users] Problems with SSH"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9034.php">Yaakoub El Khamra: "Re: [OMPI users] Question about restart"</a>
<li><strong>Reply:</strong> <a href="9034.php">Yaakoub El Khamra: "Re: [OMPI users] Question about restart"</a>
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
