<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Oct 31 08:31:42 2007" -->
<!-- isoreceived="20071031123142" -->
<!-- sent="Wed, 31 Oct 2007 05:31:32 -0700" -->
<!-- isosent="20071031123132" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMP and OpenMPI Issue" -->
<!-- id="76610D2E-232C-4F29-974D-DC684C500F18_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20071030071708.8905.qmail_at_webmail29.rediffmail.com" -->
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
<strong>Date:</strong> 2007-10-31 08:31:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4358.php">Murat Knecht: "Re: [OMPI users] Merge blocks depending on spawn order"</a>
<li><strong>Previous message:</strong> <a href="4356.php">Jeff Squyres: "Re: [OMPI users] Merge blocks depending on spawn order"</a>
<li><strong>In reply to:</strong> <a href="4346.php">Neeraj Chourasia: "[OMPI users] OpenMP and OpenMPI Issue"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
THREAD_MULTIPLE support does not work in the 1.2 series.  Try turning  
<br>
it off.
<br>
<p><p>On Oct 30, 2007, at 12:17 AM, Neeraj Chourasia wrote:
<br>
<p><span class="quotelev1">&gt; Hi folks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         I have been seeing some nasty behaviour in MPI_Send/Recv  
</span><br>
<span class="quotelev1">&gt; with large dataset(8 MB), when used with OpenMP and Openmpi  
</span><br>
<span class="quotelev1">&gt; together with IB Interconnect. Attached is a program.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        The code first calls MPI_Init_thread() followed by openmp  
</span><br>
<span class="quotelev1">&gt; thread creation API. The program works fine, if we do single side
</span><br>
<span class="quotelev1">&gt; comm unication [Thread 0 of process 0 sending some data to any  
</span><br>
<span class="quotelev1">&gt; thread of process 1], but it hangs if both side tries to send some  
</span><br>
<span class="quotelev1">&gt; data (8 MB) using IB Interconnect
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Interesting to note that program works fine, if we send  
</span><br>
<span class="quotelev1">&gt; short data(1 MB or below).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         I see this with
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         openmpi-1.2 or openmpi-1.2.4 (compiled with --enable-mpi- 
</span><br>
<span class="quotelev1">&gt; threads)
</span><br>
<span class="quotelev1">&gt;         ofed 1.2
</span><br>
<span class="quotelev1">&gt;         2.6.9-42.4sp.XCsmp
</span><br>
<span class="quotelev1">&gt;         icc (Intel Compiler)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         compiled as
</span><br>
<span class="quotelev1">&gt;                 mpicc -O3 -openmp temp.c
</span><br>
<span class="quotelev1">&gt;         run as
</span><br>
<span class="quotelev1">&gt;                 mpirun -np 2 -hostfile nodelist a.out
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         The error i am getting is
</span><br>
<span class="quotelev1">&gt;          
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; ----------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         [0,1,1][btl_openib_component.c: 
</span><br>
<span class="quotelev1">&gt; 1199:btl_openib_component_progress] from n129 to: n115 error  
</span><br>
<span class="quotelev1">&gt; polling LP CQ with status LOCAL PROTOCOL ERROR status number 4 for  
</span><br>
<span class="quotelev1">&gt; wr_id 6391728 opcode 0
</span><br>
<span class="quotelev1">&gt; [0,1,1][btl_openib_component.c:1199:btl_openib_component_progress]  
</span><br>
<span class="quotelev1">&gt; from n129 to: n115 error polling LP CQ with status WORK REQUEST  
</span><br>
<span class="quotelev1">&gt; FLUSHED ERROR status number 5 for wr_id 7058304 opcode 128
</span><br>
<span class="quotelev1">&gt; [0,1,0][btl_openib_component.c:1199:btl_openib_component_progress]  
</span><br>
<span class="quotelev1">&gt; from n115 to: n129 [0,1,0][btl_openib_component.c: 
</span><br>
<span class="quotelev1">&gt; 1199:btl_openib_component_progress] from n115 to: n129 error  
</span><br>
<span class="quotelev1">&gt; polling LP CQ with status WORK REQUEST FLUSHED ERROR status number  
</span><br>
<span class="quotelev1">&gt; 5 for wr_id 6854256 opcode 128
</span><br>
<span class="quotelev1">&gt; error polling LP CQ with status LOCAL LENGTH ERROR status number 1  
</span><br>
<span class="quotelev1">&gt; for wr_id 6920112 opcode 0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;          
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; -------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Anyone else seeing similar?  Any ideas for workarounds?
</span><br>
<span class="quotelev1">&gt;         As a point of reference, program works fine, if we force  
</span><br>
<span class="quotelev1">&gt; openmpi to select TCP interconnect using --mca btl tcp,self.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Neeraj
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;temp.c&gt;
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
<li><strong>Next message:</strong> <a href="4358.php">Murat Knecht: "Re: [OMPI users] Merge blocks depending on spawn order"</a>
<li><strong>Previous message:</strong> <a href="4356.php">Jeff Squyres: "Re: [OMPI users] Merge blocks depending on spawn order"</a>
<li><strong>In reply to:</strong> <a href="4346.php">Neeraj Chourasia: "[OMPI users] OpenMP and OpenMPI Issue"</a>
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
