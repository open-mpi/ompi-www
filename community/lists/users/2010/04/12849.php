<?
$subject_val = "Re: [OMPI users] mpirun -np 4 hello_world; on a eight processor shared memory machine produces wrong output";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 29 09:55:53 2010" -->
<!-- isoreceived="20100429135553" -->
<!-- sent="Thu, 29 Apr 2010 07:55:35 -0600" -->
<!-- isosent="20100429135535" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun -np 4 hello_world; on a eight processor shared memory machine produces wrong output" -->
<!-- id="0440C50E-BC2F-4295-8641-B0D19001FE50_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="DB5810118A97904784BECE13867C5CF670054240DF_at_MSX" -->
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
<strong>Date:</strong> 2010-04-29 09:55:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12850.php">Nguyen Kim Son: "Re: [OMPI users] mpirun works locally but not through network"</a>
<li><strong>Previous message:</strong> <a href="12848.php">Ralph Castain: "Re: [OMPI users] mpirun works locally but not through network"</a>
<li><strong>In reply to:</strong> <a href="12846.php">Pankatz, Klaus: "Re: [OMPI users] mpirun -np 4 hello_world; on a eight processor shared memory machine produces wrong output"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12754.php">Eugene Loh: "Re: [OMPI users] mpirun -np 4 hello_world; on a eight processor shared memory machine produces wrong output"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It confirms what we were saying - your application is not compiled against OMPI
<br>
<p>You'll have to dig a little to figure out why that is happening - could be a path issue.
<br>
<p>On Apr 29, 2010, at 2:56 AM, Pankatz, Klaus wrote:
<br>
<p><span class="quotelev1">&gt; Hi Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; thanks for your advise. Finally I configured openmpi with ./configure --prefix=... --enable-debug.
</span><br>
<span class="quotelev1">&gt; According to your suggestion I ran the hello_world with 
</span><br>
<span class="quotelev1">&gt; mpirun -np 4 -mca ess_base_verbose 5 and the output is as follows:
</span><br>
<span class="quotelev1">&gt; I don't know what happend there...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ******
</span><br>
<span class="quotelev1">&gt; [marvin:00373] mca:base:select:(  ess) Querying component [env]
</span><br>
<span class="quotelev1">&gt; [marvin:00373] mca:base:select:(  ess) Skipping component [env]. Query failed to return a module
</span><br>
<span class="quotelev1">&gt; [marvin:00373] mca:base:select:(  ess) Querying component [hnp]
</span><br>
<span class="quotelev1">&gt; [marvin:00373] mca:base:select:(  ess) Query of component [hnp] set priority to 100
</span><br>
<span class="quotelev1">&gt; [marvin:00373] mca:base:select:(  ess) Querying component [singleton]
</span><br>
<span class="quotelev1">&gt; [marvin:00373] mca:base:select:(  ess) Skipping component [singleton]. Query failed to return a module
</span><br>
<span class="quotelev1">&gt; [marvin:00373] mca:base:select:(  ess) Querying component [slurm]
</span><br>
<span class="quotelev1">&gt; [marvin:00373] mca:base:select:(  ess) Skipping component [slurm]. Query failed to return a module
</span><br>
<span class="quotelev1">&gt; [marvin:00373] mca:base:select:(  ess) Querying component [tool]
</span><br>
<span class="quotelev1">&gt; [marvin:00373] mca:base:select:(  ess) Skipping component [tool]. Query failed to return a module
</span><br>
<span class="quotelev1">&gt; [marvin:00373] mca:base:select:(  ess) Selected component [hnp]
</span><br>
<span class="quotelev1">&gt; Hello World! I'm number  0 of  1 running on host marvin
</span><br>
<span class="quotelev1">&gt; Hello World! I'm number  0 of  1 running on host marvin
</span><br>
<span class="quotelev1">&gt; Hello World! I'm number  0 of  1 running on host marvin
</span><br>
<span class="quotelev1">&gt; Hello World! I'm number  0 of  1 running on host marvin
</span><br>
<span class="quotelev1">&gt; ****
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ________________________________________
</span><br>
<span class="quotelev1">&gt; Von: users-bounces_at_[hidden] [users-bounces_at_[hidden]] im Auftrag von Ralph Castain [rhc_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; Gesendet: Freitag, 23. April 2010 17:04
</span><br>
<span class="quotelev1">&gt; An: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Betreff: Re: [OMPI users] mpirun -np 4 hello_world;     on a eight processor shared memory machine produces wrong output
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is this build configured --enable-debug? If not, can you reconfigure it?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If you can, you could run it with -mca ess_base_verbose 5 to see if it is picking up the correct modules.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It really looks like your application was built with an older version, or compiled against something like mpich.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Apr 23, 2010, at 8:54 AM, Pankatz, Klaus wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Allright, I've ran a mpirun -np 4 env. And I see OMPI_COMM_WORLD_RANK 0 to 3. So far so good.
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
<span class="quotelev1">&gt; Ok can you do an &quot;mpirun -np 4 env&quot;  you should seeOMPI_COMM_WORLD_RANK range 0 thru 3.  I am curious if you even see OMPI_* env-vars and if you do is this one 0 for all procs?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --td
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Pankatz, Klaus wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yeah, I sure that I use the right mpirun.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; which mpirun leads to /usr/users/pankatz/OPENmpi/bin/mpirun which is the right one.
</span><br>
<span class="quotelev1">&gt; ________________________________________
</span><br>
<span class="quotelev1">&gt; Von: users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt; [users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt;] im Auftrag von Terry Dontje [terry.dontje_at_[hidden]&lt;mailto:terry.dontje_at_[hidden]&gt;]
</span><br>
<span class="quotelev1">&gt; Gesendet: Freitag, 23. April 2010 14:29
</span><br>
<span class="quotelev1">&gt; An: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Betreff: Re: [OMPI users] mpirun -np 4 hello_world; on a eight processor shared memory machine produces wrong output
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This looks like you are using an mpirun or mpiexec from mvapich to run an executable compiled with OMPI.  Can you make sure that you are using the right mpirun?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --td
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Pankatz, Klaus wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes, I did that.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It ist basically the same problem with a Fortran version of this little program. With that I used the mpif90 command of openMPI.
</span><br>
<span class="quotelev1">&gt; ________________________________________
</span><br>
<span class="quotelev1">&gt; Von: users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt;&lt;mailto:users-bounces_at_[hidden]&gt;&lt;mailto:users-bounces_at_[hidden]&gt; [users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt;&lt;mailto:users-bounces_at_[hidden]&gt;&lt;mailto:users-bounces_at_[hidden]&gt;] im Auftrag von Reuti [reuti_at_[hidden]&lt;mailto:reuti_at_[hidden]&gt;&lt;mailto:reuti_at_[hidden]&gt;&lt;mailto:reuti_at_[hidden]&gt;]
</span><br>
<span class="quotelev1">&gt; Gesendet: Freitag, 23. April 2010 14:15
</span><br>
<span class="quotelev1">&gt; An: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Betreff: Re: [OMPI users] mpirun -np 4 hello_world;     on a eight processor shared memory machine produces wrong output
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Am 23.04.2010 um 14:06 schrieb Pankatz, Klaus:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi all,
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
<span class="quotelev1">&gt; int size,rank;
</span><br>
<span class="quotelev1">&gt; char hostname[50];
</span><br>
<span class="quotelev1">&gt; MPI_Init(&amp;argc,&amp;argv);
</span><br>
<span class="quotelev1">&gt; MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank); //Who am I?
</span><br>
<span class="quotelev1">&gt; MPI_Comm_size(MPI_COMM_WORLD, &amp;size); //How many processes?
</span><br>
<span class="quotelev1">&gt; gethostname (hostname, 50);
</span><br>
<span class="quotelev1">&gt; printf (&quot;Hello World! I'm number %2d of %2d running on host %s\n&quot;,
</span><br>
<span class="quotelev1">&gt; rank, size, hostname);
</span><br>
<span class="quotelev1">&gt; MPI_Finalize();
</span><br>
<span class="quotelev1">&gt; return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; ****
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Command: mpirun -np 4 a.out
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; the mpirun (better, use: mpiexec) is the one from the Open MPI, and you also used its version mpicc to compile the program?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- Reuti
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Output:
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
<span class="quotelev1">&gt; users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&lt;mailto:users_at_[hidden]&gt;&lt;mailto:users_at_[hidden]&gt;
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&lt;mailto:users_at_[hidden]&gt;&lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&lt;mailto:users_at_[hidden]&gt;&lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; [cid:part1.05010106.04050301_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; Terry D. Dontje | Principal Software Engineer
</span><br>
<span class="quotelev1">&gt; Developer Tools Engineering | +1.650.633.7054
</span><br>
<span class="quotelev1">&gt; Oracle - Performance Technologies
</span><br>
<span class="quotelev1">&gt; 95 Network Drive, Burlington, MA 01803
</span><br>
<span class="quotelev1">&gt; Email terry.dontje_at_[hidden]&lt;mailto:terry.dontje_at_[hidden]&gt;&lt;mailto:terry.dontje_at_[hidden]&gt;&lt;mailto:terry.dontje_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; &lt;ATT00001..gif&gt;
</span><br>
<span class="quotelev1">&gt; Terry D. Dontje | Principal Software Engineer
</span><br>
<span class="quotelev1">&gt; Developer Tools Engineering | +1.650.633.7054
</span><br>
<span class="quotelev1">&gt; Oracle - Performance Technologies
</span><br>
<span class="quotelev1">&gt; 95 Network Drive, Burlington, MA 01803
</span><br>
<span class="quotelev1">&gt; Email terry.dontje_at_[hidden]&lt;mailto:terry.dontje_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;ATT00002..txt&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12850.php">Nguyen Kim Son: "Re: [OMPI users] mpirun works locally but not through network"</a>
<li><strong>Previous message:</strong> <a href="12848.php">Ralph Castain: "Re: [OMPI users] mpirun works locally but not through network"</a>
<li><strong>In reply to:</strong> <a href="12846.php">Pankatz, Klaus: "Re: [OMPI users] mpirun -np 4 hello_world; on a eight processor shared memory machine produces wrong output"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12754.php">Eugene Loh: "Re: [OMPI users] mpirun -np 4 hello_world; on a eight processor shared memory machine produces wrong output"</a>
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
