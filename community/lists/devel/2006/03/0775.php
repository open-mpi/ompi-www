<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Mar 21 21:28:28 2006" -->
<!-- isoreceived="20060322022828" -->
<!-- sent="Tue, 21 Mar 2006 21:28:25 -0500" -->
<!-- isosent="20060322022825" -->
<!-- name="Jeff Squyres \(jsquyres\)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] PG 5.2 build problem with v1.0.2a10" -->
<!-- id="C835B9C9CB0F1C4E9DA48913C9E8F8AF5221A7_at_xmb-rtp-215.amer.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI devel] PG 5.2 build problem with v1.0.2a10" -->
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
<strong>From:</strong> Jeff Squyres \(jsquyres\) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-03-21 21:28:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0776.php">Brian Barrett: "[OMPI devel] svn web outage tomorrow"</a>
<li><strong>Previous message:</strong> <a href="0774.php">Ralf Wildenhues: "Re: [OMPI devel] PG 5.2 build problem with v1.0.2a10"</a>
<li><strong>Maybe in reply to:</strong> <a href="0768.php">Josh Hursey: "[OMPI devel] PG 5.2 build problem with v1.0.2a10"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I vote we don't worry about this for 1.0.x.
<br>
<p>Does anyone care about PGI 5.2 in 1.0.x?  If so, is it a quick/easy fix
<br>
to the Makefile.am to do what Ralf proposes (and we apparently already
<br>
do something similar on the trunk)?
<br>
&nbsp;
<br>
<p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: devel-bounces_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; [mailto:devel-bounces_at_[hidden]] On Behalf Of Ralf Wildenhues
</span><br>
<span class="quotelev1">&gt; Sent: Tuesday, March 21, 2006 5:35 AM
</span><br>
<span class="quotelev1">&gt; To: devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI devel] PG 5.2 build problem with v1.0.2a10
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * Josh Hursey wrote on Tue, Mar 21, 2006 at 02:20:54PM CET:
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;On Mar 20, 2006, at 12:13 PM, Ralf Wildenhues wrote:
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;Do you still have the complete build log?  The place where  
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;libopal is
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;created is interesting, as well as './libtool --config'.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; The files should be attached.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ahh.  That explains it:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; | /bin/sh ../libtool --tag=CC --mode=link pgcc  -O -DNDEBUG   
</span><br>
<span class="quotelev1">&gt;  -export-dynamic   -o libopal.la -rpath 
</span><br>
<span class="quotelev1">&gt; /san/homedirs/jjhursey/local/odin//ompi/release/lib   
</span><br>
<span class="quotelev1">&gt; libltdl/libltdlc.la asm/libasm.la class/libclass.la 
</span><br>
<span class="quotelev1">&gt; event/libevent.la mca/base/libmca_base.la 
</span><br>
<span class="quotelev1">&gt; memoryhooks/libopalmemory.la runtime/libruntime.la 
</span><br>
<span class="quotelev1">&gt; threads/libthreads.la util/libopalutil.la 
</span><br>
<span class="quotelev1">&gt; mca/maffinity/base/libmca_maffinity_base.la  
</span><br>
<span class="quotelev1">&gt; mca/memory/base/libmca_memory_base.la 
</span><br>
<span class="quotelev1">&gt; mca/memory/malloc_hooks/libmca_memory_malloc_hooks.la  
</span><br>
<span class="quotelev1">&gt; mca/paffinity/base/libmca_paffinity_base.la  
</span><br>
<span class="quotelev1">&gt; mca/timer/base/libmca_timer_base.la 
</span><br>
<span class="quotelev1">&gt; mca/timer/linux/libmca_timer_linux.la  -lm  -lutil -lnsl -lpthread
</span><br>
<span class="quotelev1">&gt; | mkdir .libs
</span><br>
<span class="quotelev1">&gt; | pgcc -shared  -fpic -DPIC  
</span><br>
<span class="quotelev1">&gt; -Wl,--whole-archive,libltdl/.libs/libltdlc.a,asm/.libs/libasm.
</span><br>
a,class/.libs/libclass.a,event/.libs/libevent.a,mca/base/.libs/libmca_ba
<br>
se.a,memoryhooks/.libs/libopalmemory.a,ru&gt;
<br>
ntime/.libs/libruntime.a,threads/.libs/libthreads.a,util/.libs
<br>
<span class="quotelev1">&gt; /libopalutil.a,mca/maffinity/base/.libs/libmca_maffinity_base.
</span><br>
<span class="quotelev1">&gt; a,mca/memory/base/.libs/libmca_memory_base.a,mca/memory/malloc
</span><br>
<span class="quotelev1">&gt; _hooks/.libs/libmca_memory_malloc_hooks.a,mca/paffinity/base/.
</span><br>
<span class="quotelev1">&gt; libs/libmca_paffinity_base.a,mca/timer/base/.libs/libmca_timer
</span><br>
<span class="quotelev1">&gt; _base.a,mca/timer/linux/.libs/libmca_timer_linux.a 
</span><br>
<span class="quotelev1">&gt; -Wl,--no-whole-archive  -ldl -lm -lutil -lnsl -lpthread -lc  
</span><br>
<span class="quotelev1">&gt; -Wl,-soname -Wl,libopal.so.0 -o .libs/libopal.so.0.0.0
</span><br>
<span class="quotelev1">&gt; | pgcc-Warning-No files to process
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; PGI/5.2 does not like it when it's not given any object file, and it's
</span><br>
<span class="quotelev1">&gt; supposed to invoke the linker.  It does not see the libraries, as they
</span><br>
<span class="quotelev1">&gt; are all hidden as arguments to be passed to the linker.  This has been
</span><br>
<span class="quotelev1">&gt; fixed since in PGI/6.0 and 6.1.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Nevertheless, there are probably more compilers which can fail in this
</span><br>
<span class="quotelev1">&gt; way.  I added a test to this extent to the CVS version of Libtool a
</span><br>
<span class="quotelev1">&gt; while ago, in order to gain more knowledge about this.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The gist is: this could *probably* be worked around inside libtool.
</span><br>
<span class="quotelev1">&gt; But it would not solve all issues, when looking at the bigger picture
</span><br>
<span class="quotelev1">&gt; of Libtool+Automake interaction.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Why is that?  Well, you write
</span><br>
<span class="quotelev1">&gt;   libfoo_la_SOURCES =
</span><br>
<span class="quotelev1">&gt;   libfoo_la_LIBADD = libbar1.la libbar2.la ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; but then Automake does not really know which language 
</span><br>
<span class="quotelev1">&gt; (compiler) to use
</span><br>
<span class="quotelev1">&gt; for linking libfoo.  And this second issue is not so trivial to solve
</span><br>
<span class="quotelev1">&gt; inside the autotools.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But an easy workaround for the moment is to either add a dummy source
</span><br>
<span class="quotelev1">&gt; file to libfoo_la_SOURCES, or change one of the convenience archives
</span><br>
<span class="quotelev1">&gt; libbar* added into just the objects being added.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I did not notice this issue here, because the OpenMPI trunk 
</span><br>
<span class="quotelev1">&gt; does exactly
</span><br>
<span class="quotelev1">&gt; the latter (for example through opal/class/Makefile.am, which is
</span><br>
<span class="quotelev1">&gt; included in opal/Makefile.am), and I do not follow branches much.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Does that help?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; Ralf
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0776.php">Brian Barrett: "[OMPI devel] svn web outage tomorrow"</a>
<li><strong>Previous message:</strong> <a href="0774.php">Ralf Wildenhues: "Re: [OMPI devel] PG 5.2 build problem with v1.0.2a10"</a>
<li><strong>Maybe in reply to:</strong> <a href="0768.php">Josh Hursey: "[OMPI devel] PG 5.2 build problem with v1.0.2a10"</a>
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
