<?
$subject_val = "[OMPI users] disabling LSF integration at runtime";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 10 11:49:12 2009" -->
<!-- isoreceived="20091110164912" -->
<!-- sent="Tue, 10 Nov 2009 11:49:08 -0500" -->
<!-- isosent="20091110164908" -->
<!-- name="Chris Walker" -->
<!-- email="christopher.walker_at_[hidden]" -->
<!-- subject="[OMPI users] disabling LSF integration at runtime" -->
<!-- id="554e24be0911100849g559a34f1i35fc2241cc67ba4_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] disabling LSF integration at runtime<br>
<strong>From:</strong> Chris Walker (<em>christopher.walker_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-10 11:49:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11120.php">Eloi Gaudry: "Re: [OMPI users] [sge] tight-integration openmpi and sge:	opal_os_dirpath_create failure"</a>
<li><strong>Previous message:</strong> <a href="11118.php">Ralph Castain: "Re: [OMPI users] [sge] tight-integration openmpi and sge: opal_os_dirpath_create failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11121.php">Ralph Castain: "Re: [OMPI users] disabling LSF integration at runtime"</a>
<li><strong>Reply:</strong> <a href="11121.php">Ralph Castain: "Re: [OMPI users] disabling LSF integration at runtime"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>We've been having a lot of problems where openmpi jobs crash at
<br>
startup because the call to lsb_launch fails (we have a ticket open
<br>
with Platform about this).  Is there a way to disable the lsb_launch
<br>
startup mechanism at runtime and revert to ssh?  It's easy enough to
<br>
recompile without LSF support, but it'd be even easier to drop a
<br>
parameter in  openmpi-mca-params.conf.
<br>
<p>Thanks!
<br>
Chris
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11120.php">Eloi Gaudry: "Re: [OMPI users] [sge] tight-integration openmpi and sge:	opal_os_dirpath_create failure"</a>
<li><strong>Previous message:</strong> <a href="11118.php">Ralph Castain: "Re: [OMPI users] [sge] tight-integration openmpi and sge: opal_os_dirpath_create failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11121.php">Ralph Castain: "Re: [OMPI users] disabling LSF integration at runtime"</a>
<li><strong>Reply:</strong> <a href="11121.php">Ralph Castain: "Re: [OMPI users] disabling LSF integration at runtime"</a>
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
