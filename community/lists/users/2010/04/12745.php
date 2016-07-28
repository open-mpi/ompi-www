<?
$subject_val = "Re: [OMPI users] mpirun -np 4 hello_world; on a eight processor shared memory machine produces wrong output";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 23 08:26:44 2010" -->
<!-- isoreceived="20100423122644" -->
<!-- sent="Fri, 23 Apr 2010 14:24:55 +0200" -->
<!-- isosent="20100423122455" -->
<!-- name="Pankatz, Klaus" -->
<!-- email="klaus.pankatz_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun -np 4 hello_world; on a eight processor shared memory machine produces wrong output" -->
<!-- id="DB5810118A97904784BECE13867C5CF670054240D4_at_MSX" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="082576D5-4477-4C56-9EC7-D82DA0946C2C_at_staff.uni-marburg.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpirun -np 4 hello_world; on a eight processor shared memory machine produces wrong output<br>
<strong>From:</strong> Pankatz, Klaus (<em>klaus.pankatz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-23 08:24:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12746.php">Terry Dontje: "Re: [OMPI users] mpirun -np 4 hello_world; on a eight processor shared memory machine produces wrong output"</a>
<li><strong>Previous message:</strong> <a href="12744.php">Reuti: "Re: [OMPI users] mpirun -np 4 hello_world; on a eight processor shared memory machine produces wrong output"</a>
<li><strong>In reply to:</strong> <a href="12744.php">Reuti: "Re: [OMPI users] mpirun -np 4 hello_world; on a eight processor shared memory machine produces wrong output"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12746.php">Terry Dontje: "Re: [OMPI users] mpirun -np 4 hello_world; on a eight processor shared memory machine produces wrong output"</a>
<li><strong>Reply:</strong> <a href="12746.php">Terry Dontje: "Re: [OMPI users] mpirun -np 4 hello_world; on a eight processor shared memory machine produces wrong output"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes, I did that.
<br>
<p>It ist basically the same problem with a Fortran version of this little program. With that I used the mpif90 command of openMPI.
<br>
________________________________________
<br>
Von: users-bounces_at_[hidden] [users-bounces_at_[hidden]] im Auftrag von Reuti [reuti_at_[hidden]]
<br>
Gesendet: Freitag, 23. April 2010 14:15
<br>
An: Open MPI Users
<br>
Betreff: Re: [OMPI users] mpirun -np 4 hello_world;     on a eight processor shared memory machine produces wrong output
<br>
<p>Hi,
<br>
<p>Am 23.04.2010 um 14:06 schrieb Pankatz, Klaus:
<br>
<p><span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; there's a problem with openMPI on my machine. When I simply try to run this little hello_world-program on multiple processors, the output isn't as expected:
</span><br>
<span class="quotelev1">&gt; *****
</span><br>
<span class="quotelev1">&gt; C code:
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;unistd.h&gt;
</span><br>
<span class="quotelev1">&gt; int main(int argc, char **argv)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;  int size,rank;
</span><br>
<span class="quotelev1">&gt;  char hostname[50];
</span><br>
<span class="quotelev1">&gt;  MPI_Init(&amp;argc,&amp;argv);
</span><br>
<span class="quotelev1">&gt;  MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank); //Who am I?
</span><br>
<span class="quotelev1">&gt;  MPI_Comm_size(MPI_COMM_WORLD, &amp;size); //How many processes?
</span><br>
<span class="quotelev1">&gt;  gethostname (hostname, 50);
</span><br>
<span class="quotelev1">&gt;  printf (&quot;Hello World! I'm number %2d of %2d running on host %s\n&quot;,
</span><br>
<span class="quotelev1">&gt; rank, size, hostname);
</span><br>
<span class="quotelev1">&gt;  MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;  return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; ****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Command: mpirun -np 4 a.out
</span><br>
<p>the mpirun (better, use: mpiexec) is the one from the Open MPI, and you also used its version mpicc to compile the program?
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev1">&gt; Output:
</span><br>
<span class="quotelev1">&gt; Hello World! I'm number  0 of  1 running on host marvin
</span><br>
<span class="quotelev1">&gt; Hello World! I'm number  0 of  1 running on host marvin
</span><br>
<span class="quotelev1">&gt; Hello World! I'm number  0 of  1 running on host marvin
</span><br>
<span class="quotelev1">&gt; Hello World! I'm number  0 of  1 running on host marvin
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It should be more or less:
</span><br>
<span class="quotelev1">&gt; Hello World! I'm number  1 of  4 running on host marvin
</span><br>
<span class="quotelev1">&gt; Hello World! I'm number  2 of  4 running on host marvin
</span><br>
<span class="quotelev1">&gt; ....
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OpenMPI-version 1.4.1 compiled with Lahey Fortran 95 (lf95).
</span><br>
<span class="quotelev1">&gt; OpenMPI was compiled &quot;out of the box&quot; only changing to the Lahey compiler with a setenv $FC lf95
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The System: Linux marvin 2.6.27.6-1 #1 SMP Sat Nov 15 20:19:04 CET 2008 x86_64 GNU/Linux
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Compiler: Lahey/Fujitsu Linux64 Fortran Compiler Release L8.10a
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks very much!
</span><br>
<span class="quotelev1">&gt; Klaus
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
<p><p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12746.php">Terry Dontje: "Re: [OMPI users] mpirun -np 4 hello_world; on a eight processor shared memory machine produces wrong output"</a>
<li><strong>Previous message:</strong> <a href="12744.php">Reuti: "Re: [OMPI users] mpirun -np 4 hello_world; on a eight processor shared memory machine produces wrong output"</a>
<li><strong>In reply to:</strong> <a href="12744.php">Reuti: "Re: [OMPI users] mpirun -np 4 hello_world; on a eight processor shared memory machine produces wrong output"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12746.php">Terry Dontje: "Re: [OMPI users] mpirun -np 4 hello_world; on a eight processor shared memory machine produces wrong output"</a>
<li><strong>Reply:</strong> <a href="12746.php">Terry Dontje: "Re: [OMPI users] mpirun -np 4 hello_world; on a eight processor shared memory machine produces wrong output"</a>
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
