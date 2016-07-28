<?
$subject_val = "Re: [OMPI devel] OpenMPI 1.8 Bug Report";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 27 22:19:07 2015" -->
<!-- isoreceived="20150828021907" -->
<!-- sent="Fri, 28 Aug 2015 11:19:00 +0900" -->
<!-- isosent="20150828021900" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OpenMPI 1.8 Bug Report" -->
<!-- id="55DFC514.4090800_at_rist.or.jp" -->
<!-- charset="utf-8" -->
<!-- inreplyto="55DED88B.4030108_at_fz-juelich.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] OpenMPI 1.8 Bug Report<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-08-27 22:19:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17894.php">Mark Santcroos: "Re: [OMPI devel] bind to interface / address oob_tcp_listener.c:create_listen()"</a>
<li><strong>Previous message:</strong> <a href="17892.php">Gilles Gouaillardet: "Re: [OMPI devel] bind to interface / address oob_tcp_listener.c:create_listen()"</a>
<li><strong>In reply to:</strong> <a href="17877.php">Michael Knobloch: "[OMPI devel] OpenMPI 1.8 Bug Report"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Michael and Kawashima-san,
<br>
<p>i made PR #838 to fix this
<br>
it is currently available at <a href="https://github.com/open-mpi/ompi/pull/838">https://github.com/open-mpi/ompi/pull/838</a>
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 8/27/2015 6:29 PM, Michael Knobloch wrote:
<br>
<span class="quotelev1">&gt; Dear OpenMPI developers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I noticed a bug in the definition of the 3 MPI-3 RMA functions
</span><br>
<span class="quotelev1">&gt; MPI_Compare_and_swap, MPI_Fetch_and_op and MPI_Raccumulate.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; According to the MPI standard, the origin_addr and compare_addr
</span><br>
<span class="quotelev1">&gt; parameters of these functions have a const attribute, which is missing
</span><br>
<span class="quotelev1">&gt; in OpenMPI's mpi.h (OpenMPI 1.8.x and 1.10.0).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Michael
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Michael Knobloch
</span><br>
<span class="quotelev1">&gt; Institute for Advanced Simulation (IAS)
</span><br>
<span class="quotelev1">&gt; J&#195;&#188;lich Supercomputing Centre (JSC)
</span><br>
<span class="quotelev1">&gt; Telefon: +49 2461 61-3546
</span><br>
<span class="quotelev1">&gt; Telefax: +49 2461 61-6656
</span><br>
<span class="quotelev1">&gt; E-Mail: m.knobloch_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Internet: <a href="http://www.fz-juelich.de/jsc">http://www.fz-juelich.de/jsc</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------------------------------ 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------------------------------ 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Forschungszentrum Juelich GmbH
</span><br>
<span class="quotelev1">&gt; 52425 Juelich
</span><br>
<span class="quotelev1">&gt; Sitz der Gesellschaft: Juelich
</span><br>
<span class="quotelev1">&gt; Eingetragen im Handelsregister des Amtsgerichts Dueren Nr. HR B 3498
</span><br>
<span class="quotelev1">&gt; Vorsitzender des Aufsichtsrats: MinDir Dr. Karl Eugen Huthmacher
</span><br>
<span class="quotelev1">&gt; Geschaeftsfuehrung: Prof. Dr.-Ing. Wolfgang Marquardt (Vorsitzender),
</span><br>
<span class="quotelev1">&gt; Karsten Beneke (stellv. Vorsitzender), Prof. Dr.-Ing. Harald Bolt,
</span><br>
<span class="quotelev1">&gt; Prof. Dr. Sebastian M. Schmidt
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------------------------------ 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------------------------------ 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/08/17877.php">http://www.open-mpi.org/community/lists/devel/2015/08/17877.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17894.php">Mark Santcroos: "Re: [OMPI devel] bind to interface / address oob_tcp_listener.c:create_listen()"</a>
<li><strong>Previous message:</strong> <a href="17892.php">Gilles Gouaillardet: "Re: [OMPI devel] bind to interface / address oob_tcp_listener.c:create_listen()"</a>
<li><strong>In reply to:</strong> <a href="17877.php">Michael Knobloch: "[OMPI devel] OpenMPI 1.8 Bug Report"</a>
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
