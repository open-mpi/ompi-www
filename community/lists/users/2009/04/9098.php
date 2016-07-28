<?
$subject_val = "Re: [OMPI users] Question about restart";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 27 13:08:03 2009" -->
<!-- isoreceived="20090427170803" -->
<!-- sent="Mon, 27 Apr 2009 13:07:59 -0400" -->
<!-- isosent="20090427170759" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Question about restart" -->
<!-- id="48D9F250-9F27-4A45-A65B-4FE552777581_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="026D4584-E9D2-4148-AAF6-00C21925128E_at_open-mpi.org" -->
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
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-27 13:07:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9099.php">Serge: "Re: [OMPI users] Upgrade from Open MPI 1.2 to 1.3"</a>
<li><strong>Previous message:</strong> <a href="9097.php">Josh Hursey: "Re: [OMPI users] Question about restart"</a>
<li><strong>In reply to:</strong> <a href="9097.php">Josh Hursey: "Re: [OMPI users] Question about restart"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for the patch. I applied a version of it to the Open MPI trunk  
<br>
(r21079) and started the process of moving it to the v1.3 release  
<br>
series:
<br>
&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/ticket/1898">https://svn.open-mpi.org/trac/ompi/ticket/1898</a>
<br>
<p>Thanks,
<br>
Josh
<br>
<p>On Apr 27, 2009, at 9:53 AM, Josh Hursey wrote:
<br>
<p><span class="quotelev1">&gt; Thanks for the bug report.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am having a difficult time reproducing the error. Are you running  
</span><br>
<span class="quotelev1">&gt; on a single machine using shared memory or across multiple machine  
</span><br>
<span class="quotelev1">&gt; using a high speed network?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Based on your bug report, my suspicion is that an event is not being  
</span><br>
<span class="quotelev1">&gt; properly de-registered from the event engine. Typically this means,  
</span><br>
<span class="quotelev1">&gt; for C/R, that the finalization routine in one of the BTLs  
</span><br>
<span class="quotelev1">&gt; (interconnect drivers) is missing something. The patch you propose  
</span><br>
<span class="quotelev1">&gt; seems fine, but I agree that it may be masking another problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'll keep digging and let you know if I find something. In the mean  
</span><br>
<span class="quotelev1">&gt; time I will attempt to push in a patch to protect the free() that  
</span><br>
<span class="quotelev1">&gt; cited.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; Josh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 22, 2009, at 4:09 PM, Yaakoub El Khamra wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Incidentally, if I add a check for the value base-&gt;sig.sh_old, that  
</span><br>
<span class="quotelev2">&gt;&gt; it
</span><br>
<span class="quotelev2">&gt;&gt; is not NULL, and recompile, everything works fine. I am concerned  
</span><br>
<span class="quotelev2">&gt;&gt; this
</span><br>
<span class="quotelev2">&gt;&gt; is just fixing a symptom rather than the root of the problem.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; if(base-&gt;sig.sh_old != NULL)
</span><br>
<span class="quotelev2">&gt;&gt; free(base-&gt;sig.sh_old);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; is what I used.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Regards
</span><br>
<span class="quotelev2">&gt;&gt; Yaakoub El Khamra
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Wed, Apr 22, 2009 at 2:13 PM, Yaakoub El Khamra
</span><br>
<span class="quotelev2">&gt;&gt; &lt;yye00_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Greetings
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am trying to get the checkpoint/restart to work on a single  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; machine
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with openmpi 1.3 (also tried an svn check-out) and ran into a few
</span><br>
<span class="quotelev3">&gt;&gt;&gt; problems. I am guessing I am doing something wrong, and would
</span><br>
<span class="quotelev3">&gt;&gt;&gt; appreciate some help.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I built openmpi with:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ./configure --prefi=/usr/local/openmpi-1.3/ --enable-picky
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --enable-debug --enable-mpi-f77 --enable-mpi-f90 --enable-mpi- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; profile
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --enable-mpi-cxx --enable-pretty-print-stacktrace --enable-binaries
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --enable-trace --enable-static=yes --enable-debug
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --with-devel-headers=1 --with-mpi-param-check=always --with-ft=cr
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --enable-ft-thread --with-blcr=/usr/local/blcr/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --with-blcr-libdir=/usr/local/blcr/lib --enable-mpi-threads=yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am using blcr 0.8.1 configured with:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ./configure --prefix=/usr/local/blcr/ --enable-debug=yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --enable-libcr-tracing=yes --enable-kernel-tracing=yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --enable-testsuite=yes --enable-all-static=yes --enable-static=yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Checkpoint works fine, without any problems, I run with:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun  -np 2 -mca ft_cr_enabled 1 -mca ompi_cr_verbose 1  -am
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ft-enable-cr -mca crs_verbose 1 -mca crs_blcr_verbose 1   
</span><br>
<span class="quotelev3">&gt;&gt;&gt; matmultf.exe
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am able to checkpoint without any problems using ompi-checkpoint
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --status --term &lt;pid&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; but when I try to restart, I get the following error:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [yye00_at_localhost FTOpenMPI]$ ompi-restart -v   
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_global_snapshot_23858.ckpt
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [localhost.localdomain:24394] Checking for the existence of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (/home/yye00/ompi_global_snapshot_23858.ckpt)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [localhost.localdomain:24394] Restarting from file
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (ompi_global_snapshot_23858.ckpt)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [localhost.localdomain:24394]    Exec in self
</span><br>
<span class="quotelev3">&gt;&gt;&gt; malloc debug: Invalid free (signal.c, 304)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; malloc debug: Invalid free (signal.c, 304)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [localhost:23860] *** Process received signal ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [localhost:23860] Signal: Bus error (7)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [localhost:23860] Signal code:  (2)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [localhost:23860] Failing at address: 0x7fcbb737ef88
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [localhost:23860] [ 0] /lib64/libpthread.so.0 [0x32d720f0f0]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [localhost:23860] [ 1] /usr/local/openmpi-1.3_svn/lib/libmpi.so.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [0x7fcbbd1eccae]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [localhost:23860] [ 2] /usr/local/openmpi-1.3_svn/lib/libmpi.so.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [0x7fcbbd1ed5ba]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [localhost:23860] [ 3] /usr/local/openmpi-1.3_svn/lib/libmpi.so.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [0x7fcbbd1ed745]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [localhost:23860] [ 4]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/local/openmpi-1.3_svn/lib/libopen-pal.so.0(opal_progress+0xbc)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [0x7fcbbcba2aa0]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [localhost:23860] [ 5] /usr/local/openmpi-1.3_svn/lib/libopen- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pal.so.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [0x7fcbbcbdead1]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [localhost:23860] [ 6] /usr/local/openmpi-1.3_svn/lib/libopen- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pal.so.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [0x7fcbbcbde8e2]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [localhost:23860] [ 7]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/local/openmpi-1.3_svn/lib/libopen-pal.so. 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0(opal_crs_blcr_checkpoint+0x19c)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [0x7fcbbcbde17c]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [localhost:23860] [ 8]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/local/openmpi-1.3_svn/lib/libopen-pal.so.0(opal_cr_inc_core 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +0xb2)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [0x7fcbbcba45e9]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [localhost:23860] [ 9] /usr/local/openmpi-1.3_svn/lib/libopen- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rte.so.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [0x7fcbbced1d9d]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [localhost:23860] [10]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/local/openmpi-1.3_svn/lib/libopen-pal.so. 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0(opal_cr_test_if_checkpoint_ready+0x11b)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [0x7fcbbcba4509]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [localhost:23860] [11] /usr/local/openmpi-1.3_svn/lib/libopen- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pal.so.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [0x7fcbbcba4bc2]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [localhost:23860] [12] /lib64/libpthread.so.0 [0x32d72073da]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [localhost:23860] [13] /lib64/libc.so.6(clone+0x6d) [0x32d66e62bd]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [localhost:23860] *** End of error message ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun noticed that process rank 1 with PID 24396 on node
</span><br>
<span class="quotelev3">&gt;&gt;&gt; localhost.localdomain exited on signal 7 (Bus error).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; running strace on the ompi-restart did not provide any useful
</span><br>
<span class="quotelev3">&gt;&gt;&gt; information. Any suggestions are greatly appreciated. Incidentally,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; looking at the signal.c line 304, it is a deallocation subroutine in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; opal, it is the evsignal_dealloc subroutine, the actual line is the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;free(base-&gt;sig.sh_old);&quot; line . I am about to add debug  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; statements to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that subroutine and see if I can get further information, but was
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hoping the problem is more user-related than code-related.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Regards
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Yaakoub El Khamra
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9099.php">Serge: "Re: [OMPI users] Upgrade from Open MPI 1.2 to 1.3"</a>
<li><strong>Previous message:</strong> <a href="9097.php">Josh Hursey: "Re: [OMPI users] Question about restart"</a>
<li><strong>In reply to:</strong> <a href="9097.php">Josh Hursey: "Re: [OMPI users] Question about restart"</a>
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
