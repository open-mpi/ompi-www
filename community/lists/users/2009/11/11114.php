<?
$subject_val = "Re: [OMPI users] Openmpi on Heterogeneous environment";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 10 07:56:52 2009" -->
<!-- isoreceived="20091110125652" -->
<!-- sent="Tue, 10 Nov 2009 07:56:47 -0500" -->
<!-- isosent="20091110125647" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Openmpi on Heterogeneous environment" -->
<!-- id="8F008AAB-358B-4E6A-83A0-9ECE60FD5218_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="44587a140911100436g33aa93ecjd72241b882f484c1_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Openmpi on Heterogeneous environment<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-10 07:56:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11115.php">vasilis gkanis: "[OMPI users] ipo: warning #11009: file format not recognized for /Libraries_intel/openmpi/lib/libmpi.so"</a>
<li><strong>Previous message:</strong> <a href="11113.php">Yogesh Aher: "Re: [OMPI users] Openmpi on Heterogeneous environment"</a>
<li><strong>In reply to:</strong> <a href="11113.php">Yogesh Aher: "Re: [OMPI users] Openmpi on Heterogeneous environment"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11115.php">vasilis gkanis: "[OMPI users] ipo: warning #11009: file format not recognized for /Libraries_intel/openmpi/lib/libmpi.so"</a>
<li><strong>Reply:</strong> <a href="11115.php">vasilis gkanis: "[OMPI users] ipo: warning #11009: file format not recognized for /Libraries_intel/openmpi/lib/libmpi.so"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Do you see any output from your executables?  I.e., are you sure that  
<br>
it's running the &quot;correct&quot; executables?  If so, do you know how far  
<br>
it's getting in its run before aborting?
<br>
<p><p>On Nov 10, 2009, at 7:36 AM, Yogesh Aher wrote:
<br>
<p><span class="quotelev1">&gt; Thanks for the reply Pallab. Firewall is not an issue as I can  
</span><br>
<span class="quotelev1">&gt; passwordless-SSH to/from both machines.
</span><br>
<span class="quotelev1">&gt; My problem is to deal with 32bit &amp; 64bit architectures  
</span><br>
<span class="quotelev1">&gt; simultaneously (and not with different operating systems). Can it be  
</span><br>
<span class="quotelev1">&gt; possible through open-MPI???
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Look forward to the solution!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Yogesh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; From: Pallab Datta (datta_at_[hidden])
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have had issues for running in cross platforms..ie. Mac OSX and  
</span><br>
<span class="quotelev1">&gt; Linux
</span><br>
<span class="quotelev1">&gt; (Ubuntu)..haven't got it resolved..check firewalls if thats blocking  
</span><br>
<span class="quotelev1">&gt; any
</span><br>
<span class="quotelev1">&gt; communication..
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, Nov 5, 2009 at 7:47 PM, Yogesh Aher &lt;aher.yogesh_at_[hidden]&gt;  
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Dear Open-mpi users,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have installed openmpi on 2 different machines with different  
</span><br>
<span class="quotelev1">&gt; architectures (INTEL and x86_64) separately (command: ./configure -- 
</span><br>
<span class="quotelev1">&gt; enable-heterogeneous). Compiled executables of the same code for  
</span><br>
<span class="quotelev1">&gt; these 2 arch. Kept these executables on individual machines.  
</span><br>
<span class="quotelev1">&gt; Prepared a hostfile containing the names of those 2 machines.
</span><br>
<span class="quotelev1">&gt; Now, when I want to execute the code (giving command - ./mpirun - 
</span><br>
<span class="quotelev1">&gt; hostfile machines executable), it doesn't work, giving error message:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPI_ABORT was invoked on rank 2 in communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; with errorcode 1.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; NOTE: invoking MPI_ABORT causes Open MPI to kill all MPI processes.
</span><br>
<span class="quotelev1">&gt; You may or may not see output from other processes, depending on
</span><br>
<span class="quotelev1">&gt; exactly when Open MPI kills them.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun has exited due to process rank 2 with PID 1712 on
</span><br>
<span class="quotelev1">&gt; node studpc1.xxx.xxxx.xx exiting without calling &quot;finalize&quot;. This may
</span><br>
<span class="quotelev1">&gt; have caused other processes in the application to be
</span><br>
<span class="quotelev1">&gt; terminated by signals sent by mpirun (as reported here)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When I keep only one machine-name in the hostfile, then the  
</span><br>
<span class="quotelev1">&gt; execution works perfect.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Will anybody please guide me to run the program on heterogeneous  
</span><br>
<span class="quotelev1">&gt; environment using mpirun!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanking you,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sincerely,
</span><br>
<span class="quotelev1">&gt; Yogesh
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11115.php">vasilis gkanis: "[OMPI users] ipo: warning #11009: file format not recognized for /Libraries_intel/openmpi/lib/libmpi.so"</a>
<li><strong>Previous message:</strong> <a href="11113.php">Yogesh Aher: "Re: [OMPI users] Openmpi on Heterogeneous environment"</a>
<li><strong>In reply to:</strong> <a href="11113.php">Yogesh Aher: "Re: [OMPI users] Openmpi on Heterogeneous environment"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11115.php">vasilis gkanis: "[OMPI users] ipo: warning #11009: file format not recognized for /Libraries_intel/openmpi/lib/libmpi.so"</a>
<li><strong>Reply:</strong> <a href="11115.php">vasilis gkanis: "[OMPI users] ipo: warning #11009: file format not recognized for /Libraries_intel/openmpi/lib/libmpi.so"</a>
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
