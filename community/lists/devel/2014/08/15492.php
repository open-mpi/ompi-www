<?
$subject_val = "Re: [OMPI devel] [1.8.2rc3] static linking fails on linux when not building ROMIO";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug  4 01:46:49 2014" -->
<!-- isoreceived="20140804054649" -->
<!-- sent="Sun, 3 Aug 2014 22:46:47 -0700" -->
<!-- isosent="20140804054647" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [1.8.2rc3] static linking fails on linux when not building ROMIO" -->
<!-- id="CAAvDA17t7-pbb4CrPN+dADHLwwhMnp7EdYYPKJayex-4_K6yQQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="[OMPI devel] [1.8.2rc3] static linking fails on linux when not building ROMIO" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [1.8.2rc3] static linking fails on linux when not building ROMIO<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-04 01:46:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15493.php">Paul Hargrove: "[OMPI devel] 1.8.2rc3 cosmetic issues in configure"</a>
<li><strong>Previous message:</strong> <a href="15491.php">Gilles Gouaillardet: "Re: [OMPI devel] 1.8.2rc3 now out"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15501.php">Ralph Castain: "Re: [OMPI devel] [1.8.2rc3] static linking fails on linux when not building ROMIO"</a>
<li><strong>Reply:</strong> <a href="15501.php">Ralph Castain: "Re: [OMPI devel] [1.8.2rc3] static linking fails on linux when not building ROMIO"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I've identified the difference between the platform that does link libutil
<br>
and the one that does not.
<br>
<p>1) libutil is linked (as an OMPI dependency) only on the working system:
<br>
<p>Working system:
<br>
$ grep 'checking for .* LIBS' configure.out
<br>
checking for OPAL LIBS... -lm -lpciaccess -ldl
<br>
checking for ORTE LIBS... -lm -lpciaccess -ldl -ltorque
<br>
checking for OMPI LIBS... -lm -lpciaccess -ldl -ltorque -lrt -lnsl -lutil
<br>
<p>NON-working system:
<br>
$ grep 'checking for .* LIBS' configure.out
<br>
checking for OPAL LIBS... -lm -ldl
<br>
checking for ORTE LIBS... -lm -ldl -ltorque
<br>
checking for OMPI LIBS... -lm -ldl -ltorque
<br>
<p>So, the working system that does link libutil is doing so as an OMPI
<br>
dependency.
<br>
However it is also needed for opal (only caller of openpty is
<br>
opal/util/open_pty.c).
<br>
<p>2) Only the working system is building ROMIO:
<br>
<p>Comparing the 'checking if * can compile' lines of configure output shows
<br>
only ONE difference:
<br>
<p>&nbsp;checking if MCA component fs:ufs can compile... yes
<br>
&nbsp;checking if MCA component fs:pvfs2 can compile... no
<br>
&nbsp;checking if MCA component io:ompio can compile... yes
<br>
-checking if MCA component io:romio can compile... no
<br>
+checking if MCA component io:romio can compile... yes
<br>
&nbsp;checking if MCA component mpool:grdma can compile... yes
<br>
&nbsp;checking if MCA component mpool:sm can compile... yes
<br>
&nbsp;checking if MCA component mpool:udreg can compile... no
<br>
<p>So, it appears that *if* ROMIO is configured in, then &quot;-lutil&quot; gets added
<br>
to OMPI_WRAPPER_EXTRA_LIBS.
<br>
This masks the fact that it is missing from OPAL_WRAPPER_EXTRA_LIBS.
<br>
<p><p>I have confirmed that I can reproduce the static linking failure by adding
<br>
--disable-io-romio to the configure options of the system that worked
<br>
previously.
<br>
<p>So, I update my report (and the email subject line) to:
<br>
&nbsp;&nbsp;&nbsp;Static linking fails on Linux when not building ROMIO
<br>
<p>-Paul
<br>
<p><p><p>On Sun, Aug 3, 2014 at 6:22 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hmm,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On a different Linux/x86-64 host things work as expected with '-lutil'
</span><br>
<span class="quotelev1">&gt; linked explicitly:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ ./INST/bin/mpicc -showme BLD/examples/hello_c.c
</span><br>
<span class="quotelev1">&gt; pgcc BLD/examples/hello_c.c
</span><br>
<span class="quotelev1">&gt; -I/scratch/scratchdirs/hargrove/OMPI/openmpi-1.8.2rc3-linux-x86_64-pgi-14.1/INST/include
</span><br>
<span class="quotelev1">&gt; -L/opt/torque/4.2.7.h1/lib -Wl,-rpath -Wl,/opt/torque/4.2.7.h1/lib
</span><br>
<span class="quotelev1">&gt; -Wl,-rpath -Wl,/opt/torque/4.2.7.h1/lib -Wl,-rpath
</span><br>
<span class="quotelev1">&gt; -Wl,/opt/torque/4.2.7.h1/lib -Wl,-rpath -Wl,/opt/torque/4.2.7.h1/lib
</span><br>
<span class="quotelev1">&gt; -Wl,-rpath
</span><br>
<span class="quotelev1">&gt; -Wl,/scratch/scratchdirs/hargrove/OMPI/openmpi-1.8.2rc3-linux-x86_64-pgi-14.1/INST/lib
</span><br>
<span class="quotelev1">&gt; -L/scratch/scratchdirs/hargrove/OMPI/openmpi-1.8.2rc3-linux-x86_64-pgi-14.1/INST/lib
</span><br>
<span class="quotelev1">&gt; -lmpi -lopen-rte -lopen-pal -lm -lpciaccess -ldl -ltorque -lrt -lnsl -lutil
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Searching for relevant differences now...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sun, Aug 3, 2014 at 4:58 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I've configured the 1.8.2rc3 tarball with &quot;--enable-static
</span><br>
<span class="quotelev2">&gt;&gt; --disable-shared&quot; on a fairly standard Linux/x86-64 platform.  While there
</span><br>
<span class="quotelev2">&gt;&gt; are no problems on the same platform w/o these configure flags, with them I
</span><br>
<span class="quotelev2">&gt;&gt; cannot link any application codes.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $ mpicc -g    hello_c.c   -o hello_c
</span><br>
<span class="quotelev2">&gt;&gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.8.2rc3-linux-x86_64-static/INST/lib/libopen-pal.a(opal_pty.o):
</span><br>
<span class="quotelev2">&gt;&gt; In function `opal_openpty':
</span><br>
<span class="quotelev2">&gt;&gt; opal_pty.c:(.text+0x1): undefined reference to `openpty'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I checked &quot;make openpty&quot; and the manpage says to link with '-lutil'.
</span><br>
<span class="quotelev2">&gt;&gt; The '-showme' does not show libutil:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $ mpicc -showme hello_c.c
</span><br>
<span class="quotelev2">&gt;&gt; gcc hello_c.c
</span><br>
<span class="quotelev2">&gt;&gt; -I/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.8.2rc3-linux-x86_64-static/INST/include
</span><br>
<span class="quotelev2">&gt;&gt; -pthread -L/usr/syscom/opt/torque/4.1.4/lib -Wl,-rpath
</span><br>
<span class="quotelev2">&gt;&gt; -Wl,/usr/syscom/opt/torque/4.1.4/lib -Wl,-rpath
</span><br>
<span class="quotelev2">&gt;&gt; -Wl,/usr/syscom/opt/torque/4.1.4/lib -Wl,-rpath
</span><br>
<span class="quotelev2">&gt;&gt; -Wl,/usr/syscom/opt/torque/4.1.4/lib -Wl,-rpath
</span><br>
<span class="quotelev2">&gt;&gt; -Wl,/usr/syscom/opt/torque/4.1.4/lib -Wl,-rpath
</span><br>
<span class="quotelev2">&gt;&gt; -Wl,/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.8.2rc3-linux-x86_64-static/INST/lib
</span><br>
<span class="quotelev2">&gt;&gt; -Wl,--enable-new-dtags
</span><br>
<span class="quotelev2">&gt;&gt; -L/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.8.2rc3-linux-x86_64-static/INST/lib
</span><br>
<span class="quotelev2">&gt;&gt; -lmpi -lopen-rte -lopen-pal -lm -ldl -ltorque -libverbs -lrdmacm
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It looks like configure is doing the right thing on some level, but
</span><br>
<span class="quotelev2">&gt;&gt; failing to add '-lutil' to the appropriate list of libs
</span><br>
<span class="quotelev2">&gt;&gt; (OPAL_WRAPPER_EXTRA_LIBS?):
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; == Library and Function tests
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; checking if we need -lutil for openpty... yes
</span><br>
<span class="quotelev2">&gt;&gt; checking for openpty... yes
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -Paul
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Future Technologies Group
</span><br>
<span class="quotelev2">&gt;&gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev2">&gt;&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15492/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15493.php">Paul Hargrove: "[OMPI devel] 1.8.2rc3 cosmetic issues in configure"</a>
<li><strong>Previous message:</strong> <a href="15491.php">Gilles Gouaillardet: "Re: [OMPI devel] 1.8.2rc3 now out"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15501.php">Ralph Castain: "Re: [OMPI devel] [1.8.2rc3] static linking fails on linux when not building ROMIO"</a>
<li><strong>Reply:</strong> <a href="15501.php">Ralph Castain: "Re: [OMPI devel] [1.8.2rc3] static linking fails on linux when not building ROMIO"</a>
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
