<?
$subject_val = "[OMPI users] v1.5.3-x64 does not work on Windows 7 workgroup";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 18 20:17:11 2011" -->
<!-- isoreceived="20110519001711" -->
<!-- sent="Wed, 18 May 2011 17:17:06 -0700" -->
<!-- isosent="20110519001706" -->
<!-- name="Jason Mackay" -->
<!-- email="meener777_at_[hidden]" -->
<!-- subject="[OMPI users] v1.5.3-x64 does not work on Windows 7 workgroup" -->
<!-- id="BAY149-w61CF414E9D3384C26A9E10EC8E0_at_phx.gbl" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] v1.5.3-x64 does not work on Windows 7 workgroup<br>
<strong>From:</strong> Jason Mackay (<em>meener777_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-05-18 20:17:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16569.php">hi: "Re: [OMPI users] Sorry! You were supposed to get help about: But couldn't open help-orterun.txt"</a>
<li><strong>Previous message:</strong> <a href="16567.php">Ralph Castain: "Re: [OMPI users] TotalView Memory debugging and OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16572.php">Youri LACAN-BARTLEY: "Re: [OMPI users] v1.5.3-x64 does not work on Windows 7 workgroup"</a>
<li><strong>Reply:</strong> <a href="16572.php">Youri LACAN-BARTLEY: "Re: [OMPI users] v1.5.3-x64 does not work on Windows 7 workgroup"</a>
<li><strong>Reply:</strong> <a href="16580.php">Jeff Squyres: "Re: [OMPI users] v1.5.3-x64 does not work on Windows 7 workgroup"</a>
<li><strong>Maybe reply:</strong> <a href="16598.php">Jason Mackay: "Re: [OMPI users] v1.5.3-x64 does not work on Windows 7 workgroup"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
&nbsp;
<br>
My thanks to all those involved for putting together this Windows binary release of OpenMPI!  I am hoping to use it in a small Windows based OpenMPI cluster at home.
<br>
&nbsp;
<br>
Unfortunately my experience so far has not exactly been trouble free.  It seems that, due to the fact that this release is using WMI, there are a number of settings that must be configured on the machines in order to get this to work. These settings are not documented in the distribution at all. I have been experimenting with it for over a week on and off and as soon as I solve one problem, another one arises.
<br>
&nbsp;
<br>
Currently, after much searching, reading, and tinkering with DCOM settings etc..., I can remotely start processes on all my machines using mpirun but those processes cannot access network shares (e.g. for binary distribution) and HPL (which works on any one node) does not seem to work if I run it across multiple nodes, also indicating a network issue (CPU sits at 100% in all processes with no network traffic and never terminates). To eliminate premission issues that may be caused by UAC I tried the same setup on two domain machines using an administrative account to launch and the behavior was the same. I have read that WMI processes cannot access network resources and I am at a loss for a solution to this newest of problems. If anyone knows how to make this work I would appreciate the help. I assume that someone has gotten this working and has the answers.
<br>
&nbsp;
<br>
I have searched the mailing list archives and I found other users with similar problems but no clear guidance on the threads. Some threads make references to Microsoft KB articles but do not explicitly tell the user what needs to be done, leaving each new user to rediscover the tricks on their own. One thread made it appear that testing had only been done on Windows XP. Needless to say, security has changed dramatically in Windows since XP!
<br>
&nbsp;
<br>
I would like to see OpenMPI for Windows be usable by a newcomer without all of this pain.
<br>
&nbsp;
<br>
What would be fantastic would be:
<br>
1) a step-by-step procedure for how to get OpenMPI 1.5 working on Windows
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;a) preferably in a bare Windows 7 workgroup environment with nothing else (i.e. no Microsoft Cluster Compute Pack, no domain etc...)
<br>
2) inclusion of these steps in the binary distribution
<br>
3) bonus points for a script which accomplishes these things automatically
<br>
&nbsp;
<br>
If someone can help with (1), I would happily volunteer my time to work on (3).
<br>
&nbsp;
<br>
Regards,
<br>
Jason 		 	   		  
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16568/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16569.php">hi: "Re: [OMPI users] Sorry! You were supposed to get help about: But couldn't open help-orterun.txt"</a>
<li><strong>Previous message:</strong> <a href="16567.php">Ralph Castain: "Re: [OMPI users] TotalView Memory debugging and OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16572.php">Youri LACAN-BARTLEY: "Re: [OMPI users] v1.5.3-x64 does not work on Windows 7 workgroup"</a>
<li><strong>Reply:</strong> <a href="16572.php">Youri LACAN-BARTLEY: "Re: [OMPI users] v1.5.3-x64 does not work on Windows 7 workgroup"</a>
<li><strong>Reply:</strong> <a href="16580.php">Jeff Squyres: "Re: [OMPI users] v1.5.3-x64 does not work on Windows 7 workgroup"</a>
<li><strong>Maybe reply:</strong> <a href="16598.php">Jason Mackay: "Re: [OMPI users] v1.5.3-x64 does not work on Windows 7 workgroup"</a>
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
