<?
$subject_val = "Re: [OMPI devel] Error in the versions 1.3 and 1.3.1 of OpenMPI when using SLURM_OVERCOMMIT=1";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 30 04:51:07 2009" -->
<!-- isoreceived="20090330085107" -->
<!-- sent="Mon, 30 Mar 2009 10:51:01 +0200" -->
<!-- isosent="20090330085101" -->
<!-- name="Hartmut H&#228;fner" -->
<!-- email="Hartmut.Haefner_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Error in the versions 1.3 and 1.3.1 of OpenMPI when using SLURM_OVERCOMMIT=1" -->
<!-- id="49D087F5.4000609_at_kit.edu" -->
<!-- charset="ISO-8859-15" -->
<!-- inreplyto="[OMPI devel] Error in the versions 1.3 and 1.3.1 of OpenMPI when using SLURM_OVERCOMMIT=1" -->
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
<strong>From:</strong> Hartmut H&#228;fner (<em>Hartmut.Haefner_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-30 04:51:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5736.php">Ralph Castain: "Re: [OMPI devel] Error in the versions 1.3 and 1.3.1 of OpenMPI when using SLURM_OVERCOMMIT=1"</a>
<li><strong>Previous message:</strong> <a href="5734.php">Christian Siebert: "Re: [OMPI devel] SM init failures"</a>
<li><strong>Maybe in reply to:</strong> <a href="5698.php">Hartmut H&#228;fner: "[OMPI devel] Error in the versions 1.3 and 1.3.1 of OpenMPI when using SLURM_OVERCOMMIT=1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5736.php">Ralph Castain: "Re: [OMPI devel] Error in the versions 1.3 and 1.3.1 of OpenMPI when using SLURM_OVERCOMMIT=1"</a>
<li><strong>Reply:</strong> <a href="5736.php">Ralph Castain: "Re: [OMPI devel] Error in the versions 1.3 and 1.3.1 of OpenMPI when using SLURM_OVERCOMMIT=1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Support,
<br>
the answer seems to be simple, but it also seems to be wrong!
<br>
Below you can see the description how SLURM_OVERCOMMIT should operate.
<br>
<p>SLURM_CPUS_PER_TASK
<br>
&nbsp;&nbsp;&nbsp;(default is 1) allows you to assign multiple CPUs to each
<br>
&nbsp;&nbsp;&nbsp;(multithreaded) process in your job to improve performance. SRUN's
<br>
&nbsp;&nbsp;&nbsp;-c (lowercase) option sets this variable. See the SRUN sections of
<br>
&nbsp;&nbsp;&nbsp;the SLURM Reference Manual &lt;<a href="https://computing.llnl.gov/LCdocs/slurm">https://computing.llnl.gov/LCdocs/slurm</a>&gt;
<br>
&nbsp;&nbsp;&nbsp;for usage details.
<br>
SLURM_OVERCOMMIT
<br>
&nbsp;&nbsp;&nbsp;(default is NO) allows you to assign more than one process per CPU
<br>
&nbsp;&nbsp;&nbsp;(the opposite of the previous variable). SRUN's -O (uppercase)
<br>
&nbsp;&nbsp;&nbsp;option sets this variable, which is /not/ intended to facilitate
<br>
&nbsp;&nbsp;&nbsp;pthreads applications. See the SRUN sections of the SLURM Reference
<br>
&nbsp;&nbsp;&nbsp;Manual &lt;<a href="https://computing.llnl.gov/LCdocs/slurm">https://computing.llnl.gov/LCdocs/slurm</a>&gt; for usage details.
<br>
<p>I don't understand how you can derive from the upper description what 
<br>
you have written below! Not one slot/node is allowed, but more than one 
<br>
process per CPU(slot) is allowed!!!
<br>
<p>Remark: In version 1.2.8 SLURM_OVERCOMMIT=1 did not work wrong!
<br>
<p>Sincerly yours
<br>
<p>H. H&#228;fner
<br>
<p><span class="quotelev1"> &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
The answer is simple: the SLURM environmental variables when you set 
<br>
SLURM_OVERCOMMIT=1 are telling us that only one slot/node is available 
<br>
for your use. This is done by the SLURM_TASKS_PER_NODE envar.
<br>
<p>So we can only launch 1 proc/node as this is all SLURM is allowing us to 
<br>
do.
<br>
<p>Ralph
<br>
<span class="quotelev1"> &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<p><p>On Mar 25, 2009, at 11:00 AM, Hartmut H&#228;fner wrote:
<br>
<p>Dear Support,
<br>
there is a problem with OpenMPI in version 1.3 and version 1.3.1 when 
<br>
using our batch system Slurm. On our parallel computer there are 2 
<br>
queues - one with exclusive usage of slots (cores) (SLURM_OVERCOMMIT=0) 
<br>
within nodes and one without shared usage of slots (SLURM_OVERCOMMIT=1) 
<br>
within nodes. Running a simple MPI-program (I'll send you this program 
<br>
mpi_hello.c as attachment) with SLURM_OVERCOMMIT set to  0   the 
<br>
executable works fine, running it with SLURM_OVERCOMMIT set to 1 it does 
<br>
not work correctly.  Please have a look to  2 files with outputs. 
<br>
Working not correctly means that the MPI-program runs on 1 processor 
<br>
although I have started it (for example) on 4 processors (it does not 
<br>
work correctly for any processor number  not equal to 1).
<br>
<p>This error only occurs for the version 1.3 and 1.3.1. If I am using oder 
<br>
versions of OpenMPI the program works fine.
<br>
<p>In the file Job_101442.out the hostlist (4x icn001) from Slurm is 
<br>
printed, then the content of the file  
<br>
/scratch/JMS_tmpdir/Job_101442/tmp.CCaCM22772 is printed, then the 
<br>
commandline (mpirun ...) is printed, then stdout of the program 
<br>
mpi_hello.c is printed (it runs only on 1 processor!!!) and the 
<br>
environment is printed.
<br>
<p>In the file Job_101440.out the same program is run. The only difference 
<br>
is, that SLURM_OVERCOMMIT is'nt set!
<br>
<p>Under the hood of job_submit ....    salloc -n4  script    is started. 
<br>
In &quot;script&quot; you find the command
<br>
mpirun --hostfile .....  as you can see in both output files.
<br>
<p>Sincerly yours
<br>
<p>H. H&#228;fner
<br>
<p><pre>
-- 
Hartmut H&#228;fner
Karlsruhe Institute of Technology (KIT)
University Karlsruhe (TH)
Steinbuch Centre for Computing (SCC)
Scientific Computing and Applications (SCA)
Zirkel 2 (Campus S&#252;d, Geb. 20.21, Raum 204)
D-76128 Karlsruhe
Fon +49(0)721 608 4869
Fax +49(0)721 32550 Hartmut.Haefner_at_[hidden]
<a href="http://www.rz.uni-karlsruhe.de/personen/hartmut.haefner">http://www.rz.uni-karlsruhe.de/personen/hartmut.haefner</a>
------------------------------------------------------------------------
Betreff:
Re: [OMPI devel] Error in the versions 1.3 and 1.3.1 of OpenMPI when 
using SLURM_OVERCOMMIT=1
Von:
Ralph Castain &lt;rhc_at_[hidden]&gt;
Datum:
Wed, 25 Mar 2009 11:14:36 -0600
An:
Open MPI Developers &lt;devel_at_[hidden]&gt;
The answer is simple: the SLURM environmental variables when you set 
SLURM_OVERCOMMIT=1 are telling us that only one slot/node is available 
for your use. This is done by the SLURM_TASKS_PER_NODE envar.
So we can only launch 1 proc/node as this is all SLURM is allowing us to 
do.
Ralph
On Mar 25, 2009, at 11:00 AM, Hartmut H&#228;fner wrote:
Dear Support,
there is a problem with OpenMPI in version 1.3 and version 1.3.1 when 
using our batch system Slurm. On our parallel computer there are 2 
queues - one with exclusive usage of slots (cores) (SLURM_OVERCOMMIT=0) 
within nodes and one without shared usage of slots (SLURM_OVERCOMMIT=1) 
within nodes. Running a simple MPI-program (I'll send you this program 
mpi_hello.c as attachment) with SLURM_OVERCOMMIT set to  0   the 
executable works fine, running it with SLURM_OVERCOMMIT set to 1 it does 
not work correctly.  Please have a look to  2 files with outputs. 
Working not correctly means that the MPI-program runs on 1 processor 
although I have started it (for example) on 4 processors (it does not 
work correctly for any processor number  not equal to 1).
This error only occurs for the version 1.3 and 1.3.1. If I am using oder 
versions of OpenMPI the program works fine.
In the file Job_101442.out the hostlist (4x icn001) from Slurm is 
printed, then the content of the file  
/scratch/JMS_tmpdir/Job_101442/tmp.CCaCM22772 is printed, then the 
commandline (mpirun ...) is printed, then stdout of the program 
mpi_hello.c is printed (it runs only on 1 processor!!!) and the 
environment is printed.
In the file Job_101440.out the same program is run. The only difference 
is, that SLURM_OVERCOMMIT is'nt set!
Under the hood of job_submit ....    salloc -n4  script    is started. 
In &quot;script&quot; you find the command
mpirun --hostfile .....  as you can see in both output files.
Sincerly yours
H. H&#228;fner
-- 
Hartmut H&#228;fner
Karlsruhe Institute of Technology (KIT)
University Karlsruhe (TH)
Steinbuch Centre for Computing (SCC)
Scientific Computing and Applications (SCA)
Zirkel 2 (Campus S&#252;d, Geb. 20.21, Raum 204)
D-76128 Karlsruhe
Fon +49(0)721 608 4869
Fax +49(0)721 32550 
Hartmut.Haefner_at_[hidden]
<a href="http://www.rz.uni-karlsruhe.de/personen/hartmut.haefner">http://www.rz.uni-karlsruhe.de/personen/hartmut.haefner</a> 
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5736.php">Ralph Castain: "Re: [OMPI devel] Error in the versions 1.3 and 1.3.1 of OpenMPI when using SLURM_OVERCOMMIT=1"</a>
<li><strong>Previous message:</strong> <a href="5734.php">Christian Siebert: "Re: [OMPI devel] SM init failures"</a>
<li><strong>Maybe in reply to:</strong> <a href="5698.php">Hartmut H&#228;fner: "[OMPI devel] Error in the versions 1.3 and 1.3.1 of OpenMPI when using SLURM_OVERCOMMIT=1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5736.php">Ralph Castain: "Re: [OMPI devel] Error in the versions 1.3 and 1.3.1 of OpenMPI when using SLURM_OVERCOMMIT=1"</a>
<li><strong>Reply:</strong> <a href="5736.php">Ralph Castain: "Re: [OMPI devel] Error in the versions 1.3 and 1.3.1 of OpenMPI when using SLURM_OVERCOMMIT=1"</a>
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
