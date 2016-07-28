<?
$subject_val = "Re: [OMPI users] MPI_THREAD_INIT";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 29 13:47:32 2008" -->
<!-- isoreceived="20080929174732" -->
<!-- sent="Mon, 29 Sep 2008 13:47:24 -0400" -->
<!-- isosent="20080929174724" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_THREAD_INIT" -->
<!-- id="1EC9F566-B059-4419-8A00-42FC1EDFCB0B_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="3a37617f0809290803y585ab19cy33969d5515e05d92_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_THREAD_INIT<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-29 13:47:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6770.php">Leonardo Fialho: "[OMPI users] Execution in multicore machines"</a>
<li><strong>Previous message:</strong> <a href="6768.php">Reuti: "Re: [OMPI users] qsub - mpirun problem"</a>
<li><strong>In reply to:</strong> <a href="6758.php">Gabriele Fatigati: "Re: [OMPI users] MPI_THREAD_INIT"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Gabriele,
<br>
<p>If you want to write portable MPI applications then I think you should  
<br>
stick with what the standard say. In other words for hybrid  
<br>
programming, and if only one thread will make MPI calls you need  
<br>
either MPI_THREAD_FUNNELED or MPI_THREAD_SERIALIZED.
<br>
<p>Now, that being said, I don't know any operating systems nor MPI  
<br>
implementations that make strong assumptions about this. Not anymore !  
<br>
Usually the thread support is either ON or OFF. MPI_THREAD_MULTIPLE is  
<br>
the only one that will activate the internal locks in the MPI library.  
<br>
For every other mode, you have to make sure that at ANY moment only  
<br>
one thread is making ANY kind of MPI calls.
<br>
<p>MPI_THREAD_SINGLE     Only one thread will execute.
<br>
MPI_THREAD_FUNNELED   The task can be multi-threaded, but only the  
<br>
main thread
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;will make MPI calls (all MPI calls are  
<br>
&quot;funneled&quot; to the
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;main thread).
<br>
MPI_THREAD_SERIALIZED	 The task can be multi-threaded and multiple  
<br>
threads may
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;make MPI calls, but only one at a time: MPI  
<br>
calls are not
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;made concurrently from two distinct threads  
<br>
(all MPI calls
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;are &quot;serialized&quot; by explicit application thread
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;synchronizations).
<br>
MPI_THREAD_MULTIPLE   Multiple threads can call MPI with no  
<br>
restrictions.
<br>
<p>If you only need this as a temporary solution and if you only use Open  
<br>
MPI, then MPI_THREAD_SINGLE should be enough if there is only one  
<br>
thread making MPI calls at ANY moment. Looking at the example from  
<br>
your original mail, as only the master thread call the MPI function  
<br>
you are safe.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Sep 29, 2008, at 11:03 AM, Gabriele Fatigati wrote:
<br>
<p><span class="quotelev1">&gt; Hi George.
</span><br>
<span class="quotelev1">&gt; So is it dangerous to use hybrid program ( MPI+OpenMP) without  
</span><br>
<span class="quotelev1">&gt; enable threads support?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2008/9/29 George Bosilca &lt;bosilca_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Gabriele,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The thread support has to be explicitly requested at build time, or  
</span><br>
<span class="quotelev1">&gt; it will be disabled. Add --enable-mpi-threads (configure --help will  
</span><br>
<span class="quotelev1">&gt; give you more info) to your configure. If you plan to use threads  
</span><br>
<span class="quotelev1">&gt; with Open MPI I strongly suggest to update to the 1.3. This version  
</span><br>
<span class="quotelev1">&gt; is not yet released, but you can download the source from the  
</span><br>
<span class="quotelev1">&gt; nightly build section.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 29, 2008, at 9:58 AM, Gabriele Fatigati wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Another question about MPI_INIT_THREAD.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; At the moment, as said, my OpenMPi version supports only level 0:  
</span><br>
<span class="quotelev1">&gt; MPI_THREAD_SINGLE. Suppose that i have this code:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #pragma omp barrier
</span><br>
<span class="quotelev1">&gt; #pragma omp master
</span><br>
<span class="quotelev1">&gt;       MPI_Send(buf,...);
</span><br>
<span class="quotelev1">&gt; #pragma omp barrier
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Due my OpenMPI configuration, is it dangerous use this type of code?  
</span><br>
<span class="quotelev1">&gt; What does it means that OpenMPI doesn't support all thread levels of  
</span><br>
<span class="quotelev1">&gt; MPI_INIT_THREAD?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2008/9/29 Gabriele Fatigati &lt;g.fatigati_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Dear OpenMPi developers,
</span><br>
<span class="quotelev1">&gt; i've noted that OpenMPI 1.25 and 1.2.6 version doesn't supports   
</span><br>
<span class="quotelev1">&gt; thread initialization function shows below:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int MPI_Init_thread(int *argc, char *((*argv)[]), int required, int  
</span><br>
<span class="quotelev1">&gt; *provided)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; used in hybrid programming MPI+OpenMP.  Returned vales provided is  
</span><br>
<span class="quotelev1">&gt; 0, so the unique thread level supported is MPI_THREAD_SINGLE.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Whitch is the newest OpenMPI version that has full support for  
</span><br>
<span class="quotelev1">&gt; MPI_THREAD_SINGLE, MPI_THREAD_FUNNELED, MPI_THREAD_SERIALIZED and  
</span><br>
<span class="quotelev1">&gt; MPI_THREAD_MULTIPLE?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks in advance.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Ing. Gabriele Fatigati
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; CINECA Systems &amp; Tecnologies Department
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Supercomputing  Group
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Via Magnanelli 6/3, Casalecchio di Reno (BO) Italy
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; www.cineca.it                    Tel:   +39 051 6171722
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; g.fatigati_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Ing. Gabriele Fatigati
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; CINECA Systems &amp; Tecnologies Department
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Supercomputing  Group
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Via Magnanelli 6/3, Casalecchio di Reno (BO) Italy
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; www.cineca.it                    Tel:   +39 051 6171722
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; g.fatigati_at_[hidden]
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Ing. Gabriele Fatigati
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; CINECA Systems &amp; Tecnologies Department
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Supercomputing  Group
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Via Magnanelli 6/3, Casalecchio di Reno (BO) Italy
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; www.cineca.it                    Tel:   +39 051 6171722
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; g.fatigati_at_[hidden]
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6770.php">Leonardo Fialho: "[OMPI users] Execution in multicore machines"</a>
<li><strong>Previous message:</strong> <a href="6768.php">Reuti: "Re: [OMPI users] qsub - mpirun problem"</a>
<li><strong>In reply to:</strong> <a href="6758.php">Gabriele Fatigati: "Re: [OMPI users] MPI_THREAD_INIT"</a>
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
