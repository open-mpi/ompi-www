<?
$subject_val = "Re: [OMPI users] bug in MPI_Comm_accept? (UNCLASSIFIED)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 16 11:59:34 2015" -->
<!-- isoreceived="20150916155934" -->
<!-- sent="Wed, 16 Sep 2015 15:59:32 +0000" -->
<!-- isosent="20150916155932" -->
<!-- name="Burns, Andrew J CTR USARMY RDECOM ARL (US)" -->
<!-- email="andrew.j.burns35.ctr_at_[hidden]" -->
<!-- subject="Re: [OMPI users] bug in MPI_Comm_accept? (UNCLASSIFIED)" -->
<!-- id="DEE37B508E36B64285856EEA9FC0C33718266EA1_at_ucolhpkl.easf.csd.disa.mil" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] bug in MPI_Comm_accept? (UNCLASSIFIED)" -->
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
<strong>Subject:</strong> Re: [OMPI users] bug in MPI_Comm_accept? (UNCLASSIFIED)<br>
<strong>From:</strong> Burns, Andrew J CTR USARMY RDECOM ARL (US) (<em>andrew.j.burns35.ctr_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-16 11:59:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27595.php">Ralph Castain: "Re: [OMPI users] open mpi gcc"</a>
<li><strong>Previous message:</strong> <a href="27593.php">Kumar, Sudhir: "[OMPI users] open mpi gcc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27597.php">marcin.krotkiewski: "Re: [OMPI users] bug in MPI_Comm_accept? (UNCLASSIFIED)"</a>
<li><strong>Reply:</strong> <a href="27597.php">marcin.krotkiewski: "Re: [OMPI users] bug in MPI_Comm_accept? (UNCLASSIFIED)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
CLASSIFICATION: UNCLASSIFIED
<br>
<p>Have you attempted using 2 cores per process? I have noticed that MPI_Comm_accept sometimes behaves strangely on single core variations.
<br>
<p>I have a program that makes use of Comm_accept/connect and I also call MPI_Comm_merge. So, you may want to look into that call as well.
<br>
<p>-Andrew Burns
<br>
<p>-----Original Message-----
<br>
From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Jalel Chergui
<br>
Sent: Wednesday, September 16, 2015 11:49 AM
<br>
To: users_at_[hidden]
<br>
Subject: Re: [OMPI users] bug in MPI_Comm_accept?
<br>
<p>This email was sent from a non-Department of Defense email account, and contained active links. All links are disabled, and require you to copy and paste the address to a Web browser. Please verify the identity of the sender, and confirm authenticity of all links contained within the message.  
<br>
<p><p><p>&nbsp;
<br>
With openmpi-1.7.5, the sender segfaults.
<br>
Sorry, I cannot see the problem in the codes. Perhaps people out there may help.
<br>
<p>Jalel
<br>
<p><p>Le 16/09/2015 16:40, marcin.krotkiewski a ?crit :
<br>
<p>I have removed the MPI_Barrier, to no avail. Same thing happens. Adding verbosity, before the receiver hangs I get the following message
<br>
<p>[node2:03928] mca: bml: Using openib btl to [[12620,1],0] on node node3
<br>
<p>So It is somewhere in the openib btl module
<br>
<p>Marcin
<br>
<p><p>On 09/16/2015 04:34 PM, Jalel Chergui wrote:
<br>
Right, anyway Finalize is necessary at the end of the receiver. The other issue is Barrier which is invoked probably when the sender has exited hence changing the size of intercom. Can you comment that line in both files ?
<br>
<p>Jalel
<br>
<p>Le 16/09/2015 16:22, Marcin Krotkiewski a ?crit :
<br>
But where would I put it? If I put it in the while(1), then MPI_Comm_Accept cannot be called for the second time. If I put it outside of the loop it will never be called.
<br>
<p><p>On 09/16/2015 04:18 PM, Jalel Chergui wrote:
<br>
Can you check with an MPI_Finalize in the receiver ?
<br>
Jalel
<br>
<p>Le 16/09/2015 16:06, marcin.krotkiewski a ?crit :
<br>
I have run into a freeze / potential bug when using MPI_Comm_accept in a simple client / server implementation. I have attached two simplest programs I could produce:
<br>
<p>&nbsp;1. mpi-receiver.c opens a port using MPI_Open_port, saves the port name to a file
<br>
<p>&nbsp;2. mpi-receiver enters infinite loop and waits for connections using MPI_Comm_accept
<br>
<p>&nbsp;3. mpi-sender.c connects to that port using MPI_Comm_connect, sends one MPI_UNSIGNED_LONG, calls barrier and disconnects using MPI_Comm_disconnect
<br>
<p>&nbsp;4. mpi-receiver reads the MPI_UNSIGNED_LONG, prints it, calls barrier and disconnects using MPI_Comm_disconnect and goes to point 2 - infinite loop
<br>
<p>All works fine, but only exactly 5 times. After that the receiver hangs in MPI_Recv, after exit from MPI_Comm_accept. That is 100% repeatable. I have tried with Intel MPI - no such problem.
<br>
<p>I execute the programs using OpenMPI 1.10 as follows
<br>
<p>mpirun -np 1 --mca mpi_leave_pinned 0 ./mpi-receiver
<br>
<p><p>Do you have any clues what could be the reason? Am I doing sth wrong, or is it some problem with internal state of OpenMPI?
<br>
<p>Thanks a lot!
<br>
<p>Marcin
<br>
<p><p><p><p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<br>
Subscription: Caution-www.open-mpi.org/mailman/listinfo.cgi/users
<br>
Link to this post: Caution-www.open-mpi.org/community/lists/users/2015/09/27585.php
<br>
<p><p><pre>
--
*------------------------------------------------------------------------*
 Jalel CHERGUI, LIMSI-CNRS, B?t. 508 - BP 133, 91403 Orsay cedex, FRANCE
 T?l: (33 1) 69 85 81 27     ; T?l?copie: (33 1) 69 85 80 88
 M?l: Jalel.Chergui_at_[hidden]&lt;mailto:Jalel.Chergui_at_[hidden]&gt; ; R?f?rence: Caution-perso.limsi.fr/chergui
*------------------------------------------------------------------------*
_______________________________________________
users mailing list
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
Subscription: Caution-www.open-mpi.org/mailman/listinfo.cgi/users
Link to this post: Caution-www.open-mpi.org/community/lists/users/2015/09/27586.php
_______________________________________________
users mailing list
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
Subscription: Caution-www.open-mpi.org/mailman/listinfo.cgi/users
Link to this post: Caution-www.open-mpi.org/community/lists/users/2015/09/27587.php
--
*------------------------------------------------------------------------*
 Jalel CHERGUI, LIMSI-CNRS, B?t. 508 - BP 133, 91403 Orsay cedex, FRANCE
 T?l: (33 1) 69 85 81 27     ; T?l?copie: (33 1) 69 85 80 88
 M?l: Jalel.Chergui_at_[hidden]&lt;mailto:Jalel.Chergui_at_[hidden]&gt; ; R?f?rence: Caution-perso.limsi.fr/chergui
*------------------------------------------------------------------------*
_______________________________________________
users mailing list
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
Subscription: Caution-www.open-mpi.org/mailman/listinfo.cgi/users
Link to this post: Caution-www.open-mpi.org/community/lists/users/2015/09/27588.php
_______________________________________________
users mailing list
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
Subscription: Caution-www.open-mpi.org/mailman/listinfo.cgi/users
Link to this post: Caution-www.open-mpi.org/community/lists/users/2015/09/27589.php
--
*------------------------------------------------------------------------*
 Jalel CHERGUI, LIMSI-CNRS, B?t. 508 - BP 133, 91403 Orsay cedex, FRANCE
 T?l: (33 1) 69 85 81 27     ; T?l?copie: (33 1) 69 85 80 88
 M?l: Jalel.Chergui_at_[hidden]&lt;mailto:Jalel.Chergui_at_[hidden]&gt; ; R?f?rence: Caution-perso.limsi.fr/chergui
*------------------------------------------------------------------------*
CLASSIFICATION: UNCLASSIFIED
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27595.php">Ralph Castain: "Re: [OMPI users] open mpi gcc"</a>
<li><strong>Previous message:</strong> <a href="27593.php">Kumar, Sudhir: "[OMPI users] open mpi gcc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27597.php">marcin.krotkiewski: "Re: [OMPI users] bug in MPI_Comm_accept? (UNCLASSIFIED)"</a>
<li><strong>Reply:</strong> <a href="27597.php">marcin.krotkiewski: "Re: [OMPI users] bug in MPI_Comm_accept? (UNCLASSIFIED)"</a>
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
