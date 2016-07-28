<?
$subject_val = "Re: [OMPI users] What collective implementation is used when?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul  9 01:33:00 2015" -->
<!-- isoreceived="20150709053300" -->
<!-- sent="Thu, 09 Jul 2015 14:32:47 +0900" -->
<!-- isosent="20150709053247" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI users] What collective implementation is used when?" -->
<!-- id="559E077F.70804_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CA+ssbKUC__h3FgFedPTiQ0OWG0taxVOqcxz8CS-j4ESG9qBObQ_at_mail.gmail.com" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-07-09 01:32:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27268.php">Ralph Castain: "Re: [OMPI users] Missing init of rc in modex (orte/mca/grpcomm/pmi/grpcomm_pmi_module.c), 1.8.6"</a>
<li><strong>Previous message:</strong> <a href="27266.php">&#195;&#133;ke Sandgren: "[OMPI users] Missing init of rc in modex (orte/mca/grpcomm/pmi/grpcomm_pmi_module.c), 1.8.6"</a>
<li><strong>In reply to:</strong> <a href="27265.php">Saliya Ekanayake: "[OMPI users] What collective implementation is used when?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27269.php">Saliya Ekanayake: "Re: [OMPI users] What collective implementation is used when?"</a>
<li><strong>Reply:</strong> <a href="27269.php">Saliya Ekanayake: "Re: [OMPI users] What collective implementation is used when?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Saliya,
<br>
<p>there are several things here :
<br>
1) which collective module is used ?
<br>
2) if the tuned collective module is used, then which algo is used ?
<br>
3) which btl is used ?
<br>
<p>First, btl is independent of the collective module.
<br>
That means that if you do a collective operation, intra node 
<br>
communications will (likely) use sm or vader btl which is optimized for 
<br>
shared memory, and openib/tcp/whatever for inter nodes communications.
<br>
<p>There is a collective module called coll_sm, and if i understand 
<br>
correctly, it works only on single node communicators, and avoid using 
<br>
any btl if possible.
<br>
<p>collective modules have different priorities and they do not necessarily 
<br>
implement all collective operations.
<br>
for example, the inter module do not implement barriers on an intra 
<br>
communicator. conversely, the tuned module do not implement barrier on 
<br>
an inter communicator.
<br>
<p>in most cases (e.g. default config + intra communicator) the tuned 
<br>
collective module is used.
<br>
each operation has several implementation and they are chosen based on 
<br>
communicator size and message size. this can be overriden by environment 
<br>
variable and config file as previously described by George.
<br>
<p>Last but not least, some collective modules (hierarch, ml, ?) implement 
<br>
hierarchical collective, which means they should be optimized for multi 
<br>
node / multi tasks per node.
<br>
that being said, ml is not production ready, and i am not sure wheter 
<br>
hierarch is actively maintained)
<br>
<p>i hope this helps
<br>
<p>Gilles
<br>
<p>On 7/9/2015 5:37 AM, Saliya Ekanayake wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I see the same collective operation (say allgatherv) implemented in 
</span><br>
<span class="quotelev1">&gt; different ways under tuned, sm, and inter packages. I read from the 
</span><br>
<span class="quotelev1">&gt; documentation [1] that these get picked up depending on the transport.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Say I run 12 procs per node on 2 nodes totaling 24 procs. If I call 
</span><br>
<span class="quotelev1">&gt; allGatherv collective, will it pick shared memory version to 
</span><br>
<span class="quotelev1">&gt; communicate between procs in the same node and use another for inter 
</span><br>
<span class="quotelev1">&gt; node communication? If so, how can I know/control this?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also, if I force the algorithm as,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; coll_tuned_use_dynamic_rules = 1
</span><br>
<span class="quotelev1">&gt; coll_tuned_allgatherv_algorithm = 3
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; will it not get the advantage of shared memory?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [1] <a href="https://www.open-mpi.org/faq/?category=sm">https://www.open-mpi.org/faq/?category=sm</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you,
</span><br>
<span class="quotelev1">&gt; Saliya
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Saliya Ekanayake
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
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/07/27265.php">http://www.open-mpi.org/community/lists/users/2015/07/27265.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27267/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27268.php">Ralph Castain: "Re: [OMPI users] Missing init of rc in modex (orte/mca/grpcomm/pmi/grpcomm_pmi_module.c), 1.8.6"</a>
<li><strong>Previous message:</strong> <a href="27266.php">&#195;&#133;ke Sandgren: "[OMPI users] Missing init of rc in modex (orte/mca/grpcomm/pmi/grpcomm_pmi_module.c), 1.8.6"</a>
<li><strong>In reply to:</strong> <a href="27265.php">Saliya Ekanayake: "[OMPI users] What collective implementation is used when?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27269.php">Saliya Ekanayake: "Re: [OMPI users] What collective implementation is used when?"</a>
<li><strong>Reply:</strong> <a href="27269.php">Saliya Ekanayake: "Re: [OMPI users] What collective implementation is used when?"</a>
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
