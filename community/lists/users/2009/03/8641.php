<?
$subject_val = "Re: [OMPI users] Generic Type";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 30 12:36:14 2009" -->
<!-- isoreceived="20090330163614" -->
<!-- sent="Mon, 30 Mar 2009 18:36:08 +0200" -->
<!-- isosent="20090330163608" -->
<!-- name="Massimo Cafaro" -->
<!-- email="massimo.cafaro_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Generic Type" -->
<!-- id="2B0E51BD-0FE0-46FC-BBDC-C187E923204C_at_unisalento.it" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="3a37617f0903300843q13a8710bpaad76367e1d0a8b6_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Generic Type<br>
<strong>From:</strong> Massimo Cafaro (<em>massimo.cafaro_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-30 12:36:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8642.php">Kevin McManus: "Re: [OMPI users] Linux opteron infiniband sunstudio	configure	problem"</a>
<li><strong>Previous message:</strong> <a href="8640.php">Jeff Squyres: "Re: [OMPI users] Generic Type"</a>
<li><strong>In reply to:</strong> <a href="8638.php">Gabriele Fatigati: "[OMPI users] Generic Type"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8671.php">Gabriele Fatigati: "Re: [OMPI users] Generic Type"</a>
<li><strong>Reply:</strong> <a href="8671.php">Gabriele Fatigati: "Re: [OMPI users] Generic Type"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Gabriele,
<br>
<p>to the best of my knowledge the MPI standard does not provide such a  
<br>
function.
<br>
The reason is that when calling  MPI_Gather, the standard requires  
<br>
matching type signatures (i.e., the sendcount and sendtype argument on  
<br>
each of the non root processes must match the recvcount and recvtype  
<br>
arguments at the root process). This still allows having disting type  
<br>
maps (type and displacement pairs) at a sender process and at the root  
<br>
process, but it is a feature seldom used in practice, at least in my  
<br>
experience.
<br>
<p>Therefore, you must know in advance the datatype you are receiving  
<br>
even in the case this datatype is a derived datatype.
<br>
If not, the likely outcome is that the receive buffer at the root  
<br>
process gets overwritten, which causes MPI_Gather to return an error.
<br>
<p>Due to the signature of the MPI_Gather function, the only possibility  
<br>
I see to achieve what you are trying to do is to use the MPI_BYTE  
<br>
datatype, and use the communicator argument to distinguish between a  
<br>
collective gather in which you receive MPI_INT, MPI_DOUBLE etc. Of  
<br>
course I would not create nor recommend to create new communicators  
<br>
for this purpose only.
<br>
<p>Kind regards,
<br>
Massimo
<br>
<p>On 30/mar/09, at 17:43, Gabriele Fatigati wrote:
<br>
<p><span class="quotelev1">&gt; Dear OpenMPI developers,
</span><br>
<span class="quotelev1">&gt; i'm writing an MPI_Gather wrapper to collect void elements. My
</span><br>
<span class="quotelev1">&gt; queation is: is there a portable way to know the type of received
</span><br>
<span class="quotelev1">&gt; elements, like MPI_INT or MPI_DOUBLE? I've noted that i can retrieve
</span><br>
<span class="quotelev1">&gt; this information by ompi_datatype_t-&gt; name field, but i think isn't
</span><br>
<span class="quotelev1">&gt; portable. Is there aMPI function that does this check?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Ing. Gabriele Fatigati
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Parallel programmer
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; CINECA Systems &amp; Tecnologies Department
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Supercomputing Group
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Via Magnanelli 6/3, Casalecchio di Reno (BO) Italy
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; www.cineca.it                    Tel:   +39 051 6171722
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; g.fatigati [AT] cineca.it
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><p><pre>
-- 
*******************************************************************************************************
  Massimo Cafaro, Ph.D.                              Additional  
affiliations:
  Assistant Professor                                     National  
Nanotechnology Laboratory (NNL/CNR-INFM)
  Dept. of Engineering for Innovation         Euro-Mediterranean  
Centre for Climate Change
  University of Salento, Lecce, Italy            SPACI Consortium
  Via per Monteroni                                        E-mail massimo.cafaro_at_[hidden]
  73100 Lecce, Italy						                        cafaro_at_[hidden]
  Voice  +39 0832 297371 					                        cafaro_at_[hidden]
  Fax +39 0832 298173
  Web     <a href="http://sara.unisalento.it/~cafaro">http://sara.unisalento.it/~cafaro</a>
*******************************************************************************************************
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8642.php">Kevin McManus: "Re: [OMPI users] Linux opteron infiniband sunstudio	configure	problem"</a>
<li><strong>Previous message:</strong> <a href="8640.php">Jeff Squyres: "Re: [OMPI users] Generic Type"</a>
<li><strong>In reply to:</strong> <a href="8638.php">Gabriele Fatigati: "[OMPI users] Generic Type"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8671.php">Gabriele Fatigati: "Re: [OMPI users] Generic Type"</a>
<li><strong>Reply:</strong> <a href="8671.php">Gabriele Fatigati: "Re: [OMPI users] Generic Type"</a>
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
