<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Aug 21 08:58:25 2006" -->
<!-- isoreceived="20060821125825" -->
<!-- sent="Mon, 21 Aug 2006 14:58:22 +0200" -->
<!-- isosent="20060821125822" -->
<!-- name="Ralf Wildenhues" -->
<!-- email="Ralf.Wildenhues_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OpenMPI not conforming with the C90 spec?" -->
<!-- id="20060821125822.GK13341_at_iam.uni-bonn.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="C10F05B7.3F70%rhc_at_lanl.gov" -->
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
<strong>Date:</strong> 2006-08-21 08:58:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1007.php">Ralph H Castain: "Re: [OMPI devel] OpenMPI not conforming with the C90 spec?"</a>
<li><strong>Previous message:</strong> <a href="1005.php">Ralph H Castain: "Re: [OMPI devel] OpenMPI not conforming with the C90 spec?"</a>
<li><strong>In reply to:</strong> <a href="1005.php">Ralph H Castain: "Re: [OMPI devel] OpenMPI not conforming with the C90 spec?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1007.php">Ralph H Castain: "Re: [OMPI devel] OpenMPI not conforming with the C90 spec?"</a>
<li><strong>Reply:</strong> <a href="1007.php">Ralph H Castain: "Re: [OMPI devel] OpenMPI not conforming with the C90 spec?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
* Ralph H Castain wrote on Mon, Aug 21, 2006 at 02:39:51PM CEST:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It sounds, therefore, like we are now C99 compliant and no longer C90
</span><br>
<span class="quotelev1">&gt; compliant at all?
</span><br>
<p>Well, a compiler supporting C90 plus 'long long' as an extension would
<br>
still be ok.  Surely, that's not &quot;strictly C90&quot;.  But from glancing at
<br>
the mpi.h file in my build tree, some declarations are commented out if
<br>
HAVE_LONG_LONG is not set.  Your comments indicate that things still
<br>
would not work with a strict C90 compiler.
<br>
<p><span class="quotelev1">&gt; I don't know how big a deal that is, but if true it is something possibly
</span><br>
<span class="quotelev1">&gt; worth noting on our web site and in our release notes. The code will
</span><br>
<span class="quotelev1">&gt; definitely NOT compile unless int64_t is defined and supported.
</span><br>
<p>I think for Solaris 2.5.1 and Tru64 4.0, you would need a replacement
<br>
definition, but I guess those systems aren't targets for OpenMPI either.
<br>
<p><span class="quotelev1">&gt; PS to Ralf: actually, quite a few systems exist today that do not support
</span><br>
<span class="quotelev1">&gt; long long or int64_t. The majority of computers in the world, in fact, do
</span><br>
<span class="quotelev1">&gt; not do so - they are in embedded systems.
</span><br>
<p>Right.  None of them is fully C99 compliant.  AFAIK, some allow (slow!)
<br>
software emulations for long long types.
<br>
<p><span class="quotelev1">&gt; We decided that we were tasked
</span><br>
<span class="quotelev1">&gt; with supporting high-performance computing systems instead, and those are
</span><br>
<span class="quotelev1">&gt; now built almost exclusively from systems that DO support such structures.
</span><br>
<span class="quotelev1">&gt; Just a point of correctness... :-)
</span><br>
<p>Sure.  For practical matters, I would always go for C99 + extensions (as
<br>
in gcc's -std=gnu99; you could use AC_PROG_CC_STDC from Autoconf-2.60
<br>
for some sane choices).
<br>
<p>Cheers,
<br>
Ralf
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1007.php">Ralph H Castain: "Re: [OMPI devel] OpenMPI not conforming with the C90 spec?"</a>
<li><strong>Previous message:</strong> <a href="1005.php">Ralph H Castain: "Re: [OMPI devel] OpenMPI not conforming with the C90 spec?"</a>
<li><strong>In reply to:</strong> <a href="1005.php">Ralph H Castain: "Re: [OMPI devel] OpenMPI not conforming with the C90 spec?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1007.php">Ralph H Castain: "Re: [OMPI devel] OpenMPI not conforming with the C90 spec?"</a>
<li><strong>Reply:</strong> <a href="1007.php">Ralph H Castain: "Re: [OMPI devel] OpenMPI not conforming with the C90 spec?"</a>
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
