<?
$subject_val = "Re: [OMPI devel] OMPI 1.4.3 hangs in gather";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 26 01:14:31 2011" -->
<!-- isoreceived="20110126061431" -->
<!-- sent="Wed, 26 Jan 2011 08:14:24 +0200" -->
<!-- isosent="20110126061424" -->
<!-- name="Doron Shoham" -->
<!-- email="doron.ompi_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OMPI 1.4.3 hangs in gather" -->
<!-- id="AANLkTi=jhsj7ybn4wN6Sqwb9ry9o2bkTcHk3xO3aMRAF_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4D3595CB.80703_at_oracle.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] OMPI 1.4.3 hangs in gather<br>
<strong>From:</strong> Doron Shoham (<em>doron.ompi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-26 01:14:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8929.php">Hugo Meyer: "Re: [OMPI devel] OMPI-MIGRATE error"</a>
<li><strong>Previous message:</strong> <a href="8927.php">Nathan Hjelm: "Re: [OMPI devel] dummy component warnings"</a>
<li><strong>In reply to:</strong> <a href="8886.php">Terry Dontje: "Re: [OMPI devel] OMPI 1.4.3 hangs in gather"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/02/8957.php">Brad Benton: "Re: [OMPI devel] OMPI 1.4.3 hangs in gather"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/02/8957.php">Brad Benton: "Re: [OMPI devel] OMPI 1.4.3 hangs in gather"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
using the flag --mca mpi_preconnect_mpi seems to solved the issue with the
<br>
oob connection manager.
<br>
This solution is not scalable but it looks more and more like a connection
<br>
establishment problem.
<br>
I'm still trying to figure out what is the root cause of this and how to
<br>
solve it.
<br>
Any ideas will be more then welcome.
<br>
<p><p>Thanks,
<br>
Doron
<br>
<p>On Tue, Jan 18, 2011 at 3:29 PM, Terry Dontje &lt;terry.dontje_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt;  On 01/18/2011 07:48 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; IBCM is broken and disabled (has been for a long time).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Did you mean RDMACM?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; No I think I meant OMPI oob.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; sorry,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; [image: Oracle]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Terry D. Dontje | Principal Software Engineer
</span><br>
<span class="quotelev1">&gt; Developer Tools Engineering | +1.781.442.2631
</span><br>
<span class="quotelev1">&gt; Oracle *- Performance Technologies*
</span><br>
<span class="quotelev1">&gt; 95 Network Drive, Burlington, MA 01803
</span><br>
<span class="quotelev1">&gt; Email terry.dontje_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-8928/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8929.php">Hugo Meyer: "Re: [OMPI devel] OMPI-MIGRATE error"</a>
<li><strong>Previous message:</strong> <a href="8927.php">Nathan Hjelm: "Re: [OMPI devel] dummy component warnings"</a>
<li><strong>In reply to:</strong> <a href="8886.php">Terry Dontje: "Re: [OMPI devel] OMPI 1.4.3 hangs in gather"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/02/8957.php">Brad Benton: "Re: [OMPI devel] OMPI 1.4.3 hangs in gather"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/02/8957.php">Brad Benton: "Re: [OMPI devel] OMPI 1.4.3 hangs in gather"</a>
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
