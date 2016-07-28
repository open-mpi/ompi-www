<?
$subject_val = "[OMPI users] BLCR + Qlogic infiniband";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 28 06:14:37 2012" -->
<!-- isoreceived="20121128111437" -->
<!-- sent="Wed, 28 Nov 2012 11:14:33 +0000" -->
<!-- isosent="20121128111433" -->
<!-- name="William Hay" -->
<!-- email="w.hay_at_[hidden]" -->
<!-- subject="[OMPI users] BLCR + Qlogic infiniband" -->
<!-- id="CAOEAUJ7rYWHKWdfOgq6wqLuzr8TP=ZqWqDFRhRo4GT8wOqYm4w_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] BLCR + Qlogic infiniband<br>
<strong>From:</strong> William Hay (<em>w.hay_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-28 06:14:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20786.php">Yevgeny Kliteynik: "Re: [OMPI users] CentOS 6.3 &amp; OpenMPI 1.6.3"</a>
<li><strong>Previous message:</strong> <a href="20784.php">John Hearns: "Re: [OMPI users] Infiniband errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20828.php">Josh Hursey: "Re: [OMPI users] BLCR + Qlogic infiniband"</a>
<li><strong>Reply:</strong> <a href="20828.php">Josh Hursey: "Re: [OMPI users] BLCR + Qlogic infiniband"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/12/20872.php">William Hay: "Re: [OMPI users] BLCR + Qlogic infiniband"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm trying to build openmpi with support for BLCR plus qlogic infiniband
<br>
(plus grid engine).  Everything seems to compile OK and checkpoints are
<br>
taken but whenever I try to restore a checkpoint I get the following error:
<br>
- do_mmap(&lt;file&gt;, 00002aaab18c7000, 0000000000001000, ...) failed:
<br>
ffffffffffffffea
<br>
- mmap failed: /dev/ipath
<br>
- thaw_threads returned error, aborting. -22
<br>
- thaw_threads returned error, aborting. -22
<br>
Restart failed: Invalid argument
<br>
<p>This occurs whether I specify psm or openib as the btl.
<br>
<p>This looks like the sort of thing I would expect to be handled by the blcr
<br>
supporting code in openmpi.  So I guess I have a couple ofquestions.
<br>
1)Are Infiniband and BLCR support in openmpi compatible?
<br>
2)Are there any special tricks necessary to get them working together.
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20785/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20786.php">Yevgeny Kliteynik: "Re: [OMPI users] CentOS 6.3 &amp; OpenMPI 1.6.3"</a>
<li><strong>Previous message:</strong> <a href="20784.php">John Hearns: "Re: [OMPI users] Infiniband errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20828.php">Josh Hursey: "Re: [OMPI users] BLCR + Qlogic infiniband"</a>
<li><strong>Reply:</strong> <a href="20828.php">Josh Hursey: "Re: [OMPI users] BLCR + Qlogic infiniband"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/12/20872.php">William Hay: "Re: [OMPI users] BLCR + Qlogic infiniband"</a>
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
