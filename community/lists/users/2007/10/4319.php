<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Oct 25 00:11:40 2007" -->
<!-- isoreceived="20071025041140" -->
<!-- sent="Thu, 25 Oct 2007 00:11:24 -0400" -->
<!-- isosent="20071025041124" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Merging Intracommunicators" -->
<!-- id="AF8A5203-6FBD-44A9-AF03-103E8D859BE5_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="77DB641A-5D62-414F-B5C3-2580089087E8_at_cisco.com" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-25 00:11:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4320.php">42aftab_at_[hidden]: "[OMPI users] Process 0 with different time executing the same code"</a>
<li><strong>Previous message:</strong> <a href="4318.php">Dirk Eddelbuettel: "Re: [OMPI users] Cannot suppress openib error message"</a>
<li><strong>In reply to:</strong> <a href="4312.php">Jeff Squyres: "Re: [OMPI users] Merging Intracommunicators"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4321.php">Jeff Squyres: "Re: [OMPI users] Merging Intracommunicators"</a>
<li><strong>Reply:</strong> <a href="4321.php">Jeff Squyres: "Re: [OMPI users] Merging Intracommunicators"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Now you cast a doubt on me. As far as I remember, there is a trick in  
<br>
MPI2 to do this. You can merge your inter-communicators into one  
<br>
intra-communicators with MPI_Intercomm_merge and then use  
<br>
MPI_Intercomm_create to spawn a new inter-comm over the 2 childs  
<br>
world (using the common parent as a bridge process) ... I have to try  
<br>
it to refresh my memory :)
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Oct 24, 2007, at 8:47 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; I believe that the second scenario that Sriram described is
</span><br>
<span class="quotelev1">&gt; incorrect: you cannot merge independent intercommunicators into a
</span><br>
<span class="quotelev1">&gt; single communicator (either intra or inter).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 18, 2007, at 4:36 PM, Murat Knecht wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt; I have a question regarding merging intracommunicators.
</span><br>
<span class="quotelev2">&gt;&gt; Using MPI_Spawn, I create on designated machines child processes,
</span><br>
<span class="quotelev2">&gt;&gt; retrieving an intercommunicator each time.
</span><br>
<span class="quotelev2">&gt;&gt; With MPI_Intercomm_Merge it is possible to get an intracommunicator
</span><br>
<span class="quotelev2">&gt;&gt; containing the master process(es) and the newly spawned child  
</span><br>
<span class="quotelev2">&gt;&gt; process.
</span><br>
<span class="quotelev2">&gt;&gt; The problem is to merge the intracommunicators into a single one.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I understand there is the possibilty to use the so created
</span><br>
<span class="quotelev2">&gt;&gt; intracommunicator from the first try in order to spawn the second
</span><br>
<span class="quotelev2">&gt;&gt; child,
</span><br>
<span class="quotelev2">&gt;&gt; merge this one into the intracomm and continue like this.
</span><br>
<span class="quotelev2">&gt;&gt; This brings some considerable adminstrative overhead with it, as all
</span><br>
<span class="quotelev2">&gt;&gt; already spawned children must (be informed to) participate in the
</span><br>
<span class="quotelev2">&gt;&gt; spawn
</span><br>
<span class="quotelev2">&gt;&gt; call.
</span><br>
<span class="quotelev2">&gt;&gt; I would rather merge all intercommunicators together in the end using
</span><br>
<span class="quotelev2">&gt;&gt; only the master process for spawning.
</span><br>
<span class="quotelev2">&gt;&gt; Both these possibilites have been mentioned in the following post.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.lam-mpi.org/MailArchives/lam/2003/06/6226.php">http://www.lam-mpi.org/MailArchives/lam/2003/06/6226.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; While I understand the first one, I do not follow the second - I
</span><br>
<span class="quotelev2">&gt;&gt; cannot
</span><br>
<span class="quotelev2">&gt;&gt; seem to find any method to merge multiple inter- or intracomms into a
</span><br>
<span class="quotelev2">&gt;&gt; single intracomm.
</span><br>
<span class="quotelev2">&gt;&gt; Groups cannot be used either, to collect the children and retrieve  
</span><br>
<span class="quotelev2">&gt;&gt; the
</span><br>
<span class="quotelev2">&gt;&gt; intracomm, because this is only used for subgrouping within an  
</span><br>
<span class="quotelev2">&gt;&gt; already
</span><br>
<span class="quotelev2">&gt;&gt; existing intracommunicator-group.
</span><br>
<span class="quotelev2">&gt;&gt; Is there a way to merge them the easy way, or did I misread the
</span><br>
<span class="quotelev2">&gt;&gt; post above?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks &amp; best regards,
</span><br>
<span class="quotelev2">&gt;&gt; Murat
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-4319/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4320.php">42aftab_at_[hidden]: "[OMPI users] Process 0 with different time executing the same code"</a>
<li><strong>Previous message:</strong> <a href="4318.php">Dirk Eddelbuettel: "Re: [OMPI users] Cannot suppress openib error message"</a>
<li><strong>In reply to:</strong> <a href="4312.php">Jeff Squyres: "Re: [OMPI users] Merging Intracommunicators"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4321.php">Jeff Squyres: "Re: [OMPI users] Merging Intracommunicators"</a>
<li><strong>Reply:</strong> <a href="4321.php">Jeff Squyres: "Re: [OMPI users] Merging Intracommunicators"</a>
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
