<?
$subject_val = "Re: [OMPI devel] failure withzero-lengthReduce()andbothsbuf=rbuf=NULL";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 11 12:19:23 2010" -->
<!-- isoreceived="20100211171923" -->
<!-- sent="Thu, 11 Feb 2010 18:19:18 +0100" -->
<!-- isosent="20100211171918" -->
<!-- name="Christian Siebert" -->
<!-- email="christian.siebert_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] failure withzero-lengthReduce()andbothsbuf=rbuf=NULL" -->
<!-- id="20100211181918.17061xugeg8jbgnq_at_mail.tu-chemnitz.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="07DC975E-17F7-4D77-AD36-6079E5E6CFB1_at_cisco.com" -->
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
<strong>From:</strong> Christian Siebert (<em>christian.siebert_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-11 12:19:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7417.php">Ralph Castain: "[OMPI devel] RFC: Rename ompi/include/mpi_portable_platform.h"</a>
<li><strong>Previous message:</strong> <a href="7415.php">Lisandro Dalcin: "[OMPI devel] MPI_Win_get_errhandler() and MPI_Win_set_errhandler() do not fail when passing MPI_WIN_NULL"</a>
<li><strong>In reply to:</strong> <a href="7410.php">Jeff Squyres: "Re: [OMPI devel] failure withzero-lengthReduce()andbothsbuf=rbuf=NULL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7414.php">Lisandro Dalcin: "Re: [OMPI devel] failure withzero-lengthReduce()andbothsbuf=rbuf=NULL"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; There's no synchronization *guarantee* in MPI collectives except for  
</span><br>
<span class="quotelev1">&gt; MPI_BARRIER. [...] BCAST *can* synchronize; I'm not saying it has to.
</span><br>
I fully agree with Jeff and would even go a step further.
<br>
<p>As has already been noted, there are also some implicit data  
<br>
dependencies due to the fact that we do &quot;message passing&quot;. This means  
<br>
that a receiver can only get a message after the sender has posted it.  
<br>
So yes, all processes get their broadcast message only after the root  
<br>
called MPI_Bcast and the like. But does this necessarily imply that  
<br>
all processes block in such a call and return only after the senders  
<br>
joined the communication? In my opinion, no correct and portable MPI  
<br>
program should rely on anything that is not explicitly stated in the  
<br>
standard.
<br>
<p>Example to think about: I developed an MPI wrapper several years ago  
<br>
(for a slow interconnect), which almost immediately returned from  
<br>
blocking MPI calls. Instead of wasting time to wait for the senders,  
<br>
it utilized features of the virtual memory subsystem to protect the  
<br>
given message buffers from not-yet-allowed accesses (i.e., write  
<br>
access for send buffers and read access for receive buffer), and  
<br>
started the communication in the background like the nonblocking  
<br>
variants. The blocking (if at all) happened only at the time the data  
<br>
was actually accessed by the processor (so this implicit  
<br>
synchronization point we are taking about was just delayed). This  
<br>
enabled communication and computation overlap without rewriting the  
<br>
application (even for send operations or large messages due to  
<br>
pipelining) - just relink and see if it gets faster. I'm not totally  
<br>
sure that this is 100% MPI conform - but as long as programmers don't  
<br>
rely on anything that is not explicitly stated in the standard, they  
<br>
could benefit from such implementations...
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7417.php">Ralph Castain: "[OMPI devel] RFC: Rename ompi/include/mpi_portable_platform.h"</a>
<li><strong>Previous message:</strong> <a href="7415.php">Lisandro Dalcin: "[OMPI devel] MPI_Win_get_errhandler() and MPI_Win_set_errhandler() do not fail when passing MPI_WIN_NULL"</a>
<li><strong>In reply to:</strong> <a href="7410.php">Jeff Squyres: "Re: [OMPI devel] failure withzero-lengthReduce()andbothsbuf=rbuf=NULL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7414.php">Lisandro Dalcin: "Re: [OMPI devel] failure withzero-lengthReduce()andbothsbuf=rbuf=NULL"</a>
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
