<?
$subject_val = "[OMPI users] Problem with AlltoAll routine";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May  6 11:35:17 2008" -->
<!-- isoreceived="20080506153517" -->
<!-- sent="Tue, 6 May 2008 17:35:09 +0200" -->
<!-- isosent="20080506153509" -->
<!-- name="Gabriele FATIGATI" -->
<!-- email="g.fatigati_at_[hidden]" -->
<!-- subject="[OMPI users] Problem with AlltoAll routine" -->
<!-- id="20080506153509.5F1422AFF9_at_list.cineca.com" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Problem with AlltoAll routine<br>
<strong>From:</strong> Gabriele FATIGATI (<em>g.fatigati_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-06 11:35:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5616.php">Alberto Giannetti: "Re: [OMPI users] MPI_Lookup_name error"</a>
<li><strong>Previous message:</strong> <a href="5614.php">Gregory John Orris: "Re: [OMPI users] Install BLACS and ScaLAPACK on Leopard"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5617.php">Brad Benton: "Re: [OMPI users] Problem with AlltoAll routine"</a>
<li><strong>Reply:</strong> <a href="5617.php">Brad Benton: "Re: [OMPI users] Problem with AlltoAll routine"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
i tried to run SkaMPI 5.0.4 benchmark on IBM-BladeCenterLS21 system with 256 processors over Infiniband 5 Gb/s, but test has stopped on &quot;AlltoAll-length&quot; routine, with count=2048 for some reason.
<br>
<p>I have launched test with:
<br>
--mca btl_openib_eager_limit 1024
<br>
<p>Same tests with 128 processor or less, have finished successful. 
<br>
<p>Different values of eager limit don't solve the problem. Version of OpenMPI involved is 1.2.5. There's someone with this kind of problem over Infiniband?
<br>
Thanks in advance.
<br>
-------------------------- 
<br>
Gabriele Fatigati
<br>
<p>CINECA Systems &amp; Tecnologies Department
<br>
<p>Supercomputing  Group
<br>
<p>Via Magnanelli 6/3, Casalecchio di Reno (BO) Italy
<br>
<p>www.cineca.it                    Tel:    39 051 6171722
<br>
<p>g.fatigati_at_[hidden]           
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5616.php">Alberto Giannetti: "Re: [OMPI users] MPI_Lookup_name error"</a>
<li><strong>Previous message:</strong> <a href="5614.php">Gregory John Orris: "Re: [OMPI users] Install BLACS and ScaLAPACK on Leopard"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5617.php">Brad Benton: "Re: [OMPI users] Problem with AlltoAll routine"</a>
<li><strong>Reply:</strong> <a href="5617.php">Brad Benton: "Re: [OMPI users] Problem with AlltoAll routine"</a>
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
