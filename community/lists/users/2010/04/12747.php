<?
$subject_val = "Re: [OMPI users] mpirun -np 4 hello_world; on a eight processor shared memory machine produces wrong output";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 23 08:43:24 2010" -->
<!-- isoreceived="20100423124324" -->
<!-- sent="Fri, 23 Apr 2010 14:41:57 +0200" -->
<!-- isosent="20100423124157" -->
<!-- name="Pankatz, Klaus" -->
<!-- email="klaus.pankatz_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun -np 4 hello_world; on a eight processor shared memory machine produces wrong output" -->
<!-- id="DB5810118A97904784BECE13867C5CF670054240D5_at_MSX" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4BD192C5.5040703_at_oracle.com" -->
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
<strong>Date:</strong> 2010-04-23 08:41:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12748.php">Terry Dontje: "Re: [OMPI users] mpirun -np 4 hello_world; on a eight processor shared memory machine produces wrong output"</a>
<li><strong>Previous message:</strong> <a href="12746.php">Terry Dontje: "Re: [OMPI users] mpirun -np 4 hello_world; on a eight processor shared memory machine produces wrong output"</a>
<li><strong>In reply to:</strong> <a href="12746.php">Terry Dontje: "Re: [OMPI users] mpirun -np 4 hello_world; on a eight processor shared memory machine produces wrong output"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12748.php">Terry Dontje: "Re: [OMPI users] mpirun -np 4 hello_world; on a eight processor shared memory machine produces wrong output"</a>
<li><strong>Reply:</strong> <a href="12748.php">Terry Dontje: "Re: [OMPI users] mpirun -np 4 hello_world; on a eight processor shared memory machine produces wrong output"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yeah, I sure that I use the right mpirun.
<br>
<p>which mpirun leads to /usr/users/pankatz/OPENmpi/bin/mpirun which is the right one.
<br>
________________________________________
<br>
Von: users-bounces_at_[hidden] [users-bounces_at_[hidden]] im Auftrag von Terry Dontje [terry.dontje_at_[hidden]]
<br>
Gesendet: Freitag, 23. April 2010 14:29
<br>
An: Open MPI Users
<br>
Betreff: Re: [OMPI users] mpirun -np 4 hello_world; on a eight processor shared memory machine produces wrong output
<br>
<p>This looks like you are using an mpirun or mpiexec from mvapich to run an executable compiled with OMPI.  Can you make sure that you are using the right mpirun?
<br>
<p>--td
<br>
<p>Pankatz, Klaus wrote:
<br>
<p>Yes, I did that.
<br>
<p>It ist basically the same problem with a Fortran version of this little program. With that I used the mpif90 command of openMPI.
<br>
________________________________________
<br>
Von: users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt; [users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt;] im Auftrag von Reuti [reuti_at_[hidden]&lt;mailto:reuti_at_[hidden]&gt;]
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
<p><p><p>Hi all,
<br>
<p>there's a problem with openMPI on my machine. When I simply try to run this little hello_world-program on multiple processors, the output isn't as expected:
<br>
*****
<br>
C code:
<br>
#include &lt;mpi.h&gt;
<br>
#include &lt;stdio.h&gt;
<br>
#include &lt;unistd.h&gt;
<br>
int main(int argc, char **argv)
<br>
{
<br>
&nbsp;int size,rank;
<br>
&nbsp;char hostname[50];
<br>
&nbsp;MPI_Init(&amp;argc,&amp;argv);
<br>
&nbsp;MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank); //Who am I?
<br>
&nbsp;MPI_Comm_size(MPI_COMM_WORLD, &amp;size); //How many processes?
<br>
&nbsp;gethostname (hostname, 50);
<br>
&nbsp;printf (&quot;Hello World! I'm number %2d of %2d running on host %s\n&quot;,
<br>
rank, size, hostname);
<br>
&nbsp;MPI_Finalize();
<br>
&nbsp;return 0;
<br>
}
<br>
****
<br>
<p>Command: mpirun -np 4 a.out
<br>
<p><p><p>the mpirun (better, use: mpiexec) is the one from the Open MPI, and you also used its version mpicc to compile the program?
<br>
<p>-- Reuti
<br>
<p><p><p><p>Output:
<br>
Hello World! I'm number  0 of  1 running on host marvin
<br>
Hello World! I'm number  0 of  1 running on host marvin
<br>
Hello World! I'm number  0 of  1 running on host marvin
<br>
Hello World! I'm number  0 of  1 running on host marvin
<br>
<p>It should be more or less:
<br>
Hello World! I'm number  1 of  4 running on host marvin
<br>
Hello World! I'm number  2 of  4 running on host marvin
<br>
....
<br>
<p>OpenMPI-version 1.4.1 compiled with Lahey Fortran 95 (lf95).
<br>
OpenMPI was compiled &quot;out of the box&quot; only changing to the Lahey compiler with a setenv $FC lf95
<br>
<p>The System: Linux marvin 2.6.27.6-1 #1 SMP Sat Nov 15 20:19:04 CET 2008 x86_64 GNU/Linux
<br>
<p>Compiler: Lahey/Fujitsu Linux64 Fortran Compiler Release L8.10a
<br>
<p>Thanks very much!
<br>
Klaus
<br>
<p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p><p><p><p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p><p><p><pre>
--
[cid:part1.05010106.04050301_at_[hidden]]
Terry D. Dontje | Principal Software Engineer
Developer Tools Engineering | +1.650.633.7054
Oracle - Performance Technologies
95 Network Drive, Burlington, MA 01803
Email terry.dontje_at_[hidden]&lt;mailto:terry.dontje_at_[hidden]&gt;
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12748.php">Terry Dontje: "Re: [OMPI users] mpirun -np 4 hello_world; on a eight processor shared memory machine produces wrong output"</a>
<li><strong>Previous message:</strong> <a href="12746.php">Terry Dontje: "Re: [OMPI users] mpirun -np 4 hello_world; on a eight processor shared memory machine produces wrong output"</a>
<li><strong>In reply to:</strong> <a href="12746.php">Terry Dontje: "Re: [OMPI users] mpirun -np 4 hello_world; on a eight processor shared memory machine produces wrong output"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12748.php">Terry Dontje: "Re: [OMPI users] mpirun -np 4 hello_world; on a eight processor shared memory machine produces wrong output"</a>
<li><strong>Reply:</strong> <a href="12748.php">Terry Dontje: "Re: [OMPI users] mpirun -np 4 hello_world; on a eight processor shared memory machine produces wrong output"</a>
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
