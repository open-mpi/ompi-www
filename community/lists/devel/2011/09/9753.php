<?
$subject_val = "Re: [OMPI devel] Bull Vendor ID disappeared from IB ini file";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep  7 11:45:49 2011" -->
<!-- isoreceived="20110907154549" -->
<!-- sent="Wed, 7 Sep 2011 17:45:43 +0200" -->
<!-- isosent="20110907154543" -->
<!-- name="sylvain.jeaugey_at_[hidden]" -->
<!-- email="sylvain.jeaugey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Bull Vendor ID disappeared from IB ini file" -->
<!-- id="OF3D666DB4.F5DBE621-ONC1257904.005653CD-C1257904.005694CA_at_bull.net" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="9C4974AD-F097-4127-95E6-4D78E61917B8_at_cisco.com" -->
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
<strong>Date:</strong> 2011-09-07 11:45:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9754.php">sylvain.jeaugey_at_[hidden]: "Re: [OMPI devel] Bull Vendor ID disappeared from IB ini file"</a>
<li><strong>Previous message:</strong> <a href="9752.php">Jeff Squyres: "Re: [OMPI devel] Bull Vendor ID disappeared from IB ini file"</a>
<li><strong>In reply to:</strong> <a href="9752.php">Jeff Squyres: "Re: [OMPI devel] Bull Vendor ID disappeared from IB ini file"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9754.php">sylvain.jeaugey_at_[hidden]: "Re: [OMPI devel] Bull Vendor ID disappeared from IB ini file"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
v1.4 and v1.5 seem fine. So, it's only missing in the trunk.
<br>
<p>I'll commit this asap.
<br>
<p>Thanks for your explanations,
<br>
Sylvain
<br>
<p><p><p>De :    Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
<br>
A :     Open MPI Developers &lt;devel_at_[hidden]&gt;
<br>
Date :  07/09/2011 17:21
<br>
Objet : Re: [OMPI devel] Bull Vendor ID disappeared from IB ini file
<br>
Envoy&#233; par :    devel-bounces_at_[hidden]
<br>
<p><p><p>+1.  Sorry about that, Sylvain -- please re-commit.
<br>
<p>Is the right stuff on v1.4 / v1.5?
<br>
<p><p>On Sep 7, 2011, at 10:04 AM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; Quite possible - subversion was having its typical convulsions over the 
</span><br>
configure system change as there were lots of conflicting commits during 
<br>
that time. I'd suggest just re-committing your change.
<br>
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
<span class="quotelev2">&gt;&gt; Actually, I think you are off by which commit undid the change.  It was 
</span><br>
this one.  And the message does suggest it might have caused problems.
<br>
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
<span class="quotelev2">&gt;&gt;   WARNING: Work on the temp branch being merged here encountered 
</span><br>
problems with bugs in subversion. Considerable effort has gone into 
<br>
validating the branch. However, not all conditions can be checked, so 
<br>
users are cautioned that it may be advisable to not update from the trunk 
<br>
for a few days to allow MTT to identify platform-specific issues.
<br>
<span class="quotelev2">&gt;&gt;  This merges the branch containing the revamped build system based 
</span><br>
around converting autogen from a bash script to a Perl program. Jeff has 
<br>
provided emails explaining the features contained in the change.
<br>
<span class="quotelev2">&gt;&gt;   Please note that configure requirements on components HAVE CHANGED. 
</span><br>
For example. a configure.params file is no longer required in each 
<br>
component directory. See Jeff's emails for an explanation.
<br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; From: devel-bounces_at_[hidden] [devel-bounces_at_[hidden]] On Behalf 
</span><br>
Of Sylvain Jeaugey [sylvain.jeaugey_at_[hidden]]
<br>
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
<span class="quotelev2">&gt;&gt; I just realized that Bull Vendor IDs for Infiniband cards disappeared 
</span><br>
from
<br>
<span class="quotelev2">&gt;&gt; the trunk. Actually, they were removed shortly after we included them 
</span><br>
in
<br>
<span class="quotelev2">&gt;&gt; last September.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The original commit was :
</span><br>
<span class="quotelev2">&gt;&gt; r23715 | derbeyn | 2010-09-03 16:13:19 +0200 (Fri, 03 Sep 2010) | 1 
</span><br>
line
<br>
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
<span class="quotelev2">&gt;&gt; It does indeed add some T4 device IDs and removes our vendor ID. The 
</span><br>
other
<br>
<span class="quotelev2">&gt;&gt; thing that bugs me is that unlike the commit message suggests, this 
</span><br>
patch
<br>
<span class="quotelev2">&gt;&gt; does a lot more than adding T4 device ids. So, It looks like something
</span><br>
<span class="quotelev2">&gt;&gt; went wrong on this commit (something like : I forgot to update and 
</span><br>
forced
<br>
<span class="quotelev2">&gt;&gt; the commit) and it may be worth checking nothing else were reverted 
</span><br>
with
<br>
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
<span class="quotelev2">&gt;&gt; 
</span><br>
-----------------------------------------------------------------------------------
<br>
<span class="quotelev2">&gt;&gt; This email message is for the sole use of the intended recipient(s) and 
</span><br>
may contain
<br>
<span class="quotelev2">&gt;&gt; confidential information.  Any unauthorized review, use, disclosure or 
</span><br>
distribution
<br>
<span class="quotelev2">&gt;&gt; is prohibited.  If you are not the intended recipient, please contact 
</span><br>
the sender by
<br>
<span class="quotelev2">&gt;&gt; reply email and destroy all copies of the original message.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
-----------------------------------------------------------------------------------
<br>
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
_______________________________________________
devel mailing list
devel_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9753/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9754.php">sylvain.jeaugey_at_[hidden]: "Re: [OMPI devel] Bull Vendor ID disappeared from IB ini file"</a>
<li><strong>Previous message:</strong> <a href="9752.php">Jeff Squyres: "Re: [OMPI devel] Bull Vendor ID disappeared from IB ini file"</a>
<li><strong>In reply to:</strong> <a href="9752.php">Jeff Squyres: "Re: [OMPI devel] Bull Vendor ID disappeared from IB ini file"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9754.php">sylvain.jeaugey_at_[hidden]: "Re: [OMPI devel] Bull Vendor ID disappeared from IB ini file"</a>
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
