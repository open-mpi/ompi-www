<?
$subject_val = "Re: [OMPI users] Error with MPI_Register_datarep";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 16 08:06:15 2016" -->
<!-- isoreceived="20160316120615" -->
<!-- sent="Wed, 16 Mar 2016 08:06:13 -0400" -->
<!-- isosent="20160316120613" -->
<!-- name="&#195;&#137;ric Chamberland" -->
<!-- email="Eric.Chamberland_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error with MPI_Register_datarep" -->
<!-- id="56E94C35.3090607_at_giref.ulaval.ca" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="56E70BEA.2010202_at_mcs.anl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] Error with MPI_Register_datarep<br>
<strong>From:</strong> &#195;&#137;ric Chamberland (<em>Eric.Chamberland_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-16 08:06:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28712.php">Edgar Gabriel: "Re: [OMPI users] Error with MPI_Register_datarep"</a>
<li><strong>Previous message:</strong> <a href="28710.php">Husen R: "Re: [OMPI users] Fault tolerant feature in Open MPI"</a>
<li><strong>In reply to:</strong> <a href="28701.php">Rob Latham: "Re: [OMPI users] Error with MPI_Register_datarep"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28712.php">Edgar Gabriel: "Re: [OMPI users] Error with MPI_Register_datarep"</a>
<li><strong>Reply:</strong> <a href="28712.php">Edgar Gabriel: "Re: [OMPI users] Error with MPI_Register_datarep"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 16-03-14 15:07, Rob Latham a &#233;crit :
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On mpich's discussion list the point was made that libraries like HDF5 
</span><br>
<span class="quotelev1">&gt; and (Parallel-)NetCDF provide not only the sort of platform 
</span><br>
<span class="quotelev1">&gt; portability Eric desires, but also provide a self-describing file format.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ==rob
</span><br>
<span class="quotelev1">&gt;
</span><br>
But I do not agree with that.
<br>
<p>If MPI can provide me a simple solution like user datarep, why in the 
<br>
world would I bind my code to another library?
<br>
<p>Instead of re-coding all my I/O in my code, I would prefer to contribute 
<br>
to MPI I/O implementations out there...  :)
<br>
<p>So, the never answered question: How big is that task????
<br>
<p>Also, in 2012, I can state that having looked at HDF5, there was no 
<br>
functions that used collective MPI I/O for *randomly distributed* 
<br>
data...  Collective I/O was available only for &quot;structured&quot; data. So I 
<br>
coded it all directly into MPI natives calls... and it works like a charm!
<br>
<p>Thanks,
<br>
<p>Eric
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28712.php">Edgar Gabriel: "Re: [OMPI users] Error with MPI_Register_datarep"</a>
<li><strong>Previous message:</strong> <a href="28710.php">Husen R: "Re: [OMPI users] Fault tolerant feature in Open MPI"</a>
<li><strong>In reply to:</strong> <a href="28701.php">Rob Latham: "Re: [OMPI users] Error with MPI_Register_datarep"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28712.php">Edgar Gabriel: "Re: [OMPI users] Error with MPI_Register_datarep"</a>
<li><strong>Reply:</strong> <a href="28712.php">Edgar Gabriel: "Re: [OMPI users] Error with MPI_Register_datarep"</a>
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
