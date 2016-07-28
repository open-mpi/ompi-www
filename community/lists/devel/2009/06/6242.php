<?
$subject_val = "Re: [OMPI devel] Enabling debugging and profiling in openMPI (make	&quot;CFLAGS=-pg -g&quot;)";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 15 14:36:36 2009" -->
<!-- isoreceived="20090615183636" -->
<!-- sent="Mon, 15 Jun 2009 11:36:27 -0700" -->
<!-- isosent="20090615183627" -->
<!-- name="Nifty Tom Mitchell" -->
<!-- email="niftyompi_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Enabling debugging and profiling in openMPI (make	&amp;quot;CFLAGS=-pg -g&amp;quot;)" -->
<!-- id="20090615183627.GB2900_at_compegg.wr.niftyegg.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="52863.42507.qm_at_web8704.mail.in.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Enabling debugging and profiling in openMPI (make	&quot;CFLAGS=-pg -g&quot;)<br>
<strong>From:</strong> Nifty Tom Mitchell (<em>niftyompi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-15 14:36:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6243.php">Leo P.: "Re: [OMPI devel] complete newbie question regarding --enable-mpi-profile option"</a>
<li><strong>Previous message:</strong> <a href="6241.php">Leo P.: "Re: [OMPI devel] complete newbie question regarding --enable-mpi-profile option"</a>
<li><strong>In reply to:</strong> <a href="6227.php">Leo P.: "Re: [OMPI devel] Enabling debugging and profiling in openMPI (make &quot;CFLAGS=-pg -g&quot;)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, Jun 12, 2009 at 10:30:49PM +0530, Leo P. wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Thank you Ralph and Samuel.
</span><br>
<span class="quotelev1">&gt;    Sorry for the complete newbie question.
</span><br>
<span class="quotelev1">&gt;    The reason that i wanted to study openMPI is because i wanted to make
</span><br>
<span class="quotelev1">&gt;    open MPI support nodes that are behind NAT or firewall. If you guys
</span><br>
<span class="quotelev1">&gt;    could give me some pointers on how to go about doing this i would
</span><br>
<span class="quotelev1">&gt;    appreciate alot. I am considering this for my thesis project.
</span><br>
<span class="quotelev1">&gt;    Sincerely,
</span><br>
<span class="quotelev1">&gt;    LEO
</span><br>
<span class="quotelev1">&gt;      __________________________________________________________________
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    From: Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;    If you do a &quot;./configure --help&quot; you will get a complete list of the
</span><br>
.....
<br>
<p>Is the goal to add hosts behind a NAT to a cluster or is
<br>
this a cluster behind a NAT.
<br>
<p>For a cluster behind a NAT some issues get in the way.
<br>
The first is how mpirun connects to and starts
<br>
jobs.  To that end compare and contrast
<br>
&nbsp;&nbsp;&nbsp;&nbsp;a)	mpirun --hostfile /home/me/filewithhosts ./yourmpiprogram
<br>
&nbsp;&nbsp;&nbsp;&nbsp;b)	ssh mpirun --hostfile /home/me/filewithhosts ./yourmpiprogram
<br>
<p>Next c) the issue of ./ and /home/me needs to be clear and understood.  
<br>
Data, files and file system paths need to be managed in a like manner.
<br>
<p>In the first a) case mpirun (aka orterun) needs to make an identical connection to 
<br>
each of the hosts listed in 'filewithhosts'.   This is not possible in
<br>
the NAT case at the NAT box presents exactly one host behinds it's 
<br>
IPaddress.  In the b) case the host behind the NAT box can make direct
<br>
connections to each of the systems listed in 'filewithhosts'.   Because 
<br>
in the b) case &quot;mpirun&quot; can make all the direct connections to each of 
<br>
the hosts and start the job.
<br>
<p>Some of this may be hidden by a batch system that hides the first ssh connection.
<br>
<p>As for files c) each of the nodes running a rank needs to see the program 
<br>
and data files.  For the most part this is the same issue NAT or not.  
<br>
<p>Complications for debugging can involve $DISPLAY for X as well as ssh 
<br>
X-windows tunneling and display permissions.
<br>
<p>One interesting solution built into Open MPI is the use of IPv6.
<br>
IPv6 can come to play if you are adding hosts behind a NAT to a cluster 
<br>
and deploying a cluster behind a NAT.
<br>
<p>Lastly host name spaces outside the NAT and behind the NAT can be 
<br>
a royal pain.  When orterun (mpirun) makes it's connections host name
<br>
resolution for the ssh/ rsh jobs as well as the transport links needs
<br>
to work correctly.   Since a NAT is not a router resolving hosts
<br>
behind the NAT at best returns an unrouted private internet destination.
<br>
Since many campuses route private internets for local use unexpected
<br>
netmasks, hostroutes and routing tables may surface.
<br>
<p><p><pre>
-- 
	T o m  M i t c h e l l 
	Found me a new hat, now what?
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6243.php">Leo P.: "Re: [OMPI devel] complete newbie question regarding --enable-mpi-profile option"</a>
<li><strong>Previous message:</strong> <a href="6241.php">Leo P.: "Re: [OMPI devel] complete newbie question regarding --enable-mpi-profile option"</a>
<li><strong>In reply to:</strong> <a href="6227.php">Leo P.: "Re: [OMPI devel] Enabling debugging and profiling in openMPI (make &quot;CFLAGS=-pg -g&quot;)"</a>
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
