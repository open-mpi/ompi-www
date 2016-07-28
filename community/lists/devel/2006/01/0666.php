<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jan 11 02:47:22 2006" -->
<!-- isoreceived="20060111074722" -->
<!-- sent="Wed, 11 Jan 2006 08:47:14 +0100" -->
<!-- isosent="20060111074714" -->
<!-- name="Ralf Wildenhues" -->
<!-- email="Ralf.Wildenhues_at_[hidden]" -->
<!-- subject="Re:  configure warning" -->
<!-- id="20060111074714.GB31819_at_iam.uni-bonn.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="A231A98A-72FD-489E-9DD4-A80F215A536D_at_open-mpi.org" -->
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
<strong>Date:</strong> 2006-01-11 02:47:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0667.php">Rainer Keller: "while-loop around opal_condition_wait"</a>
<li><strong>Previous message:</strong> <a href="0665.php">Brian Barrett: "Re:  configure warning"</a>
<li><strong>In reply to:</strong> <a href="0665.php">Brian Barrett: "Re:  configure warning"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0668.php">Brian Barrett: "Re:  configure warning"</a>
<li><strong>Reply:</strong> <a href="0668.php">Brian Barrett: "Re:  configure warning"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
* Brian Barrett wrote on Wed, Jan 11, 2006 at 05:28:55AM CET:
<br>
<span class="quotelev1">&gt; On Jan 10, 2006, at 12:15 PM, Ralf Wildenhues wrote:
</span><br>
<span class="quotelev2">&gt; &gt; * Greg Watson wrote on Tue, Jan 10, 2006 at 05:58:35PM CET:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Running configure from 1.0.2a3 on OSX 10.4.3:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; configure: WARNING: net/if.h: present but cannot be compiled
</span><br>
<span class="quotelev3">&gt; &gt;&gt; configure: WARNING: net/if.h:     check for missing prerequisite
</span><br>
<span class="quotelev3">&gt; &gt;&gt; headers?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Yes.  The test is broken.  You need to
</span><br>
<span class="quotelev2">&gt; &gt;   #include &lt;sys/socket.h&gt;
</span><br>
<span class="quotelev2">&gt; &gt; first.  See
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   info Autoconf &quot;Header Portability&quot;
</span><br>
<span class="quotelev2">&gt; &gt; under `net/if.h' for a complete description.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But as I understand it, this isn't anything we can do anything about,  
</span><br>
<span class="quotelev1">&gt; right?  I mean, other than report it to the AC developers?
</span><br>
<p>Erm, no.  Quoting the complete description:
<br>
| `net/if.h'
<br>
|      On Darwin, this file requires that `sys/socket.h' be included
<br>
|      beforehand.  One should run:
<br>
| 
<br>
|           AC_CHECK_HEADERS([sys/socket.h])
<br>
|           AC_CHECK_HEADERS([net/if.h], [], [],
<br>
|           [#include &lt;stdio.h&gt;
<br>
|           #if STDC_HEADERS
<br>
|           # include &lt;stdlib.h&gt;
<br>
|           # include &lt;stddef.h&gt;
<br>
|           #else
<br>
|           # if HAVE_STDLIB_H
<br>
|           #  include &lt;stdlib.h&gt;
<br>
|           # endif
<br>
|           #endif
<br>
|           #if HAVE_SYS_SOCKET_H
<br>
|           # include &lt;sys/socket.h&gt;
<br>
|           #endif
<br>
|           ])
<br>
<p>Do exactly as told (in both configure.ac/your macro, and also use the
<br>
header order in the code that uses net/if.h).  If the error persists,
<br>
_then_ there is reason to report an Autoconf bug.
<br>
<p>Cheers,
<br>
Ralf
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0667.php">Rainer Keller: "while-loop around opal_condition_wait"</a>
<li><strong>Previous message:</strong> <a href="0665.php">Brian Barrett: "Re:  configure warning"</a>
<li><strong>In reply to:</strong> <a href="0665.php">Brian Barrett: "Re:  configure warning"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0668.php">Brian Barrett: "Re:  configure warning"</a>
<li><strong>Reply:</strong> <a href="0668.php">Brian Barrett: "Re:  configure warning"</a>
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
