<?
$subject_val = "[OMPI users] MPI, Fortran, and GET_ENVIRONMENT_VARIABLE";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 15 09:53:50 2016" -->
<!-- isoreceived="20160115145350" -->
<!-- sent="Fri, 15 Jan 2016 09:53:20 -0500" -->
<!-- isosent="20160115145320" -->
<!-- name="Matt Thompson" -->
<!-- email="fortran_at_[hidden]" -->
<!-- subject="[OMPI users] MPI, Fortran, and GET_ENVIRONMENT_VARIABLE" -->
<!-- id="CAFb48S_JVpi5jSf=simF-T9vGeN2+_eZ54v+YhgDumSLEP39rg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] MPI, Fortran, and GET_ENVIRONMENT_VARIABLE<br>
<strong>From:</strong> Matt Thompson (<em>fortran_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-01-15 09:53:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28288.php">twurgl_at_[hidden]: "[OMPI users] Openmpi 1.8.8 and affinty"</a>
<li><strong>Previous message:</strong> <a href="28286.php">Siegmar Gross: "Re: [OMPI users] problem with execstackandopenmpi-v1.10.1-140-g31ff573"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28289.php">Jim Edwards: "Re: [OMPI users] MPI, Fortran, and GET_ENVIRONMENT_VARIABLE"</a>
<li><strong>Reply:</strong> <a href="28289.php">Jim Edwards: "Re: [OMPI users] MPI, Fortran, and GET_ENVIRONMENT_VARIABLE"</a>
<li><strong>Reply:</strong> <a href="28326.php">Dave Love: "Re: [OMPI users] MPI, Fortran, and GET_ENVIRONMENT_VARIABLE"</a>
<li><strong>Reply:</strong> <a href="28330.php">Thomas Jahns: "Re: [OMPI users] MPI, Fortran, and GET_ENVIRONMENT_VARIABLE"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
All,
<br>
<p>I'm not too sure if this is an MPI issue, a Fortran issue, or something
<br>
else but I thought I'd ask the MPI gurus here first since my web search
<br>
failed me.
<br>
<p>There is a chance in the future I might want/need to query an environment
<br>
variable in a Fortran program, namely to figure out what switch a currently
<br>
running process is on (via SLURM_TOPOLOGY_ADDR in my case) and perhaps make
<br>
a &quot;per-switch&quot; communicator.[1]
<br>
<p>So, I coded up a boring Fortran program whose only exciting lines are:
<br>
<p>&nbsp;&nbsp;&nbsp;call MPI_Get_Processor_Name(processor_name,name_length,ierror)
<br>
&nbsp;&nbsp;&nbsp;call get_environment_variable(&quot;HOST&quot;,host_name)
<br>
<p>&nbsp;&nbsp;&nbsp;write (*,'(A,X,I4,X,A,X,I4,X,A,X,A)') &quot;Process&quot;, myid, &quot;of&quot;, npes, &quot;is
<br>
on processor&quot;, trim(processor_name)
<br>
&nbsp;&nbsp;&nbsp;write (*,'(A,X,I4,X,A,X,I4,X,A,X,A)') &quot;Process&quot;, myid, &quot;of&quot;, npes, &quot;is
<br>
on host&quot;, trim(host_name)
<br>
<p>I decided to try out with the HOST environment variable first because it is
<br>
simple and different per node (I didn't want to take many, many nodes to
<br>
find the point when a switch is traversed). I then grabbed two nodes with 4
<br>
processes per node and...:
<br>
<p>(1046) $ echo &quot;$SLURM_NODELIST&quot;
<br>
borgj[020,036]
<br>
(1047) $ pdsh -w &quot;$SLURM_NODELIST&quot; echo '$HOST'
<br>
borgj036: borgj036
<br>
borgj020: borgj020
<br>
(1048) $ mpifort -o hostenv.x hostenv.F90
<br>
(1049) $ mpirun -np 8 ./hostenv.x | sort -g -k2
<br>
Process    0 of    8 is on host borgj020
<br>
Process    0 of    8 is on processor borgj020
<br>
Process    1 of    8 is on host borgj020
<br>
Process    1 of    8 is on processor borgj020
<br>
Process    2 of    8 is on host borgj020
<br>
Process    2 of    8 is on processor borgj020
<br>
Process    3 of    8 is on host borgj020
<br>
Process    3 of    8 is on processor borgj020
<br>
Process    4 of    8 is on host borgj020
<br>
Process    4 of    8 is on processor borgj036
<br>
Process    5 of    8 is on host borgj020
<br>
Process    5 of    8 is on processor borgj036
<br>
Process    6 of    8 is on host borgj020
<br>
Process    6 of    8 is on processor borgj036
<br>
Process    7 of    8 is on host borgj020
<br>
Process    7 of    8 is on processor borgj036
<br>
<p>It looks like MPI_Get_Processor_Name is doing its thing, but the HOST one
<br>
seems to only be reflecting the first host. My guess is that OpenMPI
<br>
doesn't export every processes' environment separately to every process so
<br>
it is reflecting HOST from process 0.
<br>
<p>So, I guess my question is: can this be done? Is there an option to Open
<br>
MPI that might do it? Or is this just something MPI doesn't do? Or is my
<br>
Google-fu just too weak to figure out the right search-phrase to find the
<br>
answer to this probable FAQ?
<br>
<p>Matt
<br>
<p>[1] Note, this might be unnecessary, but I got to the point where I wanted
<br>
to see if I *could* do it, rather than *should*.
<br>
<p><pre>
-- 
Matt Thompson
Man Among Men
Fulcrum of History
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28287/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28288.php">twurgl_at_[hidden]: "[OMPI users] Openmpi 1.8.8 and affinty"</a>
<li><strong>Previous message:</strong> <a href="28286.php">Siegmar Gross: "Re: [OMPI users] problem with execstackandopenmpi-v1.10.1-140-g31ff573"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28289.php">Jim Edwards: "Re: [OMPI users] MPI, Fortran, and GET_ENVIRONMENT_VARIABLE"</a>
<li><strong>Reply:</strong> <a href="28289.php">Jim Edwards: "Re: [OMPI users] MPI, Fortran, and GET_ENVIRONMENT_VARIABLE"</a>
<li><strong>Reply:</strong> <a href="28326.php">Dave Love: "Re: [OMPI users] MPI, Fortran, and GET_ENVIRONMENT_VARIABLE"</a>
<li><strong>Reply:</strong> <a href="28330.php">Thomas Jahns: "Re: [OMPI users] MPI, Fortran, and GET_ENVIRONMENT_VARIABLE"</a>
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
