<?
$subject_val = "Re: [OMPI users] OpenMPI w valgrind: need to recompile?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 11 19:37:39 2010" -->
<!-- isoreceived="20100112003739" -->
<!-- sent="Mon, 11 Jan 2010 19:38:23 -0500" -->
<!-- isosent="20100112003823" -->
<!-- name="Rainer Keller" -->
<!-- email="keller_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI w valgrind: need to recompile?" -->
<!-- id="201001111938.23845.keller_at_ornl.gov" -->
<!-- charset="iso-8859-15" -->
<!-- inreplyto="BAY119-W346528D02A8963683F6128B1720_at_phx.gbl" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI w valgrind: need to recompile?<br>
<strong>From:</strong> Rainer Keller (<em>keller_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-11 19:38:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11737.php">Sangamesh B: "Re: [OMPI users] problem with progress thread and orte"</a>
<li><strong>Previous message:</strong> <a href="11735.php">Josh Hursey: "Re: [OMPI users] checkpointing multi node and multi process applications"</a>
<li><strong>In reply to:</strong> <a href="11700.php">Saurabh T: "[OMPI users] OpenMPI w valgrind: need to recompile?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Saurabh,
<br>
On Wednesday 06 January 2010 11:20:55 am Saurabh T wrote:
<br>
<span class="quotelev1">&gt; I am building libraries against OpenMPI, and then applications using those
</span><br>
<span class="quotelev1">&gt; libraries.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It was unclear from the FAQ at
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=debugging#memchecker_how">http://www.open-mpi.org/faq/?category=debugging#memchecker_how</a> whether the
</span><br>
<span class="quotelev1">&gt; libraries need to be recompiled and the application relinked using
</span><br>
<span class="quotelev1">&gt; valgrind-enabled mpicc etc, in order to get valgrind to work.
</span><br>
An Open MPI using memchecker does not add or change anything to mpicc; there 
<br>
are no further libraries that need to be linked against.
<br>
<p><span class="quotelev1">&gt; In other words, can I run a valgrind-disabled openmpi app with a valgrind-
</span><br>
<span class="quotelev1">&gt; enabled orterun, or do I have to recompile/relink the whole thing? Is the
</span><br>
<span class="quotelev1">&gt; answer different for shared vs static openmpi libraries?
</span><br>
Therefore, in case of a shared library: Yes, You can run the app compiled with 
<br>
a non-memchecker OpenMPI, and later alter the PATH/LD_LIBRARY_PATH to use the 
<br>
memchecker/valgrind-enabled Open MPI... (although, this is not the common and 
<br>
suggested practice ,-))
<br>
<p>And yes, it would be different for statically linking against libmpi.a (which 
<br>
in case of not using --enable-memchecker would just not invoke the valgrind-
<br>
API).
<br>
<p><p><span class="quotelev1">&gt; The FAQ also states that openmpi from v 1.5 provides a valgrind suppression 
</span><br>
<span class="quotelev1">&gt; file. Is this a mistake in the FAQ or is the suppression file not available
</span><br>
<span class="quotelev1">&gt; with the latest stable release (1.4)? If not, can the 1.5 file be used with
</span><br>
<span class="quotelev1">&gt; 1.4?
</span><br>
That's a good point!
<br>
Please see the CMR ticket #2162
<br>
<p>Best regards,
<br>
Rainer
<br>
<pre>
-- 
------------------------------------------------------------------------
Rainer Keller, PhD                  Tel: +1 (865) 241-6293
Oak Ridge National Lab          Fax: +1 (865) 241-4811
PO Box 2008 MS 6164           Email: keller_at_[hidden]
Oak Ridge, TN 37831-2008    AIM/Skype: rusraink
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11737.php">Sangamesh B: "Re: [OMPI users] problem with progress thread and orte"</a>
<li><strong>Previous message:</strong> <a href="11735.php">Josh Hursey: "Re: [OMPI users] checkpointing multi node and multi process applications"</a>
<li><strong>In reply to:</strong> <a href="11700.php">Saurabh T: "[OMPI users] OpenMPI w valgrind: need to recompile?"</a>
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
