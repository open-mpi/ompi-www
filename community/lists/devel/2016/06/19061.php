<?
$subject_val = "Re: [OMPI devel] Seldom deadlock in mpirun";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun  2 20:31:19 2016" -->
<!-- isoreceived="20160603003119" -->
<!-- sent="Fri, 3 Jun 2016 09:31:17 +0900" -->
<!-- isosent="20160603003117" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Seldom deadlock in mpirun" -->
<!-- id="CAMJJpkUvR=Bp78-CsC9n-aLcjL4L1CbV9vyXoW1ej+FosbhCOg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="0F34405A-C2CC-48E0-B6CE-BD4DF697B5CA_at_me.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Seldom deadlock in mpirun<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-02 20:31:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19062.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Seldom deadlock in mpirun"</a>
<li><strong>Previous message:</strong> <a href="19060.php">Nathan Hjelm: "Re: [OMPI devel] Seldom deadlock in mpirun"</a>
<li><strong>In reply to:</strong> <a href="19060.php">Nathan Hjelm: "Re: [OMPI devel] Seldom deadlock in mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19062.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Seldom deadlock in mpirun"</a>
<li><strong>Reply:</strong> <a href="19062.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Seldom deadlock in mpirun"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The timeout never triggers and when I attach to the mpirun process I see an
<br>
extremely strange stack:
<br>
<p>(lldb) bt
<br>
* thread #1: tid = 0x272b40e, 0x00007fff93306de6
<br>
libsystem_kernel.dylib`__psynch_mutexwait + 10, queue =
<br>
'com.apple.main-thread', stop reason = signal SIGSTOP
<br>
&nbsp;&nbsp;* frame #0: 0x00007fff93306de6 libsystem_kernel.dylib`__psynch_mutexwait
<br>
+ 10
<br>
&nbsp;&nbsp;&nbsp;&nbsp;frame #1: 0x00007fff9a000e4a
<br>
libsystem_pthread.dylib`_pthread_mutex_lock_wait + 89
<br>
&nbsp;&nbsp;&nbsp;&nbsp;frame #2: 0x00007fff99ffe5f5
<br>
libsystem_pthread.dylib`_pthread_mutex_lock_slow + 300
<br>
&nbsp;&nbsp;&nbsp;&nbsp;frame #3: 0x00007fff8c2a00f8 libdyld.dylib`dyldGlobalLockAcquire() + 16
<br>
&nbsp;&nbsp;&nbsp;&nbsp;frame #4: 0x00007fff6ca8e177
<br>
dyld`ImageLoaderMachOCompressed::doBindFastLazySymbol(unsigned int,
<br>
ImageLoader::LinkContext const&amp;, void (*)(), void (*)()) + 55
<br>
&nbsp;&nbsp;&nbsp;&nbsp;frame #5: 0x00007fff6ca78063
<br>
dyld`dyld::fastBindLazySymbol(ImageLoader**, unsigned long) + 90
<br>
&nbsp;&nbsp;&nbsp;&nbsp;frame #6: 0x00007fff8c2a0262 libdyld.dylib`dyld_stub_binder + 282
<br>
&nbsp;&nbsp;&nbsp;&nbsp;frame #7: 0x000000010a5b29b0 libopen-pal.0.dylib`obj_order_type + 3776
<br>
<p>This seems to indicate that we are trying to access a function from a dylib
<br>
that has been or is in the process of being unloaded.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><p>On Thu, Jun 2, 2016 at 8:34 AM, Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; The osc hang is fixed by a PR to fix bugs in start in cm and ob1. See
</span><br>
<span class="quotelev1">&gt; #1729.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Nathan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jun 2, 2016, at 5:17 AM, Gilles Gouaillardet &lt;
</span><br>
<span class="quotelev1">&gt; gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; fwiw,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; the onsided/c_fence_lock test from the ibm test suite hangs
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (mpirun -np 2 ./c_fence_lock)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; i ran a git bisect and it incriminates commit
</span><br>
<span class="quotelev1">&gt; b90c83840f472de3219b87cd7e1a364eec5c5a29
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; commit b90c83840f472de3219b87cd7e1a364eec5c5a29
</span><br>
<span class="quotelev1">&gt; Author: bosilca &lt;bosilca_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date:   Tue May 24 18:20:51 2016 -0500
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Refactor the request completion (#1422)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     * Remodel the request.
</span><br>
<span class="quotelev1">&gt;     Added the wait sync primitive and integrate it into the PML and MTL
</span><br>
<span class="quotelev1">&gt;     infrastructure. The multi-threaded requests are now significantly
</span><br>
<span class="quotelev1">&gt;     less heavy and less noisy (only the threads associated with completed
</span><br>
<span class="quotelev1">&gt;     requests are signaled).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     * Fix the condition to release the request.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I also noted a warning is emitted when running only one task
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./c_fence_lock
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; but I did not git bisect, so that might not be related
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thursday, June 2, 2016, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Yes, please! I&#226;&#128;&#153;d like to know what mpirun thinks is happening - if you
</span><br>
<span class="quotelev2">&gt;&gt; like, just set the &#226;&#128;&#148;timeout N &#226;&#128;&#148;report-state-on-timeout flags and tell me
</span><br>
<span class="quotelev2">&gt;&gt; what comes out
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jun 1, 2016, at 7:57 PM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I don't think it matters. I was running the IBM collective and pt2pt
</span><br>
<span class="quotelev2">&gt;&gt; tests, but each time it deadlocked was in a different test. If you are
</span><br>
<span class="quotelev2">&gt;&gt; interested in some particular values, I would be happy to attach a debugger
</span><br>
<span class="quotelev2">&gt;&gt; next time it happens.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   George.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Wed, Jun 1, 2016 at 10:47 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; What kind of apps are they? Or does it matter what you are running?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; On Jun 1, 2016, at 7:37 PM, George Bosilca &lt;bosilca_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; I have a seldomly occurring deadlock on a OS X laptop if I use more
</span><br>
<span class="quotelev3">&gt;&gt;&gt; than 2 processes). It is coming up once every 200 runs or so.
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Here is what I could gather from my experiments: All the MPI processes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; seem to have correctly completed (I get all the expected output and the MPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt; processes are in a waiting state), but somehow the mpirun does not detect
</span><br>
<span class="quotelev3">&gt;&gt;&gt; their completion. As a result, mpirun never returns.
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;   George.
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Searchable archives:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/06/19054.php">http://www.open-mpi.org/community/lists/devel/2016/06/19054.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/06/19054.php">http://www.open-mpi.org/community/lists/devel/2016/06/19054.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/06/19055.php">http://www.open-mpi.org/community/lists/devel/2016/06/19055.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/06/19059.php">http://www.open-mpi.org/community/lists/devel/2016/06/19059.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/06/19060.php">http://www.open-mpi.org/community/lists/devel/2016/06/19060.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-19061/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19062.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Seldom deadlock in mpirun"</a>
<li><strong>Previous message:</strong> <a href="19060.php">Nathan Hjelm: "Re: [OMPI devel] Seldom deadlock in mpirun"</a>
<li><strong>In reply to:</strong> <a href="19060.php">Nathan Hjelm: "Re: [OMPI devel] Seldom deadlock in mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19062.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Seldom deadlock in mpirun"</a>
<li><strong>Reply:</strong> <a href="19062.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Seldom deadlock in mpirun"</a>
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
