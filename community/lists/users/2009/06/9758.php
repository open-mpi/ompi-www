<?
$subject_val = "Re: [OMPI users] Compile problems with 1.3.2";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 29 16:46:18 2009" -->
<!-- isoreceived="20090629204618" -->
<!-- sent="Mon, 29 Jun 2009 14:46:12 -0600" -->
<!-- isosent="20090629204612" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Compile problems with 1.3.2" -->
<!-- id="71d2d8cc0906291346y12e51i1424b04e9c2a07a9_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="df8c8a6d0906291331m6ab93649lb7665f1d2472aba5_at_mail.gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-29 16:46:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9759.php">Jim Kusznir: "Re: [OMPI users] Compile problems with 1.3.2"</a>
<li><strong>Previous message:</strong> <a href="9757.php">Jim Kusznir: "[OMPI users] Compile problems with 1.3.2"</a>
<li><strong>In reply to:</strong> <a href="9757.php">Jim Kusznir: "[OMPI users] Compile problems with 1.3.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9759.php">Jim Kusznir: "Re: [OMPI users] Compile problems with 1.3.2"</a>
<li><strong>Reply:</strong> <a href="9759.php">Jim Kusznir: "Re: [OMPI users] Compile problems with 1.3.2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Easiest solution: add -enable-contrib-no-build=vt to your configure line.
<br>
This will &quot;no-build&quot; the Vampirtrace code section that is causing the
<br>
problem. It isn't required for operations - just there as an option if you
<br>
want it for debugging purposes.
<br>
<p>Ralph
<br>
<p><p>On Mon, Jun 29, 2009 at 2:31 PM, Jim Kusznir &lt;jkusznir_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi all:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm trying to build and install openmpi-1.3.2 for my cluster using
</span><br>
<span class="quotelev1">&gt; enviornment-modules.  My build failed, but on something that I have no
</span><br>
<span class="quotelev1">&gt; idea how to debug.  Here's the relevent output:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Making all in vtlib
</span><br>
<span class="quotelev1">&gt; make[5]: Entering directory
</span><br>
<span class="quotelev1">&gt; `/usr/src/redhat/BUILD/openmpi-1.3.2/ompi/contrib/vt/vt/vtlib'
</span><br>
<span class="quotelev1">&gt; gcc -DHAVE_CONFIG_H -I. -I.. -I../tools/opari/lib
</span><br>
<span class="quotelev1">&gt; -I../extlib/otf/otflib -I../extlib/otf/otflib     -D_GNU_SOURCE
</span><br>
<span class="quotelev1">&gt; -DBINDIR=\&quot;/opt/openmpi-gcc/1.3.2/bin\&quot;
</span><br>
<span class="quotelev1">&gt; -DDATADIR=\&quot;/opt/openmpi-gcc/1.3.2/share\&quot; -DRFG -DVT_BFD -DVT_MEMHOOK
</span><br>
<span class="quotelev1">&gt; -DVT_IOWRAP  -O2 -g -pipe -Wall -Wp,-D_FORTIFY_SOURCE=2 -fexceptions
</span><br>
<span class="quotelev1">&gt; -fstack-protector --param=ssp-buffer-size=4 -m64 -mtune=generic -MT
</span><br>
<span class="quotelev1">&gt; vt_comp_gnu.o -MD -MP -MF .deps/vt_comp_gnu.Tpo -c -o vt_comp_gnu.o
</span><br>
<span class="quotelev1">&gt; vt_comp_gnu.c
</span><br>
<span class="quotelev1">&gt; mv -f .deps/vt_comp_gnu.Tpo .deps/vt_comp_gnu.Po
</span><br>
<span class="quotelev1">&gt; gcc -DHAVE_CONFIG_H -I. -I.. -I../tools/opari/lib
</span><br>
<span class="quotelev1">&gt; -I../extlib/otf/otflib -I../extlib/otf/otflib     -D_GNU_SOURCE
</span><br>
<span class="quotelev1">&gt; -DBINDIR=\&quot;/opt/openmpi-gcc/1.3.2/bin\&quot;
</span><br>
<span class="quotelev1">&gt; -DDATADIR=\&quot;/opt/openmpi-gcc/1.3.2/share\&quot; -DRFG -DVT_BFD -DVT_MEMHOOK
</span><br>
<span class="quotelev1">&gt; -DVT_IOWRAP  -O2 -g -pipe -Wall -Wp,-D_FORTIFY_SOURCE=2 -fexceptions
</span><br>
<span class="quotelev1">&gt; -fstack-protector --param=ssp-buffer-size=4 -m64 -mtune=generic -MT
</span><br>
<span class="quotelev1">&gt; vt_memhook.o -MD -MP -MF .deps/vt_memhook.Tpo -c -o vt_memhook.o
</span><br>
<span class="quotelev1">&gt; vt_memhook.c
</span><br>
<span class="quotelev1">&gt; mv -f .deps/vt_memhook.Tpo .deps/vt_memhook.Po
</span><br>
<span class="quotelev1">&gt; gcc -DHAVE_CONFIG_H -I. -I.. -I../tools/opari/lib
</span><br>
<span class="quotelev1">&gt; -I../extlib/otf/otflib -I../extlib/otf/otflib     -D_GNU_SOURCE
</span><br>
<span class="quotelev1">&gt; -DBINDIR=\&quot;/opt/openmpi-gcc/1.3.2/bin\&quot;
</span><br>
<span class="quotelev1">&gt; -DDATADIR=\&quot;/opt/openmpi-gcc/1.3.2/share\&quot; -DRFG -DVT_BFD -DVT_MEMHOOK
</span><br>
<span class="quotelev1">&gt; -DVT_IOWRAP  -O2 -g -pipe -Wall -Wp,-D_FORTIFY_SOURCE=2 -fexceptions
</span><br>
<span class="quotelev1">&gt; -fstack-protector --param=ssp-buffer-size=4 -m64 -mtune=generic -MT
</span><br>
<span class="quotelev1">&gt; vt_memreg.o -MD -MP -MF .deps/vt_memreg.Tpo -c -o vt_memreg.o
</span><br>
<span class="quotelev1">&gt; vt_memreg.c
</span><br>
<span class="quotelev1">&gt; mv -f .deps/vt_memreg.Tpo .deps/vt_memreg.Po
</span><br>
<span class="quotelev1">&gt; gcc -DHAVE_CONFIG_H -I. -I.. -I../tools/opari/lib
</span><br>
<span class="quotelev1">&gt; -I../extlib/otf/otflib -I../extlib/otf/otflib     -D_GNU_SOURCE
</span><br>
<span class="quotelev1">&gt; -DBINDIR=\&quot;/opt/openmpi-gcc/1.3.2/bin\&quot;
</span><br>
<span class="quotelev1">&gt; -DDATADIR=\&quot;/opt/openmpi-gcc/1.3.2/share\&quot; -DRFG -DVT_BFD -DVT_MEMHOOK
</span><br>
<span class="quotelev1">&gt; -DVT_IOWRAP  -O2 -g -pipe -Wall -Wp,-D_FORTIFY_SOURCE=2 -fexceptions
</span><br>
<span class="quotelev1">&gt; -fstack-protector --param=ssp-buffer-size=4 -m64 -mtune=generic -MT
</span><br>
<span class="quotelev1">&gt; vt_iowrap.o -MD -MP -MF .deps/vt_iowrap.Tpo -c -o vt_iowrap.o
</span><br>
<span class="quotelev1">&gt; vt_iowrap.c
</span><br>
<span class="quotelev1">&gt; vt_iowrap.c:1242: error: expected declaration specifiers or '...'
</span><br>
<span class="quotelev1">&gt; before numeric constant
</span><br>
<span class="quotelev1">&gt; vt_iowrap.c:1243: error: conflicting types for '__fprintf_chk'
</span><br>
<span class="quotelev1">&gt; make[5]: *** [vt_iowrap.o] Error 1
</span><br>
<span class="quotelev1">&gt; make[5]: Leaving directory
</span><br>
<span class="quotelev1">&gt; `/usr/src/redhat/BUILD/openmpi-1.3.2/ompi/contrib/vt/vt/vtlib'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I used this as my build command:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; rpmbuild -bb --define 'install_in_opt 1' --define 'install_modulefile
</span><br>
<span class="quotelev1">&gt; 1' --define 'modules_rpm_name environment-modules' --define
</span><br>
<span class="quotelev1">&gt; 'build_all_in_one_rpm 0' --define 'configure_options
</span><br>
<span class="quotelev1">&gt; --with-tm=/opt/torque' --define '_name openmpi-gcc' openmpi-1.3.2.spec
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Suggestions?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --Jim
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9758/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9759.php">Jim Kusznir: "Re: [OMPI users] Compile problems with 1.3.2"</a>
<li><strong>Previous message:</strong> <a href="9757.php">Jim Kusznir: "[OMPI users] Compile problems with 1.3.2"</a>
<li><strong>In reply to:</strong> <a href="9757.php">Jim Kusznir: "[OMPI users] Compile problems with 1.3.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9759.php">Jim Kusznir: "Re: [OMPI users] Compile problems with 1.3.2"</a>
<li><strong>Reply:</strong> <a href="9759.php">Jim Kusznir: "Re: [OMPI users] Compile problems with 1.3.2"</a>
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
