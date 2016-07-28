<?
$subject_val = "[OMPI devel] Open MPI collectives algorithm selection";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 19 22:05:51 2015" -->
<!-- isoreceived="20150520020551" -->
<!-- sent="Wed, 20 May 2015 11:05:51 +0900" -->
<!-- isosent="20150520020551" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="[OMPI devel] Open MPI collectives algorithm selection" -->
<!-- id="555BEBFF.8040104_at_rist.or.jp" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI devel] Open MPI collectives algorithm selection<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-05-19 22:05:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17426.php">Howard Pritchard: "Re: [OMPI devel] Open MPI collectives algorithm selection"</a>
<li><strong>Previous message:</strong> <a href="17424.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Proposal: update Open MPI's version number	and	release process"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17426.php">Howard Pritchard: "Re: [OMPI devel] Open MPI collectives algorithm selection"</a>
<li><strong>Reply:</strong> <a href="17426.php">Howard Pritchard: "Re: [OMPI devel] Open MPI collectives algorithm selection"</a>
<li><strong>Reply:</strong> <a href="17432.php">Edgar Gabriel: "Re: [OMPI devel] Open MPI collectives algorithm selection"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Folks,
<br>
<p>this is a follow-up of a discussion on the user ML started at 
<br>
<a href="http://www.open-mpi.org/community/lists/users/2015/05/26882.php">http://www.open-mpi.org/community/lists/users/2015/05/26882.php</a>
<br>
<p>1) it turns out the dynamic rule filename must be &quot;sorted&quot; :
<br>
- rules must be sorted by communicator size
<br>
- within a given communicator size, rules must be sorted by message size
<br>
<p>if not, some rules are silently skipped, which is counter intuitive imho.
<br>
<p><p>2) the algo picks the rule with the higher communicator size less or 
<br>
equal than the current communicator size (same thing for message size).
<br>
The exception is if there are no such rule, the first rule is selected.
<br>
for example, if the config file has rules for comm size 4, 8 and 16
<br>
comm size 4 =&gt; pick rule for comm size 4
<br>
comm size 5 =&gt; pick rule for comm 4
<br>
comm size 8 =&gt; pick rule for comm 8
<br>
*but*
<br>
comm size 2 =&gt; pick rule for comm size 4 (!)
<br>
imho, this is also counter intuitive.
<br>
i would have expected no rule is picked and the default behaviour is used.
<br>
<p>Same thing applies for message sizes.
<br>
<p>Is this the intended design ?
<br>
<p>1) can be solved by inserting some qsort calls after parsing the config 
<br>
file.
<br>
2) can be solved by returning a NULL rule instead of the first rule ( or 
<br>
by automatically inserting a rule for comm size 0 (and message size 0) 
<br>
if no such rule is present in the config file).
<br>
<p>any thoughts ?
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17426.php">Howard Pritchard: "Re: [OMPI devel] Open MPI collectives algorithm selection"</a>
<li><strong>Previous message:</strong> <a href="17424.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Proposal: update Open MPI's version number	and	release process"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17426.php">Howard Pritchard: "Re: [OMPI devel] Open MPI collectives algorithm selection"</a>
<li><strong>Reply:</strong> <a href="17426.php">Howard Pritchard: "Re: [OMPI devel] Open MPI collectives algorithm selection"</a>
<li><strong>Reply:</strong> <a href="17432.php">Edgar Gabriel: "Re: [OMPI devel] Open MPI collectives algorithm selection"</a>
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
