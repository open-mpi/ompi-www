<?
$subject_val = "Re: [OMPI devel] Affect of compression on modex and launch messages";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr  4 14:24:56 2008" -->
<!-- isoreceived="20080404182456" -->
<!-- sent="Fri, 4 Apr 2008 14:24:45 -0400" -->
<!-- isosent="20080404182445" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Affect of compression on modex and launch messages" -->
<!-- id="0CC81593-64BD-4DB4-8B1B-A1D4B591EF95_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C41BB8F6.CF3A%rhc_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Affect of compression on modex and launch messages<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-04 14:24:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3660.php">Ralph H Castain: "Re: [OMPI devel] MPI_Comm_connect/Accept"</a>
<li><strong>Previous message:</strong> <a href="3658.php">Aur&#233;lien Bouteiller: "Re: [OMPI devel] MPI_Comm_connect/Accept"</a>
<li><strong>In reply to:</strong> <a href="3657.php">Ralph H Castain: "[OMPI devel] Affect of compression on modex and launch messages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3661.php">Roland Dreier: "Re: [OMPI devel] Affect of compression on modex and launch messages"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph,
<br>
<p>There are several studies about compressions and data exchange. Few  
<br>
years ago we integrate such mechanism (adaptive compression of  
<br>
communication) in one of the projects here at ICL (called GridSolve).  
<br>
The idea was to optimize the network traffic for sending large  
<br>
matrices used for computation from a server to a specific workers.  
<br>
Under some circumstances (few) it can improve the network traffic, and  
<br>
according to the main author in the worst case it doesn't harm.  
<br>
However, it is still unclear that there is any benefit when the data  
<br>
is reasonably small (which is the case in ORTE).
<br>
<p>The project is hosted at <a href="http://www.loria.fr/~ejeannot/adoc/adoc.html">http://www.loria.fr/~ejeannot/adoc/adoc.html</a>.  
<br>
It's a simple dropin for read/write so it is fairly simple to  
<br>
integrate. On the author webpage you can find some publication about  
<br>
this, publication that highlight the performances of this approach.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>PS: One of these a reference to the paper is available on ACM:
<br>
<p>E. Jeannot, B. Knutsson, M. Bjorkmann.
<br>
Adaptive Online Data Compression, in: High Performance Distributed  
<br>
Computing (HPDC'11), Edinburgh, Scotland, IEEE, july 2002.
<br>
<p><p>On Apr 4, 2008, at 12:52 PM, Ralph H Castain wrote:
<br>
<span class="quotelev1">&gt; Hello all
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Based on some discussion on this list, I integrated a zlib-based  
</span><br>
<span class="quotelev1">&gt; compression
</span><br>
<span class="quotelev1">&gt; ability into ORTE. Since the launch message sent to the orteds and  
</span><br>
<span class="quotelev1">&gt; the modex
</span><br>
<span class="quotelev1">&gt; between the application procs are the only places where messages of  
</span><br>
<span class="quotelev1">&gt; any size
</span><br>
<span class="quotelev1">&gt; are sent, I only implemented compression for those two exchanges.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have found virtually no benefit to the compression. Essentially, the
</span><br>
<span class="quotelev1">&gt; overhead consumed in compression/decompressing the messages pretty  
</span><br>
<span class="quotelev1">&gt; much
</span><br>
<span class="quotelev1">&gt; balances out any transmission time differences. However, I could  
</span><br>
<span class="quotelev1">&gt; only test
</span><br>
<span class="quotelev1">&gt; this for 64 nodes, 8ppn, so perhaps there is some benefit at larger  
</span><br>
<span class="quotelev1">&gt; sizes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Even though my test size wasn't very big, I did try forcing the  
</span><br>
<span class="quotelev1">&gt; worst-case
</span><br>
<span class="quotelev1">&gt; scenario. I included all available BTL's, and ran the OOB over  
</span><br>
<span class="quotelev1">&gt; Ethernet.
</span><br>
<span class="quotelev1">&gt; Although there was some difference, it wasn't appreciable - easily  
</span><br>
<span class="quotelev1">&gt; within
</span><br>
<span class="quotelev1">&gt; the variations I see on this rather unstable machine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I invite you to try it yourself. You can get a copy of the code via:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     hg clone <a href="http://www.open-mpi.org/hg/hgwebdir.cgi/rhc/gather">http://www.open-mpi.org/hg/hgwebdir.cgi/rhc/gather</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You will need to configure with LIBS=-lz.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Compression is normally turned &quot;off&quot;. You can turn it on by setting:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -mca orte_compress 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You can also adjust the level of compression:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -mca orte_compress_level [1-9]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you don't specify the level and select compression, the level will
</span><br>
<span class="quotelev1">&gt; default to 1. From my tests, this seemed a good compromise. The  
</span><br>
<span class="quotelev1">&gt; other levels
</span><br>
<span class="quotelev1">&gt; provided some small amount of better compression, but took longer.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; With compression &quot;on&quot;, you will get output telling you the original  
</span><br>
<span class="quotelev1">&gt; size of
</span><br>
<span class="quotelev1">&gt; the message and its compressed size so you can see what was done.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please let me know what you find out. I would like to reach a  
</span><br>
<span class="quotelev1">&gt; decision as to
</span><br>
<span class="quotelev1">&gt; whether or not compression is worthwhile.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Ralph
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
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-3659/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3660.php">Ralph H Castain: "Re: [OMPI devel] MPI_Comm_connect/Accept"</a>
<li><strong>Previous message:</strong> <a href="3658.php">Aur&#233;lien Bouteiller: "Re: [OMPI devel] MPI_Comm_connect/Accept"</a>
<li><strong>In reply to:</strong> <a href="3657.php">Ralph H Castain: "[OMPI devel] Affect of compression on modex and launch messages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3661.php">Roland Dreier: "Re: [OMPI devel] Affect of compression on modex and launch messages"</a>
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
