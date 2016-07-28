<?
$subject_val = "Re: [OMPI users] mpi-io, fortran, going crazy... (ADENDA)";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 22 11:13:48 2010" -->
<!-- isoreceived="20101122161348" -->
<!-- sent="Mon, 22 Nov 2010 11:13:42 -0500" -->
<!-- isosent="20101122161342" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpi-io, fortran, going crazy... (ADENDA)" -->
<!-- id="FAA7E98C-540C-47CF-843F-592BEB536B1F_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="alpine.DEB.2.00.1011171157180.3436_at_localhost" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpi-io, fortran, going crazy... (ADENDA)<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-22 11:13:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14865.php">Jeff Squyres: "Re: [OMPI users] SYSTEM CPU with OpenMPI 1.4.3"</a>
<li><strong>Previous message:</strong> <a href="14863.php">Jeff Squyres: "Re: [OMPI users] Infiniband problem, kernel mismatch"</a>
<li><strong>In reply to:</strong> <a href="14804.php">Ricardo Reis: "Re: [OMPI users] mpi-io, fortran, going crazy... (ADENDA)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14809.php">Gus Correa: "Re: [OMPI users] mpi-io, fortran, going crazy... (ADENDA)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 17, 2010, at 6:58 AM, Ricardo Reis wrote:
<br>
<p><span class="quotelev1">&gt; Thanks for the explanation. Then this should be updated in the spec no...?
</span><br>
<p>You have no idea.  :-)
<br>
<p>The MPI Forum has been debating about exactly this issue for over a year.  It turns out to be a surprisingly complex, subtle issue (i.e., it's not easy to just &quot;upgrade&quot; the type used to pass counts around in MPI functions).  
<br>
<p>The Forum has not resolved this issue yet; a small subset of the issues are described in the SC MPI Forum BOF slides that were presented last week.  Rich Graham is going to post those slides on the web somewhere, but I don't think he has posted them yet.
<br>
<p>As Gus points out, the workaround is to use MPI datatypes so that your count can still be &quot;low&quot; (i.e., still positive for an INTEGER or int), even though the total amount of data being written/sent/received/whatever is larger.  MPI should do the Right Thing under the covers in this case.
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
<li><strong>Next message:</strong> <a href="14865.php">Jeff Squyres: "Re: [OMPI users] SYSTEM CPU with OpenMPI 1.4.3"</a>
<li><strong>Previous message:</strong> <a href="14863.php">Jeff Squyres: "Re: [OMPI users] Infiniband problem, kernel mismatch"</a>
<li><strong>In reply to:</strong> <a href="14804.php">Ricardo Reis: "Re: [OMPI users] mpi-io, fortran, going crazy... (ADENDA)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14809.php">Gus Correa: "Re: [OMPI users] mpi-io, fortran, going crazy... (ADENDA)"</a>
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
