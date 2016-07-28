<?
$subject_val = "[OMPI devel] Fwd: [OMPI bugs] [Open MPI] #1250: Performance problem on SM";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 23 07:24:52 2008" -->
<!-- isoreceived="20080723112452" -->
<!-- sent="Wed, 23 Jul 2008 14:24:48 +0300" -->
<!-- isosent="20080723112448" -->
<!-- name="Lenny Verkhovsky" -->
<!-- email="lenny.verkhovsky_at_[hidden]" -->
<!-- subject="[OMPI devel] Fwd: [OMPI bugs] [Open MPI] #1250: Performance problem on SM" -->
<!-- id="453d39990807230424m560f69d2u93059a697ccdf215_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="453d39990807230422v2c7d939eh84aaac3274974fe8_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] Fwd: [OMPI bugs] [Open MPI] #1250: Performance problem on SM<br>
<strong>From:</strong> Lenny Verkhovsky (<em>lenny.verkhovsky_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-23 07:24:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4400.php">Jeff Squyres: "Re: [OMPI devel] ibcm private header file"</a>
<li><strong>Previous message:</strong> <a href="4398.php">Lenny Verkhovsky: "Re: [OMPI devel] [OMPI bugs] [Open MPI] #1250: Performance problem on SM"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4401.php">Jeff Squyres: "Re: [OMPI devel] Fwd: [OMPI bugs] [Open MPI] #1250: Performance problem on SM"</a>
<li><strong>Reply:</strong> <a href="4401.php">Jeff Squyres: "Re: [OMPI devel] Fwd: [OMPI bugs] [Open MPI] #1250: Performance problem on SM"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry Terry, :).
<br>
<p>---------- Forwarded message ----------
<br>
From: Lenny Verkhovsky &lt;lenny.verkhovsky_at_[hidden]&gt;
<br>
Date: Jul 23, 2008 2:22 PM
<br>
Subject: Re: [OMPI devel] [OMPI bugs] [Open MPI] #1250: Performance problem
<br>
on SM
<br>
To: Lenny Berkhovsky &lt;lenny.verkhovsky_at_[hidden]&gt;
<br>
<p><p><p>On 7/23/08, Terry Dontje &lt;Terry.Dontje_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I didn't see any attached results on the email.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --td
</span><br>
<span class="quotelev1">&gt; Lenny Verkhovsky wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I rechecked in on the same node, still no degradation,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; see results attached.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 7/22/08, *Open MPI* &lt;bugs_at_[hidden] &lt;mailto:bugs_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    #1250: Performance problem on SM
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  --------------------+-------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;    Reporter:  bosilca  |        Owner:  bosilca
</span><br>
<span class="quotelev2">&gt;&gt;        Type:  defect   |       Status:  assigned
</span><br>
<span class="quotelev2">&gt;&gt;    Priority:  blocker  |    Milestone:  Open MPI 1.3
</span><br>
<span class="quotelev2">&gt;&gt;      Version:           |   Resolution:
</span><br>
<span class="quotelev2">&gt;&gt;    Keywords:           |
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  --------------------+-------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    Comment(by tdd):
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      Hmmm, Lennyve isn't your mpirun above going across nodes and not
</span><br>
<span class="quotelev2">&gt;&gt;    on the
</span><br>
<span class="quotelev2">&gt;&gt;      same node?  I am running netpipe on a single node.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    --
</span><br>
<span class="quotelev2">&gt;&gt;    Ticket URL:
</span><br>
<span class="quotelev2">&gt;&gt;    &lt;<a href="https://svn.open-mpi.org/trac/ompi/ticket/1250#comment:20">https://svn.open-mpi.org/trac/ompi/ticket/1250#comment:20</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    Open MPI &lt;<a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;    bugs mailing list
</span><br>
<span class="quotelev2">&gt;&gt;    bugs_at_[hidden] &lt;mailto:bugs_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    <a href="http://www.open-mpi.org/mailman/listinfo.cgi/bugs">http://www.open-mpi.org/mailman/listinfo.cgi/bugs</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------------------------------------------------
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-4399/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-4399/NPmpi.log">NPmpi.log</a>
</ul>
<!-- attachment="NPmpi.log" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4400.php">Jeff Squyres: "Re: [OMPI devel] ibcm private header file"</a>
<li><strong>Previous message:</strong> <a href="4398.php">Lenny Verkhovsky: "Re: [OMPI devel] [OMPI bugs] [Open MPI] #1250: Performance problem on SM"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4401.php">Jeff Squyres: "Re: [OMPI devel] Fwd: [OMPI bugs] [Open MPI] #1250: Performance problem on SM"</a>
<li><strong>Reply:</strong> <a href="4401.php">Jeff Squyres: "Re: [OMPI devel] Fwd: [OMPI bugs] [Open MPI] #1250: Performance problem on SM"</a>
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
