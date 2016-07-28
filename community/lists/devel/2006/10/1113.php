<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Oct 13 07:44:52 2006" -->
<!-- isoreceived="20061013114452" -->
<!-- sent="Fri, 13 Oct 2006 13:44:47 +0200" -->
<!-- isosent="20061013114447" -->
<!-- name="Ralf Wildenhues" -->
<!-- email="Ralf.Wildenhues_at_[hidden]" -->
<!-- subject="[OMPI devel] mixing stdio and write?" -->
<!-- id="20061013114447.GA8843_at_iam.uni-bonn.de" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> Ralf Wildenhues (<em>Ralf.Wildenhues_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-10-13 07:44:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1114.php">Brian Barrett: "Re: [OMPI devel] mixing stdio and write?"</a>
<li><strong>Previous message:</strong> <a href="1112.php">Lisandro Dalcin: "[OMPI devel] Something broken using Persistent Requests"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1114.php">Brian Barrett: "Re: [OMPI devel] mixing stdio and write?"</a>
<li><strong>Reply:</strong> <a href="1114.php">Brian Barrett: "Re: [OMPI devel] mixing stdio and write?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Brian, all,
<br>
<p>| r12094 | brbarret | 2006-10-11 20:40:21 +0200 (Wed, 11 Oct 2006) | 11 lines
<br>
| Changed paths:
<br>
|    M /trunk/opal/util/output.c
<br>
| 
<br>
| Use write() instead of fprintf() for output to stdout / stderr.  Fixes an issue
<br>
| I was running into where if a string in the argument list contains a printf
<br>
| escape sequence, we would segfault.  In particular, I was using opal_output
<br>
| to print the environment and had something like:
<br>
| 
<br>
|   LESSOPEN=|/usr/bin/lesspipe.sh %s
<br>
| 
<br>
| in my environment.  So I called opal_output(0, &quot;%s&quot;, environ[i]) and
<br>
| got a segfault because the fprintf tried to expand the %s in the
<br>
| environment variable
<br>
<p>This looks weird to me.  Unless that function is the only one producing
<br>
output on stdout/stderr (or all of them do a flush after each output, or
<br>
you also flush before each output -- yuck), I think things may be
<br>
reordered.  Why not just use fputs instead to avoid the format string
<br>
vulnerability?
<br>
<p>Cheers,
<br>
Ralf
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1114.php">Brian Barrett: "Re: [OMPI devel] mixing stdio and write?"</a>
<li><strong>Previous message:</strong> <a href="1112.php">Lisandro Dalcin: "[OMPI devel] Something broken using Persistent Requests"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1114.php">Brian Barrett: "Re: [OMPI devel] mixing stdio and write?"</a>
<li><strong>Reply:</strong> <a href="1114.php">Brian Barrett: "Re: [OMPI devel] mixing stdio and write?"</a>
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
