<?
$subject_val = "[OMPI devel] 1.4.5rc2 opal_path_nfs failure follow-up";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 30 05:15:12 2012" -->
<!-- isoreceived="20120130101512" -->
<!-- sent="Mon, 30 Jan 2012 02:14:51 -0800" -->
<!-- isosent="20120130101451" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] 1.4.5rc2 opal_path_nfs failure follow-up" -->
<!-- id="4F266D9B.20404_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4F262A9B.508_at_lbl.gov" -->
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
<strong>Subject:</strong> [OMPI devel] 1.4.5rc2 opal_path_nfs failure follow-up<br>
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-30 05:14:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10276.php">TERRY DONTJE: "Re: [OMPI devel] 1.4.5rc2 more Solaris Studio compiler results"</a>
<li><strong>Previous message:</strong> <a href="10274.php">Hugo Daniel Meyer: "Re: [OMPI devel] Pessimist Event Logger"</a>
<li><strong>In reply to:</strong> <a href="10273.php">Paul H. Hargrove: "[OMPI devel] 1.4.5rc2 linux/ppc/xlc-{7,8,9} [3 PASS, 3 FAIL]"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 1/29/2012 9:28 PM, Paul H. Hargrove wrote:
<br>
[snip]
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I also had to disable the opal_path_nfs test again on the POWER6 
</span><br>
<span class="quotelev1">&gt; machine, even w/ the linux-&gt;__linux__ change.
</span><br>
<span class="quotelev1">&gt; I will report on that when/if I can determine the cause.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Following up on the opal_path_nfs test failures I reported when testing 
<br>
xlc-[789].0:
<br>
<p>I added tracing to print errno information for any failing statfs() 
<br>
calls in opal/util/path.c.
<br>
The following is what then see from &quot;make check -C test/util&quot;:
<br>
<span class="quotelev1">&gt; Making check in util
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory `/home/hargrove/openmpi-1.4.5rc2/test/util'
</span><br>
<span class="quotelev1">&gt; make  opal_path_nfs
</span><br>
<span class="quotelev1">&gt; make[3]: Entering directory `/home/hargrove/openmpi-1.4.5rc2/test/util'
</span><br>
<span class="quotelev1">&gt; /bin/sh ../../libtool --tag=CC   --mode=link gcc  -O3 -DNDEBUG 
</span><br>
<span class="quotelev1">&gt; -finline-functions -fno-strict-aliasing -pthread  -export-dynamic   -o 
</span><br>
<span class="quotelev1">&gt; opal_path_nfs opal_path_nfs.o ../../opal/libopen-pal.la 
</span><br>
<span class="quotelev1">&gt; ../../test/support/libsupport.a -lnsl -lutil  -lm
</span><br>
<span class="quotelev1">&gt; libtool: link: gcc -O3 -DNDEBUG -finline-functions 
</span><br>
<span class="quotelev1">&gt; -fno-strict-aliasing -pthread -o .libs/opal_path_nfs opal_path_nfs.o 
</span><br>
<span class="quotelev1">&gt; -Wl,--export-dynamic  ../../opal/.libs/libopen-pal.so -ldl 
</span><br>
<span class="quotelev1">&gt; ../../test/support/libsupport.a -lnsl -lutil -lm -pthread -Wl,-rpath 
</span><br>
<span class="quotelev1">&gt; -Wl,/home/hargrove/openmpi-1.4.5rc2/INST/lib
</span><br>
<span class="quotelev1">&gt; make[3]: Leaving directory `/home/hargrove/openmpi-1.4.5rc2/test/util'
</span><br>
<span class="quotelev1">&gt; make  check-TESTS
</span><br>
<span class="quotelev1">&gt; make[3]: Entering directory `/home/hargrove/openmpi-1.4.5rc2/test/util'
</span><br>
<span class="quotelev1">&gt; @ statfs(&quot;/projects&quot;) failed (14:Bad address)
</span><br>
<span class="quotelev1">&gt; @ statfs(&quot;&quot;) failed (2:No such file or directory)
</span><br>
<span class="quotelev1">&gt;  Failure : Mismatch: input &quot;/projects&quot;, expected:1 got:0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; SUPPORT: OMPI Test failed: opal_path_nfs() (1 of 16 failed)
</span><br>
<span class="quotelev1">&gt; FAIL: opal_path_nfs
</span><br>
<span class="quotelev1">&gt; ========================================================
</span><br>
<span class="quotelev1">&gt; 1 of 1 test failed
</span><br>
<span class="quotelev1">&gt; Please report to <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
</span><br>
<span class="quotelev1">&gt; ========================================================
</span><br>
<p>As you can see, the statfs() call for the &quot;/projects&quot; mount point failed 
<br>
with errno=EFAULT.
<br>
I cannot think of any sane way to account for such an error return.
<br>
<p>Use of strace confirms:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;statfs(&quot;/projects&quot;, 0xffffd8e0)         = -1 EFAULT (Bad address)
<br>
while other mount points are fine, such as:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;statfs(&quot;/opt/shared&quot;, {f_type=&quot;NFS_SUPER_MAGIC&quot;, f_bsize=8192, 
<br>
f_blocks=131068, f_bfree=50166, f_bavail=50166, f_files=0, f_ffree=0, 
<br>
f_fsid={0, 0}, f_namelen=255, f_frsize=8192}) = 0
<br>
<p>Not sure what one could expect opal_path_nfs() to do in the face of such 
<br>
an odd failure.
<br>
If anybody has suggestions for follow-up, let me know.
<br>
And, yes, /projects *is* an NFS mount.
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
<li><strong>Next message:</strong> <a href="10276.php">TERRY DONTJE: "Re: [OMPI devel] 1.4.5rc2 more Solaris Studio compiler results"</a>
<li><strong>Previous message:</strong> <a href="10274.php">Hugo Daniel Meyer: "Re: [OMPI devel] Pessimist Event Logger"</a>
<li><strong>In reply to:</strong> <a href="10273.php">Paul H. Hargrove: "[OMPI devel] 1.4.5rc2 linux/ppc/xlc-{7,8,9} [3 PASS, 3 FAIL]"</a>
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
