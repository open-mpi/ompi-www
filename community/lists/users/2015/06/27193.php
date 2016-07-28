<?
$subject_val = "Re: [OMPI users] hybrid programming and OpenMPI compilation";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 25 13:00:37 2015" -->
<!-- isoreceived="20150625170037" -->
<!-- sent="Thu, 25 Jun 2015 11:00:36 -0600" -->
<!-- isosent="20150625170036" -->
<!-- name="Howard Pritchard" -->
<!-- email="hppritcha_at_[hidden]" -->
<!-- subject="Re: [OMPI users] hybrid programming and OpenMPI compilation" -->
<!-- id="CAF1Cqj7vBAXVCsW8SSQ8bqPx5mY+a+1X0LJt6fZ8+MntA7xKuQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="1435250241.6175.25.camel_at_tango.fis.unical.it" -->
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
<strong>Subject:</strong> Re: [OMPI users] hybrid programming and OpenMPI compilation<br>
<strong>From:</strong> Howard Pritchard (<em>hppritcha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-06-25 13:00:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27194.php">Fedele Stabile: "Re: [OMPI users] hybrid programming and OpenMPI compilation"</a>
<li><strong>Previous message:</strong> <a href="27192.php">Fedele Stabile: "[OMPI users] hybrid programming and OpenMPI compilation"</a>
<li><strong>In reply to:</strong> <a href="27192.php">Fedele Stabile: "[OMPI users] hybrid programming and OpenMPI compilation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27194.php">Fedele Stabile: "Re: [OMPI users] hybrid programming and OpenMPI compilation"</a>
<li><strong>Reply:</strong> <a href="27194.php">Fedele Stabile: "Re: [OMPI users] hybrid programming and OpenMPI compilation"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Fedele,
<br>
<p>Would it be possible to build the open mpi package to use gfortran
<br>
and run the test again?
<br>
<p>Do you observe this problem if you build a Open MP (&lt;-&gt; MP not MPI)
<br>
only version of the test case?
<br>
<p>I can't reproduce this problem using gfortran.  I don't have access to an
<br>
Intel compiler at the moment.
<br>
<p>Also, please send the output of ompi_info.
<br>
<p>Thanks,
<br>
<p>Howard
<br>
<p><p>2015-06-25 10:37 GMT-06:00 Fedele Stabile &lt;fedele.stabile_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt; Hello to all,
</span><br>
<span class="quotelev1">&gt; I'm trying hybrid OpenMP + MPI programming, when I run the simple code
</span><br>
<span class="quotelev1">&gt; listed below I have an error:
</span><br>
<span class="quotelev1">&gt; forrtl: severe (40): recursive I/O operation, unit -1, file unknown
</span><br>
<span class="quotelev1">&gt; Image              PC                Routine            Line
</span><br>
<span class="quotelev1">&gt; Source
</span><br>
<span class="quotelev1">&gt; aa                 0000000000403D8E  Unknown               Unknown
</span><br>
<span class="quotelev1">&gt; Unknown
</span><br>
<span class="quotelev1">&gt; aa                 0000000000403680  Unknown               Unknown
</span><br>
<span class="quotelev1">&gt; Unknown
</span><br>
<span class="quotelev1">&gt; libiomp5.so        00002B705F7C5BB3  Unknown               Unknown
</span><br>
<span class="quotelev1">&gt; Unknown
</span><br>
<span class="quotelev1">&gt; libiomp5.so        00002B705F79A617  Unknown               Unknown
</span><br>
<span class="quotelev1">&gt; Unknown
</span><br>
<span class="quotelev1">&gt; libiomp5.so        00002B705F799D3A  Unknown               Unknown
</span><br>
<span class="quotelev1">&gt; Unknown
</span><br>
<span class="quotelev1">&gt; libiomp5.so        00002B705F7C5EAD  Unknown               Unknown
</span><br>
<span class="quotelev1">&gt; Unknown
</span><br>
<span class="quotelev1">&gt; libpthread.so.0    00002B705FA699D1  Unknown               Unknown
</span><br>
<span class="quotelev1">&gt; Unknown
</span><br>
<span class="quotelev1">&gt; libc.so.6          00002B705FD688FD  Unknown               Unknown
</span><br>
<span class="quotelev1">&gt; Unknown
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Primary job  terminated normally, but 1 process returned
</span><br>
<span class="quotelev1">&gt; a non-zero exit code.. Per user-direction, the job has been aborted.
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun detected that one or more processes exited with non-zero status,
</span><br>
<span class="quotelev1">&gt; thus causing
</span><br>
<span class="quotelev1">&gt; the job to be terminated. The first process to do so was:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Process name: [[61634,1],0]
</span><br>
<span class="quotelev1">&gt;   Exit code:    40
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have compiled OpenMPI using this configuration options:
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/data/apps/mpi/openmpi-1.8.4-intel
</span><br>
<span class="quotelev1">&gt; -enable-mpirun-prefix-by-default --enable-mpi-fortran
</span><br>
<span class="quotelev1">&gt; --enable-mpi-thread-multiple
</span><br>
<span class="quotelev1">&gt; --with-tm=/usr/local/torque-5.1.0-1_4048f77c/src --with-verbs
</span><br>
<span class="quotelev1">&gt; --with-openib --with-cuda=/usr/local/cuda-6.5
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is the listing of the simple code:
</span><br>
<span class="quotelev1">&gt;         program hello
</span><br>
<span class="quotelev1">&gt;         include &quot;mpif.h&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         integer numprocs, rank, namelen, ierr
</span><br>
<span class="quotelev1">&gt;         character*(MPI_MAX_PROCESSOR_NAME) processor_name
</span><br>
<span class="quotelev1">&gt;         integer iam, np
</span><br>
<span class="quotelev1">&gt;         integer omp_get_num_threads, omp_get_thread_num
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         call MPI_Init(ierr)
</span><br>
<span class="quotelev1">&gt;         call MPI_Comm_size(MPI_COMM_WORLD, numprocs, ierr)
</span><br>
<span class="quotelev1">&gt;         call MPI_Comm_rank(MPI_COMM_WORLD, rank, ierr)
</span><br>
<span class="quotelev1">&gt;         call MPI_Get_processor_name(processor_name, namelen, ierr)
</span><br>
<span class="quotelev1">&gt;         iam = 0
</span><br>
<span class="quotelev1">&gt;         np = 1
</span><br>
<span class="quotelev1">&gt; !$omp parallel default(shared) private(iam, np)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 np = omp_get_num_threads()
</span><br>
<span class="quotelev1">&gt;                 iam = omp_get_thread_num();
</span><br>
<span class="quotelev1">&gt;                 write(*,*)&quot;Hello from thread &quot;, iam,&quot; out of &quot;, np,
</span><br>
<span class="quotelev1">&gt;      %          &quot; from process &quot;, rank,&quot; out of &quot;, numprocs,
</span><br>
<span class="quotelev1">&gt;      %          &quot; on &quot;, processor_name
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; !$omp end parallel
</span><br>
<span class="quotelev1">&gt;         call MPI_Finalize(ierr)
</span><br>
<span class="quotelev1">&gt;         stop
</span><br>
<span class="quotelev1">&gt;         end
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you help me to solve the problem?
</span><br>
<span class="quotelev1">&gt; Thank you,
</span><br>
<span class="quotelev1">&gt; Fedele Stabile
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/06/27192.php">http://www.open-mpi.org/community/lists/users/2015/06/27192.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27193/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27194.php">Fedele Stabile: "Re: [OMPI users] hybrid programming and OpenMPI compilation"</a>
<li><strong>Previous message:</strong> <a href="27192.php">Fedele Stabile: "[OMPI users] hybrid programming and OpenMPI compilation"</a>
<li><strong>In reply to:</strong> <a href="27192.php">Fedele Stabile: "[OMPI users] hybrid programming and OpenMPI compilation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27194.php">Fedele Stabile: "Re: [OMPI users] hybrid programming and OpenMPI compilation"</a>
<li><strong>Reply:</strong> <a href="27194.php">Fedele Stabile: "Re: [OMPI users] hybrid programming and OpenMPI compilation"</a>
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
