<?
$subject_val = "Re: [OMPI devel] 2.0.0rc4 Crash in MPI_File_write_all_end";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 12 16:31:07 2016" -->
<!-- isoreceived="20160712203107" -->
<!-- sent="Tue, 12 Jul 2016 15:30:54 -0500" -->
<!-- isosent="20160712203054" -->
<!-- name="Edgar Gabriel" -->
<!-- email="egabriel_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 2.0.0rc4 Crash in MPI_File_write_all_end" -->
<!-- id="dc6cfa01-c565-fb9e-ea54-99e21a403ecd_at_central.uh.edu" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="13118ab0-8e03-c7d2-3759-3e17b2765789_at_giref.ulaval.ca" -->
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
<strong>From:</strong> Edgar Gabriel (<em>egabriel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-07-12 16:30:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19195.php">Gilles Gouaillardet: "Re: [OMPI devel] SHMEM, &quot;mpp/shmem.fh&quot;, CMake and infinite loops"</a>
<li><strong>Previous message:</strong> <a href="19193.php">Emani, Murali: "Re: [OMPI devel] [OMPI users]   Class information in OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="19192.php">Eric Chamberland: "Re: [OMPI devel] 2.0.0rc4 Crash in MPI_File_write_all_end"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19275.php">Eric Chamberland: "Re: [OMPI devel] 2.0.0rc4 Crash in MPI_File_write_all_end"</a>
<li><strong>Reply:</strong> <a href="19275.php">Eric Chamberland: "Re: [OMPI devel] 2.0.0rc4 Crash in MPI_File_write_all_end"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think the decision was made to postpone the patch to 2.0.1, since the 
<br>
release of 2.0.0 is eminent.
<br>
<p>Thanks
<br>
Edgar
<br>
<p>On 7/12/2016 2:51 PM, Eric Chamberland wrote:
<br>
<span class="quotelev1">&gt; Hi Edgard,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I just saw that your patch got into ompi/master... any chances it goes
</span><br>
<span class="quotelev1">&gt; into ompi-release/v2.x before rc5?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Eric
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 08/07/16 03:14 PM, Edgar Gabriel wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I think I found the problem, I filed a pr towards master, and if that
</span><br>
<span class="quotelev2">&gt;&gt; passes I will file a pr for the 2.x branch.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks!
</span><br>
<span class="quotelev2">&gt;&gt; Edgar
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 7/8/2016 1:14 PM, Eric Chamberland wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 08/07/16 01:44 PM, Edgar Gabriel wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ok, but just to be able to construct a test case, basically what you are
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; doing is
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI_File_write_all_begin (fh, NULL, 0, some datatype);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI_File_write_all_end (fh, NULL, &amp;status),
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; is this correct?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Yes, but with 2 processes:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rank 0 writes something, but not rank 1...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; other info: rank 0 didn't wait for rank1 after MPI_File_write_all_end so
</span><br>
<span class="quotelev3">&gt;&gt;&gt; it continued to the next MPI_File_write_all_begin with a different
</span><br>
<span class="quotelev3">&gt;&gt;&gt; datatype but on the same file...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; thanks!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Eric
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/07/19173.php">http://www.open-mpi.org/community/lists/devel/2016/07/19173.php</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/07/19192.php">http://www.open-mpi.org/community/lists/devel/2016/07/19192.php</a>
</span><br>
<p><pre>
-- 
Edgar Gabriel
Associate Professor
Parallel Software Technologies Lab      <a href="http://pstl.cs.uh.edu">http://pstl.cs.uh.edu</a>
Department of Computer Science          University of Houston
Philip G. Hoffman Hall, Room 524        Houston, TX-77204, USA
Tel: +1 (713) 743-3857                  Fax: +1 (713) 743-3335
--
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19195.php">Gilles Gouaillardet: "Re: [OMPI devel] SHMEM, &quot;mpp/shmem.fh&quot;, CMake and infinite loops"</a>
<li><strong>Previous message:</strong> <a href="19193.php">Emani, Murali: "Re: [OMPI devel] [OMPI users]   Class information in OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="19192.php">Eric Chamberland: "Re: [OMPI devel] 2.0.0rc4 Crash in MPI_File_write_all_end"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19275.php">Eric Chamberland: "Re: [OMPI devel] 2.0.0rc4 Crash in MPI_File_write_all_end"</a>
<li><strong>Reply:</strong> <a href="19275.php">Eric Chamberland: "Re: [OMPI devel] 2.0.0rc4 Crash in MPI_File_write_all_end"</a>
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
