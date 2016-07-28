<?
$subject_val = "Re: [OMPI users] Is it not possible to run a program with MPI code without mpirun/mpiexec?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 14 08:01:02 2011" -->
<!-- isoreceived="20111114130102" -->
<!-- sent="Mon, 14 Nov 2011 14:00:54 +0100" -->
<!-- isosent="20111114130054" -->
<!-- name="Shiqing Fan" -->
<!-- email="fan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Is it not possible to run a program with MPI code without mpirun/mpiexec?" -->
<!-- id="4EC11106.5000803_at_hlrs.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="F4219B29-55D7-4060-AC1A-A37801C5DD66_at_open-mpi.org" -->
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
<strong>From:</strong> Shiqing Fan (<em>fan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-14 08:00:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17767.php">Francesco Salvadore: "[OMPI users] OpenMPI 1.4.3 and PGI 11.8 segfault at run-time"</a>
<li><strong>Previous message:</strong> <a href="17765.php">Ralph Castain: "Re: [OMPI users] Is it not possible to run a program with MPI code without mpirun/mpiexec?"</a>
<li><strong>In reply to:</strong> <a href="17765.php">Ralph Castain: "Re: [OMPI users] Is it not possible to run a program with MPI code without mpirun/mpiexec?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I just found out that there were missing updates for Windows in 
<br>
singleton module (in trunk but not in 1.5 branch). I'll make a CMR for this.
<br>
<p>On 2011-11-14 1:45 PM, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; Hmmm...it -should- work, but I've never tried it on Windows. I will verify it under Linux, but will have to defer to Shiqing to see if there is something particular about the Windows environment.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Nov 13, 2011, at 8:13 PM, Naor Movshovitz wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have open-mpi v1.5.4, installed from the binary installer for
</span><br>
<span class="quotelev2">&gt;&gt; Windows. The following program test.c
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include&lt;stdio.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include&lt;mpi.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; int main(int argc, char *argv[])
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt;   int rank, size;
</span><br>
<span class="quotelev2">&gt;&gt;   MPI_Init(&amp;argc,&amp;argv);
</span><br>
<span class="quotelev2">&gt;&gt;   MPI_Comm_size(MPI_COMM_WORLD,&amp;size);
</span><br>
<span class="quotelev2">&gt;&gt;   MPI_Comm_rank(MPI_COMM_WORLD,&amp;rank);
</span><br>
<span class="quotelev2">&gt;&gt;   printf(&quot;hellow world from rank %d of %d.\n&quot;,rank,size);
</span><br>
<span class="quotelev2">&gt;&gt;   MPI_Finalize();
</span><br>
<span class="quotelev2">&gt;&gt;   return 0;
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; is compiled and linked without issue with
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; c:\temp\mpicc test.c
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It also runs without issue with
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; c:\temp\mpirun test.exe
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; and prints the expected output. However, running the executable directly, as in
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; c:\temp\test
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; prints the following and then hangs:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [COMPUTERNAME:03060] [[34061,0],0] ORTE_ERROR_LOG: Value out of
</span><br>
<span class="quotelev2">&gt;&gt; bounds in file ../../../openmpi-1.5.4\orte\mca\oob\tcp\oob_tcp.c at
</span><br>
<span class="quotelev2">&gt;&gt; line 1193
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is this a bug? I normally expect mpi programs to run without problem
</span><br>
<span class="quotelev2">&gt;&gt; as a standalone executable. I should add that the mpi installation
</span><br>
<span class="quotelev2">&gt;&gt; does not have any directories/files named in the error log, only
</span><br>
<span class="quotelev2">&gt;&gt; pre-built binaries.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks muchly,
</span><br>
<span class="quotelev2">&gt;&gt; -nuun
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
<p><p><pre>
-- 
---------------------------------------------------------------
Shiqing Fan
High Performance Computing Center Stuttgart (HLRS)
Tel: ++49(0)711-685-87234      Nobelstrasse 19
Fax: ++49(0)711-685-65832      70569 Stuttgart
<a href="http://www.hlrs.de/organization/people/shiqing-fan/">http://www.hlrs.de/organization/people/shiqing-fan/</a>
email: fan_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17767.php">Francesco Salvadore: "[OMPI users] OpenMPI 1.4.3 and PGI 11.8 segfault at run-time"</a>
<li><strong>Previous message:</strong> <a href="17765.php">Ralph Castain: "Re: [OMPI users] Is it not possible to run a program with MPI code without mpirun/mpiexec?"</a>
<li><strong>In reply to:</strong> <a href="17765.php">Ralph Castain: "Re: [OMPI users] Is it not possible to run a program with MPI code without mpirun/mpiexec?"</a>
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
