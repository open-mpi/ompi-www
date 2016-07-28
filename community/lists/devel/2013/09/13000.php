<?
$subject_val = "[OMPI devel] VT issue: Fwd: === CREATE FAILURE (trunk) ===";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 27 04:54:47 2013" -->
<!-- isoreceived="20130927085447" -->
<!-- sent="Fri, 27 Sep 2013 08:54:45 +0000" -->
<!-- isosent="20130927085445" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] VT issue: Fwd: === CREATE FAILURE (trunk) ===" -->
<!-- id="F696C115-0AB6-4871-813F-5F0FA3FD03A7_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="20130927011151.3743D25F30E_at_jaguar.crest.iu.edu" -->
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
<strong>Subject:</strong> [OMPI devel] VT issue: Fwd: === CREATE FAILURE (trunk) ===<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-27 04:54:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13001.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] VT issue: Fwd: === CREATE FAILURE (trunk) ==="</a>
<li><strong>Previous message:</strong> <a href="12999.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r29265 - in trunk/ompi: include mca/coll mca/coll/base mca/coll/basic mca/coll/libnbc mpi/c mpi/c/profile mpi/fortran/base mpi/fortran/mpif-h mpi/fortran/mpif-h/profile mpi/fortran/use-mpi-f08 mpi/fortran/use-mpi-f08/profile mpi/fortran/use-mpi-ignore-tkr mpi/fortran/use-mpi-tkr/scripts mpi/man/man3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13001.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] VT issue: Fwd: === CREATE FAILURE (trunk) ==="</a>
<li><strong>Reply:</strong> <a href="13001.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] VT issue: Fwd: === CREATE FAILURE (trunk) ==="</a>
<li><strong>Maybe reply:</strong> <a href="13011.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] VT issue: Fwd: === CREATE FAILURE (trunk) ==="</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
VT guys -
<br>
<p>We just updated all the OMPI c bindings to have the MPI 3 const and [] declarations on the trunk.
<br>
<p>Can you update VT to match?
<br>
<p>Sent from my phone. No type good.
<br>
<p>Begin forwarded message:
<br>
<p>From: MPI Team &lt;mpiteam_at_[hidden]&lt;mailto:mpiteam_at_[hidden]&gt;&gt;
<br>
Date: September 26, 2013 at 9:11:51 PM EDT
<br>
To: &lt;testing_at_[hidden]&lt;mailto:testing_at_[hidden]&gt;&gt;
<br>
Subject: === CREATE FAILURE (trunk) ===
<br>
Reply-To: &lt;devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;&gt;
<br>
<p><p>ERROR: Command returned a non-zero exist status (trunk):
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;make distcheck
<br>
<p>Start time: Thu Sep 26 21:00:01 EDT 2013
<br>
End time:   Thu Sep 26 21:11:51 EDT 2013
<br>
<p>=======================================================================
<br>
[... previous lines snipped ...]
<br>
./vt_mpiwrap.gen.c:1283: error: conflicting types for 'MPI_Graph_map'
<br>
/home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r29274/ompi/openmpi-1.9a1r29274/_build/ompi/contrib/vt/vt/../../../include/mpi.h:1433: note: previous declaration of 'MPI_Graph_map' was here
<br>
./vt_mpiwrap.gen.c:1591: error: conflicting types for 'MPI_Group_translate_ranks'
<br>
/home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r29274/ompi/openmpi-1.9a1r29274/_build/ompi/contrib/vt/vt/../../../include/mpi.h:1462: note: previous declaration of 'MPI_Group_translate_ranks' was here
<br>
./vt_mpiwrap.gen.c:1863: error: conflicting types for 'MPI_Pack'
<br>
/home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r29274/ompi/openmpi-1.9a1r29274/_build/ompi/contrib/vt/vt/../../../include/mpi.h:1561: note: previous declaration of 'MPI_Pack' was here
<br>
./vt_mpiwrap.gen.c:2029: error: conflicting types for 'MPI_Test_cancelled'
<br>
/home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r29274/ompi/openmpi-1.9a1r29274/_build/ompi/contrib/vt/vt/../../../include/mpi.h:1653: note: previous declaration of 'MPI_Test_cancelled' was here
<br>
./vt_mpiwrap.gen.c:2371: error: conflicting types for 'MPI_Type_indexed'
<br>
/home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r29274/ompi/openmpi-1.9a1r29274/_build/ompi/contrib/vt/vt/../../../include/mpi.h:1731: note: previous declaration of 'MPI_Type_indexed' was here
<br>
./vt_mpiwrap.gen.c:2997: error: conflicting types for 'MPI_Pack_external'
<br>
/home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r29274/ompi/openmpi-1.9a1r29274/_build/ompi/contrib/vt/vt/../../../include/mpi.h:1556: note: previous declaration of 'MPI_Pack_external' was here
<br>
./vt_mpiwrap.gen.c:3039: error: conflicting types for 'MPI_Pack_external_size'
<br>
/home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r29274/ompi/openmpi-1.9a1r29274/_build/ompi/contrib/vt/vt/../../../include/mpi.h:1559: note: previous declaration of 'MPI_Pack_external_size' was here
<br>
In file included from ../../../../../../ompi/contrib/vt/vt/vtlib/vt_mpiwrap.c:7101:
<br>
./vt_mpiwrap.gen.c:3123: error: conflicting types for 'MPI_Type_create_darray'
<br>
/home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r29274/ompi/openmpi-1.9a1r29274/_build/ompi/contrib/vt/vt/../../../include/mpi.h:1662: note: previous declaration of 'MPI_Type_create_darray' was here
<br>
./vt_mpiwrap.gen.c:3165: error: conflicting types for 'MPI_Type_create_hindexed'
<br>
/home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r29274/ompi/openmpi-1.9a1r29274/_build/ompi/contrib/vt/vt/../../../include/mpi.h:1674: note: previous declaration of 'MPI_Type_create_hindexed' was here
<br>
./vt_mpiwrap.gen.c:3249: error: conflicting types for 'MPI_Type_create_indexed_block'
<br>
/home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r29274/ompi/openmpi-1.9a1r29274/_build/ompi/contrib/vt/vt/../../../include/mpi.h:1684: note: previous declaration of 'MPI_Type_create_indexed_block' was here
<br>
./vt_mpiwrap.gen.c:3333: error: conflicting types for 'MPI_Type_create_struct'
<br>
/home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r29274/ompi/openmpi-1.9a1r29274/_build/ompi/contrib/vt/vt/../../../include/mpi.h:1688: note: previous declaration of 'MPI_Type_create_struct' was here
<br>
./vt_mpiwrap.gen.c:3375: error: conflicting types for 'MPI_Type_create_subarray'
<br>
/home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r29274/ompi/openmpi-1.9a1r29274/_build/ompi/contrib/vt/vt/../../../include/mpi.h:1692: note: previous declaration of 'MPI_Type_create_subarray' was here
<br>
./vt_mpiwrap.gen.c:3501: error: conflicting types for 'MPI_Unpack_external'
<br>
/home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r29274/ompi/openmpi-1.9a1r29274/_build/ompi/contrib/vt/vt/../../../include/mpi.h:1755: note: previous declaration of 'MPI_Unpack_external' was here
<br>
./vt_mpiwrap.gen.c:3897: error: conflicting types for 'MPI_Comm_set_name'
<br>
/home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r29274/ompi/openmpi-1.9a1r29274/_build/ompi/contrib/vt/vt/../../../include/mpi.h:1284: note: previous declaration of 'MPI_Comm_set_name' was here
<br>
./vt_mpiwrap.gen.c:4445: error: conflicting types for 'MPI_Type_set_name'
<br>
/home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r29274/ompi/openmpi-1.9a1r29274/_build/ompi/contrib/vt/vt/../../../include/mpi.h:1739: note: previous declaration of 'MPI_Type_set_name' was here
<br>
./vt_mpiwrap.gen.c:4741: error: conflicting types for 'MPI_Win_set_name'
<br>
/home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r29274/ompi/openmpi-1.9a1r29274/_build/ompi/contrib/vt/vt/../../../include/mpi.h:1790: note: previous declaration of 'MPI_Win_set_name' was here
<br>
./vt_mpiwrap.gen.c:5345: error: conflicting types for 'MPI_File_set_view'
<br>
/home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r29274/ompi/openmpi-1.9a1r29274/_build/ompi/contrib/vt/vt/../../../include/mpi.h:1332: note: previous declaration of 'MPI_File_set_view' was here
<br>
./vt_mpiwrap.gen.c:5749: error: conflicting types for 'MPI_Register_datarep'
<br>
/home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r29274/ompi/openmpi-1.9a1r29274/_build/ompi/contrib/vt/vt/../../../include/mpi.h:1591: note: previous declaration of 'MPI_Register_datarep' was here
<br>
make[6]: *** [libvt_mpi_la-vt_mpiwrap.lo] Error 1
<br>
make[6]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r29274/ompi/openmpi-1.9a1r29274/_build/ompi/contrib/vt/vt/vtlib'
<br>
make[5]: *** [all-recursive] Error 1
<br>
make[5]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r29274/ompi/openmpi-1.9a1r29274/_build/ompi/contrib/vt/vt'
<br>
make[4]: *** [all] Error 2
<br>
make[4]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r29274/ompi/openmpi-1.9a1r29274/_build/ompi/contrib/vt/vt'
<br>
make[3]: *** [all-recursive] Error 1
<br>
make[3]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r29274/ompi/openmpi-1.9a1r29274/_build/ompi/contrib/vt'
<br>
make[2]: *** [all-recursive] Error 1
<br>
make[2]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r29274/ompi/openmpi-1.9a1r29274/_build/ompi'
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball-build-root/trunk/create-r29274/ompi/openmpi-1.9a1r29274/_build'
<br>
make: *** [distcheck] Error 1
<br>
=======================================================================
<br>
<p>Your friendly daemon,
<br>
Cyrador
<br>
_______________________________________________
<br>
testing mailing list
<br>
testing_at_[hidden]&lt;mailto:testing_at_[hidden]&gt;
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/testing">http://www.open-mpi.org/mailman/listinfo.cgi/testing</a>
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13000/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13001.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] VT issue: Fwd: === CREATE FAILURE (trunk) ==="</a>
<li><strong>Previous message:</strong> <a href="12999.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r29265 - in trunk/ompi: include mca/coll mca/coll/base mca/coll/basic mca/coll/libnbc mpi/c mpi/c/profile mpi/fortran/base mpi/fortran/mpif-h mpi/fortran/mpif-h/profile mpi/fortran/use-mpi-f08 mpi/fortran/use-mpi-f08/profile mpi/fortran/use-mpi-ignore-tkr mpi/fortran/use-mpi-tkr/scripts mpi/man/man3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13001.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] VT issue: Fwd: === CREATE FAILURE (trunk) ==="</a>
<li><strong>Reply:</strong> <a href="13001.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] VT issue: Fwd: === CREATE FAILURE (trunk) ==="</a>
<li><strong>Maybe reply:</strong> <a href="13011.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] VT issue: Fwd: === CREATE FAILURE (trunk) ==="</a>
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
