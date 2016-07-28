<?
$subject_val = "Re: [OMPI devel] [OMPI users] simple mpi hello world segfaults when coll ml not disabled";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 29 13:59:02 2015" -->
<!-- isoreceived="20150629175902" -->
<!-- sent="Mon, 29 Jun 2015 17:58:58 +0000" -->
<!-- isosent="20150629175858" -->
<!-- name="Devendar Bureddy" -->
<!-- email="devendar_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI users] simple mpi hello world segfaults when coll ml not disabled" -->
<!-- id="DB5PR05MB13182EEA7481452E544BDB3EAEAA0_at_DB5PR05MB1318.eurprd05.prod.outlook.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAMD57ocGwdAvVi7kpMvaNWCspOfNhxY7Erz0PqBmYxPGPW6=Ww_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI users] simple mpi hello world segfaults when coll ml not disabled<br>
<strong>From:</strong> Devendar Bureddy (<em>devendar_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-06-29 13:58:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17563.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] OMPI_PROC_BIND value is invalid errors"</a>
<li><strong>Previous message:</strong> <a href="17561.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] MPI_Buffer_detach fortran binding"</a>
<li><strong>In reply to:</strong> <a href="17548.php">Ralph Castain: "Re: [OMPI devel] [OMPI users] simple mpi hello world segfaults when coll ml not disabled"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17549.php">Gilles Gouaillardet: "Re: [OMPI devel] [OMPI users] simple mpi hello world segfaults when coll ml not disabled"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Fixed this issue in HCOLL by renaming conflicting symbols.  Repro case is working fine after this.
<br>

<br>
also explored &#226;&#128;&#147;Bsymbolic linker option, but it seems not safe to do.
<br>

<br>
-Devendar
<br>

<br>
From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of Ralph Castain
<br>
Sent: Thursday, June 25, 2015 9:31 PM
<br>
To: Open MPI Developers
<br>
Subject: Re: [OMPI devel] [OMPI users] simple mpi hello world segfaults when coll ml not disabled
<br>

<br>
Crud - thanks Paul! Mellanox is working on a fix (renaming the symbols in their proprietary library so they don't conflict). If they can release that soon, I'm hoping to avoid having to release a quick 1.8.7 to fix the problem from inside OMPI (i.e., removing one of the conflicting plugins).
<br>

<br>

<br>

<br>
On Thu, Jun 25, 2015 at 8:31 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&lt;mailto:phhargrove_at_[hidden]&gt;&gt; wrote:
<br>

<br>

<br>
On Thu, Jun 25, 2015 at 5:05 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&lt;mailto:phhargrove_at_[hidden]&gt;&gt; wrote:
<br>

<br>
On Thu, Jun 25, 2015 at 4:59 PM, Gilles Gouaillardet &lt;gilles_at_[hidden]&lt;mailto:gilles_at_[hidden]&gt;&gt; wrote:
<br>
In this case, mca_coll_hcoll module is linked with the proprietary libhcoll.so.
<br>
the ml symbols are defined in both mca_coll_ml.so and libhcoll.so
<br>
i am not sure (i blame my poor understanding of linkers) this is an error if
<br>
Open MPI is configure'd with --disable-dlopen
<br>

<br>

<br>
I will run the test now on a system w/ Mellanox's libhcoll and report what I find.
<br>

<br>

<br>
Gilles,
<br>

<br>
I had originally missed the fact that the conflicts were between Open MPI code and &quot;vendor code&quot;.
<br>
Otherwise I don't think I'd have put forward the --disable-dlopen suggestion.
<br>
However, as promised I tried the experiment.
<br>

<br>
I find that having both coll:ml and coll:hcoll in a --disable-dlopen build this does NOT result in failures linking libmpi nor in linking an MPI application.  So, having Jenkins (for instance) testing in this way would not have exposed this problem.
<br>

<br>
To sure I was testing what I thought I was:
<br>

<br>
I did confirm that I get a SEGV running hello_c (from the examples subdir) unless I use &quot;-mca coll ^hcoll&quot;.
<br>

<br>
I tried using &quot;-mca coll ^ml&quot; but still get a SEGV that appears to show coll:hcoll invoking functions in coll_ml_module.c, just as I do with no mca options at all.
<br>

<br>
Note I did this all with the released 1.8.6 tarball.
<br>

<br>
-Paul
<br>

<br>

<br>
--
<br>
Paul H. Hargrove                          PHHargrove_at_[hidden]&lt;mailto:PHHargrove_at_[hidden]&gt;
<br>
Computer Languages &amp; Systems Software (CLaSS) Group
<br>
Computer Science Department               Tel: +1-510-495-2352&lt;tel:%2B1-510-495-2352&gt;
<br>
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900&lt;tel:%2B1-510-486-6900&gt;
<br>

<br>
_______________________________________________
<br>
devel mailing list
<br>
devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
<br>
Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/06/17542.php">http://www.open-mpi.org/community/lists/devel/2015/06/17542.php</a>
<br>

<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17562/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17563.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] OMPI_PROC_BIND value is invalid errors"</a>
<li><strong>Previous message:</strong> <a href="17561.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] MPI_Buffer_detach fortran binding"</a>
<li><strong>In reply to:</strong> <a href="17548.php">Ralph Castain: "Re: [OMPI devel] [OMPI users] simple mpi hello world segfaults when coll ml not disabled"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17549.php">Gilles Gouaillardet: "Re: [OMPI devel] [OMPI users] simple mpi hello world segfaults when coll ml not disabled"</a>
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
