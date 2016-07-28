<?
$subject_val = "[OMPI devel] How to 'hook' a new BTL to OMPI call chain?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 16 12:52:22 2016" -->
<!-- isoreceived="20160316165222" -->
<!-- sent="Wed, 16 Mar 2016 12:52:21 -0400" -->
<!-- isosent="20160316165221" -->
<!-- name="dpchoudh ." -->
<!-- email="dpchoudh_at_[hidden]" -->
<!-- subject="[OMPI devel] How to 'hook' a new BTL to OMPI call chain?" -->
<!-- id="CAHXxYDjjAwVxXEv2_Qy=2UHCoJuLSNFcS56o10GkoDdmSFf5wQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI devel] How to 'hook' a new BTL to OMPI call chain?<br>
<strong>From:</strong> dpchoudh . (<em>dpchoudh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-16 12:52:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18705.php">dpchoudh .: "Re: [OMPI devel] How to 'hook' a new BTL to OMPI call chain?"</a>
<li><strong>Previous message:</strong> <a href="18703.php">Ralph Castain: "Re: [OMPI devel] RFC: RML change to multi-select"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18705.php">dpchoudh .: "Re: [OMPI devel] How to 'hook' a new BTL to OMPI call chain?"</a>
<li><strong>Reply:</strong> <a href="18705.php">dpchoudh .: "Re: [OMPI devel] How to 'hook' a new BTL to OMPI call chain?"</a>
<li><strong>Reply:</strong> <a href="18706.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] How to 'hook' a new BTL to OMPI call chain?"</a>
<li><strong>Reply:</strong> <a href="18708.php">Gilles Gouaillardet: "Re: [OMPI devel] How to 'hook' a new BTL to OMPI call chain?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello all
<br>
<p>Sorry about asking too many 101 level question, but here is another one:
<br>
<p>I have a BTL layer code, called 'lf' that is ready for unit testing; it
<br>
compiles with the OMPI tool chain (by doing a ./configure; make from the
<br>
top level directory) and have the basic data transport calls implemented.
<br>
<p>How do I 'hook up' the BTL to the OMPI call chain?
<br>
<p>If I do the following:
<br>
mpirin -np 2 --hostfile ~/hostfile -mca btl lf,self ./NPmpi
<br>
<p>it fails to run and the gist of the failure is that it does not even
<br>
attempt connecting with the 'lf' BTL (the error says: 'BTLs attempted:
<br>
self')
<br>
<p>The 'lf' NIC, and RDMA capable card, also has a TCP/IP interface and
<br>
replacing 'lf' with 'tcp' in the above command *does* work.
<br>
<p>Thanks in advance
<br>
Durga
<br>
<p>Life is complex. It has real and imaginary parts.
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18704/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18705.php">dpchoudh .: "Re: [OMPI devel] How to 'hook' a new BTL to OMPI call chain?"</a>
<li><strong>Previous message:</strong> <a href="18703.php">Ralph Castain: "Re: [OMPI devel] RFC: RML change to multi-select"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18705.php">dpchoudh .: "Re: [OMPI devel] How to 'hook' a new BTL to OMPI call chain?"</a>
<li><strong>Reply:</strong> <a href="18705.php">dpchoudh .: "Re: [OMPI devel] How to 'hook' a new BTL to OMPI call chain?"</a>
<li><strong>Reply:</strong> <a href="18706.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] How to 'hook' a new BTL to OMPI call chain?"</a>
<li><strong>Reply:</strong> <a href="18708.php">Gilles Gouaillardet: "Re: [OMPI devel] How to 'hook' a new BTL to OMPI call chain?"</a>
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
