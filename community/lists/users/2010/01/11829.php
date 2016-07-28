<?
$subject_val = "Re: [OMPI users] building the 1.4.1 rpm under RHEL 5";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 20 11:00:50 2010" -->
<!-- isoreceived="20100120160050" -->
<!-- sent="Wed, 20 Jan 2010 17:00:45 +0100" -->
<!-- isosent="20100120160045" -->
<!-- name="Matthias Jurenz" -->
<!-- email="matthias.jurenz_at_[hidden]" -->
<!-- subject="Re: [OMPI users] building the 1.4.1 rpm under RHEL 5" -->
<!-- id="201001201700.45769.matthias.jurenz_at_tu-dresden.de" -->
<!-- charset="utf-8" -->
<!-- inreplyto="[OMPI users] building the 1.4.1 rpm under RHEL 5" -->
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
<strong>Subject:</strong> Re: [OMPI users] building the 1.4.1 rpm under RHEL 5<br>
<strong>From:</strong> Matthias Jurenz (<em>matthias.jurenz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-20 11:00:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11830.php">Gus Correa: "Re: [OMPI users] segfault when combining OpenMPI and GotoBLAS2"</a>
<li><strong>Previous message:</strong> <a href="11828.php">Dave Love: "[OMPI users] building the 1.4.1 rpm under RHEL 5"</a>
<li><strong>Maybe in reply to:</strong> <a href="11828.php">Dave Love: "[OMPI users] building the 1.4.1 rpm under RHEL 5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11832.php">Dave Love: "Re: [OMPI users] building the 1.4.1 rpm under RHEL 5"</a>
<li><strong>Reply:</strong> <a href="11832.php">Dave Love: "Re: [OMPI users] building the 1.4.1 rpm under RHEL 5"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Dave,
<br>
<p>unfortunately, we have no such platform for trying to reproduce this error, 
<br>
but we would be pleased, if you could help us to identify the problem.
<br>
<p>We guess that the following will fix the problem:
<br>
<p>Could you please insert the line
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#undef fprintf
<br>
in the file ompi/contrib/vt/vt/vtlib/vt_iowrap.c at line 1241 (right before the 
<br>
function definition of fprintf) and try building again?
<br>
<p>Thanks for your help!
<br>
<p>Matthias
<br>
<p><span class="quotelev1">&gt; From: Dave Love &lt;d.love_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date: January 20, 2010 9:22:28 AM EST
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI users] building the 1.4.1 rpm under RHEL 5
</span><br>
<span class="quotelev1">&gt; Reply-To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Before I take time investigating, is anyone aware of problems/solutions
</span><br>
<span class="quotelev1">&gt; to building the rpm with gcc on current RedHat 5? Just an `rpmbuild
</span><br>
<span class="quotelev1">&gt; --rebuild' fails as follows, and I'm surprised if it's specific to here.
</span><br>
<span class="quotelev1">&gt; (I looked for a previous problem report, of course.)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   make[5]: Entering directory 
</span><br>
`/usr/src/redhat/BUILD/openmpi-1.4.1/ompi/contrib/vt/vt/vtlib'
<br>
<span class="quotelev1">&gt;   gcc -DHAVE_CONFIG_H -I. -I.. -I../tools/opari/lib -I../extlib/otf/otflib -
</span><br>
I../extlib/otf/otflib -D_GNU_SOURCE -DBINDIR=\&quot;/usr/bin\&quot; -
<br>
DDATADIR=\&quot;/usr/share\&quot; -DRFG -DVT_BFD -DVT_MEMHOOK -DVT_IOWRAP -O2 -g -pipe -
<br>
Wall -Wp,-D_FORTIFY_SOURCE=2 -fexceptions -fstack-protector --param=ssp-buffer-
<br>
size=4 -m64 -mtune=generic -MT vt_iowrap.o -MD -MP -MF .deps/vt_iowrap.Tpo -c 
<br>
-o vt_iowrap.o vt_iowrap.c
<br>
<span class="quotelev1">&gt;   vt_iowrap.c:1242: error: expected declaration specifiers or &#195;&#162;&#226;&#130;&#172;&#203;&#156;...&#195;&#162;&#226;&#130;&#172;&#226;&#132;&#162; 
</span><br>
before numeric constant
<br>
<span class="quotelev1">&gt;   vt_iowrap.c:1243: error: conflicting types for &#195;&#162;&#226;&#130;&#172;&#203;&#156;__fprintf_chk&#195;&#162;&#226;&#130;&#172;&#226;&#132;&#162; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11830.php">Gus Correa: "Re: [OMPI users] segfault when combining OpenMPI and GotoBLAS2"</a>
<li><strong>Previous message:</strong> <a href="11828.php">Dave Love: "[OMPI users] building the 1.4.1 rpm under RHEL 5"</a>
<li><strong>Maybe in reply to:</strong> <a href="11828.php">Dave Love: "[OMPI users] building the 1.4.1 rpm under RHEL 5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11832.php">Dave Love: "Re: [OMPI users] building the 1.4.1 rpm under RHEL 5"</a>
<li><strong>Reply:</strong> <a href="11832.php">Dave Love: "Re: [OMPI users] building the 1.4.1 rpm under RHEL 5"</a>
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
