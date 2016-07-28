<?
$subject_val = "Re: [OMPI users] Problem with MPI_Request, MPI_Isend/recv and MPI_Wait/Test";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 19 12:48:24 2011" -->
<!-- isoreceived="20110519164824" -->
<!-- sent="Thu, 19 May 2011 08:48:03 -0800" -->
<!-- isosent="20110519164803" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with MPI_Request, MPI_Isend/recv and MPI_Wait/Test" -->
<!-- id="FCAC66F9-FDB5-48BB-A800-263D8A4F9337_at_eecs.utk.edu" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4DD4F22C.60608_at_in.tum.de" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-05-19 12:48:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16580.php">Jeff Squyres: "Re: [OMPI users] v1.5.3-x64 does not work on Windows 7 workgroup"</a>
<li><strong>Previous message:</strong> <a href="16578.php">Zhangping Wei: "Re: [OMPI users] Error: Entry Point Not Found"</a>
<li><strong>In reply to:</strong> <a href="16570.php">David B&#252;ttner: "[OMPI users] Problem with MPI_Request, MPI_Isend/recv and MPI_Wait/Test"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16587.php">David Büttner: "Re: [OMPI users] Problem with MPI_Request, MPI_Isend/recv and MPI_Wait/Test"</a>
<li><strong>Reply:</strong> <a href="16587.php">David Büttner: "Re: [OMPI users] Problem with MPI_Request, MPI_Isend/recv and MPI_Wait/Test"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
David,
<br>
<p>I do not see any mechanism for protecting the accesses to the requests to a single thread? What is the thread model you're using?
<br>
<p><span class="quotelev1">&gt;From an implementation perspective, your code is correct only if you initialize the MPI library with MPI_THREAD_MULTIPLE and if the library accepts. Otherwise, there is an assumption that the application is single threaded, or that the MPI behavior is implementation dependent. Please read the MPI standard regarding to MPI_Init_thread for more details.
</span><br>
<p>Regards,
<br>
&nbsp;&nbsp;george.
<br>
<p>On May 19, 2011, at 02:34 , David B&#252;ttner wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am working on a hybrid MPI (OpenMPI 1.4.3) and Pthread code. I am using MPI_Isend and MPI_Irecv for communication and MPI_Test/MPI_Wait to check if it is done. I do this repeatedly in the outer loop of my code. The MPI_Test is used in the inner loop to check if some function can be called which depends on the received data.
</span><br>
<span class="quotelev1">&gt; The program regularly crashed (only when not using printf...) and after debugging it I figured out the following problem:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In MPI_Isend I have an invalid read of memory. I fixed the problem with not re-using a
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MPI_Request req_s, req_r;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; but by using
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MPI_Request* req_s;
</span><br>
<span class="quotelev1">&gt; MPI_Request* req_r
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and re-allocating them before the MPI_Isend/recv.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The documentation says, that in MPI_Wait and MPI_Test (if successful) the request-objects are deallocated and set to MPI_REQUEST_NULL.
</span><br>
<span class="quotelev1">&gt; It also says, that in MPI_Isend and MPI_Irecv, it allocates the Objects and associates it with the request object.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As I understand this, this either means I can use a pointer to MPI_Request which I don't have to initialize for this (it doesn't work but crashes), or that I can use a MPI_Request pointer which I have initialized with malloc(sizeof(MPI_REQUEST)) (or passing the address of a MPI_Request req), which is set and unset in the functions. But this version crashes, too.
</span><br>
<span class="quotelev1">&gt; What works is using a pointer, which I allocate before the MPI_Isend/recv and which I free after MPI_Wait in every iteration. In other words: It only uses if I don't reuse any kind of MPI_Request. Only if I recreate one every time.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is this, what is should be like? I believe that a reuse of the memory would be a lot more efficient (less calls to malloc...). Am I missing something here? Or am I doing something wrong?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Let me provide some more detailed information about my problem:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am running the program on a 30 node infiniband cluster. Each node has 4 single core Opteron CPUs. I am running 1 MPI Rank per node and 4 threads per rank (-&gt; one thread per core).
</span><br>
<span class="quotelev1">&gt; I am compiling with mpicc of OpenMPI using gcc below.
</span><br>
<span class="quotelev1">&gt; Some pseudo-code of the program can be found at the end of this e-mail.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I was able to reproduce the problem using different amount of nodes and even using one node only. The problem does not arise when I put printf-debugging information into the code. This pointed me into the direction that I have some memory problem, where some write accesses some memory it is not supposed to.
</span><br>
<span class="quotelev1">&gt; I ran the tests using valgrind with --leak-check=full and --show-reachable=yes, which pointed me either to MPI_Isend or MPI_Wait depending on whether I had the threads spin in a loop for MPI_Test to return success or used MPI_Wait respectively.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I would appreciate your help with this. Am I missing something important here? Is there a way to re-use the request in the different iterations other than I thought it should work?
</span><br>
<span class="quotelev1">&gt; Or is there a way to re-initialize the allocated memory before the MPI_Isend/recv so that I at least don't have to call free and malloc each time?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you very much for your help!
</span><br>
<span class="quotelev1">&gt; Kind regards,
</span><br>
<span class="quotelev1">&gt; David B&#252;ttner
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _____________________
</span><br>
<span class="quotelev1">&gt; Pseudo-Code of program:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MPI_Request* req_s;
</span><br>
<span class="quotelev1">&gt; MPI_Request* req_w;
</span><br>
<span class="quotelev1">&gt; OUTER-LOOP
</span><br>
<span class="quotelev1">&gt;    if(0 == threadid)
</span><br>
<span class="quotelev1">&gt;    {
</span><br>
<span class="quotelev1">&gt;        req_s = malloc(sizeof(MPI_Request));
</span><br>
<span class="quotelev1">&gt;        req_r = malloc(sizeof(MPI_Request));
</span><br>
<span class="quotelev1">&gt;        MPI_Isend(..., req_s)
</span><br>
<span class="quotelev1">&gt;        MPI_Irecv(..., req_r)
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt;    pthread_barrier
</span><br>
<span class="quotelev1">&gt;    INNER-LOOP (while NOT_DONE or RET)
</span><br>
<span class="quotelev1">&gt;        if(TRYLOCK &amp;&amp; NOT_DONE)
</span><br>
<span class="quotelev1">&gt;        {
</span><br>
<span class="quotelev1">&gt;            if(MPI_TEST(req_r))
</span><br>
<span class="quotelev1">&gt;            {
</span><br>
<span class="quotelev1">&gt;                    Call_Function_A;
</span><br>
<span class="quotelev1">&gt;                    NOT_DONE = 0;
</span><br>
<span class="quotelev1">&gt;            }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;        }
</span><br>
<span class="quotelev1">&gt;        RET =  Call_Function_B;
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt;    pthread_barrier_wait
</span><br>
<span class="quotelev1">&gt;    if(0 == threadid)
</span><br>
<span class="quotelev1">&gt;    {
</span><br>
<span class="quotelev1">&gt;        MPI_WAIT(req_s)
</span><br>
<span class="quotelev1">&gt;        MPI_WAIT(req_r)
</span><br>
<span class="quotelev1">&gt;        free(req_s);
</span><br>
<span class="quotelev1">&gt;        free(req_r);
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt; _____________
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; David B&#252;ttner, Informatik, Technische Universit&#228;t M&#252;nchen
</span><br>
<span class="quotelev1">&gt; TUM I-10 - FMI 01.06.059 - Tel. 089 / 289-17676
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
<p>&quot;To preserve the freedom of the human mind then and freedom of the press, every spirit should be ready to devote itself to martyrdom; for as long as we may think as we will, and speak as we think, the condition of man will proceed in improvement.&quot;
<br>
&nbsp;&nbsp;-- Thomas Jefferson, 1799
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16580.php">Jeff Squyres: "Re: [OMPI users] v1.5.3-x64 does not work on Windows 7 workgroup"</a>
<li><strong>Previous message:</strong> <a href="16578.php">Zhangping Wei: "Re: [OMPI users] Error: Entry Point Not Found"</a>
<li><strong>In reply to:</strong> <a href="16570.php">David B&#252;ttner: "[OMPI users] Problem with MPI_Request, MPI_Isend/recv and MPI_Wait/Test"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16587.php">David Büttner: "Re: [OMPI users] Problem with MPI_Request, MPI_Isend/recv and MPI_Wait/Test"</a>
<li><strong>Reply:</strong> <a href="16587.php">David Büttner: "Re: [OMPI users] Problem with MPI_Request, MPI_Isend/recv and MPI_Wait/Test"</a>
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
