<?
$subject_val = "Re: [OMPI users] srun and openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 27 15:40:01 2011" -->
<!-- isoreceived="20110427194001" -->
<!-- sent="Wed, 27 Apr 2011 13:39:52 -0600" -->
<!-- isosent="20110427193952" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] srun and openmpi" -->
<!-- id="13523489-0FB6-4337-AD62-96164553CED6_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="B3B9B9E3-5BBB-4D94-8CC0-5E5C125723F4_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] srun and openmpi<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-27 15:39:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16360.php">Jeff Squyres: "Re: [OMPI users] srun and openmpi"</a>
<li><strong>Previous message:</strong> <a href="16358.php">Sindhi, Waris             PW: "Re: [OMPI users] OpenMPI out of band TCP retry exceeded"</a>
<li><strong>In reply to:</strong> <a href="16357.php">Jeff Squyres: "Re: [OMPI users] srun and openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16360.php">Jeff Squyres: "Re: [OMPI users] srun and openmpi"</a>
<li><strong>Reply:</strong> <a href="16360.php">Jeff Squyres: "Re: [OMPI users] srun and openmpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 27, 2011, at 1:27 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On Apr 27, 2011, at 2:46 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Actually, I understood you correctly. I'm just saying that I find no evidence in the code that we try three times before giving up. What I see is a single attempt to bind the port - if it fails, then we abort. There is no parameter to control that behavior.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; So if the OS hasn't released the port by the time a new job starts on that node, then it will indeed abort if the job was unfortunately given the same port reservation.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; FWIW, the OS may be trying multiple times under the covers, but from as far as OMPI is concerned, we're just trying once.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; OMPI asks for whatever port the OS has open (i.e., we pass in 0 when asking for a specific port number, and the OS fills it in for us).  If it gives us back a port that isn't actually available, that would be really surprising.
</span><br>
<p>Nope, nope nope...in this mode of operation, we are using -static- ports.
<br>
<p>The problem here is that srun is incorrectly handing out the same port reservation to the next job, causing the port binding to fail because the last job's binding hasn't yet timed out.
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If you have a bajiollion short jobs running, I wonder if there's some kind of race condition occurring that some MPI processes are getting messages from the wrong mpirun.  And then things go downhill from there.  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I can't immediately imagine how that would happen, but maybe there's some kind of weird race condition in there somewhere...?  We pass specific IP addresses and ports around on the command line, though, so I don't quite see how that would happen...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16360.php">Jeff Squyres: "Re: [OMPI users] srun and openmpi"</a>
<li><strong>Previous message:</strong> <a href="16358.php">Sindhi, Waris             PW: "Re: [OMPI users] OpenMPI out of band TCP retry exceeded"</a>
<li><strong>In reply to:</strong> <a href="16357.php">Jeff Squyres: "Re: [OMPI users] srun and openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16360.php">Jeff Squyres: "Re: [OMPI users] srun and openmpi"</a>
<li><strong>Reply:</strong> <a href="16360.php">Jeff Squyres: "Re: [OMPI users] srun and openmpi"</a>
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
