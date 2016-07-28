<?
$subject_val = "Re: [OMPI devel] problem in the ORTE notifier framework";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 26 19:24:12 2009" -->
<!-- isoreceived="20090526232412" -->
<!-- sent="Tue, 26 May 2009 17:24:07 -0600" -->
<!-- isosent="20090526232407" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] problem in the ORTE notifier framework" -->
<!-- id="71d2d8cc0905261624g49970533vb2877b985cccb4f8_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="2C58DFBA-0CB8-4B7A-972E-3E284921071D_at_cisco.com" -->
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
<strong>Date:</strong> 2009-05-26 19:24:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6098.php">Jeff Squyres: "Re: [OMPI devel] problem in the ORTE notifier framework"</a>
<li><strong>Previous message:</strong> <a href="6096.php">Eugene Loh: "Re: [OMPI devel] RFC: Diagnostoc framework for MPI"</a>
<li><strong>In reply to:</strong> <a href="6093.php">Jeff Squyres: "Re: [OMPI devel] problem in the ORTE notifier framework"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6098.php">Jeff Squyres: "Re: [OMPI devel] problem in the ORTE notifier framework"</a>
<li><strong>Reply:</strong> <a href="6098.php">Jeff Squyres: "Re: [OMPI devel] problem in the ORTE notifier framework"</a>
<li><strong>Reply:</strong> <a href="6139.php">Nadia Derbey: "Re: [OMPI devel] problem in the ORTE notifier framework"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
First, to answer Nadia's question: you will find that the init function for
<br>
the module is already called when it is selected - see the code in
<br>
orte/mca/base/notifier_base_select.c, lines 72-76 (in the trunk.
<br>
<p>It would be a good idea to tie into the sos work to avoid conflicts when it
<br>
all gets merged back together, assuming that isn't a big problem for you.
<br>
<p>As for Jeff's suggestion: dealing with the performance hit problem is why I
<br>
suggested ORTE_NOTIFIER_VERBOSE, modeled after the OPAL_OUTPUT_VERBOSE
<br>
model. The idea was to compile it in -only- when the system is built for it
<br>
- maybe using a --with-notifier-verbose configuration option. Frankly, some
<br>
organizations would happily pay a small performance penalty for the
<br>
benefits.
<br>
<p>I would personally recommend that the notifier framework keep the stats so
<br>
things can be compact and self-contained. We still get atomicity by allowing
<br>
each framework/component/whatever specify the threshold. Creating yet
<br>
another system to do nothing more than track error/warning frequencies to
<br>
decide whether or not to notify seems wasteful.
<br>
<p>Perhaps worth a phone call to decide path forward?
<br>
<p><p>On Tue, May 26, 2009 at 1:06 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Nadia --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sorry I didn't get to jump in on the other thread earlier.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We have made considerable changes to the notifier framework in a branch to
</span><br>
<span class="quotelev1">&gt; better support &quot;SOS&quot; functionality:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    <a href="https://www.open-mpi.org/hg/auth/hgwebdir.cgi/jsquyres/opal-sos">https://www.open-mpi.org/hg/auth/hgwebdir.cgi/jsquyres/opal-sos</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cisco and Indiana U. have been working on this branch for a while.  A
</span><br>
<span class="quotelev1">&gt; description of the SOS stuff is here:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    <a href="https://svn.open-mpi.org/trac/ompi/wiki/ErrorMessages">https://svn.open-mpi.org/trac/ompi/wiki/ErrorMessages</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As for setting up an external web server with hg, don't bother -- just get
</span><br>
<span class="quotelev1">&gt; an account at bitbucket.org.  They're free and allow you to host hg
</span><br>
<span class="quotelev1">&gt; repositories there.  I've used bitbucket to collaborate on code before it
</span><br>
<span class="quotelev1">&gt; hits OMPI's SVN trunk with both internal and external OMPI developers.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We can certainly move the opal-sos repo to bitbucket (or branch again off
</span><br>
<span class="quotelev1">&gt; opal-sos to bitbucket -- whatever makes more sense) to facilitate
</span><br>
<span class="quotelev1">&gt; collaborating with you.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Back on topic...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'd actually suggest a combination of what has been discussed in the other
</span><br>
<span class="quotelev1">&gt; thread.  The notifier can be the mechanism that actually sends the output
</span><br>
<span class="quotelev1">&gt; message, but it doesn't have to be the mechanism that tracks the stats and
</span><br>
<span class="quotelev1">&gt; decides when to output a message.  That can be separate logic, and therefore
</span><br>
<span class="quotelev1">&gt; be more fine-grained (and potentially even specific to the MPI layer).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The Big Question will how to do this with zero performance impact when it
</span><br>
<span class="quotelev1">&gt; is not being used. This has always been the difficult issue when trying to
</span><br>
<span class="quotelev1">&gt; implement any kind of monitoring inside the core OMPI performance-sensitive
</span><br>
<span class="quotelev1">&gt; paths.  Even adding individual branches has met with resistance (in
</span><br>
<span class="quotelev1">&gt; performance-critical code paths)...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On May 26, 2009, at 10:59 AM, Nadia Derbey wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; While having a look at the notifier framework under orte, I noticed that
</span><br>
<span class="quotelev2">&gt;&gt; the way it is written, the init routine for the selected module cannot
</span><br>
<span class="quotelev2">&gt;&gt; be called.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Attached is a small patch that fixes this issue.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt; Nadia
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;orte_notifier_fix_select.patch&gt;&lt;ATT14046023.txt&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-6097/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6098.php">Jeff Squyres: "Re: [OMPI devel] problem in the ORTE notifier framework"</a>
<li><strong>Previous message:</strong> <a href="6096.php">Eugene Loh: "Re: [OMPI devel] RFC: Diagnostoc framework for MPI"</a>
<li><strong>In reply to:</strong> <a href="6093.php">Jeff Squyres: "Re: [OMPI devel] problem in the ORTE notifier framework"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6098.php">Jeff Squyres: "Re: [OMPI devel] problem in the ORTE notifier framework"</a>
<li><strong>Reply:</strong> <a href="6098.php">Jeff Squyres: "Re: [OMPI devel] problem in the ORTE notifier framework"</a>
<li><strong>Reply:</strong> <a href="6139.php">Nadia Derbey: "Re: [OMPI devel] problem in the ORTE notifier framework"</a>
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
