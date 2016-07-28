<?
$subject_val = "Re: [OMPI devel] Hang in collectives involving shared memory";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 10 13:29:51 2009" -->
<!-- isoreceived="20090610172951" -->
<!-- sent="Wed, 10 Jun 2009 19:29:44 +0200 (CEST)" -->
<!-- isosent="20090610172944" -->
<!-- name="Bogdan Costescu" -->
<!-- email="Bogdan.Costescu_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Hang in collectives involving shared memory" -->
<!-- id="Pine.LNX.4.64.0906101919260.2717_at_kenzo.iwr.uni-heidelberg.de" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="71d2d8cc0906100807j7c4b75dek946b48493af95fdb_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Hang in collectives involving shared memory<br>
<strong>From:</strong> Bogdan Costescu (<em>Bogdan.Costescu_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-10 13:29:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6215.php">Ralph Castain: "Re: [OMPI devel] Hang in collectives involving shared memory"</a>
<li><strong>Previous message:</strong> <a href="6213.php">Sylvain Jeaugey: "Re: [OMPI devel] Hang in collectives involving shared memory"</a>
<li><strong>In reply to:</strong> <a href="6211.php">Ralph Castain: "Re: [OMPI devel] Hang in collectives involving shared memory"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6215.php">Ralph Castain: "Re: [OMPI devel] Hang in collectives involving shared memory"</a>
<li><strong>Reply:</strong> <a href="6215.php">Ralph Castain: "Re: [OMPI devel] Hang in collectives involving shared memory"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, 10 Jun 2009, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; Meantime, I have filed a bunch of data on this in ticket #1944, so perhaps
</span><br>
<span class="quotelev1">&gt; you might take a glance at that and offer some thoughts?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="https://svn.open-mpi.org/trac/ompi/ticket/1944">https://svn.open-mpi.org/trac/ompi/ticket/1944</a>
</span><br>
<p>I wasn't able to reproduce this. I have run with the following setup:
<br>
- OS is Scientific Linux 5.1 with a custom compiled kernel based on 
<br>
2.6.22.19, but (due to circumstances that I can't control):
<br>
<p>checking if MCA component maffinity:libnuma can compile... no
<br>
<p>- Intel compiler 10.1
<br>
- OpenMPI 1.3.2
<br>
- nodes have 2 CPUs of type E5440 (quad core), 16GB RAM and a ConnectX 
<br>
IB DDR
<br>
<p>I've used the platform file that you have provided, but took out the 
<br>
references to PanFS and fixed the paths. I've also used the MCA file 
<br>
that you have provided.
<br>
<p>I have run with nodes=1:ppn=8 and nodes=2:ppn=8 and the test finished 
<br>
successfully with m=50 several times. This, together with the earlier 
<br>
post also describing a negative result, points to a problem related to 
<br>
your particular setup...
<br>
<p><pre>
-- 
Bogdan Costescu
IWR, University of Heidelberg, INF 368, D-69120 Heidelberg, Germany
Phone: +49 6221 54 8240, Fax: +49 6221 54 8850
E-mail: bogdan.costescu_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6215.php">Ralph Castain: "Re: [OMPI devel] Hang in collectives involving shared memory"</a>
<li><strong>Previous message:</strong> <a href="6213.php">Sylvain Jeaugey: "Re: [OMPI devel] Hang in collectives involving shared memory"</a>
<li><strong>In reply to:</strong> <a href="6211.php">Ralph Castain: "Re: [OMPI devel] Hang in collectives involving shared memory"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6215.php">Ralph Castain: "Re: [OMPI devel] Hang in collectives involving shared memory"</a>
<li><strong>Reply:</strong> <a href="6215.php">Ralph Castain: "Re: [OMPI devel] Hang in collectives involving shared memory"</a>
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
