<?
$subject_val = "Re: [OMPI users] tcp connectivity OS X and 1.3.3";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 12 15:31:35 2009" -->
<!-- isoreceived="20090812193135" -->
<!-- sent="Wed, 12 Aug 2009 13:31:27 -0600" -->
<!-- isosent="20090812193127" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] tcp connectivity OS X and 1.3.3" -->
<!-- id="71d2d8cc0908121231k54608b61ma503046e7ef14fdc_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="9F7358D7-3926-477D-AED2-283B0FFD9CED_at_uvic.ca" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-12 15:31:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10333.php">Kritiraj Sajadah: "[OMPI users] configure OPENMPI with DMTCP"</a>
<li><strong>Previous message:</strong> <a href="10331.php">Jody Klymak: "Re: [OMPI users] tcp connectivity OS X and 1.3.3"</a>
<li><strong>In reply to:</strong> <a href="10331.php">Jody Klymak: "Re: [OMPI users] tcp connectivity OS X and 1.3.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10334.php">Jody Klymak: "Re: [OMPI users] tcp connectivity OS X and 1.3.3"</a>
<li><strong>Reply:</strong> <a href="10334.php">Jody Klymak: "Re: [OMPI users] tcp connectivity OS X and 1.3.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Well, it is getting better! :-)
<br>
<p>On your cmd line, what btl's are you specifying? You should try -mca btl
<br>
sm,tcp,self for this to work. Reason: sometimes systems block tcp loopback
<br>
on the node. What I see below indicates that inter-node comm was fine, but
<br>
the two procs that share a node couldn't communicate. Including shared
<br>
memory should remove that problem.
<br>
<p>The port numbers are fine and can be different or the same - it is totally
<br>
random. The procs exchange their respective port info during wireup.
<br>
<p><p>On Wed, Aug 12, 2009 at 12:51 PM, Jody Klymak &lt;jklymak_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi Ralph,
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
<span class="quotelev1">&gt; I believe TCP works fine, Jody, as it is used on Macs fairly widely. I
</span><br>
<span class="quotelev1">&gt; suspect this is something funny about your installation.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; One thing I have found is that you can get this error message when you have
</span><br>
<span class="quotelev1">&gt; multiple NICs installed, each with a different subnet, and the procs try to
</span><br>
<span class="quotelev1">&gt; connect across different ones. Do you by chance have multiple NICs?
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Have you tried telling OMPI which TCP interface to use? You can do so with
</span><br>
<span class="quotelev1">&gt; -mca btl_tcp_if_include eth0 (or whatever you want to use).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If I try this, I get the same results. (though I need to use &quot;en0&quot; on my
</span><br>
<span class="quotelev1">&gt; machine)...
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
<span class="quotelev1">&gt; Those ip addresses are correct, no idea if port 4 make sense.  Sometimes I
</span><br>
<span class="quotelev1">&gt; get port 260.  Should xserve03 and xserve02 be trying to use the same port
</span><br>
<span class="quotelev1">&gt; for these comms?
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, Aug 12, 2009 at 10:01 AM, Jody Klymak &lt;jklymak_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Aug 11, 2009, at  18:55 PM, Gus Correa wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Did you wipe off the old directories before reinstalling?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Check.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  I prefer to install on a NFS mounted directory,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Check
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Have you tried to ssh from node to node on all possible pairs?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; check - fixed this today, works fine with the spawning user...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  How could you roll back to 1.1.5,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; now that you overwrote the directories?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Oh, I still have it on another machine off the cluster in
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/openmpi.  Will take just 5 mintues to reinstall.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Launching jobs with Torque is way much better than
</span><br>
<span class="quotelev3">&gt;&gt;&gt; using barebones mpirun.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  And you don't want to stay behind with the OpenMPI versions
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and improvements either.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Sure, but I'd like the jobs to be able to run at all..
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is there any sense in rolling back to to 1.2.3 since that is known to work
</span><br>
<span class="quotelev2">&gt;&gt; with OS X (its the one that comes with 10.5)?  My only guess at this point
</span><br>
<span class="quotelev2">&gt;&gt; is other OS X users are using non-tcpip communication, and the tcp stuff
</span><br>
<span class="quotelev2">&gt;&gt; just doesn't work in 1.3.3.
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
<span class="quotelev2">&gt;&gt; <a href="http://web.uvic.ca/~jklymak/">http://web.uvic.ca/~jklymak/</a> &lt;<a href="http://web.uvic.ca/%7Ejklymak/">http://web.uvic.ca/%7Ejklymak/</a>&gt;
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
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jody Klymak
</span><br>
<span class="quotelev1">&gt; <a href="http://web.uvic.ca/~jklymak/">http://web.uvic.ca/~jklymak/</a> &lt;<a href="http://web.uvic.ca/%7Ejklymak/">http://web.uvic.ca/%7Ejklymak/</a>&gt;
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10332/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10333.php">Kritiraj Sajadah: "[OMPI users] configure OPENMPI with DMTCP"</a>
<li><strong>Previous message:</strong> <a href="10331.php">Jody Klymak: "Re: [OMPI users] tcp connectivity OS X and 1.3.3"</a>
<li><strong>In reply to:</strong> <a href="10331.php">Jody Klymak: "Re: [OMPI users] tcp connectivity OS X and 1.3.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10334.php">Jody Klymak: "Re: [OMPI users] tcp connectivity OS X and 1.3.3"</a>
<li><strong>Reply:</strong> <a href="10334.php">Jody Klymak: "Re: [OMPI users] tcp connectivity OS X and 1.3.3"</a>
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
