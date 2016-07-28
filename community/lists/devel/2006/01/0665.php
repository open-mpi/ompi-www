<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jan 10 23:29:02 2006" -->
<!-- isoreceived="20060111042902" -->
<!-- sent="Tue, 10 Jan 2006 23:28:55 -0500" -->
<!-- isosent="20060111042855" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re:  configure warning" -->
<!-- id="A231A98A-72FD-489E-9DD4-A80F215A536D_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20060110171550.GA11476_at_iam.uni-bonn.de" -->
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
<strong>Date:</strong> 2006-01-10 23:28:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0666.php">Ralf Wildenhues: "Re:  configure warning"</a>
<li><strong>Previous message:</strong> <a href="0664.php">Tim Prins: "Re:  Intel tests"</a>
<li><strong>In reply to:</strong> <a href="0661.php">Ralf Wildenhues: "Re:  configure warning"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0666.php">Ralf Wildenhues: "Re:  configure warning"</a>
<li><strong>Reply:</strong> <a href="0666.php">Ralf Wildenhues: "Re:  configure warning"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 10, 2006, at 12:15 PM, Ralf Wildenhues wrote:
<br>
<p><span class="quotelev1">&gt; * Greg Watson wrote on Tue, Jan 10, 2006 at 05:58:35PM CET:
</span><br>
<span class="quotelev2">&gt;&gt; Running configure from 1.0.2a3 on OSX 10.4.3:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; configure: WARNING: net/if.h: present but cannot be compiled
</span><br>
<span class="quotelev2">&gt;&gt; configure: WARNING: net/if.h:     check for missing prerequisite
</span><br>
<span class="quotelev2">&gt;&gt; headers?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes.  The test is broken.  You need to
</span><br>
<span class="quotelev1">&gt;   #include &lt;sys/socket.h&gt;
</span><br>
<span class="quotelev1">&gt; first.  See
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   info Autoconf &quot;Header Portability&quot;
</span><br>
<span class="quotelev1">&gt; under `net/if.h' for a complete description.
</span><br>
<p>But as I understand it, this isn't anything we can do anything about,  
<br>
right?  I mean, other than report it to the AC developers?
<br>
<p>Brian
<br>
<p><pre>
-- 
   Brian Barrett
   Open MPI developer
   <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0666.php">Ralf Wildenhues: "Re:  configure warning"</a>
<li><strong>Previous message:</strong> <a href="0664.php">Tim Prins: "Re:  Intel tests"</a>
<li><strong>In reply to:</strong> <a href="0661.php">Ralf Wildenhues: "Re:  configure warning"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0666.php">Ralf Wildenhues: "Re:  configure warning"</a>
<li><strong>Reply:</strong> <a href="0666.php">Ralf Wildenhues: "Re:  configure warning"</a>
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
