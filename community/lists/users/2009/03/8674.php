<?
$subject_val = "Re: [OMPI users] Generic Type";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 31 08:16:41 2009" -->
<!-- isoreceived="20090331121641" -->
<!-- sent="Tue, 31 Mar 2009 14:16:26 +0200" -->
<!-- isosent="20090331121626" -->
<!-- name="Massimo Cafaro" -->
<!-- email="massimo.cafaro_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Generic Type" -->
<!-- id="C8107695-A37C-4AE0-9E24-C7AAB94A087F_at_unisalento.it" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="3a37617f0903310500o73836a8icc0d1287b17847be_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2009-03-31 08:16:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8675.php">PN: "[OMPI users] Strange behaviour of SGE+OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="8673.php">Gabriele Fatigati: "Re: [OMPI users] Generic Type"</a>
<li><strong>In reply to:</strong> <a href="8673.php">Gabriele Fatigati: "Re: [OMPI users] Generic Type"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>unfortunatelly it's up to us to provide the starting address of the  
<br>
buffer and the number of elements to be received multiplied by the  
<br>
datatype extent.
<br>
This kind of things is dealt automatically in the internals of  
<br>
collective communication operations.
<br>
<p>Massimo
<br>
<p>On 31/mar/09, at 14:00, Gabriele Fatigati wrote:
<br>
<p><span class="quotelev1">&gt; Thanks Massimo,
</span><br>
<span class="quotelev1">&gt; now it works well.
</span><br>
<span class="quotelev1">&gt; I've erroneous think that Irecv did this automatically using  
</span><br>
<span class="quotelev1">&gt; recvtype fields.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2009/3/31 Massimo Cafaro &lt;massimo.cafaro_at_[hidden]&gt;:
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; let me see that it is still not clear to me why you want to  
</span><br>
<span class="quotelev2">&gt;&gt; reimplement the
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Gather supplied by an MPI implementation with your own version.
</span><br>
<span class="quotelev2">&gt;&gt; You will never be able to attain the same level of performance  
</span><br>
<span class="quotelev2">&gt;&gt; using point
</span><br>
<span class="quotelev2">&gt;&gt; to point communication, since MPI_Gather uses internally a binomial  
</span><br>
<span class="quotelev2">&gt;&gt; tree or
</span><br>
<span class="quotelev2">&gt;&gt; even better advanced data structures to improve its overall  
</span><br>
<span class="quotelev2">&gt;&gt; performances.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; From your code snippet, I guess the problem arises because you are  
</span><br>
<span class="quotelev2">&gt;&gt; not
</span><br>
<span class="quotelev2">&gt;&gt; considering the extent of the datatype you are trying to receive:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; using int MPI_Type_get_extent(MPI_Datatype datatype, MPI_Aint *lb,  
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Aint
</span><br>
<span class="quotelev2">&gt;&gt; *extent );
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Aint lower_bound, extent;
</span><br>
<span class="quotelev2">&gt;&gt; int rc;
</span><br>
<span class="quotelev2">&gt;&gt; rc = MPI_Type_get_extent(recvtype, &amp;lower_bound, &amp;extent);
</span><br>
<span class="quotelev2">&gt;&gt; if(rc == MPI_SUCCESS)
</span><br>
<span class="quotelev2">&gt;&gt;        MPI_Irecv(buff + (i-1) * recvcount *  extent, recvcount,  
</span><br>
<span class="quotelev2">&gt;&gt; recvtype, i,
</span><br>
<span class="quotelev2">&gt;&gt; 0, comm, &amp;array_request[i-1]);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; or if you prefer non pointer notation
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Irecv(buff[(i-1) * recvcount *  extent], recvcount, recvtype,  
</span><br>
<span class="quotelev2">&gt;&gt; i, 0,
</span><br>
<span class="quotelev2">&gt;&gt; comm, &amp;array_request[i-1]);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In practice, the extent of a datatype should be equal to the size as
</span><br>
<span class="quotelev2">&gt;&gt; reported by sizeof(datatype).
</span><br>
<span class="quotelev2">&gt;&gt; Using MPI_Type_get_extent() is the portable way of doing this using  
</span><br>
<span class="quotelev2">&gt;&gt; MPI.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt; Massimo
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 31/mar/09, at 12:16, Gabriele Fatigati wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Mm,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OpenMPI functions like MPI_Irecv, does pointer arithmetics over recv
</span><br>
<span class="quotelev3">&gt;&gt;&gt; buffer using type info in ompi_datatype_t i suppose. I'm trying to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; write a wrapper to MPI_Gather using Irecv functions:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; int MPI_FT_Gather(void*sendbuf, int sendcount, MPI_Datatype  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sendtype,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; void*recvbuff,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                         int recvcount, MPI_Datatype recvtype,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                         int root, MPI_Comm comm){
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; for( nprocs..){
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Irecv(&amp;recvbuff[(i-1)], recvcount, recvtype, i, 0, comm,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &amp;array_request[i-1]);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; where every proc sends 1 double. It doesn't work,( received values  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; are
</span><br>
<span class="quotelev3">&gt;&gt;&gt; wrong) because MPI_Irecv are trying to do pointer arithmetic with  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; void
</span><br>
<span class="quotelev3">&gt;&gt;&gt; values. In fact, if i write:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; double*buff  = &amp;recvbuff[0];
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; for( nprocs..){
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Irecv(&amp;buff[(i-1)], recvcount, recvtype, i, 0, comm,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &amp;array_request[i-1]);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; it works well. Do you have an idea to use a portalbe way to do  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; this?(
</span><br>
<span class="quotelev3">&gt;&gt;&gt; if is it possible)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2009/3/30 Massimo Cafaro &lt;massimo.cafaro_at_[hidden]&gt;:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Dear Gabriele,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; to the best of my knowledge the MPI standard does not provide  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; such a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; function.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The reason is that when calling  MPI_Gather, the standard requires
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; matching
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; type signatures (i.e., the sendcount and sendtype argument on  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; each of the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; non root processes must match the recvcount and recvtype  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; arguments at the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; root process). This still allows having disting type maps (type and
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; displacement pairs) at a sender process and at the root process,  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; but it
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; is a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; feature seldom used in practice, at least in my experience.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Therefore, you must know in advance the datatype you are  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; receiving even
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; in
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the case this datatype is a derived datatype.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; If not, the likely outcome is that the receive buffer at the root  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; process
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; gets overwritten, which causes MPI_Gather to return an error.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Due to the signature of the MPI_Gather function, the only  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; possibility I
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; see
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; to achieve what you are trying to do is to use the MPI_BYTE  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; datatype, and
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; use the communicator argument to distinguish between a collective  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; gather
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; in
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; which you receive MPI_INT, MPI_DOUBLE etc. Of course I would not  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; create
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; nor
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; recommend to create new communicators for this purpose only.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Kind regards,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Massimo
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On 30/mar/09, at 17:43, Gabriele Fatigati wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Dear OpenMPI developers,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; i'm writing an MPI_Gather wrapper to collect void elements. My
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; queation is: is there a portable way to know the type of received
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; elements, like MPI_INT or MPI_DOUBLE? I've noted that i can  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; retrieve
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; this information by ompi_datatype_t-&gt; name field, but i think  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; isn't
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; portable. Is there aMPI function that does this check?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Ing. Gabriele Fatigati
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Parallel programmer
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; CINECA Systems &amp; Tecnologies Department
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Supercomputing Group
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Via Magnanelli 6/3, Casalecchio di Reno (BO) Italy
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; www.cineca.it                    Tel:   +39 051 6171722
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; g.fatigati [AT] cineca.it
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *******************************************************************************************************
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  Massimo Cafaro, Ph.D.                              Additional
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; affiliations:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  Assistant Professor                                     National
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Nanotechnology Laboratory (NNL/CNR-INFM)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  Dept. of Engineering for Innovation         Euro-Mediterranean  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Centre
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; for
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Climate Change
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  University of Salento, Lecce, Italy            SPACI Consortium
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  Via per Monteroni                                        E-mail
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; massimo.cafaro_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  73100 Lecce, Italy
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;            cafaro_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  Voice  +39 0832 297371
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;            cafaro_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  Fax +39 0832 298173
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  Web     <a href="http://sara.unisalento.it/~cafaro">http://sara.unisalento.it/~cafaro</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *******************************************************************************************************
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<span class="quotelev3">&gt;&gt;&gt;
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
<li><strong>Next message:</strong> <a href="8675.php">PN: "[OMPI users] Strange behaviour of SGE+OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="8673.php">Gabriele Fatigati: "Re: [OMPI users] Generic Type"</a>
<li><strong>In reply to:</strong> <a href="8673.php">Gabriele Fatigati: "Re: [OMPI users] Generic Type"</a>
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
