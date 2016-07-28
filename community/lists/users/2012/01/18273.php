<?
$subject_val = "Re: [OMPI users] MPI_Comm_split and intercommunicator - Problem";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 25 13:50:36 2012" -->
<!-- isoreceived="20120125185036" -->
<!-- sent="Wed, 25 Jan 2012 16:50:11 -0200" -->
<!-- isosent="20120125185011" -->
<!-- name="Thatyene Louise Alves de Souza Ramos" -->
<!-- email="thatyene_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Comm_split and intercommunicator - Problem" -->
<!-- id="CAEyYoRrtUjy4JRkoZzoj4w6+BZOMGAHMrkiyyF2LUEcm7i9OYQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CABm3_qp6OTjhC2g3YYcwYiUTUda4syJ5wRo0WFrqf+1=O0io5Q_at_mail.gmail.com" -->
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
<strong>From:</strong> Thatyene Louise Alves de Souza Ramos (<em>thatyene_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-25 13:50:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18274.php">Mike Dubman: "Re: [OMPI users] Possible bug in finalize, OpenMPI v1.5, head revision"</a>
<li><strong>Previous message:</strong> <a href="18272.php">Rodrigo Oliveira: "Re: [OMPI users] MPI_Comm_split and intercommunicator - Problem"</a>
<li><strong>In reply to:</strong> <a href="18272.php">Rodrigo Oliveira: "Re: [OMPI users] MPI_Comm_split and intercommunicator - Problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18277.php">Rodrigo Oliveira: "Re: [OMPI users] MPI_Comm_split and intercommunicator - Problem"</a>
<li><strong>Reply:</strong> <a href="18277.php">Rodrigo Oliveira: "Re: [OMPI users] MPI_Comm_split and intercommunicator - Problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It seems the split is blocking when must return MPI_COMM_NULL, in the case
<br>
I have one process with a color that does not exist in the other group or
<br>
with the color = MPI_UNDEFINED.
<br>
<p>On Wed, Jan 25, 2012 at 4:28 PM, Rodrigo Oliveira &lt;rsilva.oliveira_at_[hidden]
<br>
<span class="quotelev1">&gt; wrote:
</span><br>
<p><span class="quotelev1">&gt; Hi Thatyene,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I took a look in your code and it seems to be logically correct. Maybe
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18273/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18274.php">Mike Dubman: "Re: [OMPI users] Possible bug in finalize, OpenMPI v1.5, head revision"</a>
<li><strong>Previous message:</strong> <a href="18272.php">Rodrigo Oliveira: "Re: [OMPI users] MPI_Comm_split and intercommunicator - Problem"</a>
<li><strong>In reply to:</strong> <a href="18272.php">Rodrigo Oliveira: "Re: [OMPI users] MPI_Comm_split and intercommunicator - Problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18277.php">Rodrigo Oliveira: "Re: [OMPI users] MPI_Comm_split and intercommunicator - Problem"</a>
<li><strong>Reply:</strong> <a href="18277.php">Rodrigo Oliveira: "Re: [OMPI users] MPI_Comm_split and intercommunicator - Problem"</a>
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
