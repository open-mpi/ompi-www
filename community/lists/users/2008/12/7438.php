<?
$subject_val = "[OMPI users] trouble using --mca mpi_yield_when_idle 1";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Dec  6 19:40:13 2008" -->
<!-- isoreceived="20081207004013" -->
<!-- sent="Sat, 6 Dec 2008 20:38:21 -0400" -->
<!-- isosent="20081207003821" -->
<!-- name="Douglas Guptill" -->
<!-- email="douglas.guptill_at_[hidden]" -->
<!-- subject="[OMPI users] trouble using --mca mpi_yield_when_idle 1" -->
<!-- id="20081207003821.GA15049_at_DOME" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] trouble using --mca mpi_yield_when_idle 1<br>
<strong>From:</strong> Douglas Guptill (<em>douglas.guptill_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-06 19:38:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7439.php">Sangamesh B: "[OMPI users] Problem with feupdateenv"</a>
<li><strong>Previous message:</strong> <a href="7437.php">Jeff Squyres: "Re: [OMPI users] collective algorithms"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7444.php">Eugene Loh: "Re: [OMPI users] trouble using --mca mpi_yield_when_idle 1"</a>
<li><strong>Reply:</strong> <a href="7444.php">Eugene Loh: "Re: [OMPI users] trouble using --mca mpi_yield_when_idle 1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi:
<br>
<p>I am using openmpi-1.2.8 to run a 2 processor job on an Intel
<br>
Quad-core cpu.  Opsys is Debian etch.  I am reaonably sure that, most
<br>
of the time, one process is waiting for results from the other.  The
<br>
code is fortran 90, and uses mpi_send and mpi_recv.  Yet
<br>
&quot;gnome-system-monitor&quot; shows 2 cpus at 100%.
<br>
<p>So I read, and re-read, the FAQs, and found the mpi_yield_when_idle
<br>
flag, and tried it:
<br>
<p>&nbsp;mpirun --host localhost,localhost,localhost,localhost --mca btl sm,self --mca mpi_yield_when_idle 1 --byslot -np 2 /home/dguptill/software/sopale_nested_2008-10-24/bin/sopale_nested_openmpi-intel-noopt
<br>
<p>And still get, for each run, two cpus are at 100%.
<br>
<p>My goal is to get the system to a minimum usage state, where only one
<br>
cpu is being used, if one process is waiting for results from the
<br>
other.
<br>
<p>Can anyone suggest if this is possible, and if so, how?
<br>
<p>Thanks,
<br>
Douglas.
<br>
<pre>
-- 
  Douglas Guptill                       
  Research Assistant, LSC 4640          email: douglas.guptill_at_[hidden]
  Oceanography Department               fax:   902-494-3877
  Dalhousie University
  Halifax, NS, B3H 4J1, Canada
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7439.php">Sangamesh B: "[OMPI users] Problem with feupdateenv"</a>
<li><strong>Previous message:</strong> <a href="7437.php">Jeff Squyres: "Re: [OMPI users] collective algorithms"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7444.php">Eugene Loh: "Re: [OMPI users] trouble using --mca mpi_yield_when_idle 1"</a>
<li><strong>Reply:</strong> <a href="7444.php">Eugene Loh: "Re: [OMPI users] trouble using --mca mpi_yield_when_idle 1"</a>
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
