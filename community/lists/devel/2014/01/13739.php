<?
$subject_val = "[OMPI devel] Paul's testing summary";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 10 23:39:14 2014" -->
<!-- isoreceived="20140111043914" -->
<!-- sent="Fri, 10 Jan 2014 20:39:12 -0800" -->
<!-- isosent="20140111043912" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] Paul's testing summary" -->
<!-- id="CAAvDA15yYXBX5QDzcez+TiR+jdaD2-Cj0PPEs=G7XO1Tedx7gQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] Paul's testing summary<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-10 23:39:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13740.php">Paul Hargrove: "Re: [OMPI devel] trunk build failure on {Free,Net,Open}BSD"</a>
<li><strong>Previous message:</strong> <a href="13738.php">Paul Hargrove: "Re: [OMPI devel] trunk build failure on {Free,Net,Open}BSD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13749.php">Paul Hargrove: "Re: [OMPI devel] Paul's testing summary"</a>
<li><strong>Reply:</strong> <a href="13749.php">Paul Hargrove: "Re: [OMPI devel] Paul's testing summary"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This is an attempt to summarize the status of the trunk and 1.7.4rc with
<br>
respect to my testing.
<br>
<p>There are 6 issues that to the best of my knowledge have not yet been
<br>
conclusively closed.
<br>
There might still be others buried in my sea of test results.
<br>
<p>1. opal/util/path.c
<br>
See thread beginning with
<br>
<a href="http://www.open-mpi.org/community/lists/devel/2014/01/13597.php">http://www.open-mpi.org/community/lists/devel/2014/01/13597.php</a>
<br>
Jeff and I have fixed this in trunk and Jeff  CMRed for 1.7.4.
<br>
CMR was committed to v1.7 (changeset 30256) and thus just made the v1.7
<br>
tarball tonight.
<br>
Closed for trunk.
<br>
Closure for v1.7 just depends on me to test.
<br>
<p>2. oshem_info reports oshmem:bindings:fort:yes unconditionally
<br>
See thread beginning with
<br>
<a href="http://www.open-mpi.org/community/lists/devel/2014/01/13616.php">http://www.open-mpi.org/community/lists/devel/2014/01/13616.php</a>
<br>
and restarted in
<br>
<a href="http://www.open-mpi.org/community/lists/devel/2014/01/13677.php">http://www.open-mpi.org/community/lists/devel/2014/01/13677.php</a>
<br>
Mike Dubman indicated he will fix this for trunk.
<br>
This does NOT apply to v1.7 (no oshmem).
<br>
<p>3. configure refuses btl:verbs on Solaris
<br>
See thread beginning with
<br>
<a href="http://www.open-mpi.org/community/lists/devel/2014/01/13598.php">http://www.open-mpi.org/community/lists/devel/2014/01/13598.php</a>
<br>
Jeff has indicated he will look into this one on trunk.
<br>
This does NOT apply to v1.7.
<br>
<p>4. oob:tcp not using loopback interface for single-node runs
<br>
See thread beginning with
<br>
<a href="http://www.open-mpi.org/community/lists/devel/2014/01/13655.php">http://www.open-mpi.org/community/lists/devel/2014/01/13655.php</a>
<br>
Ralph and I determined that the reported issue was due to the firewall on
<br>
my hosts blocking app-daemon connections.
<br>
Can work around via &quot;-mca oob_tcp_if_include lo&quot;
<br>
Ralph *may* see about a way to use loopback by default, but probably not
<br>
prior to 1.7.5
<br>
This issue is present both in trunk and v1.7
<br>
<p>5. pgi-8 and pgi-9 fail building mpi_f08
<br>
See thread beginning with
<br>
<a href="http://www.open-mpi.org/community/lists/devel/2014/01/13651.php">http://www.open-mpi.org/community/lists/devel/2014/01/13651.php</a>
<br>
Jeff is actively working to improve configure tests to disqualify these
<br>
compilers.
<br>
This issue as initially reported is present in v1.7
<br>
In trunk the same issue is present for pgi-9, but is worse (configure
<br>
&quot;Cannot continue&quot;) for pgi-8
<br>
<p>6. netbsd-amd64 &quot;make install&quot; failure
<br>
See thread beginning with
<br>
<a href="http://www.open-mpi.org/community/lists/devel/2013/12/13515.php">http://www.open-mpi.org/community/lists/devel/2013/12/13515.php</a>
<br>
The issue does NOT appear on netbsd-i386 (reason unknown)
<br>
My attempts to autogen with the netbsd-supplied libtool turned up another
<br>
(now resolved) issue, but didn't fix this one.
<br>
Nobody has even commented on this issue.
<br>
This issue is present both in trunk and v1.7
<br>
<p>As far as I am concerned only #1 *must* be resolved for 1.7.4, and I am
<br>
going to do my part ASAP.
<br>
Items #2 and #3 are trunk-only.
<br>
Resolving #4 would be nice, but has a simple work around and is an issue
<br>
only on a &quot;broken&quot; host.
<br>
Resolving #5 would be great, but IMHO documenting these compilers as
<br>
unsupported for mpi_f08 would be sufficient.
<br>
Resolving #6 seems unlikely given the level of interest so far.
<br>
<p><p>-Paul
<br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13739/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13740.php">Paul Hargrove: "Re: [OMPI devel] trunk build failure on {Free,Net,Open}BSD"</a>
<li><strong>Previous message:</strong> <a href="13738.php">Paul Hargrove: "Re: [OMPI devel] trunk build failure on {Free,Net,Open}BSD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13749.php">Paul Hargrove: "Re: [OMPI devel] Paul's testing summary"</a>
<li><strong>Reply:</strong> <a href="13749.php">Paul Hargrove: "Re: [OMPI devel] Paul's testing summary"</a>
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
