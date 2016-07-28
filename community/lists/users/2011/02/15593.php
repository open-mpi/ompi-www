<?
$subject_val = "Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 14 04:39:15 2011" -->
<!-- isoreceived="20110214093915" -->
<!-- sent="Mon, 14 Feb 2011 09:39:05 +0000" -->
<!-- isosent="20110214093905" -->
<!-- name="Ashley Pittman" -->
<!-- email="ashley_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)" -->
<!-- id="62905DE6-A18E-434B-81B6-21A9E260D30C_at_pittman.co.uk" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="C97D96E0.E53C%tsakai_at_gallo.ucsf.edu" -->
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
<strong>From:</strong> Ashley Pittman (<em>ashley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-14 04:39:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15594.php">Reuti: "Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)"</a>
<li><strong>Previous message:</strong> <a href="15592.php">Tena Sakai: "Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)"</a>
<li><strong>In reply to:</strong> <a href="15591.php">Tena Sakai: "Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15598.php">Tena Sakai: "Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)"</a>
<li><strong>Reply:</strong> <a href="15598.php">Tena Sakai: "Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&quot;sudo&quot; and &quot;su&quot; are two similar commands for doing nearly identical things, you should be running one or the other but there is no need to run both.  &quot;sudo -s&quot; is probably the command you should have used.  It's a very common mistake.
<br>
<p>sudo is a command for allowing you to run commands as another user, either using your own or no password.  su is a command to allow you to run commands as another user using their password.  What sudo su is doing is running a command as root which is then running a shell as root, &quot;sudo -s&quot; is a much better way of achieving the same effect.
<br>
<p>Ashley.
<br>
<p>On 13 Feb 2011, at 22:16, Tena Sakai wrote:
<br>
<p><span class="quotelev1">&gt; Thank you, Ashley, for your comments.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I do have a question.
</span><br>
<span class="quotelev1">&gt; I was using 'sudo su' to document the problem I am running
</span><br>
<span class="quotelev1">&gt; into for people who read this mailing list, as well as for
</span><br>
<span class="quotelev1">&gt; my own record.  Why would you say I shouldn't be doing so?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Tena
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 2/13/11 1:29 PM, &quot;Ashley Pittman&quot; &lt;ashley_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 12 Feb 2011, at 14:06, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Have you searched the email archive and/or web for openmpi and Amazon cloud?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Others have previously worked through many of these problems for that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; environment - might be worth a look to see if someone already solved this, or
</span><br>
<span class="quotelev3">&gt;&gt;&gt; at least a contact point for someone who is already running in that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; environment.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I've run Open MPI on Amazon ec2 for over a year and never experienced any
</span><br>
<span class="quotelev2">&gt;&gt; problems like the original poster describes.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; IIRC, there are some unique problems with running on that platform.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; None that I'm aware of.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; EC2 really is no different from any other environment I've used, either real
</span><br>
<span class="quotelev2">&gt;&gt; or virtual, a simple download, ./configure, make and make install has always
</span><br>
<span class="quotelev2">&gt;&gt; resulted in a working OpenMPI assuming a shared install location and home
</span><br>
<span class="quotelev2">&gt;&gt; directory (for launching applications from).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; When I'm using EC2 I tend to re-name machines into something that is easier to
</span><br>
<span class="quotelev2">&gt;&gt; follow, typically &quot;cloud[0-15].ec2&quot; assuming I am running 16 machines, I
</span><br>
<span class="quotelev2">&gt;&gt; change the hostname of each host and then write a /etc/hosts file to convert
</span><br>
<span class="quotelev2">&gt;&gt; from hostname to internal IP address.  I them export /home from cloud0.ec2 to
</span><br>
<span class="quotelev2">&gt;&gt; all the other nodes and configure OpenMPI with --prefix=/home/ashley/install
</span><br>
<span class="quotelev2">&gt;&gt; so that the code is installed everywhere.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; For EC2 Instances I commonly use Fedora but have also used Ubuntu and Solaris,
</span><br>
<span class="quotelev2">&gt;&gt; all have been fundamentally similar.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; My other tip for using EC2 would be to use a persistent &quot;home&quot; folder by
</span><br>
<span class="quotelev2">&gt;&gt; renting a disk partition and attaching it to the first instance you boot in a
</span><br>
<span class="quotelev2">&gt;&gt; session.  You pay for this by Gb/Month, I was able to use a 5Gb device which I
</span><br>
<span class="quotelev2">&gt;&gt; mounted at /home in cloud0.ec2 and NFS exported to the other instances, again
</span><br>
<span class="quotelev2">&gt;&gt; at /home.  You'll need to add &quot;ForwardAgent yes&quot; to your personal .ssh/config
</span><br>
<span class="quotelev2">&gt;&gt; to allow you to hop around inside the virtual cluster without entering a
</span><br>
<span class="quotelev2">&gt;&gt; password.  The persistent devices are called &quot;Volumes&quot; in EC2 speak, there is
</span><br>
<span class="quotelev2">&gt;&gt; no need to create snapshots unless you want to share your volume with other
</span><br>
<span class="quotelev2">&gt;&gt; people.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Ashley.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Ps, I would recommend reading up on sudo and su, &quot;sudo su&quot; is not a command
</span><br>
<span class="quotelev2">&gt;&gt; you should be typing.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><pre>
-- 
Ashley Pittman, Bath, UK.
Padb - A parallel job inspection tool for cluster computing
<a href="http://padb.pittman.org.uk">http://padb.pittman.org.uk</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15594.php">Reuti: "Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)"</a>
<li><strong>Previous message:</strong> <a href="15592.php">Tena Sakai: "Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)"</a>
<li><strong>In reply to:</strong> <a href="15591.php">Tena Sakai: "Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15598.php">Tena Sakai: "Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)"</a>
<li><strong>Reply:</strong> <a href="15598.php">Tena Sakai: "Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)"</a>
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
