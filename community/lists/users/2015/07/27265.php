<?
$subject_val = "[OMPI users] What collective implementation is used when?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul  8 16:37:18 2015" -->
<!-- isoreceived="20150708203718" -->
<!-- sent="Wed, 8 Jul 2015 16:37:17 -0400" -->
<!-- isosent="20150708203717" -->
<!-- name="Saliya Ekanayake" -->
<!-- email="esaliya_at_[hidden]" -->
<!-- subject="[OMPI users] What collective implementation is used when?" -->
<!-- id="CA+ssbKUC__h3FgFedPTiQ0OWG0taxVOqcxz8CS-j4ESG9qBObQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] What collective implementation is used when?<br>
<strong>From:</strong> Saliya Ekanayake (<em>esaliya_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-07-08 16:37:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27266.php">Åke Sandgren: "[OMPI users] Missing init of rc in modex (orte/mca/grpcomm/pmi/grpcomm_pmi_module.c), 1.8.6"</a>
<li><strong>Previous message:</strong> <a href="27264.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.8.6, CentOS 6.3, too many slots = crash"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27267.php">Gilles Gouaillardet: "Re: [OMPI users] What collective implementation is used when?"</a>
<li><strong>Reply:</strong> <a href="27267.php">Gilles Gouaillardet: "Re: [OMPI users] What collective implementation is used when?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I see the same collective operation (say allgatherv) implemented in
<br>
different ways under tuned, sm, and inter packages. I read from the
<br>
documentation [1] that these get picked up depending on the transport.
<br>
<p>Say I run 12 procs per node on 2 nodes totaling 24 procs. If I call
<br>
allGatherv collective, will it pick shared memory version to communicate
<br>
between procs in the same node and use another for inter node
<br>
communication? If so, how can I know/control this?
<br>
<p>Also, if I force the algorithm as,
<br>
<p>coll_tuned_use_dynamic_rules = 1
<br>
coll_tuned_allgatherv_algorithm = 3
<br>
<p>will it not get the advantage of shared memory?
<br>
<p>[1] <a href="https://www.open-mpi.org/faq/?category=sm">https://www.open-mpi.org/faq/?category=sm</a>
<br>
<p>Thank you,
<br>
Saliya
<br>
<p><pre>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27265/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27266.php">Åke Sandgren: "[OMPI users] Missing init of rc in modex (orte/mca/grpcomm/pmi/grpcomm_pmi_module.c), 1.8.6"</a>
<li><strong>Previous message:</strong> <a href="27264.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.8.6, CentOS 6.3, too many slots = crash"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27267.php">Gilles Gouaillardet: "Re: [OMPI users] What collective implementation is used when?"</a>
<li><strong>Reply:</strong> <a href="27267.php">Gilles Gouaillardet: "Re: [OMPI users] What collective implementation is used when?"</a>
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
