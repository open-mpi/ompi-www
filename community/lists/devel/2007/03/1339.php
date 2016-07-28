<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Mar  6 06:26:27 2007" -->
<!-- isoreceived="20070306112627" -->
<!-- sent="Tue, 6 Mar 2007 13:26:18 +0200" -->
<!-- isosent="20070306112618" -->
<!-- name="Gleb Natapov" -->
<!-- email="glebn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [PATCH] opal/class/opal_object: fix double-check locking for class initialization" -->
<!-- id="20070306112618.GD24777_at_minantech.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="45ED4CCC.4010209_at_informatik.uni-halle.de" -->
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
<strong>From:</strong> Gleb Natapov (<em>glebn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-03-06 06:26:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1340.php">Bert Wesarg: "[OMPI devel] 1.2rc1: hangs non deterministic with simple MPI_thread_init()"</a>
<li><strong>Previous message:</strong> <a href="1338.php">Bert Wesarg: "Re: [OMPI devel] [PATCH] opal/class/opal_object: fix double-check locking for class initialization"</a>
<li><strong>In reply to:</strong> <a href="1338.php">Bert Wesarg: "Re: [OMPI devel] [PATCH] opal/class/opal_object: fix double-check locking for class initialization"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, Mar 06, 2007 at 12:13:16PM +0100, Bert Wesarg wrote:
<br>
<span class="quotelev1">&gt; Gleb Natapov wrote:
</span><br>
<span class="quotelev2">&gt; &gt; On Tue, Mar 06, 2007 at 11:24:06AM +0100, Bert Wesarg wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hello,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Gleb Natapov wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; If it does this after opal_atomic_lock() (which is explicit memory
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; barrier) then it is broken.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Than, gcc 4.1.1 on the amd64 architecture is broken:
</span><br>
<span class="quotelev2">&gt; &gt; And can you repeat the test please, but make &quot;test&quot; variable to be global
</span><br>
<span class="quotelev2">&gt; &gt; to tell compiler that it can be actually accessed by more then one
</span><br>
<span class="quotelev2">&gt; &gt; thread.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ahh, now both produce nearly the same code.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; but who hurts it to declare the variable volatile?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
The disadvantage of using volatile is that compiler will produce
<br>
inefficient code for every access to a variable and not only specific
<br>
access that you care about, so it is better to do proper memory barrier
<br>
in places where ordering is important and let compiler optimize all
<br>
other cases. But what is even more important is that in most cases
<br>
volatile is not enough. CPU may reorder accesses to memory and volatile
<br>
doesn't help, so volatile is not a replacement for memory barriers.
<br>
You can find Linus rants about volatile usage in LKML archives for
<br>
entertainment reading. Volatile is overused in Open MPI anyway.
<br>
<p><span class="quotelev1">&gt; Bert
</span><br>
<p><span class="quotelev1">&gt; --- double_check.s	2007-03-06 12:07:12.103478512 +0100
</span><br>
<span class="quotelev1">&gt; +++ double_check_volatile.s	2007-03-06 12:06:20.675315485 +0100
</span><br>
<span class="quotelev1">&gt; @@ -1,4 +1,4 @@
</span><br>
<span class="quotelev1">&gt; -	.file	&quot;double_check.c&quot;
</span><br>
<span class="quotelev1">&gt; +	.file	&quot;double_check_volatile.c&quot;
</span><br>
<span class="quotelev1">&gt;  	.text
</span><br>
<span class="quotelev1">&gt;  	.p2align 4,,15
</span><br>
<span class="quotelev1">&gt;  .globl main
</span><br>
<span class="quotelev1">&gt; @@ -13,8 +13,9 @@
</span><br>
<span class="quotelev1">&gt;  	# first if
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  #NO_APP
</span><br>
<span class="quotelev1">&gt; -	decl	%eax
</span><br>
<span class="quotelev1">&gt; +	movl	test(%rip), %eax
</span><br>
<span class="quotelev1">&gt;  	movl	$1, %edx
</span><br>
<span class="quotelev1">&gt; +	decl	%eax
</span><br>
<span class="quotelev1">&gt;  	je	.L4
</span><br>
<span class="quotelev1">&gt;  #APP
</span><br>
<span class="quotelev1">&gt;  	# lock
</span><br>
<span class="quotelev1">&gt; @@ -43,7 +44,8 @@
</span><br>
<span class="quotelev1">&gt;  	# second if
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  #NO_APP
</span><br>
<span class="quotelev1">&gt; -	cmpl	$1, test(%rip)
</span><br>
<span class="quotelev1">&gt; +	movl	test(%rip), %eax
</span><br>
<span class="quotelev1">&gt; +	decl	%eax
</span><br>
<span class="quotelev1">&gt;  	jne	.L8
</span><br>
<span class="quotelev1">&gt;  #APP
</span><br>
<span class="quotelev1">&gt;  	# if unlock
</span><br>
<p><span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><pre>
--
			Gleb.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1340.php">Bert Wesarg: "[OMPI devel] 1.2rc1: hangs non deterministic with simple MPI_thread_init()"</a>
<li><strong>Previous message:</strong> <a href="1338.php">Bert Wesarg: "Re: [OMPI devel] [PATCH] opal/class/opal_object: fix double-check locking for class initialization"</a>
<li><strong>In reply to:</strong> <a href="1338.php">Bert Wesarg: "Re: [OMPI devel] [PATCH] opal/class/opal_object: fix double-check locking for class initialization"</a>
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
