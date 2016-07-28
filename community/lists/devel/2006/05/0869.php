<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue May  9 08:40:15 2006" -->
<!-- isoreceived="20060509124015" -->
<!-- sent="Tue, 9 May 2006 08:40:12 -0400" -->
<!-- isosent="20060509124012" -->
<!-- name="Jeff Squyres \(jsquyres\)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] another small ROMIO fix..." -->
<!-- id="C835B9C9CB0F1C4E9DA48913C9E8F8AF7FB093_at_xmb-rtp-215.amer.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI devel] another small ROMIO fix..." -->
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
<strong>From:</strong> Jeff Squyres \(jsquyres\) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-05-09 08:40:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0870.php">Dries Kimpe: "Re: [OMPI devel] bug in Makefile.in"</a>
<li><strong>Previous message:</strong> <a href="0868.php">Brian Barrett: "Re: [OMPI devel] another small ROMIO fix..."</a>
<li><strong>Maybe in reply to:</strong> <a href="0866.php">Dries Kimpe: "[OMPI devel] another small ROMIO fix..."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
All the ROMIO fixes have been committed to the v1.0 and v1.1 branches.
<br>
&nbsp;
<br>
<p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: devel-bounces_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; [mailto:devel-bounces_at_[hidden]] On Behalf Of Brian Barrett
</span><br>
<span class="quotelev1">&gt; Sent: Tuesday, May 09, 2006 5:37 AM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Developers
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI devel] another small ROMIO fix...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On May 8, 2006, at 11:17 PM, Dries Kimpe wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; In ompi/mca/io/romio/romio/adio/Makefile.am there is an 
</span><br>
<span class="quotelev1">&gt; entry missing
</span><br>
<span class="quotelev2">&gt; &gt; for PVFS2.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Index: Makefile.am
</span><br>
<span class="quotelev2">&gt; &gt; ===================================================================
</span><br>
<span class="quotelev2">&gt; &gt; --- Makefile.am (revision 9851)
</span><br>
<span class="quotelev2">&gt; &gt; +++ Makefile.am (working copy)
</span><br>
<span class="quotelev2">&gt; &gt; @@ -139,7 +139,7 @@
</span><br>
<span class="quotelev2">&gt; &gt;  libadio_la_LIBADD = \
</span><br>
<span class="quotelev2">&gt; &gt;          common/libadio_common.la \
</span><br>
<span class="quotelev2">&gt; &gt;          $(HFS_LIB) $(NFS_LIB) $(NTFS_LIB) $(PFS_LIB) $(PIOFS_LIB) \
</span><br>
<span class="quotelev2">&gt; &gt; -        $(PVFS_LIB) $(SFS_LIB) $(TESTFS_LIB) $(UFS_LIB) $(XFS_LIB)
</span><br>
<span class="quotelev2">&gt; &gt; +        $(PVFS_LIB) $(PVFS2_LIB) $(SFS_LIB) $(TESTFS_LIB) 
</span><br>
<span class="quotelev1">&gt; $(UFS_LIB)
</span><br>
<span class="quotelev2">&gt; &gt; $(XFS_LIB)
</span><br>
<span class="quotelev2">&gt; &gt;  libadio_la_DEPENDENCIES = \
</span><br>
<span class="quotelev2">&gt; &gt;          $(libadio_la_LIBADD)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   Greetings,
</span><br>
<span class="quotelev2">&gt; &gt;   Dries
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; PS. This should be the last one, I finally have the combo Open MPI,
</span><br>
<span class="quotelev2">&gt; &gt; ROMIO &amp; PVFS2 over native IB up and running :-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks.  Fixed on the trunk, and hopefully moving into the release  
</span><br>
<span class="quotelev1">&gt; branches soon.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt;    Brian Barrett
</span><br>
<span class="quotelev1">&gt;    Open MPI developer
</span><br>
<span class="quotelev1">&gt;    <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0870.php">Dries Kimpe: "Re: [OMPI devel] bug in Makefile.in"</a>
<li><strong>Previous message:</strong> <a href="0868.php">Brian Barrett: "Re: [OMPI devel] another small ROMIO fix..."</a>
<li><strong>Maybe in reply to:</strong> <a href="0866.php">Dries Kimpe: "[OMPI devel] another small ROMIO fix..."</a>
<!-- nextthread="start" -->
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
