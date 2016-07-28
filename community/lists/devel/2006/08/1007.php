<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Aug 21 09:06:24 2006" -->
<!-- isoreceived="20060821130624" -->
<!-- sent="Mon, 21 Aug 2006 07:06:22 -0600" -->
<!-- isosent="20060821130622" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OpenMPI not conforming with the C90 spec?" -->
<!-- id="C10F0BEE.3F75%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20060821125822.GK13341_at_iam.uni-bonn.de" -->
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
<strong>From:</strong> Ralph H Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-08-21 09:06:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1008.php">Brian Barrett: "Re: [OMPI devel] exit declaration in configure tests"</a>
<li><strong>Previous message:</strong> <a href="1006.php">Ralf Wildenhues: "Re: [OMPI devel] OpenMPI not conforming with the C90 spec?"</a>
<li><strong>In reply to:</strong> <a href="1006.php">Ralf Wildenhues: "Re: [OMPI devel] OpenMPI not conforming with the C90 spec?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1003.php">Jonathan Underwood: "Re: [OMPI devel] OpenMPI not conforming with the C90 spec?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 8/21/06 6:58 AM, &quot;Ralf Wildenhues&quot; &lt;Ralf.Wildenhues_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; * Ralph H Castain wrote on Mon, Aug 21, 2006 at 02:39:51PM CEST:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; It sounds, therefore, like we are now C99 compliant and no longer C90
</span><br>
<span class="quotelev2">&gt;&gt; compliant at all?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Well, a compiler supporting C90 plus 'long long' as an extension would
</span><br>
<span class="quotelev1">&gt; still be ok.  Surely, that's not &quot;strictly C90&quot;.  But from glancing at
</span><br>
<span class="quotelev1">&gt; the mpi.h file in my build tree, some declarations are commented out if
</span><br>
<span class="quotelev1">&gt; HAVE_LONG_LONG is not set.  Your comments indicate that things still
</span><br>
<span class="quotelev1">&gt; would not work with a strict C90 compiler.
</span><br>
<p>True - we removed many of the HAVE_INT64 checks from within the code base
<br>
and hardcode int64_t declarations. So if int64_t is not defined and
<br>
supported (and I don't believe strict C90 does), we will barf during
<br>
compile.
<br>
<p>Don't think it's a really big deal - just noting that the documentation may
<br>
require updating to reflect the new reality.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I don't know how big a deal that is, but if true it is something possibly
</span><br>
<span class="quotelev2">&gt;&gt; worth noting on our web site and in our release notes. The code will
</span><br>
<span class="quotelev2">&gt;&gt; definitely NOT compile unless int64_t is defined and supported.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think for Solaris 2.5.1 and Tru64 4.0, you would need a replacement
</span><br>
<span class="quotelev1">&gt; definition, but I guess those systems aren't targets for OpenMPI either.
</span><br>
<p>No idea - never heard it discussed, to be honest.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; PS to Ralf: actually, quite a few systems exist today that do not support
</span><br>
<span class="quotelev2">&gt;&gt; long long or int64_t. The majority of computers in the world, in fact, do
</span><br>
<span class="quotelev2">&gt;&gt; not do so - they are in embedded systems.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Right.  None of them is fully C99 compliant.  AFAIK, some allow (slow!)
</span><br>
<span class="quotelev1">&gt; software emulations for long long types.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; We decided that we were tasked
</span><br>
<span class="quotelev2">&gt;&gt; with supporting high-performance computing systems instead, and those are
</span><br>
<span class="quotelev2">&gt;&gt; now built almost exclusively from systems that DO support such structures.
</span><br>
<span class="quotelev2">&gt;&gt; Just a point of correctness... :-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sure.  For practical matters, I would always go for C99 + extensions (as
</span><br>
<span class="quotelev1">&gt; in gcc's -std=gnu99; you could use AC_PROG_CC_STDC from Autoconf-2.60
</span><br>
<span class="quotelev1">&gt; for some sane choices).
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
<li><strong>Next message:</strong> <a href="1008.php">Brian Barrett: "Re: [OMPI devel] exit declaration in configure tests"</a>
<li><strong>Previous message:</strong> <a href="1006.php">Ralf Wildenhues: "Re: [OMPI devel] OpenMPI not conforming with the C90 spec?"</a>
<li><strong>In reply to:</strong> <a href="1006.php">Ralf Wildenhues: "Re: [OMPI devel] OpenMPI not conforming with the C90 spec?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1003.php">Jonathan Underwood: "Re: [OMPI devel] OpenMPI not conforming with the C90 spec?"</a>
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
