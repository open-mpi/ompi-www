<?
$subject_val = "Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 27 20:35:14 2014" -->
<!-- isoreceived="20140328003514" -->
<!-- sent="Thu, 27 Mar 2014 17:35:13 -0700" -->
<!-- isosent="20140328003513" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)" -->
<!-- id="CAMD57odELDWBXoSdAH07RcVTHjPAoS8-U+ramHLtmOMYc3SkLQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="5334B123.3050402_at_ldeo.columbia.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-27 20:35:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24014.php">Sasso, John (GE Power & Water, Non-GE): "Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)"</a>
<li><strong>Previous message:</strong> <a href="24012.php">Reuti: "Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)"</a>
<li><strong>In reply to:</strong> <a href="24010.php">Gus Correa: "Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes, that is correct
<br>
Ralph
<br>
<p><p><p>On Thu, Mar 27, 2014 at 4:15 PM, Gus Correa &lt;gus_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On 03/27/2014 05:58 PM, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Mar 27, 2014, at 4:06 PM, &quot;Sasso, John (GE Power &amp; Water, Non-GE)&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &lt;John1.Sasso_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Yes, I noticed that I could not find --display-map in any of the man
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pages.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Intentional?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Oops; nope.  I'll ask Ralph to add it...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; Nah ...
</span><br>
<span class="quotelev1">&gt; John: As far as I can tell,
</span><br>
<span class="quotelev1">&gt; good features are intentional in OMPI.
</span><br>
<span class="quotelev1">&gt; The bad ones seem to be just minor lapses.
</span><br>
<span class="quotelev1">&gt; And minor lapses are benign.
</span><br>
<span class="quotelev1">&gt; They help keep us alert. :)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So, in the spirit of pitching in two-cent contributions
</span><br>
<span class="quotelev1">&gt; to build an even more perfect OMPI documentation than we already have:
</span><br>
<span class="quotelev1">&gt; man pages, README file, FAQ, and this rocking mailing list rhythm,
</span><br>
<span class="quotelev1">&gt; (Who can ask for anything more?),
</span><br>
<span class="quotelev1">&gt; I think I found what seems to be the corresponding mca parameter:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; rmaps_base_display_map
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; which defaults to 0, but should be set to 1
</span><br>
<span class="quotelev1">&gt; to produce the same effect of
</span><br>
<span class="quotelev1">&gt; mpiexec --display-map.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Right?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; Gus Correa
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24013/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24014.php">Sasso, John (GE Power & Water, Non-GE): "Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)"</a>
<li><strong>Previous message:</strong> <a href="24012.php">Reuti: "Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)"</a>
<li><strong>In reply to:</strong> <a href="24010.php">Gus Correa: "Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)"</a>
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
