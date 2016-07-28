<?
$subject_val = "Re: [OMPI devel] failure withzero-lengthReduce()andbothsbuf=rbuf=NULL";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 11 13:06:26 2010" -->
<!-- isoreceived="20100211180626" -->
<!-- sent="Thu, 11 Feb 2010 13:06:16 -0500" -->
<!-- isosent="20100211180616" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] failure withzero-lengthReduce()andbothsbuf=rbuf=NULL" -->
<!-- id="68DCF419-B9A8-4829-8511-505298D04539_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="e7ba66e41002110853n536cc0bbtc03d96f8853fae00_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] failure withzero-lengthReduce()andbothsbuf=rbuf=NULL<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-11 13:06:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7419.php">Terry.Dontje_at_[hidden]: "[OMPI devel] RFC: Processor affinity hardware thread support"</a>
<li><strong>Previous message:</strong> <a href="7417.php">Ralph Castain: "[OMPI devel] RFC: Rename ompi/include/mpi_portable_platform.h"</a>
<li><strong>In reply to:</strong> <a href="7414.php">Lisandro Dalcin: "Re: [OMPI devel] failure withzero-lengthReduce()andbothsbuf=rbuf=NULL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7420.php">Lisandro Dalcin: "Re: [OMPI devel] failure withzero-lengthReduce()andbothsbuf=rbuf=NULL"</a>
<li><strong>Reply:</strong> <a href="7420.php">Lisandro Dalcin: "Re: [OMPI devel] failure withzero-lengthReduce()andbothsbuf=rbuf=NULL"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This is absolutely not true. Open MPI supports zero length collective operations (all of them actually), but if their arguments are correctly shaped.
<br>
<p>What you're asking for is a free ticket to write MPI calls that do not follow the MPI requirements when a special value for count is given.
<br>
<p>While zero-length arrays/sequence/containers do appears in real code, they are not equal to NULL. If they are NULL, that means they do not contain any useful data, and they don't need to be source or target of any kind of [collective or point-to-point] communications.
<br>
<p>&nbsp;&nbsp;george.
<br>
<p>On Feb 11, 2010, at 11:53 , Lisandro Dalcin wrote:
<br>
<p><span class="quotelev1">&gt; Well, I have to disagree... I understand you (as an MPI implementor)
</span><br>
<span class="quotelev1">&gt; think that Reduce(count=0) could be meaningless and add complexity to
</span><br>
<span class="quotelev1">&gt; the implementation of MPI_Reduce()... But Reduce(count=0) could save
</span><br>
<span class="quotelev1">&gt; user code of special-casing the count==0 situation... after all,
</span><br>
<span class="quotelev1">&gt; zero-length arrays/sequences/containers do appear in actual codes...
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7419.php">Terry.Dontje_at_[hidden]: "[OMPI devel] RFC: Processor affinity hardware thread support"</a>
<li><strong>Previous message:</strong> <a href="7417.php">Ralph Castain: "[OMPI devel] RFC: Rename ompi/include/mpi_portable_platform.h"</a>
<li><strong>In reply to:</strong> <a href="7414.php">Lisandro Dalcin: "Re: [OMPI devel] failure withzero-lengthReduce()andbothsbuf=rbuf=NULL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7420.php">Lisandro Dalcin: "Re: [OMPI devel] failure withzero-lengthReduce()andbothsbuf=rbuf=NULL"</a>
<li><strong>Reply:</strong> <a href="7420.php">Lisandro Dalcin: "Re: [OMPI devel] failure withzero-lengthReduce()andbothsbuf=rbuf=NULL"</a>
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
