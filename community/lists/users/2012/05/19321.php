<?
$subject_val = "Re: [OMPI users] mpirun error with &quot; The MPI_Comm_f2c() function was called before MPI_INIT was invoked.&quot;";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 21 19:33:11 2012" -->
<!-- isoreceived="20120521233311" -->
<!-- sent="Mon, 21 May 2012 17:33:08 -0600" -->
<!-- isosent="20120521233308" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun error with &amp;quot; The MPI_Comm_f2c() function was called before MPI_INIT was invoked.&amp;quot;" -->
<!-- id="63719BA6-DEC0-4FC8-AA9A-9542A9DFD462_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="8D37503D-B342-4F73-AD88-4849EC487F30_at_staff.uni-marburg.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpirun error with &quot; The MPI_Comm_f2c() function was called before MPI_INIT was invoked.&quot;<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-21 19:33:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19322.php">Jeff Squyres: "Re: [OMPI users] mpicc link shouldn't add -ldl and -lhwloc"</a>
<li><strong>Previous message:</strong> <a href="19320.php">Orion Poplawski: "Re: [OMPI users] mpicc link shouldn't add -ldl and -lhwloc"</a>
<li><strong>In reply to:</strong> <a href="19318.php">Reuti: "Re: [OMPI users] mpirun error with &quot; The MPI_Comm_f2c() function was called before MPI_INIT was invoked.&quot;"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 21, 2012, at 2:40 PM, Reuti wrote:
<br>
<p><span class="quotelev2">&gt;&gt; I encountered a question about openmpi running. I have compiled
</span><br>
<span class="quotelev2">&gt;&gt; successfully a paralle VASP program with openmpi 1.4.2. But when I run
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Which version of VASP are you using? By default I can't spot any direct call to MPI_Comm_f2c in the source. Do you want to compile the ScaLAPACK or plain MPI version?
</span><br>
<p>FWIW, this is probably an internal call to MPI_Comm_f2c -- i.e., calling a Fortran MPI_&lt;foo&gt; function, which, in turn, calls MPI_Comm_f2c to translate a comm parameter to its C equivalent.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19322.php">Jeff Squyres: "Re: [OMPI users] mpicc link shouldn't add -ldl and -lhwloc"</a>
<li><strong>Previous message:</strong> <a href="19320.php">Orion Poplawski: "Re: [OMPI users] mpicc link shouldn't add -ldl and -lhwloc"</a>
<li><strong>In reply to:</strong> <a href="19318.php">Reuti: "Re: [OMPI users] mpirun error with &quot; The MPI_Comm_f2c() function was called before MPI_INIT was invoked.&quot;"</a>
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
