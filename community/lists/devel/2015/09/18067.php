<?
$subject_val = "Re: [OMPI devel] regression running mpi applications with dvm";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 17 14:48:26 2015" -->
<!-- isoreceived="20150917184826" -->
<!-- sent="Thu, 17 Sep 2015 11:48:24 -0700" -->
<!-- isosent="20150917184824" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] regression running mpi applications with dvm" -->
<!-- id="CAMD57oeKqAw-O62=or4Gw8hMJjbDh4Wi+b-=DParJot_PuCdWA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="42F8577D-53DB-4B14-B0D8-4269679F6543_at_rutgers.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] regression running mpi applications with dvm<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-17 14:48:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18068.php">Mark Santcroos: "Re: [OMPI devel] regression running mpi applications with dvm"</a>
<li><strong>Previous message:</strong> <a href="18066.php">Mark Santcroos: "Re: [OMPI devel] regression running mpi applications with dvm"</a>
<li><strong>In reply to:</strong> <a href="18066.php">Mark Santcroos: "Re: [OMPI devel] regression running mpi applications with dvm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18068.php">Mark Santcroos: "Re: [OMPI devel] regression running mpi applications with dvm"</a>
<li><strong>Reply:</strong> <a href="18068.php">Mark Santcroos: "Re: [OMPI devel] regression running mpi applications with dvm"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Might not - there has been a very large amount of change over the last few
<br>
months, and I confess I haven't been checking the DVM regularly. So let me
<br>
take a step back and look at that code.
<br>
<p>I'll also include the extensions you requested on the other email - I
<br>
didn't forget them, just somewhat overwhelmed lately
<br>
<p><p>On Thu, Sep 17, 2015 at 11:39 AM, Mark Santcroos &lt;mark.santcroos_at_[hidden]
<br>
<span class="quotelev1">&gt; wrote:
</span><br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; On 17 Sep 2015, at 20:34 , Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Ouch - this is on current master HEAD?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yep!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; I'm on travel right now, but I'll be back Fri evening and can look at it
</span><br>
<span class="quotelev1">&gt; this weekend. Probably something silly that needs to be fixed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Obviously I didn't check every single version between March and now, but
</span><br>
<span class="quotelev1">&gt; its safe to assume that it didn't work in between either I guess.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Thu, Sep 17, 2015 at 11:30 AM, Mark Santcroos &lt;
</span><br>
<span class="quotelev1">&gt; mark.santcroos_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hi (Ralph),
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Over the last months I have been focussing on exec throughput, and not
</span><br>
<span class="quotelev1">&gt; so much on the application payload (read: mainly using /bin/sleep ;-)
</span><br>
<span class="quotelev2">&gt; &gt; As things are stabilising now, I returned my attention to &quot;real&quot;
</span><br>
<span class="quotelev1">&gt; applications.
</span><br>
<span class="quotelev2">&gt; &gt; To discover that launching MPI applications (build with the same Open
</span><br>
<span class="quotelev1">&gt; MPI version) within a DVM doesn't work anymore (see error below).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I've been doing a binary search, but that turned out to be not so
</span><br>
<span class="quotelev1">&gt; trivial because of other problems in the window of the change.
</span><br>
<span class="quotelev2">&gt; &gt; So far I've narrowed it down to:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 64ec498 - mar 5 - works on my laptop (but not on the Crays)
</span><br>
<span class="quotelev2">&gt; &gt; b67b361 - mar 28 - works once per DVM launch on my laptop, but
</span><br>
<span class="quotelev1">&gt; consecutive orte-submits get a connect error
</span><br>
<span class="quotelev2">&gt; &gt; b209c9e - March 30 - same MPI_Init issue as HEAD
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Going further into mid-March I run into build issues with verb, runtime
</span><br>
<span class="quotelev1">&gt; issues with default binding complaining about missing libnumactl, runtime
</span><br>
<span class="quotelev1">&gt; tcp oob errors, etc.
</span><br>
<span class="quotelev2">&gt; &gt; So I don't know whether the binary search will yield much more than I
</span><br>
<span class="quotelev1">&gt; was able to dig up now.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; What can I do to get closer to debugging the actual issue?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks!
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Mark
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; OMPI_PREFIX=/Users/mark/proj/openmpi/installed/HEAD
</span><br>
<span class="quotelev2">&gt; &gt; OMPI_MCA_orte_hnp_uri=723386368.0;usock;tcp://192.168.0.103:56672
</span><br>
<span class="quotelev2">&gt; &gt; OMPI_MCA_ess=tool
</span><br>
<span class="quotelev2">&gt; &gt; [netbook:70703] Job [11038,3] has launched
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; It looks like MPI_INIT failed for some reason; your parallel process is
</span><br>
<span class="quotelev2">&gt; &gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev2">&gt; &gt; fail during MPI_INIT; some of which are due to configuration or
</span><br>
<span class="quotelev1">&gt; environment
</span><br>
<span class="quotelev2">&gt; &gt; problems.  This failure appears to be an internal failure; here's some
</span><br>
<span class="quotelev2">&gt; &gt; additional information (which may only be relevant to an Open MPI
</span><br>
<span class="quotelev2">&gt; &gt; developer):
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   ompi_mpi_init: ompi_rte_init failed
</span><br>
<span class="quotelev2">&gt; &gt;   --&gt; Returned &quot;(null)&quot; (-43) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev2">&gt; &gt; *** on a NULL communicator
</span><br>
<span class="quotelev2">&gt; &gt; *** MPI_ERRORS_ARE_FATAL (processes in this communicator will now abort,
</span><br>
<span class="quotelev2">&gt; &gt; ***    and potentially your MPI job)
</span><br>
<span class="quotelev2">&gt; &gt; [netbook:70704] Local abort before MPI_INIT completed completed
</span><br>
<span class="quotelev1">&gt; successfully, but am not able to aggregate error messages, and not able to
</span><br>
<span class="quotelev1">&gt; guarantee that all other processes were killed!
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/09/18064.php">http://www.open-mpi.org/community/lists/devel/2015/09/18064.php</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/09/18065.php">http://www.open-mpi.org/community/lists/devel/2015/09/18065.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/09/18066.php">http://www.open-mpi.org/community/lists/devel/2015/09/18066.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18067/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18068.php">Mark Santcroos: "Re: [OMPI devel] regression running mpi applications with dvm"</a>
<li><strong>Previous message:</strong> <a href="18066.php">Mark Santcroos: "Re: [OMPI devel] regression running mpi applications with dvm"</a>
<li><strong>In reply to:</strong> <a href="18066.php">Mark Santcroos: "Re: [OMPI devel] regression running mpi applications with dvm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18068.php">Mark Santcroos: "Re: [OMPI devel] regression running mpi applications with dvm"</a>
<li><strong>Reply:</strong> <a href="18068.php">Mark Santcroos: "Re: [OMPI devel] regression running mpi applications with dvm"</a>
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
