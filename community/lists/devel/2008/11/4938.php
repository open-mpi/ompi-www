<?
$subject_val = "Re: [OMPI devel] RFC: merge windows branch into trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 20 18:57:23 2008" -->
<!-- isoreceived="20081120235723" -->
<!-- sent="Fri, 21 Nov 2008 00:56:34 +0100" -->
<!-- isosent="20081120235634" -->
<!-- name="Rainer Keller" -->
<!-- email="keller_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: merge windows branch into trunk" -->
<!-- id="200811210056.34603.keller_at_hlrs.de" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="19349509-3235-431B-BE75-9C9CA936E45E_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: merge windows branch into trunk<br>
<strong>From:</strong> Rainer Keller (<em>keller_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-20 18:56:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4939.php">Ralph Castain: "Re: [OMPI devel] RFC: merge windows branch into trunk"</a>
<li><strong>Previous message:</strong> <a href="4937.php">Ethan Mallove: "Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script for	post-configure"</a>
<li><strong>In reply to:</strong> <a href="4929.php">Ralph Castain: "Re: [OMPI devel] RFC: merge windows branch into trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4939.php">Ralph Castain: "Re: [OMPI devel] RFC: merge windows branch into trunk"</a>
<li><strong>Reply:</strong> <a href="4939.php">Ralph Castain: "Re: [OMPI devel] RFC: merge windows branch into trunk"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph,
<br>
On Donnerstag, 20. November 2008, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; 1. since nearly everyone is at SC08, and since next week is a holiday,
</span><br>
<span class="quotelev1">&gt; the timing of this merge is poor. I would really urge that you delay
</span><br>
<span class="quotelev1">&gt; it until at least Dec 5 so people actually know about it - and have
</span><br>
<span class="quotelev1">&gt; time to even think about it
</span><br>
Yes, the idea is having more people take a look into it and try out.
<br>
<p><span class="quotelev1">&gt; 2. how does this fit into our overall release schedule? There was talk
</span><br>
<span class="quotelev1">&gt; at one time (when we thought 1.3 was going out soon) about having a
</span><br>
<span class="quotelev1">&gt; short release cycle to get Windows support out for 1.4. Now this is
</span><br>
<span class="quotelev1">&gt; coming into the trunk even before 1.3 goes out.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So is 1.3 going to have a lifecycle of a month? Or are we going to
</span><br>
<span class="quotelev1">&gt; delay 1.3 (if it even needs to be delayed) so it can include this code?
</span><br>
No, why ,-]?
<br>
At the appropriate time this can be merged into 1.3.x  (with x being &gt; 1...?)
<br>
<p><span class="quotelev1">&gt; Reason I ask: last time we rolled Windows support into the system it
</span><br>
<span class="quotelev1">&gt; created a complete code fork, making support for the current stable
</span><br>
<span class="quotelev1">&gt; release nearly impossible. There generated a lot of unhappiness and
</span><br>
<span class="quotelev1">&gt; argument within the community until we finally released a new version.
</span><br>
Well, we believe with only the view touched general files and only the CCP 
<br>
components being added, there's less chance of hurting other code.
<br>
<p><span class="quotelev3">&gt; &gt;&gt; M ompi/runtime/ompi_mpi_init.c
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ...
</span><br>
<span class="quotelev3">&gt; &gt;&gt; M orte/tools/orterun/orterun.c
</span><br>
<span class="quotelev3">&gt; &gt;&gt; M orte/util/hnp_contact.c
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I would ask that you consider breaking these
</span><br>
<span class="quotelev2">&gt; &gt; modifications into parts that &quot;could&quot; be harmlessly
</span><br>
<span class="quotelev2">&gt; &gt; brought over independently to 1.3, if a subsequent
</span><br>
<span class="quotelev2">&gt; &gt; non-windows bugfix to one of those files needs to
</span><br>
<span class="quotelev2">&gt; &gt; be brought over that will only merge cleanly if some
</span><br>
<span class="quotelev2">&gt; &gt; of your changes to the same file are also brought over.
</span><br>
<span class="quotelev2">&gt; &gt; For example, it would be a real pain to have to use
</span><br>
<span class="quotelev2">&gt; &gt; patchfiles to resolve merge conflicts simply because
</span><br>
<span class="quotelev2">&gt; &gt; of an #ifdef or white-space change here or there.
</span><br>
<span class="quotelev2">&gt; &gt; Hopefully that made sense...
</span><br>
Yes, breaking into chunks (such as the CMakeLists.txt + .windows files, the 
<br>
CCP component and finally the files that touch other files) is a good way 
<br>
forward.
<br>
<p>CU,
<br>
Rainer
<br>
<pre>
-- 
----------------------------------------------------------------
Dipl.-Inf. Rainer Keller   <a href="http://www.hlrs.de/people/keller">http://www.hlrs.de/people/keller</a>
 HLRS                          Tel: ++49 (0)711-685 6 5858
 Nobelstrasse 19                  Fax: ++49 (0)711-685 6 5832
 70550 Stuttgart                    email: keller_at_[hidden]     
 Germany                             AIM/Skype:rusraink
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4939.php">Ralph Castain: "Re: [OMPI devel] RFC: merge windows branch into trunk"</a>
<li><strong>Previous message:</strong> <a href="4937.php">Ethan Mallove: "Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script for	post-configure"</a>
<li><strong>In reply to:</strong> <a href="4929.php">Ralph Castain: "Re: [OMPI devel] RFC: merge windows branch into trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4939.php">Ralph Castain: "Re: [OMPI devel] RFC: merge windows branch into trunk"</a>
<li><strong>Reply:</strong> <a href="4939.php">Ralph Castain: "Re: [OMPI devel] RFC: merge windows branch into trunk"</a>
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
