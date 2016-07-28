<?
$subject_val = "Re: [OMPI users] Problem with MPI_Barrier (Inter-communicator)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr  5 11:55:31 2012" -->
<!-- isoreceived="20120405155531" -->
<!-- sent="Thu, 05 Apr 2012 10:55:25 -0500" -->
<!-- isosent="20120405155525" -->
<!-- name="Edgar Gabriel" -->
<!-- email="gabriel_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with MPI_Barrier (Inter-communicator)" -->
<!-- id="4F7DC06D.7070908_at_cs.uh.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAEyYoRoGEzRGDVQ4myEpkAGdqvdUaWEFgferajurFueDexF+ug_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2012-04-05 11:55:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18956.php">Reuti: "Re: [OMPI users] sge tight intregration leads to bad allocation"</a>
<li><strong>Previous message:</strong> <a href="18954.php">Eloi Gaudry: "Re: [OMPI users] sge tight intregration leads to bad allocation"</a>
<li><strong>In reply to:</strong> <a href="18943.php">Thatyene Louise Alves de Souza Ramos: "Re: [OMPI users] Problem with MPI_Barrier (Inter-communicator)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18960.php">Edgar Gabriel: "Re: [OMPI users] Problem with MPI_Barrier (Inter-communicator)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
can you please send me your testcode?
<br>
Thanks
<br>
Edgar
<br>
<p>On 4/4/2012 3:09 PM, Thatyene Louise Alves de Souza Ramos wrote:
<br>
<span class="quotelev1">&gt; Hi Edgar, thank you for the response.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Unfortunately, I've tried with and without this option. In both the
</span><br>
<span class="quotelev1">&gt; result was the same... =(
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Wed, Apr 4, 2012 at 5:04 PM, Edgar Gabriel &lt;gabriel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;mailto:gabriel_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     did you try to start the program with the --mca coll ^inter switch that
</span><br>
<span class="quotelev1">&gt;     I mentioned? Collective dup for intercommunicators should work, its
</span><br>
<span class="quotelev1">&gt;     probably again the bcast over a communicator of size 1 that is causing
</span><br>
<span class="quotelev1">&gt;     the hang, and you could avoid it with the flag that I mentioned above.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     Also, if you could attach your test code, that would help in hunting
</span><br>
<span class="quotelev1">&gt;     things down.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     Thanks
</span><br>
<span class="quotelev1">&gt;     Edgar
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     On 4/4/2012 2:18 PM, Thatyene Louise Alves de Souza Ramos wrote:
</span><br>
<span class="quotelev2">&gt;     &gt; Hi there.
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; I've made some tests related to the problem reported by Rodrigo. And I
</span><br>
<span class="quotelev2">&gt;     &gt; think, I'd rather be wrong, that /collective calls like Create and Dup
</span><br>
<span class="quotelev2">&gt;     &gt; do not work with Inter communicators. I've try this in the client
</span><br>
<span class="quotelev1">&gt;     group:/
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; *MPI::Intercomm tmp_inter_comm;*
</span><br>
<span class="quotelev2">&gt;     &gt; *
</span><br>
<span class="quotelev2">&gt;     &gt; *
</span><br>
<span class="quotelev2">&gt;     &gt; *tmp_inter_comm = server_comm.Create (server_comm.Get_group().Excl(1,
</span><br>
<span class="quotelev2">&gt;     &gt; &amp;rank));*
</span><br>
<span class="quotelev2">&gt;     &gt; *
</span><br>
<span class="quotelev2">&gt;     &gt; *
</span><br>
<span class="quotelev2">&gt;     &gt; *if(server_comm.Get_rank() != rank)*
</span><br>
<span class="quotelev2">&gt;     &gt; *server_comm = tmp_inter_comm.Dup();*
</span><br>
<span class="quotelev2">&gt;     &gt; *else*
</span><br>
<span class="quotelev2">&gt;     &gt; *server_comm = MPI::COMM_NULL;*
</span><br>
<span class="quotelev2">&gt;     &gt; *
</span><br>
<span class="quotelev2">&gt;     &gt; *
</span><br>
<span class="quotelev2">&gt;     &gt; The server_comm is the original inter communicator with the server
</span><br>
<span class="quotelev1">&gt;     group.
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; I've noticed that the program hangs in the Dup call. It seems that the
</span><br>
<span class="quotelev2">&gt;     &gt; tmp_inter_comm created without one process still has this process,
</span><br>
<span class="quotelev2">&gt;     &gt; because the other processes are waiting for it call the Dup too.
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; What do you think?
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; On Wed, Mar 28, 2012 at 6:03 PM, Edgar Gabriel &lt;gabriel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;     &lt;mailto:gabriel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;     &gt; &lt;mailto:gabriel_at_[hidden] &lt;mailto:gabriel_at_[hidden]&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt;     it just uses a different algorithm which avoids the bcast on a
</span><br>
<span class="quotelev2">&gt;     &gt;     communicator of 1 (which is causing the problem here).
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt;     Thanks
</span><br>
<span class="quotelev2">&gt;     &gt;     Edgar
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt;     On 3/28/2012 12:08 PM, Rodrigo Oliveira wrote:
</span><br>
<span class="quotelev3">&gt;     &gt;     &gt; Hi Edgar,
</span><br>
<span class="quotelev3">&gt;     &gt;     &gt;
</span><br>
<span class="quotelev3">&gt;     &gt;     &gt; I tested the execution of my code using the option -mca coll
</span><br>
<span class="quotelev1">&gt;     ^inter as
</span><br>
<span class="quotelev3">&gt;     &gt;     &gt; you suggested and the program worked fine, even when I use 1
</span><br>
<span class="quotelev1">&gt;     server
</span><br>
<span class="quotelev3">&gt;     &gt;     &gt; instance.
</span><br>
<span class="quotelev3">&gt;     &gt;     &gt;
</span><br>
<span class="quotelev3">&gt;     &gt;     &gt; What is the modification caused by this parameter? I did not
</span><br>
<span class="quotelev1">&gt;     find an
</span><br>
<span class="quotelev3">&gt;     &gt;     &gt; explanation about the utilization of the module coll inter.
</span><br>
<span class="quotelev3">&gt;     &gt;     &gt;
</span><br>
<span class="quotelev3">&gt;     &gt;     &gt; Thanks a lot for your attention and for the solution.
</span><br>
<span class="quotelev3">&gt;     &gt;     &gt;
</span><br>
<span class="quotelev3">&gt;     &gt;     &gt; Best regards,
</span><br>
<span class="quotelev3">&gt;     &gt;     &gt;
</span><br>
<span class="quotelev3">&gt;     &gt;     &gt; Rodrigo Oliveira
</span><br>
<span class="quotelev3">&gt;     &gt;     &gt;
</span><br>
<span class="quotelev3">&gt;     &gt;     &gt; On Tue, Mar 27, 2012 at 1:10 PM, Rodrigo Oliveira
</span><br>
<span class="quotelev3">&gt;     &gt;     &gt; &lt;rsilva.oliveira_at_[hidden]
</span><br>
<span class="quotelev1">&gt;     &lt;mailto:rsilva.oliveira_at_[hidden]&gt; &lt;mailto:rsilva.oliveira_at_[hidden]
</span><br>
<span class="quotelev1">&gt;     &lt;mailto:rsilva.oliveira_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev2">&gt;     &gt;     &lt;mailto:rsilva.oliveira_at_[hidden]
</span><br>
<span class="quotelev1">&gt;     &lt;mailto:rsilva.oliveira_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;     &gt;     &lt;mailto:rsilva.oliveira_at_[hidden]
</span><br>
<span class="quotelev1">&gt;     &lt;mailto:rsilva.oliveira_at_[hidden]&gt;&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;     &gt;     &gt;
</span><br>
<span class="quotelev3">&gt;     &gt;     &gt;
</span><br>
<span class="quotelev3">&gt;     &gt;     &gt;     Hi Edgar.
</span><br>
<span class="quotelev3">&gt;     &gt;     &gt;
</span><br>
<span class="quotelev3">&gt;     &gt;     &gt;     Thanks for the response. I just did not understand why
</span><br>
<span class="quotelev1">&gt;     the Barrier
</span><br>
<span class="quotelev3">&gt;     &gt;     &gt;     works before I remove one of the client processes.
</span><br>
<span class="quotelev3">&gt;     &gt;     &gt;
</span><br>
<span class="quotelev3">&gt;     &gt;     &gt;     I tryed it with 1 server and 3 clients and it worked
</span><br>
<span class="quotelev1">&gt;     properly.
</span><br>
<span class="quotelev2">&gt;     &gt;     After
</span><br>
<span class="quotelev3">&gt;     &gt;     &gt;     I removed 1 of the clients, it stops working. So, the
</span><br>
<span class="quotelev1">&gt;     removal is
</span><br>
<span class="quotelev3">&gt;     &gt;     &gt;     affecting the functionality of Barrier, I guess.
</span><br>
<span class="quotelev3">&gt;     &gt;     &gt;
</span><br>
<span class="quotelev3">&gt;     &gt;     &gt;     Anyone has an idea?
</span><br>
<span class="quotelev3">&gt;     &gt;     &gt;
</span><br>
<span class="quotelev3">&gt;     &gt;     &gt;
</span><br>
<span class="quotelev3">&gt;     &gt;     &gt;     On Mon, Mar 26, 2012 at 12:34 PM, Edgar Gabriel
</span><br>
<span class="quotelev2">&gt;     &gt;     &lt;gabriel_at_[hidden] &lt;mailto:gabriel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     &lt;mailto:gabriel_at_[hidden] &lt;mailto:gabriel_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt;     &gt;     &lt;mailto:gabriel_at_[hidden] &lt;mailto:gabriel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     &lt;mailto:gabriel_at_[hidden] &lt;mailto:gabriel_at_[hidden]&gt;&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;     &gt;     &gt;
</span><br>
<span class="quotelev3">&gt;     &gt;     &gt;         I do not recall on what the agreement was on how to
</span><br>
<span class="quotelev1">&gt;     treat
</span><br>
<span class="quotelev2">&gt;     &gt;     the size=1
</span><br>
<span class="quotelev3">&gt;     &gt;     &gt;
</span><br>
<span class="quotelev3">&gt;     &gt;     &gt;
</span><br>
<span class="quotelev3">&gt;     &gt;     &gt;
</span><br>
<span class="quotelev3">&gt;     &gt;     &gt;
</span><br>
<span class="quotelev3">&gt;     &gt;     &gt;
</span><br>
<span class="quotelev3">&gt;     &gt;     &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;     &gt;     &gt; users mailing list
</span><br>
<span class="quotelev3">&gt;     &gt;     &gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     &lt;mailto:users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt;     &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt;     _______________________________________________
</span><br>
<span class="quotelev2">&gt;     &gt;     users mailing list
</span><br>
<span class="quotelev2">&gt;     &gt;     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     &lt;mailto:users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev2">&gt;     &gt;     <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;     &gt; users mailing list
</span><br>
<span class="quotelev2">&gt;     &gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;     &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     --
</span><br>
<span class="quotelev1">&gt;     Edgar Gabriel
</span><br>
<span class="quotelev1">&gt;     Associate Professor
</span><br>
<span class="quotelev1">&gt;     Parallel Software Technologies Lab      <a href="http://pstl.cs.uh.edu">http://pstl.cs.uh.edu</a>
</span><br>
<span class="quotelev1">&gt;     Department of Computer Science          University of Houston
</span><br>
<span class="quotelev1">&gt;     Philip G. Hoffman Hall, Room 524        Houston, TX-77204, USA
</span><br>
<span class="quotelev1">&gt;     Tel: +1 (713) 743-3857 &lt;tel:%2B1%20%28713%29%20743-3857&gt;            
</span><br>
<span class="quotelev1">&gt;          Fax: +1 (713) 743-3335 &lt;tel:%2B1%20%28713%29%20743-3335&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     _______________________________________________
</span><br>
<span class="quotelev1">&gt;     users mailing list
</span><br>
<span class="quotelev1">&gt;     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18955/signature.asc">OpenPGP digital signature</a>
</ul>
<!-- attachment="signature.asc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18956.php">Reuti: "Re: [OMPI users] sge tight intregration leads to bad allocation"</a>
<li><strong>Previous message:</strong> <a href="18954.php">Eloi Gaudry: "Re: [OMPI users] sge tight intregration leads to bad allocation"</a>
<li><strong>In reply to:</strong> <a href="18943.php">Thatyene Louise Alves de Souza Ramos: "Re: [OMPI users] Problem with MPI_Barrier (Inter-communicator)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18960.php">Edgar Gabriel: "Re: [OMPI users] Problem with MPI_Barrier (Inter-communicator)"</a>
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
