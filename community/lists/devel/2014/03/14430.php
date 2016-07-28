<?
$subject_val = "Re: [OMPI devel] 1.7.5: OpenShmem symbols are not weak";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 31 10:04:31 2014" -->
<!-- isoreceived="20140331140431" -->
<!-- sent="Mon, 31 Mar 2014 07:04:11 -0700" -->
<!-- isosent="20140331140411" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.7.5: OpenShmem symbols are not weak" -->
<!-- id="4154AA44-E3C6-488A-8A79-10CABCDD5907_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="533923DB.4060305_at_tu-dresden.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.7.5: OpenShmem symbols are not weak<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-31 10:04:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14431.php">Dave Goodell (dgoodell): "[OMPI devel] &quot;--pernode N&quot; bug?"</a>
<li><strong>Previous message:</strong> <a href="14429.php">Bert Wesarg: "[OMPI devel] 1.7.5: OpenShmem symbols are not weak"</a>
<li><strong>In reply to:</strong> <a href="14429.php">Bert Wesarg: "[OMPI devel] 1.7.5: OpenShmem symbols are not weak"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14434.php">Mike Dubman: "Re: [OMPI devel] 1.7.5: OpenShmem symbols are not weak"</a>
<li><strong>Reply:</strong> <a href="14434.php">Mike Dubman: "Re: [OMPI devel] 1.7.5: OpenShmem symbols are not weak"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hmmm...I'll ask the Mellanox folks to fix that, but it will have to be for 1.8.1 as we have to release 1.8.0 today for the upstream packagers. I expect 1.8.1 will go out in the next 1-2 months based on prior experience (we always get a bunch of corrections after initial stable release as more people pick those up).
<br>
<p><p>On Mar 31, 2014, at 1:14 AM, Bert Wesarg &lt;Bert.Wesarg_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; while working on support for OpenShmem in our next Score-P measurement [1] release, we noticed that the liboshmem.so library from Open MPI does not mark the symbols as weak as one would expect. Here is an output of liboshmem.so on my 64bit ubuntu system. Lets try shmem_init:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ readelf -W --dyn-syms  liboshmem.so.1.0.0 |grep 'shmem_init$'
</span><br>
<span class="quotelev1">&gt;  1098: 000000000001dac2   141 FUNC    GLOBAL DEFAULT   11 shmem_init
</span><br>
<span class="quotelev1">&gt;  1228: 000000000001c73a   236 FUNC    GLOBAL DEFAULT   11 oshmem_shmem_init
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Oh, no pshmem_init. Maybe missing, but its legacy anyway. Lets try shmem_broadcast:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ readelf -W --dyn-syms  liboshmem.so.1.0.0 |grep 'shmem_broadcast$'
</span><br>
<span class="quotelev1">&gt;   555: 000000000002769a    92 FUNC    GLOBAL DEFAULT   11 pshmem_broadcast
</span><br>
<span class="quotelev1">&gt;   577: 000000000001ed82    92 FUNC    GLOBAL DEFAULT   11 shmem_broadcast
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ok, we see the pshmem_broadcast and the shmem_broadcast symbol, but the latter is not WEAK. Btw, this function is not in the standard. Thus (finally) take a symbol from the standard:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ readelf -W --dyn-syms  liboshmem.so.1.0.0 |grep 'shmem_barrier$'
</span><br>
<span class="quotelev1">&gt;   511: 000000000001d47e    24 FUNC    GLOBAL DEFAULT   11 oshmem_shmem_barrier
</span><br>
<span class="quotelev1">&gt;   525: 000000000001f250   217 FUNC    GLOBAL DEFAULT   11 shmem_barrier
</span><br>
<span class="quotelev1">&gt;  1099: 0000000000027b68   217 FUNC    GLOBAL DEFAULT   11 pshmem_barrier
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Again, no WEAK for shmem_barrier.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For reference, the output for MPI_Init:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ readelf -W --dyn-syms  libmpi.so.1.4.0 |grep 'MPI_Init$'
</span><br>
<span class="quotelev1">&gt;  1383: 00000000000841ff   484 FUNC    WEAK   DEFAULT   11 MPI_Init
</span><br>
<span class="quotelev1">&gt;  2051: 00000000000841ff   484 FUNC    GLOBAL DEFAULT   11 PMPI_Init
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; HTH,
</span><br>
<span class="quotelev1">&gt; Bert
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [1] <a href="http://www.vi-hps.org/projects/score-p">http://www.vi-hps.org/projects/score-p</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Dipl.-Inf. Bert Wesarg
</span><br>
<span class="quotelev1">&gt; wiss. Mitarbeiter
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Technische Universit&#228;t Dresden
</span><br>
<span class="quotelev1">&gt; Zentrum f&#252;r Informationsdienste und Hochleistungsrechnen (ZIH)
</span><br>
<span class="quotelev1">&gt; 01062 Dresden
</span><br>
<span class="quotelev1">&gt; Tel.: +49 (351) 463-42451
</span><br>
<span class="quotelev1">&gt; Fax: +49 (351) 463-37773
</span><br>
<span class="quotelev1">&gt; E-Mail: Bert.Wesarg_at_[hidden]
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/03/14429.php">http://www.open-mpi.org/community/lists/devel/2014/03/14429.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14431.php">Dave Goodell (dgoodell): "[OMPI devel] &quot;--pernode N&quot; bug?"</a>
<li><strong>Previous message:</strong> <a href="14429.php">Bert Wesarg: "[OMPI devel] 1.7.5: OpenShmem symbols are not weak"</a>
<li><strong>In reply to:</strong> <a href="14429.php">Bert Wesarg: "[OMPI devel] 1.7.5: OpenShmem symbols are not weak"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14434.php">Mike Dubman: "Re: [OMPI devel] 1.7.5: OpenShmem symbols are not weak"</a>
<li><strong>Reply:</strong> <a href="14434.php">Mike Dubman: "Re: [OMPI devel] 1.7.5: OpenShmem symbols are not weak"</a>
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
