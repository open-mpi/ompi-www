<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Oct 10 14:18:33 2007" -->
<!-- isoreceived="20071010181833" -->
<!-- sent="Wed, 10 Oct 2007 13:18:18 -0500" -->
<!-- isosent="20071010181818" -->
<!-- name="Dirk Eddelbuettel" -->
<!-- email="edd_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt" -->
<!-- id="18189.5994.422123.50962_at_ron.nulle.part" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> Dirk Eddelbuettel (<em>edd_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-10 14:18:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4193.php">Brian Granger: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<li><strong>Previous message:</strong> <a href="4191.php">Brian Barrett: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<li><strong>In reply to:</strong> <a href="4191.php">Brian Barrett: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4193.php">Brian Granger: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brian,
<br>
<p>Man you're good!  :)
<br>
<p>On 10 October 2007 at 13:49, Brian Barrett wrote:
<br>
| On Oct 10, 2007, at 1:27 PM, Dirk Eddelbuettel wrote:
<br>
| &gt; | Does this happen for all MPI programs (potentially only those that
<br>
| &gt; | use the MPI-2 one-sided stuff), or just your R environment?
<br>
| &gt;
<br>
| &gt; This is the likely winner.
<br>
| &gt;
<br>
| &gt; It seems indeed due to R's Rmpi package. Running a simple mpitest.c  
<br>
| &gt; shows no
<br>
| &gt; error message. We will look at the Rmpi initialization to see what  
<br>
| &gt; could
<br>
| &gt; cause this.
<br>
| 
<br>
| Does rmpi link in libmpi.so or dynamically load it at run-time?  The  
<br>
<p>The extension mechanism for the GNU R environment loads at run-time. This is
<br>
used by literally hundreds of packages on the CRAN mirrors.
<br>
<p>| pt2pt one-sided component uses the MPI-1 point-to-point calls for  
<br>
| communication (hence, the pt2pt name). If those symbols were  
<br>
| unavailable (say, because libmpi.so was dynamically loaded) I could  
<br>
| see how this would cause problems.
<br>
| 
<br>
| The pt2pt component (rightly) does not have a -lmpi in its link  
<br>
| line.  The other components that use symbols in libmpi.so (wrongly)  
<br>
| do  have a -lmpi in their link line.  This can cause some problems on  
<br>
| some platforms (Linux tends to do dynamic linking / dynamic loading  
<br>
| better than most).  That's why only the pt2pt component fails.
<br>
| 
<br>
| My guess is that Rmpi is dynamically loading libmpi.so, but not  
<br>
| specifying the RTLD_GLOBAL flag.  This means that libmpi.so is not  
<br>
<p>Spot on. Hao, Rmpi's author, alerted me run the Open MPI FAQ item 24 and
<br>
suggested the following patch which appears to have solved the issue
<br>
<p>--- rmpi-0.5-4.orig/src/Rmpi.c
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
<p>| available to the components the way it should be, and all goes  
<br>
| downhill from there.  It only mostly works because we do something  
<br>
| silly with how we link most of our components, and Linux is just  
<br>
| smart enough to cover our rears (thankfully).
<br>
| 
<br>
| Solutions:
<br>
| 
<br>
|    - Someone could make the pt2pt osc component link in libmpi.so
<br>
|      like the rest of the components and hope that no one ever
<br>
|      tries this on a non-friendly platform.
<br>
|    - Debian (and all Rmpi users) could configure Open MPI with the
<br>
|       --disable-dlopen flag and ignore the problem.
<br>
|    - Someone could fix Rmpi to dlopen libmpi.so with the RTLD_GLOBAL
<br>
|      flag and fix the problem properly.
<br>
| 
<br>
| I think it's clear I'm in favor of Option 3.
<br>
<p>And I think Rmpi's autor agrees with you :) This also more or less answers
<br>
the question I lobbed at Hao a few minutes ago when I was puzzled why Open
<br>
MPI needs when so many other packages / libraries load cleanly into R.
<br>
<p>Many, many thanks!
<br>
<p>Dirk, much happier
<br>
<p><pre>
-- 
Three out of two people have difficulties with fractions.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4193.php">Brian Granger: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<li><strong>Previous message:</strong> <a href="4191.php">Brian Barrett: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<li><strong>In reply to:</strong> <a href="4191.php">Brian Barrett: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4193.php">Brian Granger: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
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
