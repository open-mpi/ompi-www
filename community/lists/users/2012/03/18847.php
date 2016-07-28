<?
$subject_val = "Re: [OMPI users] Problem with MPI_Barrier (Inter-communicator)";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 26 11:34:15 2012" -->
<!-- isoreceived="20120326153415" -->
<!-- sent="Mon, 26 Mar 2012 10:34:09 -0500" -->
<!-- isosent="20120326153409" -->
<!-- name="Edgar Gabriel" -->
<!-- email="gabriel_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with MPI_Barrier (Inter-communicator)" -->
<!-- id="4F708C71.5010303_at_cs.uh.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CABm3_qoAL-n-WYPuETup-Z87e2CJpTA4xbSeJbMNgP0PmzOJYg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem with MPI_Barrier (Inter-communicator)<br>
<strong>From:</strong> Edgar Gabriel (<em>gabriel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-26 11:34:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18848.php">Grzegorz Maj: "[OMPI users] MPI daemon died unexpectedly"</a>
<li><strong>Previous message:</strong> <a href="18846.php">Tom Bryan: "Re: [OMPI users] How to check that open MPI installed and work correctly"</a>
<li><strong>In reply to:</strong> <a href="18844.php">Rodrigo Oliveira: "Re: [OMPI users] Problem with MPI_Barrier (Inter-communicator)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18852.php">Rodrigo Oliveira: "Re: [OMPI users] Problem with MPI_Barrier (Inter-communicator)"</a>
<li><strong>Reply:</strong> <a href="18852.php">Rodrigo Oliveira: "Re: [OMPI users] Problem with MPI_Barrier (Inter-communicator)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
yes and no,. So first, here is a quick fix for you: if you start the
<br>
server using
<br>
<p>mpirun -np 2 -mca coll ^inter ./server
<br>
<p>your test code finishes (with one minor modification to your code,
<br>
namely the process that is being excluded on the client side does need a
<br>
condition to leave the while loop as well.).
<br>
<p>That being said, here is what the problem seems to be when using the
<br>
inter communicator module. The inter-comm barrier is handled initially
<br>
by the basic module, and is implemented by calling an allreduce
<br>
operation. The inter-communicator allreduce  per default uses the
<br>
implementation in the inter module, as a sequence of intra-reduce on the
<br>
local communicator, a point-to-point exchange of the results of the two
<br>
local groups by the local root processes (rank zero in the local groups
<br>
of the intercomm), and a broadcast of the results on the local group.
<br>
And it is this very last step that we are hanging.
<br>
<p>So bottom line, the intra-communicator broadcast for a communicator size
<br>
of 1 is hanging, as far as I can see independent of whether we use tuned
<br>
or basic.
<br>
<p>I do not recall on what the agreement was on how to treat the size=1
<br>
scenarios in coll. Looking at the routine in tuned ( e.g.
<br>
ompi_coll_tuned_bcast_intra_generic ) there is a statement which clearly
<br>
indicates that it should not be used for 1 proc
<br>
<p>assert(size&gt;1)
<br>
<p>but I do not recall on which module or what the agreement was on how
<br>
that was supposed to be treated correctly. I am also no sure why the
<br>
bcast on 1 proc works on the server side but does not on the client
<br>
side. That's where I stand right now in the analysis.
<br>
<p><p>Thanks
<br>
Edgar
<br>
<p>On 3/26/2012 8:39 AM, Rodrigo Oliveira wrote:
<br>
<span class="quotelev1">&gt; Hi Edgar, 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Did you take a look at my code? Any idea about what is happening? I did
</span><br>
<span class="quotelev1">&gt; a lot of tests and it does not work.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Tue, Mar 20, 2012 at 3:43 PM, Rodrigo Oliveira
</span><br>
<span class="quotelev1">&gt; &lt;rsilva.oliveira_at_[hidden] &lt;mailto:rsilva.oliveira_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     The command I use to compile and run is:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     mpic++ server.cc -o server &amp;&amp; mpic++ client.cc -o client &amp;&amp; mpirun
</span><br>
<span class="quotelev1">&gt;     -np 1 ./server
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     Rodrigo
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     On Tue, Mar 20, 2012 at 3:40 PM, Rodrigo Oliveira
</span><br>
<span class="quotelev1">&gt;     &lt;rsilva.oliveira_at_[hidden] &lt;mailto:rsilva.oliveira_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         Hi Edgar.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         Thanks for the response. The simplified code is attached:
</span><br>
<span class="quotelev1">&gt;         server, client and a .h containing some constants. I put some
</span><br>
<span class="quotelev1">&gt;         &quot;prints&quot; to show the behavior.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         Regards
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         Rodrigo
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         On Tue, Mar 20, 2012 at 11:47 AM, Edgar Gabriel
</span><br>
<span class="quotelev1">&gt;         &lt;gabriel_at_[hidden] &lt;mailto:gabriel_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             do you have by any chance the actual or a small reproducer?
</span><br>
<span class="quotelev1">&gt;             It might be
</span><br>
<span class="quotelev1">&gt;             much easier to hunt the problem down...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             Thanks
</span><br>
<span class="quotelev1">&gt;             Edgar
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             On 3/19/2012 8:12 PM, Rodrigo Oliveira wrote:
</span><br>
<span class="quotelev2">&gt;             &gt; Hi there.
</span><br>
<span class="quotelev2">&gt;             &gt;
</span><br>
<span class="quotelev2">&gt;             &gt; I am facing a very strange problem when using MPI_Barrier
</span><br>
<span class="quotelev1">&gt;             over an
</span><br>
<span class="quotelev2">&gt;             &gt; inter-communicator after some operations I describe bellow:
</span><br>
<span class="quotelev2">&gt;             &gt;
</span><br>
<span class="quotelev2">&gt;             &gt; 1) I start a server calling mpirun.
</span><br>
<span class="quotelev2">&gt;             &gt; 2) The server spawns 2 copies of a client using
</span><br>
<span class="quotelev1">&gt;             MPI_Comm_spawn, creating
</span><br>
<span class="quotelev2">&gt;             &gt; an inter-communicator between the two groups. The server
</span><br>
<span class="quotelev1">&gt;             group with 1
</span><br>
<span class="quotelev2">&gt;             &gt; process (lets name it as A) and the client group with 2
</span><br>
<span class="quotelev1">&gt;             processes (group B).
</span><br>
<span class="quotelev2">&gt;             &gt; 3) After that, I need to detach one of the processes (rank
</span><br>
<span class="quotelev1">&gt;             0) in group B
</span><br>
<span class="quotelev2">&gt;             &gt; from the inter-communicator AB. To do that I do the
</span><br>
<span class="quotelev1">&gt;             following steps:
</span><br>
<span class="quotelev2">&gt;             &gt;
</span><br>
<span class="quotelev2">&gt;             &gt; Server side:
</span><br>
<span class="quotelev2">&gt;             &gt;         .....
</span><br>
<span class="quotelev2">&gt;             &gt;         tmp_inter_comm = client_comm.Create (
</span><br>
<span class="quotelev1">&gt;             client_comm.Get_group ( ) );
</span><br>
<span class="quotelev2">&gt;             &gt; client_comm.Free ( );
</span><br>
<span class="quotelev2">&gt;             &gt; client_comm = tmp_inter_comm;
</span><br>
<span class="quotelev2">&gt;             &gt;         .....
</span><br>
<span class="quotelev2">&gt;             &gt;         client_comm.Barrier();
</span><br>
<span class="quotelev2">&gt;             &gt;         .....
</span><br>
<span class="quotelev2">&gt;             &gt;
</span><br>
<span class="quotelev2">&gt;             &gt; Client side:
</span><br>
<span class="quotelev2">&gt;             &gt;         ....
</span><br>
<span class="quotelev2">&gt;             &gt;         rank = 0;
</span><br>
<span class="quotelev2">&gt;             &gt;         tmp_inter_comm = server_comm.Create (
</span><br>
<span class="quotelev1">&gt;             server_comm.Get_group (
</span><br>
<span class="quotelev2">&gt;             &gt; ).Excl ( 1, &amp;rank ) );
</span><br>
<span class="quotelev2">&gt;             &gt; server_comm.Free ( );
</span><br>
<span class="quotelev2">&gt;             &gt; server_comm = tmp_inter_comm;
</span><br>
<span class="quotelev2">&gt;             &gt;         .....
</span><br>
<span class="quotelev2">&gt;             &gt;         if (server_comm != MPI::COMM_NULL)
</span><br>
<span class="quotelev2">&gt;             &gt;             server_comm.Barrier();
</span><br>
<span class="quotelev2">&gt;             &gt;
</span><br>
<span class="quotelev2">&gt;             &gt;
</span><br>
<span class="quotelev2">&gt;             &gt; The problem: everything works fine until the call to
</span><br>
<span class="quotelev1">&gt;             Barrier. In that
</span><br>
<span class="quotelev2">&gt;             &gt; point, the server exits the barrier, but the client at the
</span><br>
<span class="quotelev1">&gt;             group B does
</span><br>
<span class="quotelev2">&gt;             &gt; not. Observe that we have only one process inside B,
</span><br>
<span class="quotelev1">&gt;             because I used Excl
</span><br>
<span class="quotelev2">&gt;             &gt; to remove one process from the original group.
</span><br>
<span class="quotelev2">&gt;             &gt;
</span><br>
<span class="quotelev2">&gt;             &gt; p.s.: This occurs in the version 1.5.4 and the C++ API.
</span><br>
<span class="quotelev2">&gt;             &gt;
</span><br>
<span class="quotelev2">&gt;             &gt; I am very concerned about this problem because this
</span><br>
<span class="quotelev1">&gt;             solution plays a
</span><br>
<span class="quotelev2">&gt;             &gt; very important role in my master thesis.
</span><br>
<span class="quotelev2">&gt;             &gt;
</span><br>
<span class="quotelev2">&gt;             &gt; Is this an ompi problem or am I doing something wrong?
</span><br>
<span class="quotelev2">&gt;             &gt;
</span><br>
<span class="quotelev2">&gt;             &gt; Thanks in advance
</span><br>
<span class="quotelev2">&gt;             &gt;
</span><br>
<span class="quotelev2">&gt;             &gt; Rodrigo Oliveira
</span><br>
<span class="quotelev2">&gt;             &gt;
</span><br>
<span class="quotelev2">&gt;             &gt;
</span><br>
<span class="quotelev2">&gt;             &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;             &gt; users mailing list
</span><br>
<span class="quotelev2">&gt;             &gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;             &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             _______________________________________________
</span><br>
<span class="quotelev1">&gt;             users mailing list
</span><br>
<span class="quotelev1">&gt;             users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;             <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
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
<p><pre>
-- 
Edgar Gabriel
Associate Professor
Parallel Software Technologies Lab      <a href="http://pstl.cs.uh.edu">http://pstl.cs.uh.edu</a>
Department of Computer Science          University of Houston
Philip G. Hoffman Hall, Room 524        Houston, TX-77204, USA
Tel: +1 (713) 743-3857                  Fax: +1 (713) 743-3335

</pre>
<hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18847/signature.asc">OpenPGP digital signature</a>
</ul>
<!-- attachment="signature.asc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18848.php">Grzegorz Maj: "[OMPI users] MPI daemon died unexpectedly"</a>
<li><strong>Previous message:</strong> <a href="18846.php">Tom Bryan: "Re: [OMPI users] How to check that open MPI installed and work correctly"</a>
<li><strong>In reply to:</strong> <a href="18844.php">Rodrigo Oliveira: "Re: [OMPI users] Problem with MPI_Barrier (Inter-communicator)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18852.php">Rodrigo Oliveira: "Re: [OMPI users] Problem with MPI_Barrier (Inter-communicator)"</a>
<li><strong>Reply:</strong> <a href="18852.php">Rodrigo Oliveira: "Re: [OMPI users] Problem with MPI_Barrier (Inter-communicator)"</a>
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
