<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r26077 (fwd)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar  2 11:23:17 2012" -->
<!-- isoreceived="20120302162317" -->
<!-- sent="Fri, 2 Mar 2012 16:23:13 +0000" -->
<!-- isosent="20120302162313" -->
<!-- name="Hjelm, Nathan T" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r26077 (fwd)" -->
<!-- id="AE45F2F55FE69B4F99BB3455E821D71516F6D47F_at_ECS-EXG-P-MB07.win.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4F50375D.7030908_at_unimelb.edu.au" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn] svn:open-mpi r26077 (fwd)<br>
<strong>From:</strong> Hjelm, Nathan T (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-02 11:23:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10667.php">Alex Margolin: "Re: [OMPI devel] Replacing poll()"</a>
<li><strong>Previous message:</strong> <a href="10665.php">George Bosilca: "Re: [OMPI devel] poor btl sm latency"</a>
<li><strong>In reply to:</strong> <a href="10655.php">Christopher Samuel: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r26077 (fwd)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
They symptom is that the process hangs forever. Its difficult to differentiate this bug and simply running out of registered memory.
<br>
<p>The bug is hit if the pml is using the mpi_leave_pinned protocol and the btl returns an error from its send function.
<br>
<p>-Nathan
<br>
<p>________________________________________
<br>
From: devel-bounces_at_[hidden] [devel-bounces_at_[hidden]] on behalf of Christopher Samuel [samuel_at_[hidden]]
<br>
Sent: Thursday, March 01, 2012 7:58 PM
<br>
To: devel_at_[hidden]
<br>
Subject: Re: [OMPI devel] [OMPI svn] svn:open-mpi r26077 (fwd)
<br>
<p>-----BEGIN PGP SIGNED MESSAGE-----
<br>
Hash: SHA1
<br>
<p>On 02/03/12 02:56, Nathan Hjelm wrote:
<br>
<p><span class="quotelev1">&gt; Found a pretty nasty frag leak (and a minor one) in ob1 (see
</span><br>
<span class="quotelev1">&gt; commit below). If this fix addresses some hangs we are seeing on
</span><br>
<span class="quotelev1">&gt; infiniband LANL might want a 1.4.6 rolled (or a faster rollout for
</span><br>
<span class="quotelev1">&gt; 1.6.0).
</span><br>
<p>What symptoms would an affected job show?  Does it fail with an OMPI
<br>
error or does it just hang using 0% CPU?
<br>
<p>cheers,
<br>
Chris
<br>
- --
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Christopher Samuel - Senior Systems Administrator
<br>
&nbsp;VLSCI - Victorian Life Sciences Computation Initiative
<br>
&nbsp;Email: samuel_at_[hidden] Phone: +61 (0)3 903 55545
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.vlsci.unimelb.edu.au/">http://www.vlsci.unimelb.edu.au/</a>
<br>
<p>-----BEGIN PGP SIGNATURE-----
<br>
Version: GnuPG v1.4.11 (GNU/Linux)
<br>
Comment: Using GnuPG with Mozilla - <a href="http://enigmail.mozdev.org/">http://enigmail.mozdev.org/</a>
<br>
<p>iEYEARECAAYFAk9QN10ACgkQO2KABBYQAh9aRgCePZXdzqlI8lpfqWtHf8rtFvup
<br>
2D8An3E9y411xTyRBpfwHLPpWTzqUiuv
<br>
=3EXP
<br>
-----END PGP SIGNATURE-----
<br>
_______________________________________________
<br>
devel mailing list
<br>
devel_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10667.php">Alex Margolin: "Re: [OMPI devel] Replacing poll()"</a>
<li><strong>Previous message:</strong> <a href="10665.php">George Bosilca: "Re: [OMPI devel] poor btl sm latency"</a>
<li><strong>In reply to:</strong> <a href="10655.php">Christopher Samuel: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r26077 (fwd)"</a>
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
