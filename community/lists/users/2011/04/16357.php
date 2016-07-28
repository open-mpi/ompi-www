<?
$subject_val = "Re: [OMPI users] srun and openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 27 15:27:32 2011" -->
<!-- isoreceived="20110427192732" -->
<!-- sent="Wed, 27 Apr 2011 15:27:27 -0400" -->
<!-- isosent="20110427192727" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] srun and openmpi" -->
<!-- id="B3B9B9E3-5BBB-4D94-8CC0-5E5C125723F4_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1BB67B7D-0DFE-4F60-AF0E-D88BF070585E_at_open-mpi.org" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-27 15:27:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16358.php">Sindhi, Waris             PW: "Re: [OMPI users] OpenMPI out of band TCP retry exceeded"</a>
<li><strong>Previous message:</strong> <a href="16356.php">Michael Di Domenico: "Re: [OMPI users] srun and openmpi"</a>
<li><strong>In reply to:</strong> <a href="16355.php">Ralph Castain: "Re: [OMPI users] srun and openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16359.php">Ralph Castain: "Re: [OMPI users] srun and openmpi"</a>
<li><strong>Reply:</strong> <a href="16359.php">Ralph Castain: "Re: [OMPI users] srun and openmpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 27, 2011, at 2:46 PM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; Actually, I understood you correctly. I'm just saying that I find no evidence in the code that we try three times before giving up. What I see is a single attempt to bind the port - if it fails, then we abort. There is no parameter to control that behavior.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So if the OS hasn't released the port by the time a new job starts on that node, then it will indeed abort if the job was unfortunately given the same port reservation.
</span><br>
<p>FWIW, the OS may be trying multiple times under the covers, but from as far as OMPI is concerned, we're just trying once.
<br>
<p>OMPI asks for whatever port the OS has open (i.e., we pass in 0 when asking for a specific port number, and the OS fills it in for us).  If it gives us back a port that isn't actually available, that would be really surprising.
<br>
<p>If you have a bajiollion short jobs running, I wonder if there's some kind of race condition occurring that some MPI processes are getting messages from the wrong mpirun.  And then things go downhill from there.  
<br>
<p>I can't immediately imagine how that would happen, but maybe there's some kind of weird race condition in there somewhere...?  We pass specific IP addresses and ports around on the command line, though, so I don't quite see how that would happen...
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16358.php">Sindhi, Waris             PW: "Re: [OMPI users] OpenMPI out of band TCP retry exceeded"</a>
<li><strong>Previous message:</strong> <a href="16356.php">Michael Di Domenico: "Re: [OMPI users] srun and openmpi"</a>
<li><strong>In reply to:</strong> <a href="16355.php">Ralph Castain: "Re: [OMPI users] srun and openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16359.php">Ralph Castain: "Re: [OMPI users] srun and openmpi"</a>
<li><strong>Reply:</strong> <a href="16359.php">Ralph Castain: "Re: [OMPI users] srun and openmpi"</a>
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
