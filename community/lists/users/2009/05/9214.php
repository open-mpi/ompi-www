<?
$subject_val = "Re: [OMPI users] LSF launch with OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May  5 08:24:01 2009" -->
<!-- isoreceived="20090505122401" -->
<!-- sent="Tue, 5 May 2009 08:23:53 -0400" -->
<!-- isosent="20090505122353" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] LSF launch with OpenMPI" -->
<!-- id="E8C0F252-0E6A-446A-A570-975BDA2E6F82_at_cisco.com" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-05 08:23:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9215.php">Ralph Castain: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
<li><strong>Previous message:</strong> <a href="9213.php">Terry Frankcombe: "Re: [OMPI users] LSF launch with OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="9210.php">Matthieu Brucher: "[OMPI users] LSF launch with OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9219.php">Jeroen Kleijer: "Re: [OMPI users] LSF launch with OpenMPI"</a>
<li><strong>Reply:</strong> <a href="9219.php">Jeroen Kleijer: "Re: [OMPI users] LSF launch with OpenMPI"</a>
<li><strong>Reply:</strong> <a href="9223.php">Matthieu Brucher: "Re: [OMPI users] LSF launch with OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 5, 2009, at 6:10 AM, Matthieu Brucher wrote:
<br>
<p><span class="quotelev1">&gt; The first is what the support of LSF by OpenMPI means. When mpirun is
</span><br>
<span class="quotelev1">&gt; executed, it is an LSF job that is actually ran? Or what does it
</span><br>
<span class="quotelev1">&gt; imply? I've tried to search on the openmpi website as well as on the
</span><br>
<span class="quotelev1">&gt; internet, but I couldn't find a clear answer/use case.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>What Terry said is correct.  It means that &quot;mpirun&quot; will use, under  
<br>
the covers, the &quot;native&quot; launching mechanism of LSF to launch jobs  
<br>
(vs., say, rsh or ssh).  It'll also discover the hosts to use for this  
<br>
job without the use of a hostfile -- it'll query LSF directly to see  
<br>
what hosts it should use.
<br>
<p><span class="quotelev1">&gt; My second question is about the LSF detection. lsf.h is detected, but
</span><br>
<span class="quotelev1">&gt; when lsb_launch is searched for ion libbat.so, it fails because
</span><br>
<span class="quotelev1">&gt; parse_time and parse_time_ex are not found. Is there a way to add
</span><br>
<span class="quotelev1">&gt; additional lsf libraries so that the search can be done?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>Can you send all the data shown here:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
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
<li><strong>Next message:</strong> <a href="9215.php">Ralph Castain: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
<li><strong>Previous message:</strong> <a href="9213.php">Terry Frankcombe: "Re: [OMPI users] LSF launch with OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="9210.php">Matthieu Brucher: "[OMPI users] LSF launch with OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9219.php">Jeroen Kleijer: "Re: [OMPI users] LSF launch with OpenMPI"</a>
<li><strong>Reply:</strong> <a href="9219.php">Jeroen Kleijer: "Re: [OMPI users] LSF launch with OpenMPI"</a>
<li><strong>Reply:</strong> <a href="9223.php">Matthieu Brucher: "Re: [OMPI users] LSF launch with OpenMPI"</a>
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
