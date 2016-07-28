<?
$subject_val = "Re: [OMPI users] OpenMPI Checkpoint/Restart is failed";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 18 14:46:24 2010" -->
<!-- isoreceived="20100518184624" -->
<!-- sent="Tue, 18 May 2010 14:46:20 -0400" -->
<!-- isosent="20100518184620" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI Checkpoint/Restart is failed" -->
<!-- id="27DFCC4A-DA25-427D-9CBD-7F1AB6695F80_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-18 14:46:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13079.php">Josh Hursey: "Re: [OMPI users] Using a rankfile for ompi-restart"</a>
<li><strong>Previous message:</strong> <a href="13077.php">Josh Hursey: "Re: [OMPI users] (no subject)"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/04/12605.php">Hideyuki Jitsumoto: "[OMPI users] OpenMPI Checkpoint/Restart is failed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13081.php">Hideyuki Jitsumoto: "Re: [OMPI users] OpenMPI Checkpoint/Restart is failed"</a>
<li><strong>Reply:</strong> <a href="13081.php">Hideyuki Jitsumoto: "Re: [OMPI users] OpenMPI Checkpoint/Restart is failed"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
(Sorry for the delay in replying, more below)
<br>
<p>On Apr 12, 2010, at 6:36 AM, Hideyuki Jitsumoto wrote:
<br>
<p><span class="quotelev1">&gt; Hi Members,
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
<span class="quotelev1">&gt; 1. installed BLCR and checked BLCR is working correctly by &quot;make  
</span><br>
<span class="quotelev1">&gt; check&quot;
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
<span class="quotelev1">&gt; As result, I got the message &quot;Checkpoint failed: no processes  
</span><br>
<span class="quotelev1">&gt; checkpointed.&quot;
</span><br>
<span class="quotelev1">&gt; (cr_test_cg)
</span><br>
<p>It is unclear from the output what caused the checkpoint to fail. Can  
<br>
you turn on some verbose arguments and send me the output?
<br>
<p>Put the following options in you ~/.openmpi/mca-params.conf:
<br>
#---------------
<br>
orte_debug_daemons=1
<br>
snapc_full_verbose=20
<br>
crs_base_verbose=10
<br>
opal_cr_verbose=10
<br>
#---------------
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In addition, when I confirmed open_info output as your demo movie, I  
</span><br>
<span class="quotelev1">&gt; got
</span><br>
<span class="quotelev1">&gt; &quot;MCA crs: none (MCA v2.0, API v2.0, Component  
</span><br>
<span class="quotelev1">&gt; v1.4.1)&quot; (open_info.output)
</span><br>
<p>This is actually a known bug with ompi_info. I have a fix in the works  
<br>
for it, and should be available soon. Until then the ticket is linked  
<br>
below:
<br>
&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/ticket/2097">https://svn.open-mpi.org/trac/ompi/ticket/2097</a>
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; How should I do for checkpointing ?
</span><br>
<span class="quotelev1">&gt; Any guidance in this regard would be highly appreciated.
</span><br>
<p>Let's see what the verbose output tells us, and go from there. What  
<br>
version of BLCR are you using?
<br>
<p>-- Josh
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you,
</span><br>
<span class="quotelev1">&gt; Hideyuki
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Sincerely Yours,
</span><br>
<span class="quotelev1">&gt; Hideyuki Jitsumoto (jitumoto_at_[hidden])
</span><br>
<span class="quotelev1">&gt; Tokyo Institute of Technology
</span><br>
<span class="quotelev1">&gt; Global Scientific Information and Computing center (Matsuoka Lab.)
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
<li><strong>Next message:</strong> <a href="13079.php">Josh Hursey: "Re: [OMPI users] Using a rankfile for ompi-restart"</a>
<li><strong>Previous message:</strong> <a href="13077.php">Josh Hursey: "Re: [OMPI users] (no subject)"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/04/12605.php">Hideyuki Jitsumoto: "[OMPI users] OpenMPI Checkpoint/Restart is failed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13081.php">Hideyuki Jitsumoto: "Re: [OMPI users] OpenMPI Checkpoint/Restart is failed"</a>
<li><strong>Reply:</strong> <a href="13081.php">Hideyuki Jitsumoto: "Re: [OMPI users] OpenMPI Checkpoint/Restart is failed"</a>
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
