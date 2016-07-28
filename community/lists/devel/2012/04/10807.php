<?
$subject_val = "Re: [OMPI devel] algorithm selection in open mpi";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr  3 09:01:24 2012" -->
<!-- isoreceived="20120403130124" -->
<!-- sent="Tue, 3 Apr 2012 17:01:15 +0400" -->
<!-- isosent="20120403130115" -->
<!-- name="Pavel Mezentsev" -->
<!-- email="pavel.mezentsev_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] algorithm selection in open mpi" -->
<!-- id="CAFamD4V7ucNNfkAKxg-cmWpv0Eo_kOQoi8a9h6rpmu0EA81VYw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="B4FA9465-D28F-44A2-8EC2-CBE3E6D7247D_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] algorithm selection in open mpi<br>
<strong>From:</strong> Pavel Mezentsev (<em>pavel.mezentsev_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-03 09:01:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10808.php">George Bosilca: "Re: [OMPI devel] algorithm selection in open mpi"</a>
<li><strong>Previous message:</strong> <a href="10806.php">George Bosilca: "Re: [OMPI devel] algorithm selection in open mpi"</a>
<li><strong>In reply to:</strong> <a href="10806.php">George Bosilca: "Re: [OMPI devel] algorithm selection in open mpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10808.php">George Bosilca: "Re: [OMPI devel] algorithm selection in open mpi"</a>
<li><strong>Reply:</strong> <a href="10808.php">George Bosilca: "Re: [OMPI devel] algorithm selection in open mpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Is there a way to specify collective depending on the size of the message
<br>
and number of processes?
<br>
<p>Regards,
<br>
Pavel Mezentsev
<br>
<p>2012/4/3 George Bosilca &lt;bosilca_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt; Roswan,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There a re simpler solutions to achieve this. We have a built-in mechanism
</span><br>
<span class="quotelev1">&gt; to select a specific collective implementation. Here is what you have to
</span><br>
<span class="quotelev1">&gt; add in your .openmpi/mca-params.conf (or as MCA argument on the command
</span><br>
<span class="quotelev1">&gt; line):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; coll_tuned_use_dynamic_rules = 1
</span><br>
<span class="quotelev1">&gt; coll_tuned_bcast_algorithm = 6
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The first one activate the dynamic selection of collective algorithms,
</span><br>
<span class="quotelev1">&gt; while the second one force all broadcast to be of the type 6 (binomial
</span><br>
<span class="quotelev1">&gt; tree). Btw, once you set the first one, do a quick &quot;ompi_info --param coll
</span><br>
<span class="quotelev1">&gt; tuned&quot; to see the list of all possible options for the collective algorithm
</span><br>
<span class="quotelev1">&gt; selection.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 2, 2012, at 23:10 , roswan ismail wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi all..
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am Roswan Ismail from Malaysia. I am focusing on MPI communication
</span><br>
<span class="quotelev1">&gt; performance on quad-core cluster at my university. I used Open MPI-1.4.3
</span><br>
<span class="quotelev1">&gt; and measurements were done using scampi benchmark.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As I know, open MPI used multiple algorithms to broadcast data (MPI_BCAST)
</span><br>
<span class="quotelev1">&gt; such as binomial, pipeline, binary tree, basic linear and split binary
</span><br>
<span class="quotelev1">&gt; tree. All these algorithms will be used based on message size and
</span><br>
<span class="quotelev1">&gt; communicator size. For example, binomial is used when message size to be
</span><br>
<span class="quotelev1">&gt; broadcasted is small while pipeline used for broadcasting a large message.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What I want to do now is, to use fixed algorithm i.e binomial for all
</span><br>
<span class="quotelev1">&gt; message size. I want to see and compare the results with the default
</span><br>
<span class="quotelev1">&gt; results. So, I was modified coll_tuned_decision_fixed.c which is located in
</span><br>
<span class="quotelev1">&gt; open mpi-1.4.3/ompi/mca/coll/tuned by returning binomial algorithm for all
</span><br>
<span class="quotelev1">&gt; condition. Then I recompile the files but the problem is, the results
</span><br>
<span class="quotelev1">&gt; obtained is same as default. It seems I do not do any changes to the codes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So could you guys tell me the right way to do that.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Many thanks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; **
</span><br>
<span class="quotelev1">&gt; *Roswan Binti Ismail,
</span><br>
<span class="quotelev1">&gt; FTMK,
</span><br>
<span class="quotelev1">&gt; Univ. Pend. Sultan Idris,
</span><br>
<span class="quotelev1">&gt; Tg Malim, Perak.
</span><br>
<span class="quotelev1">&gt; Pej: 05-4505173
</span><br>
<span class="quotelev1">&gt; H/P: 0123588047
</span><br>
<span class="quotelev1">&gt; iewanis_at_[hidden] &lt;iewanis1402_at_hotmail&gt;
</span><br>
<span class="quotelev1">&gt; roswan_at_[hidden]
</span><br>
<span class="quotelev1">&gt; ***
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10807/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10808.php">George Bosilca: "Re: [OMPI devel] algorithm selection in open mpi"</a>
<li><strong>Previous message:</strong> <a href="10806.php">George Bosilca: "Re: [OMPI devel] algorithm selection in open mpi"</a>
<li><strong>In reply to:</strong> <a href="10806.php">George Bosilca: "Re: [OMPI devel] algorithm selection in open mpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10808.php">George Bosilca: "Re: [OMPI devel] algorithm selection in open mpi"</a>
<li><strong>Reply:</strong> <a href="10808.php">George Bosilca: "Re: [OMPI devel] algorithm selection in open mpi"</a>
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
