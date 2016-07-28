<?
$subject_val = "Re: [OMPI users] Q: Fortran, MPI_VERSION and #defines";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 21 16:18:38 2016" -->
<!-- isoreceived="20160321201838" -->
<!-- sent="Mon, 21 Mar 2016 13:18:18 -0700" -->
<!-- isosent="20160321201818" -->
<!-- name="Jeff Hammond" -->
<!-- email="jeff.science_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Q: Fortran, MPI_VERSION and #defines" -->
<!-- id="CAGKz=uL6axZjv6H5+0aESCnbQa76FWCOG8irD_KGrYeG3UuiNQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAGKz=uLkTfu5U+qkLw41NSaJbe45pvbeqESmD8a462h_LD=cOw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Q: Fortran, MPI_VERSION and #defines<br>
<strong>From:</strong> Jeff Hammond (<em>jeff.science_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-21 16:18:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28780.php">Brian Dobbins: "Re: [OMPI users] Q: Fortran, MPI_VERSION and #defines"</a>
<li><strong>Previous message:</strong> <a href="28778.php">Jeff Hammond: "Re: [OMPI users] Q: Fortran, MPI_VERSION and #defines"</a>
<li><strong>In reply to:</strong> <a href="28778.php">Jeff Hammond: "Re: [OMPI users] Q: Fortran, MPI_VERSION and #defines"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28780.php">Brian Dobbins: "Re: [OMPI users] Q: Fortran, MPI_VERSION and #defines"</a>
<li><strong>Reply:</strong> <a href="28780.php">Brian Dobbins: "Re: [OMPI users] Q: Fortran, MPI_VERSION and #defines"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The better solution is just to require MPI-3.  It is available everywhere
<br>
except Blue Gene/Q at this point, and it is better to putting the burden of
<br>
ensuring MPI-3 is installed on the system to your users than doing horrible
<br>
gymnastics to support ancient MPI libraries.
<br>
<p>You can consult <a href="http://meetings.mpi-forum.org/mpi3-impl-status-Mar15.pdf">http://meetings.mpi-forum.org/mpi3-impl-status-Mar15.pdf</a> to
<br>
see the status of all implementations w.r.t. MPI-3 as of one year ago.
<br>
<p>Jeff
<br>
<p>On Mon, Mar 21, 2016 at 1:14 PM, Jeff Hammond &lt;jeff.science_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; Call MPI from C code, where you will have all the preprocessor support you
</span><br>
<span class="quotelev1">&gt; need.  Wrap that C code with Fortran 2003 ISO_C_BINDING.  If you don't have
</span><br>
<span class="quotelev1">&gt; neighborhood collectives from MPI-3, you can implement them using MPI-1
</span><br>
<span class="quotelev1">&gt; yourself in the interface between your Fortran code and MPI C bindings.
</span><br>
<span class="quotelev1">&gt; This will ensure you don't need Fortran preprocessing.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I end up doing this (except for the Fortran part) with MPI RMA code.  For
</span><br>
<span class="quotelev1">&gt; example, I have a wrapper for MPI_Win_allocate, which drops into
</span><br>
<span class="quotelev1">&gt; MPI_Alloc_mem+MPI_Win_create when only MPI-2 is available.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jeff
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, Mar 21, 2016 at 10:27 AM, Brian Dobbins &lt;bdobbins_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi everyone,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   This isn't really a problem, per se, but rather a search for a more
</span><br>
<span class="quotelev2">&gt;&gt; elegant solution.  It also isn't specific to OpenMPI, but I figure the
</span><br>
<span class="quotelev2">&gt;&gt; experience and knowledge of people here made it a suitable place to ask:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   I'm working on some code that'll be used and downloaded by others on
</span><br>
<span class="quotelev2">&gt;&gt; multiple systems, and this code is using some MPI3 features (neighborhood
</span><br>
<span class="quotelev2">&gt;&gt; collectives), but not everyone has the latest MPI libraries, many people
</span><br>
<span class="quotelev2">&gt;&gt; will be running the code on systems without these functions.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   If this were a C/C++ code, it'd be quite easy to deal with this as
</span><br>
<span class="quotelev2">&gt;&gt; 'mpi.h' has MPI_VERSION as a #define, so I can use a preprocessor check to
</span><br>
<span class="quotelev2">&gt;&gt; conditionally compile either the neighbor routines or the old
</span><br>
<span class="quotelev2">&gt;&gt; point-to-point routines.  However, Fortran obviously doesn't use #define
</span><br>
<span class="quotelev2">&gt;&gt; natively, and so the mpif.h (or MPI module) simply define MPI_VERSION as a
</span><br>
<span class="quotelev2">&gt;&gt; parameter - I can use it in the code, but not at the preprocessor level.
</span><br>
<span class="quotelev2">&gt;&gt; So, putting the MPI3 neighborhood collective in the code, even in a
</span><br>
<span class="quotelev2">&gt;&gt; non-executed codepath, results in an error when linking with an MPI2
</span><br>
<span class="quotelev2">&gt;&gt; library since the routine isn't found.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   Obviously I can just have the user supply the -DMPI_VERSION=3 flag (or
</span><br>
<span class="quotelev2">&gt;&gt; a different one, since this *is* a parameter name) *if they know* their
</span><br>
<span class="quotelev2">&gt;&gt; MPI is version 3, and I intend to submit a patch to Cmake's FindMPI command
</span><br>
<span class="quotelev2">&gt;&gt; to detect this automatically, but is there a *better* way to do this for
</span><br>
<span class="quotelev2">&gt;&gt; projects that aren't using Cmake?  Scientists don't typically know what
</span><br>
<span class="quotelev2">&gt;&gt; version of MPI they're running, so the more that can be detected and
</span><br>
<span class="quotelev2">&gt;&gt; handled automatically the better.  (Providing stub versions that link
</span><br>
<span class="quotelev2">&gt;&gt; *after* the main library (and thus don't get chosen, I think) also seems
</span><br>
<span class="quotelev2">&gt;&gt; less than elegant.)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   To make it slightly more broad - if new MPI versions outpace library
</span><br>
<span class="quotelev2">&gt;&gt; obsolescence on existing systems, what's the ideal way to write portable
</span><br>
<span class="quotelev2">&gt;&gt; Fortran code that uses the most recent features?  Is there a way to use or
</span><br>
<span class="quotelev2">&gt;&gt; change MPI_VERSION and MPI_SUBVERSION such that they can be used to
</span><br>
<span class="quotelev2">&gt;&gt; conditionally compile code in Fortran built by standard 'Make' processes?
</span><br>
<span class="quotelev2">&gt;&gt; Is 'recommending' that the mpif90/mpif77 commands provide them a terrible,
</span><br>
<span class="quotelev2">&gt;&gt; terrible idea?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Or any other suggestions?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;   - Brian
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/03/28777.php">http://www.open-mpi.org/community/lists/users/2016/03/28777.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Hammond
</span><br>
<span class="quotelev1">&gt; jeff.science_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://jeffhammond.github.io/">http://jeffhammond.github.io/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Jeff Hammond
jeff.science_at_[hidden]
<a href="http://jeffhammond.github.io/">http://jeffhammond.github.io/</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28779/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28780.php">Brian Dobbins: "Re: [OMPI users] Q: Fortran, MPI_VERSION and #defines"</a>
<li><strong>Previous message:</strong> <a href="28778.php">Jeff Hammond: "Re: [OMPI users] Q: Fortran, MPI_VERSION and #defines"</a>
<li><strong>In reply to:</strong> <a href="28778.php">Jeff Hammond: "Re: [OMPI users] Q: Fortran, MPI_VERSION and #defines"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28780.php">Brian Dobbins: "Re: [OMPI users] Q: Fortran, MPI_VERSION and #defines"</a>
<li><strong>Reply:</strong> <a href="28780.php">Brian Dobbins: "Re: [OMPI users] Q: Fortran, MPI_VERSION and #defines"</a>
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
