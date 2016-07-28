<?
$subject_val = "Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 14 11:40:06 2011" -->
<!-- isoreceived="20110214164006" -->
<!-- sent="Mon, 14 Feb 2011 08:39:57 -0800" -->
<!-- isosent="20110214163957" -->
<!-- name="Tena Sakai" -->
<!-- email="tsakai_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)" -->
<!-- id="C97E9998.E573%tsakai_at_gallo.ucsf.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="62905DE6-A18E-434B-81B6-21A9E260D30C_at_pittman.co.uk" -->
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
<strong>Date:</strong> 2011-02-14 11:39:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15599.php">Jeff Squyres: "Re: [OMPI users] Deadlock/NULL pointer dereference in openib BTL"</a>
<li><strong>Previous message:</strong> <a href="15597.php">Jeff Squyres: "Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)"</a>
<li><strong>In reply to:</strong> <a href="15593.php">Ashley Pittman: "Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15586.php">Gustavo Correa: "Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thank you. Ashley, for clarification between sudo and su.
<br>
I live in a sphere of ignorance, but I feel I am slightly
<br>
enlightened.
<br>
<p>Regards,
<br>
<p>Tena
<br>
<p><p>On 2/14/11 1:39 AM, &quot;Ashley Pittman&quot; &lt;ashley_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &quot;sudo&quot; and &quot;su&quot; are two similar commands for doing nearly identical things,
</span><br>
<span class="quotelev1">&gt; you should be running one or the other but there is no need to run both.
</span><br>
<span class="quotelev1">&gt; &quot;sudo -s&quot; is probably the command you should have used.  It's a very common
</span><br>
<span class="quotelev1">&gt; mistake.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; sudo is a command for allowing you to run commands as another user, either
</span><br>
<span class="quotelev1">&gt; using your own or no password.  su is a command to allow you to run commands
</span><br>
<span class="quotelev1">&gt; as another user using their password.  What sudo su is doing is running a
</span><br>
<span class="quotelev1">&gt; command as root which is then running a shell as root, &quot;sudo -s&quot; is a much
</span><br>
<span class="quotelev1">&gt; better way of achieving the same effect.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ashley.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 13 Feb 2011, at 22:16, Tena Sakai wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thank you, Ashley, for your comments.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I do have a question.
</span><br>
<span class="quotelev2">&gt;&gt; I was using 'sudo su' to document the problem I am running
</span><br>
<span class="quotelev2">&gt;&gt; into for people who read this mailing list, as well as for
</span><br>
<span class="quotelev2">&gt;&gt; my own record.  Why would you say I shouldn't be doing so?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Tena
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 2/13/11 1:29 PM, &quot;Ashley Pittman&quot; &lt;ashley_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 12 Feb 2011, at 14:06, Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Have you searched the email archive and/or web for openmpi and Amazon
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; cloud?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Others have previously worked through many of these problems for that
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; environment - might be worth a look to see if someone already solved this,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; or
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; at least a contact point for someone who is already running in that
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; environment.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I've run Open MPI on Amazon ec2 for over a year and never experienced any
</span><br>
<span class="quotelev3">&gt;&gt;&gt; problems like the original poster describes.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; IIRC, there are some unique problems with running on that platform.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; None that I'm aware of.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; EC2 really is no different from any other environment I've used, either real
</span><br>
<span class="quotelev3">&gt;&gt;&gt; or virtual, a simple download, ./configure, make and make install has always
</span><br>
<span class="quotelev3">&gt;&gt;&gt; resulted in a working OpenMPI assuming a shared install location and home
</span><br>
<span class="quotelev3">&gt;&gt;&gt; directory (for launching applications from).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; When I'm using EC2 I tend to re-name machines into something that is easier
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; follow, typically &quot;cloud[0-15].ec2&quot; assuming I am running 16 machines, I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; change the hostname of each host and then write a /etc/hosts file to convert
</span><br>
<span class="quotelev3">&gt;&gt;&gt; from hostname to internal IP address.  I them export /home from cloud0.ec2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; all the other nodes and configure OpenMPI with --prefix=/home/ashley/install
</span><br>
<span class="quotelev3">&gt;&gt;&gt; so that the code is installed everywhere.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For EC2 Instances I commonly use Fedora but have also used Ubuntu and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Solaris,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; all have been fundamentally similar.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; My other tip for using EC2 would be to use a persistent &quot;home&quot; folder by
</span><br>
<span class="quotelev3">&gt;&gt;&gt; renting a disk partition and attaching it to the first instance you boot in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; session.  You pay for this by Gb/Month, I was able to use a 5Gb device which
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mounted at /home in cloud0.ec2 and NFS exported to the other instances,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; again
</span><br>
<span class="quotelev3">&gt;&gt;&gt; at /home.  You'll need to add &quot;ForwardAgent yes&quot; to your personal
</span><br>
<span class="quotelev3">&gt;&gt;&gt; .ssh/config
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to allow you to hop around inside the virtual cluster without entering a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; password.  The persistent devices are called &quot;Volumes&quot; in EC2 speak, there
</span><br>
<span class="quotelev3">&gt;&gt;&gt; is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; no need to create snapshots unless you want to share your volume with other
</span><br>
<span class="quotelev3">&gt;&gt;&gt; people.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ashley.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ps, I would recommend reading up on sudo and su, &quot;sudo su&quot; is not a command
</span><br>
<span class="quotelev3">&gt;&gt;&gt; you should be typing.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15599.php">Jeff Squyres: "Re: [OMPI users] Deadlock/NULL pointer dereference in openib BTL"</a>
<li><strong>Previous message:</strong> <a href="15597.php">Jeff Squyres: "Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)"</a>
<li><strong>In reply to:</strong> <a href="15593.php">Ashley Pittman: "Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15586.php">Gustavo Correa: "Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)"</a>
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
