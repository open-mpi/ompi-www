<?
$subject_val = "Re: [OMPI users] some mpi processes &quot;disappear&quot; on a cluster of servers";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Sep  1 03:49:31 2012" -->
<!-- isoreceived="20120901074931" -->
<!-- sent="Sat, 1 Sep 2012 08:48:56 +0100" -->
<!-- isosent="20120901074856" -->
<!-- name="John Hearns" -->
<!-- email="hearnsj_at_[hidden]" -->
<!-- subject="Re: [OMPI users] some mpi processes &amp;quot;disappear&amp;quot; on a cluster of servers" -->
<!-- id="CAPqNE2WO3bgefjiyfums6yquODUHjJ75zJoeEyjrDq60fMZV5A_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="504152BD.3000102_at_ldeo.columbia.edu" -->
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
<strong>From:</strong> John Hearns (<em>hearnsj_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-01 03:48:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20077.php">Andrea Negri: "Re: [OMPI users] users Digest, Vol 2339, Issue 5"</a>
<li><strong>Previous message:</strong> <a href="../../2012/08/20075.php">Gus Correa: "Re: [OMPI users] some mpi processes &quot;disappear&quot; on a cluster of servers"</a>
<li><strong>In reply to:</strong> <a href="../../2012/08/20075.php">Gus Correa: "Re: [OMPI users] some mpi processes &quot;disappear&quot; on a cluster of servers"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Apologies, I have not taken the time to read your comprehensive diagnostics!
<br>
<p>As Gus says, this sounds like a memory problem.
<br>
My suspicion would be the kernel Out Of Memory (OOM) killer.
<br>
Log into those nodes (or ask your systems manager to do this). Look
<br>
closely at /var/log/messages where there will be notifications when
<br>
the OOM Killer kicks in and - well - kills large memory processes!
<br>
Grep for &quot;killed process&quot; in /var/log/messages
<br>
<p><a href="http://linux-mm.org/OOM_Killer">http://linux-mm.org/OOM_Killer</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20077.php">Andrea Negri: "Re: [OMPI users] users Digest, Vol 2339, Issue 5"</a>
<li><strong>Previous message:</strong> <a href="../../2012/08/20075.php">Gus Correa: "Re: [OMPI users] some mpi processes &quot;disappear&quot; on a cluster of servers"</a>
<li><strong>In reply to:</strong> <a href="../../2012/08/20075.php">Gus Correa: "Re: [OMPI users] some mpi processes &quot;disappear&quot; on a cluster of servers"</a>
<!-- nextthread="start" -->
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
