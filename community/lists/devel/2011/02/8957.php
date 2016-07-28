<?
$subject_val = "Re: [OMPI devel] OMPI 1.4.3 hangs in gather";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb  3 09:52:28 2011" -->
<!-- isoreceived="20110203145228" -->
<!-- sent="Thu, 3 Feb 2011 08:52:20 -0600" -->
<!-- isosent="20110203145220" -->
<!-- name="Brad Benton" -->
<!-- email="bradford.benton_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OMPI 1.4.3 hangs in gather" -->
<!-- id="AANLkTik5UOkAkeS=a6Bq+bKVc8H+jNqNkG1FU11jfzMc_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AANLkTi=jhsj7ybn4wN6Sqwb9ry9o2bkTcHk3xO3aMRAF_at_mail.gmail.com" -->
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
<strong>From:</strong> Brad Benton (<em>bradford.benton_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-03 09:52:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8958.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24356"</a>
<li><strong>Previous message:</strong> <a href="8956.php">Jeff Squyres: "Re: [OMPI devel] ompi-dmtcp configure options"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/01/8928.php">Doron Shoham: "Re: [OMPI devel] OMPI 1.4.3 hangs in gather"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/01/8864.php">Nysal Jan: "Re: [OMPI devel] OMPI 1.4.3 hangs in gather"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
What IP interfaces are configured on the cluster?  In particular, are there
<br>
IPoIB interfaces that are configured?  If you use the dynamic connection
<br>
method but restrict either the number or type of IP interfaces to be used
<br>
via oob_tcp_if_{include,exclude}, do you still see the problem?
<br>
<p>--brad
<br>
<p><p>On Wed, Jan 26, 2011 at 12:14 AM, Doron Shoham &lt;doron.ompi_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; using the flag --mca mpi_preconnect_mpi seems to solved the issue with the
</span><br>
<span class="quotelev1">&gt; oob connection manager.
</span><br>
<span class="quotelev1">&gt; This solution is not scalable but it looks more and more like a connection
</span><br>
<span class="quotelev1">&gt; establishment problem.
</span><br>
<span class="quotelev1">&gt; I'm still trying to figure out what is the root cause of this and how to
</span><br>
<span class="quotelev1">&gt; solve it.
</span><br>
<span class="quotelev1">&gt; Any ideas will be more then welcome.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Doron
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Jan 18, 2011 at 3:29 PM, Terry Dontje &lt;terry.dontje_at_[hidden]&gt;wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  On 01/18/2011 07:48 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; IBCM is broken and disabled (has been for a long time).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Did you mean RDMACM?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; No I think I meant OMPI oob.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; sorry,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; [image: Oracle]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Terry D. Dontje | Principal Software Engineer
</span><br>
<span class="quotelev2">&gt;&gt; Developer Tools Engineering | +1.781.442.2631
</span><br>
<span class="quotelev2">&gt;&gt; Oracle *- Performance Technologies*
</span><br>
<span class="quotelev2">&gt;&gt; 95 Network Drive, Burlington, MA 01803
</span><br>
<span class="quotelev2">&gt;&gt; Email terry.dontje_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-8957/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8958.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24356"</a>
<li><strong>Previous message:</strong> <a href="8956.php">Jeff Squyres: "Re: [OMPI devel] ompi-dmtcp configure options"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/01/8928.php">Doron Shoham: "Re: [OMPI devel] OMPI 1.4.3 hangs in gather"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/01/8864.php">Nysal Jan: "Re: [OMPI devel] OMPI 1.4.3 hangs in gather"</a>
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
