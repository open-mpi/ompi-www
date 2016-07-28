<?
$subject_val = "Re: [OMPI users] Why communication performance change with binding	PEs?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 23 08:34:56 2016" -->
<!-- isoreceived="20160623123456" -->
<!-- sent="Thu, 23 Jun 2016 12:34:54 +0000" -->
<!-- isosent="20160623123454" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Why communication performance change with binding	PEs?" -->
<!-- id="5FD5179F-DC08-4204-8440-9F367A3AF2DD_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CA+ssbKUH9Jbm12WtQFe5tfpTUjSqG-Qc=Bk5G7UjKV3fyePrFw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Why communication performance change with binding	PEs?<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-23 08:34:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29533.php">Joshua Ladd: "Re: [OMPI users] Fw: OpenSHMEM Runtime Error"</a>
<li><strong>Previous message:</strong> <a href="29531.php">Saliya Ekanayake: "Re: [OMPI users] Why communication performance change with binding PEs?"</a>
<li><strong>In reply to:</strong> <a href="29531.php">Saliya Ekanayake: "Re: [OMPI users] Why communication performance change with binding PEs?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 23, 2016, at 8:20 AM, Saliya Ekanayake &lt;esaliya_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've got a quick question. Besides theses time sharing constraints, does number of cores has any significance to MPI's communication decisions?
</span><br>
<p>Open MPI doesn't use the number of cores available to it in any calculations / algorithm selection in the MPI layer.
<br>
<p>The locality of the running thread may have an impact on performance (and/or algorithm selection), though.  E.g., if a thread is accidentally accessing NUMA-remote memory.
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
<li><strong>Next message:</strong> <a href="29533.php">Joshua Ladd: "Re: [OMPI users] Fw: OpenSHMEM Runtime Error"</a>
<li><strong>Previous message:</strong> <a href="29531.php">Saliya Ekanayake: "Re: [OMPI users] Why communication performance change with binding PEs?"</a>
<li><strong>In reply to:</strong> <a href="29531.php">Saliya Ekanayake: "Re: [OMPI users] Why communication performance change with binding PEs?"</a>
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
