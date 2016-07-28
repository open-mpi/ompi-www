<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Oct 12 16:37:05 2007" -->
<!-- isoreceived="20071012203705" -->
<!-- sent="Fri, 12 Oct 2007 15:36:55 -0500" -->
<!-- isosent="20071012203655" -->
<!-- name="Dirk Eddelbuettel" -->
<!-- email="edd_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt" -->
<!-- id="18191.56039.722078.929543_at_ron.nulle.part" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="6ce0ac130710121255i34f9c422k8684c725d4776aac_at_mail.gmail.com" -->
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
<strong>From:</strong> Dirk Eddelbuettel (<em>edd_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-12 16:36:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4209.php">Torsten Hoefler: "Re: [OMPI users] Re :Re: Re :Re: Tuning Openmpi with IB Interconnect"</a>
<li><strong>Previous message:</strong> <a href="4207.php">Brian Granger: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<li><strong>In reply to:</strong> <a href="4207.php">Brian Granger: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brian,
<br>
<p>On 12 October 2007 at 13:55, Brian Granger wrote:
<br>
| &gt; My guess is that Rmpi is dynamically loading libmpi.so, but not
<br>
| &gt; specifying the RTLD_GLOBAL flag.  This means that libmpi.so is not
<br>
| &gt; available to the components the way it should be, and all goes
<br>
| &gt; downhill from there.  It only mostly works because we do something
<br>
| &gt; silly with how we link most of our components, and Linux is just
<br>
| &gt; smart enough to cover our rears (thankfully).
<br>
| 
<br>
| In mpi4py, libmpi.so is linked in at compile time, not loaded using
<br>
| dlopen.  Granted, the resulting mpi4py binary is loaded into python
<br>
| using dlopen.
<br>
<p>AFAIK that is the same for all dynamically loaded extensions for all 'host
<br>
systems' I've used (ie Perl, Python, Octave, R, ...), and of course also Rmpi
<br>
for R.
<br>
<p>But I looked some more at mpi4py and the mpipython front-ends for Python. As
<br>
I recall, it mentions explicitly that argc/argv need to go to MPI_INIT before
<br>
Python does its thing with them.  So other caveats may apply -- you may have
<br>
to tweak the engine proper.  For us, GNU R is unaltered and the suggested
<br>
change is local the the Rmpi extension package.
<br>
<p>| &gt;    - Someone could fix Rmpi to dlopen libmpi.so with the RTLD_GLOBAL
<br>
| &gt;      flag and fix the problem properly.
<br>
| 
<br>
| Again, my main problem with this solution is that it means I must both
<br>
| link to libmpi at compile time and load it dynamically using dlopen.
<br>
| This doesn't seem right.  Also, it makes it impossible on OS X to
<br>
<p>IIRC this is about the RTLD_GLOBAL flag.  The default load doesn't use it,
<br>
not all symbols are exported and we get the warning.  The code still works,
<br>
mind you.  
<br>
<p>Using the explicit dlopen with the correct flag, the (spurious) warning
<br>
disappears.  That's what we wanted.
<br>
<p>| avoid setting LD_LIBRARY_PATH (OS X doesn't have rpath).  Being able
<br>
| to use openmpi without setting LD_LIBRARY_PATH is important.
<br>
<p>We do net set LD_LIBRARY_PATH. The libmpi.so library still sits where it
<br>
always has, in /usr/lib, where ld.so looks anyway.  So this doesn't apply.
<br>
<p>Regards, Dirk
<br>
<p><pre>
-- 
Three out of two people have difficulties with fractions.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4209.php">Torsten Hoefler: "Re: [OMPI users] Re :Re: Re :Re: Tuning Openmpi with IB Interconnect"</a>
<li><strong>Previous message:</strong> <a href="4207.php">Brian Granger: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<li><strong>In reply to:</strong> <a href="4207.php">Brian Granger: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
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
