<?
$subject_val = "Re: [OMPI users] tcp connectivity OS X and 1.3.3";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 12 14:52:05 2009" -->
<!-- isoreceived="20090812185205" -->
<!-- sent="Wed, 12 Aug 2009 11:51:58 -0700" -->
<!-- isosent="20090812185158" -->
<!-- name="Jody Klymak" -->
<!-- email="jklymak_at_[hidden]" -->
<!-- subject="Re: [OMPI users] tcp connectivity OS X and 1.3.3" -->
<!-- id="9F7358D7-3926-477D-AED2-283B0FFD9CED_at_uvic.ca" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="71d2d8cc0908120944m2006f620tc5b9f311a1536c1d_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2009-08-12 14:51:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10332.php">Ralph Castain: "Re: [OMPI users] tcp connectivity OS X and 1.3.3"</a>
<li><strong>Previous message:</strong> <a href="10330.php">Sims, James S. Dr.: "Re: [OMPI users] Open MPI:Problem with 64-bit openMPI andintel	compiler"</a>
<li><strong>In reply to:</strong> <a href="10328.php">Ralph Castain: "Re: [OMPI users] tcp connectivity OS X and 1.3.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10332.php">Ralph Castain: "Re: [OMPI users] tcp connectivity OS X and 1.3.3"</a>
<li><strong>Reply:</strong> <a href="10332.php">Ralph Castain: "Re: [OMPI users] tcp connectivity OS X and 1.3.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph,
<br>
<p>That gives me something more to work with...
<br>
<p><p>On Aug 12, 2009, at  9:44 AM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; I believe TCP works fine, Jody, as it is used on Macs fairly widely.  
</span><br>
<span class="quotelev1">&gt; I suspect this is something funny about your installation.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; One thing I have found is that you can get this error message when  
</span><br>
<span class="quotelev1">&gt; you have multiple NICs installed, each with a different subnet, and  
</span><br>
<span class="quotelev1">&gt; the procs try to connect across different ones. Do you by chance  
</span><br>
<span class="quotelev1">&gt; have multiple NICs?
</span><br>
<p>The head node has two active NICs:
<br>
en0: public
<br>
en1: private
<br>
<p>The server nodes only have one connection
<br>
en0:private
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Have you tried telling OMPI which TCP interface to use? You can do  
</span><br>
<span class="quotelev1">&gt; so with -mca btl_tcp_if_include eth0 (or whatever you want to use).
</span><br>
<p>If I try this, I get the same results. (though I need to use &quot;en0&quot; on  
<br>
my machine)...
<br>
<p>If I include -mca btl_base_verbose 30 I get for n=2:
<br>
<p>++++++++++
<br>
[xserve03.local:00841] select: init of component tcp returned success
<br>
Done MPI init
<br>
checking connection between rank 0 on xserve02.local and rank 1
<br>
Done MPI init
<br>
[xserve02.local:01094] btl: tcp: attempting to connect() to address  
<br>
192.168.2.103 on port 4
<br>
Done checking connection between rank 0 on xserve02.local and rank 1
<br>
Connectivity test on 2 processes PASSED.
<br>
++++++++++
<br>
<p>If I try n=3 the job hangs and I have to kill:
<br>
<p>++++++++++
<br>
Done MPI init
<br>
checking connection between rank 0 on xserve02.local and rank 1
<br>
[xserve02.local:01110] btl: tcp: attempting to connect() to address  
<br>
192.168.2.103 on port 4
<br>
Done MPI init
<br>
Done MPI init
<br>
checking connection between rank 1 on xserve03.local and rank 2
<br>
[xserve03.local:00860] btl: tcp: attempting to connect() to address  
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
++++++++++
<br>
<p>Those ip addresses are correct, no idea if port 4 make sense.   
<br>
Sometimes I get port 260.  Should xserve03 and xserve02 be trying to  
<br>
use the same port for these comms?
<br>
<p><p>Thanks,  Jody
<br>
<p><p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, Aug 12, 2009 at 10:01 AM, Jody Klymak &lt;jklymak_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 11, 2009, at  18:55 PM, Gus Correa wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Did you wipe off the old directories before reinstalling?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Check.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I prefer to install on a NFS mounted directory,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Check
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Have you tried to ssh from node to node on all possible pairs?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; check - fixed this today, works fine with the spawning user...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; How could you roll back to 1.1.5,
</span><br>
<span class="quotelev1">&gt; now that you overwrote the directories?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Oh, I still have it on another machine off the cluster in /usr/local/ 
</span><br>
<span class="quotelev1">&gt; openmpi.  Will take just 5 mintues to reinstall.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Launching jobs with Torque is way much better than
</span><br>
<span class="quotelev1">&gt; using barebones mpirun.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And you don't want to stay behind with the OpenMPI versions
</span><br>
<span class="quotelev1">&gt; and improvements either.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sure, but I'd like the jobs to be able to run at all..
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is there any sense in rolling back to to 1.2.3 since that is known  
</span><br>
<span class="quotelev1">&gt; to work with OS X (its the one that comes with 10.5)?  My only guess  
</span><br>
<span class="quotelev1">&gt; at this point is other OS X users are using non-tcpip communication,  
</span><br>
<span class="quotelev1">&gt; and the tcp stuff just doesn't work in 1.3.3.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,  Jody
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10331/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10332.php">Ralph Castain: "Re: [OMPI users] tcp connectivity OS X and 1.3.3"</a>
<li><strong>Previous message:</strong> <a href="10330.php">Sims, James S. Dr.: "Re: [OMPI users] Open MPI:Problem with 64-bit openMPI andintel	compiler"</a>
<li><strong>In reply to:</strong> <a href="10328.php">Ralph Castain: "Re: [OMPI users] tcp connectivity OS X and 1.3.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10332.php">Ralph Castain: "Re: [OMPI users] tcp connectivity OS X and 1.3.3"</a>
<li><strong>Reply:</strong> <a href="10332.php">Ralph Castain: "Re: [OMPI users] tcp connectivity OS X and 1.3.3"</a>
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
