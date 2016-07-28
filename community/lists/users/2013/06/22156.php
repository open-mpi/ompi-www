<?
$subject_val = "Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 19 17:52:51 2013" -->
<!-- isoreceived="20130619215251" -->
<!-- sent="Wed, 19 Jun 2013 23:52:36 +0200" -->
<!-- isosent="20130619215236" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1" -->
<!-- id="A00079D3-94FC-4B4C-9C94-A135F6AE67A7_at_staff.uni-marburg.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAJGE3zWw=B_6XGKe-mn0GOz8yppOv6W3cbbqW=zC1VLtx1_WEg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1<br>
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-06-19 17:52:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22157.php">Ralph Castain: "Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1"</a>
<li><strong>Previous message:</strong> <a href="22155.php">Jeff Squyres (jsquyres): "Re: [OMPI users] error with openmpi on snow leopard"</a>
<li><strong>In reply to:</strong> <a href="22151.php">Riccardo Murri: "Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22159.php">Riccardo Murri: "Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1"</a>
<li><strong>Reply:</strong> <a href="22159.php">Riccardo Murri: "Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Am 19.06.2013 um 22:14 schrieb Riccardo Murri:
<br>
<p><span class="quotelev1">&gt; On 19 June 2013 20:42, Reuti &lt;reuti_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Am 19.06.2013 um 19:43 schrieb Riccardo Murri &lt;riccardo.murri_at_[hidden]&gt;:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 19 June 2013 16:01, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; How is OMPI picking up this hostfile? It isn't being specified on the cmd line - are you running under some resource manager?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Via the environment variable `OMPI_MCA_orte_default_hostfile`.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; We're running under SGE, but disable the OMPI/SGE integration (rather
</span><br>
<p>BTW: Which version of SGE?
<br>
<p><p><span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; It's disabled by default, you would have to activate it during `configure` of Open MPI.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It's enabled but (IIRC) the problem is that OpenMPI detects the
</span><br>
<span class="quotelev1">&gt; presence of SGE from some environment variable
</span><br>
<p>Correct.
<br>
<p><p><span class="quotelev1">&gt; , which, in our version
</span><br>
<span class="quotelev1">&gt; of SGE, simply isn't there.
</span><br>
<p>Do you use a custom &quot;starter_method&quot; in the queue definition? Does a submitted script with:
<br>
<p>#!/bin/sh
<br>
env
<br>
<p>list at least some of the SGE* environment variables - or none at all?
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev1">&gt; I can dig up the details if you're interested.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Riccardo
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22157.php">Ralph Castain: "Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1"</a>
<li><strong>Previous message:</strong> <a href="22155.php">Jeff Squyres (jsquyres): "Re: [OMPI users] error with openmpi on snow leopard"</a>
<li><strong>In reply to:</strong> <a href="22151.php">Riccardo Murri: "Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22159.php">Riccardo Murri: "Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1"</a>
<li><strong>Reply:</strong> <a href="22159.php">Riccardo Murri: "Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1"</a>
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
