<?
$subject_val = "Re: [OMPI users] Several Bcast calls in a loop causing the code to hang";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 23 16:37:30 2015" -->
<!-- isoreceived="20150223213730" -->
<!-- sent="Mon, 23 Feb 2015 16:37:28 -0500" -->
<!-- isosent="20150223213728" -->
<!-- name="Joshua Ladd" -->
<!-- email="jladd.mlnx_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Several Bcast calls in a loop causing the code to hang" -->
<!-- id="CAG4F6z9KC=Wtw_JvV5S2ofOuU1B4NCyQ5d4WRPPhO8G9waw7sw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="20150223211313.GC14606_at_pn1246003.lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] Several Bcast calls in a loop causing the code to hang<br>
<strong>From:</strong> Joshua Ladd (<em>jladd.mlnx_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-23 16:37:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26378.php">George Bosilca: "Re: [OMPI users] Several Bcast calls in a loop causing the code to hang"</a>
<li><strong>Previous message:</strong> <a href="26376.php">Nathan Hjelm: "Re: [OMPI users] Several Bcast calls in a loop causing the code to hang"</a>
<li><strong>In reply to:</strong> <a href="26376.php">Nathan Hjelm: "Re: [OMPI users] Several Bcast calls in a loop causing the code to hang"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26378.php">George Bosilca: "Re: [OMPI users] Several Bcast calls in a loop causing the code to hang"</a>
<li><strong>Reply:</strong> <a href="26378.php">George Bosilca: "Re: [OMPI users] Several Bcast calls in a loop causing the code to hang"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Nathan,
<br>
<p>I do, but the hang comes later on. It looks like it's a situation where the
<br>
root is way, way faster than the children and he's inducing an an overrun
<br>
in the unexpected message queue. I think the queue is set to just keep
<br>
growing and it eventually blows up the memory??
<br>
<p>$/hpc/mtl_scrap/users/joshual/openmpi-1.8.4/ompi_install/bin/mpirun -np 3
<br>
--display-map -mca btl vader,self ./a.out
<br>
&nbsp;Data for JOB [14187,1] offset 0
<br>
<p>&nbsp;========================   JOB MAP   ========================
<br>
<p>&nbsp;Data for node: mngx-apl-01     Num slots: 16   Max slots: 0    Num procs: 3
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [14187,1] App: 0 Process rank: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [14187,1] App: 0 Process rank: 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [14187,1] App: 0 Process rank: 2
<br>
<p>&nbsp;=============================================================
<br>
rank 2, m = 0
<br>
rank 0, m = 0
<br>
rank 1, m = 0
<br>
rank 0, m = 1000
<br>
rank 0, m = 2000
<br>
rank 0, m = 3000
<br>
rank 2, m = 1000
<br>
rank 1, m = 1000
<br>
rank 0, m = 4000
<br>
rank 0, m = 5000
<br>
rank 0, m = 6000
<br>
rank 0, m = 7000
<br>
rank 1, m = 2000
<br>
rank 2, m = 2000
<br>
rank 0, m = 8000
<br>
rank 0, m = 9000
<br>
rank 0, m = 10000
<br>
rank 0, m = 11000
<br>
rank 2, m = 3000
<br>
rank 1, m = 3000
<br>
rank 0, m = 12000
<br>
rank 0, m = 13000
<br>
rank 0, m = 14000
<br>
rank 1, m = 4000
<br>
rank 2, m = 4000
<br>
rank 0, m = 15000
<br>
rank 0, m = 16000
<br>
rank 0, m = 17000
<br>
rank 0, m = 18000
<br>
rank 1, m = 5000
<br>
rank 2, m = 5000
<br>
rank 0, m = 19000
<br>
rank 0, m = 20000
<br>
rank 0, m = 21000
<br>
rank 0, m = 22000
<br>
rank 2, m = 6000     &lt;--- Finally hangs when Ranks 2 and 1 are at 6000 but
<br>
rank 0, the root, is at 22,000
<br>
rank 1, m = 6000
<br>
<p>It fails with the ompi_coll_tuned_bcast_intra_split_bintree algorithm in
<br>
Tuned - looks like a scatter/allgather type of operation. It's in the
<br>
allgather phase during the bidirectional send/recv that things go bad.
<br>
There are no issues running this under &quot;Basic&quot; colls.
<br>
<p>Josh
<br>
<p><p><p><p>On Mon, Feb 23, 2015 at 4:13 PM, Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Josh, do you see a hang when using vader? It is preferred over the old
</span><br>
<span class="quotelev1">&gt; sm btl.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Nathan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, Feb 23, 2015 at 03:48:17PM -0500, Joshua Ladd wrote:
</span><br>
<span class="quotelev2">&gt; &gt;    Sachin,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    I am able to reproduce something funny. Looks like your issue. When I
</span><br>
<span class="quotelev1">&gt; run
</span><br>
<span class="quotelev2">&gt; &gt;    on a single host with two ranks, the test works fine. However, when I
</span><br>
<span class="quotelev1">&gt; try
</span><br>
<span class="quotelev2">&gt; &gt;    three or more, it looks like only the root, rank 0, is making any
</span><br>
<span class="quotelev1">&gt; progress
</span><br>
<span class="quotelev2">&gt; &gt;    after the first iteration.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    $/hpc/mtl_scrap/users/joshual/openmpi-1.8.4/ompi_install/bin/mpirun
</span><br>
<span class="quotelev1">&gt; -np 3
</span><br>
<span class="quotelev2">&gt; &gt;    -mca btl self,sm ./bcast_loop
</span><br>
<span class="quotelev2">&gt; &gt;    rank 0, m = 0
</span><br>
<span class="quotelev2">&gt; &gt;    rank 1, m = 0
</span><br>
<span class="quotelev2">&gt; &gt;    rank 2, m = 0
</span><br>
<span class="quotelev2">&gt; &gt;    rank 0, m = 1000
</span><br>
<span class="quotelev2">&gt; &gt;    rank 0, m = 2000
</span><br>
<span class="quotelev2">&gt; &gt;    rank 0, m = 3000
</span><br>
<span class="quotelev2">&gt; &gt;    rank 0, m = 4000
</span><br>
<span class="quotelev2">&gt; &gt;    rank 0, m = 5000
</span><br>
<span class="quotelev2">&gt; &gt;    rank 0, m = 6000
</span><br>
<span class="quotelev2">&gt; &gt;    rank 0, m = 7000
</span><br>
<span class="quotelev2">&gt; &gt;    rank 0, m = 8000
</span><br>
<span class="quotelev2">&gt; &gt;    rank 0, m = 9000
</span><br>
<span class="quotelev2">&gt; &gt;    rank 0, m = 10000
</span><br>
<span class="quotelev2">&gt; &gt;    rank 0, m = 11000
</span><br>
<span class="quotelev2">&gt; &gt;    rank 0, m = 12000
</span><br>
<span class="quotelev2">&gt; &gt;    rank 0, m = 13000
</span><br>
<span class="quotelev2">&gt; &gt;    rank 0, m = 14000
</span><br>
<span class="quotelev2">&gt; &gt;    rank 0, m = 15000
</span><br>
<span class="quotelev2">&gt; &gt;    rank 0, m = 16000   &lt;----- Hanging
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    After hanging for a while, I get an OOM kernel panic message:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    joshual_at_mngx-apl-01 ~
</span><br>
<span class="quotelev2">&gt; &gt;    $
</span><br>
<span class="quotelev2">&gt; &gt;    Message from syslogd_at_localhost at Feb 23 22:42:17 ...
</span><br>
<span class="quotelev2">&gt; &gt;     kernel:Kernel panic - not syncing: Out of memory: system-wide
</span><br>
<span class="quotelev2">&gt; &gt;    panic_on_oom is enabled
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    Message from syslogd_at_localhost at Feb 23 22:42:17 ...
</span><br>
<span class="quotelev2">&gt; &gt;     kernel:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    With TCP BTL the result is sensible, i.e. I see three ranks reporting
</span><br>
<span class="quotelev1">&gt; for
</span><br>
<span class="quotelev2">&gt; &gt;    each multiple of 1000:
</span><br>
<span class="quotelev2">&gt; &gt;    $/hpc/mtl_scrap/users/joshual/openmpi-1.8.4/ompi_install/bin/mpirun
</span><br>
<span class="quotelev1">&gt; -np 3
</span><br>
<span class="quotelev2">&gt; &gt;    -mca btl self,tcp ./a.out
</span><br>
<span class="quotelev2">&gt; &gt;    rank 1, m = 0
</span><br>
<span class="quotelev2">&gt; &gt;    rank 2, m = 0
</span><br>
<span class="quotelev2">&gt; &gt;    rank 0, m = 0
</span><br>
<span class="quotelev2">&gt; &gt;    rank 0, m = 1000
</span><br>
<span class="quotelev2">&gt; &gt;    rank 2, m = 1000
</span><br>
<span class="quotelev2">&gt; &gt;    rank 1, m = 1000
</span><br>
<span class="quotelev2">&gt; &gt;    rank 1, m = 2000
</span><br>
<span class="quotelev2">&gt; &gt;    rank 0, m = 2000
</span><br>
<span class="quotelev2">&gt; &gt;    rank 2, m = 2000
</span><br>
<span class="quotelev2">&gt; &gt;    rank 0, m = 3000
</span><br>
<span class="quotelev2">&gt; &gt;    rank 2, m = 3000
</span><br>
<span class="quotelev2">&gt; &gt;    rank 1, m = 3000
</span><br>
<span class="quotelev2">&gt; &gt;    rank 0, m = 4000
</span><br>
<span class="quotelev2">&gt; &gt;    rank 1, m = 4000
</span><br>
<span class="quotelev2">&gt; &gt;    rank 2, m = 4000
</span><br>
<span class="quotelev2">&gt; &gt;    rank 0, m = 5000
</span><br>
<span class="quotelev2">&gt; &gt;    rank 2, m = 5000
</span><br>
<span class="quotelev2">&gt; &gt;    rank 1, m = 5000
</span><br>
<span class="quotelev2">&gt; &gt;    rank 0, m = 6000
</span><br>
<span class="quotelev2">&gt; &gt;    rank 1, m = 6000
</span><br>
<span class="quotelev2">&gt; &gt;    rank 2, m = 6000
</span><br>
<span class="quotelev2">&gt; &gt;    rank 2, m = 7000
</span><br>
<span class="quotelev2">&gt; &gt;    rank 1, m = 7000
</span><br>
<span class="quotelev2">&gt; &gt;    rank 0, m = 7000
</span><br>
<span class="quotelev2">&gt; &gt;    rank 0, m = 8000
</span><br>
<span class="quotelev2">&gt; &gt;    rank 2, m = 8000
</span><br>
<span class="quotelev2">&gt; &gt;    rank 1, m = 8000
</span><br>
<span class="quotelev2">&gt; &gt;    rank 0, m = 9000
</span><br>
<span class="quotelev2">&gt; &gt;    rank 2, m = 9000
</span><br>
<span class="quotelev2">&gt; &gt;    rank 1, m = 9000
</span><br>
<span class="quotelev2">&gt; &gt;    rank 2, m = 10000
</span><br>
<span class="quotelev2">&gt; &gt;    rank 0, m = 10000
</span><br>
<span class="quotelev2">&gt; &gt;    rank 1, m = 10000
</span><br>
<span class="quotelev2">&gt; &gt;    rank 1, m = 11000
</span><br>
<span class="quotelev2">&gt; &gt;    rank 0, m = 11000
</span><br>
<span class="quotelev2">&gt; &gt;    rank 2, m = 11000
</span><br>
<span class="quotelev2">&gt; &gt;    rank 2, m = 12000
</span><br>
<span class="quotelev2">&gt; &gt;    rank 1, m = 12000
</span><br>
<span class="quotelev2">&gt; &gt;    rank 0, m = 12000
</span><br>
<span class="quotelev2">&gt; &gt;    rank 1, m = 13000
</span><br>
<span class="quotelev2">&gt; &gt;    rank 0, m = 13000
</span><br>
<span class="quotelev2">&gt; &gt;    rank 2, m = 13000
</span><br>
<span class="quotelev2">&gt; &gt;    rank 1, m = 14000
</span><br>
<span class="quotelev2">&gt; &gt;    rank 2, m = 14000
</span><br>
<span class="quotelev2">&gt; &gt;    rank 0, m = 14000
</span><br>
<span class="quotelev2">&gt; &gt;    rank 1, m = 15000
</span><br>
<span class="quotelev2">&gt; &gt;    rank 0, m = 15000
</span><br>
<span class="quotelev2">&gt; &gt;    rank 2, m = 15000
</span><br>
<span class="quotelev2">&gt; &gt;    etc...
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    It looks like a bug in the SM BTL. I can poke some more at this
</span><br>
<span class="quotelev1">&gt; tomorrow.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    Josh
</span><br>
<span class="quotelev2">&gt; &gt;    On Sun, Feb 22, 2015 at 11:18 PM, Sachin Krishnan &lt;sachkris_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;      George,
</span><br>
<span class="quotelev2">&gt; &gt;      I was able to run the code without any errors in an older version of
</span><br>
<span class="quotelev2">&gt; &gt;      OpenMPI in another machine. It looks like some problem with my
</span><br>
<span class="quotelev1">&gt; machine
</span><br>
<span class="quotelev2">&gt; &gt;      like Josh pointed out.
</span><br>
<span class="quotelev2">&gt; &gt;      Adding --mca coll tuned or basic  to the mpirun command resulted in
</span><br>
<span class="quotelev1">&gt; an
</span><br>
<span class="quotelev2">&gt; &gt;      MPI_Init failed error with the following additional information for
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev2">&gt; &gt;      Open MPI developer:
</span><br>
<span class="quotelev2">&gt; &gt;       mca_coll_base_comm_select(MPI_COMM_WORLD) failed
</span><br>
<span class="quotelev2">&gt; &gt;        --&gt; Returned &quot;Not found&quot; (-13) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev2">&gt; &gt;      Thanks for the help.
</span><br>
<span class="quotelev2">&gt; &gt;      Sachin
</span><br>
<span class="quotelev2">&gt; &gt;      On Mon, Feb 23, 2015 at 4:17 AM, George Bosilca &lt;
</span><br>
<span class="quotelev1">&gt; bosilca_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt;      wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;        Sachin,
</span><br>
<span class="quotelev2">&gt; &gt;        I cant replicate your issue neither with the latest 1.8 nor with
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev2">&gt; &gt;        trunk. I tried using a single host, while forcing SM and then TP
</span><br>
<span class="quotelev1">&gt; to no
</span><br>
<span class="quotelev2">&gt; &gt;        avail.
</span><br>
<span class="quotelev2">&gt; &gt;        Can you try restricting the collective modules in use (adding
</span><br>
<span class="quotelev1">&gt; --mca
</span><br>
<span class="quotelev2">&gt; &gt;        coll tuned,basic) to your mpirun command?
</span><br>
<span class="quotelev2">&gt; &gt;          George.
</span><br>
<span class="quotelev2">&gt; &gt;        On Fri, Feb 20, 2015 at 9:31 PM, Sachin Krishnan &lt;
</span><br>
<span class="quotelev1">&gt; sachkris_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt;        wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;          Josh,
</span><br>
<span class="quotelev2">&gt; &gt;          Thanks for the help.
</span><br>
<span class="quotelev2">&gt; &gt;          I'm running on a single host. How do I confirm that it is an
</span><br>
<span class="quotelev1">&gt; issue
</span><br>
<span class="quotelev2">&gt; &gt;          with the shared memory?
</span><br>
<span class="quotelev2">&gt; &gt;          Sachin
</span><br>
<span class="quotelev2">&gt; &gt;          On Fri, Feb 20, 2015 at 11:58 PM, Joshua Ladd &lt;
</span><br>
<span class="quotelev1">&gt; jladd.mlnx_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt;          wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;            Sachin,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;            Are you running this on a single host or across multiple hosts
</span><br>
<span class="quotelev2">&gt; &gt;            (i.e. are you communicating between processes via
</span><br>
<span class="quotelev1">&gt; networking.) If
</span><br>
<span class="quotelev2">&gt; &gt;            it's on a single host, then it might be an issue with shared
</span><br>
<span class="quotelev2">&gt; &gt;            memory.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;            Josh
</span><br>
<span class="quotelev2">&gt; &gt;            On Fri, Feb 20, 2015 at 1:51 AM, Sachin Krishnan
</span><br>
<span class="quotelev2">&gt; &gt;            &lt;sachkris_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;              Hello Josh,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;              The command i use to compile the code is:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;              mpicc bcast_loop.c
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;              To run the code I use:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;              mpirun -np 2 ./a.out
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;              Output is unpredictable. It gets stuck at different places.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;              Im attaching lstopo and ompi_info outputs. Do you need any
</span><br>
<span class="quotelev1">&gt; other
</span><br>
<span class="quotelev2">&gt; &gt;              info?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;              lstopo-no-graphics output:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;              Machine (3433MB)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                Socket L#0 + L3 L#0 (8192KB)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                  L2 L#0 (256KB) + L1d L#0 (32KB) + L1i L#0 (32KB) + Core
</span><br>
<span class="quotelev1">&gt; L#0
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                    PU L#0 (P#0)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                    PU L#1 (P#4)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                  L2 L#1 (256KB) + L1d L#1 (32KB) + L1i L#1 (32KB) + Core
</span><br>
<span class="quotelev1">&gt; L#1
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                    PU L#2 (P#1)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                    PU L#3 (P#5)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                  L2 L#2 (256KB) + L1d L#2 (32KB) + L1i L#2 (32KB) + Core
</span><br>
<span class="quotelev1">&gt; L#2
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                    PU L#4 (P#2)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                    PU L#5 (P#6)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                  L2 L#3 (256KB) + L1d L#3 (32KB) + L1i L#3 (32KB) + Core
</span><br>
<span class="quotelev1">&gt; L#3
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                    PU L#6 (P#3)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                    PU L#7 (P#7)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                HostBridge L#0
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                  PCI 8086:0162
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                    GPU L#0 &quot;card0&quot;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                    GPU L#1 &quot;renderD128&quot;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                    GPU L#2 &quot;controlD64&quot;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                  PCI 8086:1502
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                    Net L#3 &quot;eth0&quot;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                  PCI 8086:1e02
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                    Block L#4 &quot;sda&quot;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                    Block L#5 &quot;sr0&quot;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;              ompi_info output:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                               Package: Open MPI builduser_at_anatol
</span><br>
<span class="quotelev1">&gt; Distribution
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                              Open MPI: 1.8.4
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                Open MPI repo revision: v1.8.3-330-g0344f04
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                 Open MPI release date: Dec 19, 2014
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                              Open RTE: 1.8.4
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                Open RTE repo revision: v1.8.3-330-g0344f04
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                 Open RTE release date: Dec 19, 2014
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                                  OPAL: 1.8.4
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                    OPAL repo revision: v1.8.3-330-g0344f04
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                     OPAL release date: Dec 19, 2014
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                               MPI API: 3.0
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                          Ident string: 1.8.4
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                                Prefix: /usr
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;               Configured architecture: i686-pc-linux-gnu
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                        Configure host: anatol
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                         Configured by: builduser
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                         Configured on: Sat Dec 20 17:00:34 PST 2014
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                        Configure host: anatol
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                              Built by: builduser
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                              Built on: Sat Dec 20 17:12:16 PST 2014
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                            Built host: anatol
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                            C bindings: yes
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                          C++ bindings: yes
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                           Fort mpif.h: yes (all)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                          Fort use mpi: yes (full: ignore TKR)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                     Fort use mpi size: deprecated-ompi-info-value
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                      Fort use mpi_f08: yes
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;               Fort mpi_f08 compliance: The mpi_f08 module is available,
</span><br>
<span class="quotelev1">&gt; but
</span><br>
<span class="quotelev2">&gt; &gt;              due to
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                                        limitations in the
</span><br>
<span class="quotelev1">&gt; /usr/bin/gfortran
</span><br>
<span class="quotelev2">&gt; &gt;              compiler, does
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                                        not support the following: array
</span><br>
<span class="quotelev2">&gt; &gt;              subsections,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                                        direct passthru (where possible)
</span><br>
<span class="quotelev1">&gt; to
</span><br>
<span class="quotelev2">&gt; &gt;              underlying Open
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                                        MPI's C functionality
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                Fort mpi_f08 subarrays: no
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                         Java bindings: no
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                Wrapper compiler rpath: runpath
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                            C compiler: gcc
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                   C compiler absolute: /usr/bin/gcc
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                C compiler family name: GNU
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                    C compiler version: 4.9.2
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                          C++ compiler: g++
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                 C++ compiler absolute: /usr/bin/g++
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                         Fort compiler: /usr/bin/gfortran
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                     Fort compiler abs:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                       Fort ignore TKR: yes (!GCC$ ATTRIBUTES
</span><br>
<span class="quotelev1">&gt; NO_ARG_CHECK ::)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                 Fort 08 assumed shape: yes
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                    Fort optional args: yes
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                        Fort INTERFACE: yes
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                  Fort ISO_FORTRAN_ENV: yes
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                     Fort STORAGE_SIZE: yes
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                    Fort BIND(C) (all): yes
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                    Fort ISO_C_BINDING: yes
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;               Fort SUBROUTINE BIND(C): yes
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                     Fort TYPE,BIND(C): yes
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;               Fort T,BIND(C,name=&quot;a&quot;): yes
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                          Fort PRIVATE: yes
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                        Fort PROTECTED: yes
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                         Fort ABSTRACT: yes
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                     Fort ASYNCHRONOUS: yes
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                        Fort PROCEDURE: yes
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                         Fort C_FUNLOC: yes
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;               Fort f08 using wrappers: yes
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                       Fort MPI_SIZEOF: yes
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                           C profiling: yes
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                         C++ profiling: yes
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                 Fort mpif.h profiling: yes
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                Fort use mpi profiling: yes
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                 Fort use mpi_f08 prof: yes
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                        C++ exceptions: no
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                        Thread support: posix (MPI_THREAD_MULTIPLE: no,
</span><br>
<span class="quotelev1">&gt; OPAL
</span><br>
<span class="quotelev2">&gt; &gt;              support: yes,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                                        OMPI progress: no, ORTE progress:
</span><br>
<span class="quotelev1">&gt; yes,
</span><br>
<span class="quotelev2">&gt; &gt;              Event lib:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                                        yes)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                         Sparse Groups: no
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                Internal debug support: no
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                MPI interface warnings: yes
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                   MPI parameter check: runtime
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;              Memory profiling support: no
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;              Memory debugging support: no
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                       libltdl support: yes
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                 Heterogeneous support: no
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;               mpirun default --prefix: no
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                       MPI I/O support: yes
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                     MPI_WTIME support: gettimeofday
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                   Symbol vis. support: yes
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                 Host topology support: yes
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                        MPI extensions:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                 FT Checkpoint support: no (checkpoint thread: no)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                 C/R Enabled Debugging: no
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                   VampirTrace support: yes
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                MPI_MAX_PROCESSOR_NAME: 256
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                  MPI_MAX_ERROR_STRING: 256
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                   MPI_MAX_OBJECT_NAME: 64
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                      MPI_MAX_INFO_KEY: 36
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                      MPI_MAX_INFO_VAL: 256
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                     MPI_MAX_PORT_NAME: 1024
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                MPI_MAX_DATAREP_STRING: 128
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                         MCA backtrace: execinfo (MCA v2.0, API v2.0,
</span><br>
<span class="quotelev2">&gt; &gt;              Component v1.8.4)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                          MCA compress: bzip (MCA v2.0, API v2.0,
</span><br>
<span class="quotelev1">&gt; Component
</span><br>
<span class="quotelev2">&gt; &gt;              v1.8.4)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                          MCA compress: gzip (MCA v2.0, API v2.0,
</span><br>
<span class="quotelev1">&gt; Component
</span><br>
<span class="quotelev2">&gt; &gt;              v1.8.4)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                               MCA crs: none (MCA v2.0, API v2.0,
</span><br>
<span class="quotelev1">&gt; Component
</span><br>
<span class="quotelev2">&gt; &gt;              v1.8.4)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                                MCA db: hash (MCA v2.0, API v1.0,
</span><br>
<span class="quotelev1">&gt; Component
</span><br>
<span class="quotelev2">&gt; &gt;              v1.8.4)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                                MCA db: print (MCA v2.0, API v1.0,
</span><br>
<span class="quotelev1">&gt; Component
</span><br>
<span class="quotelev2">&gt; &gt;              v1.8.4)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                             MCA event: libevent2021 (MCA v2.0, API v2.0,
</span><br>
<span class="quotelev2">&gt; &gt;              Component v1.8.4)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                             MCA hwloc: external (MCA v2.0, API v2.0,
</span><br>
<span class="quotelev2">&gt; &gt;              Component v1.8.4)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                                MCA if: posix_ipv4 (MCA v2.0, API v2.0,
</span><br>
<span class="quotelev2">&gt; &gt;              Component v1.8.4)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                                MCA if: linux_ipv6 (MCA v2.0, API v2.0,
</span><br>
<span class="quotelev2">&gt; &gt;              Component v1.8.4)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                       MCA installdirs: env (MCA v2.0, API v2.0, Component
</span><br>
<span class="quotelev2">&gt; &gt;              v1.8.4)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                       MCA installdirs: config (MCA v2.0, API v2.0,
</span><br>
<span class="quotelev1">&gt; Component
</span><br>
<span class="quotelev2">&gt; &gt;              v1.8.4)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                        MCA memchecker: valgrind (MCA v2.0, API v2.0,
</span><br>
<span class="quotelev2">&gt; &gt;              Component v1.8.4)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                            MCA memory: linux (MCA v2.0, API v2.0,
</span><br>
<span class="quotelev1">&gt; Component
</span><br>
<span class="quotelev2">&gt; &gt;              v1.8.4)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                             MCA pstat: linux (MCA v2.0, API v2.0,
</span><br>
<span class="quotelev1">&gt; Component
</span><br>
<span class="quotelev2">&gt; &gt;              v1.8.4)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                               MCA sec: basic (MCA v2.0, API v1.0,
</span><br>
<span class="quotelev1">&gt; Component
</span><br>
<span class="quotelev2">&gt; &gt;              v1.8.4)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                             MCA shmem: mmap (MCA v2.0, API v2.0,
</span><br>
<span class="quotelev1">&gt; Component
</span><br>
<span class="quotelev2">&gt; &gt;              v1.8.4)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                             MCA shmem: posix (MCA v2.0, API v2.0,
</span><br>
<span class="quotelev1">&gt; Component
</span><br>
<span class="quotelev2">&gt; &gt;              v1.8.4)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                             MCA shmem: sysv (MCA v2.0, API v2.0,
</span><br>
<span class="quotelev1">&gt; Component
</span><br>
<span class="quotelev2">&gt; &gt;              v1.8.4)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                             MCA timer: linux (MCA v2.0, API v2.0,
</span><br>
<span class="quotelev1">&gt; Component
</span><br>
<span class="quotelev2">&gt; &gt;              v1.8.4)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                               MCA dfs: app (MCA v2.0, API v1.0, Component
</span><br>
<span class="quotelev2">&gt; &gt;              v1.8.4)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                               MCA dfs: orted (MCA v2.0, API v1.0,
</span><br>
<span class="quotelev1">&gt; Component
</span><br>
<span class="quotelev2">&gt; &gt;              v1.8.4)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                               MCA dfs: test (MCA v2.0, API v1.0,
</span><br>
<span class="quotelev1">&gt; Component
</span><br>
<span class="quotelev2">&gt; &gt;              v1.8.4)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                            MCA errmgr: default_app (MCA v2.0, API v3.0,
</span><br>
<span class="quotelev2">&gt; &gt;              Component v1.8.4)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                            MCA errmgr: default_hnp (MCA v2.0, API v3.0,
</span><br>
<span class="quotelev2">&gt; &gt;              Component v1.8.4)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                            MCA errmgr: default_orted (MCA v2.0, API v3.0,
</span><br>
<span class="quotelev2">&gt; &gt;              Component
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                                        v1.8.4)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                            MCA errmgr: default_tool (MCA v2.0, API v3.0,
</span><br>
<span class="quotelev2">&gt; &gt;              Component v1.8.4)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                               MCA ess: env (MCA v2.0, API v3.0, Component
</span><br>
<span class="quotelev2">&gt; &gt;              v1.8.4)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                               MCA ess: hnp (MCA v2.0, API v3.0, Component
</span><br>
<span class="quotelev2">&gt; &gt;              v1.8.4)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                               MCA ess: singleton (MCA v2.0, API v3.0,
</span><br>
<span class="quotelev2">&gt; &gt;              Component v1.8.4)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                               MCA ess: tool (MCA v2.0, API v3.0,
</span><br>
<span class="quotelev1">&gt; Component
</span><br>
<span class="quotelev2">&gt; &gt;              v1.8.4)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                             MCA filem: raw (MCA v2.0, API v2.0, Component
</span><br>
<span class="quotelev2">&gt; &gt;              v1.8.4)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                           MCA grpcomm: bad (MCA v2.0, API v2.0, Component
</span><br>
<span class="quotelev2">&gt; &gt;              v1.8.4)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                               MCA iof: hnp (MCA v2.0, API v2.0, Component
</span><br>
<span class="quotelev2">&gt; &gt;              v1.8.4)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                               MCA iof: mr_hnp (MCA v2.0, API v2.0,
</span><br>
<span class="quotelev1">&gt; Component
</span><br>
<span class="quotelev2">&gt; &gt;              v1.8.4)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                               MCA iof: mr_orted (MCA v2.0, API v2.0,
</span><br>
<span class="quotelev2">&gt; &gt;              Component v1.8.4)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                               MCA iof: orted (MCA v2.0, API v2.0,
</span><br>
<span class="quotelev1">&gt; Component
</span><br>
<span class="quotelev2">&gt; &gt;              v1.8.4)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                               MCA iof: tool (MCA v2.0, API v2.0,
</span><br>
<span class="quotelev1">&gt; Component
</span><br>
<span class="quotelev2">&gt; &gt;              v1.8.4)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                              MCA odls: default (MCA v2.0, API v2.0,
</span><br>
<span class="quotelev1">&gt; Component
</span><br>
<span class="quotelev2">&gt; &gt;              v1.8.4)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                               MCA oob: tcp (MCA v2.0, API v2.0, Component
</span><br>
<span class="quotelev2">&gt; &gt;              v1.8.4)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                               MCA plm: isolated (MCA v2.0, API v2.0,
</span><br>
<span class="quotelev2">&gt; &gt;              Component v1.8.4)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                               MCA plm: rsh (MCA v2.0, API v2.0, Component
</span><br>
<span class="quotelev2">&gt; &gt;              v1.8.4)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                               MCA ras: loadleveler (MCA v2.0, API v2.0,
</span><br>
<span class="quotelev2">&gt; &gt;              Component v1.8.4)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                               MCA ras: simulator (MCA v2.0, API v2.0,
</span><br>
<span class="quotelev2">&gt; &gt;              Component v1.8.4)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                             MCA rmaps: lama (MCA v2.0, API v2.0,
</span><br>
<span class="quotelev1">&gt; Component
</span><br>
<span class="quotelev2">&gt; &gt;              v1.8.4)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                             MCA rmaps: mindist (MCA v2.0, API v2.0,
</span><br>
<span class="quotelev1">&gt; Component
</span><br>
<span class="quotelev2">&gt; &gt;              v1.8.4)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                             MCA rmaps: ppr (MCA v2.0, API v2.0, Component
</span><br>
<span class="quotelev2">&gt; &gt;              v1.8.4)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                             MCA rmaps: rank_file (MCA v2.0, API v2.0,
</span><br>
<span class="quotelev2">&gt; &gt;              Component v1.8.4)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                             MCA rmaps: resilient (MCA v2.0, API v2.0,
</span><br>
<span class="quotelev2">&gt; &gt;              Component v1.8.4)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                             MCA rmaps: round_robin (MCA v2.0, API v2.0,
</span><br>
<span class="quotelev2">&gt; &gt;              Component v1.8.4)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                             MCA rmaps: seq (MCA v2.0, API v2.0, Component
</span><br>
<span class="quotelev2">&gt; &gt;              v1.8.4)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                             MCA rmaps: staged (MCA v2.0, API v2.0,
</span><br>
<span class="quotelev1">&gt; Component
</span><br>
<span class="quotelev2">&gt; &gt;              v1.8.4)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                               MCA rml: oob (MCA v2.0, API v2.0, Component
</span><br>
<span class="quotelev2">&gt; &gt;              v1.8.4)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                            MCA routed: binomial (MCA v2.0, API v2.0,
</span><br>
<span class="quotelev2">&gt; &gt;              Component v1.8.4)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                            MCA routed: debruijn (MCA v2.0, API v2.0,
</span><br>
<span class="quotelev2">&gt; &gt;              Component v1.8.4)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                            MCA routed: direct (MCA v2.0, API v2.0,
</span><br>
<span class="quotelev1">&gt; Component
</span><br>
<span class="quotelev2">&gt; &gt;              v1.8.4)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                            MCA routed: radix (MCA v2.0, API v2.0,
</span><br>
<span class="quotelev1">&gt; Component
</span><br>
<span class="quotelev2">&gt; &gt;              v1.8.4)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                             MCA state: app (MCA v2.0, API v1.0, Component
</span><br>
<span class="quotelev2">&gt; &gt;              v1.8.4)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                             MCA state: hnp (MCA v2.0, API v1.0, Component
</span><br>
<span class="quotelev2">&gt; &gt;              v1.8.4)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                             MCA state: novm (MCA v2.0, API v1.0,
</span><br>
<span class="quotelev1">&gt; Component
</span><br>
<span class="quotelev2">&gt; &gt;              v1.8.4)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                             MCA state: orted (MCA v2.0, API v1.0,
</span><br>
<span class="quotelev1">&gt; Component
</span><br>
<span class="quotelev2">&gt; &gt;              v1.8.4)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                             MCA state: staged_hnp (MCA v2.0, API v1.0,
</span><br>
<span class="quotelev2">&gt; &gt;              Component v1.8.4)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                             MCA state: staged_orted (MCA v2.0, API v1.0,
</span><br>
<span class="quotelev2">&gt; &gt;              Component v1.8.4)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                             MCA state: tool (MCA v2.0, API v1.0,
</span><br>
<span class="quotelev1">&gt; Component
</span><br>
<span class="quotelev2">&gt; &gt;              v1.8.4)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                         MCA allocator: basic (MCA v2.0, API v2.0,
</span><br>
<span class="quotelev1">&gt; Component
</span><br>
<span class="quotelev2">&gt; &gt;              v1.8.4)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                         MCA allocator: bucket (MCA v2.0, API v2.0,
</span><br>
<span class="quotelev1">&gt; Component
</span><br>
<span class="quotelev2">&gt; &gt;              v1.8.4)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                              MCA bcol: basesmuma (MCA v2.0, API v2.0,
</span><br>
<span class="quotelev2">&gt; &gt;              Component v1.8.4)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                              MCA bcol: ptpcoll (MCA v2.0, API v2.0,
</span><br>
<span class="quotelev1">&gt; Component
</span><br>
<span class="quotelev2">&gt; &gt;              v1.8.4)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                               MCA bml: r2 (MCA v2.0, API v2.0, Component
</span><br>
<span class="quotelev2">&gt; &gt;              v1.8.4)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                               MCA btl: self (MCA v2.0, API v2.0,
</span><br>
<span class="quotelev1">&gt; Component
</span><br>
<span class="quotelev2">&gt; &gt;              v1.8.4)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                               MCA btl: sm (MCA v2.0, API v2.0, Component
</span><br>
<span class="quotelev2">&gt; &gt;              v1.8.4)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                               MCA btl: tcp (MCA v2.0, API v2.0, Component
</span><br>
<span class="quotelev2">&gt; &gt;              v1.8.4)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                               MCA btl: vader (MCA v2.0, API v2.0,
</span><br>
<span class="quotelev1">&gt; Component
</span><br>
<span class="quotelev2">&gt; &gt;              v1.8.4)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                              MCA coll: basic (MCA v2.0, API v2.0,
</span><br>
<span class="quotelev1">&gt; Component
</span><br>
<span class="quotelev2">&gt; &gt;              v1.8.4)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                              MCA coll: hierarch (MCA v2.0, API v2.0,
</span><br>
<span class="quotelev2">&gt; &gt;              Component v1.8.4)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                              MCA coll: inter (MCA v2.0, API v2.0,
</span><br>
<span class="quotelev1">&gt; Component
</span><br>
<span class="quotelev2">&gt; &gt;              v1.8.4)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                              MCA coll: libnbc (MCA v2.0, API v2.0,
</span><br>
<span class="quotelev1">&gt; Component
</span><br>
<span class="quotelev2">&gt; &gt;              v1.8.4)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                              MCA coll: ml (MCA v2.0, API v2.0, Component
</span><br>
<span class="quotelev2">&gt; &gt;              v1.8.4)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                              MCA coll: self (MCA v2.0, API v2.0,
</span><br>
<span class="quotelev1">&gt; Component
</span><br>
<span class="quotelev2">&gt; &gt;              v1.8.4)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                              MCA coll: sm (MCA v2.0, API v2.0, Component
</span><br>
<span class="quotelev2">&gt; &gt;              v1.8.4)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                              MCA coll: tuned (MCA v2.0, API v2.0,
</span><br>
<span class="quotelev1">&gt; Component
</span><br>
<span class="quotelev2">&gt; &gt;              v1.8.4)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                               MCA dpm: orte (MCA v2.0, API v2.0,
</span><br>
<span class="quotelev1">&gt; Component
</span><br>
<span class="quotelev2">&gt; &gt;              v1.8.4)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                              MCA fbtl: posix (MCA v2.0, API v2.0,
</span><br>
<span class="quotelev1">&gt; Component
</span><br>
<span class="quotelev2">&gt; &gt;              v1.8.4)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                             MCA fcoll: dynamic (MCA v2.0, API v2.0,
</span><br>
<span class="quotelev1">&gt; Component
</span><br>
<span class="quotelev2">&gt; &gt;              v1.8.4)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                             MCA fcoll: individual (MCA v2.0, API v2.0,
</span><br>
<span class="quotelev2">&gt; &gt;              Component v1.8.4)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                             MCA fcoll: static (MCA v2.0, API v2.0,
</span><br>
<span class="quotelev1">&gt; Component
</span><br>
<span class="quotelev2">&gt; &gt;              v1.8.4)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                             MCA fcoll: two_phase (MCA v2.0, API v2.0,
</span><br>
<span class="quotelev2">&gt; &gt;              Component v1.8.4)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                             MCA fcoll: ylib (MCA v2.0, API v2.0,
</span><br>
<span class="quotelev1">&gt; Component
</span><br>
<span class="quotelev2">&gt; &gt;              v1.8.4)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                                MCA fs: ufs (MCA v2.0, API v2.0, Component
</span><br>
<span class="quotelev2">&gt; &gt;              v1.8.4)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                                MCA io: ompio (MCA v2.0, API v2.0,
</span><br>
<span class="quotelev1">&gt; Component
</span><br>
<span class="quotelev2">&gt; &gt;              v1.8.4)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                                MCA io: romio (MCA v2.0, API v2.0,
</span><br>
<span class="quotelev1">&gt; Component
</span><br>
<span class="quotelev2">&gt; &gt;              v1.8.4)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                             MCA mpool: grdma (MCA v2.0, API v2.0,
</span><br>
<span class="quotelev1">&gt; Component
</span><br>
<span class="quotelev2">&gt; &gt;              v1.8.4)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                             MCA mpool: sm (MCA v2.0, API v2.0, Component
</span><br>
<span class="quotelev2">&gt; &gt;              v1.8.4)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                               MCA osc: rdma (MCA v2.0, API v3.0,
</span><br>
<span class="quotelev1">&gt; Component
</span><br>
<span class="quotelev2">&gt; &gt;              v1.8.4)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                               MCA osc: sm (MCA v2.0, API v3.0, Component
</span><br>
<span class="quotelev2">&gt; &gt;              v1.8.4)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                               MCA pml: v (MCA v2.0, API v2.0, Component
</span><br>
<span class="quotelev2">&gt; &gt;              v1.8.4)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                               MCA pml: bfo (MCA v2.0, API v2.0, Component
</span><br>
<span class="quotelev2">&gt; &gt;              v1.8.4)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                               MCA pml: cm (MCA v2.0, API v2.0, Component
</span><br>
<span class="quotelev2">&gt; &gt;              v1.8.4)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                               MCA pml: ob1 (MCA v2.0, API v2.0, Component
</span><br>
<span class="quotelev2">&gt; &gt;              v1.8.4)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                            MCA pubsub: orte (MCA v2.0, API v2.0,
</span><br>
<span class="quotelev1">&gt; Component
</span><br>
<span class="quotelev2">&gt; &gt;              v1.8.4)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                            MCA rcache: vma (MCA v2.0, API v2.0, Component
</span><br>
<span class="quotelev2">&gt; &gt;              v1.8.4)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                               MCA rte: orte (MCA v2.0, API v2.0,
</span><br>
<span class="quotelev1">&gt; Component
</span><br>
<span class="quotelev2">&gt; &gt;              v1.8.4)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                              MCA sbgp: basesmsocket (MCA v2.0, API v2.0,
</span><br>
<span class="quotelev2">&gt; &gt;              Component v1.8.4)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                              MCA sbgp: basesmuma (MCA v2.0, API v2.0,
</span><br>
<span class="quotelev2">&gt; &gt;              Component v1.8.4)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                              MCA sbgp: p2p (MCA v2.0, API v2.0, Component
</span><br>
<span class="quotelev2">&gt; &gt;              v1.8.4)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                          MCA sharedfp: individual (MCA v2.0, API v2.0,
</span><br>
<span class="quotelev2">&gt; &gt;              Component v1.8.4)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                          MCA sharedfp: lockedfile (MCA v2.0, API v2.0,
</span><br>
<span class="quotelev2">&gt; &gt;              Component v1.8.4)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                          MCA sharedfp: sm (MCA v2.0, API v2.0, Component
</span><br>
<span class="quotelev2">&gt; &gt;              v1.8.4)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                              MCA topo: basic (MCA v2.0, API v2.1,
</span><br>
<span class="quotelev1">&gt; Component
</span><br>
<span class="quotelev2">&gt; &gt;              v1.8.4)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                         MCA vprotocol: pessimist (MCA v2.0, API v2.0,
</span><br>
<span class="quotelev2">&gt; &gt;              Component v1.8.4)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;              Sachin
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;              &gt;Sachin,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;              &gt;Can you, please, provide a command line? Additional
</span><br>
<span class="quotelev1">&gt; information
</span><br>
<span class="quotelev2">&gt; &gt;              about your
</span><br>
<span class="quotelev3">&gt; &gt;              &gt;system could be helpful also.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;              &gt;Josh
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;              &gt;&gt;On Wed, Feb 18, 2015 at 3:43 AM, Sachin Krishnan
</span><br>
<span class="quotelev2">&gt; &gt;              &lt;sachkris_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;              &gt;&gt; Hello,
</span><br>
<span class="quotelev4">&gt; &gt;              &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;              &gt;&gt; I am new to MPI and also this list.
</span><br>
<span class="quotelev4">&gt; &gt;              &gt;&gt; I wrote an MPI code with several MPI_Bcast calls in a
</span><br>
<span class="quotelev1">&gt; loop.
</span><br>
<span class="quotelev2">&gt; &gt;              My code was
</span><br>
<span class="quotelev4">&gt; &gt;              &gt;&gt; getting stuck at random points, ie it was not systematic.
</span><br>
<span class="quotelev2">&gt; &gt;              After a few hours
</span><br>
<span class="quotelev4">&gt; &gt;              &gt;&gt; of debugging and googling, I found that the issue may be
</span><br>
<span class="quotelev1">&gt; with
</span><br>
<span class="quotelev2">&gt; &gt;              the several
</span><br>
<span class="quotelev4">&gt; &gt;              &gt;&gt; MPI_Bcast calls in a loop.
</span><br>
<span class="quotelev4">&gt; &gt;              &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;              &gt;&gt; I stumbled on this test code which can reproduce the
</span><br>
<span class="quotelev1">&gt; issue:
</span><br>
<span class="quotelev4">&gt; &gt;              &gt;&gt;
</span><br>
<span class="quotelev1">&gt; <a href="https://github.com/fintler/ompi/blob/master/orte/test/mpi/bcast_loop.c">https://github.com/fintler/ompi/blob/master/orte/test/mpi/bcast_loop.c</a>
</span><br>
<span class="quotelev4">&gt; &gt;              &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;              &gt;&gt; Im using OpenMPI v1.8.4 installed from official Arch
</span><br>
<span class="quotelev1">&gt; Linux
</span><br>
<span class="quotelev2">&gt; &gt;              repo.
</span><br>
<span class="quotelev4">&gt; &gt;              &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;              &gt;&gt; Is it a known issue with OpenMPI?
</span><br>
<span class="quotelev4">&gt; &gt;              &gt;&gt; Is it some problem with the way openmpi is configured in
</span><br>
<span class="quotelev1">&gt; my
</span><br>
<span class="quotelev2">&gt; &gt;              system?
</span><br>
<span class="quotelev4">&gt; &gt;              &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;              &gt;&gt; Thanks in advance.
</span><br>
<span class="quotelev4">&gt; &gt;              &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;              &gt;&gt; Sachin
</span><br>
<span class="quotelev4">&gt; &gt;              &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;              &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;              &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;              &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;              &gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt;              &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;              &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;              Subscription:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt; &gt;              &gt;&gt; Link to this post:
</span><br>
<span class="quotelev4">&gt; &gt;              &gt;&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/02/26338.php">http://www.open-mpi.org/community/lists/users/2015/02/26338.php</a>
</span><br>
<span class="quotelev4">&gt; &gt;              &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;              _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt;              users mailing list
</span><br>
<span class="quotelev2">&gt; &gt;              users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;              Subscription:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;              Link to this post:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/02/26363.php">http://www.open-mpi.org/community/lists/users/2015/02/26363.php</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;            _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt;            users mailing list
</span><br>
<span class="quotelev2">&gt; &gt;            users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;            Subscription:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;            Link to this post:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/02/26366.php">http://www.open-mpi.org/community/lists/users/2015/02/26366.php</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;          _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt;          users mailing list
</span><br>
<span class="quotelev2">&gt; &gt;          users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;          Subscription:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;          Link to this post:
</span><br>
<span class="quotelev2">&gt; &gt;          <a href="http://www.open-mpi.org/community/lists/users/2015/02/26367.php">http://www.open-mpi.org/community/lists/users/2015/02/26367.php</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;        _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt;        users mailing list
</span><br>
<span class="quotelev2">&gt; &gt;        users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;        Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;        Link to this post:
</span><br>
<span class="quotelev2">&gt; &gt;        <a href="http://www.open-mpi.org/community/lists/users/2015/02/26368.php">http://www.open-mpi.org/community/lists/users/2015/02/26368.php</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;      _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt;      users mailing list
</span><br>
<span class="quotelev2">&gt; &gt;      users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;      Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;      Link to this post:
</span><br>
<span class="quotelev2">&gt; &gt;      <a href="http://www.open-mpi.org/community/lists/users/2015/02/26369.php">http://www.open-mpi.org/community/lists/users/2015/02/26369.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/02/26375.php">http://www.open-mpi.org/community/lists/users/2015/02/26375.php</a>
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/02/26376.php">http://www.open-mpi.org/community/lists/users/2015/02/26376.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26377/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26378.php">George Bosilca: "Re: [OMPI users] Several Bcast calls in a loop causing the code to hang"</a>
<li><strong>Previous message:</strong> <a href="26376.php">Nathan Hjelm: "Re: [OMPI users] Several Bcast calls in a loop causing the code to hang"</a>
<li><strong>In reply to:</strong> <a href="26376.php">Nathan Hjelm: "Re: [OMPI users] Several Bcast calls in a loop causing the code to hang"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26378.php">George Bosilca: "Re: [OMPI users] Several Bcast calls in a loop causing the code to hang"</a>
<li><strong>Reply:</strong> <a href="26378.php">George Bosilca: "Re: [OMPI users] Several Bcast calls in a loop causing the code to hang"</a>
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
