<?
$subject_val = "Re: [OMPI users] [EXTERNAL] Re: mpicc link shouldn't add -ldl and -lhwloc";
include("../../include/msg-header.inc");
?>
<!-- received="Sun May 27 13:52:11 2012" -->
<!-- isoreceived="20120527175211" -->
<!-- sent="Sun, 27 May 2012 12:52:06 -0500" -->
<!-- isosent="20120527175206" -->
<!-- name="Jed Brown" -->
<!-- email="jed_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [EXTERNAL] Re: mpicc link shouldn't add -ldl and -lhwloc" -->
<!-- id="CAM9tzSnzGC2MXKdSeHOUoBLvv87sGEovoONxGVOgSsV8_y8RRw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CBE24189.CB94%bwbarre_at_sandia.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] [EXTERNAL] Re: mpicc link shouldn't add -ldl and -lhwloc<br>
<strong>From:</strong> Jed Brown (<em>jed_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-27 13:52:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19387.php">François Guertin: "[OMPI users] The option &quot;--mca hwloc_base_mem_alloc_policy local_only&quot; doesn't bind memory to numa node"</a>
<li><strong>Previous message:</strong> <a href="19385.php">alain dimier: "[OMPI users] i7 and mpi"</a>
<li><strong>In reply to:</strong> <a href="19340.php">Barrett, Brian W: "Re: [OMPI users] [EXTERNAL] Re: mpicc link shouldn't add -ldl and -lhwloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19390.php">Jeff Squyres: "Re: [OMPI users] [EXTERNAL] Re: mpicc link shouldn't add -ldl and -lhwloc"</a>
<li><strong>Reply:</strong> <a href="19390.php">Jeff Squyres: "Re: [OMPI users] [EXTERNAL] Re: mpicc link shouldn't add -ldl and -lhwloc"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, May 23, 2012 at 8:29 AM, Barrett, Brian W &lt;bwbarre_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev2">&gt; &gt;I should add the caveat that they are need when linking statically, but
</span><br>
<span class="quotelev2">&gt; &gt;not when using shared libraries.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And therein lies the problem.  We have a number of users who build Open
</span><br>
<span class="quotelev1">&gt; MPI statically and even some who build both static and shared libraries in
</span><br>
<span class="quotelev1">&gt; the same build.  We've never been able to figure out a reasonable way to
</span><br>
<span class="quotelev1">&gt; guess if we need to add -lhwloc or -ldl, so we add them.  It's better to
</span><br>
<span class="quotelev1">&gt; list them and have some redundant dependencies (since you have to have the
</span><br>
<span class="quotelev1">&gt; library anyways) than to not list them and have odd link errors.
</span><br>
<p><p>So pkg-config has the --static option for exactly this reason. Let's look
<br>
at Cairo as an example.
<br>
<p>$ cat /usr/lib/pkgconfig/cairo.pc
<br>
prefix=/usr
<br>
exec_prefix=${prefix}
<br>
libdir=${exec_prefix}/lib
<br>
includedir=${prefix}/include
<br>
<p>Name: cairo
<br>
Description: Multi-platform 2D graphics library
<br>
Version: 1.12.2
<br>
<p>Requires.private:   gobject-2.0 glib-2.0       pixman-1 &gt;= 0.22.0
<br>
&nbsp;fontconfig &gt;= 2.2.95 freetype2 &gt;= 9.7.3   libpng xcb-shm xcb &gt;= 1.6
<br>
xcb-render &gt;= 1.6 xrender &gt;= 0.6 x11
<br>
Libs: -L${libdir} -lcairo
<br>
Libs.private:            -lz -lz
<br>
Cflags: -I${includedir}/cairo
<br>
<p>$ pkg-config cairo --libs
<br>
-lcairo
<br>
$ pkg-config cairo --libs --static
<br>
-pthread -lcairo -lgobject-2.0 -lffi -lpixman-1 -lfontconfig -lexpat
<br>
-lfreetype -lbz2 -lpng15 -lz -lm -lxcb-shm -lxcb-render -lXrender
<br>
-lglib-2.0 -lrt -lpcre -lX11 -lpthread -lxcb -lXau -lXdmcp
<br>
$ ldd /usr/lib/libcairo.so
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;linux-vdso.so.1 =&gt;  (0x00007fff741ff000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libpthread.so.0 =&gt; /lib/libpthread.so.0 (0x00007f135eac7000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libpixman-1.so.0 =&gt; /usr/lib/libpixman-1.so.0 (0x00007f135e83f000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libfontconfig.so.1 =&gt; /usr/lib/libfontconfig.so.1
<br>
(0x00007f135e608000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libfreetype.so.6 =&gt; /usr/lib/libfreetype.so.6 (0x00007f135e369000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libpng15.so.15 =&gt; /usr/lib/libpng15.so.15 (0x00007f135e13c000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libxcb-shm.so.0 =&gt; /usr/lib/libxcb-shm.so.0 (0x00007f135df39000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libxcb-render.so.0 =&gt; /usr/lib/libxcb-render.so.0
<br>
(0x00007f135dd30000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libxcb.so.1 =&gt; /usr/lib/libxcb.so.1 (0x00007f135db12000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libXrender.so.1 =&gt; /usr/lib/libXrender.so.1 (0x00007f135d906000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libX11.so.6 =&gt; /usr/lib/libX11.so.6 (0x00007f135d5cc000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libz.so.1 =&gt; /usr/lib/libz.so.1 (0x00007f135d3b6000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;librt.so.1 =&gt; /lib/librt.so.1 (0x00007f135d1ad000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libm.so.6 =&gt; /lib/libm.so.6 (0x00007f135ceb8000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libc.so.6 =&gt; /lib/libc.so.6 (0x00007f135cb17000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/lib/ld-linux-x86-64.so.2 (0x00007f135f012000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libbz2.so.1.0 =&gt; /usr/lib/libbz2.so.1.0 (0x00007f135c906000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libexpat.so.1 =&gt; /usr/lib/libexpat.so.1 (0x00007f135c6dc000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libXau.so.6 =&gt; /usr/lib/libXau.so.6 (0x00007f135c4d8000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libXdmcp.so.6 =&gt; /usr/lib/libXdmcp.so.6 (0x00007f135c2d1000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libdl.so.2 =&gt; /lib/libdl.so.2 (0x00007f135c0cd000)
<br>
<p>Now I'm not saying that Open MPI should commit to pkg-config instead of
<br>
wrapper compilers, but the concept of linking differently for static versus
<br>
shared libraries is something that should be observed.
<br>
<p>(Over-linking is an ongoing problem with HPC-oriented packages. We are
<br>
probably all guilty of it, but tools like pkg-config don't handle multiple
<br>
configurations well and I don't know of a similar system that manages both
<br>
static/shared and multi-configuration well.)
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19386/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19387.php">François Guertin: "[OMPI users] The option &quot;--mca hwloc_base_mem_alloc_policy local_only&quot; doesn't bind memory to numa node"</a>
<li><strong>Previous message:</strong> <a href="19385.php">alain dimier: "[OMPI users] i7 and mpi"</a>
<li><strong>In reply to:</strong> <a href="19340.php">Barrett, Brian W: "Re: [OMPI users] [EXTERNAL] Re: mpicc link shouldn't add -ldl and -lhwloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19390.php">Jeff Squyres: "Re: [OMPI users] [EXTERNAL] Re: mpicc link shouldn't add -ldl and -lhwloc"</a>
<li><strong>Reply:</strong> <a href="19390.php">Jeff Squyres: "Re: [OMPI users] [EXTERNAL] Re: mpicc link shouldn't add -ldl and -lhwloc"</a>
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
