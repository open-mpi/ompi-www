<?
$subject_val = "Re: [OMPI devel] problem in the ORTE notifier framework";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 28 07:53:19 2009" -->
<!-- isoreceived="20090528115319" -->
<!-- sent="Thu, 28 May 2009 05:53:13 -0600" -->
<!-- isosent="20090528115313" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] problem in the ORTE notifier framework" -->
<!-- id="71d2d8cc0905280453m71402e79u2a95f29dd48cf1a5_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="alpine.DEB.2.00.0905280944090.4598_at_jeaugeys.frec.bull.fr" -->
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
<strong>Date:</strong> 2009-05-28 07:53:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6144.php">Ralph Castain: "Re: [OMPI devel] problem in the ORTE notifier framework"</a>
<li><strong>Previous message:</strong> <a href="6142.php">Jeff Squyres: "Re: [OMPI devel] Remove IMB 2.3 from ompi-tests?"</a>
<li><strong>In reply to:</strong> <a href="6140.php">Sylvain Jeaugey: "Re: [OMPI devel] problem in the ORTE notifier framework"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6146.php">Jeff Squyres: "Re: [OMPI devel] problem in the ORTE notifier framework"</a>
<li><strong>Reply:</strong> <a href="6146.php">Jeff Squyres: "Re: [OMPI devel] problem in the ORTE notifier framework"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The code in 1.3 is definitely different from the trunk as it lags quite a
<br>
bit behind. However, the trunk definitely does include the code I
<br>
referenced.
<br>
<p>Not sure why the hg mirror wouldn't have it. I would have to defer to Jeff
<br>
on that question - could be a bug in the update macro that maintains the
<br>
mirror?
<br>
<p>I haven't checked the opal_sos branch to see if it has the code in it, but I
<br>
would have thought those guys were tracking the trunk that closely - that
<br>
code was committed in r19209.
<br>
<p>Ralph
<br>
<p><p>On Thu, May 28, 2009 at 1:45 AM, Sylvain Jeaugey
<br>
&lt;sylvain.jeaugey_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; To be more complete, we pull Hg from
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/hg/hgwebdir.cgi/ompi-svn-mirror/">http://www.open-mpi.org/hg/hgwebdir.cgi/ompi-svn-mirror/</a> ; are we mistaken
</span><br>
<span class="quotelev1">&gt; ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If not, the code in v1.3 seems to be different from the code in the trunk
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sylvain
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, 28 May 2009, Nadia Derbey wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  On Tue, 2009-05-26 at 17:24 -0600, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; First, to answer Nadia's question: you will find that the init
</span><br>
<span class="quotelev3">&gt;&gt;&gt; function for the module is already called when it is selected - see
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the code in orte/mca/base/notifier_base_select.c, lines 72-76 (in the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; trunk.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Strange? Our repository is a clone of the trunk?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  It's true that if I &quot;hg update&quot; to v1.3 I see that the fix is there.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt; Nadia
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  It would be a good idea to tie into the sos work to avoid conflicts
</span><br>
<span class="quotelev3">&gt;&gt;&gt; when it all gets merged back together, assuming that isn't a big
</span><br>
<span class="quotelev3">&gt;&gt;&gt; problem for you.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; As for Jeff's suggestion: dealing with the performance hit problem is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; why I suggested ORTE_NOTIFIER_VERBOSE, modeled after the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OPAL_OUTPUT_VERBOSE model. The idea was to compile it in -only- when
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the system is built for it - maybe using a --with-notifier-verbose
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configuration option. Frankly, some organizations would happily pay a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; small performance penalty for the benefits.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I would personally recommend that the notifier framework keep the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; stats so things can be compact and self-contained. We still get
</span><br>
<span class="quotelev3">&gt;&gt;&gt; atomicity by allowing each framework/component/whatever specify the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; threshold. Creating yet another system to do nothing more than track
</span><br>
<span class="quotelev3">&gt;&gt;&gt; error/warning frequencies to decide whether or not to notify seems
</span><br>
<span class="quotelev3">&gt;&gt;&gt; wasteful.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Perhaps worth a phone call to decide path forward?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Tue, May 26, 2009 at 1:06 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        Nadia --
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        Sorry I didn't get to jump in on the other thread earlier.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        We have made considerable changes to the notifier framework in
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        a branch to better support &quot;SOS&quot; functionality:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         <a href="https://www.open-mpi.org/hg/auth/hgwebdir.cgi/jsquyres/opal-sos">https://www.open-mpi.org/hg/auth/hgwebdir.cgi/jsquyres/opal-sos</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        Cisco and Indiana U. have been working on this branch for a
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        while.  A description of the SOS stuff is here:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           <a href="https://svn.open-mpi.org/trac/ompi/wiki/ErrorMessages">https://svn.open-mpi.org/trac/ompi/wiki/ErrorMessages</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        As for setting up an external web server with hg, don't bother
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        -- just get an account at bitbucket.org.  They're free and
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        allow you to host hg repositories there.  I've used bitbucket
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        to collaborate on code before it hits OMPI's SVN trunk with
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        both internal and external OMPI developers.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        We can certainly move the opal-sos repo to bitbucket (or
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        branch again off opal-sos to bitbucket -- whatever makes more
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        sense) to facilitate collaborating with you.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        Back on topic...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        I'd actually suggest a combination of what has been discussed
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        in the other thread.  The notifier can be the mechanism that
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        actually sends the output message, but it doesn't have to be
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        the mechanism that tracks the stats and decides when to output
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        a message.  That can be separate logic, and therefore be more
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        fine-grained (and potentially even specific to the MPI layer).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        The Big Question will how to do this with zero performance
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        impact when it is not being used. This has always been the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        difficult issue when trying to implement any kind of
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        monitoring inside the core OMPI performance-sensitive paths.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Even adding individual branches has met with resistance (in
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        performance-critical code paths)...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        On May 26, 2009, at 10:59 AM, Nadia Derbey wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                While having a look at the notifier framework under
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                orte, I noticed that
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                the way it is written, the init routine for the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                selected module cannot
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                be called.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                Attached is a small patch that fixes this issue.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                Regards,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                Nadia
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                &lt;orte_notifier_fix_select.patch&gt;&lt;ATT14046023.txt&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        --
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        Cisco Systems
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Nadia Derbey &lt;Nadia.Derbey_at_[hidden]&gt;
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-6143/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6144.php">Ralph Castain: "Re: [OMPI devel] problem in the ORTE notifier framework"</a>
<li><strong>Previous message:</strong> <a href="6142.php">Jeff Squyres: "Re: [OMPI devel] Remove IMB 2.3 from ompi-tests?"</a>
<li><strong>In reply to:</strong> <a href="6140.php">Sylvain Jeaugey: "Re: [OMPI devel] problem in the ORTE notifier framework"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6146.php">Jeff Squyres: "Re: [OMPI devel] problem in the ORTE notifier framework"</a>
<li><strong>Reply:</strong> <a href="6146.php">Jeff Squyres: "Re: [OMPI devel] problem in the ORTE notifier framework"</a>
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
