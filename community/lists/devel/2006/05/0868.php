<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue May  9 05:37:21 2006" -->
<!-- isoreceived="20060509093721" -->
<!-- sent="Tue, 9 May 2006 11:37:04 +0200" -->
<!-- isosent="20060509093704" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] another small ROMIO fix..." -->
<!-- id="1AB943A4-AE86-4E56-BA0B-8284D1030127_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="445FB554.8000902_at_cs.kuleuven.be" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-05-09 05:37:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0869.php">Jeff Squyres \(jsquyres\): "Re: [OMPI devel] another small ROMIO fix..."</a>
<li><strong>Previous message:</strong> <a href="0867.php">Brian Barrett: "Re: [OMPI devel] bug in Makefile.in"</a>
<li><strong>In reply to:</strong> <a href="0866.php">Dries Kimpe: "[OMPI devel] another small ROMIO fix..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0869.php">Jeff Squyres \(jsquyres\): "Re: [OMPI devel] another small ROMIO fix..."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 8, 2006, at 11:17 PM, Dries Kimpe wrote:
<br>
<p><span class="quotelev1">&gt; In ompi/mca/io/romio/romio/adio/Makefile.am there is an entry missing
</span><br>
<span class="quotelev1">&gt; for PVFS2.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Index: Makefile.am
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- Makefile.am (revision 9851)
</span><br>
<span class="quotelev1">&gt; +++ Makefile.am (working copy)
</span><br>
<span class="quotelev1">&gt; @@ -139,7 +139,7 @@
</span><br>
<span class="quotelev1">&gt;  libadio_la_LIBADD = \
</span><br>
<span class="quotelev1">&gt;          common/libadio_common.la \
</span><br>
<span class="quotelev1">&gt;          $(HFS_LIB) $(NFS_LIB) $(NTFS_LIB) $(PFS_LIB) $(PIOFS_LIB) \
</span><br>
<span class="quotelev1">&gt; -        $(PVFS_LIB) $(SFS_LIB) $(TESTFS_LIB) $(UFS_LIB) $(XFS_LIB)
</span><br>
<span class="quotelev1">&gt; +        $(PVFS_LIB) $(PVFS2_LIB) $(SFS_LIB) $(TESTFS_LIB) $(UFS_LIB)
</span><br>
<span class="quotelev1">&gt; $(XFS_LIB)
</span><br>
<span class="quotelev1">&gt;  libadio_la_DEPENDENCIES = \
</span><br>
<span class="quotelev1">&gt;          $(libadio_la_LIBADD)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Greetings,
</span><br>
<span class="quotelev1">&gt;   Dries
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; PS. This should be the last one, I finally have the combo Open MPI,
</span><br>
<span class="quotelev1">&gt; ROMIO &amp; PVFS2 over native IB up and running :-)
</span><br>
<p>Thanks.  Fixed on the trunk, and hopefully moving into the release  
<br>
branches soon.
<br>
<p>Brian
<br>
<p><pre>
-- 
   Brian Barrett
   Open MPI developer
   <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0869.php">Jeff Squyres \(jsquyres\): "Re: [OMPI devel] another small ROMIO fix..."</a>
<li><strong>Previous message:</strong> <a href="0867.php">Brian Barrett: "Re: [OMPI devel] bug in Makefile.in"</a>
<li><strong>In reply to:</strong> <a href="0866.php">Dries Kimpe: "[OMPI devel] another small ROMIO fix..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0869.php">Jeff Squyres \(jsquyres\): "Re: [OMPI devel] another small ROMIO fix..."</a>
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
