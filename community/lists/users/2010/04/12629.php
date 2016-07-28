<?
$subject_val = "Re: [OMPI users] OpenMPI Checkpoint/Restart is failed";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 14 04:25:13 2010" -->
<!-- isoreceived="20100414082513" -->
<!-- sent="Wed, 14 Apr 2010 17:25:07 +0900" -->
<!-- isosent="20100414082507" -->
<!-- name="Hideyuki Jitsumoto" -->
<!-- email="hjitsumoto_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI Checkpoint/Restart is failed" -->
<!-- id="v2n3005ebdd1004140125va50d41c2t44b01e0f7146074d_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="v2r9108753b1004120541h15cdf23dy9ca8798d5d99c5e0_at_mail.gmail.com" -->
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
<strong>From:</strong> Hideyuki Jitsumoto (<em>hjitsumoto_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-14 04:25:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12630.php">Jürgen Kaiser: "Re: [OMPI users] Don't crash on node failures"</a>
<li><strong>Previous message:</strong> <a href="12628.php">Josh Hursey: "Re: [OMPI users] Hibernating/Wakeup MPI processes"</a>
<li><strong>In reply to:</strong> <a href="12610.php">Fernando Lemos: "Re: [OMPI users] OpenMPI Checkpoint/Restart is failed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12632.php">Fernando Lemos: "Re: [OMPI users] OpenMPI Checkpoint/Restart is failed"</a>
<li><strong>Reply:</strong> <a href="12632.php">Fernando Lemos: "Re: [OMPI users] OpenMPI Checkpoint/Restart is failed"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Fernando,
<br>
<p>Thank you for your reply.
<br>
I tried to patch the file you mentioned, but the output did not change.
<br>
<p><span class="quotelev1">&gt;Are you using a shared file system? You need to use a shared file
</span><br>
system for checkpointing with 1.4.1:
<br>
What is the shared file system ? do you mean NFS, Lustre and so on ?
<br>
(I'm sorry about my ignorance...)
<br>
<p>If I use only one node for application, do I need such a shared-file-system ?
<br>
<p><p>On Mon, Apr 12, 2010 at 9:41 PM, Fernando Lemos &lt;fernandotcl_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; On Mon, Apr 12, 2010 at 7:36 AM, Hideyuki Jitsumoto
</span><br>
<span class="quotelev1">&gt; &lt;jitumoto_at_[hidden]&gt; wrote:
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
<span class="quotelev2">&gt;&gt; As result, I got the message &quot;Checkpoint failed: no processes checkpointed.&quot;
</span><br>
<span class="quotelev2">&gt;&gt; (cr_test_cg)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Are you using a shared file system? You need to use a shared file
</span><br>
<span class="quotelev1">&gt; system for checkpointing with 1.4.1:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="https://svn.open-mpi.org/trac/ompi/ticket/2139">https://svn.open-mpi.org/trac/ompi/ticket/2139</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
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
<li><strong>Next message:</strong> <a href="12630.php">Jürgen Kaiser: "Re: [OMPI users] Don't crash on node failures"</a>
<li><strong>Previous message:</strong> <a href="12628.php">Josh Hursey: "Re: [OMPI users] Hibernating/Wakeup MPI processes"</a>
<li><strong>In reply to:</strong> <a href="12610.php">Fernando Lemos: "Re: [OMPI users] OpenMPI Checkpoint/Restart is failed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12632.php">Fernando Lemos: "Re: [OMPI users] OpenMPI Checkpoint/Restart is failed"</a>
<li><strong>Reply:</strong> <a href="12632.php">Fernando Lemos: "Re: [OMPI users] OpenMPI Checkpoint/Restart is failed"</a>
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
