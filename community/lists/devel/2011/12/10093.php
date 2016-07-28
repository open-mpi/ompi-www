<?
$subject_val = "[OMPI devel] 1.5.5rc1 tested: hwloc build failure on Red Hat Linux 8";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 14 01:13:20 2011" -->
<!-- isoreceived="20111214061320" -->
<!-- sent="Tue, 13 Dec 2011 22:12:58 -0800" -->
<!-- isosent="20111214061258" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] 1.5.5rc1 tested: hwloc build failure on Red Hat Linux 8" -->
<!-- id="4EE83E6A.2000400_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="A23B6CCA-353C-4E7D-92EB-638DB6C87180_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] 1.5.5rc1 tested: hwloc build failure on Red Hat Linux 8<br>
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-14 01:12:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10094.php">Paul H. Hargrove: "Re: [OMPI devel] 1.5.5rc1 tested: REGRESSION on FreeBSD"</a>
<li><strong>Previous message:</strong> <a href="10092.php">Paul H. Hargrove: "[OMPI devel] OMPI 1.4.5rc1 tested: gm"</a>
<li><strong>In reply to:</strong> <a href="10089.php">Jeff Squyres: "[OMPI devel] 1.5.5rc1 is out"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10097.php">Brice Goglin: "Re: [OMPI devel] 1.5.5rc1 tested: hwloc build failure on Red Hat Linux 8"</a>
<li><strong>Reply:</strong> <a href="10097.php">Brice Goglin: "Re: [OMPI devel] 1.5.5rc1 tested: hwloc build failure on Red Hat Linux 8"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I cannot hwloc in build 1.5.5rc1 on the following system:
<br>
<p>System 2: Linux/x86
<br>
<span class="quotelev1">&gt;  $ cat /etc/redhat-release
</span><br>
<span class="quotelev1">&gt;  Red Hat Linux release 8.0 (Psyche)
</span><br>
<span class="quotelev1">&gt;  $ uname -a
</span><br>
<span class="quotelev1">&gt;  Linux [hostname] 2.4.21-60.ELsmp #1 SMP Fri Aug 28 06:45:10 EDT 2009 
</span><br>
<span class="quotelev1">&gt; i686 i686 i386 GNU/Linux
</span><br>
<span class="quotelev1">&gt;  $ gcc --version | head -1
</span><br>
<span class="quotelev1">&gt;  gcc (GCC) 3.4.0 
</span><br>
<p>The error seen is:
<br>
<span class="quotelev1">&gt; make[4]: Entering directory 
</span><br>
<span class="quotelev1">&gt; `/home/pcp1/phargrov/openmpi-1.5.5rc1/BUILD-dflt/opal/mca/hwloc/hwloc122ompi/hwloc/src'
</span><br>
<span class="quotelev1">&gt;   CC     topology.lo
</span><br>
<span class="quotelev1">&gt;   CC     traversal.lo
</span><br>
<span class="quotelev1">&gt;   CC     distances.lo
</span><br>
<span class="quotelev1">&gt;   CC     topology-synthetic.lo
</span><br>
<span class="quotelev1">&gt;   CC     topology-xml.lo
</span><br>
<span class="quotelev1">&gt;   CC     bind.lo
</span><br>
<span class="quotelev1">&gt;   CC     cpuset.lo
</span><br>
<span class="quotelev1">&gt;   CC     misc.lo
</span><br>
<span class="quotelev1">&gt;   CC     topology-linux.lo
</span><br>
<span class="quotelev1">&gt; ../../../../../../../opal/mca/hwloc/hwloc122ompi/hwloc/src/topology-linux.c: 
</span><br>
<span class="quotelev1">&gt; In function `opal_hwloc122_hwloc_linux_set_tid_cpubind':
</span><br>
<span class="quotelev1">&gt; ../../../../../../../opal/mca/hwloc/hwloc122ompi/hwloc/src/topology-linux.c:294: 
</span><br>
<span class="quotelev1">&gt; `cpu_set_t' undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt; ../../../../../../../opal/mca/hwloc/hwloc122ompi/hwloc/src/topology-linux.c:294: 
</span><br>
<span class="quotelev1">&gt; (Each undeclared identifier is reported only once
</span><br>
<span class="quotelev1">&gt; ../../../../../../../opal/mca/hwloc/hwloc122ompi/hwloc/src/topology-linux.c:294: 
</span><br>
<span class="quotelev1">&gt; for each function it appears in.)
</span><br>
<span class="quotelev1">&gt; ../../../../../../../opal/mca/hwloc/hwloc122ompi/hwloc/src/topology-linux.c:294: 
</span><br>
<span class="quotelev1">&gt; parse error before &quot;linux_set&quot;
</span><br>
<span class="quotelev1">&gt; ../../../../../../../opal/mca/hwloc/hwloc122ompi/hwloc/src/topology-linux.c:297: 
</span><br>
<span class="quotelev1">&gt; `linux_set' undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt; ../../../../../../../opal/mca/hwloc/hwloc122ompi/hwloc/src/topology-linux.c: 
</span><br>
<span class="quotelev1">&gt; In function `opal_hwloc122_hwloc_linux_get_tid_cpubind':
</span><br>
<span class="quotelev1">&gt; ../../../../../../../opal/mca/hwloc/hwloc122ompi/hwloc/src/topology-linux.c:387: 
</span><br>
<span class="quotelev1">&gt; `cpu_set_t' undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt; ../../../../../../../opal/mca/hwloc/hwloc122ompi/hwloc/src/topology-linux.c:387: 
</span><br>
<span class="quotelev1">&gt; parse error before &quot;linux_set&quot;
</span><br>
<span class="quotelev1">&gt; ../../../../../../../opal/mca/hwloc/hwloc122ompi/hwloc/src/topology-linux.c:393: 
</span><br>
<span class="quotelev1">&gt; `linux_set' undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt; ../../../../../../../opal/mca/hwloc/hwloc122ompi/hwloc/src/topology-linux.c:399: 
</span><br>
<span class="quotelev1">&gt; `CPU_SETSIZE' undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt; make[4]: *** [topology-linux.lo] Error 1
</span><br>
<p>Note that PLPA always built just fine on this system.
<br>
<p>Jeff, Brian and George have inactive accounts on this system, and I can 
<br>
reactivate one of those or add a new one as needed.
<br>
<p>-Paul
<br>
<p><p>On 12/13/2011 8:36 PM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; In the usual place:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      <a href="http://www.open-mpi.org/software/ompi/v1.5/">http://www.open-mpi.org/software/ompi/v1.5/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please test!  I would really like to get this out by the end of the week.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Two issues *might* still be considered for this release:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      Putting back the openib minor fixes
</span><br>
<span class="quotelev1">&gt;      <a href="https://svn.open-mpi.org/trac/ompi/ticket/2930">https://svn.open-mpi.org/trac/ompi/ticket/2930</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      Making the &quot;your SM file is on an NFS!&quot; warning disable-able
</span><br>
<span class="quotelev1">&gt;      (this is the v1.4 ticket)
</span><br>
<span class="quotelev1">&gt;      <a href="https://svn.open-mpi.org/trac/ompi/ticket/2937">https://svn.open-mpi.org/trac/ompi/ticket/2937</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; They would both need to be fixed in the *immediate future* to be considered.
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
<li><strong>Next message:</strong> <a href="10094.php">Paul H. Hargrove: "Re: [OMPI devel] 1.5.5rc1 tested: REGRESSION on FreeBSD"</a>
<li><strong>Previous message:</strong> <a href="10092.php">Paul H. Hargrove: "[OMPI devel] OMPI 1.4.5rc1 tested: gm"</a>
<li><strong>In reply to:</strong> <a href="10089.php">Jeff Squyres: "[OMPI devel] 1.5.5rc1 is out"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10097.php">Brice Goglin: "Re: [OMPI devel] 1.5.5rc1 tested: hwloc build failure on Red Hat Linux 8"</a>
<li><strong>Reply:</strong> <a href="10097.php">Brice Goglin: "Re: [OMPI devel] 1.5.5rc1 tested: hwloc build failure on Red Hat Linux 8"</a>
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
