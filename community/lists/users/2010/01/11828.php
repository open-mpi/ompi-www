<?
$subject_val = "[OMPI users] building the 1.4.1 rpm under RHEL 5";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 20 09:23:10 2010" -->
<!-- isoreceived="20100120142310" -->
<!-- sent="Wed, 20 Jan 2010 14:22:28 +0000" -->
<!-- isosent="20100120142228" -->
<!-- name="Dave Love" -->
<!-- email="d.love_at_[hidden]" -->
<!-- subject="[OMPI users] building the 1.4.1 rpm under RHEL 5" -->
<!-- id="877hrcetzv.fsf_at_liv.ac.uk" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI users] building the 1.4.1 rpm under RHEL 5<br>
<strong>From:</strong> Dave Love (<em>d.love_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-20 09:22:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11829.php">Matthias Jurenz: "Re: [OMPI users] building the 1.4.1 rpm under RHEL 5"</a>
<li><strong>Previous message:</strong> <a href="11827.php">Dorian Krause: "Re: [OMPI users] segfault when combining OpenMPI and GotoBLAS2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11829.php">Matthias Jurenz: "Re: [OMPI users] building the 1.4.1 rpm under RHEL 5"</a>
<li><strong>Maybe reply:</strong> <a href="11829.php">Matthias Jurenz: "Re: [OMPI users] building the 1.4.1 rpm under RHEL 5"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Before I take time investigating, is anyone aware of problems/solutions
<br>
to building the rpm with gcc on current RedHat 5?  Just an `rpmbuild
<br>
--rebuild' fails as follows, and I'm surprised if it's specific to here.
<br>
(I looked for a previous problem report, of course.)
<br>
<p>&nbsp;&nbsp;make[5]: Entering directory `/usr/src/redhat/BUILD/openmpi-1.4.1/ompi/contrib/vt/vt/vtlib'
<br>
&nbsp;&nbsp;gcc -DHAVE_CONFIG_H -I. -I.. -I../tools/opari/lib -I../extlib/otf/otflib -I../extlib/otf/otflib     -D_GNU_SOURCE -DBINDIR=\&quot;/usr/bin\&quot; -DDATADIR=\&quot;/usr/share\&quot; -DRFG -DVT_BFD -DVT_MEMHOOK -DVT_IOWRAP  -O2 -g -pipe -Wall -Wp,-D_FORTIFY_SOURCE=2 -fexceptions -fstack-protector --param=ssp-buffer-size=4 -m64 -mtune=generic -MT vt_iowrap.o -MD -MP -MF .deps/vt_iowrap.Tpo -c -o vt_iowrap.o vt_iowrap.c
<br>
&nbsp;&nbsp;vt_iowrap.c:1242: error: expected declaration specifiers or &#226;&#128;&#152;...&#226;&#128;&#153; before numeric constant
<br>
&nbsp;&nbsp;vt_iowrap.c:1243: error: conflicting types for &#226;&#128;&#152;__fprintf_chk&#226;&#128;&#153;
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11829.php">Matthias Jurenz: "Re: [OMPI users] building the 1.4.1 rpm under RHEL 5"</a>
<li><strong>Previous message:</strong> <a href="11827.php">Dorian Krause: "Re: [OMPI users] segfault when combining OpenMPI and GotoBLAS2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11829.php">Matthias Jurenz: "Re: [OMPI users] building the 1.4.1 rpm under RHEL 5"</a>
<li><strong>Maybe reply:</strong> <a href="11829.php">Matthias Jurenz: "Re: [OMPI users] building the 1.4.1 rpm under RHEL 5"</a>
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
