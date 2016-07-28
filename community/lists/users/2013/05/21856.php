<?
$subject_val = "Re: [OMPI users] Help diagnosing problem: not being able to run MPI	code across computers";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May  6 21:35:34 2013" -->
<!-- isoreceived="20130507013534" -->
<!-- sent="Tue, 7 May 2013 01:35:29 +0000" -->
<!-- isosent="20130507013529" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Help diagnosing problem: not being able to run MPI	code across computers" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F609FEF_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="8E74CFBC-703B-4C41-967A-B76B625BD3C7_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Help diagnosing problem: not being able to run MPI	code across computers<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-05-06 21:35:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21857.php">Angel de Vicente: "Re: [OMPI users] Help diagnosing problem: not being able to run MPI	code across computers"</a>
<li><strong>Previous message:</strong> <a href="21855.php">Jeff Squyres (jsquyres): "Re: [OMPI users] libtool *.la files with references to install dir"</a>
<li><strong>In reply to:</strong> <a href="21854.php">Ralph Castain: "Re: [OMPI users] Help diagnosing problem: not being able to run MPI code across computers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21857.php">Angel de Vicente: "Re: [OMPI users] Help diagnosing problem: not being able to run MPI	code across computers"</a>
<li><strong>Reply:</strong> <a href="21857.php">Angel de Vicente: "Re: [OMPI users] Help diagnosing problem: not being able to run MPI	code across computers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 6, 2013, at 8:52 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev2">&gt;&gt; I'm starting to think that perhaps is a firewall issue? I don't have
</span><br>
<span class="quotelev2">&gt;&gt; root access in these machines but I'll try to investigate.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Given that result, then yes - check iptables. I suspect they are running and TCP socket comm is being blocked.
</span><br>
<p><p>A simple test is to try any socket-based server app between the two machines that opens a random listening socket.  Try to telnet to it from the other machine.  If it fails to connect, then you likely have a firewalling issue.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21857.php">Angel de Vicente: "Re: [OMPI users] Help diagnosing problem: not being able to run MPI	code across computers"</a>
<li><strong>Previous message:</strong> <a href="21855.php">Jeff Squyres (jsquyres): "Re: [OMPI users] libtool *.la files with references to install dir"</a>
<li><strong>In reply to:</strong> <a href="21854.php">Ralph Castain: "Re: [OMPI users] Help diagnosing problem: not being able to run MPI code across computers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21857.php">Angel de Vicente: "Re: [OMPI users] Help diagnosing problem: not being able to run MPI	code across computers"</a>
<li><strong>Reply:</strong> <a href="21857.php">Angel de Vicente: "Re: [OMPI users] Help diagnosing problem: not being able to run MPI	code across computers"</a>
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
