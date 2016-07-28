<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Oct 12 15:55:39 2007" -->
<!-- isoreceived="20071012195539" -->
<!-- sent="Fri, 12 Oct 2007 13:55:33 -0600" -->
<!-- isosent="20071012195533" -->
<!-- name="Brian Granger" -->
<!-- email="ellisonbg.net_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt" -->
<!-- id="6ce0ac130710121255i34f9c422k8684c725d4776aac_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2007-10-12 15:55:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4208.php">Dirk Eddelbuettel: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<li><strong>Previous message:</strong> <a href="4206.php">Brian Granger: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<li><strong>In reply to:</strong> <a href="4191.php">Brian Barrett: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4208.php">Dirk Eddelbuettel: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<li><strong>Reply:</strong> <a href="4208.php">Dirk Eddelbuettel: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
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
<p>In mpi4py, libmpi.so is linked in at compile time, not loaded using
<br>
dlopen.  Granted, the resulting mpi4py binary is loaded into python
<br>
using dlopen.
<br>
<p><span class="quotelev1">&gt; The pt2pt component (rightly) does not have a -lmpi in its link
</span><br>
<span class="quotelev1">&gt; line.  The other components that use symbols in libmpi.so (wrongly)
</span><br>
<span class="quotelev1">&gt; do  have a -lmpi in their link line.  This can cause some problems on
</span><br>
<span class="quotelev1">&gt; some platforms (Linux tends to do dynamic linking / dynamic loading
</span><br>
<span class="quotelev1">&gt; better than most).  That's why only the pt2pt component fails.
</span><br>
<p>Did this change from 1.2.3 to 1.2.4?
<br>
<p><span class="quotelev1">&gt; Solutions:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    - Someone could make the pt2pt osc component link in libmpi.so
</span><br>
<span class="quotelev1">&gt;      like the rest of the components and hope that no one ever
</span><br>
<span class="quotelev1">&gt;      tries this on a non-friendly platform.
</span><br>
<p>Shouldn't the openmpi build system be able to figure this stuff out on
<br>
a per platform basis?
<br>
<p><span class="quotelev1">&gt;    - Debian (and all Rmpi users) could configure Open MPI with the
</span><br>
<span class="quotelev1">&gt;       --disable-dlopen flag and ignore the problem.
</span><br>
<p>Are there disadvantages to this approach?
<br>
<p><span class="quotelev1">&gt;    - Someone could fix Rmpi to dlopen libmpi.so with the RTLD_GLOBAL
</span><br>
<span class="quotelev1">&gt;      flag and fix the problem properly.
</span><br>
<p>Again, my main problem with this solution is that it means I must both
<br>
link to libmpi at compile time and load it dynamically using dlopen.
<br>
This doesn't seem right.  Also, it makes it impossible on OS X to
<br>
avoid setting LD_LIBRARY_PATH (OS X doesn't have rpath).  Being able
<br>
to use openmpi without setting LD_LIBRARY_PATH is important.
<br>
<p><span class="quotelev1">&gt; I think it's clear I'm in favor of Option 3.
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
<li><strong>Next message:</strong> <a href="4208.php">Dirk Eddelbuettel: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<li><strong>Previous message:</strong> <a href="4206.php">Brian Granger: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<li><strong>In reply to:</strong> <a href="4191.php">Brian Barrett: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4208.php">Dirk Eddelbuettel: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<li><strong>Reply:</strong> <a href="4208.php">Dirk Eddelbuettel: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
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
