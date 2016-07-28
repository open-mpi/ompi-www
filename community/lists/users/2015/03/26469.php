<?
$subject_val = "Re: [OMPI users] problem with MPI_Comm_spawn in 1.6.5 but not 1.4.3 or 1.8.4";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 13 12:53:08 2015" -->
<!-- isoreceived="20150313165308" -->
<!-- sent="Fri, 13 Mar 2015 09:53:03 -0700" -->
<!-- isosent="20150313165303" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problem with MPI_Comm_spawn in 1.6.5 but not 1.4.3 or 1.8.4" -->
<!-- id="D06FF0BE-E20C-42DF-A3DE-15D955292610_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAG=M9LqNn0J52z_zK-_DVPW4bxUjOiqZ-ajo2FentPWCuC4rPQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] problem with MPI_Comm_spawn in 1.6.5 but not 1.4.3 or 1.8.4<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-03-13 12:53:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26470.php">Fabricio Cannini: "Re: [OMPI users] Cannot compile 1.8.x with intel 12.1 and 'io-romio' enabled"</a>
<li><strong>Previous message:</strong> <a href="26468.php">Chris Paciorek: "Re: [OMPI users] problem with MPI_Comm_spawn in 1.6.5 but not 1.4.3 or 1.8.4"</a>
<li><strong>In reply to:</strong> <a href="26468.php">Chris Paciorek: "Re: [OMPI users] problem with MPI_Comm_spawn in 1.6.5 but not 1.4.3 or 1.8.4"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Appreciate it - but as I said in my prior note, we aren&#226;&#128;&#153;t maintaining 1.6 any more, so an upgrade to 1.8 (which worked, as you noted) is in order
<br>
<p><p><span class="quotelev1">&gt; On Mar 13, 2015, at 8:23 AM, Chris Paciorek &lt;paciorek_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; And the promised attachment.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Thu, Mar 12, 2015 at 6:11 PM, Chris Paciorek
</span><br>
<span class="quotelev1">&gt; &lt;paciorek_at_[hidden] &lt;mailto:paciorek_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I'm having an issue with MPI_Comm_spawn not starting workers on the
</span><br>
<span class="quotelev2">&gt;&gt; nodes provided via -machinefile or -host. This is occurring on Ubuntu
</span><br>
<span class="quotelev2">&gt;&gt; 14.04/14.10 with openMPI 1.6.5. However, I do not have the problem on
</span><br>
<span class="quotelev2">&gt;&gt; Ubuntu 12.04 with openMPI 1.4.3 nor is there a problem when I install
</span><br>
<span class="quotelev2">&gt;&gt; openMPI 1.8.4 from source on Ubuntu 14.04.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Any suggestions as to what is going on? We can install from source to
</span><br>
<span class="quotelev2">&gt;&gt; deal with this, but Ubuntu 14.04/14.10/15.04 (and I think the current
</span><br>
<span class="quotelev2">&gt;&gt; Debian) are all relying on 1.6.5 so this issue might affect many
</span><br>
<span class="quotelev2">&gt;&gt; others.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; As far as I can tell there aren't any threads on the mailing lists or
</span><br>
<span class="quotelev2">&gt;&gt; info in the NEWS file that relate to this.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Here's a reproducible test case. In the attached zip file, parent.cpp
</span><br>
<span class="quotelev2">&gt;&gt; generates an executable that simply tries to spawn workers using
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Comm_spawn and the child executable simply reports what nodes the
</span><br>
<span class="quotelev2">&gt;&gt; workers are operating on.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I compile and run the program as:
</span><br>
<span class="quotelev2">&gt;&gt; mpicxx -o child child.cpp
</span><br>
<span class="quotelev2">&gt;&gt; mpicxx -o parent parent.cpp
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -host smeagol,arwen,smeagol,arwen -np 1 parent
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; And the result is as follows with all children on the original node:
</span><br>
<span class="quotelev2">&gt;&gt; Starting: I'm process 0 and we are 1
</span><br>
<span class="quotelev2">&gt;&gt; Finishing: I'm process 0 and we are 1
</span><br>
<span class="quotelev2">&gt;&gt; I'm child process 0 on smeagol and we are 3
</span><br>
<span class="quotelev2">&gt;&gt; I'm child process 1 on smeagol and we are 3
</span><br>
<span class="quotelev2">&gt;&gt; My parent communicator size is: 3
</span><br>
<span class="quotelev2">&gt;&gt; I'm child process 2 on smeagol and we are 3
</span><br>
<span class="quotelev2">&gt;&gt; My parent communicator size is: 3
</span><br>
<span class="quotelev2">&gt;&gt; My parent communicator size is: 3
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This is all on pretty standard Ubuntu 14.04, with openMPI installed
</span><br>
<span class="quotelev2">&gt;&gt; from Ubuntu (libopenmpi-dev, libopenmpi1.6, openmpi-bin)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I've included in the zip file:
</span><br>
<span class="quotelev2">&gt;&gt; * parent.cpp and child.cpp
</span><br>
<span class="quotelev2">&gt;&gt; * ompi_info --all on the master
</span><br>
<span class="quotelev2">&gt;&gt; * ompi_info -v ompi full --parsable on all nodes
</span><br>
<span class="quotelev2">&gt;&gt; * PATH and LD_LIBRARY_PATH info
</span><br>
<span class="quotelev2">&gt;&gt; * ifconfig information
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -Chris
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ----------------------------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; Chris Paciorek
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Statistical Computing Consultant
</span><br>
<span class="quotelev2">&gt;&gt; Statistical Computing Facility, Econometrics Laboratory, Berkeley
</span><br>
<span class="quotelev2">&gt;&gt; Research Computing
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Office: 495 Evans Hall                      Email: paciorek_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Mailing Address:                            Voice: 510-842-9056
</span><br>
<span class="quotelev2">&gt;&gt; Department of Statistics                    Fax:   510-642-7892
</span><br>
<span class="quotelev2">&gt;&gt; 367 Evans Hall                              Skype: cjpaciorek
</span><br>
<span class="quotelev2">&gt;&gt; University of California, Berkeley          WWW:
</span><br>
<span class="quotelev2">&gt;&gt; www.stat.berkeley.edu/~paciorek
</span><br>
<span class="quotelev2">&gt;&gt; Berkeley, CA 94720 USA                      Permanent forward:
</span><br>
<span class="quotelev2">&gt;&gt; paciorek_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;mpi_comm_spawn_problem.tgz&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/03/26468.php">http://www.open-mpi.org/community/lists/users/2015/03/26468.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/03/26468.php">http://www.open-mpi.org/community/lists/users/2015/03/26468.php</a>&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26469/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26470.php">Fabricio Cannini: "Re: [OMPI users] Cannot compile 1.8.x with intel 12.1 and 'io-romio' enabled"</a>
<li><strong>Previous message:</strong> <a href="26468.php">Chris Paciorek: "Re: [OMPI users] problem with MPI_Comm_spawn in 1.6.5 but not 1.4.3 or 1.8.4"</a>
<li><strong>In reply to:</strong> <a href="26468.php">Chris Paciorek: "Re: [OMPI users] problem with MPI_Comm_spawn in 1.6.5 but not 1.4.3 or 1.8.4"</a>
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
