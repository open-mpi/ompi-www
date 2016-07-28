<?
$subject_val = "Re: [OMPI users] 3.5 seconds before application launches";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 27 09:40:00 2009" -->
<!-- isoreceived="20090227144000" -->
<!-- sent="Fri, 27 Feb 2009 15:39:54 +0100" -->
<!-- isosent="20090227143954" -->
<!-- name="Vittorio Giovara" -->
<!-- email="vitto.giova_at_[hidden]" -->
<!-- subject="Re: [OMPI users] 3.5 seconds before application launches" -->
<!-- id="4de51c660902270639j5210bb28l4e70f91a0ce027aa_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="[OMPI users] 3.5 seconds before application launches" -->
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
<strong>Subject:</strong> Re: [OMPI users] 3.5 seconds before application launches<br>
<strong>From:</strong> Vittorio Giovara (<em>vitto.giova_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-27 09:39:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8241.php">Vittorio Giovara: "[OMPI users] TCP instead of openIB doesn't work"</a>
<li><strong>Previous message:</strong> <a href="8239.php">Rolf Vandevaart: "Re: [OMPI users] Latest SVN failures"</a>
<li><strong>Maybe in reply to:</strong> <a href="8190.php">Vittorio: "[OMPI users] 3.5 seconds before application launches"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8260.php">Jeff Squyres: "Re: [OMPI users] 3.5 seconds before application launches"</a>
<li><strong>Reply:</strong> <a href="8260.php">Jeff Squyres: "Re: [OMPI users] 3.5 seconds before application launches"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello, and thanks for both replies,
<br>
<p>I've tried to run non-mpi program but i still measured some latency time
<br>
before starting, something around 2 seconds this time.
<br>
SSH should be properly configured, in fact i can login to both machines
<br>
without password; openmpi and mvapich use ssh as default.
<br>
<p>i've tried these commands
<br>
mpirun  --mca btl ^sm  -np 2 -host node0 -host node1 ./graph
<br>
mpirun  --mca btl openib,self  -np 2 -host node0 -host node1 ./graph
<br>
<p>and, apart a slight performance increase in the ^sm benchmark, the latency
<br>
time is the same
<br>
this is really strange, but i can't figure out the source!
<br>
do you have any other ideas?
<br>
thanks
<br>
Vittorio
<br>
<p>Date: Wed, 25 Feb 2009 20:20:51 -0500
<br>
From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
<br>
Subject: Re: [OMPI users] 3.5 seconds before application launches
<br>
To: Open MPI Users &lt;users_at_[hidden]&gt;
<br>
Message-ID: &lt;86D3B246-1866-4B84-B05C-4D13659F8F1C_at_[hidden]&gt;
<br>
Content-Type: text/plain; charset=US-ASCII; format=flowed; delsp=yes
<br>
<p>Dorian raises a good point.
<br>
<p>You might want to try some simple tests of launching non-MPI codes
<br>
(e.g., hostname, uptime, etc.) and see how they fare.  Those will more
<br>
accurately depict OMPI's launching speeds.  Getting through MPI_INIT
<br>
is another matter (although on 2 nodes, the startup should be pretty
<br>
darn fast).
<br>
<p>Two other things that *may* impact you:
<br>
<p>1. Is your ssh speed between the machines slow?  OMPI uses ssh by
<br>
default, but will fall back to rsh (or you can force rsh if you
<br>
want).  MVAPICH may use rsh by default...?  (I don't actually know)
<br>
<p>2. OMPI may be spending time creating shared memory files.  You can
<br>
disable OMPI's use of shared memory by running with:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;mpirun --mca btl ^sm ...
<br>
<p>Meaning &quot;use anything except the 'sm' (shared memory) transport for
<br>
MPI messages&quot;.
<br>
<p><p>On Feb 25, 2009, at 4:01 PM, doriankrause wrote:
<br>
<p><span class="quotelev1">&gt; Vittorio wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi!
</span><br>
<span class="quotelev2">&gt;&gt; I'm using OpenMPI 1.3 on two nodes connected with Infiniband; i'm
</span><br>
<span class="quotelev2">&gt;&gt; using
</span><br>
<span class="quotelev2">&gt;&gt; Gentoo Linux x86_64.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I've noticed that before any application starts there is a variable
</span><br>
<span class="quotelev2">&gt;&gt; amount
</span><br>
<span class="quotelev2">&gt;&gt; of time (around 3.5 seconds) in which the terminal just hangs with
</span><br>
<span class="quotelev2">&gt;&gt; no output
</span><br>
<span class="quotelev2">&gt;&gt; and then the application starts and works well.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I imagined that there might have been some initialization routine
</span><br>
<span class="quotelev2">&gt;&gt; somewhere
</span><br>
<span class="quotelev2">&gt;&gt; in the Infiniband layer or in the software stack, but as i
</span><br>
<span class="quotelev2">&gt;&gt; continued my
</span><br>
<span class="quotelev2">&gt;&gt; tests i observed that this &quot;latency&quot; time is not present in other MPI
</span><br>
<span class="quotelev2">&gt;&gt; implementations (like mvapich2) where my application starts
</span><br>
<span class="quotelev2">&gt;&gt; immediately (but
</span><br>
<span class="quotelev2">&gt;&gt; performs worse).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is my MPI configuration/installation broken or is this expected
</span><br>
<span class="quotelev2">&gt;&gt; behaviour?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm not really qualified to answer this question, but I know that in
</span><br>
<span class="quotelev1">&gt; contrast
</span><br>
<span class="quotelev1">&gt; to other MPI implementations (MPICH) the modular structure of Open
</span><br>
<span class="quotelev1">&gt; MPI is based
</span><br>
<span class="quotelev1">&gt; on shared libs that are dlopened at the startup. As symbol
</span><br>
<span class="quotelev1">&gt; relocation can be
</span><br>
<span class="quotelev1">&gt; costly this might be a reason why the startup time is higher.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Have you checked wether this is an mpiexec start issue or the
</span><br>
<span class="quotelev1">&gt; MPI_Init call?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Dorian
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; thanks a lot!
</span><br>
<span class="quotelev2">&gt;&gt; Vittorio
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------------------------------------------------
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
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-8240/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8241.php">Vittorio Giovara: "[OMPI users] TCP instead of openIB doesn't work"</a>
<li><strong>Previous message:</strong> <a href="8239.php">Rolf Vandevaart: "Re: [OMPI users] Latest SVN failures"</a>
<li><strong>Maybe in reply to:</strong> <a href="8190.php">Vittorio: "[OMPI users] 3.5 seconds before application launches"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8260.php">Jeff Squyres: "Re: [OMPI users] 3.5 seconds before application launches"</a>
<li><strong>Reply:</strong> <a href="8260.php">Jeff Squyres: "Re: [OMPI users] 3.5 seconds before application launches"</a>
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
