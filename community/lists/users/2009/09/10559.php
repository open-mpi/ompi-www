<?
$subject_val = "Re: [OMPI users] build problems - undefined	referenceto	`lt_libltdlc_LTX_preloaded_symbols and libtool install";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep  2 09:42:00 2009" -->
<!-- isoreceived="20090902134200" -->
<!-- sent="Wed, 02 Sep 2009 09:45:14 -0400" -->
<!-- isosent="20090902134514" -->
<!-- name="Michael Hines" -->
<!-- email="michael.hines_at_[hidden]" -->
<!-- subject="Re: [OMPI users] build problems - undefined	referenceto	`lt_libltdlc_LTX_preloaded_symbols and libtool install" -->
<!-- id="1251899114.10102.493.camel_at_hines490" -->
<!-- inreplyto="07E057C6-ACA5-4C46-80E3-FA45E119E575_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] build problems - undefined	referenceto	`lt_libltdlc_LTX_preloaded_symbols and libtool install<br>
<strong>From:</strong> Michael Hines (<em>michael.hines_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-02 09:45:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10560.php">Greg Fischer: "Re: [OMPI users] OMPI error in MPI_Cart_create (in code that works withMPICH2)"</a>
<li><strong>Previous message:</strong> <a href="10558.php">Michael Hines: "Re: [OMPI users] build problems - undefined	referenceto	`lt_libltdlc_LTX_preloaded_symbols and libtool install"</a>
<li><strong>In reply to:</strong> <a href="10551.php">Jeff Squyres: "Re: [OMPI users] build problems - undefined referenceto	`lt_libltdlc_LTX_preloaded_symbols and libtool install"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, 2009-09-02 at 10:51 +0300, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Aug 27, 2009, at 8:34 PM, Michael Hines wrote:
</span><br>
<p><span class="quotelev2">&gt; &gt; libtool: link: gcc -O3 -DNDEBUG -finline-functions -fno-strict- 
</span><br>
<span class="quotelev2">&gt; &gt; aliasing
</span><br>
<span class="quotelev2">&gt; &gt; -pthread -fvisibility=hidden -o opal_wrapper
</span><br>
<span class="quotelev2">&gt; &gt; opal_wrapper.o  ../../../opal/.libs/libopen-pal.a -ldl -lnsl -lutil - 
</span><br>
<span class="quotelev2">&gt; &gt; lm
</span><br>
<span class="quotelev2">&gt; &gt; -pthread
</span><br>
<span class="quotelev2">&gt; &gt; ../../../opal/.libs/libopen-pal.a(libltdlc_la-ltdl.o): In function
</span><br>
<span class="quotelev2">&gt; &gt; `lt_dlinit':
</span><br>
<span class="quotelev2">&gt; &gt; ltdl.c:(.text+0x10d3): undefined reference to
</span><br>
<span class="quotelev2">&gt; &gt; `lt_libltdlc_LTX_preloaded_symbols'
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hmm.  This feels like a mismatch of libtool somehow...  (ltdl is a  
</span><br>
<span class="quotelev1">&gt; part of the larger Libtool package).
</span><br>
<p>I should mention that when I
<br>
[hines_at_hines490 openmpi-1.3.3]$ for i in `find . -name \*.o -print` ; do
<br>
echo $i ; nm $i |grep preloaded ; done
<br>
<p>the only files that have preloaded in them are
<br>
<p>./opal/libltdl/libltdlc_la-preopen.o
<br>
0000000000000008 b default_preloaded_symbols
<br>
0000000000000000 b preloaded_symlists
<br>
./opal/libltdl/libltdlc_la-ltdl.o
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;U lt_libltdlc_LTX_preloaded_symbols
<br>
and I can't find anywhere that lt_libltdlc_LTX_preloaded_symbols
<br>
is defined
<br>
<p>-Michael
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10560.php">Greg Fischer: "Re: [OMPI users] OMPI error in MPI_Cart_create (in code that works withMPICH2)"</a>
<li><strong>Previous message:</strong> <a href="10558.php">Michael Hines: "Re: [OMPI users] build problems - undefined	referenceto	`lt_libltdlc_LTX_preloaded_symbols and libtool install"</a>
<li><strong>In reply to:</strong> <a href="10551.php">Jeff Squyres: "Re: [OMPI users] build problems - undefined referenceto	`lt_libltdlc_LTX_preloaded_symbols and libtool install"</a>
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
