<?
$subject_val = "Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Feb 13 16:29:13 2011" -->
<!-- isoreceived="20110213212913" -->
<!-- sent="Sun, 13 Feb 2011 21:29:02 +0000" -->
<!-- isosent="20110213212902" -->
<!-- name="Ashley Pittman" -->
<!-- email="ashley_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)" -->
<!-- id="C45CEE62-9968-4864-8739-07088C093057_at_pittman.co.uk" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="8C6E3E3E-8A63-4E4D-A248-EED7D4AC89BC_at_open-mpi.org" -->
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
<strong>Date:</strong> 2011-02-13 16:29:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15591.php">Tena Sakai: "Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)"</a>
<li><strong>Previous message:</strong> <a href="15589.php">Tena Sakai: "Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)"</a>
<li><strong>In reply to:</strong> <a href="15584.php">Ralph Castain: "Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15591.php">Tena Sakai: "Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)"</a>
<li><strong>Reply:</strong> <a href="15591.php">Tena Sakai: "Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 12 Feb 2011, at 14:06, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; Have you searched the email archive and/or web for openmpi and Amazon cloud? Others have previously worked through many of these problems for that environment - might be worth a look to see if someone already solved this, or at least a contact point for someone who is already running in that environment.
</span><br>
<p>I've run Open MPI on Amazon ec2 for over a year and never experienced any problems like the original poster describes.
<br>
<p><span class="quotelev1">&gt; IIRC, there are some unique problems with running on that platform.
</span><br>
<p><p>None that I'm aware of.
<br>
<p>EC2 really is no different from any other environment I've used, either real or virtual, a simple download, ./configure, make and make install has always resulted in a working OpenMPI assuming a shared install location and home directory (for launching applications from).
<br>
<p>When I'm using EC2 I tend to re-name machines into something that is easier to follow, typically &quot;cloud[0-15].ec2&quot; assuming I am running 16 machines, I change the hostname of each host and then write a /etc/hosts file to convert from hostname to internal IP address.  I them export /home from cloud0.ec2 to all the other nodes and configure OpenMPI with --prefix=/home/ashley/install so that the code is installed everywhere.
<br>
<p>For EC2 Instances I commonly use Fedora but have also used Ubuntu and Solaris, all have been fundamentally similar.
<br>
<p>My other tip for using EC2 would be to use a persistent &quot;home&quot; folder by renting a disk partition and attaching it to the first instance you boot in a session.  You pay for this by Gb/Month, I was able to use a 5Gb device which I mounted at /home in cloud0.ec2 and NFS exported to the other instances, again at /home.  You'll need to add &quot;ForwardAgent yes&quot; to your personal .ssh/config to allow you to hop around inside the virtual cluster without entering a password.  The persistent devices are called &quot;Volumes&quot; in EC2 speak, there is no need to create snapshots unless you want to share your volume with other people.
<br>
<p>Ashley.
<br>
<p>Ps, I would recommend reading up on sudo and su, &quot;sudo su&quot; is not a command you should be typing.
<br>
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
<li><strong>Next message:</strong> <a href="15591.php">Tena Sakai: "Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)"</a>
<li><strong>Previous message:</strong> <a href="15589.php">Tena Sakai: "Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)"</a>
<li><strong>In reply to:</strong> <a href="15584.php">Ralph Castain: "Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15591.php">Tena Sakai: "Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)"</a>
<li><strong>Reply:</strong> <a href="15591.php">Tena Sakai: "Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)"</a>
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
