<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Apr 19 20:18:51 2007" -->
<!-- isoreceived="20070420001851" -->
<!-- sent="Thu, 19 Apr 2007 21:18:14 -0400 (EDT)" -->
<!-- isosent="20070420011814" -->
<!-- name="pooja_at_[hidden]" -->
<!-- email="pooja_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] SOS... help needed :(" -->
<!-- id="4340.69.180.16.130.1177031894.squirrel_at_webmail.cc.gatech.edu" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="20070419233730.GA28557_at_core" -->
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
<strong>From:</strong> <a href="mailto:pooja_at_[hidden]?Subject=Re:%20[OMPI%20devel]%20SOS...%20help%20needed%20:("><em>pooja_at_[hidden]</em></a><br>
<strong>Date:</strong> 2007-04-19 21:18:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1452.php">Jeff Squyres: "Re: [OMPI devel] SOS... help needed :("</a>
<li><strong>Previous message:</strong> <a href="1450.php">Christian Leber: "Re: [OMPI devel] SOS... help needed :("</a>
<li><strong>In reply to:</strong> <a href="1450.php">Christian Leber: "Re: [OMPI devel] SOS... help needed :("</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1452.php">Jeff Squyres: "Re: [OMPI devel] SOS... help needed :("</a>
<li><strong>Reply:</strong> <a href="1452.php">Jeff Squyres: "Re: [OMPI devel] SOS... help needed :("</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Some of our clusters uses Gigabit Ethernet and Infiniband.
<br>
So we are trying to multiplex them.
<br>
<p>Thanks and Regards
<br>
Pooja
<br>
<p><p><span class="quotelev1">&gt; On Thu, Apr 19, 2007 at 06:58:37PM -0400, pooja_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am Pooja working with chaitali on this project.
</span><br>
<span class="quotelev2">&gt;&gt; The idea behind this is while running a parallelized code ,if a huge
</span><br>
<span class="quotelev2">&gt;&gt; chunks of serial computation is encountered at that time underlying
</span><br>
<span class="quotelev2">&gt;&gt; network infrastructure can be used for some other data transfer.
</span><br>
<span class="quotelev2">&gt;&gt; This increases the network utilization.
</span><br>
<span class="quotelev2">&gt;&gt; But this (non Mpi) data transfer should not keep Mpi calls blocking.
</span><br>
<span class="quotelev2">&gt;&gt; So we need to give them priorities.
</span><br>
<span class="quotelev2">&gt;&gt; Also we are trying to predict a behavior of the code (like if there are
</span><br>
<span class="quotelev2">&gt;&gt; more MPi calls coming with short interval or if they are coming after
</span><br>
<span class="quotelev2">&gt;&gt; large interval ) based on previous calls.
</span><br>
<span class="quotelev2">&gt;&gt; As a result we can make this mechanism more efficient.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ok, so you have a Cluster with Infiniband a while the network traffic is
</span><br>
<span class="quotelev1">&gt; low you want to utilize the Infiniband network for other data transfers
</span><br>
<span class="quotelev1">&gt; with a lower priority?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What does this have to do with TCP or are you using TCP over Infiniband?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards
</span><br>
<span class="quotelev1">&gt; Christian Leber
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; <a href="http://rettetdieti.vde-uni-mannheim.de/">http://rettetdieti.vde-uni-mannheim.de/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1452.php">Jeff Squyres: "Re: [OMPI devel] SOS... help needed :("</a>
<li><strong>Previous message:</strong> <a href="1450.php">Christian Leber: "Re: [OMPI devel] SOS... help needed :("</a>
<li><strong>In reply to:</strong> <a href="1450.php">Christian Leber: "Re: [OMPI devel] SOS... help needed :("</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1452.php">Jeff Squyres: "Re: [OMPI devel] SOS... help needed :("</a>
<li><strong>Reply:</strong> <a href="1452.php">Jeff Squyres: "Re: [OMPI devel] SOS... help needed :("</a>
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
