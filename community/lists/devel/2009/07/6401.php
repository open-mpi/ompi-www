<?
$subject_val = "Re: [OMPI devel] [RFC] Move the datatype engine in the OPAL layer";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 14 13:23:05 2009" -->
<!-- isoreceived="20090714172305" -->
<!-- sent="Tue, 14 Jul 2009 13:23:27 -0400" -->
<!-- isosent="20090714172327" -->
<!-- name="Rainer Keller" -->
<!-- email="keller_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [RFC] Move the datatype engine in the OPAL layer" -->
<!-- id="200907141323.27568.keller_at_ornl.gov" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="6C6F450C-30E4-4AE1-90FC-A893C74C6E21_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [RFC] Move the datatype engine in the OPAL layer<br>
<strong>From:</strong> Rainer Keller (<em>keller_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-14 13:23:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6402.php">Josh Hursey: "Re: [OMPI devel] [RFC] Move the datatype engine in the OPAL layer"</a>
<li><strong>Previous message:</strong> <a href="6400.php">Jeff Squyres: "Re: [OMPI devel] [RFC] Move the datatype engine in the OPAL layer"</a>
<li><strong>In reply to:</strong> <a href="6400.php">Jeff Squyres: "Re: [OMPI devel] [RFC] Move the datatype engine in the OPAL layer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6402.php">Josh Hursey: "Re: [OMPI devel] [RFC] Move the datatype engine in the OPAL layer"</a>
<li><strong>Reply:</strong> <a href="6402.php">Josh Hursey: "Re: [OMPI devel] [RFC] Move the datatype engine in the OPAL layer"</a>
<li><strong>Reply:</strong> <a href="6411.php">Jeff Squyres: "Re: [OMPI devel] [RFC] Move the datatype engine in the OPAL layer"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
On Tuesday 14 July 2009 11:39:59 am Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; 1. My questions were not answered before the DDT split was merged to
</span><br>
<span class="quotelev1">&gt; the trunk.
</span><br>
OK, sorry about that.
<br>
Well, actually the answer to both questions are yes.
<br>
<p><span class="quotelev1">&gt; 2. The number of &quot;fixup&quot; commits and things that broke on the trunk
</span><br>
<span class="quotelev1">&gt; after the DDT split was merged seem to indicate a lack of testing.
</span><br>
<span class="quotelev1">&gt; What happened?
</span><br>
<p>Yeah, basically I didn't run through 
<br>
1. make distcheck, which when copying the sources to a sub-directory and 
<br>
compiling from there was
<br>
a.) missing the header file in ompi/datatype/ompi_datatype_internal.h in 
<br>
Makefile.am 
<br>
b.) make distcheck later correctly checked opal_datatype_test, however needed 
<br>
to know about opal_ddt_lib.c
<br>
<p>2.) didn't check with checkpoint restart (I'd need to setup blcr on this 
<br>
computer again) -- the code was accessing the ddt-structures directly.
<br>
<p>3.) Windows compiler needed DECLSPECs.
<br>
<p>As it turned out, several other header-file and configure changes unrelated to 
<br>
DDT needed to be brought over, which Shiqing did.
<br>
<p>So, in order to also help others before merging quite intrusive changes, I 
<br>
have started a howto in our wiki:
<br>
<p><a href="https://svn.open-mpi.org/trac/ompi/wiki/HowtoTesting">https://svn.open-mpi.org/trac/ompi/wiki/HowtoTesting</a>
<br>
<p>It would be nice, if you could ammend this over time... What do you think?
<br>
<p>Obviously I didn't do point 5 ,-(
<br>
<p>CU,
<br>
Rainer
<br>
<p><p><span class="quotelev1">&gt; (perhaps this was addressed on the teleconf today; I was not there --
</span><br>
<span class="quotelev1">&gt; if it was discussed, forgive the redundancy...)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 9, 2009, at 7:08 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Two comments:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Why : ...  Second
</span><br>
<span class="quotelev3">&gt; &gt;&gt; reason, is that now the data-type engine (without all the MPI
</span><br>
<span class="quotelev3">&gt; &gt;&gt; knowledge) is available to other projects.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; We're still only shipping Open MPI as a whole as our official
</span><br>
<span class="quotelev2">&gt; &gt; product, right?  More specifically: we're not intending to ship OPAL
</span><br>
<span class="quotelev2">&gt; &gt; independently, right?  If other projects want to pick up OPAL
</span><br>
<span class="quotelev2">&gt; &gt; themselves and use it (e.g., via SVN checkouts, Mercurial clones,
</span><br>
<span class="quotelev2">&gt; &gt; official OMPI tarballs, etc.), that's fine.  But I'd be opposed to
</span><br>
<span class="quotelev2">&gt; &gt; creating a 2nd official distribution that was OPAL-only.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Performance tests on the ompi-ddt branch have proven that there is no
</span><br>
<span class="quotelev3">&gt; &gt;&gt; performance penalties associated with this change (tests done using
</span><br>
<span class="quotelev3">&gt; &gt;&gt; NetPipe-3.7.1 on smoky using BTL/sm, giving 1.6usecs on this
</span><br>
<span class="quotelev3">&gt; &gt;&gt; platform).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 1.6us sounds like pretty high sm latency...  Is this a slow platform?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt; &gt; Cisco Systems
</span><br>
<p><pre>
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
<li><strong>Next message:</strong> <a href="6402.php">Josh Hursey: "Re: [OMPI devel] [RFC] Move the datatype engine in the OPAL layer"</a>
<li><strong>Previous message:</strong> <a href="6400.php">Jeff Squyres: "Re: [OMPI devel] [RFC] Move the datatype engine in the OPAL layer"</a>
<li><strong>In reply to:</strong> <a href="6400.php">Jeff Squyres: "Re: [OMPI devel] [RFC] Move the datatype engine in the OPAL layer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6402.php">Josh Hursey: "Re: [OMPI devel] [RFC] Move the datatype engine in the OPAL layer"</a>
<li><strong>Reply:</strong> <a href="6402.php">Josh Hursey: "Re: [OMPI devel] [RFC] Move the datatype engine in the OPAL layer"</a>
<li><strong>Reply:</strong> <a href="6411.php">Jeff Squyres: "Re: [OMPI devel] [RFC] Move the datatype engine in the OPAL layer"</a>
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
