<?
$subject_val = "Re: [OMPI users] What collective implementation is used when?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul  9 16:11:32 2015" -->
<!-- isoreceived="20150709201132" -->
<!-- sent="Thu, 9 Jul 2015 16:11:31 -0400" -->
<!-- isosent="20150709201131" -->
<!-- name="Saliya Ekanayake" -->
<!-- email="esaliya_at_[hidden]" -->
<!-- subject="Re: [OMPI users] What collective implementation is used when?" -->
<!-- id="CA+ssbKUznsHp7JqUyvjOyqegs98sn1pZSurYQSPrpySdEh-GXQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="559E077F.70804_at_rist.or.jp" -->
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
<strong>Subject:</strong> Re: [OMPI users] What collective implementation is used when?<br>
<strong>From:</strong> Saliya Ekanayake (<em>esaliya_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-07-09 16:11:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27270.php">Nils Smeds: "[OMPI users] binding/mapping using command line"</a>
<li><strong>Previous message:</strong> <a href="27268.php">Ralph Castain: "Re: [OMPI users] Missing init of rc in modex (orte/mca/grpcomm/pmi/grpcomm_pmi_module.c), 1.8.6"</a>
<li><strong>In reply to:</strong> <a href="27267.php">Gilles Gouaillardet: "Re: [OMPI users] What collective implementation is used when?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thank you Gilles.
<br>
<p>Saliya
<br>
<p>On Thu, Jul 9, 2015 at 1:32 AM, Gilles Gouaillardet &lt;gilles_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt;  Saliya,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; there are several things here :
</span><br>
<span class="quotelev1">&gt; 1) which collective module is used ?
</span><br>
<span class="quotelev1">&gt; 2) if the tuned collective module is used, then which algo is used ?
</span><br>
<span class="quotelev1">&gt; 3) which btl is used ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; First, btl is independent of the collective module.
</span><br>
<span class="quotelev1">&gt; That means that if you do a collective operation, intra node
</span><br>
<span class="quotelev1">&gt; communications will (likely) use sm or vader btl which is optimized for
</span><br>
<span class="quotelev1">&gt; shared memory, and openib/tcp/whatever for inter nodes communications.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There is a collective module called coll_sm, and if i understand
</span><br>
<span class="quotelev1">&gt; correctly, it works only on single node communicators, and avoid using any
</span><br>
<span class="quotelev1">&gt; btl if possible.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; collective modules have different priorities and they do not necessarily
</span><br>
<span class="quotelev1">&gt; implement all collective operations.
</span><br>
<span class="quotelev1">&gt; for example, the inter module do not implement barriers on an intra
</span><br>
<span class="quotelev1">&gt; communicator. conversely, the tuned module do not implement barrier on an
</span><br>
<span class="quotelev1">&gt; inter communicator.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; in most cases (e.g. default config + intra communicator) the tuned
</span><br>
<span class="quotelev1">&gt; collective module is used.
</span><br>
<span class="quotelev1">&gt; each operation has several implementation and they are chosen based on
</span><br>
<span class="quotelev1">&gt; communicator size and message size. this can be overriden by environment
</span><br>
<span class="quotelev1">&gt; variable and config file as previously described by George.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Last but not least, some collective modules (hierarch, ml, ?) implement
</span><br>
<span class="quotelev1">&gt; hierarchical collective, which means they should be optimized for multi
</span><br>
<span class="quotelev1">&gt; node / multi tasks per node.
</span><br>
<span class="quotelev1">&gt; that being said, ml is not production ready, and i am not sure wheter
</span><br>
<span class="quotelev1">&gt; hierarch is actively maintained)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; i hope this helps
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 7/9/2015 5:37 AM, Saliya Ekanayake wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  I see the same collective operation (say allgatherv) implemented in
</span><br>
<span class="quotelev1">&gt; different ways under tuned, sm, and inter packages. I read from the
</span><br>
<span class="quotelev1">&gt; documentation [1] that these get picked up depending on the transport.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Say I run 12 procs per node on 2 nodes totaling 24 procs. If I call
</span><br>
<span class="quotelev1">&gt; allGatherv collective, will it pick shared memory version to communicate
</span><br>
<span class="quotelev1">&gt; between procs in the same node and use another for inter node
</span><br>
<span class="quotelev1">&gt; communication? If so, how can I know/control this?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Also, if I force the algorithm as,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  coll_tuned_use_dynamic_rules = 1
</span><br>
<span class="quotelev1">&gt; coll_tuned_allgatherv_algorithm = 3
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  will it not get the advantage of shared memory?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  [1] <a href="https://www.open-mpi.org/faq/?category=sm">https://www.open-mpi.org/faq/?category=sm</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Thank you,
</span><br>
<span class="quotelev1">&gt; Saliya
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  --
</span><br>
<span class="quotelev1">&gt;    Saliya Ekanayake
</span><br>
<span class="quotelev1">&gt; Ph.D. Candidate | Research Assistant
</span><br>
<span class="quotelev1">&gt; School of Informatics and Computing | Digital Science Center
</span><br>
<span class="quotelev1">&gt; Indiana University, Bloomington
</span><br>
<span class="quotelev1">&gt; Cell 812-391-4914
</span><br>
<span class="quotelev1">&gt; <a href="http://saliya.org">http://saliya.org</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing listusers_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/07/27265.php">http://www.open-mpi.org/community/lists/users/2015/07/27265.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/07/27267.php">http://www.open-mpi.org/community/lists/users/2015/07/27267.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Saliya Ekanayake
Ph.D. Candidate | Research Assistant
School of Informatics and Computing | Digital Science Center
Indiana University, Bloomington
Cell 812-391-4914
<a href="http://saliya.org">http://saliya.org</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27269/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27270.php">Nils Smeds: "[OMPI users] binding/mapping using command line"</a>
<li><strong>Previous message:</strong> <a href="27268.php">Ralph Castain: "Re: [OMPI users] Missing init of rc in modex (orte/mca/grpcomm/pmi/grpcomm_pmi_module.c), 1.8.6"</a>
<li><strong>In reply to:</strong> <a href="27267.php">Gilles Gouaillardet: "Re: [OMPI users] What collective implementation is used when?"</a>
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
