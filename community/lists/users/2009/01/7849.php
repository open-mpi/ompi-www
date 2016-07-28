<?
$subject_val = "Re: [OMPI users] Newbie needs help! MPI_Wait/MPI_Start/MPI_Issend";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 26 16:04:41 2009" -->
<!-- isoreceived="20090126210441" -->
<!-- sent="Mon, 26 Jan 2009 15:04:33 -0600" -->
<!-- isosent="20090126210433" -->
<!-- name="Hartzman, Leslie D (MS)" -->
<!-- email="Les.Hartzman_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Newbie needs help! MPI_Wait/MPI_Start/MPI_Issend" -->
<!-- id="01B49D24DCA6104D925B3BCAC891D08C118C94_at_XMBTX133.northgrum.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] Newbie needs help! MPI_Wait/MPI_Start/MPI_Issend" -->
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
<strong>Subject:</strong> Re: [OMPI users] Newbie needs help! MPI_Wait/MPI_Start/MPI_Issend<br>
<strong>From:</strong> Hartzman, Leslie D (MS) (<em>Les.Hartzman_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-26 16:04:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7850.php">Ralph Castain: "Re: [OMPI users] open-mpi_1.3, intel  ompi_info compiling errors"</a>
<li><strong>Previous message:</strong> <a href="7848.php">Iannetti, Anthony C. (GRC-RTB0): "Re: [OMPI users] Cannot compile on Linux Itanium system"</a>
<li><strong>Maybe in reply to:</strong> <a href="7807.php">Hartzman, Leslie D (MS): "[OMPI users] Newbie needs help! MPI_Wait/MPI_Start/MPI_Issend"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/02/7913.php">Jeff Squyres: "Re: [OMPI users] Newbie needs help! MPI_Wait/MPI_Start/MPI_Issend"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/02/7913.php">Jeff Squyres: "Re: [OMPI users] Newbie needs help! MPI_Wait/MPI_Start/MPI_Issend"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev2">&gt;&gt; In the original process 'A' code, prior to sending out a command, 
</span><br>
<span class="quotelev2">&gt;&gt; 'A' will issue an MPI_Wait to make sure that the command request 
</span><br>
<span class="quotelev2">&gt;&gt; instance is free. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; I'm not quite sure I understand that statement. Can't you just 
</span><br>
<span class="quotelev1">&gt; compare the request to MPI_REQUEST_NULL? From your description, it 
</span><br>
<span class="quotelev1">&gt; sounds like if you get to this point and the request is not 
</span><br>
<span class="quotelev1">&gt; REQUEST_NULL, there's something else wrong. However, this may simply 
</span><br>
<span class="quotelev1">&gt; be a side-effect from the short description of complex code...? 
</span><br>
What I'm trying to say here is that the infrastructure that already
<br>
exists issues an MPI_Wait
<br>
before it sends out anything more to ensure that the previous request
<br>
completed.
<br>
Maybe this pseudo code will make a little more sense:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process 'A'
<br>
---------------------------------------------
<br>
Initialize requests to MPI_REQUEST_NULL
<br>
<p>for i=0; i &lt; n; i++
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (rank == 0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;initialize 'command' structure
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(set cmd = 'step 1')
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;set destination to Process 'B'
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpi_issend(command, sizeof(struct command), dest, ...);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;send data to be processed by Process 'B'
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpi_issend(data, numWords, MPI_FLOAT, ...);
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (rank == 0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpi_wait(command request for 'step 1' command);	
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sending new command, set cmd = 'step 2', mpi_issend(...)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;send data to be processed by Process 'B'
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpi_issend(data, ...);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpi_wait(command request for 'step n');
<br>
}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process 'B'
<br>
------------------------------------------------
<br>
issue mpi_recv_init calls to handle commands and data
<br>
coming in from Process 'A'-type processes
<br>
<p>while(1)
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpi_wait(command...);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;switch(command-&gt;cmd)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case 'step 1':
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpi_waitall(data_requests,...);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;process data
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpi_startall(data_requests, ...);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case 'step 2':
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpi_waitall(data_requests, ...);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;process data
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpi_startall(data_requests, ...);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;default:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpi_start(command_request, ...);
<br>
}
<br>
Process 'B' is not another instance of Process 'A'. They are 2 different
<br>
pieces of code
<br>
involved in a point-to-point persistent communication.
<br>
<span class="quotelev1">&gt; One clarifying question: why are you using synchronous sends? 
</span><br>
That is what the existing infrastructure used. I'm just trying to fit
<br>
new code into it. Since the code was working, it didn't make sense to
<br>
change anything.
<br>
Les
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-7849/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7850.php">Ralph Castain: "Re: [OMPI users] open-mpi_1.3, intel  ompi_info compiling errors"</a>
<li><strong>Previous message:</strong> <a href="7848.php">Iannetti, Anthony C. (GRC-RTB0): "Re: [OMPI users] Cannot compile on Linux Itanium system"</a>
<li><strong>Maybe in reply to:</strong> <a href="7807.php">Hartzman, Leslie D (MS): "[OMPI users] Newbie needs help! MPI_Wait/MPI_Start/MPI_Issend"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/02/7913.php">Jeff Squyres: "Re: [OMPI users] Newbie needs help! MPI_Wait/MPI_Start/MPI_Issend"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/02/7913.php">Jeff Squyres: "Re: [OMPI users] Newbie needs help! MPI_Wait/MPI_Start/MPI_Issend"</a>
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
