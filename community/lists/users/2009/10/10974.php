<?
$subject_val = "Re: [OMPI users] memchecker overhead?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 26 16:37:01 2009" -->
<!-- isoreceived="20091026203701" -->
<!-- sent="Mon, 26 Oct 2009 16:36:32 -0400" -->
<!-- isosent="20091026203632" -->
<!-- name="Rainer Keller" -->
<!-- email="keller_at_[hidden]" -->
<!-- subject="Re: [OMPI users] memchecker overhead?" -->
<!-- id="200910261636.32416.keller_at_ornl.gov" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4758E3BB-2F0D-40BF-9793-065A454676DF_at_umich.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] memchecker overhead?<br>
<strong>From:</strong> Rainer Keller (<em>keller_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-26 16:36:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10975.php">Jed Brown: "Re: [OMPI users] memchecker overhead?"</a>
<li><strong>Previous message:</strong> <a href="10973.php">Jeff Squyres: "Re: [OMPI users] memchecker overhead?"</a>
<li><strong>In reply to:</strong> <a href="10966.php">Brock Palen: "[OMPI users] memchecker overhead?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Brock,
<br>
On Monday 26 October 2009 03:23:42 pm Brock Palen wrote:
<br>
<span class="quotelev1">&gt; Is there a large overhead for --enable-debug --enable-memchecker?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; reading:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=debugging">http://www.open-mpi.org/faq/?category=debugging</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It sounds like there is and there isn't, what should I expect if we
</span><br>
<span class="quotelev1">&gt; build all of our mpi libraries with those options, when we run normally:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun ./myexe
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; vs using a library that was not built with those options?
</span><br>
This may be too verbose an answer ,-)
<br>
<p>Now while --enable-debug adds quite a bit of overhead, due to various internal 
<br>
runtime checks being introduced into code-path (e.g. for every opal-object 
<br>
checks of a magic-id, whether this really is a proper object, checking the 
<br>
reference-counter and keeping the src-file and line-number of the 
<br>
constructor).
<br>
How &quot;bad&quot; --enable-debug is really depends on Your communication pattern and 
<br>
the setup, e.g. shared memory communication latency suffers most.
<br>
<p><p>To make usage of memchecker and the best of valgrind, You don't actually need 
<br>
--enable-debug, depending on Your setup:
<br>
&nbsp;- For user-apps debugging (checking, whether buffers given to MPI are 
<br>
initialized, whether data returned by MPI may be accessed, etc.) 
<br>
The user app of course should be compiled with debugging on (&quot;-g&quot;).
<br>
<p>&nbsp;- To get valgrind-output of OMPI-internal data-structures including source-
<br>
location of undefined memory of You'd want to compile OMPI with --enable-debug 
<br>
(or at least with -g and without optimization) and furthermore define 
<br>
OMPI_WANT_MEMCHECKER_MPI_OBJECTS in ompi/include/ompi/memchecker to check the 
<br>
initialization of OMPI's MPI_Comm/datatypes and others. This however is mostly 
<br>
for OMPI-developers..
<br>
<p><p>Per overhead:
<br>
- The latency of running an application with libmpi compiled with memchecker 
<br>
when _not_ running under valgrind (3-6% over IB-DDR using IMB), while 
<br>
bandwidth is hardly influenced.
<br>
- When doing the OMPI-internal MPI-object checking, it _does_ become very 
<br>
costly due to the many client-requests issued using valgrind's API (but as 
<br>
noted this is for OMPI-developers, anyway).
<br>
Please see <a href="http://www.open-mpi.org/papers/parco-2007/">http://www.open-mpi.org/papers/parco-2007/</a> for more information.
<br>
<p>With the NPB benchmark, we did not find any performance implications with the 
<br>
instrumentation added when not run under valgrind.
<br>
<p><p>Now when running the application under valgrind, the expected slow-down of the 
<br>
valgrind's memcheck come into effect...
<br>
<p><p>So, the most flexible way is to provide two versions and let users decide per 
<br>
modulefile with a verbose proc ModulesHelp...
<br>
<p><p>With best regards,
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
<li><strong>Next message:</strong> <a href="10975.php">Jed Brown: "Re: [OMPI users] memchecker overhead?"</a>
<li><strong>Previous message:</strong> <a href="10973.php">Jeff Squyres: "Re: [OMPI users] memchecker overhead?"</a>
<li><strong>In reply to:</strong> <a href="10966.php">Brock Palen: "[OMPI users] memchecker overhead?"</a>
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
