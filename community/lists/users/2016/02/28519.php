<?
$subject_val = "Re: [OMPI users] PVFS/OrangeFS (was: cleaning up old ROMIO (MPI-IO) drivers)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 12 15:51:40 2016" -->
<!-- isoreceived="20160212205140" -->
<!-- sent="Fri, 12 Feb 2016 14:51:19 -0600" -->
<!-- isosent="20160212205119" -->
<!-- name="Rob Latham" -->
<!-- email="robl_at_[hidden]" -->
<!-- subject="Re: [OMPI users] PVFS/OrangeFS (was: cleaning up old ROMIO (MPI-IO) drivers)" -->
<!-- id="56BE45C7.3070309_at_mcs.anl.gov" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="87vb6gcq65.fsf_at_pc102091.liv.ac.uk" -->
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
<strong>Subject:</strong> Re: [OMPI users] PVFS/OrangeFS (was: cleaning up old ROMIO (MPI-IO) drivers)<br>
<strong>From:</strong> Rob Latham (<em>robl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-02-12 15:51:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28520.php">Stephen Guzik: "Re: [OMPI users] How to map to sockets with 1 per core, but bind to a single hwthread"</a>
<li><strong>Previous message:</strong> <a href="28518.php">Rob Latham: "Re: [OMPI users] cleaning up old ROMIO (MPI-IO) drivers"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2016/01/28386.php">Dave Love: "Re: [OMPI users] cleaning up old ROMIO (MPI-IO) drivers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28530.php">Dave Love: "Re: [OMPI users] PVFS/OrangeFS"</a>
<li><strong>Reply:</strong> <a href="28530.php">Dave Love: "Re: [OMPI users] PVFS/OrangeFS"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 01/26/2016 09:32 AM, Dave Love wrote:
<br>
<span class="quotelev1">&gt; Rob Latham &lt;robl_at_[hidden]&gt; writes:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We didn't need to deploy PLFS at Argonne: GPFS handled writing N-to-1
</span><br>
<span class="quotelev2">&gt;&gt; files just fine (once you line up the block sizes), so I'm beholden to
</span><br>
<span class="quotelev2">&gt;&gt; PLFS communities for ROMIO support.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I guess GPFS has improved in that respect, as I think it benefited
</span><br>
<span class="quotelev1">&gt; originally.  Is it known whether Lustre has improved sufficiently too?
</span><br>
<p>Lustre is still the same but the MPI-IO implementations have gotten 
<br>
better at getting performance out of lustre.  Once MPI-IO 
<br>
implementations figured out that constructing i/o requests such that a 
<br>
client only talks to one OST resulted in a lot less lock revocation, the 
<br>
Lustre story got a lot better.
<br>
<p><span class="quotelev1">&gt; [I wonder why ANL apparently dumped PVFS but I probably shouldn't ask.]
</span><br>
<p>No harm in asking. This is getting a bit off topic for an OpenMPI list 
<br>
but OMPIO and ROMIO both support PVFS so perhaps it's interesting to some.
<br>
<p>ANL still adores PVFS.  It's a fantastic file system for exploring 
<br>
research ideas.  Maintaining a production-quality research file system 
<br>
(the &quot;production quality&quot; part, I mean) took a lot of work, though, and 
<br>
when our long-time collaborators at Clemson wanted to spin up a 
<br>
commercial support entity for PVFS we said &quot;yes please that sounds great!&quot;.
<br>
<p>Maybe you are curious why ALCF, our compute facility, moved away from 
<br>
PVFS over time?   PVFS on Blue Gene worked pretty well, but it wasn't 
<br>
PVFS's best environment -- we could not use key PVFS optimizations like 
<br>
&quot;datatype-aware I/O&quot; and &quot;scalable open&quot; with the stripped down Blue 
<br>
Gene kernel and instead had to treat PVFS like a regular unix file 
<br>
system -- which it unashamedly is not.  MPI-IO applications worked fine, 
<br>
but we had a non-trivial amount of applications that wanted to do things 
<br>
(e.g. mmap a file) that PVFS supported poorly if at all.
<br>
<p>Parallel file systems are complex beasts, and in order to provide good 
<br>
performance in one part of the design space, need to make trade-offs in 
<br>
another.  PVFS had a good 5 year run, but it ended up being easier for 
<br>
ALCF to deal with the GPFS quirks (don't create N files in a directory!) 
<br>
than to educate users about quirks inherent in two different parallel 
<br>
file systems.
<br>
<p>A single file system also meant the storage budget -- which is never 
<br>
large enough, says the storage and I/O guy -- need not be split across 
<br>
two file systems.
<br>
<p>PVFS still lives, now branded &quot;OrangeFS&quot;.  The folks at Clemson are 
<br>
working towards getting  PVFS support into the linux kernel. 
<br>
(<a href="http://lwn.net/Articles/657333/">http://lwn.net/Articles/657333/</a> : Linus says &quot;the code doesn't look 
<br>
obviously horrible&quot; -- how's *that* for an endorsement)
<br>
<p>==rob
<br>
<p><p><span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfoW.cgi/users">http://www.open-mpi.org/mailman/listinfoW.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/01/28386.php">http://www.open-mpi.org/community/lists/users/2016/01/28386.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28520.php">Stephen Guzik: "Re: [OMPI users] How to map to sockets with 1 per core, but bind to a single hwthread"</a>
<li><strong>Previous message:</strong> <a href="28518.php">Rob Latham: "Re: [OMPI users] cleaning up old ROMIO (MPI-IO) drivers"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2016/01/28386.php">Dave Love: "Re: [OMPI users] cleaning up old ROMIO (MPI-IO) drivers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28530.php">Dave Love: "Re: [OMPI users] PVFS/OrangeFS"</a>
<li><strong>Reply:</strong> <a href="28530.php">Dave Love: "Re: [OMPI users] PVFS/OrangeFS"</a>
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
