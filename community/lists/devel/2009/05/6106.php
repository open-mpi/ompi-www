<?
$subject_val = "Re: [OMPI devel] problem in the ORTE notifier framework";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 27 08:22:10 2009" -->
<!-- isoreceived="20090527122210" -->
<!-- sent="Wed, 27 May 2009 14:21:54 +0200 (CEST)" -->
<!-- isosent="20090527122154" -->
<!-- name="Sylvain Jeaugey" -->
<!-- email="sylvain.jeaugey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] problem in the ORTE notifier framework" -->
<!-- id="alpine.DEB.2.00.0905271411290.4598_at_jeaugeys.frec.bull.fr" -->
<!-- charset="ISO-8859-15" -->
<!-- inreplyto="71d2d8cc0905270359l530cf2celaeea456a5c811f6_at_mail.gmail.com" -->
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
<strong>From:</strong> Sylvain Jeaugey (<em>sylvain.jeaugey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-27 08:21:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6107.php">Josh Hursey: "Re: [OMPI devel] === CREATE FAILURE (trunk) ==="</a>
<li><strong>Previous message:</strong> <a href="6105.php">Ralph Castain: "Re: [OMPI devel] problem in the ORTE notifier framework"</a>
<li><strong>In reply to:</strong> <a href="6105.php">Ralph Castain: "Re: [OMPI devel] problem in the ORTE notifier framework"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6112.php">Jeff Squyres: "Re: [OMPI devel] problem in the ORTE notifier framework"</a>
<li><strong>Reply:</strong> <a href="6112.php">Jeff Squyres: "Re: [OMPI devel] problem in the ORTE notifier framework"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I thought an if-then was 1 cycle. I mean, if you don't break the pipeline, 
<br>
i.e. use likely() or builtin_expect() or something like that to be sure 
<br>
that the compiler will generate assembly in the right way, it shouldn't be 
<br>
more than 1 cycle, perhaps less on some architectures like Itanium. But my 
<br>
multi-architecture view is somewhat limited to x86 and ia64, so I may be 
<br>
wrong. I'm personally much more sensitive to cache misses which can easily 
<br>
make the atomic-inc take hundreds of cycles if the event is out of the 
<br>
cache.
<br>
<p>ORTE_NOTIFIER_VERBOSE(api, counter, threshold,...) is also very close to 
<br>
what we had in mind : a one-line, single call to track events. Good.
<br>
<p>We will continue to dig in this direction using the opal-sos branch. 
<br>
Thanks a lot,
<br>
Sylvain
<br>
<p>On Wed, 27 May 2009, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; While that is a good way of minimizing the impact of the counter, you still have to do an &quot;if-then&quot; to check if the counter
</span><br>
<span class="quotelev1">&gt; exceeds the threshold. This &quot;if-then&quot; also has to get executed every time, and generally consumes more than a few cycles.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; To be clear: it isn't the output that is the concern. The output only occurs as an exception case, essentially equivalent
</span><br>
<span class="quotelev1">&gt; to dealing with an error, so it can be &quot;slow&quot;. The concern is with the impact of testing to see if the output needs to be
</span><br>
<span class="quotelev1">&gt; generated as this testing occurs every time we transit the code.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think Jeff and I are probably closer to agreement on design than it might seem, and may be close to what you might also
</span><br>
<span class="quotelev1">&gt; have had in mind. Basically, I was thinking of a macro like this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ORTE_NOTIFIER_VERBOSE(api, counter, threshold,...)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #if WANT_NOTIFIER_VERBOSE
</span><br>
<span class="quotelev1">&gt; opal_atomic_increment(counter);
</span><br>
<span class="quotelev1">&gt; if (counter &gt; threshold) {
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160; orte_notifier.api(.....)
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You would set the specific thresholds for each situation via MCA params, so this could be tuned to fit specific needs.
</span><br>
<span class="quotelev1">&gt; Those who don't want the penalty can just build normally - those who want this level of information can enable it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We can then see just how much penalty is involved in real world situations. My guess is that it won't be that big, but it's
</span><br>
<span class="quotelev1">&gt; hard to know without seeing how frequently we actually insert this code.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hope that makes sense
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Wed, May 27, 2009 at 1:25 AM, Sylvain Jeaugey &lt;sylvain.jeaugey_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;       About performance, I may miss something, but our first goal was to track already slow pathes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       We imagined that it could be possible to add at the beginning (or end) of this &quot;bad path&quot; just one line that
</span><br>
<span class="quotelev1">&gt;       would basically do an atomic inc. So, in terms of CPU cycles, something like 1 for the inc and maybe 1 jump
</span><br>
<span class="quotelev1">&gt;       before. Are a couple of cycles really an issue in slow pathes (which take at least hundreds of cycles), or do
</span><br>
<span class="quotelev1">&gt;       you fear out-of-cache memory accesses - or something else ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       As for outputs, they indeed are slow (and can slow down considerably an application if not synchronized), but
</span><br>
<span class="quotelev1">&gt;       aggregation on the head node should solve our problems. And if not, we can also disable outputs at runtime.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       So, in my opinion, no application should notice a difference (unless you tune the framework to output every
</span><br>
<span class="quotelev1">&gt;       warning).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       Sylvain
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Tue, 26 May 2009, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       Nadia --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       Sorry I didn't get to jump in on the other thread earlier.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       We have made considerable changes to the notifier framework in a branch to better support &quot;SOS&quot;
</span><br>
<span class="quotelev1">&gt;       functionality:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       &#160;<a href="https://www.open-mpi.org/hg/auth/hgwebdir.cgi/jsquyres/opal-sos">https://www.open-mpi.org/hg/auth/hgwebdir.cgi/jsquyres/opal-sos</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       Cisco and Indiana U. have been working on this branch for a while. &#160;A description of the SOS stuff is
</span><br>
<span class="quotelev1">&gt;       here:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       &#160;<a href="https://svn.open-mpi.org/trac/ompi/wiki/ErrorMessages">https://svn.open-mpi.org/trac/ompi/wiki/ErrorMessages</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       As for setting up an external web server with hg, don't bother -- just get an account at bitbucket.org.
</span><br>
<span class="quotelev1">&gt;       &#160;They're free and allow you to host hg repositories there. &#160;I've used bitbucket to collaborate on code
</span><br>
<span class="quotelev1">&gt;       before it hits OMPI's SVN trunk with both internal and external OMPI developers.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       We can certainly move the opal-sos repo to bitbucket (or branch again off opal-sos to bitbucket --
</span><br>
<span class="quotelev1">&gt;       whatever makes more sense) to facilitate collaborating with you.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       Back on topic...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       I'd actually suggest a combination of what has been discussed in the other thread. &#160;The notifier can be
</span><br>
<span class="quotelev1">&gt;       the mechanism that actually sends the output message, but it doesn't have to be the mechanism that tracks
</span><br>
<span class="quotelev1">&gt;       the stats and decides when to output a message. &#160;That can be separate logic, and therefore be more
</span><br>
<span class="quotelev1">&gt;       fine-grained (and potentially even specific to the MPI layer).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       The Big Question will how to do this with zero performance impact when it is not being used. This has
</span><br>
<span class="quotelev1">&gt;       always been the difficult issue when trying to implement any kind of monitoring inside the core OMPI
</span><br>
<span class="quotelev1">&gt;       performance-sensitive paths. &#160;Even adding individual branches has met with resistance (in
</span><br>
<span class="quotelev1">&gt;       performance-critical code paths)...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       On May 26, 2009, at 10:59 AM, Nadia Derbey wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             While having a look at the notifier framework under orte, I noticed that
</span><br>
<span class="quotelev1">&gt;             the way it is written, the init routine for the selected module cannot
</span><br>
<span class="quotelev1">&gt;             be called.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             Attached is a small patch that fixes this issue.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             Regards,
</span><br>
<span class="quotelev1">&gt;             Nadia
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             &lt;orte_notifier_fix_select.patch&gt;&lt;ATT14046023.txt&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       --
</span><br>
<span class="quotelev1">&gt;       Jeff Squyres
</span><br>
<span class="quotelev1">&gt;       Cisco Systems
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       _______________________________________________
</span><br>
<span class="quotelev1">&gt;       devel mailing list
</span><br>
<span class="quotelev1">&gt;       devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;       <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6107.php">Josh Hursey: "Re: [OMPI devel] === CREATE FAILURE (trunk) ==="</a>
<li><strong>Previous message:</strong> <a href="6105.php">Ralph Castain: "Re: [OMPI devel] problem in the ORTE notifier framework"</a>
<li><strong>In reply to:</strong> <a href="6105.php">Ralph Castain: "Re: [OMPI devel] problem in the ORTE notifier framework"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6112.php">Jeff Squyres: "Re: [OMPI devel] problem in the ORTE notifier framework"</a>
<li><strong>Reply:</strong> <a href="6112.php">Jeff Squyres: "Re: [OMPI devel] problem in the ORTE notifier framework"</a>
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
