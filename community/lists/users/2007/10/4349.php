<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Oct 30 13:57:32 2007" -->
<!-- isoreceived="20071030175732" -->
<!-- sent="Tue, 30 Oct 2007 18:57:27 +0100" -->
<!-- isosent="20071030175727" -->
<!-- name="Murat Knecht" -->
<!-- email="murat.knecht_at_[hidden]" -->
<!-- subject="[OMPI users] Merge blocks depending on spawn order" -->
<!-- id="47277087.8050709_at_student.hpi.uni-potsdam.de" -->
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
<strong>Date:</strong> 2007-10-30 13:57:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4350.php">Clement Kam Man Chu: "[OMPI users] Too many open files Error"</a>
<li><strong>Previous message:</strong> <a href="4348.php">Jorge Parra: "Re: [OMPI users] Error initializing openMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4353.php">Jeff Squyres: "Re: [OMPI users] Merge blocks depending on spawn order"</a>
<li><strong>Reply:</strong> <a href="4353.php">Jeff Squyres: "Re: [OMPI users] Merge blocks depending on spawn order"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>does someone know whether there is a special requirement on the order of
<br>
spawning processes and the consequent merge of the intercommunicators?
<br>
I have two hosts, let's name them local and remote, and a parent process
<br>
on local that goes on spawning one process on each one of the two nodes.
<br>
After each spawn the parent process and all existing childs participate
<br>
in merging the created Intercommunicator into an Intracommunicator that
<br>
connects - in the end - alls three processes.
<br>
<p>The weird thing is though, when I spawn them in the order local, remote
<br>
at the second, the last spawn all three processes block when
<br>
encountering MPI_Merge. Though, when I switch the order around to
<br>
spawning first the process on remote and then on local, everything works
<br>
out: The two processes are spawned and the Intracommunicators created
<br>
from the Merge. Everything goes well, too, if I decide to spawn both
<br>
processes on either one of the machines. (The existing children are
<br>
informed via a message that they shall participate in the Spawn and
<br>
Merge since these are collective operations.)
<br>
<p>Is there some implicit developer-level knowledge that explains why the
<br>
order defines the outcome? Logically, there ought to be no difference.
<br>
Btw, I work with two Linux nodes and an ordinary Ethernet-TCP connection
<br>
between them.
<br>
<p>Thanks,
<br>
Murat
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4350.php">Clement Kam Man Chu: "[OMPI users] Too many open files Error"</a>
<li><strong>Previous message:</strong> <a href="4348.php">Jorge Parra: "Re: [OMPI users] Error initializing openMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4353.php">Jeff Squyres: "Re: [OMPI users] Merge blocks depending on spawn order"</a>
<li><strong>Reply:</strong> <a href="4353.php">Jeff Squyres: "Re: [OMPI users] Merge blocks depending on spawn order"</a>
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
