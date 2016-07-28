<?
$subject_val = "Re: [OMPI users] MPI_Comm_split and intercommunicator - Problem";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 27 11:35:17 2012" -->
<!-- isoreceived="20120127163517" -->
<!-- sent="Fri, 27 Jan 2012 11:35:12 -0500" -->
<!-- isosent="20120127163512" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Comm_split and intercommunicator - Problem" -->
<!-- id="1D3E2193-35AE-45A9-A821-FDBABBFC69ED_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CABm3_qpmD31N83qd8d59M6Ytog_NY2qPX2vnV4ejuB1yZfmVgg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Comm_split and intercommunicator - Problem<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-27 11:35:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18302.php">Jeff Squyres: "Re: [OMPI users] MPI_AllGather null terminator character"</a>
<li><strong>Previous message:</strong> <a href="18300.php">Jeff Squyres: "Re: [OMPI users] pure static &quot;mpirun&quot; launcher"</a>
<li><strong>In reply to:</strong> <a href="18277.php">Rodrigo Oliveira: "Re: [OMPI users] MPI_Comm_split and intercommunicator - Problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18304.php">Rodrigo Silva Oliveira: "Re: [OMPI users] MPI_Comm_split and intercommunicator - Problem"</a>
<li><strong>Reply:</strong> <a href="18304.php">Rodrigo Silva Oliveira: "Re: [OMPI users] MPI_Comm_split and intercommunicator - Problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Unfortunately, I think that this is a known problem with INTERCOMM_MERGE and COMM_SPAWN parents and children:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/ticket/2904">https://svn.open-mpi.org/trac/ompi/ticket/2904</a>
<br>
<p><p>On Jan 26, 2012, at 12:11 PM, Rodrigo Oliveira wrote:
<br>
<p><span class="quotelev1">&gt; Hi there, I tried to understand the behavior Thatyene said and I think is a bug in open mpi implementation.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I do not know what exactly is happening because I am not an expert in ompi code, but I could see that when one process define its color as MPI_UNDEFINED, one of the processes on the inter-communicator blocks in the call to the function bellow:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /* Step 3: set up the communicator                           */
</span><br>
<span class="quotelev1">&gt;     /* --------------------------------------------------------- */
</span><br>
<span class="quotelev1">&gt;     /* Create the communicator finally */
</span><br>
<span class="quotelev1">&gt;     rc = ompi_comm_set ( &amp;newcomp,           /* new comm */
</span><br>
<span class="quotelev1">&gt;                          comm,               /* old comm */
</span><br>
<span class="quotelev1">&gt;                          my_size,            /* local_size */
</span><br>
<span class="quotelev1">&gt;                          lranks,             /* local_ranks */
</span><br>
<span class="quotelev1">&gt;                          my_rsize,           /* remote_size */
</span><br>
<span class="quotelev1">&gt;                          rranks,             /* remote_ranks */
</span><br>
<span class="quotelev1">&gt;                          NULL,               /* attrs */
</span><br>
<span class="quotelev1">&gt;                          comm-&gt;error_handler,/* error handler */
</span><br>
<span class="quotelev1">&gt;                          (pass_on_topo)?
</span><br>
<span class="quotelev1">&gt;                          (mca_base_component_t *)comm-&gt;c_topo_component:
</span><br>
<span class="quotelev1">&gt;                          NULL,               /* topo component */
</span><br>
<span class="quotelev1">&gt;                          NULL,               /* local group */
</span><br>
<span class="quotelev1">&gt;                          NULL                /* remote group */
</span><br>
<span class="quotelev1">&gt;     );
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This function is called inside ompi_comm_split, in the file ompi/communicator/comm.c
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is there a solution for this problem in some revision? I insist in this problem because I need to use this function for a similar purpose.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any idea?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Wed, Jan 25, 2012 at 4:50 PM, Thatyene Louise Alves de Souza Ramos &lt;thatyene_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; It seems the split is blocking when must return MPI_COMM_NULL, in the case I have one process with a color that does not exist in the other group or with the color = MPI_UNDEFINED.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Wed, Jan 25, 2012 at 4:28 PM, Rodrigo Oliveira &lt;rsilva.oliveira_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Hi Thatyene,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I took a look in your code and it seems to be logically correct. Maybe there is some problem when you call the split function having one client process with color = MPI_UNDEFINED. I understood you are trying to isolate one of the client process to do something applicable only to it, am I wrong? According to open mpi documentation, this function can be used to do that, but it is not working. Anyone have any idea about what can be?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best regards
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Rodrigo Oliveira
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18302.php">Jeff Squyres: "Re: [OMPI users] MPI_AllGather null terminator character"</a>
<li><strong>Previous message:</strong> <a href="18300.php">Jeff Squyres: "Re: [OMPI users] pure static &quot;mpirun&quot; launcher"</a>
<li><strong>In reply to:</strong> <a href="18277.php">Rodrigo Oliveira: "Re: [OMPI users] MPI_Comm_split and intercommunicator - Problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18304.php">Rodrigo Silva Oliveira: "Re: [OMPI users] MPI_Comm_split and intercommunicator - Problem"</a>
<li><strong>Reply:</strong> <a href="18304.php">Rodrigo Silva Oliveira: "Re: [OMPI users] MPI_Comm_split and intercommunicator - Problem"</a>
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
