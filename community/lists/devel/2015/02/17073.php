<?
$subject_val = "[OMPI devel] Odd master build failure with Studio 12.4 on Linux w/ -m32";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 26 22:25:49 2015" -->
<!-- isoreceived="20150227032549" -->
<!-- sent="Thu, 26 Feb 2015 19:25:46 -0800" -->
<!-- isosent="20150227032546" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] Odd master build failure with Studio 12.4 on Linux w/ -m32" -->
<!-- id="CAAvDA17R=NXSrNjNS+YzHivHWw97k-BJKbHQUfZWQoCq15=3BA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] Odd master build failure with Studio 12.4 on Linux w/ -m32<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-26 22:25:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17074.php">Ralph Castain: "Re: [OMPI devel] printf format warnings on master"</a>
<li><strong>Previous message:</strong> <a href="17072.php">Ralph Castain: "Re: [OMPI devel] nearly-irrepoducable failure of master on Mac OS X 10.8"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17076.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Odd master build failure with Studio 12.4 on Linux w/	-m32"</a>
<li><strong>Reply:</strong> <a href="17076.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Odd master build failure with Studio 12.4 on Linux w/	-m32"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am using Oracle's Studio 12.4 compilers for Linux/x86-64 to build the
<br>
current master tarball.
<br>
However, I am passing &quot;-m32&quot; to generate x86 (ILP32 ABI) executables.
<br>
<p>The full configure mess is:
<br>
<p>--prefix=[...] --enable-debug \
<br>
CC=cc  CFLAGS=&quot;-m32&quot;   --with-wrapper-cflags=&quot;-m32&quot; \
<br>
CXX=CC CXXFLAGS=&quot;-m32&quot; --with-wrapper-cxxflags=&quot;-m32&quot; \
<br>
FC=f90 FCFLAGS=&quot;-m32&quot;  --with-wrapper-fcflags=&quot;-m32&quot;
<br>
<p><p>The failing output from &quot;make V=1&quot; is
<br>
<p>/bin/sh ../../../libtool  --tag=CC   --mode=link cc  -m32 -g -mt
<br>
&nbsp;-export-dynamic    -o opal_wrapper opal_wrapper.o ../../../opal/
<br>
libopen-pal.la -lrt -lm -lutil   -lrt -lm -lutil
<br>
libtool: link: cc -m32 -g -mt -o .libs/opal_wrapper opal_wrapper.o
<br>
-Wl,--export-dynamic  ../../../opal/.libs/libopen-pal.so -ldl -lrt -lm
<br>
-lutil -mt -Wl,-rpath
<br>
-Wl,/scratch/phargrov/OMPI/openmpi-master-linux-x86_64-ss12u4-m32/INST/lib
<br>
../../../opal/.libs/libopen-pal.so: undefined reference to `ebx'
<br>
<p><p>Now clearly &quot;ebx&quot; should be referring to the CPU register, not an external
<br>
symbol, right?
<br>
HOWEVER, in x86 PIC code (e.g. a .so file) one CANNOT generally use 'ebx'
<br>
in inline asm because it is used as the GOT pointer.
<br>
So, their might be more than one problem here.
<br>
<p>The same is seen with the older Studio 12.3 compilers for Linux.
<br>
However, the problem is *NOT* seen with Studio 12.3 compilers on Solaris-11
<br>
and the identical configure options.
<br>
<p>-Paul
<br>
<p>BTW:
<br>
Can somebody tell me if I really need to specify &quot;-m32&quot; in *both* CFLAGS
<br>
and --with-wrapper-cflags (etc.)?
<br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Computer Languages &amp; Systems Software (CLaSS) Group
Computer Science Department               Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17073/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17074.php">Ralph Castain: "Re: [OMPI devel] printf format warnings on master"</a>
<li><strong>Previous message:</strong> <a href="17072.php">Ralph Castain: "Re: [OMPI devel] nearly-irrepoducable failure of master on Mac OS X 10.8"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17076.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Odd master build failure with Studio 12.4 on Linux w/	-m32"</a>
<li><strong>Reply:</strong> <a href="17076.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Odd master build failure with Studio 12.4 on Linux w/	-m32"</a>
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
