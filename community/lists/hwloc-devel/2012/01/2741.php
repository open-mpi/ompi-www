<?
$subject_val = "[hwloc-devel] hwloc-1.4 install failures on Solaris-10";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 31 21:52:32 2012" -->
<!-- isoreceived="20120201025232" -->
<!-- sent="Tue, 31 Jan 2012 18:52:13 -0800" -->
<!-- isosent="20120201025213" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="[hwloc-devel] hwloc-1.4 install failures on Solaris-10" -->
<!-- id="4F28A8DD.9040208_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4F289752.60003_at_lbl.gov" -->
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
<strong>Subject:</strong> [hwloc-devel] hwloc-1.4 install failures on Solaris-10<br>
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-31 21:52:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2742.php">Paul H. Hargrove: "[hwloc-devel] hwloc-1.4 libtool broken on Solaris10-x86"</a>
<li><strong>Previous message:</strong> <a href="2740.php">Paul H. Hargrove: "[hwloc-devel] hwloc-1.4 &quot;gmake check&quot; failure on Solaris-10/SPARC/gccfss"</a>
<li><strong>In reply to:</strong> <a href="2731.php">Paul H. Hargrove: "[hwloc-devel] hwloc-1.3.1 install failures on Solaris-10"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2012/02/2751.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.4 install failures on Solaris-10"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2012/02/2751.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.4 install failures on Solaris-10"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The problem I described below is ALSO present in hwloc-1.4
<br>
-Paul
<br>
<p>On 1/31/2012 5:37 PM, Paul H. Hargrove wrote:
<br>
<span class="quotelev1">&gt; Testing hwloc-1.3.1 on a Pentium III running Solaris-10, I am getting 
</span><br>
<span class="quotelev1">&gt; the following sort failure from &quot;make install&quot;:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  /export/home/phargrov/OMPI/hwloc-1.3.1-solaris10-x86-gcc343//hwloc-1.3.1/./config/install-sh 
</span><br>
<span class="quotelev1">&gt; -c -m 644 
</span><br>
<span class="quotelev1">&gt; /export/home/phargrov/OMPI/hwloc-1.3.1-solaris10-x86-gcc343//hwloc-1.3.1/doc/doxygen-doc/man/man3/HWLOC_API_VERSION.3 
</span><br>
<span class="quotelev1">&gt; /export/home/phargrov/OMPI/hwloc-1.3.1-solaris10-x86-gcc343//hwloc-1.3.1/doc/doxygen-doc/man/man3/HWLOC_CPUBIND_NOMEMBIND.3 
</span><br>
<span class="quotelev1">&gt; /export/home/phargrov/OMPI/hwloc-1.3.1-solaris10-x86-gcc343//hwloc-1.3.1/doc/doxygen-doc/man/man3/HWLOC_CPUBIND_PROCESS.3 
</span><br>
<span class="quotelev1">&gt; /export/home/phargrov/OMPI/hwloc-1.3.1-solaris10-x86-gcc343//hwloc-1.3.1/doc/doxygen-doc/man/man3/HWLOC_CPUBIND_STRICT.3 
</span><br>
<span class="quotelev1">&gt; /export/home/phargrov/OMPI/hwloc-1.3.1-solaris10-x86-gcc343//hwloc-1.3.1/doc/doxygen-doc/man/man3/HWLOC_CPUBIND_THREAD.3 
</span><br>
<span class="quotelev1">&gt; /export/home/phargrov/OMPI/hwloc-1.3.1-solaris10-x86-gcc343//hwloc-1.3.1/doc/doxygen-doc/man/man3/HWLOC_MEMBIND_BIND.3 
</span><br>
<span class="quotelev1">&gt; /export/home/phargrov/OMPI/hwloc-1.3.1-solaris10-x86-gcc343//hwloc-1.3.1/doc/doxygen-doc/man/man3/HWLOC_MEMBIND_DEFAULT.3 
</span><br>
<span class="quotelev1">&gt; /export/home/phargrov/OMPI/hwloc-1.3.!
</span><br>
<span class="quotelev1">&gt; 1-solaris10-x86-gcc343//hwloc-1.3.1/doc/doxygen-doc/man/man3/HWLOC_MEMBIND_FIRSTTOUCH.3 
</span><br>
<span class="quotelev1">&gt; /export/home/phargrov/OMPI/hwloc-1.3.1-solaris10-x86-gcc343//hwloc-1.3.1/doc/doxygen-doc/man/man3/HWLOC_MEMBIND_INTERLEAVE.3 
</span><br>
<span class="quotelev1">&gt; /export/home/phargrov/OMPI/hwloc-1.3.1-solaris10-x86-gcc343//hwloc-1.3.1/doc/doxygen-doc/man/man3/HWLOC_MEMBIND_MIGRATE.3 
</span><br>
<span class="quotelev1">&gt; /export/home/phargrov/OMPI/hwloc-1.3.1-solaris10-x86-gcc343//hwloc-1.3.1/doc/doxygen-doc/man/man3/HWLOC_MEMBIND_MIXED.3 
</span><br>
<span class="quotelev1">&gt; /export/home/phargrov/OMPI/hwloc-1.3.1-solaris10-x86-gcc343//hwloc-1.3.1/doc/doxygen-doc/man/man3/HWLOC_MEMBIND_NEXTTOUCH.3 
</span><br>
<span class="quotelev1">&gt; /export/home/phargrov/OMPI/hwloc-1.3.1-solaris10-x86-gcc343//hwloc-1.3.1/doc/doxygen-doc/man/man3/HWLOC_MEMBIND_NOCPUBIND.3 
</span><br>
<span class="quotelev1">&gt; /export/home/phargrov/OMPI/hwloc-1.3.1-solaris10-x86-gcc343//hwloc-1.3.1/doc/doxygen-doc/man/man3/HWLOC_MEMBIND_PROCESS.3 
</span><br>
<span class="quotelev1">&gt; /export/home/phargrov/OMPI/hwloc-1.3.1-solaris10-x86-gcc343//hwloc-1.3.1/doc/doxygen-doc/man/man3/HWLOC_MEMBIND_REPLICATE.3 
</span><br>
<span class="quotelev1">&gt; /export/home/phargrov/OMPI/hwloc-1.3.1-!
</span><br>
<span class="quotelev1">&gt; solaris10-x86-gcc343//hwloc-1.3.1/doc/doxygen-doc/man/man3/HWLOC_MEMBI
</span><br>
<span class="quotelev1">&gt; ND_STRICT.3 
</span><br>
<span class="quotelev1">&gt; /export/home/phargrov/OMPI/hwloc-1.3.1-solaris10-x86-gcc343//hwloc-1.3.1/doc/doxygen-doc/man/man3/HWLOC_MEMBIND_THREAD.3 
</span><br>
<span class="quotelev1">&gt; /export/home/phargrov/OMPI/hwloc-1.3.1-solaris10-x86-gcc343//hwloc-1.3.1/doc/doxygen-doc/man/man3/HWLOC_OBJ_BRIDGE.3 
</span><br>
<span class="quotelev1">&gt; /export/home/phargrov/OMPI/hwloc-1.3.1-solaris10-x86-gcc343//hwloc-1.3.1/doc/doxygen-doc/man/man3/HWLOC_OBJ_BRIDGE_HOST.3 
</span><br>
<span class="quotelev1">&gt; /export/home/phargrov/OMPI/hwloc-1.3.1-solaris10-x86-gcc343//hwloc-1.3.1/doc/doxygen-doc/man/man3/HWLOC_OBJ_BRIDGE_PCI.3 
</span><br>
<span class="quotelev1">&gt; /export/home/phargrov/OMPI/hwloc-1.3.1-solaris10-x86-gcc343//hwloc-1.3.1/doc/doxygen-doc/man/man3/HWLOC_OBJ_CACHE.3 
</span><br>
<span class="quotelev1">&gt; /export/home/phargrov/OMPI/hwloc-1.3.1-solaris10-x86-gcc343//hwloc-1.3.1/doc/doxygen-doc/man/man3/HWLOC_OBJ_CORE.3 
</span><br>
<span class="quotelev1">&gt; /export/home/phargrov/OMPI/hwloc-1.3.1-solaris10-x86-gcc343//hwloc-1.3.1/doc/doxygen-doc/man/man3/HWLOC_OBJ_GROUP.3 
</span><br>
<span class="quotelev1">&gt; /export/home/phargrov/OMPI/hwloc-1.3.1-solaris10-x86-gcc343//hwloc-1.3.1/doc/doxygen-doc/man/man3/HWLOC_OBJ_MACHINE.3 
</span><br>
<span class="quotelev1">&gt; /export/home/phargrov/OMPI/hwlo!
</span><br>
<span class="quotelev1">&gt; c-1.3.1-solaris10-x86-gcc343//hwloc-1.3.1/doc/doxygen-doc/man/man3/HWLOC_OBJ_MISC.3 
</span><br>
<span class="quotelev1">&gt; /export/home/phargrov/OMPI/hwloc-1.3.1-solaris10-x86-gcc343//hwloc-1.3.1/doc/doxygen-doc/man/man3/HWLOC_OBJ_NODE.3 
</span><br>
<span class="quotelev1">&gt; /export/home/phargrov/OMPI/hwloc-1.3.1-solaris10-x86-gcc343//hwloc-1.3.1/doc/doxygen-doc/man/man3/HWLOC_OBJ_OS_DEVICE.3 
</span><br>
<span class="quotelev1">&gt; /export/home/phargrov/OMPI/hwloc-1.3.1-solaris10-x86-gcc343//hwloc-1.3.1/doc/doxygen-doc/man/man3/HWLOC_OBJ_OSDEV_BLOCK.3 
</span><br>
<span class="quotelev1">&gt; /export/home/phargrov/OMPI/hwloc-1.3.1-solaris10-x86-gcc343//hwloc-1.3.1/doc/doxygen-doc/man/man3/HWLOC_OBJ_OSDEV_DMA.3 
</span><br>
<span class="quotelev1">&gt; /export/home/phargrov/OMPI/hwloc-1.3.1-solaris10-x86-gcc343//hwloc-1.3.1/doc/doxygen-doc/man/man3/HWLOC_OBJ_OSDEV_GPU.3 
</span><br>
<span class="quotelev1">&gt; /export/home/phargrov/OMPI/hwloc-1.3.1-solaris10-x86-gcc343//hwloc-1.3.1/doc/doxygen-doc/man/man3/HWLOC_OBJ_OSDEV_NETWORK.3 
</span><br>
<span class="quotelev1">&gt; /export/home/phargrov/OMPI/hwloc-1.3.1-solaris10-x86-gcc343//hwloc-1.3.1/doc/doxygen-doc/man/man3/HWLOC_OBJ_OSDEV_OPENFABRICS.3 
</span><br>
<span class="quotelev1">&gt; /export/home/phargrov/OMPI/hwloc-1.3.1-solaris10-x86-gc!
</span><br>
<span class="quotelev1">&gt; c343//hwloc-1.3.1/doc/doxygen-doc/man/man3/HWLOC_OBJ_PU.3 /export/home
</span><br>
<span class="quotelev1">&gt; /phargrov/O 
</span><br>
<span class="quotelev1">&gt; '/export/home/phargrov/OMPI/hwloc-1.3.1-solaris10-x86-gcc343/INST/share/man/man3'
</span><br>
<span class="quotelev1">&gt; /export/home/phargrov/OMPI/hwloc-1.3.1-solaris10-x86-gcc343//hwloc-1.3.1/./config/install-sh: 
</span><br>
<span class="quotelev1">&gt; /export/home/phargrov/O does not exist.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think it would be safe to venture a guess from the truncated name in 
</span><br>
<span class="quotelev1">&gt; the &quot;does not exist&quot;, that this command has exceeded the maximum 
</span><br>
<span class="quotelev1">&gt; command line length.  The subsequent commands to install manpages 
</span><br>
<span class="quotelev1">&gt; suffer the same sort of problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
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
<li><strong>Next message:</strong> <a href="2742.php">Paul H. Hargrove: "[hwloc-devel] hwloc-1.4 libtool broken on Solaris10-x86"</a>
<li><strong>Previous message:</strong> <a href="2740.php">Paul H. Hargrove: "[hwloc-devel] hwloc-1.4 &quot;gmake check&quot; failure on Solaris-10/SPARC/gccfss"</a>
<li><strong>In reply to:</strong> <a href="2731.php">Paul H. Hargrove: "[hwloc-devel] hwloc-1.3.1 install failures on Solaris-10"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2012/02/2751.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.4 install failures on Solaris-10"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2012/02/2751.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.4 install failures on Solaris-10"</a>
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
