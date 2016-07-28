<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jun  6 17:44:22 2007" -->
<!-- isoreceived="20070606214422" -->
<!-- sent="Wed, 6 Jun 2007 16:44:18 -0500" -->
<!-- isosent="20070606214418" -->
<!-- name="Michael Edwards" -->
<!-- email="miedward_at_[hidden]" -->
<!-- subject="[OMPI users] SGE and OFED1.1" -->
<!-- id="8d71b5680706061444i47b97ae6te120d7f3243d8a52_at_mail.gmail.com" -->
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
<strong>From:</strong> Michael Edwards (<em>miedward_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-06 17:44:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3391.php">Code Master: "[OMPI users] making all library components static (questions about --enable-mcs-static)"</a>
<li><strong>Previous message:</strong> <a href="3389.php">George Bosilca: "Re: [OMPI users] MX MPI latency measurements"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3392.php">Jeff Squyres: "Re: [OMPI users] SGE and OFED1.1"</a>
<li><strong>Reply:</strong> <a href="3392.php">Jeff Squyres: "Re: [OMPI users] SGE and OFED1.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am runing open-mpi 1.1.1-1 compiled from OFED1.1 which I downloaded
<br>
from their website.
<br>
<p>I am using SGE installed via OSCAR 5.0 and when running under SGE I
<br>
get the &quot;mca_mpool_openib_register: ibv_reg_mr(0x590000,528384) failed
<br>
with error: Cannot allocate memory&quot; error discussed at length in your
<br>
FAQ.
<br>
<p>When I run from the command line using mpirun, I don't get the errors.
<br>
&nbsp;Of course, I don't know how to tell if the code is actually using the
<br>
IB interface instead of the GigE network...
<br>
<p>I tried the suggestions in the FAQ regarding setting the memlock
<br>
parameter in /etc/security/limits.conf: and all the nodes return
<br>
&quot;unlimited&quot; in response to &quot;ulimit -l&quot; after rebooting the nodes.  The
<br>
problem persists under SGE and still does not appear when simply using
<br>
mpirun.
<br>
<p>I assumed it would work since openmpi 1.1.1 was included as working
<br>
with SGE in OSCAR 5.0, but I don't know how different that version and
<br>
the one included with OFED is.
<br>
<p>Any suggestions would be appreciated.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3391.php">Code Master: "[OMPI users] making all library components static (questions about --enable-mcs-static)"</a>
<li><strong>Previous message:</strong> <a href="3389.php">George Bosilca: "Re: [OMPI users] MX MPI latency measurements"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3392.php">Jeff Squyres: "Re: [OMPI users] SGE and OFED1.1"</a>
<li><strong>Reply:</strong> <a href="3392.php">Jeff Squyres: "Re: [OMPI users] SGE and OFED1.1"</a>
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
