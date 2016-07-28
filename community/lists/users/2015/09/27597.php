<?
$subject_val = "Re: [OMPI users] bug in MPI_Comm_accept? (UNCLASSIFIED)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 16 14:53:23 2015" -->
<!-- isoreceived="20150916185323" -->
<!-- sent="Wed, 16 Sep 2015 20:53:17 +0200" -->
<!-- isosent="20150916185317" -->
<!-- name="marcin.krotkiewski" -->
<!-- email="marcin.krotkiewski_at_[hidden]" -->
<!-- subject="Re: [OMPI users] bug in MPI_Comm_accept? (UNCLASSIFIED)" -->
<!-- id="55F9BA9D.2010809_at_gmail.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="DEE37B508E36B64285856EEA9FC0C33718266EA1_at_ucolhpkl.easf.csd.disa.mil" -->
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
<strong>From:</strong> marcin.krotkiewski (<em>marcin.krotkiewski_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-16 14:53:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27598.php">Mark Moorcroft: "[OMPI users] XHPL question"</a>
<li><strong>Previous message:</strong> <a href="27596.php">Kumar, Sudhir: "Re: [OMPI users] open mpi gcc"</a>
<li><strong>In reply to:</strong> <a href="27594.php">Burns, Andrew J CTR USARMY RDECOM ARL (US): "Re: [OMPI users] bug in MPI_Comm_accept? (UNCLASSIFIED)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thank you all for your replies.
<br>
<p>I have now tested the code with various setups and versions. First of 
<br>
all, the tcp btl seems to work fine (I had patience to check ~10 runs), 
<br>
the openib is the problem. I have also compiled using the Intel compiler 
<br>
and the story is the same as when using gcc.
<br>
<p>I have then tested many openmpi versions from 1.7.5 to 1.10.0 using 
<br>
bisection ;) Versions up to and including 1.8.3 worked fine (at least 
<br>
above 5 times and around 10), the problem was likely introduced in 
<br>
version 1.8.4. Actually, version 1.8.4 was the only one to spit out some 
<br>
interesting warning on the receiver side at the moment it hang:
<br>
<p>[warn] opal_libevent2021_event_base_loop: reentrant invocation. Only one 
<br>
event_base_loop can run on each event_base at once.
<br>
<p>which may or may not be of importance in this particular case ;)
<br>
<p>So to summarize, problem appeared in openib btl in version 1.8.4.
<br>
<p>Does anybody have any more ideas?
<br>
<p>Thanks!
<br>
<p>Marcin
<br>
<p><p><p>On 09/16/2015 05:59 PM, Burns, Andrew J CTR USARMY RDECOM ARL (US) wrote:
<br>
<span class="quotelev1">&gt; CLASSIFICATION: UNCLASSIFIED
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Have you attempted using 2 cores per process? I have noticed that MPI_Comm_accept sometimes behaves strangely on single core variations.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have a program that makes use of Comm_accept/connect and I also call MPI_Comm_merge. So, you may want to look into that call as well.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Andrew Burns
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Jalel Chergui
</span><br>
<span class="quotelev1">&gt; Sent: Wednesday, September 16, 2015 11:49 AM
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] bug in MPI_Comm_accept?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This email was sent from a non-Department of Defense email account, and contained active links. All links are disabled, and require you to copy and paste the address to a Web browser. Please verify the identity of the sender, and confirm authenticity of all links contained within the message.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev1">&gt; With openmpi-1.7.5, the sender segfaults.
</span><br>
<span class="quotelev1">&gt; Sorry, I cannot see the problem in the codes. Perhaps people out there may help.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jalel
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Le 16/09/2015 16:40, marcin.krotkiewski a ?crit :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have removed the MPI_Barrier, to no avail. Same thing happens. Adding verbosity, before the receiver hangs I get the following message
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [node2:03928] mca: bml: Using openib btl to [[12620,1],0] on node node3
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So It is somewhere in the openib btl module
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Marcin
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 09/16/2015 04:34 PM, Jalel Chergui wrote:
</span><br>
<span class="quotelev1">&gt; Right, anyway Finalize is necessary at the end of the receiver. The other issue is Barrier which is invoked probably when the sender has exited hence changing the size of intercom. Can you comment that line in both files ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jalel
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Le 16/09/2015 16:22, Marcin Krotkiewski a ?crit :
</span><br>
<span class="quotelev1">&gt; But where would I put it? If I put it in the while(1), then MPI_Comm_Accept cannot be called for the second time. If I put it outside of the loop it will never be called.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 09/16/2015 04:18 PM, Jalel Chergui wrote:
</span><br>
<span class="quotelev1">&gt; Can you check with an MPI_Finalize in the receiver ?
</span><br>
<span class="quotelev1">&gt; Jalel
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Le 16/09/2015 16:06, marcin.krotkiewski a ?crit :
</span><br>
<span class="quotelev1">&gt; I have run into a freeze / potential bug when using MPI_Comm_accept in a simple client / server implementation. I have attached two simplest programs I could produce:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   1. mpi-receiver.c opens a port using MPI_Open_port, saves the port name to a file
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   2. mpi-receiver enters infinite loop and waits for connections using MPI_Comm_accept
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   3. mpi-sender.c connects to that port using MPI_Comm_connect, sends one MPI_UNSIGNED_LONG, calls barrier and disconnects using MPI_Comm_disconnect
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   4. mpi-receiver reads the MPI_UNSIGNED_LONG, prints it, calls barrier and disconnects using MPI_Comm_disconnect and goes to point 2 - infinite loop
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; All works fine, but only exactly 5 times. After that the receiver hangs in MPI_Recv, after exit from MPI_Comm_accept. That is 100% repeatable. I have tried with Intel MPI - no such problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I execute the programs using OpenMPI 1.10 as follows
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -np 1 --mca mpi_leave_pinned 0 ./mpi-receiver
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Do you have any clues what could be the reason? Am I doing sth wrong, or is it some problem with internal state of OpenMPI?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks a lot!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Marcin
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
<span class="quotelev1">&gt; users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: Caution-www.open-mpi.org/mailman/listinfo.cgi/users
</span><br>
<span class="quotelev1">&gt; Link to this post: Caution-www.open-mpi.org/community/lists/users/2015/09/27585.php
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; *------------------------------------------------------------------------*
</span><br>
<span class="quotelev1">&gt;   Jalel CHERGUI, LIMSI-CNRS, B?t. 508 - BP 133, 91403 Orsay cedex, FRANCE
</span><br>
<span class="quotelev1">&gt;   T?l: (33 1) 69 85 81 27     ; T?l?copie: (33 1) 69 85 80 88
</span><br>
<span class="quotelev1">&gt;   M?l: Jalel.Chergui_at_[hidden]&lt;mailto:Jalel.Chergui_at_[hidden]&gt; ; R?f?rence: Caution-perso.limsi.fr/chergui
</span><br>
<span class="quotelev1">&gt; *------------------------------------------------------------------------*
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
<span class="quotelev1">&gt; users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: Caution-www.open-mpi.org/mailman/listinfo.cgi/users
</span><br>
<span class="quotelev1">&gt; Link to this post: Caution-www.open-mpi.org/community/lists/users/2015/09/27586.php
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
<span class="quotelev1">&gt; users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: Caution-www.open-mpi.org/mailman/listinfo.cgi/users
</span><br>
<span class="quotelev1">&gt; Link to this post: Caution-www.open-mpi.org/community/lists/users/2015/09/27587.php
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; *------------------------------------------------------------------------*
</span><br>
<span class="quotelev1">&gt;   Jalel CHERGUI, LIMSI-CNRS, B?t. 508 - BP 133, 91403 Orsay cedex, FRANCE
</span><br>
<span class="quotelev1">&gt;   T?l: (33 1) 69 85 81 27     ; T?l?copie: (33 1) 69 85 80 88
</span><br>
<span class="quotelev1">&gt;   M?l: Jalel.Chergui_at_[hidden]&lt;mailto:Jalel.Chergui_at_[hidden]&gt; ; R?f?rence: Caution-perso.limsi.fr/chergui
</span><br>
<span class="quotelev1">&gt; *------------------------------------------------------------------------*
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
<span class="quotelev1">&gt; users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: Caution-www.open-mpi.org/mailman/listinfo.cgi/users
</span><br>
<span class="quotelev1">&gt; Link to this post: Caution-www.open-mpi.org/community/lists/users/2015/09/27588.php
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
<span class="quotelev1">&gt; users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: Caution-www.open-mpi.org/mailman/listinfo.cgi/users
</span><br>
<span class="quotelev1">&gt; Link to this post: Caution-www.open-mpi.org/community/lists/users/2015/09/27589.php
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; *------------------------------------------------------------------------*
</span><br>
<span class="quotelev1">&gt;   Jalel CHERGUI, LIMSI-CNRS, B?t. 508 - BP 133, 91403 Orsay cedex, FRANCE
</span><br>
<span class="quotelev1">&gt;   T?l: (33 1) 69 85 81 27     ; T?l?copie: (33 1) 69 85 80 88
</span><br>
<span class="quotelev1">&gt;   M?l: Jalel.Chergui_at_[hidden]&lt;mailto:Jalel.Chergui_at_[hidden]&gt; ; R?f?rence: Caution-perso.limsi.fr/chergui
</span><br>
<span class="quotelev1">&gt; *------------------------------------------------------------------------*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; CLASSIFICATION: UNCLASSIFIED
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/09/27594.php">http://www.open-mpi.org/community/lists/users/2015/09/27594.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27598.php">Mark Moorcroft: "[OMPI users] XHPL question"</a>
<li><strong>Previous message:</strong> <a href="27596.php">Kumar, Sudhir: "Re: [OMPI users] open mpi gcc"</a>
<li><strong>In reply to:</strong> <a href="27594.php">Burns, Andrew J CTR USARMY RDECOM ARL (US): "Re: [OMPI users] bug in MPI_Comm_accept? (UNCLASSIFIED)"</a>
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
