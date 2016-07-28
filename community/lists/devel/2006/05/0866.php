<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon May  8 17:17:15 2006" -->
<!-- isoreceived="20060508211715" -->
<!-- sent="Mon, 08 May 2006 23:17:08 +0200" -->
<!-- isosent="20060508211708" -->
<!-- name="Dries Kimpe" -->
<!-- email="Dries.Kimpe_at_[hidden]" -->
<!-- subject="[OMPI devel] another small ROMIO fix..." -->
<!-- id="445FB554.8000902_at_cs.kuleuven.be" -->
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
<strong>From:</strong> Dries Kimpe (<em>Dries.Kimpe_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-05-08 17:17:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0867.php">Brian Barrett: "Re: [OMPI devel] bug in Makefile.in"</a>
<li><strong>Previous message:</strong> <a href="0865.php">Ralf Wildenhues: "Re: [OMPI devel] bug in Makefile.in"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0868.php">Brian Barrett: "Re: [OMPI devel] another small ROMIO fix..."</a>
<li><strong>Reply:</strong> <a href="0868.php">Brian Barrett: "Re: [OMPI devel] another small ROMIO fix..."</a>
<li><strong>Maybe reply:</strong> <a href="0869.php">Jeff Squyres \(jsquyres\): "Re: [OMPI devel] another small ROMIO fix..."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;&nbsp;Hi,
<br>
<p>In ompi/mca/io/romio/romio/adio/Makefile.am there is an entry missing
<br>
for PVFS2.
<br>
<p>Index: Makefile.am
<br>
===================================================================
<br>
--- Makefile.am (revision 9851)
<br>
+++ Makefile.am (working copy)
<br>
@@ -139,7 +139,7 @@
<br>
&nbsp;libadio_la_LIBADD = \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;common/libadio_common.la \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$(HFS_LIB) $(NFS_LIB) $(NTFS_LIB) $(PFS_LIB) $(PIOFS_LIB) \
<br>
-        $(PVFS_LIB) $(SFS_LIB) $(TESTFS_LIB) $(UFS_LIB) $(XFS_LIB)
<br>
+        $(PVFS_LIB) $(PVFS2_LIB) $(SFS_LIB) $(TESTFS_LIB) $(UFS_LIB)
<br>
$(XFS_LIB)
<br>
&nbsp;libadio_la_DEPENDENCIES = \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$(libadio_la_LIBADD)
<br>
<p><p>&nbsp;&nbsp;Greetings,
<br>
&nbsp;&nbsp;Dries
<br>
<p><p>PS. This should be the last one, I finally have the combo Open MPI,
<br>
ROMIO &amp; PVFS2 over native IB up and running :-)
<br>
<p><p>Disclaimer: <a href="http://www.kuleuven.be/cwis/email_disclaimer.htm">http://www.kuleuven.be/cwis/email_disclaimer.htm</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0867.php">Brian Barrett: "Re: [OMPI devel] bug in Makefile.in"</a>
<li><strong>Previous message:</strong> <a href="0865.php">Ralf Wildenhues: "Re: [OMPI devel] bug in Makefile.in"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0868.php">Brian Barrett: "Re: [OMPI devel] another small ROMIO fix..."</a>
<li><strong>Reply:</strong> <a href="0868.php">Brian Barrett: "Re: [OMPI devel] another small ROMIO fix..."</a>
<li><strong>Maybe reply:</strong> <a href="0869.php">Jeff Squyres \(jsquyres\): "Re: [OMPI devel] another small ROMIO fix..."</a>
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
