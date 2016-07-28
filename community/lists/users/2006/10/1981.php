<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Oct 14 07:18:34 2006" -->
<!-- isoreceived="20061014111834" -->
<!-- sent="Fri, 13 Oct 2006 21:20:13 -0400" -->
<!-- isosent="20061014012013" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] PBS problem with OpenMP- only one processor used" -->
<!-- id="3D423098-A981-4981-B54C-FFEBCB7E2919_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="678498360610120523p355e5133sc9044e3a90aaebab_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-10-13 21:20:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1982.php">Jeff Squyres: "Re: [OMPI users] problem building static w/ 1.1.2_rc4"</a>
<li><strong>Previous message:</strong> <a href="1980.php">Jeff Squyres: "Re: [OMPI users] Trouble with shared libraries"</a>
<li><strong>In reply to:</strong> <a href="1968.php">amane001: "Re: [OMPI users] PBS problem with OpenMP- only one processor used"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Michael and Reuti made some good suggestions.
<br>
<p>- Don't confuse OpenMP with Open MPI.
<br>
<p>- The OMPI_NUM_THREADS environment variable is an OpenMP thing, not  
<br>
an Open MPI thing, so it will have no effect here.  You might as well  
<br>
remove it from your PBS script (it won't have any effect on LAM,  
<br>
either).
<br>
<p>- Your PBS script is asking for 2 nodes, but only one process per  
<br>
nodes (-l nodes=2).  It's been a while since I've used PBS/Torque  
<br>
regularly, but I think the right syntax is &quot;-l nodes=2:ppn=2&quot;, which  
<br>
gives you 2 nodes, each with 2 processors per node (based on the  
<br>
context of your mail, this is what I assume you want -- but adjust  
<br>
the values as you see fit).
<br>
<p>- A good test to see if this stuff is working properly is to get an  
<br>
interactive PBS job and play with running &quot;hostname&quot;.  For example,  
<br>
something like this:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$ qsub -I -qdebug -lnodes=2:ppn=2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[wait for shell prompt on the mother superior node]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$ mpirun -np 4 hostname
<br>
<p>You should see:
<br>
<p>host1
<br>
host1
<br>
host2
<br>
host2
<br>
<p>(replacing those with your hostnames, of course, and potentially  
<br>
mixing up the order because of stdio-ordering-lack-of-guarantees)
<br>
<p>That will confirm that you're running on all 4 processors that PBS/ 
<br>
Torque allocated to you.  If that works, then adjust your script  
<br>
accordingly and try it with your real application.
<br>
<p>Hope that helps.
<br>
<p><p>On Oct 12, 2006, at 8:23 AM, amane001 wrote:
<br>
<p><span class="quotelev1">&gt; Thanks for your reply. I actually meant OpenMPI (from open-mpi.org)  
</span><br>
<span class="quotelev1">&gt; and I have compiled that using
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./configure FC=ifort F77=ifort F90=ifort --prefix=$OPENMP_DIR
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I may be asking some dumb questions here, but I'm really a beginner  
</span><br>
<span class="quotelev1">&gt; to please bear with me.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ~Amane
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 10/12/06, Reuti &lt;reuti_at_[hidden]&gt; wrote: Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Am 12.10.2006 um 09:52 schrieb amane001:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hello all,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I recently switched to OpenMP from LAM-MPI for my code. I'm trying
</span><br>
<span class="quotelev2">&gt; &gt; to run my test code with a PBS scheduler on our local cluster. The
</span><br>
<span class="quotelev2">&gt; &gt; PBS script is shown below. When the job is executed however, only
</span><br>
<span class="quotelev2">&gt; &gt; one CPU is used for running the test.exe. Another more confusing
</span><br>
<span class="quotelev2">&gt; &gt; aspect is the fact that the following three lines highlighted in
</span><br>
<span class="quotelev2">&gt; &gt; the code below. Even if I set the OMP_NUM_THREADS = 2, the print
</span><br>
<span class="quotelev2">&gt; &gt; statement in the next line says it's value is 1.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; is it your intention to mix OpenMPI and OpenMP? Which compilation
</span><br>
<span class="quotelev1">&gt; flags did you use for OpenMPI?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Any ideas where I could be going wrong?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thank you all for your help in advance!
</span><br>
<span class="quotelev2">&gt; &gt; ~Amane
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; #!/bin/sh
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; #PBS -e job.err
</span><br>
<span class="quotelev2">&gt; &gt; #PBS -o job.log
</span><br>
<span class="quotelev2">&gt; &gt; #PBS -m ae
</span><br>
<span class="quotelev2">&gt; &gt; #PBS -q debug
</span><br>
<span class="quotelev2">&gt; &gt; #PBS -l nodes=2
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; cd $PBS_O_WORKDIR
</span><br>
<span class="quotelev2">&gt; &gt; ##################################################
</span><br>
<span class="quotelev2">&gt; &gt; setenv OMP_NUM_THREADS 2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; setenv is csh, you are using (ba)sh.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; export OMP_NUM_THREADS=2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; but most likely you won't need it at all.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- Reuti
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; echo I hope you find the correct number of processors
</span><br>
<span class="quotelev2">&gt; &gt; echo $OMP_NUM_THREADS
</span><br>
<span class="quotelev2">&gt; &gt; ##################################################
</span><br>
<span class="quotelev2">&gt; &gt; ######### above 3 lines produce the following output --
</span><br>
<span class="quotelev2">&gt; &gt; # I hope you find the correct number of processors
</span><br>
<span class="quotelev2">&gt; &gt; # 1
</span><br>
<span class="quotelev2">&gt; &gt; ##################################################
</span><br>
<span class="quotelev2">&gt; &gt; /usr/local/openmp- 1.1.1/bin/mpirun -np 2 ../source/test.exe  &lt;
</span><br>
<span class="quotelev2">&gt; &gt; input.dat&gt;Output
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Server Virtualization Business Unit
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1982.php">Jeff Squyres: "Re: [OMPI users] problem building static w/ 1.1.2_rc4"</a>
<li><strong>Previous message:</strong> <a href="1980.php">Jeff Squyres: "Re: [OMPI users] Trouble with shared libraries"</a>
<li><strong>In reply to:</strong> <a href="1968.php">amane001: "Re: [OMPI users] PBS problem with OpenMP- only one processor used"</a>
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
