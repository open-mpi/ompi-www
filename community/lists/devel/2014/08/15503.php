<?
$subject_val = "Re: [OMPI devel] [1.8.2rc3] static linking fails on linux when not building ROMIO";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug  4 18:50:27 2014" -->
<!-- isoreceived="20140804225027" -->
<!-- sent="Mon, 4 Aug 2014 15:50:25 -0700" -->
<!-- isosent="20140804225025" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [1.8.2rc3] static linking fails on linux when not building ROMIO" -->
<!-- id="CAAvDA17Tk4W-j1PS49gARoV6PLOX33SkuF6WSDpE9gT3RsTp0g_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="41861B3E-FAA7-445A-96D6-7E334462354E_at_open-mpi.org" -->
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
<strong>Date:</strong> 2014-08-04 18:50:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15504.php">Ralph Castain: "Re: [OMPI devel] [1.8.2rc3] static linking fails on linux when not building ROMIO"</a>
<li><strong>Previous message:</strong> <a href="15502.php">Paul Hargrove: "[OMPI devel] oshmem enabled by default"</a>
<li><strong>In reply to:</strong> <a href="15501.php">Ralph Castain: "Re: [OMPI devel] [1.8.2rc3] static linking fails on linux when not building ROMIO"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15504.php">Ralph Castain: "Re: [OMPI devel] [1.8.2rc3] static linking fails on linux when not building ROMIO"</a>
<li><strong>Reply:</strong> <a href="15504.php">Ralph Castain: "Re: [OMPI devel] [1.8.2rc3] static linking fails on linux when not building ROMIO"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph and Jeff,
<br>
<p>I've been digging and find the problem is wider than just the one library
<br>
and has manifestations specific to FreeBSD, NetBSD and Solaris.  I am
<br>
adding new info to the ticket as I unearth it.
<br>
<p>Additionally, it appears this existed in 1.8, 1.8.1 and in the 1.7 series
<br>
as well.
<br>
So, would suggest this NOT be a blocker for a 1.8.2 release.
<br>
<p>Of course I am willing to provide testing if you still want to push for a
<br>
quick resolution.
<br>
<p>-Paul
<br>
<p><p>On Mon, Aug 4, 2014 at 1:27 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Okay, I filed a blocker on this for 1.8.2 and assigned it to Jeff. I took
</span><br>
<span class="quotelev1">&gt; a crack at fixing it, but came up short :-(
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 3, 2014, at 10:46 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've identified the difference between the platform that does link libutil
</span><br>
<span class="quotelev1">&gt; and the one that does not.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1) libutil is linked (as an OMPI dependency) only on the working system:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Working system:
</span><br>
<span class="quotelev1">&gt; $ grep 'checking for .* LIBS' configure.out
</span><br>
<span class="quotelev1">&gt; checking for OPAL LIBS... -lm -lpciaccess -ldl
</span><br>
<span class="quotelev1">&gt; checking for ORTE LIBS... -lm -lpciaccess -ldl -ltorque
</span><br>
<span class="quotelev1">&gt; checking for OMPI LIBS... -lm -lpciaccess -ldl -ltorque -lrt -lnsl -lutil
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; NON-working system:
</span><br>
<span class="quotelev1">&gt; $ grep 'checking for .* LIBS' configure.out
</span><br>
<span class="quotelev1">&gt; checking for OPAL LIBS... -lm -ldl
</span><br>
<span class="quotelev1">&gt; checking for ORTE LIBS... -lm -ldl -ltorque
</span><br>
<span class="quotelev1">&gt; checking for OMPI LIBS... -lm -ldl -ltorque
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So, the working system that does link libutil is doing so as an OMPI
</span><br>
<span class="quotelev1">&gt; dependency.
</span><br>
<span class="quotelev1">&gt; However it is also needed for opal (only caller of openpty is
</span><br>
<span class="quotelev1">&gt; opal/util/open_pty.c).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2) Only the working system is building ROMIO:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Comparing the 'checking if * can compile' lines of configure output shows
</span><br>
<span class="quotelev1">&gt; only ONE difference:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  checking if MCA component fs:ufs can compile... yes
</span><br>
<span class="quotelev1">&gt;  checking if MCA component fs:pvfs2 can compile... no
</span><br>
<span class="quotelev1">&gt;  checking if MCA component io:ompio can compile... yes
</span><br>
<span class="quotelev1">&gt; -checking if MCA component io:romio can compile... no
</span><br>
<span class="quotelev1">&gt; +checking if MCA component io:romio can compile... yes
</span><br>
<span class="quotelev1">&gt;  checking if MCA component mpool:grdma can compile... yes
</span><br>
<span class="quotelev1">&gt;  checking if MCA component mpool:sm can compile... yes
</span><br>
<span class="quotelev1">&gt;  checking if MCA component mpool:udreg can compile... no
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So, it appears that *if* ROMIO is configured in, then &quot;-lutil&quot; gets added
</span><br>
<span class="quotelev1">&gt; to OMPI_WRAPPER_EXTRA_LIBS.
</span><br>
<span class="quotelev1">&gt; This masks the fact that it is missing from OPAL_WRAPPER_EXTRA_LIBS.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have confirmed that I can reproduce the static linking failure by adding
</span><br>
<span class="quotelev1">&gt; --disable-io-romio to the configure options of the system that worked
</span><br>
<span class="quotelev1">&gt; previously.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So, I update my report (and the email subject line) to:
</span><br>
<span class="quotelev1">&gt;    Static linking fails on Linux when not building ROMIO
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sun, Aug 3, 2014 at 6:22 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hmm,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On a different Linux/x86-64 host things work as expected with '-lutil'
</span><br>
<span class="quotelev2">&gt;&gt; linked explicitly:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $ ./INST/bin/mpicc -showme BLD/examples/hello_c.c
</span><br>
<span class="quotelev2">&gt;&gt; pgcc BLD/examples/hello_c.c
</span><br>
<span class="quotelev2">&gt;&gt; -I/scratch/scratchdirs/hargrove/OMPI/openmpi-1.8.2rc3-linux-x86_64-pgi-14.1/INST/include
</span><br>
<span class="quotelev2">&gt;&gt; -L/opt/torque/4.2.7.h1/lib -Wl,-rpath -Wl,/opt/torque/4.2.7.h1/lib
</span><br>
<span class="quotelev2">&gt;&gt; -Wl,-rpath -Wl,/opt/torque/4.2.7.h1/lib -Wl,-rpath
</span><br>
<span class="quotelev2">&gt;&gt; -Wl,/opt/torque/4.2.7.h1/lib -Wl,-rpath -Wl,/opt/torque/4.2.7.h1/lib
</span><br>
<span class="quotelev2">&gt;&gt; -Wl,-rpath
</span><br>
<span class="quotelev2">&gt;&gt; -Wl,/scratch/scratchdirs/hargrove/OMPI/openmpi-1.8.2rc3-linux-x86_64-pgi-14.1/INST/lib
</span><br>
<span class="quotelev2">&gt;&gt; -L/scratch/scratchdirs/hargrove/OMPI/openmpi-1.8.2rc3-linux-x86_64-pgi-14.1/INST/lib
</span><br>
<span class="quotelev2">&gt;&gt; -lmpi -lopen-rte -lopen-pal -lm -lpciaccess -ldl -ltorque -lrt -lnsl -lutil
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Searching for relevant differences now...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -Paul
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Sun, Aug 3, 2014 at 4:58 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I've configured the 1.8.2rc3 tarball with &quot;--enable-static
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --disable-shared&quot; on a fairly standard Linux/x86-64 platform.  While there
</span><br>
<span class="quotelev3">&gt;&gt;&gt; are no problems on the same platform w/o these configure flags, with them I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cannot link any application codes.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ mpicc -g    hello_c.c   -o hello_c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.8.2rc3-linux-x86_64-static/INST/lib/libopen-pal.a(opal_pty.o):
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In function `opal_openpty':
</span><br>
<span class="quotelev3">&gt;&gt;&gt; opal_pty.c:(.text+0x1): undefined reference to `openpty'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I checked &quot;make openpty&quot; and the manpage says to link with '-lutil'.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The '-showme' does not show libutil:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ mpicc -showme hello_c.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; gcc hello_c.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -I/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.8.2rc3-linux-x86_64-static/INST/include
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -pthread -L/usr/syscom/opt/torque/4.1.4/lib -Wl,-rpath
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -Wl,/usr/syscom/opt/torque/4.1.4/lib -Wl,-rpath
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -Wl,/usr/syscom/opt/torque/4.1.4/lib -Wl,-rpath
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -Wl,/usr/syscom/opt/torque/4.1.4/lib -Wl,-rpath
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -Wl,/usr/syscom/opt/torque/4.1.4/lib -Wl,-rpath
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -Wl,/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.8.2rc3-linux-x86_64-static/INST/lib
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -Wl,--enable-new-dtags
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -L/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.8.2rc3-linux-x86_64-static/INST/lib
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -lmpi -lopen-rte -lopen-pal -lm -ldl -ltorque -libverbs -lrdmacm
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It looks like configure is doing the right thing on some level, but
</span><br>
<span class="quotelev3">&gt;&gt;&gt; failing to add '-lutil' to the appropriate list of libs
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (OPAL_WRAPPER_EXTRA_LIBS?):
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ============================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; == Library and Function tests
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ============================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking if we need -lutil for openpty... yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking for openpty... yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -Paul
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Future Technologies Group
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt;  _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15492.php">http://www.open-mpi.org/community/lists/devel/2014/08/15492.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15501.php">http://www.open-mpi.org/community/lists/devel/2014/08/15501.php</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15503/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15504.php">Ralph Castain: "Re: [OMPI devel] [1.8.2rc3] static linking fails on linux when not building ROMIO"</a>
<li><strong>Previous message:</strong> <a href="15502.php">Paul Hargrove: "[OMPI devel] oshmem enabled by default"</a>
<li><strong>In reply to:</strong> <a href="15501.php">Ralph Castain: "Re: [OMPI devel] [1.8.2rc3] static linking fails on linux when not building ROMIO"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15504.php">Ralph Castain: "Re: [OMPI devel] [1.8.2rc3] static linking fails on linux when not building ROMIO"</a>
<li><strong>Reply:</strong> <a href="15504.php">Ralph Castain: "Re: [OMPI devel] [1.8.2rc3] static linking fails on linux when not building ROMIO"</a>
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
