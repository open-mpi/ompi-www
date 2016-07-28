<?
$subject_val = "[OMPI users] Compile problems with 1.3.2";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 29 16:31:18 2009" -->
<!-- isoreceived="20090629203118" -->
<!-- sent="Mon, 29 Jun 2009 13:31:14 -0700" -->
<!-- isosent="20090629203114" -->
<!-- name="Jim Kusznir" -->
<!-- email="jkusznir_at_[hidden]" -->
<!-- subject="[OMPI users] Compile problems with 1.3.2" -->
<!-- id="df8c8a6d0906291331m6ab93649lb7665f1d2472aba5_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Compile problems with 1.3.2<br>
<strong>From:</strong> Jim Kusznir (<em>jkusznir_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-29 16:31:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9758.php">Ralph Castain: "Re: [OMPI users] Compile problems with 1.3.2"</a>
<li><strong>Previous message:</strong> <a href="9756.php">Jeff Squyres: "Re: [OMPI users] CPU user time vs. system time"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9758.php">Ralph Castain: "Re: [OMPI users] Compile problems with 1.3.2"</a>
<li><strong>Reply:</strong> <a href="9758.php">Ralph Castain: "Re: [OMPI users] Compile problems with 1.3.2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all:
<br>
<p>I'm trying to build and install openmpi-1.3.2 for my cluster using
<br>
enviornment-modules.  My build failed, but on something that I have no
<br>
idea how to debug.  Here's the relevent output:
<br>
<p>Making all in vtlib
<br>
make[5]: Entering directory
<br>
`/usr/src/redhat/BUILD/openmpi-1.3.2/ompi/contrib/vt/vt/vtlib'
<br>
gcc -DHAVE_CONFIG_H -I. -I.. -I../tools/opari/lib
<br>
-I../extlib/otf/otflib -I../extlib/otf/otflib     -D_GNU_SOURCE
<br>
-DBINDIR=\&quot;/opt/openmpi-gcc/1.3.2/bin\&quot;
<br>
-DDATADIR=\&quot;/opt/openmpi-gcc/1.3.2/share\&quot; -DRFG -DVT_BFD -DVT_MEMHOOK
<br>
-DVT_IOWRAP  -O2 -g -pipe -Wall -Wp,-D_FORTIFY_SOURCE=2 -fexceptions
<br>
-fstack-protector --param=ssp-buffer-size=4 -m64 -mtune=generic -MT
<br>
vt_comp_gnu.o -MD -MP -MF .deps/vt_comp_gnu.Tpo -c -o vt_comp_gnu.o
<br>
vt_comp_gnu.c
<br>
mv -f .deps/vt_comp_gnu.Tpo .deps/vt_comp_gnu.Po
<br>
gcc -DHAVE_CONFIG_H -I. -I.. -I../tools/opari/lib
<br>
-I../extlib/otf/otflib -I../extlib/otf/otflib     -D_GNU_SOURCE
<br>
-DBINDIR=\&quot;/opt/openmpi-gcc/1.3.2/bin\&quot;
<br>
-DDATADIR=\&quot;/opt/openmpi-gcc/1.3.2/share\&quot; -DRFG -DVT_BFD -DVT_MEMHOOK
<br>
-DVT_IOWRAP  -O2 -g -pipe -Wall -Wp,-D_FORTIFY_SOURCE=2 -fexceptions
<br>
-fstack-protector --param=ssp-buffer-size=4 -m64 -mtune=generic -MT
<br>
vt_memhook.o -MD -MP -MF .deps/vt_memhook.Tpo -c -o vt_memhook.o
<br>
vt_memhook.c
<br>
mv -f .deps/vt_memhook.Tpo .deps/vt_memhook.Po
<br>
gcc -DHAVE_CONFIG_H -I. -I.. -I../tools/opari/lib
<br>
-I../extlib/otf/otflib -I../extlib/otf/otflib     -D_GNU_SOURCE
<br>
-DBINDIR=\&quot;/opt/openmpi-gcc/1.3.2/bin\&quot;
<br>
-DDATADIR=\&quot;/opt/openmpi-gcc/1.3.2/share\&quot; -DRFG -DVT_BFD -DVT_MEMHOOK
<br>
-DVT_IOWRAP  -O2 -g -pipe -Wall -Wp,-D_FORTIFY_SOURCE=2 -fexceptions
<br>
-fstack-protector --param=ssp-buffer-size=4 -m64 -mtune=generic -MT
<br>
vt_memreg.o -MD -MP -MF .deps/vt_memreg.Tpo -c -o vt_memreg.o
<br>
vt_memreg.c
<br>
mv -f .deps/vt_memreg.Tpo .deps/vt_memreg.Po
<br>
gcc -DHAVE_CONFIG_H -I. -I.. -I../tools/opari/lib
<br>
-I../extlib/otf/otflib -I../extlib/otf/otflib     -D_GNU_SOURCE
<br>
-DBINDIR=\&quot;/opt/openmpi-gcc/1.3.2/bin\&quot;
<br>
-DDATADIR=\&quot;/opt/openmpi-gcc/1.3.2/share\&quot; -DRFG -DVT_BFD -DVT_MEMHOOK
<br>
-DVT_IOWRAP  -O2 -g -pipe -Wall -Wp,-D_FORTIFY_SOURCE=2 -fexceptions
<br>
-fstack-protector --param=ssp-buffer-size=4 -m64 -mtune=generic -MT
<br>
vt_iowrap.o -MD -MP -MF .deps/vt_iowrap.Tpo -c -o vt_iowrap.o
<br>
vt_iowrap.c
<br>
vt_iowrap.c:1242: error: expected declaration specifiers or '...'
<br>
before numeric constant
<br>
vt_iowrap.c:1243: error: conflicting types for '__fprintf_chk'
<br>
make[5]: *** [vt_iowrap.o] Error 1
<br>
make[5]: Leaving directory
<br>
`/usr/src/redhat/BUILD/openmpi-1.3.2/ompi/contrib/vt/vt/vtlib'
<br>
<p><p>I used this as my build command:
<br>
<p>rpmbuild -bb --define 'install_in_opt 1' --define 'install_modulefile
<br>
1' --define 'modules_rpm_name environment-modules' --define
<br>
'build_all_in_one_rpm 0' --define 'configure_options
<br>
--with-tm=/opt/torque' --define '_name openmpi-gcc' openmpi-1.3.2.spec
<br>
<p>Suggestions?
<br>
<p>--Jim
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9758.php">Ralph Castain: "Re: [OMPI users] Compile problems with 1.3.2"</a>
<li><strong>Previous message:</strong> <a href="9756.php">Jeff Squyres: "Re: [OMPI users] CPU user time vs. system time"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9758.php">Ralph Castain: "Re: [OMPI users] Compile problems with 1.3.2"</a>
<li><strong>Reply:</strong> <a href="9758.php">Ralph Castain: "Re: [OMPI users] Compile problems with 1.3.2"</a>
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
