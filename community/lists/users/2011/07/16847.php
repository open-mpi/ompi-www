<?
$subject_val = "Re: [OMPI users] Open-MPI maffinity policy";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul  7 18:14:19 2011" -->
<!-- isoreceived="20110707221419" -->
<!-- sent="Thu, 7 Jul 2011 18:14:14 -0400" -->
<!-- isosent="20110707221414" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open-MPI maffinity policy" -->
<!-- id="82DF5DB8-CF0B-42F5-B779-EA656648E3DE_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CA+35g90yMW5oh+oAyDypaTpbKhM0A4QzSokVWU2Z8nE4Ub+VkA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Open-MPI maffinity policy<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-07 18:14:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16848.php">Jeff Squyres: "Re: [OMPI users] InfiniBand, different OpenFabrics transport types"</a>
<li><strong>Previous message:</strong> <a href="16846.php">Prentice Bisbal: "Re: [OMPI users] Anyone with Visual Studio + MPI Experience"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/06/16797.php">Qasim Ali: "[OMPI users] Open-MPI maffinity policy"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 7, 2011, at 5:59 PM, Qasim Ali wrote:
<br>
<p><span class="quotelev1">&gt; Hi Jeff,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for following up. I have a question to clear things.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. If I do not specify any affinity in mpirun, what memory allocation policy is used by default?
</span><br>
<p>None.
<br>
<p><span class="quotelev1">&gt; a. When it is not compiled with libnuma 
</span><br>
<span class="quotelev1">&gt; b. when compiled with libnuma
</span><br>
<p>Memory affinity doesn't really make sense unless process affinity is used.  I.e., why pin your memory if your process could move?
<br>
<p><span class="quotelev1">&gt; BTW What do you mean by &quot;internal memory&quot; in OMPI? 
</span><br>
<p>Memory that Open MPI uses internally -- such as shared memory to communicate between processes on the same server.  I.e., this is memory that Open MPI does not expose to the user; it's private, internal memory.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16848.php">Jeff Squyres: "Re: [OMPI users] InfiniBand, different OpenFabrics transport types"</a>
<li><strong>Previous message:</strong> <a href="16846.php">Prentice Bisbal: "Re: [OMPI users] Anyone with Visual Studio + MPI Experience"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/06/16797.php">Qasim Ali: "[OMPI users] Open-MPI maffinity policy"</a>
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
