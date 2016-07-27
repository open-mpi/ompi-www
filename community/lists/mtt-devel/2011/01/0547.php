<?
$subject_val = "Re: [MTT devel] mtt questions";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan  5 07:35:41 2011" -->
<!-- isoreceived="20110105123541" -->
<!-- sent="Wed, 5 Jan 2011 14:35:36 +0200" -->
<!-- isosent="20110105123536" -->
<!-- name="Mike Dubman" -->
<!-- email="mike.ompi_at_[hidden]" -->
<!-- subject="Re: [MTT devel] mtt questions" -->
<!-- id="AANLkTi=h_H5mUSKLd-+73=acfy7Fh7fTfvmRd0QUvuze_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="64F19745-BD36-4466-ADE3-016DE04E5A14_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [MTT devel] mtt questions<br>
<strong>From:</strong> Mike Dubman (<em>mike.ompi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-05 07:35:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0548.php">Joshua Hursey: "Re: [MTT devel] mtt questions"</a>
<li><strong>Previous message:</strong> <a href="0546.php">Joshua Hursey: "Re: [MTT devel] mtt questions"</a>
<li><strong>In reply to:</strong> <a href="0546.php">Joshua Hursey: "Re: [MTT devel] mtt questions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0548.php">Joshua Hursey: "Re: [MTT devel] mtt questions"</a>
<li><strong>Reply:</strong> <a href="0548.php">Joshua Hursey: "Re: [MTT devel] mtt questions"</a>
<li><strong>Reply:</strong> <a href="0549.php">Jeff Squyres: "Re: [MTT devel] mtt questions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for info!
<br>
Josh, can you please send me mtt.ini file you used with C/R tests as a
<br>
reference for using non-MPI application?
<br>
<p>Also, found following inside RunEngine.pm code:
<br>
<p># Set some thresholds for an early exit
<br>
my $break_threshold;
<br>
$break_threshold-&gt;{MTT::Values::PASS}      = Value($ini, $section,
<br>
&quot;break_threshold_pass&quot;);
<br>
$break_threshold-&gt;{MTT::Values::FAIL}      = Value($ini, $section,
<br>
&quot;break_threshold_fail&quot;);
<br>
$break_threshold-&gt;{MTT::Values::TIMED_OUT} = Value($ini, $section,
<br>
&quot;break_threshold_timeout&quot;);
<br>
$break_threshold-&gt;{MTT::Values::SKIPPED}   = Value($ini, $section,
<br>
&quot;break_threshold_skipped&quot;);
<br>
<p>but it seems like &quot;break rules&quot; are available per single test section
<br>
instead of whole mtt session.
<br>
Regards
<br>
Mike
<br>
<p><p>On Tue, Jan 4, 2011 at 3:42 PM, Joshua Hursey &lt;jjhursey_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 4, 2011, at 8:04 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Jan 4, 2011, at 7:06 AM, Mike Dubman wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Do you know if there is mtt option to stop mtt execution if job`s
</span><br>
<span class="quotelev1">&gt; failure ratio succeeds specified value, something like:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [mtt]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; stop_on_test_failures=1%
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I don't recall an option like that, offhand.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't think so either. This would be neat to have for those rare
</span><br>
<span class="quotelev1">&gt; scenarios when something fundamental in Open MPI breaks and we would prefer
</span><br>
<span class="quotelev1">&gt; to stop testing early instead of continuing to run tests even if they are
</span><br>
<span class="quotelev1">&gt; all going to fail.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Also, are there any ini files examples/successes of how to use mtt with
</span><br>
<span class="quotelev1">&gt; non-MPI based applications?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; No.  It *shouldn't* be hard, though -- just make the MPI Details exec
</span><br>
<span class="quotelev1">&gt; statement not use &quot;mpirun&quot;...?  (of course, our phase names are biased
</span><br>
<span class="quotelev1">&gt; towards &quot;MPI&quot;, but they could just as well be &quot;Middleware&quot;, for example)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I successfully did this when testing the C/R functionality in Open MPI, and
</span><br>
<span class="quotelev1">&gt; a couple other groups are looking at supporting non-MPI middleware as well.
</span><br>
<span class="quotelev1">&gt; The C/R tests are all wrapped up in their own perl script (to do
</span><br>
<span class="quotelev1">&gt; start/checkpoint/restart/...), so were essentially a non-MPI application. As
</span><br>
<span class="quotelev1">&gt; Jeff mentioned, it was just enough to change the MPI Details section to use
</span><br>
<span class="quotelev1">&gt; your own launcher (or you may be able to even go without a launcher if you
</span><br>
<span class="quotelev1">&gt; just want to run the tests directly). Then you will need to define new Test
</span><br>
<span class="quotelev1">&gt; Build/Run phases for the non-MPI test suite that you are using. And you
</span><br>
<span class="quotelev1">&gt; should be all set.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If for some reason that does not work, let us know since it is something
</span><br>
<span class="quotelev1">&gt; that needs to be fixed since the MTT client should be flexible enough to
</span><br>
<span class="quotelev1">&gt; support a wide manner of middleware.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- Josh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt; &gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; mtt-devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------------
</span><br>
<span class="quotelev1">&gt; Joshua Hursey
</span><br>
<span class="quotelev1">&gt; Postdoctoral Research Associate
</span><br>
<span class="quotelev1">&gt; Oak Ridge National Laboratory
</span><br>
<span class="quotelev1">&gt; <a href="http://users.nccs.gov/~jjhursey">http://users.nccs.gov/~jjhursey</a> &lt;<a href="http://users.nccs.gov/%7Ejjhursey">http://users.nccs.gov/%7Ejjhursey</a>&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-devel mailing list
</span><br>
<span class="quotelev1">&gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/mtt-devel/att-0547/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0548.php">Joshua Hursey: "Re: [MTT devel] mtt questions"</a>
<li><strong>Previous message:</strong> <a href="0546.php">Joshua Hursey: "Re: [MTT devel] mtt questions"</a>
<li><strong>In reply to:</strong> <a href="0546.php">Joshua Hursey: "Re: [MTT devel] mtt questions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0548.php">Joshua Hursey: "Re: [MTT devel] mtt questions"</a>
<li><strong>Reply:</strong> <a href="0548.php">Joshua Hursey: "Re: [MTT devel] mtt questions"</a>
<li><strong>Reply:</strong> <a href="0549.php">Jeff Squyres: "Re: [MTT devel] mtt questions"</a>
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
