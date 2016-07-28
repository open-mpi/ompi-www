<?
$subject_val = "[OMPI devel] [2.0.0rc2] xlc-13.1.0 ICE (hwloc)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May  3 04:11:46 2016" -->
<!-- isoreceived="20160503081146" -->
<!-- sent="Tue, 3 May 2016 01:11:39 -0700" -->
<!-- isosent="20160503081139" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] [2.0.0rc2] xlc-13.1.0 ICE (hwloc)" -->
<!-- id="CAAvDA15di31grnM7ZXhfJQE5mdQ1BRax1P6C+L3-g+AR4yv9Hw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] [2.0.0rc2] xlc-13.1.0 ICE (hwloc)<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-03 04:11:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18898.php">Brice Goglin: "Re: [OMPI devel] [2.0.0rc2] build failure with ppc64 and &quot;gcc -m32&quot; (hwloc)"</a>
<li><strong>Previous message:</strong> <a href="18896.php">Paul Hargrove: "[OMPI devel] [2.0.0rc2] NAG Fortran support still broken"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18902.php">Josh Hursey: "Re: [OMPI devel] [2.0.0rc2] xlc-13.1.0 ICE (hwloc)"</a>
<li><strong>Reply:</strong> <a href="18902.php">Josh Hursey: "Re: [OMPI devel] [2.0.0rc2] xlc-13.1.0 ICE (hwloc)"</a>
<li><strong>Reply:</strong> <a href="18910.php">Christopher Samuel: "Re: [OMPI devel] [2.0.0rc2] xlc-13.1.0 ICE (hwloc)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
For possible inclusion in README:
<br>
xlc-13.1.0 on Linux dies compiling the embedded hwloc in this rc (details
<br>
below).
<br>
The same is true of the released hwloc 1.11.3
<br>
<p>-Paul
<br>
<p>libtool: compile:  xlc -DHAVE_CONFIG_H -I.
<br>
-I/gpfs-biou/phh1/OMPI/openmpi-2.0.0rc2-linux-ppc64-xlc-13.1/openmpi-2.0.0rc2/opal/mca/hwloc/hwloc1112/hwloc/src
<br>
-I../../../../../../opal/include -I../../../../../../ompi/include
<br>
-I../../../../../../oshmem/include
<br>
-I../../../../../../opal/mca/hwloc/hwloc1112/hwloc/include/private/autogen
<br>
-I../../../../../../opal/mca/hwloc/hwloc1112/hwloc/include/hwloc/autogen
<br>
-I../../../../../../ompi/mpiext/cuda/c
<br>
-I/gpfs-biou/phh1/OMPI/openmpi-2.0.0rc2-linux-ppc64-xlc-13.1/BLD/opal/mca/hwloc/hwloc1112/hwloc/include
<br>
-I/gpfs-biou/phh1/OMPI/openmpi-2.0.0rc2-linux-ppc64-xlc-13.1/openmpi-2.0.0rc2/opal/mca/hwloc/hwloc1112/hwloc/include
<br>
-DHWLOC_INSIDE_LIBHWLOC
<br>
-DHWLOC_PLUGINS_PATH=\&quot;/gpfs-biou/phh1/OMPI/openmpi-2.0.0rc2-linux-ppc64-xlc-13.1/INST/lib/hwloc\&quot;
<br>
-I/gpfs-biou/phh1/OMPI/openmpi-2.0.0rc2-linux-ppc64-xlc-13.1/openmpi-2.0.0rc2
<br>
-I../../../../../..
<br>
-I/gpfs-biou/phh1/OMPI/openmpi-2.0.0rc2-linux-ppc64-xlc-13.1/openmpi-2.0.0rc2/opal/include
<br>
-I/gpfs-biou/phh1/OMPI/openmpi-2.0.0rc2-linux-ppc64-xlc-13.1/openmpi-2.0.0rc2/orte/include
<br>
-I../../../../../../orte/include
<br>
-I/gpfs-biou/phh1/OMPI/openmpi-2.0.0rc2-linux-ppc64-xlc-13.1/openmpi-2.0.0rc2/ompi/include
<br>
-I/gpfs-biou/phh1/OMPI/openmpi-2.0.0rc2-linux-ppc64-xlc-13.1/openmpi-2.0.0rc2/oshmem/include
<br>
-D_REENTRANT
<br>
-I/gpfs-biou/phh1/OMPI/openmpi-2.0.0rc2-linux-ppc64-xlc-13.1/openmpi-2.0.0rc2/opal/mca/hwloc/hwloc1112/hwloc/include
<br>
-I/gpfs-biou/phh1/OMPI/openmpi-2.0.0rc2-linux-ppc64-xlc-13.1/BLD/opal/mca/hwloc/hwloc1112/hwloc/include
<br>
-I/gpfs-biou/phh1/OMPI/openmpi-2.0.0rc2-linux-ppc64-xlc-13.1/openmpi-2.0.0rc2/opal/mca/event/libevent2022/libevent
<br>
-I/gpfs-biou/phh1/OMPI/openmpi-2.0.0rc2-linux-ppc64-xlc-13.1/openmpi-2.0.0rc2/opal/mca/event/libevent2022/libevent/include
<br>
-I/gpfs-biou/phh1/OMPI/openmpi-2.0.0rc2-linux-ppc64-xlc-13.1/BLD/opal/mca/event/libevent2022/libevent/include
<br>
-q64 -g -c
<br>
/gpfs-biou/phh1/OMPI/openmpi-2.0.0rc2-linux-ppc64-xlc-13.1/openmpi-2.0.0rc2/opal/mca/hwloc/hwloc1112/hwloc/src/topology-xml-nolibxml.c
<br>
-Wp,-qmakedep=gcc,-MF.deps/topology-xml-nolibxml.TPlo  -qpic -DPIC -o
<br>
.libs/topology-xml-nolibxml.o
<br>
/opt/ibm/xlC/13.1.0/bin/.orig/xlc: 1501-224 (S) fatal error in
<br>
/opt/ibm/xlC/13.1.0/exe/xlcentry: signal 11 received
<br>
make[4]: *** [topology-xml-nolibxml.lo] Error 1
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18897/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18898.php">Brice Goglin: "Re: [OMPI devel] [2.0.0rc2] build failure with ppc64 and &quot;gcc -m32&quot; (hwloc)"</a>
<li><strong>Previous message:</strong> <a href="18896.php">Paul Hargrove: "[OMPI devel] [2.0.0rc2] NAG Fortran support still broken"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18902.php">Josh Hursey: "Re: [OMPI devel] [2.0.0rc2] xlc-13.1.0 ICE (hwloc)"</a>
<li><strong>Reply:</strong> <a href="18902.php">Josh Hursey: "Re: [OMPI devel] [2.0.0rc2] xlc-13.1.0 ICE (hwloc)"</a>
<li><strong>Reply:</strong> <a href="18910.php">Christopher Samuel: "Re: [OMPI devel] [2.0.0rc2] xlc-13.1.0 ICE (hwloc)"</a>
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
