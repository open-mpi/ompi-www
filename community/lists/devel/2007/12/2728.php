<?
$subject_val = "Re: [OMPI devel] vt-integration";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec  5 11:52:56 2007" -->
<!-- isoreceived="20071205165256" -->
<!-- sent="Wed, 5 Dec 2007 10:52:51 -0600 (CST)" -->
<!-- isosent="20071205165251" -->
<!-- name="Brian W. Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] vt-integration" -->
<!-- id="Pine.LNX.4.64.0712051047210.8890_at_marvin.we-be-smart.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="620A048A-252F-4868-A67F-18F39B1FD792_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] vt-integration<br>
<strong>From:</strong> Brian W. Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-05 11:52:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2729.php">Terry Dontje: "Re: [OMPI devel] vt integration"</a>
<li><strong>Previous message:</strong> <a href="2727.php">Jeff Squyres: "Re: [OMPI devel] vt-integration"</a>
<li><strong>In reply to:</strong> <a href="2727.php">Jeff Squyres: "Re: [OMPI devel] vt-integration"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
OS X enforces a no duplicate symbol rule when flat namespaces are in use 
<br>
(the default on OS X).  If all the libraries are two-level namespace 
<br>
libraries (libSystem.dylib, aka libm.dylib is two-level), then duplicate 
<br>
symbols are mostly ok.
<br>
<p>Libtool by default forces a flat namespace in sharedlibraries to work 
<br>
around an oddity on early OS X systems with undefined references.  There's 
<br>
also a way to make static two-level namespaces (I think), but I haven't 
<br>
tried that before).  You can cause Libtool (and the linker) to be a bit 
<br>
more sane if you set the environment variable MACOSX_DEPLOYMENT_TARGET to 
<br>
either 10.3 or 10.4.  The shared library rules followed by Libtool and the 
<br>
compiler chain will then be for that OS X release, rather than for the 
<br>
original 10.0.  We don't support anything older than 10.3, so this isn't 
<br>
really a problem.
<br>
<p>Of course, since the default for users is to emit 10.0 target code, that 
<br>
can be a bit hard to make work out.  So you might want to have a configure 
<br>
test to figure all that out and not build the IO intercept library in some 
<br>
cases.
<br>
<p>Brian
<br>
<p>On Wed, 5 Dec 2007, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; I know that OS X's linker is quite different than the Linux linker --
</span><br>
<span class="quotelev1">&gt; you might want to dig into the ld(1) man page on OS X as a starting
</span><br>
<span class="quotelev1">&gt; point, and/or consult developer.apple.com for more details.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Dec 5, 2007, at 10:04 AM, Matthias Jurenz wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi Jeff,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have added checks for the functions open64, creat64, etc. to the
</span><br>
<span class="quotelev2">&gt;&gt; VT's configure script,
</span><br>
<span class="quotelev2">&gt;&gt; so building of VT works fine on MacOS AND Solaris (Terry had the
</span><br>
<span class="quotelev2">&gt;&gt; same problem).
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for your hint ;-)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Unfortunately, there is a new problem on MacOS. I get the following
</span><br>
<span class="quotelev2">&gt;&gt; linker errors, if I try
</span><br>
<span class="quotelev2">&gt;&gt; to link an application with the VT libraries:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; gcc -finstrument-functions pi_seq.o -lm -o pi_seq
</span><br>
<span class="quotelev2">&gt;&gt; -L/Users/jurenz/lib/vtrace-5.4.1/lib  -lvt  -lotf -lz -L/usr/local/
</span><br>
<span class="quotelev2">&gt;&gt; lib/ -lbfd -lintl -L/usr/local/lib/ -liberty
</span><br>
<span class="quotelev2">&gt;&gt; /usr/bin/ld: multiple definitions of symbol _close
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib/gcc/i686-apple-darwin8/4.0.1/../../../libm.dylib(close.So)
</span><br>
<span class="quotelev2">&gt;&gt; definition of _close
</span><br>
<span class="quotelev2">&gt;&gt; /Users/jurenz/lib/vtrace-5.4.1/lib/libvt.a(vt_iowrap.o) definition
</span><br>
<span class="quotelev2">&gt;&gt; of _close in section (__TEXT,__text)
</span><br>
<span class="quotelev2">&gt;&gt; /usr/bin/ld: multiple definitions of symbol _fclose
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib/gcc/i686-apple-darwin8/4.0.1/../../../libm.dylib(fclose.So)
</span><br>
<span class="quotelev2">&gt;&gt; definition of _fclose
</span><br>
<span class="quotelev2">&gt;&gt; /Users/jurenz/lib/vtrace-5.4.1/lib/libvt.a(vt_iowrap.o) definition
</span><br>
<span class="quotelev2">&gt;&gt; of _fclose in section (__TEXT,__text)
</span><br>
<span class="quotelev2">&gt;&gt; /usr/bin/ld: multiple definitions of symbol _fdopen
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib/gcc/i686-apple-darwin8/4.0.1/../../../libm.dylib(fdopen.So)
</span><br>
<span class="quotelev2">&gt;&gt; definition of _fdopen
</span><br>
<span class="quotelev2">&gt;&gt; /Users/jurenz/lib/vtrace-5.4.1/lib/libvt.a(vt_iowrap.o) definition
</span><br>
<span class="quotelev2">&gt;&gt; of _fdopen in section (__TEXT,__text)
</span><br>
<span class="quotelev2">&gt;&gt; /usr/bin/ld: multiple definitions of symbol _fgets
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib/gcc/i686-apple-darwin8/4.0.1/../../../libm.dylib(fgets.So)
</span><br>
<span class="quotelev2">&gt;&gt; definition of _fgets
</span><br>
<span class="quotelev2">&gt;&gt; /Users/jurenz/lib/vtrace-5.4.1/lib/libvt.a(vt_iowrap.o) definition
</span><br>
<span class="quotelev2">&gt;&gt; of _fgets in section (__TEXT,__text)
</span><br>
<span class="quotelev2">&gt;&gt; /usr/bin/ld: multiple definitions of symbol _fopen
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib/gcc/i686-apple-darwin8/4.0.1/../../../libm.dylib(fopen.So)
</span><br>
<span class="quotelev2">&gt;&gt; definition of _fopen
</span><br>
<span class="quotelev2">&gt;&gt; /Users/jurenz/lib/vtrace-5.4.1/lib/libvt.a(vt_iowrap.o) definition
</span><br>
<span class="quotelev2">&gt;&gt; of _fopen in section (__TEXT,__text)
</span><br>
<span class="quotelev2">&gt;&gt; /usr/bin/ld: multiple definitions of symbol _fprintf
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib/gcc/i686-apple-darwin8/4.0.1/../../../
</span><br>
<span class="quotelev2">&gt;&gt; libm.dylib(fprintf.So) definition of _fprintf
</span><br>
<span class="quotelev2">&gt;&gt; /Users/jurenz/lib/vtrace-5.4.1/lib/libvt.a(vt_iowrap.o) definition
</span><br>
<span class="quotelev2">&gt;&gt; of _fprintf in section (__TEXT,__text)
</span><br>
<span class="quotelev2">&gt;&gt; /usr/bin/ld: multiple definitions of symbol _fputc
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib/gcc/i686-apple-darwin8/4.0.1/../../../libm.dylib(fputc.So)
</span><br>
<span class="quotelev2">&gt;&gt; definition of _fputc
</span><br>
<span class="quotelev2">&gt;&gt; /Users/jurenz/lib/vtrace-5.4.1/lib/libvt.a(vt_iowrap.o) definition
</span><br>
<span class="quotelev2">&gt;&gt; of _fputc in section (__TEXT,__text)
</span><br>
<span class="quotelev2">&gt;&gt; /usr/bin/ld: multiple definitions of symbol _fread
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib/gcc/i686-apple-darwin8/4.0.1/../../../libm.dylib(fread.So)
</span><br>
<span class="quotelev2">&gt;&gt; definition of _fread
</span><br>
<span class="quotelev2">&gt;&gt; /Users/jurenz/lib/vtrace-5.4.1/lib/libvt.a(vt_iowrap.o) definition
</span><br>
<span class="quotelev2">&gt;&gt; of _fread in section (__TEXT,__text)
</span><br>
<span class="quotelev2">&gt;&gt; /usr/bin/ld: multiple definitions of symbol _fwrite
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib/gcc/i686-apple-darwin8/4.0.1/../../../libm.dylib(fwrite.So)
</span><br>
<span class="quotelev2">&gt;&gt; definition of _fwrite
</span><br>
<span class="quotelev2">&gt;&gt; /Users/jurenz/lib/vtrace-5.4.1/lib/libvt.a(vt_iowrap.o) definition
</span><br>
<span class="quotelev2">&gt;&gt; of _fwrite in section (__TEXT,__text)
</span><br>
<span class="quotelev2">&gt;&gt; /usr/bin/ld: multiple definitions of symbol _open
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib/gcc/i686-apple-darwin8/4.0.1/../../../libm.dylib(open.So)
</span><br>
<span class="quotelev2">&gt;&gt; definition of _open
</span><br>
<span class="quotelev2">&gt;&gt; /Users/jurenz/lib/vtrace-5.4.1/lib/libvt.a(vt_iowrap.o) definition
</span><br>
<span class="quotelev2">&gt;&gt; of _open in section (__TEXT,__text)
</span><br>
<span class="quotelev2">&gt;&gt; /usr/bin/ld: multiple definitions of symbol _read
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib/gcc/i686-apple-darwin8/4.0.1/../../../libm.dylib(read.So)
</span><br>
<span class="quotelev2">&gt;&gt; definition of _read
</span><br>
<span class="quotelev2">&gt;&gt; /Users/jurenz/lib/vtrace-5.4.1/lib/libvt.a(vt_iowrap.o) definition
</span><br>
<span class="quotelev2">&gt;&gt; of _read in section (__TEXT,__text)
</span><br>
<span class="quotelev2">&gt;&gt; /usr/bin/ld: multiple definitions of symbol _rewind
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib/gcc/i686-apple-darwin8/4.0.1/../../../libm.dylib(rewind.So)
</span><br>
<span class="quotelev2">&gt;&gt; definition of _rewind
</span><br>
<span class="quotelev2">&gt;&gt; /Users/jurenz/lib/vtrace-5.4.1/lib/libvt.a(vt_iowrap.o) definition
</span><br>
<span class="quotelev2">&gt;&gt; of _rewind in section (__TEXT,__text)
</span><br>
<span class="quotelev2">&gt;&gt; /usr/bin/ld: multiple definitions of symbol _write
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib/gcc/i686-apple-darwin8/4.0.1/../../../libm.dylib(write.So)
</span><br>
<span class="quotelev2">&gt;&gt; definition of _write
</span><br>
<span class="quotelev2">&gt;&gt; /Users/jurenz/lib/vtrace-5.4.1/lib/libvt.a(vt_iowrap.o) definition
</span><br>
<span class="quotelev2">&gt;&gt; of _write in section (__TEXT,__text)
</span><br>
<span class="quotelev2">&gt;&gt; /usr/bin/ld: multiple definitions of symbol _writev
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib/gcc/i686-apple-darwin8/4.0.1/../../../libm.dylib(writev.So)
</span><br>
<span class="quotelev2">&gt;&gt; definition of _writev
</span><br>
<span class="quotelev2">&gt;&gt; /Users/jurenz/lib/vtrace-5.4.1/lib/libvt.a(vt_iowrap.o) definition
</span><br>
<span class="quotelev2">&gt;&gt; of _writev in section (__TEXT,__text)
</span><br>
<span class="quotelev2">&gt;&gt; /usr/bin/ld: warning multiple definitions of symbol _lseek
</span><br>
<span class="quotelev2">&gt;&gt; /Users/jurenz/lib/vtrace-5.4.1/lib/libvt.a(vt_iowrap.o) definition
</span><br>
<span class="quotelev2">&gt;&gt; of _lseek in section (__TEXT,__text)
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib/gcc/i686-apple-darwin8/4.0.1/../../../libm.dylib(lseek.So)
</span><br>
<span class="quotelev2">&gt;&gt; definition of _lseek
</span><br>
<span class="quotelev2">&gt;&gt; /usr/bin/ld: warning multiple definitions of symbol _fseek
</span><br>
<span class="quotelev2">&gt;&gt; /Users/jurenz/lib/vtrace-5.4.1/lib/libvt.a(vt_iowrap.o) definition
</span><br>
<span class="quotelev2">&gt;&gt; of _fseek in section (__TEXT,__text)
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib/gcc/i686-apple-darwin8/4.0.1/../../../libm.dylib(fseek.So)
</span><br>
<span class="quotelev2">&gt;&gt; definition of _fseek
</span><br>
<span class="quotelev2">&gt;&gt; /usr/bin/ld: warning multiple definitions of symbol _fseeko
</span><br>
<span class="quotelev2">&gt;&gt; /Users/jurenz/lib/vtrace-5.4.1/lib/libvt.a(vt_iowrap.o) definition
</span><br>
<span class="quotelev2">&gt;&gt; of _fseeko in section (__TEXT,__text)
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib/gcc/i686-apple-darwin8/4.0.1/../../../libm.dylib(fseek.So)
</span><br>
<span class="quotelev2">&gt;&gt; definition of _fseeko
</span><br>
<span class="quotelev2">&gt;&gt; /usr/bin/ld: warning multiple definitions of symbol _fscanf
</span><br>
<span class="quotelev2">&gt;&gt; /Users/jurenz/lib/vtrace-5.4.1/lib/libvt.a(vt_iowrap.o) definition
</span><br>
<span class="quotelev2">&gt;&gt; of _fscanf in section (__TEXT,__text)
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib/gcc/i686-apple-darwin8/4.0.1/../../../libm.dylib(fscanf.So)
</span><br>
<span class="quotelev2">&gt;&gt; definition of _fscanf
</span><br>
<span class="quotelev2">&gt;&gt; /usr/bin/ld: warning multiple definitions of symbol _putc
</span><br>
<span class="quotelev2">&gt;&gt; /Users/jurenz/lib/vtrace-5.4.1/lib/libvt.a(vt_iowrap.o) definition
</span><br>
<span class="quotelev2">&gt;&gt; of _putc in section (__TEXT,__text)
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib/gcc/i686-apple-darwin8/4.0.1/../../../libm.dylib(putc.So)
</span><br>
<span class="quotelev2">&gt;&gt; definition of _putc
</span><br>
<span class="quotelev2">&gt;&gt; collect2: ld returned 1 exit status
</span><br>
<span class="quotelev2">&gt;&gt; make: *** [pi_seq] Error 1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; To intercept I/O calls, VT overwrites the Libc's I/O functions in
</span><br>
<span class="quotelev2">&gt;&gt; the source file vtlib/vt_iowrap.c.
</span><br>
<span class="quotelev2">&gt;&gt; It seems that the GNU compiler on MacOS doen't like that ?? Has
</span><br>
<span class="quotelev2">&gt;&gt; anyone an idea what's wrong ?
</span><br>
<span class="quotelev2">&gt;&gt; I have used the GNU compiler version 4.0.1 on MacOS 9 (darwin 8.11.1).
</span><br>
<span class="quotelev2">&gt;&gt; To avoid this problem, I/O tracing will be disabled on MacOS... but
</span><br>
<span class="quotelev2">&gt;&gt; that's not a nice solution :-(
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt; Matthias
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Unfortunately, VT fails to compile on OS X Leopard (10.5.1).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - Is there a way to remove the anonymous variadic macros?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - open64, creat64, etc. do not appear to exist on OS X.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I don't know if you want to go through the work of supporting OS X
</span><br>
<span class="quotelev2">&gt;&gt; or
</span><br>
<span class="quotelev3">&gt;&gt;&gt; not -- if not, we should put in appropriate controls so that VT will
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;turn itself off&quot; when it detects that it is on a system that does
</span><br>
<span class="quotelev2">&gt;&gt; not
</span><br>
<span class="quotelev3">&gt;&gt;&gt; support what it needs (e.g., open64, creat64, ...etc.).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Here's the output from a build on OS X 10.5.1:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Making all in vtlib
</span><br>
<span class="quotelev3">&gt;&gt;&gt; gcc -DHAVE_CONFIG_H -I. -I.. -I../tools/opari/lib -I../extlib/otf/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; otflib -I../extlib/otf/otflib      -DBINDIR=\&quot;/Users/jsquyres/
</span><br>
<span class="quotelev2">&gt;&gt; bogus/bin
</span><br>
<span class="quotelev3">&gt;&gt;&gt; \&quot; -DDATADIR=\&quot;/Users/jsquyres/bogus/share/vampirtrace\&quot; -DRFG   -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; DVT_IOWRAP  -g -Wall -Wundef -Wno-long-long -Wsign-compare -
</span><br>
<span class="quotelev2">&gt;&gt; Wmissing-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; prototypes -Wstrict-prototypes -Wcomment -pedantic -Wno-long-
</span><br>
<span class="quotelev2">&gt;&gt; double -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Werror-implicit-function-declaration -finline-functions -fno-strict-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; aliasing  -MT vt_iowrap.o -MD -MP -MF .deps/vt_iowrap.Tpo -c -o
</span><br>
<span class="quotelev3">&gt;&gt;&gt; vt_iowrap.o vt_iowrap.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In file included from vt_iowrap.c:32:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; vt_iowrap.h:239:20: warning: anonymous variadic macros were
</span><br>
<span class="quotelev2">&gt;&gt; introduced
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in C99
</span><br>
<span class="quotelev3">&gt;&gt;&gt; vt_iowrap.h:282:43: warning: anonymous variadic macros were
</span><br>
<span class="quotelev2">&gt;&gt; introduced
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in C99
</span><br>
<span class="quotelev3">&gt;&gt;&gt; vt_iowrap.h:328:33: warning: anonymous variadic macros were
</span><br>
<span class="quotelev2">&gt;&gt; introduced
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in C99
</span><br>
<span class="quotelev3">&gt;&gt;&gt; vt_iowrap.h:335:38: warning: anonymous variadic macros were
</span><br>
<span class="quotelev2">&gt;&gt; introduced
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in C99
</span><br>
<span class="quotelev3">&gt;&gt;&gt; vt_iowrap.c: In function &#145;open&#146;:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; vt_iowrap.c:170: warning: &#145;mode_t&#146; is promoted to &#145;int&#146; when passed
</span><br>
<span class="quotelev3">&gt;&gt;&gt; through &#145;...&#146;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; vt_iowrap.c:170: warning: (so you should pass &#145;int&#146; not &#145;mode_t&#146; to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#145;va_arg&#146;)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; vt_iowrap.c:170: note: if this code is reached, the program will
</span><br>
<span class="quotelev2">&gt;&gt; abort
</span><br>
<span class="quotelev3">&gt;&gt;&gt; vt_iowrap.c: At top level:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; vt_iowrap.c:193: warning: no previous prototype for &#145;open64&#146;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; vt_iowrap.c: In function &#145;open64&#146;:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; vt_iowrap.c:204: warning: &#145;mode_t&#146; is promoted to &#145;int&#146; when passed
</span><br>
<span class="quotelev3">&gt;&gt;&gt; through &#145;...&#146;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; vt_iowrap.c:204: note: if this code is reached, the program will
</span><br>
<span class="quotelev2">&gt;&gt; abort
</span><br>
<span class="quotelev3">&gt;&gt;&gt; vt_iowrap.c: At top level:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; vt_iowrap.c:249: warning: no previous prototype for &#145;creat64&#146;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; vt_iowrap.c:368: error: syntax error before &#145;lseek64&#146;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; vt_iowrap.c:368: error: syntax error before &#145;off64_t&#146;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; vt_iowrap.c:369: warning: return type defaults to &#145;int&#146;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; vt_iowrap.c:369: warning: function declaration isn&#146;t a prototype
</span><br>
<span class="quotelev3">&gt;&gt;&gt; vt_iowrap.c: In function &#145;lseek64&#146;:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; vt_iowrap.c:371: error: &#145;off64_t&#146; undeclared (first use in this
</span><br>
<span class="quotelev3">&gt;&gt;&gt; function)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; vt_iowrap.c:371: error: (Each undeclared identifier is reported only
</span><br>
<span class="quotelev3">&gt;&gt;&gt; once
</span><br>
<span class="quotelev3">&gt;&gt;&gt; vt_iowrap.c:371: error: for each function it appears in.)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; vt_iowrap.c:371: error: syntax error before &#145;ret&#146;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; vt_iowrap.c:376: error: implicit declaration of function &#145;off64_t&#146;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; vt_iowrap.c:376: error: syntax error before &#145;)&#146; token
</span><br>
<span class="quotelev3">&gt;&gt;&gt; vt_iowrap.c:383: error: &#145;ret&#146; undeclared (first use in this
</span><br>
<span class="quotelev2">&gt;&gt; function)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; vt_iowrap.c:383: error: syntax error before &#145;)&#146; token
</span><br>
<span class="quotelev3">&gt;&gt;&gt; vt_iowrap.c:385: error: &#145;fd&#146; undeclared (first use in this function)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; vt_iowrap.c:389: warning: control reaches end of non-void function
</span><br>
<span class="quotelev3">&gt;&gt;&gt; vt_iowrap.c: At top level:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; vt_iowrap.c:542: error: syntax error before &#145;off64_t&#146;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; vt_iowrap.c:543: warning: function declaration isn&#146;t a prototype
</span><br>
<span class="quotelev3">&gt;&gt;&gt; vt_iowrap.c: In function &#145;pread64&#146;:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; vt_iowrap.c:550: error: syntax error before &#145;off64_t&#146;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; vt_iowrap.c:550: warning: function declaration isn&#146;t a prototype
</span><br>
<span class="quotelev3">&gt;&gt;&gt; vt_iowrap.c:550: error: &#145;fd&#146; undeclared (first use in this function)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; vt_iowrap.c:550: error: &#145;buf&#146; undeclared (first use in this
</span><br>
<span class="quotelev2">&gt;&gt; function)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; vt_iowrap.c:550: error: &#145;count&#146; undeclared (first use in this
</span><br>
<span class="quotelev2">&gt;&gt; function)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; vt_iowrap.c:550: error: &#145;offset&#146; undeclared (first use in this
</span><br>
<span class="quotelev2">&gt;&gt; function)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; vt_iowrap.c:557: error: syntax error before &#145;off64_t&#146;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; vt_iowrap.c:557: warning: function declaration isn&#146;t a prototype
</span><br>
<span class="quotelev3">&gt;&gt;&gt; vt_iowrap.c: At top level:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; vt_iowrap.c:567: error: syntax error before &#145;off64_t&#146;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; vt_iowrap.c:568: warning: function declaration isn&#146;t a prototype
</span><br>
<span class="quotelev3">&gt;&gt;&gt; vt_iowrap.c: In function &#145;pwrite64&#146;:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; vt_iowrap.c:575: error: syntax error before &#145;off64_t&#146;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; vt_iowrap.c:575: warning: function declaration isn&#146;t a prototype
</span><br>
<span class="quotelev3">&gt;&gt;&gt; vt_iowrap.c:575: error: &#145;fd&#146; undeclared (first use in this function)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; vt_iowrap.c:575: error: &#145;buf&#146; undeclared (first use in this
</span><br>
<span class="quotelev2">&gt;&gt; function)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; vt_iowrap.c:575: error: &#145;count&#146; undeclared (first use in this
</span><br>
<span class="quotelev2">&gt;&gt; function)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; vt_iowrap.c:575: error: &#145;offset&#146; undeclared (first use in this
</span><br>
<span class="quotelev2">&gt;&gt; function)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; vt_iowrap.c:582: error: syntax error before &#145;off64_t&#146;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; vt_iowrap.c:582: warning: function declaration isn&#146;t a prototype
</span><br>
<span class="quotelev3">&gt;&gt;&gt; vt_iowrap.c: At top level:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; vt_iowrap.c:617: warning: no previous prototype for &#145;fopen64&#146;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; vt_iowrap.c:743: error: syntax error before &#145;off64_t&#146;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; vt_iowrap.c:744: warning: function declaration isn&#146;t a prototype
</span><br>
<span class="quotelev3">&gt;&gt;&gt; vt_iowrap.c: In function &#145;fseeko64&#146;:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; vt_iowrap.c:751: error: syntax error before &#145;off64_t&#146;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; vt_iowrap.c:751: warning: function declaration isn&#146;t a prototype
</span><br>
<span class="quotelev3">&gt;&gt;&gt; vt_iowrap.c:751: error: &#145;stream&#146; undeclared (first use in this
</span><br>
<span class="quotelev2">&gt;&gt; function)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; vt_iowrap.c:751: error: &#145;offset&#146; undeclared (first use in this
</span><br>
<span class="quotelev2">&gt;&gt; function)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; vt_iowrap.c:751: error: &#145;whence&#146; undeclared (first use in this
</span><br>
<span class="quotelev2">&gt;&gt; function)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; vt_iowrap.c:760: error: syntax error before &#145;off64_t&#146;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; vt_iowrap.c:760: warning: function declaration isn&#146;t a prototype
</span><br>
<span class="quotelev3">&gt;&gt;&gt; vt_iowrap.c: At top level:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; vt_iowrap.c:815: warning: type defaults to &#145;int&#146; in declaration of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#145;fpos64_t&#146;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; vt_iowrap.c:815: error: syntax error before &#145;*&#146; token
</span><br>
<span class="quotelev3">&gt;&gt;&gt; vt_iowrap.c:815: warning: function declaration isn&#146;t a prototype
</span><br>
<span class="quotelev3">&gt;&gt;&gt; vt_iowrap.c: In function &#145;fsetpos64&#146;:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; vt_iowrap.c:822: warning: type defaults to &#145;int&#146; in declaration of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#145;fpos64_t&#146;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; vt_iowrap.c:822: error: syntax error before &#145;*&#146; token
</span><br>
<span class="quotelev3">&gt;&gt;&gt; vt_iowrap.c:822: warning: function declaration isn&#146;t a prototype
</span><br>
<span class="quotelev3">&gt;&gt;&gt; vt_iowrap.c:822: error: &#145;stream&#146; undeclared (first use in this
</span><br>
<span class="quotelev2">&gt;&gt; function)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; vt_iowrap.c:822: error: &#145;pos&#146; undeclared (first use in this
</span><br>
<span class="quotelev2">&gt;&gt; function)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; vt_iowrap.c:831: warning: type defaults to &#145;int&#146; in declaration of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#145;fpos64_t&#146;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; vt_iowrap.c:831: error: syntax error before &#145;*&#146; token
</span><br>
<span class="quotelev3">&gt;&gt;&gt; vt_iowrap.c:831: warning: function declaration isn&#146;t a prototype
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[5]: *** [vt_iowrap.o] Error 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[4]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[3]: *** [all] Error 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[2]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [22:44] beezle:~/svn/vt-integration %
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2729.php">Terry Dontje: "Re: [OMPI devel] vt integration"</a>
<li><strong>Previous message:</strong> <a href="2727.php">Jeff Squyres: "Re: [OMPI devel] vt-integration"</a>
<li><strong>In reply to:</strong> <a href="2727.php">Jeff Squyres: "Re: [OMPI devel] vt-integration"</a>
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
