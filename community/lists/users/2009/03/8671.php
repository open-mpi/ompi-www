<?
$subject_val = "Re: [OMPI users] Generic Type";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 31 06:16:28 2009" -->
<!-- isoreceived="20090331101628" -->
<!-- sent="Tue, 31 Mar 2009 12:16:21 +0200" -->
<!-- isosent="20090331101621" -->
<!-- name="Gabriele Fatigati" -->
<!-- email="g.fatigati_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Generic Type" -->
<!-- id="3a37617f0903310316y4469887awc51c7b4c79a85060_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="2B0E51BD-0FE0-46FC-BBDC-C187E923204C_at_unisalento.it" -->
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
<strong>Date:</strong> 2009-03-31 06:16:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8672.php">Massimo Cafaro: "Re: [OMPI users] Generic Type"</a>
<li><strong>Previous message:</strong> <a href="8670.php">Alessandro Surace: "Re: [OMPI users] [OMPI devel] mpirun: symbol lookup error:/usr/local/lib/openmpi/mca_plm_lsf.so: undefined symbol: ls b_init"</a>
<li><strong>In reply to:</strong> <a href="8641.php">Massimo Cafaro: "Re: [OMPI users] Generic Type"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8672.php">Massimo Cafaro: "Re: [OMPI users] Generic Type"</a>
<li><strong>Reply:</strong> <a href="8672.php">Massimo Cafaro: "Re: [OMPI users] Generic Type"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Mm,
<br>
OpenMPI functions like MPI_Irecv, does pointer arithmetics over recv
<br>
buffer using type info in ompi_datatype_t i suppose. I'm trying to
<br>
write a wrapper to MPI_Gather using Irecv functions:
<br>
<p>int MPI_FT_Gather(void*sendbuf, int sendcount, MPI_Datatype sendtype,
<br>
void*recvbuff,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int recvcount, MPI_Datatype recvtype,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int root, MPI_Comm comm){
<br>
<p>...
<br>
<p>for( nprocs..){
<br>
<p>MPI_Irecv(&amp;recvbuff[(i-1)], recvcount, recvtype, i, 0, comm,
<br>
&amp;array_request[i-1]);
<br>
<p>}
<br>
<p><p>}
<br>
<p>where every proc sends 1 double. It doesn't work,( received values are
<br>
wrong) because MPI_Irecv are trying to do pointer arithmetic with void
<br>
values. In fact, if i write:
<br>
<p>&nbsp;double*buff  = &amp;recvbuff[0];
<br>
<p>for( nprocs..){
<br>
<p>MPI_Irecv(&amp;buff[(i-1)], recvcount, recvtype, i, 0, comm, &amp;array_request[i-1]);
<br>
<p>}
<br>
<p>it works well. Do you have an idea to use a portalbe way to do this?(
<br>
if is it possible)
<br>
<p><p><p>2009/3/30 Massimo Cafaro &lt;massimo.cafaro_at_[hidden]&gt;:
<br>
<span class="quotelev1">&gt; Dear Gabriele,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; to the best of my knowledge the MPI standard does not provide such a
</span><br>
<span class="quotelev1">&gt; function.
</span><br>
<span class="quotelev1">&gt; The reason is that when calling &#160;MPI_Gather, the standard requires matching
</span><br>
<span class="quotelev1">&gt; type signatures (i.e., the sendcount and sendtype argument on each of the
</span><br>
<span class="quotelev1">&gt; non root processes must match the recvcount and recvtype arguments at the
</span><br>
<span class="quotelev1">&gt; root process). This still allows having disting type maps (type and
</span><br>
<span class="quotelev1">&gt; displacement pairs) at a sender process and at the root process, but it is a
</span><br>
<span class="quotelev1">&gt; feature seldom used in practice, at least in my experience.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Therefore, you must know in advance the datatype you are receiving even in
</span><br>
<span class="quotelev1">&gt; the case this datatype is a derived datatype.
</span><br>
<span class="quotelev1">&gt; If not, the likely outcome is that the receive buffer at the root process
</span><br>
<span class="quotelev1">&gt; gets overwritten, which causes MPI_Gather to return an error.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Due to the signature of the MPI_Gather function, the only possibility I see
</span><br>
<span class="quotelev1">&gt; to achieve what you are trying to do is to use the MPI_BYTE datatype, and
</span><br>
<span class="quotelev1">&gt; use the communicator argument to distinguish between a collective gather in
</span><br>
<span class="quotelev1">&gt; which you receive MPI_INT, MPI_DOUBLE etc. Of course I would not create nor
</span><br>
<span class="quotelev1">&gt; recommend to create new communicators for this purpose only.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Kind regards,
</span><br>
<span class="quotelev1">&gt; Massimo
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 30/mar/09, at 17:43, Gabriele Fatigati wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Dear OpenMPI developers,
</span><br>
<span class="quotelev2">&gt;&gt; i'm writing an MPI_Gather wrapper to collect void elements. My
</span><br>
<span class="quotelev2">&gt;&gt; queation is: is there a portable way to know the type of received
</span><br>
<span class="quotelev2">&gt;&gt; elements, like MPI_INT or MPI_DOUBLE? I've noted that i can retrieve
</span><br>
<span class="quotelev2">&gt;&gt; this information by ompi_datatype_t-&gt; name field, but i think isn't
</span><br>
<span class="quotelev2">&gt;&gt; portable. Is there aMPI function that does this check?
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
<li><strong>Next message:</strong> <a href="8672.php">Massimo Cafaro: "Re: [OMPI users] Generic Type"</a>
<li><strong>Previous message:</strong> <a href="8670.php">Alessandro Surace: "Re: [OMPI users] [OMPI devel] mpirun: symbol lookup error:/usr/local/lib/openmpi/mca_plm_lsf.so: undefined symbol: ls b_init"</a>
<li><strong>In reply to:</strong> <a href="8641.php">Massimo Cafaro: "Re: [OMPI users] Generic Type"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8672.php">Massimo Cafaro: "Re: [OMPI users] Generic Type"</a>
<li><strong>Reply:</strong> <a href="8672.php">Massimo Cafaro: "Re: [OMPI users] Generic Type"</a>
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
