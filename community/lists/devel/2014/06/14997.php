<?
$subject_val = "[OMPI devel] v1.8 cannot compile since r31979";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 10 02:33:31 2014" -->
<!-- isoreceived="20140610063331" -->
<!-- sent="Tue, 10 Jun 2014 15:33:29 +0900" -->
<!-- isosent="20140610063329" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="[OMPI devel] v1.8 cannot compile since r31979" -->
<!-- id="CAAkFZ5s-CUMLL6ahN5LgTraVxjf5NmgwZNmGvZkYanEQdF4K2Q_at_mail.gmail.com" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI devel] v1.8 cannot compile since r31979<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-06-10 02:33:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14998.php">Ralph Castain: "Re: [OMPI devel] v1.8 cannot compile since r31979"</a>
<li><strong>Previous message:</strong> <a href="14996.php">Ralph Castain: "Re: [OMPI devel] intermittent crash in mpirun upon non zero exit status"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14998.php">Ralph Castain: "Re: [OMPI devel] v1.8 cannot compile since r31979"</a>
<li><strong>Reply:</strong> <a href="14998.php">Ralph Castain: "Re: [OMPI devel] v1.8 cannot compile since r31979"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Folks,
<br>
<p>in mca_oob_tcp_component_hop_unknown, the local variable bpr is not
<br>
defined, which prevents v1.8 compilation.
<br>
<p>/* there was a local variable called pr, it seems it was removed instead of
<br>
being renamed into bpr */
<br>
<p>the attached patch fixes this issue.
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14997/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>text/x-diff attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14997/oob.patch">oob.patch</a>
</ul>
<!-- attachment="oob.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14998.php">Ralph Castain: "Re: [OMPI devel] v1.8 cannot compile since r31979"</a>
<li><strong>Previous message:</strong> <a href="14996.php">Ralph Castain: "Re: [OMPI devel] intermittent crash in mpirun upon non zero exit status"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14998.php">Ralph Castain: "Re: [OMPI devel] v1.8 cannot compile since r31979"</a>
<li><strong>Reply:</strong> <a href="14998.php">Ralph Castain: "Re: [OMPI devel] v1.8 cannot compile since r31979"</a>
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
