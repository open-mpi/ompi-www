<?
$subject_val = "Re: [OMPI users] OpenMPI Checkpoint/Restart is failed";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 12 08:41:47 2010" -->
<!-- isoreceived="20100412124147" -->
<!-- sent="Mon, 12 Apr 2010 09:41:42 -0300" -->
<!-- isosent="20100412124142" -->
<!-- name="Fernando Lemos" -->
<!-- email="fernandotcl_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI Checkpoint/Restart is failed" -->
<!-- id="v2r9108753b1004120541h15cdf23dy9ca8798d5d99c5e0_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="v2y3005ebdd1004120336zb08ac5cg649ce75bc8ce59de_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI Checkpoint/Restart is failed<br>
<strong>From:</strong> Fernando Lemos (<em>fernandotcl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-12 08:41:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12611.php">chan_at_[hidden]: "Re: [OMPI users] Installing MPE on existing Open-MPI installation for C++ programs"</a>
<li><strong>Previous message:</strong> <a href="12609.php">Hideyuki Jitsumoto: "Re: [OMPI users] OpenMPI Checkpoint/Restart is failed"</a>
<li><strong>In reply to:</strong> <a href="12605.php">Hideyuki Jitsumoto: "[OMPI users] OpenMPI Checkpoint/Restart is failed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12629.php">Hideyuki Jitsumoto: "Re: [OMPI users] OpenMPI Checkpoint/Restart is failed"</a>
<li><strong>Reply:</strong> <a href="12629.php">Hideyuki Jitsumoto: "Re: [OMPI users] OpenMPI Checkpoint/Restart is failed"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, Apr 12, 2010 at 7:36 AM, Hideyuki Jitsumoto
<br>
&lt;jitumoto_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Hi Members,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I tried to use checkpoint/restart by openmpi.
</span><br>
<span class="quotelev1">&gt; But I can not get collect checkpoint data.
</span><br>
<span class="quotelev1">&gt; I prepared execution environment as follows, the strings in () mean
</span><br>
<span class="quotelev1">&gt; name of output file which attached on next e-mail ( for mail size
</span><br>
<span class="quotelev1">&gt; limitation ):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. installed BLCR and checked BLCR is working correctly by &quot;make check&quot;
</span><br>
<span class="quotelev1">&gt; 2. executed ./configure with some parameters on openMPI source dir
</span><br>
<span class="quotelev1">&gt; (config.output / config.log)
</span><br>
<span class="quotelev1">&gt; 3. executed make and make install (make.output.2 / install.output.2)
</span><br>
<span class="quotelev1">&gt; 4. confirmed that mca_crs_blcr.[la|so], mca_crs_self.[la|so] on
</span><br>
<span class="quotelev1">&gt; /${INSTALL_DIR}/lib/openmpi
</span><br>
<span class="quotelev1">&gt; 5. make ~/.openmpi/mca-params.conf (mca-params.conf)
</span><br>
<span class="quotelev1">&gt; 6. compiled NPB and executed with -am ft-enable-cr
</span><br>
<span class="quotelev1">&gt; 7. invoked ompi-checkpoint &lt;MPIRUN_PID&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As result, I got the message &quot;Checkpoint failed: no processes checkpointed.&quot;
</span><br>
<span class="quotelev1">&gt; (cr_test_cg)
</span><br>
<p>Are you using a shared file system? You need to use a shared file
<br>
system for checkpointing with 1.4.1:
<br>
<p><a href="https://svn.open-mpi.org/trac/ompi/ticket/2139">https://svn.open-mpi.org/trac/ompi/ticket/2139</a>
<br>
<p>Regards,
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12611.php">chan_at_[hidden]: "Re: [OMPI users] Installing MPE on existing Open-MPI installation for C++ programs"</a>
<li><strong>Previous message:</strong> <a href="12609.php">Hideyuki Jitsumoto: "Re: [OMPI users] OpenMPI Checkpoint/Restart is failed"</a>
<li><strong>In reply to:</strong> <a href="12605.php">Hideyuki Jitsumoto: "[OMPI users] OpenMPI Checkpoint/Restart is failed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12629.php">Hideyuki Jitsumoto: "Re: [OMPI users] OpenMPI Checkpoint/Restart is failed"</a>
<li><strong>Reply:</strong> <a href="12629.php">Hideyuki Jitsumoto: "Re: [OMPI users] OpenMPI Checkpoint/Restart is failed"</a>
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
