<?
$subject_val = "Re: [OMPI users] A daemon on node cl231 failed to start as expected (Pengcheng)";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 25 08:16:46 2014" -->
<!-- isoreceived="20140825121646" -->
<!-- sent="Mon, 25 Aug 2014 14:16:35 +0200" -->
<!-- isosent="20140825121635" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] A daemon on node cl231 failed to start as expected (Pengcheng)" -->
<!-- id="E4E52447-76DB-4564-B20A-CB42EEB349E7_at_staff.uni-marburg.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAPdTcQhcsLhRoeowmC9RwhYGB2--JL0Zo2Ccj=haD1S8L9LFGw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] A daemon on node cl231 failed to start as expected (Pengcheng)<br>
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-25 08:16:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25146.php">Christoph Winter: "[OMPI users] OMPI CUDA IPC synchronisation/fail-silent problem"</a>
<li><strong>Previous message:</strong> <a href="25144.php">Pengcheng Wang: "Re: [OMPI users] A daemon on node cl231 failed to start as expected (Pengcheng)"</a>
<li><strong>In reply to:</strong> <a href="25144.php">Pengcheng Wang: "Re: [OMPI users] A daemon on node cl231 failed to start as expected (Pengcheng)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Am 25.08.2014 um 13:23 schrieb Pengcheng Wang:
<br>
<p><span class="quotelev1">&gt; Hi Reuti,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; A simple hello_world program works without the h_vmem limit. Honestly, I am not familiar with Open MPI. The command qconf -spl and qconf -sp ompi give the information below.
</span><br>
<p>Thx.
<br>
<p><p><span class="quotelev1">&gt; But strangely, it begins to work after I insert unset SGE_ROOT in my job script. I don't know why. 
</span><br>
<p>Unsetting this variable will make Open MPI unaware that it runs under SGE. Hence it will use `ssh` to reach other machines. These `ssh` calls will have no memory or time limit set then.
<br>
<p>As you run a singleton this shouldn't matter though. But: when you want to start additional threads (according to your &quot;#$ -pe ompi*  6&quot;) you should use a PE with allocation rule &quot;$pe_slots&quot; so that all slots which SGE grants to your task are on one and the same machine.
<br>
<p>SGE will multiply the limit with the number of slots, but only with the count granted on the master node of the parallel job (resp. for each slave). How the other treads or tasks started is something you might look at.
<br>
<p><p><span class="quotelev1">&gt; However, it still cannot work smoothly through 60hrs I setup. After running for about two hours, it stops without any error messages. Is this related to the h_vemem limit?
</span><br>
<p>You can have a look in $SGE_ROOT/spool/&lt;exechost&gt;/messages (resp. your actual location of the spool directories) whether any limit was passed and triggered an abortion of the job (for all granted machines for this job). Also `qacct -j &lt;job_id&gt;` might give some hint whether the was an exitcode of 137 due to a kill -9.
<br>
<p><p><span class="quotelev1">&gt; $ qconf -spl
</span><br>
<span class="quotelev1">&gt; 16per
</span><br>
<span class="quotelev1">&gt; 1per
</span><br>
<span class="quotelev1">&gt; 2per
</span><br>
<span class="quotelev1">&gt; 4per
</span><br>
<span class="quotelev1">&gt; hadoop
</span><br>
<span class="quotelev1">&gt; make
</span><br>
<span class="quotelev1">&gt; ompi
</span><br>
<span class="quotelev1">&gt; openmp
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ qconf -sp ompi
</span><br>
<span class="quotelev1">&gt; pe_name           ompi
</span><br>
<span class="quotelev1">&gt; slots             9999
</span><br>
<span class="quotelev1">&gt; user_lists        NONE
</span><br>
<span class="quotelev1">&gt; xuser_lists       NONE
</span><br>
<span class="quotelev1">&gt; start_proc_args   /bin/true
</span><br>
<span class="quotelev1">&gt; stop_proc_args    /bin/true
</span><br>
<span class="quotelev1">&gt; allocation_rule   $fill_up
</span><br>
<p>This will allow to collect the slots from several machines, not necessarily all will be on one and the same machine where the jobscript runs.
<br>
<p><p><span class="quotelev1">&gt; control_slaves    TRUE
</span><br>
<span class="quotelev1">&gt; job_is_first_task FALSE
</span><br>
<span class="quotelev1">&gt; urgency_slots     min
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; SGE version: 6.1u6
</span><br>
<span class="quotelev1">&gt; Open MPI version: 1.2.9
</span><br>
<p>Both are really old versions. I fear I can't help much here as many things changed compared to the actual version 1.8.1 of Open MPI, while also SGE's latest version is 6.2u5 with SoGE being now at 8.1.7.
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev1">&gt; Job script updated:
</span><br>
<span class="quotelev1">&gt; #$ -S /bin/bash
</span><br>
<span class="quotelev1">&gt; #$ -N couple
</span><br>
<span class="quotelev1">&gt; #$ -cwd
</span><br>
<span class="quotelev1">&gt; #$ -j y
</span><br>
<span class="quotelev1">&gt; #$ -R y
</span><br>
<span class="quotelev1">&gt; #$ -l h_rt=62:00:00
</span><br>
<span class="quotelev1">&gt; #$ -l h_vmem=2G
</span><br>
<span class="quotelev1">&gt; #$ -o couple.out
</span><br>
<span class="quotelev1">&gt; #$ -e couple.err
</span><br>
<span class="quotelev1">&gt; #$ -pe ompi* 8
</span><br>
<span class="quotelev1">&gt; unset SGE_ROOT
</span><br>
<span class="quotelev1">&gt;    ./app
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Pengcheng
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Sun, Aug 24, 2014 at 1:00 PM, &lt;users-request_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Send users mailing list submissions to
</span><br>
<span class="quotelev1">&gt;         users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; To subscribe or unsubscribe via the World Wide Web, visit
</span><br>
<span class="quotelev1">&gt;         <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; or, via email, send a message with subject or body 'help' to
</span><br>
<span class="quotelev1">&gt;         users-request_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You can reach the person managing the list at
</span><br>
<span class="quotelev1">&gt;         users-owner_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When replying, please edit your Subject line so it is more specific
</span><br>
<span class="quotelev1">&gt; than &quot;Re: Contents of users digest...&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Today's Topics:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    1. Re: A daemon on node cl231 failed to start as expected (Reuti)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Message: 1
</span><br>
<span class="quotelev1">&gt; Date: Sat, 23 Aug 2014 18:49:38 +0200
</span><br>
<span class="quotelev1">&gt; From: Reuti &lt;reuti_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] A daemon on node cl231 failed to start as
</span><br>
<span class="quotelev1">&gt;         expected
</span><br>
<span class="quotelev1">&gt; Message-ID:
</span><br>
<span class="quotelev1">&gt;         &lt;8F21A4D9-9E8D-4E20-9AE6-04A495A33DC9_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=windows-1252
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Am 23.08.2014 um 16:09 schrieb Pengcheng Wang:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I need to run a single driver program that only require one proc with the command mpirun -np 1 ./app or ./app. But it will schedule the launch of other executable files including parallel and sequential computing. So I require more than one proc to run it. It can be run smoothly as an interactive job with the command below.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; qrsh -cwd -pe &quot;ompi*&quot; 6 -l h_rt=00:30:00,test=true ./app
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; But after I submitted the job, a strange error occurred and it stopped... Please find the job script and error message below:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ? job submission script:
</span><br>
<span class="quotelev2">&gt; &gt; #$ -S /bin/bash
</span><br>
<span class="quotelev2">&gt; &gt; #$ -N couple
</span><br>
<span class="quotelev2">&gt; &gt; #$ -cwd
</span><br>
<span class="quotelev2">&gt; &gt; #$ -j y
</span><br>
<span class="quotelev2">&gt; &gt; #$ -l h_rt=05:00:00
</span><br>
<span class="quotelev2">&gt; &gt; #$ -l h_vmem=2G
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is a simple hello_world program listing the threads working? Does it work without the h_vmem limit?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; #$ -o couple.out
</span><br>
<span class="quotelev2">&gt; &gt; #$ -pe ompi*  6
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Which PEs can be addressed here? What are their allocation rules (looks like you need &quot;$pe_slots&quot;).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What version of SGE?
</span><br>
<span class="quotelev1">&gt; What version of Open MPI?
</span><br>
<span class="quotelev1">&gt; Compiled with --with-sge?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For me it's working in either way.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- Reuti
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;     ./app
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; error message:
</span><br>
<span class="quotelev2">&gt; &gt; error: executing task of job 6777095 failed:
</span><br>
<span class="quotelev2">&gt; &gt; [cl231:23777] ERROR: A daemon on node cl231 failed to start as expected.
</span><br>
<span class="quotelev2">&gt; &gt; [cl231:23777] ERROR: There may be more information available from
</span><br>
<span class="quotelev2">&gt; &gt; [cl231:23777] ERROR: the 'qstat -t' command on the Grid Engine tasks.
</span><br>
<span class="quotelev2">&gt; &gt; [cl231:23777] ERROR: If the problem persists, please restart the
</span><br>
<span class="quotelev2">&gt; &gt; [cl231:23777] ERROR: Grid Engine PE job
</span><br>
<span class="quotelev2">&gt; &gt; [cl231:23777] ERROR: The daemon exited unexpectedly with status 1.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks for any help!
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Pengcheng
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/08/25141.php">http://www.open-mpi.org/community/lists/users/2014/08/25141.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Subject: Digest Footer
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
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; End of users Digest, Vol 2966, Issue 1
</span><br>
<span class="quotelev1">&gt; **************************************
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/08/25144.php">http://www.open-mpi.org/community/lists/users/2014/08/25144.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25146.php">Christoph Winter: "[OMPI users] OMPI CUDA IPC synchronisation/fail-silent problem"</a>
<li><strong>Previous message:</strong> <a href="25144.php">Pengcheng Wang: "Re: [OMPI users] A daemon on node cl231 failed to start as expected (Pengcheng)"</a>
<li><strong>In reply to:</strong> <a href="25144.php">Pengcheng Wang: "Re: [OMPI users] A daemon on node cl231 failed to start as expected (Pengcheng)"</a>
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
