<?
$subject_val = "Re: [OMPI users] MPI_Comm_split and intercommunicator - Problem";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 26 12:11:30 2012" -->
<!-- isoreceived="20120126171130" -->
<!-- sent="Thu, 26 Jan 2012 15:11:25 -0200" -->
<!-- isosent="20120126171125" -->
<!-- name="Rodrigo Oliveira" -->
<!-- email="rsilva.oliveira_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Comm_split and intercommunicator - Problem" -->
<!-- id="CABm3_qpmD31N83qd8d59M6Ytog_NY2qPX2vnV4ejuB1yZfmVgg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAEyYoRrtUjy4JRkoZzoj4w6+BZOMGAHMrkiyyF2LUEcm7i9OYQ_at_mail.gmail.com" -->
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
<strong>From:</strong> Rodrigo Oliveira (<em>rsilva.oliveira_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-26 12:11:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18278.php">Frank: "[OMPI users] How to determine MPI rank/process number local to a socket/node"</a>
<li><strong>Previous message:</strong> <a href="18276.php">Brett Tully: "Re: [OMPI users] MPI_Allgather problem"</a>
<li><strong>In reply to:</strong> <a href="18273.php">Thatyene Louise Alves de Souza Ramos: "Re: [OMPI users] MPI_Comm_split and intercommunicator - Problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18301.php">Jeff Squyres: "Re: [OMPI users] MPI_Comm_split and intercommunicator - Problem"</a>
<li><strong>Reply:</strong> <a href="18301.php">Jeff Squyres: "Re: [OMPI users] MPI_Comm_split and intercommunicator - Problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi there, I tried to understand the behavior Thatyene said and I think is a
<br>
bug in open mpi implementation.
<br>
<p>I do not know what exactly is happening because I am not an expert in ompi
<br>
code, but I could see that when one process define its color as *
<br>
MPI_UNDEFINED*, one of the processes on the inter-communicator blocks in
<br>
the call to the function bellow:
<br>
<p>/* Step 3: set up the communicator                           */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;/* --------------------------------------------------------- */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;/* Create the communicator finally */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;rc = ompi_comm_set ( &amp;newcomp,           /* new comm */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;comm,               /* old comm */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;my_size,            /* local_size */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;lranks,             /* local_ranks */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;my_rsize,           /* remote_size */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rranks,             /* remote_ranks */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NULL,               /* attrs */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;comm-&gt;error_handler,/* error handler */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(pass_on_topo)?
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(mca_base_component_t *)comm-&gt;c_topo_component:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NULL,               /* topo component */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NULL,               /* local group */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NULL                /* remote group */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;);
<br>
<p>This function is called inside *ompi_comm_split*, in the file *
<br>
ompi/communicator/comm.c*
<br>
*
<br>
*
<br>
Is there a solution for this problem in some revision? I insist in this
<br>
problem because I need to use this function for a similar purpose.
<br>
<p>Any idea?
<br>
<p><p>On Wed, Jan 25, 2012 at 4:50 PM, Thatyene Louise Alves de Souza Ramos &lt;
<br>
thatyene_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; It seems the split is blocking when must return MPI_COMM_NULL, in the case
</span><br>
<span class="quotelev1">&gt; I have one process with a color that does not exist in the other group or
</span><br>
<span class="quotelev1">&gt; with the color = MPI_UNDEFINED.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, Jan 25, 2012 at 4:28 PM, Rodrigo Oliveira &lt;
</span><br>
<span class="quotelev1">&gt; rsilva.oliveira_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi Thatyene,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I took a look in your code and it seems to be logically correct. Maybe
</span><br>
<span class="quotelev2">&gt;&gt; there is some problem when you call the split function having one client
</span><br>
<span class="quotelev2">&gt;&gt; process with color = MPI_UNDEFINED. I understood you are trying to isolate
</span><br>
<span class="quotelev2">&gt;&gt; one of the client process to do something applicable only to it, am I
</span><br>
<span class="quotelev2">&gt;&gt; wrong? According to open mpi documentation, this function can be used to do
</span><br>
<span class="quotelev2">&gt;&gt; that, but it is not working. Anyone have any idea about what can be?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Best regards
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Rodrigo Oliveira
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18277/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18278.php">Frank: "[OMPI users] How to determine MPI rank/process number local to a socket/node"</a>
<li><strong>Previous message:</strong> <a href="18276.php">Brett Tully: "Re: [OMPI users] MPI_Allgather problem"</a>
<li><strong>In reply to:</strong> <a href="18273.php">Thatyene Louise Alves de Souza Ramos: "Re: [OMPI users] MPI_Comm_split and intercommunicator - Problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18301.php">Jeff Squyres: "Re: [OMPI users] MPI_Comm_split and intercommunicator - Problem"</a>
<li><strong>Reply:</strong> <a href="18301.php">Jeff Squyres: "Re: [OMPI users] MPI_Comm_split and intercommunicator - Problem"</a>
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
