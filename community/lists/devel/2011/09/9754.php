<?
$subject_val = "Re: [OMPI devel] Bull Vendor ID disappeared from IB ini file";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep  7 12:08:30 2011" -->
<!-- isoreceived="20110907160830" -->
<!-- sent="Wed, 7 Sep 2011 18:08:24 +0200" -->
<!-- isosent="20110907160824" -->
<!-- name="sylvain.jeaugey_at_[hidden]" -->
<!-- email="sylvain.jeaugey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Bull Vendor ID disappeared from IB ini file" -->
<!-- id="OF804FF671.AB1964F5-ONC1257904.005815C7-C1257904.0058A89E_at_bull.net" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="3AF945EBF4D3EC41AFE44EED9B0585F31413AF8448_at_HQMAIL02.nvidia.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Bull Vendor ID disappeared from IB ini file<br>
<strong>From:</strong> <a href="mailto:sylvain.jeaugey_at_[hidden]?Subject=Re:%20[OMPI%20devel]%20Bull%20Vendor%20ID%20disappeared%20from%20IB%20ini%20file"><em>sylvain.jeaugey_at_[hidden]</em></a><br>
<strong>Date:</strong> 2011-09-07 12:08:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9755.php">Jeff Squyres: "Re: [OMPI devel] RFC: make hwloc be a 1st-class citizen"</a>
<li><strong>Previous message:</strong> <a href="9753.php">sylvain.jeaugey_at_[hidden]: "Re: [OMPI devel] Bull Vendor ID disappeared from IB ini file"</a>
<li><strong>In reply to:</strong> <a href="9750.php">Rolf vandeVaart: "Re: [OMPI devel] Bull Vendor ID disappeared from IB ini file"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
True. I'm very sorry. I could have sworn it was this patch. And I doubled 
<br>
checked in SVN _and_ HG it was this one. But now I confirm it's Ralph's 
<br>
(very explicit) patch, and the patch I was refering to is really doing 
<br>
what it pretends.
<br>
<p>Weird.
<br>
<p>Btw, commit done.
<br>
<p>Sylvain
<br>
<p>devel-bounces_at_[hidden] a &#233;crit sur 07/09/2011 16:00:18 :
<br>
<p><span class="quotelev1">&gt; De : Rolf vandeVaart &lt;rvandevaart_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; A : Open MPI Developers &lt;devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date : 07/09/2011 16:00
</span><br>
<span class="quotelev1">&gt; Objet : Re: [OMPI devel] Bull Vendor ID disappeared from IB ini file
</span><br>
<span class="quotelev1">&gt; Envoy&#233; par : devel-bounces_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Actually, I think you are off by which commit undid the change.  It 
</span><br>
<span class="quotelev1">&gt; was this one.  And the message does suggest it might have caused 
</span><br>
problems.
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="https://svn.open-mpi.org/trac/ompi/changeset/23764">https://svn.open-mpi.org/trac/ompi/changeset/23764</a>
</span><br>
<span class="quotelev1">&gt; Timestamp:
</span><br>
<span class="quotelev1">&gt;     09/17/10 19:04:06 (12 months ago) 
</span><br>
<span class="quotelev1">&gt; Author:
</span><br>
<span class="quotelev1">&gt;     rhc
</span><br>
<span class="quotelev1">&gt; Message:
</span><br>
<span class="quotelev1">&gt;     WARNING: Work on the temp branch being merged here encountered 
</span><br>
<span class="quotelev1">&gt; problems with bugs in subversion. Considerable effort has gone into 
</span><br>
<span class="quotelev1">&gt; validating the branch. However, not all conditions can be checked, 
</span><br>
<span class="quotelev1">&gt; so users are cautioned that it may be advisable to not update from 
</span><br>
<span class="quotelev1">&gt; the trunk for a few days to allow MTT to identify platform-specific 
</span><br>
issues.
<br>
<span class="quotelev1">&gt;    This merges the branch containing the revamped build system based
</span><br>
<span class="quotelev1">&gt; around converting autogen from a bash script to a Perl program. Jeff
</span><br>
<span class="quotelev1">&gt; has provided emails explaining the features contained in the change.
</span><br>
<span class="quotelev1">&gt;     Please note that configure requirements on components HAVE 
</span><br>
<span class="quotelev1">&gt; CHANGED. For example. a configure.params file is no longer required 
</span><br>
<span class="quotelev1">&gt; in each component directory. See Jeff's emails for an explanation.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ________________________________________
</span><br>
<span class="quotelev1">&gt; From: devel-bounces_at_[hidden] [devel-bounces_at_[hidden]] On 
</span><br>
<span class="quotelev1">&gt; Behalf Of Sylvain Jeaugey [sylvain.jeaugey_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; Sent: Wednesday, September 07, 2011 8:56 AM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Developers
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI devel] Bull Vendor ID disappeared from IB ini file
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi All,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I just realized that Bull Vendor IDs for Infiniband cards disappeared 
</span><br>
from
<br>
<span class="quotelev1">&gt; the trunk. Actually, they were removed shortly after we included them in
</span><br>
<span class="quotelev1">&gt; last September.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The original commit was :
</span><br>
<span class="quotelev1">&gt; r23715 | derbeyn | 2010-09-03 16:13:19 +0200 (Fri, 03 Sep 2010) | 1 line
</span><br>
<span class="quotelev1">&gt; Added Bull vendor id for ConnectX card
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; An here is the commit that undid Nadia's patch :
</span><br>
<span class="quotelev1">&gt; r23791 | swise | 2010-09-22 20:16:53 +0200 (Wed, 22 Sep 2010) | 2 lines
</span><br>
<span class="quotelev1">&gt; Add T4 device IDs to openib btl params ini file.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It does indeed add some T4 device IDs and removes our vendor ID. The 
</span><br>
other
<br>
<span class="quotelev1">&gt; thing that bugs me is that unlike the commit message suggests, this 
</span><br>
patch
<br>
<span class="quotelev1">&gt; does a lot more than adding T4 device ids. So, It looks like something
</span><br>
<span class="quotelev1">&gt; went wrong on this commit (something like : I forgot to update and 
</span><br>
forced
<br>
<span class="quotelev1">&gt; the commit) and it may be worth checking nothing else were reverted with
</span><br>
<span class="quotelev1">&gt; this commit ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sylvain
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
-----------------------------------------------------------------------------------
<br>
<span class="quotelev1">&gt; This email message is for the sole use of the intended recipient(s) 
</span><br>
<span class="quotelev1">&gt; and may contain
</span><br>
<span class="quotelev1">&gt; confidential information.  Any unauthorized review, use, disclosure 
</span><br>
<span class="quotelev1">&gt; or distribution
</span><br>
<span class="quotelev1">&gt; is prohibited.  If you are not the intended recipient, please 
</span><br>
<span class="quotelev1">&gt; contact the sender by
</span><br>
<span class="quotelev1">&gt; reply email and destroy all copies of the original message.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
-----------------------------------------------------------------------------------
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9754/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9755.php">Jeff Squyres: "Re: [OMPI devel] RFC: make hwloc be a 1st-class citizen"</a>
<li><strong>Previous message:</strong> <a href="9753.php">sylvain.jeaugey_at_[hidden]: "Re: [OMPI devel] Bull Vendor ID disappeared from IB ini file"</a>
<li><strong>In reply to:</strong> <a href="9750.php">Rolf vandeVaart: "Re: [OMPI devel] Bull Vendor ID disappeared from IB ini file"</a>
<!-- nextthread="start" -->
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
