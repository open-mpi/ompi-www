<?
$subject_val = "Re: [OMPI users] SGE error: executing task of job 22966 failed:";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr  3 16:49:30 2008" -->
<!-- isoreceived="20080403204930" -->
<!-- sent="Thu, 3 Apr 2008 13:48:03 -0700" -->
<!-- isosent="20080403204803" -->
<!-- name="Korambath, Prakashan" -->
<!-- email="ppk_at_[hidden]" -->
<!-- subject="Re: [OMPI users] SGE error: executing task of job 22966 failed:" -->
<!-- id="43F64E86355A744E9D51506B6C6783B9021AE85C_at_EM2.ad.ucla.edu" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="47F54015.7050104_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] SGE error: executing task of job 22966 failed:<br>
<strong>From:</strong> Korambath, Prakashan (<em>ppk_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-03 16:48:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5305.php">Will Portnoy: "Re: [OMPI users] iof, readline, lost stdin buffering"</a>
<li><strong>Previous message:</strong> <a href="5303.php">Korambath, Prakashan: "Re: [OMPI users] SGE error: executing task of job 22966 failed:"</a>
<li><strong>In reply to:</strong> <a href="5302.php">Pak Lui: "Re: [OMPI users] SGE error: executing task of job 22966 failed:"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I followed your direction and it works fine now.  Thank you very much.  Appreciate it.
<br>
<p>Prakashan
<br>
<p><p><p>i01:~ {1005}$ qconf -sp orte
<br>
pe_name           orte
<br>
slots             360
<br>
user_lists        NONE
<br>
xuser_lists       NONE
<br>
start_proc_args   /bin/true
<br>
stop_proc_args    /bin/true
<br>
allocation_rule   $round_robin
<br>
control_slaves    TRUE
<br>
job_is_first_task FALSE
<br>
urgency_slots     min
<br>
<p><p>-----Original Message-----
<br>
From: users-bounces_at_[hidden] on behalf of Pak Lui
<br>
Sent: Thu 4/3/2008 1:37 PM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] SGE error: executing task of job 22966 failed:
<br>
&nbsp;
<br>
Hi Prakashan,
<br>
<p>I believe it might be something from PE setting. Could you try this:
<br>
<p>Change this parameter in the 'orte' parallel environment from:
<br>
<span class="quotelev1"> &gt; job_is_first_task TRUE
</span><br>
to:
<br>
<span class="quotelev1"> &gt; job_is_first_task FALSE
</span><br>
<p>If you have this set to true, it would take away an available slot in 
<br>
your job, so it might prevent an SGE 'task' from launching to one of 
<br>
your SGE nodes.
<br>
<p>Korambath, Prakashan wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   I just compiled OpenMPI version 1.2.5 with the option
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/u/local/mpi/openmpi/1.2.5 
</span><br>
<span class="quotelev1">&gt; --with-openib=/usr/local  --enable-static --disable-shared CC=icc 
</span><br>
<span class="quotelev1">&gt; CXX=icpc F77=ifort FC=ifort --with-sge
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; on a X86_64 machine with Infiniband Interconnect and OFED software and 
</span><br>
<span class="quotelev1">&gt; CentOS 5 OS
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Everything works fine on command line job submission, but when I submit 
</span><br>
<span class="quotelev1">&gt; through SGE 6.1U3 I am getting following error
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; error: executing task of job 23081 failed:
</span><br>
<span class="quotelev1">&gt; [n99:01442] ERROR: A daemon on node n99 failed to start as expected.
</span><br>
<span class="quotelev1">&gt; [n99:01442] ERROR: There may be more information available from
</span><br>
<span class="quotelev1">&gt; [n99:01442] ERROR: the 'qstat -t' command on the Grid Engine tasks.
</span><br>
<span class="quotelev1">&gt; [n99:01442] ERROR: If the problem persists, please restart the
</span><br>
<span class="quotelev1">&gt; [n99:01442] ERROR: Grid Engine PE job
</span><br>
<span class="quotelev1">&gt; [n99:01442] ERROR: The daemon exited unexpectedly with status 1.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In my command script for SGE I have
</span><br>
<span class="quotelev1">&gt; #$ -pe orte 2
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /u/local/mpi/openmpi/1.2.5/bin/mpiexec -n 2 -machinefile $TMPDIR/nodefile  \
</span><br>
<span class="quotelev1">&gt;          /u/home2/ppk/MPI/C/executablename  &gt;&amp; output
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; n99:/work/23081.1.campus.q {1002}$ cat nodefile
</span><br>
<span class="quotelev1">&gt; n99  slots=1
</span><br>
<span class="quotelev1">&gt; n15  slots=1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; n99:/work/23081.1.campus.q {1003}$ qconf -sp orte
</span><br>
<span class="quotelev1">&gt; pe_name           orte
</span><br>
<span class="quotelev1">&gt; slots             360
</span><br>
<span class="quotelev1">&gt; user_lists        NONE
</span><br>
<span class="quotelev1">&gt; xuser_lists       NONE
</span><br>
<span class="quotelev1">&gt; start_proc_args   /bin/true
</span><br>
<span class="quotelev1">&gt; stop_proc_args    /bin/true
</span><br>
<span class="quotelev1">&gt; allocation_rule   $round_robin
</span><br>
<span class="quotelev1">&gt; control_slaves    TRUE
</span><br>
<span class="quotelev1">&gt; job_is_first_task TRUE
</span><br>
<span class="quotelev1">&gt; urgency_slots     min
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am combing through the archives to look for similar errors.  I have 
</span><br>
<span class="quotelev1">&gt; seen some of it, but no satisfactory answer. Anyone knows why?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; i02:/u/local/mpi/openmpi/1.2.5/bin {1049}$ ./ompi_info | grep tm
</span><br>
<span class="quotelev1">&gt;               MCA memory: ptmalloc2 (MCA v1.0, API v1.0, Component v1.2.5)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I also tried pre-relese 1.2.6rc3 same results.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Prakashan
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
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
<p><p><pre>
-- 
- Pak Lui
pak.lui_at_[hidden]
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-5304/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5305.php">Will Portnoy: "Re: [OMPI users] iof, readline, lost stdin buffering"</a>
<li><strong>Previous message:</strong> <a href="5303.php">Korambath, Prakashan: "Re: [OMPI users] SGE error: executing task of job 22966 failed:"</a>
<li><strong>In reply to:</strong> <a href="5302.php">Pak Lui: "Re: [OMPI users] SGE error: executing task of job 22966 failed:"</a>
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
