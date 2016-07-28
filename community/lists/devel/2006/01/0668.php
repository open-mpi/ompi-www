<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jan 11 09:29:53 2006" -->
<!-- isoreceived="20060111142953" -->
<!-- sent="Wed, 11 Jan 2006 09:30:25 -0500" -->
<!-- isosent="20060111143025" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re:  configure warning" -->
<!-- id="BCE86956-5C3E-4A76-BE23-7D704B01DD6C_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20060111074714.GB31819_at_iam.uni-bonn.de" -->
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
<strong>Date:</strong> 2006-01-11 09:30:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0669.php">Tim S. Woodall: "Re:  while-loop around opal_condition_wait"</a>
<li><strong>Previous message:</strong> <a href="0667.php">Rainer Keller: "while-loop around opal_condition_wait"</a>
<li><strong>In reply to:</strong> <a href="0666.php">Ralf Wildenhues: "Re:  configure warning"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ok, my bad.  I'll do this for OMPI tonight.
<br>
<p>Brian
<br>
<p>On Jan 11, 2006, at 2:47 AM, Ralf Wildenhues wrote:
<br>
<p><span class="quotelev1">&gt; * Brian Barrett wrote on Wed, Jan 11, 2006 at 05:28:55AM CET:
</span><br>
<span class="quotelev2">&gt;&gt; On Jan 10, 2006, at 12:15 PM, Ralf Wildenhues wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; * Greg Watson wrote on Tue, Jan 10, 2006 at 05:58:35PM CET:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Running configure from 1.0.2a3 on OSX 10.4.3:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; configure: WARNING: net/if.h: present but cannot be compiled
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; configure: WARNING: net/if.h:     check for missing prerequisite
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; headers?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Yes.  The test is broken.  You need to
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   #include &lt;sys/socket.h&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; first.  See
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   info Autoconf &quot;Header Portability&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; under `net/if.h' for a complete description.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; But as I understand it, this isn't anything we can do anything about,
</span><br>
<span class="quotelev2">&gt;&gt; right?  I mean, other than report it to the AC developers?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Erm, no.  Quoting the complete description:
</span><br>
<span class="quotelev1">&gt; | `net/if.h'
</span><br>
<span class="quotelev1">&gt; |      On Darwin, this file requires that `sys/socket.h' be included
</span><br>
<span class="quotelev1">&gt; |      beforehand.  One should run:
</span><br>
<span class="quotelev1">&gt; |
</span><br>
<span class="quotelev1">&gt; |           AC_CHECK_HEADERS([sys/socket.h])
</span><br>
<span class="quotelev1">&gt; |           AC_CHECK_HEADERS([net/if.h], [], [],
</span><br>
<span class="quotelev1">&gt; |           [#include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; |           #if STDC_HEADERS
</span><br>
<span class="quotelev1">&gt; |           # include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev1">&gt; |           # include &lt;stddef.h&gt;
</span><br>
<span class="quotelev1">&gt; |           #else
</span><br>
<span class="quotelev1">&gt; |           # if HAVE_STDLIB_H
</span><br>
<span class="quotelev1">&gt; |           #  include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev1">&gt; |           # endif
</span><br>
<span class="quotelev1">&gt; |           #endif
</span><br>
<span class="quotelev1">&gt; |           #if HAVE_SYS_SOCKET_H
</span><br>
<span class="quotelev1">&gt; |           # include &lt;sys/socket.h&gt;
</span><br>
<span class="quotelev1">&gt; |           #endif
</span><br>
<span class="quotelev1">&gt; |           ])
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Do exactly as told (in both configure.ac/your macro, and also use the
</span><br>
<span class="quotelev1">&gt; header order in the code that uses net/if.h).  If the error persists,
</span><br>
<span class="quotelev1">&gt; _then_ there is reason to report an Autoconf bug.
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
<li><strong>Next message:</strong> <a href="0669.php">Tim S. Woodall: "Re:  while-loop around opal_condition_wait"</a>
<li><strong>Previous message:</strong> <a href="0667.php">Rainer Keller: "while-loop around opal_condition_wait"</a>
<li><strong>In reply to:</strong> <a href="0666.php">Ralf Wildenhues: "Re:  configure warning"</a>
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
