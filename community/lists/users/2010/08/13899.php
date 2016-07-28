<?
$subject_val = "[OMPI users] Implementing a new BTL module in MCA";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug  3 08:15:17 2010" -->
<!-- isoreceived="20100803121517" -->
<!-- sent="Tue, 03 Aug 2010 14:15:11 +0200" -->
<!-- isosent="20100803121511" -->
<!-- name="Simone Pellegrini" -->
<!-- email="spellegrini_at_[hidden]" -->
<!-- subject="[OMPI users] Implementing a new BTL module in MCA" -->
<!-- id="4C58084F.9010501_at_dps.uibk.ac.at" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Implementing a new BTL module in MCA<br>
<strong>From:</strong> Simone Pellegrini (<em>spellegrini_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-03 08:15:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13900.php">Allen Barnett: "Re: [OMPI users] OpenIB Error in ibv_create_srq"</a>
<li><strong>Previous message:</strong> <a href="13898.php">Eugene Loh: "Re: [OMPI users] MPIRUN Error on Mac pro i7 laptop and linux desktop"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13902.php">Nysal Jan: "Re: [OMPI users] Implementing a new BTL module in MCA"</a>
<li><strong>Reply:</strong> <a href="13902.php">Nysal Jan: "Re: [OMPI users] Implementing a new BTL module in MCA"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Deal all,
<br>
I need to implement an MPI layer on top of a message passing library 
<br>
which is currently used in a particular device where I have to run MPI 
<br>
programs ( very vague, I know :) ).
<br>
<p>Instead of reinventing the wheel, my idea was to reuse most of the Open 
<br>
MPI implementation and just add a new layer to support my custom device. 
<br>
I guess that extending the Byte Transfer Layer of the Modular Component 
<br>
Architecture should make the job. Right?
<br>
<p>Anyway, before starting wasting my time looking for documentation I 
<br>
wanted to have some pointers to documentation regarding extension of 
<br>
Open MPI. Which are the interfaces I have to extend? Is there any &quot;hello 
<br>
world&quot; example on how to do it?
<br>
<p>many thanks, Simone
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13900.php">Allen Barnett: "Re: [OMPI users] OpenIB Error in ibv_create_srq"</a>
<li><strong>Previous message:</strong> <a href="13898.php">Eugene Loh: "Re: [OMPI users] MPIRUN Error on Mac pro i7 laptop and linux desktop"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13902.php">Nysal Jan: "Re: [OMPI users] Implementing a new BTL module in MCA"</a>
<li><strong>Reply:</strong> <a href="13902.php">Nysal Jan: "Re: [OMPI users] Implementing a new BTL module in MCA"</a>
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
