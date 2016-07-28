<?
$subject_val = "Re: [OMPI users] MPI_Init() and MPI_Init_thread()";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar  3 12:36:02 2010" -->
<!-- isoreceived="20100303173602" -->
<!-- sent="Wed, 3 Mar 2010 12:35:56 -0500" -->
<!-- isosent="20100303173556" -->
<!-- name="Richard Treumann" -->
<!-- email="treumann_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Init() and MPI_Init_thread()" -->
<!-- id="OF19FEED2F.CC906EE3-ON852576DB.005EEE2E-852576DB.0060AC79_at_us.ibm.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="5b7094581003030859r363ab89dm22191d5062568758_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Init() and MPI_Init_thread()<br>
<strong>From:</strong> Richard Treumann (<em>treumann_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-03 12:35:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12221.php">Prentice Bisbal: "Re: [OMPI users] Limit to number of processes on one node?"</a>
<li><strong>Previous message:</strong> <a href="12219.php">Reuti: "Re: [OMPI users] running external program on same	processor	(Fortran)"</a>
<li><strong>In reply to:</strong> <a href="12217.php">Brian Budge: "Re: [OMPI users] MPI_Init() and MPI_Init_thread()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12226.php">Dave Goodell: "Re: [OMPI users] MPI_Init() and MPI_Init_thread()"</a>
<li><strong>Reply:</strong> <a href="12226.php">Dave Goodell: "Re: [OMPI users] MPI_Init() and MPI_Init_thread()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The caller of MPI_INIT_THREAD says what level of thread safety he would
<br>
like to get from the MPI implementation. The implementation says what level
<br>
of thread safety it provides.
<br>
<p>The implementation is free to provide more or less thread safety than
<br>
requested.  The caller of MPI_INIT_THREAD should look at the level the
<br>
implementation says it is providing and act accordingly. If the application
<br>
needs and  asks for  THREAD_MULTIPLE and gets less than THREAD_MULTIPLE, it
<br>
must terminate itself.  If the application has a preferred mode that uses
<br>
THREAD_MULTIPLE and a mode that uses FUNNELED then when the MPI_INIT_THREAD
<br>
call returns FUNNELED, the application must adopt the FUNNELED mode.
<br>
<p>An application that asks for THREAD_SINGLE may hope there is a
<br>
THREAD_SINGLE mode that gives better performance but nothing in a
<br>
THREAD_SINGLE application can be made incorrect by an implementation
<br>
providing THREAD_MULTIPLE.
<br>
<p>If the application will make MPI calls from multiple threads and
<br>
MPI_INIT_THREAD has returned FUNNELED, the application must be willing to
<br>
take the steps that ensure there will never be concurrent calls to MPI from
<br>
the threads. The threads will take turns - without fail.
<br>
<p><p>Dick Treumann  -  MPI Team
<br>
IBM Systems &amp; Technology Group
<br>
Dept X2ZA / MS P963 -- 2455 South Road -- Poughkeepsie, NY 12601
<br>
Tele (845) 433-7846         Fax (845) 433-8363
<br>
<p><p>users-bounces_at_[hidden] wrote on 03/03/2010 11:59:45 AM:
<br>
<p><span class="quotelev1">&gt; [image removed]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Re: [OMPI users] MPI_Init() and MPI_Init_thread()
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brian Budge
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; to:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Open MPI Users
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 03/03/2010 12:04 PM
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sent by:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; users-bounces_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please respond to Open MPI Users
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I believe that it specifies the *minimum* threading model
</span><br>
<span class="quotelev1">&gt; supported.&#160; If I recall, opmi is already funnel safe even in single
</span><br>
<span class="quotelev1">&gt; mode.&#160; However, if mpi calls are made from outside the main thread,
</span><br>
<span class="quotelev1">&gt; you should specify funneled for portability
</span><br>
<span class="quotelev1">&gt; &#160; Brian
</span><br>
<span class="quotelev1">&gt; On Mar 2, 2010 11:59 PM, &quot;Terry Frankcombe&quot; &lt;terry_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I can't speak for the developers. &#160;However, I think it's to do with the
</span><br>
<span class="quotelev1">&gt; library internals.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;From here: <a href="http://www.mpi-forum.org/docs/mpi-20-html/node165.htm">http://www.mpi-forum.org/docs/mpi-20-html/node165.htm</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;Advice to implementors.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;If provided is not MPI_THREAD_SINGLE then the MPI library should not
</span><br>
<span class="quotelev1">&gt; invoke C/ C++/Fortran library calls that are not thread safe, e.g., in
</span><br>
<span class="quotelev1">&gt; an environment where malloc is not thread safe, then malloc should not
</span><br>
<span class="quotelev1">&gt; be used by the MPI library.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;Some implementors may want to use different MPI libraries for different
</span><br>
<span class="quotelev1">&gt; levels of thread support. They can do so using dynamic linking and
</span><br>
<span class="quotelev1">&gt; selecting which library will be linked when MPI_INIT_THREAD is invoked.
</span><br>
<span class="quotelev1">&gt; If this is not possible, then optimizations for lower levels of thread
</span><br>
<span class="quotelev1">&gt; support will occur only when the level of thread support required is
</span><br>
<span class="quotelev1">&gt; specified at link time. ( End of advice to implementors.)&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, 2010-03-03 at 16:33 +0900, Yuanyuan ZHANG wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hi all,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I am a beginner of MPI
</span><br>
an..._______________________________________________
<br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12220/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12221.php">Prentice Bisbal: "Re: [OMPI users] Limit to number of processes on one node?"</a>
<li><strong>Previous message:</strong> <a href="12219.php">Reuti: "Re: [OMPI users] running external program on same	processor	(Fortran)"</a>
<li><strong>In reply to:</strong> <a href="12217.php">Brian Budge: "Re: [OMPI users] MPI_Init() and MPI_Init_thread()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12226.php">Dave Goodell: "Re: [OMPI users] MPI_Init() and MPI_Init_thread()"</a>
<li><strong>Reply:</strong> <a href="12226.php">Dave Goodell: "Re: [OMPI users] MPI_Init() and MPI_Init_thread()"</a>
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
