<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Mar 21 05:25:06 2006" -->
<!-- isoreceived="20060321102506" -->
<!-- sent="Tue, 21 Mar 2006 11:24:59 +0100" -->
<!-- isosent="20060321102459" -->
<!-- name="Ralf Wildenhues" -->
<!-- email="Ralf.Wildenhues_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] PG 5.2 build problem with v1.0.2a10'" -->
<!-- id="20060321102459.GA20766_at_iam.uni-bonn.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="9F8280CB-EC61-432B-BAB7-0E60C9E060D5_at_open-mpi.org" -->
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
<strong>From:</strong> Ralf Wildenhues (<em>Ralf.Wildenhues_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-03-21 05:24:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0772.php">Ralf Wildenhues: "Re: [OMPI devel] PG 5.2 build problem with v1.0.2a10"</a>
<li><strong>Previous message:</strong> <a href="0770.php">Josh Hursey: "Re: [OMPI devel] PG 5.2 build problem with v1.0.2a10"</a>
<li><strong>In reply to:</strong> <a href="0770.php">Josh Hursey: "Re: [OMPI devel] PG 5.2 build problem with v1.0.2a10"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0772.php">Ralf Wildenhues: "Re: [OMPI devel] PG 5.2 build problem with v1.0.2a10"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Josh,
<br>
<p>* Josh Hursey wrote on Mon, Mar 20, 2006 at 06:48:55PM CET:
<br>
<span class="quotelev1">&gt; On Mar 20, 2006, at 12:13 PM, Ralf Wildenhues wrote:
</span><br>
<span class="quotelev2">&gt; &gt;* Josh Hursey wrote on Mon, Mar 20, 2006 at 06:05:29PM CET:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;I recently ran into a build problem using the Portland 5.2 compilers
</span><br>
<span class="quotelev3">&gt; &gt;&gt;on Odin (x86_64). It looks like the soft link is broken in the build
</span><br>
<span class="quotelev3">&gt; &gt;&gt;system.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;It is linked to libopal.so.0.0.0 instead of libopal.so.0
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;Do you still have the complete build log?  The place where libopal is
</span><br>
<span class="quotelev2">&gt; &gt;created is interesting, as well as './libtool --config'.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sorry I forgot to include that. Should be attached now.
</span><br>
<p>Hmm.  Could you go into $top_builddir/opal and do
<br>
&nbsp;&nbsp;../libtool --mode=clean rm -f libopal.la
<br>
&nbsp;&nbsp;make 2&gt;&amp;1 | tee makelog
<br>
<p>and send makelog?  After that, the .libs subdirectory should look more
<br>
or less like this (the *.la* may vary a bit):
<br>
&nbsp;&nbsp;libopal.la -&gt; ../libopal.la
<br>
&nbsp;&nbsp;libopal.lai
<br>
&nbsp;&nbsp;libopal.so -&gt; libopal.so.0.0.0
<br>
&nbsp;&nbsp;libopal.so.0 -&gt; libopal.so.0.0.0
<br>
&nbsp;&nbsp;libopal.so.0.0.0
<br>
<p>Otherwise, I cannot detect much that looks suspicious.  This is weird,
<br>
but it looks unrelated:
<br>
<p>| configure:130244: checking whether a statically linked program can dlopen itself
<br>
| configure:130318: pgcc -o conftest -O -DNDEBUG    -D_REENTRANT -DHAVE_DLFCN_H   -Wl,--export-dynamic -Bstatic conftest.c -ldl -lm  -lutil -lnsl -lpthread &gt;&amp;5
<br>
| /tmp/pgccbaaaapoxac.o(.text+0x28): In function `main':
<br>
| : warning: Using 'dlopen' in statically linked applications requires at runtime the shared libraries from the glibc version used for linking
<br>
| configure:130321: $? = 0
<br>
| /u/jjhursey/local/odin/ompi/devel/lib/: cannot read file data: Is a directory
<br>
| configure:130339: result: no
<br>
<p>Thanks,
<br>
Ralf
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0772.php">Ralf Wildenhues: "Re: [OMPI devel] PG 5.2 build problem with v1.0.2a10"</a>
<li><strong>Previous message:</strong> <a href="0770.php">Josh Hursey: "Re: [OMPI devel] PG 5.2 build problem with v1.0.2a10"</a>
<li><strong>In reply to:</strong> <a href="0770.php">Josh Hursey: "Re: [OMPI devel] PG 5.2 build problem with v1.0.2a10"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0772.php">Ralf Wildenhues: "Re: [OMPI devel] PG 5.2 build problem with v1.0.2a10"</a>
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
