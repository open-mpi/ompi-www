<?
$subject_val = "Re: [OMPI devel] Openmpi 1.6.5 is freezing under GNU/Linux ia64";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov  4 12:13:30 2013" -->
<!-- isoreceived="20131104171330" -->
<!-- sent="Mon, 04 Nov 2013 18:14:28 +0100" -->
<!-- isosent="20131104171428" -->
<!-- name="Sylvestre Ledru" -->
<!-- email="sylvestre_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Openmpi 1.6.5 is freezing under GNU/Linux ia64" -->
<!-- id="5277D5F4.2010002_at_debian.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC4F9170BD_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Openmpi 1.6.5 is freezing under GNU/Linux ia64<br>
<strong>From:</strong> Sylvestre Ledru (<em>sylvestre_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-04 12:14:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13183.php">Mike Dubman: "[OMPI devel] v1.7 is broken"</a>
<li><strong>Previous message:</strong> <a href="13181.php">Jeff Squyres (jsquyres): "[OMPI devel] US changing time this weekend"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/10/13040.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Openmpi 1.6.5 is freezing under GNU/Linux ia64"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13237.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Openmpi 1.6.5 is freezing under GNU/Linux ia64"</a>
<li><strong>Reply:</strong> <a href="13237.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Openmpi 1.6.5 is freezing under GNU/Linux ia64"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 02/10/2013 19:34, Jeff Squyres (jsquyres) wrote:
<br>
<span class="quotelev1">&gt; On Sep 30, 2013, at 11:05 AM, Sylvestre Ledru &lt;sylvestre_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Here are the options list:
</span><br>
<span class="quotelev2">&gt;&gt; configure: running /bin/bash './configure'  CFLAGS=&quot;-DNDEBUG -g -O2
</span><br>
<span class="quotelev2">&gt;&gt; -Wformat -Werror=format-security -finline-functions -fno-strict-aliasing
</span><br>
<span class="quotelev2">&gt;&gt; -pthread&quot; CPPFLAGS=&quot; -I/usr//include   -I/usr/include/infiniband
</span><br>
<span class="quotelev2">&gt;&gt; -I/usr/include/infiniband&quot; FFLAGS=&quot;-g -O2&quot; LDFLAGS=&quot;  -L/usr//lib&quot;
</span><br>
<span class="quotelev2">&gt;&gt; --enable-shared --disable-static  --prefix=/usr --with-mpi=open_mpi
</span><br>
<span class="quotelev2">&gt;&gt; --disable-aio --cache-file=/dev/null --srcdir=. --disable-option-checking
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hmm -- I'm confused here; it's not possible that you're getting an assertion failure with this configure line, for two reasons:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. The assert() in question will only be compiled in if you --enable-debug on the configure command line.
</span><br>
<span class="quotelev1">&gt; 2. You supplied -DNDEBUG in CFLAGS, which means you've disabled all assert()s
</span><br>
sorry, that is automatically set by the Debian build system.
<br>
<p><p><span class="quotelev1">&gt; Can you verify that this is the correct configure line that you used to generate that error?  Or is something else going on?
</span><br>
I faced some issues building with these options. I will have to come
<br>
back on this.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Do you have an eta for the 1.8 ? (if I remember correctly, 1.7 is a
</span><br>
<span class="quotelev2">&gt;&gt; development release).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1.7 is a &quot;feature&quot; release.  OMPI 1.odd.x series are stable and tested; they're just not as time-tested out in the real world as OMPI 1.even.x series.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We're anticipating 1.8 will be out in early 2014.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
FYI, I tried with OpenMPI 1.7.3 under ia64 and the build fails with:
<br>
libtool: link: gcc -std=gnu99 -DNDEBUG -g -O2 -Wformat
<br>
-Werror=format-security -finline-functions -fno-strict-aliasing -pthread
<br>
-o .libs/orte-clean orte-clean.o  -L/usr//lib
<br>
../../../orte/.libs/libopen-rte.so -lrt -lnsl -lutil -lm -lhwloc
<br>
/usr/lib/ia64-linux-gnu/libltdl.so -pthread -Wl,-rpath
<br>
-Wl,/usr/lib/openmpi/lib
<br>
/usr/bin/ld: orte-clean.o: undefined reference to symbol
<br>
'opal_show_help_string'
<br>
/home/sylvestre/openmpi-1.7.3/opal/.libs/libopen-pal.so.6: error adding
<br>
symbols: DSO missing from command line
<br>
<p>Sounds familar ?
<br>
<p>Thanks
<br>
Sylvestre
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13183.php">Mike Dubman: "[OMPI devel] v1.7 is broken"</a>
<li><strong>Previous message:</strong> <a href="13181.php">Jeff Squyres (jsquyres): "[OMPI devel] US changing time this weekend"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/10/13040.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Openmpi 1.6.5 is freezing under GNU/Linux ia64"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13237.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Openmpi 1.6.5 is freezing under GNU/Linux ia64"</a>
<li><strong>Reply:</strong> <a href="13237.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Openmpi 1.6.5 is freezing under GNU/Linux ia64"</a>
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
