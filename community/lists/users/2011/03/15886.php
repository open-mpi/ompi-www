<?
$subject_val = "Re: [OMPI users] OMPI seg fault by a class with weird address.";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 16 20:20:26 2011" -->
<!-- isoreceived="20110317002026" -->
<!-- sent="Wed, 16 Mar 2011 20:20:20 -0400" -->
<!-- isosent="20110317002020" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OMPI seg fault by a class with weird address." -->
<!-- id="4A35291B-376F-4C15-A03E-E151D1F9A648_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="SNT134-w4312D1AE2AAEFFDB555FB4CBCE0_at_phx.gbl" -->
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
<strong>Subject:</strong> Re: [OMPI users] OMPI seg fault by a class with weird address.<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-16 20:20:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15887.php">Jeff Squyres: "Re: [OMPI users] MPI_AllReduce() deadlock on IB"</a>
<li><strong>Previous message:</strong> <a href="15885.php">Claudio Baeza Retamal: "[OMPI users] Issues in 1.4.3 version and system cpu usage"</a>
<li><strong>In reply to:</strong> <a href="15884.php">Jack Bryan: "Re: [OMPI users] OMPI seg fault by a class with weird address."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15909.php">Jack Bryan: "Re: [OMPI users] OMPI seg fault by a class with weird address."</a>
<li><strong>Reply:</strong> <a href="15909.php">Jack Bryan: "Re: [OMPI users] OMPI seg fault by a class with weird address."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Make sure you have the latest version of valgrind.
<br>
<p>But it definitely does highlight what could be real problems if you read down far enough in the output.
<br>
<p><span class="quotelev1">&gt; ==18729== Invalid write of size 8
</span><br>
<span class="quotelev1">&gt; ==18729==    at 0x443BEF: initPopPara(population*, std::vector&lt;message_para_to_workersT, std::allocator&lt;message_para_to_workersT&gt; &gt;&amp;, initParaType&amp;, int, int, std::vector&lt;double, std::allocator&lt;double&gt; &gt;&amp;) (main-parallel2.cpp:552)
</span><br>
<span class="quotelev1">&gt; ==18729==    by 0x44F12E: main (main-parallel2.cpp:204)
</span><br>
<span class="quotelev1">&gt; ==18729==  Address 0x62c9da0 is 0 bytes after a block of size 0 alloc'd
</span><br>
<span class="quotelev1">&gt; ==18729==    at 0x4A0666E: operator new(unsigned long) (vg_replace_malloc.c:220)
</span><br>
<span class="quotelev1">&gt; ==18729==    by 0x4573E4: void std::__uninitialized_fill_n_aux&lt;message_para_to_workersT*, unsigned long, message_para_to_workersT&gt;(message_para_to_workersT*, unsigned long, message_para_to_workersT const&amp;, __false_type) (new_allocator.h:88)
</span><br>
<span class="quotelev1">&gt; ==18729==    by 0x4576CF: void std::__uninitialized_fill_n_a&lt;message_para_to_workersT*, unsigned long, message_para_to_workersT, message_para_to_workersT&gt;(message_para_to_workersT*, unsigned long, message_para_to_workersT const&amp;, std::allocator&lt;message_para_to_workersT&gt;) (stl_uninitialized.h:218)
</span><br>
<span class="quotelev1">&gt; ==18729==    by 0x44EE2E: main (stl_vector.h:218)
</span><br>
<p>The above is an invalid read of write of size 8 -- you're essentially writing outside of an array. 
<br>
<p>Valgrind is showing you the call stack to how it got there.  Looks like you new'ed or malloc'ed a block of size 0 and then tried to write something to it.  Writing to memory that you don't own is a no-no; it can cause Very Bad Things to happen.
<br>
<p>You should probably investigate this, and the other issues that it is reporting (e.g., the next invalid read of size 8).
<br>
<p><span class="quotelev1">&gt; ==18729==
</span><br>
<span class="quotelev1">&gt; ==18729== Invalid read of size 8
</span><br>
<span class="quotelev1">&gt; ==18729==    at 0x44F13A: main (main-parallel2.cpp:208)
</span><br>
<span class="quotelev1">&gt; ==18729==  Address 0x62c9d60 is 0 bytes after a block of size 0 alloc'd
</span><br>
<span class="quotelev1">&gt; ==18729==    at 0x4A0666E: operator new(unsigned long) (vg_replace_malloc.c:220)
</span><br>
<span class="quotelev1">&gt; ==18729==    by 0x45733D: void std::__uninitialized_fill_n_aux&lt;message_para_to_workersT*, unsigned long, message_para_to_workersT&gt;(message_para_to_workersT*, unsigned long, message_para_to_workersT const&amp;, __false_type) (new_allocator.h:88)
</span><br>
<span class="quotelev1">&gt; ==18729==    by 0x4576CF: void std::__uninitialized_fill_n_a&lt;message_para_to_workersT*, unsigned long, message_para_to_workersT, message_para_to_workersT&gt;(message_para_to_workersT*, unsigned long, message_para_to_workersT const&amp;, std::allocator&lt;message_para_to_workersT&gt;) (stl_uninitialized.h:218)
</span><br>
<span class="quotelev1">&gt; ==18729==    by 0x44EE2E: main (stl_vector.h:218)
</span><br>
<span class="quotelev1">&gt; ==18729==
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; valgrind: m_mallocfree.c:225 (mk_plain_bszB): Assertion 'bszB != 0' failed.
</span><br>
<span class="quotelev1">&gt; valgrind: This is probably caused by your program erroneously writing past the
</span><br>
<span class="quotelev1">&gt; end of a heap block and corrupting heap metadata.  If you fix any
</span><br>
<span class="quotelev1">&gt; invalid writes reported by Memcheck, this assertion failure will
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; probably go away.  Please try that before reporting this as a bug.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ==18729==    at 0x38029D5C: report_and_quit (m_libcassert.c:145)
</span><br>
<span class="quotelev1">&gt; ==18729==    by 0x3802A032: vgPlain_assert_fail (m_libcassert.c:217)
</span><br>
<span class="quotelev1">&gt; ==18729==    by 0x38035645: vgPlain_arena_malloc (m_mallocfree.c:225)
</span><br>
<span class="quotelev1">&gt; ==18729==    by 0x38002BB5: vgMemCheck_new_block (mc_malloc_wrappers.c:199)
</span><br>
<span class="quotelev1">&gt; ==18729==    by 0x38002F6B: vgMemCheck___builtin_new (mc_malloc_wrappers.c:246)
</span><br>
<span class="quotelev1">&gt; ==18729==    by 0x3806070C: do_client_request (scheduler.c:1362)
</span><br>
<span class="quotelev1">&gt; ==18729==    by 0x38061D30: vgPlain_scheduler (scheduler.c:1061)
</span><br>
<span class="quotelev1">&gt; ==18729==    by 0x38085E6E: run_a_thread_NORETURN (syswrap-linux.c:91)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; sched status:
</span><br>
<span class="quotelev1">&gt;   running_tid=1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thread 1: status = VgTs_Runnable
</span><br>
<span class="quotelev1">&gt; ==18729==    at 0x4A0666E: operator new(unsigned long) (vg_replace_malloc.c:220)
</span><br>
<span class="quotelev1">&gt; ==18729==    by 0x464506: __gnu_cxx::new_allocator&lt;int&gt;::allocate(unsigned long, void const*) (new_allocator.h:88)
</span><br>
<span class="quotelev1">&gt; ==18729==    by 0x46452E: std::_Vector_base&lt;int, std::allocator&lt;int&gt; &gt;::_M_allocate(unsigned long) (stl_vector.h:127)
</span><br>
<span class="quotelev1">&gt; ==18729==    by 0x464560: std::_Vector_base&lt;int, std::allocator&lt;int&gt; &gt;::_Vector_base(unsigned long, std::allocator&lt;int&gt; const&amp;) (stl_vector.h:113)
</span><br>
<span class="quotelev1">&gt; ==18729==    by 0x464B6A: std::vector&lt;int, std::allocator&lt;int&gt; &gt;::vector(unsigned long, int const&amp;, std::allocator&lt;int&gt; const&amp;) (stl_vector.h:216)
</span><br>
<span class="quotelev1">&gt; ==18729==    by 0x488F62: Index::Index() (index.cpp:20)
</span><br>
<span class="quotelev1">&gt; ==18729==    by 0x489147: ReadFile(char const*) (index.cpp:86)
</span><br>
<span class="quotelev1">&gt; ==18729==    by 0x48941C: ImportIndices() (index.cpp:121)
</span><br>
<span class="quotelev1">&gt; ==18729==    by 0x445D00: myNeplanTaskScheduler(CNSGA2*, int, int, int, population*, char, int, std::vector&lt;message_para_to_workersT, std::allocator&lt;message_para_to_workersT&gt; &gt;&amp;, ompi_datatype_t*, int&amp;, int&amp;, std::vector&lt;std::vector&lt;double, std::allocator&lt;double&gt; &gt;, std::allocator&lt;std::vector&lt;double, std::allocator&lt;double&gt; &gt; &gt; &gt;&amp;, std::vector&lt;std::vector&lt;double, std::allocator&lt;double&gt; &gt;, std::allocator&lt;std::vector&lt;double, std::allocator&lt;double&gt; &gt; &gt; &gt;&amp;, std::vector&lt;double, std::allocator&lt;double&gt; &gt;&amp;, int, std::vector&lt;std::vector&lt;double, std::allocator&lt;double&gt; &gt;, std::allocator&lt;std::vector&lt;double, std::allocator&lt;double&gt; &gt; &gt; &gt;&amp;, ompi_datatype_t*, int, ompi_datatype_t*, int) (myNetplanScheduler.cpp:109)
</span><br>
<span class="quotelev1">&gt; ==18729==    by 0x44F2DF: main (main-parallel2.cpp:216)
</span><br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15887.php">Jeff Squyres: "Re: [OMPI users] MPI_AllReduce() deadlock on IB"</a>
<li><strong>Previous message:</strong> <a href="15885.php">Claudio Baeza Retamal: "[OMPI users] Issues in 1.4.3 version and system cpu usage"</a>
<li><strong>In reply to:</strong> <a href="15884.php">Jack Bryan: "Re: [OMPI users] OMPI seg fault by a class with weird address."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15909.php">Jack Bryan: "Re: [OMPI users] OMPI seg fault by a class with weird address."</a>
<li><strong>Reply:</strong> <a href="15909.php">Jack Bryan: "Re: [OMPI users] OMPI seg fault by a class with weird address."</a>
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
