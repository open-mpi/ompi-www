<?
$subject_val = "Re: [OMPI users] Open MPI, Segmentation fault";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul  1 11:44:29 2010" -->
<!-- isoreceived="20100701154429" -->
<!-- sent="Thu, 01 Jul 2010 11:44:19 -0400" -->
<!-- isosent="20100701154419" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI, Segmentation fault" -->
<!-- id="4C2CB7D3.6000205_at_ldeo.columbia.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="F5904B30-4354-4DF1-8D57-F001F9958184_at_cisco.com" -->
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
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-01 11:44:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13454.php">Jack Bryan: "Re: [OMPI users] Open MPI, Segmentation fault"</a>
<li><strong>Previous message:</strong> <a href="13452.php">amjad ali: "Re: [OMPI users] Open MPI, Segmentation fault"</a>
<li><strong>In reply to:</strong> <a href="13451.php">Jeff Squyres: "Re: [OMPI users] Open MPI, Segmentation fault"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13454.php">Jack Bryan: "Re: [OMPI users] Open MPI, Segmentation fault"</a>
<li><strong>Reply:</strong> <a href="13454.php">Jack Bryan: "Re: [OMPI users] Open MPI, Segmentation fault"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Jack, list
<br>
<p>As others mentioned, this may be a problem with dynamic
<br>
memory allocation.
<br>
It could also be a violation of statically allocated memory,
<br>
I guess.
<br>
<p>You say:
<br>
<p><span class="quotelev1">&gt; My program can run well for 1,2,10 processors, but fail when the
</span><br>
<span class="quotelev1">&gt; number of tasks cannot
</span><br>
<span class="quotelev1">&gt; be divided evenly by number of processes.
</span><br>
<p>Often times, when the division of the number of &quot;tasks&quot;
<br>
(or the global problem size) by the number of &quot;processors&quot; is not even, 
<br>
one processor gets a lighter/heavier workload then the others,
<br>
it also allocates  less/more memory than the others,
<br>
and it accesses smaller/larger arrays than the others.
<br>
<p>In general integer division and remainder/module calculations
<br>
are used to control memory allocation, the array sizes, etc,
<br>
on different processors.
<br>
These formulas tend to use the MPI communicator size
<br>
(i.e., effectively the number of processors if you are using 
<br>
MPI_COMM_WORLD) to split the workload across the processors.
<br>
<p>I would search for the lines of code where those calculations are done, 
<br>
and where the arrays are allocated and accessed,
<br>
to make sure the algorithm works both when
<br>
they are of the same size
<br>
(even workload across the processors),
<br>
as when they are of different sizes
<br>
(uneven workload across the processors).
<br>
You may be violating memory access by a few bytes only, due to a small
<br>
mistake in one of those integer division / remainder/module formulas,
<br>
perhaps where an array index upper or lower bound is calculated.
<br>
It happened to me before, probably to others too.
<br>
<p>This type of code inspection can be done without a debugger,
<br>
or before you get to the debugger phase.
<br>
<p>I hope this helps,
<br>
Gus Correa
<br>
---------------------------------------------------------------------
<br>
Gustavo Correa
<br>
Lamont-Doherty Earth Observatory - Columbia University
<br>
Palisades, NY, 10964-8000 - USA
<br>
---------------------------------------------------------------------
<br>
<p><span class="quotelev1">&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt; Also see <a href="http://www.open-mpi.org/faq/?category=debugging">http://www.open-mpi.org/faq/?category=debugging</a>.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jul 1, 2010, at 3:17 AM, Asad Ali wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi Jack,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Debugging OpenMPI with traditional debuggers is a pain.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;From your error message it sounds that you have some memory allocation problem. Do you use dynamic memory allocation (allocate and then free)?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I use display (printf()) command with MPIrank command. It tells me which thread is giving segmentation fault.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Asad
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Thu, Jul 1, 2010 at 4:13 PM, Jack Bryan &lt;dtustudy68_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; thanks
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am not familiar with OpenMPI. 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Would you please help me with how to ask openMPI to show where the fault occurs ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; GNU debuger ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Any help is appreciated. 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; thanks!!!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Jack 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; June 30  2010
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Date: Wed, 30 Jun 2010 16:13:09 -0400
</span><br>
<span class="quotelev2">&gt;&gt; From: amjad11_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] Open MPI, Segmentation fault
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Based on my experiences, I would FULLY endorse (100% agree with) David Zhang.
</span><br>
<span class="quotelev2">&gt;&gt; It is usually a coding or typo mistake.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; At first, Ensure that array sizes and dimension are correct.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I experience that if openmpi is compiled with gnu compilers (not with Intel) then it also point outs the subroutine exactly in which the fault occur. have a try.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; best,
</span><br>
<span class="quotelev2">&gt;&gt; AA
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Wed, Jun 30, 2010 at 12:43 PM, David Zhang &lt;solarbikedz_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; When I got segmentation faults, it has always been my coding mistakes.  Perhaps your code is not robust against number of processes not divisible by 2?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Wed, Jun 30, 2010 at 8:47 AM, Jack Bryan &lt;dtustudy68_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Dear All,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am using Open MPI, I got the error: 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; n337:37664] *** Process received signal ***
</span><br>
<span class="quotelev2">&gt;&gt; [n337:37664] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev2">&gt;&gt; [n337:37664] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev2">&gt;&gt; [n337:37664] Failing at address: 0x7fffcfe90000
</span><br>
<span class="quotelev2">&gt;&gt; [n337:37664] [ 0] /lib64/libpthread.so.0 [0x3c50e0e4c0]
</span><br>
<span class="quotelev2">&gt;&gt; [n337:37664] [ 1] /lustre/home/rhascheduler/RhaScheduler-0.4.1.1/mytest/nmn2 [0x414ed7]
</span><br>
<span class="quotelev2">&gt;&gt; [n337:37664] [ 2] /lib64/libc.so.6(__libc_start_main+0xf4) [0x3c5021d974]
</span><br>
<span class="quotelev2">&gt;&gt; [n337:37664] [ 3] /lustre/home/rhascheduler/RhaScheduler-0.4.1.1/mytest/nmn2(__gxx_personality_v0+0x1f1) [0x412139]
</span><br>
<span class="quotelev2">&gt;&gt; [n337:37664] *** End of error message ***
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; After searching answers, it seems that some functions fail. 
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; My program can run well for 1,2,10 processors, but fail when the number of tasks cannot
</span><br>
<span class="quotelev2">&gt;&gt; be divided evenly by number of processes. 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Any help is appreciated. 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; thanks
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Jack
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; June 30  2010
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The New Busy think 9 to 5 is a cute idea. Combine multiple calendars with Hotmail. Get busy.
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; David Zhang
</span><br>
<span class="quotelev2">&gt;&gt; University of California, San Diego
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hotmail has tools for the New Busy. Search, chat and e-mail from your inbox. Learn more.
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; &quot;Statistical thinking will one day be as necessary for efficient citizenship as the ability to read and write.&quot; - H.G. Wells
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
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13454.php">Jack Bryan: "Re: [OMPI users] Open MPI, Segmentation fault"</a>
<li><strong>Previous message:</strong> <a href="13452.php">amjad ali: "Re: [OMPI users] Open MPI, Segmentation fault"</a>
<li><strong>In reply to:</strong> <a href="13451.php">Jeff Squyres: "Re: [OMPI users] Open MPI, Segmentation fault"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13454.php">Jack Bryan: "Re: [OMPI users] Open MPI, Segmentation fault"</a>
<li><strong>Reply:</strong> <a href="13454.php">Jack Bryan: "Re: [OMPI users] Open MPI, Segmentation fault"</a>
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
