<?
$subject_val = "Re: [OMPI users] Running openMPI job with torque";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun  9 16:39:41 2010" -->
<!-- isoreceived="20100609203941" -->
<!-- sent="Wed, 09 Jun 2010 16:39:31 -0400" -->
<!-- isosent="20100609203931" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Running openMPI job with torque" -->
<!-- id="4C0FFC03.6090100_at_ldeo.columbia.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4C0FF7FF.6060407_at_ldeo.columbia.edu" -->
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
<strong>Date:</strong> 2010-06-09 16:39:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13291.php">awwase: "[OMPI users] port_name information between Linux and Windows"</a>
<li><strong>Previous message:</strong> <a href="13289.php">Gus Correa: "Re: [OMPI users] Running openMPI job with torque"</a>
<li><strong>In reply to:</strong> <a href="13289.php">Gus Correa: "Re: [OMPI users] Running openMPI job with torque"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13292.php">Gus Correa: "Re: [OMPI users] Running openMPI job with torque"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Govind
<br>
<p>It may work with the suggestion I sent you,
<br>
even with the OpenMPI with no Torque support that you have.
<br>
<p>However, since you have Torque installed on your cluster,
<br>
it may be better to install OpenMPI from the source code tarball,
<br>
so as to have full Torque support built in, which is much more 
<br>
convenient to use.
<br>
<p>It is not really difficult to install OpenMPI from the source code.
<br>
It boils down to &quot;configure, make, make install&quot;, preceded perhaps
<br>
by setting up a few environment variables, say, if you want to use
<br>
non-Gnu compilers, or to use a few configure switches, say,
<br>
if your Torque library is in a non-standard place.
<br>
<p>The OpenMPI README file and FAQs walk you through the process,
<br>
and you can always post questions on this list if you have any problems.
<br>
<p>Also, in a cluster that is not too big, the best way to install OpenMPI,
<br>
in my opinion, is on an NFS mounted directory, so as to make it visible
<br>
to all the nodes, without having to install it repeatedly on all nodes.
<br>
In general in a cluster the home directories are NFS mounted, but
<br>
you may have other choices in your system.
<br>
<p>Gus Correa
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
<p><p>Gus Correa wrote:
<br>
<span class="quotelev1">&gt; Hi Govind
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Govind Songara wrote:
</span><br>
<span class="quotelev2">&gt;  &gt; Hi Gus,
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt; OpenMPI was not built with tm support.
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I suspected that.
</span><br>
<span class="quotelev1">&gt; Reading your postings, it seems to be an OpenMPI rpm from
</span><br>
<span class="quotelev1">&gt; a Linux distribution, which I would guess are generic,
</span><br>
<span class="quotelev1">&gt; and have no specific support for any resource manager like Torque.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;  &gt; The submission/execution hosts does not have any of the
</span><br>
<span class="quotelev2">&gt;  &gt; PBS environment variable set
</span><br>
<span class="quotelev2">&gt;  &gt; PBS_O_WORKDIR, $PBS_NODEFILE.
</span><br>
<span class="quotelev2">&gt;  &gt; How i can make set it
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt; regards
</span><br>
<span class="quotelev2">&gt;  &gt; Govind
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I sent you a suggestion in my previous message!
</span><br>
<span class="quotelev1">&gt; Here it is again:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;  &gt;     If your OpenMPI doesn't have torque support,
</span><br>
<span class="quotelev2">&gt;  &gt;     you may need to add the nodes list to your mpirun command.
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt;     Suggestion:
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt;     /usr/lib64/openmpi/1.4-gcc/bin/mpirun -hostfile $PBS_NODEFILE -np 4
</span><br>
<span class="quotelev2">&gt;  &gt;     ./hello
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I hope this helps.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gus Correa
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Gustavo Correa
</span><br>
<span class="quotelev1">&gt; Lamont-Doherty Earth Observatory - Columbia University
</span><br>
<span class="quotelev1">&gt; Palisades, NY, 10964-8000 - USA
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 9 June 2010 18:45, Gus Correa &lt;gus_at_[hidden] 
</span><br>
<span class="quotelev2">&gt;&gt; &lt;mailto:gus_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Hi Govind
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Besides what Ralph said, make sure your OpenMPI was
</span><br>
<span class="quotelev2">&gt;&gt;     built with Torque (&quot;tm&quot;) support.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Suggestion:
</span><br>
<span class="quotelev2">&gt;&gt;     Do:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     ompi_info --all | grep tm
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     It should show lines like these:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     MCA ras: tm (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev2">&gt;&gt;     MCA plm: tm (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev2">&gt;&gt;     ...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     ***
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     If your OpenMPI doesn't have torque support,
</span><br>
<span class="quotelev2">&gt;&gt;     you may need to add the nodes list to your mpirun command.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Suggestion:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     /usr/lib64/openmpi/1.4-gcc/bin/mpirun -hostfile $PBS_NODEFILE -np 4
</span><br>
<span class="quotelev2">&gt;&gt;     ./hello
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     ***
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Also, assuming your OpenMPI has torque support:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Did you request 4 nodes from torque?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     If you don't request the nodes and processors,
</span><br>
<span class="quotelev2">&gt;&gt;     torque will give you the default values
</span><br>
<span class="quotelev2">&gt;&gt;     (which may be one processor and one node).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Suggestion:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     A script like this (adjusted to your site), tcsh style here,
</span><br>
<span class="quotelev2">&gt;&gt;     say, called run_my_pbs_job.tcsh:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     *********
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     #! /bin/tcsh
</span><br>
<span class="quotelev2">&gt;&gt;     #PBS -l nodes=4:ppn=1
</span><br>
<span class="quotelev2">&gt;&gt;     #PBS -q default_at_your.torque.server
</span><br>
<span class="quotelev2">&gt;&gt;     #PBS -N myjob
</span><br>
<span class="quotelev2">&gt;&gt;     cd $PBS_O_WORKDIR
</span><br>
<span class="quotelev2">&gt;&gt;     /usr/lib64/openmpi/1.4-gcc/bin/mpirun -np 4 ./hello
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     *********
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Then do:
</span><br>
<span class="quotelev2">&gt;&gt;     qsub run_my_pbs_job.tcsh
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     **
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     You can get more information about the PBS syntax using &quot;man qsub&quot;.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     **
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     I hope this helps,
</span><br>
<span class="quotelev2">&gt;&gt;     Gus Correa
</span><br>
<span class="quotelev2">&gt;&gt;     ---------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;     Gustavo Correa
</span><br>
<span class="quotelev2">&gt;&gt;     Lamont-Doherty Earth Observatory - Columbia University
</span><br>
<span class="quotelev2">&gt;&gt;     Palisades, NY, 10964-8000 - USA
</span><br>
<span class="quotelev2">&gt;&gt;     ---------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         On Jun 9, 2010, at 10:00 AM, Govind Songara wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             Thanks Ralph after giving full path of hello it runs.
</span><br>
<span class="quotelev2">&gt;&gt;             But it run only on one rank
</span><br>
<span class="quotelev2">&gt;&gt;             Hello World! from process 0 out of 1 on 
</span><br>
<span class="quotelev2">&gt;&gt; node56.beowulf.cluster
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         Just to check things out, I would do:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         mpirun --display-allocation --display-map -np 4 ....
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         That should show you the allocation and where OMPI is putting
</span><br>
<span class="quotelev2">&gt;&gt;         the procs.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             there also a error
</span><br>
<span class="quotelev3">&gt;&gt;              &gt;cat my-script.sh.e43
</span><br>
<span class="quotelev2">&gt;&gt;             stty: standard input: Invalid argument
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         Not really sure here - must be an error in the script itself.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             On 9 June 2010 16:46, Ralph Castain &lt;rhc_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;             &lt;mailto:rhc_at_[hidden]&gt; &lt;mailto:rhc_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;             &lt;mailto:rhc_at_[hidden]&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                You need to include the path to &quot;hello&quot; unless it sits in
</span><br>
<span class="quotelev2">&gt;&gt;             your
</span><br>
<span class="quotelev2">&gt;&gt;                PATH environment!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                On Jun 9, 2010, at 9:37 AM, Govind wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                    #!/bin/sh
</span><br>
<span class="quotelev2">&gt;&gt;                    /usr/lib64/openmpi/1.4-gcc/bin/mpirun hello
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                    On 9 June 2010 16:21, David Zhang
</span><br>
<span class="quotelev2">&gt;&gt;                 &lt;solarbikedz_at_[hidden] &lt;mailto:solarbikedz_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                    &lt;mailto:solarbikedz_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;                 &lt;mailto:solarbikedz_at_[hidden]&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                        what does your my-script.sh looks like?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                        On Wed, Jun 9, 2010 at 8:17 AM, Govind
</span><br>
<span class="quotelev2">&gt;&gt;                 &lt;govind.rhul_at_[hidden] &lt;mailto:govind.rhul_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                        &lt;mailto:govind.rhul_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;                 &lt;mailto:govind.rhul_at_[hidden]&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                            Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                            I have installed following openMPI packge on
</span><br>
<span class="quotelev2">&gt;&gt;                 worker node
</span><br>
<span class="quotelev2">&gt;&gt;                            from repo
</span><br>
<span class="quotelev2">&gt;&gt;                            openmpi-libs-1.4-4.el5.x86_64
</span><br>
<span class="quotelev2">&gt;&gt;                            openmpi-1.4-4.el5.x86_64
</span><br>
<span class="quotelev2">&gt;&gt;                            mpitests-openmpi-3.0-2.el5.x86_64
</span><br>
<span class="quotelev2">&gt;&gt;                            mpi-selector-1.0.2-1.el5.noarch
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                            torque-client-2.3.6-2cri.el5.x86_64
</span><br>
<span class="quotelev2">&gt;&gt;                            torque-2.3.6-2cri.el5.x86_64
</span><br>
<span class="quotelev2">&gt;&gt;                            torque-mom-2.3.6-2cri.el5.x86_64
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                            Having some problem on running MPI jobs with
</span><br>
<span class="quotelev2">&gt;&gt;                 torque
</span><br>
<span class="quotelev2">&gt;&gt;                            qsub -q long -l nodes=4 my-script.sh
</span><br>
<span class="quotelev2">&gt;&gt;                            42.pbs1 &lt;<a href="http://42.pbs1.pp.rhul.ac.uk/">http://42.pbs1.pp.rhul.ac.uk/</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                            cat my-script.sh.e41
</span><br>
<span class="quotelev2">&gt;&gt;                            stty: standard input: Invalid argument
</span><br>
<span class="quotelev2">&gt;&gt;                                           
</span><br>
<span class="quotelev2">&gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                            mpirun was unable to launch the specified
</span><br>
<span class="quotelev2">&gt;&gt;                 application as
</span><br>
<span class="quotelev2">&gt;&gt;                            it could not find an executable:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                            Executable: hello
</span><br>
<span class="quotelev2">&gt;&gt;                            Node: node56.beowulf.cluster
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                            while attempting to start process rank 0.
</span><br>
<span class="quotelev2">&gt;&gt;                            ==================================
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                            I could run the  binary directly on the node
</span><br>
<span class="quotelev2">&gt;&gt;                 without any
</span><br>
<span class="quotelev2">&gt;&gt;                            problem.
</span><br>
<span class="quotelev2">&gt;&gt;                             mpiexec -n 4 hello
</span><br>
<span class="quotelev2">&gt;&gt;                            Hello World! from process 2 out of 4 on
</span><br>
<span class="quotelev2">&gt;&gt;                            node56.beowulf.cluster
</span><br>
<span class="quotelev2">&gt;&gt;                            Hello World! from process 0 out of 4 on
</span><br>
<span class="quotelev2">&gt;&gt;                            node56.beowulf.cluster
</span><br>
<span class="quotelev2">&gt;&gt;                            Hello World! from process 3 out of 4 on
</span><br>
<span class="quotelev2">&gt;&gt;                            node56.beowulf.cluster
</span><br>
<span class="quotelev2">&gt;&gt;                            Hello World! from process 1 out of 4 on
</span><br>
<span class="quotelev2">&gt;&gt;                            node56.beowulf.cluster
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                            Could you please advise, if I missing
</span><br>
<span class="quotelev2">&gt;&gt;                 anything here.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                            Regards
</span><br>
<span class="quotelev2">&gt;&gt;                            Govind
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                            
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;                            users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;                            users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;                 &lt;mailto:users_at_[hidden]&gt; &lt;mailto:users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;                 &lt;mailto:users_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                                           
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                        --         David Zhang
</span><br>
<span class="quotelev2">&gt;&gt;                        University of California, San Diego
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                        _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;                        users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;                        users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                 &lt;mailto:users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                        <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                    _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;                    users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;                    users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                 &lt;mailto:users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                    <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;                users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;                users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             &lt;mailto:users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;             users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;             users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             &lt;mailto:users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;         users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;         users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
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
<li><strong>Next message:</strong> <a href="13291.php">awwase: "[OMPI users] port_name information between Linux and Windows"</a>
<li><strong>Previous message:</strong> <a href="13289.php">Gus Correa: "Re: [OMPI users] Running openMPI job with torque"</a>
<li><strong>In reply to:</strong> <a href="13289.php">Gus Correa: "Re: [OMPI users] Running openMPI job with torque"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13292.php">Gus Correa: "Re: [OMPI users] Running openMPI job with torque"</a>
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
