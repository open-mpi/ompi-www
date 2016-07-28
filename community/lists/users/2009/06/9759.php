<?
$subject_val = "Re: [OMPI users] Compile problems with 1.3.2";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 29 17:02:06 2009" -->
<!-- isoreceived="20090629210206" -->
<!-- sent="Mon, 29 Jun 2009 14:02:02 -0700" -->
<!-- isosent="20090629210202" -->
<!-- name="Jim Kusznir" -->
<!-- email="jkusznir_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Compile problems with 1.3.2" -->
<!-- id="df8c8a6d0906291402x124a70dfpc0b8fd3d89657bee_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="71d2d8cc0906291346y12e51i1424b04e9c2a07a9_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Compile problems with 1.3.2<br>
<strong>From:</strong> Jim Kusznir (<em>jkusznir_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-29 17:02:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9760.php">Eugene Loh: "Re: [OMPI users] Compile problems with 1.3.2"</a>
<li><strong>Previous message:</strong> <a href="9758.php">Ralph Castain: "Re: [OMPI users] Compile problems with 1.3.2"</a>
<li><strong>In reply to:</strong> <a href="9758.php">Ralph Castain: "Re: [OMPI users] Compile problems with 1.3.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9760.php">Eugene Loh: "Re: [OMPI users] Compile problems with 1.3.2"</a>
<li><strong>Reply:</strong> <a href="9760.php">Eugene Loh: "Re: [OMPI users] Compile problems with 1.3.2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ok, trying now.  This does bring up a question I've been meaning to
<br>
ask.  I need to find a way to analyze the efficiency of parallel jobs,
<br>
and the only way I've known about in the past is through vampire.  I
<br>
do not have the software license presently (and last I looked, it was
<br>
a commercial licensed product).  Does this configure flag suggest that
<br>
openmpi has native support for generating vampire trace files?  Is
<br>
there any open source tools for analyzing them (or another route I
<br>
should be looking at)?
<br>
<p>[presently many of our jobs are running with a very large &quot;system CPU&quot;
<br>
component.  That has me concerned as to the efficiency of the overall
<br>
application.  In general, I'd like to assess the overall efficiency of
<br>
the parallel application and identify areas to improve it.]
<br>
<p>Thanks!
<br>
--Jim
<br>
<p>On Mon, Jun 29, 2009 at 1:46 PM, Ralph Castain&lt;rhc_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Easiest solution: add -enable-contrib-no-build=vt to your configure line.
</span><br>
<span class="quotelev1">&gt; This will &quot;no-build&quot; the Vampirtrace code section that is causing the
</span><br>
<span class="quotelev1">&gt; problem. It isn't required for operations - just there as an option if you
</span><br>
<span class="quotelev1">&gt; want it for debugging purposes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, Jun 29, 2009 at 2:31 PM, Jim Kusznir &lt;jkusznir_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi all:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm trying to build and install openmpi-1.3.2 for my cluster using
</span><br>
<span class="quotelev2">&gt;&gt; enviornment-modules. &#160;My build failed, but on something that I have no
</span><br>
<span class="quotelev2">&gt;&gt; idea how to debug. &#160;Here's the relevent output:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Making all in vtlib
</span><br>
<span class="quotelev2">&gt;&gt; make[5]: Entering directory
</span><br>
<span class="quotelev2">&gt;&gt; `/usr/src/redhat/BUILD/openmpi-1.3.2/ompi/contrib/vt/vt/vtlib'
</span><br>
<span class="quotelev2">&gt;&gt; gcc -DHAVE_CONFIG_H -I. -I.. -I../tools/opari/lib
</span><br>
<span class="quotelev2">&gt;&gt; -I../extlib/otf/otflib -I../extlib/otf/otflib &#160; &#160; -D_GNU_SOURCE
</span><br>
<span class="quotelev2">&gt;&gt; -DBINDIR=\&quot;/opt/openmpi-gcc/1.3.2/bin\&quot;
</span><br>
<span class="quotelev2">&gt;&gt; -DDATADIR=\&quot;/opt/openmpi-gcc/1.3.2/share\&quot; -DRFG -DVT_BFD -DVT_MEMHOOK
</span><br>
<span class="quotelev2">&gt;&gt; -DVT_IOWRAP &#160;-O2 -g -pipe -Wall -Wp,-D_FORTIFY_SOURCE=2 -fexceptions
</span><br>
<span class="quotelev2">&gt;&gt; -fstack-protector --param=ssp-buffer-size=4 -m64 -mtune=generic -MT
</span><br>
<span class="quotelev2">&gt;&gt; vt_comp_gnu.o -MD -MP -MF .deps/vt_comp_gnu.Tpo -c -o vt_comp_gnu.o
</span><br>
<span class="quotelev2">&gt;&gt; vt_comp_gnu.c
</span><br>
<span class="quotelev2">&gt;&gt; mv -f .deps/vt_comp_gnu.Tpo .deps/vt_comp_gnu.Po
</span><br>
<span class="quotelev2">&gt;&gt; gcc -DHAVE_CONFIG_H -I. -I.. -I../tools/opari/lib
</span><br>
<span class="quotelev2">&gt;&gt; -I../extlib/otf/otflib -I../extlib/otf/otflib &#160; &#160; -D_GNU_SOURCE
</span><br>
<span class="quotelev2">&gt;&gt; -DBINDIR=\&quot;/opt/openmpi-gcc/1.3.2/bin\&quot;
</span><br>
<span class="quotelev2">&gt;&gt; -DDATADIR=\&quot;/opt/openmpi-gcc/1.3.2/share\&quot; -DRFG -DVT_BFD -DVT_MEMHOOK
</span><br>
<span class="quotelev2">&gt;&gt; -DVT_IOWRAP &#160;-O2 -g -pipe -Wall -Wp,-D_FORTIFY_SOURCE=2 -fexceptions
</span><br>
<span class="quotelev2">&gt;&gt; -fstack-protector --param=ssp-buffer-size=4 -m64 -mtune=generic -MT
</span><br>
<span class="quotelev2">&gt;&gt; vt_memhook.o -MD -MP -MF .deps/vt_memhook.Tpo -c -o vt_memhook.o
</span><br>
<span class="quotelev2">&gt;&gt; vt_memhook.c
</span><br>
<span class="quotelev2">&gt;&gt; mv -f .deps/vt_memhook.Tpo .deps/vt_memhook.Po
</span><br>
<span class="quotelev2">&gt;&gt; gcc -DHAVE_CONFIG_H -I. -I.. -I../tools/opari/lib
</span><br>
<span class="quotelev2">&gt;&gt; -I../extlib/otf/otflib -I../extlib/otf/otflib &#160; &#160; -D_GNU_SOURCE
</span><br>
<span class="quotelev2">&gt;&gt; -DBINDIR=\&quot;/opt/openmpi-gcc/1.3.2/bin\&quot;
</span><br>
<span class="quotelev2">&gt;&gt; -DDATADIR=\&quot;/opt/openmpi-gcc/1.3.2/share\&quot; -DRFG -DVT_BFD -DVT_MEMHOOK
</span><br>
<span class="quotelev2">&gt;&gt; -DVT_IOWRAP &#160;-O2 -g -pipe -Wall -Wp,-D_FORTIFY_SOURCE=2 -fexceptions
</span><br>
<span class="quotelev2">&gt;&gt; -fstack-protector --param=ssp-buffer-size=4 -m64 -mtune=generic -MT
</span><br>
<span class="quotelev2">&gt;&gt; vt_memreg.o -MD -MP -MF .deps/vt_memreg.Tpo -c -o vt_memreg.o
</span><br>
<span class="quotelev2">&gt;&gt; vt_memreg.c
</span><br>
<span class="quotelev2">&gt;&gt; mv -f .deps/vt_memreg.Tpo .deps/vt_memreg.Po
</span><br>
<span class="quotelev2">&gt;&gt; gcc -DHAVE_CONFIG_H -I. -I.. -I../tools/opari/lib
</span><br>
<span class="quotelev2">&gt;&gt; -I../extlib/otf/otflib -I../extlib/otf/otflib &#160; &#160; -D_GNU_SOURCE
</span><br>
<span class="quotelev2">&gt;&gt; -DBINDIR=\&quot;/opt/openmpi-gcc/1.3.2/bin\&quot;
</span><br>
<span class="quotelev2">&gt;&gt; -DDATADIR=\&quot;/opt/openmpi-gcc/1.3.2/share\&quot; -DRFG -DVT_BFD -DVT_MEMHOOK
</span><br>
<span class="quotelev2">&gt;&gt; -DVT_IOWRAP &#160;-O2 -g -pipe -Wall -Wp,-D_FORTIFY_SOURCE=2 -fexceptions
</span><br>
<span class="quotelev2">&gt;&gt; -fstack-protector --param=ssp-buffer-size=4 -m64 -mtune=generic -MT
</span><br>
<span class="quotelev2">&gt;&gt; vt_iowrap.o -MD -MP -MF .deps/vt_iowrap.Tpo -c -o vt_iowrap.o
</span><br>
<span class="quotelev2">&gt;&gt; vt_iowrap.c
</span><br>
<span class="quotelev2">&gt;&gt; vt_iowrap.c:1242: error: expected declaration specifiers or '...'
</span><br>
<span class="quotelev2">&gt;&gt; before numeric constant
</span><br>
<span class="quotelev2">&gt;&gt; vt_iowrap.c:1243: error: conflicting types for '__fprintf_chk'
</span><br>
<span class="quotelev2">&gt;&gt; make[5]: *** [vt_iowrap.o] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[5]: Leaving directory
</span><br>
<span class="quotelev2">&gt;&gt; `/usr/src/redhat/BUILD/openmpi-1.3.2/ompi/contrib/vt/vt/vtlib'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I used this as my build command:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; rpmbuild -bb --define 'install_in_opt 1' --define 'install_modulefile
</span><br>
<span class="quotelev2">&gt;&gt; 1' --define 'modules_rpm_name environment-modules' --define
</span><br>
<span class="quotelev2">&gt;&gt; 'build_all_in_one_rpm 0' --define 'configure_options
</span><br>
<span class="quotelev2">&gt;&gt; --with-tm=/opt/torque' --define '_name openmpi-gcc' openmpi-1.3.2.spec
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Suggestions?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --Jim
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9760.php">Eugene Loh: "Re: [OMPI users] Compile problems with 1.3.2"</a>
<li><strong>Previous message:</strong> <a href="9758.php">Ralph Castain: "Re: [OMPI users] Compile problems with 1.3.2"</a>
<li><strong>In reply to:</strong> <a href="9758.php">Ralph Castain: "Re: [OMPI users] Compile problems with 1.3.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9760.php">Eugene Loh: "Re: [OMPI users] Compile problems with 1.3.2"</a>
<li><strong>Reply:</strong> <a href="9760.php">Eugene Loh: "Re: [OMPI users] Compile problems with 1.3.2"</a>
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
