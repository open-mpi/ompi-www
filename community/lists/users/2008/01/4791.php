<?
$subject_val = "Re: [OMPI users] Problems Broadcasting/Scattering Data";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan  8 13:02:05 2008" -->
<!-- isoreceived="20080108180205" -->
<!-- sent="Tue, 8 Jan 2008 19:01:58 +0100" -->
<!-- isosent="20080108180158" -->
<!-- name="Andreas Sch&#228;fer" -->
<!-- email="gentryx_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problems Broadcasting/Scattering Data" -->
<!-- id="20080108180158.GC692_at_wintermute" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4783AD40.30801_at_gmx.at" -->
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
<strong>Date:</strong> 2008-01-08 13:01:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4792.php">Dino Rossegger: "Re: [OMPI users] Problems Broadcasting/Scattering Data"</a>
<li><strong>Previous message:</strong> <a href="4790.php">Dino Rossegger: "Re: [OMPI users] Problems Broadcasting/Scattering Data"</a>
<li><strong>In reply to:</strong> <a href="4790.php">Dino Rossegger: "Re: [OMPI users] Problems Broadcasting/Scattering Data"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4792.php">Dino Rossegger: "Re: [OMPI users] Problems Broadcasting/Scattering Data"</a>
<li><strong>Reply:</strong> <a href="4792.php">Dino Rossegger: "Re: [OMPI users] Problems Broadcasting/Scattering Data"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Dino,
<br>
<p>On 18:05 Tue 08 Jan     , Dino Rossegger wrote:
<br>
<span class="quotelev1">&gt; In fact it is initialized, as I stated in my first mail I only left out 
</span><br>
<span class="quotelev1">&gt; the code where it gets initialized, since it reads the data from a file 
</span><br>
<span class="quotelev1">&gt; and that works (I have tested it).
</span><br>
<p>(you should have provided a self contained excerpt)
<br>
<p>I have reworked your program to check what's running wrong. In fact it
<br>
seems to work as expected, although you might want to double check
<br>
your array sizes, they're named a bit confusingly.
<br>
<p>Maybe it didn't work because there was no MPI_Finalize() at the
<br>
end. But then again I might not understand your problem. The other
<br>
machines do no output, so how can their output be wrong? If you expect
<br>
the other processors to have the same data in stat3 as rank 0 does,
<br>
then you should rather use MPI_Allgather than MPI_Gather, as
<br>
MPI_Gather will only concentrate the data on the root node, which is 0
<br>
in your case. Thus, the other nodes cannot produce the same output as
<br>
node 0.
<br>
<p>I've attached my reworked version (including some initialization
<br>
code for clarity). If you want me again to debug a program of yours,
<br>
send a floppy along with a pizza Hawai (cartwheel size) to:
<br>
<p>Andreas Sch&#228;fer
<br>
Cluster and Metacomputing Working Group
<br>
Friedrich-Schiller-Universit&#228;t Jena
<br>
Ernst-Abbe-Platz 2
<br>
07743 Jena
<br>
Germany
<br>
<p>Seriously, that would be cool :P
<br>
<p>HTH
<br>
-Andi
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
<li>text/x-c++src attachment: <a href="http://www.open-mpi.org/community/lists/users/att-4791/test.cpp">test.cpp</a>
</ul>
<!-- attachment="test.cpp" -->
<hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-4791/02-part">stored</a>
</ul>
<!-- attachment="02-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4792.php">Dino Rossegger: "Re: [OMPI users] Problems Broadcasting/Scattering Data"</a>
<li><strong>Previous message:</strong> <a href="4790.php">Dino Rossegger: "Re: [OMPI users] Problems Broadcasting/Scattering Data"</a>
<li><strong>In reply to:</strong> <a href="4790.php">Dino Rossegger: "Re: [OMPI users] Problems Broadcasting/Scattering Data"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4792.php">Dino Rossegger: "Re: [OMPI users] Problems Broadcasting/Scattering Data"</a>
<li><strong>Reply:</strong> <a href="4792.php">Dino Rossegger: "Re: [OMPI users] Problems Broadcasting/Scattering Data"</a>
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
