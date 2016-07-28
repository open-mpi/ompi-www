<?
$subject_val = "Re: [MTT users] test suites and np question";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 18 09:50:13 2016" -->
<!-- isoreceived="20160518135013" -->
<!-- sent="Wed, 18 May 2016 13:50:05 +0000" -->
<!-- isosent="20160518135005" -->
<!-- name="Kawashima, Takahiro" -->
<!-- email="t-kawashima_at_[hidden]" -->
<!-- subject="Re: [MTT users] test suites and np question" -->
<!-- id="20160518225004.b26fe72fb8b9375cc63e4852_at_jp.fujitsu.com" -->
<!-- charset="iso-2022-jp" -->
<!-- inreplyto="68C1CA36-4569-49EB-AED8-F02EFB35AC82_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [MTT users] test suites and np question<br>
<strong>From:</strong> Kawashima, Takahiro (<em>t-kawashima_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-18 09:50:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0860.php">Jeff Squyres (jsquyres): "Re: [MTT users] test suites and np question"</a>
<li><strong>Previous message:</strong> <a href="0858.php">Jeff Squyres (jsquyres): "Re: [MTT users] test suites and np question"</a>
<li><strong>In reply to:</strong> <a href="0858.php">Jeff Squyres (jsquyres): "Re: [MTT users] test suites and np question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0860.php">Jeff Squyres (jsquyres): "Re: [MTT users] test suites and np question"</a>
<li><strong>Reply:</strong> <a href="0860.php">Jeff Squyres (jsquyres): "Re: [MTT users] test suites and np question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff,
<br>
<p>Thank you. It's very useful information.
<br>
I'll plan our run based on your information.
<br>
<p>Once we (Fujitsu) come to be able to run the test suites regularly,
<br>
we'll prepare to upload the reports to the server and push our test suites.
<br>
<p>Thanks,
<br>
Takahiro Kawashima,
<br>
MPI development team,
<br>
Fujitsu
<br>
<p><span class="quotelev2">&gt; &gt; Fujitsu started to try MTT + ompi-tests on our machines.
</span><br>
<span class="quotelev2">&gt; &gt; With the sample .ini file, we wrote our .ini file and some
</span><br>
<span class="quotelev2">&gt; &gt; test suites are run.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I have two questions.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; (a) There are many test suites (directories) in ompi-tests.
</span><br>
<span class="quotelev2">&gt; &gt;    ibm, onesided, sun, ...
</span><br>
<span class="quotelev2">&gt; &gt;    Which test suites should I use to participate in
</span><br>
<span class="quotelev2">&gt; &gt;    OMPI MTT daily/weekly run?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The general guidance is: run as many tests as you have resources for.  Meaning: we'll take any testing you can give.  :-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Have a look in ompi-tests:cisco/mtt/community/*.ini and cisco/mtt/usnic/*.ini.  Those are the ini files I use every night for Cisco usNIC-specific testing and community-wide testing. You can see the results of them in the MTT community reporter:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     <a href="http://mtt.open-mpi.org/">http://mtt.open-mpi.org/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I generally aim for about 20-24 hours of testing.  It's a little fuzzy, because Cisco's MTT will only fire for a given version (I'm currently testing the master, v1.10, and v2.x branches) if there were new commits that day (i.e., if there's a new nightly snapshot tarball since the last run).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If you run too many tests such that your testing is more than 24 hours, then your resources quickly get behind and you're testing tarballs from days ago -- and that's not too useful.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; (b) What is the recommended `np` value (number of processes)?
</span><br>
<span class="quotelev2">&gt; &gt;    Should I use the largest `np` I can run?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes, subject to what I mentioned above: you want to aim for a total of ~24 hours of testing so that you can start the next cycle with the next night's snapshot tarball.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You can pack this in however you want -- do lots of small-np-value tests and a few large-np-value tests (just to sanity test large np values, etc.), etc.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You can also take into account that little development is done on the weekends.  For example, you might want to aim for ~24 hours of testing on Monday-Thursday evenings, and then aim for a 3-day run on Friday evening (because there might not be new tarballs generated over the weekend).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;    Does it depend on test suites?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes.  Some test suites have upper-bounds on the number of processes they can run.  IIRC, the Intel test suite, for example, can only run up to 64 processes (because of some hard-coded array sizes) unless you use a specific -D to compile it (that increases the size of these arrays).
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0860.php">Jeff Squyres (jsquyres): "Re: [MTT users] test suites and np question"</a>
<li><strong>Previous message:</strong> <a href="0858.php">Jeff Squyres (jsquyres): "Re: [MTT users] test suites and np question"</a>
<li><strong>In reply to:</strong> <a href="0858.php">Jeff Squyres (jsquyres): "Re: [MTT users] test suites and np question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0860.php">Jeff Squyres (jsquyres): "Re: [MTT users] test suites and np question"</a>
<li><strong>Reply:</strong> <a href="0860.php">Jeff Squyres (jsquyres): "Re: [MTT users] test suites and np question"</a>
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
