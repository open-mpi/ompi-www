	.file	"double_check_volatile.c"
	.text
	.p2align 4,,15
.globl main
	.type	main, @function
main:
.LFB30:
	xorl	%eax, %eax
	cmpl	$1, %edi
	sete	%al
	movl	%eax, -4(%rsp)
#APP
	# first if

#NO_APP
	movl	-4(%rsp), %eax
	movl	$1, %edx
	decl	%eax
	je	.L4
#APP
	# lock

	.p2align 4,,7
#NO_APP
.L5:
	xorl	%edx, %edx
	movl	$1, %ecx
	movl	%edx, %eax
#APP
	lock; cmpxchgl %ecx,lock(%rip)   
	sete     %dl      
	
#NO_APP
	testb	%dl, %dl
	jne	.L15
	.p2align 4,,7
.L11:
	movl	lock(%rip), %eax
	decl	%eax
	je	.L11
	jmp	.L5
.L15:
#APP
	# second if

#NO_APP
	movl	-4(%rsp), %eax
	decl	%eax
	jne	.L8
#APP
	# if unlock

#NO_APP
	movl	$0, lock(%rip)
	movl	$2, %edx
.L4:
	movl	%edx, %eax
	ret
.L8:
	movl	$1, -4(%rsp)
#APP
	# unlock

#NO_APP
	xorl	%edx, %edx
	movl	$0, lock(%rip)
	jmp	.L4
.LFE30:
	.size	main, .-main
	.local	lock
	.comm	lock,4,4
	.section	.eh_frame,"a",@progbits
.Lframe1:
	.long	.LECIE1-.LSCIE1
.LSCIE1:
	.long	0x0
	.byte	0x1
	.string	"zR"
	.uleb128 0x1
	.sleb128 -8
	.byte	0x10
	.uleb128 0x1
	.byte	0x3
	.byte	0xc
	.uleb128 0x7
	.uleb128 0x8
	.byte	0x90
	.uleb128 0x1
	.align 8
.LECIE1:
.LSFDE1:
	.long	.LEFDE1-.LASFDE1
.LASFDE1:
	.long	.LASFDE1-.Lframe1
	.long	.LFB30
	.long	.LFE30-.LFB30
	.uleb128 0x0
	.align 8
.LEFDE1:
	.ident	"GCC: (GNU) 4.1.1"
	.section	.note.GNU-stack,"",@progbits

