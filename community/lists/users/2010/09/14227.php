<?
$subject_val = "[OMPI users] Question on staging in checkpoint";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 13 13:42:37 2010" -->
<!-- isoreceived="20100913174237" -->
<!-- sent="Mon, 13 Sep 2010 10:42:37 -0700" -->
<!-- isosent="20100913174237" -->
<!-- name="ananda.mudar_at_[hidden]" -->
<!-- email="ananda.mudar_at_[hidden]" -->
<!-- subject="[OMPI users] Question on staging in checkpoint" -->
<!-- id="1E3BF6B8D1243842A175F7C7069EB0E7084DC4DB_at_usa-mv-msg.wipro.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] Question on staging in checkpoint<br>
<strong>From:</strong> <a href="mailto:ananda.mudar_at_[hidden]?Subject=Re:%20[OMPI%20users]%20Question%20on%20staging%20in%20checkpoint"><em>ananda.mudar_at_[hidden]</em></a><br>
<strong>Date:</strong> 2010-09-13 13:42:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14228.php">Joshua Hursey: "Re: [OMPI users] Question on staging in checkpoint"</a>
<li><strong>Previous message:</strong> <a href="14226.php">Eugene Loh: "Re: [OMPI users] latency #2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14228.php">Joshua Hursey: "Re: [OMPI users] Question on staging in checkpoint"</a>
<li><strong>Reply:</strong> <a href="14228.php">Joshua Hursey: "Re: [OMPI users] Question on staging in checkpoint"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi
<br>
<p>&nbsp;
<br>
<p>I was trying out the staging option in checkpoint where I save the
<br>
checkpoint image in local file system and have the image transferred to
<br>
global filesystem in the background. As part of the background process I
<br>
see that the &quot;scp&quot; command is launched to transfer the images from local
<br>
file system to global file system. I am using openmpi-1.5rc6 with BLCR
<br>
0.8.2.
<br>
<p>&nbsp;
<br>
<p>In my experiment, I had about 128 cores saved their respective
<br>
checkpoint images on local file system. During the background process, I
<br>
see that only 10 &quot;scp&quot; requests are sent at a time. Is this a
<br>
configurable parameter? Since these commands will run on respective
<br>
nodes, how can I launch all 128 scp requests (to take care of all 128
<br>
images in my experiment) simultaneously?
<br>
<p>&nbsp;
<br>
<p>Thanks
<br>
<p>Ananda
<br>
<p><p>Please do not print this email unless it is absolutely necessary. 

The information contained in this electronic message and any attachments to this message are intended for the exclusive use of the addressee(s) and may contain proprietary, confidential or privileged information. If you are not the intended recipient, you should not disseminate, distribute or copy this e-mail. Please notify the sender immediately and destroy all copies of this message and any attachments. 

WARNING: Computer viruses can be transmitted via email. The recipient should check this email and any attachments for the presence of viruses. The company accepts no liability for any damage caused by any virus transmitted by this email. 

www.wipro.com
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14227/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14228.php">Joshua Hursey: "Re: [OMPI users] Question on staging in checkpoint"</a>
<li><strong>Previous message:</strong> <a href="14226.php">Eugene Loh: "Re: [OMPI users] latency #2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14228.php">Joshua Hursey: "Re: [OMPI users] Question on staging in checkpoint"</a>
<li><strong>Reply:</strong> <a href="14228.php">Joshua Hursey: "Re: [OMPI users] Question on staging in checkpoint"</a>
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
