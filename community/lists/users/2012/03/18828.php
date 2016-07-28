<?
$subject_val = "[OMPI users] SIGTERM propagation across MPI processes";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 22 18:49:58 2012" -->
<!-- isoreceived="20120322224958" -->
<!-- sent="Thu, 22 Mar 2012 19:49:53 -0300" -->
<!-- isosent="20120322224953" -->
<!-- name="J&#250;lio Hoffimann" -->
<!-- email="julio.hoffimann_at_[hidden]" -->
<!-- subject="[OMPI users] SIGTERM propagation across MPI processes" -->
<!-- id="CAFRVdT9CD94=c9SPf3RD-V+jx-77RKrG2fRgiidGVSf3hGfmJA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] SIGTERM propagation across MPI processes<br>
<strong>From:</strong> J&#250;lio Hoffimann (<em>julio.hoffimann_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-22 18:49:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18829.php">Ralph Castain: "Re: [OMPI users] SIGTERM propagation across MPI processes"</a>
<li><strong>Previous message:</strong> <a href="18827.php">Brock Palen: "Re: [OMPI users] MPI_Waitall hangs and querying"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18829.php">Ralph Castain: "Re: [OMPI users] SIGTERM propagation across MPI processes"</a>
<li><strong>Reply:</strong> <a href="18829.php">Ralph Castain: "Re: [OMPI users] SIGTERM propagation across MPI processes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear all,
<br>
<p>I'm trying to handle signals inside a MPI task farming model. Following is
<br>
a pseudo-code of what i'm trying to achieve:
<br>
<p>volatile sig_atomic_t unexpected_error_occurred = 0;
<br>
void my_handler( int sig ){
<br>
&nbsp;&nbsp;&nbsp;&nbsp;unexpected_error_occurred = 1;}
<br>
//// somewhere in the code...//
<br>
signal(SIGTERM, my_handler);
<br>
if (root process) {
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;// do stuff
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;if ( unexpected_error_occurred ) {
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// save something
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// reraise the SIGTERM again, but now with the default handler
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;signal(SIGTERM, SIG_DFL);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;raise(SIGTERM);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}}else { // slave process
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;// do different stuff
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;if ( unexpected_error_occurred ) {
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// just propragate the signal to the root
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;signal(SIGTERM, SIG_DFL);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;raise(SIGTERM);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}}
<br>
signal(SIGTERM, SIG_DFL);                       // reassign default handler
<br>
// continues the code...
<br>
<p><p>As can be seen, the signal handling is required for implementing a restart
<br>
feature. All the problem resides in the assumption i made that all
<br>
processes in the communicator will receive a SIGTERM as a side effect. Is
<br>
it a valid assumption? How the actual MPI implementation deals with such
<br>
scenarios?
<br>
<p>I also tried to replace all the raise() calls by MPI_Abort(), which
<br>
according to the documentation (
<br>
<a href="http://www.open-mpi.org/doc/v1.5/man3/MPI_Abort.3.php">http://www.open-mpi.org/doc/v1.5/man3/MPI_Abort.3.php</a>), sends a SIGTERM to
<br>
all associated processes. The undesired behaviour persists: when killing a
<br>
slave process, the save section in the root branch is not executed.
<br>
<p>Appreciate any help,
<br>
J&#250;lio.
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18828/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18829.php">Ralph Castain: "Re: [OMPI users] SIGTERM propagation across MPI processes"</a>
<li><strong>Previous message:</strong> <a href="18827.php">Brock Palen: "Re: [OMPI users] MPI_Waitall hangs and querying"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18829.php">Ralph Castain: "Re: [OMPI users] SIGTERM propagation across MPI processes"</a>
<li><strong>Reply:</strong> <a href="18829.php">Ralph Castain: "Re: [OMPI users] SIGTERM propagation across MPI processes"</a>
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
