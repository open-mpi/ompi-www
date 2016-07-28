<?
$subject_val = "Re: [OMPI users] Problem running mpirun with ssh on remote nodes -Daemon did not report back when launched problem";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr  6 12:40:34 2010" -->
<!-- isoreceived="20100406164034" -->
<!-- sent="Tue, 6 Apr 2010 12:40:25 -0400" -->
<!-- isosent="20100406164025" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem running mpirun with ssh on remote nodes -Daemon did not report back when launched problem" -->
<!-- id="F99890C5-80F0-4B6C-9504-1125F6BE8105_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="908254.62757.qm_at_web63703.mail.re1.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem running mpirun with ssh on remote nodes -Daemon did not report back when launched problem<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-06 12:40:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12556.php">Sam Preston: "[OMPI users] detect hung node"</a>
<li><strong>Previous message:</strong> <a href="12554.php">Richard Treumann: "Re: [OMPI users] Hide Abort output"</a>
<li><strong>In reply to:</strong> <a href="12526.php">rohan nigam: "[OMPI users] Problem running mpirun with ssh on remote nodes - Daemon did not report back when launched problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12591.php">rohan nigam: "Re: [OMPI users] Problem running mpirun with ssh on remote nodes -Daemon did not report back when launched problem"</a>
<li><strong>Reply:</strong> <a href="12591.php">rohan nigam: "Re: [OMPI users] Problem running mpirun with ssh on remote nodes -Daemon did not report back when launched problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Open MPI opens random TCP sockets during the startup phase of MPI processes -- mostly from the &quot;orted&quot; helper process that is started on each node (or VM) back to the initiating mpirun process.
<br>
<p>Do you have firewalling or other TCP blocking software running?  Or are the appropriate TCP routes setup between all your VMs?
<br>
<p><p>On Apr 2, 2010, at 5:00 PM, rohan nigam wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am trying to run a simple hello world program before actually launching some very heavy load testing over the Xen SMP set up that I have. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am trying to run this command over four different hosts, Dom0  being the host where i am launching mpirun and rest three being xen guest domains.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have password less login setup across all the hosts. These hosts are actually on AMD Opteron dual socket Quad core with 2 cores assigned to each host/domain.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun --prefix /root/xentools/openmpi-gcc/ -mca plm_rsh_agent ssh --host localhost, xenguest1 -np 4 /root/xentools/hello
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am able to run mpirun successfully when I launch this command from one of the guests and also when i lauch this command on dom0 (localhost)  alone. But when i launch mpirun from the Dom 0 on one or more guests there is no response from the guests and I am eventually having to kill the process which reports saying 
</span><br>
<span class="quotelev1">&gt;       xenguest1 - daemon did not report back when launched
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can someone point out where I am going wrong. I have seen people having similar problem in the list but no one posted how they got around this problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Note: I also tried setting the default agent launcher to ssh. Also, on every host the directory structure is exactly the same and also the Library paths and paths are also set up properly and the executable is also present at the exact same location..
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Rohan Nigam
</span><br>
<span class="quotelev1">&gt; Research Asst, 
</span><br>
<span class="quotelev1">&gt; Univ. of Houston
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
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
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12556.php">Sam Preston: "[OMPI users] detect hung node"</a>
<li><strong>Previous message:</strong> <a href="12554.php">Richard Treumann: "Re: [OMPI users] Hide Abort output"</a>
<li><strong>In reply to:</strong> <a href="12526.php">rohan nigam: "[OMPI users] Problem running mpirun with ssh on remote nodes - Daemon did not report back when launched problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12591.php">rohan nigam: "Re: [OMPI users] Problem running mpirun with ssh on remote nodes -Daemon did not report back when launched problem"</a>
<li><strong>Reply:</strong> <a href="12591.php">rohan nigam: "Re: [OMPI users] Problem running mpirun with ssh on remote nodes -Daemon did not report back when launched problem"</a>
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
