<?
$subject_val = "Re: [OMPI users] running open mpi on ubuntu 9.04";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 18 08:36:48 2009" -->
<!-- isoreceived="20090918123648" -->
<!-- sent="Fri, 18 Sep 2009 08:36:43 -0400" -->
<!-- isosent="20090918123643" -->
<!-- name="Whit Armstrong" -->
<!-- email="armstrong.whit_at_[hidden]" -->
<!-- subject="Re: [OMPI users] running open mpi on ubuntu 9.04" -->
<!-- id="8ec76080909180536g385d63e6pd7e3d05710c52b12_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="4F64585C-F67A-449A-8D91-481E94B285F1_at_open-mpi.org" -->
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
<strong>From:</strong> Whit Armstrong (<em>armstrong.whit_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-18 08:36:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10686.php">Constantinos Makassikis: "[OMPI users] Changing location where checkpoints are saved"</a>
<li><strong>Previous message:</strong> <a href="10684.php">Ralph Castain: "Re: [OMPI users] running open mpi on ubuntu 9.04"</a>
<li><strong>In reply to:</strong> <a href="10684.php">Ralph Castain: "Re: [OMPI users] running open mpi on ubuntu 9.04"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10690.php">Hodgess, Erin: "Re: [OMPI users] running open mpi on ubuntu 9.04"</a>
<li><strong>Reply:</strong> <a href="10690.php">Hodgess, Erin: "Re: [OMPI users] running open mpi on ubuntu 9.04"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
yes, I had this issue before (we are on 9.04 as well).
<br>
it has to do with the hosts file.
<br>
<p>Erin, can you send your hosts file?
<br>
<p>I think you want to make this the first line of your host file:
<br>
127.0.0.1       localhost
<br>
<p>Which Ubuntu, if memory serves defaults to the name of the machine instead
<br>
of localhost.
<br>
<p>-Whit
<br>
<p><p>On Fri, Sep 18, 2009 at 8:31 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; It doesn't matter - 1.3 isn't going to launch another daemon on the local
</span><br>
<span class="quotelev1">&gt; node.
</span><br>
<span class="quotelev1">&gt; The problem here is that OMPI isn't recognizing your local host as being
</span><br>
<span class="quotelev1">&gt; &quot;local&quot; - i.e., it thinks that the host mpirun is executing on is somehow
</span><br>
<span class="quotelev1">&gt; not the the local host. This has come up before with ubuntu - you might
</span><br>
<span class="quotelev1">&gt; search the user mailing list for &quot;ubuntu&quot; to see earlier threads on this
</span><br>
<span class="quotelev1">&gt; issue.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I forget the final solution, but those earlier threads will explain what
</span><br>
<span class="quotelev1">&gt; needs to be done. I'm afraid this is something quite specific to ubuntu.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 18, 2009, at 6:23 AM, Whit Armstrong wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; can you &quot;ssh localhost&quot; without a password?
</span><br>
<span class="quotelev1">&gt; -Whit
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, Sep 17, 2009 at 11:50 PM, Hodgess, Erin &lt;HodgessE_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It's 1.3, please.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Erin
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Erin M. Hodgess, PhD
</span><br>
<span class="quotelev2">&gt;&gt; Associate Professor
</span><br>
<span class="quotelev2">&gt;&gt; Department of Computer and Mathematical Sciences
</span><br>
<span class="quotelev2">&gt;&gt; University of Houston - Downtown
</span><br>
<span class="quotelev2">&gt;&gt; mailto: hodgesse_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt;&gt; From: users-bounces_at_[hidden] on behalf of Ralph Castain
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Thu 9/17/2009 10:39 PM
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] running open mpi on ubuntu 9.04
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I gather you must be running a version of the old 1.2 series? Or are
</span><br>
<span class="quotelev2">&gt;&gt; you running 1.3?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It does make a difference as to the nature of the problem, and the
</span><br>
<span class="quotelev2">&gt;&gt; recommended solution.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Sep 17, 2009, at 8:51 PM, Hodgess, Erin wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Dear Open MPI people:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I'm trying to run a simple &quot;hello world&quot; program on Ubuntu 9.04
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; It's on a dual core laptop; no other machines.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Here is the output:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; erin_at_erin-laptop:~$ mpirun -np 2 a.out
</span><br>
<span class="quotelev3">&gt;&gt; &gt; ssh: connect to host erin-laptop port 22: Connection refused
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt; &gt; A daemon (pid 11854) died unexpectedly with status 255 while
</span><br>
<span class="quotelev3">&gt;&gt; &gt; attempting
</span><br>
<span class="quotelev3">&gt;&gt; &gt; to launch so we are aborting.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; There may be more information reported by the environment (see above).
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; This may be because the daemon was unable to find all the needed
</span><br>
<span class="quotelev3">&gt;&gt; &gt; shared
</span><br>
<span class="quotelev3">&gt;&gt; &gt; libraries on the remote node. You may set your LD_LIBRARY_PATH to
</span><br>
<span class="quotelev3">&gt;&gt; &gt; have the
</span><br>
<span class="quotelev3">&gt;&gt; &gt; location of the shared libraries on the remote nodes and this will
</span><br>
<span class="quotelev3">&gt;&gt; &gt; automatically be forwarded to the remote nodes.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt; &gt; mpirun noticed that the job aborted, but has no info as to the process
</span><br>
<span class="quotelev3">&gt;&gt; &gt; that caused that situation.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt; &gt; mpirun: clean termination accomplished
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; erin_at_erin-laptop:~$
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Any help would be much appreciated.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Sincerely,
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Erin
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Erin M. Hodgess, PhD
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Associate Professor
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Department of Computer and Mathematical Sciences
</span><br>
<span class="quotelev3">&gt;&gt; &gt; University of Houston - Downtown
</span><br>
<span class="quotelev3">&gt;&gt; &gt; mailto: hodgesse_at_[hidden]
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
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10685/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10686.php">Constantinos Makassikis: "[OMPI users] Changing location where checkpoints are saved"</a>
<li><strong>Previous message:</strong> <a href="10684.php">Ralph Castain: "Re: [OMPI users] running open mpi on ubuntu 9.04"</a>
<li><strong>In reply to:</strong> <a href="10684.php">Ralph Castain: "Re: [OMPI users] running open mpi on ubuntu 9.04"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10690.php">Hodgess, Erin: "Re: [OMPI users] running open mpi on ubuntu 9.04"</a>
<li><strong>Reply:</strong> <a href="10690.php">Hodgess, Erin: "Re: [OMPI users] running open mpi on ubuntu 9.04"</a>
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
