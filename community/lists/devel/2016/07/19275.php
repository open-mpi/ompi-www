<?
$subject_val = "Re: [OMPI devel] 2.0.0rc4 Crash in MPI_File_write_all_end";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 25 13:53:17 2016" -->
<!-- isoreceived="20160725175317" -->
<!-- sent="Mon, 25 Jul 2016 13:53:02 -0400" -->
<!-- isosent="20160725175302" -->
<!-- name="Eric Chamberland" -->
<!-- email="Eric.Chamberland_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 2.0.0rc4 Crash in MPI_File_write_all_end" -->
<!-- id="4313aea6-bf47-2bce-45d3-af494c3a8a12_at_giref.ulaval.ca" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="dc6cfa01-c565-fb9e-ea54-99e21a403ecd_at_central.uh.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 2.0.0rc4 Crash in MPI_File_write_all_end<br>
<strong>From:</strong> Eric Chamberland (<em>Eric.Chamberland_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-07-25 13:53:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19276.php">Eric Chamberland: "[OMPI devel] OpenMPI 2.0 and Petsc 3.7.2"</a>
<li><strong>Previous message:</strong> <a href="19274.php">Gilles Gouaillardet: "Re: [OMPI devel] Jenkins setup"</a>
<li><strong>In reply to:</strong> <a href="19194.php">Edgar Gabriel: "Re: [OMPI devel] 2.0.0rc4 Crash in MPI_File_write_all_end"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19197.php">Howard Pritchard: "Re: [OMPI devel] 2.0.0rc4 Crash in MPI_File_write_all_end"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Edgard,
<br>
<p>just to tell that I tested your fixe that has been merged into 
<br>
ompi-release/v2.x (9ba667815) and it works! :)
<br>
<p>Thanks!
<br>
<p>Eric
<br>
<p>On 12/07/16 04:30 PM, Edgar Gabriel wrote:
<br>
<span class="quotelev1">&gt; I think the decision was made to postpone the patch to 2.0.1, since the
</span><br>
<span class="quotelev1">&gt; release of 2.0.0 is eminent.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Edgar
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 7/12/2016 2:51 PM, Eric Chamberland wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi Edgard,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I just saw that your patch got into ompi/master... any chances it goes
</span><br>
<span class="quotelev2">&gt;&gt; into ompi-release/v2.x before rc5?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; thanks,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Eric
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 08/07/16 03:14 PM, Edgar Gabriel wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I think I found the problem, I filed a pr towards master, and if that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; passes I will file a pr for the 2.x branch.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Edgar
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 7/8/2016 1:14 PM, Eric Chamberland wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On 08/07/16 01:44 PM, Edgar Gabriel wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ok, but just to be able to construct a test case, basically what
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; you are
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; doing is
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MPI_File_write_all_begin (fh, NULL, 0, some datatype);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MPI_File_write_all_end (fh, NULL, &amp;status),
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; is this correct?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Yes, but with 2 processes:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; rank 0 writes something, but not rank 1...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; other info: rank 0 didn't wait for rank1 after
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI_File_write_all_end so
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; it continued to the next MPI_File_write_all_begin with a different
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; datatype but on the same file...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; thanks!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Eric
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/07/19173.php">http://www.open-mpi.org/community/lists/devel/2016/07/19173.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/07/19192.php">http://www.open-mpi.org/community/lists/devel/2016/07/19192.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19276.php">Eric Chamberland: "[OMPI devel] OpenMPI 2.0 and Petsc 3.7.2"</a>
<li><strong>Previous message:</strong> <a href="19274.php">Gilles Gouaillardet: "Re: [OMPI devel] Jenkins setup"</a>
<li><strong>In reply to:</strong> <a href="19194.php">Edgar Gabriel: "Re: [OMPI devel] 2.0.0rc4 Crash in MPI_File_write_all_end"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19197.php">Howard Pritchard: "Re: [OMPI devel] 2.0.0rc4 Crash in MPI_File_write_all_end"</a>
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
