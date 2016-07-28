<?
$subject_val = "Re: [OMPI users] Running openMPI job with torque";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun  9 16:09:28 2010" -->
<!-- isoreceived="20100609200928" -->
<!-- sent="Wed, 9 Jun 2010 21:08:58 +0100" -->
<!-- isosent="20100609200858" -->
<!-- name="Govind Songara" -->
<!-- email="govind.songara_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Running openMPI job with torque" -->
<!-- id="AANLkTilZapa25dDe-t8q5-3VMrVvcNdWj6CGkX9m7PSG_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4C0FD33B.8080606_at_ldeo.columbia.edu" -->
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
<strong>From:</strong> Govind Songara (<em>govind.songara_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-09 16:08:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13288.php">Govind Songara: "Re: [OMPI users] Running openMPI job with torque"</a>
<li><strong>Previous message:</strong> <a href="13286.php">Jeff Squyres: "Re: [OMPI users] Behaviour of MPI_Cancel when using 'large' messages"</a>
<li><strong>In reply to:</strong> <a href="13283.php">Gus Correa: "Re: [OMPI users] Running openMPI job with torque"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13289.php">Gus Correa: "Re: [OMPI users] Running openMPI job with torque"</a>
<li><strong>Reply:</strong> <a href="13289.php">Gus Correa: "Re: [OMPI users] Running openMPI job with torque"</a>
<li><strong>Reply:</strong> <a href="13292.php">Gus Correa: "Re: [OMPI users] Running openMPI job with torque"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Gus,
<br>
<p>OpenMPI was not built with tm support.
<br>
<p>The submission/execution hosts does not have any of the
<br>
PBS environment variable set
<br>
PBS_O_WORKDIR, $PBS_NODEFILE.
<br>
How i can make set it
<br>
<p>regards
<br>
Govind
<br>
<p>On 9 June 2010 18:45, Gus Correa &lt;gus_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi Govind
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Besides what Ralph said, make sure your OpenMPI was
</span><br>
<span class="quotelev1">&gt; built with Torque (&quot;tm&quot;) support.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Suggestion:
</span><br>
<span class="quotelev1">&gt; Do:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ompi_info --all | grep tm
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It should show lines like these:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MCA ras: tm (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev1">&gt; MCA plm: tm (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ***
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If your OpenMPI doesn't have torque support,
</span><br>
<span class="quotelev1">&gt; you may need to add the nodes list to your mpirun command.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Suggestion:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /usr/lib64/openmpi/1.4-gcc/bin/mpirun -hostfile $PBS_NODEFILE -np 4 ./hello
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ***
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also, assuming your OpenMPI has torque support:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Did you request 4 nodes from torque?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you don't request the nodes and processors,
</span><br>
<span class="quotelev1">&gt; torque will give you the default values
</span><br>
<span class="quotelev1">&gt; (which may be one processor and one node).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Suggestion:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A script like this (adjusted to your site), tcsh style here,
</span><br>
<span class="quotelev1">&gt; say, called run_my_pbs_job.tcsh:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *********
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #! /bin/tcsh
</span><br>
<span class="quotelev1">&gt; #PBS -l nodes=4:ppn=1
</span><br>
<span class="quotelev1">&gt; #PBS -q default_at_your.torque.server
</span><br>
<span class="quotelev1">&gt; #PBS -N myjob
</span><br>
<span class="quotelev1">&gt; cd $PBS_O_WORKDIR
</span><br>
<span class="quotelev1">&gt; /usr/lib64/openmpi/1.4-gcc/bin/mpirun -np 4 ./hello
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *********
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Then do:
</span><br>
<span class="quotelev1">&gt; qsub run_my_pbs_job.tcsh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; **
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You can get more information about the PBS syntax using &quot;man qsub&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; **
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I hope this helps,
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
<span class="quotelev1">&gt; Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jun 9, 2010, at 10:00 AM, Govind Songara wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Thanks Ralph after giving full path of hello it runs.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; But it run only on one rank
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello World! from process 0 out of 1 on node56.beowulf.cluster
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Just to check things out, I would do:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun --display-allocation --display-map -np 4 ....
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; That should show you the allocation and where OMPI is putting the procs.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  there also a error
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;cat my-script.sh.e43
</span><br>
<span class="quotelev3">&gt;&gt;&gt; stty: standard input: Invalid argument
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Not really sure here - must be an error in the script itself.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 9 June 2010 16:46, Ralph Castain &lt;rhc_at_[hidden] &lt;mailto:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rhc_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    You need to include the path to &quot;hello&quot; unless it sits in your
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    PATH environment!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    On Jun 9, 2010, at 9:37 AM, Govind wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    #!/bin/sh
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    /usr/lib64/openmpi/1.4-gcc/bin/mpirun hello
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    On 9 June 2010 16:21, David Zhang &lt;solarbikedz_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    &lt;mailto:solarbikedz_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;        what does your my-script.sh looks like?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;        On Wed, Jun 9, 2010 at 8:17 AM, Govind &lt;govind.rhul_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;        &lt;mailto:govind.rhul_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;            Hi,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;            I have installed following openMPI packge on worker node
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;            from repo
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;            openmpi-libs-1.4-4.el5.x86_64
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;            openmpi-1.4-4.el5.x86_64
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;            mpitests-openmpi-3.0-2.el5.x86_64
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;            mpi-selector-1.0.2-1.el5.noarch
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;            torque-client-2.3.6-2cri.el5.x86_64
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;            torque-2.3.6-2cri.el5.x86_64
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;            torque-mom-2.3.6-2cri.el5.x86_64
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;            Having some problem on running MPI jobs with torque
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;            qsub -q long -l nodes=4 my-script.sh
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;            42.pbs1 &lt;<a href="http://42.pbs1.pp.rhul.ac.uk/">http://42.pbs1.pp.rhul.ac.uk/</a>&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;            cat my-script.sh.e41
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;            stty: standard input: Invalid argument
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;            mpirun was unable to launch the specified application as
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;            it could not find an executable:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;            Executable: hello
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;            Node: node56.beowulf.cluster
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;            while attempting to start process rank 0.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;            ==================================
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;            I could run the  binary directly on the node without any
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;            problem.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             mpiexec -n 4 hello
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;            Hello World! from process 2 out of 4 on
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;            node56.beowulf.cluster
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;            Hello World! from process 0 out of 4 on
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;            node56.beowulf.cluster
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;            Hello World! from process 3 out of 4 on
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;            node56.beowulf.cluster
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;            Hello World! from process 1 out of 4 on
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;            node56.beowulf.cluster
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;            Could you please advise, if I missing anything here.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;            Regards
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;            Govind
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;            _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;            users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;            users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;            <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;        --         David Zhang
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;        University of California, San Diego
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;        _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;        users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;        users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;        <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<span class="quotelev2">&gt;&gt;
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13287/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13288.php">Govind Songara: "Re: [OMPI users] Running openMPI job with torque"</a>
<li><strong>Previous message:</strong> <a href="13286.php">Jeff Squyres: "Re: [OMPI users] Behaviour of MPI_Cancel when using 'large' messages"</a>
<li><strong>In reply to:</strong> <a href="13283.php">Gus Correa: "Re: [OMPI users] Running openMPI job with torque"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13289.php">Gus Correa: "Re: [OMPI users] Running openMPI job with torque"</a>
<li><strong>Reply:</strong> <a href="13289.php">Gus Correa: "Re: [OMPI users] Running openMPI job with torque"</a>
<li><strong>Reply:</strong> <a href="13292.php">Gus Correa: "Re: [OMPI users] Running openMPI job with torque"</a>
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
