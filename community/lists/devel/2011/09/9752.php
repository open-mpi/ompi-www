<?
$subject_val = "Re: [OMPI devel] Bull Vendor ID disappeared from IB ini file";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep  7 11:21:04 2011" -->
<!-- isoreceived="20110907152104" -->
<!-- sent="Wed, 7 Sep 2011 11:20:47 -0400" -->
<!-- isosent="20110907152047" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Bull Vendor ID disappeared from IB ini file" -->
<!-- id="9C4974AD-F097-4127-95E6-4D78E61917B8_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="FB27B388-141C-41C5-ADB8-12E17F8E11BC_at_open-mpi.org" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-07 11:20:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9753.php">sylvain.jeaugey_at_[hidden]: "Re: [OMPI devel] Bull Vendor ID disappeared from IB ini file"</a>
<li><strong>Previous message:</strong> <a href="9751.php">Ralph Castain: "Re: [OMPI devel] Bull Vendor ID disappeared from IB ini file"</a>
<li><strong>In reply to:</strong> <a href="9751.php">Ralph Castain: "Re: [OMPI devel] Bull Vendor ID disappeared from IB ini file"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9753.php">sylvain.jeaugey_at_[hidden]: "Re: [OMPI devel] Bull Vendor ID disappeared from IB ini file"</a>
<li><strong>Reply:</strong> <a href="9753.php">sylvain.jeaugey_at_[hidden]: "Re: [OMPI devel] Bull Vendor ID disappeared from IB ini file"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
+1.  Sorry about that, Sylvain -- please re-commit.
<br>
<p>Is the right stuff on v1.4 / v1.5?
<br>
<p><p>On Sep 7, 2011, at 10:04 AM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; Quite possible - subversion was having its typical convulsions over the configure system change as there were lots of conflicting commits during that time. I'd suggest just re-committing your change.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Sep 7, 2011, at 8:00 AM, Rolf vandeVaart wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Actually, I think you are off by which commit undid the change.  It was this one.  And the message does suggest it might have caused problems.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; <a href="https://svn.open-mpi.org/trac/ompi/changeset/23764">https://svn.open-mpi.org/trac/ompi/changeset/23764</a>
</span><br>
<span class="quotelev2">&gt;&gt; Timestamp:
</span><br>
<span class="quotelev2">&gt;&gt;   09/17/10 19:04:06 (12 months ago) 
</span><br>
<span class="quotelev2">&gt;&gt; Author:
</span><br>
<span class="quotelev2">&gt;&gt;   rhc
</span><br>
<span class="quotelev2">&gt;&gt; Message:
</span><br>
<span class="quotelev2">&gt;&gt;   WARNING: Work on the temp branch being merged here encountered problems with bugs in subversion. Considerable effort has gone into validating the branch. However, not all conditions can be checked, so users are cautioned that it may be advisable to not update from the trunk for a few days to allow MTT to identify platform-specific issues.
</span><br>
<span class="quotelev2">&gt;&gt;  This merges the branch containing the revamped build system based around converting autogen from a bash script to a Perl program. Jeff has provided emails explaining the features contained in the change.
</span><br>
<span class="quotelev2">&gt;&gt;   Please note that configure requirements on components HAVE CHANGED. For example. a configure.params file is no longer required in each component directory. See Jeff's emails for an explanation.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; From: devel-bounces_at_[hidden] [devel-bounces_at_[hidden]] On Behalf Of Sylvain Jeaugey [sylvain.jeaugey_at_[hidden]]
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Wednesday, September 07, 2011 8:56 AM
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Developers
</span><br>
<span class="quotelev2">&gt;&gt; Subject: [OMPI devel] Bull Vendor ID disappeared from IB ini file
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi All,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I just realized that Bull Vendor IDs for Infiniband cards disappeared from
</span><br>
<span class="quotelev2">&gt;&gt; the trunk. Actually, they were removed shortly after we included them in
</span><br>
<span class="quotelev2">&gt;&gt; last September.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The original commit was :
</span><br>
<span class="quotelev2">&gt;&gt; r23715 | derbeyn | 2010-09-03 16:13:19 +0200 (Fri, 03 Sep 2010) | 1 line
</span><br>
<span class="quotelev2">&gt;&gt; Added Bull vendor id for ConnectX card
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; An here is the commit that undid Nadia's patch :
</span><br>
<span class="quotelev2">&gt;&gt; r23791 | swise | 2010-09-22 20:16:53 +0200 (Wed, 22 Sep 2010) | 2 lines
</span><br>
<span class="quotelev2">&gt;&gt; Add T4 device IDs to openib btl params ini file.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; It does indeed add some T4 device IDs and removes our vendor ID. The other
</span><br>
<span class="quotelev2">&gt;&gt; thing that bugs me is that unlike the commit message suggests, this patch
</span><br>
<span class="quotelev2">&gt;&gt; does a lot more than adding T4 device ids. So, It looks like something
</span><br>
<span class="quotelev2">&gt;&gt; went wrong on this commit (something like : I forgot to update and forced
</span><br>
<span class="quotelev2">&gt;&gt; the commit) and it may be worth checking nothing else were reverted with
</span><br>
<span class="quotelev2">&gt;&gt; this commit ...
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Sylvain
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; -----------------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; This email message is for the sole use of the intended recipient(s) and may contain
</span><br>
<span class="quotelev2">&gt;&gt; confidential information.  Any unauthorized review, use, disclosure or distribution
</span><br>
<span class="quotelev2">&gt;&gt; is prohibited.  If you are not the intended recipient, please contact the sender by
</span><br>
<span class="quotelev2">&gt;&gt; reply email and destroy all copies of the original message.
</span><br>
<span class="quotelev2">&gt;&gt; -----------------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9753.php">sylvain.jeaugey_at_[hidden]: "Re: [OMPI devel] Bull Vendor ID disappeared from IB ini file"</a>
<li><strong>Previous message:</strong> <a href="9751.php">Ralph Castain: "Re: [OMPI devel] Bull Vendor ID disappeared from IB ini file"</a>
<li><strong>In reply to:</strong> <a href="9751.php">Ralph Castain: "Re: [OMPI devel] Bull Vendor ID disappeared from IB ini file"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9753.php">sylvain.jeaugey_at_[hidden]: "Re: [OMPI devel] Bull Vendor ID disappeared from IB ini file"</a>
<li><strong>Reply:</strong> <a href="9753.php">sylvain.jeaugey_at_[hidden]: "Re: [OMPI devel] Bull Vendor ID disappeared from IB ini file"</a>
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
