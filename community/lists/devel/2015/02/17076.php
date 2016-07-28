<?
$subject_val = "Re: [OMPI devel] Odd master build failure with Studio 12.4 on Linux w/	-m32";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 27 13:14:10 2015" -->
<!-- isoreceived="20150227181410" -->
<!-- sent="Fri, 27 Feb 2015 18:14:09 +0000" -->
<!-- isosent="20150227181409" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Odd master build failure with Studio 12.4 on Linux w/	-m32" -->
<!-- id="4C49AC70-6335-4EA2-9358-71ECF38E87EB_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAAvDA17R=NXSrNjNS+YzHivHWw97k-BJKbHQUfZWQoCq15=3BA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Odd master build failure with Studio 12.4 on Linux w/	-m32<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-27 13:14:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17077.php">Larry Baker: "Re: [OMPI devel] Odd master build failure with Studio 12.4 on Linux w/	-m32"</a>
<li><strong>Previous message:</strong> <a href="17075.php">Joshua Ladd: "Re: [OMPI devel] Tues Mar 3rd telecon"</a>
<li><strong>In reply to:</strong> <a href="17073.php">Paul Hargrove: "[OMPI devel] Odd master build failure with Studio 12.4 on Linux w/ -m32"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17077.php">Larry Baker: "Re: [OMPI devel] Odd master build failure with Studio 12.4 on Linux w/	-m32"</a>
<li><strong>Reply:</strong> <a href="17077.php">Larry Baker: "Re: [OMPI devel] Odd master build failure with Studio 12.4 on Linux w/	-m32"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'll let George / Nathan comment on the ebx symbol.
<br>
<p>Yes, you do need to specify -m32 in CFLAGS and --with-wrapper*, because you may well want to build OMPI with one set of flags and build MPI applications with a different set of flags.  Hence, the wrappers don't contain all the CFLAGS used to build OMPI, for example.
<br>
<p><p><span class="quotelev1">&gt; On Feb 26, 2015, at 10:25 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am using Oracle's Studio 12.4 compilers for Linux/x86-64 to build the current master tarball.
</span><br>
<span class="quotelev1">&gt; However, I am passing &quot;-m32&quot; to generate x86 (ILP32 ABI) executables.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The full configure mess is:
</span><br>
<span class="quotelev1">&gt; --prefix=[...] --enable-debug \
</span><br>
<span class="quotelev1">&gt; CC=cc  CFLAGS=&quot;-m32&quot;   --with-wrapper-cflags=&quot;-m32&quot; \
</span><br>
<span class="quotelev1">&gt; CXX=CC CXXFLAGS=&quot;-m32&quot; --with-wrapper-cxxflags=&quot;-m32&quot; \
</span><br>
<span class="quotelev1">&gt; FC=f90 FCFLAGS=&quot;-m32&quot;  --with-wrapper-fcflags=&quot;-m32&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The failing output from &quot;make V=1&quot; is
</span><br>
<span class="quotelev1">&gt; /bin/sh ../../../libtool  --tag=CC   --mode=link cc  -m32 -g -mt  -export-dynamic    -o opal_wrapper opal_wrapper.o ../../../opal/libopen-pal.la -lrt -lm -lutil   -lrt -lm -lutil
</span><br>
<span class="quotelev1">&gt; libtool: link: cc -m32 -g -mt -o .libs/opal_wrapper opal_wrapper.o -Wl,--export-dynamic  ../../../opal/.libs/libopen-pal.so -ldl -lrt -lm -lutil -mt -Wl,-rpath -Wl,/scratch/phargrov/OMPI/openmpi-master-linux-x86_64-ss12u4-m32/INST/lib
</span><br>
<span class="quotelev1">&gt; ../../../opal/.libs/libopen-pal.so: undefined reference to `ebx'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Now clearly &quot;ebx&quot; should be referring to the CPU register, not an external symbol, right?
</span><br>
<span class="quotelev1">&gt; HOWEVER, in x86 PIC code (e.g. a .so file) one CANNOT generally use 'ebx' in inline asm because it is used as the GOT pointer.
</span><br>
<span class="quotelev1">&gt; So, their might be more than one problem here.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The same is seen with the older Studio 12.3 compilers for Linux.
</span><br>
<span class="quotelev1">&gt; However, the problem is *NOT* seen with Studio 12.3 compilers on Solaris-11 and the identical configure options. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; BTW:
</span><br>
<span class="quotelev1">&gt; Can somebody tell me if I really need to specify &quot;-m32&quot; in *both* CFLAGS and --with-wrapper-cflags (etc.)?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev1">&gt; Computer Science Department               Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/02/17073.php">http://www.open-mpi.org/community/lists/devel/2015/02/17073.php</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17077.php">Larry Baker: "Re: [OMPI devel] Odd master build failure with Studio 12.4 on Linux w/	-m32"</a>
<li><strong>Previous message:</strong> <a href="17075.php">Joshua Ladd: "Re: [OMPI devel] Tues Mar 3rd telecon"</a>
<li><strong>In reply to:</strong> <a href="17073.php">Paul Hargrove: "[OMPI devel] Odd master build failure with Studio 12.4 on Linux w/ -m32"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17077.php">Larry Baker: "Re: [OMPI devel] Odd master build failure with Studio 12.4 on Linux w/	-m32"</a>
<li><strong>Reply:</strong> <a href="17077.php">Larry Baker: "Re: [OMPI devel] Odd master build failure with Studio 12.4 on Linux w/	-m32"</a>
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
