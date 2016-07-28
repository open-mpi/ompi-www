<?
$subject_val = "Re: [OMPI users] Running openMPI job with torque";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun  9 13:45:41 2010" -->
<!-- isoreceived="20100609174541" -->
<!-- sent="Wed, 09 Jun 2010 13:45:31 -0400" -->
<!-- isosent="20100609174531" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Running openMPI job with torque" -->
<!-- id="4C0FD33B.8080606_at_ldeo.columbia.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="9F2C853F-3A76-43A6-8EF2-FC08734F31A5_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Running openMPI job with torque<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-09 13:45:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13284.php">Jeff Squyres: "Re: [OMPI users] Debug info on Darwin"</a>
<li><strong>Previous message:</strong> <a href="13282.php">Jeff Squyres: "Re: [OMPI users] Running openMPI job with torque"</a>
<li><strong>In reply to:</strong> <a href="13281.php">Ralph Castain: "Re: [OMPI users] Running openMPI job with torque"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13287.php">Govind Songara: "Re: [OMPI users] Running openMPI job with torque"</a>
<li><strong>Reply:</strong> <a href="13287.php">Govind Songara: "Re: [OMPI users] Running openMPI job with torque"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Govind
<br>
<p>Besides what Ralph said, make sure your OpenMPI was
<br>
built with Torque (&quot;tm&quot;) support.
<br>
<p>Suggestion:
<br>
Do:
<br>
<p>ompi_info --all | grep tm
<br>
<p>It should show lines like these:
<br>
<p>MCA ras: tm (MCA v2.0, API v2.0, Component v1.4.2)
<br>
MCA plm: tm (MCA v2.0, API v2.0, Component v1.4.2)
<br>
...
<br>
<p>***
<br>
<p>If your OpenMPI doesn't have torque support,
<br>
you may need to add the nodes list to your mpirun command.
<br>
<p>Suggestion:
<br>
<p>/usr/lib64/openmpi/1.4-gcc/bin/mpirun -hostfile $PBS_NODEFILE -np 4 ./hello
<br>
<p>***
<br>
<p>Also, assuming your OpenMPI has torque support:
<br>
<p>Did you request 4 nodes from torque?
<br>
<p>If you don't request the nodes and processors,
<br>
torque will give you the default values
<br>
(which may be one processor and one node).
<br>
<p>Suggestion:
<br>
<p>A script like this (adjusted to your site), tcsh style here,
<br>
say, called run_my_pbs_job.tcsh:
<br>
<p>*********
<br>
<p>#! /bin/tcsh
<br>
#PBS -l nodes=4:ppn=1
<br>
#PBS -q default_at_your.torque.server
<br>
#PBS -N myjob
<br>
cd $PBS_O_WORKDIR
<br>
/usr/lib64/openmpi/1.4-gcc/bin/mpirun -np 4 ./hello
<br>
<p>*********
<br>
<p>Then do:
<br>
qsub run_my_pbs_job.tcsh
<br>
<p>**
<br>
<p>You can get more information about the PBS syntax using &quot;man qsub&quot;.
<br>
<p>**
<br>
<p>I hope this helps,
<br>
Gus Correa
<br>
---------------------------------------------------------------------
<br>
Gustavo Correa
<br>
Lamont-Doherty Earth Observatory - Columbia University
<br>
Palisades, NY, 10964-8000 - USA
<br>
---------------------------------------------------------------------
<br>
<p>Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jun 9, 2010, at 10:00 AM, Govind Songara wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks Ralph after giving full path of hello it runs.
</span><br>
<span class="quotelev2">&gt;&gt; But it run only on one rank
</span><br>
<span class="quotelev2">&gt;&gt; Hello World! from process 0 out of 1 on node56.beowulf.cluster
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Just to check things out, I would do:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun --display-allocation --display-map -np 4 ....
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That should show you the allocation and where OMPI is putting the procs.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; there also a error
</span><br>
<span class="quotelev3">&gt;&gt; &gt;cat my-script.sh.e43
</span><br>
<span class="quotelev2">&gt;&gt; stty: standard input: Invalid argument
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Not really sure here - must be an error in the script itself.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 9 June 2010 16:46, Ralph Castain &lt;rhc_at_[hidden] 
</span><br>
<span class="quotelev2">&gt;&gt; &lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     You need to include the path to &quot;hello&quot; unless it sits in your
</span><br>
<span class="quotelev2">&gt;&gt;     PATH environment!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     On Jun 9, 2010, at 9:37 AM, Govind wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     #!/bin/sh
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     /usr/lib64/openmpi/1.4-gcc/bin/mpirun hello
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     On 9 June 2010 16:21, David Zhang &lt;solarbikedz_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     &lt;mailto:solarbikedz_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         what does your my-script.sh looks like?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         On Wed, Jun 9, 2010 at 8:17 AM, Govind &lt;govind.rhul_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         &lt;mailto:govind.rhul_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             I have installed following openMPI packge on worker node
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             from repo
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             openmpi-libs-1.4-4.el5.x86_64
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             openmpi-1.4-4.el5.x86_64
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             mpitests-openmpi-3.0-2.el5.x86_64
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             mpi-selector-1.0.2-1.el5.noarch
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             torque-client-2.3.6-2cri.el5.x86_64
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             torque-2.3.6-2cri.el5.x86_64
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             torque-mom-2.3.6-2cri.el5.x86_64
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             Having some problem on running MPI jobs with torque
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             qsub -q long -l nodes=4 my-script.sh
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             42.pbs1 &lt;<a href="http://42.pbs1.pp.rhul.ac.uk/">http://42.pbs1.pp.rhul.ac.uk/</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             cat my-script.sh.e41
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             stty: standard input: Invalid argument
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             mpirun was unable to launch the specified application as
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             it could not find an executable:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             Executable: hello
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             Node: node56.beowulf.cluster
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             while attempting to start process rank 0.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             ==================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             I could run the  binary directly on the node without any
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             problem.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;              mpiexec -n 4 hello
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             Hello World! from process 2 out of 4 on
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             node56.beowulf.cluster
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             Hello World! from process 0 out of 4 on
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             node56.beowulf.cluster
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             Hello World! from process 3 out of 4 on
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             node56.beowulf.cluster
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             Hello World! from process 1 out of 4 on
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             node56.beowulf.cluster
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             Could you please advise, if I missing anything here.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             Regards
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             Govind
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         David Zhang
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         University of California, San Diego
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;     users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
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
<li><strong>Next message:</strong> <a href="13284.php">Jeff Squyres: "Re: [OMPI users] Debug info on Darwin"</a>
<li><strong>Previous message:</strong> <a href="13282.php">Jeff Squyres: "Re: [OMPI users] Running openMPI job with torque"</a>
<li><strong>In reply to:</strong> <a href="13281.php">Ralph Castain: "Re: [OMPI users] Running openMPI job with torque"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13287.php">Govind Songara: "Re: [OMPI users] Running openMPI job with torque"</a>
<li><strong>Reply:</strong> <a href="13287.php">Govind Songara: "Re: [OMPI users] Running openMPI job with torque"</a>
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
