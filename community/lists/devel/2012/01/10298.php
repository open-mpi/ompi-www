<?
$subject_val = "Re: [OMPI devel] 1.4.5rc4 is out";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 31 16:54:11 2012" -->
<!-- isoreceived="20120131215411" -->
<!-- sent="Tue, 31 Jan 2012 13:53:52 -0800" -->
<!-- isosent="20120131215352" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.4.5rc4 is out" -->
<!-- id="4F2862F0.3010509_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="F9FCDCFA-FDFF-41D7-ABEE-B6D3C994374B_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.4.5rc4 is out<br>
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-31 16:53:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10299.php">Jeff Squyres: "Re: [OMPI devel] 1.4.5rc4 is out"</a>
<li><strong>Previous message:</strong> <a href="10297.php">Jeff Squyres: "Re: [OMPI devel] 1.4.5rc4 may still require GNU Make"</a>
<li><strong>In reply to:</strong> <a href="10296.php">Jeff Squyres: "Re: [OMPI devel] 1.4.5rc4 is out"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10299.php">Jeff Squyres: "Re: [OMPI devel] 1.4.5rc4 is out"</a>
<li><strong>Reply:</strong> <a href="10299.php">Jeff Squyres: "Re: [OMPI devel] 1.4.5rc4 is out"</a>
<li><strong>Reply:</strong> <a href="10300.php">Paul H. Hargrove: "[OMPI devel] ROMIO build broken in 1.5.5rc1 [SOLVED]"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 1/31/2012 1:42 PM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Jan 31, 2012, at 4:03 PM, Paul H. Hargrove wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Oops -- Brad was supposed to put that in README, too.
</span><br>
<span class="quotelev2">&gt;&gt; Nope, I looked:
</span><br>
<span class="quotelev2">&gt;&gt; $ grep -i -e romio -e bsd openmpi-1.4.5rc4/README
</span><br>
<span class="quotelev2">&gt;&gt;     - Updated ROMIO to the version from MPICH2 1.0.7
</span><br>
<span class="quotelev1">&gt; Doh.  :-\
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; OK, &quot;shutup&quot; order confirmed regarding OpenBSD/ROMIO for v1.4.
</span><br>
<span class="quotelev2">&gt;&gt; However, I am 95% certain 1.5.5rc1 had the same problem (I will recheck shortly).
</span><br>
<span class="quotelev1">&gt; Don't bother checking yet -- a) you're probably right, and b) a new 1.5 rc will be out when we're done here.  I've been fully occupied with the 1.4 work to pay attention to the v1.5 stuff.
</span><br>
<p><p>I already checked my logs from Dec and found the problem in 1.5.5rc1 is 
<br>
entirely different, and impacts all of the BSD's.
<br>
I can supply details if anybody want to work on this ahead of 1.5.5rc2, 
<br>
but the short report is:
<br>
gmake[3]: Entering directory 
<br>
`/home/phargrov/OMPI/openmpi-1.5.5rc1-openbsd5-amd64/BLD/ompi/mca/io/romio/romio'
<br>
Making all in include
<br>
make: don't know how to make w. Stop in 
<br>
/home/phargrov/OMPI/openmpi-1.5.5rc1-openbsd5-amd64/BLD/ompi/mca/io/romio/romio/include.
<br>
<p><p><span class="quotelev1">&gt;    Plus, I'm waiting for a new hwloc release before making a new 1.5rc.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Which hwloc branch is destined for ompi-1.5.5?
<br>
Once I known I can test the appropriate hwloc RC on all my platforms.
<br>
<p>-Paul
<br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
HPC Research Department                   Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10299.php">Jeff Squyres: "Re: [OMPI devel] 1.4.5rc4 is out"</a>
<li><strong>Previous message:</strong> <a href="10297.php">Jeff Squyres: "Re: [OMPI devel] 1.4.5rc4 may still require GNU Make"</a>
<li><strong>In reply to:</strong> <a href="10296.php">Jeff Squyres: "Re: [OMPI devel] 1.4.5rc4 is out"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10299.php">Jeff Squyres: "Re: [OMPI devel] 1.4.5rc4 is out"</a>
<li><strong>Reply:</strong> <a href="10299.php">Jeff Squyres: "Re: [OMPI devel] 1.4.5rc4 is out"</a>
<li><strong>Reply:</strong> <a href="10300.php">Paul H. Hargrove: "[OMPI devel] ROMIO build broken in 1.5.5rc1 [SOLVED]"</a>
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
