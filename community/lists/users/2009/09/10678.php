<?
$subject_val = "Re: [OMPI users] running open mpi on ubuntu 9.04";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 17 23:50:27 2009" -->
<!-- isoreceived="20090918035027" -->
<!-- sent="Thu, 17 Sep 2009 22:50:11 -0500" -->
<!-- isosent="20090918035011" -->
<!-- name="Hodgess, Erin" -->
<!-- email="HodgessE_at_[hidden]" -->
<!-- subject="Re: [OMPI users] running open mpi on ubuntu 9.04" -->
<!-- id="70A5AC06FDB5E54482D19E1C04CDFCF307C375B8_at_BALI.uhd.campus" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="98FC571C-D521-4DF9-AB48-C9AA8534B9AB_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] running open mpi on ubuntu 9.04<br>
<strong>From:</strong> Hodgess, Erin (<em>HodgessE_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-17 23:50:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10679.php">Ashika Umanga Umagiliya: "Re: [OMPI users] Multi-threading  with OpenMPI ?"</a>
<li><strong>Previous message:</strong> <a href="10677.php">Ralph Castain: "Re: [OMPI users] running open mpi on ubuntu 9.04"</a>
<li><strong>In reply to:</strong> <a href="10677.php">Ralph Castain: "Re: [OMPI users] running open mpi on ubuntu 9.04"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10683.php">Whit Armstrong: "Re: [OMPI users] running open mpi on ubuntu 9.04"</a>
<li><strong>Reply:</strong> <a href="10683.php">Whit Armstrong: "Re: [OMPI users] running open mpi on ubuntu 9.04"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It's 1.3, please.
<br>
<p>Thanks,
<br>
Erin
<br>
<p><p>Erin M. Hodgess, PhD
<br>
Associate Professor
<br>
Department of Computer and Mathematical Sciences
<br>
University of Houston - Downtown
<br>
mailto: hodgesse_at_[hidden]
<br>
<p><p><p>-----Original Message-----
<br>
From: users-bounces_at_[hidden] on behalf of Ralph Castain
<br>
Sent: Thu 9/17/2009 10:39 PM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] running open mpi on ubuntu 9.04
<br>
&nbsp;
<br>
I gather you must be running a version of the old 1.2 series? Or are  
<br>
you running 1.3?
<br>
<p>It does make a difference as to the nature of the problem, and the  
<br>
recommended solution.
<br>
<p>Thanks
<br>
Ralph
<br>
<p>On Sep 17, 2009, at 8:51 PM, Hodgess, Erin wrote:
<br>
<p><span class="quotelev1">&gt; Dear Open MPI people:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm trying to run a simple &quot;hello world&quot; program on Ubuntu 9.04
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It's on a dual core laptop; no other machines.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here is the output:
</span><br>
<span class="quotelev1">&gt; erin_at_erin-laptop:~$ mpirun -np 2 a.out
</span><br>
<span class="quotelev1">&gt; ssh: connect to host erin-laptop port 22: Connection refused
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; A daemon (pid 11854) died unexpectedly with status 255 while  
</span><br>
<span class="quotelev1">&gt; attempting
</span><br>
<span class="quotelev1">&gt; to launch so we are aborting.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There may be more information reported by the environment (see above).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This may be because the daemon was unable to find all the needed  
</span><br>
<span class="quotelev1">&gt; shared
</span><br>
<span class="quotelev1">&gt; libraries on the remote node. You may set your LD_LIBRARY_PATH to  
</span><br>
<span class="quotelev1">&gt; have the
</span><br>
<span class="quotelev1">&gt; location of the shared libraries on the remote nodes and this will
</span><br>
<span class="quotelev1">&gt; automatically be forwarded to the remote nodes.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun noticed that the job aborted, but has no info as to the process
</span><br>
<span class="quotelev1">&gt; that caused that situation.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun: clean termination accomplished
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; erin_at_erin-laptop:~$
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any help would be much appreciated.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sincerely,
</span><br>
<span class="quotelev1">&gt; Erin
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Erin M. Hodgess, PhD
</span><br>
<span class="quotelev1">&gt; Associate Professor
</span><br>
<span class="quotelev1">&gt; Department of Computer and Mathematical Sciences
</span><br>
<span class="quotelev1">&gt; University of Houston - Downtown
</span><br>
<span class="quotelev1">&gt; mailto: hodgesse_at_[hidden]
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
<p><p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10678/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10679.php">Ashika Umanga Umagiliya: "Re: [OMPI users] Multi-threading  with OpenMPI ?"</a>
<li><strong>Previous message:</strong> <a href="10677.php">Ralph Castain: "Re: [OMPI users] running open mpi on ubuntu 9.04"</a>
<li><strong>In reply to:</strong> <a href="10677.php">Ralph Castain: "Re: [OMPI users] running open mpi on ubuntu 9.04"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10683.php">Whit Armstrong: "Re: [OMPI users] running open mpi on ubuntu 9.04"</a>
<li><strong>Reply:</strong> <a href="10683.php">Whit Armstrong: "Re: [OMPI users] running open mpi on ubuntu 9.04"</a>
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
