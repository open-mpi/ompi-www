<?
$subject_val = "Re: [OMPI devel] problem in the ORTE notifier framework";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 27 06:59:16 2009" -->
<!-- isoreceived="20090527105916" -->
<!-- sent="Wed, 27 May 2009 04:59:10 -0600" -->
<!-- isosent="20090527105910" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] problem in the ORTE notifier framework" -->
<!-- id="71d2d8cc0905270359l530cf2celaeea456a5c811f6_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="alpine.DEB.2.00.0905270913420.4598_at_jeaugeys.frec.bull.fr" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-27 06:59:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6106.php">Sylvain Jeaugey: "Re: [OMPI devel] problem in the ORTE notifier framework"</a>
<li><strong>Previous message:</strong> <a href="6104.php">Holger Mickler: "Re: [OMPI devel] Remove IMB 2.3 from ompi-tests?"</a>
<li><strong>In reply to:</strong> <a href="6102.php">Sylvain Jeaugey: "Re: [OMPI devel] problem in the ORTE notifier framework"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6106.php">Sylvain Jeaugey: "Re: [OMPI devel] problem in the ORTE notifier framework"</a>
<li><strong>Reply:</strong> <a href="6106.php">Sylvain Jeaugey: "Re: [OMPI devel] problem in the ORTE notifier framework"</a>
<li><strong>Reply:</strong> <a href="6119.php">George Bosilca: "Re: [OMPI devel] problem in the ORTE notifier framework"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/06/6187.php">Sylvain Jeaugey: "Re: [OMPI devel] problem in the ORTE notifier framework"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
While that is a good way of minimizing the impact of the counter, you still
<br>
have to do an &quot;if-then&quot; to check if the counter exceeds the threshold. This
<br>
&quot;if-then&quot; also has to get executed every time, and generally consumes more
<br>
than a few cycles.
<br>
<p>To be clear: it isn't the output that is the concern. The output only occurs
<br>
as an exception case, essentially equivalent to dealing with an error, so it
<br>
can be &quot;slow&quot;. The concern is with the impact of testing to see if the
<br>
output needs to be generated as this testing occurs every time we transit
<br>
the code.
<br>
<p>I think Jeff and I are probably closer to agreement on design than it might
<br>
seem, and may be close to what you might also have had in mind. Basically, I
<br>
was thinking of a macro like this:
<br>
<p>ORTE_NOTIFIER_VERBOSE(api, counter, threshold,...)
<br>
<p>#if WANT_NOTIFIER_VERBOSE
<br>
opal_atomic_increment(counter);
<br>
if (counter &gt; threshold) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;orte_notifier.api(.....)
<br>
}
<br>
#endif
<br>
<p>You would set the specific thresholds for each situation via MCA params, so
<br>
this could be tuned to fit specific needs. Those who don't want the penalty
<br>
can just build normally - those who want this level of information can
<br>
enable it.
<br>
<p>We can then see just how much penalty is involved in real world situations.
<br>
My guess is that it won't be that big, but it's hard to know without seeing
<br>
how frequently we actually insert this code.
<br>
<p>Hope that makes sense
<br>
Ralph
<br>
<p><p>On Wed, May 27, 2009 at 1:25 AM, Sylvain Jeaugey
<br>
&lt;sylvain.jeaugey_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; About performance, I may miss something, but our first goal was to track
</span><br>
<span class="quotelev1">&gt; already slow pathes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We imagined that it could be possible to add at the beginning (or end) of
</span><br>
<span class="quotelev1">&gt; this &quot;bad path&quot; just one line that would basically do an atomic inc. So, in
</span><br>
<span class="quotelev1">&gt; terms of CPU cycles, something like 1 for the inc and maybe 1 jump before.
</span><br>
<span class="quotelev1">&gt; Are a couple of cycles really an issue in slow pathes (which take at least
</span><br>
<span class="quotelev1">&gt; hundreds of cycles), or do you fear out-of-cache memory accesses - or
</span><br>
<span class="quotelev1">&gt; something else ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As for outputs, they indeed are slow (and can slow down considerably an
</span><br>
<span class="quotelev1">&gt; application if not synchronized), but aggregation on the head node should
</span><br>
<span class="quotelev1">&gt; solve our problems. And if not, we can also disable outputs at runtime.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So, in my opinion, no application should notice a difference (unless you
</span><br>
<span class="quotelev1">&gt; tune the framework to output every warning).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sylvain
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, 26 May 2009, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Nadia --
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Sorry I didn't get to jump in on the other thread earlier.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We have made considerable changes to the notifier framework in a branch to
</span><br>
<span class="quotelev2">&gt;&gt; better support &quot;SOS&quot; functionality:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  <a href="https://www.open-mpi.org/hg/auth/hgwebdir.cgi/jsquyres/opal-sos">https://www.open-mpi.org/hg/auth/hgwebdir.cgi/jsquyres/opal-sos</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cisco and Indiana U. have been working on this branch for a while.  A
</span><br>
<span class="quotelev2">&gt;&gt; description of the SOS stuff is here:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  <a href="https://svn.open-mpi.org/trac/ompi/wiki/ErrorMessages">https://svn.open-mpi.org/trac/ompi/wiki/ErrorMessages</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; As for setting up an external web server with hg, don't bother -- just get
</span><br>
<span class="quotelev2">&gt;&gt; an account at bitbucket.org.  They're free and allow you to host hg
</span><br>
<span class="quotelev2">&gt;&gt; repositories there.  I've used bitbucket to collaborate on code before it
</span><br>
<span class="quotelev2">&gt;&gt; hits OMPI's SVN trunk with both internal and external OMPI developers.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We can certainly move the opal-sos repo to bitbucket (or branch again off
</span><br>
<span class="quotelev2">&gt;&gt; opal-sos to bitbucket -- whatever makes more sense) to facilitate
</span><br>
<span class="quotelev2">&gt;&gt; collaborating with you.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Back on topic...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'd actually suggest a combination of what has been discussed in the other
</span><br>
<span class="quotelev2">&gt;&gt; thread.  The notifier can be the mechanism that actually sends the output
</span><br>
<span class="quotelev2">&gt;&gt; message, but it doesn't have to be the mechanism that tracks the stats and
</span><br>
<span class="quotelev2">&gt;&gt; decides when to output a message.  That can be separate logic, and therefore
</span><br>
<span class="quotelev2">&gt;&gt; be more fine-grained (and potentially even specific to the MPI layer).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The Big Question will how to do this with zero performance impact when it
</span><br>
<span class="quotelev2">&gt;&gt; is not being used. This has always been the difficult issue when trying to
</span><br>
<span class="quotelev2">&gt;&gt; implement any kind of monitoring inside the core OMPI performance-sensitive
</span><br>
<span class="quotelev2">&gt;&gt; paths.  Even adding individual branches has met with resistance (in
</span><br>
<span class="quotelev2">&gt;&gt; performance-critical code paths)...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On May 26, 2009, at 10:59 AM, Nadia Derbey wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; While having a look at the notifier framework under orte, I noticed that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the way it is written, the init routine for the selected module cannot
</span><br>
<span class="quotelev3">&gt;&gt;&gt; be called.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Attached is a small patch that fixes this issue.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Nadia
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;orte_notifier_fix_select.patch&gt;&lt;ATT14046023.txt&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  _______________________________________________
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-6105/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6106.php">Sylvain Jeaugey: "Re: [OMPI devel] problem in the ORTE notifier framework"</a>
<li><strong>Previous message:</strong> <a href="6104.php">Holger Mickler: "Re: [OMPI devel] Remove IMB 2.3 from ompi-tests?"</a>
<li><strong>In reply to:</strong> <a href="6102.php">Sylvain Jeaugey: "Re: [OMPI devel] problem in the ORTE notifier framework"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6106.php">Sylvain Jeaugey: "Re: [OMPI devel] problem in the ORTE notifier framework"</a>
<li><strong>Reply:</strong> <a href="6106.php">Sylvain Jeaugey: "Re: [OMPI devel] problem in the ORTE notifier framework"</a>
<li><strong>Reply:</strong> <a href="6119.php">George Bosilca: "Re: [OMPI devel] problem in the ORTE notifier framework"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/06/6187.php">Sylvain Jeaugey: "Re: [OMPI devel] problem in the ORTE notifier framework"</a>
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
