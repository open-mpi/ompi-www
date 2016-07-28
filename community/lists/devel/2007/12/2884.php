<?
$subject_val = "[OMPI devel] TCP BTL vs MX BTL broke on the trunk a week ago...";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 19 10:04:51 2007" -->
<!-- isoreceived="20071219150451" -->
<!-- sent="Wed, 19 Dec 2007 10:04:46 -0500" -->
<!-- isosent="20071219150446" -->
<!-- name="Tim Mattox" -->
<!-- email="timattox_at_[hidden]" -->
<!-- subject="[OMPI devel] TCP BTL vs MX BTL broke on the trunk a week ago..." -->
<!-- id="ea86ce220712190704i5cb3570eic0432c62e533bb7b_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] TCP BTL vs MX BTL broke on the trunk a week ago...<br>
<strong>From:</strong> Tim Mattox (<em>timattox_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-19 10:04:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2885.php">Jeff Squyres: "[OMPI devel] Fwd: [all-osl-users] Outage of the OSL services"</a>
<li><strong>Previous message:</strong> <a href="2883.php">Ralph H Castain: "Re: [OMPI devel] RTE issues: scalability &amp; complexity"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
Somewhere between r16924 and r16950 on the trunk,
<br>
things broke for our Big Red machine.  The problem
<br>
occurs when a specific transport is not specified
<br>
during the mpirun, and both MX &amp; TCP are available.
<br>
The problem was caused by r16942 that adjusted the
<br>
exclusivity of TCP and SCTP.  And guess what... the
<br>
exclusivity of the MX BTL is now lower then the TCP BTL.
<br>
<p>Ooops.
<br>
<p>Glancing at the other BTL's btl_exclusivity settings in the
<br>
*_component.c or *_mca.c files shows me that portals
<br>
would also be affected.
<br>
<p>mca_btl_tcp_module.super.btl_exclusivity =  MCA_BTL_EXCLUSIVITY_LOW + 100;
<br>
mca_btl_portals_module.super.btl_exclusivity = 60;
<br>
mca_btl_mx_module.super.btl_exclusivity = 50;
<br>
<p>I think we should fix this by changing portals and mx to use
<br>
MCA_BTL_EXCLUSIVITY_DEFAULT instead of 50 and 60,
<br>
since ofud, openib, and gm use MCA_BTL_EXCLUSIVITY_DEFAULT,
<br>
which happens to be 1024.
<br>
<p>I'll apply a fix later today if I have time...
<br>
<p>P.S. - For completeness, here is a sampling of MTT results
<br>
showing the problem:
<br>
<a href="http://www.open-mpi.org/mtt/index.php?do_redir=478">http://www.open-mpi.org/mtt/index.php?do_redir=478</a>
<br>
<pre>
-- 
Tim Mattox, Ph.D. - <a href="http://homepage.mac.com/tmattox/">http://homepage.mac.com/tmattox/</a>
 tmattox_at_[hidden] || timattox_at_[hidden]
    I'm a bright... <a href="http://www.the-brights.net/">http://www.the-brights.net/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2885.php">Jeff Squyres: "[OMPI devel] Fwd: [all-osl-users] Outage of the OSL services"</a>
<li><strong>Previous message:</strong> <a href="2883.php">Ralph H Castain: "Re: [OMPI devel] RTE issues: scalability &amp; complexity"</a>
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
