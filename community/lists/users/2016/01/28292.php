<?
$subject_val = "Re: [OMPI users] MPI, Fortran, and GET_ENVIRONMENT_VARIABLE";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 15 11:27:26 2016" -->
<!-- isoreceived="20160115162726" -->
<!-- sent="Fri, 15 Jan 2016 08:27:22 -0800" -->
<!-- isosent="20160115162722" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI, Fortran, and GET_ENVIRONMENT_VARIABLE" -->
<!-- id="E5DAB18C-EF4B-4680-B275-B6534155A213_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAFb48S_7G2So0kF3p6zCCaradX7D_Wkof-5A+QHT-dT3S1QgoA_at_mail.gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-01-15 11:27:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28293.php">Ralph Castain: "Re: [OMPI users] Openmpi 1.8.8 and affinty"</a>
<li><strong>Previous message:</strong> <a href="28291.php">Matt Thompson: "Re: [OMPI users] MPI, Fortran, and GET_ENVIRONMENT_VARIABLE"</a>
<li><strong>In reply to:</strong> <a href="28291.php">Matt Thompson: "Re: [OMPI users] MPI, Fortran, and GET_ENVIRONMENT_VARIABLE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28294.php">Nick Papior: "Re: [OMPI users] MPI, Fortran, and GET_ENVIRONMENT_VARIABLE"</a>
<li><strong>Reply:</strong> <a href="28294.php">Nick Papior: "Re: [OMPI users] MPI, Fortran, and GET_ENVIRONMENT_VARIABLE"</a>
<li><strong>Reply:</strong> <a href="28296.php">Matt Thompson: "Re: [OMPI users] MPI, Fortran, and GET_ENVIRONMENT_VARIABLE"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes, we don&#226;&#128;&#153;t propagate envars ourselves other than MCA params. You can ask mpirun to forward specific envars to every proc, but that would only push the same value to everyone, and that doesn&#226;&#128;&#153;t sound like what you are looking for.
<br>
<p>FWIW: we are working on adding the ability to directly query the info you are seeking - i.e., to ask for things like &#226;&#128;&#156;which procs are on the same switch as me?&#226;&#128;&#157;. Hoping to have it later this year, perhaps in the summer.
<br>
<p><p><span class="quotelev1">&gt; On Jan 15, 2016, at 7:56 AM, Matt Thompson &lt;fortran_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That doesn't help:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (1004) $ mpirun -map-by node -np 8 ./hostenv.x | sort -g -k2
</span><br>
<span class="quotelev1">&gt; Process    0 of    8 is on host borgo086
</span><br>
<span class="quotelev1">&gt; Process    0 of    8 is on processor borgo086
</span><br>
<span class="quotelev1">&gt; Process    1 of    8 is on host borgo086
</span><br>
<span class="quotelev1">&gt; Process    1 of    8 is on processor borgo140
</span><br>
<span class="quotelev1">&gt; Process    2 of    8 is on host borgo086
</span><br>
<span class="quotelev1">&gt; Process    2 of    8 is on processor borgo086
</span><br>
<span class="quotelev1">&gt; Process    3 of    8 is on host borgo086
</span><br>
<span class="quotelev1">&gt; Process    3 of    8 is on processor borgo140
</span><br>
<span class="quotelev1">&gt; Process    4 of    8 is on host borgo086
</span><br>
<span class="quotelev1">&gt; Process    4 of    8 is on processor borgo086
</span><br>
<span class="quotelev1">&gt; Process    5 of    8 is on host borgo086
</span><br>
<span class="quotelev1">&gt; Process    5 of    8 is on processor borgo140
</span><br>
<span class="quotelev1">&gt; Process    6 of    8 is on host borgo086
</span><br>
<span class="quotelev1">&gt; Process    6 of    8 is on processor borgo086
</span><br>
<span class="quotelev1">&gt; Process    7 of    8 is on host borgo086
</span><br>
<span class="quotelev1">&gt; Process    7 of    8 is on processor borgo140
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But it was doing the right thing before. It saw my SLURM_* bits and correctly put 4 processes on the first node and 4 on the second (see the processor line which is from MPI, not the environment), and I only asked for 4 tasks per node:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; SLURM_NODELIST=borgo[086,140]
</span><br>
<span class="quotelev1">&gt; SLURM_NTASKS_PER_NODE=4
</span><br>
<span class="quotelev1">&gt; SLURM_NNODES=2
</span><br>
<span class="quotelev1">&gt; SLURM_NTASKS=8
</span><br>
<span class="quotelev1">&gt; SLURM_TASKS_PER_NODE=4(x2)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My guess is no MPI stack wants to propagate an environment variable to every process. I'm picturing an 1000 node/28000 core job...and poor Open MPI (or MPT or Intel MPI) would have to marshall 28000xN environment variables around and keep track of who gets what...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Matt
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Fri, Jan 15, 2016 at 10:48 AM, Ralph Castain &lt;rhc_at_[hidden] &lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Actually, the explanation is much simpler. You probably have more than 8 slots on borgj020, and so your job is simply small enough that we put it all on one host. If you want to force the job to use both hosts, add &#226;&#128;&#156;-map-by node&#226;&#128;&#157; to your cmd line
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Jan 15, 2016, at 7:02 AM, Jim Edwards &lt;jedwards_at_[hidden] &lt;mailto:jedwards_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Fri, Jan 15, 2016 at 7:53 AM, Matt Thompson &lt;fortran_at_[hidden] &lt;mailto:fortran_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; All,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'm not too sure if this is an MPI issue, a Fortran issue, or something else but I thought I'd ask the MPI gurus here first since my web search failed me.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; There is a chance in the future I might want/need to query an environment variable in a Fortran program, namely to figure out what switch a currently running process is on (via SLURM_TOPOLOGY_ADDR in my case) and perhaps make a &quot;per-switch&quot; communicator.[1]
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
<span class="quotelev2">&gt;&gt;    write (*,'(A,X,I4,X,A,X,I4,X,A,X,A)') &quot;Process&quot;, myid, &quot;of&quot;, npes, &quot;is on processor&quot;, trim(processor_name)
</span><br>
<span class="quotelev2">&gt;&gt;    write (*,'(A,X,I4,X,A,X,I4,X,A,X,A)') &quot;Process&quot;, myid, &quot;of&quot;, npes, &quot;is on host&quot;, trim(host_name)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I decided to try out with the HOST environment variable first because it is simple and different per node (I didn't want to take many, many nodes to find the point when a switch is traversed). I then grabbed two nodes with 4 processes per node and...:
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
<span class="quotelev2">&gt;&gt; It looks like MPI_Get_Processor_Name is doing its thing, but the HOST one seems to only be reflecting the first host. My guess is that OpenMPI doesn't export every processes' environment separately to every process so it is reflecting HOST from process 0.
</span><br>
<span class="quotelev2">&gt;&gt; &#226;&#128;&#139;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; &#226;&#128;&#139;I would guess that what is actually happening is that slurm is exporting all of the variables from the host node including the $HOST variable and overwriting the &#226;&#128;&#139;
</span><br>
<span class="quotelev2">&gt;&gt; &#226;&#128;&#139;defaults on other nodes.   You should use the SLURM options to limit the list of 
</span><br>
<span class="quotelev2">&gt;&gt; variables that you export from the host to only those that you need.&#226;&#128;&#139;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; &#226;&#128;&#139;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; So, I guess my question is: can this be done? Is there an option to Open MPI that might do it? Or is this just something MPI doesn't do? Or is my Google-fu just too weak to figure out the right search-phrase to find the answer to this probable FAQ?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Matt
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; [1] Note, this might be unnecessary, but I got to the point where I wanted to see if I *could* do it, rather than *should*.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Matt Thompson
</span><br>
<span class="quotelev2">&gt;&gt; Man Among Men
</span><br>
<span class="quotelev2">&gt;&gt; Fulcrum of History
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/01/28287.php">http://www.open-mpi.org/community/lists/users/2016/01/28287.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2016/01/28287.php">http://www.open-mpi.org/community/lists/users/2016/01/28287.php</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jim Edwards
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; CESM Software Engineer
</span><br>
<span class="quotelev2">&gt;&gt; National Center for Atmospheric Research
</span><br>
<span class="quotelev2">&gt;&gt; Boulder, CO 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/01/28289.php">http://www.open-mpi.org/community/lists/users/2016/01/28289.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2016/01/28289.php">http://www.open-mpi.org/community/lists/users/2016/01/28289.php</a>&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/01/28290.php">http://www.open-mpi.org/community/lists/users/2016/01/28290.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2016/01/28290.php">http://www.open-mpi.org/community/lists/users/2016/01/28290.php</a>&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Matt Thompson
</span><br>
<span class="quotelev1">&gt; Man Among Men
</span><br>
<span class="quotelev1">&gt; Fulcrum of History
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/01/28291.php">http://www.open-mpi.org/community/lists/users/2016/01/28291.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28292/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28293.php">Ralph Castain: "Re: [OMPI users] Openmpi 1.8.8 and affinty"</a>
<li><strong>Previous message:</strong> <a href="28291.php">Matt Thompson: "Re: [OMPI users] MPI, Fortran, and GET_ENVIRONMENT_VARIABLE"</a>
<li><strong>In reply to:</strong> <a href="28291.php">Matt Thompson: "Re: [OMPI users] MPI, Fortran, and GET_ENVIRONMENT_VARIABLE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28294.php">Nick Papior: "Re: [OMPI users] MPI, Fortran, and GET_ENVIRONMENT_VARIABLE"</a>
<li><strong>Reply:</strong> <a href="28294.php">Nick Papior: "Re: [OMPI users] MPI, Fortran, and GET_ENVIRONMENT_VARIABLE"</a>
<li><strong>Reply:</strong> <a href="28296.php">Matt Thompson: "Re: [OMPI users] MPI, Fortran, and GET_ENVIRONMENT_VARIABLE"</a>
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
