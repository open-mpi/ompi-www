<?
$subject_val = "Re: [OMPI devel] [1.8.2rc3] static linking fails on linux when not building ROMIO";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug  5 15:40:17 2014" -->
<!-- isoreceived="20140805194017" -->
<!-- sent="Tue, 5 Aug 2014 12:40:14 -0700" -->
<!-- isosent="20140805194014" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [1.8.2rc3] static linking fails on linux when not building ROMIO" -->
<!-- id="CAAvDA163M34mHFXVXhjUe8U_o5wjF=YaB3FOQgfggxsgWkJP7w_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="53E096CA.7050302_at_iferc.org" -->
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
<strong>Date:</strong> 2014-08-05 15:40:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15526.php">Ralph Castain: "Re: [OMPI devel] OMPI devel] trunk compilation errors in jenkins"</a>
<li><strong>Previous message:</strong> <a href="15524.php">George Bosilca: "Re: [OMPI devel] RFC: add atomic compare-and-swap that returns old value"</a>
<li><strong>In reply to:</strong> <a href="15513.php">Gilles Gouaillardet: "Re: [OMPI devel] [1.8.2rc3] static linking fails on linux when not building ROMIO"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15528.php">Gilles Gouaillardet: "Re: [OMPI devel] [1.8.2rc3] static linking fails on linux when not building ROMIO"</a>
<li><strong>Reply:</strong> <a href="15528.php">Gilles Gouaillardet: "Re: [OMPI devel] [1.8.2rc3] static linking fails on linux when not building ROMIO"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Gilles,
<br>
<p>I have not tested your patch.
<br>
I've only read it.
<br>
<p>It looks like it could work, except that libopen-rte.a depends on libsocket
<br>
and libnsl on Solaris.
<br>
So, one probably needs to add $LIBS to the ORTE wrapper libs as well.
<br>
<p>Additionally,if your approach is the correct one, then I think one can fold:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL_FLAGS_APPEND_UNIQ([OPAL_WRAPPER_EXTRA_LIBS],
<br>
[$wrapper_extra_libs])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL_WRAPPER_EXTRA_LIBS=&quot;$OPAL_WRAPPER_EXTRA_LIBS
<br>
$with_wrapper_libs&quot;
<br>
+       OPAL_FLAGS_APPEND_UNIQ([OPAL_WRAPPER_EXTRA_LIBS], [$LIBS])
<br>
+       OPAL_WRAPPER_EXTRA_LIBS=&quot;$OPAL_WRAPPER_EXTRA_LIBS
<br>
$with_wrapper_libs&quot;
<br>
<p>into just
<br>
<p>-        OPAL_FLAGS_APPEND_UNIQ([OPAL_WRAPPER_EXTRA_LIBS],
<br>
[$wrapper_extra_libs])
<br>
+       OPAL_FLAGS_APPEND_UNIQ([OPAL_WRAPPER_EXTRA_LIBS],
<br>
[$wrapper_extra_libs $LIBS])
<br>
<p>which merges two calls to OPAL_FLAGS_APPEND_UNIQ and avoids double-adding
<br>
of the user's $with_wrapper_libs.
<br>
And of course the same 1-line change would apply for the OMPI and
<br>
eventually ORTE variables too.
<br>
<p>I'd like to wait until Jeff has had a chance to look this over before I
<br>
devote time to testing.
<br>
Since I've determined already that 1.6.5 did not have the problem while
<br>
1.7.x does, the possibility exists that some smaller change might exist to
<br>
restore what ever was lost between the v1.6 and v1.7 branches.
<br>
<p>-Paul
<br>
<p><p>On Tue, Aug 5, 2014 at 1:33 AM, Gilles Gouaillardet &lt;
<br>
gilles.gouaillardet_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;  Here is a patch that has been minimally tested.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; this is likely an overkill (at least when dynamic libraries can be used),
</span><br>
<span class="quotelev1">&gt; but it does the job so far ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 2014/08/05 16:56, Gilles Gouaillardet wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; from libopen-pal.la :
</span><br>
<span class="quotelev1">&gt; dependency_libs=' -lrdmacm -libverbs -lscif -lnuma -ldl -lrt -lnsl
</span><br>
<span class="quotelev1">&gt; -lutil -lm'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; i confirm mpicc fails linking
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; but FWIT, using libtool does work (!)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; could the bug come from the mpicc (and other) wrappers ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ gcc -g -O0 -o hw /csc/home1/gouaillardet/hw.c
</span><br>
<span class="quotelev1">&gt; -I/tmp/install/ompi.noromio/include -pthread -L/usr/lib64 -Wl,-rpath
</span><br>
<span class="quotelev1">&gt; -Wl,/usr/lib64 -Wl,-rpath -Wl,/tmp/install/ompi.noromio/lib
</span><br>
<span class="quotelev1">&gt; -Wl,--enable-new-dtags -L/tmp/install/ompi.noromio/lib -lmpi -lopen-rte
</span><br>
<span class="quotelev1">&gt; -lopen-pal -lm -lnuma -libverbs -lscif -lrdmacm -ldl -llustreapi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ /tmp/install/ompi.noromio/bin/mpicc -g -O0 -o hw -show ~/hw.c
</span><br>
<span class="quotelev1">&gt; gcc -g -O0 -o hw /csc/home1/gouaillardet/hw.c
</span><br>
<span class="quotelev1">&gt; -I/tmp/install/ompi.noromio/include -pthread -L/usr/lib64 -Wl,-rpath
</span><br>
<span class="quotelev1">&gt; -Wl,/usr/lib64 -Wl,-rpath -Wl,/tmp/install/ompi.noromio/lib
</span><br>
<span class="quotelev1">&gt; -Wl,--enable-new-dtags -L/tmp/install/ompi.noromio/lib -lmpi -lopen-rte
</span><br>
<span class="quotelev1">&gt; -lopen-pal -lm -lnuma -libverbs -lscif -lrdmacm -ldl -llustreapi
</span><br>
<span class="quotelev1">&gt; [gouaillardet_at_soleil build]$ /tmp/install/ompi.noromio/bin/mpicc -g -O0
</span><br>
<span class="quotelev1">&gt; -o hw ~/hw.c
</span><br>
<span class="quotelev1">&gt; /tmp/install/ompi.noromio/lib/libmpi.a(fbtl_posix_ipwritev.o): In
</span><br>
<span class="quotelev1">&gt; function `mca_fbtl_posix_ipwritev':
</span><br>
<span class="quotelev1">&gt; fbtl_posix_ipwritev.c:(.text+0x17b): undefined reference to `aio_write'
</span><br>
<span class="quotelev1">&gt; fbtl_posix_ipwritev.c:(.text+0x237): undefined reference to `aio_write'
</span><br>
<span class="quotelev1">&gt; fbtl_posix_ipwritev.c:(.text+0x3f4): undefined reference to `aio_write'
</span><br>
<span class="quotelev1">&gt; fbtl_posix_ipwritev.c:(.text+0x48e): undefined reference to `aio_write'
</span><br>
<span class="quotelev1">&gt; /tmp/install/ompi.noromio/lib/libopen-pal.a(opal_pty.o): In function
</span><br>
<span class="quotelev1">&gt; `opal_openpty':
</span><br>
<span class="quotelev1">&gt; opal_pty.c:(.text+0x1): undefined reference to `openpty'
</span><br>
<span class="quotelev1">&gt; /tmp/install/ompi.noromio/lib/libopen-pal.a(event.o): In function
</span><br>
<span class="quotelev1">&gt; `event_add_internal':
</span><br>
<span class="quotelev1">&gt; event.c:(.text+0x288d): undefined reference to `clock_gettime'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ /bin/sh ./static/libtool --silent --tag=CC   --mode=compile gcc
</span><br>
<span class="quotelev1">&gt; -std=gnu99 -I/tmp/install/ompi.noromio/include -c ~/hw.c
</span><br>
<span class="quotelev1">&gt; $ /bin/sh ./static/libtool --silent --tag=CC   --mode=link gcc
</span><br>
<span class="quotelev1">&gt; -std=gnu99 -o hw hw.o -L/tmp/install/ompi.noromio/lib -lmpi
</span><br>
<span class="quotelev1">&gt; $ ldd hw
</span><br>
<span class="quotelev1">&gt;     linux-vdso.so.1 =&gt;  (0x00007fff7530d000)
</span><br>
<span class="quotelev1">&gt;     librdmacm.so.1 =&gt; /usr/lib64/librdmacm.so.1 (0x00007f0ed541e000)
</span><br>
<span class="quotelev1">&gt;     libibverbs.so.1 =&gt; /usr/lib64/libibverbs.so.1 (0x00007f0ed5210000)
</span><br>
<span class="quotelev1">&gt;     libscif.so.0 =&gt; /usr/lib64/libscif.so.0 (0x0000003b9c600000)
</span><br>
<span class="quotelev1">&gt;     libnuma.so.1 =&gt; /usr/lib64/libnuma.so.1 (0x0000003ba5600000)
</span><br>
<span class="quotelev1">&gt;     libdl.so.2 =&gt; /lib64/libdl.so.2 (0x0000003b9be00000)
</span><br>
<span class="quotelev1">&gt;     librt.so.1 =&gt; /lib64/librt.so.1 (0x0000003b9ca00000)
</span><br>
<span class="quotelev1">&gt;     libnsl.so.1 =&gt; /lib64/libnsl.so.1 (0x0000003bae200000)
</span><br>
<span class="quotelev1">&gt;     libutil.so.1 =&gt; /lib64/libutil.so.1 (0x0000003bac600000)
</span><br>
<span class="quotelev1">&gt;     libm.so.6 =&gt; /lib64/libm.so.6 (0x0000003b9ba00000)
</span><br>
<span class="quotelev1">&gt;     libpthread.so.0 =&gt; /lib64/libpthread.so.0 (0x0000003b9c200000)
</span><br>
<span class="quotelev1">&gt;     libc.so.6 =&gt; /lib64/libc.so.6 (0x0000003b9b600000)
</span><br>
<span class="quotelev1">&gt;     /lib64/ld-linux-x86-64.so.2 (0x0000003b9b200000)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 2014/08/05 7:56, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  My thought was to post initially as a blocker, pending a discussion with Jeff at tomorrow's telecon. If he thinks this is something we can fix in some central point (thus catching it everywhere), then it could be quick and worth doing. However, I'm skeptical as I tried to do that in the most obvious place, and it failed (could be operator error).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Will let you know tomorrow. Truly appreciate your digging on this!
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 4, 2014, at 3:50 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Ralph and Jeff,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've been digging and find the problem is wider than just the one library and has manifestations specific to FreeBSD, NetBSD and Solaris.  I am adding new info to the ticket as I unearth it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Additionally, it appears this existed in 1.8, 1.8.1 and in the 1.7 series as well.
</span><br>
<span class="quotelev1">&gt; So, would suggest this NOT be a blocker for a 1.8.2 release.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Of course I am willing to provide testing if you still want to push for a quick resolution.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, Aug 4, 2014 at 1:27 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Okay, I filed a blocker on this for 1.8.2 and assigned it to Jeff. I took a crack at fixing it, but came up short :-(
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 3, 2014, at 10:46 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  I've identified the difference between the platform that does link libutil and the one that does not.
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
<span class="quotelev1">&gt; So, the working system that does link libutil is doing so as an OMPI dependency.
</span><br>
<span class="quotelev1">&gt; However it is also needed for opal (only caller of openpty is opal/util/open_pty.c).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2) Only the working system is building ROMIO:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Comparing the 'checking if * can compile' lines of configure output shows only ONE difference:
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
<span class="quotelev1">&gt; So, it appears that *if* ROMIO is configured in, then &quot;-lutil&quot; gets added to OMPI_WRAPPER_EXTRA_LIBS.
</span><br>
<span class="quotelev1">&gt; This masks the fact that it is missing from OPAL_WRAPPER_EXTRA_LIBS.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have confirmed that I can reproduce the static linking failure by adding --disable-io-romio to the configure options of the system that worked previously.
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
<span class="quotelev1">&gt; On Sun, Aug 3, 2014 at 6:22 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Hmm,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On a different Linux/x86-64 host things work as expected with '-lutil' linked explicitly:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ ./INST/bin/mpicc -showme BLD/examples/hello_c.c
</span><br>
<span class="quotelev1">&gt; pgcc BLD/examples/hello_c.c -I/scratch/scratchdirs/hargrove/OMPI/openmpi-1.8.2rc3-linux-x86_64-pgi-14.1/INST/include -L/opt/torque/4.2.7.h1/lib -Wl,-rpath -Wl,/opt/torque/4.2.7.h1/lib -Wl,-rpath -Wl,/opt/torque/4.2.7.h1/lib -Wl,-rpath -Wl,/opt/torque/4.2.7.h1/lib -Wl,-rpath -Wl,/opt/torque/4.2.7.h1/lib -Wl,-rpath -Wl,/scratch/scratchdirs/hargrove/OMPI/openmpi-1.8.2rc3-linux-x86_64-pgi-14.1/INST/lib -L/scratch/scratchdirs/hargrove/OMPI/openmpi-1.8.2rc3-linux-x86_64-pgi-14.1/INST/lib -lmpi -lopen-rte -lopen-pal -lm -lpciaccess -ldl -ltorque -lrt -lnsl -lutil
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
<span class="quotelev1">&gt; On Sun, Aug 3, 2014 at 4:58 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've configured the 1.8.2rc3 tarball with &quot;--enable-static --disable-shared&quot; on a fairly standard Linux/x86-64 platform.  While there are no problems on the same platform w/o these configure flags, with them I cannot link any application codes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ mpicc -g    hello_c.c   -o hello_c
</span><br>
<span class="quotelev1">&gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.8.2rc3-linux-x86_64-static/INST/lib/libopen-pal.a(opal_pty.o): In function `opal_openpty':
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
<span class="quotelev1">&gt; gcc hello_c.c -I/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.8.2rc3-linux-x86_64-static/INST/include -pthread -L/usr/syscom/opt/torque/4.1.4/lib -Wl,-rpath -Wl,/usr/syscom/opt/torque/4.1.4/lib -Wl,-rpath -Wl,/usr/syscom/opt/torque/4.1.4/lib -Wl,-rpath -Wl,/usr/syscom/opt/torque/4.1.4/lib -Wl,-rpath -Wl,/usr/syscom/opt/torque/4.1.4/lib -Wl,-rpath -Wl,/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.8.2rc3-linux-x86_64-static/INST/lib -Wl,--enable-new-dtags -L/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.8.2rc3-linux-x86_64-static/INST/lib -lmpi -lopen-rte -lopen-pal -lm -ldl -ltorque -libverbs -lrdmacm
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It looks like configure is doing the right thing on some level, but failing to add '-lutil' to the appropriate list of libs (OPAL_WRAPPER_EXTRA_LIBS?):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ============================================================================
</span><br>
<span class="quotelev1">&gt; == Library and Function tests
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing listdevel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15492.php">http://www.open-mpi.org/community/lists/devel/2014/08/15492.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing listdevel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15501.php">http://www.open-mpi.org/community/lists/devel/2014/08/15501.php</a>
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing listdevel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15503.php">http://www.open-mpi.org/community/lists/devel/2014/08/15503.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing listdevel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15504.php">http://www.open-mpi.org/community/lists/devel/2014/08/15504.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing listdevel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15512.php">http://www.open-mpi.org/community/lists/devel/2014/08/15512.php</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15513.php">http://www.open-mpi.org/community/lists/devel/2014/08/15513.php</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15525/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15526.php">Ralph Castain: "Re: [OMPI devel] OMPI devel] trunk compilation errors in jenkins"</a>
<li><strong>Previous message:</strong> <a href="15524.php">George Bosilca: "Re: [OMPI devel] RFC: add atomic compare-and-swap that returns old value"</a>
<li><strong>In reply to:</strong> <a href="15513.php">Gilles Gouaillardet: "Re: [OMPI devel] [1.8.2rc3] static linking fails on linux when not building ROMIO"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15528.php">Gilles Gouaillardet: "Re: [OMPI devel] [1.8.2rc3] static linking fails on linux when not building ROMIO"</a>
<li><strong>Reply:</strong> <a href="15528.php">Gilles Gouaillardet: "Re: [OMPI devel] [1.8.2rc3] static linking fails on linux when not building ROMIO"</a>
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
