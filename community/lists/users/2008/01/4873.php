<?
$subject_val = "Re: [OMPI users] Occasional mpirun hang on completion";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 24 03:02:06 2008" -->
<!-- isoreceived="20080124080206" -->
<!-- sent="Thu, 24 Jan 2008 03:01:40 -0500" -->
<!-- isosent="20080124080140" -->
<!-- name="Barry Rountree" -->
<!-- email="rountree_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Occasional mpirun hang on completion" -->
<!-- id="20080124080140.GS12062_at_eponymous" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="64A7543C-57A6-47EF-8E6C-D5274FDCB3A8_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Occasional mpirun hang on completion<br>
<strong>From:</strong> Barry Rountree (<em>rountree_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-24 03:01:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4874.php">Barry Rountree: "Re: [OMPI users] Occasional mpirun hang on completion"</a>
<li><strong>Previous message:</strong> <a href="4872.php">Michael Alexander: "[OMPI users] CfP 3rd Workshop on Virtualization in HPC Cluster and Grid Computing Environments (VHPC'08)"</a>
<li><strong>In reply to:</strong> <a href="4854.php">Jeff Squyres: "Re: [OMPI users] Occasional mpirun hang on completion"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4874.php">Barry Rountree: "Re: [OMPI users] Occasional mpirun hang on completion"</a>
<li><strong>Reply:</strong> <a href="4874.php">Barry Rountree: "Re: [OMPI users] Occasional mpirun hang on completion"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, Jan 18, 2008 at 08:33:10PM -0500, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Barry --
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Could you check what apps are still running when it hangs?  I.e., I  
</span><br>
<span class="quotelev1">&gt; assume that all the uptime's are dead; are all the orted's dead on the  
</span><br>
<span class="quotelev1">&gt; remote nodes?  (orted = our helper process that is launched on the  
</span><br>
<span class="quotelev1">&gt; remote nodes to exert process control, funnel I/O back and forth to  
</span><br>
<span class="quotelev1">&gt; mpirun, etc.)
</span><br>
<p>Here's the stack trace of the orted process on node 01.  The &quot;uname&quot; 
<br>
process was long gone (and had sent its output back with no difficulty).
<br>
<p>============
<br>
Stopping process localhost:5321 (/osr/users/rountree/ompi-1.2.4_intel_threaded_debug/bin/orted).
<br>
Thread received signal INT
<br>
stopped at [&lt;opaque&gt; pthread_cond_wait@@GLIBC_2.3.2(...) 0x00002aaaab67a766]
<br>
(idb) where
<br>
<span class="quotelev1">&gt;0  0x00002aaaab67a766 in pthread_cond_wait@@GLIBC_2.3.2(...) in /lib64/libpthread-2.4.so
</span><br>
#1  0x0000000000401fef in opal_condition_wait(c=0x5075c0, m=0x507580) &quot;../../../opal/threads/condition.h&quot;:64
<br>
#2  0x0000000000403000 in main(argc=17, argv=0x7ffffd82cd38) &quot;orted.c&quot;:525
<br>
#3  0x00002aaaab7a6e54 in __libc_start_main(...) in /lib64/libc-2.4.so
<br>
#4  0x0000000000401c19 in _start(...) in /osr/users/rountree/ompi-1.2.4_intel_threaded_debug/bin/orted
<br>
============
<br>
<p>The mpirun process on the root node isn't quite as useful.
<br>
<p><p>============
<br>
Stopping process localhost:29856 (/osr/users/rountree/ompi-1.2.4_intel_threaded_debug/bin/orterun).
<br>
Thread received signal INT
<br>
stopped at [&lt;opaque&gt; poll(...) 0x00000039ef2c3806]
<br>
(idb) where
<br>
<span class="quotelev1">&gt;0  0x00000039ef2c3806 in poll(...) in /lib64/libc-2.4.so
</span><br>
#1  0x0000000040a000c0
<br>
============
<br>
<p>Let me know what other information would be helpful.  
<br>
<p>Best,
<br>
<p>Barry
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If any of the orted's are still running, can you connect to them with  
</span><br>
<span class="quotelev1">&gt; gdb and get a backtrace to see where they are hung?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Likewise, can you connect to mpirun with gdb and get a backtrace of  
</span><br>
<span class="quotelev1">&gt; where it's hung?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ralph, the main ORTE developer, is pretty sure that it's stuck in the  
</span><br>
<span class="quotelev1">&gt; IO flushing routines that are executed at the end of time (look for  
</span><br>
<span class="quotelev1">&gt; function names like iof_flush or similar).  We thought we had fixed  
</span><br>
<span class="quotelev1">&gt; all of those on the 1.2 branch, but perhaps there's some other weird  
</span><br>
<span class="quotelev1">&gt; race condition happening that doesn't happen on our test machines...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jan 13, 2008, at 10:17 AM, Barry Rountree wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Sun, Jan 13, 2008 at 09:54:47AM -0500, Barry Rountree wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Hello,
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; The following command
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; mpirun -np 2 -hostfile ~/hostfile uptime
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; will occasionally hang after completing.  The expected output  
</span><br>
<span class="quotelev2">&gt; &gt; appears on
</span><br>
<span class="quotelev3">&gt; &gt; &gt; the screen, but mpirun needs a SIGKILL to return to the console.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; This has been verified with OpenMPI v1.2.4 compiled with both icc  
</span><br>
<span class="quotelev2">&gt; &gt; 9.1
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 20061101 (aka 9.1.045) and gcc 4.1.0 20060304 (aka Red Hat  
</span><br>
<span class="quotelev2">&gt; &gt; 4.1.0-3).  I
</span><br>
<span class="quotelev3">&gt; &gt; &gt; have also tried earlier versions of OpenMPI and found the same bug
</span><br>
<span class="quotelev3">&gt; &gt; &gt; (1.1.2 and 1.2.2).
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Using  -verbose didn't provide any additional output.  I'm happy  
</span><br>
<span class="quotelev2">&gt; &gt; to help
</span><br>
<span class="quotelev3">&gt; &gt; &gt; tracking down whatever is causing this.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; A couple more data points:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; mpirun -np 4 -hostfile ~/hostfile --no-daemonize uptime
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; hung twice over 100 runs.  Without the --no-daemonize, the command  
</span><br>
<span class="quotelev2">&gt; &gt; hung
</span><br>
<span class="quotelev2">&gt; &gt; 16 times over 100 runs.  (This is using the version compiled with  
</span><br>
<span class="quotelev2">&gt; &gt; icc.)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Barry
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Many thanks,
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Barry Rountree
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Ph.D. Candidate, Computer Science
</span><br>
<span class="quotelev3">&gt; &gt; &gt; University of Georgia
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="4874.php">Barry Rountree: "Re: [OMPI users] Occasional mpirun hang on completion"</a>
<li><strong>Previous message:</strong> <a href="4872.php">Michael Alexander: "[OMPI users] CfP 3rd Workshop on Virtualization in HPC Cluster and Grid Computing Environments (VHPC'08)"</a>
<li><strong>In reply to:</strong> <a href="4854.php">Jeff Squyres: "Re: [OMPI users] Occasional mpirun hang on completion"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4874.php">Barry Rountree: "Re: [OMPI users] Occasional mpirun hang on completion"</a>
<li><strong>Reply:</strong> <a href="4874.php">Barry Rountree: "Re: [OMPI users] Occasional mpirun hang on completion"</a>
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
