<?
$subject_val = "Re: [OMPI users] Some Newbie questions";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 29 21:48:55 2009" -->
<!-- isoreceived="20090630014855" -->
<!-- sent="Tue, 30 Jun 2009 10:48:46 +0900" -->
<!-- isosent="20090630014846" -->
<!-- name="Ashika Umanga Umagiliya" -->
<!-- email="aumanga_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Some Newbie questions" -->
<!-- id="4A496EFE.70501_at_biggjapan.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="9A3D26A6-9DB2-49A5-A611-2B76C5CD9448_at_cisco.com" -->
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
<strong>From:</strong> Ashika Umanga Umagiliya (<em>aumanga_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-29 21:48:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9765.php">rahmani: "[OMPI users] enable-mpi-threads"</a>
<li><strong>Previous message:</strong> <a href="9763.php">Eugene Loh: "Re: [OMPI users] Compile problems with 1.3.2"</a>
<li><strong>In reply to:</strong> <a href="9755.php">Jeff Squyres: "Re: [OMPI users] Some Newbie questions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9768.php">Jeff Squyres: "Re: [OMPI users] Some Newbie questions"</a>
<li><strong>Reply:</strong> <a href="9768.php">Jeff Squyres: "Re: [OMPI users] Some Newbie questions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks all for the answers,
<br>
<p>I am parallelizing tomography algorithm which takes about 5 hours using 
<br>
single processor.
<br>
I want to gain full performance and  should reduce  the computational 
<br>
time as short as possible.
<br>
I was wondering the SSh/RSH launcher could  be  a  performance  issue?(I 
<br>
am just guessing)
<br>
What  kind of software/middleware I should use to solve the 
<br>
network/communication overhead.
<br>
(different launchers ,may be Sun Grid Engine,XGrid ? ) I am runing 
<br>
Debian/Lenny and since the project is academic  I want to use OSS  ..
<br>
<p>Best Regards,
<br>
Umanga
<br>
<p><p>Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Jun 29, 2009, at 2:19 AM, vipin kumar wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Q. Since I am using TCP/Ethernet  I guess that MPI uses SSH/RSH to 
</span><br>
<span class="quotelev2">&gt;&gt; communicate between peers.
</span><br>
<span class="quotelev2">&gt;&gt; Ans. May be you are right. I don't know exactly how peers communicate 
</span><br>
<span class="quotelev2">&gt;&gt; in MPI environment, but I can say for sure that OpenMPI uses rsh/ssh 
</span><br>
<span class="quotelev2">&gt;&gt; as one of the available launchers.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Open MPI uses two different mechanisms for launching individual MPI 
</span><br>
<span class="quotelev1">&gt; processes vs. MPI communications.  rsh/ssh is one of the options that 
</span><br>
<span class="quotelev1">&gt; Open MPI can use for launching MPI processes, but we don't keep those 
</span><br>
<span class="quotelev1">&gt; channels open and don't use them for MPI communications.  Individual, 
</span><br>
<span class="quotelev1">&gt; new TCP sockets are opened for MPI_SEND / MPI_RECV (etc.) traffic.  
</span><br>
<span class="quotelev1">&gt; These sockets are not encrypted (like ssh connections would be).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Q. And for that, each peer should have the copy of the application 
</span><br>
<span class="quotelev2">&gt;&gt; right?
</span><br>
<span class="quotelev2">&gt;&gt; Ans. Absolutely correct. But If you don't want to copy binaries 
</span><br>
<span class="quotelev2">&gt;&gt; manually you should use &quot;--preload-binary&quot; option. OpenMPI will copy 
</span><br>
<span class="quotelev2">&gt;&gt; the executables in remote nodes before launching processes, and will 
</span><br>
<span class="quotelev2">&gt;&gt; delete when job gets done.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It is almost always good to use latest version. &quot;--preload-binary&quot; 
</span><br>
<span class="quotelev2">&gt;&gt; option may be absent in old versions.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It is new in the 1.3 series; it did not exist in the 1.2 series.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9764/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9765.php">rahmani: "[OMPI users] enable-mpi-threads"</a>
<li><strong>Previous message:</strong> <a href="9763.php">Eugene Loh: "Re: [OMPI users] Compile problems with 1.3.2"</a>
<li><strong>In reply to:</strong> <a href="9755.php">Jeff Squyres: "Re: [OMPI users] Some Newbie questions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9768.php">Jeff Squyres: "Re: [OMPI users] Some Newbie questions"</a>
<li><strong>Reply:</strong> <a href="9768.php">Jeff Squyres: "Re: [OMPI users] Some Newbie questions"</a>
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
