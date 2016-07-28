<?
$subject_val = "Re: [OMPI users] TCP Latency";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 29 06:01:55 2008" -->
<!-- isoreceived="20080729100155" -->
<!-- sent="Tue, 29 Jul 2008 12:01:39 +0200" -->
<!-- isosent="20080729100139" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] TCP Latency" -->
<!-- id="350E3691-B460-4C08-9911-BD6F253E4EAB_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20080729105201.vvafm5slc00ssgg8_at_mail.zih.tu-dresden.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] TCP Latency<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-29 06:01:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6179.php">Mark Dixon: "Re: [OMPI users] Open MPI unable to find threading support for PGI or Sun Studio"</a>
<li><strong>Previous message:</strong> <a href="6177.php">Andy Georgi: "Re: [OMPI users] TCP Latency"</a>
<li><strong>In reply to:</strong> <a href="6177.php">Andy Georgi: "Re: [OMPI users] TCP Latency"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6182.php">Jeff Squyres: "Re: [OMPI users] TCP Latency"</a>
<li><strong>Reply:</strong> <a href="6182.php">Jeff Squyres: "Re: [OMPI users] TCP Latency"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I just want to make sure that I correctly understand your statement.  
<br>
You're saying that running NetPIPE (NPtcp) directly over TCP give you  
<br>
a latency of 12us, but running NetPIPE (NPmpi) over Open MPI bring  
<br>
this latency up to 45us ?
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Jul 29, 2008, at 10:52 AM, Andy Georgi wrote:
<br>
<p><span class="quotelev1">&gt; Zitat von Jeff Squyres &lt;jsquyres_at_[hidden]&gt;:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jul 28, 2008, at 2:53 PM, Andy Georgi wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; we use Chelsio S320E-CXA adapters  (<a href="http://www.chelsio.com/assetlibrary/products/S320E%20Product%20Brief%20080424.pdf">http://www.chelsio.com/assetlibrary/products/S320E%20Product%20Brief%20080424.pdf</a> 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; )
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in one of our clusters. After tuning the kernel i measured the ping
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pong latency via NetPIPE and got ~12us which is pretty good for  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; TCP i
</span><br>
<span class="quotelev3">&gt;&gt;&gt; think. So i wrote a simple ping-pong-kernel and was really terrified
</span><br>
<span class="quotelev3">&gt;&gt;&gt; about the ~45us i got with OpenMPI 1.2.6. Are there any hints how we
</span><br>
<span class="quotelev3">&gt;&gt;&gt; can reduce the MPI latency? To increase the bandwidth we already set
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the buffer sizes but we couldn't find a parameter which can be
</span><br>
<span class="quotelev3">&gt;&gt;&gt; relevant for the latency. Every hint is  welcome.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The upcoming Open MPI v1.3 series will support iWARP, which gives  
</span><br>
<span class="quotelev2">&gt;&gt; much
</span><br>
<span class="quotelev2">&gt;&gt; better latency than that.  I don't know all the Chelsio models  
</span><br>
<span class="quotelev2">&gt;&gt; offhand;
</span><br>
<span class="quotelev2">&gt;&gt; are those iWARP-capable cards?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for the fast answer. So is this latency normal for TCP
</span><br>
<span class="quotelev1">&gt; communications over MPI!? Could RDMA maybe reduce the latency? It
</span><br>
<span class="quotelev1">&gt; should work with those cards but there are still problems with OFED.
</span><br>
<span class="quotelev1">&gt; iWARP is also one of the features they offer but if it works...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Dresden University of Technology
</span><br>
<span class="quotelev1">&gt; Center for Information Services
</span><br>
<span class="quotelev1">&gt; and High Performance Computing (ZIH)
</span><br>
<span class="quotelev1">&gt; D-01062 Dresden
</span><br>
<span class="quotelev1">&gt; Germany
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; e-mail: Andy.Georgi_at_[hidden]
</span><br>
<span class="quotelev1">&gt; WWW:    <a href="http://www.tu-dresden.de/zih">http://www.tu-dresden.de/zih</a>
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
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6178/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6179.php">Mark Dixon: "Re: [OMPI users] Open MPI unable to find threading support for PGI or Sun Studio"</a>
<li><strong>Previous message:</strong> <a href="6177.php">Andy Georgi: "Re: [OMPI users] TCP Latency"</a>
<li><strong>In reply to:</strong> <a href="6177.php">Andy Georgi: "Re: [OMPI users] TCP Latency"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6182.php">Jeff Squyres: "Re: [OMPI users] TCP Latency"</a>
<li><strong>Reply:</strong> <a href="6182.php">Jeff Squyres: "Re: [OMPI users] TCP Latency"</a>
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
