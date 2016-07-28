<?
$subject_val = "Re: [OMPI devel] 1.7.5: OpenShmem symbols are not weak";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr  7 18:35:38 2014" -->
<!-- isoreceived="20140407223538" -->
<!-- sent="Mon, 7 Apr 2014 22:35:37 +0000" -->
<!-- isosent="20140407223537" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.7.5: OpenShmem symbols are not weak" -->
<!-- id="0B8845CB-D952-4433-B111-C6E6C00E66E0_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAAO1KyaqsGXNDMahBSyTm+ODq_ma2Qp02ruW6_qNeT2SooooVg_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-07 18:35:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14466.php">Mike Dubman: "Re: [OMPI devel] 1.7.5: OpenShmem symbols are not weak"</a>
<li><strong>Previous message:</strong> <a href="14464.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Problem of running 'mpirun' on a cross-compiled	openmpi-1.6.5 for armv7"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/03/14434.php">Mike Dubman: "Re: [OMPI devel] 1.7.5: OpenShmem symbols are not weak"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14466.php">Mike Dubman: "Re: [OMPI devel] 1.7.5: OpenShmem symbols are not weak"</a>
<li><strong>Reply:</strong> <a href="14466.php">Mike Dubman: "Re: [OMPI devel] 1.7.5: OpenShmem symbols are not weak"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Mike / Mellanox --
<br>
<p>Does does OpenShmem define that there should be a profiling interface for SHMEM API functions (like MPI does)?
<br>
<p><p>On Mar 31, 2014, at 7:21 PM, Mike Dubman &lt;miked_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; thanks, we will fix that.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mon, Mar 31, 2014 at 5:04 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Hmmm...I'll ask the Mellanox folks to fix that, but it will have to be for 1.8.1 as we have to release 1.8.0 today for the upstream packagers. I expect 1.8.1 will go out in the next 1-2 months based on prior experience (we always get a bunch of corrections after initial stable release as more people pick those up).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mar 31, 2014, at 1:14 AM, Bert Wesarg &lt;Bert.Wesarg_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hi all,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; while working on support for OpenShmem in our next Score-P measurement [1] release, we noticed that the liboshmem.so library from Open MPI does not mark the symbols as weak as one would expect. Here is an output of liboshmem.so on my 64bit ubuntu system. Lets try shmem_init:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; $ readelf -W --dyn-syms  liboshmem.so.1.0.0 |grep 'shmem_init$'
</span><br>
<span class="quotelev2">&gt; &gt;  1098: 000000000001dac2   141 FUNC    GLOBAL DEFAULT   11 shmem_init
</span><br>
<span class="quotelev2">&gt; &gt;  1228: 000000000001c73a   236 FUNC    GLOBAL DEFAULT   11 oshmem_shmem_init
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Oh, no pshmem_init. Maybe missing, but its legacy anyway. Lets try shmem_broadcast:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; $ readelf -W --dyn-syms  liboshmem.so.1.0.0 |grep 'shmem_broadcast$'
</span><br>
<span class="quotelev2">&gt; &gt;   555: 000000000002769a    92 FUNC    GLOBAL DEFAULT   11 pshmem_broadcast
</span><br>
<span class="quotelev2">&gt; &gt;   577: 000000000001ed82    92 FUNC    GLOBAL DEFAULT   11 shmem_broadcast
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Ok, we see the pshmem_broadcast and the shmem_broadcast symbol, but the latter is not WEAK. Btw, this function is not in the standard. Thus (finally) take a symbol from the standard:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; $ readelf -W --dyn-syms  liboshmem.so.1.0.0 |grep 'shmem_barrier$'
</span><br>
<span class="quotelev2">&gt; &gt;   511: 000000000001d47e    24 FUNC    GLOBAL DEFAULT   11 oshmem_shmem_barrier
</span><br>
<span class="quotelev2">&gt; &gt;   525: 000000000001f250   217 FUNC    GLOBAL DEFAULT   11 shmem_barrier
</span><br>
<span class="quotelev2">&gt; &gt;  1099: 0000000000027b68   217 FUNC    GLOBAL DEFAULT   11 pshmem_barrier
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Again, no WEAK for shmem_barrier.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; For reference, the output for MPI_Init:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; $ readelf -W --dyn-syms  libmpi.so.1.4.0 |grep 'MPI_Init$'
</span><br>
<span class="quotelev2">&gt; &gt;  1383: 00000000000841ff   484 FUNC    WEAK   DEFAULT   11 MPI_Init
</span><br>
<span class="quotelev2">&gt; &gt;  2051: 00000000000841ff   484 FUNC    GLOBAL DEFAULT   11 PMPI_Init
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; HTH,
</span><br>
<span class="quotelev2">&gt; &gt; Bert
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [1] <a href="http://www.vi-hps.org/projects/score-p">http://www.vi-hps.org/projects/score-p</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Dipl.-Inf. Bert Wesarg
</span><br>
<span class="quotelev2">&gt; &gt; wiss. Mitarbeiter
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Technische Universit&#228;t Dresden
</span><br>
<span class="quotelev2">&gt; &gt; Zentrum f&#252;r Informationsdienste und Hochleistungsrechnen (ZIH)
</span><br>
<span class="quotelev2">&gt; &gt; 01062 Dresden
</span><br>
<span class="quotelev2">&gt; &gt; Tel.: +49 (351) 463-42451
</span><br>
<span class="quotelev2">&gt; &gt; Fax: +49 (351) 463-37773
</span><br>
<span class="quotelev2">&gt; &gt; E-Mail: Bert.Wesarg_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/03/14429.php">http://www.open-mpi.org/community/lists/devel/2014/03/14429.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/03/14430.php">http://www.open-mpi.org/community/lists/devel/2014/03/14430.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/03/14434.php">http://www.open-mpi.org/community/lists/devel/2014/03/14434.php</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14466.php">Mike Dubman: "Re: [OMPI devel] 1.7.5: OpenShmem symbols are not weak"</a>
<li><strong>Previous message:</strong> <a href="14464.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Problem of running 'mpirun' on a cross-compiled	openmpi-1.6.5 for armv7"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/03/14434.php">Mike Dubman: "Re: [OMPI devel] 1.7.5: OpenShmem symbols are not weak"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14466.php">Mike Dubman: "Re: [OMPI devel] 1.7.5: OpenShmem symbols are not weak"</a>
<li><strong>Reply:</strong> <a href="14466.php">Mike Dubman: "Re: [OMPI devel] 1.7.5: OpenShmem symbols are not weak"</a>
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
