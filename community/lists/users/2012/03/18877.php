<?
$subject_val = "Re: [OMPI users] Segmentation fault when checkpointing";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 29 15:26:26 2012" -->
<!-- isoreceived="20120329192626" -->
<!-- sent="Thu, 29 Mar 2012 19:26:20 +0000" -->
<!-- isosent="20120329192620" -->
<!-- name="Linton, Tom" -->
<!-- email="tom.linton_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Segmentation fault when checkpointing" -->
<!-- id="49CF7D2C430CF64F8CD8846494DE652F0E33B3A8_at_ORSMSX102.amr.corp.intel.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAANzjEn28aL+0NnTw203Pa9mxkJvvG6A2oHS61hNjhpyjzNneg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Segmentation fault when checkpointing<br>
<strong>From:</strong> Linton, Tom (<em>tom.linton_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-29 15:26:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18878.php">Steffen Christgau: "[OMPI users] Communication/Computation Overlap with Infiniband"</a>
<li><strong>Previous message:</strong> <a href="18876.php">Amit Ghadge: "Re: [OMPI users] How to check that open MPI installed and work correctly"</a>
<li><strong>In reply to:</strong> <a href="18875.php">Josh Hursey: "Re: [OMPI users] Segmentation fault when checkpointing"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
OK, we can try that. 
<br>
Thanks
<br>
Tom
<br>
<p>-----Original Message-----
<br>
From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of Josh Hursey
<br>
Sent: Thursday, March 29, 2012 11:22 AM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] Segmentation fault when checkpointing
<br>
<p>This is a bit of a non-answer, but can you try the 1.5 series (1.5.5 in the current release)? 1.4 is being phased out, and 1.5 will replace it in the near future. 1.5 has a number of C/R related fixes that might help.
<br>
<p>-- Josh
<br>
<p>On Thu, Mar 29, 2012 at 1:12 PM, Linton, Tom &lt;tom.linton_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; We have a legacy application that runs fine on our cluster using Intel 
</span><br>
<span class="quotelev1">&gt; MPI with hundreds of cores. We ported it to OpenMPI so that we could 
</span><br>
<span class="quotelev1">&gt; use BLCR and it runs fine but checkpointing is not working properly:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. when we checkpoint with more than 1 core, each MPI rank reports a 
</span><br>
<span class="quotelev1">&gt; segmentation fault for the MPI job and the ompi-checkpoint command 
</span><br>
<span class="quotelev1">&gt; does not return. For example, with two cores we get:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [tscco28017:16352] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [tscco28017:16352] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [tscco28017:16352] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [tscco28017:16352] Failing at address: 0x7fffef51
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [tscco28017:16353] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [tscco28017:16353] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [tscco28017:16353] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [tscco28017:16353] Failing at address: 0x7fffef51
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [tscco28017:16353] [ 0] /lib64/libpthread.so.0(+0xf5d0) 
</span><br>
<span class="quotelev1">&gt; [0x7ffff698e5d0]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [tscco28017:16353] [ 1] [0xf500b0]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [tscco28017:16353] *** End of error message ***
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [tscco28017:16352] [ 0] /lib64/libpthread.so.0(+0xf5d0) 
</span><br>
<span class="quotelev1">&gt; [0x7ffff698e5d0]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [tscco28017:16352] [ 1] [0xf500b0]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [tscco28017:16352] *** End of error message ***
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun noticed that process rank 1 with PID 16353 on node tscco28017 
</span><br>
<span class="quotelev1">&gt; exited on signal 11 (Segmentation fault).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When I execute the TotalView debugger on a resulting core file (I 
</span><br>
<span class="quotelev1">&gt; assume it's for the rank 0 process), Totalview reports a null frame 
</span><br>
<span class="quotelev1">&gt; pointer and the stack is trashed (gdb shows a backtrace with 30 frames 
</span><br>
<span class="quotelev1">&gt; but shows no debug info).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. Checkpointing with 1 core on the legacy program works.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 3. Checkpointing with a simple test program on 16 cores works.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you suggest how to debug this problem?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Some additional information:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#183;&#160;&#160;&#160;&#160;&#160;&#160;&#160; I execute the program like this: mpirun -am ft-enable-cr -n 2 
</span><br>
<span class="quotelev1">&gt; -machinefile machines program inputfile
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#183;&#160;&#160;&#160;&#160;&#160;&#160;&#160; We are using Open MPI 1.4.4 with BLCR 0.8.4
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#183;&#160;&#160;&#160;&#160;&#160;&#160;&#160; OpenMPI and the application were both compiled on the same 
</span><br>
<span class="quotelev1">&gt; machine using the Intel icc 12.0.4 compiler
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#183;&#160;&#160;&#160;&#160;&#160;&#160;&#160; For the failing example, both MPI processes are running on 
</span><br>
<span class="quotelev1">&gt; cores on the same machine node.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#183;&#160;&#160;&#160;&#160;&#160;&#160;&#160; I have attached &quot;ompi_info.txt&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#183;&#160;&#160;&#160;&#160;&#160;&#160;&#160; We're running on a single Xeon 5150 node with Gigabit Ethernet.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#183;&#160;&#160;&#160;&#160;&#160;&#160;&#160; [Reuti: previously I reported a problem involving illegal 
</span><br>
<span class="quotelev1">&gt; instructions but this turned out to be a build problem. Sorry I didn't 
</span><br>
<span class="quotelev1">&gt; answer your response to my previous thread but I was having problems 
</span><br>
<span class="quotelev1">&gt; with accessing this email list at that time.]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Tom
</span><br>
<span class="quotelev1">&gt;
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
<p><p><p><pre>
--
Joshua Hursey
Postdoctoral Research Associate
Oak Ridge National Laboratory
<a href="http://users.nccs.gov/~jjhursey">http://users.nccs.gov/~jjhursey</a>
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18878.php">Steffen Christgau: "[OMPI users] Communication/Computation Overlap with Infiniband"</a>
<li><strong>Previous message:</strong> <a href="18876.php">Amit Ghadge: "Re: [OMPI users] How to check that open MPI installed and work correctly"</a>
<li><strong>In reply to:</strong> <a href="18875.php">Josh Hursey: "Re: [OMPI users] Segmentation fault when checkpointing"</a>
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
