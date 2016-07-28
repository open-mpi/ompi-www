<?
$subject_val = "Re: [OMPI users] mpirun -np 4 hello_world; on a eight processor shared memory machine produces wrong output";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 23 11:06:24 2010" -->
<!-- isoreceived="20100423150624" -->
<!-- sent="Fri, 23 Apr 2010 08:06:48 -0700" -->
<!-- isosent="20100423150648" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun -np 4 hello_world; on a eight processor shared memory machine produces wrong output" -->
<!-- id="4BD1B788.9020901_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="7E70BB11-5CEB-4FE4-B6F9-1911AA16D31A_at_mpic.de" -->
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
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-23 11:06:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12755.php">Timur Magomedov: "Re: [OMPI users] Segmentation fault when Send/Recv on heterogeneouscluster (32/64 bit machines)"</a>
<li><strong>Previous message:</strong> <a href="12753.php">Ralph Castain: "Re: [OMPI users] mpirun -np 4 hello_world; on a eight processor shared memory machine produces wrong output"</a>
<li><strong>In reply to:</strong> <a href="12752.php">Pankatz, Klaus: "Re: [OMPI users] mpirun -np 4 hello_world; on a eight processor shared memory machine produces wrong output"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/05/13011.php">Pankatz, Klaus: "Re: [OMPI users] mpirun -np 4 hello_world; on a eight processor shared memory machine produces wrong output"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/05/13011.php">Pankatz, Klaus: "Re: [OMPI users] mpirun -np 4 hello_world; on a eight processor shared memory machine produces wrong output"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Great.  That suggests mpirun is OMPI, as you suggested it was, and that 
<br>
the different process ranks are being set up correctly by mpirun.
<br>
<p>But can you also confirm that you're using the OMPI mpicc or mpif90?  
<br>
Invoke the mpicc with a full path name, perhaps -- that is, 
<br>
/usr/users/pankatz/OPENmpi/bin/mpicc -- or stick a
<br>
<p>#ifdef OPEN_MPI
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;using Open MPI\n&quot;);
<br>
#else
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;not using Open MPI\n&quot;);
<br>
#endif
<br>
<p>into your source code.
<br>
<p>Pankatz, Klaus wrote:
<br>
<p><span class="quotelev1">&gt; Allright, I've ran a mpirun -np 4 env. And I see OMPI_COMM_WORLD_RANK 
</span><br>
<span class="quotelev1">&gt; 0 to 3. So far so good.
</span><br>
<span class="quotelev1">&gt; OMPI_COMM_WORLD_SIZE=4 everytime, I think thats correct.
</span><br>
<span class="quotelev1">&gt; OMPI_MCA_mpi_yield_when_idle=0 everytime zero
</span><br>
<span class="quotelev1">&gt; OMPI_MCA_orte_app_num=0 everytime zero 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Am 23.04.2010 um 14:54 schrieb Terry Dontje:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ok can you do an &quot;mpirun -np 4 env&quot;  you should 
</span><br>
<span class="quotelev2">&gt;&gt; seeOMPI_COMM_WORLD_RANK range 0 thru 3.  I am curious if you even see 
</span><br>
<span class="quotelev2">&gt;&gt; OMPI_* env-vars and if you do is this one 0 for all procs?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Pankatz, Klaus wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;Yeah, I sure that I use the right mpirun.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;which mpirun leads to /usr/users/pankatz/OPENmpi/bin/mpirun which is the right one.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;Von: users-bounces_at_[hidden] [users-bounces_at_[hidden]] im Auftrag von Terry Dontje [terry.dontje_at_[hidden]]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;Gesendet: Freitag, 23. April 2010 14:29
</span><br>
<span class="quotelev3">&gt;&gt;&gt;An: Open MPI Users
</span><br>
<span class="quotelev3">&gt;&gt;&gt;Betreff: Re: [OMPI users] mpirun -np 4 hello_world; on a eight processor shared memory machine produces wrong output
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;This looks like you are using an mpirun or mpiexec from mvapich to run an executable compiled with OMPI.  Can you make sure that you are using the right mpirun?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;--td
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;Pankatz, Klaus wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;Yes, I did that.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;It ist basically the same problem with a Fortran version of this little program. With that I used the mpif90 command of openMPI.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;Von: users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt; [users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt;] im Auftrag von Reuti [reuti_at_[hidden]&lt;mailto:reuti_at_[hidden]&gt;]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;Gesendet: Freitag, 23. April 2010 14:15
</span><br>
<span class="quotelev3">&gt;&gt;&gt;An: Open MPI Users
</span><br>
<span class="quotelev3">&gt;&gt;&gt;Betreff: Re: [OMPI users] mpirun -np 4 hello_world;     on a eight processor shared memory machine produces wrong output
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;Am 23.04.2010 um 14:06 schrieb Pankatz, Klaus:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;Hi all,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;there's a problem with openMPI on my machine. When I simply try to run this little hello_world-program on multiple processors, the output isn't as expected:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;*****
</span><br>
<span class="quotelev3">&gt;&gt;&gt;C code:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;#include &lt;mpi.h&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;#include &lt;stdio.h&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;#include &lt;unistd.h&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;int main(int argc, char **argv)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;{
</span><br>
<span class="quotelev3">&gt;&gt;&gt; int size,rank;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; char hostname[50];
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Init(&amp;argc,&amp;argv);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank); //Who am I?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Comm_size(MPI_COMM_WORLD, &amp;size); //How many processes?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; gethostname (hostname, 50);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; printf (&quot;Hello World! I'm number %2d of %2d running on host %s\n&quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;rank, size, hostname);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Finalize();
</span><br>
<span class="quotelev3">&gt;&gt;&gt; return 0;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;}
</span><br>
<span class="quotelev3">&gt;&gt;&gt;****
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;Command: mpirun -np 4 a.out
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;the mpirun (better, use: mpiexec) is the one from the Open MPI, and you also used its version mpicc to compile the program?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;-- Reuti
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;Output:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;Hello World! I'm number  0 of  1 running on host marvin
</span><br>
<span class="quotelev3">&gt;&gt;&gt;Hello World! I'm number  0 of  1 running on host marvin
</span><br>
<span class="quotelev3">&gt;&gt;&gt;Hello World! I'm number  0 of  1 running on host marvin
</span><br>
<span class="quotelev3">&gt;&gt;&gt;Hello World! I'm number  0 of  1 running on host marvin
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;It should be more or less:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;Hello World! I'm number  1 of  4 running on host marvin
</span><br>
<span class="quotelev3">&gt;&gt;&gt;Hello World! I'm number  2 of  4 running on host marvin
</span><br>
<span class="quotelev3">&gt;&gt;&gt;....
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;OpenMPI-version 1.4.1 compiled with Lahey Fortran 95 (lf95).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;OpenMPI was compiled &quot;out of the box&quot; only changing to the Lahey compiler with a setenv $FC lf95
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;The System: Linux marvin 2.6.27.6-1 #1 SMP Sat Nov 15 20:19:04 CET 2008 x86_64 GNU/Linux
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;Compiler: Lahey/Fujitsu Linux64 Fortran Compiler Release L8.10a
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12755.php">Timur Magomedov: "Re: [OMPI users] Segmentation fault when Send/Recv on heterogeneouscluster (32/64 bit machines)"</a>
<li><strong>Previous message:</strong> <a href="12753.php">Ralph Castain: "Re: [OMPI users] mpirun -np 4 hello_world; on a eight processor shared memory machine produces wrong output"</a>
<li><strong>In reply to:</strong> <a href="12752.php">Pankatz, Klaus: "Re: [OMPI users] mpirun -np 4 hello_world; on a eight processor shared memory machine produces wrong output"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/05/13011.php">Pankatz, Klaus: "Re: [OMPI users] mpirun -np 4 hello_world; on a eight processor shared memory machine produces wrong output"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/05/13011.php">Pankatz, Klaus: "Re: [OMPI users] mpirun -np 4 hello_world; on a eight processor shared memory machine produces wrong output"</a>
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
