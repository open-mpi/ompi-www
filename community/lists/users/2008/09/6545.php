<?
$subject_val = "Re: [OMPI users] MPI_sendrecv = MPI_Send+ MPI_RECV ?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 15 14:08:31 2008" -->
<!-- isoreceived="20080915180831" -->
<!-- sent="Mon, 15 Sep 2008 14:08:24 -0400" -->
<!-- isosent="20080915180824" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_sendrecv = MPI_Send+ MPI_RECV ?" -->
<!-- id="CAC613AD-0256-4A88-8211-52E5B6DB4309_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="845f51b10809150933m23de9bb9ta6ad3fc1c4f7dd06_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_sendrecv = MPI_Send+ MPI_RECV ?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-15 14:08:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6546.php">Jeff Squyres: "Re: [OMPI users] Why compilig in global paths (only) for	configuretion files?"</a>
<li><strong>Previous message:</strong> <a href="6544.php">Eric Thibodeau: "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
<li><strong>In reply to:</strong> <a href="6543.php">Enrico Barausse: "Re: [OMPI users] MPI_sendrecv = MPI_Send+ MPI_RECV ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6548.php">Enrico Barausse: "Re: [OMPI users] MPI_sendrecv = MPI_Send+ MPI_RECV ?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Checking your original post, you had this:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call
<br>
MPI_Send(toroot,3,MPI_DOUBLE_PRECISION,root,n,MPI_COMM_WORLD
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call
<br>
MPI_RECV(tonode, 
<br>
4,MPI_DOUBLE_PRECISION,root,n,MPI_COMM_WORLD,status,ierr)
<br>
<p>There was already discussion of the 3 vs. 4 and we're assuming that  
<br>
toroot and tonode are large enough (note that I think you mean &quot;array  
<br>
of size 3&quot; and &quot;array of size 4&quot;, not &quot;3d&quot; and &quot;4d&quot;, right?).
<br>
<p>I notice that the ierr argument is missing from the MPI_Send, above.   
<br>
Is that a typo?  It could be, because the ) is missing, as well.  But  
<br>
a missing ierr can be a common cause for a segv in Fortran -- we  
<br>
typically don't assign to ierr until after the MPI_Send completes, so  
<br>
it *could* explain the behavior you're seeing...?
<br>
<p><p>On Sep 15, 2008, at 12:33 PM, Enrico Barausse wrote:
<br>
<p><span class="quotelev1">&gt; sorry, I should pay more attention when I edit the subject of the  
</span><br>
<span class="quotelev1">&gt; daily digest
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Dear Eric, Aurelien and Eugene
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; thanks a lot for helping. What Eugene said summarizes exactly the
</span><br>
<span class="quotelev1">&gt; situation. I agree it's an issue with the full code, since the problem
</span><br>
<span class="quotelev1">&gt; doesn't arise in simple examples, like the one I posted. I was just
</span><br>
<span class="quotelev1">&gt; hoping I was doing something trivially wrong and that someone would
</span><br>
<span class="quotelev1">&gt; shout at me :-). I could post the full code, but it's quite a long
</span><br>
<span class="quotelev1">&gt; one. At the moment I am still going through it searching for the
</span><br>
<span class="quotelev1">&gt; problem, so I'll wait a bit before spamming the other users.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; cheers
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Enrico
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Mon, Sep 15, 2008 at 6:00 PM,  &lt;users-request_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Send users mailing list submissions to
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To subscribe or unsubscribe via the World Wide Web, visit
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; or, via email, send a message with subject or body 'help' to
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       users-request_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; You can reach the person managing the list at
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       users-owner_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; When replying, please edit your Subject line so it is more specific
</span><br>
<span class="quotelev3">&gt;&gt;&gt; than &quot;Re: Contents of users digest...&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Today's Topics:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  1. Re: Problem using VampirTrace (Thomas Ropars)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  2. Re: Why compilig in global paths (only) for       configuretion
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     files? (Paul Kapinos)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  3. Re: MPI_sendrecv = MPI_Send+ MPI_RECV ? (Eugene Loh)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Message: 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Date: Mon, 15 Sep 2008 15:04:07 +0200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From: Thomas Ropars &lt;tropars_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subject: Re: [OMPI users] Problem using VampirTrace
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To: Andreas Kn?pfer &lt;andreas.knuepfer_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cc: users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Message-ID: &lt;48CE5D47.50407_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Content-Type: text/plain; charset=ISO-8859-1; format=flowed
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I don't have a common file system for all cluster nodes.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I've tried to run the application again with VT_UNIFY=no and to call
</span><br>
<span class="quotelev3">&gt;&gt;&gt; vtunify manually. It works well. I managed to get the .otf file.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thank you.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thomas Ropars
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Andreas Kn?pfer wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hello Thomas,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; sorry for the delay. My first asumption about the cause of your  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; problem is the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; so called &quot;unify&quot; process. This is a post-processing step which  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; is performed
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; automatically after the trace run. This step needs read access to  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; all files,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; though. So, do you have a common file system for all cluster nodes?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; If yes, set the env variable VT_PFORM_GDIR point there. Then the  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; traces will
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; be copied there from the location VT_PFORM_LDIR which still can  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; be a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; node-local directory. Then everything will be handled  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; automatically.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; If not, please set VT_UNIFY=no in order to disable automatic  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; unification. Then
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; you need to call vtunify manually. Please copy all files from the  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; run
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; directory that start with your OTF file prefix to a common  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; directory and call
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; %&gt; vtunify &lt;number of processes&gt; &lt;file prefix&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; there. This should give you the &lt;prefix&gt;.otf file.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Please give this a try. If it is not working, please give me an  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 'ls -alh' from
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; your trace directory/directories.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Best regards, Andreas
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; P.S.: Please have my email on CC, I'm not on the users_at_open- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpi.org list.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; From: Thomas Ropars &lt;tropars_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Date: August 11, 2008 3:47:54 PM IST
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Subject: [OMPI users] Problem using VampirTrace
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Reply-To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Hi all,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I'm trying to use VampirTrace.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I'm working with r19234 of svn trunk.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; When I try to run a simple application with 4 processes on the  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; same
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; computer, it works well.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; But if try to use the same application with the 4 processes  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; executed
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; on 4 different computers, I never get the .otf file.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I've tried to run with VT_VERBOSE=yes, and I get the following  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; trace:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; VampirTrace: Thread object #0 created, total number is 1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; VampirTrace: Opened OTF writer stream [namestub /tmp/ring-
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; vt.fffffffffe8349ca.3294 id 1] for generation [buffer 32000000  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; bytes]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; VampirTrace: Thread object #0 created, total number is 1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; VampirTrace: Opened OTF writer stream [namestub /tmp/ring-
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; vt.fffffffffe834bca.3020 id 1] for generation [buffer 32000000  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; bytes]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; VampirTrace: Thread object #0 created, total number is 1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; VampirTrace: Opened OTF writer stream [namestub /tmp/ring-
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; vt.fffffffffe834aca.3040 id 1] for generation [buffer 32000000  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; bytes]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; VampirTrace: Thread object #0 created, total number is 1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; VampirTrace: Opened OTF writer stream [namestub /tmp/ring-
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; vt.fffffffffe834fca.3011 id 1] for generation [buffer 32000000  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; bytes]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Ring : Start
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Ring : End
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [1]VampirTrace: Flushed OTF writer stream [namestub /tmp/ring-
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; vt.fffffffffe834aca.3040 id 1]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [2]VampirTrace: Flushed OTF writer stream [namestub /tmp/ring-
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; vt.fffffffffe834bca.3020 id 1]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [1]VampirTrace: Closed OTF writer stream [namestub /tmp/ring-
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; vt.fffffffffe834aca.3040 id 1]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [3]VampirTrace: Flushed OTF writer stream [namestub /tmp/ring-
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; vt.fffffffffe834fca.3011 id 1]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [2]VampirTrace: Closed OTF writer stream [namestub /tmp/ring-
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; vt.fffffffffe834bca.3020 id 1]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [0]VampirTrace: Flushed OTF writer stream [namestub /tmp/ring-
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; vt.fffffffffe8349ca.3294 id 1]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [1]VampirTrace: Wrote unify control file ./ring-vt.2.uctl
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [2]VampirTrace: Wrote unify control file ./ring-vt.3.uctl
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [3]VampirTrace: Closed OTF writer stream [namestub /tmp/ring-
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; vt.fffffffffe834fca.3011 id 1]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [0]VampirTrace: Closed OTF writer stream [namestub /tmp/ring-
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; vt.fffffffffe8349ca.3294 id 1]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [0]VampirTrace: Wrote unify control file ./ring-vt.1.uctl
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [0]VampirTrace: Checking for ./ring-vt.1.uctl ...
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [0]VampirTrace: Checking for ./ring-vt.2.uctl ...
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [1]VampirTrace: Removed trace file /tmp/ring-vt.fffffffffe834aca.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 3040.1.def
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [2]VampirTrace: Removed trace file /tmp/ring-vt.fffffffffe834bca.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 3020.1.def
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [3]VampirTrace: Wrote unify control file ./ring-vt.4.uctl
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [1]VampirTrace: Removed trace file /tmp/ring-vt.fffffffffe834aca.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 3040.1.events
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [2]VampirTrace: Removed trace file /tmp/ring-vt.fffffffffe834bca.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 3020.1.events
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [3]VampirTrace: Removed trace file /tmp/ring-vt.fffffffffe834fca.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 3011.1.def
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [1]VampirTrace: Thread object #0 deleted, leaving 0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [2]VampirTrace: Thread object #0 deleted, leaving 0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [3]VampirTrace: Removed trace file /tmp/ring-vt.fffffffffe834fca.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 3011.1.events
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [3]VampirTrace: Thread object #0 deleted, leaving 0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Regards
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Thomas
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Message: 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Date: Mon, 15 Sep 2008 17:22:03 +0200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From: Paul Kapinos &lt;kapinos_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subject: Re: [OMPI users] Why compilig in global paths (only) for
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       configuretion files?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;,        Samuel Sarholz
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       &lt;sarholz_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Message-ID: &lt;48CE7D9B.8070207_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Content-Type: text/plain; charset=&quot;iso-8859-1&quot;; Format=&quot;flowed&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi Jeff, hi all!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Short answer: yes, we do compile in the prefix path into OMPI.   
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Check
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; out this FAQ entry; I think it'll solve your problem:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    <a href="http://www.open-mpi.org/faq/?category=building#installdirs">http://www.open-mpi.org/faq/?category=building#installdirs</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Yes, reading man pages helps!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thank you to provide useful help.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; But the setting of the environtemt variable OPAL_PREFIX to an
</span><br>
<span class="quotelev3">&gt;&gt;&gt; appropriate value (assuming PATH and LD_LIBRARY_PATH are setted  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; too) is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; not enough to let the OpenMPI rock&amp;roll from the new lokation.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Because of the fact, that all the files containing settings for
</span><br>
<span class="quotelev3">&gt;&gt;&gt; opal_wrapper, which are located in share/openmpi/ and called e.g.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpif77-wrapper-data.txt, contain (defined by installation with -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; prefix)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hard-coded paths, too.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have fixed the problem by parsing all the files  share/openmpi/ 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *.txt
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and replacing the old path through new path. This nasty solution  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; seems
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to work.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; But, is there an elegant way to do this correctness, maybe to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; re-generate the config-files in share/openmpi/
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; And last but not least, the FAQ on the web site you provided (see  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; link
</span><br>
<span class="quotelev3">&gt;&gt;&gt; above) does not containn any info on the need to modufy the wrapper
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configuretion files. Maybe this section schould be upgraded?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Best regards Paul Kapinos
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Sep 8, 2008, at 5:33 AM, Paul Kapinos wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hi all!
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; We are using OpenMPI on an variety of machines (running Linux,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Solaris/Sparc and /Opteron) using couple of compilers (GCC, Sun
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Studio, Intel, PGI, 32 and 64 bit...) so we have at least 15  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; versions
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; of each release of OpenMPI (SUN Cluster Tools not included).
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; This shows, that we have to support an complete petting zoo of
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; OpenMPI's. Sometimes we may need to move things around.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; If OpenMPI is being configured, the install path may be provided  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; using
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --prefix keyword, say so:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ./configure --prefix=/my/love/path/for/openmpi/tmp1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; After &quot;gmake all install&quot; in ...tmp1 an installation of OpenMPI  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; may be
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; found.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Then, say, we need to *move* this Version to an another path, say
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /my/love/path/for/openmpi/blupp
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Of course we have to set $PATH and $LD_LIBRARY_PATH accordingly  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (we
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; can that ;-)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; And if we tried to use OpenMPI from new location, we got error  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; message
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; like
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; $ ./mpicc
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Cannot open configuration file
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /my/love/path/for/openmpi/tmp1/share/openmpi/mpicc-wrapper- 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; data.txt
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Error parsing data file mpicc: Not found
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (note the old installation path used)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; That looks for me, that the install path provided with --prefix in
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; configuration step, is compiled into opal_wrapper executable  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; file and
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; opal_wrapper works iff the set of configuration files is in this  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; path.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; But after move of the OpenMP installation directory the  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; configuration
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; files aren't there...
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; An side effect of this behaviour is the certainty that binary
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; distributions of OpenMPI (RPM's) are not relocatable. That's
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; uncomfortably. (Actually, this mail is initiated by the fact  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; that Sun
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ClusterTools RPM's are not relocatable)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; So, does this behavior have an deeper sence I cannot recognise, or
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; maybe  the configuring of global paths is not needed?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; What I mean, is that the paths for the configuration files, which
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; opal_wrapper need, may be setted locally like ../share/openmpi/***
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; without affectiong the integrity of OpenMPI. Maybe there were were
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; more places where the usage of local paths may be needed to allowe
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; movable (relocable) OpenMPI.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; What do you mean about?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Best regards
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Paul Kapinos
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &lt;kapinos.vcf&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -------------- next part --------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; A non-text attachment was scrubbed...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Name: verwurschel_pfade_openmpi.sh
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Type: application/x-sh
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Size: 369 bytes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Desc: not available
</span><br>
<span class="quotelev3">&gt;&gt;&gt; URL: &lt;<a href="http://www.open-mpi.org/MailArchives/users/attachments/20080915/434c3679/attachment.sh">http://www.open-mpi.org/MailArchives/users/attachments/20080915/434c3679/attachment.sh</a> 
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -------------- next part --------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; A non-text attachment was scrubbed...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Name: kapinos.vcf
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Type: text/x-vcard
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Size: 330 bytes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Desc: not available
</span><br>
<span class="quotelev3">&gt;&gt;&gt; URL: &lt;<a href="http://www.open-mpi.org/MailArchives/users/attachments/20080915/434c3679/attachment.vcf">http://www.open-mpi.org/MailArchives/users/attachments/20080915/434c3679/attachment.vcf</a> 
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -------------- next part --------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; A non-text attachment was scrubbed...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Name: smime.p7s
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Type: application/x-pkcs7-signature
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Size: 4230 bytes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Desc: S/MIME Cryptographic Signature
</span><br>
<span class="quotelev3">&gt;&gt;&gt; URL: &lt;<a href="http://www.open-mpi.org/MailArchives/users/attachments/20080915/434c3679/attachment.bin">http://www.open-mpi.org/MailArchives/users/attachments/20080915/434c3679/attachment.bin</a> 
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Message: 3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Date: Mon, 15 Sep 2008 08:46:11 -0700
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From: Eugene Loh &lt;Eugene.Loh_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subject: Re: [OMPI users] MPI_sendrecv = MPI_Send+ MPI_RECV ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Message-ID: &lt;48CE8343.7060805_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Content-Type: text/plain; format=flowed; charset=ISO-8859-1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Aur?lien Bouteiller wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; You can't assume that MPI_Send does buffering.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Yes, but I think this is what Eric meant by misinterpreting Enrico's
</span><br>
<span class="quotelev3">&gt;&gt;&gt; problem.  The communication pattern is to send a message, which is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; received remotely.  There is remote computation, and then data is  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sent
</span><br>
<span class="quotelev3">&gt;&gt;&gt; back.  No buffering is needed for such a pattern.  The code is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;apparently&quot; legal.  There is apparently something else going on  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;real&quot; code that is not captured in the example Enrico sent.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Further, if I understand correctly, the remote process actually  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; receives
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the data!  If  this is true, the example is as simple as:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; process 1:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   MPI_Send()     // this call blocks
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; process 0:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   MPI_Recv()    // this call actually receives the data sent by
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Send!!!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Enrico originally explained that process 0 actually receives the  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; data.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So, MPI's internal buffering is presumably not a problem at all!  An
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Send effectively sends data to a remote process, but simply  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; never
</span><br>
<span class="quotelev3">&gt;&gt;&gt; returns control to the user program.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Without buffering, you  are in a possible deadlock situation. This
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; pathological case is the  exact motivation for the existence of
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI_Sendrecv. You can also  consider Isend Recv Wait, then the Send
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; will never block, even if the  destination is not ready to  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; receive, or
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI_Bsend that will add  explicit buffering and therefore return
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; control to you before the  message transmission actually begun.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Aurelien
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Le 15 sept. 08 ? 01:08, Eric Thibodeau a ?crit :
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Sorry about that, I had misinterpreted your original post as being
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the pair of send-receive. The example you give below does seem
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; correct indeed, which means you might have to show us the code  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; that
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; doesn't work. Note that I am in no way a Fortran expert, I'm more
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; versed in C. The only hint I'd give a C programmer in this case is
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &quot;make sure your receiving structures are indeed large enough (ie:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; you send 3d but eventually receive 4d...did you allocate for 3d or
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 4d for receiving the converted array...).
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Eric
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Enrico Barausse wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; sorry, I hadn't changed the subject. I'm reposting:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Hi
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I think it's correct. what I want to to is to send a 3d array  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; from  the
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; process 1 to process 0 =root):
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; call MPI_Send(toroot,3,MPI_DOUBLE_PRECISION,root,n,MPI_COMM_WORLD
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; in some other part of the code process 0 acts on the 3d array and
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; turns it into a 4d one and sends it back to process 1, which  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; receives
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; it with
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; call MPI_RECV(tonode,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 4,MPI_DOUBLE_PRECISION,root,n,MPI_COMM_WORLD,status,ierr)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; in practice, what I do i basically give by this simple code  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; (which
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; doesn't give the segmentation fault unfortunately):
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;      a=(/1,2,3,4,5/)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;      call MPI_INIT(ierr)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;      call MPI_COMM_RANK(MPI_COMM_WORLD, id, ierr)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;      call MPI_COMM_SIZE(MPI_COMM_WORLD, numprocs, ierr)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;      if(numprocs/=2) stop
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;      if(id==0) then
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;              do k=1,5
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                      a=a+1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                      call MPI_SEND(a,5,MPI_INTEGER,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 1,k,MPI_COMM_WORLD,ierr)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                      call
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; MPI_RECV(b,4,MPI_INTEGER,1,k,MPI_COMM_WORLD,status,ierr)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;              end do
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;      else
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;              do k=1,5
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                      call
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; MPI_RECV(a,5,MPI_INTEGER,0,k,MPI_COMM_WORLD,status,ierr)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                      b=a(1:4)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                      call MPI_SEND(b,4,MPI_INTEGER,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 0,k,MPI_COMM_WORLD,ierr)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;              end do
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;      end if
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; * Dr. Aur?lien Bouteiller
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; * Sr. Research Associate at Innovative Computing Laboratory
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; * University of Tennessee
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; * 1122 Volunteer Boulevard, suite 350
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; * Knoxville, TN 37996
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; * 865 974 6321
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/user">http://www.open-mpi.org/mailman/listinfo.cgi/user</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; s
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ------------------------------
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
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; End of users Digest, Vol 1006, Issue 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; **************************************
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6546.php">Jeff Squyres: "Re: [OMPI users] Why compilig in global paths (only) for	configuretion files?"</a>
<li><strong>Previous message:</strong> <a href="6544.php">Eric Thibodeau: "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
<li><strong>In reply to:</strong> <a href="6543.php">Enrico Barausse: "Re: [OMPI users] MPI_sendrecv = MPI_Send+ MPI_RECV ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6548.php">Enrico Barausse: "Re: [OMPI users] MPI_sendrecv = MPI_Send+ MPI_RECV ?"</a>
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
