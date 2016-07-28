<?
$subject_val = "Re: [OMPI users] Problem with NFS + PVFS2 + OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 29 15:48:58 2008" -->
<!-- isoreceived="20080529194858" -->
<!-- sent="Thu, 29 May 2008 16:48:49 -0300" -->
<!-- isosent="20080529194849" -->
<!-- name="Davi Vercillo C. Garcia" -->
<!-- email="davivercillo_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with NFS + PVFS2 + OpenMPI" -->
<!-- id="dd4eed670805291248h18962b07m612e55dca40b74c9_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20080529194156.GH7968_at_mcs.anl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem with NFS + PVFS2 + OpenMPI<br>
<strong>From:</strong> Davi Vercillo C. Garcia (<em>davivercillo_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-29 15:48:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5759.php">Brock Palen: "Re: [OMPI users] Problem with NFS + PVFS2 + OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="5757.php">Davi Vercillo C. Garcia: "Re: [OMPI users] Problem with NFS + PVFS2 + OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="5756.php">Robert Latham: "Re: [OMPI users] Problem with NFS + PVFS2 + OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5760.php">Robert Latham: "Re: [OMPI users] Problem with NFS + PVFS2 + OpenMPI"</a>
<li><strong>Reply:</strong> <a href="5760.php">Robert Latham: "Re: [OMPI users] Problem with NFS + PVFS2 + OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
HI,
<br>
<p><span class="quotelev1">&gt; Oh, I see you want to use ordered i/o in your application.  PVFS
</span><br>
<span class="quotelev1">&gt; doesn't support that mode.  However, since you know how much data each
</span><br>
<span class="quotelev1">&gt; process wants to write, a combination of MPI_Scan (to compute each
</span><br>
<span class="quotelev1">&gt; processes offset) and MPI_File_write_at_all (to carry out the
</span><br>
<span class="quotelev1">&gt; collective i/o) will give you the same result with likely better
</span><br>
<span class="quotelev1">&gt; performance (and has the nice side effect of working with pvfs).
</span><br>
<p>I don't understand very well this... what do I need to change in my code ?
<br>
<p><pre>
-- 
Davi Vercillo Carneiro Garcia
Universidade Federal do Rio de Janeiro
Departamento de Ci&#234;ncia da Computa&#231;&#227;o
DCC-IM/UFRJ - <a href="http://www.dcc.ufrj.br">http://www.dcc.ufrj.br</a>
&quot;Good things come to those who... wait.&quot; - Debian Project
&quot;A computer is like air conditioning: it becomes useless when you open
windows.&quot; - Linus Torvalds
&quot;H&#225; duas coisas infinitas, o universo e a burrice humana. E eu estou
em d&#250;vida quanto o primeiro.&quot; - Albert Einstein
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5759.php">Brock Palen: "Re: [OMPI users] Problem with NFS + PVFS2 + OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="5757.php">Davi Vercillo C. Garcia: "Re: [OMPI users] Problem with NFS + PVFS2 + OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="5756.php">Robert Latham: "Re: [OMPI users] Problem with NFS + PVFS2 + OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5760.php">Robert Latham: "Re: [OMPI users] Problem with NFS + PVFS2 + OpenMPI"</a>
<li><strong>Reply:</strong> <a href="5760.php">Robert Latham: "Re: [OMPI users] Problem with NFS + PVFS2 + OpenMPI"</a>
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
