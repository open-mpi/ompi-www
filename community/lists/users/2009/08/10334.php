<?
$subject_val = "Re: [OMPI users] tcp connectivity OS X and 1.3.3";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 12 15:46:57 2009" -->
<!-- isoreceived="20090812194657" -->
<!-- sent="Wed, 12 Aug 2009 12:46:52 -0700" -->
<!-- isosent="20090812194652" -->
<!-- name="Jody Klymak" -->
<!-- email="jklymak_at_[hidden]" -->
<!-- subject="Re: [OMPI users] tcp connectivity OS X and 1.3.3" -->
<!-- id="307BBB7D-BA4D-4B11-9AD5-A8B9E775C9E9_at_uvic.ca" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="71d2d8cc0908121231k54608b61ma503046e7ef14fdc_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] tcp connectivity OS X and 1.3.3<br>
<strong>From:</strong> Jody Klymak (<em>jklymak_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-12 15:46:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10335.php">Jody Klymak: "Re: [OMPI users] tcp connectivity OS X and 1.3.3"</a>
<li><strong>Previous message:</strong> <a href="10333.php">Kritiraj Sajadah: "[OMPI users] configure OPENMPI with DMTCP"</a>
<li><strong>In reply to:</strong> <a href="10332.php">Ralph Castain: "Re: [OMPI users] tcp connectivity OS X and 1.3.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10335.php">Jody Klymak: "Re: [OMPI users] tcp connectivity OS X and 1.3.3"</a>
<li><strong>Reply:</strong> <a href="10335.php">Jody Klymak: "Re: [OMPI users] tcp connectivity OS X and 1.3.3"</a>
<li><strong>Reply:</strong> <a href="10342.php">Ralph Castain: "Re: [OMPI users] tcp connectivity OS X and 1.3.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 12, 2009, at  12:31 PM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; Well, it is getting better! :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On your cmd line, what btl's are you specifying? You should try -mca  
</span><br>
<span class="quotelev1">&gt; btl sm,tcp,self for this to work. Reason: sometimes systems block  
</span><br>
<span class="quotelev1">&gt; tcp loopback on the node. What I see below indicates that inter-node  
</span><br>
<span class="quotelev1">&gt; comm was fine, but the two procs that share a node couldn't  
</span><br>
<span class="quotelev1">&gt; communicate. Including shared memory should remove that problem.
</span><br>
<p>It looks like sm,tcp,self are being initialized automatically - this  
<br>
repeats for each node:
<br>
<p>[xserve03.local:01008] mca: base: components_open: Looking for btl  
<br>
components
<br>
[xserve03.local:01008] mca: base: components_open: opening btl  
<br>
components
<br>
[xserve03.local:01008] mca: base: components_open: found loaded  
<br>
component self
<br>
[xserve03.local:01008] mca: base: components_open: component self has  
<br>
no register function
<br>
[xserve03.local:01008] mca: base: components_open: component self open  
<br>
function successful
<br>
[xserve03.local:01008] mca: base: components_open: found loaded  
<br>
component sm
<br>
[xserve03.local:01008] mca: base: components_open: component sm has no  
<br>
register function
<br>
[xserve03.local:01008] mca: base: components_open: component sm open  
<br>
function successful
<br>
[xserve03.local:01008] mca: base: components_open: found loaded  
<br>
component tcp
<br>
[xserve03.local:01008] mca: base: components_open: component tcp has  
<br>
no register function
<br>
[xserve03.local:01008] mca: base: components_open: component tcp open  
<br>
function successful
<br>
[xserve03.local:01008] select: initializing btl component self
<br>
[xserve03.local:01008] select: init of component self returned success
<br>
[xserve03.local:01008] select: initializing btl component sm
<br>
[xserve03.local:01008] select: init of component sm returned success
<br>
[xserve03.local:01008] select: initializing btl component tcp
<br>
[xserve03.local:01008] select: init of component tcp returned success
<br>
<p>I should have reminded you of the command line:
<br>
<p>usr/local/openmpi/bin/mpirun  -n 3 -mca btl_base_verbose 30 -mca  
<br>
btl_tcp_if_include en0 --bynode -host xserve02,xserve03 connectivity_c  
<br>
<span class="quotelev1"> &gt;&amp; connectivity_c3_2host.txt
</span><br>
<p>So I think ranks 0 and 2 are on xserve02 and rank 1 is on xserve01, in  
<br>
which case I still think it is tcp communication...
<br>
<p><p>Done MPI init
<br>
checking connection between rank 0 on xserve02.local and rank 1
<br>
Done MPI init
<br>
[xserve02.local:01382] btl: tcp: attempting to connect() to address  
<br>
192.168.2.103 on port 4
<br>
Done MPI init
<br>
checking connection between rank 1 on xserve03.local and rank 2
<br>
[xserve03.local:01008] btl: tcp: attempting to connect() to address  
<br>
192.168.2.102 on port 4
<br>
Done checking connection between rank 0 on xserve02.local and rank 1
<br>
checking connection between rank 0 on xserve02.local and rank 2
<br>
Done checking connection between rank 0 on xserve02.local and rank 2
<br>
mpirun: killing job...
<br>
<p>--------------------------------------------------------------------------
<br>
mpirun noticed that process rank 1 with PID 1008 on node xserve03  
<br>
exited on signal 0 (Signal 0).
<br>
--------------------------------------------------------------------------
<br>
mpirun: clean termination accomplished
<br>
<p><p>Thanks,  Jody
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The port numbers are fine and can be different or the same - it is  
</span><br>
<span class="quotelev1">&gt; totally random. The procs exchange their respective port info during  
</span><br>
<span class="quotelev1">&gt; wireup.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, Aug 12, 2009 at 12:51 PM, Jody Klymak &lt;jklymak_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Hi Ralph,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That gives me something more to work with...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 12, 2009, at  9:44 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I believe TCP works fine, Jody, as it is used on Macs fairly  
</span><br>
<span class="quotelev2">&gt;&gt; widely. I suspect this is something funny about your installation.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; One thing I have found is that you can get this error message when  
</span><br>
<span class="quotelev2">&gt;&gt; you have multiple NICs installed, each with a different subnet, and  
</span><br>
<span class="quotelev2">&gt;&gt; the procs try to connect across different ones. Do you by chance  
</span><br>
<span class="quotelev2">&gt;&gt; have multiple NICs?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The head node has two active NICs:
</span><br>
<span class="quotelev1">&gt; en0: public
</span><br>
<span class="quotelev1">&gt; en1: private
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The server nodes only have one connection
</span><br>
<span class="quotelev1">&gt; en0:private
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Have you tried telling OMPI which TCP interface to use? You can do  
</span><br>
<span class="quotelev2">&gt;&gt; so with -mca btl_tcp_if_include eth0 (or whatever you want to use).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If I try this, I get the same results. (though I need to use &quot;en0&quot;  
</span><br>
<span class="quotelev1">&gt; on my machine)...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If I include -mca btl_base_verbose 30 I get for n=2:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ++++++++++
</span><br>
<span class="quotelev1">&gt; [xserve03.local:00841] select: init of component tcp returned success
</span><br>
<span class="quotelev1">&gt; Done MPI init
</span><br>
<span class="quotelev1">&gt; checking connection between rank 0 on xserve02.local and rank 1
</span><br>
<span class="quotelev1">&gt; Done MPI init
</span><br>
<span class="quotelev1">&gt; [xserve02.local:01094] btl: tcp: attempting to connect() to address  
</span><br>
<span class="quotelev1">&gt; 192.168.2.103 on port 4
</span><br>
<span class="quotelev1">&gt; Done checking connection between rank 0 on xserve02.local and rank 1
</span><br>
<span class="quotelev1">&gt; Connectivity test on 2 processes PASSED.
</span><br>
<span class="quotelev1">&gt; ++++++++++
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If I try n=3 the job hangs and I have to kill:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ++++++++++
</span><br>
<span class="quotelev1">&gt; Done MPI init
</span><br>
<span class="quotelev1">&gt; checking connection between rank 0 on xserve02.local and rank 1
</span><br>
<span class="quotelev1">&gt; [xserve02.local:01110] btl: tcp: attempting to connect() to address  
</span><br>
<span class="quotelev1">&gt; 192.168.2.103 on port 4
</span><br>
<span class="quotelev1">&gt; Done MPI init
</span><br>
<span class="quotelev1">&gt; Done MPI init
</span><br>
<span class="quotelev1">&gt; checking connection between rank 1 on xserve03.local and rank 2
</span><br>
<span class="quotelev1">&gt; [xserve03.local:00860] btl: tcp: attempting to connect() to address  
</span><br>
<span class="quotelev1">&gt; 192.168.2.102 on port 4
</span><br>
<span class="quotelev1">&gt; Done checking connection between rank 0 on xserve02.local and rank 1
</span><br>
<span class="quotelev1">&gt; checking connection between rank 0 on xserve02.local and rank 2
</span><br>
<span class="quotelev1">&gt; Done checking connection between rank 0 on xserve02.local and rank 2
</span><br>
<span class="quotelev1">&gt; mpirun: killing job...
</span><br>
<span class="quotelev1">&gt; ++++++++++
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Those ip addresses are correct, no idea if port 4 make sense.   
</span><br>
<span class="quotelev1">&gt; Sometimes I get port 260.  Should xserve03 and xserve02 be trying to  
</span><br>
<span class="quotelev1">&gt; use the same port for these comms?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,  Jody
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Wed, Aug 12, 2009 at 10:01 AM, Jody Klymak &lt;jklymak_at_[hidden]&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Aug 11, 2009, at  18:55 PM, Gus Correa wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Did you wipe off the old directories before reinstalling?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Check.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I prefer to install on a NFS mounted directory,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Check
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Have you tried to ssh from node to node on all possible pairs?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; check - fixed this today, works fine with the spawning user...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; How could you roll back to 1.1.5,
</span><br>
<span class="quotelev2">&gt;&gt; now that you overwrote the directories?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Oh, I still have it on another machine off the cluster in /usr/ 
</span><br>
<span class="quotelev2">&gt;&gt; local/openmpi.  Will take just 5 mintues to reinstall.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Launching jobs with Torque is way much better than
</span><br>
<span class="quotelev2">&gt;&gt; using barebones mpirun.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; And you don't want to stay behind with the OpenMPI versions
</span><br>
<span class="quotelev2">&gt;&gt; and improvements either.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Sure, but I'd like the jobs to be able to run at all..
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is there any sense in rolling back to to 1.2.3 since that is known  
</span><br>
<span class="quotelev2">&gt;&gt; to work with OS X (its the one that comes with 10.5)?  My only  
</span><br>
<span class="quotelev2">&gt;&gt; guess at this point is other OS X users are using non-tcpip  
</span><br>
<span class="quotelev2">&gt;&gt; communication, and the tcp stuff just doesn't work in 1.3.3.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,  Jody
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jody Klymak
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://web.uvic.ca/~jklymak/">http://web.uvic.ca/~jklymak/</a>
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jody Klymak
</span><br>
<span class="quotelev1">&gt; <a href="http://web.uvic.ca/~jklymak/">http://web.uvic.ca/~jklymak/</a>
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<p><pre>
--
Jody Klymak
<a href="http://web.uvic.ca/~jklymak/">http://web.uvic.ca/~jklymak/</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10334/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10335.php">Jody Klymak: "Re: [OMPI users] tcp connectivity OS X and 1.3.3"</a>
<li><strong>Previous message:</strong> <a href="10333.php">Kritiraj Sajadah: "[OMPI users] configure OPENMPI with DMTCP"</a>
<li><strong>In reply to:</strong> <a href="10332.php">Ralph Castain: "Re: [OMPI users] tcp connectivity OS X and 1.3.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10335.php">Jody Klymak: "Re: [OMPI users] tcp connectivity OS X and 1.3.3"</a>
<li><strong>Reply:</strong> <a href="10335.php">Jody Klymak: "Re: [OMPI users] tcp connectivity OS X and 1.3.3"</a>
<li><strong>Reply:</strong> <a href="10342.php">Ralph Castain: "Re: [OMPI users] tcp connectivity OS X and 1.3.3"</a>
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
