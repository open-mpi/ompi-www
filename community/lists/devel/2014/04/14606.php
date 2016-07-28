<?
$subject_val = "Re: [OMPI devel] RFC: Remove heterogeneous support";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 25 05:47:43 2014" -->
<!-- isoreceived="20140425094743" -->
<!-- sent="Fri, 25 Apr 2014 09:47:42 +0000" -->
<!-- isosent="20140425094742" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Remove heterogeneous support" -->
<!-- id="C4ACCF82-43B1-4AE5-B872-EB31745BAB17_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="42520162-EC94-41E7-9728-85AE035EAC44_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Remove heterogeneous support<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-25 05:47:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14607.php">Alex Margolin: "Re: [OMPI devel] mosix patches"</a>
<li><strong>Previous message:</strong> <a href="14605.php">Mike Dubman: "Re: [OMPI devel] RFC: Well-known mca parameters"</a>
<li><strong>In reply to:</strong> <a href="14602.php">Ralph Castain: "Re: [OMPI devel] RFC: Remove heterogeneous support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14608.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: Remove heterogeneous support"</a>
<li><strong>Reply:</strong> <a href="14608.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: Remove heterogeneous support"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 24, 2014, at 10:47 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev2">&gt;&gt; And, as George pointed out, I see a trend towards heterogeneity in
</span><br>
<span class="quotelev2">&gt;&gt; HPC, to I'd say this feature will be rather more important in the
</span><br>
<span class="quotelev2">&gt;&gt; future.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We have been hearing about such &quot;trends&quot; for a long time, but have yet to see them actually happen. Not saying it couldn't some day - just saying it still hasn't happened in production.
</span><br>
<p>+1
<br>
<p>MPI was designed to support heterogeneity all the way back from MPI-1.0 (1994) on these same kinds of arguments.  It hasn't really panned out for more than a handful of users.
<br>
<p>Keep in mind that data size heterogeneity is an unsolved problem.  What do you do if one process sends a 4-byte integer of value 0xff00 0000 to a peer with only 2-byte integers?
<br>
<p><span class="quotelev2">&gt;&gt; So, would repairing the code be significantly more complicated than a
</span><br>
<span class="quotelev2">&gt;&gt; clean extraction?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So here's what I suggest: if someone is willing to take the lead in fixing hetero operations, and has the hardware upon which to verify it, then please step forward. Otherwise, I agree with Jeff that we should remove it and move on.
</span><br>
<p><p>The broken part(s) is(are) likely somewhere in the datatype and/or PML code (my guess).  Keep in mind that my only testing of this feature is in *homogeneous* mode -- i.e., I compile with --enable-heterogeneous and then run tests on homogeneous machines.  Meaning: it's not only broken for actual heterogeneity, it's also broken in the &quot;unity&quot;/homogeneous case.
<br>
<p>So which is more complicated: fix or remove?  I don't know; as George mentions, I suspect removal is likely to be a little tricky.  
<br>
<p>But ask that question a little differently: which is more complicated, long-term maintenance of a feature which no one really tests (or even has the hardware setup to test) or removal?  
<br>
<p>To me, the answer is a little more clear that way.
<br>
<p>That being said, there are 3 disagreements with this RFC so far:
<br>
<p>1. George: on principle
<br>
2. Andreas: (might) use heterogeneity if it worked
<br>
3. Siegmar: uses heterogeneity in older OMPI versions in his SPARC+Intel setups
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
<li><strong>Next message:</strong> <a href="14607.php">Alex Margolin: "Re: [OMPI devel] mosix patches"</a>
<li><strong>Previous message:</strong> <a href="14605.php">Mike Dubman: "Re: [OMPI devel] RFC: Well-known mca parameters"</a>
<li><strong>In reply to:</strong> <a href="14602.php">Ralph Castain: "Re: [OMPI devel] RFC: Remove heterogeneous support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14608.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: Remove heterogeneous support"</a>
<li><strong>Reply:</strong> <a href="14608.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: Remove heterogeneous support"</a>
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
