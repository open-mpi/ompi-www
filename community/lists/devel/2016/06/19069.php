<?
$subject_val = "Re: [OMPI devel] Seldom deadlock in mpirun";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jun  4 02:07:07 2016" -->
<!-- isoreceived="20160604060707" -->
<!-- sent="Sat, 4 Jun 2016 15:07:03 +0900" -->
<!-- isosent="20160604060703" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Seldom deadlock in mpirun" -->
<!-- id="CAMJJpkVqZxVCn0au1uTFN6jzmG1nT2oT0uK5KhjyC8HutBEMLw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="826CBB41-62BD-47C9-BE0F-094506A05056_at_cisco.com" -->
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
<strong>Date:</strong> 2016-06-04 02:07:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19070.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Seldom deadlock in mpirun"</a>
<li><strong>Previous message:</strong> <a href="19068.php">Ralph Castain: "[OMPI devel] 1.10.3rc4 ready for test"</a>
<li><strong>In reply to:</strong> <a href="19066.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Seldom deadlock in mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19070.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Seldom deadlock in mpirun"</a>
<li><strong>Reply:</strong> <a href="19070.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Seldom deadlock in mpirun"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, Jun 3, 2016 at 11:10 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]
<br>
<span class="quotelev1">&gt; wrote:
</span><br>
<p><span class="quotelev1">&gt; That's disappointing / puzzling.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Threads 4 and 5 look like they're in the PMIX / ORTE progress threads,
</span><br>
<span class="quotelev1">&gt; respectively.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But I don'tt see any obvious signs of what thread 1, 2, 3 are for.  Huh.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When is this hang happening -- during init?  Middle of the program?
</span><br>
<span class="quotelev1">&gt; During finalize?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>After finalize. As I said in my original email I se all the output the
<br>
application is generating, and all processes (which are local as this
<br>
happens on my laptop) are in zombie mode (Z+). This basically means whoever
<br>
was supposed to get the SIGCHLD, didn't do it's job of cleaning them up.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Jun 2, 2016, at 6:00 PM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Sure, but they mostly look similar.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   George.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; (lldb) thread list
</span><br>
<span class="quotelev2">&gt; &gt; Process 76811 stopped
</span><br>
<span class="quotelev2">&gt; &gt;   thread #1: tid = 0x272b40e, 0x00007fff93306de6
</span><br>
<span class="quotelev1">&gt; libsystem_kernel.dylib`__psynch_mutexwait + 10, queue =
</span><br>
<span class="quotelev1">&gt; 'com.apple.main-thread', stop reason = signal SIGSTOP
</span><br>
<span class="quotelev2">&gt; &gt;   thread #2: tid = 0x272b40f, 0x00007fff93306de6
</span><br>
<span class="quotelev1">&gt; libsystem_kernel.dylib`__psynch_mutexwait + 10
</span><br>
<span class="quotelev2">&gt; &gt;   thread #3: tid = 0x272b410, 0x00007fff93306de6
</span><br>
<span class="quotelev1">&gt; libsystem_kernel.dylib`__psynch_mutexwait + 10
</span><br>
<span class="quotelev2">&gt; &gt;   thread #4: tid = 0x272b411, 0x00007fff9330707a
</span><br>
<span class="quotelev1">&gt; libsystem_kernel.dylib`__select + 10
</span><br>
<span class="quotelev2">&gt; &gt; * thread #5: tid = 0x272b412, 0x00007fff9330707a
</span><br>
<span class="quotelev1">&gt; libsystem_kernel.dylib`__select + 10
</span><br>
<span class="quotelev2">&gt; &gt; (lldb)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; (lldb) thread select 1
</span><br>
<span class="quotelev2">&gt; &gt; * thread #1: tid = 0x272b40e, 0x00007fff93306de6
</span><br>
<span class="quotelev1">&gt; libsystem_kernel.dylib`__psynch_mutexwait + 10, queue =
</span><br>
<span class="quotelev1">&gt; 'com.apple.main-thread', stop reason = signal SIGSTOP
</span><br>
<span class="quotelev2">&gt; &gt;     frame #0: 0x00007fff93306de6
</span><br>
<span class="quotelev1">&gt; libsystem_kernel.dylib`__psynch_mutexwait + 10
</span><br>
<span class="quotelev2">&gt; &gt; libsystem_kernel.dylib`__psynch_mutexwait:
</span><br>
<span class="quotelev2">&gt; &gt; -&gt;  0x7fff93306de6 &lt;+10&gt;: jae    0x7fff93306df0            ; &lt;+20&gt;
</span><br>
<span class="quotelev2">&gt; &gt;     0x7fff93306de8 &lt;+12&gt;: movq   %rax, %rdi
</span><br>
<span class="quotelev2">&gt; &gt;     0x7fff93306deb &lt;+15&gt;: jmp    0x7fff933017cd            ;
</span><br>
<span class="quotelev1">&gt; cerror_nocancel
</span><br>
<span class="quotelev2">&gt; &gt;     0x7fff93306df0 &lt;+20&gt;: retq
</span><br>
<span class="quotelev2">&gt; &gt; (lldb) bt
</span><br>
<span class="quotelev2">&gt; &gt; * thread #1: tid = 0x272b40e, 0x00007fff93306de6
</span><br>
<span class="quotelev1">&gt; libsystem_kernel.dylib`__psynch_mutexwait + 10, queue =
</span><br>
<span class="quotelev1">&gt; 'com.apple.main-thread', stop reason = signal SIGSTOP
</span><br>
<span class="quotelev2">&gt; &gt;   * frame #0: 0x00007fff93306de6
</span><br>
<span class="quotelev1">&gt; libsystem_kernel.dylib`__psynch_mutexwait + 10
</span><br>
<span class="quotelev2">&gt; &gt;     frame #1: 0x00007fff9a000e4a
</span><br>
<span class="quotelev1">&gt; libsystem_pthread.dylib`_pthread_mutex_lock_wait + 89
</span><br>
<span class="quotelev2">&gt; &gt;     frame #2: 0x00007fff99ffe5f5
</span><br>
<span class="quotelev1">&gt; libsystem_pthread.dylib`_pthread_mutex_lock_slow + 300
</span><br>
<span class="quotelev2">&gt; &gt;     frame #3: 0x00007fff8c2a00f8 libdyld.dylib`dyldGlobalLockAcquire() +
</span><br>
<span class="quotelev1">&gt; 16
</span><br>
<span class="quotelev2">&gt; &gt;     frame #4: 0x00007fff6ca8e177
</span><br>
<span class="quotelev1">&gt; dyld`ImageLoaderMachOCompressed::doBindFastLazySymbol(unsigned int,
</span><br>
<span class="quotelev1">&gt; ImageLoader::LinkContext const&amp;, void (*)(), void (*)()) + 55
</span><br>
<span class="quotelev2">&gt; &gt;     frame #5: 0x00007fff6ca78063
</span><br>
<span class="quotelev1">&gt; dyld`dyld::fastBindLazySymbol(ImageLoader**, unsigned long) + 90
</span><br>
<span class="quotelev2">&gt; &gt;     frame #6: 0x00007fff8c2a0262 libdyld.dylib`dyld_stub_binder + 282
</span><br>
<span class="quotelev2">&gt; &gt;     frame #7: 0x000000010a5b29b0 libopen-pal.0.dylib`obj_order_type +
</span><br>
<span class="quotelev1">&gt; 3776
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; (lldb) thread select 2
</span><br>
<span class="quotelev2">&gt; &gt; * thread #2: tid = 0x272b40f, 0x00007fff93306de6
</span><br>
<span class="quotelev1">&gt; libsystem_kernel.dylib`__psynch_mutexwait + 10
</span><br>
<span class="quotelev2">&gt; &gt;     frame #0: 0x00007fff93306de6
</span><br>
<span class="quotelev1">&gt; libsystem_kernel.dylib`__psynch_mutexwait + 10
</span><br>
<span class="quotelev2">&gt; &gt; libsystem_kernel.dylib`__psynch_mutexwait:
</span><br>
<span class="quotelev2">&gt; &gt; -&gt;  0x7fff93306de6 &lt;+10&gt;: jae    0x7fff93306df0            ; &lt;+20&gt;
</span><br>
<span class="quotelev2">&gt; &gt;     0x7fff93306de8 &lt;+12&gt;: movq   %rax, %rdi
</span><br>
<span class="quotelev2">&gt; &gt;     0x7fff93306deb &lt;+15&gt;: jmp    0x7fff933017cd            ;
</span><br>
<span class="quotelev1">&gt; cerror_nocancel
</span><br>
<span class="quotelev2">&gt; &gt;     0x7fff93306df0 &lt;+20&gt;: retq
</span><br>
<span class="quotelev2">&gt; &gt; (lldb) bt
</span><br>
<span class="quotelev2">&gt; &gt; * thread #2: tid = 0x272b40f, 0x00007fff93306de6
</span><br>
<span class="quotelev1">&gt; libsystem_kernel.dylib`__psynch_mutexwait + 10
</span><br>
<span class="quotelev2">&gt; &gt;   * frame #0: 0x00007fff93306de6
</span><br>
<span class="quotelev1">&gt; libsystem_kernel.dylib`__psynch_mutexwait + 10
</span><br>
<span class="quotelev2">&gt; &gt;     frame #1: 0x00007fff9a000e4a
</span><br>
<span class="quotelev1">&gt; libsystem_pthread.dylib`_pthread_mutex_lock_wait + 89
</span><br>
<span class="quotelev2">&gt; &gt;     frame #2: 0x00007fff99ffe5f5
</span><br>
<span class="quotelev1">&gt; libsystem_pthread.dylib`_pthread_mutex_lock_slow + 300
</span><br>
<span class="quotelev2">&gt; &gt;     frame #3: 0x00007fff8c2a00f8 libdyld.dylib`dyldGlobalLockAcquire() +
</span><br>
<span class="quotelev1">&gt; 16
</span><br>
<span class="quotelev2">&gt; &gt;     frame #4: 0x00007fff6ca8e177
</span><br>
<span class="quotelev1">&gt; dyld`ImageLoaderMachOCompressed::doBindFastLazySymbol(unsigned int,
</span><br>
<span class="quotelev1">&gt; ImageLoader::LinkContext const&amp;, void (*)(), void (*)()) + 55
</span><br>
<span class="quotelev2">&gt; &gt;     frame #5: 0x00007fff6ca78063
</span><br>
<span class="quotelev1">&gt; dyld`dyld::fastBindLazySymbol(ImageLoader**, unsigned long) + 90
</span><br>
<span class="quotelev2">&gt; &gt;     frame #6: 0x00007fff8c2a0262 libdyld.dylib`dyld_stub_binder + 282
</span><br>
<span class="quotelev2">&gt; &gt;     frame #7: 0x000000010a5b29b0 libopen-pal.0.dylib`obj_order_type +
</span><br>
<span class="quotelev1">&gt; 3776
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; (lldb) thread select 3
</span><br>
<span class="quotelev2">&gt; &gt; * thread #3: tid = 0x272b410, 0x00007fff93306de6
</span><br>
<span class="quotelev1">&gt; libsystem_kernel.dylib`__psynch_mutexwait + 10
</span><br>
<span class="quotelev2">&gt; &gt;     frame #0: 0x00007fff93306de6
</span><br>
<span class="quotelev1">&gt; libsystem_kernel.dylib`__psynch_mutexwait + 10
</span><br>
<span class="quotelev2">&gt; &gt; libsystem_kernel.dylib`__psynch_mutexwait:
</span><br>
<span class="quotelev2">&gt; &gt; -&gt;  0x7fff93306de6 &lt;+10&gt;: jae    0x7fff93306df0            ; &lt;+20&gt;
</span><br>
<span class="quotelev2">&gt; &gt;     0x7fff93306de8 &lt;+12&gt;: movq   %rax, %rdi
</span><br>
<span class="quotelev2">&gt; &gt;     0x7fff93306deb &lt;+15&gt;: jmp    0x7fff933017cd            ;
</span><br>
<span class="quotelev1">&gt; cerror_nocancel
</span><br>
<span class="quotelev2">&gt; &gt;     0x7fff93306df0 &lt;+20&gt;: retq
</span><br>
<span class="quotelev2">&gt; &gt; (lldb) bt
</span><br>
<span class="quotelev2">&gt; &gt; * thread #3: tid = 0x272b410, 0x00007fff93306de6
</span><br>
<span class="quotelev1">&gt; libsystem_kernel.dylib`__psynch_mutexwait + 10
</span><br>
<span class="quotelev2">&gt; &gt;   * frame #0: 0x00007fff93306de6
</span><br>
<span class="quotelev1">&gt; libsystem_kernel.dylib`__psynch_mutexwait + 10
</span><br>
<span class="quotelev2">&gt; &gt;     frame #1: 0x00007fff9a000e4a
</span><br>
<span class="quotelev1">&gt; libsystem_pthread.dylib`_pthread_mutex_lock_wait + 89
</span><br>
<span class="quotelev2">&gt; &gt;     frame #2: 0x00007fff99ffe5f5
</span><br>
<span class="quotelev1">&gt; libsystem_pthread.dylib`_pthread_mutex_lock_slow + 300
</span><br>
<span class="quotelev2">&gt; &gt;     frame #3: 0x00007fff8c2a00f8 libdyld.dylib`dyldGlobalLockAcquire() +
</span><br>
<span class="quotelev1">&gt; 16
</span><br>
<span class="quotelev2">&gt; &gt;     frame #4: 0x00007fff6ca8e177
</span><br>
<span class="quotelev1">&gt; dyld`ImageLoaderMachOCompressed::doBindFastLazySymbol(unsigned int,
</span><br>
<span class="quotelev1">&gt; ImageLoader::LinkContext const&amp;, void (*)(), void (*)()) + 55
</span><br>
<span class="quotelev2">&gt; &gt;     frame #5: 0x00007fff6ca78063
</span><br>
<span class="quotelev1">&gt; dyld`dyld::fastBindLazySymbol(ImageLoader**, unsigned long) + 90
</span><br>
<span class="quotelev2">&gt; &gt;     frame #6: 0x00007fff8c2a0262 libdyld.dylib`dyld_stub_binder + 282
</span><br>
<span class="quotelev2">&gt; &gt;     frame #7: 0x000000010a5b29b0 libopen-pal.0.dylib`obj_order_type +
</span><br>
<span class="quotelev1">&gt; 3776
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; (lldb) thread select 4
</span><br>
<span class="quotelev2">&gt; &gt; * thread #4: tid = 0x272b411, 0x00007fff9330707a
</span><br>
<span class="quotelev1">&gt; libsystem_kernel.dylib`__select + 10
</span><br>
<span class="quotelev2">&gt; &gt;     frame #0: 0x00007fff9330707a libsystem_kernel.dylib`__select + 10
</span><br>
<span class="quotelev2">&gt; &gt; libsystem_kernel.dylib`__select:
</span><br>
<span class="quotelev2">&gt; &gt; -&gt;  0x7fff9330707a &lt;+10&gt;: jae    0x7fff93307084            ; &lt;+20&gt;
</span><br>
<span class="quotelev2">&gt; &gt;     0x7fff9330707c &lt;+12&gt;: movq   %rax, %rdi
</span><br>
<span class="quotelev2">&gt; &gt;     0x7fff9330707f &lt;+15&gt;: jmp    0x7fff933017f2            ; cerror
</span><br>
<span class="quotelev2">&gt; &gt;     0x7fff93307084 &lt;+20&gt;: retq
</span><br>
<span class="quotelev2">&gt; &gt; (lldb) bt
</span><br>
<span class="quotelev2">&gt; &gt; * thread #4: tid = 0x272b411, 0x00007fff9330707a
</span><br>
<span class="quotelev1">&gt; libsystem_kernel.dylib`__select + 10
</span><br>
<span class="quotelev2">&gt; &gt;   * frame #0: 0x00007fff9330707a libsystem_kernel.dylib`__select + 10
</span><br>
<span class="quotelev2">&gt; &gt;     frame #1: 0x000000010a9b1273
</span><br>
<span class="quotelev1">&gt; mca_pmix_pmix114.so`listen_thread(obj=0x0000000000000000) + 371 at
</span><br>
<span class="quotelev1">&gt; pmix_server_listener.c:226
</span><br>
<span class="quotelev2">&gt; &gt;     frame #2: 0x00007fff9a00099d libsystem_pthread.dylib`_pthread_body +
</span><br>
<span class="quotelev1">&gt; 131
</span><br>
<span class="quotelev2">&gt; &gt;     frame #3: 0x00007fff9a00091a libsystem_pthread.dylib`_pthread_start
</span><br>
<span class="quotelev1">&gt; + 168
</span><br>
<span class="quotelev2">&gt; &gt;     frame #4: 0x00007fff99ffe351 libsystem_pthread.dylib`thread_start +
</span><br>
<span class="quotelev1">&gt; 13
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; (lldb) thread select 5
</span><br>
<span class="quotelev2">&gt; &gt; * thread #5: tid = 0x272b412, 0x00007fff9330707a
</span><br>
<span class="quotelev1">&gt; libsystem_kernel.dylib`__select + 10
</span><br>
<span class="quotelev2">&gt; &gt;     frame #0: 0x00007fff9330707a libsystem_kernel.dylib`__select + 10
</span><br>
<span class="quotelev2">&gt; &gt; libsystem_kernel.dylib`__select:
</span><br>
<span class="quotelev2">&gt; &gt; -&gt;  0x7fff9330707a &lt;+10&gt;: jae    0x7fff93307084            ; &lt;+20&gt;
</span><br>
<span class="quotelev2">&gt; &gt;     0x7fff9330707c &lt;+12&gt;: movq   %rax, %rdi
</span><br>
<span class="quotelev2">&gt; &gt;     0x7fff9330707f &lt;+15&gt;: jmp    0x7fff933017f2            ; cerror
</span><br>
<span class="quotelev2">&gt; &gt;     0x7fff93307084 &lt;+20&gt;: retq
</span><br>
<span class="quotelev2">&gt; &gt; (lldb) bt
</span><br>
<span class="quotelev2">&gt; &gt; * thread #5: tid = 0x272b412, 0x00007fff9330707a
</span><br>
<span class="quotelev1">&gt; libsystem_kernel.dylib`__select + 10
</span><br>
<span class="quotelev2">&gt; &gt;   * frame #0: 0x00007fff9330707a libsystem_kernel.dylib`__select + 10
</span><br>
<span class="quotelev2">&gt; &gt;     frame #1: 0x000000010a3c13cc
</span><br>
<span class="quotelev1">&gt; libopen-rte.0.dylib`listen_thread_fn(obj=0x000000010a46e8c0) + 428 at
</span><br>
<span class="quotelev1">&gt; listener.c:261
</span><br>
<span class="quotelev2">&gt; &gt;     frame #2: 0x00007fff9a00099d libsystem_pthread.dylib`_pthread_body +
</span><br>
<span class="quotelev1">&gt; 131
</span><br>
<span class="quotelev2">&gt; &gt;     frame #3: 0x00007fff9a00091a libsystem_pthread.dylib`_pthread_start
</span><br>
<span class="quotelev1">&gt; + 168
</span><br>
<span class="quotelev2">&gt; &gt;     frame #4: 0x00007fff99ffe351 libsystem_pthread.dylib`thread_start +
</span><br>
<span class="quotelev1">&gt; 13
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Fri, Jun 3, 2016 at 9:50 AM, Jeff Squyres (jsquyres) &lt;
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; George --
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; You might want to get bt's from *all* the threads...?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; On Jun 2, 2016, at 5:31 PM, George Bosilca &lt;bosilca_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; The timeout never triggers and when I attach to the mpirun process I
</span><br>
<span class="quotelev1">&gt; see an extremely strange stack:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; (lldb) bt
</span><br>
<span class="quotelev3">&gt; &gt; &gt; * thread #1: tid = 0x272b40e, 0x00007fff93306de6
</span><br>
<span class="quotelev1">&gt; libsystem_kernel.dylib`__psynch_mutexwait + 10, queue =
</span><br>
<span class="quotelev1">&gt; 'com.apple.main-thread', stop reason = signal SIGSTOP
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   * frame #0: 0x00007fff93306de6
</span><br>
<span class="quotelev1">&gt; libsystem_kernel.dylib`__psynch_mutexwait + 10
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     frame #1: 0x00007fff9a000e4a
</span><br>
<span class="quotelev1">&gt; libsystem_pthread.dylib`_pthread_mutex_lock_wait + 89
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     frame #2: 0x00007fff99ffe5f5
</span><br>
<span class="quotelev1">&gt; libsystem_pthread.dylib`_pthread_mutex_lock_slow + 300
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     frame #3: 0x00007fff8c2a00f8 libdyld.dylib`dyldGlobalLockAcquire()
</span><br>
<span class="quotelev1">&gt; + 16
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     frame #4: 0x00007fff6ca8e177
</span><br>
<span class="quotelev1">&gt; dyld`ImageLoaderMachOCompressed::doBindFastLazySymbol(unsigned int,
</span><br>
<span class="quotelev1">&gt; ImageLoader::LinkContext const&amp;, void (*)(), void (*)()) + 55
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     frame #5: 0x00007fff6ca78063
</span><br>
<span class="quotelev1">&gt; dyld`dyld::fastBindLazySymbol(ImageLoader**, unsigned long) + 90
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     frame #6: 0x00007fff8c2a0262 libdyld.dylib`dyld_stub_binder + 282
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     frame #7: 0x000000010a5b29b0 libopen-pal.0.dylib`obj_order_type +
</span><br>
<span class="quotelev1">&gt; 3776
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; This seems to indicate that we are trying to access a function from a
</span><br>
<span class="quotelev1">&gt; dylib that has been or is in the process of being unloaded.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   George.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; On Thu, Jun 2, 2016 at 8:34 AM, Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; The osc hang is fixed by a PR to fix bugs in start in cm and ob1. See
</span><br>
<span class="quotelev1">&gt; #1729.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; -Nathan
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; On Jun 2, 2016, at 5:17 AM, Gilles Gouaillardet &lt;
</span><br>
<span class="quotelev1">&gt; gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; fwiw,
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; the onsided/c_fence_lock test from the ibm test suite hangs
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; (mpirun -np 2 ./c_fence_lock)
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; i ran a git bisect and it incriminates commit
</span><br>
<span class="quotelev1">&gt; b90c83840f472de3219b87cd7e1a364eec5c5a29
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; commit b90c83840f472de3219b87cd7e1a364eec5c5a29
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Author: bosilca &lt;bosilca_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Date:   Tue May 24 18:20:51 2016 -0500
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;     Refactor the request completion (#1422)
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;     * Remodel the request.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;     Added the wait sync primitive and integrate it into the PML and
</span><br>
<span class="quotelev1">&gt; MTL
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;     infrastructure. The multi-threaded requests are now significantly
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;     less heavy and less noisy (only the threads associated with
</span><br>
<span class="quotelev1">&gt; completed
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;     requests are signaled).
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;     * Fix the condition to release the request.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; I also noted a warning is emitted when running only one task
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; ./c_fence_lock
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; but I did not git bisect, so that might not be related
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Cheers,
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Gilles
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; On Thursday, June 2, 2016, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Yes, please! I&#226;&#128;&#153;d like to know what mpirun thinks is happening - if
</span><br>
<span class="quotelev1">&gt; you like, just set the &#226;&#128;&#148;timeout N &#226;&#128;&#148;report-state-on-timeout flags and tell
</span><br>
<span class="quotelev1">&gt; me what comes out
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; On Jun 1, 2016, at 7:57 PM, George Bosilca &lt;bosilca_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; I don't think it matters. I was running the IBM collective and pt2pt
</span><br>
<span class="quotelev1">&gt; tests, but each time it deadlocked was in a different test. If you are
</span><br>
<span class="quotelev1">&gt; interested in some particular values, I would be happy to attach a debugger
</span><br>
<span class="quotelev1">&gt; next time it happens.
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;   George.
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; On Wed, Jun 1, 2016 at 10:47 PM, Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; What kind of apps are they? Or does it matter what you are running?
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt; &gt; On Jun 1, 2016, at 7:37 PM, George Bosilca &lt;bosilca_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt; &gt; I have a seldomly occurring deadlock on a OS X laptop if I use
</span><br>
<span class="quotelev1">&gt; more than 2 processes). It is coming up once every 200 runs or so.
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt; &gt; Here is what I could gather from my experiments: All the MPI
</span><br>
<span class="quotelev1">&gt; processes seem to have correctly completed (I get all the expected output
</span><br>
<span class="quotelev1">&gt; and the MPI processes are in a waiting state), but somehow the mpirun does
</span><br>
<span class="quotelev1">&gt; not detect their completion. As a result, mpirun never returns.
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt; &gt;   George.
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt; &gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt; &gt; Searchable archives:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/06/19054.php">http://www.open-mpi.org/community/lists/devel/2016/06/19054.php</a>
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/06/19054.php">http://www.open-mpi.org/community/lists/devel/2016/06/19054.php</a>
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/06/19055.php">http://www.open-mpi.org/community/lists/devel/2016/06/19055.php</a>
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/06/19059.php">http://www.open-mpi.org/community/lists/devel/2016/06/19059.php</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/06/19060.php">http://www.open-mpi.org/community/lists/devel/2016/06/19060.php</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/06/19061.php">http://www.open-mpi.org/community/lists/devel/2016/06/19061.php</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt; &gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/06/19062.php">http://www.open-mpi.org/community/lists/devel/2016/06/19062.php</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/06/19063.php">http://www.open-mpi.org/community/lists/devel/2016/06/19063.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/06/19066.php">http://www.open-mpi.org/community/lists/devel/2016/06/19066.php</a>
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-19069/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19070.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Seldom deadlock in mpirun"</a>
<li><strong>Previous message:</strong> <a href="19068.php">Ralph Castain: "[OMPI devel] 1.10.3rc4 ready for test"</a>
<li><strong>In reply to:</strong> <a href="19066.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Seldom deadlock in mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19070.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Seldom deadlock in mpirun"</a>
<li><strong>Reply:</strong> <a href="19070.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Seldom deadlock in mpirun"</a>
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
