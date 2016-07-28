<?
$subject_val = "Re: [OMPI users] MPI_Comm_split and intercommunicator - Problem";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 27 14:00:40 2012" -->
<!-- isoreceived="20120127190040" -->
<!-- sent="Fri, 27 Jan 2012 17:00:34 -0200" -->
<!-- isosent="20120127190034" -->
<!-- name="Rodrigo Silva Oliveira" -->
<!-- email="rsilva_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Comm_split and intercommunicator - Problem" -->
<!-- id="CABm3_qrtQ7NoKMT9ngV_kPHfPRW-d64qxwe0BRM8L_S8LvNZXQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1D3E2193-35AE-45A9-A821-FDBABBFC69ED_at_cisco.com" -->
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
<strong>From:</strong> Rodrigo Silva Oliveira (<em>rsilva_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-27 14:00:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18305.php">Tom Bryan: "[OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<li><strong>Previous message:</strong> <a href="18303.php">Jeff Squyres: "Re: [OMPI users] pure static &quot;mpirun&quot; launcher"</a>
<li><strong>In reply to:</strong> <a href="18301.php">Jeff Squyres: "Re: [OMPI users] MPI_Comm_split and intercommunicator - Problem"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hy Jeff, thanks for replying.
<br>
<p>Does it mean that you don't have it working properly yet? I read the thread
<br>
at the devel list where you addressed the problem and a possible solution,
<br>
but I was not able to find a conclusion about the problem.
<br>
<p>I'm in trouble without this function. Probably I'll need to redesign all my
<br>
implementation to achieve what I need.
<br>
<p><p>On Fri, Jan 27, 2012 at 2:35 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Unfortunately, I think that this is a known problem with INTERCOMM_MERGE
</span><br>
<span class="quotelev1">&gt; and COMM_SPAWN parents and children:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    <a href="https://svn.open-mpi.org/trac/ompi/ticket/2904">https://svn.open-mpi.org/trac/ompi/ticket/2904</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 26, 2012, at 12:11 PM, Rodrigo Oliveira wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi there, I tried to understand the behavior Thatyene said and I think
</span><br>
<span class="quotelev1">&gt; is a bug in open mpi implementation.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I do not know what exactly is happening because I am not an expert in
</span><br>
<span class="quotelev1">&gt; ompi code, but I could see that when one process define its color as
</span><br>
<span class="quotelev1">&gt; MPI_UNDEFINED, one of the processes on the inter-communicator blocks in the
</span><br>
<span class="quotelev1">&gt; call to the function bellow:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; /* Step 3: set up the communicator                           */
</span><br>
<span class="quotelev2">&gt; &gt;     /* --------------------------------------------------------- */
</span><br>
<span class="quotelev2">&gt; &gt;     /* Create the communicator finally */
</span><br>
<span class="quotelev2">&gt; &gt;     rc = ompi_comm_set ( &amp;newcomp,           /* new comm */
</span><br>
<span class="quotelev2">&gt; &gt;                          comm,               /* old comm */
</span><br>
<span class="quotelev2">&gt; &gt;                          my_size,            /* local_size */
</span><br>
<span class="quotelev2">&gt; &gt;                          lranks,             /* local_ranks */
</span><br>
<span class="quotelev2">&gt; &gt;                          my_rsize,           /* remote_size */
</span><br>
<span class="quotelev2">&gt; &gt;                          rranks,             /* remote_ranks */
</span><br>
<span class="quotelev2">&gt; &gt;                          NULL,               /* attrs */
</span><br>
<span class="quotelev2">&gt; &gt;                          comm-&gt;error_handler,/* error handler */
</span><br>
<span class="quotelev2">&gt; &gt;                          (pass_on_topo)?
</span><br>
<span class="quotelev2">&gt; &gt;                          (mca_base_component_t *)comm-&gt;c_topo_component:
</span><br>
<span class="quotelev2">&gt; &gt;                          NULL,               /* topo component */
</span><br>
<span class="quotelev2">&gt; &gt;                          NULL,               /* local group */
</span><br>
<span class="quotelev2">&gt; &gt;                          NULL                /* remote group */
</span><br>
<span class="quotelev2">&gt; &gt;     );
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; This function is called inside ompi_comm_split, in the file
</span><br>
<span class="quotelev1">&gt; ompi/communicator/comm.c
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Is there a solution for this problem in some revision? I insist in this
</span><br>
<span class="quotelev1">&gt; problem because I need to use this function for a similar purpose.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Any idea?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Wed, Jan 25, 2012 at 4:50 PM, Thatyene Louise Alves de Souza Ramos &lt;
</span><br>
<span class="quotelev1">&gt; thatyene_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; It seems the split is blocking when must return MPI_COMM_NULL, in the
</span><br>
<span class="quotelev1">&gt; case I have one process with a color that does not exist in the other group
</span><br>
<span class="quotelev1">&gt; or with the color = MPI_UNDEFINED.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Wed, Jan 25, 2012 at 4:28 PM, Rodrigo Oliveira &lt;
</span><br>
<span class="quotelev1">&gt; rsilva.oliveira_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hi Thatyene,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I took a look in your code and it seems to be logically correct. Maybe
</span><br>
<span class="quotelev1">&gt; there is some problem when you call the split function having one client
</span><br>
<span class="quotelev1">&gt; process with color = MPI_UNDEFINED. I understood you are trying to isolate
</span><br>
<span class="quotelev1">&gt; one of the client process to do something applicable only to it, am I
</span><br>
<span class="quotelev1">&gt; wrong? According to open mpi documentation, this function can be used to do
</span><br>
<span class="quotelev1">&gt; that, but it is not working. Anyone have any idea about what can be?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Best regards
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Rodrigo Oliveira
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18304/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18305.php">Tom Bryan: "[OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<li><strong>Previous message:</strong> <a href="18303.php">Jeff Squyres: "Re: [OMPI users] pure static &quot;mpirun&quot; launcher"</a>
<li><strong>In reply to:</strong> <a href="18301.php">Jeff Squyres: "Re: [OMPI users] MPI_Comm_split and intercommunicator - Problem"</a>
<!-- nextthread="start" -->
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
