<?
$subject_val = "Re: [OMPI devel] problem in the ORTE notifier framework";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 28 08:53:22 2009" -->
<!-- isoreceived="20090528125322" -->
<!-- sent="Thu, 28 May 2009 08:53:17 -0400" -->
<!-- isosent="20090528125317" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] problem in the ORTE notifier framework" -->
<!-- id="7AC074E3-0E8E-4C09-9753-BC5B7F19201D_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1243493724.2634.41.camel_at_frecb000730.frec.bull.fr" -->
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
<strong>Date:</strong> 2009-05-28 08:53:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6148.php">Jeff Squyres: "Re: [OMPI devel] problem in the ORTE notifier framework"</a>
<li><strong>Previous message:</strong> <a href="6146.php">Jeff Squyres: "Re: [OMPI devel] problem in the ORTE notifier framework"</a>
<li><strong>In reply to:</strong> <a href="6137.php">Nadia Derbey: "Re: [OMPI devel] problem in the ORTE notifier framework"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/06/6187.php">Sylvain Jeaugey: "Re: [OMPI devel] problem in the ORTE notifier framework"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 28, 2009, at 2:55 AM, Nadia Derbey wrote:
<br>
<p><span class="quotelev1">&gt; Well, it didn't because from what I understood, the MPI program need  
</span><br>
<span class="quotelev1">&gt; to
</span><br>
<span class="quotelev1">&gt; be changed (register a callback routine for the event, activate the
</span><br>
<span class="quotelev1">&gt; event, etc), and this is something we wanted to avoid.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Combined with what Terry and Ralph already said, I just wanted to make  
<br>
sure this point is crystal clear: what we're proposing is that you use  
<br>
peruse *internally* -- there's no need to change MPI applications.
<br>
<p><span class="quotelev1">&gt; Now, if we are allowed to
</span><br>
<span class="quotelev1">&gt; 1. define new &quot;internal&quot; PERUSE events,
</span><br>
<span class="quotelev1">&gt; 2. internally set the associated callback routines
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>Peruse was designed to be extensible, I believe.  So adding new events  
<br>
into its infrastructure may not be too terrible (I didn't work on the  
<br>
peruse stuff; George/Rainer would have to comment on that).  The  
<br>
bigger issue is adding hooks to call those peruse events in the main  
<br>
progression engines.  Adding them to error paths (or already-slow  
<br>
paths) might not be too bad.  But I'm sure that many of us would  
<br>
scrutinize such changes closely -- as previously stated, we don't want  
<br>
to negatively impact performance for those who will not be using this  
<br>
functionality.
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6148.php">Jeff Squyres: "Re: [OMPI devel] problem in the ORTE notifier framework"</a>
<li><strong>Previous message:</strong> <a href="6146.php">Jeff Squyres: "Re: [OMPI devel] problem in the ORTE notifier framework"</a>
<li><strong>In reply to:</strong> <a href="6137.php">Nadia Derbey: "Re: [OMPI devel] problem in the ORTE notifier framework"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/06/6187.php">Sylvain Jeaugey: "Re: [OMPI devel] problem in the ORTE notifier framework"</a>
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
