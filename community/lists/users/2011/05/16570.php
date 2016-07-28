<?
$subject_val = "[OMPI users] Problem with MPI_Request, MPI_Isend/recv and MPI_Wait/Test";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 19 06:34:02 2011" -->
<!-- isoreceived="20110519103402" -->
<!-- sent="Thu, 19 May 2011 12:34:20 +0200" -->
<!-- isosent="20110519103420" -->
<!-- name="David B&#252;ttner" -->
<!-- email="david.buettner_at_[hidden]" -->
<!-- subject="[OMPI users] Problem with MPI_Request, MPI_Isend/recv and MPI_Wait/Test" -->
<!-- id="4DD4F22C.60608_at_in.tum.de" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Problem with MPI_Request, MPI_Isend/recv and MPI_Wait/Test<br>
<strong>From:</strong> David B&#252;ttner (<em>david.buettner_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-05-19 06:34:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16571.php">Robert Horton: "[OMPI users] Openib with &gt; 32 cores per node"</a>
<li><strong>Previous message:</strong> <a href="16569.php">hi: "Re: [OMPI users] Sorry! You were supposed to get help about: But couldn't open help-orterun.txt"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16579.php">George Bosilca: "Re: [OMPI users] Problem with MPI_Request, MPI_Isend/recv and MPI_Wait/Test"</a>
<li><strong>Reply:</strong> <a href="16579.php">George Bosilca: "Re: [OMPI users] Problem with MPI_Request, MPI_Isend/recv and MPI_Wait/Test"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I am working on a hybrid MPI (OpenMPI 1.4.3) and Pthread code. I am 
<br>
using MPI_Isend and MPI_Irecv for communication and MPI_Test/MPI_Wait to 
<br>
check if it is done. I do this repeatedly in the outer loop of my code. 
<br>
The MPI_Test is used in the inner loop to check if some function can be 
<br>
called which depends on the received data.
<br>
The program regularly crashed (only when not using printf...) and after 
<br>
debugging it I figured out the following problem:
<br>
<p>In MPI_Isend I have an invalid read of memory. I fixed the problem with 
<br>
not re-using a
<br>
<p>MPI_Request req_s, req_r;
<br>
<p>but by using
<br>
<p>MPI_Request* req_s;
<br>
MPI_Request* req_r
<br>
<p>and re-allocating them before the MPI_Isend/recv.
<br>
<p>The documentation says, that in MPI_Wait and MPI_Test (if successful) 
<br>
the request-objects are deallocated and set to MPI_REQUEST_NULL.
<br>
It also says, that in MPI_Isend and MPI_Irecv, it allocates the Objects 
<br>
and associates it with the request object.
<br>
<p>As I understand this, this either means I can use a pointer to 
<br>
MPI_Request which I don't have to initialize for this (it doesn't work 
<br>
but crashes), or that I can use a MPI_Request pointer which I have 
<br>
initialized with malloc(sizeof(MPI_REQUEST)) (or passing the address of 
<br>
a MPI_Request req), which is set and unset in the functions. But this 
<br>
version crashes, too.
<br>
What works is using a pointer, which I allocate before the 
<br>
MPI_Isend/recv and which I free after MPI_Wait in every iteration. In 
<br>
other words: It only uses if I don't reuse any kind of MPI_Request. Only 
<br>
if I recreate one every time.
<br>
<p>Is this, what is should be like? I believe that a reuse of the memory 
<br>
would be a lot more efficient (less calls to malloc...). Am I missing 
<br>
something here? Or am I doing something wrong?
<br>
<p><p>Let me provide some more detailed information about my problem:
<br>
<p>I am running the program on a 30 node infiniband cluster. Each node has 
<br>
4 single core Opteron CPUs. I am running 1 MPI Rank per node and 4 
<br>
threads per rank (-&gt; one thread per core).
<br>
I am compiling with mpicc of OpenMPI using gcc below.
<br>
Some pseudo-code of the program can be found at the end of this e-mail.
<br>
<p>I was able to reproduce the problem using different amount of nodes and 
<br>
even using one node only. The problem does not arise when I put 
<br>
printf-debugging information into the code. This pointed me into the 
<br>
direction that I have some memory problem, where some write accesses 
<br>
some memory it is not supposed to.
<br>
I ran the tests using valgrind with --leak-check=full and 
<br>
--show-reachable=yes, which pointed me either to MPI_Isend or MPI_Wait 
<br>
depending on whether I had the threads spin in a loop for MPI_Test to 
<br>
return success or used MPI_Wait respectively.
<br>
<p>I would appreciate your help with this. Am I missing something important 
<br>
here? Is there a way to re-use the request in the different iterations 
<br>
other than I thought it should work?
<br>
Or is there a way to re-initialize the allocated memory before the 
<br>
MPI_Isend/recv so that I at least don't have to call free and malloc 
<br>
each time?
<br>
<p>Thank you very much for your help!
<br>
Kind regards,
<br>
David B&#252;ttner
<br>
<p>_____________________
<br>
Pseudo-Code of program:
<br>
<p>MPI_Request* req_s;
<br>
MPI_Request* req_w;
<br>
OUTER-LOOP
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(0 == threadid)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;req_s = malloc(sizeof(MPI_Request));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;req_r = malloc(sizeof(MPI_Request));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Isend(..., req_s)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Irecv(..., req_r)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;pthread_barrier
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;INNER-LOOP (while NOT_DONE or RET)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(TRYLOCK &amp;&amp; NOT_DONE)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(MPI_TEST(req_r))
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Call_Function_A;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NOT_DONE = 0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RET =  Call_Function_B;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;pthread_barrier_wait
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(0 == threadid)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_WAIT(req_s)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_WAIT(req_r)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;free(req_s);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;free(req_r);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
_____________
<br>
<p><p><pre>
-- 
David B&#252;ttner, Informatik, Technische Universit&#228;t M&#252;nchen
TUM I-10 - FMI 01.06.059 - Tel. 089 / 289-17676
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16571.php">Robert Horton: "[OMPI users] Openib with &gt; 32 cores per node"</a>
<li><strong>Previous message:</strong> <a href="16569.php">hi: "Re: [OMPI users] Sorry! You were supposed to get help about: But couldn't open help-orterun.txt"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16579.php">George Bosilca: "Re: [OMPI users] Problem with MPI_Request, MPI_Isend/recv and MPI_Wait/Test"</a>
<li><strong>Reply:</strong> <a href="16579.php">George Bosilca: "Re: [OMPI users] Problem with MPI_Request, MPI_Isend/recv and MPI_Wait/Test"</a>
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
