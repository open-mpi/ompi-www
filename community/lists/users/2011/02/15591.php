<?
$subject_val = "Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Feb 13 17:16:13 2011" -->
<!-- isoreceived="20110213221613" -->
<!-- sent="Sun, 13 Feb 2011 14:16:08 -0800" -->
<!-- isosent="20110213221608" -->
<!-- name="Tena Sakai" -->
<!-- email="tsakai_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)" -->
<!-- id="C97D96E0.E53C%tsakai_at_gallo.ucsf.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="C45CEE62-9968-4864-8739-07088C093057_at_pittman.co.uk" -->
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
<strong>Subject:</strong> Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)<br>
<strong>From:</strong> Tena Sakai (<em>tsakai_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-13 17:16:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15592.php">Tena Sakai: "Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)"</a>
<li><strong>Previous message:</strong> <a href="15590.php">Ashley Pittman: "Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)"</a>
<li><strong>In reply to:</strong> <a href="15590.php">Ashley Pittman: "Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15593.php">Ashley Pittman: "Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)"</a>
<li><strong>Reply:</strong> <a href="15593.php">Ashley Pittman: "Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thank you, Ashley, for your comments.
<br>
<p>I do have a question.
<br>
I was using 'sudo su' to document the problem I am running
<br>
into for people who read this mailing list, as well as for
<br>
my own record.  Why would you say I shouldn't be doing so?
<br>
<p>Regards,
<br>
<p>Tena
<br>
<p><p>On 2/13/11 1:29 PM, &quot;Ashley Pittman&quot; &lt;ashley_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On 12 Feb 2011, at 14:06, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Have you searched the email archive and/or web for openmpi and Amazon cloud?
</span><br>
<span class="quotelev2">&gt;&gt; Others have previously worked through many of these problems for that
</span><br>
<span class="quotelev2">&gt;&gt; environment - might be worth a look to see if someone already solved this, or
</span><br>
<span class="quotelev2">&gt;&gt; at least a contact point for someone who is already running in that
</span><br>
<span class="quotelev2">&gt;&gt; environment.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've run Open MPI on Amazon ec2 for over a year and never experienced any
</span><br>
<span class="quotelev1">&gt; problems like the original poster describes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; IIRC, there are some unique problems with running on that platform.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; None that I'm aware of.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; EC2 really is no different from any other environment I've used, either real
</span><br>
<span class="quotelev1">&gt; or virtual, a simple download, ./configure, make and make install has always
</span><br>
<span class="quotelev1">&gt; resulted in a working OpenMPI assuming a shared install location and home
</span><br>
<span class="quotelev1">&gt; directory (for launching applications from).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When I'm using EC2 I tend to re-name machines into something that is easier to
</span><br>
<span class="quotelev1">&gt; follow, typically &quot;cloud[0-15].ec2&quot; assuming I am running 16 machines, I
</span><br>
<span class="quotelev1">&gt; change the hostname of each host and then write a /etc/hosts file to convert
</span><br>
<span class="quotelev1">&gt; from hostname to internal IP address.  I them export /home from cloud0.ec2 to
</span><br>
<span class="quotelev1">&gt; all the other nodes and configure OpenMPI with --prefix=/home/ashley/install
</span><br>
<span class="quotelev1">&gt; so that the code is installed everywhere.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For EC2 Instances I commonly use Fedora but have also used Ubuntu and Solaris,
</span><br>
<span class="quotelev1">&gt; all have been fundamentally similar.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My other tip for using EC2 would be to use a persistent &quot;home&quot; folder by
</span><br>
<span class="quotelev1">&gt; renting a disk partition and attaching it to the first instance you boot in a
</span><br>
<span class="quotelev1">&gt; session.  You pay for this by Gb/Month, I was able to use a 5Gb device which I
</span><br>
<span class="quotelev1">&gt; mounted at /home in cloud0.ec2 and NFS exported to the other instances, again
</span><br>
<span class="quotelev1">&gt; at /home.  You'll need to add &quot;ForwardAgent yes&quot; to your personal .ssh/config
</span><br>
<span class="quotelev1">&gt; to allow you to hop around inside the virtual cluster without entering a
</span><br>
<span class="quotelev1">&gt; password.  The persistent devices are called &quot;Volumes&quot; in EC2 speak, there is
</span><br>
<span class="quotelev1">&gt; no need to create snapshots unless you want to share your volume with other
</span><br>
<span class="quotelev1">&gt; people.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ashley.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ps, I would recommend reading up on sudo and su, &quot;sudo su&quot; is not a command
</span><br>
<span class="quotelev1">&gt; you should be typing.
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15592.php">Tena Sakai: "Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)"</a>
<li><strong>Previous message:</strong> <a href="15590.php">Ashley Pittman: "Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)"</a>
<li><strong>In reply to:</strong> <a href="15590.php">Ashley Pittman: "Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15593.php">Ashley Pittman: "Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)"</a>
<li><strong>Reply:</strong> <a href="15593.php">Ashley Pittman: "Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)"</a>
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
