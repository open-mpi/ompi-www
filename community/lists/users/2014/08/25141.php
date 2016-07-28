<?
$subject_val = "[OMPI users] A daemon on node cl231 failed to start as expected";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Aug 23 10:09:54 2014" -->
<!-- isoreceived="20140823140954" -->
<!-- sent="Sat, 23 Aug 2014 11:09:52 -0300" -->
<!-- isosent="20140823140952" -->
<!-- name="Pengcheng Wang" -->
<!-- email="wpc302_at_[hidden]" -->
<!-- subject="[OMPI users] A daemon on node cl231 failed to start as expected" -->
<!-- id="CAPdTcQiOGnV1Pb3-eLKbjSHBtVetFsg3ZeuMVywsPipy2EXmvA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] A daemon on node cl231 failed to start as expected<br>
<strong>From:</strong> Pengcheng Wang (<em>wpc302_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-23 10:09:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25142.php">Reuti: "Re: [OMPI users] A daemon on node cl231 failed to start as expected"</a>
<li><strong>Previous message:</strong> <a href="25140.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Does multiple Irecv means concurrent receiving ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25142.php">Reuti: "Re: [OMPI users] A daemon on node cl231 failed to start as expected"</a>
<li><strong>Reply:</strong> <a href="25142.php">Reuti: "Re: [OMPI users] A daemon on node cl231 failed to start as expected"</a>
<li><strong>Reply:</strong> <a href="25155.php">Pengcheng Wang: "Re: [OMPI users] A daemon on node cl231 failed to start as expected"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi everybody,
<br>
<p>I need to run a single driver program that only require one proc with the
<br>
command *mpirun -np 1 ./app *or *./app*. But it will schedule the launch of
<br>
other executable files including parallel and sequential computing. So I
<br>
require more than one proc to run it. It can be run smoothly as an
<br>
interactive job with the command below.
<br>
*qrsh -cwd -pe &quot;ompi*&quot; 6 -l h_rt=00:30:00,test=true ./app*
<br>
<p>But after I submitted the job, a strange error occurred and it stopped...
<br>
Please find the job script and error message below:
<br>
<p>*job submission script:*
<br>
#$ -S /bin/bash
<br>
#$ -N couple
<br>
#$ -cwd
<br>
#$ -j y
<br>
#$ -l h_rt=05:00:00
<br>
#$ -l h_vmem=2G
<br>
#$ -o couple.out
<br>
#$ -pe ompi*  6
<br>
&nbsp;&nbsp;&nbsp;&nbsp;./app
<br>
<p>*error message:*
<br>
error: executing task of job 6777095 failed:
<br>
[cl231:23777] ERROR: A daemon on node cl231 failed to start as expected.
<br>
[cl231:23777] ERROR: There may be more information available from
<br>
[cl231:23777] ERROR: the 'qstat -t' command on the Grid Engine tasks.
<br>
[cl231:23777] ERROR: If the problem persists, please restart the
<br>
[cl231:23777] ERROR: Grid Engine PE job
<br>
[cl231:23777] ERROR: The daemon exited unexpectedly with status 1.
<br>
<p>Thanks for any help!
<br>
<p>Pengcheng
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25141/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25142.php">Reuti: "Re: [OMPI users] A daemon on node cl231 failed to start as expected"</a>
<li><strong>Previous message:</strong> <a href="25140.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Does multiple Irecv means concurrent receiving ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25142.php">Reuti: "Re: [OMPI users] A daemon on node cl231 failed to start as expected"</a>
<li><strong>Reply:</strong> <a href="25142.php">Reuti: "Re: [OMPI users] A daemon on node cl231 failed to start as expected"</a>
<li><strong>Reply:</strong> <a href="25155.php">Pengcheng Wang: "Re: [OMPI users] A daemon on node cl231 failed to start as expected"</a>
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
