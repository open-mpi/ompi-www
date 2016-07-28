<?
$subject_val = "Re: [OMPI users] TCP Latency";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 29 08:27:38 2008" -->
<!-- isoreceived="20080729122738" -->
<!-- sent="Tue, 29 Jul 2008 13:27:32 +0100" -->
<!-- isosent="20080729122732" -->
<!-- name="Kozin, I \(Igor\)" -->
<!-- email="i.kozin_at_[hidden]" -->
<!-- subject="Re: [OMPI users] TCP Latency" -->
<!-- id="CC86E164E4091C4D88A62DADB4AC647904CEB1FD_at_exchange06.fed.cclrc.ac.uk" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> Kozin, I \(Igor\) (<em>i.kozin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-29 08:27:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6185.php">Mark Dixon: "Re: [OMPI users] Open MPI unable to find threading support for PGI or Sun Studio"</a>
<li><strong>Previous message:</strong> <a href="6183.php">Jeff Squyres: "Re: [OMPI users] Open MPI unable to find threading support for PGI or Sun Studio"</a>
<li><strong>In reply to:</strong> <a href="6177.php">Andy Georgi: "Re: [OMPI users] TCP Latency"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6206.php">Andy Georgi: "Re: [OMPI users] TCP Latency"</a>
<li><strong>Reply:</strong> <a href="6206.php">Andy Georgi: "Re: [OMPI users] TCP Latency"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; Thanks for the fast answer. So is this latency normal for TCP
</span><br>
<span class="quotelev1">&gt; communications over MPI!? Could RDMA maybe reduce the latency? It
</span><br>
<span class="quotelev1">&gt; should work with those cards but there are still problems with OFED.
</span><br>
<span class="quotelev1">&gt; iWARP is also one of the features they offer but if it works...
</span><br>
<p>Hi Andy,
<br>
Yes, ~40us TCP latency is normal (it can be worse too).
<br>
If you need lower MPI latency you need to look elsewhere (but it's not
<br>
going to be TCP). Check SCore, OpenMX and Gamma. SCore is more mature of
<br>
the three but OpenMX looks promising too. We get less than 15 us using
<br>
SCore MPI and Intel NICs (IMB PingPong). Of course commercial MPI
<br>
libraries offer low latency too e.g. Scali MPI.
<br>
<p>Best,
<br>
Igor
<br>
<p><span class="quotelev1">&gt; 
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
<p>I. Kozin  (i.kozin at dl.ac.uk)
<br>
Computational Science and Engineering Dept.
<br>
STFC Daresbury Laboratory 
<br>
Daresbury Science and Innovation Centre
<br>
Daresbury, Warrington, WA4 4AD 
<br>
skype: in_kozin
<br>
tel: +44 (0) 1925 603308
<br>
fax: +44 (0) 1925 603634
<br>
<a href="http://www.cse.clrc.ac.uk/disco">http://www.cse.clrc.ac.uk/disco</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6185.php">Mark Dixon: "Re: [OMPI users] Open MPI unable to find threading support for PGI or Sun Studio"</a>
<li><strong>Previous message:</strong> <a href="6183.php">Jeff Squyres: "Re: [OMPI users] Open MPI unable to find threading support for PGI or Sun Studio"</a>
<li><strong>In reply to:</strong> <a href="6177.php">Andy Georgi: "Re: [OMPI users] TCP Latency"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6206.php">Andy Georgi: "Re: [OMPI users] TCP Latency"</a>
<li><strong>Reply:</strong> <a href="6206.php">Andy Georgi: "Re: [OMPI users] TCP Latency"</a>
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
