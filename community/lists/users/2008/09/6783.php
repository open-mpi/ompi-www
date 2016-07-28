<?
$subject_val = "Re: [OMPI users] OpenMPI portability problems: debug info isn't helpful";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 29 19:57:44 2008" -->
<!-- isoreceived="20080929235744" -->
<!-- sent="Mon, 29 Sep 2008 19:57:35 -0400" -->
<!-- isosent="20080929235735" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI portability problems: debug info isn't helpful" -->
<!-- id="A7334BB6-56C8-4B4C-9A65-6E756779D9CB_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="87wsgu50a5.fsf_at_inbox.ru" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI portability problems: debug info isn't helpful<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-29 19:57:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6784.php">Terry Frankcombe: "Re: [OMPI users] qsub - mpirun problem"</a>
<li><strong>Previous message:</strong> <a href="6782.php">Reuti: "Re: [OMPI users] qsub - mpirun problem"</a>
<li><strong>In reply to:</strong> <a href="6767.php">Aleksej Saushev: "[OMPI users] OpenMPI portability problems: debug info isn't helpful"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/10/6947.php">Aleksej Saushev: "Re: [OMPI users] OpenMPI portability problems: debug info isn't helpful"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/10/6947.php">Aleksej Saushev: "Re: [OMPI users] OpenMPI portability problems: debug info isn't helpful"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 29, 2008, at 1:28 PM, Aleksej Saushev wrote:
<br>
<p><span class="quotelev1">&gt;  Hello!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm trying to build OpenMPI on NetBSD 4.99.72,
</span><br>
<span class="quotelev1">&gt; I'm getting next message either when I'm building in debug mode
</span><br>
<span class="quotelev1">&gt; or without it:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [asau.local:27880] [NO-NAME] ORTE_ERROR_LOG: Not found in file  
</span><br>
<span class="quotelev1">&gt; runtime/orte_init_stage1.c at line 182
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; It looks like orte_init failed for some reason; your parallel  
</span><br>
<span class="quotelev1">&gt; process is
</span><br>
<p>This is a very strange error; if this error message is from v1.2.7,  
<br>
then it means that the &quot;rml&quot; framework failed to select a component  
<br>
properly.  That should not happen, because there is a single rml  
<br>
component that should always be available for selection (oob).
<br>
<p>Can you send all the information listed here:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
<br>
<p>I will say that it's unlikely that anyone has tested on NetBSD; so  
<br>
there might be some kind of glitch that has not yet been diagnosed.
<br>
<p><span class="quotelev1">&gt; I tried building the same OpenMPI 1.2.7 on test FreeBSD 6.3-STABLE
</span><br>
<span class="quotelev1">&gt; (snapshot date unknown) system. Except for passing explicit value
</span><br>
<span class="quotelev1">&gt; of NM=/usr/bin/nm (configure doesn't detect it, why? It should
</span><br>
<span class="quotelev1">&gt; find _BSD_ nm there), nothing has changed. Test application starts
</span><br>
<span class="quotelev1">&gt; fine there.
</span><br>
<p>FWIW, I don't know why it doesn't find the BSD nm.  We use stock  
<br>
Autoconf/etc.
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
<li><strong>Next message:</strong> <a href="6784.php">Terry Frankcombe: "Re: [OMPI users] qsub - mpirun problem"</a>
<li><strong>Previous message:</strong> <a href="6782.php">Reuti: "Re: [OMPI users] qsub - mpirun problem"</a>
<li><strong>In reply to:</strong> <a href="6767.php">Aleksej Saushev: "[OMPI users] OpenMPI portability problems: debug info isn't helpful"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/10/6947.php">Aleksej Saushev: "Re: [OMPI users] OpenMPI portability problems: debug info isn't helpful"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/10/6947.php">Aleksej Saushev: "Re: [OMPI users] OpenMPI portability problems: debug info isn't helpful"</a>
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
