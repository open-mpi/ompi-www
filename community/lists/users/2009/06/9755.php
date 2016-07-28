<?
$subject_val = "Re: [OMPI users] Some Newbie questions";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 29 07:20:16 2009" -->
<!-- isoreceived="20090629112016" -->
<!-- sent="Mon, 29 Jun 2009 07:20:10 -0400" -->
<!-- isosent="20090629112010" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Some Newbie questions" -->
<!-- id="9A3D26A6-9DB2-49A5-A611-2B76C5CD9448_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="fa4af8200906282319j49a1f569u9beda7990944e071_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Some Newbie questions<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-29 07:20:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9756.php">Jeff Squyres: "Re: [OMPI users] CPU user time vs. system time"</a>
<li><strong>Previous message:</strong> <a href="9754.php">Reuti: "Re: [OMPI users] Some Newbie questions / ssh_known_hosts"</a>
<li><strong>In reply to:</strong> <a href="9753.php">vipin kumar: "Re: [OMPI users] Some Newbie questions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9764.php">Ashika Umanga Umagiliya: "Re: [OMPI users] Some Newbie questions"</a>
<li><strong>Reply:</strong> <a href="9764.php">Ashika Umanga Umagiliya: "Re: [OMPI users] Some Newbie questions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 29, 2009, at 2:19 AM, vipin kumar wrote:
<br>
<p><span class="quotelev1">&gt; Q. Since I am using TCP/Ethernet  I guess that MPI uses SSH/RSH to  
</span><br>
<span class="quotelev1">&gt; communicate between peers.
</span><br>
<span class="quotelev1">&gt; Ans. May be you are right. I don't know exactly how peers  
</span><br>
<span class="quotelev1">&gt; communicate in MPI environment, but I can say for sure that OpenMPI  
</span><br>
<span class="quotelev1">&gt; uses rsh/ssh as one of the available launchers.
</span><br>
<p>Open MPI uses two different mechanisms for launching individual MPI  
<br>
processes vs. MPI communications.  rsh/ssh is one of the options that  
<br>
Open MPI can use for launching MPI processes, but we don't keep those  
<br>
channels open and don't use them for MPI communications.  Individual,  
<br>
new TCP sockets are opened for MPI_SEND / MPI_RECV (etc.) traffic.   
<br>
These sockets are not encrypted (like ssh connections would be).
<br>
<p><span class="quotelev1">&gt; Q. And for that, each peer should have the copy of the application  
</span><br>
<span class="quotelev1">&gt; right?
</span><br>
<span class="quotelev1">&gt; Ans. Absolutely correct. But If you don't want to copy binaries  
</span><br>
<span class="quotelev1">&gt; manually you should use &quot;--preload-binary&quot; option. OpenMPI will copy  
</span><br>
<span class="quotelev1">&gt; the executables in remote nodes before launching processes, and will  
</span><br>
<span class="quotelev1">&gt; delete when job gets done.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It is almost always good to use latest version. &quot;--preload-binary&quot;  
</span><br>
<span class="quotelev1">&gt; option may be absent in old versions.
</span><br>
<p><p>It is new in the 1.3 series; it did not exist in the 1.2 series.
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9756.php">Jeff Squyres: "Re: [OMPI users] CPU user time vs. system time"</a>
<li><strong>Previous message:</strong> <a href="9754.php">Reuti: "Re: [OMPI users] Some Newbie questions / ssh_known_hosts"</a>
<li><strong>In reply to:</strong> <a href="9753.php">vipin kumar: "Re: [OMPI users] Some Newbie questions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9764.php">Ashika Umanga Umagiliya: "Re: [OMPI users] Some Newbie questions"</a>
<li><strong>Reply:</strong> <a href="9764.php">Ashika Umanga Umagiliya: "Re: [OMPI users] Some Newbie questions"</a>
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
