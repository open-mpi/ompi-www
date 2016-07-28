<?
$subject_val = "Re: [OMPI users] TCP Latency";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Aug 17 10:53:27 2008" -->
<!-- isoreceived="20080817145327" -->
<!-- sent="Sun, 17 Aug 2008 09:53:14 -0500" -->
<!-- isosent="20080817145314" -->
<!-- name="Steve Wise" -->
<!-- email="swise_at_[hidden]" -->
<!-- subject="Re: [OMPI users] TCP Latency" -->
<!-- id="48A83B5A.3040402_at_opengridcomputing.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="489052A2.5000300_at_zih.tu-dresden.de" -->
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
<strong>From:</strong> Steve Wise (<em>swise_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-17 10:53:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6369.php">Steve Wise: "Re: [OMPI users] TCP Bandwidth"</a>
<li><strong>Previous message:</strong> <a href="6367.php">Andy Georgi: "[OMPI users] TCP Bandwidth"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/07/6206.php">Andy Georgi: "Re: [OMPI users] TCP Latency"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
With OpenMPI 1.3 / iWARP you should get around 8us latency using mpi 
<br>
pingpong tests.
<br>
<p>&nbsp;
<br>
Andy Georgi wrote:
<br>
<span class="quotelev1">&gt; Thanks again for all the answers. It seems that were was a bug in the 
</span><br>
<span class="quotelev1">&gt; driver in combination with
</span><br>
<span class="quotelev1">&gt; Suse Linux Enterprise Server 10. It was fixed with version 1.0.146. 
</span><br>
<span class="quotelev1">&gt; Now we have 12us with NPtcp and
</span><br>
<span class="quotelev1">&gt; 22us with NPmpi. This is still not fast enough but for the time 
</span><br>
<span class="quotelev1">&gt; acceptable. I will check the
</span><br>
<span class="quotelev1">&gt; alternatives as soon as possible and look forward to OpenMPI 1.3. Then 
</span><br>
<span class="quotelev1">&gt; we will see what iWARP brings
</span><br>
<span class="quotelev1">&gt; ;-).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Andy
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Kozin, I (Igor) schrieb:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks for the fast answer. So is this latency normal for TCP
</span><br>
<span class="quotelev3">&gt;&gt;&gt; communications over MPI!? Could RDMA maybe reduce the latency? It
</span><br>
<span class="quotelev3">&gt;&gt;&gt; should work with those cards but there are still problems with OFED.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; iWARP is also one of the features they offer but if it works...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi Andy,
</span><br>
<span class="quotelev2">&gt;&gt; Yes, ~40us TCP latency is normal (it can be worse too).
</span><br>
<span class="quotelev2">&gt;&gt; If you need lower MPI latency you need to look elsewhere (but it's not
</span><br>
<span class="quotelev2">&gt;&gt; going to be TCP). Check SCore, OpenMX and Gamma. SCore is more mature of
</span><br>
<span class="quotelev2">&gt;&gt; the three but OpenMX looks promising too. We get less than 15 us using
</span><br>
<span class="quotelev2">&gt;&gt; SCore MPI and Intel NICs (IMB PingPong). Of course commercial MPI
</span><br>
<span class="quotelev2">&gt;&gt; libraries offer low latency too e.g. Scali MPI.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Best,
</span><br>
<span class="quotelev2">&gt;&gt; Igor
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Dresden University of Technology
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Center for Information Services
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and High Performance Computing (ZIH)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; D-01062 Dresden
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Germany
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; e-mail: Andy.Georgi_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; WWW:    <a href="http://www.tu-dresden.de/zih">http://www.tu-dresden.de/zih</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I. Kozin  (i.kozin at dl.ac.uk)
</span><br>
<span class="quotelev2">&gt;&gt; Computational Science and Engineering Dept.
</span><br>
<span class="quotelev2">&gt;&gt; STFC Daresbury Laboratory Daresbury Science and Innovation Centre
</span><br>
<span class="quotelev2">&gt;&gt; Daresbury, Warrington, WA4 4AD skype: in_kozin
</span><br>
<span class="quotelev2">&gt;&gt; tel: +44 (0) 1925 603308
</span><br>
<span class="quotelev2">&gt;&gt; fax: +44 (0) 1925 603634
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.cse.clrc.ac.uk/disco">http://www.cse.clrc.ac.uk/disco</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6369.php">Steve Wise: "Re: [OMPI users] TCP Bandwidth"</a>
<li><strong>Previous message:</strong> <a href="6367.php">Andy Georgi: "[OMPI users] TCP Bandwidth"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/07/6206.php">Andy Georgi: "Re: [OMPI users] TCP Latency"</a>
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
