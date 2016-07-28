<?
$subject_val = "Re: [OMPI users] Problems Broadcasting/Scattering Data";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan  8 17:08:56 2008" -->
<!-- isoreceived="20080108220856" -->
<!-- sent="Tue, 8 Jan 2008 23:08:49 +0100" -->
<!-- isosent="20080108220849" -->
<!-- name="Andreas Sch&#228;fer" -->
<!-- email="gentryx_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problems Broadcasting/Scattering Data" -->
<!-- id="20080108220849.GA9534_at_wintermute" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4783C197.5060109_at_gmx.at" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problems Broadcasting/Scattering Data<br>
<strong>From:</strong> Andreas Sch&#228;fer (<em>gentryx_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-08 17:08:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4798.php">Jeff Squyres: "Re: [OMPI users] Open MPI v1.2.5 released"</a>
<li><strong>Previous message:</strong> <a href="4796.php">Francesco Pietra: "Re: [OMPI users] Open MPI v1.2.5 released"</a>
<li><strong>In reply to:</strong> <a href="4792.php">Dino Rossegger: "Re: [OMPI users] Problems Broadcasting/Scattering Data"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4799.php">Dino Rossegger: "Re: [OMPI users] Problems Broadcasting/Scattering Data"</a>
<li><strong>Reply:</strong> <a href="4799.php">Dino Rossegger: "Re: [OMPI users] Problems Broadcasting/Scattering Data"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 19:31 Tue 08 Jan     , Dino Rossegger wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; thanks for the programm, but sadly I can't get it work :(.
</span><br>
<span class="quotelev1">&gt; It's the same error as in my programm. I get the following output:
</span><br>
<span class="quotelev1">&gt; 0
</span><br>
<span class="quotelev1">&gt; 0
</span><br>
<span class="quotelev1">&gt; 0
</span><br>
<span class="quotelev1">&gt; 10
</span><br>
<span class="quotelev1">&gt; 0
</span><br>
<span class="quotelev1">&gt; 0
</span><br>
<span class="quotelev1">&gt; 11
</span><br>
<span class="quotelev1">&gt; 0
</span><br>
<span class="quotelev1">&gt; 0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Which as far as I know can't be correct. 
</span><br>
<p>Oh, my bad. The field pointers had to be corrected for the Gather.
<br>
Now the output looks like this:
<br>
<p>0
<br>
500
<br>
1000
<br>
10
<br>
510
<br>
1010
<br>
11
<br>
511
<br>
1011
<br>
<p>Is this what you did expect?
<br>
<p>BTW: of course you can send multidimensional arrays with scatter and
<br>
gather. This is because they're really just one-dimensional in
<br>
memory. 
<br>
<p>Cheers
<br>
-Andreas
<br>
<p><p><pre>
-- 
============================================
Andreas Sch&#228;fer
Cluster and Metacomputing Working Group
Friedrich-Schiller-Universit&#228;t Jena, Germany
PGP/GPG key via keyserver
I'm a bright... <a href="http://www.the-brights.net">http://www.the-brights.net</a>
============================================
(\___/)
(+'.'+)
(&quot;)_(&quot;)
This is Bunny. Copy and paste Bunny into your 
signature to help him gain world domination!

</pre>
<p>
<p>
<br><hr>
<ul>
<li>text/x-c++src attachment: <a href="http://www.open-mpi.org/community/lists/users/att-4797/test.cpp">test.cpp</a>
</ul>
<!-- attachment="test.cpp" -->
<hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-4797/02-part">stored</a>
</ul>
<!-- attachment="02-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4798.php">Jeff Squyres: "Re: [OMPI users] Open MPI v1.2.5 released"</a>
<li><strong>Previous message:</strong> <a href="4796.php">Francesco Pietra: "Re: [OMPI users] Open MPI v1.2.5 released"</a>
<li><strong>In reply to:</strong> <a href="4792.php">Dino Rossegger: "Re: [OMPI users] Problems Broadcasting/Scattering Data"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4799.php">Dino Rossegger: "Re: [OMPI users] Problems Broadcasting/Scattering Data"</a>
<li><strong>Reply:</strong> <a href="4799.php">Dino Rossegger: "Re: [OMPI users] Problems Broadcasting/Scattering Data"</a>
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
