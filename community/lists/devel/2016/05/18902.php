<?
$subject_val = "Re: [OMPI devel] [2.0.0rc2] xlc-13.1.0 ICE (hwloc)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May  3 10:47:51 2016" -->
<!-- isoreceived="20160503144751" -->
<!-- sent="Tue, 3 May 2016 09:47:50 -0500" -->
<!-- isosent="20160503144750" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [2.0.0rc2] xlc-13.1.0 ICE (hwloc)" -->
<!-- id="CAANzjEmNXaYgcmpi-bR1hfLODW1_Ew8nJ_P_R-Ab5X2NtrLYpA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAAvDA15di31grnM7ZXhfJQE5mdQ1BRax1P6C+L3-g+AR4yv9Hw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [2.0.0rc2] xlc-13.1.0 ICE (hwloc)<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-03 10:47:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18903.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [2.0.0rc2] build failure on Solaris-11.2 (alloca	undefined)"</a>
<li><strong>Previous message:</strong> <a href="18901.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [2.0.0rc2] misleading error message from configure"</a>
<li><strong>In reply to:</strong> <a href="18897.php">Paul Hargrove: "[OMPI devel] [2.0.0rc2] xlc-13.1.0 ICE (hwloc)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18904.php">Paul Hargrove: "Re: [OMPI devel] [2.0.0rc2] xlc-13.1.0 ICE (hwloc)"</a>
<li><strong>Reply:</strong> <a href="18904.php">Paul Hargrove: "Re: [OMPI devel] [2.0.0rc2] xlc-13.1.0 ICE (hwloc)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Paul,
<br>
<p>What generation of the power arch are you using?
<br>
<p>We have successfully built (a few weeks ago) with the xlc compiler 13.1.3
<br>
on a Power 8 (pcc64le). It might be related the big vs. little endian, but
<br>
I wonder if it is something that was fixed in a point release of the xlc
<br>
compiler. Are you able to upgrade to the latest compiler revision and try
<br>
again?
<br>
<p>(Internally, we are working on getting MTT nightly testing with the xl
<br>
compilers - currently we are just reporting gcc results)
<br>
<p>Thanks,
<br>
Josh
<br>
<p><p>On Tue, May 3, 2016 at 3:11 AM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; For possible inclusion in README:
</span><br>
<span class="quotelev1">&gt; xlc-13.1.0 on Linux dies compiling the embedded hwloc in this rc (details
</span><br>
<span class="quotelev1">&gt; below).
</span><br>
<span class="quotelev1">&gt; The same is true of the released hwloc 1.11.3
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; libtool: compile:  xlc -DHAVE_CONFIG_H -I.
</span><br>
<span class="quotelev1">&gt; -I/gpfs-biou/phh1/OMPI/openmpi-2.0.0rc2-linux-ppc64-xlc-13.1/openmpi-2.0.0rc2/opal/mca/hwloc/hwloc1112/hwloc/src
</span><br>
<span class="quotelev1">&gt; -I../../../../../../opal/include -I../../../../../../ompi/include
</span><br>
<span class="quotelev1">&gt; -I../../../../../../oshmem/include
</span><br>
<span class="quotelev1">&gt; -I../../../../../../opal/mca/hwloc/hwloc1112/hwloc/include/private/autogen
</span><br>
<span class="quotelev1">&gt; -I../../../../../../opal/mca/hwloc/hwloc1112/hwloc/include/hwloc/autogen
</span><br>
<span class="quotelev1">&gt; -I../../../../../../ompi/mpiext/cuda/c
</span><br>
<span class="quotelev1">&gt; -I/gpfs-biou/phh1/OMPI/openmpi-2.0.0rc2-linux-ppc64-xlc-13.1/BLD/opal/mca/hwloc/hwloc1112/hwloc/include
</span><br>
<span class="quotelev1">&gt; -I/gpfs-biou/phh1/OMPI/openmpi-2.0.0rc2-linux-ppc64-xlc-13.1/openmpi-2.0.0rc2/opal/mca/hwloc/hwloc1112/hwloc/include
</span><br>
<span class="quotelev1">&gt; -DHWLOC_INSIDE_LIBHWLOC
</span><br>
<span class="quotelev1">&gt; -DHWLOC_PLUGINS_PATH=\&quot;/gpfs-biou/phh1/OMPI/openmpi-2.0.0rc2-linux-ppc64-xlc-13.1/INST/lib/hwloc\&quot;
</span><br>
<span class="quotelev1">&gt; -I/gpfs-biou/phh1/OMPI/openmpi-2.0.0rc2-linux-ppc64-xlc-13.1/openmpi-2.0.0rc2
</span><br>
<span class="quotelev1">&gt; -I../../../../../..
</span><br>
<span class="quotelev1">&gt; -I/gpfs-biou/phh1/OMPI/openmpi-2.0.0rc2-linux-ppc64-xlc-13.1/openmpi-2.0.0rc2/opal/include
</span><br>
<span class="quotelev1">&gt; -I/gpfs-biou/phh1/OMPI/openmpi-2.0.0rc2-linux-ppc64-xlc-13.1/openmpi-2.0.0rc2/orte/include
</span><br>
<span class="quotelev1">&gt; -I../../../../../../orte/include
</span><br>
<span class="quotelev1">&gt; -I/gpfs-biou/phh1/OMPI/openmpi-2.0.0rc2-linux-ppc64-xlc-13.1/openmpi-2.0.0rc2/ompi/include
</span><br>
<span class="quotelev1">&gt; -I/gpfs-biou/phh1/OMPI/openmpi-2.0.0rc2-linux-ppc64-xlc-13.1/openmpi-2.0.0rc2/oshmem/include
</span><br>
<span class="quotelev1">&gt; -D_REENTRANT
</span><br>
<span class="quotelev1">&gt; -I/gpfs-biou/phh1/OMPI/openmpi-2.0.0rc2-linux-ppc64-xlc-13.1/openmpi-2.0.0rc2/opal/mca/hwloc/hwloc1112/hwloc/include
</span><br>
<span class="quotelev1">&gt; -I/gpfs-biou/phh1/OMPI/openmpi-2.0.0rc2-linux-ppc64-xlc-13.1/BLD/opal/mca/hwloc/hwloc1112/hwloc/include
</span><br>
<span class="quotelev1">&gt; -I/gpfs-biou/phh1/OMPI/openmpi-2.0.0rc2-linux-ppc64-xlc-13.1/openmpi-2.0.0rc2/opal/mca/event/libevent2022/libevent
</span><br>
<span class="quotelev1">&gt; -I/gpfs-biou/phh1/OMPI/openmpi-2.0.0rc2-linux-ppc64-xlc-13.1/openmpi-2.0.0rc2/opal/mca/event/libevent2022/libevent/include
</span><br>
<span class="quotelev1">&gt; -I/gpfs-biou/phh1/OMPI/openmpi-2.0.0rc2-linux-ppc64-xlc-13.1/BLD/opal/mca/event/libevent2022/libevent/include
</span><br>
<span class="quotelev1">&gt; -q64 -g -c
</span><br>
<span class="quotelev1">&gt; /gpfs-biou/phh1/OMPI/openmpi-2.0.0rc2-linux-ppc64-xlc-13.1/openmpi-2.0.0rc2/opal/mca/hwloc/hwloc1112/hwloc/src/topology-xml-nolibxml.c
</span><br>
<span class="quotelev1">&gt; -Wp,-qmakedep=gcc,-MF.deps/topology-xml-nolibxml.TPlo  -qpic -DPIC -o
</span><br>
<span class="quotelev1">&gt; .libs/topology-xml-nolibxml.o
</span><br>
<span class="quotelev1">&gt; /opt/ibm/xlC/13.1.0/bin/.orig/xlc: 1501-224 (S) fatal error in
</span><br>
<span class="quotelev1">&gt; /opt/ibm/xlC/13.1.0/exe/xlcentry: signal 11 received
</span><br>
<span class="quotelev1">&gt; make[4]: *** [topology-xml-nolibxml.lo] Error 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev1">&gt; Computer Science Department               Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/05/18897.php">http://www.open-mpi.org/community/lists/devel/2016/05/18897.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18902/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18903.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [2.0.0rc2] build failure on Solaris-11.2 (alloca	undefined)"</a>
<li><strong>Previous message:</strong> <a href="18901.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [2.0.0rc2] misleading error message from configure"</a>
<li><strong>In reply to:</strong> <a href="18897.php">Paul Hargrove: "[OMPI devel] [2.0.0rc2] xlc-13.1.0 ICE (hwloc)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18904.php">Paul Hargrove: "Re: [OMPI devel] [2.0.0rc2] xlc-13.1.0 ICE (hwloc)"</a>
<li><strong>Reply:</strong> <a href="18904.php">Paul Hargrove: "Re: [OMPI devel] [2.0.0rc2] xlc-13.1.0 ICE (hwloc)"</a>
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
