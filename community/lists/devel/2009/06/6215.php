<?
$subject_val = "Re: [OMPI devel] Hang in collectives involving shared memory";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 10 13:51:04 2009" -->
<!-- isoreceived="20090610175104" -->
<!-- sent="Wed, 10 Jun 2009 11:50:58 -0600" -->
<!-- isosent="20090610175058" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Hang in collectives involving shared memory" -->
<!-- id="71d2d8cc0906101050q43bfdef2k1b7153f48f0600a2_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="Pine.LNX.4.64.0906101919260.2717_at_kenzo.iwr.uni-heidelberg.de" -->
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
<strong>Date:</strong> 2009-06-10 13:50:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6216.php">Ralph Castain: "Re: [OMPI devel] Hang in collectives involving shared memory"</a>
<li><strong>Previous message:</strong> <a href="6214.php">Bogdan Costescu: "Re: [OMPI devel] Hang in collectives involving shared memory"</a>
<li><strong>In reply to:</strong> <a href="6214.php">Bogdan Costescu: "Re: [OMPI devel] Hang in collectives involving shared memory"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6218.php">Bogdan Costescu: "Re: [OMPI devel] Hang in collectives involving shared memory"</a>
<li><strong>Reply:</strong> <a href="6218.php">Bogdan Costescu: "Re: [OMPI devel] Hang in collectives involving shared memory"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I appreciate the input and have captured it in the ticket. Since this
<br>
appears to be a NUMA-related issue, the lack of NUMA support in your setup
<br>
makes the test difficult to interpret.
<br>
<p>I agree, though, that this is likely something peculiar to our particular
<br>
setup. Of primary concern is that it might be related to the relatively old
<br>
kernel (2.6.18) on these machines. There has been a lot of change since that
<br>
kernel was released, and some of those changes may be relevant to this
<br>
problem.
<br>
<p>Unfortunately, upgrading the kernel will take persuasive argument. We are
<br>
going to try and run the reproducers on machines with more modern kernels to
<br>
see if we get different behavior.
<br>
<p>Please feel free to follow this further on the ticket.
<br>
<p>Thanks again!
<br>
Ralph
<br>
<p><p>On Wed, Jun 10, 2009 at 11:29 AM, Bogdan Costescu &lt;
<br>
Bogdan.Costescu_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Wed, 10 Jun 2009, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Meantime, I have filed a bunch of data on this in ticket #1944, so perhaps
</span><br>
<span class="quotelev2">&gt;&gt; you might take a glance at that and offer some thoughts?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="https://svn.open-mpi.org/trac/ompi/ticket/1944">https://svn.open-mpi.org/trac/ompi/ticket/1944</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I wasn't able to reproduce this. I have run with the following setup:
</span><br>
<span class="quotelev1">&gt; - OS is Scientific Linux 5.1 with a custom compiled kernel based on
</span><br>
<span class="quotelev1">&gt; 2.6.22.19, but (due to circumstances that I can't control):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; checking if MCA component maffinity:libnuma can compile... no
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - Intel compiler 10.1
</span><br>
<span class="quotelev1">&gt; - OpenMPI 1.3.2
</span><br>
<span class="quotelev1">&gt; - nodes have 2 CPUs of type E5440 (quad core), 16GB RAM and a ConnectX IB
</span><br>
<span class="quotelev1">&gt; DDR
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've used the platform file that you have provided, but took out the
</span><br>
<span class="quotelev1">&gt; references to PanFS and fixed the paths. I've also used the MCA file that
</span><br>
<span class="quotelev1">&gt; you have provided.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have run with nodes=1:ppn=8 and nodes=2:ppn=8 and the test finished
</span><br>
<span class="quotelev1">&gt; successfully with m=50 several times. This, together with the earlier post
</span><br>
<span class="quotelev1">&gt; also describing a negative result, points to a problem related to your
</span><br>
<span class="quotelev1">&gt; particular setup...
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-6215/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6216.php">Ralph Castain: "Re: [OMPI devel] Hang in collectives involving shared memory"</a>
<li><strong>Previous message:</strong> <a href="6214.php">Bogdan Costescu: "Re: [OMPI devel] Hang in collectives involving shared memory"</a>
<li><strong>In reply to:</strong> <a href="6214.php">Bogdan Costescu: "Re: [OMPI devel] Hang in collectives involving shared memory"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6218.php">Bogdan Costescu: "Re: [OMPI devel] Hang in collectives involving shared memory"</a>
<li><strong>Reply:</strong> <a href="6218.php">Bogdan Costescu: "Re: [OMPI devel] Hang in collectives involving shared memory"</a>
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
