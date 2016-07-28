<?
$subject_val = "Re: [OMPI users] Open MPI, Segmentation fault";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul  1 12:55:05 2010" -->
<!-- isoreceived="20100701165505" -->
<!-- sent="Thu, 1 Jul 2010 09:54:40 -0700" -->
<!-- isosent="20100701165440" -->
<!-- name="David Zhang" -->
<!-- email="solarbikedz_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI, Segmentation fault" -->
<!-- id="AANLkTimvAcUgWlqAWDtTupR_YWPKVS9RdTWiou3YmSD5_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="SNT134-w21C2772A3E66730ABE1E6BCBCD0_at_phx.gbl" -->
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
<strong>Subject:</strong> Re: [OMPI users] Open MPI, Segmentation fault<br>
<strong>From:</strong> David Zhang (<em>solarbikedz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-01 12:54:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13463.php">Eloi Gaudry: "[OMPI users] [openib] segfault when using openib btl"</a>
<li><strong>Previous message:</strong> <a href="13461.php">Jack Bryan: "Re: [OMPI users] Open MPI, Segmentation fault"</a>
<li><strong>In reply to:</strong> <a href="13461.php">Jack Bryan: "Re: [OMPI users] Open MPI, Segmentation fault"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&quot;But, I still want to find out how to store the result in a data structure
<br>
with the type TaskPackage because
<br>
int type data can only be used to carry integers. Too limited.&quot;
<br>
<p>you can do that with MPI, all you have to do is declare your own MPI type.
<br>
&nbsp;The command is MPI_type_struct.  I haven't done this personally, but if you
<br>
go to this link:
<br>
<a href="https://computing.llnl.gov/tutorials/mpi/">https://computing.llnl.gov/tutorials/mpi/</a>
<br>
it'll show you know.  it is also a very good MPI reference.  I visit it
<br>
often to look up MPI commands and syntax.
<br>
<p><p>On Thu, Jul 1, 2010 at 9:09 AM, Jack Bryan &lt;dtustudy68_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;  Thanks for all your replies.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I want to do master-worker asynchronous communication.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The master needs to distribute tasks to workers and then collect results
</span><br>
<span class="quotelev1">&gt; from them.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; master :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; world.irecv(resultSourceRank, upStreamTaskTag,
</span><br>
<span class="quotelev1">&gt; myResultTaskPackage[iRank][taskCounterT3]);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I got this error &quot;MPI_ERR_TRUNCATE&quot; , because I declared &quot; TaskPackage
</span><br>
<span class="quotelev1">&gt; myResultTaskPackage. &quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It seems that the 2-dimension array cannot be used to receive my defined
</span><br>
<span class="quotelev1">&gt; class package from worker, who sends a TaskPackage to master.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So, I changed it to an int 2-d array to get the result, it works well.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But, I still want to find out how to store the result in a data structure
</span><br>
<span class="quotelev1">&gt; with the type TaskPackage because
</span><br>
<span class="quotelev1">&gt; int type data can only be used to carry integers. Too limited.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What I want to do is:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The master can store the results from each worker and then combine them
</span><br>
<span class="quotelev1">&gt; together
</span><br>
<span class="quotelev1">&gt; to form the final result after collecting all results from workers.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But, if the master has number of tasks that cannot be divided evenly by
</span><br>
<span class="quotelev1">&gt; worker numbers,
</span><br>
<span class="quotelev1">&gt; each worker may have different number of tasks.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If we have 11 tasks and 3 workers.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; aveTaskNumPerNode = (11 - 11%3) /3 = 3
</span><br>
<span class="quotelev1">&gt; leftTaskNum = 11%3 =2 = Z
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; the master distributes each of left tasks from worker 1 to work Z (Z &lt;
</span><br>
<span class="quotelev1">&gt; totalNumWorkers).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For example, worker 1: 4 tasks, worker 2: 4 task, worker 3: 3 tasks.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The master tries to distribute tasks evenly so that the difference between
</span><br>
<span class="quotelev1">&gt; workloads of
</span><br>
<span class="quotelev1">&gt; each worker is minimized.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am going to use vector's vector to do the dynamic data storage.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The 2-dimensional data-structure that can store results from workers.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Each row element of the data-structure has different columns.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It can be indexed by iterator so that I can find the a specified number
</span><br>
<span class="quotelev1">&gt; worker task result
</span><br>
<span class="quotelev1">&gt; by searching the data strucutre.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For example,
</span><br>
<span class="quotelev1">&gt;                column           column
</span><br>
<span class="quotelev1">&gt;                   1                2
</span><br>
<span class="quotelev1">&gt;  row 1   (worker1.task1)    (worker1.task4)
</span><br>
<span class="quotelev1">&gt;  row 2   (worker2.task2)     (worker1.task5)
</span><br>
<span class="quotelev1">&gt;  row 3   (worker3.task3)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; the data strucutre should remember the location of work ID and the task ID.
</span><br>
<span class="quotelev1">&gt; So that the master can know which task comes from which worker.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any help or comment are appreciated.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; thanks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jack
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; June 30   2010
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Date: Thu, 1 Jul 2010 11:44:19 -0400
</span><br>
<span class="quotelev2">&gt; &gt; From: gus_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; To: users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subject: Re: [OMPI users] Open MPI, Segmentation fault
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hello Jack, list
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; As others mentioned, this may be a problem with dynamic
</span><br>
<span class="quotelev2">&gt; &gt; memory allocation.
</span><br>
<span class="quotelev2">&gt; &gt; It could also be a violation of statically allocated memory,
</span><br>
<span class="quotelev2">&gt; &gt; I guess.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; You say:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; My program can run well for 1,2,10 processors, but fail when the
</span><br>
<span class="quotelev3">&gt; &gt; &gt; number of tasks cannot
</span><br>
<span class="quotelev3">&gt; &gt; &gt; be divided evenly by number of processes.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Often times, when the division of the number of &quot;tasks&quot;
</span><br>
<span class="quotelev2">&gt; &gt; (or the global problem size) by the number of &quot;processors&quot; is not even,
</span><br>
<span class="quotelev2">&gt; &gt; one processor gets a lighter/heavier workload then the others,
</span><br>
<span class="quotelev2">&gt; &gt; it also allocates less/more memory than the others,
</span><br>
<span class="quotelev2">&gt; &gt; and it accesses smaller/larger arrays than the others.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; In general integer division and remainder/module calculations
</span><br>
<span class="quotelev2">&gt; &gt; are used to control memory allocation, the array sizes, etc,
</span><br>
<span class="quotelev2">&gt; &gt; on different processors.
</span><br>
<span class="quotelev2">&gt; &gt; These formulas tend to use the MPI communicator size
</span><br>
<span class="quotelev2">&gt; &gt; (i.e., effectively the number of processors if you are using
</span><br>
<span class="quotelev2">&gt; &gt; MPI_COMM_WORLD) to split the workload across the processors.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I would search for the lines of code where those calculations are done,
</span><br>
<span class="quotelev2">&gt; &gt; and where the arrays are allocated and accessed,
</span><br>
<span class="quotelev2">&gt; &gt; to make sure the algorithm works both when
</span><br>
<span class="quotelev2">&gt; &gt; they are of the same size
</span><br>
<span class="quotelev2">&gt; &gt; (even workload across the processors),
</span><br>
<span class="quotelev2">&gt; &gt; as when they are of different sizes
</span><br>
<span class="quotelev2">&gt; &gt; (uneven workload across the processors).
</span><br>
<span class="quotelev2">&gt; &gt; You may be violating memory access by a few bytes only, due to a small
</span><br>
<span class="quotelev2">&gt; &gt; mistake in one of those integer division / remainder/module formulas,
</span><br>
<span class="quotelev2">&gt; &gt; perhaps where an array index upper or lower bound is calculated.
</span><br>
<span class="quotelev2">&gt; &gt; It happened to me before, probably to others too.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; This type of code inspection can be done without a debugger,
</span><br>
<span class="quotelev2">&gt; &gt; or before you get to the debugger phase.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I hope this helps,
</span><br>
<span class="quotelev2">&gt; &gt; Gus Correa
</span><br>
<span class="quotelev2">&gt; &gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; Gustavo Correa
</span><br>
<span class="quotelev2">&gt; &gt; Lamont-Doherty Earth Observatory - Columbia University
</span><br>
<span class="quotelev2">&gt; &gt; Palisades, NY, 10964-8000 - USA
</span><br>
<span class="quotelev2">&gt; &gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Also see <a href="http://www.open-mpi.org/faq/?category=debugging">http://www.open-mpi.org/faq/?category=debugging</a>.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; On Jul 1, 2010, at 3:17 AM, Asad Ali wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Hi Jack,
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Debugging OpenMPI with traditional debuggers is a pain.
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt;From your error message it sounds that you have some memory
</span><br>
<span class="quotelev1">&gt; allocation problem. Do you use dynamic memory allocation (allocate and then
</span><br>
<span class="quotelev1">&gt; free)?
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; I use display (printf()) command with MPIrank command. It tells me
</span><br>
<span class="quotelev1">&gt; which thread is giving segmentation fault.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Cheers,
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Asad
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; On Thu, Jul 1, 2010 at 4:13 PM, Jack Bryan &lt;dtustudy68_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; thanks
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; I am not familiar with OpenMPI.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Would you please help me with how to ask openMPI to show where the
</span><br>
<span class="quotelev1">&gt; fault occurs ?
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; GNU debuger ?
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Any help is appreciated.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; thanks!!!
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Jack
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; June 30 2010
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Date: Wed, 30 Jun 2010 16:13:09 -0400
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; From: amjad11_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Subject: Re: [OMPI users] Open MPI, Segmentation fault
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Based on my experiences, I would FULLY endorse (100% agree with) David
</span><br>
<span class="quotelev1">&gt; Zhang.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; It is usually a coding or typo mistake.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; At first, Ensure that array sizes and dimension are correct.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; I experience that if openmpi is compiled with gnu compilers (not with
</span><br>
<span class="quotelev1">&gt; Intel) then it also point outs the subroutine exactly in which the fault
</span><br>
<span class="quotelev1">&gt; occur. have a try.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; best,
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; AA
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; On Wed, Jun 30, 2010 at 12:43 PM, David Zhang &lt;solarbikedz_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; When I got segmentation faults, it has always been my coding mistakes.
</span><br>
<span class="quotelev1">&gt; Perhaps your code is not robust against number of processes not divisible by
</span><br>
<span class="quotelev1">&gt; 2?
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; On Wed, Jun 30, 2010 at 8:47 AM, Jack Bryan &lt;dtustudy68_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Dear All,
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; I am using Open MPI, I got the error:
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; n337:37664] *** Process received signal ***
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; [n337:37664] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; [n337:37664] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; [n337:37664] Failing at address: 0x7fffcfe90000
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; [n337:37664] [ 0] /lib64/libpthread.so.0 [0x3c50e0e4c0]
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; [n337:37664] [ 1]
</span><br>
<span class="quotelev1">&gt; /lustre/home/rhascheduler/RhaScheduler-0.4.1.1/mytest/nmn2 [0x414ed7]
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; [n337:37664] [ 2] /lib64/libc.so.6(__libc_start_main+0xf4)
</span><br>
<span class="quotelev1">&gt; [0x3c5021d974]
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; [n337:37664] [ 3]
</span><br>
<span class="quotelev1">&gt; /lustre/home/rhascheduler/RhaScheduler-0.4.1.1/mytest/nmn2(__gxx_personality_v0+0x1f1)
</span><br>
<span class="quotelev1">&gt; [0x412139]
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; [n337:37664] *** End of error message ***
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; After searching answers, it seems that some functions fail.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; My program can run well for 1,2,10 processors, but fail when the
</span><br>
<span class="quotelev1">&gt; number of tasks cannot
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; be divided evenly by number of processes.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Any help is appreciated.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; thanks
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Jack
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; June 30 2010
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; The New Busy think 9 to 5 is a cute idea. Combine multiple calendars
</span><br>
<span class="quotelev1">&gt; with Hotmail. Get busy.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; --
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; David Zhang
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; University of California, San Diego
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Hotmail has tools for the New Busy. Search, chat and e-mail from your
</span><br>
<span class="quotelev1">&gt; inbox. Learn more.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; --
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; &quot;Statistical thinking will one day be as necessary for efficient
</span><br>
<span class="quotelev1">&gt; citizenship as the ability to read and write.&quot; - H.G. Wells
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt; The New Busy is not the too busy. Combine all your e-mail accounts with
</span><br>
<span class="quotelev1">&gt; Hotmail. Get busy.&lt;<a href="http://www.windowslive.com/campaign/thenewbusy?tile=multiaccount&amp;ocid=PID28326::T:WLMTAGL:ON:WL:en-US:WM_HMP:042010_4">http://www.windowslive.com/campaign/thenewbusy?tile=multiaccount&amp;ocid=PID28326::T:WLMTAGL:ON:WL:en-US:WM_HMP:042010_4</a>&gt;
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
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
David Zhang
University of California, San Diego
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13462/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13463.php">Eloi Gaudry: "[OMPI users] [openib] segfault when using openib btl"</a>
<li><strong>Previous message:</strong> <a href="13461.php">Jack Bryan: "Re: [OMPI users] Open MPI, Segmentation fault"</a>
<li><strong>In reply to:</strong> <a href="13461.php">Jack Bryan: "Re: [OMPI users] Open MPI, Segmentation fault"</a>
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
