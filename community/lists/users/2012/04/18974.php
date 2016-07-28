<?
$subject_val = "Re: [OMPI users] Problem with MPI_Barrier (Inter-communicator)";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr  9 19:04:55 2012" -->
<!-- isoreceived="20120409230455" -->
<!-- sent="Mon, 9 Apr 2012 20:04:29 -0300" -->
<!-- isosent="20120409230429" -->
<!-- name="Thatyene Louise Alves de Souza Ramos" -->
<!-- email="thatyene_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with MPI_Barrier (Inter-communicator)" -->
<!-- id="CAEyYoRqyQe5G_qjWPWA4cir5kGPbAyELno+S8SvX1URBd4amAw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAEyYoRqLAGHta7f8MjUbdatSOEn0otur8XYyqAR25AOxVpmadg_at_mail.gmail.com" -->
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
<strong>From:</strong> Thatyene Louise Alves de Souza Ramos (<em>thatyene_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-09 19:04:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18975.php">Reuti: "Re: [OMPI users] sge tight intregration leads to bad allocation"</a>
<li><strong>Previous message:</strong> <a href="18973.php">Thatyene Louise Alves de Souza Ramos: "Re: [OMPI users] Problem with MPI_Barrier (Inter-communicator)"</a>
<li><strong>In reply to:</strong> <a href="18973.php">Thatyene Louise Alves de Souza Ramos: "Re: [OMPI users] Problem with MPI_Barrier (Inter-communicator)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Edgar,
<br>
<p>I forgot to answer your previous question. I used MPI 1.5.4 and the C++ API.
<br>
<p>Thatyene Ramos
<br>
<p>On Mon, Apr 9, 2012 at 8:00 PM, Thatyene Louise Alves de Souza Ramos &lt;
<br>
thatyene_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi Edgar, sorry about the late response. I've been travelling without
</span><br>
<span class="quotelev1">&gt; Internet access.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Well, I took the code Rodrigo provided and modified the client to make the
</span><br>
<span class="quotelev1">&gt; dup after the creation of the new inter communicator, without 1 process.
</span><br>
<span class="quotelev1">&gt; That is, I just replaced the lines 54-55 in the *removeRank* method with
</span><br>
<span class="quotelev1">&gt; my if-else block.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I tried this because call a new create after the first create did not work
</span><br>
<span class="quotelev1">&gt; and I thought it would might be the communicator . So, I tried to duplicate
</span><br>
<span class="quotelev1">&gt; the inter communicator to see if worked.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thatyene Ramos.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, Apr 5, 2012 at 5:10 PM, Edgar Gabriel &lt;gabriel_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; so just to confirm, I ran our test suite for inter-communicator
</span><br>
<span class="quotelev2">&gt;&gt; collective operations and communicator duplication, and everything still
</span><br>
<span class="quotelev2">&gt;&gt; works. Specifically comm_dup on an intercommunicator is not
</span><br>
<span class="quotelev2">&gt;&gt; fundamentally broken, but worked for my tests.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Having your code to see what your code precisely does would help me to
</span><br>
<span class="quotelev2">&gt;&gt; hunt the problem down, since I am otherwise not able to reproduce the
</span><br>
<span class="quotelev2">&gt;&gt; problem.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Also, which version of Open MPI did you use?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt; Edgar
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 4/4/2012 3:09 PM, Thatyene Louise Alves de Souza Ramos wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Hi Edgar, thank you for the response.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Unfortunately, I've tried with and without this option. In both the
</span><br>
<span class="quotelev3">&gt;&gt; &gt; result was the same... =(
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; On Wed, Apr 4, 2012 at 5:04 PM, Edgar Gabriel &lt;gabriel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &lt;mailto:gabriel_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;     did you try to start the program with the --mca coll ^inter switch
</span><br>
<span class="quotelev2">&gt;&gt; that
</span><br>
<span class="quotelev3">&gt;&gt; &gt;     I mentioned? Collective dup for intercommunicators should work, its
</span><br>
<span class="quotelev3">&gt;&gt; &gt;     probably again the bcast over a communicator of size 1 that is
</span><br>
<span class="quotelev2">&gt;&gt; causing
</span><br>
<span class="quotelev3">&gt;&gt; &gt;     the hang, and you could avoid it with the flag that I mentioned
</span><br>
<span class="quotelev2">&gt;&gt; above.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;     Also, if you could attach your test code, that would help in hunting
</span><br>
<span class="quotelev3">&gt;&gt; &gt;     things down.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;     Thanks
</span><br>
<span class="quotelev3">&gt;&gt; &gt;     Edgar
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;     On 4/4/2012 2:18 PM, Thatyene Louise Alves de Souza Ramos wrote:
</span><br>
<span class="quotelev4">&gt;&gt; &gt;     &gt; Hi there.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;     &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;     &gt; I've made some tests related to the problem reported by Rodrigo.
</span><br>
<span class="quotelev2">&gt;&gt; And I
</span><br>
<span class="quotelev4">&gt;&gt; &gt;     &gt; think, I'd rather be wrong, that /collective calls like Create
</span><br>
<span class="quotelev2">&gt;&gt; and Dup
</span><br>
<span class="quotelev4">&gt;&gt; &gt;     &gt; do not work with Inter communicators. I've try this in the client
</span><br>
<span class="quotelev3">&gt;&gt; &gt;     group:/
</span><br>
<span class="quotelev4">&gt;&gt; &gt;     &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;     &gt; *MPI::Intercomm tmp_inter_comm;*
</span><br>
<span class="quotelev4">&gt;&gt; &gt;     &gt; *
</span><br>
<span class="quotelev4">&gt;&gt; &gt;     &gt; *
</span><br>
<span class="quotelev4">&gt;&gt; &gt;     &gt; *tmp_inter_comm = server_comm.Create
</span><br>
<span class="quotelev2">&gt;&gt; (server_comm.Get_group().Excl(1,
</span><br>
<span class="quotelev4">&gt;&gt; &gt;     &gt; &amp;rank));*
</span><br>
<span class="quotelev4">&gt;&gt; &gt;     &gt; *
</span><br>
<span class="quotelev4">&gt;&gt; &gt;     &gt; *
</span><br>
<span class="quotelev4">&gt;&gt; &gt;     &gt; *if(server_comm.Get_rank() != rank)*
</span><br>
<span class="quotelev4">&gt;&gt; &gt;     &gt; *server_comm = tmp_inter_comm.Dup();*
</span><br>
<span class="quotelev4">&gt;&gt; &gt;     &gt; *else*
</span><br>
<span class="quotelev4">&gt;&gt; &gt;     &gt; *server_comm = MPI::COMM_NULL;*
</span><br>
<span class="quotelev4">&gt;&gt; &gt;     &gt; *
</span><br>
<span class="quotelev4">&gt;&gt; &gt;     &gt; *
</span><br>
<span class="quotelev4">&gt;&gt; &gt;     &gt; The server_comm is the original inter communicator with the server
</span><br>
<span class="quotelev3">&gt;&gt; &gt;     group.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;     &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;     &gt; I've noticed that the program hangs in the Dup call. It seems
</span><br>
<span class="quotelev2">&gt;&gt; that the
</span><br>
<span class="quotelev4">&gt;&gt; &gt;     &gt; tmp_inter_comm created without one process still has this process,
</span><br>
<span class="quotelev4">&gt;&gt; &gt;     &gt; because the other processes are waiting for it call the Dup too.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;     &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;     &gt; What do you think?
</span><br>
<span class="quotelev4">&gt;&gt; &gt;     &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;     &gt; On Wed, Mar 28, 2012 at 6:03 PM, Edgar Gabriel &lt;gabriel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt;     &lt;mailto:gabriel_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;     &gt; &lt;mailto:gabriel_at_[hidden] &lt;mailto:gabriel_at_[hidden]&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt; &gt;     &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;     &gt;     it just uses a different algorithm which avoids the bcast on a
</span><br>
<span class="quotelev4">&gt;&gt; &gt;     &gt;     communicator of 1 (which is causing the problem here).
</span><br>
<span class="quotelev4">&gt;&gt; &gt;     &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;     &gt;     Thanks
</span><br>
<span class="quotelev4">&gt;&gt; &gt;     &gt;     Edgar
</span><br>
<span class="quotelev4">&gt;&gt; &gt;     &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;     &gt;     On 3/28/2012 12:08 PM, Rodrigo Oliveira wrote:
</span><br>
<span class="quotelev1">&gt;&gt; &gt;     &gt;     &gt; Hi Edgar,
</span><br>
<span class="quotelev1">&gt;&gt; &gt;     &gt;     &gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;     &gt;     &gt; I tested the execution of my code using the option -mca coll
</span><br>
<span class="quotelev3">&gt;&gt; &gt;     ^inter as
</span><br>
<span class="quotelev1">&gt;&gt; &gt;     &gt;     &gt; you suggested and the program worked fine, even when I use 1
</span><br>
<span class="quotelev3">&gt;&gt; &gt;     server
</span><br>
<span class="quotelev1">&gt;&gt; &gt;     &gt;     &gt; instance.
</span><br>
<span class="quotelev1">&gt;&gt; &gt;     &gt;     &gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;     &gt;     &gt; What is the modification caused by this parameter? I did not
</span><br>
<span class="quotelev3">&gt;&gt; &gt;     find an
</span><br>
<span class="quotelev1">&gt;&gt; &gt;     &gt;     &gt; explanation about the utilization of the module coll inter.
</span><br>
<span class="quotelev1">&gt;&gt; &gt;     &gt;     &gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;     &gt;     &gt; Thanks a lot for your attention and for the solution.
</span><br>
<span class="quotelev1">&gt;&gt; &gt;     &gt;     &gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;     &gt;     &gt; Best regards,
</span><br>
<span class="quotelev1">&gt;&gt; &gt;     &gt;     &gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;     &gt;     &gt; Rodrigo Oliveira
</span><br>
<span class="quotelev1">&gt;&gt; &gt;     &gt;     &gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;     &gt;     &gt; On Tue, Mar 27, 2012 at 1:10 PM, Rodrigo Oliveira
</span><br>
<span class="quotelev1">&gt;&gt; &gt;     &gt;     &gt; &lt;rsilva.oliveira_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt;     &lt;mailto:rsilva.oliveira_at_[hidden]&gt; &lt;mailto:
</span><br>
<span class="quotelev2">&gt;&gt; rsilva.oliveira_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt;     &lt;mailto:rsilva.oliveira_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;     &gt;     &lt;mailto:rsilva.oliveira_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt;     &lt;mailto:rsilva.oliveira_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;     &gt;     &lt;mailto:rsilva.oliveira_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt;     &lt;mailto:rsilva.oliveira_at_[hidden]&gt;&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt; &gt;     &gt;     &gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;     &gt;     &gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;     &gt;     &gt;     Hi Edgar.
</span><br>
<span class="quotelev1">&gt;&gt; &gt;     &gt;     &gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;     &gt;     &gt;     Thanks for the response. I just did not understand why
</span><br>
<span class="quotelev3">&gt;&gt; &gt;     the Barrier
</span><br>
<span class="quotelev1">&gt;&gt; &gt;     &gt;     &gt;     works before I remove one of the client processes.
</span><br>
<span class="quotelev1">&gt;&gt; &gt;     &gt;     &gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;     &gt;     &gt;     I tryed it with 1 server and 3 clients and it worked
</span><br>
<span class="quotelev3">&gt;&gt; &gt;     properly.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;     &gt;     After
</span><br>
<span class="quotelev1">&gt;&gt; &gt;     &gt;     &gt;     I removed 1 of the clients, it stops working. So, the
</span><br>
<span class="quotelev3">&gt;&gt; &gt;     removal is
</span><br>
<span class="quotelev1">&gt;&gt; &gt;     &gt;     &gt;     affecting the functionality of Barrier, I guess.
</span><br>
<span class="quotelev1">&gt;&gt; &gt;     &gt;     &gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;     &gt;     &gt;     Anyone has an idea?
</span><br>
<span class="quotelev1">&gt;&gt; &gt;     &gt;     &gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;     &gt;     &gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;     &gt;     &gt;     On Mon, Mar 26, 2012 at 12:34 PM, Edgar Gabriel
</span><br>
<span class="quotelev4">&gt;&gt; &gt;     &gt;     &lt;gabriel_at_[hidden] &lt;mailto:gabriel_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;     &lt;mailto:gabriel_at_[hidden] &lt;mailto:gabriel_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;     &gt;     &gt;     &lt;mailto:gabriel_at_[hidden] &lt;mailto:gabriel_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;     &lt;mailto:gabriel_at_[hidden] &lt;mailto:gabriel_at_[hidden]&gt;&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt; &gt;     &gt;     &gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;     &gt;     &gt;         I do not recall on what the agreement was on how to
</span><br>
<span class="quotelev3">&gt;&gt; &gt;     treat
</span><br>
<span class="quotelev4">&gt;&gt; &gt;     &gt;     the size=1
</span><br>
<span class="quotelev1">&gt;&gt; &gt;     &gt;     &gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;     &gt;     &gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;     &gt;     &gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;     &gt;     &gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;     &gt;     &gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;     &gt;     &gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt; &gt;     &gt;     &gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt; &gt;     &gt;     &gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;     &lt;mailto:users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;     &gt;     &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt; &gt;     &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;     &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;     &gt;     _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt; &gt;     &gt;     users mailing list
</span><br>
<span class="quotelev4">&gt;&gt; &gt;     &gt;     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;     &lt;mailto:users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;     &gt;     <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt; &gt;     &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;     &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;     &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;     &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;     &gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt; &gt;     &gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt; &gt;     &gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;     &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;     --
</span><br>
<span class="quotelev3">&gt;&gt; &gt;     Edgar Gabriel
</span><br>
<span class="quotelev3">&gt;&gt; &gt;     Associate Professor
</span><br>
<span class="quotelev3">&gt;&gt; &gt;     Parallel Software Technologies Lab      <a href="http://pstl.cs.uh.edu">http://pstl.cs.uh.edu</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt;     Department of Computer Science          University of Houston
</span><br>
<span class="quotelev3">&gt;&gt; &gt;     Philip G. Hoffman Hall, Room 524        Houston, TX-77204, USA
</span><br>
<span class="quotelev3">&gt;&gt; &gt;     Tel: +1 (713) 743-3857 &lt;tel:%2B1%20%28713%29%20743-3857&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;          Fax: +1 (713) 743-3335 &lt;tel:%2B1%20%28713%29%20743-3335&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;     _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt;     users mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt;     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;     <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Edgar Gabriel
</span><br>
<span class="quotelev2">&gt;&gt; Associate Professor
</span><br>
<span class="quotelev2">&gt;&gt; Parallel Software Technologies Lab      <a href="http://pstl.cs.uh.edu">http://pstl.cs.uh.edu</a>
</span><br>
<span class="quotelev2">&gt;&gt; Department of Computer Science          University of Houston
</span><br>
<span class="quotelev2">&gt;&gt; Philip G. Hoffman Hall, Room 524        Houston, TX-77204, USA
</span><br>
<span class="quotelev2">&gt;&gt; Tel: +1 (713) 743-3857                  Fax: +1 (713) 743-3335
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18974/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18975.php">Reuti: "Re: [OMPI users] sge tight intregration leads to bad allocation"</a>
<li><strong>Previous message:</strong> <a href="18973.php">Thatyene Louise Alves de Souza Ramos: "Re: [OMPI users] Problem with MPI_Barrier (Inter-communicator)"</a>
<li><strong>In reply to:</strong> <a href="18973.php">Thatyene Louise Alves de Souza Ramos: "Re: [OMPI users] Problem with MPI_Barrier (Inter-communicator)"</a>
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
