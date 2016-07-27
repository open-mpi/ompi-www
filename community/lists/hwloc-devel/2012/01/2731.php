<?
$subject_val = "[hwloc-devel] hwloc-1.3.1 install failures on Solaris-10";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 31 20:37:45 2012" -->
<!-- isoreceived="20120201013745" -->
<!-- sent="Tue, 31 Jan 2012 17:37:22 -0800" -->
<!-- isosent="20120201013722" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="[hwloc-devel] hwloc-1.3.1 install failures on Solaris-10" -->
<!-- id="4F289752.60003_at_lbl.gov" -->
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
<strong>Subject:</strong> [hwloc-devel] hwloc-1.3.1 install failures on Solaris-10<br>
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-31 20:37:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2732.php">Paul H. Hargrove: "[hwloc-devel] hwloc-1.3.1 libtool broken on Solaris10-x86"</a>
<li><strong>Previous message:</strong> <a href="2730.php">Paul H. Hargrove: "[hwloc-devel] hwloc-1.3.1 install failure w/ older GNU sed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2741.php">Paul H. Hargrove: "[hwloc-devel] hwloc-1.4 install failures on Solaris-10"</a>
<li><strong>Reply:</strong> <a href="2741.php">Paul H. Hargrove: "[hwloc-devel] hwloc-1.4 install failures on Solaris-10"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Testing hwloc-1.3.1 on a Pentium III running Solaris-10, I am getting 
<br>
the following sort failure from &quot;make install&quot;:
<br>
<p>&nbsp;&nbsp;/export/home/phargrov/OMPI/hwloc-1.3.1-solaris10-x86-gcc343//hwloc-1.3.1/./config/install-sh -c -m 644 /export/home/phargrov/OMPI/hwloc-1.3.1-solaris10-x86-gcc343//hwloc-1.3.1/doc/doxygen-doc/man/man3/HWLOC_API_VERSION.3 /export/home/phargrov/OMPI/hwloc-1.3.1-solaris10-x86-gcc343//hwloc-1.3.1/doc/doxygen-doc/man/man3/HWLOC_CPUBIND_NOMEMBIND.3 /export/home/phargrov/OMPI/hwloc-1.3.1-solaris10-x86-gcc343//hwloc-1.3.1/doc/doxygen-doc/man/man3/HWLOC_CPUBIND_PROCESS.3 /export/home/phargrov/OMPI/hwloc-1.3.1-solaris10-x86-gcc343//hwloc-1.3.1/doc/doxygen-doc/man/man3/HWLOC_CPUBIND_STRICT.3 /export/home/phargrov/OMPI/hwloc-1.3.1-solaris10-x86-gcc343//hwloc-1.3.1/doc/doxygen-doc/man/man3/HWLOC_CPUBIND_THREAD.3 /export/home/phargrov/OMPI/hwloc-1.3.1-solaris10-x86-gcc343//hwloc-1.3.1/doc/doxygen-doc/man/man3/HWLOC_MEMBIND_BIND.3 /export/home/phargrov/OMPI/hwloc-1.3.1-solaris10-x86-gcc343//hwloc-1.3.1/doc/doxygen-doc/man/man3/HWLOC_MEMBIND_DEFAULT.3 /export/home/phargrov/OMPI/hwloc-1.3.1-solaris10-x86-gcc343//hwloc-1.3.<br>
1/doc/doxygen-doc/man/man3/HWLOC_MEMBIND_FIRSTTOUCH.3 /export/home/phargrov/OMPI/hwloc-1.3.1-solaris10-x86-gcc343//hwloc-1.3.1/doc/doxygen-doc/man/man3/HWLOC_MEMBIND_INTERLEAVE.3 /export/home/phargrov/OMPI/hwloc-1.3.1-solaris10-x86-gcc343//hwloc-1.3.1/doc/doxygen-doc/man/man3/HWLOC_MEMBIND_MIGRATE.3 /export/home/phargrov/OMPI/hwloc-1.3.1-solaris10-x86-gcc343//hwloc-1.3.1/doc/doxygen-doc/man/man3/HWLOC_MEMBIND_MIXED.3 /export/home/phargrov/OMPI/hwloc-1.3.1-solaris10-x86-gcc343//hwloc-1.3.1/doc/doxygen-doc/man/man3/HWLOC_MEMBIND_NEXTTOUCH.3 /export/home/phargrov/OMPI/hwloc-1.3.1-solaris10-x86-gcc343//hwloc-1.3.1/doc/doxygen-doc/man/man3/HWLOC_MEMBIND_NOCPUBIND.3 /export/home/phargrov/OMPI/hwloc-1.3.1-solaris10-x86-gcc343//hwloc-1.3.1/doc/doxygen-doc/man/man3/HWLOC_MEMBIND_PROCESS.3 /export/home/phargrov/OMPI/hwloc-1.3.1-solaris10-x86-gcc343//hwloc-1.3.1/doc/doxygen-doc/man/man3/HWLOC_MEMBIND_REPLICATE.3 /export/home/phargrov/OMPI/hwloc-1.3.1-solaris10-x86-gcc343//hwloc-1.3.1/doc/doxygen-doc/man/man3/HWLOC_MEMB<br>
IND_STRICT.3 /export/home/phargrov/OMPI/hwloc-1.3.1-solaris10-x86-gcc343//hwloc-1.3.1/doc/doxygen-doc/man/man3/HWLOC_MEMBIND_THREAD.3 /export/home/phargrov/OMPI/hwloc-1.3.1-solaris10-x86-gcc343//hwloc-1.3.1/doc/doxygen-doc/man/man3/HWLOC_OBJ_BRIDGE.3 /export/home/phargrov/OMPI/hwloc-1.3.1-solaris10-x86-gcc343//hwloc-1.3.1/doc/doxygen-doc/man/man3/HWLOC_OBJ_BRIDGE_HOST.3 /export/home/phargrov/OMPI/hwloc-1.3.1-solaris10-x86-gcc343//hwloc-1.3.1/doc/doxygen-doc/man/man3/HWLOC_OBJ_BRIDGE_PCI.3 /export/home/phargrov/OMPI/hwloc-1.3.1-solaris10-x86-gcc343//hwloc-1.3.1/doc/doxygen-doc/man/man3/HWLOC_OBJ_CACHE.3 /export/home/phargrov/OMPI/hwloc-1.3.1-solaris10-x86-gcc343//hwloc-1.3.1/doc/doxygen-doc/man/man3/HWLOC_OBJ_CORE.3 /export/home/phargrov/OMPI/hwloc-1.3.1-solaris10-x86-gcc343//hwloc-1.3.1/doc/doxygen-doc/man/man3/HWLOC_OBJ_GROUP.3 /export/home/phargrov/OMPI/hwloc-1.3.1-solaris10-x86-gcc343//hwloc-1.3.1/doc/doxygen-doc/man/man3/HWLOC_OBJ_MACHINE.3 /export/home/phargrov/OMPI/hwloc-1.3.1-solaris10-x86-gcc343//hwl<br>
oc-1.3.1/doc/doxygen-doc/man/man3/HWLOC_OBJ_MISC.3 /export/home/phargrov/OMPI/hwloc-1.3.1-solaris10-x86-gcc343//hwloc-1.3.1/doc/doxygen-doc/man/man3/HWLOC_OBJ_NODE.3 /export/home/phargrov/OMPI/hwloc-1.3.1-solaris10-x86-gcc343//hwloc-1.3.1/doc/doxygen-doc/man/man3/HWLOC_OBJ_OS_DEVICE.3 /export/home/phargrov/OMPI/hwloc-1.3.1-solaris10-x86-gcc343//hwloc-1.3.1/doc/doxygen-doc/man/man3/HWLOC_OBJ_OSDEV_BLOCK.3 /export/home/phargrov/OMPI/hwloc-1.3.1-solaris10-x86-gcc343//hwloc-1.3.1/doc/doxygen-doc/man/man3/HWLOC_OBJ_OSDEV_DMA.3 /export/home/phargrov/OMPI/hwloc-1.3.1-solaris10-x86-gcc343//hwloc-1.3.1/doc/doxygen-doc/man/man3/HWLOC_OBJ_OSDEV_GPU.3 /export/home/phargrov/OMPI/hwloc-1.3.1-solaris10-x86-gcc343//hwloc-1.3.1/doc/doxygen-doc/man/man3/HWLOC_OBJ_OSDEV_NETWORK.3 /export/home/phargrov/OMPI/hwloc-1.3.1-solaris10-x86-gcc343//hwloc-1.3.1/doc/doxygen-doc/man/man3/HWLOC_OBJ_OSDEV_OPENFABRICS.3 /export/home/phargrov/OMPI/hwloc-1.3.1-solaris10-x86-gcc343//hwloc-1.3.1/doc/doxygen-doc/man/man3/HWLOC_OBJ_PU.3 /export/ho<br>
me/phargrov/O '/export/home/phargrov/OMPI/hwloc-1.3.1-solaris10-x86-gcc343/INST/share/man/man3'
<br>
/export/home/phargrov/OMPI/hwloc-1.3.1-solaris10-x86-gcc343//hwloc-1.3.1/./config/install-sh: 
<br>
/export/home/phargrov/O does not exist.
<br>
<p>I think it would be safe to venture a guess from the truncated name in 
<br>
the &quot;does not exist&quot;, that this command has exceeded the maximum command 
<br>
line length.  The subsequent commands to install manpages suffer the 
<br>
same sort of problem.
<br>
<p>-Paul
<br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
HPC Research Department                   Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2732.php">Paul H. Hargrove: "[hwloc-devel] hwloc-1.3.1 libtool broken on Solaris10-x86"</a>
<li><strong>Previous message:</strong> <a href="2730.php">Paul H. Hargrove: "[hwloc-devel] hwloc-1.3.1 install failure w/ older GNU sed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2741.php">Paul H. Hargrove: "[hwloc-devel] hwloc-1.4 install failures on Solaris-10"</a>
<li><strong>Reply:</strong> <a href="2741.php">Paul H. Hargrove: "[hwloc-devel] hwloc-1.4 install failures on Solaris-10"</a>
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
