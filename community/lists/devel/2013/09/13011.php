<?
$subject_val = "Re: [OMPI devel] VT issue: Fwd: === CREATE FAILURE (trunk) ===";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Sep 28 06:30:28 2013" -->
<!-- isoreceived="20130928103028" -->
<!-- sent="Sat, 28 Sep 2013 10:30:26 +0000" -->
<!-- isosent="20130928103026" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] VT issue: Fwd: === CREATE FAILURE (trunk) ===" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F8F6A37_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CBB38B8B-4463-4114-98A0-42083E13C5C6_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] VT issue: Fwd: === CREATE FAILURE (trunk) ===<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-28 06:30:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13012.php">Jeff Squyres (jsquyres): "[OMPI devel] Intel compiler builds broken"</a>
<li><strong>Previous message:</strong> <a href="13010.php">Orion Poplawski: "Re: [OMPI devel] v1.7.3rc1"</a>
<li><strong>Maybe in reply to:</strong> <a href="13000.php">Jeff Squyres (jsquyres): "[OMPI devel] VT issue: Fwd: === CREATE FAILURE (trunk) ==="</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
VT guys --
<br>
<p>I just committed <a href="https://svn.open-mpi.org/trac/ompi/changeset/29280">https://svn.open-mpi.org/trac/ompi/changeset/29280</a> so that the OMPI trunk can build.  Feel free to replace it with a different/better fix.
<br>
<p>Sorry for the rush on this!  This particular problem came in with some inadequate testing of a different/new feature on the OMPI trunk.  :-\
<br>
<p><p><p>On Sep 27, 2013, at 8:44 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I looked into this.  There's two issues:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. In vt_mpiwrap.c, there's this code:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; #if defined(MPI_VERSION) &amp;&amp; MPI_VERSION &gt;= 3
</span><br>
<span class="quotelev1">&gt; # define CONST const
</span><br>
<span class="quotelev1">&gt; #else /* MPI_VERSION */
</span><br>
<span class="quotelev1">&gt; # define CONST
</span><br>
<span class="quotelev1">&gt; #endif /* MPI_VERSION */
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Open MPI doesn't yet identify itself as MPI_VERSION&gt;=3, so this test didn't set CONST to &quot;const&quot;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Two immediate options come to mind:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; a) put in a bypass for Open MPI
</span><br>
<span class="quotelev1">&gt; b) have a configure test check for const in the mpi.h prototypes
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ...or you can fix it whatever way is appropriate for your code base/style.  :-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2. If I override that test, I still get some errors with the following names:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; a) MPI_Type_hindexed
</span><br>
<span class="quotelev1">&gt; b) MPI_Type_struct
</span><br>
<span class="quotelev1">&gt; c) MPI_Unpack
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; a) and b) are deprecated; we did not add const to those prototypes.  I think that's the correct decision, because these functions were removed from the MPI-3 document.  Indeed, MPI-3 says to look at MPI-2.2 for the prototypes of these functions; those MPI-2.2 prototypes do not include const.  Can you remove CONST from your Type_hindexed and Type_struct prototypes?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; c) looks like our mistake -- it looks like there's a missing &quot;const&quot; in our MPI_Unpack prototype (and definition).  I'll commit a fix for this shortly.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Sep 27, 2013, at 4:54 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; VT guys -
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; We just updated all the OMPI c bindings to have the MPI 3 const and [] declarations on the trunk. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Can you update VT to match?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Sent from my phone. No type good. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Begin forwarded message:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From: MPI Team &lt;mpiteam_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Date: September 26, 2013 at 9:11:51 PM EDT
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To: &lt;testing_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subject: === CREATE FAILURE (trunk) ===
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Reply-To: &lt;devel_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ERROR: Command returned a non-zero exist status (trunk):
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      make distcheck
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Start time: Thu Sep 26 21:00:01 EDT 2013
</span><br>
<span class="quotelev3">&gt;&gt;&gt; End time:   Thu Sep 26 21:11:51 EDT 2013
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =======================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [... previous lines snipped ...]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ./vt_mpiwrap.gen.c:1283: error: conflicting types for 'MPI_Graph_map'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r29274/ompi/openmpi-1.9a1r29274/_build/ompi/contrib/vt/vt/../../../include/mpi.h:1433: note: previous declaration of 'MPI_Graph_map' was here
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ./vt_mpiwrap.gen.c:1591: error: conflicting types for 'MPI_Group_translate_ranks'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r29274/ompi/openmpi-1.9a1r29274/_build/ompi/contrib/vt/vt/../../../include/mpi.h:1462: note: previous declaration of 'MPI_Group_translate_ranks' was here
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ./vt_mpiwrap.gen.c:1863: error: conflicting types for 'MPI_Pack'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r29274/ompi/openmpi-1.9a1r29274/_build/ompi/contrib/vt/vt/../../../include/mpi.h:1561: note: previous declaration of 'MPI_Pack' was here
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ./vt_mpiwrap.gen.c:2029: error: conflicting types for 'MPI_Test_cancelled'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r29274/ompi/openmpi-1.9a1r29274/_build/ompi/contrib/vt/vt/../../../include/mpi.h:1653: note: previous declaration of 'MPI_Test_cancelled' was here
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ./vt_mpiwrap.gen.c:2371: error: conflicting types for 'MPI_Type_indexed'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r29274/ompi/openmpi-1.9a1r29274/_build/ompi/contrib/vt/vt/../../../include/mpi.h:1731: note: previous declaration of 'MPI_Type_indexed' was here
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ./vt_mpiwrap.gen.c:2997: error: conflicting types for 'MPI_Pack_external'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r29274/ompi/openmpi-1.9a1r29274/_build/ompi/contrib/vt/vt/../../../include/mpi.h:1556: note: previous declaration of 'MPI_Pack_external' was here
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ./vt_mpiwrap.gen.c:3039: error: conflicting types for 'MPI_Pack_external_size'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r29274/ompi/openmpi-1.9a1r29274/_build/ompi/contrib/vt/vt/../../../include/mpi.h:1559: note: previous declaration of 'MPI_Pack_external_size' was here
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In file included from ../../../../../../ompi/contrib/vt/vt/vtlib/vt_mpiwrap.c:7101:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ./vt_mpiwrap.gen.c:3123: error: conflicting types for 'MPI_Type_create_darray'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r29274/ompi/openmpi-1.9a1r29274/_build/ompi/contrib/vt/vt/../../../include/mpi.h:1662: note: previous declaration of 'MPI_Type_create_darray' was here
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ./vt_mpiwrap.gen.c:3165: error: conflicting types for 'MPI_Type_create_hindexed'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r29274/ompi/openmpi-1.9a1r29274/_build/ompi/contrib/vt/vt/../../../include/mpi.h:1674: note: previous declaration of 'MPI_Type_create_hindexed' was here
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ./vt_mpiwrap.gen.c:3249: error: conflicting types for 'MPI_Type_create_indexed_block'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r29274/ompi/openmpi-1.9a1r29274/_build/ompi/contrib/vt/vt/../../../include/mpi.h:1684: note: previous declaration of 'MPI_Type_create_indexed_block' was here
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ./vt_mpiwrap.gen.c:3333: error: conflicting types for 'MPI_Type_create_struct'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r29274/ompi/openmpi-1.9a1r29274/_build/ompi/contrib/vt/vt/../../../include/mpi.h:1688: note: previous declaration of 'MPI_Type_create_struct' was here
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ./vt_mpiwrap.gen.c:3375: error: conflicting types for 'MPI_Type_create_subarray'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r29274/ompi/openmpi-1.9a1r29274/_build/ompi/contrib/vt/vt/../../../include/mpi.h:1692: note: previous declaration of 'MPI_Type_create_subarray' was here
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ./vt_mpiwrap.gen.c:3501: error: conflicting types for 'MPI_Unpack_external'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r29274/ompi/openmpi-1.9a1r29274/_build/ompi/contrib/vt/vt/../../../include/mpi.h:1755: note: previous declaration of 'MPI_Unpack_external' was here
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ./vt_mpiwrap.gen.c:3897: error: conflicting types for 'MPI_Comm_set_name'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r29274/ompi/openmpi-1.9a1r29274/_build/ompi/contrib/vt/vt/../../../include/mpi.h:1284: note: previous declaration of 'MPI_Comm_set_name' was here
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ./vt_mpiwrap.gen.c:4445: error: conflicting types for 'MPI_Type_set_name'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r29274/ompi/openmpi-1.9a1r29274/_build/ompi/contrib/vt/vt/../../../include/mpi.h:1739: note: previous declaration of 'MPI_Type_set_name' was here
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ./vt_mpiwrap.gen.c:4741: error: conflicting types for 'MPI_Win_set_name'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r29274/ompi/openmpi-1.9a1r29274/_build/ompi/contrib/vt/vt/../../../include/mpi.h:1790: note: previous declaration of 'MPI_Win_set_name' was here
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ./vt_mpiwrap.gen.c:5345: error: conflicting types for 'MPI_File_set_view'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r29274/ompi/openmpi-1.9a1r29274/_build/ompi/contrib/vt/vt/../../../include/mpi.h:1332: note: previous declaration of 'MPI_File_set_view' was here
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ./vt_mpiwrap.gen.c:5749: error: conflicting types for 'MPI_Register_datarep'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r29274/ompi/openmpi-1.9a1r29274/_build/ompi/contrib/vt/vt/../../../include/mpi.h:1591: note: previous declaration of 'MPI_Register_datarep' was here
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[6]: *** [libvt_mpi_la-vt_mpiwrap.lo] Error 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[6]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r29274/ompi/openmpi-1.9a1r29274/_build/ompi/contrib/vt/vt/vtlib'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[5]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[5]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r29274/ompi/openmpi-1.9a1r29274/_build/ompi/contrib/vt/vt'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[4]: *** [all] Error 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[4]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r29274/ompi/openmpi-1.9a1r29274/_build/ompi/contrib/vt/vt'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[3]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[3]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r29274/ompi/openmpi-1.9a1r29274/_build/ompi/contrib/vt'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[2]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[2]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r29274/ompi/openmpi-1.9a1r29274/_build/ompi'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[1]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r29274/ompi/openmpi-1.9a1r29274/_build'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make: *** [distcheck] Error 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =======================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Your friendly daemon,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cyrador
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; testing mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; testing_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/testing">http://www.open-mpi.org/mailman/listinfo.cgi/testing</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="13012.php">Jeff Squyres (jsquyres): "[OMPI devel] Intel compiler builds broken"</a>
<li><strong>Previous message:</strong> <a href="13010.php">Orion Poplawski: "Re: [OMPI devel] v1.7.3rc1"</a>
<li><strong>Maybe in reply to:</strong> <a href="13000.php">Jeff Squyres (jsquyres): "[OMPI devel] VT issue: Fwd: === CREATE FAILURE (trunk) ==="</a>
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
