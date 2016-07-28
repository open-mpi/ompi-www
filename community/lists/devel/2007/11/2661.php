<?
$subject_val = "Re: [OMPI devel] initial SCTP BTL commit comments?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 21 07:52:56 2007" -->
<!-- isoreceived="20071121125256" -->
<!-- sent="Wed, 21 Nov 2007 07:52:50 -0500" -->
<!-- isosent="20071121125250" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] initial SCTP BTL commit comments?" -->
<!-- id="6A48625A-C890-49A3-8CAE-6E4514E7AF80_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="b89c3c270711201046hce84d4et365fec0b2e40867_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] initial SCTP BTL commit comments?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-21 07:52:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2662.php">Shipman, Galen M.: "Re: [OMPI devel] ORTE process name,, nodeid.."</a>
<li><strong>Previous message:</strong> <a href="2660.php">Brad Penoff: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r16723"</a>
<li><strong>In reply to:</strong> <a href="2656.php">Brad Penoff: "Re: [OMPI devel] initial SCTP BTL commit comments?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2007/12/2857.php">Brad Penoff: "Re: [OMPI devel] initial SCTP BTL commit comments?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 20, 2007, at 1:46 PM, Brad Penoff wrote:
<br>
<p><span class="quotelev2">&gt;&gt; More specifically: can you have your configure.m4 script check to see
</span><br>
<span class="quotelev2">&gt;&gt; if the current system a) supports SCTP,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes, the current configure.m4 does this by making use of  
</span><br>
<span class="quotelev1">&gt; OMPI_CHECK_PACKAGE.
</span><br>
<p>Good.
<br>
<p><span class="quotelev2">&gt;&gt; and b) if yes, if it supports 1-to-many?  This kind of checking  
</span><br>
<span class="quotelev2">&gt;&gt; would theoretically
</span><br>
<span class="quotelev2">&gt;&gt; allow running on Solaris
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is a little more tricky.
</span><br>
<span class="quotelev1">&gt; [snip]
</span><br>
<span class="quotelev1">&gt; Hmm, I suppose you're right.  We could just make Solaris set the MCA
</span><br>
<span class="quotelev1">&gt; variable btl_sctp_if_11 to 1 in order to use the 1-to-1 mode to avoid
</span><br>
<span class="quotelev1">&gt; this mess.  How would one change the default of an MCA variable in an
</span><br>
<span class="quotelev1">&gt; autoconf rule?  I really hope there's a way to keep one-to-many the
</span><br>
<span class="quotelev1">&gt; default as often as possible (if not always).
</span><br>
<p>Basically, if you can make a short C program that tests the behavior,  
<br>
then AC can do it.  Specifically, AC can compile/link/run a program  
<br>
and you can look at the result.  The only hitch in this scheme is for  
<br>
cross-compiling environments (because you can compile/link, but you  
<br>
can't run) -- but in those situations, AC &quot;knows&quot; that it's cross- 
<br>
compiling and therefore you can set some default value.
<br>
<p>As for setting an MCA param based on the result of an AC test, we  
<br>
typically use AC_DEFINE to #define some value based on the result of  
<br>
the test.  Then in the C code, set the default value of that MCA param  
<br>
to be the #define macro.
<br>
<p>Note one philosophy in the OMPI code base: we *always* AC_DEFINE  
<br>
macros, even for logical values.  See the last point on (I just added  
<br>
it):
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/wiki/CodingStyle">https://svn.open-mpi.org/trac/ompi/wiki/CodingStyle</a>
<br>
<p><span class="quotelev1">&gt; The SCTP API is typically within it's own library called libsctp.
</span><br>
<span class="quotelev1">&gt; However, in FreeBSD 7, the API is within libc.  So say we're looking
</span><br>
<span class="quotelev1">&gt; for something like sctp_recvmsg (as we do now)... what is the best way
</span><br>
<span class="quotelev1">&gt; to structure an autoconf rule to look for this in either libsctp or
</span><br>
<span class="quotelev1">&gt; libc, and to not complain if libsctp doesn't exist?  Should I just
</span><br>
<span class="quotelev1">&gt; call OMPI_CHECK_PACKAGE once with libsctp and if that fails then call
</span><br>
<span class="quotelev1">&gt; OMPI_CHECK_PACKAGE again with libc?
</span><br>
<p>Ick.  OMPI_CHECK_PACKAGE is currently not well setup a) to check  
<br>
multiple libraries or b) be called more than once for the same  
<br>
component.  This will take some thought, but I cannot do it until  
<br>
after the US holiday.  :-\
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
<li><strong>Next message:</strong> <a href="2662.php">Shipman, Galen M.: "Re: [OMPI devel] ORTE process name,, nodeid.."</a>
<li><strong>Previous message:</strong> <a href="2660.php">Brad Penoff: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r16723"</a>
<li><strong>In reply to:</strong> <a href="2656.php">Brad Penoff: "Re: [OMPI devel] initial SCTP BTL commit comments?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2007/12/2857.php">Brad Penoff: "Re: [OMPI devel] initial SCTP BTL commit comments?"</a>
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
