<?
$subject_val = "Re: [OMPI users] MPI, Fortran, and GET_ENVIRONMENT_VARIABLE";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 15 10:48:58 2016" -->
<!-- isoreceived="20160115154858" -->
<!-- sent="Fri, 15 Jan 2016 07:48:54 -0800" -->
<!-- isosent="20160115154854" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI, Fortran, and GET_ENVIRONMENT_VARIABLE" -->
<!-- id="00EF1209-6FD2-42DE-8345-B58CD0122B2A_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAPuR+ZihnxB5zDh3HVj3F27u95EHNwoSUZCpHVVKG0y9ORA=Ww_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2016-01-15 10:48:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28291.php">Matt Thompson: "Re: [OMPI users] MPI, Fortran, and GET_ENVIRONMENT_VARIABLE"</a>
<li><strong>Previous message:</strong> <a href="28289.php">Jim Edwards: "Re: [OMPI users] MPI, Fortran, and GET_ENVIRONMENT_VARIABLE"</a>
<li><strong>In reply to:</strong> <a href="28289.php">Jim Edwards: "Re: [OMPI users] MPI, Fortran, and GET_ENVIRONMENT_VARIABLE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28291.php">Matt Thompson: "Re: [OMPI users] MPI, Fortran, and GET_ENVIRONMENT_VARIABLE"</a>
<li><strong>Reply:</strong> <a href="28291.php">Matt Thompson: "Re: [OMPI users] MPI, Fortran, and GET_ENVIRONMENT_VARIABLE"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Actually, the explanation is much simpler. You probably have more than 8 slots on borgj020, and so your job is simply small enough that we put it all on one host. If you want to force the job to use both hosts, add &#226;&#128;&#156;-map-by node&#226;&#128;&#157; to your cmd line
<br>
<p><p><span class="quotelev1">&gt; On Jan 15, 2016, at 7:02 AM, Jim Edwards &lt;jedwards_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Fri, Jan 15, 2016 at 7:53 AM, Matt Thompson &lt;fortran_at_[hidden] &lt;mailto:fortran_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; All,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm not too sure if this is an MPI issue, a Fortran issue, or something else but I thought I'd ask the MPI gurus here first since my web search failed me.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There is a chance in the future I might want/need to query an environment variable in a Fortran program, namely to figure out what switch a currently running process is on (via SLURM_TOPOLOGY_ADDR in my case) and perhaps make a &quot;per-switch&quot; communicator.[1]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So, I coded up a boring Fortran program whose only exciting lines are:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    call MPI_Get_Processor_Name(processor_name,name_length,ierror)
</span><br>
<span class="quotelev1">&gt;    call get_environment_variable(&quot;HOST&quot;,host_name)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    write (*,'(A,X,I4,X,A,X,I4,X,A,X,A)') &quot;Process&quot;, myid, &quot;of&quot;, npes, &quot;is on processor&quot;, trim(processor_name)
</span><br>
<span class="quotelev1">&gt;    write (*,'(A,X,I4,X,A,X,I4,X,A,X,A)') &quot;Process&quot;, myid, &quot;of&quot;, npes, &quot;is on host&quot;, trim(host_name)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I decided to try out with the HOST environment variable first because it is simple and different per node (I didn't want to take many, many nodes to find the point when a switch is traversed). I then grabbed two nodes with 4 processes per node and...:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (1046) $ echo &quot;$SLURM_NODELIST&quot;
</span><br>
<span class="quotelev1">&gt; borgj[020,036]
</span><br>
<span class="quotelev1">&gt; (1047) $ pdsh -w &quot;$SLURM_NODELIST&quot; echo '$HOST'
</span><br>
<span class="quotelev1">&gt; borgj036: borgj036
</span><br>
<span class="quotelev1">&gt; borgj020: borgj020
</span><br>
<span class="quotelev1">&gt; (1048) $ mpifort -o hostenv.x hostenv.F90
</span><br>
<span class="quotelev1">&gt; (1049) $ mpirun -np 8 ./hostenv.x | sort -g -k2
</span><br>
<span class="quotelev1">&gt; Process    0 of    8 is on host borgj020
</span><br>
<span class="quotelev1">&gt; Process    0 of    8 is on processor borgj020
</span><br>
<span class="quotelev1">&gt; Process    1 of    8 is on host borgj020
</span><br>
<span class="quotelev1">&gt; Process    1 of    8 is on processor borgj020
</span><br>
<span class="quotelev1">&gt; Process    2 of    8 is on host borgj020
</span><br>
<span class="quotelev1">&gt; Process    2 of    8 is on processor borgj020
</span><br>
<span class="quotelev1">&gt; Process    3 of    8 is on host borgj020
</span><br>
<span class="quotelev1">&gt; Process    3 of    8 is on processor borgj020
</span><br>
<span class="quotelev1">&gt; Process    4 of    8 is on host borgj020
</span><br>
<span class="quotelev1">&gt; Process    4 of    8 is on processor borgj036
</span><br>
<span class="quotelev1">&gt; Process    5 of    8 is on host borgj020
</span><br>
<span class="quotelev1">&gt; Process    5 of    8 is on processor borgj036
</span><br>
<span class="quotelev1">&gt; Process    6 of    8 is on host borgj020
</span><br>
<span class="quotelev1">&gt; Process    6 of    8 is on processor borgj036
</span><br>
<span class="quotelev1">&gt; Process    7 of    8 is on host borgj020
</span><br>
<span class="quotelev1">&gt; Process    7 of    8 is on processor borgj036
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It looks like MPI_Get_Processor_Name is doing its thing, but the HOST one seems to only be reflecting the first host. My guess is that OpenMPI doesn't export every processes' environment separately to every process so it is reflecting HOST from process 0.
</span><br>
<span class="quotelev1">&gt; &#226;&#128;&#139;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &#226;&#128;&#139;I would guess that what is actually happening is that slurm is exporting all of the variables from the host node including the $HOST variable and overwriting the &#226;&#128;&#139;
</span><br>
<span class="quotelev1">&gt; &#226;&#128;&#139;defaults on other nodes.   You should use the SLURM options to limit the list of 
</span><br>
<span class="quotelev1">&gt; variables that you export from the host to only those that you need.&#226;&#128;&#139;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; &#226;&#128;&#139;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So, I guess my question is: can this be done? Is there an option to Open MPI that might do it? Or is this just something MPI doesn't do? Or is my Google-fu just too weak to figure out the right search-phrase to find the answer to this probable FAQ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Matt
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [1] Note, this might be unnecessary, but I got to the point where I wanted to see if I *could* do it, rather than *should*.
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/01/28287.php">http://www.open-mpi.org/community/lists/users/2016/01/28287.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2016/01/28287.php">http://www.open-mpi.org/community/lists/users/2016/01/28287.php</a>&gt;
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
<span class="quotelev1">&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/01/28289.php">http://www.open-mpi.org/community/lists/users/2016/01/28289.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2016/01/28289.php">http://www.open-mpi.org/community/lists/users/2016/01/28289.php</a>&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28290/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28291.php">Matt Thompson: "Re: [OMPI users] MPI, Fortran, and GET_ENVIRONMENT_VARIABLE"</a>
<li><strong>Previous message:</strong> <a href="28289.php">Jim Edwards: "Re: [OMPI users] MPI, Fortran, and GET_ENVIRONMENT_VARIABLE"</a>
<li><strong>In reply to:</strong> <a href="28289.php">Jim Edwards: "Re: [OMPI users] MPI, Fortran, and GET_ENVIRONMENT_VARIABLE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28291.php">Matt Thompson: "Re: [OMPI users] MPI, Fortran, and GET_ENVIRONMENT_VARIABLE"</a>
<li><strong>Reply:</strong> <a href="28291.php">Matt Thompson: "Re: [OMPI users] MPI, Fortran, and GET_ENVIRONMENT_VARIABLE"</a>
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
