<?
$subject_val = "Re: [OMPI users] requirement on ssh when run openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug  1 05:23:53 2013" -->
<!-- isoreceived="20130801092353" -->
<!-- sent="Thu, 1 Aug 2013 17:23:30 +0800 (CST)" -->
<!-- isosent="20130801092330" -->
<!-- name="meng " -->
<!-- email="qsmeng_at_[hidden]" -->
<!-- subject="Re: [OMPI users] requirement on ssh when run openmpi" -->
<!-- id="4b0d716f.e854.14039306fd0.Coremail.qsmeng_at_126.com" -->
<!-- charset="GBK" -->
<!-- inreplyto="F875BDFB-700B-4E8F-B2E8-E89F8A5778E0_at_staff.uni-marburg.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] requirement on ssh when run openmpi<br>
<strong>From:</strong> meng  (<em>qsmeng_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-08-01 05:23:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22423.php">gpaulus: "[OMPI users] OpenMPI 1.7.2 and CLAPACK libs discovery"</a>
<li><strong>Previous message:</strong> <a href="22421.php">Reuti: "Re: [OMPI users] requirement on ssh when run openmpi"</a>
<li><strong>In reply to:</strong> <a href="22421.php">Reuti: "Re: [OMPI users] requirement on ssh when run openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22424.php">Ralph Castain: "Re: [OMPI users] requirement on ssh when run openmpi"</a>
<li><strong>Reply:</strong> <a href="22424.php">Ralph Castain: "Re: [OMPI users] requirement on ssh when run openmpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
dear Reuti,
<br>
<p><span class="quotelev1"> &gt;I was assuming that you are using bash, for csh it would be different.
</span><br>
<p>&nbsp;Yes, I use bash shell.
<br>
<p><span class="quotelev1">&gt;The command:
</span><br>
<span class="quotelev2"> &gt;&gt;$ ssh c2 which orted
</span><br>
&nbsp;it displays:
<br>
<p>which : no orted in (......). Indeed (.........) contains no openmpi.
<br>
so I run ssh c2 first and then run which orted, it displays: /usr/local/openmpi-1.6.5/bin/orted
<br>
<p><span class="quotelev1"> &gt;must succeed. Does:
</span><br>
<span class="quotelev2">&gt;&gt;$ ssh c2 echo \$PATH
</span><br>
<span class="quotelev1">&gt;show the path(s) you added in ~/.bashrc on the other machine?
</span><br>
<p>the command doesnt show the path I added in .bashrc
<br>
<p>regards,
<br>
meng 
<br>
<p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22422/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22423.php">gpaulus: "[OMPI users] OpenMPI 1.7.2 and CLAPACK libs discovery"</a>
<li><strong>Previous message:</strong> <a href="22421.php">Reuti: "Re: [OMPI users] requirement on ssh when run openmpi"</a>
<li><strong>In reply to:</strong> <a href="22421.php">Reuti: "Re: [OMPI users] requirement on ssh when run openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22424.php">Ralph Castain: "Re: [OMPI users] requirement on ssh when run openmpi"</a>
<li><strong>Reply:</strong> <a href="22424.php">Ralph Castain: "Re: [OMPI users] requirement on ssh when run openmpi"</a>
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
