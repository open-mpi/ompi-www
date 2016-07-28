<?
$subject_val = "Re: [OMPI users] Question on staging in checkpoint";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 13 17:44:27 2010" -->
<!-- isoreceived="20100913214427" -->
<!-- sent="Mon, 13 Sep 2010 23:44:19 +0200" -->
<!-- isosent="20100913214419" -->
<!-- name="Joshua Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Question on staging in checkpoint" -->
<!-- id="E9449D1F-2A24-46ED-AC8D-AED4D8C13B9B_at_open-mpi.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="1E3BF6B8D1243842A175F7C7069EB0E7084DC4DB_at_usa-mv-msg.wipro.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Question on staging in checkpoint<br>
<strong>From:</strong> Joshua Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-13 17:44:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14229.php">Axel Schweiger: "[OMPI users] Building OpenMPI 10.4 with PGI fortran  10.8 and gcc"</a>
<li><strong>Previous message:</strong> <a href="14227.php">ananda.mudar_at_[hidden]: "[OMPI users] Question on staging in checkpoint"</a>
<li><strong>In reply to:</strong> <a href="14227.php">ananda.mudar_at_[hidden]: "[OMPI users] Question on staging in checkpoint"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Adjust the 'filem_rsh_max_incomming' parameter:
<br>
&nbsp;<a href="http://osl.iu.edu/research/ft/ompi-cr/api.php#mca-filem_rsh_max_incomming">http://osl.iu.edu/research/ft/ompi-cr/api.php#mca-filem_rsh_max_incomming</a>
<br>
<p>I defaulted this MCA parameter to 10 since, depending on how big each individual checkpoint is, you will find that often sending them all at once is often worse than sending only a window of them at a time. I would recommend trying a few different values for this parameter and seeing the impact it has both on checkpoint overhead (additional application overhead) and checkpoint latency (the time it takes for the checkpoint to completely finish).
<br>
<p>-- Josh
<br>
<p>On Sep 13, 2010, at 7:42 PM, &lt;ananda.mudar_at_[hidden]&gt; &lt;ananda.mudar_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I was trying out the staging option in checkpoint where I save the checkpoint image in local file system and have the image transferred to global filesystem in the background. As part of the background process I see that the &#147;scp&#148; command is launched to transfer the images from local file system to global file system. I am using openmpi-1.5rc6 with BLCR 0.8.2.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; In my experiment, I had about 128 cores saved their respective checkpoint images on local file system. During the background process, I see that only 10 &#147;scp&#148; requests are sent at a time. Is this a configurable parameter? Since these commands will run on respective nodes, how can I launch all 128 scp requests (to take care of all 128 images in my experiment) simultaneously?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Ananda
</span><br>
<span class="quotelev1">&gt; Please do not print this email unless it is absolutely necessary.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The information contained in this electronic message and any attachments to this message are intended for the exclusive use of the addressee(s) and may contain proprietary, confidential or privileged information. If you are not the intended recipient, you should not disseminate, distribute or copy this e-mail. Please notify the sender immediately and destroy all copies of this message and any attachments.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WARNING: Computer viruses can be transmitted via email. The recipient should check this email and any attachments for the presence of viruses. The company accepts no liability for any damage caused by any virus transmitted by this email.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; www.wipro.com
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;ATT00001..txt&gt;
</span><br>
<p>------------------------------------
<br>
Joshua Hursey
<br>
Postdoctoral Research Associate
<br>
Oak Ridge National Laboratory
<br>
<a href="http://www.cs.indiana.edu/~jjhursey">http://www.cs.indiana.edu/~jjhursey</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14229.php">Axel Schweiger: "[OMPI users] Building OpenMPI 10.4 with PGI fortran  10.8 and gcc"</a>
<li><strong>Previous message:</strong> <a href="14227.php">ananda.mudar_at_[hidden]: "[OMPI users] Question on staging in checkpoint"</a>
<li><strong>In reply to:</strong> <a href="14227.php">ananda.mudar_at_[hidden]: "[OMPI users] Question on staging in checkpoint"</a>
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
