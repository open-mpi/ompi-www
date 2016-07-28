<?
$subject_val = "[OMPI devel] [1.10.3rc2] testing summary";
include("../../include/msg-header.inc");
?>
<!-- received="Sat May 21 18:14:48 2016" -->
<!-- isoreceived="20160521221448" -->
<!-- sent="Sat, 21 May 2016 15:14:42 -0700" -->
<!-- isosent="20160521221442" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] [1.10.3rc2] testing summary" -->
<!-- id="CAAvDA14BihTxGQFQYWhGa4r9d2sG1YNLK_sJ0Uxd7TUiduv2AQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI devel] [1.10.3rc2] testing summary<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-21 18:14:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19019.php">Ralph Castain: "Re: [OMPI devel] modex getting corrupted"</a>
<li><strong>Previous message:</strong> <a href="19017.php">Paul Hargrove: "Re: [OMPI devel] [1.10.3rc2] OpenBSD build failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19020.php">Paul Hargrove: "Re: [OMPI devel] [1.10.3rc2] testing summary"</a>
<li><strong>Reply:</strong> <a href="19020.php">Paul Hargrove: "Re: [OMPI devel] [1.10.3rc2] testing summary"</a>
<li><strong>Reply:</strong> <a href="19024.php">Paul Hargrove: "Re: [OMPI devel] [1.10.3rc2] testing summary"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Overnight my (relatively) slow ARM and MIPS testers completed.
<br>
Most of those have been moved to real hardware (vs QEMU) and I've been able
<br>
to increase coverage as a result.
<br>
<p>I will note that I was not able to test IA64 (yet?) because that system is
<br>
down.
<br>
I've emailed the owners of that system and am hopeful that I can test it in
<br>
the next few days.
<br>
<p>The only clear Open MPI issues I encountered are the ROMIO-on-OpenBSD and
<br>
libtool recognition of Solaris Studio 12.5 beta.
<br>
Each was reported already on this list, and I believe Gilles is now
<br>
handling both issues.
<br>
<p>I did encounter one issue that still needs more investigating before I can
<br>
attribute it to Solaris or to Open MPI:
<br>
Since I last built Open MPI there x86-64/Solaris systems were updated from
<br>
Solaris 11.2 to 11.3.
<br>
I can build this release tarball using &quot;gmake&quot; fine, but &quot;gmake -j4&quot; is
<br>
failing.
<br>
It appears to be libtool failing to create a &quot;.libs&quot; directory.
<br>
My current guess is some issue between the updated Solaris and the NFS
<br>
server for the filesystem where I am building.
<br>
<p>-Paul
<br>
<p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Computer Languages &amp; Systems Software (CLaSS) Group
Computer Science Department               Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-19018/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19019.php">Ralph Castain: "Re: [OMPI devel] modex getting corrupted"</a>
<li><strong>Previous message:</strong> <a href="19017.php">Paul Hargrove: "Re: [OMPI devel] [1.10.3rc2] OpenBSD build failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19020.php">Paul Hargrove: "Re: [OMPI devel] [1.10.3rc2] testing summary"</a>
<li><strong>Reply:</strong> <a href="19020.php">Paul Hargrove: "Re: [OMPI devel] [1.10.3rc2] testing summary"</a>
<li><strong>Reply:</strong> <a href="19024.php">Paul Hargrove: "Re: [OMPI devel] [1.10.3rc2] testing summary"</a>
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
