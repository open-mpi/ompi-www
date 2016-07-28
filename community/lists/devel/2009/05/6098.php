<?
$subject_val = "Re: [OMPI devel] problem in the ORTE notifier framework";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 26 19:47:30 2009" -->
<!-- isoreceived="20090526234730" -->
<!-- sent="Tue, 26 May 2009 19:47:24 -0400" -->
<!-- isosent="20090526234724" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] problem in the ORTE notifier framework" -->
<!-- id="C5D92D3F-2F07-4222-BD68-B69A2D1E8B76_at_cisco.com" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-26 19:47:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6099.php">Ralph Castain: "Re: [OMPI devel] XML stdout/stderr"</a>
<li><strong>Previous message:</strong> <a href="6097.php">Ralph Castain: "Re: [OMPI devel] problem in the ORTE notifier framework"</a>
<li><strong>In reply to:</strong> <a href="6097.php">Ralph Castain: "Re: [OMPI devel] problem in the ORTE notifier framework"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6139.php">Nadia Derbey: "Re: [OMPI devel] problem in the ORTE notifier framework"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sure, I can setup a webex (with international dialins) if it would be  
<br>
useful.
<br>
<p><p>On May 26, 2009, at 7:24 PM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; First, to answer Nadia's question: you will find that the init  
</span><br>
<span class="quotelev1">&gt; function for the module is already called when it is selected - see  
</span><br>
<span class="quotelev1">&gt; the code in orte/mca/base/notifier_base_select.c, lines 72-76 (in  
</span><br>
<span class="quotelev1">&gt; the trunk.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It would be a good idea to tie into the sos work to avoid conflicts  
</span><br>
<span class="quotelev1">&gt; when it all gets merged back together, assuming that isn't a big  
</span><br>
<span class="quotelev1">&gt; problem for you.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As for Jeff's suggestion: dealing with the performance hit problem  
</span><br>
<span class="quotelev1">&gt; is why I suggested ORTE_NOTIFIER_VERBOSE, modeled after the  
</span><br>
<span class="quotelev1">&gt; OPAL_OUTPUT_VERBOSE model. The idea was to compile it in -only- when  
</span><br>
<span class="quotelev1">&gt; the system is built for it - maybe using a --with-notifier-verbose  
</span><br>
<span class="quotelev1">&gt; configuration option. Frankly, some organizations would happily pay  
</span><br>
<span class="quotelev1">&gt; a small performance penalty for the benefits.
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
<span class="quotelev1">&gt; Nadia --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sorry I didn't get to jump in on the other thread earlier.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We have made considerable changes to the notifier framework in a  
</span><br>
<span class="quotelev1">&gt; branch to better support &quot;SOS&quot; functionality:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    <a href="https://www.open-mpi.org/hg/auth/hgwebdir.cgi/jsquyres/opal-sos">https://www.open-mpi.org/hg/auth/hgwebdir.cgi/jsquyres/opal-sos</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cisco and Indiana U. have been working on this branch for a while.   
</span><br>
<span class="quotelev1">&gt; A description of the SOS stuff is here:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    <a href="https://svn.open-mpi.org/trac/ompi/wiki/ErrorMessages">https://svn.open-mpi.org/trac/ompi/wiki/ErrorMessages</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As for setting up an external web server with hg, don't bother --  
</span><br>
<span class="quotelev1">&gt; just get an account at bitbucket.org.  They're free and allow you to  
</span><br>
<span class="quotelev1">&gt; host hg repositories there.  I've used bitbucket to collaborate on  
</span><br>
<span class="quotelev1">&gt; code before it hits OMPI's SVN trunk with both internal and external  
</span><br>
<span class="quotelev1">&gt; OMPI developers.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We can certainly move the opal-sos repo to bitbucket (or branch  
</span><br>
<span class="quotelev1">&gt; again off opal-sos to bitbucket -- whatever makes more sense) to  
</span><br>
<span class="quotelev1">&gt; facilitate collaborating with you.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Back on topic...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'd actually suggest a combination of what has been discussed in the  
</span><br>
<span class="quotelev1">&gt; other thread.  The notifier can be the mechanism that actually sends  
</span><br>
<span class="quotelev1">&gt; the output message, but it doesn't have to be the mechanism that  
</span><br>
<span class="quotelev1">&gt; tracks the stats and decides when to output a message.  That can be  
</span><br>
<span class="quotelev1">&gt; separate logic, and therefore be more fine-grained (and potentially  
</span><br>
<span class="quotelev1">&gt; even specific to the MPI layer).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The Big Question will how to do this with zero performance impact  
</span><br>
<span class="quotelev1">&gt; when it is not being used. This has always been the difficult issue  
</span><br>
<span class="quotelev1">&gt; when trying to implement any kind of monitoring inside the core OMPI  
</span><br>
<span class="quotelev1">&gt; performance-sensitive paths.  Even adding individual branches has  
</span><br>
<span class="quotelev1">&gt; met with resistance (in performance-critical code paths)...
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
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; While having a look at the notifier framework under orte, I noticed  
</span><br>
<span class="quotelev1">&gt; that
</span><br>
<span class="quotelev1">&gt; the way it is written, the init routine for the selected module cannot
</span><br>
<span class="quotelev1">&gt; be called.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Attached is a small patch that fixes this issue.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Nadia
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;orte_notifier_fix_select.patch&gt;&lt;ATT14046023.txt&gt;
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li><strong>Next message:</strong> <a href="6099.php">Ralph Castain: "Re: [OMPI devel] XML stdout/stderr"</a>
<li><strong>Previous message:</strong> <a href="6097.php">Ralph Castain: "Re: [OMPI devel] problem in the ORTE notifier framework"</a>
<li><strong>In reply to:</strong> <a href="6097.php">Ralph Castain: "Re: [OMPI devel] problem in the ORTE notifier framework"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6139.php">Nadia Derbey: "Re: [OMPI devel] problem in the ORTE notifier framework"</a>
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
