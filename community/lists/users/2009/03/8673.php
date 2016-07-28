<?
$subject_val = "Re: [OMPI users] Generic Type";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 31 08:01:00 2009" -->
<!-- isoreceived="20090331120100" -->
<!-- sent="Tue, 31 Mar 2009 14:00:54 +0200" -->
<!-- isosent="20090331120054" -->
<!-- name="Gabriele Fatigati" -->
<!-- email="g.fatigati_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Generic Type" -->
<!-- id="3a37617f0903310500o73836a8icc0d1287b17847be_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="0E2B7DE5-3737-49F2-9BE3-AE403A55ACCF_at_unisalento.it" -->
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
<strong>From:</strong> Gabriele Fatigati (<em>g.fatigati_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-31 08:00:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8674.php">Massimo Cafaro: "Re: [OMPI users] Generic Type"</a>
<li><strong>Previous message:</strong> <a href="8672.php">Massimo Cafaro: "Re: [OMPI users] Generic Type"</a>
<li><strong>In reply to:</strong> <a href="8672.php">Massimo Cafaro: "Re: [OMPI users] Generic Type"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8674.php">Massimo Cafaro: "Re: [OMPI users] Generic Type"</a>
<li><strong>Reply:</strong> <a href="8674.php">Massimo Cafaro: "Re: [OMPI users] Generic Type"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Massimo,
<br>
now it works well.
<br>
I've erroneous think that Irecv did this automatically using recvtype fields.
<br>
<p><p>2009/3/31 Massimo Cafaro &lt;massimo.cafaro_at_[hidden]&gt;:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; let me see that it is still not clear to me why you want to reimplement the
</span><br>
<span class="quotelev1">&gt; MPI_Gather supplied by an MPI implementation with your own version.
</span><br>
<span class="quotelev1">&gt; You will never be able to attain the same level of performance using point
</span><br>
<span class="quotelev1">&gt; to point communication, since MPI_Gather uses internally a binomial tree or
</span><br>
<span class="quotelev1">&gt; even better advanced data structures to improve its overall performances.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; From your code snippet, I guess the problem arises because you are not
</span><br>
<span class="quotelev1">&gt; considering the extent of the datatype you are trying to receive:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; using int MPI_Type_get_extent(MPI_Datatype datatype, MPI_Aint *lb, MPI_Aint
</span><br>
<span class="quotelev1">&gt; *extent );
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPI_Aint lower_bound, extent;
</span><br>
<span class="quotelev1">&gt; int rc;
</span><br>
<span class="quotelev1">&gt; rc = MPI_Type_get_extent(recvtype, &amp;lower_bound, &amp;extent);
</span><br>
<span class="quotelev1">&gt; if(rc == MPI_SUCCESS)
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160;MPI_Irecv(buff + (i-1) * recvcount * &#160;extent, recvcount, recvtype, i,
</span><br>
<span class="quotelev1">&gt; 0, comm, &amp;array_request[i-1]);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; or if you prefer non pointer notation
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPI_Irecv(buff[(i-1) * recvcount * &#160;extent], recvcount, recvtype, i, 0,
</span><br>
<span class="quotelev1">&gt; comm, &amp;array_request[i-1]);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In practice, the extent of a datatype should be equal to the size as
</span><br>
<span class="quotelev1">&gt; reported by sizeof(datatype).
</span><br>
<span class="quotelev1">&gt; Using MPI_Type_get_extent() is the portable way of doing this using MPI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Massimo
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 31/mar/09, at 12:16, Gabriele Fatigati wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Mm,
</span><br>
<span class="quotelev2">&gt;&gt; OpenMPI functions like MPI_Irecv, does pointer arithmetics over recv
</span><br>
<span class="quotelev2">&gt;&gt; buffer using type info in ompi_datatype_t i suppose. I'm trying to
</span><br>
<span class="quotelev2">&gt;&gt; write a wrapper to MPI_Gather using Irecv functions:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; int MPI_FT_Gather(void*sendbuf, int sendcount, MPI_Datatype sendtype,
</span><br>
<span class="quotelev2">&gt;&gt; void*recvbuff,
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; int recvcount, MPI_Datatype recvtype,
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; int root, MPI_Comm comm){
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; for( nprocs..){
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Irecv(&amp;recvbuff[(i-1)], recvcount, recvtype, i, 0, comm,
</span><br>
<span class="quotelev2">&gt;&gt; &amp;array_request[i-1]);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; where every proc sends 1 double. It doesn't work,( received values are
</span><br>
<span class="quotelev2">&gt;&gt; wrong) because MPI_Irecv are trying to do pointer arithmetic with void
</span><br>
<span class="quotelev2">&gt;&gt; values. In fact, if i write:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; double*buff &#160;= &amp;recvbuff[0];
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; for( nprocs..){
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Irecv(&amp;buff[(i-1)], recvcount, recvtype, i, 0, comm,
</span><br>
<span class="quotelev2">&gt;&gt; &amp;array_request[i-1]);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; it works well. Do you have an idea to use a portalbe way to do this?(
</span><br>
<span class="quotelev2">&gt;&gt; if is it possible)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2009/3/30 Massimo Cafaro &lt;massimo.cafaro_at_[hidden]&gt;:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Dear Gabriele,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to the best of my knowledge the MPI standard does not provide such a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; function.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The reason is that when calling &#160;MPI_Gather, the standard requires
</span><br>
<span class="quotelev3">&gt;&gt;&gt; matching
</span><br>
<span class="quotelev3">&gt;&gt;&gt; type signatures (i.e., the sendcount and sendtype argument on each of the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; non root processes must match the recvcount and recvtype arguments at the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; root process). This still allows having disting type maps (type and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; displacement pairs) at a sender process and at the root process, but it
</span><br>
<span class="quotelev3">&gt;&gt;&gt; is a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; feature seldom used in practice, at least in my experience.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Therefore, you must know in advance the datatype you are receiving even
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the case this datatype is a derived datatype.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If not, the likely outcome is that the receive buffer at the root process
</span><br>
<span class="quotelev3">&gt;&gt;&gt; gets overwritten, which causes MPI_Gather to return an error.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Due to the signature of the MPI_Gather function, the only possibility I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; see
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to achieve what you are trying to do is to use the MPI_BYTE datatype, and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; use the communicator argument to distinguish between a collective gather
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; which you receive MPI_INT, MPI_DOUBLE etc. Of course I would not create
</span><br>
<span class="quotelev3">&gt;&gt;&gt; nor
</span><br>
<span class="quotelev3">&gt;&gt;&gt; recommend to create new communicators for this purpose only.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Kind regards,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Massimo
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 30/mar/09, at 17:43, Gabriele Fatigati wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Dear OpenMPI developers,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; i'm writing an MPI_Gather wrapper to collect void elements. My
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; queation is: is there a portable way to know the type of received
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; elements, like MPI_INT or MPI_DOUBLE? I've noted that i can retrieve
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; this information by ompi_datatype_t-&gt; name field, but i think isn't
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; portable. Is there aMPI function that does this check?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Ing. Gabriele Fatigati
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Parallel programmer
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; CINECA Systems &amp; Tecnologies Department
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Supercomputing Group
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Via Magnanelli 6/3, Casalecchio di Reno (BO) Italy
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; www.cineca.it &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;Tel: &#160; +39 051 6171722
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; g.fatigati [AT] cineca.it
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *******************************************************************************************************
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#160;Massimo Cafaro, Ph.D. &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;Additional
</span><br>
<span class="quotelev3">&gt;&gt;&gt; affiliations:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#160;Assistant Professor &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; National
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Nanotechnology Laboratory (NNL/CNR-INFM)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#160;Dept. of Engineering for Innovation &#160; &#160; &#160; &#160; Euro-Mediterranean Centre
</span><br>
<span class="quotelev3">&gt;&gt;&gt; for
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Climate Change
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#160;University of Salento, Lecce, Italy &#160; &#160; &#160; &#160; &#160; &#160;SPACI Consortium
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#160;Via per Monteroni &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;E-mail
</span><br>
<span class="quotelev3">&gt;&gt;&gt; massimo.cafaro_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#160;73100 Lecce, Italy
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#160; &#160; &#160; &#160; &#160; &#160;cafaro_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#160;Voice &#160;+39 0832 297371
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#160; &#160; &#160; &#160; &#160; &#160;cafaro_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#160;Fax +39 0832 298173
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#160;Web &#160; &#160; <a href="http://sara.unisalento.it/~cafaro">http://sara.unisalento.it/~cafaro</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *******************************************************************************************************
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Ing. Gabriele Fatigati
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Parallel programmer
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; CINECA Systems &amp; Tecnologies Department
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Supercomputing Group
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Via Magnanelli 6/3, Casalecchio di Reno (BO) Italy
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; www.cineca.it &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;Tel: &#160; +39 051 6171722
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; g.fatigati [AT] cineca.it
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *******************************************************************************************************
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160;Massimo Cafaro, Ph.D. &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;Additional affiliations:
</span><br>
<span class="quotelev1">&gt; &#160;Assistant Professor &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; National
</span><br>
<span class="quotelev1">&gt; Nanotechnology Laboratory (NNL/CNR-INFM)
</span><br>
<span class="quotelev1">&gt; &#160;Dept. of Engineering for Innovation &#160; &#160; &#160; &#160; Euro-Mediterranean Centre for
</span><br>
<span class="quotelev1">&gt; Climate Change
</span><br>
<span class="quotelev1">&gt; &#160;University of Salento, Lecce, Italy &#160; &#160; &#160; &#160; &#160; &#160;SPACI Consortium
</span><br>
<span class="quotelev1">&gt; &#160;Via per Monteroni &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;E-mail
</span><br>
<span class="quotelev1">&gt; massimo.cafaro_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &#160;73100 Lecce, Italy
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; &#160; &#160; cafaro_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &#160;Voice &#160;+39 0832 297371
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; &#160; &#160; cafaro_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &#160;Fax +39 0832 298173
</span><br>
<span class="quotelev1">&gt; &#160;Web &#160; &#160; <a href="http://sara.unisalento.it/~cafaro">http://sara.unisalento.it/~cafaro</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *******************************************************************************************************
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Ing. Gabriele Fatigati
Parallel programmer
CINECA Systems &amp; Tecnologies Department
Supercomputing Group
Via Magnanelli 6/3, Casalecchio di Reno (BO) Italy
www.cineca.it                    Tel:   +39 051 6171722
g.fatigati [AT] cineca.it
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8674.php">Massimo Cafaro: "Re: [OMPI users] Generic Type"</a>
<li><strong>Previous message:</strong> <a href="8672.php">Massimo Cafaro: "Re: [OMPI users] Generic Type"</a>
<li><strong>In reply to:</strong> <a href="8672.php">Massimo Cafaro: "Re: [OMPI users] Generic Type"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8674.php">Massimo Cafaro: "Re: [OMPI users] Generic Type"</a>
<li><strong>Reply:</strong> <a href="8674.php">Massimo Cafaro: "Re: [OMPI users] Generic Type"</a>
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
