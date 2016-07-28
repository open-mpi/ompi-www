<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Mar  7 14:09:18 2006" -->
<!-- isoreceived="20060307190918" -->
<!-- sent="Tue, 07 Mar 2006 13:09:19 -0600" -->
<!-- isosent="20060307190919" -->
<!-- name="Edgar Gabriel" -->
<!-- email="gabriel_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Spawn and Disconnect" -->
<!-- id="440DDA5F.4050402_at_cs.uh.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="9F338D4AF3BC914798EA790B4A342F9E015C26DC_at_nexs0015.nexant.com" -->
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
<strong>From:</strong> Edgar Gabriel (<em>gabriel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-03-07 14:09:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0793.php">Cezary Sliwa: "[OMPI users] [Fwd: MPI_SEND blocks when crossing node boundary]"</a>
<li><strong>Previous message:</strong> <a href="0791.php">Brignone, Sergio: "Re: [OMPI users] Spawn and Disconnect"</a>
<li><strong>In reply to:</strong> <a href="0791.php">Brignone, Sergio: "Re: [OMPI users] Spawn and Disconnect"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I know that there was a bug in the F90 interface of spawn-multiple, 
<br>
however (which is fixed by now as far as I can tell). Could you send me 
<br>
the f77 example which you have? The concatination problem looks strange, 
<br>
I would like to have a look at it...
<br>
<p>Thanks
<br>
Edgar
<br>
<p>Brignone, Sergio wrote:
<br>
<p><span class="quotelev1">&gt; Thanks Edgar, Ralph and Jean.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It seems to me that the problem I am having is related to the operating
</span><br>
<span class="quotelev1">&gt; system or MPI configuration or compiler or all of them (I am using
</span><br>
<span class="quotelev1">&gt; Solaris).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For example, the F90 as well as the C++ interfaces could not be compiled
</span><br>
<span class="quotelev1">&gt; (I had to configure MPI without them). 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I converted Jean's example to F77 and tested. It didn't work (off
</span><br>
<span class="quotelev1">&gt; course, you can always claim that I didn't convert them right ...); in
</span><br>
<span class="quotelev1">&gt; fact it seems I got errors in the Fortran to C conversion of strings
</span><br>
<span class="quotelev1">&gt; (the program fils1 exists but notice the error: it concatenates all
</span><br>
<span class="quotelev1">&gt; strings. This looks to me that the F to C conversion is not correct).
</span><br>
<span class="quotelev1">&gt; So I am assuming that the problems are related to my particular
</span><br>
<span class="quotelev1">&gt; environment. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I will debug and see what the problem is.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for your help.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sergio Brignone
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; bash-2.03$ perem
</span><br>
<span class="quotelev1">&gt;  PR : rank =  0  size =  1
</span><br>
<span class="quotelev1">&gt;  PR : I am running on PE 0
</span><br>
<span class="quotelev1">&gt;  PR : I am before the spawning of fils1 on PE 1 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Could not execute the executable &quot;./fils1 ./fils2 ./fils3 ./fils4 &quot;: No
</span><br>
<span class="quotelev1">&gt; such file or directory
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This could mean that your PATH or executable name is wrong, or that you
</span><br>
<span class="quotelev1">&gt; do not
</span><br>
<span class="quotelev1">&gt; have the necessary permissions.  Please ensure that the executable is
</span><br>
<span class="quotelev1">&gt; able to be
</span><br>
<span class="quotelev1">&gt; found and executed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: Jean Latour [mailto:latour_at_[hidden]] 
</span><br>
<span class="quotelev1">&gt; Sent: Friday, March 03, 2006 1:50 AM
</span><br>
<span class="quotelev1">&gt; To: rhc_at_[hidden]; Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Spawn and Disconnect
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Just to add an example that may help  to this &quot;disconnect&quot; discussion :
</span><br>
<span class="quotelev1">&gt; Attached is the code of a test that does the following (and it works 
</span><br>
<span class="quotelev1">&gt; perfectly with OpenMPI 1.0.1)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  1) master spawns slave1
</span><br>
<span class="quotelev1">&gt;  2) master spawns slave2
</span><br>
<span class="quotelev1">&gt;  3) exechange messages between master and slaves over intercommunicator
</span><br>
<span class="quotelev1">&gt;  4) slave1 disconnects from master and finalize
</span><br>
<span class="quotelev1">&gt;  5) slave2 disconnects from master and finalize
</span><br>
<span class="quotelev1">&gt; (the processors used by slave 1 and slave 2 can now be re-used by new 
</span><br>
<span class="quotelev1">&gt; spawned processes)
</span><br>
<span class="quotelev1">&gt;  6) master spawns slave3, and then slave4
</span><br>
<span class="quotelev1">&gt;  7) slave3 and slave4 have NO direct communicator, but they can create 
</span><br>
<span class="quotelev1">&gt; one through the Open-Port
</span><br>
<span class="quotelev1">&gt; mechanism and the MPI_Connect / MPI_Accept functions.
</span><br>
<span class="quotelev1">&gt; The port number is relayed through the master.
</span><br>
<span class="quotelev1">&gt;  8) slave3 and slave4 create this direct communicator and do some 
</span><br>
<span class="quotelev1">&gt; pingpong over it
</span><br>
<span class="quotelev1">&gt;  9) slave3 and slave4 disconnect from each other on this direct
</span><br>
<span class="quotelev1">&gt; communicator
</span><br>
<span class="quotelev1">&gt; 10) slave3 and slave4 disconnect from master an finalize
</span><br>
<span class="quotelev1">&gt; 11) master finalize
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hope it helps
</span><br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt; Jean Latour
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;We expect to have much better support for the entire comm_spawn 
</span><br>
<span class="quotelev2">&gt;&gt;process in the next incarnation of the RTE. I don't expect that to be 
</span><br>
<span class="quotelev2">&gt;&gt;included in a release, however, until 1.1 (Jeff may be able to give 
</span><br>
<span class="quotelev2">&gt;&gt;you an estimate for when that will happen).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Jeff et al may be able to give you access to an early non-release 
</span><br>
<span class="quotelev2">&gt;&gt;version sooner, if better comm_spawn support is a critical issue and 
</span><br>
<span class="quotelev2">&gt;&gt;you don't mind being patient with the inevitable bugs in such
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; versions.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;Ralph
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Edgar Gabriel wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;Open MPI currently does not fully support a proper disconnection of 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;parent and child processes. Thus, if a child dies/aborts, the parents 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;will abort as well, despite of calling MPI_Comm_disconnect. (The new
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; RTE 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;will have better support for these operations, Ralph/Jeff can probably
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;give a better estimate when this will be available.)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;However, what should not happen is, that if the child calls
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MPI_Finalize 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;(so not a violent death but a proper shutdown), the parent goes down
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; at 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;the same time. Let me check that as well...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;Brignone, Sergio wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;Hi everybody,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;I am trying to run a master/slave set.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;Because of the nature of the problem I need to start and stop (kill) 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;some slaves.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;The problem is that as soon as one of the slave dies, the master dies
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; also.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;This is what I am doing:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;MASTER:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;MPI_Init(...)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;MPI_Comm_spawn(slave1,...,nslave1,...,intercomm1);
</span><br>
<p><span class="quotelev4">&gt;&gt;&gt;&gt;MPI_Barrier(intercomm1);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;MPI_Comm_disconnect(&amp;intercomm1);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;MPI_Comm_spawn(slave2,...,nslave2,...,intercomm2);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;MPI_Barrier(intercomm2);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;MPI_Comm_disconnect(&amp;intercomm2);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;MPI_Finalize();
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;SLAVE:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;MPI_Init(...)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;MPI_Comm_get_parent(&amp;intercomm);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;(does something)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;MPI_Barrier(intercomm);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;MPI_Comm_disconnect(&amp;intercomm);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;MPI_Finalize();
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;The issue is that as soon as the first set of slaves calls
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MPI_Finalize, 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;the master dies also (it dies right after
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MPI_Comm_disconnect(&amp;intercomm1) )
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;What am I doing wrong?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;Thanks
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;Sergio
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0793.php">Cezary Sliwa: "[OMPI users] [Fwd: MPI_SEND blocks when crossing node boundary]"</a>
<li><strong>Previous message:</strong> <a href="0791.php">Brignone, Sergio: "Re: [OMPI users] Spawn and Disconnect"</a>
<li><strong>In reply to:</strong> <a href="0791.php">Brignone, Sergio: "Re: [OMPI users] Spawn and Disconnect"</a>
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
