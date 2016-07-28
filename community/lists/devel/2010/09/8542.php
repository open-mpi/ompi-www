<?
$subject_val = "Re: [OMPI devel] Setting AUTOMAKE_JOBS";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 23 21:12:21 2010" -->
<!-- isoreceived="20100924011221" -->
<!-- sent="Thu, 23 Sep 2010 19:12:16 -0600" -->
<!-- isosent="20100924011216" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Setting AUTOMAKE_JOBS" -->
<!-- id="AANLkTinBCmASFJFHK-VAnnexYWsi7fOr2bEEPL8zRtd7_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="0D00FFAF-C902-4985-8BCB-02313153A236_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Setting AUTOMAKE_JOBS<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-23 21:12:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8543.php">Ralf Wildenhues: "Re: [OMPI devel] Setting AUTOMAKE_JOBS"</a>
<li><strong>Previous message:</strong> <a href="8541.php">Ethan Mallove: "Re: [OMPI devel] Autogen improvements: ready for blast off"</a>
<li><strong>In reply to:</strong> <a href="8524.php">Jeff Squyres: "[OMPI devel] Setting AUTOMAKE_JOBS"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8543.php">Ralf Wildenhues: "Re: [OMPI devel] Setting AUTOMAKE_JOBS"</a>
<li><strong>Reply:</strong> <a href="8543.php">Ralf Wildenhues: "Re: [OMPI devel] Setting AUTOMAKE_JOBS"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I found one major negative to this change - it assumes that my build is
<br>
being done in exclusion of anything else on my computer. Unfortunately, this
<br>
is never true.
<br>
<p>So my laptop hemorrhaged itself into frozen silence, overheated to the point
<br>
of being burning hot, and had to have its battery yanked to stop the runaway
<br>
behavior. Not a really good thing.
<br>
<p>I would suggest you default this &quot;heuristic&quot; out, and let someone set it to
<br>
use multiple runs if-and-only-if they want it. Hate to cite the lowest
<br>
common denominator, but this was a very nasty surprise.
<br>
<p><p><p>On Wed, Sep 22, 2010 at 7:50 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Some of you may be unaware that recent versions of automake can run in
</span><br>
<span class="quotelev1">&gt; parallel.  That is, automake will run in parallel with a degree of (at most)
</span><br>
<span class="quotelev1">&gt; $AUTOMAKE_JOBS.  This can speed up the execution time of autogen.pl quite
</span><br>
<span class="quotelev1">&gt; a bit on some platforms.  On my cluster at cisco, here's a few quick timings
</span><br>
<span class="quotelev1">&gt; of the entire autogen.pl process (of which, automake is the bottleneck):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $AUTOMAKE_JOBS           Total wall time
</span><br>
<span class="quotelev1">&gt; value                    of autogen.pl
</span><br>
<span class="quotelev1">&gt; 8                        3:01.46
</span><br>
<span class="quotelev1">&gt; 4                        2:55.57
</span><br>
<span class="quotelev1">&gt; 2                        3:28.09
</span><br>
<span class="quotelev1">&gt; 1                        4:38.44
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is an older Xeon machine with 2 sockets, each with 2 cores.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There's a nice performance jump from 1 to 2, and a smaller jump from 2 to
</span><br>
<span class="quotelev1">&gt; 4.  4 and 8 are close enough to not matter.  YMMV.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I just committed a heuristic to autogen.pl to setenv AUTOMAKE_JOBS if it
</span><br>
<span class="quotelev1">&gt; is not already set (<a href="https://svn.open-mpi.org/trac/ompi/changeset/23788">https://svn.open-mpi.org/trac/ompi/changeset/23788</a>):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - If lstopo is found in your $PATH, runs it and count how many PU's
</span><br>
<span class="quotelev1">&gt; (processing units) you have.  It'll set AUTOMAKE_JOBS to that number, or a
</span><br>
<span class="quotelev1">&gt; maximum of 4 (which is admittedly a further heuristic).
</span><br>
<span class="quotelev1">&gt; - If lstopo is not found, it just sets AUTOMAKE_JOBS to 2.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Enjoy.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-8542/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8543.php">Ralf Wildenhues: "Re: [OMPI devel] Setting AUTOMAKE_JOBS"</a>
<li><strong>Previous message:</strong> <a href="8541.php">Ethan Mallove: "Re: [OMPI devel] Autogen improvements: ready for blast off"</a>
<li><strong>In reply to:</strong> <a href="8524.php">Jeff Squyres: "[OMPI devel] Setting AUTOMAKE_JOBS"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8543.php">Ralf Wildenhues: "Re: [OMPI devel] Setting AUTOMAKE_JOBS"</a>
<li><strong>Reply:</strong> <a href="8543.php">Ralf Wildenhues: "Re: [OMPI devel] Setting AUTOMAKE_JOBS"</a>
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
