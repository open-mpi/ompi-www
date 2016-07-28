<?
$subject_val = "Re: [OMPI devel] SM init failures";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 27 13:30:35 2009" -->
<!-- isoreceived="20090327173035" -->
<!-- sent="Fri, 27 Mar 2009 13:30:30 -0400" -->
<!-- isosent="20090327173030" -->
<!-- name="Tim Mattox" -->
<!-- email="timattox_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] SM init failures" -->
<!-- id="ea86ce220903271030w3fb56b9flcc2bb6abd10ed096_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="49CCDF8A.3090101_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] SM init failures<br>
<strong>From:</strong> Tim Mattox (<em>timattox_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-27 13:30:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5718.php">Shaun Jackman: "[OMPI devel] Bug in MPI_Request_get_status (1.3.1) [PATCH]"</a>
<li><strong>Previous message:</strong> <a href="5716.php">Eugene Loh: "Re: [OMPI devel] SM init failures"</a>
<li><strong>In reply to:</strong> <a href="5716.php">Eugene Loh: "Re: [OMPI devel] SM init failures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5724.php">George Bosilca: "Re: [OMPI devel] SM init failures"</a>
<li><strong>Reply:</strong> <a href="5724.php">George Bosilca: "Re: [OMPI devel] SM init failures"</a>
<li><strong>Reply:</strong> <a href="5759.php">Eugene Loh: "Re: [OMPI devel] SM init failures"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Eugene,
<br>
I think I remember setting up the MTT tests on Sif so that tests
<br>
are run both with and without the coll_hierarch component selected.
<br>
The coll_hierarch component stresses code paths and potential
<br>
race conditions in its own way.  So, if the problems are showing up
<br>
more frequently for the test runs with the coll_hierarch component
<br>
enabled, then I would check the communicator creation code paths.
<br>
<p>Now that I'm at SiCortex, I don't have time to look into these IU MTT
<br>
failures not that I had a bunch of time while at IU ;-), but you can get
<br>
to a lot of information with some work in the MTT reporter web page.
<br>
Also, hopefully Josh will have a little time to look into it.
<br>
<p>Good luck!    -- Tim
<br>
<p>On Fri, Mar 27, 2009 at 10:15 AM, Eugene Loh &lt;Eugene.Loh_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Josh Hursey wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Sif is also running the coll_hierarch component on some of those &#160;tests
</span><br>
<span class="quotelev2">&gt;&gt; which has caused some additional problems. I don't know if that &#160;is related
</span><br>
<span class="quotelev2">&gt;&gt; or not.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Indeed. &#160;Many of the MTT stack traces (for both 1.3.1 and 1.3.2 and that
</span><br>
<span class="quotelev1">&gt; have seg faults and call out mca_btl_sm.so) do involve collectives and/or
</span><br>
<span class="quotelev1">&gt; have mca_coll_hierarch.so in their stack traces. &#160;I could well imagine this
</span><br>
<span class="quotelev1">&gt; is the culprit, though I do not know for sure.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hmmm...Eugene, you need to be a tad less sensitive. Nobody was &#160;attempting
</span><br>
<span class="quotelev2">&gt;&gt; to indict you or in any way attack you or your code.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes, I know, though thank you for saying so. &#160;I was overdoing the defensive
</span><br>
<span class="quotelev1">&gt; rhetoric trying to be funny, but I confess it's nervous humor. &#160;There was
</span><br>
<span class="quotelev1">&gt; stuff in the sm code that I couldn't see how it was 100% robust.
</span><br>
<span class="quotelev1">&gt; &#160;Nevertheless, I let that style remain in the code with my changes...
</span><br>
<span class="quotelev1">&gt; perhaps even pushing it a little bit. &#160;My putbacks include a comment or two
</span><br>
<span class="quotelev1">&gt; to that effect. &#160;E.g.,
</span><br>
<span class="quotelev1">&gt; <a href="https://svn.open-mpi.org/source/xref/ompi-trunk/ompi/mca/btl/sm/btl_sm.c?r=20774#523">https://svn.open-mpi.org/source/xref/ompi-trunk/ompi/mca/btl/sm/btl_sm.c?r=20774#523</a>
</span><br>
<span class="quotelev1">&gt; . &#160;I understand why the occasional failures that Jeff and Terry saw did not
</span><br>
<span class="quotelev1">&gt; hold up 1.3.1, but I'd really like to understand them and fix them. &#160;But at
</span><br>
<span class="quotelev1">&gt; 0.01% fail rate (&lt;0.001% for me... I've never seen it in 100Ks of runs), all
</span><br>
<span class="quotelev1">&gt; I can do about etiology and fixes is speculate.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Okay, joke overdone and nervousness no longer funny. &#160;Indeed, annoying. &#160;I
</span><br>
<span class="quotelev1">&gt; stop.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Since we clearly see problems on sif, and Josh has indicated a
</span><br>
<span class="quotelev2">&gt;&gt; &#160;willingness to help with debugging, this might be a place to start the
</span><br>
<span class="quotelev2">&gt;&gt; &#160;investigation. If asked nicely, they might even be willing to grant &#160;access
</span><br>
<span class="quotelev2">&gt;&gt; to the machine, if that would help.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Maybe a starting point would be running IU_Sif without coll_hierarch and
</span><br>
<span class="quotelev1">&gt; seeing where we stand.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And, again, my gut feel is that the failures are unrelated to the 0.01%
</span><br>
<span class="quotelev1">&gt; failures that Jeff and Terry were seeing.
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
<p><p><p><pre>
-- 
Tim Mattox, Ph.D. - <a href="http://homepage.mac.com/tmattox/">http://homepage.mac.com/tmattox/</a>
 timattox_at_[hidden] || timattox_at_[hidden]
    I'm a bright... <a href="http://www.the-brights.net/">http://www.the-brights.net/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5718.php">Shaun Jackman: "[OMPI devel] Bug in MPI_Request_get_status (1.3.1) [PATCH]"</a>
<li><strong>Previous message:</strong> <a href="5716.php">Eugene Loh: "Re: [OMPI devel] SM init failures"</a>
<li><strong>In reply to:</strong> <a href="5716.php">Eugene Loh: "Re: [OMPI devel] SM init failures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5724.php">George Bosilca: "Re: [OMPI devel] SM init failures"</a>
<li><strong>Reply:</strong> <a href="5724.php">George Bosilca: "Re: [OMPI devel] SM init failures"</a>
<li><strong>Reply:</strong> <a href="5759.php">Eugene Loh: "Re: [OMPI devel] SM init failures"</a>
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
