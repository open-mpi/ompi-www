<?
$subject_val = "Re: [OMPI users] regarding the installation";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 25 09:32:34 2012" -->
<!-- isoreceived="20120425133234" -->
<!-- sent="Wed, 25 Apr 2012 09:32:29 -0400" -->
<!-- isosent="20120425133229" -->
<!-- name="Jeffrey Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] regarding the installation" -->
<!-- id="998D5BED-C032-4903-8816-15DF90E28396_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAJ_xm3Db7Sbqi9LiEcint8pD=Jr1oz44iC21w+jNiKWpRTudaA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] regarding the installation<br>
<strong>From:</strong> Jeffrey Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-25 09:32:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19117.php">seshendra seshu: "[OMPI users] regarding the problem occurred while running an mpi programs"</a>
<li><strong>Previous message:</strong> <a href="19115.php">seshendra seshu: "[OMPI users] regarding the installation"</a>
<li><strong>In reply to:</strong> <a href="19115.php">seshendra seshu: "[OMPI users] regarding the installation"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 25, 2012, at 8:58 AM, seshendra seshu wrote:
<br>
<p><span class="quotelev1">&gt; I have installed openMPI on the master node  and separately on client nodes how can i check that all nodes can communicate for openmpi for running parallel programs.
</span><br>
<p>Check out this prior post from this list:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/lists/users/2012/03/18846.php">http://www.open-mpi.org/community/lists/users/2012/03/18846.php</a>
<br>
<p><span class="quotelev1">&gt; And i need to use ssh for the connection establishment. i need the configuration of ssh for open mpi.
</span><br>
<p>Note that Open MPI does not use ssh for MPI connection establishment; it only uses ssh to launch executables remotely.  On IP-based networks, Open MPI will use TCP sockets for communication and MPI traffic.
<br>
<p>Have a look at this FAQ category:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/faq/?category=rsh">http://www.open-mpi.org/faq/?category=rsh</a>
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19117.php">seshendra seshu: "[OMPI users] regarding the problem occurred while running an mpi programs"</a>
<li><strong>Previous message:</strong> <a href="19115.php">seshendra seshu: "[OMPI users] regarding the installation"</a>
<li><strong>In reply to:</strong> <a href="19115.php">seshendra seshu: "[OMPI users] regarding the installation"</a>
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
