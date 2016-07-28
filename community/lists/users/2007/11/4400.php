<?
$subject_val = "Re: [OMPI users] Code dies, no error";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov  5 11:10:10 2007" -->
<!-- isoreceived="20071105161010" -->
<!-- sent="Mon, 5 Nov 2007 08:17:57 -0500" -->
<!-- isosent="20071105131757" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Code dies, no error" -->
<!-- id="F6300F47-BBD2-49C5-855D-4C496FACCD2D_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="005501c81e0a$effc1340$0200a8c0_at_Timo" -->
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
<strong>Date:</strong> 2007-11-05 08:17:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4401.php">Karsten Bolding: "[OMPI users] machinefile and rank"</a>
<li><strong>Previous message:</strong> <a href="4399.php">Rainer Keller: "Re: [OMPI users] Code dies, no error"</a>
<li><strong>In reply to:</strong> <a href="4397.php">Tim Reis: "[OMPI users] Code dies, no error"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 3, 2007, at 7:16 AM, Tim Reis wrote:
<br>
<p><span class="quotelev1">&gt; I am a new user of mpi who is having a problem that I hope someone  
</span><br>
<span class="quotelev1">&gt; can help we with.
</span><br>
<p>Looks like you hit several MPI-related mailing lists with this same  
<br>
mail.  :-)
<br>
<p><span class="quotelev1">&gt; I have a code that seems to build fine with mpif90. I can submit it  
</span><br>
<span class="quotelev1">&gt; to a queue using mpirun with no problems but once it has transferred  
</span><br>
<span class="quotelev1">&gt; from qw to r state it dies very quickly (I say die rather than  
</span><br>
<span class="quotelev1">&gt; finish because this is a large code that ran for days on an old  
</span><br>
<span class="quotelev1">&gt; cluster).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And when I try to look at the .e and .o files that are defined in my  
</span><br>
<span class="quotelev1">&gt; script I notice they are both empty.
</span><br>
<p>It's hard to say without more detail, but it sounds like the MPI job  
<br>
itself is failing to be launched properly.  You might want to check  
<br>
things like your PATH, LD_LIBRARY_PATH, etc.  You might also want to  
<br>
try launching non-MPI jobs and/or trivial MPI jobs (e.g., the MPI  
<br>
equivalent of &quot;hello world&quot;) as diagnostics.
<br>
<p>Hope that helps.
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
<li><strong>Next message:</strong> <a href="4401.php">Karsten Bolding: "[OMPI users] machinefile and rank"</a>
<li><strong>Previous message:</strong> <a href="4399.php">Rainer Keller: "Re: [OMPI users] Code dies, no error"</a>
<li><strong>In reply to:</strong> <a href="4397.php">Tim Reis: "[OMPI users] Code dies, no error"</a>
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
