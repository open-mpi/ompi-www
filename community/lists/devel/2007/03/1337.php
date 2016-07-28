<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Mar  6 05:55:52 2007" -->
<!-- isoreceived="20070306105552" -->
<!-- sent="Tue, 6 Mar 2007 12:55:42 +0200" -->
<!-- isosent="20070306105542" -->
<!-- name="Gleb Natapov" -->
<!-- email="glebn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [PATCH] opal/class/opal_object: fix double-check locking for class initialization" -->
<!-- id="20070306105542.GC24777_at_minantech.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="45ED4146.8060403_at_informatik.uni-halle.de" -->
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
<strong>Date:</strong> 2007-03-06 05:55:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1338.php">Bert Wesarg: "Re: [OMPI devel] [PATCH] opal/class/opal_object: fix double-check locking for class initialization"</a>
<li><strong>Previous message:</strong> <a href="1336.php">Bert Wesarg: "Re: [OMPI devel] [PATCH] opal/class/opal_object: fix double-check locking for class initialization"</a>
<li><strong>In reply to:</strong> <a href="1336.php">Bert Wesarg: "Re: [OMPI devel] [PATCH] opal/class/opal_object: fix double-check locking for class initialization"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1338.php">Bert Wesarg: "Re: [OMPI devel] [PATCH] opal/class/opal_object: fix double-check locking for class initialization"</a>
<li><strong>Reply:</strong> <a href="1338.php">Bert Wesarg: "Re: [OMPI devel] [PATCH] opal/class/opal_object: fix double-check locking for class initialization"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, Mar 06, 2007 at 11:24:06AM +0100, Bert Wesarg wrote:
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gleb Natapov wrote:
</span><br>
<span class="quotelev2">&gt; &gt; If it does this after opal_atomic_lock() (which is explicit memory
</span><br>
<span class="quotelev2">&gt; &gt; barrier) then it is broken.
</span><br>
<span class="quotelev1">&gt; Than, gcc 4.1.1 on the amd64 architecture is broken:
</span><br>
And can you repeat the test please, but make &quot;test&quot; variable to be global
<br>
to tell compiler that it can be actually accessed by more then one
<br>
thread.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The test-cases were compiled in the test/asm directory, with -O3
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Bert
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><span class="quotelev1">&gt; #define OMPI_BUILDING 0
</span><br>
<span class="quotelev1">&gt; #include &quot;ompi_config.h&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #include &quot;opal/sys/atomic.h&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; static opal_atomic_lock_t lock = { { OPAL_ATOMIC_UNLOCKED } };
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; int
</span><br>
<span class="quotelev1">&gt; main(int argc, char *argv[])
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;     int test = (argc == 1);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     __asm__ (&quot;# first if\n&quot;);
</span><br>
<span class="quotelev1">&gt;     if (1 == test) {
</span><br>
<span class="quotelev1">&gt;         return 1;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;     __asm__ (&quot;# lock\n&quot;);
</span><br>
<span class="quotelev1">&gt;     opal_atomic_lock(&amp;lock);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     __asm__ (&quot;# second if\n&quot;);
</span><br>
<span class="quotelev1">&gt;     if (1 == test) {
</span><br>
<span class="quotelev1">&gt;         __asm__ (&quot;# if unlock\n&quot;);
</span><br>
<span class="quotelev1">&gt;         opal_atomic_unlock(&amp;lock);
</span><br>
<span class="quotelev1">&gt;         return 2;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     test = 1;
</span><br>
<span class="quotelev1">&gt;     __asm__ (&quot;# unlock\n&quot;);
</span><br>
<span class="quotelev1">&gt;     opal_atomic_unlock(&amp;lock);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><span class="quotelev1">&gt; 	.file	&quot;double_check.c&quot;
</span><br>
<span class="quotelev1">&gt; 	.text
</span><br>
<span class="quotelev1">&gt; 	.p2align 4,,15
</span><br>
<span class="quotelev1">&gt; .globl main
</span><br>
<span class="quotelev1">&gt; 	.type	main, @function
</span><br>
<span class="quotelev1">&gt; main:
</span><br>
<span class="quotelev1">&gt; .LFB30:
</span><br>
<span class="quotelev1">&gt; #APP
</span><br>
<span class="quotelev1">&gt; 	# first if
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #NO_APP
</span><br>
<span class="quotelev1">&gt; 	decl	%edi
</span><br>
<span class="quotelev1">&gt; 	movl	$1, %eax
</span><br>
<span class="quotelev1">&gt; 	je	.L4
</span><br>
<span class="quotelev1">&gt; #APP
</span><br>
<span class="quotelev1">&gt; 	# lock
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 	.p2align 4,,7
</span><br>
<span class="quotelev1">&gt; #NO_APP
</span><br>
<span class="quotelev1">&gt; .L5:
</span><br>
<span class="quotelev1">&gt; 	xorl	%edx, %edx
</span><br>
<span class="quotelev1">&gt; 	movl	$1, %ecx
</span><br>
<span class="quotelev1">&gt; 	movl	%edx, %eax
</span><br>
<span class="quotelev1">&gt; #APP
</span><br>
<span class="quotelev1">&gt; 	lock; cmpxchgl %ecx,lock(%rip)   
</span><br>
<span class="quotelev1">&gt; 	sete     %dl      
</span><br>
<span class="quotelev1">&gt; 	
</span><br>
<span class="quotelev1">&gt; #NO_APP
</span><br>
<span class="quotelev1">&gt; 	testb	%dl, %dl
</span><br>
<span class="quotelev1">&gt; 	jne	.L13
</span><br>
<span class="quotelev1">&gt; 	.p2align 4,,7
</span><br>
<span class="quotelev1">&gt; .L9:
</span><br>
<span class="quotelev1">&gt; 	movl	lock(%rip), %eax
</span><br>
<span class="quotelev1">&gt; 	decl	%eax
</span><br>
<span class="quotelev1">&gt; 	je	.L9
</span><br>
<span class="quotelev1">&gt; 	jmp	.L5
</span><br>
<span class="quotelev1">&gt; .L13:
</span><br>
<span class="quotelev1">&gt; #APP
</span><br>
<span class="quotelev1">&gt; 	# second if
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 	# unlock
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #NO_APP
</span><br>
<span class="quotelev1">&gt; 	movl	$0, lock(%rip)
</span><br>
<span class="quotelev1">&gt; .L4:
</span><br>
<span class="quotelev1">&gt; 	rep ; ret
</span><br>
<span class="quotelev1">&gt; .LFE30:
</span><br>
<span class="quotelev1">&gt; 	.size	main, .-main
</span><br>
<span class="quotelev1">&gt; 	.local	lock
</span><br>
<span class="quotelev1">&gt; 	.comm	lock,4,4
</span><br>
<span class="quotelev1">&gt; 	.section	.eh_frame,&quot;a&quot;,@progbits
</span><br>
<span class="quotelev1">&gt; .Lframe1:
</span><br>
<span class="quotelev1">&gt; 	.long	.LECIE1-.LSCIE1
</span><br>
<span class="quotelev1">&gt; .LSCIE1:
</span><br>
<span class="quotelev1">&gt; 	.long	0x0
</span><br>
<span class="quotelev1">&gt; 	.byte	0x1
</span><br>
<span class="quotelev1">&gt; 	.string	&quot;zR&quot;
</span><br>
<span class="quotelev1">&gt; 	.uleb128 0x1
</span><br>
<span class="quotelev1">&gt; 	.sleb128 -8
</span><br>
<span class="quotelev1">&gt; 	.byte	0x10
</span><br>
<span class="quotelev1">&gt; 	.uleb128 0x1
</span><br>
<span class="quotelev1">&gt; 	.byte	0x3
</span><br>
<span class="quotelev1">&gt; 	.byte	0xc
</span><br>
<span class="quotelev1">&gt; 	.uleb128 0x7
</span><br>
<span class="quotelev1">&gt; 	.uleb128 0x8
</span><br>
<span class="quotelev1">&gt; 	.byte	0x90
</span><br>
<span class="quotelev1">&gt; 	.uleb128 0x1
</span><br>
<span class="quotelev1">&gt; 	.align 8
</span><br>
<span class="quotelev1">&gt; .LECIE1:
</span><br>
<span class="quotelev1">&gt; .LSFDE1:
</span><br>
<span class="quotelev1">&gt; 	.long	.LEFDE1-.LASFDE1
</span><br>
<span class="quotelev1">&gt; .LASFDE1:
</span><br>
<span class="quotelev1">&gt; 	.long	.LASFDE1-.Lframe1
</span><br>
<span class="quotelev1">&gt; 	.long	.LFB30
</span><br>
<span class="quotelev1">&gt; 	.long	.LFE30-.LFB30
</span><br>
<span class="quotelev1">&gt; 	.uleb128 0x0
</span><br>
<span class="quotelev1">&gt; 	.align 8
</span><br>
<span class="quotelev1">&gt; .LEFDE1:
</span><br>
<span class="quotelev1">&gt; 	.ident	&quot;GCC: (GNU) 4.1.1&quot;
</span><br>
<span class="quotelev1">&gt; 	.section	.note.GNU-stack,&quot;&quot;,@progbits
</span><br>
<p><span class="quotelev1">&gt; #define OMPI_BUILDING 0
</span><br>
<span class="quotelev1">&gt; #include &quot;ompi_config.h&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #include &quot;opal/sys/atomic.h&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; static opal_atomic_lock_t lock = { { OPAL_ATOMIC_UNLOCKED } };
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; int
</span><br>
<span class="quotelev1">&gt; main(int argc, char *argv[])
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;     volatile int test = (argc == 1);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     __asm__ (&quot;# first if\n&quot;);
</span><br>
<span class="quotelev1">&gt;     if (1 == test) {
</span><br>
<span class="quotelev1">&gt;         return 1;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;     __asm__ (&quot;# lock\n&quot;);
</span><br>
<span class="quotelev1">&gt;     opal_atomic_lock(&amp;lock);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     __asm__ (&quot;# second if\n&quot;);
</span><br>
<span class="quotelev1">&gt;     if (1 == test) {
</span><br>
<span class="quotelev1">&gt;         __asm__ (&quot;# if unlock\n&quot;);
</span><br>
<span class="quotelev1">&gt;         opal_atomic_unlock(&amp;lock);
</span><br>
<span class="quotelev1">&gt;         return 2;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     test = 1;
</span><br>
<span class="quotelev1">&gt;     __asm__ (&quot;# unlock\n&quot;);
</span><br>
<span class="quotelev1">&gt;     opal_atomic_unlock(&amp;lock);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><span class="quotelev1">&gt; 	.file	&quot;double_check_volatile.c&quot;
</span><br>
<span class="quotelev1">&gt; 	.text
</span><br>
<span class="quotelev1">&gt; 	.p2align 4,,15
</span><br>
<span class="quotelev1">&gt; .globl main
</span><br>
<span class="quotelev1">&gt; 	.type	main, @function
</span><br>
<span class="quotelev1">&gt; main:
</span><br>
<span class="quotelev1">&gt; .LFB30:
</span><br>
<span class="quotelev1">&gt; 	xorl	%eax, %eax
</span><br>
<span class="quotelev1">&gt; 	cmpl	$1, %edi
</span><br>
<span class="quotelev1">&gt; 	sete	%al
</span><br>
<span class="quotelev1">&gt; 	movl	%eax, -4(%rsp)
</span><br>
<span class="quotelev1">&gt; #APP
</span><br>
<span class="quotelev1">&gt; 	# first if
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #NO_APP
</span><br>
<span class="quotelev1">&gt; 	movl	-4(%rsp), %eax
</span><br>
<span class="quotelev1">&gt; 	movl	$1, %edx
</span><br>
<span class="quotelev1">&gt; 	decl	%eax
</span><br>
<span class="quotelev1">&gt; 	je	.L4
</span><br>
<span class="quotelev1">&gt; #APP
</span><br>
<span class="quotelev1">&gt; 	# lock
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 	.p2align 4,,7
</span><br>
<span class="quotelev1">&gt; #NO_APP
</span><br>
<span class="quotelev1">&gt; .L5:
</span><br>
<span class="quotelev1">&gt; 	xorl	%edx, %edx
</span><br>
<span class="quotelev1">&gt; 	movl	$1, %ecx
</span><br>
<span class="quotelev1">&gt; 	movl	%edx, %eax
</span><br>
<span class="quotelev1">&gt; #APP
</span><br>
<span class="quotelev1">&gt; 	lock; cmpxchgl %ecx,lock(%rip)   
</span><br>
<span class="quotelev1">&gt; 	sete     %dl      
</span><br>
<span class="quotelev1">&gt; 	
</span><br>
<span class="quotelev1">&gt; #NO_APP
</span><br>
<span class="quotelev1">&gt; 	testb	%dl, %dl
</span><br>
<span class="quotelev1">&gt; 	jne	.L15
</span><br>
<span class="quotelev1">&gt; 	.p2align 4,,7
</span><br>
<span class="quotelev1">&gt; .L11:
</span><br>
<span class="quotelev1">&gt; 	movl	lock(%rip), %eax
</span><br>
<span class="quotelev1">&gt; 	decl	%eax
</span><br>
<span class="quotelev1">&gt; 	je	.L11
</span><br>
<span class="quotelev1">&gt; 	jmp	.L5
</span><br>
<span class="quotelev1">&gt; .L15:
</span><br>
<span class="quotelev1">&gt; #APP
</span><br>
<span class="quotelev1">&gt; 	# second if
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #NO_APP
</span><br>
<span class="quotelev1">&gt; 	movl	-4(%rsp), %eax
</span><br>
<span class="quotelev1">&gt; 	decl	%eax
</span><br>
<span class="quotelev1">&gt; 	jne	.L8
</span><br>
<span class="quotelev1">&gt; #APP
</span><br>
<span class="quotelev1">&gt; 	# if unlock
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #NO_APP
</span><br>
<span class="quotelev1">&gt; 	movl	$0, lock(%rip)
</span><br>
<span class="quotelev1">&gt; 	movl	$2, %edx
</span><br>
<span class="quotelev1">&gt; .L4:
</span><br>
<span class="quotelev1">&gt; 	movl	%edx, %eax
</span><br>
<span class="quotelev1">&gt; 	ret
</span><br>
<span class="quotelev1">&gt; .L8:
</span><br>
<span class="quotelev1">&gt; 	movl	$1, -4(%rsp)
</span><br>
<span class="quotelev1">&gt; #APP
</span><br>
<span class="quotelev1">&gt; 	# unlock
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #NO_APP
</span><br>
<span class="quotelev1">&gt; 	xorl	%edx, %edx
</span><br>
<span class="quotelev1">&gt; 	movl	$0, lock(%rip)
</span><br>
<span class="quotelev1">&gt; 	jmp	.L4
</span><br>
<span class="quotelev1">&gt; .LFE30:
</span><br>
<span class="quotelev1">&gt; 	.size	main, .-main
</span><br>
<span class="quotelev1">&gt; 	.local	lock
</span><br>
<span class="quotelev1">&gt; 	.comm	lock,4,4
</span><br>
<span class="quotelev1">&gt; 	.section	.eh_frame,&quot;a&quot;,@progbits
</span><br>
<span class="quotelev1">&gt; .Lframe1:
</span><br>
<span class="quotelev1">&gt; 	.long	.LECIE1-.LSCIE1
</span><br>
<span class="quotelev1">&gt; .LSCIE1:
</span><br>
<span class="quotelev1">&gt; 	.long	0x0
</span><br>
<span class="quotelev1">&gt; 	.byte	0x1
</span><br>
<span class="quotelev1">&gt; 	.string	&quot;zR&quot;
</span><br>
<span class="quotelev1">&gt; 	.uleb128 0x1
</span><br>
<span class="quotelev1">&gt; 	.sleb128 -8
</span><br>
<span class="quotelev1">&gt; 	.byte	0x10
</span><br>
<span class="quotelev1">&gt; 	.uleb128 0x1
</span><br>
<span class="quotelev1">&gt; 	.byte	0x3
</span><br>
<span class="quotelev1">&gt; 	.byte	0xc
</span><br>
<span class="quotelev1">&gt; 	.uleb128 0x7
</span><br>
<span class="quotelev1">&gt; 	.uleb128 0x8
</span><br>
<span class="quotelev1">&gt; 	.byte	0x90
</span><br>
<span class="quotelev1">&gt; 	.uleb128 0x1
</span><br>
<span class="quotelev1">&gt; 	.align 8
</span><br>
<span class="quotelev1">&gt; .LECIE1:
</span><br>
<span class="quotelev1">&gt; .LSFDE1:
</span><br>
<span class="quotelev1">&gt; 	.long	.LEFDE1-.LASFDE1
</span><br>
<span class="quotelev1">&gt; .LASFDE1:
</span><br>
<span class="quotelev1">&gt; 	.long	.LASFDE1-.Lframe1
</span><br>
<span class="quotelev1">&gt; 	.long	.LFB30
</span><br>
<span class="quotelev1">&gt; 	.long	.LFE30-.LFB30
</span><br>
<span class="quotelev1">&gt; 	.uleb128 0x0
</span><br>
<span class="quotelev1">&gt; 	.align 8
</span><br>
<span class="quotelev1">&gt; .LEFDE1:
</span><br>
<span class="quotelev1">&gt; 	.ident	&quot;GCC: (GNU) 4.1.1&quot;
</span><br>
<span class="quotelev1">&gt; 	.section	.note.GNU-stack,&quot;&quot;,@progbits
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
<li><strong>Next message:</strong> <a href="1338.php">Bert Wesarg: "Re: [OMPI devel] [PATCH] opal/class/opal_object: fix double-check locking for class initialization"</a>
<li><strong>Previous message:</strong> <a href="1336.php">Bert Wesarg: "Re: [OMPI devel] [PATCH] opal/class/opal_object: fix double-check locking for class initialization"</a>
<li><strong>In reply to:</strong> <a href="1336.php">Bert Wesarg: "Re: [OMPI devel] [PATCH] opal/class/opal_object: fix double-check locking for class initialization"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1338.php">Bert Wesarg: "Re: [OMPI devel] [PATCH] opal/class/opal_object: fix double-check locking for class initialization"</a>
<li><strong>Reply:</strong> <a href="1338.php">Bert Wesarg: "Re: [OMPI devel] [PATCH] opal/class/opal_object: fix double-check locking for class initialization"</a>
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
