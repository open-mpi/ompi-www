<?
$subject_val = "[OMPI users] limiting tasks/ranks";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  1 19:22:00 2012" -->
<!-- isoreceived="20121101232200" -->
<!-- sent="Thu, 01 Nov 2012 16:21:52 -0700" -->
<!-- isosent="20121101232152" -->
<!-- name="David Turner" -->
<!-- email="dpturner_at_[hidden]" -->
<!-- subject="[OMPI users] limiting tasks/ranks" -->
<!-- id="50930410.2070600_at_lbl.gov" -->
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
<strong>Subject:</strong> [OMPI users] limiting tasks/ranks<br>
<strong>From:</strong> David Turner (<em>dpturner_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-01 19:21:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20618.php">Ralph Castain: "Re: [OMPI users] limiting tasks/ranks"</a>
<li><strong>Previous message:</strong> <a href="20616.php">Richard Shaw: "Re: [OMPI users] 2 GB limitation of MPI_File_write_all"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20618.php">Ralph Castain: "Re: [OMPI users] limiting tasks/ranks"</a>
<li><strong>Reply:</strong> <a href="20618.php">Ralph Castain: "Re: [OMPI users] limiting tasks/ranks"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Is there a way to limit the number of tasks started by mpirun?
<br>
For example, on our 48-core SMP, I'd like to limit MPI jobs to
<br>
a maximum of 12 tasks.  That is, &quot;mpirun -np 16 ...&quot; would
<br>
return an error.  Note that this is a strictly interactive
<br>
system; no batch environment available.
<br>
<p>I've just quickly scanned the MCA parameters:
<br>
<p>ompi_info --param all all
<br>
<p>and couldn't find the answer to my question.
<br>
<p>Thanks!
<br>
<p><pre>
-- 
Best regards,
David Turner
User Services Group        email: dpturner_at_[hidden]
NERSC Division             phone: (510) 486-4027
Lawrence Berkeley Lab        fax: (510) 486-4316
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20618.php">Ralph Castain: "Re: [OMPI users] limiting tasks/ranks"</a>
<li><strong>Previous message:</strong> <a href="20616.php">Richard Shaw: "Re: [OMPI users] 2 GB limitation of MPI_File_write_all"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20618.php">Ralph Castain: "Re: [OMPI users] limiting tasks/ranks"</a>
<li><strong>Reply:</strong> <a href="20618.php">Ralph Castain: "Re: [OMPI users] limiting tasks/ranks"</a>
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
