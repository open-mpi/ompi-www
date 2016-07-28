<?
$subject_val = "Re: [OMPI devel] IOF repair";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 10 19:24:26 2008" -->
<!-- isoreceived="20080710232426" -->
<!-- sent="Thu, 10 Jul 2008 17:24:14 -0600" -->
<!-- isosent="20080710232414" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] IOF repair" -->
<!-- id="C49BF63E.5804%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="13158698-7C6E-48CC-8355-1BF09EDD5F89_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] IOF repair<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-10 19:24:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4310.php">Bogdan Costescu: "Re: [OMPI devel] IOF repair"</a>
<li><strong>Previous message:</strong> <a href="4308.php">Jeff Squyres: "Re: [OMPI devel] v1.3 RM: need a ruling"</a>
<li><strong>In reply to:</strong> <a href="4301.php">Jeff Squyres: "Re: [OMPI devel] IOF repair"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4310.php">Bogdan Costescu: "Re: [OMPI devel] IOF repair"</a>
<li><strong>Reply:</strong> <a href="4310.php">Bogdan Costescu: "Re: [OMPI devel] IOF repair"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Just an update. Jeff and I have completed and checked in a fix to this
<br>
problem (see the trunk, r18873). Please note that this fix has only been
<br>
lightly tested, and we don't know for certain that it hasn't opened another
<br>
hole somewhere else in the dyke.
<br>
<p>We would appreciate it if people could test this to the extent possible over
<br>
the next few days. Please let us know (good or bad) so we can decide whether
<br>
or not to move it to the 1.3 release branch.
<br>
<p>Thanks
<br>
Ralph
<br>
<p><p><p>On 7/10/08 9:29 AM, &quot;Jeff Squyres&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Ya, no worries -- we're working on a fix.  We're just debating exactly
</span><br>
<span class="quotelev1">&gt; *how* to fix it.  See <a href="https://svn.open-mpi.org/trac/ompi/ticket/1135">https://svn.open-mpi.org/trac/ompi/ticket/1135</a>
</span><br>
<span class="quotelev1">&gt; if you want to keep up with the conversation.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jul 10, 2008, at 11:20 AM, Bogdan Costescu wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Wed, 9 Jul 2008, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; stdin is read twice if rank=0 shares the node with mpirun
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I consider this to be a very serious regression. Many Fortran
</span><br>
<span class="quotelev2">&gt;&gt; scientific programs (at least many that I know) read their input
</span><br>
<span class="quotelev2">&gt;&gt; from stdin. This comes as a result of them being (or started to be)
</span><br>
<span class="quotelev2">&gt;&gt; written many years ago with Fortran77 for which AFAIK there is no
</span><br>
<span class="quotelev2">&gt;&gt; defined way of handling command line parameters, so reading from
</span><br>
<span class="quotelev2">&gt;&gt; stdin is a convenient and portable way to put some data into the
</span><br>
<span class="quotelev2">&gt;&gt; program as this is known to be open already and at a well known I/O
</span><br>
<span class="quotelev2">&gt;&gt; unit.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I just spent 2 days trying to understand why one such program
</span><br>
<span class="quotelev2">&gt;&gt; (CHARMM) which worked fine for many MPI implementations on many
</span><br>
<span class="quotelev2">&gt;&gt; platforms including the stable 1.2 series on this very cluster
</span><br>
<span class="quotelev2">&gt;&gt; suddenly stops in some step related to processing input. After
</span><br>
<span class="quotelev2">&gt;&gt; reading your message, everything makes sense...
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Alternatively, we could ship 1.3 as-is, and warn users (similar to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1.2) that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; they should avoiding reading from stdin if there is any chance that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rank=0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; could be co-located with mpirun. Note that most of our clusters do
</span><br>
<span class="quotelev3">&gt;&gt;&gt; not allow
</span><br>
<span class="quotelev3">&gt;&gt;&gt; such co-location - but it is permitted by default by OMPI.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I don't know what setup your clusters have, but most that I have
</span><br>
<span class="quotelev2">&gt;&gt; seen, including all those that I admin, do run mpirun/mpiexec and
</span><br>
<span class="quotelev2">&gt;&gt; rank=0 on the same node. I really think that this will bite a lot of
</span><br>
<span class="quotelev2">&gt;&gt; people.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Bogdan Costescu
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; IWR, University of Heidelberg, INF 368, D-69120 Heidelberg, Germany
</span><br>
<span class="quotelev2">&gt;&gt; Phone: +49 6221 54 8869/8240, Fax: +49 6221 54 8868/8850
</span><br>
<span class="quotelev2">&gt;&gt; E-mail: bogdan.costescu_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4310.php">Bogdan Costescu: "Re: [OMPI devel] IOF repair"</a>
<li><strong>Previous message:</strong> <a href="4308.php">Jeff Squyres: "Re: [OMPI devel] v1.3 RM: need a ruling"</a>
<li><strong>In reply to:</strong> <a href="4301.php">Jeff Squyres: "Re: [OMPI devel] IOF repair"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4310.php">Bogdan Costescu: "Re: [OMPI devel] IOF repair"</a>
<li><strong>Reply:</strong> <a href="4310.php">Bogdan Costescu: "Re: [OMPI devel] IOF repair"</a>
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
