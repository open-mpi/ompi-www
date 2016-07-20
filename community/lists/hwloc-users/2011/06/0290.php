<?
$subject_val = "[hwloc-users] Patch to disable GCC __builtin_ operations";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun  8 16:28:08 2011" -->
<!-- isoreceived="20110608202808" -->
<!-- sent="Wed, 8 Jun 2011 16:28:04 -0400" -->
<!-- isosent="20110608202804" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="[hwloc-users] Patch to disable GCC __builtin_ operations" -->
<!-- id="BANLkTi=EoWN6y-dBgN3ryX=4HjYtTxYU5Q_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [hwloc-users] Patch to disable GCC __builtin_ operations<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-06-08 16:28:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0291.php">Jeff Squyres: "Re: [hwloc-users] Patch to disable GCC __builtin_ operations"</a>
<li><strong>Previous message:</strong> <a href="0289.php">Jeff Squyres: "Re: [hwloc-users] HWLOC problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0291.php">Jeff Squyres: "Re: [hwloc-users] Patch to disable GCC __builtin_ operations"</a>
<li><strong>Reply:</strong> <a href="0291.php">Jeff Squyres: "Re: [hwloc-users] Patch to disable GCC __builtin_ operations"</a>
<li><strong>Maybe reply:</strong> <a href="0296.php">Samuel Thibault: "Re: [hwloc-users] Patch to disable GCC __builtin_ operations"</a>
<li><strong>Maybe reply:</strong> <a href="0298.php">Samuel Thibault: "Re: [hwloc-users] Patch to disable GCC __builtin_ operations"</a>
<li><strong>Maybe reply:</strong> <a href="0300.php">Samuel Thibault: "Re: [hwloc-users] Patch to disable GCC __builtin_ operations"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
(This should have gone to the devel list)
<br>
<p>The attached patch adds a configure option (--disable-gcc-builtin) to
<br>
disable the use of GCC __builtin_ operations, even if the GCC compiler
<br>
supports them. The patch is a diff from the r3509 revision of the
<br>
hwloc trunk.
<br>
<p>I hit a problem when installing hwloc statically on a machine with a
<br>
slightly different gcc support libraries and OSs on the head/compile
<br>
node versus the compute nodes. The builtin functions would cause hwloc
<br>
to segfault when run on the compute nodes. By disabling the builtin
<br>
operations, and using the more portable techniques seemed to do the
<br>
trick.
<br>
<p>This problem first became apparent when using hwloc as part of Open
<br>
MPI. In Open MPI the mpirun process runs on the headnode, so the hwloc
<br>
install would work in the mpirun process but cause the compute
<br>
processes to segv.
<br>
<p>Can you review the patch, and apply it to the trunk? Once the patch is
<br>
in the trunk, then I'll work on the Open MPI folks to update their
<br>
revision.
<br>
<p>Thanks,
<br>
Josh
<br>
<p><pre>
-- 
Joshua Hursey
Postdoctoral Research Associate
Oak Ridge National Laboratory
<a href="http://users.nccs.gov/~jjhursey">http://users.nccs.gov/~jjhursey</a>

</pre>
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0290/hwloc-diff-r3509.diff">hwloc-diff-r3509.diff</a>
</ul>
<!-- attachment="hwloc-diff-r3509.diff" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0291.php">Jeff Squyres: "Re: [hwloc-users] Patch to disable GCC __builtin_ operations"</a>
<li><strong>Previous message:</strong> <a href="0289.php">Jeff Squyres: "Re: [hwloc-users] HWLOC problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0291.php">Jeff Squyres: "Re: [hwloc-users] Patch to disable GCC __builtin_ operations"</a>
<li><strong>Reply:</strong> <a href="0291.php">Jeff Squyres: "Re: [hwloc-users] Patch to disable GCC __builtin_ operations"</a>
<li><strong>Maybe reply:</strong> <a href="0296.php">Samuel Thibault: "Re: [hwloc-users] Patch to disable GCC __builtin_ operations"</a>
<li><strong>Maybe reply:</strong> <a href="0298.php">Samuel Thibault: "Re: [hwloc-users] Patch to disable GCC __builtin_ operations"</a>
<li><strong>Maybe reply:</strong> <a href="0300.php">Samuel Thibault: "Re: [hwloc-users] Patch to disable GCC __builtin_ operations"</a>
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
