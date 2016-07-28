<?
$subject_val = "Re: [OMPI users] Is this an OpenMPI bug?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 23 09:56:12 2009" -->
<!-- isoreceived="20090223145612" -->
<!-- sent="Mon, 23 Feb 2009 09:56:06 -0500" -->
<!-- isosent="20090223145606" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Is this an OpenMPI bug?" -->
<!-- id="805E970D-1494-43B7-91B2-CE3F68CD7142_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="fcfc36b90902201554r1265a60dhfed7b6e8ede5df2f_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Is this an OpenMPI bug?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-23 09:56:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8158.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.3:"</a>
<li><strong>Previous message:</strong> <a href="8156.php">Raymond Wan: "Re: [OMPI users] round-robin scheduling question [hostfile]"</a>
<li><strong>In reply to:</strong> <a href="8149.php">-Gim: "[OMPI users] Is this an OpenMPI bug?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 20, 2009, at 6:54 PM, -Gim wrote:
<br>
<p><span class="quotelev1">&gt; I am trying to use the mpi_bcast function in fortran.  I am using  
</span><br>
<span class="quotelev1">&gt; open-mpi-v-1.2.7
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Say x is a real variable of size 100. np =100  I try to bcast this  
</span><br>
<span class="quotelev1">&gt; to all the processors.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I use call mpi_bcast(x,np,mpi_real,0,ierr)
</span><br>
<p>Aren't you missing the communicator argument in there?
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
<li><strong>Next message:</strong> <a href="8158.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.3:"</a>
<li><strong>Previous message:</strong> <a href="8156.php">Raymond Wan: "Re: [OMPI users] round-robin scheduling question [hostfile]"</a>
<li><strong>In reply to:</strong> <a href="8149.php">-Gim: "[OMPI users] Is this an OpenMPI bug?"</a>
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
