<?
$subject_val = "[OMPI devel] [2.0.0rc2] ICE with ekopath-5 and 6";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May  3 03:20:34 2016" -->
<!-- isoreceived="20160503072034" -->
<!-- sent="Tue, 3 May 2016 00:20:29 -0700" -->
<!-- isosent="20160503072029" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] [2.0.0rc2] ICE with ekopath-5 and 6" -->
<!-- id="CAAvDA15+p_gxsVhMtnq0Gz5vR8eQS+9iBDJ6DmUXzKoFa_6MDA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] [2.0.0rc2] ICE with ekopath-5 and 6<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-03 03:20:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18896.php">Paul Hargrove: "[OMPI devel] [2.0.0rc2] NAG Fortran support still broken"</a>
<li><strong>Previous message:</strong> <a href="18894.php">Brice Goglin: "Re: [OMPI devel] [2.0.0rc2] build failure with ppc64 and &quot;gcc -m32&quot; (hwloc)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
With the ekopath (aka pathscale) 5.0.5 and 6.0.527 compilers I get an ICE
<br>
(Internal Compiler Error) building this rc.
<br>
While this is clearly not an OMPI bug, it may be worth recording in the
<br>
README.
<br>
<p>The (different) errors for these two compilers are shown below.
<br>
<p>-Paul
<br>
<p>libtool: compile:  pathcc -DHAVE_CONFIG_H -I.
<br>
-I/sandbox/hargrove/OMPI/openmpi-2.0.0rc2-linux-x86_64-eko-5/openmpi-2.0.0rc2/ompi/mca/pml/ob1
<br>
-I../../../../opal/include -I../../../../ompi/include
<br>
-I../../../../oshmem/include
<br>
-I../../../../opal/mca/hwloc/hwloc1112/hwloc/include/private/autogen
<br>
-I../../../../opal/mca/hwloc/hwloc1112/hwloc/include/hwloc/autogen
<br>
-I../../../../ompi/mpiext/cuda/c
<br>
-I/sandbox/hargrove/OMPI/openmpi-2.0.0rc2-linux-x86_64-eko-5/openmpi-2.0.0rc2
<br>
-I../../../..
<br>
-I/sandbox/hargrove/OMPI/openmpi-2.0.0rc2-linux-x86_64-eko-5/openmpi-2.0.0rc2/opal/include
<br>
-I/sandbox/hargrove/OMPI/openmpi-2.0.0rc2-linux-x86_64-eko-5/openmpi-2.0.0rc2/orte/include
<br>
-I../../../../orte/include
<br>
-I/sandbox/hargrove/OMPI/openmpi-2.0.0rc2-linux-x86_64-eko-5/openmpi-2.0.0rc2/ompi/include
<br>
-I/sandbox/hargrove/OMPI/openmpi-2.0.0rc2-linux-x86_64-eko-5/openmpi-2.0.0rc2/oshmem/include
<br>
-I/sandbox/hargrove/OMPI/openmpi-2.0.0rc2-linux-x86_64-eko-5/openmpi-2.0.0rc2/opal/mca/hwloc/hwloc1112/hwloc/include
<br>
-I/sandbox/hargrove/OMPI/openmpi-2.0.0rc2-linux-x86_64-eko-5/BLD/opal/mca/hwloc/hwloc1112/hwloc/include
<br>
-I/sandbox/hargrove/OMPI/openmpi-2.0.0rc2-linux-x86_64-eko-5/openmpi-2.0.0rc2/opal/mca/event/libevent2022/libevent
<br>
-I/sandbox/hargrove/OMPI/openmpi-2.0.0rc2-linux-x86_64-eko-5/openmpi-2.0.0rc2/opal/mca/event/libevent2022/libevent/include
<br>
-I/sandbox/hargrove/OMPI/openmpi-2.0.0rc2-linux-x86_64-eko-5/BLD/opal/mca/event/libevent2022/libevent/include
<br>
-g -finline-functions -fno-strict-aliasing -pthread -c
<br>
/sandbox/hargrove/OMPI/openmpi-2.0.0rc2-linux-x86_64-eko-5/openmpi-2.0.0rc2/ompi/mca/pml/ob1/pml_ob1_component.c
<br>
-MD -MF .deps/pml_ob1_component.TPlo  -fPIC -DPIC -o
<br>
.libs/pml_ob1_component.o
<br>
Signal: Segmentation fault in VHO Processing phase.
<br>
Error: Signal Segmentation fault in phase VHO Processing -- processing
<br>
aborted
<br>
*** Internal stack backtrace:
<br>
[OMITTED]
<br>
pathcc ERROR: execute
<br>
'/nfs/software/linux-ubuntu_precise_amd64/com/packages/pathscale/ekopath-5.0.5/lib/5.0.5/x8664/be'
<br>
failed: unknown signal
<br>
make[2]: *** [pml_ob1.lo] Error 1
<br>
<p><p>libtool: compile:  pathcc -DHAVE_CONFIG_H -I.
<br>
-I/sandbox/hargrove/OMPI/openmpi-2.0.0rc2-linux-x86_64-eko-6/openmpi-2.0.0rc2/opal/mca/mpool
<br>
-I../../../opal/include -I../../../ompi/include -I../../../oshmem/include
<br>
-I../../../opal/mca/hwloc/hwloc1112/hwloc/include/private/autogen
<br>
-I../../../opal/mca/hwloc/hwloc1112/hwloc/include/hwloc/autogen
<br>
-I../../../ompi/mpiext/cuda/c
<br>
-I/sandbox/hargrove/OMPI/openmpi-2.0.0rc2-linux-x86_64-eko-6/openmpi-2.0.0rc2
<br>
-I../../..
<br>
-I/sandbox/hargrove/OMPI/openmpi-2.0.0rc2-linux-x86_64-eko-6/openmpi-2.0.0rc2/opal/include
<br>
-I/sandbox/hargrove/OMPI/openmpi-2.0.0rc2-linux-x86_64-eko-6/openmpi-2.0.0rc2/orte/include
<br>
-I../../../orte/include
<br>
-I/sandbox/hargrove/OMPI/openmpi-2.0.0rc2-linux-x86_64-eko-6/openmpi-2.0.0rc2/ompi/include
<br>
-I/sandbox/hargrove/OMPI/openmpi-2.0.0rc2-linux-x86_64-eko-6/openmpi-2.0.0rc2/oshmem/include
<br>
-I/sandbox/hargrove/OMPI/openmpi-2.0.0rc2-linux-x86_64-eko-6/openmpi-2.0.0rc2/opal/mca/hwloc/hwloc1112/hwloc/include
<br>
-I/sandbox/hargrove/OMPI/openmpi-2.0.0rc2-linux-x86_64-eko-6/BLD/opal/mca/hwloc/hwloc1112/hwloc/include
<br>
-I/sandbox/hargrove/OMPI/openmpi-2.0.0rc2-linux-x86_64-eko-6/openmpi-2.0.0rc2/opal/mca/event/libevent2022/libevent
<br>
-I/sandbox/hargrove/OMPI/openmpi-2.0.0rc2-linux-x86_64-eko-6/openmpi-2.0.0rc2/opal/mca/event/libevent2022/libevent/include
<br>
-I/sandbox/hargrove/OMPI/openmpi-2.0.0rc2-linux-x86_64-eko-6/BLD/opal/mca/event/libevent2022/libevent/include
<br>
-g -finline-functions -fno-strict-aliasing -pthread -c
<br>
/sandbox/hargrove/OMPI/openmpi-2.0.0rc2-linux-x86_64-eko-6/openmpi-2.0.0rc2/opal/mca/mpool/base/mpool_base_tree.c
<br>
-MD -MF base/.deps/mpool_base_tree.TPlo  -fPIC -DPIC -o
<br>
base/.libs/mpool_base_tree.o
<br>
<p>### Assertion failure at line 835 of
<br>
/root/bamboo-agent-home/xml-data/build-dir/EKOPATH-EKOPATH6-RELEASE/src/enzo-suite/ekopath/compiler/src/be/com/../../common/com/x8664/targ_sim_linux.cxx:
<br>
### Compiler Error in file
<br>
/sandbox/hargrove/OMPI/openmpi-2.0.0rc2-linux-x86_64-eko-6/openmpi-2.0.0rc2/opal/mca/mpool/base/mpool_base_tree.c
<br>
during Before CG phase:
<br>
### Get_Parameter_Location:  mtype I16
<br>
Signal: Aborted in Before CG phase.
<br>
Error: Signal Aborted in phase Before CG -- processing aborted
<br>
pathcc ERROR: execute
<br>
'/nfs/software/linux-ubuntu_precise_amd64/com/packages/pathscale/ekopath-6.0.527/lib/6.0.527/x8664/be'
<br>
failed: unknown signal
<br>
make[2]: *** [base/mpool_base_tree.lo] Error 1
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18895/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18896.php">Paul Hargrove: "[OMPI devel] [2.0.0rc2] NAG Fortran support still broken"</a>
<li><strong>Previous message:</strong> <a href="18894.php">Brice Goglin: "Re: [OMPI devel] [2.0.0rc2] build failure with ppc64 and &quot;gcc -m32&quot; (hwloc)"</a>
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
