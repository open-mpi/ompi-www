<?
$subject_val = "Re: [OMPI devel] RFC: merge windows branch into trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 20 19:10:59 2008" -->
<!-- isoreceived="20081121001059" -->
<!-- sent="Thu, 20 Nov 2008 17:10:48 -0700" -->
<!-- isosent="20081121001048" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: merge windows branch into trunk" -->
<!-- id="789E7239-7C08-4A78-BD8B-CBD979672F03_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200811210056.34603.keller_at_hlrs.de" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-20 19:10:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4940.php">Terry Dontje: "Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script	for	post-configure"</a>
<li><strong>Previous message:</strong> <a href="4938.php">Rainer Keller: "Re: [OMPI devel] RFC: merge windows branch into trunk"</a>
<li><strong>In reply to:</strong> <a href="4938.php">Rainer Keller: "Re: [OMPI devel] RFC: merge windows branch into trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/12/5031.php">Rainer Keller: "Re: [OMPI devel] RFC: merge windows branch into trunk"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Rainer
<br>
<p>Historically, our rules have prohibited the introduction of such  
<br>
features into a sub-release like 1.3.1. Perhaps that policy needs  
<br>
review?
<br>
<p>We've been pretty strict about it in the past, though...with some good  
<br>
reasons, I admit.
<br>
<p>Ralph
<br>
<p><p>On Nov 20, 2008, at 4:56 PM, Rainer Keller wrote:
<br>
<p><span class="quotelev1">&gt; Hi Ralph,
</span><br>
<span class="quotelev1">&gt; On Donnerstag, 20. November 2008, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 1. since nearly everyone is at SC08, and since next week is a  
</span><br>
<span class="quotelev2">&gt;&gt; holiday,
</span><br>
<span class="quotelev2">&gt;&gt; the timing of this merge is poor. I would really urge that you delay
</span><br>
<span class="quotelev2">&gt;&gt; it until at least Dec 5 so people actually know about it - and have
</span><br>
<span class="quotelev2">&gt;&gt; time to even think about it
</span><br>
<span class="quotelev1">&gt; Yes, the idea is having more people take a look into it and try out.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2. how does this fit into our overall release schedule? There was  
</span><br>
<span class="quotelev2">&gt;&gt; talk
</span><br>
<span class="quotelev2">&gt;&gt; at one time (when we thought 1.3 was going out soon) about having a
</span><br>
<span class="quotelev2">&gt;&gt; short release cycle to get Windows support out for 1.4. Now this is
</span><br>
<span class="quotelev2">&gt;&gt; coming into the trunk even before 1.3 goes out.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So is 1.3 going to have a lifecycle of a month? Or are we going to
</span><br>
<span class="quotelev2">&gt;&gt; delay 1.3 (if it even needs to be delayed) so it can include this  
</span><br>
<span class="quotelev2">&gt;&gt; code?
</span><br>
<span class="quotelev1">&gt; No, why ,-]?
</span><br>
<span class="quotelev1">&gt; At the appropriate time this can be merged into 1.3.x  (with x being  
</span><br>
<span class="quotelev2">&gt; &gt; 1...?)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Reason I ask: last time we rolled Windows support into the system it
</span><br>
<span class="quotelev2">&gt;&gt; created a complete code fork, making support for the current stable
</span><br>
<span class="quotelev2">&gt;&gt; release nearly impossible. There generated a lot of unhappiness and
</span><br>
<span class="quotelev2">&gt;&gt; argument within the community until we finally released a new  
</span><br>
<span class="quotelev2">&gt;&gt; version.
</span><br>
<span class="quotelev1">&gt; Well, we believe with only the view touched general files and only  
</span><br>
<span class="quotelev1">&gt; the CCP
</span><br>
<span class="quotelev1">&gt; components being added, there's less chance of hurting other code.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; M ompi/runtime/ompi_mpi_init.c
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; M orte/tools/orterun/orterun.c
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; M orte/util/hnp_contact.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I would ask that you consider breaking these
</span><br>
<span class="quotelev3">&gt;&gt;&gt; modifications into parts that &quot;could&quot; be harmlessly
</span><br>
<span class="quotelev3">&gt;&gt;&gt; brought over independently to 1.3, if a subsequent
</span><br>
<span class="quotelev3">&gt;&gt;&gt; non-windows bugfix to one of those files needs to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; be brought over that will only merge cleanly if some
</span><br>
<span class="quotelev3">&gt;&gt;&gt; of your changes to the same file are also brought over.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For example, it would be a real pain to have to use
</span><br>
<span class="quotelev3">&gt;&gt;&gt; patchfiles to resolve merge conflicts simply because
</span><br>
<span class="quotelev3">&gt;&gt;&gt; of an #ifdef or white-space change here or there.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hopefully that made sense...
</span><br>
<span class="quotelev1">&gt; Yes, breaking into chunks (such as the CMakeLists.txt + .windows  
</span><br>
<span class="quotelev1">&gt; files, the
</span><br>
<span class="quotelev1">&gt; CCP component and finally the files that touch other files) is a  
</span><br>
<span class="quotelev1">&gt; good way
</span><br>
<span class="quotelev1">&gt; forward.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; CU,
</span><br>
<span class="quotelev1">&gt; Rainer
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Dipl.-Inf. Rainer Keller   <a href="http://www.hlrs.de/people/keller">http://www.hlrs.de/people/keller</a>
</span><br>
<span class="quotelev1">&gt; HLRS                          Tel: ++49 (0)711-685 6 5858
</span><br>
<span class="quotelev1">&gt; Nobelstrasse 19                  Fax: ++49 (0)711-685 6 5832
</span><br>
<span class="quotelev1">&gt; 70550 Stuttgart                    email: keller_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Germany                             AIM/Skype:rusraink
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4940.php">Terry Dontje: "Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script	for	post-configure"</a>
<li><strong>Previous message:</strong> <a href="4938.php">Rainer Keller: "Re: [OMPI devel] RFC: merge windows branch into trunk"</a>
<li><strong>In reply to:</strong> <a href="4938.php">Rainer Keller: "Re: [OMPI devel] RFC: merge windows branch into trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/12/5031.php">Rainer Keller: "Re: [OMPI devel] RFC: merge windows branch into trunk"</a>
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
