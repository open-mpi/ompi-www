<?
$subject_val = "[OMPI devel] Change in communication between process (RMAPS)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 28 07:03:49 2010" -->
<!-- isoreceived="20101228120349" -->
<!-- sent="Tue, 28 Dec 2010 13:03:44 +0100" -->
<!-- isosent="20101228120344" -->
<!-- name="Hugo Meyer" -->
<!-- email="meyer.hugo_at_[hidden]" -->
<!-- subject="[OMPI devel] Change in communication between process (RMAPS)" -->
<!-- id="AANLkTimAW+MJ+yfg8wKDm91RFPA9vyqS6hXW=sTJSv6V_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] Change in communication between process (RMAPS)<br>
<strong>From:</strong> Hugo Meyer (<em>meyer.hugo_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-28 07:03:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8822.php">Joshua Hursey: "Re: [OMPI devel] Some questions about checkpoint/restart (16)"</a>
<li><strong>Previous message:</strong> <a href="8820.php">Takayuki Seki: "Re: [OMPI devel] Some questions about checkpoint/restart (16)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/01/8839.php">Jeff Squyres: "Re: [OMPI devel] Change in communication between process (RMAPS)"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/01/8839.php">Jeff Squyres: "Re: [OMPI devel] Change in communication between process (RMAPS)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello to all.
<br>
<p>I'm new in the forum, at least is the first time i write.
<br>
<p>I'm working with open mpi and I would do a little experiment, i will try to
<br>
pass one process by another process.
<br>
<p>For example, assuming that there are 2 processes that are communicating say
<br>
rank 1 and 2. And there is a process of rank 3, I would like the rank 3 (it
<br>
could be assumed that this node is marked down at the initial hostfile) took
<br>
&nbsp;the place of rank 2, and rank 1 still think that he is communicating with
<br>
&nbsp;rank 2 when in fact is communicating with the rank 3.
<br>
<p>I guess I'll have to modify tables as orte_job_map_t and orte_proc_t, but I
<br>
wanted to know if someone already has experience doing something similar,
<br>
and can guide me at least.
<br>
<p>The communication between processes, in principle, would be irrelevant, so i
<br>
will not need to use checkpoints / restarts for now.
<br>
<p>Greetings
<br>
<p>Hugo Meyer
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-8821/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8822.php">Joshua Hursey: "Re: [OMPI devel] Some questions about checkpoint/restart (16)"</a>
<li><strong>Previous message:</strong> <a href="8820.php">Takayuki Seki: "Re: [OMPI devel] Some questions about checkpoint/restart (16)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/01/8839.php">Jeff Squyres: "Re: [OMPI devel] Change in communication between process (RMAPS)"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/01/8839.php">Jeff Squyres: "Re: [OMPI devel] Change in communication between process (RMAPS)"</a>
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
