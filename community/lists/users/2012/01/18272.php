<?
$subject_val = "Re: [OMPI users] MPI_Comm_split and intercommunicator - Problem";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 25 13:28:16 2012" -->
<!-- isoreceived="20120125182816" -->
<!-- sent="Wed, 25 Jan 2012 16:28:11 -0200" -->
<!-- isosent="20120125182811" -->
<!-- name="Rodrigo Oliveira" -->
<!-- email="rsilva.oliveira_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Comm_split and intercommunicator - Problem" -->
<!-- id="CABm3_qp6OTjhC2g3YYcwYiUTUda4syJ5wRo0WFrqf+1=O0io5Q_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAEyYoRo3VgdYrsqNYGthEs600ViHR33eksPbqi3Uhs5FExAgeQ_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2012-01-25 13:28:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18273.php">Thatyene Louise Alves de Souza Ramos: "Re: [OMPI users] MPI_Comm_split and intercommunicator - Problem"</a>
<li><strong>Previous message:</strong> <a href="18271.php">Jeff Squyres: "Re: [OMPI users] cannot call member function 'virtual void MPI::MPI::Datatype::Commit()' without an object"</a>
<li><strong>In reply to:</strong> <a href="18247.php">Thatyene Louise Alves de Souza Ramos: "[OMPI users] MPI_Comm_split and intercommunicator - Problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18273.php">Thatyene Louise Alves de Souza Ramos: "Re: [OMPI users] MPI_Comm_split and intercommunicator - Problem"</a>
<li><strong>Reply:</strong> <a href="18273.php">Thatyene Louise Alves de Souza Ramos: "Re: [OMPI users] MPI_Comm_split and intercommunicator - Problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Thatyene,
<br>
<p>I took a look in your code and it seems to be logically correct. Maybe
<br>
there is some problem when you call the split function having one client
<br>
process with color = MPI_UNDEFINED. I understood you are trying to isolate
<br>
one of the client process to do something applicable only to it, am I
<br>
wrong? According to open mpi documentation, this function can be used to do
<br>
that, but it is not working. Anyone have any idea about what can be?
<br>
<p>Best regards
<br>
<p>Rodrigo Oliveira
<br>
<p>On Mon, Jan 23, 2012 at 4:53 PM, Thatyene Louise Alves de Souza Ramos &lt;
<br>
thatyene_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi there!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've been trying to use the MPI_Comm_split function on an
</span><br>
<span class="quotelev1">&gt; intercommunicator, but I didn't have success. My application is very simple
</span><br>
<span class="quotelev1">&gt; and consists of a server that spawns 2 clients. After that, I want to split
</span><br>
<span class="quotelev1">&gt; the intercommunicator between the server and the clients so that one client
</span><br>
<span class="quotelev1">&gt; stay not connected with the server.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The processes block in the split call and do not return. Can anyone help
</span><br>
<span class="quotelev1">&gt; me?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; == Simplified server code ==
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int main( int argc, char *argv[] ) {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPI::Intracomm spawn_communicator = MPI::COMM_SELF;
</span><br>
<span class="quotelev1">&gt; MPI::Intercomm group1;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPI::Init(argc, argv);
</span><br>
<span class="quotelev1">&gt; group1 = spawn_client ( /* spawns 2 processes and returns the
</span><br>
<span class="quotelev1">&gt; intercommunicator with them */ );
</span><br>
<span class="quotelev1">&gt;  /* Tryes to split the intercommunicator */
</span><br>
<span class="quotelev1">&gt; int color = 0;
</span><br>
<span class="quotelev1">&gt;  MPI::Intercomm new_G1 = group1.Split(color, 0);
</span><br>
<span class="quotelev1">&gt; group1.Free();
</span><br>
<span class="quotelev1">&gt; group1 = new_G1;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; cout &lt;&lt; &quot;server after splitting- size G1 = &quot; &lt;&lt; group1.Get_remote_size()
</span><br>
<span class="quotelev1">&gt; &lt;&lt; endl &lt;&lt; endl;
</span><br>
<span class="quotelev1">&gt; MPI::Finalize();
</span><br>
<span class="quotelev1">&gt;  return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; == Simplified client code ==
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int main( int argc, char *argv[] ) {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  MPI::Intracomm group_communicator;
</span><br>
<span class="quotelev1">&gt; MPI::Intercomm parent;
</span><br>
<span class="quotelev1">&gt; int group_rank;
</span><br>
<span class="quotelev1">&gt;  MPI::Init(argc, argv);
</span><br>
<span class="quotelev1">&gt;  parent = MPI::Comm::Get_parent ();
</span><br>
<span class="quotelev1">&gt; group_communicator = MPI::COMM_WORLD;
</span><br>
<span class="quotelev1">&gt;  group_rank = group_communicator.Get_rank();
</span><br>
<span class="quotelev1">&gt;  if (group_rank == 0) {
</span><br>
<span class="quotelev1">&gt; color = 0;
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt; else {
</span><br>
<span class="quotelev1">&gt; color = MPI_UNDEFINED;
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;  MPI::Intercomm new_parent = parent.Split(color, inter_rank);
</span><br>
<span class="quotelev1">&gt;  if (new_parent != MPI::COMM_NULL) {
</span><br>
<span class="quotelev1">&gt; parent.Free();
</span><br>
<span class="quotelev1">&gt; parent = new_parent;
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;  group_communicator.Free();
</span><br>
<span class="quotelev1">&gt;  parent.Free();
</span><br>
<span class="quotelev1">&gt; MPI::Finalize();
</span><br>
<span class="quotelev1">&gt; return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks in advance.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thatyene Ramos
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18272/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18273.php">Thatyene Louise Alves de Souza Ramos: "Re: [OMPI users] MPI_Comm_split and intercommunicator - Problem"</a>
<li><strong>Previous message:</strong> <a href="18271.php">Jeff Squyres: "Re: [OMPI users] cannot call member function 'virtual void MPI::MPI::Datatype::Commit()' without an object"</a>
<li><strong>In reply to:</strong> <a href="18247.php">Thatyene Louise Alves de Souza Ramos: "[OMPI users] MPI_Comm_split and intercommunicator - Problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18273.php">Thatyene Louise Alves de Souza Ramos: "Re: [OMPI users] MPI_Comm_split and intercommunicator - Problem"</a>
<li><strong>Reply:</strong> <a href="18273.php">Thatyene Louise Alves de Souza Ramos: "Re: [OMPI users] MPI_Comm_split and intercommunicator - Problem"</a>
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
