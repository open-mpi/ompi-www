<?
$subject_val = "Re: [OMPI users] PGI problems";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 11 05:43:22 2010" -->
<!-- isoreceived="20100511094322" -->
<!-- sent="Tue, 11 May 2010 10:43:03 +0100" -->
<!-- isosent="20100511094303" -->
<!-- name="Dave Love" -->
<!-- email="d.love_at_[hidden]" -->
<!-- subject="Re: [OMPI users] PGI problems" -->
<!-- id="87wrvan594.fsf_at_liv.ac.uk" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4BE83D86.7020304_at_ias.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] PGI problems<br>
<strong>From:</strong> Dave Love (<em>d.love_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-11 05:43:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13011.php">Pankatz, Klaus: "Re: [OMPI users] mpirun -np 4 hello_world; on a eight processor shared memory machine produces wrong output"</a>
<li><strong>Previous message:</strong> <a href="13009.php">Gijsbert Wiesenekker: "Re: [OMPI users] Questions about MPI_Isend"</a>
<li><strong>In reply to:</strong> <a href="13002.php">Prentice Bisbal: "Re: [OMPI users] PGI problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13015.php">Dave Love: "Re: [OMPI users] PGI problems"</a>
<li><strong>Reply:</strong> <a href="13015.php">Dave Love: "Re: [OMPI users] PGI problems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Prentice Bisbal &lt;prentice_at_[hidden]&gt; writes:
<br>
<p><span class="quotelev1">&gt; Since I was successful compiled 1.4.1 with PGI 9 and 1.4.2 with PGI
</span><br>
<span class="quotelev1">&gt; 10.4,
</span><br>
<p>Thanks.  The difference appears to be the compiler versions.
<br>
<p><span class="quotelev1">&gt; I suspect the problem is local to you. Can you go through your
</span><br>
<span class="quotelev1">&gt; environment and make sure you don't have any settings that are incorrect
</span><br>
<span class="quotelev1">&gt; for this build that the configure script is picking up, like an
</span><br>
<span class="quotelev1">&gt; incorrect CPPFLAGS, LDFLAGS, or something like that?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I didn't see your exact configure command. If you're not already doing
</span><br>
<span class="quotelev1">&gt; so, I'd make sure you explicitly list the CC, CXX, FC and F77 variables,
</span><br>
<span class="quotelev1">&gt; including the full path to them if necessary to remove ambiguity about
</span><br>
<span class="quotelev1">&gt; what compiler you're really using.
</span><br>
<p>It's using the right compiler.  configure's test program simply fails
<br>
with pgcc (but not with pgCC):
<br>
<p>&nbsp;&nbsp;# cat a.c
<br>
&nbsp;&nbsp;#include&lt;stddef.h&gt;
<br>
&nbsp;&nbsp;int
<br>
&nbsp;&nbsp;main ()
<br>
&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;struct foo {int a, b;}; size_t offset = offsetof(struct foo, b);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;return 0;
<br>
&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;# pgcc -DNO_PGI_OFFSET a.c
<br>
&nbsp;&nbsp;PGC-S-0037-Syntax error: Recovery attempted by deleting keyword struct (a.c: 5)
<br>
&nbsp;&nbsp;PGC-S-0039-Use of undeclared variable foo (a.c: 5)
<br>
&nbsp;&nbsp;PGC-S-0039-Use of undeclared variable b (a.c: 5)
<br>
&nbsp;&nbsp;PGC/x86-64 Linux 10.1-0: compilation completed with severe errors
<br>
&nbsp;&nbsp;# pgcc a.c
<br>
&nbsp;&nbsp;PGC-S-0037-Syntax error: Recovery attempted by deleting keyword struct (a.c: 5)
<br>
&nbsp;&nbsp;PGC-S-0039-Use of undeclared variable foo (a.c: 5)
<br>
&nbsp;&nbsp;PGC-S-0039-Use of undeclared variable b (a.c: 5)
<br>
&nbsp;&nbsp;PGC/x86-64 Linux 10.1-0: compilation completed with severe errors
<br>
&nbsp;&nbsp;[root_at_lv1fn tmp]# pgCC a.c
<br>
&nbsp;&nbsp;&quot;a.c&quot;, line 5: warning: variable &quot;offset&quot; was declared but never referenced
<br>
&nbsp;&nbsp;&nbsp;&nbsp;struct foo {int a, b;}; size_t offset = offsetof(struct foo, b);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;# pgcc -V
<br>
&nbsp;&nbsp;
<br>
&nbsp;&nbsp;pgcc 10.1-0 64-bit target on x86-64 Linux -tp k8-64e 
<br>
&nbsp;&nbsp;Copyright 1989-2000, The Portland Group, Inc.  All Rights Reserved.
<br>
&nbsp;&nbsp;Copyright 2000-2010, STMicroelectronics, Inc.  All Rights Reserved.
<br>
<p>I'll see if we can get a compiler update and report back.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13011.php">Pankatz, Klaus: "Re: [OMPI users] mpirun -np 4 hello_world; on a eight processor shared memory machine produces wrong output"</a>
<li><strong>Previous message:</strong> <a href="13009.php">Gijsbert Wiesenekker: "Re: [OMPI users] Questions about MPI_Isend"</a>
<li><strong>In reply to:</strong> <a href="13002.php">Prentice Bisbal: "Re: [OMPI users] PGI problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13015.php">Dave Love: "Re: [OMPI users] PGI problems"</a>
<li><strong>Reply:</strong> <a href="13015.php">Dave Love: "Re: [OMPI users] PGI problems"</a>
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
