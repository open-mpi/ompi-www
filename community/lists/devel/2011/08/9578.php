<?
$subject_val = "Re: [OMPI devel] [TIPC BTL] test programmes";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug  2 03:58:24 2011" -->
<!-- isoreceived="20110802075824" -->
<!-- sent="Tue, 2 Aug 2011 09:57:34 +0200" -->
<!-- isosent="20110802075734" -->
<!-- name="Xin He" -->
<!-- email="xin.i.he_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [TIPC BTL] test programmes" -->
<!-- id="4E37ADEE.3070206_at_ericsson.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4E372298.1030609_at_oracle.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [TIPC BTL] test programmes<br>
<strong>From:</strong> Xin He (<em>xin.i.he_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-02 03:57:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9579.php">Josh Hursey: "Re: [OMPI devel] &quot;The MPI_Init() function was called before MPI_INIT was invoked.&quot;"</a>
<li><strong>Previous message:</strong> <a href="9577.php">Jeff Squyres: "Re: [OMPI devel] [TIPC BTL] test programmes"</a>
<li><strong>In reply to:</strong> <a href="9576.php">Eugene Loh: "Re: [OMPI devel] [TIPC BTL] test programmes"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
thank you all for replying me and giving me useful suggestions. I know 
<br>
where to start now. :-)
<br>
<p><p>/Xin
<br>
<p>On 08/02/2011 12:03 AM, Eugene Loh wrote:
<br>
<span class="quotelev1">&gt;    NAS Parallel Benchmarks are self-verifying.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Another option is the MPI Testing Tool
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/projects/mtt/">http://www.open-mpi.org/projects/mtt/</a> but it might be more trouble than
</span><br>
<span class="quotelev1">&gt; it's worth.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (INCIDENTALLY, THERE ARE TRAC TROUBLES WITH THE THREE LINKS AT THE
</span><br>
<span class="quotelev1">&gt; BOTTOM OF THAT PAGE!  COULD SOMEONE TAKE A LOOK?)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you do decide to explore MTT,
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/projects/mtt/svn.php">http://www.open-mpi.org/projects/mtt/svn.php</a> tells you how to do a
</span><br>
<span class="quotelev1">&gt; Subversion checkout.  It's a test harness.  For the tests themselves,
</span><br>
<span class="quotelev1">&gt; look in mtt/trunk/samples/*-template.ini for examples of what tests to
</span><br>
<span class="quotelev1">&gt; run.  Whether you want to pursue this route depends on whether you're
</span><br>
<span class="quotelev1">&gt; serious about doing lots of testing.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 08/01/11 17:13, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Additionally, you might want to download an run a bunch of common MPI benchmarks, such as:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - Netpipe
</span><br>
<span class="quotelev2">&gt;&gt; - Intel MPI Benchmarks (IMB)
</span><br>
<span class="quotelev2">&gt;&gt; - SKaMPI
</span><br>
<span class="quotelev2">&gt;&gt; - HPL (Linpack)
</span><br>
<span class="quotelev2">&gt;&gt; - ...etc.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Aug 1, 2011, at 8:12 AM, Chris Samuel wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Mon, 1 Aug 2011 09:47:00 PM Xin He wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Do any of you guys have any testing programs that I should
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; run to test if it really works?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; How about a real MPI program which has test data to check
</span><br>
<span class="quotelev3">&gt;&gt;&gt; it's running OK ?  Gromacs is open source and has a self-test
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mechanism run via &quot;make test&quot; IIRC.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I think HPL (Linpack) also checks the data from its run..
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9579.php">Josh Hursey: "Re: [OMPI devel] &quot;The MPI_Init() function was called before MPI_INIT was invoked.&quot;"</a>
<li><strong>Previous message:</strong> <a href="9577.php">Jeff Squyres: "Re: [OMPI devel] [TIPC BTL] test programmes"</a>
<li><strong>In reply to:</strong> <a href="9576.php">Eugene Loh: "Re: [OMPI devel] [TIPC BTL] test programmes"</a>
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
