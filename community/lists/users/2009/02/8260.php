<?
$subject_val = "Re: [OMPI users] 3.5 seconds before application launches";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Feb 28 09:24:57 2009" -->
<!-- isoreceived="20090228142457" -->
<!-- sent="Sat, 28 Feb 2009 09:24:51 -0500" -->
<!-- isosent="20090228142451" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] 3.5 seconds before application launches" -->
<!-- id="A2EB403B-041F-4FDE-85F5-5349667608F3_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4de51c660902270639j5210bb28l4e70f91a0ce027aa_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-28 09:24:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8261.php">Jeff Squyres: "Re: [OMPI users] defining different values for same environment variable"</a>
<li><strong>Previous message:</strong> <a href="8259.php">Jeff Squyres: "Re: [OMPI users] libmpi_f90.so not being built"</a>
<li><strong>In reply to:</strong> <a href="8240.php">Vittorio Giovara: "Re: [OMPI users] 3.5 seconds before application launches"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If you &quot;ssh othernode uptime&quot;, does that run more-or-less &quot;instantly&quot;,  
<br>
or does it take some time?
<br>
<p>If you force the use of IP name resolution (i.e., vs. using IP numeric  
<br>
addresses), does that take time or is it more-or-less &quot;instant&quot;?
<br>
<p><p>On Feb 27, 2009, at 9:39 AM, Vittorio Giovara wrote:
<br>
<p><span class="quotelev1">&gt; Hello, and thanks for both replies,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've tried to run non-mpi program but i still measured some latency  
</span><br>
<span class="quotelev1">&gt; time before starting, something around 2 seconds this time.
</span><br>
<span class="quotelev1">&gt; SSH should be properly configured, in fact i can login to both  
</span><br>
<span class="quotelev1">&gt; machines without password; openmpi and mvapich use ssh as default.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; i've tried these commands
</span><br>
<span class="quotelev1">&gt; mpirun  --mca btl ^sm  -np 2 -host node0 -host node1 ./graph
</span><br>
<span class="quotelev1">&gt; mpirun  --mca btl openib,self  -np 2 -host node0 -host node1 ./graph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and, apart a slight performance increase in the ^sm benchmark, the  
</span><br>
<span class="quotelev1">&gt; latency time is the same
</span><br>
<span class="quotelev1">&gt; this is really strange, but i can't figure out the source!
</span><br>
<span class="quotelev1">&gt; do you have any other ideas?
</span><br>
<span class="quotelev1">&gt; thanks
</span><br>
<span class="quotelev1">&gt; Vittorio
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Date: Wed, 25 Feb 2009 20:20:51 -0500
</span><br>
<span class="quotelev1">&gt; From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] 3.5 seconds before application launches
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;86D3B246-1866-4B84-B05C-4D13659F8F1C_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=US-ASCII; format=flowed; delsp=yes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Dorian raises a good point.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You might want to try some simple tests of launching non-MPI codes
</span><br>
<span class="quotelev1">&gt; (e.g., hostname, uptime, etc.) and see how they fare.  Those will more
</span><br>
<span class="quotelev1">&gt; accurately depict OMPI's launching speeds.  Getting through MPI_INIT
</span><br>
<span class="quotelev1">&gt; is another matter (although on 2 nodes, the startup should be pretty
</span><br>
<span class="quotelev1">&gt; darn fast).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Two other things that *may* impact you:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. Is your ssh speed between the machines slow?  OMPI uses ssh by
</span><br>
<span class="quotelev1">&gt; default, but will fall back to rsh (or you can force rsh if you
</span><br>
<span class="quotelev1">&gt; want).  MVAPICH may use rsh by default...?  (I don't actually know)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. OMPI may be spending time creating shared memory files.  You can
</span><br>
<span class="quotelev1">&gt; disable OMPI's use of shared memory by running with:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     mpirun --mca btl ^sm ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Meaning &quot;use anything except the 'sm' (shared memory) transport for
</span><br>
<span class="quotelev1">&gt; MPI messages&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Feb 25, 2009, at 4:01 PM, doriankrause wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Vittorio wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hi!
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I'm using OpenMPI 1.3 on two nodes connected with Infiniband; i'm
</span><br>
<span class="quotelev3">&gt; &gt;&gt; using
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Gentoo Linux x86_64.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I've noticed that before any application starts there is a variable
</span><br>
<span class="quotelev3">&gt; &gt;&gt; amount
</span><br>
<span class="quotelev3">&gt; &gt;&gt; of time (around 3.5 seconds) in which the terminal just hangs with
</span><br>
<span class="quotelev3">&gt; &gt;&gt; no output
</span><br>
<span class="quotelev3">&gt; &gt;&gt; and then the application starts and works well.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I imagined that there might have been some initialization routine
</span><br>
<span class="quotelev3">&gt; &gt;&gt; somewhere
</span><br>
<span class="quotelev3">&gt; &gt;&gt; in the Infiniband layer or in the software stack, but as i
</span><br>
<span class="quotelev3">&gt; &gt;&gt; continued my
</span><br>
<span class="quotelev3">&gt; &gt;&gt; tests i observed that this &quot;latency&quot; time is not present in other  
</span><br>
<span class="quotelev1">&gt; MPI
</span><br>
<span class="quotelev3">&gt; &gt;&gt; implementations (like mvapich2) where my application starts
</span><br>
<span class="quotelev3">&gt; &gt;&gt; immediately (but
</span><br>
<span class="quotelev3">&gt; &gt;&gt; performs worse).
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Is my MPI configuration/installation broken or is this expected
</span><br>
<span class="quotelev3">&gt; &gt;&gt; behaviour?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I'm not really qualified to answer this question, but I know that in
</span><br>
<span class="quotelev2">&gt; &gt; contrast
</span><br>
<span class="quotelev2">&gt; &gt; to other MPI implementations (MPICH) the modular structure of Open
</span><br>
<span class="quotelev2">&gt; &gt; MPI is based
</span><br>
<span class="quotelev2">&gt; &gt; on shared libs that are dlopened at the startup. As symbol
</span><br>
<span class="quotelev2">&gt; &gt; relocation can be
</span><br>
<span class="quotelev2">&gt; &gt; costly this might be a reason why the startup time is higher.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Have you checked wether this is an mpiexec start issue or the
</span><br>
<span class="quotelev2">&gt; &gt; MPI_Init call?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Regards,
</span><br>
<span class="quotelev2">&gt; &gt; Dorian
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; thanks a lot!
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Vittorio
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt; ------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<li><strong>Next message:</strong> <a href="8261.php">Jeff Squyres: "Re: [OMPI users] defining different values for same environment variable"</a>
<li><strong>Previous message:</strong> <a href="8259.php">Jeff Squyres: "Re: [OMPI users] libmpi_f90.so not being built"</a>
<li><strong>In reply to:</strong> <a href="8240.php">Vittorio Giovara: "Re: [OMPI users] 3.5 seconds before application launches"</a>
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
