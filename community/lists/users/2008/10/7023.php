<?
$subject_val = "[OMPI users] MPI_ERR_TRUNCATE";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 17 18:03:16 2008" -->
<!-- isoreceived="20081017220316" -->
<!-- sent="Fri, 17 Oct 2008 18:03:09 -0400" -->
<!-- isosent="20081017220309" -->
<!-- name="Nick Collier" -->
<!-- email="nick.collier_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_ERR_TRUNCATE" -->
<!-- id="75CA7655-AFC2-4D13-83FA-3CF5D6C4B51F_at_gmail.com" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI users] MPI_ERR_TRUNCATE<br>
<strong>From:</strong> Nick Collier (<em>nick.collier_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-17 18:03:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7024.php">Raymond Wan: "Re: [OMPI users] Debian MPI -- mpirun missing"</a>
<li><strong>Previous message:</strong> <a href="7022.php">George Bosilca: "Re: [OMPI users] OpenMPI 1.2.8 on Solaris: configure problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7029.php">Jeff Squyres: "Re: [OMPI users] MPI_ERR_TRUNCATE"</a>
<li><strong>Reply:</strong> <a href="7029.php">Jeff Squyres: "Re: [OMPI users] MPI_ERR_TRUNCATE"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I'm getting an error I don't quite understand. The code:
<br>
<p>MPI_Irecv(recv-&gt;data, recv-&gt;count, recv-&gt;datatype, recv-&gt;sender_id,  
<br>
recv-&gt;agent_type, MPI_COMM_WORLD,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&amp;recv-&gt;request);
<br>
<p>...
<br>
<p>recv = (AgentRequestRecv*) item-&gt;data;
<br>
MPI_Wait(&amp;recv-&gt;request, &amp;status);
<br>
receive_complete(process, recv);
<br>
<p>And under some conditions, I get the error:
<br>
<p>[3] [belafonte.home:04938] *** An error occurred in MPI_Wait
<br>
[3] [belafonte.home:04938] *** on communicator MPI_COMM_WORLD
<br>
[3] [belafonte.home:04938] *** MPI_ERR_TRUNCATE: message truncated
<br>
[3] [belafonte.home:04938] *** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
<p>When I do get the error, tracking the send and receive counts shows  
<br>
them as equal. And what I don't understand is that the  
<br>
receive_complete function in the above executes and the recv Struct  
<br>
actually contains the data that was sent. So, I'm confused about the  
<br>
error and what its trying to tell me as it looks like everything  
<br>
worked OK.
<br>
<p>This is on OSX 10.5.5 with OpenMPI 1.2.6.
<br>
<p>thanks,
<br>
<p>Nick
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7024.php">Raymond Wan: "Re: [OMPI users] Debian MPI -- mpirun missing"</a>
<li><strong>Previous message:</strong> <a href="7022.php">George Bosilca: "Re: [OMPI users] OpenMPI 1.2.8 on Solaris: configure problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7029.php">Jeff Squyres: "Re: [OMPI users] MPI_ERR_TRUNCATE"</a>
<li><strong>Reply:</strong> <a href="7029.php">Jeff Squyres: "Re: [OMPI users] MPI_ERR_TRUNCATE"</a>
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
