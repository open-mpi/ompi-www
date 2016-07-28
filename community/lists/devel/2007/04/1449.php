<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Apr 19 17:59:14 2007" -->
<!-- isoreceived="20070419215914" -->
<!-- sent="Thu, 19 Apr 2007 18:58:37 -0400 (EDT)" -->
<!-- isosent="20070419225837" -->
<!-- name="pooja_at_[hidden]" -->
<!-- email="pooja_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] SOS... help needed :(" -->
<!-- id="3941.69.180.16.130.1177023517.squirrel_at_webmail.cc.gatech.edu" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="20070419214231.GA24974_at_core" -->
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
<strong>Date:</strong> 2007-04-19 18:58:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1450.php">Christian Leber: "Re: [OMPI devel] SOS... help needed :("</a>
<li><strong>Previous message:</strong> <a href="1448.php">Christian Leber: "Re: [OMPI devel] SOS... help needed :("</a>
<li><strong>In reply to:</strong> <a href="1448.php">Christian Leber: "Re: [OMPI devel] SOS... help needed :("</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1450.php">Christian Leber: "Re: [OMPI devel] SOS... help needed :("</a>
<li><strong>Reply:</strong> <a href="1450.php">Christian Leber: "Re: [OMPI devel] SOS... help needed :("</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
I am Pooja working with chaitali on this project.
<br>
The idea behind this is while running a parallelized code ,if a huge
<br>
chunks of serial computation is encountered at that time underlying
<br>
network infrastructure can be used for some other data transfer.
<br>
This increases the network utilization.
<br>
But this (non Mpi) data transfer should not keep Mpi calls blocking.
<br>
So we need to give them priorities.
<br>
Also we are trying to predict a behavior of the code (like if there are
<br>
more MPi calls coming with short interval or if they are coming after
<br>
large interval ) based on previous calls.
<br>
As a result we can make this mechanism more efficient.
<br>
<p>Thanks and regards
<br>
Pooja
<br>
<p><p><p><p><span class="quotelev1">&gt; On Sun, Apr 15, 2007 at 10:25:06PM -0400, chaitali dherange wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    schedule MPI and non MPI calls... giving more priority to the MPI
</span><br>
<span class="quotelev2">&gt;&gt; calls
</span><br>
<span class="quotelev2">&gt;&gt;    over the non
</span><br>
<span class="quotelev2">&gt;&gt;    MPI ones.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What is the idea behind this and what advantages are expected?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="1450.php">Christian Leber: "Re: [OMPI devel] SOS... help needed :("</a>
<li><strong>Previous message:</strong> <a href="1448.php">Christian Leber: "Re: [OMPI devel] SOS... help needed :("</a>
<li><strong>In reply to:</strong> <a href="1448.php">Christian Leber: "Re: [OMPI devel] SOS... help needed :("</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1450.php">Christian Leber: "Re: [OMPI devel] SOS... help needed :("</a>
<li><strong>Reply:</strong> <a href="1450.php">Christian Leber: "Re: [OMPI devel] SOS... help needed :("</a>
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
