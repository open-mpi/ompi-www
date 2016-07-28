<?
$subject_val = "[OMPI devel] mpirun fails with the latest git pull";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 26 16:48:52 2016" -->
<!-- isoreceived="20160526204852" -->
<!-- sent="Thu, 26 May 2016 16:48:52 -0400" -->
<!-- isosent="20160526204852" -->
<!-- name="dpchoudh ." -->
<!-- email="dpchoudh_at_[hidden]" -->
<!-- subject="[OMPI devel] mpirun fails with the latest git pull" -->
<!-- id="CAHXxYDhyjSF7zOZkHN6rpV5G2Og5jFuAEJ7-SNnhA5WoCatn_w_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] mpirun fails with the latest git pull<br>
<strong>From:</strong> dpchoudh . (<em>dpchoudh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-26 16:48:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19039.php">Ralph Castain: "Re: [OMPI devel] mpirun fails with the latest git pull"</a>
<li><strong>Previous message:</strong> <a href="19037.php">Ralph Castain: "[OMPI devel] 1.10.3rc status"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19039.php">Ralph Castain: "Re: [OMPI devel] mpirun fails with the latest git pull"</a>
<li><strong>Reply:</strong> <a href="19039.php">Ralph Castain: "Re: [OMPI devel] mpirun fails with the latest git pull"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello all
<br>
<p>With a git pull of roughly 4 PM EDT (US), that had a .m4 file (something to
<br>
do with MXM) in the change set, mpirun does not work anymore. The failure
<br>
is like this:
<br>
<p>[durga_at_b-2 ~]$ sudo /usr/local/bin/mpirun --allow-run-as-root -np 2
<br>
-hostfile ~/hostfile -mca btl lf,self -mca btl_base_verbose 100 ./mpitest
<br>
[b-2:16666] [[2440,0],0] ORTE_ERROR_LOG: Not found in file ess_hnp_module.c
<br>
at line 619
<br>
--------------------------------------------------------------------------
<br>
It looks like orte_init failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during orte_init; some of which are due to configuration or
<br>
environment problems.  This failure appears to be an internal failure;
<br>
here's some additional information (which may only be relevant to an
<br>
Open MPI developer):
<br>
<p>&nbsp;&nbsp;opal_pmix_base_select failed
<br>
&nbsp;&nbsp;--&gt; Returned value Not found (-13) instead of ORTE_SUCCESS
<br>
--------------------------------------------------------------------------
<br>
<p>Doing a make clean &amp;&amp; make &amp;&amp; sudo make install did not help. Should I
<br>
re-run the autogen.pl script and start from scratch?
<br>
<p>Thanks
<br>
Durga
<br>
<p>We learn from history that we never learn from history.
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-19038/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19039.php">Ralph Castain: "Re: [OMPI devel] mpirun fails with the latest git pull"</a>
<li><strong>Previous message:</strong> <a href="19037.php">Ralph Castain: "[OMPI devel] 1.10.3rc status"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19039.php">Ralph Castain: "Re: [OMPI devel] mpirun fails with the latest git pull"</a>
<li><strong>Reply:</strong> <a href="19039.php">Ralph Castain: "Re: [OMPI devel] mpirun fails with the latest git pull"</a>
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
