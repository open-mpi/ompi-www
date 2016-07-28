<? include("../../include/msg-header.inc"); ?>
<!-- received="Sun Jan 22 12:53:19 2006" -->
<!-- isoreceived="20060122175319" -->
<!-- sent="Sun, 22 Jan 2006 12:53:12 -0500" -->
<!-- isosent="20060122175312" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re:  ompi_get_version" -->
<!-- id="F0C989BE-80B1-4B92-A193-B85E3E4BFF11_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20060122073453.GA17373_at_iam.uni-bonn.de" -->
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
<strong>Date:</strong> 2006-01-22 12:53:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0708.php">Ralf Wildenhues: "Re:  ompi_get_version"</a>
<li><strong>Previous message:</strong> <a href="0706.php">Ralf Wildenhues: "Re:  ompi_get_version"</a>
<li><strong>In reply to:</strong> <a href="0706.php">Ralf Wildenhues: "Re:  ompi_get_version"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0708.php">Ralf Wildenhues: "Re:  ompi_get_version"</a>
<li><strong>Reply:</strong> <a href="0708.php">Ralf Wildenhues: "Re:  ompi_get_version"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 22, 2006, at 2:34 AM, Ralf Wildenhues wrote:
<br>
<p><span class="quotelev1">&gt; Hi Brian,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; * Brian Barrett wrote on Sat, Jan 21, 2006 at 11:53:41PM CET:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ralf, I was wondering if you could take a look at what I actually
</span><br>
<span class="quotelev2">&gt;&gt; committed (r8779) and let me know what you think.  It's mostly your
</span><br>
<span class="quotelev2">&gt;&gt; patch, but I rewrote a good chunk of the m4 macro to take better
</span><br>
<span class="quotelev2">&gt;&gt; advantage of m4 and ditch all the extra variables that get eval'ed at
</span><br>
<span class="quotelev2">&gt;&gt; the end so that a prefix can be passed.  We never pass in anything
</span><br>
<span class="quotelev2">&gt;&gt; other than a literal, so there's no problems with that.  Seems to be
</span><br>
<span class="quotelev2">&gt;&gt; a lot shorter, although slightly more complicated to understand.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes, much nicer indeed.  Seems fine to me.
</span><br>
<span class="quotelev1">&gt; I'd appreciate my name being spelled correctly, though.
</span><br>
<p>Sorry about that (said with very red face).  The svn history has been  
<br>
amended.
<br>
<p><span class="quotelev1">&gt; A mostly unrelated question, to fulfill this:  ;-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It's the thread that never ends... :)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Which systems' m4 is capable of translating the configury but does not
</span><br>
<span class="quotelev1">&gt; ignore unquoted [eval]?  (See comment in ompi_get_version.m4.)
</span><br>
<p>I was actually going to ask you about that -- that comment came from  
<br>
your original patch.  I was under the impression that AC actually  
<br>
required GNU m4 these days.  At least, Autoconf's configure complains  
<br>
quite loudly when I build on Solaris or AIX and forget to have a GNU  
<br>
m4 build in my path.  I've always operated under the assumption  
<br>
developers had to have GNU m4, as I couldn't see how they built AC  
<br>
otherwise.
<br>
<p>Brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0708.php">Ralf Wildenhues: "Re:  ompi_get_version"</a>
<li><strong>Previous message:</strong> <a href="0706.php">Ralf Wildenhues: "Re:  ompi_get_version"</a>
<li><strong>In reply to:</strong> <a href="0706.php">Ralf Wildenhues: "Re:  ompi_get_version"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0708.php">Ralf Wildenhues: "Re:  ompi_get_version"</a>
<li><strong>Reply:</strong> <a href="0708.php">Ralf Wildenhues: "Re:  ompi_get_version"</a>
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
