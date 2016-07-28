<?
$subject_val = "Re: [OMPI devel] problem in the ORTE notifier framework";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 27 11:12:36 2009" -->
<!-- isoreceived="20090527151236" -->
<!-- sent="Wed, 27 May 2009 11:12:30 -0400" -->
<!-- isosent="20090527151230" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] problem in the ORTE notifier framework" -->
<!-- id="2F2C2143-4295-4825-9F46-4FCC881704B1_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="908E13E9-613B-4FED-A57D-2DB35ECF70EB_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] problem in the ORTE notifier framework<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-27 11:12:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6119.php">George Bosilca: "Re: [OMPI devel] problem in the ORTE notifier framework"</a>
<li><strong>Previous message:</strong> <a href="6117.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21295"</a>
<li><strong>In reply to:</strong> <a href="6112.php">Jeff Squyres: "Re: [OMPI devel] problem in the ORTE notifier framework"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6119.php">George Bosilca: "Re: [OMPI devel] problem in the ORTE notifier framework"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
FYI, I moved the opal-sos repo this morning to bitbucket.org:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://bitbucket.org/jsquyres/opal-sos/overview/">http://bitbucket.org/jsquyres/opal-sos/overview/</a>
<br>
<p>If you already pulled from the old www.open-mpi.org copy, you can just  
<br>
edit your .hg/hgrc to set the new bitbucket URL and continue pulling /  
<br>
etc.  (no need to get a new checkout)
<br>
<p><p>On May 27, 2009, at 9:49 AM, Jeff Squyres (jsquyres) wrote:
<br>
<p><span class="quotelev1">&gt; This all sounds reasonable.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If these are, indeed, on already-slow code paths, I doubt there will
</span><br>
<span class="quotelev1">&gt; be much of an issue.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you want to talk about this higher bandwidth, let us know -- I can
</span><br>
<span class="quotelev1">&gt; setup a Webex call pretty easily.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On May 27, 2009, at 8:21 AM, Sylvain Jeaugey wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; I thought an if-then was 1 cycle. I mean, if you don't break the
</span><br>
<span class="quotelev2">&gt; &gt; pipeline,
</span><br>
<span class="quotelev2">&gt; &gt; i.e. use likely() or builtin_expect() or something like that to be
</span><br>
<span class="quotelev2">&gt; &gt; sure
</span><br>
<span class="quotelev2">&gt; &gt; that the compiler will generate assembly in the right way, it
</span><br>
<span class="quotelev2">&gt; &gt; shouldn't be
</span><br>
<span class="quotelev2">&gt; &gt; more than 1 cycle, perhaps less on some architectures like Itanium.
</span><br>
<span class="quotelev2">&gt; &gt; But my
</span><br>
<span class="quotelev2">&gt; &gt; multi-architecture view is somewhat limited to x86 and ia64, so I
</span><br>
<span class="quotelev2">&gt; &gt; may be
</span><br>
<span class="quotelev2">&gt; &gt; wrong. I'm personally much more sensitive to cache misses which can
</span><br>
<span class="quotelev2">&gt; &gt; easily
</span><br>
<span class="quotelev2">&gt; &gt; make the atomic-inc take hundreds of cycles if the event is out of  
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev2">&gt; &gt; cache.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ORTE_NOTIFIER_VERBOSE(api, counter, threshold,...) is also very
</span><br>
<span class="quotelev2">&gt; &gt; close to
</span><br>
<span class="quotelev2">&gt; &gt; what we had in mind : a one-line, single call to track events. Good.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; We will continue to dig in this direction using the opal-sos branch.
</span><br>
<span class="quotelev2">&gt; &gt; Thanks a lot,
</span><br>
<span class="quotelev2">&gt; &gt; Sylvain
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Wed, 27 May 2009, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; While that is a good way of minimizing the impact of the counter,
</span><br>
<span class="quotelev2">&gt; &gt; you still have to do an &quot;if-then&quot; to check if the counter
</span><br>
<span class="quotelev3">&gt; &gt; &gt; exceeds the threshold. This &quot;if-then&quot; also has to get executed
</span><br>
<span class="quotelev2">&gt; &gt; every time, and generally consumes more than a few cycles.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; To be clear: it isn't the output that is the concern. The output
</span><br>
<span class="quotelev2">&gt; &gt; only occurs as an exception case, essentially equivalent
</span><br>
<span class="quotelev3">&gt; &gt; &gt; to dealing with an error, so it can be &quot;slow&quot;. The concern is with
</span><br>
<span class="quotelev2">&gt; &gt; the impact of testing to see if the output needs to be
</span><br>
<span class="quotelev3">&gt; &gt; &gt; generated as this testing occurs every time we transit the code.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I think Jeff and I are probably closer to agreement on design than
</span><br>
<span class="quotelev2">&gt; &gt; it might seem, and may be close to what you might also
</span><br>
<span class="quotelev3">&gt; &gt; &gt; have had in mind. Basically, I was thinking of a macro like this:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ORTE_NOTIFIER_VERBOSE(api, counter, threshold,...)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; #if WANT_NOTIFIER_VERBOSE
</span><br>
<span class="quotelev3">&gt; &gt; &gt; opal_atomic_increment(counter);
</span><br>
<span class="quotelev3">&gt; &gt; &gt; if (counter &gt; threshold) {
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     orte_notifier.api(.....)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; }
</span><br>
<span class="quotelev3">&gt; &gt; &gt; #endif
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; You would set the specific thresholds for each situation via MCA
</span><br>
<span class="quotelev2">&gt; &gt; params, so this could be tuned to fit specific needs.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Those who don't want the penalty can just build normally - those
</span><br>
<span class="quotelev2">&gt; &gt; who want this level of information can enable it.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; We can then see just how much penalty is involved in real world
</span><br>
<span class="quotelev2">&gt; &gt; situations. My guess is that it won't be that big, but it's
</span><br>
<span class="quotelev3">&gt; &gt; &gt; hard to know without seeing how frequently we actually insert this
</span><br>
<span class="quotelev2">&gt; &gt; code.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Hope that makes sense
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Ralph
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; On Wed, May 27, 2009 at 1:25 AM, Sylvain Jeaugey &lt;sylvain.jeaugey_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;       About performance, I may miss something, but our first goal
</span><br>
<span class="quotelev2">&gt; &gt; was to track already slow pathes.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;       We imagined that it could be possible to add at the
</span><br>
<span class="quotelev2">&gt; &gt; beginning (or end) of this &quot;bad path&quot; just one line that
</span><br>
<span class="quotelev3">&gt; &gt; &gt;       would basically do an atomic inc. So, in terms of CPU
</span><br>
<span class="quotelev2">&gt; &gt; cycles, something like 1 for the inc and maybe 1 jump
</span><br>
<span class="quotelev3">&gt; &gt; &gt;       before. Are a couple of cycles really an issue in slow
</span><br>
<span class="quotelev2">&gt; &gt; pathes (which take at least hundreds of cycles), or do
</span><br>
<span class="quotelev3">&gt; &gt; &gt;       you fear out-of-cache memory accesses - or something else ?
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;       As for outputs, they indeed are slow (and can slow down
</span><br>
<span class="quotelev2">&gt; &gt; considerably an application if not synchronized), but
</span><br>
<span class="quotelev3">&gt; &gt; &gt;       aggregation on the head node should solve our problems. And
</span><br>
<span class="quotelev2">&gt; &gt; if not, we can also disable outputs at runtime.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;       So, in my opinion, no application should notice a difference
</span><br>
<span class="quotelev2">&gt; &gt; (unless you tune the framework to output every
</span><br>
<span class="quotelev3">&gt; &gt; &gt;       warning).
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;       Sylvain
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; On Tue, 26 May 2009, Jeff Squyres wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;       Nadia --
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;       Sorry I didn't get to jump in on the other thread earlier.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;       We have made considerable changes to the notifier framework
</span><br>
<span class="quotelev2">&gt; &gt; in a branch to better support &quot;SOS&quot;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;       functionality:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;        <a href="https://www.open-mpi.org/hg/auth/hgwebdir.cgi/jsquyres/opal-sos">https://www.open-mpi.org/hg/auth/hgwebdir.cgi/jsquyres/opal-sos</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;       Cisco and Indiana U. have been working on this branch for a
</span><br>
<span class="quotelev2">&gt; &gt; while.  A description of the SOS stuff is
</span><br>
<span class="quotelev3">&gt; &gt; &gt;       here:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;        <a href="https://svn.open-mpi.org/trac/ompi/wiki/ErrorMessages">https://svn.open-mpi.org/trac/ompi/wiki/ErrorMessages</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;       As for setting up an external web server with hg, don't
</span><br>
<span class="quotelev2">&gt; &gt; bother -- just get an account at bitbucket.org.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;        They're free and allow you to host hg repositories there.
</span><br>
<span class="quotelev2">&gt; &gt; I've used bitbucket to collaborate on code
</span><br>
<span class="quotelev3">&gt; &gt; &gt;       before it hits OMPI's SVN trunk with both internal and
</span><br>
<span class="quotelev2">&gt; &gt; external OMPI developers.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;       We can certainly move the opal-sos repo to bitbucket (or
</span><br>
<span class="quotelev2">&gt; &gt; branch again off opal-sos to bitbucket --
</span><br>
<span class="quotelev3">&gt; &gt; &gt;       whatever makes more sense) to facilitate collaborating with
</span><br>
<span class="quotelev2">&gt; &gt; you.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;       Back on topic...
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;       I'd actually suggest a combination of what has been
</span><br>
<span class="quotelev2">&gt; &gt; discussed in the other thread.  The notifier can be
</span><br>
<span class="quotelev3">&gt; &gt; &gt;       the mechanism that actually sends the output message, but it
</span><br>
<span class="quotelev2">&gt; &gt; doesn't have to be the mechanism that tracks
</span><br>
<span class="quotelev3">&gt; &gt; &gt;       the stats and decides when to output a message.  That can be
</span><br>
<span class="quotelev2">&gt; &gt; separate logic, and therefore be more
</span><br>
<span class="quotelev3">&gt; &gt; &gt;       fine-grained (and potentially even specific to the MPI  
</span><br>
<span class="quotelev1">&gt; layer).
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;       The Big Question will how to do this with zero performance
</span><br>
<span class="quotelev2">&gt; &gt; impact when it is not being used. This has
</span><br>
<span class="quotelev3">&gt; &gt; &gt;       always been the difficult issue when trying to implement any
</span><br>
<span class="quotelev2">&gt; &gt; kind of monitoring inside the core OMPI
</span><br>
<span class="quotelev3">&gt; &gt; &gt;       performance-sensitive paths.  Even adding individual
</span><br>
<span class="quotelev2">&gt; &gt; branches has met with resistance (in
</span><br>
<span class="quotelev3">&gt; &gt; &gt;       performance-critical code paths)...
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;       On May 26, 2009, at 10:59 AM, Nadia Derbey wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;             Hi,
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;             While having a look at the notifier framework under
</span><br>
<span class="quotelev2">&gt; &gt; orte, I noticed that
</span><br>
<span class="quotelev3">&gt; &gt; &gt;             the way it is written, the init routine for the
</span><br>
<span class="quotelev2">&gt; &gt; selected module cannot
</span><br>
<span class="quotelev3">&gt; &gt; &gt;             be called.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;             Attached is a small patch that fixes this issue.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;             Regards,
</span><br>
<span class="quotelev3">&gt; &gt; &gt;             Nadia
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;             &lt;orte_notifier_fix_select.patch&gt;&lt;ATT14046023.txt&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;       --
</span><br>
<span class="quotelev3">&gt; &gt; &gt;       Jeff Squyres
</span><br>
<span class="quotelev3">&gt; &gt; &gt;       Cisco Systems
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;       _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt;       devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt;       devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt;       <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; &lt;ATT14397892.txt&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6119.php">George Bosilca: "Re: [OMPI devel] problem in the ORTE notifier framework"</a>
<li><strong>Previous message:</strong> <a href="6117.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21295"</a>
<li><strong>In reply to:</strong> <a href="6112.php">Jeff Squyres: "Re: [OMPI devel] problem in the ORTE notifier framework"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6119.php">George Bosilca: "Re: [OMPI devel] problem in the ORTE notifier framework"</a>
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
