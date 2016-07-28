<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Apr  4 10:27:38 2007" -->
<!-- isoreceived="20070404142738" -->
<!-- sent="Wed, 4 Apr 2007 10:27:06 -0400" -->
<!-- isosent="20070404142706" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Hi!! Can anybody tell me how to use open mpi profiling PMPI???" -->
<!-- id="15B77F97-1D9B-4120-98CF-E5BC17EF5BE6_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1915.69.180.16.130.1175699535.squirrel_at_webmail.cc.gatech.edu" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-04-04 10:27:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3015.php">Durga Choudhury: "Re: [OMPI users] Hi!! Can anybody tell me how to use open mpi profiling PMPI???"</a>
<li><strong>Previous message:</strong> <a href="3013.php">Ralph H Castain: "Re: [OMPI users] MPI_Comm_Spawn"</a>
<li><strong>In reply to:</strong> <a href="3012.php">pooja_at_[hidden]: "[OMPI users] Hi!! Can anybody tell me how to use open mpi profiling PMPI???"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3015.php">Durga Choudhury: "Re: [OMPI users] Hi!! Can anybody tell me how to use open mpi profiling PMPI???"</a>
<li><strong>Reply:</strong> <a href="3015.php">Durga Choudhury: "Re: [OMPI users] Hi!! Can anybody tell me how to use open mpi profiling PMPI???"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 4, 2007, at 11:12 AM, pooja_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; I want to see how profiling is done .I need to track open mpi _send  
</span><br>
<span class="quotelev1">&gt; command.
</span><br>
<span class="quotelev1">&gt; And so need to see how profiling is done.I dont know how to use  
</span><br>
<span class="quotelev1">&gt; PMPI_SEND.
</span><br>
<span class="quotelev1">&gt; Can anybody help me???
</span><br>
<p>Generally, you just write an MPI_Send function yourself, like this:
<br>
<p>my_send.c:
<br>
<p>include &quot;mpi.h&quot;
<br>
int MPI_Send(void *buf, int count, MPI_Datatype type, int dest,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int tag, MPI_Comm comm) {
<br>
&nbsp;&nbsp;&nbsp;int ret;
<br>
&nbsp;&nbsp;&nbsp;/* ...gather whatever statistics you want ... */
<br>
&nbsp;&nbsp;&nbsp;ret = PMPI_Send(buf, count, type, dest, tag, comm);
<br>
&nbsp;&nbsp;&nbsp;/* ...gather whatever statistics you want ... */
<br>
&nbsp;&nbsp;&nbsp;return ret;
<br>
}
<br>
<p>Then compile my_send.c into your application (either as a standalone  
<br>
library or as part of the application itself).  It'll naturally  
<br>
intercept all calls to MPI_Send (as long as it is the rightmost  
<br>
linker unit before -lmpi on the command line -- so, when using the  
<br>
wrapper compilers, the last linker unit on the right, since &quot;-lmpi&quot;  
<br>
is added automatically by the wrapper compilers), do your stats  
<br>
gathering, invoke the back-end PMPI function, etc.
<br>
<p>See chapter 8 of the MPI-1 standard for more information:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.mpi-forum.org/docs/mpi-11-html/node152.html#Node152">http://www.mpi-forum.org/docs/mpi-11-html/node152.html#Node152</a>
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3015.php">Durga Choudhury: "Re: [OMPI users] Hi!! Can anybody tell me how to use open mpi profiling PMPI???"</a>
<li><strong>Previous message:</strong> <a href="3013.php">Ralph H Castain: "Re: [OMPI users] MPI_Comm_Spawn"</a>
<li><strong>In reply to:</strong> <a href="3012.php">pooja_at_[hidden]: "[OMPI users] Hi!! Can anybody tell me how to use open mpi profiling PMPI???"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3015.php">Durga Choudhury: "Re: [OMPI users] Hi!! Can anybody tell me how to use open mpi profiling PMPI???"</a>
<li><strong>Reply:</strong> <a href="3015.php">Durga Choudhury: "Re: [OMPI users] Hi!! Can anybody tell me how to use open mpi profiling PMPI???"</a>
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
