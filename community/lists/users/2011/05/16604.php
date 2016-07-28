<?
$subject_val = "Re: [OMPI users] Problem with MPI_Request, MPI_Isend/recv and MPI_Wait/Test";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 23 11:01:12 2011" -->
<!-- isoreceived="20110523150112" -->
<!-- sent="Mon, 23 May 2011 11:01:06 -0400" -->
<!-- isosent="20110523150106" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with MPI_Request, MPI_Isend/recv and MPI_Wait/Test" -->
<!-- id="4258B8AD-3AFB-4FA4-AEEB-53B26254EA1F_at_eecs.utk.edu" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4DD6175A.1080403_at_in.tum.de" -->
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
<strong>Date:</strong> 2011-05-23 11:01:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16605.php">Nurul Azri Mohd Radzi via LinkedIn: "[OMPI users] Invitation to connect on LinkedIn"</a>
<li><strong>Previous message:</strong> <a href="16603.php">AMARNATH, Balachandar: "[OMPI users] FW: Issue with mpicc --showme in windows"</a>
<li><strong>In reply to:</strong> <a href="16587.php">David B&#252;ttner: "Re: [OMPI users] Problem with MPI_Request, MPI_Isend/recv and MPI_Wait/Test"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 20, 2011, at 03:25 , David B&#252;ttner wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; thanks for the quick answer. I am sorry that I forgot to mention this: I did compile OpenMPI with MPI_THREAD_MULTIPLE support and test if required == provided after the MPI_Thread_init call.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I do not see any mechanism for protecting the accesses to the requests to a single thread? What is the thread model you're using?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; Again I am sorry that this was not clear: In the pseudo code below I wanted to indicate the access-protection I do by thread-id dependent calls if(0 == thread-id) and by using the trylock(...) (using pthread-mutexes). In the code all accesses concerning one MPI_Request (which are pthread-global-pointers in my case) are protected and called in sequential order, i.e. MPI_Isend/recv is returns before any thread is allowed to call the corresponding MPI_Test and no-one can call MPI_Test any more when a thread is allowed to call MPI_Wait.
</span><br>
<p>If all these are true the code is then supposed to work. We have multi-threaded software, that uses a non multi-threaded version of MPI (Open MPI in this instance), for overlapping communications and computations. Basically what we're doing is very similar to what you described above, except we ensure no two threads are accessing __any__ MPI functions in same time. And the code works perfectly.
<br>
<p><span class="quotelev1">&gt; I did this in the same manner before with other MPI implementations, but also on the same machine with the same (untouched) OpenMPI implementation, also using pthreads and MPI in combination, but I used
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MPI_Request req;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; instead of
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MPI_Request* req;
</span><br>
<span class="quotelev1">&gt; (and later)
</span><br>
<span class="quotelev1">&gt; req = (MPI_Request*)malloc(sizeof(MPI_Request));
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In my recent (problem) code, I also tried not using pointers, but got the same problem. Also, as I described in the first mail, I tried everything concerning the memory allocation of the MPI_Request objects.
</span><br>
<span class="quotelev1">&gt; I tried not calling malloc. This I guessed wouldn't work, but the OpenMPI documentation says this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &quot; Nonblocking calls allocate a communication request object and associate it with the request handle  the argument request). &quot; [<a href="http://www.open-mpi.org/doc/v1.4/man3/MPI_Isend.3.php">http://www.open-mpi.org/doc/v1.4/man3/MPI_Isend.3.php</a>] and
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &quot; [...] if the communication object was created by a nonblocking send or receive, then it is deallocated and the request handle is set to MPI_REQUEST_NULL.&quot; [<a href="http://www.open-mpi.org/doc/v1.4/man3/MPI_Test.3.php">http://www.open-mpi.org/doc/v1.4/man3/MPI_Test.3.php</a>] and (in slightly different words) [<a href="http://www.open-mpi.org/doc/v1.4/man3/MPI_Wait.3.php">http://www.open-mpi.org/doc/v1.4/man3/MPI_Wait.3.php</a>]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So I thought that it might do some kind of optimized memory stuff internally.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I also tried allocating req (for each used MPI_Request) once before the first use and deallocation after the last use (which I thought was the way it was supposed to work), but that crashes also.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I tried replacing the pointers through global variables
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MPI_Request req;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; which didn't do the job...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The only thing that seems to work is what I mentioned below: Allocate every time I am going to need it in the MPI_Isend/recv, use it in MPI_Test/Wait and after that deallocate it by hand each time.
</span><br>
<span class="quotelev1">&gt; I don't think that this is supposed to be like this since I have to do a call to malloc and free so often (for multiple MPI_Request objects in each iteration) that it will most likely limit performance...
</span><br>
<p>I would really recheck the code that make sure that multiple threads cannot complete a request in same time (MPI_Wait and MPI_Test on the same request on two threads). Second, I will declare the MPI_Request as volatile, to forbid the compiler to optimize the accesses to it.
<br>
<p><span class="quotelev1">&gt; Anyway I still have the same problem and am still unclear on what kind of memory allocation I should be doing for the MPI_Requests. Is there anything else (besides MPI_THREAD_MULTIPLE support, thread access control, sequential order of MPI_Isend/recv, MPI_Test and MPI_Wait for one MPI_Request object) I need to take care of? If not, what could I do to find the source of my problem?
</span><br>
<p>If what I proposed above doesn't work, I will go for a thread correctness checker: valgrind, the intel thread checker or Thread Sanitizer (<a href="http://code.google.com/p/data-race-test/wiki/ThreadSanitizer">http://code.google.com/p/data-race-test/wiki/ThreadSanitizer</a>).
<br>
<p>&nbsp;&nbsp;george.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks again for any kind of help!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Kind regards,
</span><br>
<span class="quotelev1">&gt; David
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; From an implementation perspective, your code is correct only if you initialize the MPI library with MPI_THREAD_MULTIPLE and if the library accepts. Otherwise, there is an assumption that the application is single threaded, or that the MPI behavior is implementation dependent. Please read the MPI standard regarding to MPI_Init_thread for more details.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt;   george.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On May 19, 2011, at 02:34 , David B&#252;ttner wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am working on a hybrid MPI (OpenMPI 1.4.3) and Pthread code. I am using MPI_Isend and MPI_Irecv for communication and MPI_Test/MPI_Wait to check if it is done. I do this repeatedly in the outer loop of my code. The MPI_Test is used in the inner loop to check if some function can be called which depends on the received data.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The program regularly crashed (only when not using printf...) and after debugging it I figured out the following problem:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In MPI_Isend I have an invalid read of memory. I fixed the problem with not re-using a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Request req_s, req_r;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; but by using
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Request* req_s;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Request* req_r
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and re-allocating them before the MPI_Isend/recv.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The documentation says, that in MPI_Wait and MPI_Test (if successful) the request-objects are deallocated and set to MPI_REQUEST_NULL.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It also says, that in MPI_Isend and MPI_Irecv, it allocates the Objects and associates it with the request object.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; As I understand this, this either means I can use a pointer to MPI_Request which I don't have to initialize for this (it doesn't work but crashes), or that I can use a MPI_Request pointer which I have initialized with malloc(sizeof(MPI_REQUEST)) (or passing the address of a MPI_Request req), which is set and unset in the functions. But this version crashes, too.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; What works is using a pointer, which I allocate before the MPI_Isend/recv and which I free after MPI_Wait in every iteration. In other words: It only uses if I don't reuse any kind of MPI_Request. Only if I recreate one every time.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is this, what is should be like? I believe that a reuse of the memory would be a lot more efficient (less calls to malloc...). Am I missing something here? Or am I doing something wrong?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Let me provide some more detailed information about my problem:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am running the program on a 30 node infiniband cluster. Each node has 4 single core Opteron CPUs. I am running 1 MPI Rank per node and 4 threads per rank (-&gt;  one thread per core).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am compiling with mpicc of OpenMPI using gcc below.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Some pseudo-code of the program can be found at the end of this e-mail.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I was able to reproduce the problem using different amount of nodes and even using one node only. The problem does not arise when I put printf-debugging information into the code. This pointed me into the direction that I have some memory problem, where some write accesses some memory it is not supposed to.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I ran the tests using valgrind with --leak-check=full and --show-reachable=yes, which pointed me either to MPI_Isend or MPI_Wait depending on whether I had the threads spin in a loop for MPI_Test to return success or used MPI_Wait respectively.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I would appreciate your help with this. Am I missing something important here? Is there a way to re-use the request in the different iterations other than I thought it should work?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Or is there a way to re-initialize the allocated memory before the MPI_Isend/recv so that I at least don't have to call free and malloc each time?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thank you very much for your help!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Kind regards,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; David B&#252;ttner
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _____________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Pseudo-Code of program:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Request* req_s;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Request* req_w;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OUTER-LOOP
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    if(0 == threadid)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        req_s = malloc(sizeof(MPI_Request));
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        req_r = malloc(sizeof(MPI_Request));
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        MPI_Isend(..., req_s)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        MPI_Irecv(..., req_r)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    pthread_barrier
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    INNER-LOOP (while NOT_DONE or RET)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        if(TRYLOCK&amp;&amp;  NOT_DONE)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            if(MPI_TEST(req_r))
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                    Call_Function_A;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                    NOT_DONE = 0;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        RET =  Call_Function_B;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    pthread_barrier_wait
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    if(0 == threadid)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        MPI_WAIT(req_s)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        MPI_WAIT(req_r)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        free(req_s);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        free(req_r);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _____________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; David B&#252;ttner, Informatik, Technische Universit&#228;t M&#252;nchen
</span><br>
<span class="quotelev3">&gt;&gt;&gt; TUM I-10 - FMI 01.06.059 - Tel. 089 / 289-17676
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; &quot;To preserve the freedom of the human mind then and freedom of the press, every spirit should be ready to devote itself to martyrdom; for as long as we may think as we will, and speak as we think, the condition of man will proceed in improvement.&quot;
</span><br>
<span class="quotelev2">&gt;&gt;   -- Thomas Jefferson, 1799
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
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<p>George Bosilca
<br>
Research Assistant Professor
<br>
Innovative Computing Laboratory
<br>
Department of Electrical Engineering and Computer Science
<br>
University of Tennessee, Knoxville
<br>
<a href="http://web.eecs.utk.edu/~bosilca/">http://web.eecs.utk.edu/~bosilca/</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16605.php">Nurul Azri Mohd Radzi via LinkedIn: "[OMPI users] Invitation to connect on LinkedIn"</a>
<li><strong>Previous message:</strong> <a href="16603.php">AMARNATH, Balachandar: "[OMPI users] FW: Issue with mpicc --showme in windows"</a>
<li><strong>In reply to:</strong> <a href="16587.php">David B&#252;ttner: "Re: [OMPI users] Problem with MPI_Request, MPI_Isend/recv and MPI_Wait/Test"</a>
<!-- nextthread="start" -->
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
