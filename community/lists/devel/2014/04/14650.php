<?
$subject_val = "Re: [OMPI devel] Wrong Endianness in Open MPI for external32 representation";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 29 09:27:11 2014" -->
<!-- isoreceived="20140429132711" -->
<!-- sent="Tue, 29 Apr 2014 08:27:16 -0500" -->
<!-- isosent="20140429132716" -->
<!-- name="Edgar Gabriel" -->
<!-- email="gabriel_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Wrong Endianness in Open MPI for external32 representation" -->
<!-- id="535FA8B4.7050105_at_cs.uh.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="520681773.556618.1398773021004.JavaMail.root_at_hlrs.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Wrong Endianness in Open MPI for external32 representation<br>
<strong>From:</strong> Edgar Gabriel (<em>gabriel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-29 09:27:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14651.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Well-known mca parameters"</a>
<li><strong>Previous message:</strong> <a href="14649.php">Ralph Castain: "Re: [OMPI devel] trunk fails to compile"</a>
<li><strong>In reply to:</strong> <a href="14648.php">Christoph Niethammer: "[OMPI devel] Wrong Endianness in Open MPI for external32 representation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14657.php">Gilles Gouaillardet: "Re: [OMPI devel] Wrong Endianness in Open MPI for external32 representation"</a>
<li><strong>Reply:</strong> <a href="14657.php">Gilles Gouaillardet: "Re: [OMPI devel] Wrong Endianness in Open MPI for external32 representation"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
the way you launch the app, you will be using ROMIO, and I am not 100%
<br>
sure about how the data representation stuff is integrated with OMPI. I
<br>
am pretty sure that we are not doing the right thing for OMPIO, but I
<br>
will look into later this week.
<br>
<p>Thanks
<br>
Edgar
<br>
<p>On 4/29/2014 7:03 AM, Christoph Niethammer wrote:
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It seems for me that the endianness is wrong in Open MPI's I/O for the external32 data representation. :O
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Find attached my test programs which write the integer -30 and the double 16.25 into a file.
</span><br>
<span class="quotelev1">&gt; Here the output on my Linux system:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpicc     c-xdr.c   -o c-xdr
</span><br>
<span class="quotelev1">&gt; mpicc     mpi-io-external32.c   -o mpi-io-external32
</span><br>
<span class="quotelev1">&gt; ./c-xdr
</span><br>
<span class="quotelev1">&gt; Output file: c-xdr.dat
</span><br>
<span class="quotelev1">&gt; hexdump c-xdr.dat
</span><br>
<span class="quotelev1">&gt; 0000000 ffff e2ff 3040 0040 0000 0000          
</span><br>
<span class="quotelev1">&gt; 000000c
</span><br>
<span class="quotelev1">&gt; ./mpi-io-external32
</span><br>
<span class="quotelev1">&gt; Output file: mpi-io-external32.dat
</span><br>
<span class="quotelev1">&gt; hexdump mpi-io-external32.dat
</span><br>
<span class="quotelev1">&gt; 0000000 ffe2 ffff 0000 0000 4000 4030          
</span><br>
<span class="quotelev1">&gt; 000000c
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best regards
</span><br>
<span class="quotelev1">&gt; Christoph Niethammer
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Christoph Niethammer
</span><br>
<span class="quotelev1">&gt; High Performance Computing Center Stuttgart (HLRS)
</span><br>
<span class="quotelev1">&gt; Nobelstrasse 19
</span><br>
<span class="quotelev1">&gt; 70569 Stuttgart
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Tel: ++49(0)711-685-87203
</span><br>
<span class="quotelev1">&gt; email: niethammer_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.hlrs.de/people/niethammer">http://www.hlrs.de/people/niethammer</a>
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/04/14648.php">http://www.open-mpi.org/community/lists/devel/2014/04/14648.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><pre>
-- 
Edgar Gabriel
Associate Professor
Parallel Software Technologies Lab      <a href="http://pstl.cs.uh.edu">http://pstl.cs.uh.edu</a>
Department of Computer Science          University of Houston
Philip G. Hoffman Hall, Room 524        Houston, TX-77204, USA
Tel: +1 (713) 743-3857                  Fax: +1 (713) 743-3335

</pre>
<hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14650/signature.asc">OpenPGP digital signature</a>
</ul>
<!-- attachment="signature.asc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14651.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Well-known mca parameters"</a>
<li><strong>Previous message:</strong> <a href="14649.php">Ralph Castain: "Re: [OMPI devel] trunk fails to compile"</a>
<li><strong>In reply to:</strong> <a href="14648.php">Christoph Niethammer: "[OMPI devel] Wrong Endianness in Open MPI for external32 representation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14657.php">Gilles Gouaillardet: "Re: [OMPI devel] Wrong Endianness in Open MPI for external32 representation"</a>
<li><strong>Reply:</strong> <a href="14657.php">Gilles Gouaillardet: "Re: [OMPI devel] Wrong Endianness in Open MPI for external32 representation"</a>
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
