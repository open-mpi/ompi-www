<?
$subject_val = "Re: [OMPI devel] source code of collective operations of communication of open mpi";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan  6 09:21:25 2011" -->
<!-- isoreceived="20110106142125" -->
<!-- sent="Thu, 6 Jan 2011 09:21:19 -0500" -->
<!-- isosent="20110106142119" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] source code of collective operations of communication of open mpi" -->
<!-- id="55C65C62-4F54-4C30-BAF8-E990E69F278D_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="966312.61716.qm_at_web114010.mail.gq1.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] source code of collective operations of communication of open mpi<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-06 09:21:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8837.php">Pascal Deveze: "[OMPI devel] Problem with attributes attached to communicators"</a>
<li><strong>Previous message:</strong> <a href="8835.php">Zaibi Eya: "[OMPI devel] source code of collective operations of communication of open mpi"</a>
<li><strong>In reply to:</strong> <a href="8835.php">Zaibi Eya: "[OMPI devel] source code of collective operations of communication of open mpi"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
There are several modules providing collective communications. The default one in OMPI is tuned, and can be found on ompi/mca/coll/tuned. Each collective has several implementations, and there is a decision function to switch between them.
<br>
<p>&nbsp;&nbsp;george.
<br>
<p>On Jan 6, 2011, at 06:13 , Zaibi Eya wrote:
<br>
<p><span class="quotelev1">&gt; Hi every body,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am working in the simulation of the behaviour of collective operations and i must understand the code (the algorithms) of bcast.c,scatter.c....   But unfortunately, i didn't find the algorithms implementation of braodcast, scatter, gather  et the architecture of the framework is not easy.. So where can i find the algorithms' implementation .
</span><br>
<span class="quotelev1">&gt; I will be very gratefull for your help .
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8837.php">Pascal Deveze: "[OMPI devel] Problem with attributes attached to communicators"</a>
<li><strong>Previous message:</strong> <a href="8835.php">Zaibi Eya: "[OMPI devel] source code of collective operations of communication of open mpi"</a>
<li><strong>In reply to:</strong> <a href="8835.php">Zaibi Eya: "[OMPI devel] source code of collective operations of communication of open mpi"</a>
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
