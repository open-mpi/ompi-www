<?
$subject_val = "Re: [OMPI devel] Hang in collectives involving shared memory";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 10 15:15:42 2009" -->
<!-- isoreceived="20090610191542" -->
<!-- sent="Wed, 10 Jun 2009 13:15:35 -0600" -->
<!-- isosent="20090610191535" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Hang in collectives involving shared memory" -->
<!-- id="71d2d8cc0906101215l5124eebaw3454524adeb72eba_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="Pine.LNX.4.64.0906102110180.12475_at_kenzo.iwr.uni-heidelberg.de" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-10 15:15:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6220.php">Terry Dontje: "[OMPI devel] Pathscale C++"</a>
<li><strong>Previous message:</strong> <a href="6218.php">Bogdan Costescu: "Re: [OMPI devel] Hang in collectives involving shared memory"</a>
<li><strong>In reply to:</strong> <a href="6218.php">Bogdan Costescu: "Re: [OMPI devel] Hang in collectives involving shared memory"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6240.php">Ashley Pittman: "Re: [OMPI devel] Hang in collectives involving shared memory"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Well, it would - except then -all- the procs would run real slow! :-)
<br>
<p>Still, might be a reasonable diagnostic step to try...will give it a shot.
<br>
<p>On Wed, Jun 10, 2009 at 1:12 PM, Bogdan Costescu &lt;
<br>
Bogdan.Costescu_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Wed, 10 Jun 2009, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  I appreciate the input and have captured it in the ticket. Since this
</span><br>
<span class="quotelev2">&gt;&gt; appears to be a NUMA-related issue, the lack of NUMA support in your setup
</span><br>
<span class="quotelev2">&gt;&gt; makes the test difficult to interpret.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Based on this reasoning, disabling libnuma support in your OpenMPI build
</span><br>
<span class="quotelev1">&gt; should also solve the problem, or do I interpret things the wrong way ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Bogdan Costescu
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; IWR, University of Heidelberg, INF 368, D-69120 Heidelberg, Germany
</span><br>
<span class="quotelev1">&gt; Phone: +49 6221 54 8240, Fax: +49 6221 54 8850
</span><br>
<span class="quotelev1">&gt; E-mail: bogdan.costescu_at_[hidden]
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-6219/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6220.php">Terry Dontje: "[OMPI devel] Pathscale C++"</a>
<li><strong>Previous message:</strong> <a href="6218.php">Bogdan Costescu: "Re: [OMPI devel] Hang in collectives involving shared memory"</a>
<li><strong>In reply to:</strong> <a href="6218.php">Bogdan Costescu: "Re: [OMPI devel] Hang in collectives involving shared memory"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6240.php">Ashley Pittman: "Re: [OMPI devel] Hang in collectives involving shared memory"</a>
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
