<?
$subject_val = "Re: [OMPI devel] Setting AUTOMAKE_JOBS";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 24 00:26:12 2010" -->
<!-- isoreceived="20100924042612" -->
<!-- sent="Fri, 24 Sep 2010 06:26:05 +0200" -->
<!-- isosent="20100924042605" -->
<!-- name="Ralf Wildenhues" -->
<!-- email="Ralf.Wildenhues_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Setting AUTOMAKE_JOBS" -->
<!-- id="20100924042605.GC24112_at_gmx.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTinBCmASFJFHK-VAnnexYWsi7fOr2bEEPL8zRtd7_at_mail.gmail.com" -->
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
<strong>From:</strong> Ralf Wildenhues (<em>Ralf.Wildenhues_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-24 00:26:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8544.php">Ralph Castain: "Re: [OMPI devel] Setting AUTOMAKE_JOBS"</a>
<li><strong>Previous message:</strong> <a href="8542.php">Ralph Castain: "Re: [OMPI devel] Setting AUTOMAKE_JOBS"</a>
<li><strong>In reply to:</strong> <a href="8542.php">Ralph Castain: "Re: [OMPI devel] Setting AUTOMAKE_JOBS"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8544.php">Ralph Castain: "Re: [OMPI devel] Setting AUTOMAKE_JOBS"</a>
<li><strong>Reply:</strong> <a href="8544.php">Ralph Castain: "Re: [OMPI devel] Setting AUTOMAKE_JOBS"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Ralph,
<br>
<p>wow, that's not good to hear.  I knew the perl ithreads implementation
<br>
wasn't all that efficient, but causing a deadlock sounds like you have
<br>
more trouble than just perl; at least I hope so.  For reference, can
<br>
you send 'perl -V' output (if you like, to the bug-automake at gnu.org
<br>
list).
<br>
<p>Thanks,
<br>
Ralf
<br>
<p>* Ralph Castain wrote on Fri, Sep 24, 2010 at 03:12:16AM CEST:
<br>
<span class="quotelev1">&gt; I found one major negative to this change - it assumes that my build is
</span><br>
<span class="quotelev1">&gt; being done in exclusion of anything else on my computer. Unfortunately, this
</span><br>
<span class="quotelev1">&gt; is never true.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So my laptop hemorrhaged itself into frozen silence, overheated to the point
</span><br>
<span class="quotelev1">&gt; of being burning hot, and had to have its battery yanked to stop the runaway
</span><br>
<span class="quotelev1">&gt; behavior. Not a really good thing.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I would suggest you default this &quot;heuristic&quot; out, and let someone set it to
</span><br>
<span class="quotelev1">&gt; use multiple runs if-and-only-if they want it. Hate to cite the lowest
</span><br>
<span class="quotelev1">&gt; common denominator, but this was a very nasty surprise.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Wed, Sep 22, 2010 at 7:50 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Some of you may be unaware that recent versions of automake can run in
</span><br>
<span class="quotelev2">&gt; &gt; parallel.  That is, automake will run in parallel with a degree of (at most)
</span><br>
<span class="quotelev2">&gt; &gt; $AUTOMAKE_JOBS.  This can speed up the execution time of autogen.pl quite
</span><br>
<span class="quotelev2">&gt; &gt; a bit on some platforms.  On my cluster at cisco, here's a few quick timings
</span><br>
<span class="quotelev2">&gt; &gt; of the entire autogen.pl process (of which, automake is the bottleneck):
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; $AUTOMAKE_JOBS           Total wall time
</span><br>
<span class="quotelev2">&gt; &gt; value                    of autogen.pl
</span><br>
<span class="quotelev2">&gt; &gt; 8                        3:01.46
</span><br>
<span class="quotelev2">&gt; &gt; 4                        2:55.57
</span><br>
<span class="quotelev2">&gt; &gt; 2                        3:28.09
</span><br>
<span class="quotelev2">&gt; &gt; 1                        4:38.44
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; This is an older Xeon machine with 2 sockets, each with 2 cores.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; There's a nice performance jump from 1 to 2, and a smaller jump from 2 to
</span><br>
<span class="quotelev2">&gt; &gt; 4.  4 and 8 are close enough to not matter.  YMMV.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I just committed a heuristic to autogen.pl to setenv AUTOMAKE_JOBS if it
</span><br>
<span class="quotelev2">&gt; &gt; is not already set (<a href="https://svn.open-mpi.org/trac/ompi/changeset/23788">https://svn.open-mpi.org/trac/ompi/changeset/23788</a>):
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; - If lstopo is found in your $PATH, runs it and count how many PU's
</span><br>
<span class="quotelev2">&gt; &gt; (processing units) you have.  It'll set AUTOMAKE_JOBS to that number, or a
</span><br>
<span class="quotelev2">&gt; &gt; maximum of 4 (which is admittedly a further heuristic).
</span><br>
<span class="quotelev2">&gt; &gt; - If lstopo is not found, it just sets AUTOMAKE_JOBS to 2.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Enjoy.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt; &gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8544.php">Ralph Castain: "Re: [OMPI devel] Setting AUTOMAKE_JOBS"</a>
<li><strong>Previous message:</strong> <a href="8542.php">Ralph Castain: "Re: [OMPI devel] Setting AUTOMAKE_JOBS"</a>
<li><strong>In reply to:</strong> <a href="8542.php">Ralph Castain: "Re: [OMPI devel] Setting AUTOMAKE_JOBS"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8544.php">Ralph Castain: "Re: [OMPI devel] Setting AUTOMAKE_JOBS"</a>
<li><strong>Reply:</strong> <a href="8544.php">Ralph Castain: "Re: [OMPI devel] Setting AUTOMAKE_JOBS"</a>
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
