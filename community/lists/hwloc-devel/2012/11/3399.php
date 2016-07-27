<?
$subject_val = "Re: [hwloc-devel] === CREATE FAILURE (v1.6) ===";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 19 09:27:30 2012" -->
<!-- isoreceived="20121119142730" -->
<!-- sent="Mon, 19 Nov 2012 09:27:24 -0500" -->
<!-- isosent="20121119142724" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] === CREATE FAILURE (v1.6) ===" -->
<!-- id="649A932C-FBA8-4CD0-A3BB-C85AFC3A8A14_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201211191426.qAJEQEu8000837_at_eddie.osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] === CREATE FAILURE (v1.6) ===<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-19 09:27:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3400.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.6rc2r5062)"</a>
<li><strong>Previous message:</strong> <a href="3398.php">MPI Team: "[hwloc-devel] === CREATE FAILURE (v1.6) ==="</a>
<li><strong>In reply to:</strong> <a href="3398.php">MPI Team: "[hwloc-devel] === CREATE FAILURE (v1.6) ==="</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ignore this.  I'm setting up the nightly build for v1.6 and I got the latex install wrong.  Eventually you'll see a &quot;success&quot; v1.6 message; you can probably ignore all failure messages for v1.6 until then.  :-)
<br>
<p><p>On Nov 19, 2012, at 9:26 AM, MPI Team wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ERROR: Command returned a non-zero exist status (v1.6):
</span><br>
<span class="quotelev1">&gt;       make distcheck
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Start time: Mon Nov 19 09:06:41 EST 2012
</span><br>
<span class="quotelev1">&gt; End time:   Mon Nov 19 09:26:14 EST 2012
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; =======================================================================
</span><br>
<span class="quotelev1">&gt; [... previous lines snipped ...]
</span><br>
<span class="quotelev1">&gt; (/usr/share/texmf/tex/latex/psnfss/ot1ptm.fd)
</span><br>
<span class="quotelev1">&gt; &lt;dudley.png, id=58, 451.6875pt x 572.1375pt&gt; &lt;use dudley.png&gt; [3] [4 &lt;./dudley.
</span><br>
<span class="quotelev1">&gt; png&gt;] [5] &lt;hagrid.png, id=83, 973.6375pt x 291.0875pt&gt; &lt;use hagrid.png&gt;
</span><br>
<span class="quotelev1">&gt; Underfull \hbox (badness 10000) in paragraph at lines 186--188
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [6 &lt;./hagrid.png&gt;]
</span><br>
<span class="quotelev1">&gt; Overfull \hbox (29.40024pt too wide) in paragraph at lines 235--235
</span><br>
<span class="quotelev1">&gt; []                  /pcrr8t_at_8.0pt/complete_nodeset=&quot;0x00000001&quot; allowed_nodeset
</span><br>
<span class="quotelev1">&gt; =&quot;0x00000001&quot;/&gt;[] 
</span><br>
<span class="quotelev1">&gt; &lt;emmett.png, id=88, 431.6125pt x 431.6125pt&gt; &lt;use emmett.png&gt; [7 &lt;./emmett.png&gt;
</span><br>
<span class="quotelev1">&gt; ] [8] &lt;ppc64-with-smt.pdf, id=113, 1154.3125pt x 431.6125pt&gt;
</span><br>
<span class="quotelev1">&gt; &lt;use ppc64-with-smt.pdf&gt;
</span><br>
<span class="quotelev1">&gt; Underfull \hbox (badness 10000) in paragraph at lines 330--332
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;ppc64-without-smt.pdf, id=114, 592.2125pt x 431.6125pt&gt;
</span><br>
<span class="quotelev1">&gt; &lt;use ppc64-without-smt.pdf&gt;
</span><br>
<span class="quotelev1">&gt; Underfull \hbox (badness 10000) in paragraph at lines 338--340
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Underfull \vbox (badness 10000) has occurred while \output is active [9 &lt;./ppc6
</span><br>
<span class="quotelev1">&gt; 4-with-smt.pdf
</span><br>
<span class="quotelev1">&gt; Warning: /usr/bin/pdflatex (file ./ppc64-with-smt.pdf): pdf inclusion: Page Gro
</span><br>
<span class="quotelev1">&gt; up detected which pdfTeX can't handle. Ignoring it.
</span><br>
<span class="quotelev2">&gt;&gt; ] &lt;ppc64-full-with-smt.pdf, id=134, 913.4125pt x 1355.0625pt&gt;
</span><br>
<span class="quotelev1">&gt; &lt;use ppc64-full-with-smt.pdf&gt;
</span><br>
<span class="quotelev1">&gt; Underfull \hbox (badness 10000) in paragraph at lines 350--352
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Underfull \vbox (badness 10000) has occurred while \output is active [10 &lt;./ppc
</span><br>
<span class="quotelev1">&gt; 64-without-smt.pdf
</span><br>
<span class="quotelev1">&gt; Warning: /usr/bin/pdflatex (file ./ppc64-without-smt.pdf): pdf inclusion: Page 
</span><br>
<span class="quotelev1">&gt; Group detected which pdfTeX can't handle. Ignoring it.
</span><br>
<span class="quotelev2">&gt;&gt; ]
</span><br>
<span class="quotelev1">&gt; Underfull \vbox (badness 10000) has occurred while \output is active [11 &lt;./ppc
</span><br>
<span class="quotelev1">&gt; 64-full-with-smt.pdf
</span><br>
<span class="quotelev1">&gt; Warning: /usr/bin/pdflatex (file ./ppc64-full-with-smt.pdf): pdf inclusion: Pag
</span><br>
<span class="quotelev1">&gt; e Group detected which pdfTeX can't handle. Ignoring it.
</span><br>
<span class="quotelev2">&gt;&gt; ]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ! Package inputenc Error: Keyboard character used is undefined
</span><br>
<span class="quotelev1">&gt; (inputenc)                in inputencoding `utf8'.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; See the inputenc package documentation for explanation.
</span><br>
<span class="quotelev1">&gt; Type  H &lt;return&gt;  for immediate help.
</span><br>
<span class="quotelev1">&gt; ...                                              
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; l.363 ...9 2009-2010 inria.  All rights reserved.}
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ? make: *** [distdir] Terminated
</span><br>
<span class="quotelev1">&gt; ./branches-v1.6-create_tarball.sh: line 112: 32333 Terminated              make distcheck
</span><br>
<span class="quotelev1">&gt; =======================================================================
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Your friendly daemon,
</span><br>
<span class="quotelev1">&gt; Cyrador
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3400.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.6rc2r5062)"</a>
<li><strong>Previous message:</strong> <a href="3398.php">MPI Team: "[hwloc-devel] === CREATE FAILURE (v1.6) ==="</a>
<li><strong>In reply to:</strong> <a href="3398.php">MPI Team: "[hwloc-devel] === CREATE FAILURE (v1.6) ==="</a>
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
