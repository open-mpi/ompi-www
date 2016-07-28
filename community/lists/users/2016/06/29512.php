<?
$subject_val = "Re: [OMPI users] Docker Cluster Queue Manager";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 22 10:16:48 2016" -->
<!-- isoreceived="20160622141648" -->
<!-- sent="Wed, 22 Jun 2016 15:16:46 +0100" -->
<!-- isosent="20160622141646" -->
<!-- name="Dave Love" -->
<!-- email="d.love_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Docker Cluster Queue Manager" -->
<!-- id="8760t1nwa9.fsf_at_pc102091.liv.ac.uk" -->
<!-- inreplyto="CAJB=V02ccu3bQrjXLbCO60eDF_iCn3=JtSZ4TtC9w8zy7RoQVA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Docker Cluster Queue Manager<br>
<strong>From:</strong> Dave Love (<em>d.love_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-22 10:16:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29513.php">Rob Nagler: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
<li><strong>Previous message:</strong> <a href="29511.php">Mehmet Belgin: "Re: [OMPI users] Big jump from OFED 1.5.4.1 -&gt; recent (stable). Any suggestions?"</a>
<li><strong>In reply to:</strong> <a href="29382.php">Rob Nagler: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29513.php">Rob Nagler: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
<li><strong>Reply:</strong> <a href="29513.php">Rob Nagler: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Rob Nagler &lt;openmpi-wooxi_at_[hidden]&gt; writes:
<br>
<p><span class="quotelev1">&gt; Thanks, John. I sometimes wonder if I'm the only one out there with this
</span><br>
<span class="quotelev1">&gt; particular problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph, thanks for sticking with me. :) Using a pool of uids doesn't really
</span><br>
<span class="quotelev1">&gt; work due to the way cgroups/containers works. It also would require
</span><br>
<span class="quotelev1">&gt; changing the permissions of all of the user's files, which would create
</span><br>
<span class="quotelev1">&gt; issues for Jupyter/Hub's access to the files, which is used for in situ
</span><br>
<span class="quotelev1">&gt; monitoring.
</span><br>
<p>Skimming back at this, like Ralph I really don't understand it as a
<br>
maintainer of a resource manager (at a level above Ralph's) and as
<br>
someone who formerly had the &quot;pleasure&quot; of HEP requirements which
<br>
attempted to defeat essentially any reasonable management policy.  (It
<br>
seems off-topic here.)
<br>
<p>Amongst reasons for not running Docker, a major one that I didn't notice
<br>
raised is that containers are not started by the resource manager, but
<br>
by a privileged daemon, so the resource manager can't directly control
<br>
or monitor them.
<br>
<p><span class="quotelev1">&gt;From a brief look at Jupyter when it came up a while ago, I wouldn't
</span><br>
want to run it, and I wasn't alone.  (I've been lectured about the lack
<br>
of problems with such things by people on whose clusters I could
<br>
trivially run jobs as any normal user and sometimes as root.)
<br>
<p>+1 for what Ralph said about singularity in particular.  While there's
<br>
work to be done, you could even convert docker images on the fly in a
<br>
resource manager prolog.  I'm awaiting enlightenment on the on-topic
<br>
issue of running MPI jobs with it, though.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29513.php">Rob Nagler: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
<li><strong>Previous message:</strong> <a href="29511.php">Mehmet Belgin: "Re: [OMPI users] Big jump from OFED 1.5.4.1 -&gt; recent (stable). Any suggestions?"</a>
<li><strong>In reply to:</strong> <a href="29382.php">Rob Nagler: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29513.php">Rob Nagler: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
<li><strong>Reply:</strong> <a href="29513.php">Rob Nagler: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
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
