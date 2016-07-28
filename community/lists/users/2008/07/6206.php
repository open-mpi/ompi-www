<?
$subject_val = "Re: [OMPI users] TCP Latency";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 30 07:37:03 2008" -->
<!-- isoreceived="20080730113703" -->
<!-- sent="Wed, 30 Jul 2008 13:38:10 +0200" -->
<!-- isosent="20080730113810" -->
<!-- name="Andy Georgi" -->
<!-- email="Andy.Georgi_at_[hidden]" -->
<!-- subject="Re: [OMPI users] TCP Latency" -->
<!-- id="489052A2.5000300_at_zih.tu-dresden.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CC86E164E4091C4D88A62DADB4AC647904CEB1FD_at_exchange06.fed.cclrc.ac.uk" -->
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
<strong>From:</strong> Andy Georgi (<em>Andy.Georgi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-30 07:38:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6207.php">James Philbin: "Re: [OMPI users] Segmentation fault: Address not mapped"</a>
<li><strong>Previous message:</strong> <a href="6205.php">Terry Dontje: "Re: [OMPI users] Communitcation between OpenMPI and ClusterTools"</a>
<li><strong>In reply to:</strong> <a href="6184.php">Kozin, I \(Igor\): "Re: [OMPI users] TCP Latency"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/08/6368.php">Steve Wise: "Re: [OMPI users] TCP Latency"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/08/6368.php">Steve Wise: "Re: [OMPI users] TCP Latency"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks again for all the answers. It seems that were was a bug in the driver in combination with
<br>
Suse Linux Enterprise Server 10. It was fixed with version 1.0.146. Now we have 12us with NPtcp and
<br>
22us with NPmpi. This is still not fast enough but for the time acceptable. I will check the
<br>
alternatives as soon as possible and look forward to OpenMPI 1.3. Then we will see what iWARP brings
<br>
;-).
<br>
<p>Best regards,
<br>
<p>Andy
<br>
<p>Kozin, I (Igor) schrieb:
<br>
<span class="quotelev2">&gt;&gt; Thanks for the fast answer. So is this latency normal for TCP
</span><br>
<span class="quotelev2">&gt;&gt; communications over MPI!? Could RDMA maybe reduce the latency? It
</span><br>
<span class="quotelev2">&gt;&gt; should work with those cards but there are still problems with OFED.
</span><br>
<span class="quotelev2">&gt;&gt; iWARP is also one of the features they offer but if it works...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi Andy,
</span><br>
<span class="quotelev1">&gt; Yes, ~40us TCP latency is normal (it can be worse too).
</span><br>
<span class="quotelev1">&gt; If you need lower MPI latency you need to look elsewhere (but it's not
</span><br>
<span class="quotelev1">&gt; going to be TCP). Check SCore, OpenMX and Gamma. SCore is more mature of
</span><br>
<span class="quotelev1">&gt; the three but OpenMX looks promising too. We get less than 15 us using
</span><br>
<span class="quotelev1">&gt; SCore MPI and Intel NICs (IMB PingPong). Of course commercial MPI
</span><br>
<span class="quotelev1">&gt; libraries offer low latency too e.g. Scali MPI.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best,
</span><br>
<span class="quotelev1">&gt; Igor
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Dresden University of Technology
</span><br>
<span class="quotelev2">&gt;&gt; Center for Information Services
</span><br>
<span class="quotelev2">&gt;&gt; and High Performance Computing (ZIH)
</span><br>
<span class="quotelev2">&gt;&gt; D-01062 Dresden
</span><br>
<span class="quotelev2">&gt;&gt; Germany
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; e-mail: Andy.Georgi_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; WWW:    <a href="http://www.tu-dresden.de/zih">http://www.tu-dresden.de/zih</a>
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I. Kozin  (i.kozin at dl.ac.uk)
</span><br>
<span class="quotelev1">&gt; Computational Science and Engineering Dept.
</span><br>
<span class="quotelev1">&gt; STFC Daresbury Laboratory 
</span><br>
<span class="quotelev1">&gt; Daresbury Science and Innovation Centre
</span><br>
<span class="quotelev1">&gt; Daresbury, Warrington, WA4 4AD 
</span><br>
<span class="quotelev1">&gt; skype: in_kozin
</span><br>
<span class="quotelev1">&gt; tel: +44 (0) 1925 603308
</span><br>
<span class="quotelev1">&gt; fax: +44 (0) 1925 603634
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cse.clrc.ac.uk/disco">http://www.cse.clrc.ac.uk/disco</a>
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><pre>
-- 
Dresden University of Technology
Center for Information Services
and High Performance Computing (ZIH)
D-01062 Dresden
Germany
Phone:    (+49) 351/463-38783
Fax:      (+49) 351/463-38245
e-mail: Andy.Georgi_at_[hidden]
WWW:    <a href="http://www.tu-dresden.de/zih">http://www.tu-dresden.de/zih</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6207.php">James Philbin: "Re: [OMPI users] Segmentation fault: Address not mapped"</a>
<li><strong>Previous message:</strong> <a href="6205.php">Terry Dontje: "Re: [OMPI users] Communitcation between OpenMPI and ClusterTools"</a>
<li><strong>In reply to:</strong> <a href="6184.php">Kozin, I \(Igor\): "Re: [OMPI users] TCP Latency"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/08/6368.php">Steve Wise: "Re: [OMPI users] TCP Latency"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/08/6368.php">Steve Wise: "Re: [OMPI users] TCP Latency"</a>
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
