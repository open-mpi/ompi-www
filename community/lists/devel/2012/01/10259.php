<?
$subject_val = "[OMPI devel] 1.4.5rc2 testing linux/ppc/IBM";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 27 00:45:26 2012" -->
<!-- isoreceived="20120127054526" -->
<!-- sent="Thu, 26 Jan 2012 21:45:10 -0800" -->
<!-- isosent="20120127054510" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] 1.4.5rc2 testing linux/ppc/IBM" -->
<!-- id="4F2239E6.4040704_at_lbl.gov" -->
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
<strong>Subject:</strong> [OMPI devel] 1.4.5rc2 testing linux/ppc/IBM<br>
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-27 00:45:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10260.php">Jeff Squyres: "Re: [OMPI devel] 1.4.5rc2 testing linux/ppc/IBM"</a>
<li><strong>Previous message:</strong> <a href="10258.php">Paul Hargrove: "[OMPI devel] 1.4.5rc2 tests on MacOSX Lion (2 pass, 1 FAIL)"</a>
<li><strong>In reply to:</strong> <a href="10225.php">Jeff Squyres: "[OMPI devel] 1.4.5rc2 now released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10260.php">Jeff Squyres: "Re: [OMPI devel] 1.4.5rc2 testing linux/ppc/IBM"</a>
<li><strong>Reply:</strong> <a href="10260.php">Jeff Squyres: "Re: [OMPI devel] 1.4.5rc2 testing linux/ppc/IBM"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
More positive results, with a caveat.
<br>
<p>On this cluster, statfs() is returning ENOENT, which is breaking 
<br>
opal_path_nfs().
<br>
So, these results are with test/opal/util/opal_path_nfs.c &quot;disabled&quot;.
<br>
<p>PASS (defined as &quot;make all install check&quot;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Linux/ppc32 with xlc-11.1 and xlf-13.1 compilers
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Linux/ppc64 with xlc-11.1 and xlf-13.1 compilers
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Linux/ppc64 with &quot;Advance Toolchain 3.0&quot; compilers
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Linux/ppc64 with &quot;Advance Toolchain 4.0&quot; compilers
<br>
<p>Where &quot;Advance Toolchain&quot; are IBM's GCC and bintools variants for POWER7:
<br>
<span class="quotelev1">&gt; gcc (GCC) 4.4.4 20100316 (Advance-Toolchain-3.0) [merged from 
</span><br>
<span class="quotelev1">&gt; redhat/gcc-4_4-branch, 162934]
</span><br>
<span class="quotelev1">&gt; gcc (GCC) 4.5.4 20110524 (Advance-Toolchain-4.0-2) [ibm/gcc-4_5-branch 
</span><br>
<span class="quotelev1">&gt; revision 174864]
</span><br>
<p>-Paul
<br>
<p>On 1/19/2012 9:55 AM, Jeff Squyres wrote:
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
<li><strong>Next message:</strong> <a href="10260.php">Jeff Squyres: "Re: [OMPI devel] 1.4.5rc2 testing linux/ppc/IBM"</a>
<li><strong>Previous message:</strong> <a href="10258.php">Paul Hargrove: "[OMPI devel] 1.4.5rc2 tests on MacOSX Lion (2 pass, 1 FAIL)"</a>
<li><strong>In reply to:</strong> <a href="10225.php">Jeff Squyres: "[OMPI devel] 1.4.5rc2 now released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10260.php">Jeff Squyres: "Re: [OMPI devel] 1.4.5rc2 testing linux/ppc/IBM"</a>
<li><strong>Reply:</strong> <a href="10260.php">Jeff Squyres: "Re: [OMPI devel] 1.4.5rc2 testing linux/ppc/IBM"</a>
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
