<?
$subject_val = "Re: [OMPI users] Array version of MPI_Iprobe?";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Apr 21 09:19:09 2012" -->
<!-- isoreceived="20120421131909" -->
<!-- sent="Sat, 21 Apr 2012 09:19:04 -0400" -->
<!-- isosent="20120421131904" -->
<!-- name="Jeffrey Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Array version of MPI_Iprobe?" -->
<!-- id="DED500B4-754A-4AE6-8329-3A90D2681F16_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="OF0BE8A4B9.7F17E94C-ON852579E6.0074017F-852579E6.0074B23A_at_notes.aero.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Array version of MPI_Iprobe?<br>
<strong>From:</strong> Jeffrey Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-21 09:19:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19064.php">Jeffrey Squyres: "Re: [OMPI users] Regarding installation procedure for installing openmpi for 1master and 16 slaves"</a>
<li><strong>Previous message:</strong> <a href="19062.php">kidd: "[OMPI users] Ompi-restart  failed and  process migration"</a>
<li><strong>In reply to:</strong> <a href="19061.php">Jeffrey A Cummings: "[OMPI users]  Array version of MPI_Iprobe?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19064.php">Jeffrey Squyres: "Re: [OMPI users] Regarding installation procedure for installing openmpi for 1master and 16 slaves"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The new MPI-3 function MPI_Improbe might be helpful here, but it may still cost you extra in temporary buffer space (allocated internally in MPI), depending on the size of the incoming message.
<br>
<p>Meaning: OMPI (and other MPI's) will still allocate *something* for each matched incoming message, even if you don't receive it right away.  That *something* may be the entire message (if it's short), or the first part of the message (if it's long).
<br>
<p>We've implemented MPI_Improbe (and friends) on the OMPI SVN trunk; it won't be available in a general release until the OMPI 1.7 series.  But you might want to give it a whirl anyway...?
<br>
<p><p>On Apr 20, 2012, at 5:14 PM, Jeffrey A Cummings wrote:
<br>
<p><span class="quotelev1">&gt; MPI_Iprobe returns a single status object if at least one message is waiting in a queue.  I would like to be able to do something similar (i.e., non blocking probes) which would produce an array of status objects representing all messages waiting in a queue.  I would then decide on the order of actual message reception based on the source field of the status array objects.  Does anyone know of a way to accomplish this? 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jeff Cummings_______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19064.php">Jeffrey Squyres: "Re: [OMPI users] Regarding installation procedure for installing openmpi for 1master and 16 slaves"</a>
<li><strong>Previous message:</strong> <a href="19062.php">kidd: "[OMPI users] Ompi-restart  failed and  process migration"</a>
<li><strong>In reply to:</strong> <a href="19061.php">Jeffrey A Cummings: "[OMPI users]  Array version of MPI_Iprobe?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19064.php">Jeffrey Squyres: "Re: [OMPI users] Regarding installation procedure for installing openmpi for 1master and 16 slaves"</a>
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
