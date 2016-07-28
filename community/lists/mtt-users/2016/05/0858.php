<?
$subject_val = "Re: [MTT users] test suites and np question";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 18 09:21:08 2016" -->
<!-- isoreceived="20160518132108" -->
<!-- sent="Wed, 18 May 2016 13:20:56 +0000" -->
<!-- isosent="20160518132056" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT users] test suites and np question" -->
<!-- id="68C1CA36-4569-49EB-AED8-F02EFB35AC82_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20160518201150.b04eb449e75702cedb18915e_at_jp.fujitsu.com" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-18 09:20:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0859.php">Kawashima, Takahiro: "Re: [MTT users] test suites and np question"</a>
<li><strong>Previous message:</strong> <a href="0857.php">Kawashima, Takahiro: "[MTT users] test suites and np question"</a>
<li><strong>In reply to:</strong> <a href="0857.php">Kawashima, Takahiro: "[MTT users] test suites and np question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0859.php">Kawashima, Takahiro: "Re: [MTT users] test suites and np question"</a>
<li><strong>Reply:</strong> <a href="0859.php">Kawashima, Takahiro: "Re: [MTT users] test suites and np question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 18, 2016, at 7:11 AM, Kawashima, Takahiro &lt;t-kawashima_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Fujitsu started to try MTT + ompi-tests on our machines.
</span><br>
<span class="quotelev1">&gt; With the sample .ini file, we wrote our .ini file and some
</span><br>
<span class="quotelev1">&gt; test suites are run.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have two questions.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (a) There are many test suites (directories) in ompi-tests.
</span><br>
<span class="quotelev1">&gt;    ibm, onesided, sun, ...
</span><br>
<span class="quotelev1">&gt;    Which test suites should I use to participate in
</span><br>
<span class="quotelev1">&gt;    OMPI MTT daily/weekly run?
</span><br>
<p>The general guidance is: run as many tests as you have resources for.  Meaning: we'll take any testing you can give.  :-)
<br>
<p>Have a look in ompi-tests:cisco/mtt/community/*.ini and cisco/mtt/usnic/*.ini.  Those are the ini files I use every night for Cisco usNIC-specific testing and community-wide testing. You can see the results of them in the MTT community reporter:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://mtt.open-mpi.org/">http://mtt.open-mpi.org/</a>
<br>
<p>I generally aim for about 20-24 hours of testing.  It's a little fuzzy, because Cisco's MTT will only fire for a given version (I'm currently testing the master, v1.10, and v2.x branches) if there were new commits that day (i.e., if there's a new nightly snapshot tarball since the last run).
<br>
<p>If you run too many tests such that your testing is more than 24 hours, then your resources quickly get behind and you're testing tarballs from days ago -- and that's not too useful.
<br>
<p><span class="quotelev1">&gt; (b) What is the recommended `np` value (number of processes)?
</span><br>
<span class="quotelev1">&gt;    Should I use the largest `np` I can run?
</span><br>
<p>Yes, subject to what I mentioned above: you want to aim for a total of ~24 hours of testing so that you can start the next cycle with the next night's snapshot tarball.
<br>
<p>You can pack this in however you want -- do lots of small-np-value tests and a few large-np-value tests (just to sanity test large np values, etc.), etc.
<br>
<p>You can also take into account that little development is done on the weekends.  For example, you might want to aim for ~24 hours of testing on Monday-Thursday evenings, and then aim for a 3-day run on Friday evening (because there might not be new tarballs generated over the weekend).
<br>
<p><span class="quotelev1">&gt;    Does it depend on test suites?
</span><br>
<p>Yes.  Some test suites have upper-bounds on the number of processes they can run.  IIRC, the Intel test suite, for example, can only run up to 64 processes (because of some hard-coded array sizes) unless you use a specific -D to compile it (that increases the size of these arrays).
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0859.php">Kawashima, Takahiro: "Re: [MTT users] test suites and np question"</a>
<li><strong>Previous message:</strong> <a href="0857.php">Kawashima, Takahiro: "[MTT users] test suites and np question"</a>
<li><strong>In reply to:</strong> <a href="0857.php">Kawashima, Takahiro: "[MTT users] test suites and np question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0859.php">Kawashima, Takahiro: "Re: [MTT users] test suites and np question"</a>
<li><strong>Reply:</strong> <a href="0859.php">Kawashima, Takahiro: "Re: [MTT users] test suites and np question"</a>
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
