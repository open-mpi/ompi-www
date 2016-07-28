<?
$subject_val = "Re: [OMPI users] Problem with MPI_Request, MPI_Isend/recv and MPI_Wait/Test";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 20 03:24:50 2011" -->
<!-- isoreceived="20110520072450" -->
<!-- sent="Fri, 20 May 2011 09:25:14 +0200" -->
<!-- isosent="20110520072514" -->
<!-- name="David B&#252;ttner" -->
<!-- email="david.buettner_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with MPI_Request, MPI_Isend/recv and MPI_Wait/Test" -->
<!-- id="4DD6175A.1080403_at_in.tum.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="FCAC66F9-FDB5-48BB-A800-263D8A4F9337_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem with MPI_Request, MPI_Isend/recv and MPI_Wait/Test<br>
<strong>From:</strong> David B&#252;ttner (<em>david.buettner_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-05-20 03:25:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16588.php">Jeff Squyres: "Re: [OMPI users] Trouble with MPI-IO"</a>
<li><strong>Previous message:</strong> <a href="16586.php">Tom Rosmond: "Re: [OMPI users] Trouble with MPI-IO"</a>
<li><strong>In reply to:</strong> <a href="16579.php">George Bosilca: "Re: [OMPI users] Problem with MPI_Request, MPI_Isend/recv and MPI_Wait/Test"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16604.php">George Bosilca: "Re: [OMPI users] Problem with MPI_Request, MPI_Isend/recv and MPI_Wait/Test"</a>
<li><strong>Reply:</strong> <a href="16604.php">George Bosilca: "Re: [OMPI users] Problem with MPI_Request, MPI_Isend/recv and MPI_Wait/Test"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>thanks for the quick answer. I am sorry that I forgot to mention this: I 
<br>
did compile OpenMPI with MPI_THREAD_MULTIPLE support and test if 
<br>
required == provided after the MPI_Thread_init call.
<br>
<p><span class="quotelev1">&gt; I do not see any mechanism for protecting the accesses to the requests to a single thread? What is the thread model you're using?
</span><br>
<span class="quotelev1">&gt;
</span><br>
Again I am sorry that this was not clear: In the pseudo code below I 
<br>
wanted to indicate the access-protection I do by thread-id dependent 
<br>
calls if(0 == thread-id) and by using the trylock(...) (using 
<br>
pthread-mutexes). In the code all accesses concerning one MPI_Request 
<br>
(which are pthread-global-pointers in my case) are protected and called 
<br>
in sequential order, i.e. MPI_Isend/recv is returns before any thread is 
<br>
allowed to call the corresponding MPI_Test and no-one can call MPI_Test 
<br>
any more when a thread is allowed to call MPI_Wait.
<br>
I did this in the same manner before with other MPI implementations, but 
<br>
also on the same machine with the same (untouched) OpenMPI 
<br>
implementation, also using pthreads and MPI in combination, but I used
<br>
<p>MPI_Request req;
<br>
<p>instead of
<br>
<p>MPI_Request* req;
<br>
(and later)
<br>
req = (MPI_Request*)malloc(sizeof(MPI_Request));
<br>
<p><p>In my recent (problem) code, I also tried not using pointers, but got 
<br>
the same problem. Also, as I described in the first mail, I tried 
<br>
everything concerning the memory allocation of the MPI_Request objects.
<br>
I tried not calling malloc. This I guessed wouldn't work, but the 
<br>
OpenMPI documentation says this:
<br>
<p>&quot; Nonblocking calls allocate a communication request object and 
<br>
associate it with the request handle  the argument request). &quot; 
<br>
[<a href="http://www.open-mpi.org/doc/v1.4/man3/MPI_Isend.3.php">http://www.open-mpi.org/doc/v1.4/man3/MPI_Isend.3.php</a>] and
<br>
<p>&quot; [...] if the communication object was created by a nonblocking send or 
<br>
receive, then it is deallocated and the request handle is set to 
<br>
MPI_REQUEST_NULL.&quot; 
<br>
[<a href="http://www.open-mpi.org/doc/v1.4/man3/MPI_Test.3.php">http://www.open-mpi.org/doc/v1.4/man3/MPI_Test.3.php</a>] and (in slightly 
<br>
different words) [<a href="http://www.open-mpi.org/doc/v1.4/man3/MPI_Wait.3.php">http://www.open-mpi.org/doc/v1.4/man3/MPI_Wait.3.php</a>]
<br>
<p>So I thought that it might do some kind of optimized memory stuff 
<br>
internally.
<br>
<p>I also tried allocating req (for each used MPI_Request) once before the 
<br>
first use and deallocation after the last use (which I thought was the 
<br>
way it was supposed to work), but that crashes also.
<br>
<p>I tried replacing the pointers through global variables
<br>
<p>MPI_Request req;
<br>
<p>which didn't do the job...
<br>
<p>The only thing that seems to work is what I mentioned below: Allocate 
<br>
every time I am going to need it in the MPI_Isend/recv, use it in 
<br>
MPI_Test/Wait and after that deallocate it by hand each time.
<br>
I don't think that this is supposed to be like this since I have to do a 
<br>
call to malloc and free so often (for multiple MPI_Request objects in 
<br>
each iteration) that it will most likely limit performance...
<br>
<p>Anyway I still have the same problem and am still unclear on what kind 
<br>
of memory allocation I should be doing for the MPI_Requests. Is there 
<br>
anything else (besides MPI_THREAD_MULTIPLE support, thread access 
<br>
control, sequential order of MPI_Isend/recv, MPI_Test and MPI_Wait for 
<br>
one MPI_Request object) I need to take care of? If not, what could I do 
<br>
to find the source of my problem?
<br>
<p>Thanks again for any kind of help!
<br>
<p>Kind regards,
<br>
David
<br>
<p><p><p><span class="quotelev2">&gt; &gt; From an implementation perspective, your code is correct only if you initialize the MPI library with MPI_THREAD_MULTIPLE and if the library accepts. Otherwise, there is an assumption that the application is single threaded, or that the MPI behavior is implementation dependent. Please read the MPI standard regarding to MPI_Init_thread for more details.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt;    george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On May 19, 2011, at 02:34 , David B&#252;ttner wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am working on a hybrid MPI (OpenMPI 1.4.3) and Pthread code. I am using MPI_Isend and MPI_Irecv for communication and MPI_Test/MPI_Wait to check if it is done. I do this repeatedly in the outer loop of my code. The MPI_Test is used in the inner loop to check if some function can be called which depends on the received data.
</span><br>
<span class="quotelev2">&gt;&gt; The program regularly crashed (only when not using printf...) and after debugging it I figured out the following problem:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In MPI_Isend I have an invalid read of memory. I fixed the problem with not re-using a
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Request req_s, req_r;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; but by using
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Request* req_s;
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Request* req_r
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; and re-allocating them before the MPI_Isend/recv.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The documentation says, that in MPI_Wait and MPI_Test (if successful) the request-objects are deallocated and set to MPI_REQUEST_NULL.
</span><br>
<span class="quotelev2">&gt;&gt; It also says, that in MPI_Isend and MPI_Irecv, it allocates the Objects and associates it with the request object.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; As I understand this, this either means I can use a pointer to MPI_Request which I don't have to initialize for this (it doesn't work but crashes), or that I can use a MPI_Request pointer which I have initialized with malloc(sizeof(MPI_REQUEST)) (or passing the address of a MPI_Request req), which is set and unset in the functions. But this version crashes, too.
</span><br>
<span class="quotelev2">&gt;&gt; What works is using a pointer, which I allocate before the MPI_Isend/recv and which I free after MPI_Wait in every iteration. In other words: It only uses if I don't reuse any kind of MPI_Request. Only if I recreate one every time.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is this, what is should be like? I believe that a reuse of the memory would be a lot more efficient (less calls to malloc...). Am I missing something here? Or am I doing something wrong?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Let me provide some more detailed information about my problem:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am running the program on a 30 node infiniband cluster. Each node has 4 single core Opteron CPUs. I am running 1 MPI Rank per node and 4 threads per rank (-&gt;  one thread per core).
</span><br>
<span class="quotelev2">&gt;&gt; I am compiling with mpicc of OpenMPI using gcc below.
</span><br>
<span class="quotelev2">&gt;&gt; Some pseudo-code of the program can be found at the end of this e-mail.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I was able to reproduce the problem using different amount of nodes and even using one node only. The problem does not arise when I put printf-debugging information into the code. This pointed me into the direction that I have some memory problem, where some write accesses some memory it is not supposed to.
</span><br>
<span class="quotelev2">&gt;&gt; I ran the tests using valgrind with --leak-check=full and --show-reachable=yes, which pointed me either to MPI_Isend or MPI_Wait depending on whether I had the threads spin in a loop for MPI_Test to return success or used MPI_Wait respectively.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I would appreciate your help with this. Am I missing something important here? Is there a way to re-use the request in the different iterations other than I thought it should work?
</span><br>
<span class="quotelev2">&gt;&gt; Or is there a way to re-initialize the allocated memory before the MPI_Isend/recv so that I at least don't have to call free and malloc each time?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank you very much for your help!
</span><br>
<span class="quotelev2">&gt;&gt; Kind regards,
</span><br>
<span class="quotelev2">&gt;&gt; David B&#252;ttner
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _____________________
</span><br>
<span class="quotelev2">&gt;&gt; Pseudo-Code of program:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Request* req_s;
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Request* req_w;
</span><br>
<span class="quotelev2">&gt;&gt; OUTER-LOOP
</span><br>
<span class="quotelev2">&gt;&gt;     if(0 == threadid)
</span><br>
<span class="quotelev2">&gt;&gt;     {
</span><br>
<span class="quotelev2">&gt;&gt;         req_s = malloc(sizeof(MPI_Request));
</span><br>
<span class="quotelev2">&gt;&gt;         req_r = malloc(sizeof(MPI_Request));
</span><br>
<span class="quotelev2">&gt;&gt;         MPI_Isend(..., req_s)
</span><br>
<span class="quotelev2">&gt;&gt;         MPI_Irecv(..., req_r)
</span><br>
<span class="quotelev2">&gt;&gt;     }
</span><br>
<span class="quotelev2">&gt;&gt;     pthread_barrier
</span><br>
<span class="quotelev2">&gt;&gt;     INNER-LOOP (while NOT_DONE or RET)
</span><br>
<span class="quotelev2">&gt;&gt;         if(TRYLOCK&amp;&amp;  NOT_DONE)
</span><br>
<span class="quotelev2">&gt;&gt;         {
</span><br>
<span class="quotelev2">&gt;&gt;             if(MPI_TEST(req_r))
</span><br>
<span class="quotelev2">&gt;&gt;             {
</span><br>
<span class="quotelev2">&gt;&gt;                     Call_Function_A;
</span><br>
<span class="quotelev2">&gt;&gt;                     NOT_DONE = 0;
</span><br>
<span class="quotelev2">&gt;&gt;             }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         }
</span><br>
<span class="quotelev2">&gt;&gt;         RET =  Call_Function_B;
</span><br>
<span class="quotelev2">&gt;&gt;     }
</span><br>
<span class="quotelev2">&gt;&gt;     pthread_barrier_wait
</span><br>
<span class="quotelev2">&gt;&gt;     if(0 == threadid)
</span><br>
<span class="quotelev2">&gt;&gt;     {
</span><br>
<span class="quotelev2">&gt;&gt;         MPI_WAIT(req_s)
</span><br>
<span class="quotelev2">&gt;&gt;         MPI_WAIT(req_r)
</span><br>
<span class="quotelev2">&gt;&gt;         free(req_s);
</span><br>
<span class="quotelev2">&gt;&gt;         free(req_r);
</span><br>
<span class="quotelev2">&gt;&gt;     }
</span><br>
<span class="quotelev2">&gt;&gt; _____________
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; David B&#252;ttner, Informatik, Technische Universit&#228;t M&#252;nchen
</span><br>
<span class="quotelev2">&gt;&gt; TUM I-10 - FMI 01.06.059 - Tel. 089 / 289-17676
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
<span class="quotelev1">&gt; &quot;To preserve the freedom of the human mind then and freedom of the press, every spirit should be ready to devote itself to martyrdom; for as long as we may think as we will, and speak as we think, the condition of man will proceed in improvement.&quot;
</span><br>
<span class="quotelev1">&gt;    -- Thomas Jefferson, 1799
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><pre>
-- 
David B&#252;ttner, Informatik, Technische Universit&#228;t M&#252;nchen
TUM I-10 - FMI 01.06.059 - Tel. 089 / 289-17676
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16588.php">Jeff Squyres: "Re: [OMPI users] Trouble with MPI-IO"</a>
<li><strong>Previous message:</strong> <a href="16586.php">Tom Rosmond: "Re: [OMPI users] Trouble with MPI-IO"</a>
<li><strong>In reply to:</strong> <a href="16579.php">George Bosilca: "Re: [OMPI users] Problem with MPI_Request, MPI_Isend/recv and MPI_Wait/Test"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16604.php">George Bosilca: "Re: [OMPI users] Problem with MPI_Request, MPI_Isend/recv and MPI_Wait/Test"</a>
<li><strong>Reply:</strong> <a href="16604.php">George Bosilca: "Re: [OMPI users] Problem with MPI_Request, MPI_Isend/recv and MPI_Wait/Test"</a>
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
