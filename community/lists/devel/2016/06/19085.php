<?
$subject_val = "Re: [OMPI devel] Seldom deadlock in mpirun";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun  6 11:06:29 2016" -->
<!-- isoreceived="20160606150629" -->
<!-- sent="Tue, 7 Jun 2016 00:06:26 +0900" -->
<!-- isosent="20160606150626" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Seldom deadlock in mpirun" -->
<!-- id="CAMJJpkUb5M1-EY6wfgcYrub9DZk8PcDBvtQvFyHdN-vgRvUckg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAMJJpkUEAdmvgXcCS-v76RDYXnjiBLEtqqSQ1B7NP5W1BAGBfQ_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2016-06-06 11:06:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19086.php">Ralph Castain: "Re: [OMPI devel] Seldom deadlock in mpirun"</a>
<li><strong>Previous message:</strong> <a href="19084.php">George Bosilca: "Re: [OMPI devel] Seldom deadlock in mpirun"</a>
<li><strong>In reply to:</strong> <a href="19084.php">George Bosilca: "Re: [OMPI devel] Seldom deadlock in mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19086.php">Ralph Castain: "Re: [OMPI devel] Seldom deadlock in mpirun"</a>
<li><strong>Reply:</strong> <a href="19086.php">Ralph Castain: "Re: [OMPI devel] Seldom deadlock in mpirun"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph,
<br>
<p>Things got better, in the sense that before I was getting about 1 deadlock
<br>
for each 300 runs, now the number if more 1 out of every 500.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><p>On Tue, Jun 7, 2016 at 12:04 AM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Not there yet. I got similar deadlocks, but the stack not looks slightly
</span><br>
<span class="quotelev1">&gt; different. I only have 1 single thread doing something useful (aka being in
</span><br>
<span class="quotelev1">&gt; listen_thread_fn), every other thread is having a similar stack:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   * frame #0: 0x00007fff93306de6 libsystem_kernel.dylib`__psynch_mutexwait
</span><br>
<span class="quotelev1">&gt; + 10
</span><br>
<span class="quotelev1">&gt;     frame #1: 0x00007fff9a000e4a
</span><br>
<span class="quotelev1">&gt; libsystem_pthread.dylib`_pthread_mutex_lock_wait + 89
</span><br>
<span class="quotelev1">&gt;     frame #2: 0x00007fff99ffe5f5
</span><br>
<span class="quotelev1">&gt; libsystem_pthread.dylib`_pthread_mutex_lock_slow + 300
</span><br>
<span class="quotelev1">&gt;     frame #3: 0x00007fff8c2a00f8 libdyld.dylib`dyldGlobalLockAcquire() + 16
</span><br>
<span class="quotelev1">&gt;     frame #4: 0x00007fff6bbc3177
</span><br>
<span class="quotelev1">&gt; dyld`ImageLoaderMachOCompressed::doBindFastLazySymbol(unsigned int,
</span><br>
<span class="quotelev1">&gt; ImageLoader::LinkContext const&amp;, void (*)(), void (*)()) + 55
</span><br>
<span class="quotelev1">&gt;     frame #5: 0x00007fff6bbad063
</span><br>
<span class="quotelev1">&gt; dyld`dyld::fastBindLazySymbol(ImageLoader**, unsigned long) + 90
</span><br>
<span class="quotelev1">&gt;     frame #6: 0x00007fff8c2a0262 libdyld.dylib`dyld_stub_binder + 282
</span><br>
<span class="quotelev1">&gt;     frame #7: 0x00000001019d39b0 libopen-pal.0.dylib`obj_order_type + 3776
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   George.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, Jun 6, 2016 at 1:41 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I think I have this fixed here:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="https://github.com/open-mpi/ompi/pull/1756">https://github.com/open-mpi/ompi/pull/1756</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; George - can you please try it on your system?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jun 5, 2016, at 4:18 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Yeah, I can reproduce on my box. What is happening is that we aren&#226;&#128;&#153;t
</span><br>
<span class="quotelev2">&gt;&gt; properly protected during finalize, and so we tear down some component that
</span><br>
<span class="quotelev2">&gt;&gt; is registered for a callback, and then the callback occurs. So we just need
</span><br>
<span class="quotelev2">&gt;&gt; to ensure that we finalize in the right order
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jun 5, 2016, at 3:51 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ok, good.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; FWIW: I tried all Friday afternoon to reproduce on my OS X laptop (i.e.,
</span><br>
<span class="quotelev2">&gt;&gt; I did something like George's shell script loop), and just now I ran
</span><br>
<span class="quotelev2">&gt;&gt; George's exact loop, but I haven't been able to reproduce.  In this case,
</span><br>
<span class="quotelev2">&gt;&gt; I'm falling on the wrong side of whatever race condition is happening...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jun 4, 2016, at 7:57 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I may have an idea of what&#226;&#128;&#153;s going on here - I just need to finish
</span><br>
<span class="quotelev2">&gt;&gt; something else first and then I&#226;&#128;&#153;ll take a look.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jun 4, 2016, at 4:20 PM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jun 5, 2016, at 07:53 , Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jun 4, 2016, at 1:11 PM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Sat, Jun 4, 2016 at 11:05 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; He can try adding &quot;-mca state_base_verbose 5&#226;&#128;&#157;, but if we are failing to
</span><br>
<span class="quotelev2">&gt;&gt; catch sigchld, I&#226;&#128;&#153;m not sure what debugging info is going to help resolve
</span><br>
<span class="quotelev2">&gt;&gt; that problem. These aren&#226;&#128;&#153;t even fast-running apps, so there was plenty of
</span><br>
<span class="quotelev2">&gt;&gt; time to register for the signal prior to termination.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I vaguely recollect that we have occasionally seen this on Mac before and
</span><br>
<span class="quotelev2">&gt;&gt; it had something to do with oddness in sigchld handling&#226;&#128;&#166;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Assuming sigchld has some oddness on OSX. Why is then mpirun deadlocking
</span><br>
<span class="quotelev2">&gt;&gt; instead of quitting which will then allow the OS to clean all children?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I don&#226;&#128;&#153;t think mpirun is actually &#226;&#128;&#156;deadlocked&#226;&#128;&#157; - I think it may just be
</span><br>
<span class="quotelev2">&gt;&gt; waiting for sigchld to tell it that the local processes have terminated.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; However, that wouldn't explain why you see what looks like libraries
</span><br>
<span class="quotelev2">&gt;&gt; being unloaded. That implies mpirun is actually finalizing, but failing to
</span><br>
<span class="quotelev2">&gt;&gt; fully exit - which would indeed be more of a deadlock.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So the question is: are you truly seeing us missing sigchld (as was
</span><br>
<span class="quotelev2">&gt;&gt; suggested earlier in this thread),
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In theory the processes remains in zombie state until the parent calls
</span><br>
<span class="quotelev2">&gt;&gt; waitpid on them, at which moment they are supposed to disappear. Based on
</span><br>
<span class="quotelev2">&gt;&gt; this, as the processes are still in zombie state, I assumed that mpirun was
</span><br>
<span class="quotelev2">&gt;&gt; not calling waitpid. One could also assume we are again hit by the fork
</span><br>
<span class="quotelev2">&gt;&gt; race condition we had a while back, but as all local processes are in
</span><br>
<span class="quotelev2">&gt;&gt; zombie mode, this is hardly believable.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; or did mpirun correctly see all the child processes terminate and is
</span><br>
<span class="quotelev2">&gt;&gt; actually hanging while trying to exit (as was also suggested earlier)?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; One way or another the stack of the main thread looks busted. While the
</span><br>
<span class="quotelev2">&gt;&gt; discussion about this was going on I was able to replicate the bug with
</span><br>
<span class="quotelev2">&gt;&gt; only ORTE involved. Simply running
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; for i in `seq 1 1 1000`; do echo &#226;&#128;&#156;$i&quot;; mpirun -np 4 hostname; done
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &#226;&#128;&#152;deadlock&#226;&#128;&#153; or whatever name we want to call this reliably before hitting
</span><br>
<span class="quotelev2">&gt;&gt; the 300 iteration. Unfortunately adding the verbose option alter the
</span><br>
<span class="quotelev2">&gt;&gt; behavior enough that the issue does not reproduce.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; George.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Adding the state verbosity should tell us which of those two is true,
</span><br>
<span class="quotelev2">&gt;&gt; assuming it doesn&#226;&#128;&#153;t affect the timing so much that everything works :-/
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; George.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jun 4, 2016, at 7:01 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Meh.  Ok.  Should George run with some verbose level to get more info?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jun 4, 2016, at 6:43 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Neither of those threads have anything to do with catching the sigchld -
</span><br>
<span class="quotelev2">&gt;&gt; threads 4-5 are listening for OOB and PMIx connection requests. It looks
</span><br>
<span class="quotelev2">&gt;&gt; more like mpirun thought it had picked everything up and has begun shutting
</span><br>
<span class="quotelev2">&gt;&gt; down, but I can&#226;&#128;&#153;t really tell for certain.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jun 4, 2016, at 6:29 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jun 3, 2016, at 11:07 PM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; After finalize. As I said in my original email I se all the output the
</span><br>
<span class="quotelev2">&gt;&gt; application is generating, and all processes (which are local as this
</span><br>
<span class="quotelev2">&gt;&gt; happens on my laptop) are in zombie mode (Z+). This basically means whoever
</span><br>
<span class="quotelev2">&gt;&gt; was supposed to get the SIGCHLD, didn't do it's job of cleaning them up.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ah -- so perhaps threads 1,2,3 are red herrings: the real problem here is
</span><br>
<span class="quotelev2">&gt;&gt; that the parent didn't catch the child exits (which presumably should have
</span><br>
<span class="quotelev2">&gt;&gt; been caught in threads 4 or 5).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ralph: is there any state from threads 4 or 5 that would be helpful to
</span><br>
<span class="quotelev2">&gt;&gt; examine to see if they somehow missed catching children exits?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/06/19070.php">http://www.open-mpi.org/community/lists/devel/2016/06/19070.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/06/19071.php">http://www.open-mpi.org/community/lists/devel/2016/06/19071.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/06/19072.php">http://www.open-mpi.org/community/lists/devel/2016/06/19072.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/06/19073.php">http://www.open-mpi.org/community/lists/devel/2016/06/19073.php</a>
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
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/06/19074.php">http://www.open-mpi.org/community/lists/devel/2016/06/19074.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/06/19075.php">http://www.open-mpi.org/community/lists/devel/2016/06/19075.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/06/19076.php">http://www.open-mpi.org/community/lists/devel/2016/06/19076.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/06/19077.php">http://www.open-mpi.org/community/lists/devel/2016/06/19077.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/06/19078.php">http://www.open-mpi.org/community/lists/devel/2016/06/19078.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/06/19080.php">http://www.open-mpi.org/community/lists/devel/2016/06/19080.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-19085/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19086.php">Ralph Castain: "Re: [OMPI devel] Seldom deadlock in mpirun"</a>
<li><strong>Previous message:</strong> <a href="19084.php">George Bosilca: "Re: [OMPI devel] Seldom deadlock in mpirun"</a>
<li><strong>In reply to:</strong> <a href="19084.php">George Bosilca: "Re: [OMPI devel] Seldom deadlock in mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19086.php">Ralph Castain: "Re: [OMPI devel] Seldom deadlock in mpirun"</a>
<li><strong>Reply:</strong> <a href="19086.php">Ralph Castain: "Re: [OMPI devel] Seldom deadlock in mpirun"</a>
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
