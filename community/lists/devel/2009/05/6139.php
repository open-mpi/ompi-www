<?
$subject_val = "Re: [OMPI devel] problem in the ORTE notifier framework";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 28 03:40:24 2009" -->
<!-- isoreceived="20090528074024" -->
<!-- sent="Thu, 28 May 2009 09:36:38 +0200" -->
<!-- isosent="20090528073638" -->
<!-- name="Nadia Derbey" -->
<!-- email="Nadia.Derbey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] problem in the ORTE notifier framework" -->
<!-- id="1243496198.2634.53.camel_at_frecb000730.frec.bull.fr" -->
<!-- inreplyto="71d2d8cc0905261624g49970533vb2877b985cccb4f8_at_mail.gmail.com" -->
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
<strong>From:</strong> Nadia Derbey (<em>Nadia.Derbey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-28 03:36:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6140.php">Sylvain Jeaugey: "Re: [OMPI devel] problem in the ORTE notifier framework"</a>
<li><strong>Previous message:</strong> <a href="6138.php">Holger Mickler: "Re: [OMPI devel] Remove IMB 2.3 from ompi-tests?"</a>
<li><strong>In reply to:</strong> <a href="6097.php">Ralph Castain: "Re: [OMPI devel] problem in the ORTE notifier framework"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6140.php">Sylvain Jeaugey: "Re: [OMPI devel] problem in the ORTE notifier framework"</a>
<li><strong>Reply:</strong> <a href="6140.php">Sylvain Jeaugey: "Re: [OMPI devel] problem in the ORTE notifier framework"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, 2009-05-26 at 17:24 -0600, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; First, to answer Nadia's question: you will find that the init
</span><br>
<span class="quotelev1">&gt; function for the module is already called when it is selected - see
</span><br>
<span class="quotelev1">&gt; the code in orte/mca/base/notifier_base_select.c, lines 72-76 (in the
</span><br>
<span class="quotelev1">&gt; trunk.
</span><br>
<p>Strange? Our repository is a clone of the trunk?
<br>
<span class="quotelev1">&gt; 
</span><br>
It's true that if I &quot;hg update&quot; to v1.3 I see that the fix is there.
<br>
<p>Regards,
<br>
Nadia
<br>
<p><span class="quotelev1">&gt; It would be a good idea to tie into the sos work to avoid conflicts
</span><br>
<span class="quotelev1">&gt; when it all gets merged back together, assuming that isn't a big
</span><br>
<span class="quotelev1">&gt; problem for you.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As for Jeff's suggestion: dealing with the performance hit problem is
</span><br>
<span class="quotelev1">&gt; why I suggested ORTE_NOTIFIER_VERBOSE, modeled after the
</span><br>
<span class="quotelev1">&gt; OPAL_OUTPUT_VERBOSE model. The idea was to compile it in -only- when
</span><br>
<span class="quotelev1">&gt; the system is built for it - maybe using a --with-notifier-verbose
</span><br>
<span class="quotelev1">&gt; configuration option. Frankly, some organizations would happily pay a
</span><br>
<span class="quotelev1">&gt; small performance penalty for the benefits.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I would personally recommend that the notifier framework keep the
</span><br>
<span class="quotelev1">&gt; stats so things can be compact and self-contained. We still get
</span><br>
<span class="quotelev1">&gt; atomicity by allowing each framework/component/whatever specify the
</span><br>
<span class="quotelev1">&gt; threshold. Creating yet another system to do nothing more than track
</span><br>
<span class="quotelev1">&gt; error/warning frequencies to decide whether or not to notify seems
</span><br>
<span class="quotelev1">&gt; wasteful.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Perhaps worth a phone call to decide path forward?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Tue, May 26, 2009 at 1:06 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;         Nadia --
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         Sorry I didn't get to jump in on the other thread earlier.
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         We have made considerable changes to the notifier framework in
</span><br>
<span class="quotelev1">&gt;         a branch to better support &quot;SOS&quot; functionality:
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;          <a href="https://www.open-mpi.org/hg/auth/hgwebdir.cgi/jsquyres/opal-sos">https://www.open-mpi.org/hg/auth/hgwebdir.cgi/jsquyres/opal-sos</a>
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         Cisco and Indiana U. have been working on this branch for a
</span><br>
<span class="quotelev1">&gt;         while.  A description of the SOS stuff is here:
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;            <a href="https://svn.open-mpi.org/trac/ompi/wiki/ErrorMessages">https://svn.open-mpi.org/trac/ompi/wiki/ErrorMessages</a>
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         As for setting up an external web server with hg, don't bother
</span><br>
<span class="quotelev1">&gt;         -- just get an account at bitbucket.org.  They're free and
</span><br>
<span class="quotelev1">&gt;         allow you to host hg repositories there.  I've used bitbucket
</span><br>
<span class="quotelev1">&gt;         to collaborate on code before it hits OMPI's SVN trunk with
</span><br>
<span class="quotelev1">&gt;         both internal and external OMPI developers.
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         We can certainly move the opal-sos repo to bitbucket (or
</span><br>
<span class="quotelev1">&gt;         branch again off opal-sos to bitbucket -- whatever makes more
</span><br>
<span class="quotelev1">&gt;         sense) to facilitate collaborating with you.
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         Back on topic...
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         I'd actually suggest a combination of what has been discussed
</span><br>
<span class="quotelev1">&gt;         in the other thread.  The notifier can be the mechanism that
</span><br>
<span class="quotelev1">&gt;         actually sends the output message, but it doesn't have to be
</span><br>
<span class="quotelev1">&gt;         the mechanism that tracks the stats and decides when to output
</span><br>
<span class="quotelev1">&gt;         a message.  That can be separate logic, and therefore be more
</span><br>
<span class="quotelev1">&gt;         fine-grained (and potentially even specific to the MPI layer).
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         The Big Question will how to do this with zero performance
</span><br>
<span class="quotelev1">&gt;         impact when it is not being used. This has always been the
</span><br>
<span class="quotelev1">&gt;         difficult issue when trying to implement any kind of
</span><br>
<span class="quotelev1">&gt;         monitoring inside the core OMPI performance-sensitive paths.
</span><br>
<span class="quotelev1">&gt;          Even adding individual branches has met with resistance (in
</span><br>
<span class="quotelev1">&gt;         performance-critical code paths)...
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         On May 26, 2009, at 10:59 AM, Nadia Derbey wrote:
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;                 
</span><br>
<span class="quotelev1">&gt;                 Hi,
</span><br>
<span class="quotelev1">&gt;                 
</span><br>
<span class="quotelev1">&gt;                 While having a look at the notifier framework under
</span><br>
<span class="quotelev1">&gt;                 orte, I noticed that
</span><br>
<span class="quotelev1">&gt;                 the way it is written, the init routine for the
</span><br>
<span class="quotelev1">&gt;                 selected module cannot
</span><br>
<span class="quotelev1">&gt;                 be called.
</span><br>
<span class="quotelev1">&gt;                 
</span><br>
<span class="quotelev1">&gt;                 Attached is a small patch that fixes this issue.
</span><br>
<span class="quotelev1">&gt;                 
</span><br>
<span class="quotelev1">&gt;                 Regards,
</span><br>
<span class="quotelev1">&gt;                 Nadia
</span><br>
<span class="quotelev1">&gt;                 
</span><br>
<span class="quotelev1">&gt;                 
</span><br>
<span class="quotelev1">&gt;                 &lt;orte_notifier_fix_select.patch&gt;&lt;ATT14046023.txt&gt;
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         -- 
</span><br>
<span class="quotelev1">&gt;         Jeff Squyres
</span><br>
<span class="quotelev1">&gt;         Cisco Systems
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         _______________________________________________
</span><br>
<span class="quotelev1">&gt;         devel mailing list
</span><br>
<span class="quotelev1">&gt;         devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;         <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<pre>
-- 
Nadia Derbey &lt;Nadia.Derbey_at_[hidden]&gt;
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6140.php">Sylvain Jeaugey: "Re: [OMPI devel] problem in the ORTE notifier framework"</a>
<li><strong>Previous message:</strong> <a href="6138.php">Holger Mickler: "Re: [OMPI devel] Remove IMB 2.3 from ompi-tests?"</a>
<li><strong>In reply to:</strong> <a href="6097.php">Ralph Castain: "Re: [OMPI devel] problem in the ORTE notifier framework"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6140.php">Sylvain Jeaugey: "Re: [OMPI devel] problem in the ORTE notifier framework"</a>
<li><strong>Reply:</strong> <a href="6140.php">Sylvain Jeaugey: "Re: [OMPI devel] problem in the ORTE notifier framework"</a>
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
