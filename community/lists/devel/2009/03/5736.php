<?
$subject_val = "Re: [OMPI devel] Error in the versions 1.3 and 1.3.1 of OpenMPI when using SLURM_OVERCOMMIT=1";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 30 07:56:33 2009" -->
<!-- isoreceived="20090330115633" -->
<!-- sent="Mon, 30 Mar 2009 05:56:23 -0600" -->
<!-- isosent="20090330115623" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Error in the versions 1.3 and 1.3.1 of OpenMPI when using SLURM_OVERCOMMIT=1" -->
<!-- id="B18B9A73-C826-46DE-B3FC-BD45332BD0CA_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="49D087F5.4000609_at_kit.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Error in the versions 1.3 and 1.3.1 of OpenMPI when using SLURM_OVERCOMMIT=1<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-30 07:56:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5737.php">Pavel Shamis (Pasha): "Re: [OMPI devel] [ewg] Seg fault running OpenMPI-1.3.1rc4"</a>
<li><strong>Previous message:</strong> <a href="5735.php">Hartmut H&#228;fner: "Re: [OMPI devel] Error in the versions 1.3 and 1.3.1 of OpenMPI when using SLURM_OVERCOMMIT=1"</a>
<li><strong>In reply to:</strong> <a href="5735.php">Hartmut H&#228;fner: "Re: [OMPI devel] Error in the versions 1.3 and 1.3.1 of OpenMPI when using SLURM_OVERCOMMIT=1"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I should have been more careful/clear in my answer - we don't look at  
<br>
the SLURM_OVERCOMMIT variable.
<br>
<p>The srun cmd options are not utilized. If setting SLURM_OVERCOMMIT  
<br>
worked in version 1.2.8, I can assure you it was completely fortuitous  
<br>
- I wrote that code, and we never looked at that variable. The  
<br>
difference in behavior in 1.3 is caused by a change requested by the  
<br>
SLURM developers where we now use SLURM_JOB_CPUS_PER_NODE to determine  
<br>
the number of processors assigned to us instead of SLURM_CPUS_PER_TASK  
<br>
(as was done in 1.2.x). This was required due to a change in SLURM 1.3  
<br>
that modified the definitions of these values.
<br>
<p>If you look at our documentation (e.g., &quot;man mpirun&quot;) you will see the  
<br>
equivalent set of options to control our mappers. There are a variety  
<br>
of mapper options you can use, including the ability to oversubscribe  
<br>
processors. The definition of these have remained constant across the  
<br>
versions.
<br>
<p>Ralph
<br>
<p><p>On Mar 30, 2009, at 2:51 AM, Hartmut H&#228;fner wrote:
<br>
<p><span class="quotelev1">&gt; Dear Support,
</span><br>
<span class="quotelev1">&gt; the answer seems to be simple, but it also seems to be wrong!
</span><br>
<span class="quotelev1">&gt; Below you can see the description how SLURM_OVERCOMMIT should operate.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; SLURM_CPUS_PER_TASK
</span><br>
<span class="quotelev1">&gt;  (default is 1) allows you to assign multiple CPUs to each
</span><br>
<span class="quotelev1">&gt;  (multithreaded) process in your job to improve performance. SRUN's
</span><br>
<span class="quotelev1">&gt;  -c (lowercase) option sets this variable. See the SRUN sections of
</span><br>
<span class="quotelev1">&gt;  the SLURM Reference Manual &lt;<a href="https://computing.llnl.gov/LCdocs/slurm">https://computing.llnl.gov/LCdocs/slurm</a>&gt;
</span><br>
<span class="quotelev1">&gt;  for usage details.
</span><br>
<span class="quotelev1">&gt; SLURM_OVERCOMMIT
</span><br>
<span class="quotelev1">&gt;  (default is NO) allows you to assign more than one process per CPU
</span><br>
<span class="quotelev1">&gt;  (the opposite of the previous variable). SRUN's -O (uppercase)
</span><br>
<span class="quotelev1">&gt;  option sets this variable, which is /not/ intended to facilitate
</span><br>
<span class="quotelev1">&gt;  pthreads applications. See the SRUN sections of the SLURM Reference
</span><br>
<span class="quotelev1">&gt;  Manual &lt;<a href="https://computing.llnl.gov/LCdocs/slurm">https://computing.llnl.gov/LCdocs/slurm</a>&gt; for usage details.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't understand how you can derive from the upper description  
</span><br>
<span class="quotelev1">&gt; what you have written below! Not one slot/node is allowed, but more  
</span><br>
<span class="quotelev1">&gt; than one process per CPU(slot) is allowed!!!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Remark: In version 1.2.8 SLURM_OVERCOMMIT=1 did not work wrong!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sincerly yours
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; H. H&#228;fner
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; The answer is simple: the SLURM environmental variables when you set  
</span><br>
<span class="quotelev1">&gt; SLURM_OVERCOMMIT=1 are telling us that only one slot/node is  
</span><br>
<span class="quotelev1">&gt; available for your use. This is done by the SLURM_TASKS_PER_NODE  
</span><br>
<span class="quotelev1">&gt; envar.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So we can only launch 1 proc/node as this is all SLURM is allowing  
</span><br>
<span class="quotelev1">&gt; us to do.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 25, 2009, at 11:00 AM, Hartmut H&#228;fner wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Dear Support,
</span><br>
<span class="quotelev1">&gt; there is a problem with OpenMPI in version 1.3 and version 1.3.1  
</span><br>
<span class="quotelev1">&gt; when using our batch system Slurm. On our parallel computer there  
</span><br>
<span class="quotelev1">&gt; are 2 queues - one with exclusive usage of slots (cores)  
</span><br>
<span class="quotelev1">&gt; (SLURM_OVERCOMMIT=0) within nodes and one without shared usage of  
</span><br>
<span class="quotelev1">&gt; slots (SLURM_OVERCOMMIT=1) within nodes. Running a simple MPI- 
</span><br>
<span class="quotelev1">&gt; program (I'll send you this program mpi_hello.c as attachment) with  
</span><br>
<span class="quotelev1">&gt; SLURM_OVERCOMMIT set to  0   the executable works fine, running it  
</span><br>
<span class="quotelev1">&gt; with SLURM_OVERCOMMIT set to 1 it does not work correctly.  Please  
</span><br>
<span class="quotelev1">&gt; have a look to  2 files with outputs. Working not correctly means  
</span><br>
<span class="quotelev1">&gt; that the MPI-program runs on 1 processor although I have started it  
</span><br>
<span class="quotelev1">&gt; (for example) on 4 processors (it does not work correctly for any  
</span><br>
<span class="quotelev1">&gt; processor number  not equal to 1).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This error only occurs for the version 1.3 and 1.3.1. If I am using  
</span><br>
<span class="quotelev1">&gt; oder versions of OpenMPI the program works fine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In the file Job_101442.out the hostlist (4x icn001) from Slurm is  
</span><br>
<span class="quotelev1">&gt; printed, then the content of the file  /scratch/JMS_tmpdir/ 
</span><br>
<span class="quotelev1">&gt; Job_101442/tmp.CCaCM22772 is printed, then the commandline  
</span><br>
<span class="quotelev1">&gt; (mpirun ...) is printed, then stdout of the program mpi_hello.c is  
</span><br>
<span class="quotelev1">&gt; printed (it runs only on 1 processor!!!) and the environment is  
</span><br>
<span class="quotelev1">&gt; printed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In the file Job_101440.out the same program is run. The only  
</span><br>
<span class="quotelev1">&gt; difference is, that SLURM_OVERCOMMIT is'nt set!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Under the hood of job_submit ....    salloc -n4  script    is  
</span><br>
<span class="quotelev1">&gt; started. In &quot;script&quot; you find the command
</span><br>
<span class="quotelev1">&gt; mpirun --hostfile .....  as you can see in both output files.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sincerly yours
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; H. H&#228;fner
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Hartmut H&#228;fner
</span><br>
<span class="quotelev1">&gt; Karlsruhe Institute of Technology (KIT)
</span><br>
<span class="quotelev1">&gt; University Karlsruhe (TH)
</span><br>
<span class="quotelev1">&gt; Steinbuch Centre for Computing (SCC)
</span><br>
<span class="quotelev1">&gt; Scientific Computing and Applications (SCA)
</span><br>
<span class="quotelev1">&gt; Zirkel 2 (Campus S&#252;d, Geb. 20.21, Raum 204)
</span><br>
<span class="quotelev1">&gt; D-76128 Karlsruhe
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Fon +49(0)721 608 4869
</span><br>
<span class="quotelev1">&gt; Fax +49(0)721 32550 Hartmut.Haefner_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.rz.uni-karlsruhe.de/personen/hartmut.haefner">http://www.rz.uni-karlsruhe.de/personen/hartmut.haefner</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Betreff:
</span><br>
<span class="quotelev1">&gt; Re: [OMPI devel] Error in the versions 1.3 and 1.3.1 of OpenMPI when  
</span><br>
<span class="quotelev1">&gt; using SLURM_OVERCOMMIT=1
</span><br>
<span class="quotelev1">&gt; Von:
</span><br>
<span class="quotelev1">&gt; Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Datum:
</span><br>
<span class="quotelev1">&gt; Wed, 25 Mar 2009 11:14:36 -0600
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; An:
</span><br>
<span class="quotelev1">&gt; Open MPI Developers &lt;devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The answer is simple: the SLURM environmental variables when you set  
</span><br>
<span class="quotelev1">&gt; SLURM_OVERCOMMIT=1 are telling us that only one slot/node is  
</span><br>
<span class="quotelev1">&gt; available for your use. This is done by the SLURM_TASKS_PER_NODE  
</span><br>
<span class="quotelev1">&gt; envar.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So we can only launch 1 proc/node as this is all SLURM is allowing  
</span><br>
<span class="quotelev1">&gt; us to do.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 25, 2009, at 11:00 AM, Hartmut H&#228;fner wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Dear Support,
</span><br>
<span class="quotelev1">&gt; there is a problem with OpenMPI in version 1.3 and version 1.3.1  
</span><br>
<span class="quotelev1">&gt; when using our batch system Slurm. On our parallel computer there  
</span><br>
<span class="quotelev1">&gt; are 2 queues - one with exclusive usage of slots (cores)  
</span><br>
<span class="quotelev1">&gt; (SLURM_OVERCOMMIT=0) within nodes and one without shared usage of  
</span><br>
<span class="quotelev1">&gt; slots (SLURM_OVERCOMMIT=1) within nodes. Running a simple MPI- 
</span><br>
<span class="quotelev1">&gt; program (I'll send you this program mpi_hello.c as attachment) with  
</span><br>
<span class="quotelev1">&gt; SLURM_OVERCOMMIT set to  0   the executable works fine, running it  
</span><br>
<span class="quotelev1">&gt; with SLURM_OVERCOMMIT set to 1 it does not work correctly.  Please  
</span><br>
<span class="quotelev1">&gt; have a look to  2 files with outputs. Working not correctly means  
</span><br>
<span class="quotelev1">&gt; that the MPI-program runs on 1 processor although I have started it  
</span><br>
<span class="quotelev1">&gt; (for example) on 4 processors (it does not work correctly for any  
</span><br>
<span class="quotelev1">&gt; processor number  not equal to 1).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This error only occurs for the version 1.3 and 1.3.1. If I am using  
</span><br>
<span class="quotelev1">&gt; oder versions of OpenMPI the program works fine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In the file Job_101442.out the hostlist (4x icn001) from Slurm is  
</span><br>
<span class="quotelev1">&gt; printed, then the content of the file  /scratch/JMS_tmpdir/ 
</span><br>
<span class="quotelev1">&gt; Job_101442/tmp.CCaCM22772 is printed, then the commandline  
</span><br>
<span class="quotelev1">&gt; (mpirun ...) is printed, then stdout of the program mpi_hello.c is  
</span><br>
<span class="quotelev1">&gt; printed (it runs only on 1 processor!!!) and the environment is  
</span><br>
<span class="quotelev1">&gt; printed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In the file Job_101440.out the same program is run. The only  
</span><br>
<span class="quotelev1">&gt; difference is, that SLURM_OVERCOMMIT is'nt set!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Under the hood of job_submit ....    salloc -n4  script    is  
</span><br>
<span class="quotelev1">&gt; started. In &quot;script&quot; you find the command
</span><br>
<span class="quotelev1">&gt; mpirun --hostfile .....  as you can see in both output files.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sincerly yours
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; H. H&#228;fner
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Hartmut H&#228;fner
</span><br>
<span class="quotelev1">&gt; Karlsruhe Institute of Technology (KIT)
</span><br>
<span class="quotelev1">&gt; University Karlsruhe (TH)
</span><br>
<span class="quotelev1">&gt; Steinbuch Centre for Computing (SCC)
</span><br>
<span class="quotelev1">&gt; Scientific Computing and Applications (SCA)
</span><br>
<span class="quotelev1">&gt; Zirkel 2 (Campus S&#252;d, Geb. 20.21, Raum 204)
</span><br>
<span class="quotelev1">&gt; D-76128 Karlsruhe
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Fon +49(0)721 608 4869
</span><br>
<span class="quotelev1">&gt; Fax +49(0)721 32550 Hartmut.Haefner_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.rz.uni-karlsruhe.de/personen/hartmut.haefner">http://www.rz.uni-karlsruhe.de/personen/hartmut.haefner</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5737.php">Pavel Shamis (Pasha): "Re: [OMPI devel] [ewg] Seg fault running OpenMPI-1.3.1rc4"</a>
<li><strong>Previous message:</strong> <a href="5735.php">Hartmut H&#228;fner: "Re: [OMPI devel] Error in the versions 1.3 and 1.3.1 of OpenMPI when using SLURM_OVERCOMMIT=1"</a>
<li><strong>In reply to:</strong> <a href="5735.php">Hartmut H&#228;fner: "Re: [OMPI devel] Error in the versions 1.3 and 1.3.1 of OpenMPI when using SLURM_OVERCOMMIT=1"</a>
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
