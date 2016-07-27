<?
$subject_val = "[MTT devel] race condition in SCM module";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 10 14:36:24 2011" -->
<!-- isoreceived="20110210193624" -->
<!-- sent="Thu, 10 Feb 2011 21:36:18 +0200" -->
<!-- isosent="20110210193618" -->
<!-- name="Mike Dubman" -->
<!-- email="mike.ompi_at_[hidden]" -->
<!-- subject="[MTT devel] race condition in SCM module" -->
<!-- id="AANLkTim_47HFM1h8+uJZH76T_FWQSuGRoXYv0Ws+6f7L_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [MTT devel] race condition in SCM module<br>
<strong>From:</strong> Mike Dubman (<em>mike.ompi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-10 14:36:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0555.php">Jeff Squyres: "Re: [MTT devel] race condition in SCM module"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2011/01/0553.php">Mike Dubman: "Re: [MTT devel] mtt eval problem on new perl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0555.php">Jeff Squyres: "Re: [MTT devel] race condition in SCM module"</a>
<li><strong>Reply:</strong> <a href="0555.php">Jeff Squyres: "Re: [MTT devel] race condition in SCM module"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi guys,
<br>
<p>There is a race condition in SCM, Mercurial module when used from MPI GET
<br>
phase:
<br>
<p>- scm_post_copy hook can be started before MPI GET completed copy of fetched
<br>
tree into install location.
<br>
- This leads to mtt failure, because post_copy starts too early (tree was
<br>
not copied yet) and fails.
<br>
- adding sleeps to post_copy hook - helps.
<br>
- does copytree used during mtt get phase have async behave?
<br>
<p><p><p>---------------- from the mtt -d -v output ---------------------
<br>
<p>copytree running post_copy command:
<br>
...
<br>
...
<br>
<p><span class="quotelev2">&gt;&gt; copytree finished copying
</span><br>
----------------------------------------------------------------------------
<br>
<p><p>Please suggest.
<br>
<p>Thanks
<br>
<p>M
<br>
<p><p>&nbsp;&lt;<a href="http://en.wikipedia.org/w/index.php?search=INSTALL%20">http://en.wikipedia.org/w/index.php?search=INSTALL%20</a>&gt;
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/mtt-devel/att-0554/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0555.php">Jeff Squyres: "Re: [MTT devel] race condition in SCM module"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2011/01/0553.php">Mike Dubman: "Re: [MTT devel] mtt eval problem on new perl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0555.php">Jeff Squyres: "Re: [MTT devel] race condition in SCM module"</a>
<li><strong>Reply:</strong> <a href="0555.php">Jeff Squyres: "Re: [MTT devel] race condition in SCM module"</a>
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
