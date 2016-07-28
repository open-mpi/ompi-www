<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Oct 18 16:36:35 2007" -->
<!-- isoreceived="20071018203635" -->
<!-- sent="Thu, 18 Oct 2007 22:36:29 +0200" -->
<!-- isosent="20071018203629" -->
<!-- name="Murat Knecht" -->
<!-- email="murat.knecht_at_[hidden]" -->
<!-- subject="[OMPI users] Merging Intracommunicators" -->
<!-- id="4717C3CD.90804_at_student.hpi.uni-potsdam.de" -->
<!-- charset="ISO-8859-15" -->
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
<strong>From:</strong> Murat Knecht (<em>murat.knecht_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-18 16:36:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4253.php">Jorge Parra: "[OMPI users] Syntax error in remote rsh execution"</a>
<li><strong>Previous message:</strong> <a href="4251.php">Gurhan: "Re: [OMPI users] Compiling OpenMPI for i386 on a x86_64"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4312.php">Jeff Squyres: "Re: [OMPI users] Merging Intracommunicators"</a>
<li><strong>Reply:</strong> <a href="4312.php">Jeff Squyres: "Re: [OMPI users] Merging Intracommunicators"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
I have a question regarding merging intracommunicators.
<br>
Using MPI_Spawn, I create on designated machines child processes,
<br>
retrieving an intercommunicator each time.
<br>
With MPI_Intercomm_Merge it is possible to get an intracommunicator
<br>
containing the master process(es) and the newly spawned child process.
<br>
The problem is to merge the intracommunicators into a single one.
<br>
<p>I understand there is the possibilty to use the so created
<br>
intracommunicator from the first try in order to spawn the second child,
<br>
merge this one into the intracomm and continue like this.
<br>
This brings some considerable adminstrative overhead with it, as all
<br>
already spawned children must (be informed to) participate in the spawn
<br>
call.
<br>
I would rather merge all intercommunicators together in the end using
<br>
only the master process for spawning.
<br>
Both these possibilites have been mentioned in the following post.
<br>
<p><a href="http://www.lam-mpi.org/MailArchives/lam/2003/06/6226.php">http://www.lam-mpi.org/MailArchives/lam/2003/06/6226.php</a>
<br>
<p>While I understand the first one, I do not follow the second - I cannot
<br>
seem to find any method to merge multiple inter- or intracomms into a
<br>
single intracomm.
<br>
Groups cannot be used either, to collect the children and retrieve the
<br>
intracomm, because this is only used for subgrouping within an already
<br>
existing intracommunicator-group.
<br>
Is there a way to merge them the easy way, or did I misread the post above?
<br>
<p>Thanks &amp; best regards,
<br>
Murat
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4253.php">Jorge Parra: "[OMPI users] Syntax error in remote rsh execution"</a>
<li><strong>Previous message:</strong> <a href="4251.php">Gurhan: "Re: [OMPI users] Compiling OpenMPI for i386 on a x86_64"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4312.php">Jeff Squyres: "Re: [OMPI users] Merging Intracommunicators"</a>
<li><strong>Reply:</strong> <a href="4312.php">Jeff Squyres: "Re: [OMPI users] Merging Intracommunicators"</a>
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
