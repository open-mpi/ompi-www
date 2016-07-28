<?
$subject_val = "Re: [OMPI users] mpirun -np 4 hello_world; on a eight processor shared memory machine produces wrong output";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 23 11:04:26 2010" -->
<!-- isoreceived="20100423150426" -->
<!-- sent="Fri, 23 Apr 2010 09:04:15 -0600" -->
<!-- isosent="20100423150415" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun -np 4 hello_world; on a eight processor shared memory machine produces wrong output" -->
<!-- id="3494D881-A341-4C2A-9EA1-D1C7939A7891_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-23 11:04:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12754.php">Eugene Loh: "Re: [OMPI users] mpirun -np 4 hello_world; on a eight processor shared memory machine produces wrong output"</a>
<li><strong>Previous message:</strong> <a href="12752.php">Pankatz, Klaus: "Re: [OMPI users] mpirun -np 4 hello_world; on a eight processor shared memory machine produces wrong output"</a>
<li><strong>In reply to:</strong> <a href="12752.php">Pankatz, Klaus: "Re: [OMPI users] mpirun -np 4 hello_world; on a eight processor shared memory machine produces wrong output"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12846.php">Pankatz, Klaus: "Re: [OMPI users] mpirun -np 4 hello_world; on a eight processor shared memory machine produces wrong output"</a>
<li><strong>Reply:</strong> <a href="12846.php">Pankatz, Klaus: "Re: [OMPI users] mpirun -np 4 hello_world; on a eight processor shared memory machine produces wrong output"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Is this build configured --enable-debug? If not, can you reconfigure it?
<br>
<p>If you can, you could run it with -mca ess_base_verbose 5 to see if it is picking up the correct modules.
<br>
<p>It really looks like your application was built with an older version, or compiled against something like mpich.
<br>
<p>On Apr 23, 2010, at 8:54 AM, Pankatz, Klaus wrote:
<br>
<p><span class="quotelev1">&gt; Allright, I've ran a mpirun -np 4 env. And I see OMPI_COMM_WORLD_RANK 0 to 3. So far so good.
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
<span class="quotelev2">&gt;&gt; Ok can you do an &quot;mpirun -np 4 env&quot;  you should seeOMPI_COMM_WORLD_RANK range 0 thru 3.  I am curious if you even see OMPI_* env-vars and if you do is this one 0 for all procs?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --td
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Pankatz, Klaus wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Yeah, I sure that I use the right mpirun.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; which mpirun leads to /usr/users/pankatz/OPENmpi/bin/mpirun which is the right one.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Von: users-bounces_at_[hidden] [users-bounces_at_[hidden]] im Auftrag von Terry Dontje [terry.dontje_at_[hidden]]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Gesendet: Freitag, 23. April 2010 14:29
</span><br>
<span class="quotelev3">&gt;&gt;&gt; An: Open MPI Users
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Betreff: Re: [OMPI users] mpirun -np 4 hello_world; on a eight processor shared memory machine produces wrong output
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This looks like you are using an mpirun or mpiexec from mvapich to run an executable compiled with OMPI.  Can you make sure that you are using the right mpirun?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --td
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Pankatz, Klaus wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Yes, I did that.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It ist basically the same problem with a Fortran version of this little program. With that I used the mpif90 command of openMPI.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Von: users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt; [users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt;] im Auftrag von Reuti [reuti_at_[hidden]&lt;mailto:reuti_at_[hidden]&gt;]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Gesendet: Freitag, 23. April 2010 14:15
</span><br>
<span class="quotelev3">&gt;&gt;&gt; An: Open MPI Users
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Betreff: Re: [OMPI users] mpirun -np 4 hello_world;     on a eight processor shared memory machine produces wrong output
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Am 23.04.2010 um 14:06 schrieb Pankatz, Klaus:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi all,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; there's a problem with openMPI on my machine. When I simply try to run this little hello_world-program on multiple processors, the output isn't as expected:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *****
</span><br>
<span class="quotelev3">&gt;&gt;&gt; C code:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include &lt;unistd.h&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; int main(int argc, char **argv)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  int size,rank;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  char hostname[50];
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  MPI_Init(&amp;argc,&amp;argv);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank); //Who am I?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  MPI_Comm_size(MPI_COMM_WORLD, &amp;size); //How many processes?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  gethostname (hostname, 50);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  printf (&quot;Hello World! I'm number %2d of %2d running on host %s\n&quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rank, size, hostname);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  MPI_Finalize();
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  return 0;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ****
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Command: mpirun -np 4 a.out
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the mpirun (better, use: mpiexec) is the one from the Open MPI, and you also used its version mpicc to compile the program?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- Reuti
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Output:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello World! I'm number  0 of  1 running on host marvin
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello World! I'm number  0 of  1 running on host marvin
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello World! I'm number  0 of  1 running on host marvin
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello World! I'm number  0 of  1 running on host marvin
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It should be more or less:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello World! I'm number  1 of  4 running on host marvin
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello World! I'm number  2 of  4 running on host marvin
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ....
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OpenMPI-version 1.4.1 compiled with Lahey Fortran 95 (lf95).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OpenMPI was compiled &quot;out of the box&quot; only changing to the Lahey compiler with a setenv $FC lf95
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The System: Linux marvin 2.6.27.6-1 #1 SMP Sat Nov 15 20:19:04 CET 2008 x86_64 GNU/Linux
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Compiler: Lahey/Fujitsu Linux64 Fortran Compiler Release L8.10a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks very much!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Klaus
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cid:part1.05010106.04050301_at_[hidden]]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Terry D. Dontje | Principal Software Engineer
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Developer Tools Engineering | +1.650.633.7054
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Oracle - Performance Technologies
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 95 Network Drive, Burlington, MA 01803
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Email terry.dontje_at_[hidden]&lt;mailto:terry.dontje_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; &lt;ATT00001..gif&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Terry D. Dontje | Principal Software Engineer
</span><br>
<span class="quotelev2">&gt;&gt; Developer Tools Engineering | +1.650.633.7054
</span><br>
<span class="quotelev2">&gt;&gt; Oracle - Performance Technologies
</span><br>
<span class="quotelev2">&gt;&gt; 95 Network Drive, Burlington, MA 01803
</span><br>
<span class="quotelev2">&gt;&gt; Email terry.dontje_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; &lt;ATT00002..txt&gt;
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12753/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12754.php">Eugene Loh: "Re: [OMPI users] mpirun -np 4 hello_world; on a eight processor shared memory machine produces wrong output"</a>
<li><strong>Previous message:</strong> <a href="12752.php">Pankatz, Klaus: "Re: [OMPI users] mpirun -np 4 hello_world; on a eight processor shared memory machine produces wrong output"</a>
<li><strong>In reply to:</strong> <a href="12752.php">Pankatz, Klaus: "Re: [OMPI users] mpirun -np 4 hello_world; on a eight processor shared memory machine produces wrong output"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12846.php">Pankatz, Klaus: "Re: [OMPI users] mpirun -np 4 hello_world; on a eight processor shared memory machine produces wrong output"</a>
<li><strong>Reply:</strong> <a href="12846.php">Pankatz, Klaus: "Re: [OMPI users] mpirun -np 4 hello_world; on a eight processor shared memory machine produces wrong output"</a>
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
