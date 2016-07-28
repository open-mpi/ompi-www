<?
$subject_val = "Re: [OMPI users] EXTERNAL: Re:  qp memory allocation problem";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 12 17:16:46 2011" -->
<!-- isoreceived="20110912211646" -->
<!-- sent="Mon, 12 Sep 2011 14:58:25 -0600" -->
<!-- isosent="20110912205825" -->
<!-- name="Blosch, Edwin L" -->
<!-- email="edwin.l.blosch_at_[hidden]" -->
<!-- subject="Re: [OMPI users] EXTERNAL: Re:  qp memory allocation problem" -->
<!-- id="E9F276A0010AF44ABD2C03ED2EDAE7DB275E2E614D_at_HDXMSPB.us.lmco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="alpine.OSX.2.00.1109121102040.4026_at_panthera.lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] EXTERNAL: Re:  qp memory allocation problem<br>
<strong>From:</strong> Blosch, Edwin L (<em>edwin.l.blosch_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-12 16:58:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17238.php">Nathan Hjelm: "Re: [OMPI users] EXTERNAL: Re:  qp memory allocation problem"</a>
<li><strong>Previous message:</strong> <a href="17236.php">Blosch, Edwin L: "[OMPI users] Question on using rsh"</a>
<li><strong>In reply to:</strong> <a href="17228.php">Nathan Hjelm: "Re: [OMPI users] EXTERNAL: Re:  qp memory allocation problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17238.php">Nathan Hjelm: "Re: [OMPI users] EXTERNAL: Re:  qp memory allocation problem"</a>
<li><strong>Reply:</strong> <a href="17238.php">Nathan Hjelm: "Re: [OMPI users] EXTERNAL: Re:  qp memory allocation problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It was set to 0 previously.  We've set it to 4 and restarted some service and now it works.  So both your and Samuel's suggestions worked. 
<br>
<p>On another system, slightly older, it was defaulted to 3 instead of 0, and apparently that explains why the job always ran before and on this newer system did not run.
<br>
<p>I'm wondering if there was any way for us to know that this change had happened.
<br>
<p>At any rate, thanks for the support.
<br>
<p><p>-----Original Message-----
<br>
From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of Nathan Hjelm
<br>
Sent: Monday, September 12, 2011 12:05 PM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] EXTERNAL: Re: qp memory allocation problem
<br>
<p><p>On Mon, 12 Sep 2011, Blosch, Edwin L wrote:
<br>
<p><span class="quotelev1">&gt; Nathan,   I found this parameters under /sys/module/mlx4_core/parameters.   How do you incorporate a changed value?  What to restart/rebuild?
</span><br>
<p>Add the following line to /etc/modprobe (replace X with the appropriate value for log_mtts_per_seg):
<br>
options mlx4_core log_mtts_per_seg=X
<br>
<p>BTW, what was log_mtts_per_seg set to?
<br>
<p>-Nathan Hjelm
<br>
Los Alamos National Laboratory
<br>
_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17238.php">Nathan Hjelm: "Re: [OMPI users] EXTERNAL: Re:  qp memory allocation problem"</a>
<li><strong>Previous message:</strong> <a href="17236.php">Blosch, Edwin L: "[OMPI users] Question on using rsh"</a>
<li><strong>In reply to:</strong> <a href="17228.php">Nathan Hjelm: "Re: [OMPI users] EXTERNAL: Re:  qp memory allocation problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17238.php">Nathan Hjelm: "Re: [OMPI users] EXTERNAL: Re:  qp memory allocation problem"</a>
<li><strong>Reply:</strong> <a href="17238.php">Nathan Hjelm: "Re: [OMPI users] EXTERNAL: Re:  qp memory allocation problem"</a>
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
