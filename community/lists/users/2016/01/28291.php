<?
$subject_val = "Re: [OMPI users] MPI, Fortran, and GET_ENVIRONMENT_VARIABLE";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 15 10:56:38 2016" -->
<!-- isoreceived="20160115155638" -->
<!-- sent="Fri, 15 Jan 2016 10:56:07 -0500" -->
<!-- isosent="20160115155607" -->
<!-- name="Matt Thompson" -->
<!-- email="fortran_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI, Fortran, and GET_ENVIRONMENT_VARIABLE" -->
<!-- id="CAFb48S_7G2So0kF3p6zCCaradX7D_Wkof-5A+QHT-dT3S1QgoA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="00EF1209-6FD2-42DE-8345-B58CD0122B2A_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI, Fortran, and GET_ENVIRONMENT_VARIABLE<br>
<strong>From:</strong> Matt Thompson (<em>fortran_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-01-15 10:56:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28292.php">Ralph Castain: "Re: [OMPI users] MPI, Fortran, and GET_ENVIRONMENT_VARIABLE"</a>
<li><strong>Previous message:</strong> <a href="28290.php">Ralph Castain: "Re: [OMPI users] MPI, Fortran, and GET_ENVIRONMENT_VARIABLE"</a>
<li><strong>In reply to:</strong> <a href="28290.php">Ralph Castain: "Re: [OMPI users] MPI, Fortran, and GET_ENVIRONMENT_VARIABLE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28292.php">Ralph Castain: "Re: [OMPI users] MPI, Fortran, and GET_ENVIRONMENT_VARIABLE"</a>
<li><strong>Reply:</strong> <a href="28292.php">Ralph Castain: "Re: [OMPI users] MPI, Fortran, and GET_ENVIRONMENT_VARIABLE"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph,
<br>
<p>That doesn't help:
<br>
<p>(1004) $ mpirun -map-by node -np 8 ./hostenv.x | sort -g -k2
<br>
Process    0 of    8 is on host borgo086
<br>
Process    0 of    8 is on processor borgo086
<br>
Process    1 of    8 is on host borgo086
<br>
Process    1 of    8 is on processor borgo140
<br>
Process    2 of    8 is on host borgo086
<br>
Process    2 of    8 is on processor borgo086
<br>
Process    3 of    8 is on host borgo086
<br>
Process    3 of    8 is on processor borgo140
<br>
Process    4 of    8 is on host borgo086
<br>
Process    4 of    8 is on processor borgo086
<br>
Process    5 of    8 is on host borgo086
<br>
Process    5 of    8 is on processor borgo140
<br>
Process    6 of    8 is on host borgo086
<br>
Process    6 of    8 is on processor borgo086
<br>
Process    7 of    8 is on host borgo086
<br>
Process    7 of    8 is on processor borgo140
<br>
<p>But it was doing the right thing before. It saw my SLURM_* bits and
<br>
correctly put 4 processes on the first node and 4 on the second (see the
<br>
processor line which is from MPI, not the environment), and I only asked
<br>
for 4 tasks per node:
<br>
<p>SLURM_NODELIST=borgo[086,140]
<br>
SLURM_NTASKS_PER_NODE=4
<br>
SLURM_NNODES=2
<br>
SLURM_NTASKS=8
<br>
SLURM_TASKS_PER_NODE=4(x2)
<br>
<p>My guess is no MPI stack wants to propagate an environment variable to
<br>
every process. I'm picturing an 1000 node/28000 core job...and poor Open
<br>
MPI (or MPT or Intel MPI) would have to marshall 28000xN environment
<br>
variables around and keep track of who gets what...
<br>
<p>Matt
<br>
<p><p>On Fri, Jan 15, 2016 at 10:48 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Actually, the explanation is much simpler. You probably have more than 8
</span><br>
<span class="quotelev1">&gt; slots on borgj020, and so your job is simply small enough that we put it
</span><br>
<span class="quotelev1">&gt; all on one host. If you want to force the job to use both hosts, add
</span><br>
<span class="quotelev1">&gt; &#226;&#128;&#156;-map-by node&#226;&#128;&#157; to your cmd line
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 15, 2016, at 7:02 AM, Jim Edwards &lt;jedwards_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Fri, Jan 15, 2016 at 7:53 AM, Matt Thompson &lt;fortran_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; All,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm not too sure if this is an MPI issue, a Fortran issue, or something
</span><br>
<span class="quotelev2">&gt;&gt; else but I thought I'd ask the MPI gurus here first since my web search
</span><br>
<span class="quotelev2">&gt;&gt; failed me.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; There is a chance in the future I might want/need to query an environment
</span><br>
<span class="quotelev2">&gt;&gt; variable in a Fortran program, namely to figure out what switch a currently
</span><br>
<span class="quotelev2">&gt;&gt; running process is on (via SLURM_TOPOLOGY_ADDR in my case) and perhaps make
</span><br>
<span class="quotelev2">&gt;&gt; a &quot;per-switch&quot; communicator.[1]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So, I coded up a boring Fortran program whose only exciting lines are:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    call MPI_Get_Processor_Name(processor_name,name_length,ierror)
</span><br>
<span class="quotelev2">&gt;&gt;    call get_environment_variable(&quot;HOST&quot;,host_name)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    write (*,'(A,X,I4,X,A,X,I4,X,A,X,A)') &quot;Process&quot;, myid, &quot;of&quot;, npes, &quot;is
</span><br>
<span class="quotelev2">&gt;&gt; on processor&quot;, trim(processor_name)
</span><br>
<span class="quotelev2">&gt;&gt;    write (*,'(A,X,I4,X,A,X,I4,X,A,X,A)') &quot;Process&quot;, myid, &quot;of&quot;, npes, &quot;is
</span><br>
<span class="quotelev2">&gt;&gt; on host&quot;, trim(host_name)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I decided to try out with the HOST environment variable first because it
</span><br>
<span class="quotelev2">&gt;&gt; is simple and different per node (I didn't want to take many, many nodes to
</span><br>
<span class="quotelev2">&gt;&gt; find the point when a switch is traversed). I then grabbed two nodes with 4
</span><br>
<span class="quotelev2">&gt;&gt; processes per node and...:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; (1046) $ echo &quot;$SLURM_NODELIST&quot;
</span><br>
<span class="quotelev2">&gt;&gt; borgj[020,036]
</span><br>
<span class="quotelev2">&gt;&gt; (1047) $ pdsh -w &quot;$SLURM_NODELIST&quot; echo '$HOST'
</span><br>
<span class="quotelev2">&gt;&gt; borgj036: borgj036
</span><br>
<span class="quotelev2">&gt;&gt; borgj020: borgj020
</span><br>
<span class="quotelev2">&gt;&gt; (1048) $ mpifort -o hostenv.x hostenv.F90
</span><br>
<span class="quotelev2">&gt;&gt; (1049) $ mpirun -np 8 ./hostenv.x | sort -g -k2
</span><br>
<span class="quotelev2">&gt;&gt; Process    0 of    8 is on host borgj020
</span><br>
<span class="quotelev2">&gt;&gt; Process    0 of    8 is on processor borgj020
</span><br>
<span class="quotelev2">&gt;&gt; Process    1 of    8 is on host borgj020
</span><br>
<span class="quotelev2">&gt;&gt; Process    1 of    8 is on processor borgj020
</span><br>
<span class="quotelev2">&gt;&gt; Process    2 of    8 is on host borgj020
</span><br>
<span class="quotelev2">&gt;&gt; Process    2 of    8 is on processor borgj020
</span><br>
<span class="quotelev2">&gt;&gt; Process    3 of    8 is on host borgj020
</span><br>
<span class="quotelev2">&gt;&gt; Process    3 of    8 is on processor borgj020
</span><br>
<span class="quotelev2">&gt;&gt; Process    4 of    8 is on host borgj020
</span><br>
<span class="quotelev2">&gt;&gt; Process    4 of    8 is on processor borgj036
</span><br>
<span class="quotelev2">&gt;&gt; Process    5 of    8 is on host borgj020
</span><br>
<span class="quotelev2">&gt;&gt; Process    5 of    8 is on processor borgj036
</span><br>
<span class="quotelev2">&gt;&gt; Process    6 of    8 is on host borgj020
</span><br>
<span class="quotelev2">&gt;&gt; Process    6 of    8 is on processor borgj036
</span><br>
<span class="quotelev2">&gt;&gt; Process    7 of    8 is on host borgj020
</span><br>
<span class="quotelev2">&gt;&gt; Process    7 of    8 is on processor borgj036
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It looks like MPI_Get_Processor_Name is doing its thing, but the HOST one
</span><br>
<span class="quotelev2">&gt;&gt; seems to only be reflecting the first host. My guess is that OpenMPI
</span><br>
<span class="quotelev2">&gt;&gt; doesn't export every processes' environment separately to every process so
</span><br>
<span class="quotelev2">&gt;&gt; it is reflecting HOST from process 0.
</span><br>
<span class="quotelev2">&gt;&gt; &#226;&#128;&#139;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#226;&#128;&#139;I would guess that what is actually happening is that slurm is exporting
</span><br>
<span class="quotelev1">&gt; all of the variables from the host node including the $HOST variable and
</span><br>
<span class="quotelev1">&gt; overwriting the &#226;&#128;&#139;
</span><br>
<span class="quotelev1">&gt; &#226;&#128;&#139;defaults on other nodes.   You should use the SLURM options to limit the
</span><br>
<span class="quotelev1">&gt; list of
</span><br>
<span class="quotelev1">&gt; variables that you export from the host to only those that you need.&#226;&#128;&#139;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &#226;&#128;&#139;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So, I guess my question is: can this be done? Is there an option to Open
</span><br>
<span class="quotelev2">&gt;&gt; MPI that might do it? Or is this just something MPI doesn't do? Or is my
</span><br>
<span class="quotelev2">&gt;&gt; Google-fu just too weak to figure out the right search-phrase to find the
</span><br>
<span class="quotelev2">&gt;&gt; answer to this probable FAQ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Matt
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [1] Note, this might be unnecessary, but I got to the point where I
</span><br>
<span class="quotelev2">&gt;&gt; wanted to see if I *could* do it, rather than *should*.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Matt Thompson
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Man Among Men
</span><br>
<span class="quotelev2">&gt;&gt; Fulcrum of History
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
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/01/28287.php">http://www.open-mpi.org/community/lists/users/2016/01/28287.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jim Edwards
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; CESM Software Engineer
</span><br>
<span class="quotelev1">&gt; National Center for Atmospheric Research
</span><br>
<span class="quotelev1">&gt; Boulder, CO
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/01/28289.php">http://www.open-mpi.org/community/lists/users/2016/01/28289.php</a>
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/01/28290.php">http://www.open-mpi.org/community/lists/users/2016/01/28290.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Matt Thompson
Man Among Men
Fulcrum of History
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28291/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28292.php">Ralph Castain: "Re: [OMPI users] MPI, Fortran, and GET_ENVIRONMENT_VARIABLE"</a>
<li><strong>Previous message:</strong> <a href="28290.php">Ralph Castain: "Re: [OMPI users] MPI, Fortran, and GET_ENVIRONMENT_VARIABLE"</a>
<li><strong>In reply to:</strong> <a href="28290.php">Ralph Castain: "Re: [OMPI users] MPI, Fortran, and GET_ENVIRONMENT_VARIABLE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28292.php">Ralph Castain: "Re: [OMPI users] MPI, Fortran, and GET_ENVIRONMENT_VARIABLE"</a>
<li><strong>Reply:</strong> <a href="28292.php">Ralph Castain: "Re: [OMPI users] MPI, Fortran, and GET_ENVIRONMENT_VARIABLE"</a>
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
