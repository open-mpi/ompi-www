<?
$subject_val = "[OMPI devel] RFC: merge windows branch into trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 20 08:20:08 2008" -->
<!-- isoreceived="20081120132008" -->
<!-- sent="Thu, 20 Nov 2008 14:20:01 +0100" -->
<!-- isosent="20081120132001" -->
<!-- name="Shiqing Fan" -->
<!-- email="fan_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: merge windows branch into trunk" -->
<!-- id="49256401.9020107_at_hlrs.de" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: merge windows branch into trunk<br>
<strong>From:</strong> Shiqing Fan (<em>fan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-20 08:20:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4928.php">Tim Mattox: "Re: [OMPI devel] RFC: merge windows branch into trunk"</a>
<li><strong>Previous message:</strong> <a href="4926.php">Ethan Mallove: "Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script for	post-configure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4928.php">Tim Mattox: "Re: [OMPI devel] RFC: merge windows branch into trunk"</a>
<li><strong>Reply:</strong> <a href="4928.php">Tim Mattox: "Re: [OMPI devel] RFC: merge windows branch into trunk"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
WHAT:  To merge windows (cmake) support into trunk
<br>
<p>WHY:  To allow people configure/compile Open MPI with CMake and Visual 
<br>
Studio on Windows platforms
<br>
<p>WHERE:  Mainly in /contrib/platform/win32/ ; a few CMakeLists.txt files 
<br>
and some source files referred with Windows. (See the completed list of 
<br>
modified files below)
<br>
<p>WHEN:  Next week
<br>
<p>TIMEOUT:  28th Nov 2008
<br>
<p><p>____________________
<br>
<p><p>The windows branch has been tested for some time, and the basic 
<br>
functionalities worked well. It is now better to merge it back into 
<br>
trunk, so that more people can test it.
<br>
<p>The original auto-tools based build system won't be affected. The 
<br>
changes to the source code are minimum, and only Windows related. It is 
<br>
supposed to be used for building Open MPI and applications only on 
<br>
Windows platforms (XP, Vista, server 2003 and server 2008).
<br>
<p><p><p>Shiqing
<br>
<p><p>------------------------------------------------------------------------------------------
<br>
The completed list of affected files (based on trunk revision 20022 and 
<br>
current Windows branch):
<br>
<p>M ompi/runtime/ompi_mpi_init.c
<br>
M opal/event/event.c
<br>
M opal/event/WIN32-Code/win32.c
<br>
M opal/mca/base/mca_base_param.c
<br>
M opal/mca/installdirs/windows/opal_installdirs_windows.c
<br>
M opal/runtime/opal_cr.c
<br>
M opal/win32/ompi_misc.h
<br>
M opal/win32/win_compat.h
<br>
M orte/mca/plm/ccp/plm_ccp_component.c
<br>
M orte/mca/plm/ccp/plm_ccp_module.c
<br>
M orte/mca/plm/process/plm_process_module.c
<br>
M orte/mca/ras/ccp/ras_ccp_component.c
<br>
M orte/mca/ras/ccp/ras_ccp_module.c
<br>
M orte/runtime/orte_wait.c
<br>
M orte/tools/orterun/orterun.c
<br>
M orte/util/hnp_contact.c
<br>
A CMakeLists.txt
<br>
A contrib/platform/win32/bin
<br>
A contrib/platform/win32/bin/flex.exe
<br>
A contrib/platform/win32/CMakeModules
<br>
A contrib/platform/win32/CMakeModules/c_check_bool.cmake
<br>
A contrib/platform/win32/CMakeModules/check_c_inline.cmake
<br>
A contrib/platform/win32/CMakeModules/check_c_type_exists.cmake
<br>
A contrib/platform/win32/CMakeModules/check_mca_subdirs.cmake
<br>
A contrib/platform/win32/CMakeModules/check_sizeof_bool.cmake
<br>
A contrib/platform/win32/CMakeModules/F77_check.cmake
<br>
A contrib/platform/win32/CMakeModules/F77_check_type.cmake
<br>
A contrib/platform/win32/CMakeModules/F77_find_ext_symbol_convention.cmake
<br>
A contrib/platform/win32/CMakeModules/F77_get_alignment.cmake
<br>
A contrib/platform/win32/CMakeModules/f77_get_sizeof.cmake
<br>
A contrib/platform/win32/CMakeModules/find_flex.cmake
<br>
A contrib/platform/win32/CMakeModules/generate_version_file.cmake
<br>
A contrib/platform/win32/CMakeModules/get_c_alignment.cmake
<br>
A contrib/platform/win32/CMakeModules/ompi_check_Microsoft.cmake
<br>
A contrib/platform/win32/CMakeModules/ompi_configure.cmake
<br>
A contrib/platform/win32/CMakeModules/ompi_find_type.cmake
<br>
A contrib/platform/win32/CMakeModules/ompi_get_version.cmake
<br>
A contrib/platform/win32/CMakeModules/setup_F77.cmake
<br>
A contrib/platform/win32/ConfigFiles
<br>
A contrib/platform/win32/ConfigFiles/install_dirs.h.cmake
<br>
A contrib/platform/win32/ConfigFiles/mpi.h.cmake
<br>
A contrib/platform/win32/ConfigFiles/mpic++-wrapper-data.txt.cmake
<br>
A contrib/platform/win32/ConfigFiles/mpicc-wrapper-data.txt.cmake
<br>
A contrib/platform/win32/ConfigFiles/mpif77-wrapper-data.txt.cmake
<br>
A contrib/platform/win32/ConfigFiles/opal_config.h.cmake
<br>
A contrib/platform/win32/ConfigFiles/revision.in
<br>
A contrib/platform/win32/opal
<br>
A contrib/platform/win32/opal/libltdl
<br>
A contrib/platform/win32/opal/libltdl/ltdl.c
<br>
A contrib/platform/win32/opal/libltdl/ltdl.h
<br>
A ompi/CMakeLists.txt
<br>
A ompi/mca/allocator/basic/.windows
<br>
A ompi/mca/allocator/bucket/.windows
<br>
A ompi/mca/bml/r2/.windows
<br>
A ompi/mca/btl/self/.windows
<br>
A ompi/mca/btl/sm/.windows
<br>
A ompi/mca/btl/tcp/.windows
<br>
A ompi/mca/coll/basic/.windows
<br>
A ompi/mca/coll/hierarch/.windows
<br>
A ompi/mca/coll/self/.windows
<br>
A ompi/mca/coll/sm/.windows
<br>
A ompi/mca/common/sm/.windows
<br>
A ompi/mca/dpm/orte/.windows
<br>
A ompi/mca/mpool/rdma/.windows
<br>
A ompi/mca/mpool/sm/.windows
<br>
A ompi/mca/osc/pt2pt/.windows
<br>
A ompi/mca/osc/rdma/.windows
<br>
A ompi/mca/pml/cm/.windows
<br>
A ompi/mca/pml/dr/.windows
<br>
A ompi/mca/pml/ob1/.windows
<br>
A ompi/mca/pubsub/orte/.windows
<br>
A ompi/mca/topo/unity/.windows
<br>
A ompi/mpi/CMakeLists.txt
<br>
A ompi/mpi/cxx/CMakeLists.txt
<br>
A ompi/mpi/f77/CMakeLists.txt
<br>
A ompi/tools/CMakeLists.txt
<br>
A ompi/tools/ompi-server/CMakeLists.txt
<br>
A ompi/tools/ompi_info/CMakeLists.txt
<br>
A opal/CMakeLists.txt
<br>
A opal/event/CMakeLists.txt
<br>
A opal/event/compat/sys/CMakeLists.txt
<br>
A opal/event/WIN32-Code/CMakeLists.txt
<br>
A opal/include/CMakeLists.txt
<br>
A opal/mca/backtrace/none/.windows
<br>
A opal/mca/carto/auto_detect/.windows
<br>
A opal/mca/crs/none/.windows
<br>
A opal/mca/installdirs/config/.windows
<br>
A opal/mca/installdirs/env/.windows
<br>
A opal/mca/installdirs/windows/.windows
<br>
A opal/mca/maffinity/first_use/.windows
<br>
A opal/mca/paffinity/windows/.windows
<br>
A opal/tools/CMakeLists.txt
<br>
A opal/tools/opal-checkpoint/CMakeLists.txt
<br>
A opal/tools/opal-restart/CMakeLists.txt
<br>
A opal/tools/wrappers/CMakeLists.txt
<br>
A orte/CMakeLists.txt
<br>
A orte/mca/errmgr/default/.windows
<br>
A orte/mca/ess/env/.windows
<br>
A orte/mca/ess/hnp/.windows
<br>
A orte/mca/ess/singleton/.windows
<br>
A orte/mca/grpcomm/basic/.windows
<br>
A orte/mca/iof/hnp/.windows
<br>
A orte/mca/iof/orted/.windows
<br>
A orte/mca/iof/tool/.windows
<br>
A orte/mca/odls/process/.windows
<br>
A orte/mca/oob/tcp/.windows
<br>
A orte/mca/plm/ccp/.windows
<br>
A orte/mca/plm/ccp/help-plm-ccp.txt
<br>
A orte/mca/plm/process/.windows
<br>
A orte/mca/ras/ccp/.windows
<br>
A orte/mca/rmaps/round_robin/.windows
<br>
A orte/mca/rmaps/seq/.windows
<br>
A orte/mca/rmaps/topo/.windows
<br>
A orte/mca/rml/ftrm/.windows
<br>
A orte/mca/rml/oob/.windows
<br>
A orte/mca/routed/binomial/.windows
<br>
A orte/mca/routed/linear/.windows
<br>
A orte/tools/CMakeLists.txt
<br>
A orte/tools/orte-checkpoint/CMakeLists.txt
<br>
A orte/tools/orte-clean/CMakeLists.txt
<br>
A orte/tools/orte-ps/CMakeLists.txt
<br>
A orte/tools/orte-restart/CMakeLists.txt
<br>
A orte/tools/orted/CMakeLists.txt
<br>
A orte/tools/orterun/CMakeLists.txt
<br>
A test/CMakeLists.txt
<br>
A test/mpi/CMakeLists.txt
<br>
A test/mpi/environment/CMakeLists.txt
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4928.php">Tim Mattox: "Re: [OMPI devel] RFC: merge windows branch into trunk"</a>
<li><strong>Previous message:</strong> <a href="4926.php">Ethan Mallove: "Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script for	post-configure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4928.php">Tim Mattox: "Re: [OMPI devel] RFC: merge windows branch into trunk"</a>
<li><strong>Reply:</strong> <a href="4928.php">Tim Mattox: "Re: [OMPI devel] RFC: merge windows branch into trunk"</a>
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
