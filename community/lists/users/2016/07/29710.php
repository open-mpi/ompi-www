<?
$subject_val = "[OMPI users] ::: Possible bug in Dynamic Process Management (MPI_Comm_accept) in open-mpi 2.0.0";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 26 19:16:12 2016" -->
<!-- isoreceived="20160726231612" -->
<!-- sent="Tue, 26 Jul 2016 16:15:51 -0700" -->
<!-- isosent="20160726231551" -->
<!-- name="SayedHadi Hashemi" -->
<!-- email="info_at_[hidden]" -->
<!-- subject="[OMPI users] ::: Possible bug in Dynamic Process Management (MPI_Comm_accept) in open-mpi 2.0.0" -->
<!-- id="CAC5S3yw19A1jO4tdfPrTETPs=p4KJAJQb_P6sgk7My97LuQHpQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] ::: Possible bug in Dynamic Process Management (MPI_Comm_accept) in open-mpi 2.0.0<br>
<strong>From:</strong> SayedHadi Hashemi (<em>info_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-07-26 19:15:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29711.php">Jeff Squyres (jsquyres): "[OMPI users] This list is suspended while migrating"</a>
<li><strong>Previous message:</strong> <a href="29709.php">MM: "Re: [OMPI users] scatter/gather, tcp, 3 nodes, homogeneous, # RAM"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm trying to run this simple code to
<br>
<p>***
<br>
#include &lt;mpi.h&gt;
<br>
<p>int main(){
<br>
&nbsp;&nbsp;char port_name[MPI_MAX_PORT_NAME];
<br>
&nbsp;&nbsp;int provided;
<br>
&nbsp;&nbsp;int thread_level = MPI_THREAD_MULTIPLE;
<br>
&nbsp;&nbsp;MPI_Comm inter_comm;
<br>
<p>&nbsp;&nbsp;MPI_Init_thread(0, 0, thread_level, &amp;provided);
<br>
&nbsp;&nbsp;MPI_Open_port(MPI_INFO_NULL, port_name);
<br>
&nbsp;&nbsp;MPI_Comm_accept(port_name, MPI_INFO_NULL, 0, MPI_COMM_SELF, &amp;inter_comm);
<br>
<p>&nbsp;&nbsp;// Code never reach here.
<br>
&nbsp;&nbsp;MPI_Comm_disconnect(&amp;inter_comm);
<br>
&nbsp;&nbsp;MPI_Close_port(port_name);
<br>
&nbsp;&nbsp;MPI_Finalize();
<br>
&nbsp;&nbsp;return 0;
<br>
}
<br>
<p>***
<br>
<p>The code is run with the following command.
<br>
***
<br>
<span class="quotelev1">&gt; mpic++ server.cc
</span><br>
<span class="quotelev1">&gt; mpiexec -mp ./a.out
</span><br>
***
<br>
<p>Unfortunately it is crashed immediately after start with the following
<br>
error message.
<br>
****
<br>
$ mpiexec -np 1 ./a.out
<br>
[myhost:32527] OPAL ERROR: Timeout in file base/pmix_base_fns.c at line 195
<br>
[myhost:32527] *** An error occurred in MPI_Comm_accept
<br>
[myhost:32527] *** reported by process [776667137,0]
<br>
[myhost:32527] *** on communicator MPI_COMM_SELF
<br>
[myhost:32527] *** MPI_ERR_UNKNOWN: unknown error
<br>
[myhost:32527] *** MPI_ERRORS_ARE_FATAL (processes in this communicator
<br>
will now abort,
<br>
[myhost:32527] ***    and potentially your MPI job)
<br>
***
<br>
The code works just find on previous versions of open-mpi (1.10.x, 1.8.x)
<br>
and (MPICH).
<br>
<p>I've compile the open-mpi myself with both default configuration and the
<br>
following:
<br>
***
<br>
<span class="quotelev1">&gt; ./configure --enable-mpi-thread-multiple
</span><br>
***
<br>
<p>Any suggestion?
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29710/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29711.php">Jeff Squyres (jsquyres): "[OMPI users] This list is suspended while migrating"</a>
<li><strong>Previous message:</strong> <a href="29709.php">MM: "Re: [OMPI users] scatter/gather, tcp, 3 nodes, homogeneous, # RAM"</a>
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
