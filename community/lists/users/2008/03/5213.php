<?
$subject_val = "Re: [OMPI users] RE : MPI_Comm_connect() fails";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 17 14:46:11 2008" -->
<!-- isoreceived="20080317184611" -->
<!-- sent="Mon, 17 Mar 2008 14:45:18 -0400" -->
<!-- isosent="20080317184518" -->
<!-- name="Audet, Martin" -->
<!-- email="Martin.Audet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] RE : MPI_Comm_connect() fails" -->
<!-- id="9D96C3B9C12B4C4A9BD31761B4F8241029856F191D_at_imibou-nt-1-ex.IMI.LOCAL" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="ADF78B36-D32A-48DB-8CE4-69BA64E185E1_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] RE : MPI_Comm_connect() fails<br>
<strong>From:</strong> Audet, Martin (<em>Martin.Audet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-17 14:45:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5214.php">Edgar Gabriel: "Re: [OMPI users] RE : MPI_Comm_connect() fails"</a>
<li><strong>Previous message:</strong> <a href="5212.php">Christopher Irving: "Re: [OMPI users] RPM build errors when creating multiple rpms"</a>
<li><strong>In reply to:</strong> <a href="5202.php">Jeff Squyres: "Re: [OMPI users] RE : MPI_Comm_connect() fails"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5214.php">Edgar Gabriel: "Re: [OMPI users] RE : MPI_Comm_connect() fails"</a>
<li><strong>Reply:</strong> <a href="5214.php">Edgar Gabriel: "Re: [OMPI users] RE : MPI_Comm_connect() fails"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
<p>As I said in my last message (see bellow) the patch (or at least the patch I got) don't fixes the problem for me. Whether I apply it over OpenMPI 1.2.5 or 1.2.6rc2, I still get the same problem:
<br>
<p>&nbsp;&nbsp;The client aborts with a truncation error message while the server freeze when for example the server is started on 3 process and the client on 2 process.
<br>
<p>Feel free to try yourself the two small client and server programs I posted in my first message.
<br>
<p>Thanks,
<br>
<p>Martin
<br>
<p><p>Subject: [OMPI users] RE : users Digest, Vol 841, Issue 3
<br>
From: Audet, Martin (Martin.Audet_at_[hidden])
<br>
Date: 2008-03-13 17:04:25
<br>
<p>Hi Georges,
<br>
<p>Thanks for your patch, but I'm not sure I got it correctly. The patch I got modify a few arguments passed to isend()/irecv()/recv() in coll_basic_allgather.c. Here is the patch I applied:
<br>
<p>Index: ompi/mca/coll/basic/coll_basic_allgather.c
<br>
===================================================================
<br>
--- ompi/mca/coll/basic/coll_basic_allgather.c (revision 17814)
<br>
+++ ompi/mca/coll/basic/coll_basic_allgather.c (working copy)
<br>
@@ -149,7 +149,7 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* Do a send-recv between the two root procs. to avoid deadlock */
<br>
- err = MCA_PML_CALL(isend(sbuf, scount, sdtype, 0,
<br>
+ err = MCA_PML_CALL(isend(sbuf, scount, sdtype, root,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA_COLL_BASE_TAG_ALLGATHER,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA_PML_BASE_SEND_STANDARD,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;comm, &amp;reqs[rsize]));
<br>
@@ -157,7 +157,7 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return err;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>- err = MCA_PML_CALL(irecv(rbuf, rcount, rdtype, 0,
<br>
+ err = MCA_PML_CALL(irecv(rbuf, rcount, rdtype, root,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA_COLL_BASE_TAG_ALLGATHER, comm,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&amp;reqs[0]));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (OMPI_SUCCESS != err) {
<br>
@@ -186,14 +186,14 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return err;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>- err = MCA_PML_CALL(isend(rbuf, rsize * rcount, rdtype, 0,
<br>
+ err = MCA_PML_CALL(isend(rbuf, rsize * scount, sdtype, root,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA_COLL_BASE_TAG_ALLGATHER,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA_PML_BASE_SEND_STANDARD, comm, &amp;req));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (OMPI_SUCCESS != err) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;goto exit;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>- err = MCA_PML_CALL(recv(tmpbuf, size * scount, sdtype, 0,
<br>
+ err = MCA_PML_CALL(recv(tmpbuf, size * rcount, rdtype, root,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA_COLL_BASE_TAG_ALLGATHER, comm,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_STATUS_IGNORE));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (OMPI_SUCCESS != err) {
<br>
<p>However with this patch, I still have the problem. Suppose I start the server with three process and the client with two, the clients prints:
<br>
<p>[audet_at_linux15 dyn_connect]$ mpiexec --universe univ1 -n 2 ./aclient '0.2.0:2000'
<br>
intercomm_flag = 1
<br>
intercomm_remote_size = 3
<br>
rem_rank_tbl[3] = { 0 1 2}
<br>
[linux15:26114] *** An error occurred in MPI_Allgather
<br>
[linux15:26114] *** on communicator
<br>
[linux15:26114] *** MPI_ERR_TRUNCATE: message truncated
<br>
[linux15:26114] *** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
mpiexec noticed that job rank 0 with PID 26113 on node linux15 exited on signal 15 (Terminated).
<br>
[audet_at_linux15 dyn_connect]$
<br>
<p>and abort. The server on the other side simply hang (as before).
<br>
<p>Regards,
<br>
<p>Martin
<br>
<p>-----Original Message-----
<br>
From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of Jeff Squyres
<br>
Sent: March 14, 2008 19:45
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] RE : MPI_Comm_connect() fails
<br>
<p>Yes, please let us know if this fixes it.  We're working on a 1.2.6
<br>
release; we can definitely put this fix in there if it's correct.
<br>
<p>Thanks!
<br>
<p><p>On Mar 13, 2008, at 4:07 PM, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; I dig into the sources and I think you correctly pinpoint the bug.
</span><br>
<span class="quotelev1">&gt; It seems we have a mismatch between the local and remote sizes in
</span><br>
<span class="quotelev1">&gt; the inter-communicator allgather in the 1.2 series (which explain
</span><br>
<span class="quotelev1">&gt; the message truncation error when the local and remote groups have a
</span><br>
<span class="quotelev1">&gt; different number of processes). Attached to this email you can find
</span><br>
<span class="quotelev1">&gt; a patch that [hopefully] solve this problem. If you can please test
</span><br>
<span class="quotelev1">&gt; it and let me know if this solve your problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Thanks,
</span><br>
<span class="quotelev1">&gt;    george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;inter_allgather.patch&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 13, 2008, at 1:11 PM, Audet, Martin wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; After re-checking the MPI standard (www.mpi-forum.org and MPI - The
</span><br>
<span class="quotelev2">&gt;&gt; Complete Reference), I'm more and more convinced that my small
</span><br>
<span class="quotelev2">&gt;&gt; examples programs establishing a intercommunicator with
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Comm_Connect()/MPI_Comm_accept() over an MPI port and
</span><br>
<span class="quotelev2">&gt;&gt; exchanging data over it with MPI_Allgather() is correct. Especially
</span><br>
<span class="quotelev2">&gt;&gt; calling MPI_Allgather() with recvcount=1 (its third argument)
</span><br>
<span class="quotelev2">&gt;&gt; instead of the total number of MPI_INT that will be received (e.g.
</span><br>
<span class="quotelev2">&gt;&gt; intercomm_remote_size in the examples) is both correct and
</span><br>
<span class="quotelev2">&gt;&gt; consistent with MPI_Allgather() behavior on intracommunicator (e.g.
</span><br>
<span class="quotelev2">&gt;&gt; &quot;normal&quot; communicator).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  MPI_Allgather(&amp;comm_rank,   1, MPI_INT,
</span><br>
<span class="quotelev2">&gt;&gt;                rem_rank_tbl, 1, MPI_INT,
</span><br>
<span class="quotelev2">&gt;&gt;                intercomm);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Also the recvbuf argument (the second argument) of MPI_Allgather()
</span><br>
<span class="quotelev2">&gt;&gt; in the examples should have a size of intercomm_remote_size (e.g.
</span><br>
<span class="quotelev2">&gt;&gt; the size of the remote group), not the sum of the local and remote
</span><br>
<span class="quotelev2">&gt;&gt; groups in the client and sever process. The standard says that for
</span><br>
<span class="quotelev2">&gt;&gt; all-to-all type of operations over an intercommunicator, the
</span><br>
<span class="quotelev2">&gt;&gt; process send and receives data from the remote group only (anyway
</span><br>
<span class="quotelev2">&gt;&gt; it is not possible to exchange data with process of the local group
</span><br>
<span class="quotelev2">&gt;&gt; over an intercommunicator).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So, for me there is no reason for stopping the process with an
</span><br>
<span class="quotelev2">&gt;&gt; error message complaining about message truncation. There should be
</span><br>
<span class="quotelev2">&gt;&gt; no truncation, sendcount, sendtype, recvcount and recvtype
</span><br>
<span class="quotelev2">&gt;&gt; arguments of MPI_Allgather() are correct and consistent.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So again for me the OpenMPI behavior with my example look more and
</span><br>
<span class="quotelev2">&gt;&gt; more like a bug...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Concerning George comment about valgrind and TCP/IP, I totally
</span><br>
<span class="quotelev2">&gt;&gt; agree, messages reported by valgrind are only a clue of a bug,
</span><br>
<span class="quotelev2">&gt;&gt; especially in this contex, not a proof of bug. Another clue is that
</span><br>
<span class="quotelev2">&gt;&gt; my small examples work perfectly with mpich2 ch3:sock.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Martin Audet
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Message: 4
</span><br>
<span class="quotelev2">&gt;&gt; Date: Thu, 13 Mar 2008 08:21:51 +0100
</span><br>
<span class="quotelev2">&gt;&gt; From: jody &lt;jody.xha_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] RE : MPI_Comm_connect() fails
</span><br>
<span class="quotelev2">&gt;&gt; To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Message-ID:
</span><br>
<span class="quotelev2">&gt;&gt;       &lt;9b0da5ce0803130021l4ead0f91qaf43e4ac7d332c93_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Content-Type: text/plain; charset=ISO-8859-1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; HI
</span><br>
<span class="quotelev2">&gt;&gt; I think the recvcount argument you pass to MPI_Allgather should not
</span><br>
<span class="quotelev2">&gt;&gt; be
</span><br>
<span class="quotelev2">&gt;&gt; 1 but instead
</span><br>
<span class="quotelev2">&gt;&gt; the number of MPI_INTs your buffer rem_rank_tbl can contain.
</span><br>
<span class="quotelev2">&gt;&gt; As it stands now, you tell MPI_Allgather that it may only receive 1
</span><br>
<span class="quotelev2">&gt;&gt; MPI_INT.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Furthermore, i'm not sure, but i think your receive buffer should be
</span><br>
<span class="quotelev2">&gt;&gt; large enough
</span><br>
<span class="quotelev2">&gt;&gt; to contain messages from *all* processes, and not just from the
</span><br>
<span class="quotelev2">&gt;&gt; &quot;far side&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Jody
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; .
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Message: 6
</span><br>
<span class="quotelev2">&gt;&gt; Date: Thu, 13 Mar 2008 09:06:47 -0500
</span><br>
<span class="quotelev2">&gt;&gt; From: George Bosilca &lt;bosilca_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] RE : MPI_Comm_connect() fails
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Message-ID: &lt;82E9FF28-FB87-4FFB-A492-DDE472D5DEA7_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Content-Type: text/plain; charset=&quot;us-ascii&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am not aware of any problems with the allreduce/allgather. But, we
</span><br>
<span class="quotelev2">&gt;&gt; are aware of the problem with valgrind that report non initialized
</span><br>
<span class="quotelev2">&gt;&gt; values when used with TCP. It's a long story, but I can guarantee
</span><br>
<span class="quotelev2">&gt;&gt; that
</span><br>
<span class="quotelev2">&gt;&gt; this should not affect a correct MPI application.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  george.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; PS: For those who want to know the details: we have to send a header
</span><br>
<span class="quotelev2">&gt;&gt; over TCP which contain some very basic information, including the
</span><br>
<span class="quotelev2">&gt;&gt; size
</span><br>
<span class="quotelev2">&gt;&gt; of the fragment. Unfortunately, we have a 2 bytes gap in the header.
</span><br>
<span class="quotelev2">&gt;&gt; As we never initialize these 2 unused bytes, but we send them over
</span><br>
<span class="quotelev2">&gt;&gt; the
</span><br>
<span class="quotelev2">&gt;&gt; wire, valgrind correctly detect the non initialized data transfer.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Mar 12, 2008, at 3:58 PM, Audet, Martin wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi again,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks Pak for the link and suggesting to start an &quot;orted&quot; deamon,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; by doing so my  clients and servers jobs were able to establish an
</span><br>
<span class="quotelev3">&gt;&gt;&gt; intercommunicator between them.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; However I modified my programs to perform an MPI_Allgather() of a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; single &quot;int&quot; over the new intercommunicator to test communication a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; litle bit and I did encountered problems. I am now wondering if
</span><br>
<span class="quotelev3">&gt;&gt;&gt; there is a problem in MPI_Allreduce() itself for intercommunicators.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Note that the same program run without problems with mpich2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (ch3:sock).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For example if I start orted as follows:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; orted --persistent --seed --scope public --universe univ1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and then start the server with three process:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpiexec --universe univ1 -n 3 ./aserver
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; it prints:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Server port = '0.2.0:2000'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Now if I start the client with two process as follow (using the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; server port):
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpiexec --universe univ1 -n 2 ./aclient '0.2.0:2000'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The server prints:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; intercomm_flag = 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; intercomm_remote_size = 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rem_rank_tbl[2] = { 0 1}
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; which is the correct output. The client then prints:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; intercomm_flag = 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; intercomm_remote_size = 3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rem_rank_tbl[3] = { 0 1 2}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [linux15:30895] *** An error occurred in MPI_Allgather
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [linux15:30895] *** on communicator
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [linux15:30895] *** MPI_ERR_TRUNCATE: message truncated
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [linux15:30895] *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpiexec noticed that job rank 0 with PID 30894 on node linux15
</span><br>
<span class="quotelev3">&gt;&gt;&gt; exited on signal 15 (Terminated).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; As you can see the first messages are correct but the client job
</span><br>
<span class="quotelev3">&gt;&gt;&gt; terminate with an error (and the server hang).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; After re-reading the documentation about MPI_Allgather() over an
</span><br>
<span class="quotelev3">&gt;&gt;&gt; intercommunicator, I don't see anything wrong in my simple code.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Also if I run the client and server process with valgrind, I get a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; few messages like:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==29821== Syscall param writev(vector[...]) points to uninitialised
</span><br>
<span class="quotelev3">&gt;&gt;&gt; byte(s)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==29821==    at 0x36235C2130: writev (in /lib64/libc-2.3.5.so)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==29821==    by 0x7885583: mca_btl_tcp_frag_send (in /home/publique/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; openmpi-1.2.5/lib/openmpi/mca_btl_tcp.so)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==29821==    by 0x788501B: mca_btl_tcp_endpoint_send (in /home/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; publique/openmpi-1.2.5/lib/openmpi/mca_btl_tcp.so)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==29821==    by 0x7467947: mca_pml_ob1_send_request_start_prepare
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (in /home/publique/openmpi-1.2.5/lib/openmpi/mca_pml_ob1.so)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==29821==    by 0x7461494: mca_pml_ob1_isend (in /home/publique/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; openmpi-1.2.5/lib/openmpi/mca_pml_ob1.so)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==29821==    by 0x798BF9D: mca_coll_basic_allgather_inter (in /home/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; publique/openmpi-1.2.5/lib/openmpi/mca_coll_basic.so)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==29821==    by 0x4A5069C: PMPI_Allgather (in /home/publique/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; openmpi-1.2.5/lib/libmpi.so.0.0.0)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==29821==    by 0x400EED: main (aserver.c:53)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==29821==  Address 0x40d6cac is not stack'd, malloc'd or (recently)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; free'd
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in both MPI_Allgather() and MPI_Comm_disconnect() calls for client
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and server with valgrind always reporting that the address in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; question are &quot;not stack'd, malloc'd or (recently) free'd&quot;.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So is there a problem with MPI_Allgather() on intercommunicators or
</span><br>
<span class="quotelev3">&gt;&gt;&gt; am I doing something wrong ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Martin
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /* aserver.c */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include &lt;assert.h&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; int main(int argc, char **argv)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; int       comm_rank,comm_size;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; char      port_name[MPI_MAX_PORT_NAME];
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Comm intercomm;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; int      ok_flag;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; int      intercomm_flag;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; int      intercomm_remote_size;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; int     *rem_rank_tbl;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; int      ii;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Comm_rank(MPI_COMM_WORLD, &amp;comm_rank);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Comm_size(MPI_COMM_WORLD, &amp;comm_size);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ok_flag = (comm_rank != 0) || (argc == 1);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Bcast(&amp;ok_flag, 1, MPI_INT, 0, MPI_COMM_WORLD);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; if (!ok_flag) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    if (comm_rank == 0) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       fprintf(stderr,&quot;Usage: %s\n&quot;,argv[0]);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    MPI_Abort(MPI_COMM_WORLD, 1);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Open_port(MPI_INFO_NULL, port_name);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; if (comm_rank == 0) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    printf(&quot;Server port = '%s'\n&quot;, port_name);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Comm_accept(port_name, MPI_INFO_NULL, 0, MPI_COMM_WORLD,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &amp;intercomm);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Close_port(port_name);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Comm_test_inter(intercomm, &amp;intercomm_flag);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; if (comm_rank == 0) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    printf(&quot;intercomm_flag = %d\n&quot;, intercomm_flag);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; assert(intercomm_flag != 0);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Comm_remote_size(intercomm, &amp;intercomm_remote_size);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; if (comm_rank == 0) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    printf(&quot;intercomm_remote_size = %d\n&quot;, intercomm_remote_size);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rem_rank_tbl = malloc(intercomm_remote_size*sizeof(*rem_rank_tbl));
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Allgather(&amp;comm_rank,   1, MPI_INT,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               rem_rank_tbl, 1, MPI_INT,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               intercomm);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; if (comm_rank == 0) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    printf(&quot;rem_rank_tbl[%d] = {&quot;, intercomm_remote_size);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    for (ii=0; ii &lt; intercomm_remote_size; ii++) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        printf(&quot; %d&quot;, rem_rank_tbl[ii]);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    printf(&quot;}\n&quot;);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; free(rem_rank_tbl);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Comm_disconnect(&amp;intercomm);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Finalize();
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; return 0;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /* aclient.c */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include &lt;unistd.h&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include &lt;assert.h&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; int main(int argc, char **argv)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; int      comm_rank,comm_size;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; int      ok_flag;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Comm intercomm;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; int      intercomm_flag;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; int      intercomm_remote_size;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; int     *rem_rank_tbl;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; int      ii;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Comm_rank(MPI_COMM_WORLD, &amp;comm_rank);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Comm_size(MPI_COMM_WORLD, &amp;comm_size);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ok_flag = (comm_rank != 0)  || ((argc == 2)  &amp;&amp;  argv[1]  &amp;&amp;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (*argv[1] != '\0'));
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Bcast(&amp;ok_flag, 1, MPI_INT, 0, MPI_COMM_WORLD);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; if (!ok_flag) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    if (comm_rank == 0) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       fprintf(stderr,&quot;Usage: %s mpi_port\n&quot;, argv[0]);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    MPI_Abort(MPI_COMM_WORLD, 1);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; while (MPI_Comm_connect((comm_rank == 0) ? argv[1] : 0,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_INFO_NULL, 0, MPI_COMM_WORLD, &amp;intercomm) != MPI_SUCCESS) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    if (comm_rank == 0) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       printf(&quot;MPI_Comm_connect() failled, sleeping and retrying...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; \n&quot;);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    sleep(1);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Comm_test_inter(intercomm, &amp;intercomm_flag);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; if (comm_rank == 0) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    printf(&quot;intercomm_flag = %d\n&quot;, intercomm_flag);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; assert(intercomm_flag != 0);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Comm_remote_size(intercomm, &amp;intercomm_remote_size);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; if (comm_rank == 0) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    printf(&quot;intercomm_remote_size = %d\n&quot;, intercomm_remote_size);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rem_rank_tbl = malloc(intercomm_remote_size*sizeof(*rem_rank_tbl));
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Allgather(&amp;comm_rank,   1, MPI_INT,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               rem_rank_tbl, 1, MPI_INT,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               intercomm);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; if (comm_rank == 0) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    printf(&quot;rem_rank_tbl[%d] = {&quot;, intercomm_remote_size);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    for (ii=0; ii &lt; intercomm_remote_size; ii++) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        printf(&quot; %d&quot;, rem_rank_tbl[ii]);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    printf(&quot;}\n&quot;);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; free(rem_rank_tbl);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Comm_disconnect(&amp;intercomm);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Finalize();
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; return 0;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -------------- next part --------------
</span><br>
<span class="quotelev2">&gt;&gt; A non-text attachment was scrubbed...
</span><br>
<span class="quotelev2">&gt;&gt; Name: smime.p7s
</span><br>
<span class="quotelev2">&gt;&gt; Type: application/pkcs7-signature
</span><br>
<span class="quotelev2">&gt;&gt; Size: 2423 bytes
</span><br>
<span class="quotelev2">&gt;&gt; Desc: not available
</span><br>
<span class="quotelev2">&gt;&gt; Url : <a href="http://www.open-mpi.org/MailArchives/users/attachments/20080313/642d41dd/attachment.bin">http://www.open-mpi.org/MailArchives/users/attachments/20080313/642d41dd/attachment.bin</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------
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
<span class="quotelev2">&gt;&gt; End of users Digest, Vol 841, Issue 1
</span><br>
<span class="quotelev2">&gt;&gt; *************************************
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
<p><p><pre>
--
Jeff Squyres
Cisco Systems
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5214.php">Edgar Gabriel: "Re: [OMPI users] RE : MPI_Comm_connect() fails"</a>
<li><strong>Previous message:</strong> <a href="5212.php">Christopher Irving: "Re: [OMPI users] RPM build errors when creating multiple rpms"</a>
<li><strong>In reply to:</strong> <a href="5202.php">Jeff Squyres: "Re: [OMPI users] RE : MPI_Comm_connect() fails"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5214.php">Edgar Gabriel: "Re: [OMPI users] RE : MPI_Comm_connect() fails"</a>
<li><strong>Reply:</strong> <a href="5214.php">Edgar Gabriel: "Re: [OMPI users] RE : MPI_Comm_connect() fails"</a>
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
