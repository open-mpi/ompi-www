<?
$subject_val = "Re: [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 13 08:40:28 2011" -->
<!-- isoreceived="20110713124028" -->
<!-- sent="Wed, 13 Jul 2011 08:40:23 -0400" -->
<!-- isosent="20110713124023" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD" -->
<!-- id="BDF99A4E-102A-4F73-A476-B86DE957DABA_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20110712192630.GA4850_at_troutmask.apl.washington.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-13 08:40:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16915.php">David Warren: "Re: [OMPI users] Mixed Mellanox and Qlogic problems"</a>
<li><strong>Previous message:</strong> <a href="16913.php">Markus Schmidberger: "[OMPI users] Running your MPI application on a Computer Cluster in the Cloud - cloudnumbers.com"</a>
<li><strong>In reply to:</strong> <a href="16899.php">Steve Kargl: "Re: [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16911.php">Jeff Squyres: "Re: [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 12, 2011, at 3:26 PM, Steve Kargl wrote:
<br>
<p><span class="quotelev1">&gt; % /usr/local/ompi/bin/mpiexec -machinefile mf --mca btl self,tcp \
</span><br>
<span class="quotelev1">&gt;  --mca btl_base_verbose 30 ./z
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; with mf containing 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; node11 slots=1   (node11 contains a single bge0=168.192.0.11)
</span><br>
<span class="quotelev1">&gt; node16 slots=1   (node16 contains a single bge0=168.192.0.16)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; or
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; node11 slots=2   (communication on memory bus)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However, if mf contains
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; node10 slots=1   (node10 contains bge0=10.208.xx and bge1=192.168.0.10)
</span><br>
<span class="quotelev1">&gt; node16 slots=1   (node16 contains a single bge0=192.168.0.16)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I see the same problem where node10 cannot communicate with node16.
</span><br>
<p>If you ever get the time to check into the code to see why this is happening, I'd be curious to hear what you find (per my explanation of the TCP BTL here: <a href="http://www.open-mpi.org/community/lists/users/2011/07/16872.php">http://www.open-mpi.org/community/lists/users/2011/07/16872.php</a>).
<br>
<p><span class="quotelev1">&gt; Good News:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Adding 'btl_tcp_if_include=192.168.0.0/16' to my ~/.openmpi/mca-params.conf
</span><br>
<span class="quotelev1">&gt; file seems to cure the communication problem.
</span><br>
<p>Good.
<br>
<p><span class="quotelev1">&gt; Thanks for the help.  If I run into any other problems with trunk,
</span><br>
<span class="quotelev1">&gt; I'll report those here.
</span><br>
<p>Keep in mind the usual disclaimers with development trunks -- it's *usually* stable, but sometimes it does break.  
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16915.php">David Warren: "Re: [OMPI users] Mixed Mellanox and Qlogic problems"</a>
<li><strong>Previous message:</strong> <a href="16913.php">Markus Schmidberger: "[OMPI users] Running your MPI application on a Computer Cluster in the Cloud - cloudnumbers.com"</a>
<li><strong>In reply to:</strong> <a href="16899.php">Steve Kargl: "Re: [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16911.php">Jeff Squyres: "Re: [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD"</a>
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
