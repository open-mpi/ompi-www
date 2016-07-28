<?
$subject_val = "[OMPI devel] Affect of compression on modex and launch messages";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr  4 12:52:51 2008" -->
<!-- isoreceived="20080404165251" -->
<!-- sent="Fri, 04 Apr 2008 10:52:38 -0600" -->
<!-- isosent="20080404165238" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] Affect of compression on modex and launch messages" -->
<!-- id="C41BB8F6.CF3A%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI devel] Affect of compression on modex and launch messages<br>
<strong>From:</strong> Ralph H Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-04 12:52:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3658.php">Aurélien Bouteiller: "Re: [OMPI devel] MPI_Comm_connect/Accept"</a>
<li><strong>Previous message:</strong> <a href="3656.php">Tim Prins: "Re: [OMPI devel] init_thread + spawn error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3659.php">George Bosilca: "Re: [OMPI devel] Affect of compression on modex and launch messages"</a>
<li><strong>Reply:</strong> <a href="3659.php">George Bosilca: "Re: [OMPI devel] Affect of compression on modex and launch messages"</a>
<li><strong>Reply:</strong> <a href="3661.php">Roland Dreier: "Re: [OMPI devel] Affect of compression on modex and launch messages"</a>
<li><strong>Reply:</strong> <a href="3669.php">Gleb Natapov: "Re: [OMPI devel] Affect of compression on modex and launch messages"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello all
<br>
<p>Based on some discussion on this list, I integrated a zlib-based compression
<br>
ability into ORTE. Since the launch message sent to the orteds and the modex
<br>
between the application procs are the only places where messages of any size
<br>
are sent, I only implemented compression for those two exchanges.
<br>
<p>I have found virtually no benefit to the compression. Essentially, the
<br>
overhead consumed in compression/decompressing the messages pretty much
<br>
balances out any transmission time differences. However, I could only test
<br>
this for 64 nodes, 8ppn, so perhaps there is some benefit at larger sizes.
<br>
<p>Even though my test size wasn't very big, I did try forcing the worst-case
<br>
scenario. I included all available BTL's, and ran the OOB over Ethernet.
<br>
Although there was some difference, it wasn't appreciable - easily within
<br>
the variations I see on this rather unstable machine.
<br>
<p>I invite you to try it yourself. You can get a copy of the code via:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;hg clone <a href="http://www.open-mpi.org/hg/hgwebdir.cgi/rhc/gather">http://www.open-mpi.org/hg/hgwebdir.cgi/rhc/gather</a>
<br>
<p>You will need to configure with LIBS=-lz.
<br>
<p>Compression is normally turned &quot;off&quot;. You can turn it on by setting:
<br>
<p>-mca orte_compress 1
<br>
<p>You can also adjust the level of compression:
<br>
<p>-mca orte_compress_level [1-9]
<br>
<p>If you don't specify the level and select compression, the level will
<br>
default to 1. From my tests, this seemed a good compromise. The other levels
<br>
provided some small amount of better compression, but took longer.
<br>
<p>With compression &quot;on&quot;, you will get output telling you the original size of
<br>
the message and its compressed size so you can see what was done.
<br>
<p>Please let me know what you find out. I would like to reach a decision as to
<br>
whether or not compression is worthwhile.
<br>
<p>Thanks
<br>
Ralph
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3658.php">Aurélien Bouteiller: "Re: [OMPI devel] MPI_Comm_connect/Accept"</a>
<li><strong>Previous message:</strong> <a href="3656.php">Tim Prins: "Re: [OMPI devel] init_thread + spawn error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3659.php">George Bosilca: "Re: [OMPI devel] Affect of compression on modex and launch messages"</a>
<li><strong>Reply:</strong> <a href="3659.php">George Bosilca: "Re: [OMPI devel] Affect of compression on modex and launch messages"</a>
<li><strong>Reply:</strong> <a href="3661.php">Roland Dreier: "Re: [OMPI devel] Affect of compression on modex and launch messages"</a>
<li><strong>Reply:</strong> <a href="3669.php">Gleb Natapov: "Re: [OMPI devel] Affect of compression on modex and launch messages"</a>
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
