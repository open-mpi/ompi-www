<?
$subject_val = "Re: [OMPI devel] problem in the ORTE notifier framework";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 26 15:06:51 2009" -->
<!-- isoreceived="20090526190651" -->
<!-- sent="Tue, 26 May 2009 15:06:45 -0400" -->
<!-- isosent="20090526190645" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] problem in the ORTE notifier framework" -->
<!-- id="2C58DFBA-0CB8-4B7A-972E-3E284921071D_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1243349986.2634.28.camel_at_frecb000730.frec.bull.fr" -->
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
<strong>Date:</strong> 2009-05-26 15:06:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6094.php">Greg Watson: "Re: [OMPI devel] XML stdout/stderr"</a>
<li><strong>Previous message:</strong> <a href="6092.php">Nadia Derbey: "[OMPI devel] problem in the ORTE notifier framework"</a>
<li><strong>In reply to:</strong> <a href="6092.php">Nadia Derbey: "[OMPI devel] problem in the ORTE notifier framework"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6097.php">Ralph Castain: "Re: [OMPI devel] problem in the ORTE notifier framework"</a>
<li><strong>Reply:</strong> <a href="6097.php">Ralph Castain: "Re: [OMPI devel] problem in the ORTE notifier framework"</a>
<li><strong>Reply:</strong> <a href="6102.php">Sylvain Jeaugey: "Re: [OMPI devel] problem in the ORTE notifier framework"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Nadia --
<br>
<p>Sorry I didn't get to jump in on the other thread earlier.
<br>
<p>We have made considerable changes to the notifier framework in a  
<br>
branch to better support &quot;SOS&quot; functionality:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://www.open-mpi.org/hg/auth/hgwebdir.cgi/jsquyres/opal-sos">https://www.open-mpi.org/hg/auth/hgwebdir.cgi/jsquyres/opal-sos</a>
<br>
<p>Cisco and Indiana U. have been working on this branch for a while.  A  
<br>
description of the SOS stuff is here:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/wiki/ErrorMessages">https://svn.open-mpi.org/trac/ompi/wiki/ErrorMessages</a>
<br>
<p>As for setting up an external web server with hg, don't bother -- just  
<br>
get an account at bitbucket.org.  They're free and allow you to host  
<br>
hg repositories there.  I've used bitbucket to collaborate on code  
<br>
before it hits OMPI's SVN trunk with both internal and external OMPI  
<br>
developers.
<br>
<p>We can certainly move the opal-sos repo to bitbucket (or branch again  
<br>
off opal-sos to bitbucket -- whatever makes more sense) to facilitate  
<br>
collaborating with you.
<br>
<p>Back on topic...
<br>
<p>I'd actually suggest a combination of what has been discussed in the  
<br>
other thread.  The notifier can be the mechanism that actually sends  
<br>
the output message, but it doesn't have to be the mechanism that  
<br>
tracks the stats and decides when to output a message.  That can be  
<br>
separate logic, and therefore be more fine-grained (and potentially  
<br>
even specific to the MPI layer).
<br>
<p>The Big Question will how to do this with zero performance impact when  
<br>
it is not being used. This has always been the difficult issue when  
<br>
trying to implement any kind of monitoring inside the core OMPI  
<br>
performance-sensitive paths.  Even adding individual branches has met  
<br>
with resistance (in performance-critical code paths)...
<br>
<p><p><p>On May 26, 2009, at 10:59 AM, Nadia Derbey wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6094.php">Greg Watson: "Re: [OMPI devel] XML stdout/stderr"</a>
<li><strong>Previous message:</strong> <a href="6092.php">Nadia Derbey: "[OMPI devel] problem in the ORTE notifier framework"</a>
<li><strong>In reply to:</strong> <a href="6092.php">Nadia Derbey: "[OMPI devel] problem in the ORTE notifier framework"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6097.php">Ralph Castain: "Re: [OMPI devel] problem in the ORTE notifier framework"</a>
<li><strong>Reply:</strong> <a href="6097.php">Ralph Castain: "Re: [OMPI devel] problem in the ORTE notifier framework"</a>
<li><strong>Reply:</strong> <a href="6102.php">Sylvain Jeaugey: "Re: [OMPI devel] problem in the ORTE notifier framework"</a>
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
