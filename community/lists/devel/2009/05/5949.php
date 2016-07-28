<?
$subject_val = "Re: [OMPI devel] Inherent limit on #communicators?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May  4 05:41:52 2009" -->
<!-- isoreceived="20090504094152" -->
<!-- sent="Mon, 04 May 2009 11:41:47 +0200" -->
<!-- isosent="20090504094147" -->
<!-- name="Christian Siebert" -->
<!-- email="christian.siebert_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Inherent limit on #communicators?" -->
<!-- id="20090504114147.20546wpwiambbvq3_at_mail.tu-chemnitz.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="49F9EDD7.3000402_at_cs.uh.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Inherent limit on #communicators?<br>
<strong>From:</strong> Christian Siebert (<em>christian.siebert_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-04 05:41:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5950.php">Ralph Castain: "[OMPI devel] MTT tests: segv's with sm on large messages"</a>
<li><strong>Previous message:</strong> <a href="5948.php">Rainer Keller: "Re: [OMPI devel] OS X compilation broken"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/04/5922.php">Edgar Gabriel: "Re: [OMPI devel] Inherent limit on #communicators?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5959.php">Edgar Gabriel: "Re: [OMPI devel] Inherent limit on #communicators?"</a>
<li><strong>Reply:</strong> <a href="5959.php">Edgar Gabriel: "Re: [OMPI devel] Inherent limit on #communicators?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Edgar,
<br>
<p><span class="quotelev1">&gt; cid's are in fact not recycled in the block algorithm. The problem  
</span><br>
<span class="quotelev1">&gt; is that comm_free is not collective, so you can not make any  
</span><br>
<span class="quotelev1">&gt; assumptions whether other procs have also released that communicator.
</span><br>
well, that's not quite correct. The MPI standard says the following  
<br>
about MPI_Comm_free (MPI 2.1, p 201, l 43): &quot;This collective operation  
<br>
marks the communication object for deallocation.&quot;. So MPI_Comm_free is  
<br>
collective which makes the prescribed problem(s) easier so solve.
<br>
<p>However, I admit that there exist an advice to implementors that  
<br>
anticipates a local implementation. Personally I find this advice  
<br>
rather strange and (if nobody can give a good reason for it) would  
<br>
encourage its removal...
<br>
<p>Best regards,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Christian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5950.php">Ralph Castain: "[OMPI devel] MTT tests: segv's with sm on large messages"</a>
<li><strong>Previous message:</strong> <a href="5948.php">Rainer Keller: "Re: [OMPI devel] OS X compilation broken"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/04/5922.php">Edgar Gabriel: "Re: [OMPI devel] Inherent limit on #communicators?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5959.php">Edgar Gabriel: "Re: [OMPI devel] Inherent limit on #communicators?"</a>
<li><strong>Reply:</strong> <a href="5959.php">Edgar Gabriel: "Re: [OMPI devel] Inherent limit on #communicators?"</a>
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
