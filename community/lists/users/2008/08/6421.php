<?
$subject_val = "Re: [OMPI users] Checkpoint problem";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Aug 23 10:57:40 2008" -->
<!-- isoreceived="20080823145740" -->
<!-- sent="Sat, 23 Aug 2008 16:57:35 +0200" -->
<!-- isosent="20080823145735" -->
<!-- name="Gabriele Fatigati" -->
<!-- email="g.fatigati_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Checkpoint problem" -->
<!-- id="3a37617f0808230757p7eba82xd46b42af4484d544_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="ea86ce220808200548x7d2af1e1r3da2dad5e43c8c2c_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Checkpoint problem<br>
<strong>From:</strong> Gabriele Fatigati (<em>g.fatigati_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-23 10:57:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6422.php">Mi Yan: "[OMPI users] RDMA over IB between heterogenous processors with different endianness"</a>
<li><strong>Previous message:</strong> <a href="6420.php">Jeff Squyres: "Re: [OMPI users] problem when mpi_paffinity_alone is set to 1"</a>
<li><strong>In reply to:</strong> <a href="6395.php">Tim Mattox: "Re: [OMPI users] Checkpoint problem"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Well,
<br>
as you've suggested i've installed latest version of OpenMPi nigthly:
<br>
1.4a1r19370 version.
<br>
<p>Now, checkpoint procedure works well, and related  restart files are
<br>
correctly created, but process restart fails.  After restart command, the
<br>
process starts, but remains frozen doing nothing, and die.
<br>
<p>I'm working with TCP over 4 procs.
<br>
<p>Any idea?
<br>
<p><p>2008/8/20 Tim Mattox &lt;timattox_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; Three things...
</span><br>
<span class="quotelev1">&gt; 1) Josh, the main developer for checkpoint/restart, has been away for
</span><br>
<span class="quotelev1">&gt; a few weeks
</span><br>
<span class="quotelev1">&gt; and has just returned.  I suspect he will get unburied from e-mail in
</span><br>
<span class="quotelev1">&gt; another day or two.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2) The 1.4 (and 1.3) branch is very much under rapid development, and
</span><br>
<span class="quotelev1">&gt; there will be times
</span><br>
<span class="quotelev1">&gt; when basic functionality will just break for a day or so.  If you run
</span><br>
<span class="quotelev1">&gt; into a problem, please try
</span><br>
<span class="quotelev1">&gt; to be more specific about what version (include the r#) that you tried.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 3) The checkpoint/restart functionality currently only supports a
</span><br>
<span class="quotelev1">&gt; subset of the network
</span><br>
<span class="quotelev1">&gt; transports.  I think all that you should expect to work right now is
</span><br>
<span class="quotelev1">&gt; TCP and shared memory.
</span><br>
<span class="quotelev1">&gt; Josh is working on other transports, but those are very much a &quot;work
</span><br>
<span class="quotelev1">&gt; in progress&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, Aug 20, 2008 at 4:11 AM, Matthias Hovestadt
</span><br>
<span class="quotelev1">&gt; &lt;maho_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hi Gabriele!
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; In this case, mpirun works well, but the checkpoint procedure fails:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ompi-checkpoint 20109
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [node0316:20134] Error: Unable to get the current working directory
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [node0316:20134] [[42404,0],0] ORTE_ERROR_LOG: Not found in file
</span><br>
<span class="quotelev3">&gt; &gt;&gt; orte-checkpoint.c at line 395
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [node0316:20134] HNP with PID 20109 Not found!
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I had exactly the same problem on my machine. Neither modifying
</span><br>
<span class="quotelev2">&gt; &gt; the configure parameters nor the way of invoking the ompi-checkpoint
</span><br>
<span class="quotelev2">&gt; &gt; command did help. Since I am using the source from subversion checkout,
</span><br>
<span class="quotelev2">&gt; &gt; I also updated the source several times, following the day to day
</span><br>
<span class="quotelev2">&gt; &gt; progress. However, this problem remained.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Luckily, updating the source to SVN revision 19265 finally solved
</span><br>
<span class="quotelev2">&gt; &gt; this checkpointing issue. Maybe the problem shows up again in later
</span><br>
<span class="quotelev2">&gt; &gt; versions...
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Best,
</span><br>
<span class="quotelev2">&gt; &gt; Matthias
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Tim Mattox, Ph.D. - <a href="http://homepage.mac.com/tmattox/">http://homepage.mac.com/tmattox/</a>
</span><br>
<span class="quotelev1">&gt;  tmattox_at_[hidden] || timattox_at_[hidden]
</span><br>
<span class="quotelev1">&gt;  I'm a bright... <a href="http://www.the-brights.net/">http://www.the-brights.net/</a>
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
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Gabriele Fatigati
CINECA Systems &amp; Tecnologies Department
Supercomputing Group
Via Magnanelli 6/3, Casalecchio di Reno (BO) Italy
www.cineca.it Tel: +39 051 6171722
g.fatigati_at_[hidden]
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6421/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6422.php">Mi Yan: "[OMPI users] RDMA over IB between heterogenous processors with different endianness"</a>
<li><strong>Previous message:</strong> <a href="6420.php">Jeff Squyres: "Re: [OMPI users] problem when mpi_paffinity_alone is set to 1"</a>
<li><strong>In reply to:</strong> <a href="6395.php">Tim Mattox: "Re: [OMPI users] Checkpoint problem"</a>
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
