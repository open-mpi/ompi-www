<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Oct 27 08:22:45 2005" -->
<!-- isoreceived="20051027132245" -->
<!-- sent="Thu, 27 Oct 2005 15:22:30 +0200" -->
<!-- isosent="20051027132230" -->
<!-- name="Eugen Wintersberger" -->
<!-- email="eugen.wintersberger_at_[hidden]" -->
<!-- subject="[O-MPI users] Compiling RC4 on Alpha56 and SGI Origin" -->
<!-- id="1130419350.6264.6.camel_at_hubbard.hlphys.uni-linz.ac.at" -->
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
<strong>From:</strong> Eugen Wintersberger (<em>eugen.wintersberger_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-10-27 08:22:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0239.php">Brian Barrett: "Re: [O-MPI users] Compiling RC4 on Alpha56 and SGI Origin"</a>
<li><strong>Previous message:</strong> <a href="0237.php">Hugh Merz: "Re: [O-MPI users] thread support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0239.php">Brian Barrett: "Re: [O-MPI users] Compiling RC4 on Alpha56 and SGI Origin"</a>
<li><strong>Reply:</strong> <a href="0239.php">Brian Barrett: "Re: [O-MPI users] Compiling RC4 on Alpha56 and SGI Origin"</a>
<li><strong>Reply:</strong> <a href="0242.php">Brian Barrett: "Re: [O-MPI users] Compiling RC4 on Alpha56 and SGI Origin"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi there. 
<br>
&nbsp;Recently I decided to switch from LAM-MPI to OpenMPI. In addition to
<br>
some other machines I have three Alpha56 (Personal Workstations) in my
<br>
network. Unfortunately running configure yields the following output 
<br>
<p><span class="quotelev1">&gt;./configure 
</span><br>
<p>*** Assembler
<br>
checking directive for setting text section... .text
<br>
checking directive for exporting symbols... .globl
<br>
checking suffix for labels... :
<br>
checking prefix for global symbol labels...
<br>
checking for BSD-compatible nm... /usr/bin/nm -B
<br>
checking prefix for lsym labels... $
<br>
checking prefix for function in .type... @
<br>
checking if .size is needed... yes
<br>
checking if .align directive takes logarithmic value... yes
<br>
checking for fgrep... grep -F
<br>
checking whether to enable smp locks... yes
<br>
configure: error: No atomic primitives available for
<br>
alphaev56-unknown-linux-gnu
<br>
<p>Has anyone of you an idea what I can do with this. Is the alpha platform
<br>
supported by openmpi? 
<br>
<p>Second we have an SGI Origin at our university. After unpacking, the
<br>
configure command runs without any problems. But a subsequent make gives
<br>
<p>bash-2.05$ make
<br>
Making all in config
<br>
Making all in include
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;make  all-am
<br>
Making all in etc
<br>
Making all in contrib
<br>
Making all in opal
<br>
Making all in include
<br>
Making all in sys
<br>
Making all in alpha
<br>
Making all in amd64
<br>
Making all in ia32
<br>
Making all in ia64
<br>
Making all in mips
<br>
Making all in powerpc
<br>
Making all in sparc
<br>
Making all in sparcv9
<br>
Making all in win32
<br>
Making all in libltdl
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;make  all-am
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/bin/sh ./libtool --tag=CC --mode=compile gcc -DHAVE_CONFIG_H  -I. -I. -I.   -D_REENTRANT   -O3 -DNDEBUG  -c -o ltdl.lo ltdl.c
<br>
mkdir .libs
<br>
&nbsp;gcc -DHAVE_CONFIG_H -I. -I. -I. -D_REENTRANT -O3 -DNDEBUG -c ltdl.c  -DPIC -o .libs/ltdl.o
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/bin/sh ./libtool --tag=CC --mode=link gcc  -O3 -DNDEBUG     -o libltdlc.la   ltdl.lo -ldl -lm  -lnsl -lsocket -lpthread
<br>
ar cru .libs/libltdlc.a .libs/ltdl.o
<br>
: .libs/libltdlc.a
<br>
creating libltdlc.la
<br>
(cd .libs &amp;&amp; rm -f libltdlc.la &amp;&amp; ln -s ../libltdlc.la libltdlc.la)
<br>
Making all in asm
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;depbase=`echo asm.lo | sed 's|[^/]*$|.deps/&amp;|;s|\.lo$||'`; \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if /bin/sh ../../libtool --tag=CC --mode=compile gcc -DHAVE_CONFIG_H  -I. -I. -I../../include -I../../include   -I../../include -I../.. -I../.. -I../../include -I../../opal -I../../orte -I../../ompi  -D_REENTRANT   -O3 -DNDEBUG -fno-strict-aliasing  -MT asm.lo -MD -MP -MF &quot;$depbase.Tpo&quot; -c -o asm.lo asm.c; \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;then mv -f &quot;$depbase.Tpo&quot; &quot;$depbase.Plo&quot;; else rm -f &quot;$depbase.Tpo&quot;; exit 1; fi
<br>
mkdir .libs
<br>
&nbsp;gcc -DHAVE_CONFIG_H -I. -I. -I../../include -I../../include -I../../include -I../.. -I../.. -I../../include -I../../opal -I../../orte -I../../ompi -D_REENTRANT -O3 -DNDEBUG -fno-strict-aliasing -MT asm.lo -MD -MP -MF .deps/asm.Tpo -c asm.c  -DPIC -o .libs/asm.o
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rm -f atomic-asm.s
<br>
ln -s &quot;../../opal/asm/generated/atomic-mips-irix.s&quot; atomic-asm.s
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/bin/sh ../../libtool --mode=compile gcc   -O3 -DNDEBUG -fno-strict-aliasing -c -o atomic-asm.lo atomic-asm.s
<br>
&nbsp;gcc -O3 -DNDEBUG -fno-strict-aliasing -c atomic-asm.s  -DPIC -o .libs/atomic-asm.o
<br>
as: Error: /atomic-asm.s, line 146: Not all branch-label symbols were defined
<br>
as: Error: /atomic-asm.s, line 41: Label referenced but not defined: Lretry1
<br>
*** Error code 1 (bu21)
<br>
*** Error code 1 (bu21)
<br>
*** Error code 1 (bu21)
<br>
<p>Any idea why make breaks?
<br>
Thanks for your help.
<br>
<p>cu  
<br>
&nbsp;Eugen
<br>
<p><p><pre>
-- 
--------------------------------------------
|                                          | 
| Dipl.- Ing. Eugen Wintersberger          |
|                                          |
| Department of semiconductor physics      |
| Johannes Kepler University               |
| Altenbergerstr. 69                       |
| A-4040 Linz, Austria                     |
|                                          |
| Tel.: +43 732 2468 9605                  |
| Mobil: +43 664 311 286 1                 |
|                                          |
| mail: eugen.wintersberger_at_[hidden]         |
|       eugen.wintersberger_at_[hidden]        |
|                                          |
--------------------------------------------
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0239.php">Brian Barrett: "Re: [O-MPI users] Compiling RC4 on Alpha56 and SGI Origin"</a>
<li><strong>Previous message:</strong> <a href="0237.php">Hugh Merz: "Re: [O-MPI users] thread support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0239.php">Brian Barrett: "Re: [O-MPI users] Compiling RC4 on Alpha56 and SGI Origin"</a>
<li><strong>Reply:</strong> <a href="0239.php">Brian Barrett: "Re: [O-MPI users] Compiling RC4 on Alpha56 and SGI Origin"</a>
<li><strong>Reply:</strong> <a href="0242.php">Brian Barrett: "Re: [O-MPI users] Compiling RC4 on Alpha56 and SGI Origin"</a>
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
