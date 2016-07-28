<?
$subject_val = "[OMPI users] excluding hosts";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr  6 17:28:47 2010" -->
<!-- isoreceived="20100406212847" -->
<!-- sent="Tue, 06 Apr 2010 14:28:42 -0700" -->
<!-- isosent="20100406212842" -->
<!-- name="David Turner" -->
<!-- email="dpturner_at_[hidden]" -->
<!-- subject="[OMPI users] excluding hosts" -->
<!-- id="4BBBA78A.6090909_at_lbl.gov" -->
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
<strong>Subject:</strong> [OMPI users] excluding hosts<br>
<strong>From:</strong> David Turner (<em>dpturner_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-06 17:28:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12568.php">Oliver Geisler: "Re: [OMPI users] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<li><strong>Previous message:</strong> <a href="12566.php">Jeff Squyres: "Re: [OMPI users] Hide Abort output"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12569.php">Ralph Castain: "Re: [OMPI users] excluding hosts"</a>
<li><strong>Reply:</strong> <a href="12569.php">Ralph Castain: "Re: [OMPI users] excluding hosts"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Our cluster has a handful of login nodes, and then a bunch of
<br>
compute nodes.  OpenMPI is installed in a global file system
<br>
visible from both sets of nodes.  This means users can type
<br>
&quot;mpirun&quot; from an interactive prompt, and quickly oversubscribe
<br>
the login node.
<br>
<p>So, is there a way to explicitly exclude hosts from consideration
<br>
for mpirun?  To prevent (what is usually accidental) running
<br>
MPI apps on our login nodes?  Thanks!
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
<li><strong>Next message:</strong> <a href="12568.php">Oliver Geisler: "Re: [OMPI users] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<li><strong>Previous message:</strong> <a href="12566.php">Jeff Squyres: "Re: [OMPI users] Hide Abort output"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12569.php">Ralph Castain: "Re: [OMPI users] excluding hosts"</a>
<li><strong>Reply:</strong> <a href="12569.php">Ralph Castain: "Re: [OMPI users] excluding hosts"</a>
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
