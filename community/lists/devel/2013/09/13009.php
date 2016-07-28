<?
$subject_val = "Re: [OMPI devel] Trunk appears broken";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 27 15:32:47 2013" -->
<!-- isoreceived="20130927193247" -->
<!-- sent="Fri, 27 Sep 2013 19:32:45 +0000" -->
<!-- isosent="20130927193245" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Trunk appears broken" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F8E623C_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="Windows-1252" -->
<!-- inreplyto="3666062F-77D5-45A4-935A-B90E46BF9693_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Trunk appears broken<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-27 15:32:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13010.php">Orion Poplawski: "Re: [OMPI devel] v1.7.3rc1"</a>
<li><strong>Previous message:</strong> <a href="13008.php">Ralph Castain: "Re: [OMPI devel] Trunk appears broken"</a>
<li><strong>In reply to:</strong> <a href="13008.php">Ralph Castain: "Re: [OMPI devel] Trunk appears broken"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
See my note from several hours ago:
<br>
<p>&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/lists/devel/2013/09/13001.php">http://www.open-mpi.org/community/lists/devel/2013/09/13001.php</a>
<br>
<p><p>On Sep 27, 2013, at 3:31 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Jeff already sent a note out to the VT guys - caused by the update to MPI-3 API format (the &quot;const&quot; and [] syntax)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Sep 27, 2013, at 12:23 PM, Joshua Ladd &lt;joshual_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; And for once, it&#146;s not our fault. Hooray!
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; --- make all -j 8 result_stdout/result_stderr ---
</span><br>
<span class="quotelev2">&gt;&gt;   CC       libvt_mpi_la-vt_iowrap.lo
</span><br>
<span class="quotelev2">&gt;&gt; vt_mpiwrap.c:7058: error: conflicting types for 'MPI_File_write_shared'
</span><br>
<span class="quotelev2">&gt;&gt; /hpc/scrap/mtt/scratch/hcol/20130927_210048_17714_18252_mir2/mpi-install/Pqkv/src/ompi-vendor.git/ompi/contrib/vt/vt/../../../include/mpi.h:1367: note: previous declaration of 'MPI_File_write_shared' was here
</span><br>
<span class="quotelev2">&gt;&gt; In file included from vt_mpiwrap.c:7101:
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; vt_mpiwrap.gen.c:421: error: conflicting types for 'MPI_Cart_rank'
</span><br>
<span class="quotelev2">&gt;&gt;   CC       libvt_mpi_la-vt_iowrap_helper.lo
</span><br>
<span class="quotelev2">&gt;&gt; vt_mpiwrap.gen.c:1071: error: conflicting types for 'MPI_Get_count'
</span><br>
<span class="quotelev2">&gt;&gt; vt_mpiwrap.gen.c:1113: error: conflicting types for 'MPI_Get_elements'
</span><br>
<span class="quotelev2">&gt;&gt; vt_mpiwrap.gen.c:1283: error: conflicting types for 'MPI_Graph_map'
</span><br>
<span class="quotelev2">&gt;&gt; /hpc/scrap/mtt/scratch/hcol/20130927_210048_17714_18252_mir2/mpi-install/Pqkv/src/ompi-vendor.git/ompi/contrib/vt/vt/../../../include/mpi.h:1433: note: previous declaration of 'MPI_Graph_map' was here
</span><br>
<span class="quotelev2">&gt;&gt; vt_mpiwrap.gen.c:1591: error: conflicting types for 'MPI_Group_translate_ranks'
</span><br>
<span class="quotelev2">&gt;&gt; /hpc/scrap/mtt/scratch/hcol/20130927_210048_17714_18252_mir2/mpi-install/Pqkv/src/ompi-vendor.git/ompi/contrib/vt/vt/../../../include/mpi.h:1462: note: previous declaration of 'MPI_Group_translate_ranks' was here
</span><br>
<span class="quotelev2">&gt;&gt; vt_mpiwrap.gen.c:1863: error: conflicting types for 'MPI_Pack'
</span><br>
<span class="quotelev2">&gt;&gt; /hpc/scrap/mtt/scratch/hcol/20130927_210048_17714_18252_mir2/mpi-install/Pqkv/src/ompi-vendor.git/ompi/contrib/vt/vt/../../../include/mpi.h:1561: note: previous declaration of 'MPI_Pack' was here
</span><br>
<span class="quotelev2">&gt;&gt; vt_mpiwrap.gen.c:2029: error: conflicting types for 'MPI_Test_cancelled'
</span><br>
<span class="quotelev2">&gt;&gt; /hpc/scrap/mtt/scratch/hcol/20130927_210048_17714_18252_mir2/mpi-install/Pqkv/src/ompi-vendor.git/ompi/contrib/vt/vt/../../../include/mpi.h:1653: note: previous declaration of 'MPI_Test_cancelled' was here
</span><br>
<span class="quotelev2">&gt;&gt; vt_mpiwrap.gen.c:2371: error: conflicting types for 'MPI_Type_indexed'
</span><br>
<span class="quotelev2">&gt;&gt; /hpc/scrap/mtt/scratch/hcol/20130927_210048_17714_18252_mir2/mpi-install/Pqkv/src/ompi-vendor.git/ompi/contrib/vt/vt/../../../include/mpi.h:1731: note: previous declaration of 'MPI_Type_indexed' was here
</span><br>
<span class="quotelev2">&gt;&gt; vt_mpiwrap.gen.c:2623: error: conflicting types for 'MPI_Unpack'
</span><br>
<span class="quotelev2">&gt;&gt; /hpc/scrap/mtt/scratch/hcol/20130927_210048_17714_18252_mir2/mpi-install/Pqkv/src/ompi-vendor.git/ompi/contrib/vt/vt/../../../include/mpi.h:1751: note: previous declaration of 'MPI_Unpack' was here
</span><br>
<span class="quotelev2">&gt;&gt; vt_mpiwrap.gen.c:2997: error: conflicting types for 'MPI_Pack_external'
</span><br>
<span class="quotelev2">&gt;&gt; vt_mpiwrap.gen.c:3039: error: conflicting types for 'MPI_Pack_external_size'
</span><br>
<span class="quotelev2">&gt;&gt; In file included from vt_mpiwrap.c:7101:
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; vt_mpiwrap.gen.c:3165: error: conflicting types for 'MPI_Type_create_hindexed'
</span><br>
<span class="quotelev2">&gt;&gt; vt_mpiwrap.gen.c:3249: error: conflicting types for 'MPI_Type_create_indexed_block'
</span><br>
<span class="quotelev2">&gt;&gt; /hpc/scrap/mtt/scratch/hcol/20130927_210048_17714_18252_mir2/mpi-install/Pqkv/src/ompi-vendor.git/ompi/contrib/vt/vt/../../../include/mpi.h:1684: note: previous declaration of 'MPI_Type_create_indexed_block' was here
</span><br>
<span class="quotelev2">&gt;&gt; vt_mpiwrap.gen.c:3333: error: conflicting types for 'MPI_Type_create_struct'
</span><br>
<span class="quotelev2">&gt;&gt; vt_mpiwrap.gen.c:3375: error: conflicting types for 'MPI_Type_create_subarray'
</span><br>
<span class="quotelev2">&gt;&gt; vt_mpiwrap.gen.c:3501: error: conflicting types for 'MPI_Unpack_external'
</span><br>
<span class="quotelev2">&gt;&gt; vt_mpiwrap.gen.c:3897: error: conflicting types for 'MPI_Comm_set_name'
</span><br>
<span class="quotelev2">&gt;&gt; vt_mpiwrap.gen.c:4445: error: conflicting types for 'MPI_Type_set_name'
</span><br>
<span class="quotelev2">&gt;&gt; vt_mpiwrap.gen.c:4741: error: conflicting types for 'MPI_Win_set_name'  CC       libvt_mpi_la-vt_libwrap.lo
</span><br>
<span class="quotelev2">&gt;&gt; /hpc/scrap/mtt/scratch/hcol/20130927_210048_17714_18252_mir2/mpi-install/Pqkv/src/ompi-vendor.git/ompi/contrib/vt/vt/../../../include/mpi.h:1790: note: previous declaration of 'MPI_Win_set_name' was here
</span><br>
<span class="quotelev2">&gt;&gt; vt_mpiwrap.gen.c:5345: error: conflicting types for 'MPI_File_set_view'
</span><br>
<span class="quotelev2">&gt;&gt; vt_mpiwrap.gen.c:5749: error: conflicting types for 'MPI_Register_datarep'
</span><br>
<span class="quotelev2">&gt;&gt; /hpc/scrap/mtt/scratch/hcol/20130927_210048_17714_18252_mir2/mpi-install/Pqkv/src/ompi-vendor.git/ompi/contrib/vt/vt/../../../include/mpi.h:1591: note: previous declaration of 'MPI_Register_datarep' was here
</span><br>
<span class="quotelev2">&gt;&gt;   CC       libvt_mpi_la-vt_mallocwrap.lo
</span><br>
<span class="quotelev2">&gt;&gt; make[5]: *** [libvt_mpi_la-vt_mpiwrap.lo] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[5]: *** Waiting for unfinished jobs....
</span><br>
<span class="quotelev2">&gt;&gt;   CC       libvt_mpi_la-vt_mpifile.lo
</span><br>
<span class="quotelev2">&gt;&gt; make[5]: Leaving directory `/hpc/scrap/mtt/scratch/hcol/20130927_210048_17714_18252_mir2/mpi-install/Pqkv/src/ompi-vendor.git/ompi/contrib/vt/vt/vtlib'
</span><br>
<span class="quotelev2">&gt;&gt; make[4]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[3]: *** [all] Error 2
</span><br>
<span class="quotelev2">&gt;&gt; make[3]: Leaving directory `/hpc/scrap/mtt/scratch/hcol/20130927_210048_17714_18252_mir2/mpi-install/Pqkv/src/ompi-vendor.git/ompi/contrib/vt/vt'
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: Leaving directory `/hpc/scrap/mtt/scratch/hcol/20130927_210048_17714_18252_mir2/mpi-install/Pqkv/src/ompi-vendor.git/ompi'
</span><br>
<span class="quotelev2">&gt;&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; Joshua S. Ladd, PhD
</span><br>
<span class="quotelev2">&gt;&gt; HPC Algorithms Engineer
</span><br>
<span class="quotelev2">&gt;&gt; Mellanox Technologies
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; Email: joshual_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Cell: +1 (865) 258 - 8898
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13010.php">Orion Poplawski: "Re: [OMPI devel] v1.7.3rc1"</a>
<li><strong>Previous message:</strong> <a href="13008.php">Ralph Castain: "Re: [OMPI devel] Trunk appears broken"</a>
<li><strong>In reply to:</strong> <a href="13008.php">Ralph Castain: "Re: [OMPI devel] Trunk appears broken"</a>
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
