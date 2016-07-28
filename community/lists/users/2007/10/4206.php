<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Oct 12 15:45:03 2007" -->
<!-- isoreceived="20071012194503" -->
<!-- sent="Fri, 12 Oct 2007 13:44:56 -0600" -->
<!-- isosent="20071012194456" -->
<!-- name="Brian Granger" -->
<!-- email="ellisonbg.net_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt" -->
<!-- id="6ce0ac130710121244o1936de8bj5b0ef1ecfa929882_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="18189.25335.327598.704066_at_ron.nulle.part" -->
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
<strong>Date:</strong> 2007-10-12 15:44:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4207.php">Brian Granger: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<li><strong>Previous message:</strong> <a href="4205.php">Richard Graham: "[OMPI users] FW: [mpi-21] SC'07 MPI Forum organization meeting"</a>
<li><strong>In reply to:</strong> <a href="4194.php">Dirk Eddelbuettel: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4220.php">Jeff Squyres: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; That's the same for R. We don;t touch the innert guts of module loading for
</span><br>
<span class="quotelev1">&gt; this . What Hao realized after looking at the corresponding FAQ item was that
</span><br>
<span class="quotelev1">&gt; right before calling MPI_Init, one can load libmpi explicitly, and -- and
</span><br>
<span class="quotelev1">&gt; that;s the important bit -- set the proper RTLD_GLOBAL argument.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So you could adapt the patch we used :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    a) add an include for dlfcn.h
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    b) explicitly call dlopen on libmpi.so with RTLD_GLOBAL
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That should be reasonably easy to test as you only need to rebuild mpi4py,
</span><br>
<p>I don't like this solution one bit.  Here is why.  When someone needs
<br>
to use a shared library in a given piece of code there are 2 options:
<br>
<p>1.  Link in the shared library at compile time.
<br>
<p>2.  Load it using dlopen.
<br>
<p>What you are telling me is that to use libmpi, I need to do both of
<br>
these!!  Am I not correct that this is an abuse of dlopen?
<br>
<p>Anyone should be able to link to libmpi at compile time and things
<br>
shoud &quot;just work&quot; - rergardless of how my binary file is being used
<br>
(my binary file could be linked in at compile time or itself loaded
<br>
using dlopen).
<br>
<p>While I agree that the hack would probably solve the problem for
<br>
mpi4py, I don't think this is a true solution to the problem.
<br>
<p>Brian
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --- rmpi-0.5-4.orig/src/Rmpi.c
</span><br>
<span class="quotelev1">&gt; +++ rmpi-0.5-4/src/Rmpi.c
</span><br>
<span class="quotelev1">&gt; @@ -16,6 +16,7 @@
</span><br>
<span class="quotelev1">&gt;   */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  #include &quot;Rmpi.h&quot;
</span><br>
<span class="quotelev1">&gt; +#include &lt;dlfcn.h&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  static MPI_Comm        *comm;
</span><br>
<span class="quotelev1">&gt;  static MPI_Status *status;
</span><br>
<span class="quotelev1">&gt; @@ -32,7 +33,9 @@
</span><br>
<span class="quotelev1">&gt;  if (flag)
</span><br>
<span class="quotelev1">&gt;                 return AsInt(1);
</span><br>
<span class="quotelev1">&gt;         else {
</span><br>
<span class="quotelev1">&gt; -               MPI_Init((void *)0,(void *)0);
</span><br>
<span class="quotelev1">&gt; +               char *libm=&quot;libmpi.so&quot;;
</span><br>
<span class="quotelev1">&gt; +               dlopen(libm,RTLD_GLOBAL);
</span><br>
<span class="quotelev1">&gt; +               MPI_Init((void *)0,(void *)0);
</span><br>
<span class="quotelev1">&gt;                 MPI_Errhandler_set(MPI_COMM_WORLD, MPI_ERRORS_RETURN);
</span><br>
<span class="quotelev1">&gt;                 MPI_Errhandler_set(MPI_COMM_SELF, MPI_ERRORS_RETURN);
</span><br>
<span class="quotelev1">&gt;                 comm=(MPI_Comm *)Calloc(COMM_MAXSIZE, MPI_Comm);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; | is responsible for loading _everything_ into Python, and I am pretty
</span><br>
<span class="quotelev1">&gt; | sure that  there is no way that people would be willing to change it.
</span><br>
<span class="quotelev1">&gt; | I am cc'ing this to Lisandro - maybe he has some ideas on this front.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Actually, looked like you didn't CC him.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hth, Dirk
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; |
</span><br>
<span class="quotelev1">&gt; | Thanks
</span><br>
<span class="quotelev1">&gt; |
</span><br>
<span class="quotelev1">&gt; | Brian
</span><br>
<span class="quotelev1">&gt; |
</span><br>
<span class="quotelev1">&gt; | On 10/10/07, Brian Barrett &lt;brbarret_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; | &gt; On Oct 10, 2007, at 1:27 PM, Dirk Eddelbuettel wrote:
</span><br>
<span class="quotelev1">&gt; | &gt; &gt; | Does this happen for all MPI programs (potentially only those that
</span><br>
<span class="quotelev1">&gt; | &gt; &gt; | use the MPI-2 one-sided stuff), or just your R environment?
</span><br>
<span class="quotelev1">&gt; | &gt; &gt;
</span><br>
<span class="quotelev1">&gt; | &gt; &gt; This is the likely winner.
</span><br>
<span class="quotelev1">&gt; | &gt; &gt;
</span><br>
<span class="quotelev1">&gt; | &gt; &gt; It seems indeed due to R's Rmpi package. Running a simple mpitest.c
</span><br>
<span class="quotelev1">&gt; | &gt; &gt; shows no
</span><br>
<span class="quotelev1">&gt; | &gt; &gt; error message. We will look at the Rmpi initialization to see what
</span><br>
<span class="quotelev1">&gt; | &gt; &gt; could
</span><br>
<span class="quotelev1">&gt; | &gt; &gt; cause this.
</span><br>
<span class="quotelev1">&gt; | &gt;
</span><br>
<span class="quotelev1">&gt; | &gt; Does rmpi link in libmpi.so or dynamically load it at run-time?  The
</span><br>
<span class="quotelev1">&gt; | &gt; pt2pt one-sided component uses the MPI-1 point-to-point calls for
</span><br>
<span class="quotelev1">&gt; | &gt; communication (hence, the pt2pt name). If those symbols were
</span><br>
<span class="quotelev1">&gt; | &gt; unavailable (say, because libmpi.so was dynamically loaded) I could
</span><br>
<span class="quotelev1">&gt; | &gt; see how this would cause problems.
</span><br>
<span class="quotelev1">&gt; | &gt;
</span><br>
<span class="quotelev1">&gt; | &gt; The pt2pt component (rightly) does not have a -lmpi in its link
</span><br>
<span class="quotelev1">&gt; | &gt; line.  The other components that use symbols in libmpi.so (wrongly)
</span><br>
<span class="quotelev1">&gt; | &gt; do  have a -lmpi in their link line.  This can cause some problems on
</span><br>
<span class="quotelev1">&gt; | &gt; some platforms (Linux tends to do dynamic linking / dynamic loading
</span><br>
<span class="quotelev1">&gt; | &gt; better than most).  That's why only the pt2pt component fails.
</span><br>
<span class="quotelev1">&gt; | &gt;
</span><br>
<span class="quotelev1">&gt; | &gt; My guess is that Rmpi is dynamically loading libmpi.so, but not
</span><br>
<span class="quotelev1">&gt; | &gt; specifying the RTLD_GLOBAL flag.  This means that libmpi.so is not
</span><br>
<span class="quotelev1">&gt; | &gt; available to the components the way it should be, and all goes
</span><br>
<span class="quotelev1">&gt; | &gt; downhill from there.  It only mostly works because we do something
</span><br>
<span class="quotelev1">&gt; | &gt; silly with how we link most of our components, and Linux is just
</span><br>
<span class="quotelev1">&gt; | &gt; smart enough to cover our rears (thankfully).
</span><br>
<span class="quotelev1">&gt; | &gt;
</span><br>
<span class="quotelev1">&gt; | &gt; Solutions:
</span><br>
<span class="quotelev1">&gt; | &gt;
</span><br>
<span class="quotelev1">&gt; | &gt;    - Someone could make the pt2pt osc component link in libmpi.so
</span><br>
<span class="quotelev1">&gt; | &gt;      like the rest of the components and hope that no one ever
</span><br>
<span class="quotelev1">&gt; | &gt;      tries this on a non-friendly platform.
</span><br>
<span class="quotelev1">&gt; | &gt;    - Debian (and all Rmpi users) could configure Open MPI with the
</span><br>
<span class="quotelev1">&gt; | &gt;       --disable-dlopen flag and ignore the problem.
</span><br>
<span class="quotelev1">&gt; | &gt;    - Someone could fix Rmpi to dlopen libmpi.so with the RTLD_GLOBAL
</span><br>
<span class="quotelev1">&gt; | &gt;      flag and fix the problem properly.
</span><br>
<span class="quotelev1">&gt; | &gt;
</span><br>
<span class="quotelev1">&gt; | &gt; I think it's clear I'm in favor of Option 3.
</span><br>
<span class="quotelev1">&gt; | &gt;
</span><br>
<span class="quotelev1">&gt; | &gt; Brian
</span><br>
<span class="quotelev1">&gt; | &gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; | &gt; users mailing list
</span><br>
<span class="quotelev1">&gt; | &gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; | &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; | &gt;
</span><br>
<span class="quotelev1">&gt; | _______________________________________________
</span><br>
<span class="quotelev1">&gt; | users mailing list
</span><br>
<span class="quotelev1">&gt; | users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; | <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Three out of two people have difficulties with fractions.
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
<li><strong>Next message:</strong> <a href="4207.php">Brian Granger: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<li><strong>Previous message:</strong> <a href="4205.php">Richard Graham: "[OMPI users] FW: [mpi-21] SC'07 MPI Forum organization meeting"</a>
<li><strong>In reply to:</strong> <a href="4194.php">Dirk Eddelbuettel: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4220.php">Jeff Squyres: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
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
