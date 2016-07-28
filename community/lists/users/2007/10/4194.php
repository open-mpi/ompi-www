<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Oct 10 19:41:04 2007" -->
<!-- isoreceived="20071010234104" -->
<!-- sent="Wed, 10 Oct 2007 18:40:39 -0500" -->
<!-- isosent="20071010234039" -->
<!-- name="Dirk Eddelbuettel" -->
<!-- email="edd_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt" -->
<!-- id="18189.25335.327598.704066_at_ron.nulle.part" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="6ce0ac130710101427p5b0e96e8ye078bca34fe6d386_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2007-10-10 19:40:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4195.php">Stephen Guzik: "[OMPI users] MPI::BOTTOM vs MPI_BOTTOM"</a>
<li><strong>Previous message:</strong> <a href="4193.php">Brian Granger: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<li><strong>In reply to:</strong> <a href="4193.php">Brian Granger: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4206.php">Brian Granger: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<li><strong>Reply:</strong> <a href="4206.php">Brian Granger: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 10 October 2007 at 15:27, Brian Granger wrote:
<br>
| I am seeing the same error, but I am using mpi4py (Lisandro Dalcin's
<br>
| Python MPI bindings).  I don't think that libmpi.so is being dlopen'd
<br>
| directly at runtime, but, the shared library that is linked at compile
<br>
| time to libmpi.so is probably being loaded at runtime.  The odd thing
<br>
| is that mpi4py has been tested extensively with openmpi and this is
<br>
| the first version of openmpi that we have seen this issue.  I tried
<br>
| 1.2.3 again yesterday and it works fine.  What changed with 1.2.4?
<br>
| 
<br>
| The problem with our case is that the code that is doing the dlopen is
<br>
| deep inside Python itself (not just mpi4py).  It is the same code that
<br>
<p>That's the same for R. We don;t touch the innert guts of module loading for
<br>
this . What Hao realized after looking at the corresponding FAQ item was that
<br>
right before calling MPI_Init, one can load libmpi explicitly, and -- and
<br>
that;s the important bit -- set the proper RTLD_GLOBAL argument.  
<br>
<p>So you could adapt the patch we used :
<br>
<p>&nbsp;&nbsp;&nbsp;a) add an include for dlfcn.h
<br>
<p>&nbsp;&nbsp;&nbsp;b) explicitly call dlopen on libmpi.so with RTLD_GLOBAL
<br>
<p>That should be reasonably easy to test as you only need to rebuild mpi4py,
<br>
<p><p>--- rmpi-0.5-4.orig/src/Rmpi.c
<br>
+++ rmpi-0.5-4/src/Rmpi.c
<br>
@@ -16,6 +16,7 @@
<br>
&nbsp;&nbsp;*/
<br>
&nbsp;
<br>
&nbsp;#include &quot;Rmpi.h&quot;
<br>
+#include &lt;dlfcn.h&gt;
<br>
&nbsp;
<br>
&nbsp;static MPI_Comm	*comm;
<br>
&nbsp;static MPI_Status *status;
<br>
@@ -32,7 +33,9 @@
<br>
&nbsp;if (flag)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return AsInt(1);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else {	
<br>
-		MPI_Init((void *)0,(void *)0);
<br>
+	        char *libm=&quot;libmpi.so&quot;;
<br>
+		dlopen(libm,RTLD_GLOBAL);
<br>
+	  	MPI_Init((void *)0,(void *)0);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Errhandler_set(MPI_COMM_WORLD, MPI_ERRORS_RETURN);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Errhandler_set(MPI_COMM_SELF, MPI_ERRORS_RETURN);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;comm=(MPI_Comm *)Calloc(COMM_MAXSIZE, MPI_Comm); 
<br>
<p><p>| is responsible for loading _everything_ into Python, and I am pretty
<br>
| sure that  there is no way that people would be willing to change it.
<br>
| I am cc'ing this to Lisandro - maybe he has some ideas on this front.
<br>
<p>Actually, looked like you didn't CC him.
<br>
<p>Hth, Dirk
<br>
<p>| 
<br>
| Thanks
<br>
| 
<br>
| Brian
<br>
| 
<br>
| On 10/10/07, Brian Barrett &lt;brbarret_at_[hidden]&gt; wrote:
<br>
| &gt; On Oct 10, 2007, at 1:27 PM, Dirk Eddelbuettel wrote:
<br>
| &gt; &gt; | Does this happen for all MPI programs (potentially only those that
<br>
| &gt; &gt; | use the MPI-2 one-sided stuff), or just your R environment?
<br>
| &gt; &gt;
<br>
| &gt; &gt; This is the likely winner.
<br>
| &gt; &gt;
<br>
| &gt; &gt; It seems indeed due to R's Rmpi package. Running a simple mpitest.c
<br>
| &gt; &gt; shows no
<br>
| &gt; &gt; error message. We will look at the Rmpi initialization to see what
<br>
| &gt; &gt; could
<br>
| &gt; &gt; cause this.
<br>
| &gt;
<br>
| &gt; Does rmpi link in libmpi.so or dynamically load it at run-time?  The
<br>
| &gt; pt2pt one-sided component uses the MPI-1 point-to-point calls for
<br>
| &gt; communication (hence, the pt2pt name). If those symbols were
<br>
| &gt; unavailable (say, because libmpi.so was dynamically loaded) I could
<br>
| &gt; see how this would cause problems.
<br>
| &gt;
<br>
| &gt; The pt2pt component (rightly) does not have a -lmpi in its link
<br>
| &gt; line.  The other components that use symbols in libmpi.so (wrongly)
<br>
| &gt; do  have a -lmpi in their link line.  This can cause some problems on
<br>
| &gt; some platforms (Linux tends to do dynamic linking / dynamic loading
<br>
| &gt; better than most).  That's why only the pt2pt component fails.
<br>
| &gt;
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
| &gt;
<br>
| &gt; Solutions:
<br>
| &gt;
<br>
| &gt;    - Someone could make the pt2pt osc component link in libmpi.so
<br>
| &gt;      like the rest of the components and hope that no one ever
<br>
| &gt;      tries this on a non-friendly platform.
<br>
| &gt;    - Debian (and all Rmpi users) could configure Open MPI with the
<br>
| &gt;       --disable-dlopen flag and ignore the problem.
<br>
| &gt;    - Someone could fix Rmpi to dlopen libmpi.so with the RTLD_GLOBAL
<br>
| &gt;      flag and fix the problem properly.
<br>
| &gt;
<br>
| &gt; I think it's clear I'm in favor of Option 3.
<br>
| &gt;
<br>
| &gt; Brian
<br>
| &gt; _______________________________________________
<br>
| &gt; users mailing list
<br>
| &gt; users_at_[hidden]
<br>
| &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
| &gt;
<br>
| _______________________________________________
<br>
| users mailing list
<br>
| users_at_[hidden]
<br>
| <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p><pre>
-- 
Three out of two people have difficulties with fractions.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4195.php">Stephen Guzik: "[OMPI users] MPI::BOTTOM vs MPI_BOTTOM"</a>
<li><strong>Previous message:</strong> <a href="4193.php">Brian Granger: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<li><strong>In reply to:</strong> <a href="4193.php">Brian Granger: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4206.php">Brian Granger: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<li><strong>Reply:</strong> <a href="4206.php">Brian Granger: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
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
