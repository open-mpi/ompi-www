<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Sep 11 19:25:43 2006" -->
<!-- isoreceived="20060911232543" -->
<!-- sent="Mon, 11 Sep 2006 19:31:10 -0400 (EDT)" -->
<!-- isosent="20060911233110" -->
<!-- name="Graham E Fagg" -->
<!-- email="fagg_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] fatal bug in coll_tuned_bcast.c" -->
<!-- id="Pine.LNX.4.62.0609111928270.32201_at_reliant.cs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20060912001501.of6aki3gysok0gwc_at_mail.tu-chemnitz.de" -->
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
<strong>From:</strong> Graham E Fagg (<em>fagg_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-09-11 19:31:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1061.php">Jeff Squyres: "Re: [OMPI devel] fatal bug in coll_tuned_bcast.c"</a>
<li><strong>Previous message:</strong> <a href="1059.php">Christian Siebert: "[OMPI devel] fatal bug in coll_tuned_bcast.c"</a>
<li><strong>In reply to:</strong> <a href="1059.php">Christian Siebert: "[OMPI devel] fatal bug in coll_tuned_bcast.c"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1061.php">Jeff Squyres: "Re: [OMPI devel] fatal bug in coll_tuned_bcast.c"</a>
<li><strong>Reply:</strong> <a href="1061.php">Jeff Squyres: "Re: [OMPI devel] fatal bug in coll_tuned_bcast.c"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Christian, do you have the ticket #, I just looked and didn't see it 
<br>
listed...
<br>
<p>G.
<br>
<p>On Tue, 12 Sep 2006, Christian Siebert wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I stumbled across a serious bug in the tuned component of Open MPI,
</span><br>
<span class="quotelev1">&gt; which crashes for example the well-known HPL benchmark in conjunction
</span><br>
<span class="quotelev1">&gt; with the &quot;native MPI_Bcast() patch&quot; [1].
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The problem is within the function ompi_coll_tuned_bcast_intra_chain(),
</span><br>
<span class="quotelev1">&gt; which does mainly the following:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  ompi_ddt_type_size( datatype, &amp;typelng );
</span><br>
<span class="quotelev1">&gt;  segcount = segsize / typelng;
</span><br>
<span class="quotelev1">&gt;  num_segments = count / segcount;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Whenever you have a constructed type with a size larger than 'segsize'
</span><br>
<span class="quotelev1">&gt; (16384), you'll get a 'seqcount' of zero and finally a division by zero.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Happy fixing!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Christian
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [1] <a href="http://www-user.tu-chemnitz.de/~chsi/hpl/">http://www-user.tu-chemnitz.de/~chsi/hpl/</a>
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
<p><p>Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Graham.
<br>
----------------------------------------------------------------------
<br>
Dr Graham E. Fagg       | Distributed, Parallel and Meta-Computing
<br>
Innovative Computing Lab. PVM3.4, HARNESS, FT-MPI, SNIPE &amp; Open MPI
<br>
Computer Science Dept   | Suite 203, 1122 Volunteer Blvd,
<br>
University of Tennessee | Knoxville, Tennessee, USA. TN 37996-3450
<br>
Email: fagg_at_[hidden]  | Phone:+1(865)974-5790 | Fax:+1(865)974-8296
<br>
Broken complex systems are always derived from working simple systems
<br>
----------------------------------------------------------------------
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1061.php">Jeff Squyres: "Re: [OMPI devel] fatal bug in coll_tuned_bcast.c"</a>
<li><strong>Previous message:</strong> <a href="1059.php">Christian Siebert: "[OMPI devel] fatal bug in coll_tuned_bcast.c"</a>
<li><strong>In reply to:</strong> <a href="1059.php">Christian Siebert: "[OMPI devel] fatal bug in coll_tuned_bcast.c"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1061.php">Jeff Squyres: "Re: [OMPI devel] fatal bug in coll_tuned_bcast.c"</a>
<li><strong>Reply:</strong> <a href="1061.php">Jeff Squyres: "Re: [OMPI devel] fatal bug in coll_tuned_bcast.c"</a>
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
