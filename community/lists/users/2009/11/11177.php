<?
$subject_val = "Re: [OMPI users] users Digest, Vol 1401, Issue 2";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 12 10:57:31 2009" -->
<!-- isoreceived="20091112155731" -->
<!-- sent="Thu, 12 Nov 2009 07:57:23 -0800" -->
<!-- isosent="20091112155723" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] users Digest, Vol 1401, Issue 2" -->
<!-- id="FEDCE42F-5CB5-4964-B7D0-4CF7111CE019_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="44587a140911110449jb3c9d7dq9de1d0b813c7e9bd_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] users Digest, Vol 1401, Issue 2<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-12 10:57:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11178.php">Gus Correa: "Re: [OMPI users] mpi functions are slow when first called and	become normal afterwards"</a>
<li><strong>Previous message:</strong> <a href="11176.php">Sergio D&#237;az: "Re: [OMPI users] checkpoint opempi-1.3.3+sge62"</a>
<li><strong>In reply to:</strong> <a href="11156.php">Yogesh Aher: "Re: [OMPI users] users Digest, Vol 1401, Issue 2"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It looks like your executable is explicitly calling MPI_ABORT in the  
<br>
CmiAbort function -- perhaps in response to something happening in the  
<br>
namd or CmiHandleMessage functions.  The next logical step would  
<br>
likely be to look in those routines and see why MPI_ABORT/CmiAbort  
<br>
would be invoked.
<br>
<p><p>On Nov 11, 2009, at 4:49 AM, Yogesh Aher wrote:
<br>
<p><span class="quotelev1">&gt; Yes.. The executables run initially and then gives the mentioned  
</span><br>
<span class="quotelev1">&gt; error in the first message!
</span><br>
<span class="quotelev1">&gt; i.e.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./mpirun -hostfile machines executable
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
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
<span class="quotelev1">&gt; mpirun has exited due to process rank 2 with PID 15617 on
</span><br>
<span class="quotelev1">&gt; node sibar.pch.univie.ac.at exiting without calling &quot;finalize&quot;. This  
</span><br>
<span class="quotelev1">&gt; may
</span><br>
<span class="quotelev1">&gt; have caused other processes in the application to be
</span><br>
<span class="quotelev1">&gt; terminated by signals sent by mpirun (as reported here).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [2] Stack Traceback:
</span><br>
<span class="quotelev1">&gt;   [0] CmiAbort+0x25  [0x8366f3e]
</span><br>
<span class="quotelev1">&gt;   [1] namd [0x830d4cd]
</span><br>
<span class="quotelev1">&gt;   [2] CmiHandleMessage+0x22  [0x8367c20]
</span><br>
<span class="quotelev1">&gt;   [3] CsdScheduleForever+0x67  [0x8367dd2]
</span><br>
<span class="quotelev1">&gt;   [4] CsdScheduler+0x12  [0x8367d4c]
</span><br>
<span class="quotelev1">&gt;   [5] _Z10slave_initiPPc+0x21  [0x80fa09d]
</span><br>
<span class="quotelev1">&gt;   [6] _ZN7BackEnd4initEiPPc+0x53  [0x80fa0f5]
</span><br>
<span class="quotelev1">&gt;   [7] main+0x2e  [0x80f65b6]
</span><br>
<span class="quotelev1">&gt;   [8] __libc_start_main+0xd3  [0x31cde3]
</span><br>
<span class="quotelev1">&gt;   [9] __gxx_personality_v0+0x101  [0x80f3405]
</span><br>
<span class="quotelev1">&gt; [3] Stack Traceback:
</span><br>
<span class="quotelev1">&gt;   [0] CmiAbort+0x25  [0x8366f3e]
</span><br>
<span class="quotelev1">&gt;   [1] namd [0x830d4cd]
</span><br>
<span class="quotelev1">&gt;   [2] CmiHandleMessage+0x22  [0x8367c20]
</span><br>
<span class="quotelev1">&gt;   [3] CsdScheduleForever+0x67  [0x8367dd2]
</span><br>
<span class="quotelev1">&gt;   [4] CsdScheduler+0x12  [0x8367d4c]
</span><br>
<span class="quotelev1">&gt;   [5] _Z10slave_initiPPc+0x21  [0x80fa09d]
</span><br>
<span class="quotelev1">&gt;   [6] _ZN7BackEnd4initEiPPc+0x53  [0x80fa0f5]
</span><br>
<span class="quotelev1">&gt;   [7] main+0x2e  [0x80f65b6]
</span><br>
<span class="quotelev1">&gt;   [8] __libc_start_main+0xd3  [0x137de3]
</span><br>
<span class="quotelev1">&gt;   [9] __gxx_personality_v0+0x101  [0x80f3405]
</span><br>
<span class="quotelev1">&gt; Running on MPI version: 2.1 multi-thread support: MPI_THREAD_SINGLE  
</span><br>
<span class="quotelev1">&gt; (max supported: MPI_THREAD_SINGLE)
</span><br>
<span class="quotelev1">&gt; cpu topology info is being gathered.
</span><br>
<span class="quotelev1">&gt; 2 unique compute nodes detected.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------- Processor 2 Exiting: Called CmiAbort ------------
</span><br>
<span class="quotelev1">&gt; Reason: Internal Error: Unknown-msg-type. Contact Developers.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------- Processor 3 Exiting: Called CmiAbort ------------
</span><br>
<span class="quotelev1">&gt; Reason: Internal Error: Unknown-msg-type. Contact Developers.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [studpc01.xxx.xxx.xx:15615] 1 more process has sent help message  
</span><br>
<span class="quotelev1">&gt; help-mpi-api.txt / mpi-abort
</span><br>
<span class="quotelev1">&gt; [studpc01.xxx.xxx.xx:15615] Set MCA parameter  
</span><br>
<span class="quotelev1">&gt; &quot;orte_base_help_aggregate&quot; to 0 to see all help / error messages
</span><br>
<span class="quotelev1">&gt; [studpc21.xx.xx.xx][[6986,1],0][btl_tcp_frag.c: 
</span><br>
<span class="quotelev1">&gt; 124:mca_btl_tcp_frag_send] mca_btl_tcp_frag_send: writev failed:  
</span><br>
<span class="quotelev1">&gt; Connection reset by peer (104)
</span><br>
<span class="quotelev1">&gt; [studpc21.xx.xx.xx][[6986,1],0][btl_tcp_frag.c: 
</span><br>
<span class="quotelev1">&gt; 124:mca_btl_tcp_frag_send] mca_btl_tcp_frag_send: writev failed:  
</span><br>
<span class="quotelev1">&gt; Connection reset by peer (104)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes, I put 64-bit executable on 1 machine (studpc21) &amp; 32-bit  
</span><br>
<span class="quotelev1">&gt; executable on another machine (studpc01) with same name! But, I  
</span><br>
<span class="quotelev1">&gt; don't know whether they are being used separately or not. How can I  
</span><br>
<span class="quotelev1">&gt; check it?
</span><br>
<span class="quotelev1">&gt; Can we use this option &quot; ./mpirun -hetero&quot; for specifying the  
</span><br>
<span class="quotelev1">&gt; machines? The jobs run individually on each machine, but if used  
</span><br>
<span class="quotelev1">&gt; together, it doesn't!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hope it will give some hint coming at the solution..
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Message: 2
</span><br>
<span class="quotelev1">&gt; Date: Tue, 10 Nov 2009 07:56:47 -0500
</span><br>
<span class="quotelev1">&gt; From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Openmpi on Heterogeneous environment
</span><br>
<span class="quotelev1">&gt; To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;8F008AAB-358B-4E6A-83A0-9ECE60FD5218_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=US-ASCII; format=flowed; delsp=yes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Do you see any output from your executables?  I.e., are you sure that
</span><br>
<span class="quotelev1">&gt; it's running the &quot;correct&quot; executables?  If so, do you know how far
</span><br>
<span class="quotelev1">&gt; it's getting in its run before aborting?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Nov 10, 2009, at 7:36 AM, Yogesh Aher wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks for the reply Pallab. Firewall is not an issue as I can
</span><br>
<span class="quotelev2">&gt; &gt; passwordless-SSH to/from both machines.
</span><br>
<span class="quotelev2">&gt; &gt; My problem is to deal with 32bit &amp; 64bit architectures
</span><br>
<span class="quotelev2">&gt; &gt; simultaneously (and not with different operating systems). Can it be
</span><br>
<span class="quotelev2">&gt; &gt; possible through open-MPI???
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Look forward to the solution!
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks,
</span><br>
<span class="quotelev2">&gt; &gt; Yogesh
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; From: Pallab Datta (datta_at_[hidden])
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I have had issues for running in cross platforms..ie. Mac OSX and
</span><br>
<span class="quotelev2">&gt; &gt; Linux
</span><br>
<span class="quotelev2">&gt; &gt; (Ubuntu)..haven't got it resolved..check firewalls if thats blocking
</span><br>
<span class="quotelev2">&gt; &gt; any
</span><br>
<span class="quotelev2">&gt; &gt; communication..
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Thu, Nov 5, 2009 at 7:47 PM, Yogesh Aher &lt;aher.yogesh_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Dear Open-mpi users,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I have installed openmpi on 2 different machines with different
</span><br>
<span class="quotelev2">&gt; &gt; architectures (INTEL and x86_64) separately (command: ./configure --
</span><br>
<span class="quotelev2">&gt; &gt; enable-heterogeneous). Compiled executables of the same code for
</span><br>
<span class="quotelev2">&gt; &gt; these 2 arch. Kept these executables on individual machines.
</span><br>
<span class="quotelev2">&gt; &gt; Prepared a hostfile containing the names of those 2 machines.
</span><br>
<span class="quotelev2">&gt; &gt; Now, when I want to execute the code (giving command - ./mpirun -
</span><br>
<span class="quotelev2">&gt; &gt; hostfile machines executable), it doesn't work, giving error  
</span><br>
<span class="quotelev1">&gt; message:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; MPI_ABORT was invoked on rank 2 in communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev2">&gt; &gt; with errorcode 1.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; NOTE: invoking MPI_ABORT causes Open MPI to kill all MPI processes.
</span><br>
<span class="quotelev2">&gt; &gt; You may or may not see output from other processes, depending on
</span><br>
<span class="quotelev2">&gt; &gt; exactly when Open MPI kills them.
</span><br>
<span class="quotelev2">&gt; &gt;  
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;  
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; mpirun has exited due to process rank 2 with PID 1712 on
</span><br>
<span class="quotelev2">&gt; &gt; node studpc1.xxx.xxxx.xx exiting without calling &quot;finalize&quot;. This  
</span><br>
<span class="quotelev1">&gt; may
</span><br>
<span class="quotelev2">&gt; &gt; have caused other processes in the application to be
</span><br>
<span class="quotelev2">&gt; &gt; terminated by signals sent by mpirun (as reported here)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; When I keep only one machine-name in the hostfile, then the
</span><br>
<span class="quotelev2">&gt; &gt; execution works perfect.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Will anybody please guide me to run the program on heterogeneous
</span><br>
<span class="quotelev2">&gt; &gt; environment using mpirun!
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanking you,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Sincerely,
</span><br>
<span class="quotelev2">&gt; &gt; Yogesh
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
<li><strong>Next message:</strong> <a href="11178.php">Gus Correa: "Re: [OMPI users] mpi functions are slow when first called and	become normal afterwards"</a>
<li><strong>Previous message:</strong> <a href="11176.php">Sergio D&#237;az: "Re: [OMPI users] checkpoint opempi-1.3.3+sge62"</a>
<li><strong>In reply to:</strong> <a href="11156.php">Yogesh Aher: "Re: [OMPI users] users Digest, Vol 1401, Issue 2"</a>
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
