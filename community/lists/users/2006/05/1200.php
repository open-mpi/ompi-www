<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue May  2 18:40:27 2006" -->
<!-- isoreceived="20060502224027" -->
<!-- sent="Tue, 2 May 2006 15:40:25 -0700" -->
<!-- isosent="20060502224025" -->
<!-- name="Ali Soleimani" -->
<!-- email="alis_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI TCP no-route-to-host error" -->
<!-- id="20060502224025.GB1788_at_lira.ugcs.caltech.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="mailman.7504.1146602663.3068.users_at_open-mpi.org" -->
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
<strong>From:</strong> Ali Soleimani (<em>alis_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-05-02 18:40:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1201.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] openmpi-1.0.2 configure problem"</a>
<li><strong>Previous message:</strong> <a href="1199.php">Michael Kluskens: "Re: [OMPI users] openmpi-1.0.2 configure problem"</a>
<li><strong>Maybe in reply to:</strong> <a href="1190.php">Ali Soleimani: "[OMPI users] OpenMPI TCP no-route-to-host error"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi George,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I have no firewall running on that system.  We have an external
<br>
firewall that sits outside or departmental network, so communications between
<br>
the nodes in the cluster is unrestricted.  I do not have any problems
<br>
connecting to darwin (the head node) from fisher or any other node via ssh,
<br>
nfs, http, etc.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;What strikes me as odd is that it's giving the no-route-to-host
<br>
error... with a firewall I would expect a timeout or connection refused msg.
<br>
<p>--Ali
<br>
<p>On Tue, May 02, 2006 at 04:44:23PM -0400, users-request_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Date: Tue, 2 May 2006 12:07:28 -0400
</span><br>
<span class="quotelev1">&gt; From: George Bosilca &lt;bosilca_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] OpenMPI TCP no-route-to-host error
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;CB7B1E5E-F2AD-423A-9D62-5FBCAA7A2C28_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=US-ASCII; delsp=yes; format=flowed
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Do you have a firewall on the node called darwin ? Look like fisher  
</span><br>
<span class="quotelev1">&gt; is unable to create a TCP connection to darwin, and the firewall  
</span><br>
<span class="quotelev1">&gt; seems to be one of the most common problems...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Thanks,
</span><br>
<span class="quotelev1">&gt;      george.
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1201.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] openmpi-1.0.2 configure problem"</a>
<li><strong>Previous message:</strong> <a href="1199.php">Michael Kluskens: "Re: [OMPI users] openmpi-1.0.2 configure problem"</a>
<li><strong>Maybe in reply to:</strong> <a href="1190.php">Ali Soleimani: "[OMPI users] OpenMPI TCP no-route-to-host error"</a>
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
