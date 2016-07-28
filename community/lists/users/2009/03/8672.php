<?
$subject_val = "Re: [OMPI users] Generic Type";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 31 07:06:15 2009" -->
<!-- isoreceived="20090331110615" -->
<!-- sent="Tue, 31 Mar 2009 13:05:58 +0200" -->
<!-- isosent="20090331110558" -->
<!-- name="Massimo Cafaro" -->
<!-- email="massimo.cafaro_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Generic Type" -->
<!-- id="0E2B7DE5-3737-49F2-9BE3-AE403A55ACCF_at_unisalento.it" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="3a37617f0903310316y4469887awc51c7b4c79a85060_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2009-03-31 07:05:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8673.php">Gabriele Fatigati: "Re: [OMPI users] Generic Type"</a>
<li><strong>Previous message:</strong> <a href="8671.php">Gabriele Fatigati: "Re: [OMPI users] Generic Type"</a>
<li><strong>In reply to:</strong> <a href="8671.php">Gabriele Fatigati: "Re: [OMPI users] Generic Type"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8673.php">Gabriele Fatigati: "Re: [OMPI users] Generic Type"</a>
<li><strong>Reply:</strong> <a href="8673.php">Gabriele Fatigati: "Re: [OMPI users] Generic Type"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>let me see that it is still not clear to me why you want to  
<br>
reimplement the MPI_Gather supplied by an MPI implementation with your  
<br>
own version.
<br>
You will never be able to attain the same level of performance using  
<br>
point to point communication, since MPI_Gather uses internally a  
<br>
binomial tree or even better advanced data structures to improve its  
<br>
overall performances.
<br>
<p>&nbsp;From your code snippet, I guess the problem arises because you are  
<br>
not considering the extent of the datatype you are trying to receive:
<br>
<p>using int MPI_Type_get_extent(MPI_Datatype datatype, MPI_Aint *lb,  
<br>
MPI_Aint *extent );
<br>
<p><p>MPI_Aint lower_bound, extent;
<br>
int rc;
<br>
rc = MPI_Type_get_extent(recvtype, &amp;lower_bound, &amp;extent);
<br>
if(rc == MPI_SUCCESS)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Irecv(buff + (i-1) * recvcount *  extent, recvcount, recvtype, i,  
<br>
0, comm, &amp;array_request[i-1]);
<br>
<p>or if you prefer non pointer notation
<br>
<p>MPI_Irecv(buff[(i-1) * recvcount *  extent], recvcount, recvtype, i,  
<br>
0, comm, &amp;array_request[i-1]);
<br>
<p><p>In practice, the extent of a datatype should be equal to the size as  
<br>
reported by sizeof(datatype).
<br>
Using MPI_Type_get_extent() is the portable way of doing this using MPI.
<br>
<p>Regards,
<br>
Massimo
<br>
<p><p><p><p>On 31/mar/09, at 12:16, Gabriele Fatigati wrote:
<br>
<p><span class="quotelev1">&gt; Mm,
</span><br>
<span class="quotelev1">&gt; OpenMPI functions like MPI_Irecv, does pointer arithmetics over recv
</span><br>
<span class="quotelev1">&gt; buffer using type info in ompi_datatype_t i suppose. I'm trying to
</span><br>
<span class="quotelev1">&gt; write a wrapper to MPI_Gather using Irecv functions:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int MPI_FT_Gather(void*sendbuf, int sendcount, MPI_Datatype sendtype,
</span><br>
<span class="quotelev1">&gt; void*recvbuff,
</span><br>
<span class="quotelev1">&gt;                          int recvcount, MPI_Datatype recvtype,
</span><br>
<span class="quotelev1">&gt;                          int root, MPI_Comm comm){
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; for( nprocs..){
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPI_Irecv(&amp;recvbuff[(i-1)], recvcount, recvtype, i, 0, comm,
</span><br>
<span class="quotelev1">&gt; &amp;array_request[i-1]);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; where every proc sends 1 double. It doesn't work,( received values are
</span><br>
<span class="quotelev1">&gt; wrong) because MPI_Irecv are trying to do pointer arithmetic with void
</span><br>
<span class="quotelev1">&gt; values. In fact, if i write:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; double*buff  = &amp;recvbuff[0];
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; for( nprocs..){
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPI_Irecv(&amp;buff[(i-1)], recvcount, recvtype, i, 0, comm,  
</span><br>
<span class="quotelev1">&gt; &amp;array_request[i-1]);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; it works well. Do you have an idea to use a portalbe way to do this?(
</span><br>
<span class="quotelev1">&gt; if is it possible)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2009/3/30 Massimo Cafaro &lt;massimo.cafaro_at_[hidden]&gt;:
</span><br>
<span class="quotelev2">&gt;&gt; Dear Gabriele,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; to the best of my knowledge the MPI standard does not provide such a
</span><br>
<span class="quotelev2">&gt;&gt; function.
</span><br>
<span class="quotelev2">&gt;&gt; The reason is that when calling  MPI_Gather, the standard requires  
</span><br>
<span class="quotelev2">&gt;&gt; matching
</span><br>
<span class="quotelev2">&gt;&gt; type signatures (i.e., the sendcount and sendtype argument on each  
</span><br>
<span class="quotelev2">&gt;&gt; of the
</span><br>
<span class="quotelev2">&gt;&gt; non root processes must match the recvcount and recvtype arguments  
</span><br>
<span class="quotelev2">&gt;&gt; at the
</span><br>
<span class="quotelev2">&gt;&gt; root process). This still allows having disting type maps (type and
</span><br>
<span class="quotelev2">&gt;&gt; displacement pairs) at a sender process and at the root process,  
</span><br>
<span class="quotelev2">&gt;&gt; but it is a
</span><br>
<span class="quotelev2">&gt;&gt; feature seldom used in practice, at least in my experience.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Therefore, you must know in advance the datatype you are receiving  
</span><br>
<span class="quotelev2">&gt;&gt; even in
</span><br>
<span class="quotelev2">&gt;&gt; the case this datatype is a derived datatype.
</span><br>
<span class="quotelev2">&gt;&gt; If not, the likely outcome is that the receive buffer at the root  
</span><br>
<span class="quotelev2">&gt;&gt; process
</span><br>
<span class="quotelev2">&gt;&gt; gets overwritten, which causes MPI_Gather to return an error.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Due to the signature of the MPI_Gather function, the only  
</span><br>
<span class="quotelev2">&gt;&gt; possibility I see
</span><br>
<span class="quotelev2">&gt;&gt; to achieve what you are trying to do is to use the MPI_BYTE  
</span><br>
<span class="quotelev2">&gt;&gt; datatype, and
</span><br>
<span class="quotelev2">&gt;&gt; use the communicator argument to distinguish between a collective  
</span><br>
<span class="quotelev2">&gt;&gt; gather in
</span><br>
<span class="quotelev2">&gt;&gt; which you receive MPI_INT, MPI_DOUBLE etc. Of course I would not  
</span><br>
<span class="quotelev2">&gt;&gt; create nor
</span><br>
<span class="quotelev2">&gt;&gt; recommend to create new communicators for this purpose only.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Kind regards,
</span><br>
<span class="quotelev2">&gt;&gt; Massimo
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 30/mar/09, at 17:43, Gabriele Fatigati wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Dear OpenMPI developers,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; i'm writing an MPI_Gather wrapper to collect void elements. My
</span><br>
<span class="quotelev3">&gt;&gt;&gt; queation is: is there a portable way to know the type of received
</span><br>
<span class="quotelev3">&gt;&gt;&gt; elements, like MPI_INT or MPI_DOUBLE? I've noted that i can retrieve
</span><br>
<span class="quotelev3">&gt;&gt;&gt; this information by ompi_datatype_t-&gt; name field, but i think isn't
</span><br>
<span class="quotelev3">&gt;&gt;&gt; portable. Is there aMPI function that does this check?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ing. Gabriele Fatigati
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Parallel programmer
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CINECA Systems &amp; Tecnologies Department
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Supercomputing Group
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Via Magnanelli 6/3, Casalecchio di Reno (BO) Italy
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; www.cineca.it                    Tel:   +39 051 6171722
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; g.fatigati [AT] cineca.it
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; *******************************************************************************************************
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Massimo Cafaro, Ph.D.                              Additional  
</span><br>
<span class="quotelev2">&gt;&gt; affiliations:
</span><br>
<span class="quotelev2">&gt;&gt;  Assistant Professor                                     National
</span><br>
<span class="quotelev2">&gt;&gt; Nanotechnology Laboratory (NNL/CNR-INFM)
</span><br>
<span class="quotelev2">&gt;&gt;  Dept. of Engineering for Innovation         Euro-Mediterranean  
</span><br>
<span class="quotelev2">&gt;&gt; Centre for
</span><br>
<span class="quotelev2">&gt;&gt; Climate Change
</span><br>
<span class="quotelev2">&gt;&gt;  University of Salento, Lecce, Italy            SPACI Consortium
</span><br>
<span class="quotelev2">&gt;&gt;  Via per Monteroni                                        E-mail
</span><br>
<span class="quotelev2">&gt;&gt; massimo.cafaro_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;  73100 Lecce, Italy
</span><br>
<span class="quotelev2">&gt;&gt;             cafaro_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;  Voice  +39 0832 297371
</span><br>
<span class="quotelev2">&gt;&gt;             cafaro_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;  Fax +39 0832 298173
</span><br>
<span class="quotelev2">&gt;&gt;  Web     <a href="http://sara.unisalento.it/~cafaro">http://sara.unisalento.it/~cafaro</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; *******************************************************************************************************
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="8673.php">Gabriele Fatigati: "Re: [OMPI users] Generic Type"</a>
<li><strong>Previous message:</strong> <a href="8671.php">Gabriele Fatigati: "Re: [OMPI users] Generic Type"</a>
<li><strong>In reply to:</strong> <a href="8671.php">Gabriele Fatigati: "Re: [OMPI users] Generic Type"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8673.php">Gabriele Fatigati: "Re: [OMPI users] Generic Type"</a>
<li><strong>Reply:</strong> <a href="8673.php">Gabriele Fatigati: "Re: [OMPI users] Generic Type"</a>
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
