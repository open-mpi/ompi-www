<?
$subject_val = "Re: [OMPI devel] problem in the ORTE notifier framework";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 27 03:25:27 2009" -->
<!-- isoreceived="20090527072527" -->
<!-- sent="Wed, 27 May 2009 09:25:09 +0200 (CEST)" -->
<!-- isosent="20090527072509" -->
<!-- name="Sylvain Jeaugey" -->
<!-- email="sylvain.jeaugey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] problem in the ORTE notifier framework" -->
<!-- id="alpine.DEB.2.00.0905270913420.4598_at_jeaugeys.frec.bull.fr" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Sylvain Jeaugey (<em>sylvain.jeaugey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-27 03:25:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6103.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21287"</a>
<li><strong>Previous message:</strong> <a href="6101.php">Ralf Wildenhues: "[OMPI devel] faster autogen.sh"</a>
<li><strong>In reply to:</strong> <a href="6093.php">Jeff Squyres: "Re: [OMPI devel] problem in the ORTE notifier framework"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6105.php">Ralph Castain: "Re: [OMPI devel] problem in the ORTE notifier framework"</a>
<li><strong>Reply:</strong> <a href="6105.php">Ralph Castain: "Re: [OMPI devel] problem in the ORTE notifier framework"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
About performance, I may miss something, but our first goal was to track 
<br>
already slow pathes.
<br>
<p>We imagined that it could be possible to add at the beginning (or end) of 
<br>
this &quot;bad path&quot; just one line that would basically do an atomic inc. So, 
<br>
in terms of CPU cycles, something like 1 for the inc and maybe 1 jump 
<br>
before. Are a couple of cycles really an issue in slow pathes (which take 
<br>
at least hundreds of cycles), or do you fear out-of-cache memory accesses 
<br>
- or something else ?
<br>
<p>As for outputs, they indeed are slow (and can slow down considerably an 
<br>
application if not synchronized), but aggregation on the head node should 
<br>
solve our problems. And if not, we can also disable outputs at runtime.
<br>
<p>So, in my opinion, no application should notice a difference (unless you 
<br>
tune the framework to output every warning).
<br>
<p>Sylvain
<br>
<p>On Tue, 26 May 2009, Jeff Squyres wrote:
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
<span class="quotelev1">&gt;   <a href="https://www.open-mpi.org/hg/auth/hgwebdir.cgi/jsquyres/opal-sos">https://www.open-mpi.org/hg/auth/hgwebdir.cgi/jsquyres/opal-sos</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cisco and Indiana U. have been working on this branch for a while.  A 
</span><br>
<span class="quotelev1">&gt; description of the SOS stuff is here:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   <a href="https://svn.open-mpi.org/trac/ompi/wiki/ErrorMessages">https://svn.open-mpi.org/trac/ompi/wiki/ErrorMessages</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As for setting up an external web server with hg, don't bother -- just get an 
</span><br>
<span class="quotelev1">&gt; account at bitbucket.org.  They're free and allow you to host hg repositories 
</span><br>
<span class="quotelev1">&gt; there.  I've used bitbucket to collaborate on code before it hits OMPI's SVN 
</span><br>
<span class="quotelev1">&gt; trunk with both internal and external OMPI developers.
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
<span class="quotelev1">&gt; The Big Question will how to do this with zero performance impact when it is 
</span><br>
<span class="quotelev1">&gt; not being used. This has always been the difficult issue when trying to 
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
<span class="quotelev1">&gt; On May 26, 2009, at 10:59 AM, Nadia Derbey wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6103.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21287"</a>
<li><strong>Previous message:</strong> <a href="6101.php">Ralf Wildenhues: "[OMPI devel] faster autogen.sh"</a>
<li><strong>In reply to:</strong> <a href="6093.php">Jeff Squyres: "Re: [OMPI devel] problem in the ORTE notifier framework"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6105.php">Ralph Castain: "Re: [OMPI devel] problem in the ORTE notifier framework"</a>
<li><strong>Reply:</strong> <a href="6105.php">Ralph Castain: "Re: [OMPI devel] problem in the ORTE notifier framework"</a>
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
