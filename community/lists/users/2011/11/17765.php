<?
$subject_val = "Re: [OMPI users] Is it not possible to run a program with MPI code without mpirun/mpiexec?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 14 07:46:09 2011" -->
<!-- isoreceived="20111114124609" -->
<!-- sent="Mon, 14 Nov 2011 05:45:59 -0700" -->
<!-- isosent="20111114124559" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Is it not possible to run a program with MPI code without mpirun/mpiexec?" -->
<!-- id="F4219B29-55D7-4060-AC1A-A37801C5DD66_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAFjeFV+SPpkKkprMir+XkxqUKJShUX5siSw34t8Qk_SadffLRg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Is it not possible to run a program with MPI code without mpirun/mpiexec?<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-14 07:45:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17766.php">Shiqing Fan: "Re: [OMPI users] Is it not possible to run a program with MPI code without mpirun/mpiexec?"</a>
<li><strong>Previous message:</strong> <a href="17764.php">Naor Movshovitz: "[OMPI users] Is it not possible to run a program with MPI code without mpirun/mpiexec?"</a>
<li><strong>In reply to:</strong> <a href="17764.php">Naor Movshovitz: "[OMPI users] Is it not possible to run a program with MPI code without mpirun/mpiexec?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17766.php">Shiqing Fan: "Re: [OMPI users] Is it not possible to run a program with MPI code without mpirun/mpiexec?"</a>
<li><strong>Reply:</strong> <a href="17766.php">Shiqing Fan: "Re: [OMPI users] Is it not possible to run a program with MPI code without mpirun/mpiexec?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hmmm...it -should- work, but I've never tried it on Windows. I will verify it under Linux, but will have to defer to Shiqing to see if there is something particular about the Windows environment.
<br>
<p><p>On Nov 13, 2011, at 8:13 PM, Naor Movshovitz wrote:
<br>
<p><span class="quotelev1">&gt; I have open-mpi v1.5.4, installed from the binary installer for
</span><br>
<span class="quotelev1">&gt; Windows. The following program test.c
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt; int main(int argc, char *argv[])
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;  int rank, size;
</span><br>
<span class="quotelev1">&gt;  MPI_Init(&amp;argc,&amp;argv);
</span><br>
<span class="quotelev1">&gt;  MPI_Comm_size(MPI_COMM_WORLD,&amp;size);
</span><br>
<span class="quotelev1">&gt;  MPI_Comm_rank(MPI_COMM_WORLD,&amp;rank);
</span><br>
<span class="quotelev1">&gt;  printf(&quot;hellow world from rank %d of %d.\n&quot;,rank,size);
</span><br>
<span class="quotelev1">&gt;  MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;  return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; is compiled and linked without issue with
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; c:\temp\mpicc test.c
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It also runs without issue with
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; c:\temp\mpirun test.exe
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and prints the expected output. However, running the executable directly, as in
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; c:\temp\test
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; prints the following and then hangs:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [COMPUTERNAME:03060] [[34061,0],0] ORTE_ERROR_LOG: Value out of
</span><br>
<span class="quotelev1">&gt; bounds in file ../../../openmpi-1.5.4\orte\mca\oob\tcp\oob_tcp.c at
</span><br>
<span class="quotelev1">&gt; line 1193
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is this a bug? I normally expect mpi programs to run without problem
</span><br>
<span class="quotelev1">&gt; as a standalone executable. I should add that the mpi installation
</span><br>
<span class="quotelev1">&gt; does not have any directories/files named in the error log, only
</span><br>
<span class="quotelev1">&gt; pre-built binaries.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks muchly,
</span><br>
<span class="quotelev1">&gt; -nuun
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
<li><strong>Next message:</strong> <a href="17766.php">Shiqing Fan: "Re: [OMPI users] Is it not possible to run a program with MPI code without mpirun/mpiexec?"</a>
<li><strong>Previous message:</strong> <a href="17764.php">Naor Movshovitz: "[OMPI users] Is it not possible to run a program with MPI code without mpirun/mpiexec?"</a>
<li><strong>In reply to:</strong> <a href="17764.php">Naor Movshovitz: "[OMPI users] Is it not possible to run a program with MPI code without mpirun/mpiexec?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17766.php">Shiqing Fan: "Re: [OMPI users] Is it not possible to run a program with MPI code without mpirun/mpiexec?"</a>
<li><strong>Reply:</strong> <a href="17766.php">Shiqing Fan: "Re: [OMPI users] Is it not possible to run a program with MPI code without mpirun/mpiexec?"</a>
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
