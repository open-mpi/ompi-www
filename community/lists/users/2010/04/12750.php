<?
$subject_val = "Re: [OMPI users] Dynamic processes connection and segfault on MPI_Comm_accept";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 23 10:10:45 2010" -->
<!-- isoreceived="20100423141045" -->
<!-- sent="Fri, 23 Apr 2010 16:10:39 +0200" -->
<!-- isosent="20100423141039" -->
<!-- name="Grzegorz Maj" -->
<!-- email="maju3_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Dynamic processes connection and segfault on MPI_Comm_accept" -->
<!-- id="t2t464cc18f1004230710re24ef4bet69c50aa42b4ef0c8_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="x2n464cc18f1004230619p758aca8bl7e938ed40a43d200_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Dynamic processes connection and segfault on MPI_Comm_accept<br>
<strong>From:</strong> Grzegorz Maj (<em>maju3_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-23 10:10:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12751.php">Mario Ogrizek: "Re: [OMPI users] mpirun -np 4 hello_world; on a eight processor 	shared memory machine produces wrong output"</a>
<li><strong>Previous message:</strong> <a href="12749.php">Grzegorz Maj: "Re: [OMPI users] Dynamic processes connection and segfault on MPI_Comm_accept"</a>
<li><strong>In reply to:</strong> <a href="12749.php">Grzegorz Maj: "Re: [OMPI users] Dynamic processes connection and segfault on MPI_Comm_accept"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12760.php">Ralph Castain: "Re: [OMPI users] Dynamic processes connection and segfault on MPI_Comm_accept"</a>
<li><strong>Reply:</strong> <a href="12760.php">Ralph Castain: "Re: [OMPI users] Dynamic processes connection and segfault on MPI_Comm_accept"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
To be more precise: by 'server process' I mean some process that I
<br>
could run once on my system and it could help in creating those
<br>
groups.
<br>
My typical scenario is:
<br>
1. run N separate processes, each without mpirun
<br>
2. connect them into MPI group
<br>
3. do some job
<br>
4. exit all N processes
<br>
5. goto 1
<br>
<p>2010/4/23 Grzegorz Maj &lt;maju3_at_[hidden]&gt;:
<br>
<span class="quotelev1">&gt; Thank you Ralph for your explanation.
</span><br>
<span class="quotelev1">&gt; And, apart from that descriptors' issue, is there any other way to
</span><br>
<span class="quotelev1">&gt; solve my problem, i.e. to run separately a number of processes,
</span><br>
<span class="quotelev1">&gt; without mpirun and then to collect them into an MPI intracomm group?
</span><br>
<span class="quotelev1">&gt; If I for example would need to run some 'server process' (even using
</span><br>
<span class="quotelev1">&gt; mpirun) for this task, that's OK. Any ideas?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Grzegorz Maj
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2010/4/18 Ralph Castain &lt;rhc_at_[hidden]&gt;:
</span><br>
<span class="quotelev2">&gt;&gt; Okay, but here is the problem. If you don't use mpirun, and are not operating in an environment we support for &quot;direct&quot; launch (i.e., starting processes outside of mpirun), then every one of those processes thinks it is a singleton - yes?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; What you may not realize is that each singleton immediately fork/exec's an orted daemon that is configured to behave just like mpirun. This is required in order to support MPI-2 operations such as MPI_Comm_spawn, MPI_Comm_connect/accept, etc.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So if you launch 64 processes that think they are singletons, then you have 64 copies of orted running as well. This eats up a lot of file descriptors, which is probably why you are hitting this 65 process limit - your system is probably running out of file descriptors. You might check you system limits and see if you can get them revised upward.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Apr 17, 2010, at 4:24 PM, Grzegorz Maj wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Yes, I know. The problem is that I need to use some special way for
</span><br>
<span class="quotelev3">&gt;&gt;&gt; running my processes provided by the environment in which I'm working
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and unfortunately I can't use mpirun.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2010/4/18 Ralph Castain &lt;rhc_at_[hidden]&gt;:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Guess I don't understand why you can't use mpirun - all it does is start things, provide a means to forward io, etc. It mainly sits there quietly without using any cpu unless required to support the job.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Sounds like it would solve your problem. Otherwise, I know of no way to get all these processes into comm_world.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Apr 17, 2010, at 2:27 PM, Grzegorz Maj wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I'd like to dynamically create a group of processes communicating via
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MPI. Those processes need to be run without mpirun and create
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; intracommunicator after the startup. Any ideas how to do this
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; efficiently?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I came up with a solution in which the processes are connecting one by
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; one using MPI_Comm_connect, but unfortunately all the processes that
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; are already in the group need to call MPI_Comm_accept. This means that
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; when the n-th process wants to connect I need to collect all the n-1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; processes on the MPI_Comm_accept call. After I run about 40 processes
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; every subsequent call takes more and more time, which I'd like to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; avoid.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Another problem in this solution is that when I try to connect 66-th
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; process the root of the existing group segfaults on MPI_Comm_accept.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Maybe it's my bug, but it's weird as everything works fine for at most
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 65 processes. Is there any limitation I don't know about?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; My last question is about MPI_COMM_WORLD. When I run my processes
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; without mpirun their MPI_COMM_WORLD is the same as MPI_COMM_SELF. Is
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; there any way to change MPI_COMM_WORLD and set it to the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; intracommunicator that I've created?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Grzegorz Maj
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12751.php">Mario Ogrizek: "Re: [OMPI users] mpirun -np 4 hello_world; on a eight processor 	shared memory machine produces wrong output"</a>
<li><strong>Previous message:</strong> <a href="12749.php">Grzegorz Maj: "Re: [OMPI users] Dynamic processes connection and segfault on MPI_Comm_accept"</a>
<li><strong>In reply to:</strong> <a href="12749.php">Grzegorz Maj: "Re: [OMPI users] Dynamic processes connection and segfault on MPI_Comm_accept"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12760.php">Ralph Castain: "Re: [OMPI users] Dynamic processes connection and segfault on MPI_Comm_accept"</a>
<li><strong>Reply:</strong> <a href="12760.php">Ralph Castain: "Re: [OMPI users] Dynamic processes connection and segfault on MPI_Comm_accept"</a>
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
