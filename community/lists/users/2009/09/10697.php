<?
$subject_val = "Re: [OMPI users] running open mpi on ubuntu 9.04";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Sep 19 16:54:07 2009" -->
<!-- isoreceived="20090919205407" -->
<!-- sent="Sat, 19 Sep 2009 22:54:02 +0200" -->
<!-- isosent="20090919205402" -->
<!-- name="Marce" -->
<!-- email="marcemb_at_[hidden]" -->
<!-- subject="Re: [OMPI users] running open mpi on ubuntu 9.04" -->
<!-- id="462af7860909191354x5f2b4f37v91698abfd96c9563_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="70A5AC06FDB5E54482D19E1C04CDFCF307C375BD_at_BALI.uhd.campus" -->
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
<strong>From:</strong> Marce (<em>marcemb_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-19 16:54:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10698.php">Hodgess, Erin: "Re: [OMPI users] running open mpi on ubuntu 9.04"</a>
<li><strong>Previous message:</strong> <a href="10696.php">Ralph Castain: "Re: [OMPI users] Program hangs when run in the remote host ..."</a>
<li><strong>In reply to:</strong> <a href="10690.php">Hodgess, Erin: "Re: [OMPI users] running open mpi on ubuntu 9.04"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10698.php">Hodgess, Erin: "Re: [OMPI users] running open mpi on ubuntu 9.04"</a>
<li><strong>Reply:</strong> <a href="10698.php">Hodgess, Erin: "Re: [OMPI users] running open mpi on ubuntu 9.04"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
2009/9/18 Hodgess, Erin &lt;HodgessE_at_[hidden]&gt;:
<br>
<span class="quotelev1">&gt; There is no hosts file there originally
</span><br>
<span class="quotelev1">&gt; I put in
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160;cat hosts
</span><br>
<span class="quotelev1">&gt; 127.0.0.1&#160;&#160;&#160;&#160;&#160;&#160; localhost
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; but still get the same thing
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; thanks,
</span><br>
<span class="quotelev1">&gt; Erin
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; erin_at_erin-laptop:~$
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] on behalf of Whit Armstrong
</span><br>
<span class="quotelev1">&gt; Sent: Fri 9/18/2009 7:36 AM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] running open mpi on ubuntu 9.04
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; yes, I had this issue before (we are on 9.04 as well).
</span><br>
<span class="quotelev1">&gt; it has to do with the hosts file.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Erin, can you send your hosts file?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think you want to make this the first line of your host file:
</span><br>
<span class="quotelev1">&gt; 127.0.0.1&#160;&#160;&#160;&#160;&#160;&#160; localhost
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Which Ubuntu, if memory serves defaults to the name of the machine instead
</span><br>
<span class="quotelev1">&gt; of localhost.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Whit
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Fri, Sep 18, 2009 at 8:31 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It doesn't matter - 1.3 isn't going to launch another daemon on the local
</span><br>
<span class="quotelev2">&gt;&gt; node.
</span><br>
<span class="quotelev2">&gt;&gt; The problem here is that OMPI isn't recognizing your local host as being
</span><br>
<span class="quotelev2">&gt;&gt; &quot;local&quot; - i.e., it thinks that the host mpirun is executing on is somehow
</span><br>
<span class="quotelev2">&gt;&gt; not the the local host. This has come up before with ubuntu - you might
</span><br>
<span class="quotelev2">&gt;&gt; search the user mailing list for &quot;ubuntu&quot; to see earlier threads on this
</span><br>
<span class="quotelev2">&gt;&gt; issue.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I forget the final solution, but those earlier threads will explain what
</span><br>
<span class="quotelev2">&gt;&gt; needs to be done. I'm afraid this is something quite specific to ubuntu.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Sep 18, 2009, at 6:23 AM, Whit Armstrong wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; can you &quot;ssh localhost&quot; without a password?
</span><br>
<span class="quotelev2">&gt;&gt; -Whit
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Thu, Sep 17, 2009 at 11:50 PM, Hodgess, Erin &lt;HodgessE_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It's 1.3, please.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Erin
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Erin M. Hodgess, PhD
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Associate Professor
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Department of Computer and Mathematical Sciences
</span><br>
<span class="quotelev3">&gt;&gt;&gt; University of Houston - Downtown
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mailto: hodgesse_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From: users-bounces_at_[hidden] on behalf of Ralph Castain
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sent: Thu 9/17/2009 10:39 PM
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subject: Re: [OMPI users] running open mpi on ubuntu 9.04
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I gather you must be running a version of the old 1.2 series? Or are
</span><br>
<span class="quotelev3">&gt;&gt;&gt; you running 1.3?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It does make a difference as to the nature of the problem, and the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; recommended solution.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Sep 17, 2009, at 8:51 PM, Hodgess, Erin wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Dear Open MPI people:
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; I'm trying to run a simple &quot;hello world&quot; program on Ubuntu 9.04
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; It's on a dual core laptop; no other machines.
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Here is the output:
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; erin_at_erin-laptop:~$ mpirun -np 2 a.out
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; ssh: connect to host erin-laptop port 22: Connection refused
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; A daemon (pid 11854) died unexpectedly with status 255 while
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; attempting
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; to launch so we are aborting.
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; There may be more information reported by the environment (see above).
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; This may be because the daemon was unable to find all the needed
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; shared
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; libraries on the remote node. You may set your LD_LIBRARY_PATH to
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; have the
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; location of the shared libraries on the remote nodes and this will
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; automatically be forwarded to the remote nodes.
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; mpirun noticed that the job aborted, but has no info as to the process
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; that caused that situation.
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; mpirun: clean termination accomplished
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; erin_at_erin-laptop:~$
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Any help would be much appreciated.
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Sincerely,
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Erin
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Erin M. Hodgess, PhD
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Associate Professor
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Department of Computer and Mathematical Sciences
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; University of Houston - Downtown
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; mailto: hodgesse_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<p>Can you type us the follow output?
<br>
<p><span class="quotelev1">&gt; echo $LD_LIBRARY_PATH
</span><br>
<p>If this command doesn&#180;t produce any output, you must define the
<br>
environment variable:
<br>
<p>export LD_LIBRARY_PATH=/usr/lib/openmpi/lib/
<br>
<p>(export LD_LIBRARY_PATH=/usr/lib64/openmpi/lib/ if you have 64 bit distribution)
<br>
<p>Saludos,
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10698.php">Hodgess, Erin: "Re: [OMPI users] running open mpi on ubuntu 9.04"</a>
<li><strong>Previous message:</strong> <a href="10696.php">Ralph Castain: "Re: [OMPI users] Program hangs when run in the remote host ..."</a>
<li><strong>In reply to:</strong> <a href="10690.php">Hodgess, Erin: "Re: [OMPI users] running open mpi on ubuntu 9.04"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10698.php">Hodgess, Erin: "Re: [OMPI users] running open mpi on ubuntu 9.04"</a>
<li><strong>Reply:</strong> <a href="10698.php">Hodgess, Erin: "Re: [OMPI users] running open mpi on ubuntu 9.04"</a>
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
