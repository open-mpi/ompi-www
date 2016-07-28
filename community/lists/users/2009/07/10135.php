<?
$subject_val = "Re: [OMPI users] Test works with 3 computers, but not 4?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 29 16:46:22 2009" -->
<!-- isoreceived="20090729204622" -->
<!-- sent="Wed, 29 Jul 2009 16:46:18 -0400" -->
<!-- isosent="20090729204618" -->
<!-- name="David Doria" -->
<!-- email="daviddoria+openmpi_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Test works with 3 computers, but not 4?" -->
<!-- id="c19fcadc0907291346o7161065ci2285ed11629f688d_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="DE465342-D75B-4278-AC6E-527C8BF333D7_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Test works with 3 computers, but not 4?<br>
<strong>From:</strong> David Doria (<em>daviddoria+openmpi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-29 16:46:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10136.php">Ralph Castain: "Re: [OMPI users] Test works with 3 computers, but not 4?"</a>
<li><strong>Previous message:</strong> <a href="10134.php">Nifty Tom Mitchell: "Re: [OMPI users] Test works with 3 computers, but not 4?"</a>
<li><strong>In reply to:</strong> <a href="10133.php">Ralph Castain: "Re: [OMPI users] Test works with 3 computers, but not 4?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10136.php">Ralph Castain: "Re: [OMPI users] Test works with 3 computers, but not 4?"</a>
<li><strong>Reply:</strong> <a href="10136.php">Ralph Castain: "Re: [OMPI users] Test works with 3 computers, but not 4?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Jul 29, 2009 at 4:15 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Using direct can cause scaling issues as every process will open a socket
</span><br>
<span class="quotelev1">&gt; to every other process in the job. You would at least have to ensure you
</span><br>
<span class="quotelev1">&gt; have enough file descriptors available on every node.
</span><br>
<span class="quotelev1">&gt; The most likely cause is either (a) a different OMPI version getting picked
</span><br>
<span class="quotelev1">&gt; up on one of the nodes, or (b) something blocking communication between at
</span><br>
<span class="quotelev1">&gt; least one of your other nodes. I would suspect the latter - perhaps a
</span><br>
<span class="quotelev1">&gt; firewall or something?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I''m disturbed by your not seeing any error output - that seems strange.
</span><br>
<span class="quotelev1">&gt; Try adding --debug-daemons to the cmd line. That should definitely generate
</span><br>
<span class="quotelev1">&gt; output from every daemon (at the least, they report they are alive).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Nifty, I used MPI_Get_processor_name - as you said, this is much more
<br>
helpful output. I also check all the versions and they seem to be fine -
<br>
'mpirun -V' says 1.3.3 on all 4 machines.
<br>
<p>The output with '-mca routed direct' is now (correctly):
<br>
[doriad_at_daviddoria MPITest]$ mpirun -H
<br>
10.1.2.126,10.1.2.122,10.1.2.123,10.1.2.125 -mca routed direct hello-mpi
<br>
Process 0 on daviddoria out of 4
<br>
Process 1 on cloud3 out of 4
<br>
Process 2 on cloud4 out of 4
<br>
Process 3 on cloud6 out of 4
<br>
<p>Here is the output with --debug-daemons.
<br>
<p>Is there a particular port / set of ports I can have my system admin unblock
<br>
on the firewall to see if that fixes it?
<br>
<p>[doriad_at_daviddoria MPITest]$ mpirun -H
<br>
10.1.2.126,10.1.2.122,10.1.2.123,10.1.2.125 --leave-session-attached
<br>
--debug-daemons -np 4 hello-mpi
<br>
<p><p>Daemon was launched on cloud3 - beginning to initialize
<br>
Daemon [[9461,0],1] checking in as pid 14707 on host cloud3
<br>
Daemon [[9461,0],1] not using static ports
<br>
[cloud3:14707] [[9461,0],1] orted: up and running - waiting for commands!
<br>
Daemon was launched on cloud4 - beginning to initialize
<br>
Daemon [[9461,0],2] checking in as pid 5987 on host cloud4
<br>
Daemon [[9461,0],2] not using static ports
<br>
[cloud4:05987] [[9461,0],2] orted: up and running - waiting for commands!
<br>
Daemon was launched on cloud6 - beginning to initialize
<br>
Daemon [[9461,0],3] checking in as pid 1037 on host cloud6
<br>
Daemon [[9461,0],3] not using static ports
<br>
[daviddoria:11061] [[9461,0],0] node[0].name daviddoria daemon 0 arch
<br>
ffca0200
<br>
[daviddoria:11061] [[9461,0],0] node[1].name 10 daemon 1 arch ffca0200
<br>
[daviddoria:11061] [[9461,0],0] node[2].name 10 daemon 2 arch ffca0200
<br>
[daviddoria:11061] [[9461,0],0] node[3].name 10 daemon 3 arch ffca0200
<br>
[daviddoria:11061] [[9461,0],0] orted_cmd: received add_local_procs
<br>
[cloud6:01037] [[9461,0],3] orted: up and running - waiting for commands!
<br>
[cloud3:14707] [[9461,0],1] node[0].name daviddoria daemon 0 arch ffca0200
<br>
[cloud3:14707] [[9461,0],1] node[1].name 10 daemon 1 arch ffca0200
<br>
[cloud3:14707] [[9461,0],1] node[2].name 10 daemon 2 arch ffca0200
<br>
[cloud3:14707] [[9461,0],1] node[3].name 10 daemon 3 arch ffca0200
<br>
[cloud4:05987] [[9461,0],2] node[0].name daviddoria daemon 0 arch ffca0200
<br>
[cloud4:05987] [[9461,0],2] node[1].name 10 daemon 1 arch ffca0200
<br>
[cloud4:05987] [[9461,0],2] node[2].name 10 daemon 2 arch ffca0200
<br>
[cloud4:05987] [[9461,0],2] node[3].name 10 daemon 3 arch ffca0200
<br>
[cloud4:05987] [[9461,0],2] orted_cmd: received add_local_procs
<br>
[cloud3:14707] [[9461,0],1] orted_cmd: received add_local_procs
<br>
[daviddoria:11061] [[9461,0],0] orted_recv: received sync+nidmap from local
<br>
proc [[9461,1],0]
<br>
[daviddoria:11061] [[9461,0],0] orted_cmd: received collective data cmd
<br>
[cloud4:05987] [[9461,0],2] orted_recv: received sync+nidmap from local proc
<br>
[[9461,1],2]
<br>
[daviddoria:11061] [[9461,0],0] orted_cmd: received collective data cmd
<br>
[cloud4:05987] [[9461,0],2] orted_cmd: received collective data cmd
<br>
<p>Any more thoughts?
<br>
<p>Thanks,
<br>
<p>David
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10135/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10136.php">Ralph Castain: "Re: [OMPI users] Test works with 3 computers, but not 4?"</a>
<li><strong>Previous message:</strong> <a href="10134.php">Nifty Tom Mitchell: "Re: [OMPI users] Test works with 3 computers, but not 4?"</a>
<li><strong>In reply to:</strong> <a href="10133.php">Ralph Castain: "Re: [OMPI users] Test works with 3 computers, but not 4?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10136.php">Ralph Castain: "Re: [OMPI users] Test works with 3 computers, but not 4?"</a>
<li><strong>Reply:</strong> <a href="10136.php">Ralph Castain: "Re: [OMPI users] Test works with 3 computers, but not 4?"</a>
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
