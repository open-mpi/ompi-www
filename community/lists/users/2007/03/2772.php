<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Mar 12 12:25:53 2007" -->
<!-- isoreceived="20070312162553" -->
<!-- sent="Mon, 12 Mar 2007 18:25:48 +0200 (EET)" -->
<!-- isosent="20070312162548" -->
<!-- name="Michael Epitropakis" -->
<!-- email="mikeagn_at_[hidden]" -->
<!-- subject="[OMPI users] Error in MPI_Unpack --- MPI_ERR_TRUNCATE: message truncated" -->
<!-- id="Pine.LNX.4.62.0703121818400.17779_at_student.math.upatras.gr" -->
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
<strong>From:</strong> Michael Epitropakis (<em>mikeagn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-03-12 12:25:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2773.php">Ralph Castain: "Re: [OMPI users] signal handling"</a>
<li><strong>Previous message:</strong> <a href="2771.php">Olesen, Mark: "[OMPI users] signal handling"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2797.php">Tim Mattox: "Re: [OMPI users] Error in MPI_Unpack --- MPI_ERR_TRUNCATE: message truncated"</a>
<li><strong>Reply:</strong> <a href="2797.php">Tim Mattox: "Re: [OMPI users] Error in MPI_Unpack --- MPI_ERR_TRUNCATE: message truncated"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear ompi users,
<br>
<p>I am using OpenMPI in order to parallelize an evolutionary algorithm. 
<br>
During the execution of the algorithm I have to send many same messages to 
<br>
some nodes. So, in order to generate and use these messages i use MPI_Pack 
<br>
and MPI_Unpack Each message has the following structure:
<br>
<p>{int, int, int[size], double[size2], double}
<br>
<p>In the beginning of the Algorithm everything is going well... but suddenly 
<br>
something is going wrong and i get the following messages::
<br>
<p>[compute-0-1.local:32461] *** An error occurred in MPI_Unpack
<br>
[compute-0-1.local:32461] *** on communicator MPI_COMM_WORLD
<br>
[compute-0-1.local:32461] *** MPI_ERR_TRUNCATE: message truncated
<br>
[compute-0-1.local:32461] *** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
<p>With a lot of debugging I found out that the first two integers, let me 
<br>
call them x, y, were not the values that i was expecting (the values that 
<br>
i have packed!!!). They were very strange: either big positive integers or 
<br>
big negative integers. I checked the buffer that I am using for these 
<br>
messages and it is much bigger than the required message storage. I can;t 
<br>
think of something else that could probably caused that problem
<br>
<p>Can you please help me with this?? What could have probably caused this 
<br>
problem?
<br>
<p>I am using OpenMPI version: Open MPI: 1.1 Open MPI SVN revision: r10477
<br>
<p><p>Thank you in advance
<br>
Michael.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2773.php">Ralph Castain: "Re: [OMPI users] signal handling"</a>
<li><strong>Previous message:</strong> <a href="2771.php">Olesen, Mark: "[OMPI users] signal handling"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2797.php">Tim Mattox: "Re: [OMPI users] Error in MPI_Unpack --- MPI_ERR_TRUNCATE: message truncated"</a>
<li><strong>Reply:</strong> <a href="2797.php">Tim Mattox: "Re: [OMPI users] Error in MPI_Unpack --- MPI_ERR_TRUNCATE: message truncated"</a>
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
