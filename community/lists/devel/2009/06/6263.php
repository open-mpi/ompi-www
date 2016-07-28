<?
$subject_val = "Re: [OMPI devel] Intel C (icc) 11.0.083 compile problem";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 17 16:29:53 2009" -->
<!-- isoreceived="20090617202953" -->
<!-- sent="Wed, 17 Jun 2009 16:29:43 -0400" -->
<!-- isosent="20090617202943" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Intel C (icc) 11.0.083 compile problem" -->
<!-- id="AE091642-4B80-47AF-A5D0-AF5944E3582C_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4A3944FA.20708_at_marine.rutgers.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Intel C (icc) 11.0.083 compile problem<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-17 16:29:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6264.php">Paul H. Hargrove: "Re: [OMPI devel] Intel C (icc) 11.0.083 compile problem"</a>
<li><strong>Previous message:</strong> <a href="6262.php">David Robertson: "[OMPI devel] Intel C (icc) 11.0.083 compile problem"</a>
<li><strong>In reply to:</strong> <a href="6262.php">David Robertson: "[OMPI devel] Intel C (icc) 11.0.083 compile problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6264.php">Paul H. Hargrove: "Re: [OMPI devel] Intel C (icc) 11.0.083 compile problem"</a>
<li><strong>Reply:</strong> <a href="6264.php">Paul H. Hargrove: "Re: [OMPI devel] Intel C (icc) 11.0.083 compile problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; I am trying to build Open MPI 1.3.2 with ifort 11.0.074 and icc/icpc
</span><br>
<span class="quotelev1">&gt; 11.0.083 (the Intel compilers) on a quad-core AMD Opteron workstation
</span><br>
<span class="quotelev1">&gt; running CentOS 4.4. I have no problems on this same machine if I use
</span><br>
<span class="quotelev1">&gt; ifort with gcc/g++ instead of icc/icpc. Configure seems to work ok  
</span><br>
<span class="quotelev1">&gt; even
</span><br>
<span class="quotelev1">&gt; though icc and icpc are detected as GNU compilers.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; CC=icc CXX=icpc FC=ifort F77=ifort ./configure --disable-shared
</span><br>
<span class="quotelev1">&gt; --enable-static --prefix=/opt/intelsoft/openmpi/openmpi-1.3.2
</span><br>
<p>Greetings Dave.  I tried this configuration earlier this morning and  
<br>
had no problem.  :-(
<br>
<p>(also, I'm not sure what happened, but somehow your attachments came  
<br>
through as uncompressed and inline, meaning everyone on the list got a  
<br>
3MB+ email)
<br>
<p><span class="quotelev1">&gt; However, when I run 'make' it has trouble in the opal/asm directory:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; libtool: compile:  icc -DHAVE_CONFIG_H -I. -I../../opal/include
</span><br>
<span class="quotelev1">&gt; -I../../orte/include -I../../ompi/include
</span><br>
<span class="quotelev1">&gt; -I../../opal/mca/paffinity/linux/plpa/src/libplpa -I../.. -O3 -DNDEBUG
</span><br>
<span class="quotelev1">&gt; -finline-functions -fno-strict-aliasing -restrict -MT atomic-asm.lo - 
</span><br>
<span class="quotelev1">&gt; MD
</span><br>
<span class="quotelev1">&gt; -MP -MF .deps/atomic-asm.Tpo -c atomic-asm.S -o atomic-asm.o
</span><br>
<span class="quotelev1">&gt; Unknown flag -x
</span><br>
<span class="quotelev1">&gt; Unknown flag -a
</span><br>
<span class="quotelev1">&gt; Unknown flag -s
</span><br>
<span class="quotelev1">&gt; Unknown flag -s
</span><br>
<span class="quotelev1">&gt; Unknown flag -e
</span><br>
<span class="quotelev1">&gt; Unknown flag -m
</span><br>
<span class="quotelev1">&gt; Unknown flag -b
</span><br>
<span class="quotelev1">&gt; Unknown flag -l
</span><br>
<span class="quotelev1">&gt; Unknown flag -e
</span><br>
<span class="quotelev1">&gt; Unknown flag -r
</span><br>
<span class="quotelev1">&gt; Unknown flag --
</span><br>
<span class="quotelev1">&gt; Unknown flag -w
</span><br>
<span class="quotelev1">&gt; Unknown flag -i
</span><br>
<span class="quotelev1">&gt; Unknown flag -t
</span><br>
<span class="quotelev1">&gt; Unknown flag -h
</span><br>
<span class="quotelev1">&gt; Unknown flag --
</span><br>
<span class="quotelev1">&gt; Unknown flag -c
</span><br>
<span class="quotelev1">&gt; Unknown flag -p
</span><br>
<span class="quotelev1">&gt; Unknown flag -p
</span><br>
<span class="quotelev1">&gt; Unknown flag -F
</span><br>
<p>Hmm.  I find it odd that that -xassembler... flag does not appear in  
<br>
OMPI's output -- it leads me to believe that it's somehow being  
<br>
inserted under the covers by icc (or something else?).  When I built  
<br>
with icc 11.0 v083 this morning, here's the relevant parts from my  
<br>
&quot;make&quot; output:
<br>
<p>libtool: compile:  icc -DHAVE_CONFIG_H -I. -I../../opal/include - 
<br>
I../../orte/include -I../../ompi/include -I../../opal/mca/paffinity/ 
<br>
linux/plpa/src/libplpa -I../.. -O3 -DNDEBUG -finline-functions -fno- 
<br>
strict-aliasing -restrict -pthread -fvisibility=hidden -MT asm.lo -MD - 
<br>
MP -MF .deps/asm.Tpo -c asm.c -o asm.o
<br>
rm -f atomic-asm.S
<br>
ln -s &quot;../../opal/asm/generated/atomic-amd64-linux.s&quot; atomic-asm.S
<br>
depbase=`echo atomic-asm.lo | sed 's|[^/]*$|.deps/&amp;|;s|\.lo$||'`;\
<br>
/bin/sh ../../libtool   --mode=compile icc -DHAVE_CONFIG_H -I. -I../../ 
<br>
opal/include -I../../orte/include -I../../ompi/include -I../../opal/ 
<br>
mca/paffinity/linux/plpa/src/libplpa   -I../..    -O3 -DNDEBUG - 
<br>
finline-functions -fno-strict-aliasing -restrict -MT atomic-asm.lo -MD  
<br>
-MP -MF $depbase.Tpo -c -o atomic-asm.lo atomic-asm.S &amp;&amp;\
<br>
mv -f $depbase.Tpo $depbase.Plo
<br>
libtool: compile:  icc -DHAVE_CONFIG_H -I. -I../../opal/include - 
<br>
I../../orte/include -I../../ompi/include -I../../opal/mca/paffinity/ 
<br>
linux/plpa/src/libplpa -I../.. -O3 -DNDEBUG -finline-functions -fno- 
<br>
strict-aliasing -restrict -MT atomic-asm.lo -MD -MP -MF .deps/atomic- 
<br>
asm.Tpo -c atomic-asm.S -o atomic-asm.o
<br>
/bin/sh ../../libtool --tag=CC   --mode=link icc  -O3 -DNDEBUG - 
<br>
finline-functions -fno-strict-aliasing -restrict -pthread - 
<br>
fvisibility=hidden  -export-dynamic   -o libasm.la  asm.lo atomic- 
<br>
asm.lo  -lnsl -lutil
<br>
libtool: link: ar cru .libs/libasm.a  asm.o atomic-asm.o
<br>
libtool: link: ranlib .libs/libasm.a
<br>
libtool: link: ( cd &quot;.libs&quot; &amp;&amp; rm -f &quot;libasm.la&quot; &amp;&amp; ln -s &quot;../ 
<br>
libasm.la&quot; &quot;libasm.la&quot; )
<br>
<p><span class="quotelev1">&gt; I can't find any hint of the reported &quot;Unknown flags&quot;. What's more is
</span><br>
<span class="quotelev1">&gt; the opal/asm/generated/atomic-amd64-linux.s file is now empty (file  
</span><br>
<span class="quotelev1">&gt; size
</span><br>
<span class="quotelev1">&gt; is zero) thus breaking subsequent builds (i.e. with gcc). In order to
</span><br>
<span class="quotelev1">&gt; get the file back I have to re-extract from the source tarball. If I
</span><br>
<span class="quotelev1">&gt; execute 'make' again (no 'make clean') the compilation will complete
</span><br>
<span class="quotelev1">&gt; successfully but will make an empty libasm.a:
</span><br>
<p>Erm -- that's weird.  So when you extract the tarballs, atomic-amd64- 
<br>
linux.s is non-empty (as it should be), but after a failed build, it's  
<br>
file length 0?
<br>
<p>Notice that during the build process, we sym link atomic-amd64-linux.s  
<br>
to atomic-asm.S (I see that happening in your build output as well).   
<br>
So if the compiler is barfing when compiling atomic-asm.S, perhaps  
<br>
it's also wiping out the file...?  That would be darn weird, though...
<br>
<p><span class="quotelev1">&gt; However, even after I get Open MPI to compile, 'make check' will give
</span><br>
<span class="quotelev1">&gt; the following results:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; libtool: link: icc -DOMPI_DISABLE_INLINE_ASM -O3 -DNDEBUG
</span><br>
<span class="quotelev1">&gt; -finline-functions -fno-strict-aliasing -restrict -pthread
</span><br>
<span class="quotelev1">&gt; -fvisibility=hidden -o atomic_barrier_noinline
</span><br>
<span class="quotelev1">&gt; atomic_barrier_noinline-atomic_barrier_noinline.o -Wl,--export-dynamic
</span><br>
<span class="quotelev1">&gt; ../../opal/asm/.libs/libasm.a -lnsl -lutil -pthread
</span><br>
<span class="quotelev1">&gt; ipo: warning #11010: file format not recognized for
</span><br>
<span class="quotelev1">&gt; ../../opal/asm/.libs/libasm.a, possible linker script
</span><br>
<span class="quotelev1">&gt; atomic_barrier_noinline-atomic_barrier_noinline.o(.text+0x29): In
</span><br>
<span class="quotelev1">&gt; function `main':
</span><br>
<span class="quotelev1">&gt; : undefined reference to `opal_atomic_mb'
</span><br>
<p>Yes, this is not surprising if the .s file is empty -- it makes an  
<br>
empty .o file, and therefore those symbols just aren't defined.
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6264.php">Paul H. Hargrove: "Re: [OMPI devel] Intel C (icc) 11.0.083 compile problem"</a>
<li><strong>Previous message:</strong> <a href="6262.php">David Robertson: "[OMPI devel] Intel C (icc) 11.0.083 compile problem"</a>
<li><strong>In reply to:</strong> <a href="6262.php">David Robertson: "[OMPI devel] Intel C (icc) 11.0.083 compile problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6264.php">Paul H. Hargrove: "Re: [OMPI devel] Intel C (icc) 11.0.083 compile problem"</a>
<li><strong>Reply:</strong> <a href="6264.php">Paul H. Hargrove: "Re: [OMPI devel] Intel C (icc) 11.0.083 compile problem"</a>
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
