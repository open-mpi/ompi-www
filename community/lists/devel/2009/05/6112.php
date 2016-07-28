<?
$subject_val = "Re: [OMPI devel] problem in the ORTE notifier framework";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 27 09:49:19 2009" -->
<!-- isoreceived="20090527134919" -->
<!-- sent="Wed, 27 May 2009 09:49:13 -0400" -->
<!-- isosent="20090527134913" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] problem in the ORTE notifier framework" -->
<!-- id="908E13E9-613B-4FED-A57D-2DB35ECF70EB_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="alpine.DEB.2.00.0905271411290.4598_at_jeaugeys.frec.bull.fr" -->
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
<strong>Date:</strong> 2009-05-27 09:49:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6113.php">Rainer Keller: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21292"</a>
<li><strong>Previous message:</strong> <a href="6111.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21292"</a>
<li><strong>In reply to:</strong> <a href="6106.php">Sylvain Jeaugey: "Re: [OMPI devel] problem in the ORTE notifier framework"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6118.php">Jeff Squyres: "Re: [OMPI devel] problem in the ORTE notifier framework"</a>
<li><strong>Reply:</strong> <a href="6118.php">Jeff Squyres: "Re: [OMPI devel] problem in the ORTE notifier framework"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This all sounds reasonable.
<br>
<p>If these are, indeed, on already-slow code paths, I doubt there will  
<br>
be much of an issue.
<br>
<p>If you want to talk about this higher bandwidth, let us know -- I can  
<br>
setup a Webex call pretty easily.
<br>
<p><p>On May 27, 2009, at 8:21 AM, Sylvain Jeaugey wrote:
<br>
<p><span class="quotelev1">&gt; I thought an if-then was 1 cycle. I mean, if you don't break the  
</span><br>
<span class="quotelev1">&gt; pipeline,
</span><br>
<span class="quotelev1">&gt; i.e. use likely() or builtin_expect() or something like that to be  
</span><br>
<span class="quotelev1">&gt; sure
</span><br>
<span class="quotelev1">&gt; that the compiler will generate assembly in the right way, it  
</span><br>
<span class="quotelev1">&gt; shouldn't be
</span><br>
<span class="quotelev1">&gt; more than 1 cycle, perhaps less on some architectures like Itanium.  
</span><br>
<span class="quotelev1">&gt; But my
</span><br>
<span class="quotelev1">&gt; multi-architecture view is somewhat limited to x86 and ia64, so I  
</span><br>
<span class="quotelev1">&gt; may be
</span><br>
<span class="quotelev1">&gt; wrong. I'm personally much more sensitive to cache misses which can  
</span><br>
<span class="quotelev1">&gt; easily
</span><br>
<span class="quotelev1">&gt; make the atomic-inc take hundreds of cycles if the event is out of the
</span><br>
<span class="quotelev1">&gt; cache.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ORTE_NOTIFIER_VERBOSE(api, counter, threshold,...) is also very  
</span><br>
<span class="quotelev1">&gt; close to
</span><br>
<span class="quotelev1">&gt; what we had in mind : a one-line, single call to track events. Good.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We will continue to dig in this direction using the opal-sos branch.
</span><br>
<span class="quotelev1">&gt; Thanks a lot,
</span><br>
<span class="quotelev1">&gt; Sylvain
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, 27 May 2009, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; While that is a good way of minimizing the impact of the counter,  
</span><br>
<span class="quotelev1">&gt; you still have to do an &quot;if-then&quot; to check if the counter
</span><br>
<span class="quotelev2">&gt; &gt; exceeds the threshold. This &quot;if-then&quot; also has to get executed  
</span><br>
<span class="quotelev1">&gt; every time, and generally consumes more than a few cycles.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; To be clear: it isn't the output that is the concern. The output  
</span><br>
<span class="quotelev1">&gt; only occurs as an exception case, essentially equivalent
</span><br>
<span class="quotelev2">&gt; &gt; to dealing with an error, so it can be &quot;slow&quot;. The concern is with  
</span><br>
<span class="quotelev1">&gt; the impact of testing to see if the output needs to be
</span><br>
<span class="quotelev2">&gt; &gt; generated as this testing occurs every time we transit the code.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I think Jeff and I are probably closer to agreement on design than  
</span><br>
<span class="quotelev1">&gt; it might seem, and may be close to what you might also
</span><br>
<span class="quotelev2">&gt; &gt; have had in mind. Basically, I was thinking of a macro like this:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ORTE_NOTIFIER_VERBOSE(api, counter, threshold,...)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; #if WANT_NOTIFIER_VERBOSE
</span><br>
<span class="quotelev2">&gt; &gt; opal_atomic_increment(counter);
</span><br>
<span class="quotelev2">&gt; &gt; if (counter &gt; threshold) {
</span><br>
<span class="quotelev2">&gt; &gt;     orte_notifier.api(.....)
</span><br>
<span class="quotelev2">&gt; &gt; }
</span><br>
<span class="quotelev2">&gt; &gt; #endif
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; You would set the specific thresholds for each situation via MCA  
</span><br>
<span class="quotelev1">&gt; params, so this could be tuned to fit specific needs.
</span><br>
<span class="quotelev2">&gt; &gt; Those who don't want the penalty can just build normally - those  
</span><br>
<span class="quotelev1">&gt; who want this level of information can enable it.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; We can then see just how much penalty is involved in real world  
</span><br>
<span class="quotelev1">&gt; situations. My guess is that it won't be that big, but it's
</span><br>
<span class="quotelev2">&gt; &gt; hard to know without seeing how frequently we actually insert this  
</span><br>
<span class="quotelev1">&gt; code.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hope that makes sense
</span><br>
<span class="quotelev2">&gt; &gt; Ralph
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Wed, May 27, 2009 at 1:25 AM, Sylvain Jeaugey &lt;sylvain.jeaugey_at_[hidden] 
</span><br>
<span class="quotelev2">&gt; &gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;       About performance, I may miss something, but our first goal  
</span><br>
<span class="quotelev1">&gt; was to track already slow pathes.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;       We imagined that it could be possible to add at the  
</span><br>
<span class="quotelev1">&gt; beginning (or end) of this &quot;bad path&quot; just one line that
</span><br>
<span class="quotelev2">&gt; &gt;       would basically do an atomic inc. So, in terms of CPU  
</span><br>
<span class="quotelev1">&gt; cycles, something like 1 for the inc and maybe 1 jump
</span><br>
<span class="quotelev2">&gt; &gt;       before. Are a couple of cycles really an issue in slow  
</span><br>
<span class="quotelev1">&gt; pathes (which take at least hundreds of cycles), or do
</span><br>
<span class="quotelev2">&gt; &gt;       you fear out-of-cache memory accesses - or something else ?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;       As for outputs, they indeed are slow (and can slow down  
</span><br>
<span class="quotelev1">&gt; considerably an application if not synchronized), but
</span><br>
<span class="quotelev2">&gt; &gt;       aggregation on the head node should solve our problems. And  
</span><br>
<span class="quotelev1">&gt; if not, we can also disable outputs at runtime.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;       So, in my opinion, no application should notice a difference  
</span><br>
<span class="quotelev1">&gt; (unless you tune the framework to output every
</span><br>
<span class="quotelev2">&gt; &gt;       warning).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;       Sylvain
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Tue, 26 May 2009, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;       Nadia --
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;       Sorry I didn't get to jump in on the other thread earlier.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;       We have made considerable changes to the notifier framework  
</span><br>
<span class="quotelev1">&gt; in a branch to better support &quot;SOS&quot;
</span><br>
<span class="quotelev2">&gt; &gt;       functionality:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;        <a href="https://www.open-mpi.org/hg/auth/hgwebdir.cgi/jsquyres/opal-sos">https://www.open-mpi.org/hg/auth/hgwebdir.cgi/jsquyres/opal-sos</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;       Cisco and Indiana U. have been working on this branch for a  
</span><br>
<span class="quotelev1">&gt; while.  A description of the SOS stuff is
</span><br>
<span class="quotelev2">&gt; &gt;       here:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;        <a href="https://svn.open-mpi.org/trac/ompi/wiki/ErrorMessages">https://svn.open-mpi.org/trac/ompi/wiki/ErrorMessages</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;       As for setting up an external web server with hg, don't  
</span><br>
<span class="quotelev1">&gt; bother -- just get an account at bitbucket.org.
</span><br>
<span class="quotelev2">&gt; &gt;        They're free and allow you to host hg repositories there.   
</span><br>
<span class="quotelev1">&gt; I've used bitbucket to collaborate on code
</span><br>
<span class="quotelev2">&gt; &gt;       before it hits OMPI's SVN trunk with both internal and  
</span><br>
<span class="quotelev1">&gt; external OMPI developers.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;       We can certainly move the opal-sos repo to bitbucket (or  
</span><br>
<span class="quotelev1">&gt; branch again off opal-sos to bitbucket --
</span><br>
<span class="quotelev2">&gt; &gt;       whatever makes more sense) to facilitate collaborating with  
</span><br>
<span class="quotelev1">&gt; you.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;       Back on topic...
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;       I'd actually suggest a combination of what has been  
</span><br>
<span class="quotelev1">&gt; discussed in the other thread.  The notifier can be
</span><br>
<span class="quotelev2">&gt; &gt;       the mechanism that actually sends the output message, but it  
</span><br>
<span class="quotelev1">&gt; doesn't have to be the mechanism that tracks
</span><br>
<span class="quotelev2">&gt; &gt;       the stats and decides when to output a message.  That can be  
</span><br>
<span class="quotelev1">&gt; separate logic, and therefore be more
</span><br>
<span class="quotelev2">&gt; &gt;       fine-grained (and potentially even specific to the MPI layer).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;       The Big Question will how to do this with zero performance  
</span><br>
<span class="quotelev1">&gt; impact when it is not being used. This has
</span><br>
<span class="quotelev2">&gt; &gt;       always been the difficult issue when trying to implement any  
</span><br>
<span class="quotelev1">&gt; kind of monitoring inside the core OMPI
</span><br>
<span class="quotelev2">&gt; &gt;       performance-sensitive paths.  Even adding individual  
</span><br>
<span class="quotelev1">&gt; branches has met with resistance (in
</span><br>
<span class="quotelev2">&gt; &gt;       performance-critical code paths)...
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;       On May 26, 2009, at 10:59 AM, Nadia Derbey wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;             Hi,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;             While having a look at the notifier framework under  
</span><br>
<span class="quotelev1">&gt; orte, I noticed that
</span><br>
<span class="quotelev2">&gt; &gt;             the way it is written, the init routine for the  
</span><br>
<span class="quotelev1">&gt; selected module cannot
</span><br>
<span class="quotelev2">&gt; &gt;             be called.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;             Attached is a small patch that fixes this issue.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;             Regards,
</span><br>
<span class="quotelev2">&gt; &gt;             Nadia
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;             &lt;orte_notifier_fix_select.patch&gt;&lt;ATT14046023.txt&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;       --
</span><br>
<span class="quotelev2">&gt; &gt;       Jeff Squyres
</span><br>
<span class="quotelev2">&gt; &gt;       Cisco Systems
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;       _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt;       devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt;       devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;       <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;ATT14397892.txt&gt;
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
<li><strong>Next message:</strong> <a href="6113.php">Rainer Keller: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21292"</a>
<li><strong>Previous message:</strong> <a href="6111.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21292"</a>
<li><strong>In reply to:</strong> <a href="6106.php">Sylvain Jeaugey: "Re: [OMPI devel] problem in the ORTE notifier framework"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6118.php">Jeff Squyres: "Re: [OMPI devel] problem in the ORTE notifier framework"</a>
<li><strong>Reply:</strong> <a href="6118.php">Jeff Squyres: "Re: [OMPI devel] problem in the ORTE notifier framework"</a>
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
