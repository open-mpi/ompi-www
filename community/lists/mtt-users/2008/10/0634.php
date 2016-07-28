<?
$subject_val = "[MTT users] Patch for whatami (new sles10 lsb-release file format)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 30 15:30:05 2008" -->
<!-- isoreceived="20081030193005" -->
<!-- sent="Thu, 30 Oct 2008 14:29:56 -0500" -->
<!-- isosent="20081030192956" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="[MTT users] Patch for whatami (new sles10 lsb-release file format)" -->
<!-- id="20081030192955.GF12131_at_sun.com" -->
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
<strong>Subject:</strong> [MTT users] Patch for whatami (new sles10 lsb-release file format)<br>
<strong>From:</strong> Ethan Mallove (<em>ethan.mallove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-30 15:29:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0635.php">Jeff Squyres: "Re: [MTT users] Patch to add --local-scratch option"</a>
<li><strong>Previous message:</strong> <a href="0633.php">Ethan Mallove: "Re: [MTT users] Fwd: [Alert] Found server-side submit error	messages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0636.php">Tim Mattox: "Re: [MTT users] Patch for whatami (new sles10 lsb-release file format)"</a>
<li><strong>Reply:</strong> <a href="0636.php">Tim Mattox: "Re: [MTT users] Patch for whatami (new sles10 lsb-release file format)"</a>
<li><strong>Maybe reply:</strong> <a href="0642.php">Jeff Squyres: "Re: [MTT users] Patch for whatami (new sles10 lsb-release file format)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Brian,
<br>
<p>I'm using your &quot;whatami&quot; in the MPI Testing Tool (MTT), but
<br>
I think a recent change to it broke for our sles10 system.
<br>
We have an lsb-release file that is different from what
<br>
&quot;whatami&quot; expects:
<br>
<p>&nbsp;&nbsp;$ cat /etc/lsb-release
<br>
&nbsp;&nbsp;LSB_VERSION=&quot;core-2.0-noarch:core-3.0-noarch:core-2.0-x86_64:core-3.0-x86_64&quot;
<br>
&nbsp;&nbsp;$ uname -a
<br>
&nbsp;&nbsp;Linux burl-ct-v20z-6 2.6.16.46-0.12-smp #1 SMP Thu May 17 14:00:09 UTC 2007 x86_64 x86_64 x86_64 GNU/Linux
<br>
<p>I attached a patch.
<br>
<p>Regards,
<br>
Ethan
<br>
<p>
<br><hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/mtt-users/att-0634/whatami-lsb-release-files.diff">whatami-lsb-release-files.diff</a>
</ul>
<!-- attachment="whatami-lsb-release-files.diff" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0635.php">Jeff Squyres: "Re: [MTT users] Patch to add --local-scratch option"</a>
<li><strong>Previous message:</strong> <a href="0633.php">Ethan Mallove: "Re: [MTT users] Fwd: [Alert] Found server-side submit error	messages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0636.php">Tim Mattox: "Re: [MTT users] Patch for whatami (new sles10 lsb-release file format)"</a>
<li><strong>Reply:</strong> <a href="0636.php">Tim Mattox: "Re: [MTT users] Patch for whatami (new sles10 lsb-release file format)"</a>
<li><strong>Maybe reply:</strong> <a href="0642.php">Jeff Squyres: "Re: [MTT users] Patch for whatami (new sles10 lsb-release file format)"</a>
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
