<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Oct 10 17:27:27 2007" -->
<!-- isoreceived="20071010212727" -->
<!-- sent="Wed, 10 Oct 2007 15:27:22 -0600" -->
<!-- isosent="20071010212722" -->
<!-- name="Brian Granger" -->
<!-- email="ellisonbg.net_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt" -->
<!-- id="6ce0ac130710101427p5b0e96e8ye078bca34fe6d386_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="E513B64C-3D2A-40EE-8DED-D580FDE8591A_at_open-mpi.org" -->
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
<strong>From:</strong> Brian Granger (<em>ellisonbg.net_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-10 17:27:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4194.php">Dirk Eddelbuettel: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<li><strong>Previous message:</strong> <a href="4192.php">Dirk Eddelbuettel: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<li><strong>In reply to:</strong> <a href="4191.php">Brian Barrett: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4194.php">Dirk Eddelbuettel: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<li><strong>Reply:</strong> <a href="4194.php">Dirk Eddelbuettel: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<li><strong>Reply:</strong> <a href="4220.php">Jeff Squyres: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am seeing the same error, but I am using mpi4py (Lisandro Dalcin's
<br>
Python MPI bindings).  I don't think that libmpi.so is being dlopen'd
<br>
directly at runtime, but, the shared library that is linked at compile
<br>
time to libmpi.so is probably being loaded at runtime.  The odd thing
<br>
is that mpi4py has been tested extensively with openmpi and this is
<br>
the first version of openmpi that we have seen this issue.  I tried
<br>
1.2.3 again yesterday and it works fine.  What changed with 1.2.4?
<br>
<p>The problem with our case is that the code that is doing the dlopen is
<br>
deep inside Python itself (not just mpi4py).  It is the same code that
<br>
is responsible for loading _everything_ into Python, and I am pretty
<br>
sure that  there is no way that people would be willing to change it.
<br>
I am cc'ing this to Lisandro - maybe he has some ideas on this front.
<br>
<p>Thanks
<br>
<p>Brian
<br>
<p>On 10/10/07, Brian Barrett &lt;brbarret_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; On Oct 10, 2007, at 1:27 PM, Dirk Eddelbuettel wrote:
</span><br>
<span class="quotelev2">&gt; &gt; | Does this happen for all MPI programs (potentially only those that
</span><br>
<span class="quotelev2">&gt; &gt; | use the MPI-2 one-sided stuff), or just your R environment?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; This is the likely winner.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; It seems indeed due to R's Rmpi package. Running a simple mpitest.c
</span><br>
<span class="quotelev2">&gt; &gt; shows no
</span><br>
<span class="quotelev2">&gt; &gt; error message. We will look at the Rmpi initialization to see what
</span><br>
<span class="quotelev2">&gt; &gt; could
</span><br>
<span class="quotelev2">&gt; &gt; cause this.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Does rmpi link in libmpi.so or dynamically load it at run-time?  The
</span><br>
<span class="quotelev1">&gt; pt2pt one-sided component uses the MPI-1 point-to-point calls for
</span><br>
<span class="quotelev1">&gt; communication (hence, the pt2pt name). If those symbols were
</span><br>
<span class="quotelev1">&gt; unavailable (say, because libmpi.so was dynamically loaded) I could
</span><br>
<span class="quotelev1">&gt; see how this would cause problems.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The pt2pt component (rightly) does not have a -lmpi in its link
</span><br>
<span class="quotelev1">&gt; line.  The other components that use symbols in libmpi.so (wrongly)
</span><br>
<span class="quotelev1">&gt; do  have a -lmpi in their link line.  This can cause some problems on
</span><br>
<span class="quotelev1">&gt; some platforms (Linux tends to do dynamic linking / dynamic loading
</span><br>
<span class="quotelev1">&gt; better than most).  That's why only the pt2pt component fails.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My guess is that Rmpi is dynamically loading libmpi.so, but not
</span><br>
<span class="quotelev1">&gt; specifying the RTLD_GLOBAL flag.  This means that libmpi.so is not
</span><br>
<span class="quotelev1">&gt; available to the components the way it should be, and all goes
</span><br>
<span class="quotelev1">&gt; downhill from there.  It only mostly works because we do something
</span><br>
<span class="quotelev1">&gt; silly with how we link most of our components, and Linux is just
</span><br>
<span class="quotelev1">&gt; smart enough to cover our rears (thankfully).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Solutions:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    - Someone could make the pt2pt osc component link in libmpi.so
</span><br>
<span class="quotelev1">&gt;      like the rest of the components and hope that no one ever
</span><br>
<span class="quotelev1">&gt;      tries this on a non-friendly platform.
</span><br>
<span class="quotelev1">&gt;    - Debian (and all Rmpi users) could configure Open MPI with the
</span><br>
<span class="quotelev1">&gt;       --disable-dlopen flag and ignore the problem.
</span><br>
<span class="quotelev1">&gt;    - Someone could fix Rmpi to dlopen libmpi.so with the RTLD_GLOBAL
</span><br>
<span class="quotelev1">&gt;      flag and fix the problem properly.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think it's clear I'm in favor of Option 3.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brian
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4194.php">Dirk Eddelbuettel: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<li><strong>Previous message:</strong> <a href="4192.php">Dirk Eddelbuettel: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<li><strong>In reply to:</strong> <a href="4191.php">Brian Barrett: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4194.php">Dirk Eddelbuettel: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<li><strong>Reply:</strong> <a href="4194.php">Dirk Eddelbuettel: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<li><strong>Reply:</strong> <a href="4220.php">Jeff Squyres: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
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
