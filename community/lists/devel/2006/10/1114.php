<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Oct 13 10:57:47 2006" -->
<!-- isoreceived="20061013145747" -->
<!-- sent="Fri, 13 Oct 2006 08:56:36 -0600" -->
<!-- isosent="20061013145636" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] mixing stdio and write?" -->
<!-- id="453EC6D4-A9C0-455D-BB43-2BBA2FD52803_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20061013114447.GA8843_at_iam.uni-bonn.de" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-10-13 10:56:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1115.php">Brian Barrett: "[OMPI devel] configure changes (ooops!)"</a>
<li><strong>Previous message:</strong> <a href="1113.php">Ralf Wildenhues: "[OMPI devel] mixing stdio and write?"</a>
<li><strong>In reply to:</strong> <a href="1113.php">Ralf Wildenhues: "[OMPI devel] mixing stdio and write?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Because I'm silly.  I shall make it so - Thanks!
<br>
<p>Brian
<br>
<p>On Oct 13, 2006, at 5:44 AM, Ralf Wildenhues wrote:
<br>
<p><span class="quotelev1">&gt; Hello Brian, all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; | r12094 | brbarret | 2006-10-11 20:40:21 +0200 (Wed, 11 Oct 2006)  
</span><br>
<span class="quotelev1">&gt; | 11 lines
</span><br>
<span class="quotelev1">&gt; | Changed paths:
</span><br>
<span class="quotelev1">&gt; |    M /trunk/opal/util/output.c
</span><br>
<span class="quotelev1">&gt; |
</span><br>
<span class="quotelev1">&gt; | Use write() instead of fprintf() for output to stdout / stderr.   
</span><br>
<span class="quotelev1">&gt; Fixes an issue
</span><br>
<span class="quotelev1">&gt; | I was running into where if a string in the argument list  
</span><br>
<span class="quotelev1">&gt; contains a printf
</span><br>
<span class="quotelev1">&gt; | escape sequence, we would segfault.  In particular, I was using  
</span><br>
<span class="quotelev1">&gt; opal_output
</span><br>
<span class="quotelev1">&gt; | to print the environment and had something like:
</span><br>
<span class="quotelev1">&gt; |
</span><br>
<span class="quotelev1">&gt; |   LESSOPEN=|/usr/bin/lesspipe.sh %s
</span><br>
<span class="quotelev1">&gt; |
</span><br>
<span class="quotelev1">&gt; | in my environment.  So I called opal_output(0, &quot;%s&quot;, environ[i]) and
</span><br>
<span class="quotelev1">&gt; | got a segfault because the fprintf tried to expand the %s in the
</span><br>
<span class="quotelev1">&gt; | environment variable
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This looks weird to me.  Unless that function is the only one  
</span><br>
<span class="quotelev1">&gt; producing
</span><br>
<span class="quotelev1">&gt; output on stdout/stderr (or all of them do a flush after each  
</span><br>
<span class="quotelev1">&gt; output, or
</span><br>
<span class="quotelev1">&gt; you also flush before each output -- yuck), I think things may be
</span><br>
<span class="quotelev1">&gt; reordered.  Why not just use fputs instead to avoid the format string
</span><br>
<span class="quotelev1">&gt; vulnerability?
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1115.php">Brian Barrett: "[OMPI devel] configure changes (ooops!)"</a>
<li><strong>Previous message:</strong> <a href="1113.php">Ralf Wildenhues: "[OMPI devel] mixing stdio and write?"</a>
<li><strong>In reply to:</strong> <a href="1113.php">Ralf Wildenhues: "[OMPI devel] mixing stdio and write?"</a>
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
