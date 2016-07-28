<?
$subject_val = "Re: [OMPI users] Problem running mpirun with ssh on remote nodes -Daemon did not report back when launched problem";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr  8 16:27:51 2010" -->
<!-- isoreceived="20100408202751" -->
<!-- sent="Thu, 8 Apr 2010 13:27:47 -0700 (PDT)" -->
<!-- isosent="20100408202747" -->
<!-- name="rohan nigam" -->
<!-- email="locaterohan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem running mpirun with ssh on remote nodes -Daemon did not report back when launched problem" -->
<!-- id="200700.68773.qm_at_web63702.mail.re1.yahoo.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="F99890C5-80F0-4B6C-9504-1125F6BE8105_at_cisco.com" -->
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
<strong>From:</strong> rohan nigam (<em>locaterohan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-08 16:27:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12592.php">Cole, Derek E: "[OMPI users] MPI_TYPE_MAX"</a>
<li><strong>Previous message:</strong> <a href="12590.php">Fernando Lemos: "[OMPI users] Using a rankfile for ompi-restart"</a>
<li><strong>In reply to:</strong> <a href="12555.php">Jeff Squyres: "Re: [OMPI users] Problem running mpirun with ssh on remote nodes -Daemon did not report back when launched problem"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
<p>You were right.&#160; One of the other admins of the server I am working on, had a script that runs the firewall every time I logged in. So even when I was turning it off manually, the firewall ran the next time i logged in and hence the error.
<br>
<p>Thanks.
<br>
<p>- Rohan
<br>
<p><p>--- On Tue, 4/6/10, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p>From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
<br>
Subject: Re: [OMPI users] Problem running mpirun with ssh on remote nodes -Daemon did not report back when launched problem
<br>
To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
<br>
Date: Tuesday, April 6, 2010, 11:40 AM
<br>
<p>Open MPI opens random TCP sockets during the startup phase of MPI processes -- mostly from the &quot;orted&quot; helper process that is started on each node (or VM) back to the initiating mpirun process.
<br>
<p>Do you have firewalling or other TCP blocking software running?&#160; Or are the appropriate TCP routes setup between all your VMs?
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
<span class="quotelev1">&gt; I am trying to run this command over four different hosts, Dom0&#160; being the host where i am launching mpirun and rest three being xen guest domains.
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
<span class="quotelev1">&gt; I am able to run mpirun successfully when I launch this command from one of the guests and also when i lauch this command on dom0 (localhost)&#160; alone. But when i launch mpirun from the Dom 0 on one or more guests there is no response from the guests and I am eventually having to kill the process which reports saying 
</span><br>
<span class="quotelev1">&gt;&#160; &#160; &#160;&#160;&#160;xenguest1 - daemon did not report back when launched
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
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12591/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12592.php">Cole, Derek E: "[OMPI users] MPI_TYPE_MAX"</a>
<li><strong>Previous message:</strong> <a href="12590.php">Fernando Lemos: "[OMPI users] Using a rankfile for ompi-restart"</a>
<li><strong>In reply to:</strong> <a href="12555.php">Jeff Squyres: "Re: [OMPI users] Problem running mpirun with ssh on remote nodes -Daemon did not report back when launched problem"</a>
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
