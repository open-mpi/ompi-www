<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Oct 23 16:58:03 2006" -->
<!-- isoreceived="20061023205803" -->
<!-- sent="Mon, 23 Oct 2006 16:58:02 -0400 (EDT)" -->
<!-- isosent="20061023205802" -->
<!-- name="Brian W. Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] help config.status to not mess up substitutions" -->
<!-- id="Pine.LNX.4.64.0610231657530.25718_at_milliways.osl.iu.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20061023202655.GB2411_at_iam.uni-bonn.de" -->
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
<strong>From:</strong> Brian W. Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-10-23 16:58:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1139.php">Joachim Worringen: "[OMPI devel] socket usage"</a>
<li><strong>Previous message:</strong> <a href="1137.php">Ralf Wildenhues: "[OMPI devel] help config.status to not mess up substitutions"</a>
<li><strong>In reply to:</strong> <a href="1137.php">Ralf Wildenhues: "[OMPI devel] help config.status to not mess up substitutions"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks, I'll apply ASAP.
<br>
<p>Brian
<br>
<p>On Mon, 23 Oct 2006, Ralf Wildenhues wrote:
<br>
<p><span class="quotelev1">&gt; Please apply this robustness patch, which helps to avoid accidental
</span><br>
<span class="quotelev1">&gt; unwanted substitutions done by config.status.  From all I can tell,
</span><br>
<span class="quotelev1">&gt; they do not happen now, but first the Autoconf manual warns against
</span><br>
<span class="quotelev1">&gt; them, second they make some config.status optimizations so much more
</span><br>
<span class="quotelev1">&gt; difficult than necessary.  :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In unrelated news, I tested Automake 1.10 with OpenMPI, and it saves
</span><br>
<span class="quotelev1">&gt; about 15s of config.status time, and about half a minute of `make dist'
</span><br>
<span class="quotelev1">&gt; time on my system.  Some pending Fortran changes have only made it into
</span><br>
<span class="quotelev1">&gt; Automake after 1.10 was released.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; Ralf
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2006-10-23  Ralf Wildenhues  &lt;Ralf.Wildenhues_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	* opal/tools/wrappers/Makefile.am: Protect manual substitutions
</span><br>
<span class="quotelev1">&gt;        from config.status.
</span><br>
<span class="quotelev1">&gt; 	* ompi/tools/wrappers/Makefile.am: Likewise.
</span><br>
<span class="quotelev1">&gt; 	* orte/tools/wrappers/Makefile.am: Likewise.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Index: opal/tools/wrappers/Makefile.am
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- opal/tools/wrappers/Makefile.am	(revision 12254)
</span><br>
<span class="quotelev1">&gt; +++ opal/tools/wrappers/Makefile.am	(working copy)
</span><br>
<span class="quotelev1">&gt; @@ -76,8 +76,8 @@
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; opalcc.1: opal_wrapper.1
</span><br>
<span class="quotelev1">&gt; 	rm -f opalcc.1
</span><br>
<span class="quotelev1">&gt; -	sed -e 's/@COMMAND@/opalcc/g' -e 's/@PROJECT@/Open PAL/g' -e 's/@PROJECT_SHORT@/OPAL/g' -e 's/@LANGUAGE@/C/g' &lt; $(top_srcdir)/opal/tools/wrappers/opal_wrapper.1 &gt; opalcc.1
</span><br>
<span class="quotelev1">&gt; +	sed -e 's/[@]COMMAND[@]/opalcc/g' -e 's/[@]PROJECT[@]/Open PAL/g' -e 's/[@]PROJECT_SHORT[@]/OPAL/g' -e 's/[@]LANGUAGE[@]/C/g' &lt; $(top_srcdir)/opal/tools/wrappers/opal_wrapper.1 &gt; opalcc.1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; opalc++.1: opal_wrapper.1
</span><br>
<span class="quotelev1">&gt; 	rm -f opalc++.1
</span><br>
<span class="quotelev1">&gt; -	sed -e 's/@COMMAND@/opalc++/g' -e 's/@PROJECT@/Open PAL/g' -e 's/@PROJECT_SHORT@/OPAL/g' -e 's/@LANGUAGE@/C++/g' &lt; $(top_srcdir)/opal/tools/wrappers/opal_wrapper.1 &gt; opalc++.1
</span><br>
<span class="quotelev1">&gt; +	sed -e 's/[@]COMMAND[@]/opalc++/g' -e 's/[@]PROJECT[@]/Open PAL/g' -e 's/[@]PROJECT_SHORT[@]/OPAL/g' -e 's/[@]LANGUAGE[@]/C++/g' &lt; $(top_srcdir)/opal/tools/wrappers/opal_wrapper.1 &gt; opalc++.1
</span><br>
<span class="quotelev1">&gt; Index: ompi/tools/wrappers/Makefile.am
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- ompi/tools/wrappers/Makefile.am	(revision 12254)
</span><br>
<span class="quotelev1">&gt; +++ ompi/tools/wrappers/Makefile.am	(working copy)
</span><br>
<span class="quotelev1">&gt; @@ -84,20 +84,20 @@
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpicc.1: $(top_srcdir)/opal/tools/wrappers/opal_wrapper.1
</span><br>
<span class="quotelev1">&gt; 	rm -f mpicc.1
</span><br>
<span class="quotelev1">&gt; -	sed -e 's/@COMMAND@/mpicc/g' -e 's/@PROJECT@/Open MPI/g' -e 's/@PROJECT_SHORT@/OMPI/g' -e 's/@LANGUAGE@/C/g' &lt; $(top_srcdir)/opal/tools/wrappers/opal_wrapper.1 &gt; mpicc.1
</span><br>
<span class="quotelev1">&gt; +	sed -e 's/[@]COMMAND[@]/mpicc/g' -e 's/[@]PROJECT[@]/Open MPI/g' -e 's/[@]PROJECT_SHORT[@]/OMPI/g' -e 's/[@]LANGUAGE[@]/C/g' &lt; $(top_srcdir)/opal/tools/wrappers/opal_wrapper.1 &gt; mpicc.1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpic++.1: $(top_srcdir)/opal/tools/wrappers/opal_wrapper.1
</span><br>
<span class="quotelev1">&gt; 	rm -f mpic++.1
</span><br>
<span class="quotelev1">&gt; -	sed -e 's/@COMMAND@/mpic++/g' -e 's/@PROJECT@/Open MPI/g' -e 's/@PROJECT_SHORT@/OMPI/g' -e 's/@LANGUAGE@/C++/g' &lt; $(top_srcdir)/opal/tools/wrappers/opal_wrapper.1 &gt; mpic++.1
</span><br>
<span class="quotelev1">&gt; +	sed -e 's/[@]COMMAND[@]/mpic++/g' -e 's/[@]PROJECT[@]/Open MPI/g' -e 's/[@]PROJECT_SHORT[@]/OMPI/g' -e 's/[@]LANGUAGE[@]/C++/g' &lt; $(top_srcdir)/opal/tools/wrappers/opal_wrapper.1 &gt; mpic++.1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpicxx.1: $(top_srcdir)/opal/tools/wrappers/opal_wrapper.1
</span><br>
<span class="quotelev1">&gt; 	rm -f mpicxx.1
</span><br>
<span class="quotelev1">&gt; -	sed -e 's/@COMMAND@/mpicxx/g' -e 's/@PROJECT@/Open MPI/g' -e 's/@PROJECT_SHORT@/OMPI/g' -e 's/@LANGUAGE@/C++/g' &lt; $(top_srcdir)/opal/tools/wrappers/opal_wrapper.1 &gt; mpicxx.1
</span><br>
<span class="quotelev1">&gt; +	sed -e 's/[@]COMMAND[@]/mpicxx/g' -e 's/[@]PROJECT[@]/Open MPI/g' -e 's/[@]PROJECT_SHORT[@]/OMPI/g' -e 's/[@]LANGUAGE[@]/C++/g' &lt; $(top_srcdir)/opal/tools/wrappers/opal_wrapper.1 &gt; mpicxx.1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpif77.1: $(top_srcdir)/opal/tools/wrappers/opal_wrapper.1
</span><br>
<span class="quotelev1">&gt; 	rm -f mpif77.1
</span><br>
<span class="quotelev1">&gt; -	sed -e 's/@COMMAND@/mpif77/g' -e 's/@PROJECT@/Open MPI/g' -e 's/@PROJECT_SHORT@/OMPI/g' -e 's/@LANGUAGE@/Fortran 77/g' &lt; $(top_srcdir)/opal/tools/wrappers/opal_wrapper.1 &gt; mpif77.1
</span><br>
<span class="quotelev1">&gt; +	sed -e 's/[@]COMMAND[@]/mpif77/g' -e 's/[@]PROJECT[@]/Open MPI/g' -e 's/[@]PROJECT_SHORT[@]/OMPI/g' -e 's/[@]LANGUAGE[@]/Fortran 77/g' &lt; $(top_srcdir)/opal/tools/wrappers/opal_wrapper.1 &gt; mpif77.1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpif90.1: $(top_srcdir)/opal/tools/wrappers/opal_wrapper.1
</span><br>
<span class="quotelev1">&gt; 	rm -f mpif90.1
</span><br>
<span class="quotelev1">&gt; -	sed -e 's/@COMMAND@/mpif90/g' -e 's/@PROJECT@/Open MPI/g' -e 's/@PROJECT_SHORT@/OMPI/g' -e 's/@LANGUAGE@/Fortran 90/g' &lt; $(top_srcdir)/opal/tools/wrappers/opal_wrapper.1 &gt; mpif90.1
</span><br>
<span class="quotelev1">&gt; +	sed -e 's/[@]COMMAND[@]/mpif90/g' -e 's/[@]PROJECT[@]/Open MPI/g' -e 's/[@]PROJECT_SHORT[@]/OMPI/g' -e 's/[@]LANGUAGE[@]/Fortran 90/g' &lt; $(top_srcdir)/opal/tools/wrappers/opal_wrapper.1 &gt; mpif90.1
</span><br>
<span class="quotelev1">&gt; Index: orte/tools/wrappers/Makefile.am
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- orte/tools/wrappers/Makefile.am	(revision 12254)
</span><br>
<span class="quotelev1">&gt; +++ orte/tools/wrappers/Makefile.am	(working copy)
</span><br>
<span class="quotelev1">&gt; @@ -51,8 +51,8 @@
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ortecc.1: $(top_srcdir)/opal/tools/wrappers/opal_wrapper.1
</span><br>
<span class="quotelev1">&gt; 	rm -f ortecc.1
</span><br>
<span class="quotelev1">&gt; -	sed -e 's/@COMMAND@/ortecc/g' -e 's/@PROJECT@/OpenRTE/g' -e 's/@PROJECT_SHORT@/ORTE/g' -e 's/@LANGUAGE@/C/g' &lt; $(top_srcdir)/opal/tools/wrappers/opal_wrapper.1 &gt; ortecc.1
</span><br>
<span class="quotelev1">&gt; +	sed -e 's/[@]COMMAND[@]/ortecc/g' -e 's/[@]PROJECT[@]/OpenRTE/g' -e 's/[@]PROJECT_SHORT[@]/ORTE/g' -e 's/[@]LANGUAGE[@]/C/g' &lt; $(top_srcdir)/opal/tools/wrappers/opal_wrapper.1 &gt; ortecc.1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ortec++.1: $(top_srcdir)/opal/tools/wrappers/opal_wrapper.1
</span><br>
<span class="quotelev1">&gt; 	rm -f ortec++.1
</span><br>
<span class="quotelev1">&gt; -	sed -e 's/@COMMAND@/ortec++/g' -e 's/@PROJECT@/OpenRTE/g' -e 's/@PROJECT_SHORT@/ORTE/g' -e 's/@LANGUAGE@/C++/g' &lt; $(top_srcdir)/opal/tools/wrappers/opal_wrapper.1 &gt; ortec++.1
</span><br>
<span class="quotelev1">&gt; +	sed -e 's/[@]COMMAND[@]/ortec++/g' -e 's/[@]PROJECT[@]/OpenRTE/g' -e 's/[@]PROJECT_SHORT[@]/ORTE/g' -e 's/[@]LANGUAGE[@]/C++/g' &lt; $(top_srcdir)/opal/tools/wrappers/opal_wrapper.1 &gt; ortec++.1
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><pre>
-- 
   Brian Barrett
   Graduate Student, Open Systems Lab, Indiana University
   <a href="http://www.osl.iu.edu/~brbarret/">http://www.osl.iu.edu/~brbarret/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1139.php">Joachim Worringen: "[OMPI devel] socket usage"</a>
<li><strong>Previous message:</strong> <a href="1137.php">Ralf Wildenhues: "[OMPI devel] help config.status to not mess up substitutions"</a>
<li><strong>In reply to:</strong> <a href="1137.php">Ralf Wildenhues: "[OMPI devel] help config.status to not mess up substitutions"</a>
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
