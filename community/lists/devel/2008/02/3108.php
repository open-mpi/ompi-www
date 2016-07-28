<?
$subject_val = "Re: [OMPI devel] vt compiler warnings and errors";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb  1 04:10:45 2008" -->
<!-- isoreceived="20080201091045" -->
<!-- sent="Fri, 1 Feb 2008 10:12:22 +0100" -->
<!-- isosent="20080201091222" -->
<!-- name="Andreas Kn&#252;pfer" -->
<!-- email="andreas.knuepfer_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] vt compiler warnings and errors" -->
<!-- id="200802011012.26125.andreas.knuepfer_at_tu-dresden.de" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="8D296FD4-C2C1-4D17-97BB-CB86526A7F74_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] vt compiler warnings and errors<br>
<strong>From:</strong> Andreas Kn&#252;pfer (<em>andreas.knuepfer_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-01 04:12:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3109.php">Ralf Wildenhues: "Re: [OMPI devel] vt compiler warnings and errors"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/01/3107.php">Ralph Castain: "Re: [OMPI devel] orte_ns_base_select failed: returned value -1 instead of ORTE_SUCCESS"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/01/3106.php">Jeff Squyres: "Re: [OMPI devel] vt compiler warnings and errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3109.php">Ralf Wildenhues: "Re: [OMPI devel] vt compiler warnings and errors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi everybody,
<br>
<p>now this is an interesting effect. 
<br>
<p>After a fresh checkout all files have the actual time, haven't they? Is the 
<br>
timestamp explicitly saved somewhere?
<br>
<p>Could it be, that this is newer than Tim's local time yesterday? Maybe the 
<br>
system time is not set to UTC or something like this? If so, then it should 
<br>
be possible to reproduce this today. Could you give it a try, Tim?
<br>
<p>Another cause could be slight differences in files' times because one is 
<br>
checked out earlier than the other. However, OTF's configure ran before 
<br>
during the first global configure. Therefore, all files' timestamps should be 
<br>
correct after this. So I don't believe in this explanation.
<br>
<p>What do you think?
<br>
<p><p><pre>
-- 
Dipl. Math. Andreas Knuepfer, 
Center for Information Services and 
High Performance Computing (ZIH), TU Dresden, 
Willersbau A114, Zellescher Weg 12, 01062 Dresden
phone +49-351-463-38323, fax +49-351-463-37773

</pre>
<hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-3108/signature.asc_">This is a digitally signed message part.</a>
</ul>
<!-- attachment="signature.asc_" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3109.php">Ralf Wildenhues: "Re: [OMPI devel] vt compiler warnings and errors"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/01/3107.php">Ralph Castain: "Re: [OMPI devel] orte_ns_base_select failed: returned value -1 instead of ORTE_SUCCESS"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/01/3106.php">Jeff Squyres: "Re: [OMPI devel] vt compiler warnings and errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3109.php">Ralf Wildenhues: "Re: [OMPI devel] vt compiler warnings and errors"</a>
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
