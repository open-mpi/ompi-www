<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Oct 24 20:47:42 2007" -->
<!-- isoreceived="20071025004742" -->
<!-- sent="Wed, 24 Oct 2007 20:47:29 -0400" -->
<!-- isosent="20071025004729" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Merging Intracommunicators" -->
<!-- id="77DB641A-5D62-414F-B5C3-2580089087E8_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4717C3CD.90804_at_student.hpi.uni-potsdam.de" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-24 20:47:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4313.php">Jeff Squyres: "Re: [OMPI users] problem with 'orted'"</a>
<li><strong>Previous message:</strong> <a href="4311.php">Tim Prins: "Re: [OMPI users] Syntax error in remote rsh execution"</a>
<li><strong>In reply to:</strong> <a href="4252.php">Murat Knecht: "[OMPI users] Merging Intracommunicators"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4319.php">George Bosilca: "Re: [OMPI users] Merging Intracommunicators"</a>
<li><strong>Reply:</strong> <a href="4319.php">George Bosilca: "Re: [OMPI users] Merging Intracommunicators"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I believe that the second scenario that Sriram described is  
<br>
incorrect: you cannot merge independent intercommunicators into a  
<br>
single communicator (either intra or inter).
<br>
<p><p>On Oct 18, 2007, at 4:36 PM, Murat Knecht wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; I have a question regarding merging intracommunicators.
</span><br>
<span class="quotelev1">&gt; Using MPI_Spawn, I create on designated machines child processes,
</span><br>
<span class="quotelev1">&gt; retrieving an intercommunicator each time.
</span><br>
<span class="quotelev1">&gt; With MPI_Intercomm_Merge it is possible to get an intracommunicator
</span><br>
<span class="quotelev1">&gt; containing the master process(es) and the newly spawned child process.
</span><br>
<span class="quotelev1">&gt; The problem is to merge the intracommunicators into a single one.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I understand there is the possibilty to use the so created
</span><br>
<span class="quotelev1">&gt; intracommunicator from the first try in order to spawn the second  
</span><br>
<span class="quotelev1">&gt; child,
</span><br>
<span class="quotelev1">&gt; merge this one into the intracomm and continue like this.
</span><br>
<span class="quotelev1">&gt; This brings some considerable adminstrative overhead with it, as all
</span><br>
<span class="quotelev1">&gt; already spawned children must (be informed to) participate in the  
</span><br>
<span class="quotelev1">&gt; spawn
</span><br>
<span class="quotelev1">&gt; call.
</span><br>
<span class="quotelev1">&gt; I would rather merge all intercommunicators together in the end using
</span><br>
<span class="quotelev1">&gt; only the master process for spawning.
</span><br>
<span class="quotelev1">&gt; Both these possibilites have been mentioned in the following post.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.lam-mpi.org/MailArchives/lam/2003/06/6226.php">http://www.lam-mpi.org/MailArchives/lam/2003/06/6226.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; While I understand the first one, I do not follow the second - I  
</span><br>
<span class="quotelev1">&gt; cannot
</span><br>
<span class="quotelev1">&gt; seem to find any method to merge multiple inter- or intracomms into a
</span><br>
<span class="quotelev1">&gt; single intracomm.
</span><br>
<span class="quotelev1">&gt; Groups cannot be used either, to collect the children and retrieve the
</span><br>
<span class="quotelev1">&gt; intracomm, because this is only used for subgrouping within an already
</span><br>
<span class="quotelev1">&gt; existing intracommunicator-group.
</span><br>
<span class="quotelev1">&gt; Is there a way to merge them the easy way, or did I misread the  
</span><br>
<span class="quotelev1">&gt; post above?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks &amp; best regards,
</span><br>
<span class="quotelev1">&gt; Murat
</span><br>
<span class="quotelev1">&gt; _______________________________________________
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
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4313.php">Jeff Squyres: "Re: [OMPI users] problem with 'orted'"</a>
<li><strong>Previous message:</strong> <a href="4311.php">Tim Prins: "Re: [OMPI users] Syntax error in remote rsh execution"</a>
<li><strong>In reply to:</strong> <a href="4252.php">Murat Knecht: "[OMPI users] Merging Intracommunicators"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4319.php">George Bosilca: "Re: [OMPI users] Merging Intracommunicators"</a>
<li><strong>Reply:</strong> <a href="4319.php">George Bosilca: "Re: [OMPI users] Merging Intracommunicators"</a>
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
