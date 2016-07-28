<?
$subject_val = "Re: [OMPI users] OpenMPI Checkpoint/Restart is failed";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 18 23:48:07 2010" -->
<!-- isoreceived="20100519034807" -->
<!-- sent="Wed, 19 May 2010 12:48:01 +0900" -->
<!-- isosent="20100519034801" -->
<!-- name="Hideyuki Jitsumoto" -->
<!-- email="jitumoto_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI Checkpoint/Restart is failed" -->
<!-- id="AANLkTinAHTfgCq8HOA8X5BOGbQbdEqVHzDVuT5ELsBN1_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="27DFCC4A-DA25-427D-9CBD-7F1AB6695F80_at_open-mpi.org" -->
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
<strong>From:</strong> Hideyuki Jitsumoto (<em>jitumoto_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-18 23:48:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13082.php">Peter Kruse: "Re: [OMPI users] init of component openib returned failure"</a>
<li><strong>Previous message:</strong> <a href="13080.php">Jeff Squyres: "Re: [OMPI users] init of component openib returned failure"</a>
<li><strong>In reply to:</strong> <a href="13078.php">Josh Hursey: "Re: [OMPI users] OpenMPI Checkpoint/Restart is failed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13137.php">Nguyen Toan: "Re: [OMPI users] OpenMPI Checkpoint/Restart is failed"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Josh,
<br>
<p>Thank you for your replying.
<br>
I tried to patch a Ticket #2139 to openmpi-1.4.1
<br>
and to install all of the elements from the very beginning.
<br>
Then I got a correct work.
<br>
Probably there are some faults on my environment preparation.
<br>
<p># I cannot reproduce the environment when I got failure.
<br>
# I'm very sorry that I cannot find truly factors of this malfunction
<br>
# and cannot send any information.
<br>
# Now I use openmpi-1.4.2, it works well without any patch. (except
<br>
for ompi_info)
<br>
<p><span class="quotelev2">&gt;&gt; In addition, when I confirmed open_info output as your demo movie, I got
</span><br>
<span class="quotelev2">&gt;&gt; &quot;MCA crs: none (MCA v2.0, API v2.0, Component v1.4.1)&quot; (open_info.output)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is actually a known bug with ompi_info. I have a fix in the works for
</span><br>
<span class="quotelev1">&gt; it, and should be available soon. Until then the ticket is linked below:
</span><br>
<span class="quotelev1">&gt;  <a href="https://svn.open-mpi.org/trac/ompi/ticket/2097">https://svn.open-mpi.org/trac/ompi/ticket/2097</a>
</span><br>
Thank you, I'll try it.
<br>
<p><p>On Wed, May 19, 2010 at 3:46 AM, Josh Hursey &lt;jjhursey_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; (Sorry for the delay in replying, more below)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 12, 2010, at 6:36 AM, Hideyuki Jitsumoto wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi Members,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I tried to use checkpoint/restart by openmpi.
</span><br>
<span class="quotelev2">&gt;&gt; But I can not get collect checkpoint data.
</span><br>
<span class="quotelev2">&gt;&gt; I prepared execution environment as follows, the strings in () mean
</span><br>
<span class="quotelev2">&gt;&gt; name of output file which attached on next e-mail ( for mail size
</span><br>
<span class="quotelev2">&gt;&gt; limitation ):
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1. installed BLCR and checked BLCR is working correctly by &quot;make check&quot;
</span><br>
<span class="quotelev2">&gt;&gt; 2. executed ./configure with some parameters on openMPI source dir
</span><br>
<span class="quotelev2">&gt;&gt; (config.output / config.log)
</span><br>
<span class="quotelev2">&gt;&gt; 3. executed make and make install (make.output.2 / install.output.2)
</span><br>
<span class="quotelev2">&gt;&gt; 4. confirmed that mca_crs_blcr.[la|so], mca_crs_self.[la|so] on
</span><br>
<span class="quotelev2">&gt;&gt; /${INSTALL_DIR}/lib/openmpi
</span><br>
<span class="quotelev2">&gt;&gt; 5. make ~/.openmpi/mca-params.conf (mca-params.conf)
</span><br>
<span class="quotelev2">&gt;&gt; 6. compiled NPB and executed with -am ft-enable-cr
</span><br>
<span class="quotelev2">&gt;&gt; 7. invoked ompi-checkpoint &lt;MPIRUN_PID&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; As result, I got the message &quot;Checkpoint failed: no processes
</span><br>
<span class="quotelev2">&gt;&gt; checkpointed.&quot;
</span><br>
<span class="quotelev2">&gt;&gt; (cr_test_cg)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It is unclear from the output what caused the checkpoint to fail. Can you
</span><br>
<span class="quotelev1">&gt; turn on some verbose arguments and send me the output?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Put the following options in you ~/.openmpi/mca-params.conf:
</span><br>
<span class="quotelev1">&gt; #---------------
</span><br>
<span class="quotelev1">&gt; orte_debug_daemons=1
</span><br>
<span class="quotelev1">&gt; snapc_full_verbose=20
</span><br>
<span class="quotelev1">&gt; crs_base_verbose=10
</span><br>
<span class="quotelev1">&gt; opal_cr_verbose=10
</span><br>
<span class="quotelev1">&gt; #---------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In addition, when I confirmed open_info output as your demo movie, I got
</span><br>
<span class="quotelev2">&gt;&gt; &quot;MCA crs: none (MCA v2.0, API v2.0, Component v1.4.1)&quot; (open_info.output)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is actually a known bug with ompi_info. I have a fix in the works for
</span><br>
<span class="quotelev1">&gt; it, and should be available soon. Until then the ticket is linked below:
</span><br>
<span class="quotelev1">&gt; &#160;<a href="https://svn.open-mpi.org/trac/ompi/ticket/2097">https://svn.open-mpi.org/trac/ompi/ticket/2097</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; How should I do for checkpointing ?
</span><br>
<span class="quotelev2">&gt;&gt; Any guidance in this regard would be highly appreciated.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Let's see what the verbose output tells us, and go from there. What version
</span><br>
<span class="quotelev1">&gt; of BLCR are you using?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- Josh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank you,
</span><br>
<span class="quotelev2">&gt;&gt; Hideyuki
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Sincerely Yours,
</span><br>
<span class="quotelev2">&gt;&gt; Hideyuki Jitsumoto (jitumoto_at_[hidden])
</span><br>
<span class="quotelev2">&gt;&gt; Tokyo Institute of Technology
</span><br>
<span class="quotelev2">&gt;&gt; Global Scientific Information and Computing center (Matsuoka Lab.)
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
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
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
<li><strong>Next message:</strong> <a href="13082.php">Peter Kruse: "Re: [OMPI users] init of component openib returned failure"</a>
<li><strong>Previous message:</strong> <a href="13080.php">Jeff Squyres: "Re: [OMPI users] init of component openib returned failure"</a>
<li><strong>In reply to:</strong> <a href="13078.php">Josh Hursey: "Re: [OMPI users] OpenMPI Checkpoint/Restart is failed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13137.php">Nguyen Toan: "Re: [OMPI users] OpenMPI Checkpoint/Restart is failed"</a>
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
