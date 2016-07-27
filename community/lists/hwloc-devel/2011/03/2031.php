<?
$subject_val = "Re: [hwloc-devel] pgi 11.1";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  1 09:13:57 2011" -->
<!-- isoreceived="20110301141357" -->
<!-- sent="Tue, 1 Mar 2011 09:13:50 -0500" -->
<!-- isosent="20110301141350" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] pgi 11.1" -->
<!-- id="2CA31B84-C94D-4FF5-9E2B-DD6456F842CE_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4D6CEDD4.80304_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] pgi 11.1<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-01 09:13:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2032.php">Brice Goglin: "Re: [hwloc-devel] pgi 11.1"</a>
<li><strong>Previous message:</strong> <a href="2030.php">Brice Goglin: "[hwloc-devel] pgi 11.1"</a>
<li><strong>In reply to:</strong> <a href="2030.php">Brice Goglin: "[hwloc-devel] pgi 11.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2032.php">Brice Goglin: "Re: [hwloc-devel] pgi 11.1"</a>
<li><strong>Reply:</strong> <a href="2032.php">Brice Goglin: "Re: [hwloc-devel] pgi 11.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Do you have a support contract with PGI, perchance?
<br>
<p>I have brought things similar to this to them before and they fixed it.
<br>
<p><p>On Mar 1, 2011, at 8:00 AM, Brice Goglin wrote:
<br>
<p><span class="quotelev1">&gt; I just tried a PGI compiler 11.1 and couldn't compile hwloc trunk, v1.1
</span><br>
<span class="quotelev1">&gt; or even v1.0. All of them fail in the libxml headers. It looks like it
</span><br>
<span class="quotelev1">&gt; doesn't like prototypes with a variable number of arguments:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; libtool: compile:  /opt/cluster/compiler/pgi/linux86-64/latest/bin/pgcc -DHAVE_CONFIG_H -I. -I../../v1.0/src -I../include/private -I../include/hwloc -I/home/goglin/hwloc/v1.0/include -I/home/goglin/hwloc/build1.0/include -I/home/goglin/hwloc/v1.0/include -I/home/goglin/hwloc/build1.0/include -I/usr/include/libxml2 -I/home/goglin/hwloc/v1.0/include -c ../../v1.0/src/topology-xml.c  -fpic -DPIC -o .libs/topology-xml.o
</span><br>
<span class="quotelev1">&gt; PGC-S-0036-Syntax error: Recovery attempted by inserting '[' before '(' (/usr/include/libxml2/libxml/xmlerror.h: 846)
</span><br>
<span class="quotelev1">&gt; PGC-S-0036-Syntax error: Recovery attempted by inserting ']' before ';' (/usr/include/libxml2/libxml/xmlerror.h: 846)
</span><br>
<span class="quotelev1">&gt; PGC-S-0091-Integer constant expression required (/usr/include/libxml2/libxml/xmlerror.h: 846)
</span><br>
<span class="quotelev1">&gt; PGC-S-0082-Function returning array not allowed (/usr/include/libxml2/libxml/xmlerror.h: 846)
</span><br>
<span class="quotelev1">&gt; PGC-S-0036-Syntax error: Recovery attempted by inserting '=' before '(' (/usr/include/libxml2/libxml/xmlerror.h: 877)
</span><br>
<span class="quotelev1">&gt; PGC-S-0074-Non-constant expression in initializer (/usr/include/libxml2/libxml/xmlerror.h: 877)
</span><br>
<span class="quotelev1">&gt; PGC-S-0076-Initializer not allowed for function (/usr/include/libxml2/libxml/xmlerror.h: 877)
</span><br>
<span class="quotelev1">&gt; PGC-S-0036-Syntax error: Recovery attempted by inserting '=' before '(' (/usr/include/libxml2/libxml/xmlerror.h: 881)
</span><br>
<span class="quotelev1">&gt; PGC-S-0074-Non-constant expression in initializer (/usr/include/libxml2/libxml/xmlerror.h: 881)
</span><br>
<span class="quotelev1">&gt; PGC-S-0076-Initializer not allowed for function (/usr/include/libxml2/libxml/xmlerror.h: 881)
</span><br>
<span class="quotelev1">&gt; PGC-S-0036-Syntax error: Recovery attempted by inserting '=' before '(' (/usr/include/libxml2/libxml/xmlerror.h: 885)
</span><br>
<span class="quotelev1">&gt; PGC-S-0074-Non-constant expression in initializer (/usr/include/libxml2/libxml/xmlerror.h: 885)
</span><br>
<span class="quotelev1">&gt; PGC-S-0076-Initializer not allowed for function (/usr/include/libxml2/libxml/xmlerror.h: 885)
</span><br>
<span class="quotelev1">&gt; PGC-S-0036-Syntax error: Recovery attempted by inserting '=' before '(' (/usr/include/libxml2/libxml/xmlerror.h: 889)
</span><br>
<span class="quotelev1">&gt; PGC-S-0074-Non-constant expression in initializer (/usr/include/libxml2/libxml/xmlerror.h: 889)
</span><br>
<span class="quotelev1">&gt; PGC-S-0076-Initializer not allowed for function (/usr/include/libxml2/libxml/xmlerror.h: 889)
</span><br>
<span class="quotelev1">&gt; PGC-S-0036-Syntax error: Recovery attempted by inserting '[' before '(' (/usr/include/libxml2/libxml/valid.h: 44)
</span><br>
<span class="quotelev1">&gt; PGC-S-0036-Syntax error: Recovery attempted by inserting ']' before ';' (/usr/include/libxml2/libxml/valid.h: 44)
</span><br>
<span class="quotelev1">&gt; PGC-S-0091-Integer constant expression required (/usr/include/libxml2/libxml/valid.h: 44)
</span><br>
<span class="quotelev1">&gt; PGC-S-0082-Function returning array not allowed (/usr/include/libxml2/libxml/valid.h: 44)
</span><br>
<span class="quotelev1">&gt; PGC-S-0036-Syntax error: Recovery attempted by inserting '[' before '(' (/usr/include/libxml2/libxml/valid.h: 59)
</span><br>
<span class="quotelev1">&gt; PGC-S-0036-Syntax error: Recovery attempted by inserting ']' before ';' (/usr/include/libxml2/libxml/valid.h: 59)
</span><br>
<span class="quotelev1">&gt; PGC-S-0091-Integer constant expression required (/usr/include/libxml2/libxml/valid.h: 59)
</span><br>
<span class="quotelev1">&gt; PGC-S-0082-Function returning array not allowed (/usr/include/libxml2/libxml/valid.h: 59)
</span><br>
<span class="quotelev1">&gt; PGC-S-0036-Syntax error: Recovery attempted by inserting '[' before '(' (/usr/include/libxml2/libxml/parser.h: 597)
</span><br>
<span class="quotelev1">&gt; PGC-F-0008-Error limit exceeded (/usr/include/libxml2/libxml/parser.h)
</span><br>
<span class="quotelev1">&gt; PGC/x86-64 Linux 11.1-0: compilation aborted
</span><br>
<span class="quotelev1">&gt; make[1]: *** [topology-xml.lo] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `/home/goglin/hwloc/build1.0/src'
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If I disable XML, it fails during link:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; libtool: link: /opt/cluster/compiler/pgi/linux86-64/latest/bin/pgcc -shared  -fpic -DPIC  .libs/topology.o .libs/traversal.o .libs/topology-synthetic.o .libs/bind.o .libs/cpuset.o .libs/misc.o .libs/topology-linux.o .libs/topology-x86.o   -lc    -Wl,-soname -Wl,libhwloc.so.0 -o .libs/libhwloc.so.0.2.0
</span><br>
<span class="quotelev1">&gt; /usr/bin/ld: /opt/cluster/compiler/pgi/shared/11.1/lib64/libpgbind.a(bindsa.o): relocation R_X86_64_PC32 against undefined symbol `syscall@@GLIBC_2.2.5' can not be used when making a shared object; recompile with -fPIC
</span><br>
<span class="quotelev1">&gt; /usr/bin/ld: final link failed: Bad value
</span><br>
<span class="quotelev1">&gt; make[1]: *** [libhwloc.la] Error 2
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I tried with CFLAGS=-fPIC but it didn't help (we already have -fpic
</span><br>
<span class="quotelev1">&gt; -DPIC on the compile line).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think earlier problems with PGI were caused by versions &lt;= 10.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Anybody else tried PGI 11? Any idea what's going on above?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2032.php">Brice Goglin: "Re: [hwloc-devel] pgi 11.1"</a>
<li><strong>Previous message:</strong> <a href="2030.php">Brice Goglin: "[hwloc-devel] pgi 11.1"</a>
<li><strong>In reply to:</strong> <a href="2030.php">Brice Goglin: "[hwloc-devel] pgi 11.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2032.php">Brice Goglin: "Re: [hwloc-devel] pgi 11.1"</a>
<li><strong>Reply:</strong> <a href="2032.php">Brice Goglin: "Re: [hwloc-devel] pgi 11.1"</a>
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
