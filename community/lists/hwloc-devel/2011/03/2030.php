<?
$subject_val = "[hwloc-devel] pgi 11.1";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  1 08:00:10 2011" -->
<!-- isoreceived="20110301130010" -->
<!-- sent="Tue, 01 Mar 2011 14:00:04 +0100" -->
<!-- isosent="20110301130004" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="[hwloc-devel] pgi 11.1" -->
<!-- id="4D6CEDD4.80304_at_inria.fr" -->
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
<strong>Subject:</strong> [hwloc-devel] pgi 11.1<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-01 08:00:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2031.php">Jeff Squyres: "Re: [hwloc-devel] pgi 11.1"</a>
<li><strong>Previous message:</strong> <a href="2029.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] multiple simultaneous topology inits?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2031.php">Jeff Squyres: "Re: [hwloc-devel] pgi 11.1"</a>
<li><strong>Reply:</strong> <a href="2031.php">Jeff Squyres: "Re: [hwloc-devel] pgi 11.1"</a>
<li><strong>Reply:</strong> <a href="2039.php">Brice Goglin: "Re: [hwloc-devel] pgi 11.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I just tried a PGI compiler 11.1 and couldn't compile hwloc trunk, v1.1
<br>
or even v1.0. All of them fail in the libxml headers. It looks like it
<br>
doesn't like prototypes with a variable number of arguments:
<br>
<p>libtool: compile:  /opt/cluster/compiler/pgi/linux86-64/latest/bin/pgcc -DHAVE_CONFIG_H -I. -I../../v1.0/src -I../include/private -I../include/hwloc -I/home/goglin/hwloc/v1.0/include -I/home/goglin/hwloc/build1.0/include -I/home/goglin/hwloc/v1.0/include -I/home/goglin/hwloc/build1.0/include -I/usr/include/libxml2 -I/home/goglin/hwloc/v1.0/include -c ../../v1.0/src/topology-xml.c  -fpic -DPIC -o .libs/topology-xml.o
<br>
PGC-S-0036-Syntax error: Recovery attempted by inserting '[' before '(' (/usr/include/libxml2/libxml/xmlerror.h: 846)
<br>
PGC-S-0036-Syntax error: Recovery attempted by inserting ']' before ';' (/usr/include/libxml2/libxml/xmlerror.h: 846)
<br>
PGC-S-0091-Integer constant expression required (/usr/include/libxml2/libxml/xmlerror.h: 846)
<br>
PGC-S-0082-Function returning array not allowed (/usr/include/libxml2/libxml/xmlerror.h: 846)
<br>
PGC-S-0036-Syntax error: Recovery attempted by inserting '=' before '(' (/usr/include/libxml2/libxml/xmlerror.h: 877)
<br>
PGC-S-0074-Non-constant expression in initializer (/usr/include/libxml2/libxml/xmlerror.h: 877)
<br>
PGC-S-0076-Initializer not allowed for function (/usr/include/libxml2/libxml/xmlerror.h: 877)
<br>
PGC-S-0036-Syntax error: Recovery attempted by inserting '=' before '(' (/usr/include/libxml2/libxml/xmlerror.h: 881)
<br>
PGC-S-0074-Non-constant expression in initializer (/usr/include/libxml2/libxml/xmlerror.h: 881)
<br>
PGC-S-0076-Initializer not allowed for function (/usr/include/libxml2/libxml/xmlerror.h: 881)
<br>
PGC-S-0036-Syntax error: Recovery attempted by inserting '=' before '(' (/usr/include/libxml2/libxml/xmlerror.h: 885)
<br>
PGC-S-0074-Non-constant expression in initializer (/usr/include/libxml2/libxml/xmlerror.h: 885)
<br>
PGC-S-0076-Initializer not allowed for function (/usr/include/libxml2/libxml/xmlerror.h: 885)
<br>
PGC-S-0036-Syntax error: Recovery attempted by inserting '=' before '(' (/usr/include/libxml2/libxml/xmlerror.h: 889)
<br>
PGC-S-0074-Non-constant expression in initializer (/usr/include/libxml2/libxml/xmlerror.h: 889)
<br>
PGC-S-0076-Initializer not allowed for function (/usr/include/libxml2/libxml/xmlerror.h: 889)
<br>
PGC-S-0036-Syntax error: Recovery attempted by inserting '[' before '(' (/usr/include/libxml2/libxml/valid.h: 44)
<br>
PGC-S-0036-Syntax error: Recovery attempted by inserting ']' before ';' (/usr/include/libxml2/libxml/valid.h: 44)
<br>
PGC-S-0091-Integer constant expression required (/usr/include/libxml2/libxml/valid.h: 44)
<br>
PGC-S-0082-Function returning array not allowed (/usr/include/libxml2/libxml/valid.h: 44)
<br>
PGC-S-0036-Syntax error: Recovery attempted by inserting '[' before '(' (/usr/include/libxml2/libxml/valid.h: 59)
<br>
PGC-S-0036-Syntax error: Recovery attempted by inserting ']' before ';' (/usr/include/libxml2/libxml/valid.h: 59)
<br>
PGC-S-0091-Integer constant expression required (/usr/include/libxml2/libxml/valid.h: 59)
<br>
PGC-S-0082-Function returning array not allowed (/usr/include/libxml2/libxml/valid.h: 59)
<br>
PGC-S-0036-Syntax error: Recovery attempted by inserting '[' before '(' (/usr/include/libxml2/libxml/parser.h: 597)
<br>
PGC-F-0008-Error limit exceeded (/usr/include/libxml2/libxml/parser.h)
<br>
PGC/x86-64 Linux 11.1-0: compilation aborted
<br>
make[1]: *** [topology-xml.lo] Error 1
<br>
make[1]: Leaving directory `/home/goglin/hwloc/build1.0/src'
<br>
make: *** [all-recursive] Error 1
<br>
<p><p>If I disable XML, it fails during link:
<br>
<p>libtool: link: /opt/cluster/compiler/pgi/linux86-64/latest/bin/pgcc -shared  -fpic -DPIC  .libs/topology.o .libs/traversal.o .libs/topology-synthetic.o .libs/bind.o .libs/cpuset.o .libs/misc.o .libs/topology-linux.o .libs/topology-x86.o   -lc    -Wl,-soname -Wl,libhwloc.so.0 -o .libs/libhwloc.so.0.2.0
<br>
/usr/bin/ld: /opt/cluster/compiler/pgi/shared/11.1/lib64/libpgbind.a(bindsa.o): relocation R_X86_64_PC32 against undefined symbol `syscall@@GLIBC_2.2.5' can not be used when making a shared object; recompile with -fPIC
<br>
/usr/bin/ld: final link failed: Bad value
<br>
make[1]: *** [libhwloc.la] Error 2
<br>
<p><p>I tried with CFLAGS=-fPIC but it didn't help (we already have -fpic
<br>
-DPIC on the compile line).
<br>
<p>I think earlier problems with PGI were caused by versions &lt;= 10.
<br>
<p>Anybody else tried PGI 11? Any idea what's going on above?
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2031.php">Jeff Squyres: "Re: [hwloc-devel] pgi 11.1"</a>
<li><strong>Previous message:</strong> <a href="2029.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] multiple simultaneous topology inits?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2031.php">Jeff Squyres: "Re: [hwloc-devel] pgi 11.1"</a>
<li><strong>Reply:</strong> <a href="2031.php">Jeff Squyres: "Re: [hwloc-devel] pgi 11.1"</a>
<li><strong>Reply:</strong> <a href="2039.php">Brice Goglin: "Re: [hwloc-devel] pgi 11.1"</a>
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
