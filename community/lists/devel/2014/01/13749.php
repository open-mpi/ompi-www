<?
$subject_val = "Re: [OMPI devel] Paul's testing summary";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jan 11 18:29:28 2014" -->
<!-- isoreceived="20140111232928" -->
<!-- sent="Sat, 11 Jan 2014 15:29:26 -0800" -->
<!-- isosent="20140111232926" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Paul's testing summary" -->
<!-- id="CAAvDA15sgzUEe6R=xEpw2E04CmtkPwJm=Jc6cdbe4QJdD1AmOw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAAvDA15yYXBX5QDzcez+TiR+jdaD2-Cj0PPEs=G7XO1Tedx7gQ_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2014-01-11 18:29:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13750.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc2r30148 - static link failure on NetBSD"</a>
<li><strong>Previous message:</strong> <a href="13748.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc1 install failure: NetBSD-6 amd64"</a>
<li><strong>In reply to:</strong> <a href="13739.php">Paul Hargrove: "[OMPI devel] Paul's testing summary"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13751.php">Paul Hargrove: "Re: [OMPI devel] Paul's testing summary"</a>
<li><strong>Reply:</strong> <a href="13751.php">Paul Hargrove: "Re: [OMPI devel] Paul's testing summary"</a>
<li><strong>Reply:</strong> <a href="13753.php">Ralph Castain: "Re: [OMPI devel] Paul's testing summary"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Updates:
<br>
<p>1. opal/util/path.c
<br>
RESOLVED
<br>
My testing on both trunk and v1.7 passed on all my platforms.
<br>
Marco's reports success (after applying the usual patches) with the trunk
<br>
on Cygwin.
<br>
<p>2. oshem_info reports oshmem:bindings:fort:yes unconditionally
<br>
NO CHANGE (that I am aware of)
<br>
<p>3. configure refuses btl:verbs on Solaris
<br>
ISOLATED
<br>
Jeff has traced this to some oshmem related configury.
<br>
I have determined that configuring the trunk with --disable-oshmem DOES NOT
<br>
work-around this issue.
<br>
New thread: <a href="http://www.open-mpi.org/community/lists/devel/2014/01/13744.php">http://www.open-mpi.org/community/lists/devel/2014/01/13744.php</a>
<br>
<p>4. oob:tcp not using loopback interface for single-node runs
<br>
NO CHANGE (that I am aware of)
<br>
<p>5. pgi-8 and pgi-9 fail building mpi_f08
<br>
WORK IN PROGRESS
<br>
Jeff has provided more comprehensive fortran configure probes, but they
<br>
didn't improve the situation.
<br>
The &quot;trunk is worse&quot; problem was not what I had thought - it turns out to
<br>
be triggered by --enable-debug.
<br>
<p>6. netbsd-amd64 &quot;make install&quot; failure
<br>
ISOLATED
<br>
This is some issue between libtool and g95 mistakenly deciding the platform
<br>
is a.out instead of elf.
<br>
I can work-around by disabling fotran bindings.
<br>
<p><p>-Paul
<br>
<p><p>On Fri, Jan 10, 2014 at 8:39 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; This is an attempt to summarize the status of the trunk and 1.7.4rc with
</span><br>
<span class="quotelev1">&gt; respect to my testing.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There are 6 issues that to the best of my knowledge have not yet been
</span><br>
<span class="quotelev1">&gt; conclusively closed.
</span><br>
<span class="quotelev1">&gt; There might still be others buried in my sea of test results.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. opal/util/path.c
</span><br>
<span class="quotelev1">&gt; See thread beginning with
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/01/13597.php">http://www.open-mpi.org/community/lists/devel/2014/01/13597.php</a>
</span><br>
<span class="quotelev1">&gt; Jeff and I have fixed this in trunk and Jeff  CMRed for 1.7.4.
</span><br>
<span class="quotelev1">&gt; CMR was committed to v1.7 (changeset 30256) and thus just made the v1.7
</span><br>
<span class="quotelev1">&gt; tarball tonight.
</span><br>
<span class="quotelev1">&gt; Closed for trunk.
</span><br>
<span class="quotelev1">&gt; Closure for v1.7 just depends on me to test.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. oshem_info reports oshmem:bindings:fort:yes unconditionally
</span><br>
<span class="quotelev1">&gt; See thread beginning with
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/01/13616.php">http://www.open-mpi.org/community/lists/devel/2014/01/13616.php</a>
</span><br>
<span class="quotelev1">&gt; and restarted in
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/01/13677.php">http://www.open-mpi.org/community/lists/devel/2014/01/13677.php</a>
</span><br>
<span class="quotelev1">&gt; Mike Dubman indicated he will fix this for trunk.
</span><br>
<span class="quotelev1">&gt; This does NOT apply to v1.7 (no oshmem).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 3. configure refuses btl:verbs on Solaris
</span><br>
<span class="quotelev1">&gt; See thread beginning with
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/01/13598.php">http://www.open-mpi.org/community/lists/devel/2014/01/13598.php</a>
</span><br>
<span class="quotelev1">&gt; Jeff has indicated he will look into this one on trunk.
</span><br>
<span class="quotelev1">&gt; This does NOT apply to v1.7.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 4. oob:tcp not using loopback interface for single-node runs
</span><br>
<span class="quotelev1">&gt; See thread beginning with
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/01/13655.php">http://www.open-mpi.org/community/lists/devel/2014/01/13655.php</a>
</span><br>
<span class="quotelev1">&gt; Ralph and I determined that the reported issue was due to the firewall on
</span><br>
<span class="quotelev1">&gt; my hosts blocking app-daemon connections.
</span><br>
<span class="quotelev1">&gt; Can work around via &quot;-mca oob_tcp_if_include lo&quot;
</span><br>
<span class="quotelev1">&gt; Ralph *may* see about a way to use loopback by default, but probably not
</span><br>
<span class="quotelev1">&gt; prior to 1.7.5
</span><br>
<span class="quotelev1">&gt; This issue is present both in trunk and v1.7
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 5. pgi-8 and pgi-9 fail building mpi_f08
</span><br>
<span class="quotelev1">&gt; See thread beginning with
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/01/13651.php">http://www.open-mpi.org/community/lists/devel/2014/01/13651.php</a>
</span><br>
<span class="quotelev1">&gt; Jeff is actively working to improve configure tests to disqualify these
</span><br>
<span class="quotelev1">&gt; compilers.
</span><br>
<span class="quotelev1">&gt; This issue as initially reported is present in v1.7
</span><br>
<span class="quotelev1">&gt; In trunk the same issue is present for pgi-9, but is worse (configure
</span><br>
<span class="quotelev1">&gt; &quot;Cannot continue&quot;) for pgi-8
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 6. netbsd-amd64 &quot;make install&quot; failure
</span><br>
<span class="quotelev1">&gt; See thread beginning with
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2013/12/13515.php">http://www.open-mpi.org/community/lists/devel/2013/12/13515.php</a>
</span><br>
<span class="quotelev1">&gt; The issue does NOT appear on netbsd-i386 (reason unknown)
</span><br>
<span class="quotelev1">&gt; My attempts to autogen with the netbsd-supplied libtool turned up another
</span><br>
<span class="quotelev1">&gt; (now resolved) issue, but didn't fix this one.
</span><br>
<span class="quotelev1">&gt; Nobody has even commented on this issue.
</span><br>
<span class="quotelev1">&gt; This issue is present both in trunk and v1.7
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As far as I am concerned only #1 *must* be resolved for 1.7.4, and I am
</span><br>
<span class="quotelev1">&gt; going to do my part ASAP.
</span><br>
<span class="quotelev1">&gt; Items #2 and #3 are trunk-only.
</span><br>
<span class="quotelev1">&gt; Resolving #4 would be nice, but has a simple work around and is an issue
</span><br>
<span class="quotelev1">&gt; only on a &quot;broken&quot; host.
</span><br>
<span class="quotelev1">&gt; Resolving #5 would be great, but IMHO documenting these compilers as
</span><br>
<span class="quotelev1">&gt; unsupported for mpi_f08 would be sufficient.
</span><br>
<span class="quotelev1">&gt; Resolving #6 seems unlikely given the level of interest so far.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13749/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13750.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc2r30148 - static link failure on NetBSD"</a>
<li><strong>Previous message:</strong> <a href="13748.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc1 install failure: NetBSD-6 amd64"</a>
<li><strong>In reply to:</strong> <a href="13739.php">Paul Hargrove: "[OMPI devel] Paul's testing summary"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13751.php">Paul Hargrove: "Re: [OMPI devel] Paul's testing summary"</a>
<li><strong>Reply:</strong> <a href="13751.php">Paul Hargrove: "Re: [OMPI devel] Paul's testing summary"</a>
<li><strong>Reply:</strong> <a href="13753.php">Ralph Castain: "Re: [OMPI devel] Paul's testing summary"</a>
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
