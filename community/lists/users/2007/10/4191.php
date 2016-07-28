<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Oct 10 13:49:19 2007" -->
<!-- isoreceived="20071010174919" -->
<!-- sent="Wed, 10 Oct 2007 13:49:12 -0400" -->
<!-- isosent="20071010174912" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt" -->
<!-- id="E513B64C-3D2A-40EE-8DED-D580FDE8591A_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="18189.2918.953533.934053_at_ron.nulle.part" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-10 13:49:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4192.php">Dirk Eddelbuettel: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<li><strong>Previous message:</strong> <a href="4190.php">Dirk Eddelbuettel: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<li><strong>In reply to:</strong> <a href="4190.php">Dirk Eddelbuettel: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4192.php">Dirk Eddelbuettel: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<li><strong>Reply:</strong> <a href="4192.php">Dirk Eddelbuettel: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<li><strong>Reply:</strong> <a href="4193.php">Brian Granger: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<li><strong>Reply:</strong> <a href="4207.php">Brian Granger: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 10, 2007, at 1:27 PM, Dirk Eddelbuettel wrote:
<br>
<span class="quotelev1">&gt; | Does this happen for all MPI programs (potentially only those that
</span><br>
<span class="quotelev1">&gt; | use the MPI-2 one-sided stuff), or just your R environment?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is the likely winner.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It seems indeed due to R's Rmpi package. Running a simple mpitest.c  
</span><br>
<span class="quotelev1">&gt; shows no
</span><br>
<span class="quotelev1">&gt; error message. We will look at the Rmpi initialization to see what  
</span><br>
<span class="quotelev1">&gt; could
</span><br>
<span class="quotelev1">&gt; cause this.
</span><br>
<p>Does rmpi link in libmpi.so or dynamically load it at run-time?  The  
<br>
pt2pt one-sided component uses the MPI-1 point-to-point calls for  
<br>
communication (hence, the pt2pt name). If those symbols were  
<br>
unavailable (say, because libmpi.so was dynamically loaded) I could  
<br>
see how this would cause problems.
<br>
<p>The pt2pt component (rightly) does not have a -lmpi in its link  
<br>
line.  The other components that use symbols in libmpi.so (wrongly)  
<br>
do  have a -lmpi in their link line.  This can cause some problems on  
<br>
some platforms (Linux tends to do dynamic linking / dynamic loading  
<br>
better than most).  That's why only the pt2pt component fails.
<br>
<p>My guess is that Rmpi is dynamically loading libmpi.so, but not  
<br>
specifying the RTLD_GLOBAL flag.  This means that libmpi.so is not  
<br>
available to the components the way it should be, and all goes  
<br>
downhill from there.  It only mostly works because we do something  
<br>
silly with how we link most of our components, and Linux is just  
<br>
smart enough to cover our rears (thankfully).
<br>
<p>Solutions:
<br>
<p>&nbsp;&nbsp;&nbsp;- Someone could make the pt2pt osc component link in libmpi.so
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;like the rest of the components and hope that no one ever
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;tries this on a non-friendly platform.
<br>
&nbsp;&nbsp;&nbsp;- Debian (and all Rmpi users) could configure Open MPI with the
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--disable-dlopen flag and ignore the problem.
<br>
&nbsp;&nbsp;&nbsp;- Someone could fix Rmpi to dlopen libmpi.so with the RTLD_GLOBAL
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;flag and fix the problem properly.
<br>
<p>I think it's clear I'm in favor of Option 3.
<br>
<p>Brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4192.php">Dirk Eddelbuettel: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<li><strong>Previous message:</strong> <a href="4190.php">Dirk Eddelbuettel: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<li><strong>In reply to:</strong> <a href="4190.php">Dirk Eddelbuettel: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4192.php">Dirk Eddelbuettel: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<li><strong>Reply:</strong> <a href="4192.php">Dirk Eddelbuettel: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<li><strong>Reply:</strong> <a href="4193.php">Brian Granger: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<li><strong>Reply:</strong> <a href="4207.php">Brian Granger: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
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
