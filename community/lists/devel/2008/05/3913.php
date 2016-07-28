<?
$subject_val = "Re: [OMPI devel] v1.3 Feature Freeze in effect";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 14 09:50:28 2008" -->
<!-- isoreceived="20080514135028" -->
<!-- sent="Wed, 14 May 2008 08:50:12 -0500" -->
<!-- isosent="20080514135012" -->
<!-- name="Brad Benton" -->
<!-- email="bradford.benton_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] v1.3 Feature Freeze in effect" -->
<!-- id="44079e5f0805140650m38e9c996gca4366e1daf9ea1b_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="482AEB9C.8090008_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] v1.3 Feature Freeze in effect<br>
<strong>From:</strong> Brad Benton (<em>bradford.benton_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-14 09:50:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3914.php">Jeff Squyres: "[OMPI devel] openib btl code review"</a>
<li><strong>Previous message:</strong> <a href="3912.php">Terry Dontje: "Re: [OMPI devel] v1.3 Feature Freeze in effect"</a>
<li><strong>In reply to:</strong> <a href="3912.php">Terry Dontje: "Re: [OMPI devel] v1.3 Feature Freeze in effect"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes...bug fixes are definitely allowed.  We won't go to controlled commits
<br>
until after branching.
<br>
<p>--brad
<br>
<p><p>On Wed, May 14, 2008 at 8:39 AM, Terry Dontje &lt;Terry.Dontje_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I am right to assume that bug fixes are allowed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --td
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brad Benton wrote:
</span><br>
<span class="quotelev2">&gt; &gt; All:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; As of today (May 13, 2008), the trunk is under v1.3 feature freeze
</span><br>
<span class="quotelev2">&gt; &gt; until it is stabilized and branched (targeted for May 23, 2008).  Here
</span><br>
<span class="quotelev2">&gt; &gt; are the guidelines for activity in the trunk while we are under the
</span><br>
<span class="quotelev2">&gt; &gt; v1.3 feature freeze:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    1. New components can still be checked into the trunk, but do so
</span><br>
<span class="quotelev2">&gt; &gt;       with .ompi_ignore so that they can be filtered out at branch
</span><br>
<span class="quotelev2">&gt; &gt;       time. Also, for newly checked in components, enter a trac ticket
</span><br>
<span class="quotelev2">&gt; &gt;       as a reminder to clean up the .ompi_ignore, if necessary, after
</span><br>
<span class="quotelev2">&gt; &gt;       the branch
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    2. The following items have /special/ dispensation to come into the
</span><br>
<span class="quotelev2">&gt; &gt;       trunk late (cutoff date for them is May 20)
</span><br>
<span class="quotelev2">&gt; &gt;           * Final parts of 1.3 Thread Multiple Support
</span><br>
<span class="quotelev2">&gt; &gt;           * Send &amp; Receive changes for improved latency (#1250
</span><br>
<span class="quotelev2">&gt; &gt;             &lt;<a href="https://svn.open-mpi.org/trac/ompi/ticket/1250">https://svn.open-mpi.org/trac/ompi/ticket/1250</a>&gt;)
</span><br>
<span class="quotelev2">&gt; &gt;           * XML component for orte_output() and friends
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks,
</span><br>
<span class="quotelev2">&gt; &gt; --Brad
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Brad Benton
</span><br>
<span class="quotelev2">&gt; &gt; Open MPI v1.3 co-release manager
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-3913/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3914.php">Jeff Squyres: "[OMPI devel] openib btl code review"</a>
<li><strong>Previous message:</strong> <a href="3912.php">Terry Dontje: "Re: [OMPI devel] v1.3 Feature Freeze in effect"</a>
<li><strong>In reply to:</strong> <a href="3912.php">Terry Dontje: "Re: [OMPI devel] v1.3 Feature Freeze in effect"</a>
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
