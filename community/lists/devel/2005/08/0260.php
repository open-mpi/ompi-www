<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Aug 27 10:49:26 2005" -->
<!-- isoreceived="20050827154926" -->
<!-- sent="Sat, 27 Aug 2005 17:49:16 +0200" -->
<!-- isosent="20050827154916" -->
<!-- name="Ralf Wildenhues" -->
<!-- email="Ralf.Wildenhues_at_[hidden]" -->
<!-- subject="tar file name length limit" -->
<!-- id="20050827154916.GA5162_at_iam.uni-bonn.de" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> Ralf Wildenhues (<em>Ralf.Wildenhues_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-08-27 10:49:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0261.php">Brian Barrett: "Re:  tar file name length limit"</a>
<li><strong>Previous message:</strong> <a href="0259.php">Jeff Squyres: "Re:  pml vs bml vs btl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0261.php">Brian Barrett: "Re:  tar file name length limit"</a>
<li><strong>Reply:</strong> <a href="0261.php">Brian Barrett: "Re:  tar file name length limit"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt;From a recent ChangeLog entry:
</span><br>
| Part 1 of 2 of a commit to reduce filenames in the romio component
<br>
| (because we kept bumping up against the max filename limit in &quot;tar&quot;
<br>
| when making tarballs, especially if the version number got long).
<br>
<p>If you can allow to limit developers to Automake &gt;= 1.9, you should be
<br>
able to use longer file names by selecting a different tar format than
<br>
tar-v7, e.g., tar-pax or tar-ustar.  Automake docs suggest that ustar
<br>
should be widely usable, in contrast to the rather recent but POSIX pax
<br>
format.  ustar does not have the length limit.
<br>
If you want to stick to tar-v7, you might want to check out the
<br>
&quot;filename-length-max=99&quot; Automake option to tell you about long names
<br>
right away.
<br>
<p>Cheers,
<br>
Ralf
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0261.php">Brian Barrett: "Re:  tar file name length limit"</a>
<li><strong>Previous message:</strong> <a href="0259.php">Jeff Squyres: "Re:  pml vs bml vs btl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0261.php">Brian Barrett: "Re:  tar file name length limit"</a>
<li><strong>Reply:</strong> <a href="0261.php">Brian Barrett: "Re:  tar file name length limit"</a>
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
