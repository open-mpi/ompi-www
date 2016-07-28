<?
$subject_val = "Re: [OMPI devel] Fix for XLC + libtool issue";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 25 07:54:48 2008" -->
<!-- isoreceived="20080425115448" -->
<!-- sent="Fri, 25 Apr 2008 07:54:39 -0400" -->
<!-- isosent="20080425115439" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Fix for XLC + libtool issue" -->
<!-- id="7012B9BC-85F5-4A38-B5D9-9BA95A5768BA_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20080425114028.GA18187_at_ins.uni-bonn.de" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-25 07:54:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3756.php">Ralf Wildenhues: "Re: [OMPI devel] Fix for XLC + libtool issue"</a>
<li><strong>Previous message:</strong> <a href="3754.php">Ralf Wildenhues: "Re: [OMPI devel] Fix for XLC + libtool issue"</a>
<li><strong>In reply to:</strong> <a href="3754.php">Ralf Wildenhues: "Re: [OMPI devel] Fix for XLC + libtool issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3756.php">Ralf Wildenhues: "Re: [OMPI devel] Fix for XLC + libtool issue"</a>
<li><strong>Reply:</strong> <a href="3756.php">Ralf Wildenhues: "Re: [OMPI devel] Fix for XLC + libtool issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 25, 2008, at 7:40 AM, Ralf Wildenhues wrote:
<br>
<p><span class="quotelev2">&gt;&gt; We actually already have an outstanding ticket to upgrade to 2.2.2
</span><br>
<span class="quotelev2">&gt;&gt; (<a href="https://svn.open-mpi.org/trac/ompi/ticket/1265">https://svn.open-mpi.org/trac/ompi/ticket/1265</a> ).  We were following
</span><br>
<span class="quotelev2">&gt;&gt; the Libtool development process closely and
</span><br>
<span class="quotelev2">&gt;&gt; waiting for at least 2.2.2 (get past 2.2.0).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2.2.2 is out since April 1st, and has seen a number of fixes since.   
</span><br>
<span class="quotelev1">&gt; We
</span><br>
<span class="quotelev1">&gt; hope to do 2.2.4 soon, but of course if you try it out before then any
</span><br>
<span class="quotelev1">&gt; eventual remaining issues may be fixed before that.
</span><br>
<p>Sorry -- I didn't mean to imply that we hadn't noticed that 2.2.2 had  
<br>
been released.  I was trying to say that LT 2.2.2 was our gating  
<br>
factor and that has now been met.  We have an outstanding ticket to  
<br>
upgrade the automated process that builds the official OMPI tarballs  
<br>
(we have a strictly controlled process that runs in a specific  
<br>
environment to make official OMPI tarballs -- that's where the upgrade  
<br>
needs to occur); it just hasn't happened yet.  It's marked as a  
<br>
blocker for the OMPI v1.3 release.
<br>
<p>I have been using 2.2.2 on my development cluster since shortly after  
<br>
it was released (I think other developers are, too).
<br>
<p><span class="quotelev2">&gt;&gt; Additionally, Ralf W. recomends to us that we should also upgrade
</span><br>
<span class="quotelev2">&gt;&gt; Autoconf to 2.62 or later.  I've been loosely watching that process;
</span><br>
<span class="quotelev2">&gt;&gt; 2.62 requires a newer GNU m4 which we haven't yet decided if we want
</span><br>
<span class="quotelev2">&gt;&gt; to require.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes you need GNU m4 1.4.5 or newer.  m4 1.4.11 and Autoconf 2.62 speed
</span><br>
<span class="quotelev1">&gt; up auto* and config.status run time, respectively.  For the latter, we
</span><br>
<span class="quotelev1">&gt; used OMPI as test bed application, see the first set of timings in:
</span><br>
<span class="quotelev1">&gt; &lt;<a href="http://thread.gmane.org/gmane.comp.sysutils.autoconf.patches/3985">http://thread.gmane.org/gmane.comp.sysutils.autoconf.patches/3985</a>&gt;
</span><br>
<p><p>Wow -- those timings are impressive!  Quoting that URL (OMPI is [1]):
<br>
<p>-----
<br>
For example[1], in a large package with 871 substituted variables, of  
<br>
which 2*136 are produced by AM_CONDITIONAL, and roughly 210 Makefiles.  
<br>
'./config.status' execution for those Makefiles (no headers, no  
<br>
depfiles):
<br>
- with Automake-1.9.6: 78.54user 9.32system 1:38.60elapsed 89%CPU  
<br>
(0avgtext+0avgdata 0maxresident)k 0inputs+0outputs (0major 
<br>
+2551217minor)pagefaults 0swaps
<br>
- with Automake 1.10 (no superfluous $(*_TRUE)/$(*_FALSE) settings):  
<br>
56.11user 8.31system 1:16.51elapsed 84%CPU (0avgtext+0avgdata  
<br>
0maxresident)k 0inputs+0outputs (0major+2284709minor)pagefaults 0swaps
<br>
- additionally with the Autoconf patch below: 11.24user 3.62system  
<br>
0:21.89elapsed 67%CPU (0avgtext+0avgdata 0maxresident)k 0inputs 
<br>
+0outputs (0major+935332minor)pagefaults 0swaps
<br>
-----
<br>
<p>Is the &quot;with the Autoconf patch below&quot; equivalent to AM 1.10 + AC 2.62?
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3756.php">Ralf Wildenhues: "Re: [OMPI devel] Fix for XLC + libtool issue"</a>
<li><strong>Previous message:</strong> <a href="3754.php">Ralf Wildenhues: "Re: [OMPI devel] Fix for XLC + libtool issue"</a>
<li><strong>In reply to:</strong> <a href="3754.php">Ralf Wildenhues: "Re: [OMPI devel] Fix for XLC + libtool issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3756.php">Ralf Wildenhues: "Re: [OMPI devel] Fix for XLC + libtool issue"</a>
<li><strong>Reply:</strong> <a href="3756.php">Ralf Wildenhues: "Re: [OMPI devel] Fix for XLC + libtool issue"</a>
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
