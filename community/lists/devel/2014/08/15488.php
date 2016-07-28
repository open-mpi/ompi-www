<?
$subject_val = "Re: [OMPI devel] [1.8.2rc3] static linking fails on linux (openpty undefined)";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Aug  3 21:22:25 2014" -->
<!-- isoreceived="20140804012225" -->
<!-- sent="Sun, 3 Aug 2014 18:22:23 -0700" -->
<!-- isosent="20140804012223" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [1.8.2rc3] static linking fails on linux (openpty undefined)" -->
<!-- id="CAAvDA14OPAvPKUJn8Og9dc_nmML8Ow2WRD_hAfd7azYJFjhrLw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAAvDA17dxMMBjuOt-dwDFacZxgrd6J6==3WdmhEumQW8njbGJg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [1.8.2rc3] static linking fails on linux (openpty undefined)<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-03 21:22:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15489.php">Gilles Gouaillardet: "Re: [OMPI devel] OMPI devel] trunk warnings on x86"</a>
<li><strong>Previous message:</strong> <a href="15487.php">Paul Hargrove: "[OMPI devel] [1.8.2rc3] static linking fails on linux (openpty undefined)"</a>
<li><strong>In reply to:</strong> <a href="15487.php">Paul Hargrove: "[OMPI devel] [1.8.2rc3] static linking fails on linux (openpty undefined)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hmm,
<br>
<p>On a different Linux/x86-64 host things work as expected with '-lutil'
<br>
linked explicitly:
<br>
<p>$ ./INST/bin/mpicc -showme BLD/examples/hello_c.c
<br>
pgcc BLD/examples/hello_c.c
<br>
-I/scratch/scratchdirs/hargrove/OMPI/openmpi-1.8.2rc3-linux-x86_64-pgi-14.1/INST/include
<br>
-L/opt/torque/4.2.7.h1/lib -Wl,-rpath -Wl,/opt/torque/4.2.7.h1/lib
<br>
-Wl,-rpath -Wl,/opt/torque/4.2.7.h1/lib -Wl,-rpath
<br>
-Wl,/opt/torque/4.2.7.h1/lib -Wl,-rpath -Wl,/opt/torque/4.2.7.h1/lib
<br>
-Wl,-rpath
<br>
-Wl,/scratch/scratchdirs/hargrove/OMPI/openmpi-1.8.2rc3-linux-x86_64-pgi-14.1/INST/lib
<br>
-L/scratch/scratchdirs/hargrove/OMPI/openmpi-1.8.2rc3-linux-x86_64-pgi-14.1/INST/lib
<br>
-lmpi -lopen-rte -lopen-pal -lm -lpciaccess -ldl -ltorque -lrt -lnsl -lutil
<br>
<p>Searching for relevant differences now...
<br>
<p>-Paul
<br>
<p><p>On Sun, Aug 3, 2014 at 4:58 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've configured the 1.8.2rc3 tarball with &quot;--enable-static
</span><br>
<span class="quotelev1">&gt; --disable-shared&quot; on a fairly standard Linux/x86-64 platform.  While there
</span><br>
<span class="quotelev1">&gt; are no problems on the same platform w/o these configure flags, with them I
</span><br>
<span class="quotelev1">&gt; cannot link any application codes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ mpicc -g    hello_c.c   -o hello_c
</span><br>
<span class="quotelev1">&gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.8.2rc3-linux-x86_64-static/INST/lib/libopen-pal.a(opal_pty.o):
</span><br>
<span class="quotelev1">&gt; In function `opal_openpty':
</span><br>
<span class="quotelev1">&gt; opal_pty.c:(.text+0x1): undefined reference to `openpty'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I checked &quot;make openpty&quot; and the manpage says to link with '-lutil'.
</span><br>
<span class="quotelev1">&gt; The '-showme' does not show libutil:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ mpicc -showme hello_c.c
</span><br>
<span class="quotelev1">&gt; gcc hello_c.c
</span><br>
<span class="quotelev1">&gt; -I/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.8.2rc3-linux-x86_64-static/INST/include
</span><br>
<span class="quotelev1">&gt; -pthread -L/usr/syscom/opt/torque/4.1.4/lib -Wl,-rpath
</span><br>
<span class="quotelev1">&gt; -Wl,/usr/syscom/opt/torque/4.1.4/lib -Wl,-rpath
</span><br>
<span class="quotelev1">&gt; -Wl,/usr/syscom/opt/torque/4.1.4/lib -Wl,-rpath
</span><br>
<span class="quotelev1">&gt; -Wl,/usr/syscom/opt/torque/4.1.4/lib -Wl,-rpath
</span><br>
<span class="quotelev1">&gt; -Wl,/usr/syscom/opt/torque/4.1.4/lib -Wl,-rpath
</span><br>
<span class="quotelev1">&gt; -Wl,/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.8.2rc3-linux-x86_64-static/INST/lib
</span><br>
<span class="quotelev1">&gt; -Wl,--enable-new-dtags
</span><br>
<span class="quotelev1">&gt; -L/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.8.2rc3-linux-x86_64-static/INST/lib
</span><br>
<span class="quotelev1">&gt; -lmpi -lopen-rte -lopen-pal -lm -ldl -ltorque -libverbs -lrdmacm
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It looks like configure is doing the right thing on some level, but
</span><br>
<span class="quotelev1">&gt; failing to add '-lutil' to the appropriate list of libs
</span><br>
<span class="quotelev1">&gt; (OPAL_WRAPPER_EXTRA_LIBS?):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ============================================================================
</span><br>
<span class="quotelev1">&gt; == Library and Function tests
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ============================================================================
</span><br>
<span class="quotelev1">&gt; checking if we need -lutil for openpty... yes
</span><br>
<span class="quotelev1">&gt; checking for openpty... yes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Future Technologies Group
</span><br>
<span class="quotelev1">&gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15488/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15489.php">Gilles Gouaillardet: "Re: [OMPI devel] OMPI devel] trunk warnings on x86"</a>
<li><strong>Previous message:</strong> <a href="15487.php">Paul Hargrove: "[OMPI devel] [1.8.2rc3] static linking fails on linux (openpty undefined)"</a>
<li><strong>In reply to:</strong> <a href="15487.php">Paul Hargrove: "[OMPI devel] [1.8.2rc3] static linking fails on linux (openpty undefined)"</a>
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
