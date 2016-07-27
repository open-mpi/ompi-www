<?
$subject_val = "Re: [MTT devel] MTToGDS";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 10 04:21:02 2010" -->
<!-- isoreceived="20100210092102" -->
<!-- sent="Wed, 10 Feb 2010 12:18:50 +0300" -->
<!-- isosent="20100210091850" -->
<!-- name="Igor Ivanov" -->
<!-- email="igor.ivanov_at_[hidden]" -->
<!-- subject="Re: [MTT devel] MTToGDS" -->
<!-- id="4B7279FA.1040400_at_argus-cv.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="D828E470-C906-4A5B-8725-24FE02E641C5_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [MTT devel] MTToGDS<br>
<strong>From:</strong> Igor Ivanov (<em>igor.ivanov_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-10 04:18:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0469.php">Jeff Squyres: "Re: [MTT devel] MTToGDS"</a>
<li><strong>Previous message:</strong> <a href="0467.php">Igor Ivanov: "Re: [MTT devel] MTToGDS"</a>
<li><strong>In reply to:</strong> <a href="0465.php">Jeff Squyres: "Re: [MTT devel] MTToGDS"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0471.php">Jeff Squyres: "Re: [MTT devel] MTToGDS"</a>
<li><strong>Reply:</strong> <a href="0471.php">Jeff Squyres: "Re: [MTT devel] MTToGDS"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<head>
  <meta content="text/html;charset=ISO-8859-1" http-equiv="Content-Type">
</head>
<body bgcolor="#ffffff" text="#000000">
<font size="-1"><font face="Arial">I believe that it is just a warning
and you can use mtt w/o analyzer that allow get additional info from
output.<br>
<br>
Regards,<br>
Igor<br>
</font></font><br>
Jeff Squyres wrote:
<blockquote cite="mid:D828E470-C906-4A5B-8725-24FE02E641C5@cisco.com"
 type="cite">
  <pre wrap="">On Feb 9, 2010, at 5:34 PM, Jeff Squyres (jsquyres) wrote:

  </pre>
  <blockquote type="cite">
    <blockquote type="cite">
      <pre wrap="">6. Could you send detail info about the issue (ini-file, mtt.log with verbose info and command line), we will look on that.
      </pre>
    </blockquote>
    <pre wrap="">Let me reproduce and simplify; I was using a fairly complex ini file... 
    </pre>
  </blockquote>
  <pre wrap=""><!---->
Oh, I see what happened -- I ran MTT manually on the command line and stepped through each of the phases manually, just to watch what was happening in each phase.  Something like this

mtt --file foo.ini --verbose --mpi-get
mtt --file foo.ini --verbose --mpi-install
mtt --file foo.ini --verbose --test-get
mtt --file foo.ini --verbose --test-build
mtt --file foo.ini --verbose --test-run

If I run just a single mtt invocation, the submitting for mpi install and test build seems to work.  However, there seems to be some built-in assumption that analyze::performance must be called...?  I was just running the "trivial" suites and trying to submit that.  Here's the --verbose output (I added the "GDS" verbose lines):

..lots of tests passing output
   Test: cxx_ring, np=16, variant=8: Passed
   Test: cxx_ring, np=16, variant=9: Passed
   Test: cxx_ring, np=16, variant=10: Passed
   Test: cxx_ring, np=16, variant=11: Passed
   Test: cxx_ring, np=16, variant=12: Passed
   ### Test progress: 8 of 8 section test executables complete. Moving on.
  </pre>
  <blockquote type="cite">
    <blockquote type="cite">
      <pre wrap="">Reporter MTTGDS: cached for later submit
      </pre>
    </blockquote>
  </blockquote>
  <pre wrap=""><!---->*** Run test phase complete
*** Reporter finalizing
  </pre>
  <blockquote type="cite">
    <blockquote type="cite">
      <pre wrap="">Submitted MPI Install to GDS
Submitted Test Build to GDS
      </pre>
    </blockquote>
  </blockquote>
  <pre wrap=""><!---->*** WARNING: Could not load module MTT::Test::Analyze::Performance::: Can't
    locate MTT/Test/Analyze/Performance/.pm in @INC (@INC contains:
    /home/jsquyres/svn/mtt/lib
    /usr/lib64/perl5/5.8.5/x86_64-linux-thread-multi /usr/lib/perl5/5.8.5
    /usr/lib64/perl5/site_perl/5.8.5/x86_64-linux-thread-multi
    /usr/lib64/perl5/site_perl/5.8.4/x86_64-linux-thread-multi
    /usr/lib64/perl5/site_perl/5.8.3/x86_64-linux-thread-multi
    /usr/lib64/perl5/site_perl/5.8.2/x86_64-linux-thread-multi
    /usr/lib64/perl5/site_perl/5.8.1/x86_64-linux-thread-multi
    /usr/lib64/perl5/site_perl/5.8.0/x86_64-linux-thread-multi
    /usr/lib/perl5/site_perl/5.8.5 /usr/lib/perl5/site_perl/5.8.4
    /usr/lib/perl5/site_perl/5.8.3 /usr/lib/perl5/site_perl/5.8.2
    /usr/lib/perl5/site_perl/5.8.1 /usr/lib/perl5/site_perl/5.8.0
    /usr/lib/perl5/site_perl
    /usr/lib64/perl5/vendor_perl/5.8.5/x86_64-linux-thread-multi
    /usr/lib64/perl5/vendor_perl/5.8.4/x86_64-linux-thread-multi
    /usr/lib64/perl5/vendor_perl/5.8.3/x86_64-linux-thread-multi
    /usr/lib64/perl5/vendor_perl/5.8.2/x86_64-linux-thread-multi
    /usr/lib64/perl5/vendor_perl/5.8.1/x86_64-linux-thread-multi
    /usr/lib64/perl5/vendor_perl/5.8.0/x86_64-linux-thread-multi
    /usr/lib/perl5/vendor_perl/5.8.5 /usr/lib/perl5/vendor_perl/5.8.4
    /usr/lib/perl5/vendor_perl/5.8.3 /usr/lib/perl5/vendor_perl/5.8.2
    /usr/lib/perl5/vendor_perl/5.8.1 /usr/lib/perl5/vendor_perl/5.8.0
    /usr/lib/perl5/vendor_perl .) at (eval 1089) line 3.
..and oodles more errors just like this
  </pre>
  <blockquote type="cite">
    <blockquote type="cite">
      <pre wrap="">Submitted Test Run to GDS
      </pre>
    </blockquote>
  </blockquote>
  <pre wrap=""><!---->*** Reporter finalized

It looks like there is supposed to be some .pm file that I was supposed to have specified...?  I'm not quite sure why, though -- performance analyzers shouldn't be necessary for all tests.  We have oodles of correctness tests where performance isn't an issue, so that analysis is irrelevant.

One further question -- the initial email from Michael said that both libYAML and Syck are necessary.  Why both?  yaml.org says that Syck is the "old" interface and libYAML is preferred these days.

I'm testing bquery.pl -- unfortunately, I'm behind some proxies in the Cisco lab environment.  I'll see if I can add proxy support...

  </pre>
</blockquote>
<BR>
<BR>
__________ Information from ESET NOD32 Antivirus, version of virus signature database 4852 (20100209) __________<BR>
<BR>
The message was checked by ESET NOD32 Antivirus.<BR>
<BR>
<A HREF="http://www.esetnod32.ru">http://www.esetnod32.ru</A><BR>


</body>

<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0469.php">Jeff Squyres: "Re: [MTT devel] MTToGDS"</a>
<li><strong>Previous message:</strong> <a href="0467.php">Igor Ivanov: "Re: [MTT devel] MTToGDS"</a>
<li><strong>In reply to:</strong> <a href="0465.php">Jeff Squyres: "Re: [MTT devel] MTToGDS"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0471.php">Jeff Squyres: "Re: [MTT devel] MTToGDS"</a>
<li><strong>Reply:</strong> <a href="0471.php">Jeff Squyres: "Re: [MTT devel] MTToGDS"</a>
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
