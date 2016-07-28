<?
$subject_val = "[hwloc-devel] === CREATE FAILURE (trunk) ===";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 26 21:01:49 2010" -->
<!-- isoreceived="20100327010149" -->
<!-- sent="Fri, 26 Mar 2010 21:01:48 -0400" -->
<!-- isosent="20100327010148" -->
<!-- name="MPI Team" -->
<!-- email="mpiteam_at_[hidden]" -->
<!-- subject="[hwloc-devel] === CREATE FAILURE (trunk) ===" -->
<!-- id="201003270101.o2R11m2S025462_at_eddie.osl.iu.edu" -->
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
<strong>Subject:</strong> [hwloc-devel] === CREATE FAILURE (trunk) ===<br>
<strong>From:</strong> MPI Team (<em>mpiteam_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-26 21:01:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0833.php">Bert Wesarg: "Re: [hwloc-devel] Strange difference"</a>
<li><strong>Previous message:</strong> <a href="0831.php">Jeff Squyres: "Re: [hwloc-devel] Strange difference"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
ERROR: Command returned a non-zero exist status (trunk):
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;make distcheck
<br>
<p>Start time: Fri Mar 26 21:01:02 EDT 2010
<br>
End time:   Fri Mar 26 21:01:48 EDT 2010
<br>
<p>=======================================================================
<br>
[... previous lines snipped ...]
<br>
Generating docs for file openfabrics-verbs.h...
<br>
Generating class documentation...
<br>
Generating annotated compound index...
<br>
Generating hierarchical class index...
<br>
Generating member index...
<br>
Generating docs for compound hwloc_obj...
<br>
Generating docs for compound hwloc_obj_attr_u...
<br>
Generating docs for nested compound hwloc_obj_attr_u::hwloc_cache_attr_s...
<br>
Generating docs for nested compound hwloc_obj_attr_u::hwloc_machine_attr_s...
<br>
Generating docs for nested compound hwloc_obj_attr_u::hwloc_misc_attr_s...
<br>
Generating docs for compound hwloc_obj_memory_s...
<br>
Generating docs for nested compound hwloc_obj_memory_s::hwloc_obj_memory_page_type_s...
<br>
Generating docs for compound hwloc_topology_support...
<br>
Generating page documentation...
<br>
Generating group documentation...
<br>
Generating namespace index...
<br>
Generating group index...
<br>
Generating example index...
<br>
Generating file member index...
<br>
Generating namespace member index...
<br>
Generating page index...
<br>
Generating graph info page...
<br>
sed -i \
<br>
-e 's/__hwloc_restrict/restrict/g' \
<br>
-e 's/\\_\\-\\_\\-hwloc\\_\\-restrict/restrict/g' \
<br>
-e 's/__hwloc_attribute_unused//g' \
<br>
-e 's/\\_\\-\\_\\-hwloc\\_\\-attribute\\_\\-unused//g' \
<br>
-e 's/__hwloc_attribute_malloc//g' \
<br>
-e 's/\\_\\-\\_\\-hwloc\\_\\-attribute\\_\\-malloc//g' \
<br>
-e 's/__hwloc_attribute_const//g' \
<br>
-e 's/\\_\\-\\_\\-hwloc\\_\\-attribute\\_\\-const//g' \
<br>
-e 's/__hwloc_attribute_pure//g' \
<br>
-e 's/\\_\\-\\_\\-hwloc\\_\\-attribute\\_\\-pure//g' \
<br>
-e 's/__hwloc_attribute_deprecated//g' \
<br>
-e 's/\\_\\-\\_\\-hwloc\\_\\-attribute\\_\\-deprecated//g' \
<br>
-e 's/HWLOC_DECLSPEC//g' \
<br>
-e 's/HWLOC\\_\\-DECLSPEC//g' \
<br>
-e 's/__inline/inline/g' \
<br>
-e 's/\\_\\-\\_\\-inline/inline/g' \
<br>
doxygen-doc/html/*.html doxygen-doc/latex/*.tex doxygen-doc/man/man3/*.3
<br>
Work-around spurious leading _ in doxygen filenames...
<br>
(cd doxygen-doc/man/man3 ; \
<br>
for i in _hwloc* ; do \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mv $i ${i#_} ; \
<br>
done)
<br>
mv: when moving multiple files, last argument must be a directory
<br>
Try `mv --help' for more information.
<br>
make[1]: *** [doxygen-doc/hwloc.tag] Error 1
<br>
make[1]: Leaving directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r1860/hwloc/doc'
<br>
make: *** [distdir] Error 1
<br>
=======================================================================
<br>
<p>Your friendly daemon,
<br>
Cyrador
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0833.php">Bert Wesarg: "Re: [hwloc-devel] Strange difference"</a>
<li><strong>Previous message:</strong> <a href="0831.php">Jeff Squyres: "Re: [hwloc-devel] Strange difference"</a>
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
