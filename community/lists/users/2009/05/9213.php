<?
$subject_val = "Re: [OMPI users] LSF launch with OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May  5 08:14:24 2009" -->
<!-- isoreceived="20090505121424" -->
<!-- sent="Tue, 05 May 2009 22:14:12 +1000" -->
<!-- isosent="20090505121412" -->
<!-- name="Terry Frankcombe" -->
<!-- email="terry_at_[hidden]" -->
<!-- subject="Re: [OMPI users] LSF launch with OpenMPI" -->
<!-- id="1241525652.5779.287.camel_at_rscpc28.anu.edu.au" -->
<!-- inreplyto="e76aa17f0905050310m312d4e38o4d908ce5d7b03da8_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] LSF launch with OpenMPI<br>
<strong>From:</strong> Terry Frankcombe (<em>terry_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-05 08:14:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9214.php">Jeff Squyres: "Re: [OMPI users] LSF launch with OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="9212.php">Lenny Verkhovsky: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
<li><strong>In reply to:</strong> <a href="9210.php">Matthieu Brucher: "[OMPI users] LSF launch with OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9214.php">Jeff Squyres: "Re: [OMPI users] LSF launch with OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, 2009-05-05 at 12:10 +0200, Matthieu Brucher wrote:
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have two questions, in fact.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The first is what the support of LSF by OpenMPI means. When mpirun is
</span><br>
<span class="quotelev1">&gt; executed, it is an LSF job that is actually ran? Or what does it
</span><br>
<span class="quotelev1">&gt; imply? I've tried to search on the openmpi website as well as on the
</span><br>
<span class="quotelev1">&gt; internet, but I couldn't find a clear answer/use case.
</span><br>
<p>Hi Matthieu
<br>
<p>I think it's fair to say that if &quot;batch system XYZ&quot; is supported, then
<br>
in a job script submitted to that batch system you can issue an mpirun
<br>
command without manually specifying numbers of processes, hostnames,
<br>
launch protocols, etc.  They're all picked up using the mechanisms of
<br>
the batch system.
<br>
<p>If LSF has any peculiarities, someone will point them out, I'm sure.
<br>
<p>Configuring for LSF I can't help you with.
<br>
<p>Ciao
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9214.php">Jeff Squyres: "Re: [OMPI users] LSF launch with OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="9212.php">Lenny Verkhovsky: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
<li><strong>In reply to:</strong> <a href="9210.php">Matthieu Brucher: "[OMPI users] LSF launch with OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9214.php">Jeff Squyres: "Re: [OMPI users] LSF launch with OpenMPI"</a>
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
