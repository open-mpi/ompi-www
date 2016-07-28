<?
$subject_val = "Re: [OMPI users] A daemon on node cl231 failed to start as expected (Pengcheng)";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 25 07:23:49 2014" -->
<!-- isoreceived="20140825112349" -->
<!-- sent="Mon, 25 Aug 2014 08:23:47 -0300" -->
<!-- isosent="20140825112347" -->
<!-- name="Pengcheng Wang" -->
<!-- email="wpc302_at_[hidden]" -->
<!-- subject="Re: [OMPI users] A daemon on node cl231 failed to start as expected (Pengcheng)" -->
<!-- id="CAPdTcQhcsLhRoeowmC9RwhYGB2--JL0Zo2Ccj=haD1S8L9LFGw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="[OMPI users] A daemon on node cl231 failed to start as expected (Pengcheng)" -->
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
<strong>From:</strong> Pengcheng Wang (<em>wpc302_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-25 07:23:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25145.php">Reuti: "Re: [OMPI users] A daemon on node cl231 failed to start as expected (Pengcheng)"</a>
<li><strong>Previous message:</strong> <a href="25143.php">Reuti: "Re: [OMPI users] Running a hybrid MPI+openMP program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25145.php">Reuti: "Re: [OMPI users] A daemon on node cl231 failed to start as expected (Pengcheng)"</a>
<li><strong>Reply:</strong> <a href="25145.php">Reuti: "Re: [OMPI users] A daemon on node cl231 failed to start as expected (Pengcheng)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Reuti,
<br>
<p>A simple hello_world program works without the h_vmem limit. Honestly, I am
<br>
not familiar with Open MPI. The command qconf -spl and qconf -sp ompi give
<br>
the information below. But strangely, it begins to work after I insert *unset
<br>
SGE_ROOT* in my job script. I don't know why.
<br>
<p>However, it still cannot work smoothly through 60hrs I setup. After running
<br>
for about two hours, it stops without any error messages. Is this related
<br>
to the h_vemem limit?
<br>
<p>*$ qconf -spl*
<br>
16per
<br>
1per
<br>
2per
<br>
4per
<br>
hadoop
<br>
make
<br>
ompi
<br>
openmp
<br>
<p>*$ qconf -sp ompi*
<br>
pe_name           ompi
<br>
slots             9999
<br>
user_lists        NONE
<br>
xuser_lists       NONE
<br>
start_proc_args   /bin/true
<br>
stop_proc_args    /bin/true
<br>
allocation_rule   $fill_up
<br>
control_slaves    TRUE
<br>
job_is_first_task FALSE
<br>
urgency_slots     min
<br>
<p>SGE version: 6.1u6
<br>
Open MPI version: 1.2.9
<br>
<p>*Job script updated:*
<br>
#$ -S /bin/bash
<br>
#$ -N couple
<br>
#$ -cwd
<br>
#$ -j y
<br>
#$ -R y
<br>
#$ -l h_rt=62:00:00
<br>
#$ -l h_vmem=2G
<br>
#$ -o couple.out
<br>
#$ -e couple.err
<br>
#$ -pe ompi* 8
<br>
*unset SGE_ROOT*
<br>
&nbsp;&nbsp;&nbsp;./app
<br>
<p>Thanks,
<br>
Pengcheng
<br>
<p>On Sun, Aug 24, 2014 at 1:00 PM, &lt;users-request_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Send users mailing list submissions to
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
<span class="quotelev2">&gt; &gt; I need to run a single driver program that only require one proc with
</span><br>
<span class="quotelev1">&gt; the command mpirun -np 1 ./app or ./app. But it will schedule the launch of
</span><br>
<span class="quotelev1">&gt; other executable files including parallel and sequential computing. So I
</span><br>
<span class="quotelev1">&gt; require more than one proc to run it. It can be run smoothly as an
</span><br>
<span class="quotelev1">&gt; interactive job with the command below.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; qrsh -cwd -pe &quot;ompi*&quot; 6 -l h_rt=00:30:00,test=true ./app
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; But after I submitted the job, a strange error occurred and it
</span><br>
<span class="quotelev1">&gt; stopped... Please find the job script and error message below:
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
<span class="quotelev1">&gt; Is a simple hello_world program listing the threads working? Does it work
</span><br>
<span class="quotelev1">&gt; without the h_vmem limit?
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
<span class="quotelev1">&gt; Which PEs can be addressed here? What are their allocation rules (looks
</span><br>
<span class="quotelev1">&gt; like you need &quot;$pe_slots&quot;).
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
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/08/25141.php">http://www.open-mpi.org/community/lists/users/2014/08/25141.php</a>
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25144/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25145.php">Reuti: "Re: [OMPI users] A daemon on node cl231 failed to start as expected (Pengcheng)"</a>
<li><strong>Previous message:</strong> <a href="25143.php">Reuti: "Re: [OMPI users] Running a hybrid MPI+openMP program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25145.php">Reuti: "Re: [OMPI users] A daemon on node cl231 failed to start as expected (Pengcheng)"</a>
<li><strong>Reply:</strong> <a href="25145.php">Reuti: "Re: [OMPI users] A daemon on node cl231 failed to start as expected (Pengcheng)"</a>
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
