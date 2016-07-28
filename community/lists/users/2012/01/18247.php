<?
$subject_val = "[OMPI users] MPI_Comm_split and intercommunicator - Problem";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 23 13:53:40 2012" -->
<!-- isoreceived="20120123185340" -->
<!-- sent="Mon, 23 Jan 2012 16:53:14 -0200" -->
<!-- isosent="20120123185314" -->
<!-- name="Thatyene Louise Alves de Souza Ramos" -->
<!-- email="thatyene_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_Comm_split and intercommunicator - Problem" -->
<!-- id="CAEyYoRo3VgdYrsqNYGthEs600ViHR33eksPbqi3Uhs5FExAgeQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] MPI_Comm_split and intercommunicator - Problem<br>
<strong>From:</strong> Thatyene Louise Alves de Souza Ramos (<em>thatyene_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-23 13:53:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18248.php">Ralph Castain: "Re: [OMPI users] localhost only"</a>
<li><strong>Previous message:</strong> <a href="18246.php">MM: "Re: [OMPI users] localhost only"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18272.php">Rodrigo Oliveira: "Re: [OMPI users] MPI_Comm_split and intercommunicator - Problem"</a>
<li><strong>Reply:</strong> <a href="18272.php">Rodrigo Oliveira: "Re: [OMPI users] MPI_Comm_split and intercommunicator - Problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi there!
<br>
<p>I've been trying to use the MPI_Comm_split function on an
<br>
intercommunicator, but I didn't have success. My application is very simple
<br>
and consists of a server that spawns 2 clients. After that, I want to split
<br>
the intercommunicator between the server and the clients so that one client
<br>
stay not connected with the server.
<br>
<p>The processes block in the split call and do not return. Can anyone help me?
<br>
<p>== Simplified server code ==
<br>
<p>int main( int argc, char *argv[] ) {
<br>
<p>MPI::Intracomm spawn_communicator = MPI::COMM_SELF;
<br>
MPI::Intercomm group1;
<br>
<p>MPI::Init(argc, argv);
<br>
group1 = spawn_client ( /* spawns 2 processes and returns the
<br>
intercommunicator with them */ );
<br>
&nbsp;/* Tryes to split the intercommunicator */
<br>
int color = 0;
<br>
&nbsp;MPI::Intercomm new_G1 = group1.Split(color, 0);
<br>
group1.Free();
<br>
group1 = new_G1;
<br>
<p>cout &lt;&lt; &quot;server after splitting- size G1 = &quot; &lt;&lt; group1.Get_remote_size() &lt;&lt;
<br>
endl &lt;&lt; endl;
<br>
MPI::Finalize();
<br>
&nbsp;return 0;
<br>
}
<br>
<p>== Simplified client code ==
<br>
<p>int main( int argc, char *argv[] ) {
<br>
<p>&nbsp;MPI::Intracomm group_communicator;
<br>
MPI::Intercomm parent;
<br>
int group_rank;
<br>
&nbsp;MPI::Init(argc, argv);
<br>
&nbsp;parent = MPI::Comm::Get_parent ();
<br>
group_communicator = MPI::COMM_WORLD;
<br>
group_rank = group_communicator.Get_rank();
<br>
&nbsp;if (group_rank == 0) {
<br>
color = 0;
<br>
&nbsp;}
<br>
else {
<br>
color = MPI_UNDEFINED;
<br>
&nbsp;}
<br>
&nbsp;MPI::Intercomm new_parent = parent.Split(color, inter_rank);
<br>
&nbsp;if (new_parent != MPI::COMM_NULL) {
<br>
parent.Free();
<br>
parent = new_parent;
<br>
&nbsp;}
<br>
&nbsp;group_communicator.Free();
<br>
&nbsp;parent.Free();
<br>
MPI::Finalize();
<br>
return 0;
<br>
}
<br>
<p>Thanks in advance.
<br>
<p>Thatyene Ramos
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18247/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18248.php">Ralph Castain: "Re: [OMPI users] localhost only"</a>
<li><strong>Previous message:</strong> <a href="18246.php">MM: "Re: [OMPI users] localhost only"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18272.php">Rodrigo Oliveira: "Re: [OMPI users] MPI_Comm_split and intercommunicator - Problem"</a>
<li><strong>Reply:</strong> <a href="18272.php">Rodrigo Oliveira: "Re: [OMPI users] MPI_Comm_split and intercommunicator - Problem"</a>
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
