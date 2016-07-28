<?
$subject_val = "Re: [OMPI users] Question about restart";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 22 16:10:11 2009" -->
<!-- isoreceived="20090422201011" -->
<!-- sent="Wed, 22 Apr 2009 15:09:52 -0500" -->
<!-- isosent="20090422200952" -->
<!-- name="Yaakoub El Khamra" -->
<!-- email="yye00_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Question about restart" -->
<!-- id="47a831090904221309n67923a73x7a72b19df0271446_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="47a831090904221213p58a0fa8cmea3cad8bc8b89872_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Question about restart<br>
<strong>From:</strong> Yaakoub El Khamra (<em>yye00_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-22 16:09:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9035.php">Jeff Squyres: "Re: [OMPI users] few Problems"</a>
<li><strong>Previous message:</strong> <a href="9033.php">Luis Vitorio Cargnini: "Re: [OMPI users] few Problems"</a>
<li><strong>In reply to:</strong> <a href="9032.php">Yaakoub El Khamra: "[OMPI users] Question about restart"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9097.php">Josh Hursey: "Re: [OMPI users] Question about restart"</a>
<li><strong>Reply:</strong> <a href="9097.php">Josh Hursey: "Re: [OMPI users] Question about restart"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Incidentally, if I add a check for the value base-&gt;sig.sh_old, that it
<br>
is not NULL, and recompile, everything works fine. I am concerned this
<br>
is just fixing a symptom rather than the root of the problem.
<br>
<p>if(base-&gt;sig.sh_old != NULL)
<br>
&nbsp;&nbsp;free(base-&gt;sig.sh_old);
<br>
<p>is what I used.
<br>
<p>Regards
<br>
Yaakoub El Khamra
<br>
<p><p><p><p>On Wed, Apr 22, 2009 at 2:13 PM, Yaakoub El Khamra
<br>
&lt;yye00_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Greetings
</span><br>
<span class="quotelev1">&gt; I am trying to get the checkpoint/restart to work on a single machine
</span><br>
<span class="quotelev1">&gt; with openmpi 1.3 (also tried an svn check-out) and ran into a few
</span><br>
<span class="quotelev1">&gt; problems. I am guessing I am doing something wrong, and would
</span><br>
<span class="quotelev1">&gt; appreciate some help.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I built openmpi with:
</span><br>
<span class="quotelev1">&gt; &#160;./configure --prefi=/usr/local/openmpi-1.3/ --enable-picky
</span><br>
<span class="quotelev1">&gt; --enable-debug --enable-mpi-f77 --enable-mpi-f90 --enable-mpi-profile
</span><br>
<span class="quotelev1">&gt; --enable-mpi-cxx --enable-pretty-print-stacktrace --enable-binaries
</span><br>
<span class="quotelev1">&gt; --enable-trace --enable-static=yes --enable-debug
</span><br>
<span class="quotelev1">&gt; --with-devel-headers=1 --with-mpi-param-check=always --with-ft=cr
</span><br>
<span class="quotelev1">&gt; --enable-ft-thread --with-blcr=/usr/local/blcr/
</span><br>
<span class="quotelev1">&gt; --with-blcr-libdir=/usr/local/blcr/lib --enable-mpi-threads=yes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am using blcr 0.8.1 configured with:
</span><br>
<span class="quotelev1">&gt; &#160;./configure --prefix=/usr/local/blcr/ --enable-debug=yes
</span><br>
<span class="quotelev1">&gt; --enable-libcr-tracing=yes --enable-kernel-tracing=yes
</span><br>
<span class="quotelev1">&gt; --enable-testsuite=yes --enable-all-static=yes --enable-static=yes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Checkpoint works fine, without any problems, I run with:
</span><br>
<span class="quotelev1">&gt; &#160;mpirun &#160;-np 2 -mca ft_cr_enabled 1 -mca ompi_cr_verbose 1 &#160;-am
</span><br>
<span class="quotelev1">&gt; ft-enable-cr -mca crs_verbose 1 -mca crs_blcr_verbose 1 &#160;matmultf.exe
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am able to checkpoint without any problems using ompi-checkpoint
</span><br>
<span class="quotelev1">&gt; --status --term &lt;pid&gt;
</span><br>
<span class="quotelev1">&gt; but when I try to restart, I get the following error:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [yye00_at_localhost FTOpenMPI]$ ompi-restart -v &#160;ompi_global_snapshot_23858.ckpt
</span><br>
<span class="quotelev1">&gt; [localhost.localdomain:24394] Checking for the existence of
</span><br>
<span class="quotelev1">&gt; (/home/yye00/ompi_global_snapshot_23858.ckpt)
</span><br>
<span class="quotelev1">&gt; [localhost.localdomain:24394] Restarting from file
</span><br>
<span class="quotelev1">&gt; (ompi_global_snapshot_23858.ckpt)
</span><br>
<span class="quotelev1">&gt; [localhost.localdomain:24394] &#160; &#160;Exec in self
</span><br>
<span class="quotelev1">&gt; malloc debug: Invalid free (signal.c, 304)
</span><br>
<span class="quotelev1">&gt; malloc debug: Invalid free (signal.c, 304)
</span><br>
<span class="quotelev1">&gt; [localhost:23860] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [localhost:23860] Signal: Bus error (7)
</span><br>
<span class="quotelev1">&gt; [localhost:23860] Signal code: &#160;(2)
</span><br>
<span class="quotelev1">&gt; [localhost:23860] Failing at address: 0x7fcbb737ef88
</span><br>
<span class="quotelev1">&gt; [localhost:23860] [ 0] /lib64/libpthread.so.0 [0x32d720f0f0]
</span><br>
<span class="quotelev1">&gt; [localhost:23860] [ 1] /usr/local/openmpi-1.3_svn/lib/libmpi.so.0
</span><br>
<span class="quotelev1">&gt; [0x7fcbbd1eccae]
</span><br>
<span class="quotelev1">&gt; [localhost:23860] [ 2] /usr/local/openmpi-1.3_svn/lib/libmpi.so.0
</span><br>
<span class="quotelev1">&gt; [0x7fcbbd1ed5ba]
</span><br>
<span class="quotelev1">&gt; [localhost:23860] [ 3] /usr/local/openmpi-1.3_svn/lib/libmpi.so.0
</span><br>
<span class="quotelev1">&gt; [0x7fcbbd1ed745]
</span><br>
<span class="quotelev1">&gt; [localhost:23860] [ 4]
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3_svn/lib/libopen-pal.so.0(opal_progress+0xbc)
</span><br>
<span class="quotelev1">&gt; [0x7fcbbcba2aa0]
</span><br>
<span class="quotelev1">&gt; [localhost:23860] [ 5] /usr/local/openmpi-1.3_svn/lib/libopen-pal.so.0
</span><br>
<span class="quotelev1">&gt; [0x7fcbbcbdead1]
</span><br>
<span class="quotelev1">&gt; [localhost:23860] [ 6] /usr/local/openmpi-1.3_svn/lib/libopen-pal.so.0
</span><br>
<span class="quotelev1">&gt; [0x7fcbbcbde8e2]
</span><br>
<span class="quotelev1">&gt; [localhost:23860] [ 7]
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3_svn/lib/libopen-pal.so.0(opal_crs_blcr_checkpoint+0x19c)
</span><br>
<span class="quotelev1">&gt; [0x7fcbbcbde17c]
</span><br>
<span class="quotelev1">&gt; [localhost:23860] [ 8]
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3_svn/lib/libopen-pal.so.0(opal_cr_inc_core+0xb2)
</span><br>
<span class="quotelev1">&gt; [0x7fcbbcba45e9]
</span><br>
<span class="quotelev1">&gt; [localhost:23860] [ 9] /usr/local/openmpi-1.3_svn/lib/libopen-rte.so.0
</span><br>
<span class="quotelev1">&gt; [0x7fcbbced1d9d]
</span><br>
<span class="quotelev1">&gt; [localhost:23860] [10]
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.3_svn/lib/libopen-pal.so.0(opal_cr_test_if_checkpoint_ready+0x11b)
</span><br>
<span class="quotelev1">&gt; [0x7fcbbcba4509]
</span><br>
<span class="quotelev1">&gt; [localhost:23860] [11] /usr/local/openmpi-1.3_svn/lib/libopen-pal.so.0
</span><br>
<span class="quotelev1">&gt; [0x7fcbbcba4bc2]
</span><br>
<span class="quotelev1">&gt; [localhost:23860] [12] /lib64/libpthread.so.0 [0x32d72073da]
</span><br>
<span class="quotelev1">&gt; [localhost:23860] [13] /lib64/libc.so.6(clone+0x6d) [0x32d66e62bd]
</span><br>
<span class="quotelev1">&gt; [localhost:23860] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun noticed that process rank 1 with PID 24396 on node
</span><br>
<span class="quotelev1">&gt; localhost.localdomain exited on signal 7 (Bus error).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; running strace on the ompi-restart did not provide any useful
</span><br>
<span class="quotelev1">&gt; information. Any suggestions are greatly appreciated. Incidentally,
</span><br>
<span class="quotelev1">&gt; looking at the signal.c line 304, it is a deallocation subroutine in
</span><br>
<span class="quotelev1">&gt; opal, it is the evsignal_dealloc subroutine, the actual line is the
</span><br>
<span class="quotelev1">&gt; &quot;free(base-&gt;sig.sh_old);&quot; line . I am about to add debug statements to
</span><br>
<span class="quotelev1">&gt; that subroutine and see if I can get further information, but was
</span><br>
<span class="quotelev1">&gt; hoping the problem is more user-related than code-related.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards
</span><br>
<span class="quotelev1">&gt; Yaakoub El Khamra
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9035.php">Jeff Squyres: "Re: [OMPI users] few Problems"</a>
<li><strong>Previous message:</strong> <a href="9033.php">Luis Vitorio Cargnini: "Re: [OMPI users] few Problems"</a>
<li><strong>In reply to:</strong> <a href="9032.php">Yaakoub El Khamra: "[OMPI users] Question about restart"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9097.php">Josh Hursey: "Re: [OMPI users] Question about restart"</a>
<li><strong>Reply:</strong> <a href="9097.php">Josh Hursey: "Re: [OMPI users] Question about restart"</a>
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
