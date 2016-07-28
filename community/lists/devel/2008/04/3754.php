<?
$subject_val = "Re: [OMPI devel] Fix for XLC + libtool issue";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 25 07:40:39 2008" -->
<!-- isoreceived="20080425114039" -->
<!-- sent="Fri, 25 Apr 2008 13:40:28 +0200" -->
<!-- isosent="20080425114028" -->
<!-- name="Ralf Wildenhues" -->
<!-- email="Ralf.Wildenhues_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Fix for XLC + libtool issue" -->
<!-- id="20080425114028.GA18187_at_ins.uni-bonn.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="B1D00D66-8E05-46A6-9D43-2555D7BA7E78_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Fix for XLC + libtool issue<br>
<strong>From:</strong> Ralf Wildenhues (<em>Ralf.Wildenhues_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-25 07:40:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3755.php">Jeff Squyres: "Re: [OMPI devel] Fix for XLC + libtool issue"</a>
<li><strong>Previous message:</strong> <a href="3753.php">Jeff Squyres: "Re: [OMPI devel] Fix for XLC + libtool issue"</a>
<li><strong>In reply to:</strong> <a href="3753.php">Jeff Squyres: "Re: [OMPI devel] Fix for XLC + libtool issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3755.php">Jeff Squyres: "Re: [OMPI devel] Fix for XLC + libtool issue"</a>
<li><strong>Reply:</strong> <a href="3755.php">Jeff Squyres: "Re: [OMPI devel] Fix for XLC + libtool issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff, all,
<br>
<p>* Jeff Squyres wrote on Fri, Apr 25, 2008 at 12:35:12PM CEST:
<br>
<span class="quotelev1">&gt; Good to hear that upgrading fixes this problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We actually already have an outstanding ticket to upgrade to 2.2.2
</span><br>
<span class="quotelev1">&gt; (<a href="https://svn.open-mpi.org/trac/ompi/ticket/1265">https://svn.open-mpi.org/trac/ompi/ticket/1265</a> ).  We were following
</span><br>
<span class="quotelev1">&gt; the Libtool development process closely and  
</span><br>
<span class="quotelev1">&gt; waiting for at least 2.2.2 (get past 2.2.0).
</span><br>
<p>2.2.2 is out since April 1st, and has seen a number of fixes since.  We
<br>
hope to do 2.2.4 soon, but of course if you try it out before then any
<br>
eventual remaining issues may be fixed before that.
<br>
<p>FWIW I've been building OMPI with development versions of autotools all
<br>
the time (but only tested on GNU/Linux/x86).
<br>
<p><span class="quotelev1">&gt; Additionally, Ralf W. recomends to us that we should also upgrade  
</span><br>
<span class="quotelev1">&gt; Autoconf to 2.62 or later.  I've been loosely watching that process;  
</span><br>
<span class="quotelev1">&gt; 2.62 requires a newer GNU m4 which we haven't yet decided if we want  
</span><br>
<span class="quotelev1">&gt; to require.
</span><br>
<p>Yes you need GNU m4 1.4.5 or newer.  m4 1.4.11 and Autoconf 2.62 speed
<br>
up auto* and config.status run time, respectively.  For the latter, we
<br>
used OMPI as test bed application, see the first set of timings in:
<br>
&lt;<a href="http://thread.gmane.org/gmane.comp.sysutils.autoconf.patches/3985">http://thread.gmane.org/gmane.comp.sysutils.autoconf.patches/3985</a>&gt;
<br>
<p>Cheers,
<br>
Ralf
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3755.php">Jeff Squyres: "Re: [OMPI devel] Fix for XLC + libtool issue"</a>
<li><strong>Previous message:</strong> <a href="3753.php">Jeff Squyres: "Re: [OMPI devel] Fix for XLC + libtool issue"</a>
<li><strong>In reply to:</strong> <a href="3753.php">Jeff Squyres: "Re: [OMPI devel] Fix for XLC + libtool issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3755.php">Jeff Squyres: "Re: [OMPI devel] Fix for XLC + libtool issue"</a>
<li><strong>Reply:</strong> <a href="3755.php">Jeff Squyres: "Re: [OMPI devel] Fix for XLC + libtool issue"</a>
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
