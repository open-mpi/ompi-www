<?
$subject_val = "Re: [OMPI devel] Paul's testing summary";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 17 01:30:53 2014" -->
<!-- isoreceived="20140117063053" -->
<!-- sent="Thu, 16 Jan 2014 22:30:49 -0800" -->
<!-- isosent="20140117063049" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Paul's testing summary" -->
<!-- id="CAAvDA151mXxmRHh0au7EZ2epXHcd_=-WcAYTmWVAxZFPXqREGg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAAvDA179borCGdY3sXayyODUwcbbc-UE=v-Di2ha5VUDcQMrnA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Paul's testing summary<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-17 01:30:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13783.php">Paul Hargrove: "[OMPI devel] Warnings from pgcc-13.10"</a>
<li><strong>Previous message:</strong> <a href="13781.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re:  bug in mca framework?"</a>
<li><strong>In reply to:</strong> <a href="13751.php">Paul Hargrove: "Re: [OMPI devel] Paul's testing summary"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13787.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Paul's testing summary"</a>
<li><strong>Reply:</strong> <a href="13787.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Paul's testing summary"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Current status of my seven issues as of tonight's trunk tarball
<br>
(1.9a1r30302)
<br>
<p>1. opal/util/path.c
<br>
CLOSED
<br>
<p>2. oshem_info reports oshmem:bindings:fort:yes unconditionally
<br>
CLOSED (except for harmless orphaned call to OSHMEM_SETUP_CFLAGS)
<br>
<p>3. configure refuses btl:verbs on Solaris
<br>
CLOSED
<br>
<p>4. oob:tcp not using loopback interface for single-node runs
<br>
NOT YET, but not critical
<br>
<p>5. pgi-8 and pgi-9 fail building mpi_f08
<br>
Looks like Jeff fixed the only real issue early on and we've been fighting
<br>
obscure PGI bugs every since.
<br>
I've sent Jeff a list of known-good and known-bad PGI versions for the
<br>
release notes.
<br>
PENDING - release notes needed
<br>
<p>6. netbsd-amd64 &quot;make install&quot; failure
<br>
Tracked to a bad libtool+g95 interaction, using gfortran works fine.
<br>
CLOSED - documented in a release notes
<br>
<p>7. netbsd6 static link failure (aio support resides in librt)
<br>
CLOSED - added configure probe logic
<br>
<p>-Paul
<br>
<p><p>On Sat, Jan 11, 2014 at 5:02 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; One addition:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 7. netbsd6 static link failure (aio support resides in librt)
</span><br>
<span class="quotelev1">&gt; FIX PROPOSED
</span><br>
<span class="quotelev1">&gt; See thread beginning with
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/01/13591.php">http://www.open-mpi.org/community/lists/devel/2014/01/13591.php</a>
</span><br>
<span class="quotelev1">&gt; I have just now proposed a patch that resolves the problem for me.
</span><br>
<span class="quotelev1">&gt; This issue impacts both trunk and v1.7.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sat, Jan 11, 2014 at 3:29 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Updates:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1. opal/util/path.c
</span><br>
<span class="quotelev2">&gt;&gt; RESOLVED
</span><br>
<span class="quotelev2">&gt;&gt; My testing on both trunk and v1.7 passed on all my platforms.
</span><br>
<span class="quotelev2">&gt;&gt; Marco's reports success (after applying the usual patches) with the trunk
</span><br>
<span class="quotelev2">&gt;&gt; on Cygwin.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2. oshem_info reports oshmem:bindings:fort:yes unconditionally
</span><br>
<span class="quotelev2">&gt;&gt; NO CHANGE (that I am aware of)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 3. configure refuses btl:verbs on Solaris
</span><br>
<span class="quotelev2">&gt;&gt; ISOLATED
</span><br>
<span class="quotelev2">&gt;&gt; Jeff has traced this to some oshmem related configury.
</span><br>
<span class="quotelev2">&gt;&gt; I have determined that configuring the trunk with --disable-oshmem DOES
</span><br>
<span class="quotelev2">&gt;&gt; NOT work-around this issue.
</span><br>
<span class="quotelev2">&gt;&gt; New thread:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/01/13744.php">http://www.open-mpi.org/community/lists/devel/2014/01/13744.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 4. oob:tcp not using loopback interface for single-node runs
</span><br>
<span class="quotelev2">&gt;&gt; NO CHANGE (that I am aware of)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 5. pgi-8 and pgi-9 fail building mpi_f08
</span><br>
<span class="quotelev2">&gt;&gt; WORK IN PROGRESS
</span><br>
<span class="quotelev2">&gt;&gt; Jeff has provided more comprehensive fortran configure probes, but they
</span><br>
<span class="quotelev2">&gt;&gt; didn't improve the situation.
</span><br>
<span class="quotelev2">&gt;&gt; The &quot;trunk is worse&quot; problem was not what I had thought - it turns out to
</span><br>
<span class="quotelev2">&gt;&gt; be triggered by --enable-debug.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 6. netbsd-amd64 &quot;make install&quot; failure
</span><br>
<span class="quotelev2">&gt;&gt; ISOLATED
</span><br>
<span class="quotelev2">&gt;&gt; This is some issue between libtool and g95 mistakenly deciding the
</span><br>
<span class="quotelev2">&gt;&gt; platform is a.out instead of elf.
</span><br>
<span class="quotelev2">&gt;&gt; I can work-around by disabling fotran bindings.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -Paul
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Fri, Jan 10, 2014 at 8:39 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt;wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This is an attempt to summarize the status of the trunk and 1.7.4rc with
</span><br>
<span class="quotelev3">&gt;&gt;&gt; respect to my testing.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; There are 6 issues that to the best of my knowledge have not yet been
</span><br>
<span class="quotelev3">&gt;&gt;&gt; conclusively closed.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; There might still be others buried in my sea of test results.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1. opal/util/path.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; See thread beginning with
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/01/13597.php">http://www.open-mpi.org/community/lists/devel/2014/01/13597.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff and I have fixed this in trunk and Jeff  CMRed for 1.7.4.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CMR was committed to v1.7 (changeset 30256) and thus just made the v1.7
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tarball tonight.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Closed for trunk.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Closure for v1.7 just depends on me to test.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2. oshem_info reports oshmem:bindings:fort:yes unconditionally
</span><br>
<span class="quotelev3">&gt;&gt;&gt; See thread beginning with
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/01/13616.php">http://www.open-mpi.org/community/lists/devel/2014/01/13616.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and restarted in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/01/13677.php">http://www.open-mpi.org/community/lists/devel/2014/01/13677.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Mike Dubman indicated he will fix this for trunk.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This does NOT apply to v1.7 (no oshmem).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 3. configure refuses btl:verbs on Solaris
</span><br>
<span class="quotelev3">&gt;&gt;&gt; See thread beginning with
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/01/13598.php">http://www.open-mpi.org/community/lists/devel/2014/01/13598.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff has indicated he will look into this one on trunk.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This does NOT apply to v1.7.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 4. oob:tcp not using loopback interface for single-node runs
</span><br>
<span class="quotelev3">&gt;&gt;&gt; See thread beginning with
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/01/13655.php">http://www.open-mpi.org/community/lists/devel/2014/01/13655.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph and I determined that the reported issue was due to the firewall
</span><br>
<span class="quotelev3">&gt;&gt;&gt; on my hosts blocking app-daemon connections.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Can work around via &quot;-mca oob_tcp_if_include lo&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph *may* see about a way to use loopback by default, but probably not
</span><br>
<span class="quotelev3">&gt;&gt;&gt; prior to 1.7.5
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This issue is present both in trunk and v1.7
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 5. pgi-8 and pgi-9 fail building mpi_f08
</span><br>
<span class="quotelev3">&gt;&gt;&gt; See thread beginning with
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/01/13651.php">http://www.open-mpi.org/community/lists/devel/2014/01/13651.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff is actively working to improve configure tests to disqualify these
</span><br>
<span class="quotelev3">&gt;&gt;&gt; compilers.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This issue as initially reported is present in v1.7
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In trunk the same issue is present for pgi-9, but is worse (configure
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;Cannot continue&quot;) for pgi-8
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 6. netbsd-amd64 &quot;make install&quot; failure
</span><br>
<span class="quotelev3">&gt;&gt;&gt; See thread beginning with
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2013/12/13515.php">http://www.open-mpi.org/community/lists/devel/2013/12/13515.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The issue does NOT appear on netbsd-i386 (reason unknown)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; My attempts to autogen with the netbsd-supplied libtool turned up
</span><br>
<span class="quotelev3">&gt;&gt;&gt; another (now resolved) issue, but didn't fix this one.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Nobody has even commented on this issue.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This issue is present both in trunk and v1.7
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; As far as I am concerned only #1 *must* be resolved for 1.7.4, and I am
</span><br>
<span class="quotelev3">&gt;&gt;&gt; going to do my part ASAP.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Items #2 and #3 are trunk-only.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Resolving #4 would be nice, but has a simple work around and is an issue
</span><br>
<span class="quotelev3">&gt;&gt;&gt; only on a &quot;broken&quot; host.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Resolving #5 would be great, but IMHO documenting these compilers as
</span><br>
<span class="quotelev3">&gt;&gt;&gt; unsupported for mpi_f08 would be sufficient.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Resolving #6 seems unlikely given the level of interest so far.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -Paul
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Future Technologies Group
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Future Technologies Group
</span><br>
<span class="quotelev2">&gt;&gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev2">&gt;&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
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
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Future Technologies Group
</span><br>
<span class="quotelev1">&gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13782/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13783.php">Paul Hargrove: "[OMPI devel] Warnings from pgcc-13.10"</a>
<li><strong>Previous message:</strong> <a href="13781.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re:  bug in mca framework?"</a>
<li><strong>In reply to:</strong> <a href="13751.php">Paul Hargrove: "Re: [OMPI devel] Paul's testing summary"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13787.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Paul's testing summary"</a>
<li><strong>Reply:</strong> <a href="13787.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Paul's testing summary"</a>
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
