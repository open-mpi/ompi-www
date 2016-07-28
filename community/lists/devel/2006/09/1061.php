<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Sep 11 19:42:52 2006" -->
<!-- isoreceived="20060911234252" -->
<!-- sent="Mon, 11 Sep 2006 19:42:46 -0400" -->
<!-- isosent="20060911234246" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] fatal bug in coll_tuned_bcast.c" -->
<!-- id="C12B6CB6.2642F%jsquyres_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="Pine.LNX.4.62.0609111928270.32201_at_reliant.cs.utk.edu" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-09-11 19:42:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1062.php">Christian Siebert: "[OMPI devel] portability problem in ompi_info"</a>
<li><strong>Previous message:</strong> <a href="1060.php">Graham E Fagg: "Re: [OMPI devel] fatal bug in coll_tuned_bcast.c"</a>
<li><strong>In reply to:</strong> <a href="1060.php">Graham E Fagg: "Re: [OMPI devel] fatal bug in coll_tuned_bcast.c"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I just filed it:
<br>
<p><a href="http://svn.open-mpi.org/trac/ompi/ticket/363">http://svn.open-mpi.org/trac/ompi/ticket/363</a>
<br>
<p><p>On 9/11/06 7:31 PM, &quot;Graham E Fagg&quot; &lt;fagg_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi Christian, do you have the ticket #, I just looked and didn't see it
</span><br>
<span class="quotelev1">&gt; listed...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; G.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Tue, 12 Sep 2006, Christian Siebert wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I stumbled across a serious bug in the tuned component of Open MPI,
</span><br>
<span class="quotelev2">&gt;&gt; which crashes for example the well-known HPL benchmark in conjunction
</span><br>
<span class="quotelev2">&gt;&gt; with the &quot;native MPI_Bcast() patch&quot; [1].
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The problem is within the function ompi_coll_tuned_bcast_intra_chain(),
</span><br>
<span class="quotelev2">&gt;&gt; which does mainly the following:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;  ompi_ddt_type_size( datatype, &amp;typelng );
</span><br>
<span class="quotelev2">&gt;&gt;  segcount = segsize / typelng;
</span><br>
<span class="quotelev2">&gt;&gt;  num_segments = count / segcount;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Whenever you have a constructed type with a size larger than 'segsize'
</span><br>
<span class="quotelev2">&gt;&gt; (16384), you'll get a 'seqcount' of zero and finally a division by zero.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Happy fixing!
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;  Christian
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; [1] <a href="http://www-user.tu-chemnitz.de/~chsi/hpl/">http://www-user.tu-chemnitz.de/~chsi/hpl/</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Graham.
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Dr Graham E. Fagg       | Distributed, Parallel and Meta-Computing
</span><br>
<span class="quotelev1">&gt; Innovative Computing Lab. PVM3.4, HARNESS, FT-MPI, SNIPE &amp; Open MPI
</span><br>
<span class="quotelev1">&gt; Computer Science Dept   | Suite 203, 1122 Volunteer Blvd,
</span><br>
<span class="quotelev1">&gt; University of Tennessee | Knoxville, Tennessee, USA. TN 37996-3450
</span><br>
<span class="quotelev1">&gt; Email: fagg_at_[hidden]  | Phone:+1(865)974-5790 | Fax:+1(865)974-8296
</span><br>
<span class="quotelev1">&gt; Broken complex systems are always derived from working simple systems
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Server Virtualization Business Unit
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1062.php">Christian Siebert: "[OMPI devel] portability problem in ompi_info"</a>
<li><strong>Previous message:</strong> <a href="1060.php">Graham E Fagg: "Re: [OMPI devel] fatal bug in coll_tuned_bcast.c"</a>
<li><strong>In reply to:</strong> <a href="1060.php">Graham E Fagg: "Re: [OMPI devel] fatal bug in coll_tuned_bcast.c"</a>
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
