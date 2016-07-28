<?
$subject_val = "[OMPI users] OpenMPI Checkpoint/Restart is failed";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 12 06:36:23 2010" -->
<!-- isoreceived="20100412103623" -->
<!-- sent="Mon, 12 Apr 2010 19:36:16 +0900" -->
<!-- isosent="20100412103616" -->
<!-- name="Hideyuki Jitsumoto" -->
<!-- email="jitumoto_at_[hidden]" -->
<!-- subject="[OMPI users] OpenMPI Checkpoint/Restart is failed" -->
<!-- id="v2y3005ebdd1004120336zb08ac5cg649ce75bc8ce59de_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="r2x3005ebdd1004120328u59146d21gea36fcbfcaa821d_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] OpenMPI Checkpoint/Restart is failed<br>
<strong>From:</strong> Hideyuki Jitsumoto (<em>jitumoto_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-12 06:36:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12606.php">Hideyuki Jitsumoto: "Re: [OMPI users] OpenMPI Checkpoint/Restart is failed"</a>
<li><strong>Previous message:</strong> <a href="12604.php">Reuti: "Re: [OMPI users] run openMPI jobs with SGE,"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12606.php">Hideyuki Jitsumoto: "Re: [OMPI users] OpenMPI Checkpoint/Restart is failed"</a>
<li><strong>Reply:</strong> <a href="12606.php">Hideyuki Jitsumoto: "Re: [OMPI users] OpenMPI Checkpoint/Restart is failed"</a>
<li><strong>Reply:</strong> <a href="12607.php">Hideyuki Jitsumoto: "Re: [OMPI users] OpenMPI Checkpoint/Restart is failed"</a>
<li><strong>Reply:</strong> <a href="12608.php">Hideyuki Jitsumoto: "Re: [OMPI users] OpenMPI Checkpoint/Restart is failed"</a>
<li><strong>Reply:</strong> <a href="12609.php">Hideyuki Jitsumoto: "Re: [OMPI users] OpenMPI Checkpoint/Restart is failed"</a>
<li><strong>Reply:</strong> <a href="12610.php">Fernando Lemos: "Re: [OMPI users] OpenMPI Checkpoint/Restart is failed"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/05/13078.php">Josh Hursey: "Re: [OMPI users] OpenMPI Checkpoint/Restart is failed"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/05/13137.php">Nguyen Toan: "Re: [OMPI users] OpenMPI Checkpoint/Restart is failed"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Members,
<br>
<p>I tried to use checkpoint/restart by openmpi.
<br>
But I can not get collect checkpoint data.
<br>
I prepared execution environment as follows, the strings in () mean
<br>
name of output file which attached on next e-mail ( for mail size
<br>
limitation ):
<br>
<p>1. installed BLCR and checked BLCR is working correctly by &quot;make check&quot;
<br>
2. executed ./configure with some parameters on openMPI source dir
<br>
(config.output / config.log)
<br>
3. executed make and make install (make.output.2 / install.output.2)
<br>
4. confirmed that mca_crs_blcr.[la|so], mca_crs_self.[la|so] on
<br>
/${INSTALL_DIR}/lib/openmpi
<br>
5. make ~/.openmpi/mca-params.conf (mca-params.conf)
<br>
6. compiled NPB and executed with -am ft-enable-cr
<br>
7. invoked ompi-checkpoint &lt;MPIRUN_PID&gt;
<br>
<p>As result, I got the message &quot;Checkpoint failed: no processes checkpointed.&quot;
<br>
(cr_test_cg)
<br>
<p>In addition, when I confirmed open_info output as your demo movie, I got
<br>
&quot;MCA crs: none (MCA v2.0, API v2.0, Component v1.4.1)&quot; (open_info.output)
<br>
<p>How should I do for checkpointing ?
<br>
Any guidance in this regard would be highly appreciated.
<br>
<p>Thank you,
<br>
Hideyuki
<br>
<p><pre>
--
Sincerely Yours,
Hideyuki Jitsumoto (jitumoto_at_[hidden])
Tokyo Institute of Technology
Global Scientific Information and Computing center (Matsuoka Lab.)
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12606.php">Hideyuki Jitsumoto: "Re: [OMPI users] OpenMPI Checkpoint/Restart is failed"</a>
<li><strong>Previous message:</strong> <a href="12604.php">Reuti: "Re: [OMPI users] run openMPI jobs with SGE,"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12606.php">Hideyuki Jitsumoto: "Re: [OMPI users] OpenMPI Checkpoint/Restart is failed"</a>
<li><strong>Reply:</strong> <a href="12606.php">Hideyuki Jitsumoto: "Re: [OMPI users] OpenMPI Checkpoint/Restart is failed"</a>
<li><strong>Reply:</strong> <a href="12607.php">Hideyuki Jitsumoto: "Re: [OMPI users] OpenMPI Checkpoint/Restart is failed"</a>
<li><strong>Reply:</strong> <a href="12608.php">Hideyuki Jitsumoto: "Re: [OMPI users] OpenMPI Checkpoint/Restart is failed"</a>
<li><strong>Reply:</strong> <a href="12609.php">Hideyuki Jitsumoto: "Re: [OMPI users] OpenMPI Checkpoint/Restart is failed"</a>
<li><strong>Reply:</strong> <a href="12610.php">Fernando Lemos: "Re: [OMPI users] OpenMPI Checkpoint/Restart is failed"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/05/13078.php">Josh Hursey: "Re: [OMPI users] OpenMPI Checkpoint/Restart is failed"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/05/13137.php">Nguyen Toan: "Re: [OMPI users] OpenMPI Checkpoint/Restart is failed"</a>
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
