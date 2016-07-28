<?
$subject_val = "Re: [OMPI users] Invalid info object in MPI_Comm_spawn_multiple";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 19 09:27:06 2009" -->
<!-- isoreceived="20090819132706" -->
<!-- sent="Wed, 19 Aug 2009 09:26:58 -0400" -->
<!-- isosent="20090819132658" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Invalid info object in MPI_Comm_spawn_multiple" -->
<!-- id="94C3DEEF-9EFA-43B2-B48E-9BAA67244CCD_at_cisco.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="b88e40560908180539r1d6c5a4aw36849194b04d27fd_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Invalid info object in MPI_Comm_spawn_multiple<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-19 09:26:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10430.php">Jean Potsam: "[OMPI users] problem with LD_LIBRARY_PATH???"</a>
<li><strong>Previous message:</strong> <a href="10428.php">Nulik Nol: "Re: [OMPI users] --rankfile"</a>
<li><strong>In reply to:</strong> <a href="10398.php">Federico Golfr&#232; Andreasi: "Re: [OMPI users] Invalid info object in MPI_Comm_spawn_multiple"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 18, 2009, at 8:39 AM, Federico Golfr&#232; Andreasi wrote:
<br>
<p><span class="quotelev1">&gt; I think I've solved my problem:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; in the previous code the arguments of the MPI_Comm_spawn_multiple  
</span><br>
<span class="quotelev1">&gt; where filled only by the &quot;root&quot; process not by all the process in  
</span><br>
<span class="quotelev1">&gt; the group. Now all the ranks have all that information and the spawn  
</span><br>
<span class="quotelev1">&gt; is done correctly.
</span><br>
<span class="quotelev1">&gt; But I read on <a href="http://www.mpi-forum.org/docs/mpi21-report/node203.htm">http://www.mpi-forum.org/docs/mpi21-report/node203.htm</a>  
</span><br>
<span class="quotelev1">&gt; that those information are significant only at root.
</span><br>
<p>You are exactly right -- this is a legitimate bug!  I've fixed our  
<br>
development trunk in <a href="https://svn.open-mpi.org/trac/ompi/timeline">https://svn.open-mpi.org/trac/ompi/timeline</a> and  
<br>
have filed a CMR to get this fix into 1.3.4.
<br>
<p>Thanks for the report!
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10430.php">Jean Potsam: "[OMPI users] problem with LD_LIBRARY_PATH???"</a>
<li><strong>Previous message:</strong> <a href="10428.php">Nulik Nol: "Re: [OMPI users] --rankfile"</a>
<li><strong>In reply to:</strong> <a href="10398.php">Federico Golfr&#232; Andreasi: "Re: [OMPI users] Invalid info object in MPI_Comm_spawn_multiple"</a>
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
