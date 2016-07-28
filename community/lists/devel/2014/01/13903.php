<?
$subject_val = "Re: [OMPI devel] yet another fortran (documentation) issue";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 24 12:29:30 2014" -->
<!-- isoreceived="20140124172930" -->
<!-- sent="Fri, 24 Jan 2014 17:29:28 +0000" -->
<!-- isosent="20140124172928" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] yet another fortran (documentation) issue" -->
<!-- id="6A7DD1A2-BB7E-4160-99CC-127CEF2BB4D1_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAAvDA1621o0OqUKuHWsi-D+fanv99pt9w2nRC-nXfpw4De1b7Q_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] yet another fortran (documentation) issue<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-24 12:29:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13904.php">Ralph Castain: "Re: [OMPI devel] out-of-date or missing manpages"</a>
<li><strong>Previous message:</strong> <a href="13902.php">Kenneth Adam Miller: "[OMPI devel] Specific use case - very very new to MPI"</a>
<li><strong>In reply to:</strong> <a href="13891.php">Paul Hargrove: "[OMPI devel] yet another fortran (documentation) issue"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 23, 2014, at 6:52 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; The term &quot;fortran compiler&quot; in Open MPI's README is not (as far as I could see) clearly defined as &quot;a fortran compiler which honors file suffixes to determine language dialect&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My FC=xlf90 setting is &quot;historical&quot; from the testing scripts I've used since the 1.5 and 1.6 series.
</span><br>
<p>Good call.  Jeff Hammond mentioned this on the MPICH list when we were discussing the concept of the &quot;mpifort&quot; wrapper compiler, and I neglected to include that in OMPI docs.  I'd updated the README.
<br>
<p><span class="quotelev1">&gt; ADDITIONALLY, the Open MPI manpages STILL say FC is to be a fortran90 compiler and F77 is to be an fortran77 compiler.  It looks like others might encounter the same problem I describe above just by reading the documentation too closely.
</span><br>
<p>Will fix.
<br>
<p>FAQ will need to be updated, too.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13904.php">Ralph Castain: "Re: [OMPI devel] out-of-date or missing manpages"</a>
<li><strong>Previous message:</strong> <a href="13902.php">Kenneth Adam Miller: "[OMPI devel] Specific use case - very very new to MPI"</a>
<li><strong>In reply to:</strong> <a href="13891.php">Paul Hargrove: "[OMPI devel] yet another fortran (documentation) issue"</a>
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
