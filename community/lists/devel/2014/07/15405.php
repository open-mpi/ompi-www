<?
$subject_val = "Re: [OMPI devel] mca_PROJECT_FRAMEWORK_COMPONENT_symbol vs.	mca_FRAMEWORK_COMPONENT_symbol";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 31 14:06:04 2014" -->
<!-- isoreceived="20140731180604" -->
<!-- sent="Thu, 31 Jul 2014 12:06:12 -0600" -->
<!-- isosent="20140731180612" -->
<!-- name="Kenneth A. Lloyd" -->
<!-- email="kenneth.lloyd_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] mca_PROJECT_FRAMEWORK_COMPONENT_symbol vs.	mca_FRAMEWORK_COMPONENT_symbol" -->
<!-- id="00d401cfacea$1d7538e0$585faaa0$_at_wattsys.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="014101cfacb7$836bdab0$8a439010$_at_wattsys.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] mca_PROJECT_FRAMEWORK_COMPONENT_symbol vs.	mca_FRAMEWORK_COMPONENT_symbol<br>
<strong>From:</strong> Kenneth A. Lloyd (<em>kenneth.lloyd_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-31 14:06:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15406.php">Dave Goodell (dgoodell): "[OMPI devel] RFC: namespaces to isolate against code moves"</a>
<li><strong>Previous message:</strong> <a href="15404.php">Ralph Castain: "Re: [OMPI devel] RFC: job size info in OPAL"</a>
<li><strong>In reply to:</strong> <a href="15392.php">Kenneth A. Lloyd: "Re: [OMPI devel] mca_PROJECT_FRAMEWORK_COMPONENT_symbol vs. mca_FRAMEWORK_COMPONENT_symbol"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yeah, I forgot that pure ANSI C doesn't really have namespaces, other than
<br>
to fully qualify modules and variables. Bummer.
<br>
<p>Makes writing large, maintainable middleware more difficult.
<br>
<p>-----Original Message-----
<br>
From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of Kenneth A.
<br>
Lloyd
<br>
Sent: Thursday, July 31, 2014 6:04 AM
<br>
To: 'Open MPI Developers'
<br>
Subject: Re: [OMPI devel] mca_PROJECT_FRAMEWORK_COMPONENT_symbol vs.
<br>
mca_FRAMEWORK_COMPONENT_symbol
<br>
<p>Doesn't namespacing obviate the need for this convoluted identifier scheme?
<br>
See, for example, UML package import and include behaviors.
<br>
<p>-----Original Message-----
<br>
From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of Dave Goodell
<br>
(dgoodell)
<br>
Sent: Wednesday, July 30, 2014 3:35 PM
<br>
To: Open MPI Developers
<br>
Subject: [OMPI devel] mca_PROJECT_FRAMEWORK_COMPONENT_symbol vs.
<br>
mca_FRAMEWORK_COMPONENT_symbol
<br>
<p>Jeff and I were talking about some namespacing issues that have come up in
<br>
the recent BTL move from OMPI to OPAL.  AFAIK, the current system for
<br>
namespacing external symbols is to name them
<br>
&quot;mca_FRAMEWORK_COMPONENT_symbol&quot; (e.g., &quot;mca_btl_tcp_add_procs&quot; in the tcp
<br>
BTL).  Similarly, the DSO for the component is named
<br>
&quot;mca_FRAMEWORK_COMPONENT.so&quot; (e.g., &quot;mca_btl_tcp.so&quot;).
<br>
<p>Jeff asserted that the eventual goal is to move to a system where all MCA
<br>
frameworks/components are also prefixed by the project name.  So the above
<br>
examples become &quot;mca_ompi_btl_tcp_add_procs&quot; and &quot;mca_ompi_btl_tcp.so&quot;.
<br>
Does anyone actually care about pursuing this goal?
<br>
<p>I ask because if nobody wants to pursue the goal of adding project names to
<br>
namespaces then I already have an easy solution to most of our namespacing
<br>
problems.  OTOH, if someone does wish to pursue that goal, then I have a
<br>
namespace-related RFC that I would like to propose (in a subsequent email).
<br>
<p>-Dave
<br>
<p>_______________________________________________
<br>
devel mailing list
<br>
devel_at_[hidden]
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
<br>
Link to this post:
<br>
<a href="http://www.open-mpi.org/community/lists/devel/2014/07/15371.php">http://www.open-mpi.org/community/lists/devel/2014/07/15371.php</a>
<br>
<p><p>-----
<br>
No virus found in this message.
<br>
Checked by AVG - www.avg.com
<br>
Version: 2014.0.4716 / Virus Database: 3986/7949 - Release Date: 07/30/14
<br>
<p>_______________________________________________
<br>
devel mailing list
<br>
devel_at_[hidden]
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
<br>
Link to this post:
<br>
<a href="http://www.open-mpi.org/community/lists/devel/2014/07/15392.php">http://www.open-mpi.org/community/lists/devel/2014/07/15392.php</a>
<br>
<p><p>-----
<br>
No virus found in this message.
<br>
Checked by AVG - www.avg.com
<br>
Version: 2014.0.4716 / Virus Database: 3986/7951 - Release Date: 07/30/14
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15406.php">Dave Goodell (dgoodell): "[OMPI devel] RFC: namespaces to isolate against code moves"</a>
<li><strong>Previous message:</strong> <a href="15404.php">Ralph Castain: "Re: [OMPI devel] RFC: job size info in OPAL"</a>
<li><strong>In reply to:</strong> <a href="15392.php">Kenneth A. Lloyd: "Re: [OMPI devel] mca_PROJECT_FRAMEWORK_COMPONENT_symbol vs. mca_FRAMEWORK_COMPONENT_symbol"</a>
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
