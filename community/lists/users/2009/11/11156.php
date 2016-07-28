<?
$subject_val = "Re: [OMPI users] users Digest, Vol 1401, Issue 2";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 11 07:49:33 2009" -->
<!-- isoreceived="20091111124933" -->
<!-- sent="Wed, 11 Nov 2009 13:49:27 +0100" -->
<!-- isosent="20091111124927" -->
<!-- name="Yogesh Aher" -->
<!-- email="aher.yogesh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] users Digest, Vol 1401, Issue 2" -->
<!-- id="44587a140911110449jb3c9d7dq9de1d0b813c7e9bd_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="mailman.3202.1257871645.7252.users_at_open-mpi.org" -->
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
<strong>From:</strong> Yogesh Aher (<em>aher.yogesh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-11 07:49:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11157.php">Ralph Castain: "Re: [OMPI users] System hang-up on MPI_Reduce"</a>
<li><strong>Previous message:</strong> <a href="11155.php">Glembek Ond&#197;&#153;ej: "Re: [OMPI users] System hang-up on MPI_Reduce"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11177.php">Jeff Squyres: "Re: [OMPI users] users Digest, Vol 1401, Issue 2"</a>
<li><strong>Reply:</strong> <a href="11177.php">Jeff Squyres: "Re: [OMPI users] users Digest, Vol 1401, Issue 2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes.. The executables run initially and then gives the mentioned error in
<br>
the first message!
<br>
i.e.
<br>
<p>./mpirun -hostfile machines executable
<br>
--------------------------------------------------------------------------
<br>
MPI_ABORT was invoked on rank 2 in communicator MPI_COMM_WORLD
<br>
with errorcode 1.
<br>
<p>NOTE: invoking MPI_ABORT causes Open MPI to kill all MPI processes.
<br>
You may or may not see output from other processes, depending on
<br>
exactly when Open MPI kills them.
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
mpirun has exited due to process rank 2 with PID 15617 on
<br>
node sibar.pch.univie.ac.at exiting without calling &quot;finalize&quot;. This may
<br>
have caused other processes in the application to be
<br>
terminated by signals sent by mpirun (as reported here).
<br>
--------------------------------------------------------------------------
<br>
[2] Stack Traceback:
<br>
&nbsp;&nbsp;[0] CmiAbort+0x25  [0x8366f3e]
<br>
&nbsp;&nbsp;[1] namd [0x830d4cd]
<br>
&nbsp;&nbsp;[2] CmiHandleMessage+0x22  [0x8367c20]
<br>
&nbsp;&nbsp;[3] CsdScheduleForever+0x67  [0x8367dd2]
<br>
&nbsp;&nbsp;[4] CsdScheduler+0x12  [0x8367d4c]
<br>
&nbsp;&nbsp;[5] _Z10slave_initiPPc+0x21  [0x80fa09d]
<br>
&nbsp;&nbsp;[6] _ZN7BackEnd4initEiPPc+0x53  [0x80fa0f5]
<br>
&nbsp;&nbsp;[7] main+0x2e  [0x80f65b6]
<br>
&nbsp;&nbsp;[8] __libc_start_main+0xd3  [0x31cde3]
<br>
&nbsp;&nbsp;[9] __gxx_personality_v0+0x101  [0x80f3405]
<br>
[3] Stack Traceback:
<br>
&nbsp;&nbsp;[0] CmiAbort+0x25  [0x8366f3e]
<br>
&nbsp;&nbsp;[1] namd [0x830d4cd]
<br>
&nbsp;&nbsp;[2] CmiHandleMessage+0x22  [0x8367c20]
<br>
&nbsp;&nbsp;[3] CsdScheduleForever+0x67  [0x8367dd2]
<br>
&nbsp;&nbsp;[4] CsdScheduler+0x12  [0x8367d4c]
<br>
&nbsp;&nbsp;[5] _Z10slave_initiPPc+0x21  [0x80fa09d]
<br>
&nbsp;&nbsp;[6] _ZN7BackEnd4initEiPPc+0x53  [0x80fa0f5]
<br>
&nbsp;&nbsp;[7] main+0x2e  [0x80f65b6]
<br>
&nbsp;&nbsp;[8] __libc_start_main+0xd3  [0x137de3]
<br>
&nbsp;&nbsp;[9] __gxx_personality_v0+0x101  [0x80f3405]
<br>
Running on MPI version: 2.1 multi-thread support: MPI_THREAD_SINGLE (max
<br>
supported: MPI_THREAD_SINGLE)
<br>
cpu topology info is being gathered.
<br>
2 unique compute nodes detected.
<br>
<p>------------- Processor 2 Exiting: Called CmiAbort ------------
<br>
Reason: Internal Error: Unknown-msg-type. Contact Developers.
<br>
<p>------------- Processor 3 Exiting: Called CmiAbort ------------
<br>
Reason: Internal Error: Unknown-msg-type. Contact Developers.
<br>
<p>[studpc01.xxx.xxx.xx:15615] 1 more process has sent help message
<br>
help-mpi-api.txt / mpi-abort
<br>
[studpc01.xxx.xxx.xx:15615] Set MCA parameter &quot;orte_base_help_aggregate&quot; to
<br>
0 to see all help / error messages
<br>
[studpc21.xx.xx.xx][[6986,1],0][btl_tcp_frag.c:124:mca_btl_tcp_frag_send]
<br>
mca_btl_tcp_frag_send: writev failed: Connection reset by peer (104)
<br>
[studpc21.xx.xx.xx][[6986,1],0][btl_tcp_frag.c:124:mca_btl_tcp_frag_send]
<br>
mca_btl_tcp_frag_send: writev failed: Connection reset by peer (104)
<br>
<p>Yes, I put 64-bit executable on 1 machine (studpc21) &amp; 32-bit executable on
<br>
another machine (studpc01) with same name! But, I don't know whether they
<br>
are being used separately or not. How can I check it?
<br>
Can we use this option &quot; ./mpirun -hetero&quot; for specifying the machines? The
<br>
jobs run individually on each machine, but if used together, it doesn't!
<br>
<p>Hope it will give some hint coming at the solution..
<br>
<p><p><p><span class="quotelev1">&gt; Message: 2
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
<span class="quotelev2">&gt; &gt; hostfile machines executable), it doesn't work, giving error message:
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
<span class="quotelev2">&gt; &gt; node studpc1.xxx.xxxx.xx exiting without calling &quot;finalize&quot;. This may
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
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11156/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11157.php">Ralph Castain: "Re: [OMPI users] System hang-up on MPI_Reduce"</a>
<li><strong>Previous message:</strong> <a href="11155.php">Glembek Ond&#197;&#153;ej: "Re: [OMPI users] System hang-up on MPI_Reduce"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11177.php">Jeff Squyres: "Re: [OMPI users] users Digest, Vol 1401, Issue 2"</a>
<li><strong>Reply:</strong> <a href="11177.php">Jeff Squyres: "Re: [OMPI users] users Digest, Vol 1401, Issue 2"</a>
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
