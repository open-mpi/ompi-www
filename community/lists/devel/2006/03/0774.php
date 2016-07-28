<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Mar 21 08:35:23 2006" -->
<!-- isoreceived="20060321133523" -->
<!-- sent="Tue, 21 Mar 2006 14:35:16 +0100" -->
<!-- isosent="20060321133516" -->
<!-- name="Ralf Wildenhues" -->
<!-- email="Ralf.Wildenhues_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] PG 5.2 build problem with v1.0.2a10" -->
<!-- id="20060321133516.GD20766_at_iam.uni-bonn.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="647DF8B5-0545-49E6-BE5C-03A4FF9F56C2_at_open-mpi.org" -->
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
<strong>Date:</strong> 2006-03-21 08:35:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0775.php">Jeff Squyres \(jsquyres\): "Re: [OMPI devel] PG 5.2 build problem with v1.0.2a10"</a>
<li><strong>Previous message:</strong> <a href="0773.php">Josh Hursey: "Re: [OMPI devel] PG 5.2 build problem with v1.0.2a10"</a>
<li><strong>In reply to:</strong> <a href="0773.php">Josh Hursey: "Re: [OMPI devel] PG 5.2 build problem with v1.0.2a10"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0775.php">Jeff Squyres \(jsquyres\): "Re: [OMPI devel] PG 5.2 build problem with v1.0.2a10"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
* Josh Hursey wrote on Tue, Mar 21, 2006 at 02:20:54PM CET:
<br>
<span class="quotelev3">&gt; &gt;&gt;On Mar 20, 2006, at 12:13 PM, Ralf Wildenhues wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;Do you still have the complete build log?  The place where  
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;libopal is
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;created is interesting, as well as './libtool --config'.
</span><br>
<p><span class="quotelev1">&gt; The files should be attached.
</span><br>
<p>Ahh.  That explains it:
<br>
<p>| /bin/sh ../libtool --tag=CC --mode=link pgcc  -O -DNDEBUG    -export-dynamic   -o libopal.la -rpath /san/homedirs/jjhursey/local/odin//ompi/release/lib   libltdl/libltdlc.la asm/libasm.la class/libclass.la event/libevent.la mca/base/libmca_base.la memoryhooks/libopalmemory.la runtime/libruntime.la threads/libthreads.la util/libopalutil.la mca/maffinity/base/libmca_maffinity_base.la  mca/memory/base/libmca_memory_base.la mca/memory/malloc_hooks/libmca_memory_malloc_hooks.la  mca/paffinity/base/libmca_paffinity_base.la  mca/timer/base/libmca_timer_base.la mca/timer/linux/libmca_timer_linux.la  -lm  -lutil -lnsl -lpthread
<br>
| mkdir .libs
<br>
| pgcc -shared  -fpic -DPIC  -Wl,--whole-archive,libltdl/.libs/libltdlc.a,asm/.libs/libasm.a,class/.libs/libclass.a,event/.libs/libevent.a,mca/base/.libs/libmca_base.a,memoryhooks/.libs/libopalmemory.a,runtime/.libs/libruntime.a,threads/.libs/libthreads.a,util/.libs/libopalutil.a,mca/maffinity/base/.libs/libmca_maffinity_base.a,mca/memory/base/.libs/libmca_memory_base.a,mca/memory/malloc_hooks/.libs/libmca_memory_malloc_hooks.a,mca/paffinity/base/.libs/libmca_paffinity_base.a,mca/timer/base/.libs/libmca_timer_base.a,mca/timer/linux/.libs/libmca_timer_linux.a -Wl,--no-whole-archive  -ldl -lm -lutil -lnsl -lpthread -lc  -Wl,-soname -Wl,libopal.so.0 -o .libs/libopal.so.0.0.0
<br>
| pgcc-Warning-No files to process
<br>
<p>PGI/5.2 does not like it when it's not given any object file, and it's
<br>
supposed to invoke the linker.  It does not see the libraries, as they
<br>
are all hidden as arguments to be passed to the linker.  This has been
<br>
fixed since in PGI/6.0 and 6.1.
<br>
<p>Nevertheless, there are probably more compilers which can fail in this
<br>
way.  I added a test to this extent to the CVS version of Libtool a
<br>
while ago, in order to gain more knowledge about this.
<br>
<p>The gist is: this could *probably* be worked around inside libtool.
<br>
But it would not solve all issues, when looking at the bigger picture
<br>
of Libtool+Automake interaction.
<br>
<p>Why is that?  Well, you write
<br>
&nbsp;&nbsp;libfoo_la_SOURCES =
<br>
&nbsp;&nbsp;libfoo_la_LIBADD = libbar1.la libbar2.la ...
<br>
<p>but then Automake does not really know which language (compiler) to use
<br>
for linking libfoo.  And this second issue is not so trivial to solve
<br>
inside the autotools.
<br>
<p>But an easy workaround for the moment is to either add a dummy source
<br>
file to libfoo_la_SOURCES, or change one of the convenience archives
<br>
libbar* added into just the objects being added.
<br>
<p>I did not notice this issue here, because the OpenMPI trunk does exactly
<br>
the latter (for example through opal/class/Makefile.am, which is
<br>
included in opal/Makefile.am), and I do not follow branches much.
<br>
<p>Does that help?
<br>
<p>Cheers,
<br>
Ralf
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0775.php">Jeff Squyres \(jsquyres\): "Re: [OMPI devel] PG 5.2 build problem with v1.0.2a10"</a>
<li><strong>Previous message:</strong> <a href="0773.php">Josh Hursey: "Re: [OMPI devel] PG 5.2 build problem with v1.0.2a10"</a>
<li><strong>In reply to:</strong> <a href="0773.php">Josh Hursey: "Re: [OMPI devel] PG 5.2 build problem with v1.0.2a10"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0775.php">Jeff Squyres \(jsquyres\): "Re: [OMPI devel] PG 5.2 build problem with v1.0.2a10"</a>
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
