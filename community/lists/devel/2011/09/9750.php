<?
$subject_val = "Re: [OMPI devel] Bull Vendor ID disappeared from IB ini file";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep  7 10:00:24 2011" -->
<!-- isoreceived="20110907140024" -->
<!-- sent="Wed, 7 Sep 2011 07:00:18 -0700" -->
<!-- isosent="20110907140018" -->
<!-- name="Rolf vandeVaart" -->
<!-- email="rvandevaart_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Bull Vendor ID disappeared from IB ini file" -->
<!-- id="3AF945EBF4D3EC41AFE44EED9B0585F31413AF8448_at_HQMAIL02.nvidia.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="alpine.DEB.2.00.1109071429410.27340_at_jeaugeys" -->
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
<strong>From:</strong> Rolf vandeVaart (<em>rvandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-07 10:00:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9751.php">Ralph Castain: "Re: [OMPI devel] Bull Vendor ID disappeared from IB ini file"</a>
<li><strong>Previous message:</strong> <a href="9749.php">Sylvain Jeaugey: "[OMPI devel] Bull Vendor ID disappeared from IB ini file"</a>
<li><strong>In reply to:</strong> <a href="9749.php">Sylvain Jeaugey: "[OMPI devel] Bull Vendor ID disappeared from IB ini file"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9751.php">Ralph Castain: "Re: [OMPI devel] Bull Vendor ID disappeared from IB ini file"</a>
<li><strong>Reply:</strong> <a href="9751.php">Ralph Castain: "Re: [OMPI devel] Bull Vendor ID disappeared from IB ini file"</a>
<li><strong>Reply:</strong> <a href="9754.php">sylvain.jeaugey_at_[hidden]: "Re: [OMPI devel] Bull Vendor ID disappeared from IB ini file"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Actually, I think you are off by which commit undid the change.  It was this one.  And the message does suggest it might have caused problems.
<br>
<p><a href="https://svn.open-mpi.org/trac/ompi/changeset/23764">https://svn.open-mpi.org/trac/ompi/changeset/23764</a>
<br>
Timestamp:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;09/17/10 19:04:06 (12 months ago) 
<br>
Author:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;rhc
<br>
Message:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;WARNING: Work on the temp branch being merged here encountered problems with bugs in subversion. Considerable effort has gone into validating the branch. However, not all conditions can be checked, so users are cautioned that it may be advisable to not update from the trunk for a few days to allow MTT to identify platform-specific issues.
<br>
&nbsp;&nbsp;&nbsp;This merges the branch containing the revamped build system based around converting autogen from a bash script to a Perl program. Jeff has provided emails explaining the features contained in the change.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Please note that configure requirements on components HAVE CHANGED. For example. a configure.params file is no longer required in each component directory. See Jeff's emails for an explanation.
<br>
<p><p><p>________________________________________
<br>
From: devel-bounces_at_[hidden] [devel-bounces_at_[hidden]] On Behalf Of Sylvain Jeaugey [sylvain.jeaugey_at_[hidden]]
<br>
Sent: Wednesday, September 07, 2011 8:56 AM
<br>
To: Open MPI Developers
<br>
Subject: [OMPI devel] Bull Vendor ID disappeared from IB ini file
<br>
<p>Hi All,
<br>
<p>I just realized that Bull Vendor IDs for Infiniband cards disappeared from
<br>
the trunk. Actually, they were removed shortly after we included them in
<br>
last September.
<br>
<p>The original commit was :
<br>
r23715 | derbeyn | 2010-09-03 16:13:19 +0200 (Fri, 03 Sep 2010) | 1 line
<br>
Added Bull vendor id for ConnectX card
<br>
<p>An here is the commit that undid Nadia's patch :
<br>
r23791 | swise | 2010-09-22 20:16:53 +0200 (Wed, 22 Sep 2010) | 2 lines
<br>
Add T4 device IDs to openib btl params ini file.
<br>
<p>It does indeed add some T4 device IDs and removes our vendor ID. The other
<br>
thing that bugs me is that unlike the commit message suggests, this patch
<br>
does a lot more than adding T4 device ids. So, It looks like something
<br>
went wrong on this commit (something like : I forgot to update and forced
<br>
the commit) and it may be worth checking nothing else were reverted with
<br>
this commit ...
<br>
<p>Sylvain
<br>
_______________________________________________
<br>
devel mailing list
<br>
devel_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
<br>
-----------------------------------------------------------------------------------
<br>
This email message is for the sole use of the intended recipient(s) and may contain
<br>
confidential information.  Any unauthorized review, use, disclosure or distribution
<br>
is prohibited.  If you are not the intended recipient, please contact the sender by
<br>
reply email and destroy all copies of the original message.
<br>
-----------------------------------------------------------------------------------
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9751.php">Ralph Castain: "Re: [OMPI devel] Bull Vendor ID disappeared from IB ini file"</a>
<li><strong>Previous message:</strong> <a href="9749.php">Sylvain Jeaugey: "[OMPI devel] Bull Vendor ID disappeared from IB ini file"</a>
<li><strong>In reply to:</strong> <a href="9749.php">Sylvain Jeaugey: "[OMPI devel] Bull Vendor ID disappeared from IB ini file"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9751.php">Ralph Castain: "Re: [OMPI devel] Bull Vendor ID disappeared from IB ini file"</a>
<li><strong>Reply:</strong> <a href="9751.php">Ralph Castain: "Re: [OMPI devel] Bull Vendor ID disappeared from IB ini file"</a>
<li><strong>Reply:</strong> <a href="9754.php">sylvain.jeaugey_at_[hidden]: "Re: [OMPI devel] Bull Vendor ID disappeared from IB ini file"</a>
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
