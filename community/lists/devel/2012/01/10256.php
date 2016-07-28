<?
$subject_val = "[OMPI devel] 1.4.5rc2 testing FAILURE: icc/ia64 atomics";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 26 15:53:32 2012" -->
<!-- isoreceived="20120126205332" -->
<!-- sent="Thu, 26 Jan 2012 12:53:18 -0800" -->
<!-- isosent="20120126205318" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] 1.4.5rc2 testing FAILURE: icc/ia64 atomics" -->
<!-- id="4F21BD3E.9000602_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="95BA01C2-D3A1-4EDA-AD55-06542CBAF83E_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] 1.4.5rc2 testing FAILURE: icc/ia64 atomics<br>
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-26 15:53:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10257.php">Jeff Squyres: "Re: [OMPI devel] Gather(linear_sync) is truncated using derived data type"</a>
<li><strong>Previous message:</strong> <a href="10255.php">Hugo Daniel Meyer: "Re: [OMPI devel] Retrying a MPI_SEND"</a>
<li><strong>In reply to:</strong> <a href="10225.php">Jeff Squyres: "[OMPI devel] 1.4.5rc2 now released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10259.php">Paul H. Hargrove: "[OMPI devel] 1.4.5rc2 testing linux/ppc/IBM"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Testing Intel compilers on Linux/IA64, I cannot build ompi-1.4.5rc2.
<br>
&quot;make all&quot; is failing building the atomics, as shown below.
<br>
Error is the same for icc versions 9.1.046 and 10.0.025.
<br>
<p>-Paul
<br>
<p><span class="quotelev1">&gt; rm -f atomic-asm.S
</span><br>
<span class="quotelev1">&gt; ln -s 
</span><br>
<span class="quotelev1">&gt; &quot;/mnt/home/c_phargrov/OMPI/openmpi-1.4.5rc2-linux-ia64-icc-9.1//openmpi-1.4.5rc2/opal/asm/generated/atomic-ia64-linux-nongas.s&quot; 
</span><br>
<span class="quotelev1">&gt; atomic-asm.S
</span><br>
<span class="quotelev1">&gt; depbase=`echo atomic-asm.lo | sed 's|[^/]*$|.deps/&amp;|;s|\.lo$||'`;\
</span><br>
<span class="quotelev1">&gt; /bin/sh ../../libtool   --mode=compile icc -DHAVE_CONFIG_H -I. 
</span><br>
<span class="quotelev1">&gt; -I/mnt/home/c_phargrov/OMPI/openmpi-1.4.5rc2-linux-ia64-icc-9.1//openmpi-1.4.5rc2/opal/asm 
</span><br>
<span class="quotelev1">&gt; -I../../opal/include -I../../orte/include -I../../ompi/include 
</span><br>
<span class="quotelev1">&gt; -I../../opal/mca/paffinity/linux/plpa/src/libplpa   
</span><br>
<span class="quotelev1">&gt; -I/mnt/home/c_phargrov/OMPI/openmpi-1.4.5rc2-linux-ia64-icc-9.1//openmpi-1.4.5rc2 
</span><br>
<span class="quotelev1">&gt; -I../.. 
</span><br>
<span class="quotelev1">&gt; -I/mnt/home/c_phargrov/OMPI/openmpi-1.4.5rc2-linux-ia64-icc-9.1//openmpi-1.4.5rc2/opal/include 
</span><br>
<span class="quotelev1">&gt; -I/mnt/home/c_phargrov/OMPI/openmpi-1.4.5rc2-linux-ia64-icc-9.1//openmpi-1.4.5rc2/orte/include 
</span><br>
<span class="quotelev1">&gt; -I/mnt/home/c_phargrov/OMPI/openmpi-1.4.5rc2-linux-ia64-icc-9.1//openmpi-1.4.5rc2/ompi/include    
</span><br>
<span class="quotelev1">&gt; -O3 -DNDEBUG -finline-functions -fno-strict-aliasing -restrict -MT 
</span><br>
<span class="quotelev1">&gt; atomic-asm.lo -MD -MP -MF $depbase.Tpo -c -o atomic-asm.lo 
</span><br>
<span class="quotelev1">&gt; atomic-asm.S &amp;&amp;\
</span><br>
<span class="quotelev1">&gt; mv -f $depbase.Tpo $depbase.Plo
</span><br>
<span class="quotelev1">&gt; libtool: compile:  icc -DHAVE_CONFIG_H -I. 
</span><br>
<span class="quotelev1">&gt; -I/mnt/home/c_phargrov/OMPI/openmpi-1.4.5rc2-linux-ia64-icc-9.1//openmpi-1.4.5rc2/opal/asm 
</span><br>
<span class="quotelev1">&gt; -I../../opal/include -I../../orte/include -I../../ompi/include 
</span><br>
<span class="quotelev1">&gt; -I../../opal/mca/paffinity/linux/plpa/src/libplpa 
</span><br>
<span class="quotelev1">&gt; -I/mnt/home/c_phargrov/OMPI/openmpi-1.4.5rc2-linux-ia64-icc-9.1//openmpi-1.4.5rc2 
</span><br>
<span class="quotelev1">&gt; -I../.. 
</span><br>
<span class="quotelev1">&gt; -I/mnt/home/c_phargrov/OMPI/openmpi-1.4.5rc2-linux-ia64-icc-9.1//openmpi-1.4.5rc2/opal/include 
</span><br>
<span class="quotelev1">&gt; -I/mnt/home/c_phargrov/OMPI/openmpi-1.4.5rc2-linux-ia64-icc-9.1//openmpi-1.4.5rc2/orte/include 
</span><br>
<span class="quotelev1">&gt; -I/mnt/home/c_phargrov/OMPI/openmpi-1.4.5rc2-linux-ia64-icc-9.1//openmpi-1.4.5rc2/ompi/include 
</span><br>
<span class="quotelev1">&gt; -O3 -DNDEBUG -finline-functions -fno-strict-aliasing -restrict -MT 
</span><br>
<span class="quotelev1">&gt; atomic-asm.lo -MD -MP -MF .deps/atomic-asm.Tpo -c atomic-asm.S  -fPIC 
</span><br>
<span class="quotelev1">&gt; -DPIC -o .libs/atomic-asm.o
</span><br>
<span class="quotelev1">&gt; /tmp/iccbj3z6c.s(1) : error A2040: Unexpected token: Unary Diez 
</span><br>
<span class="quotelev1">&gt; Operator at: Start
</span><br>
<span class="quotelev1">&gt; /tmp/iccbj3z6c.s(2) : error A2040: Unexpected token: Unary Diez 
</span><br>
<span class="quotelev1">&gt; Operator at: Start
</span><br>
<span class="quotelev1">&gt; /tmp/iccbj3z6c.s(3) : error A2040: Unexpected token: Unary Diez 
</span><br>
<span class="quotelev1">&gt; Operator at: Start
</span><br>
<span class="quotelev1">&gt; /tmp/iccbj3z6c.s(4) : error A2040: Unexpected token: Unary Diez 
</span><br>
<span class="quotelev1">&gt; Operator at: Start
</span><br>
<span class="quotelev1">&gt; .libs/atomic-asm.o - 4 error(s), 0 warning(s)
</span><br>
<span class="quotelev1">&gt; make[2]: *** [atomic-asm.lo] Error 1
</span><br>
<p><p><p><p>On 1/19/2012 9:55 AM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Please test:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      <a href="http://www.open-mpi.org/software/ompi/v1.4/">http://www.open-mpi.org/software/ompi/v1.4/</a>
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
<li><strong>Next message:</strong> <a href="10257.php">Jeff Squyres: "Re: [OMPI devel] Gather(linear_sync) is truncated using derived data type"</a>
<li><strong>Previous message:</strong> <a href="10255.php">Hugo Daniel Meyer: "Re: [OMPI devel] Retrying a MPI_SEND"</a>
<li><strong>In reply to:</strong> <a href="10225.php">Jeff Squyres: "[OMPI devel] 1.4.5rc2 now released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10259.php">Paul H. Hargrove: "[OMPI devel] 1.4.5rc2 testing linux/ppc/IBM"</a>
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
