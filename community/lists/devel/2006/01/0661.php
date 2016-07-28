<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jan 10 12:16:00 2006" -->
<!-- isoreceived="20060110171600" -->
<!-- sent="Tue, 10 Jan 2006 18:15:50 +0100" -->
<!-- isosent="20060110171550" -->
<!-- name="Ralf Wildenhues" -->
<!-- email="Ralf.Wildenhues_at_[hidden]" -->
<!-- subject="Re:  configure warning" -->
<!-- id="20060110171550.GA11476_at_iam.uni-bonn.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="DD429ADB-4532-4DF6-9D5A-E26DC656CA33_at_lanl.gov" -->
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
<strong>Date:</strong> 2006-01-10 12:15:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0662.php">Tim Prins: "Intel tests"</a>
<li><strong>Previous message:</strong> <a href="0660.php">Greg Watson: "configure warning"</a>
<li><strong>In reply to:</strong> <a href="0660.php">Greg Watson: "configure warning"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0665.php">Brian Barrett: "Re:  configure warning"</a>
<li><strong>Reply:</strong> <a href="0665.php">Brian Barrett: "Re:  configure warning"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
* Greg Watson wrote on Tue, Jan 10, 2006 at 05:58:35PM CET:
<br>
<span class="quotelev1">&gt; Running configure from 1.0.2a3 on OSX 10.4.3:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; configure: WARNING: net/if.h: present but cannot be compiled
</span><br>
<span class="quotelev1">&gt; configure: WARNING: net/if.h:     check for missing prerequisite  
</span><br>
<span class="quotelev1">&gt; headers?
</span><br>
<p>Yes.  The test is broken.  You need to
<br>
&nbsp;&nbsp;#include &lt;sys/socket.h&gt;
<br>
first.  See
<br>
<p>&nbsp;&nbsp;info Autoconf &quot;Header Portability&quot;
<br>
under `net/if.h' for a complete description.
<br>
<p>Cheers,
<br>
Ralf
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0662.php">Tim Prins: "Intel tests"</a>
<li><strong>Previous message:</strong> <a href="0660.php">Greg Watson: "configure warning"</a>
<li><strong>In reply to:</strong> <a href="0660.php">Greg Watson: "configure warning"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0665.php">Brian Barrett: "Re:  configure warning"</a>
<li><strong>Reply:</strong> <a href="0665.php">Brian Barrett: "Re:  configure warning"</a>
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
