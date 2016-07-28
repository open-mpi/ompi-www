<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Feb 19 13:53:14 2007" -->
<!-- isoreceived="20070219185314" -->
<!-- sent="Mon, 19 Feb 2007 13:53:10 -0500" -->
<!-- isosent="20070219185310" -->
<!-- name="Mark Kosmowski" -->
<!-- email="mark.kosmowski_at_[hidden]" -->
<!-- subject="[OMPI users] performance question" -->
<!-- id="c84311bb0702191053ocb0042ej12718089146e76ba_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> Mark Kosmowski (<em>mark.kosmowski_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-02-19 13:53:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2717.php">Kobotov, Alexander V: "[OMPI users] BLACS tests fails on IPF"</a>
<li><strong>Previous message:</strong> <a href="2715.php">Eric Thibodeau: "Re: [OMPI users] compiling mpptest using OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/03/2760.php">Jeff Squyres: "Re: [OMPI users] performance question"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/03/2760.php">Jeff Squyres: "Re: [OMPI users] performance question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear OMPI Community:
<br>
<p>I have a modest personal cluster (3 node, 6 processor Opterons - all
<br>
single core, two are 242's and 4 are 844's - each machine has 4 Gb of
<br>
RAM) over gigabit (unmanaged switch) that I put together to run
<br>
computational chemistry projects for my doctoral studies.  I'm using
<br>
the 844's as dual processors because I got a good deal on the lot of
<br>
the 4 844 chips.
<br>
<p>The 844 based systems are on a Arima / Rioworks HDAMA motherboard -
<br>
the RAM is configured as 2 @ 2 Gb sticks in cpu 0 DIMM 0 and 1
<br>
locations (to use a consistant numbering scheme - the motherboard
<br>
manual calls them cpu 0 and 1, but then DIMM 1 - 4 for each cpu -
<br>
going by this the DIMMs are in slots 1 and 2 of the cpu 0 bank).  The
<br>
242 based system is on a Tyan 2875 motherboard configured as 1 Gb
<br>
stick in each of the four slots of the one bank of DIMM slots.
<br>
<p>I am running OpenSUSE 10.2 on each system.
<br>
<p>I did some benchmarking of the same executable running the same job on
<br>
just the 242 system (using both processors) versus the entire cluster.
<br>
&nbsp;The program (CPMD, www.cpmd.org) reports cpu time and elapsed time.
<br>
<p>I'm reporting the times below in hours:minutes, rounding to the
<br>
nearest minute.  I trust that everyone will agree that it is
<br>
insignificant if I inadvertently truncated instead of rounded some of
<br>
the minutes.
<br>
<p>For just the one system with two processors:
<br>
<p>CPU time: 32:43
<br>
Elapsed time: 36:52
<br>
Peak memory: 373 Mb
<br>
<p>For just the cluster:
<br>
<p>CPU time: 12:23
<br>
Elapsed time: 20:30
<br>
Peak memory: 131 Mb
<br>
<p>Is this a typical scaling or should I be thinking about doing some
<br>
sort of tweaking to the [network / ompi] system at some point?  The
<br>
cpu time is scaling about right, but elapsed time is getting hammered
<br>
- with the low memory overhead it has to be a communications issue
<br>
rather than a swap issue, right?
<br>
<p>Would it be helpful to see a serial time point using the same
<br>
executable (if so, I'd probably repeat all the runs with a smaller job
<br>
- I don't know that I want to spend half a week just for
<br>
benchmarking)?
<br>
<p>I have included the appropriate btl_tcp_if_include configuration so
<br>
that OMPI only uses the gigabit ports (and not the internet
<br>
connections that some of the machines have).
<br>
<p>I am already planning on doing some benchmark comparisons to determine
<br>
the effect of compiler / math library on speed.
<br>
<p>Thank you,
<br>
<p>Mark Kosmowski
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2717.php">Kobotov, Alexander V: "[OMPI users] BLACS tests fails on IPF"</a>
<li><strong>Previous message:</strong> <a href="2715.php">Eric Thibodeau: "Re: [OMPI users] compiling mpptest using OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/03/2760.php">Jeff Squyres: "Re: [OMPI users] performance question"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/03/2760.php">Jeff Squyres: "Re: [OMPI users] performance question"</a>
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
