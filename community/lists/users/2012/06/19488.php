<?
$subject_val = "Re: [OMPI users] RE :  Bug when mixing sent types in version 1.6";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun  8 12:22:42 2012" -->
<!-- isoreceived="20120608162242" -->
<!-- sent="Fri, 8 Jun 2012 09:22:37 -0700" -->
<!-- isosent="20120608162237" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] RE :  Bug when mixing sent types in version 1.6" -->
<!-- id="7D1DE29B-B3FE-4574-B06A-537ECFA5EF85_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="26910_1339170684_4FD21F7C_26910_7562_1_49CF97100DDD4B4A9C4DC89905CA59A310187E5E1F_at_THSONEA01CMS07P.one.grp" -->
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
<strong>Subject:</strong> Re: [OMPI users] RE :  Bug when mixing sent types in version 1.6<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-08 12:22:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19489.php">Daniels, Marcus G: "[OMPI users] openib_reg_mr"</a>
<li><strong>Previous message:</strong> <a href="19487.php">BOUVIER Benjamin: "[OMPI users] RE :  Bug when mixing sent types in version 1.6"</a>
<li><strong>In reply to:</strong> <a href="19487.php">BOUVIER Benjamin: "[OMPI users] RE :  Bug when mixing sent types in version 1.6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19491.php">BOUVIER Benjamin: "[OMPI users] RE : RE : Bug when mixing sent types in version 1.6"</a>
<li><strong>Reply:</strong> <a href="19491.php">BOUVIER Benjamin: "[OMPI users] RE : RE : Bug when mixing sent types in version 1.6"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 8, 2012, at 8:51 AM, BOUVIER Benjamin wrote:
<br>
<p><span class="quotelev1">&gt; I have downloaded the Netpipe benchmarks suite, launched `make mpi` and launched with mpirun the resulting executable.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here is an interesting fact : by launching this executable on 2 nodes, it works ; on 3 nodes, it blocks, I guess on connect. 
</span><br>
<p>Netpipe is only intended for 2 processes -- I'm actually not sure offhand what happens if you run it with 3...
<br>
<p><span class="quotelev1">&gt; Each process is running on a core, on each machine, using 100% of one CPU ; but nothing else happens. I have to kill the program to quit. 
</span><br>
<p>This is to be expected.  OMPI polls aggressively for network progress (i.e., consumes 100% of a core).
<br>
<p><span class="quotelev1">&gt; Setting the option -mca btl_base_verbose to 30 shows me that the last thing tried by each node is to connect to other nodes.
</span><br>
<p><p>We don't output verbose messages for MPI traffic, so the lack of messages there doesn't mean anything.
<br>
<p>I'd guess that running net pipe with 3 procs may be undefined.
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
<li><strong>Next message:</strong> <a href="19489.php">Daniels, Marcus G: "[OMPI users] openib_reg_mr"</a>
<li><strong>Previous message:</strong> <a href="19487.php">BOUVIER Benjamin: "[OMPI users] RE :  Bug when mixing sent types in version 1.6"</a>
<li><strong>In reply to:</strong> <a href="19487.php">BOUVIER Benjamin: "[OMPI users] RE :  Bug when mixing sent types in version 1.6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19491.php">BOUVIER Benjamin: "[OMPI users] RE : RE : Bug when mixing sent types in version 1.6"</a>
<li><strong>Reply:</strong> <a href="19491.php">BOUVIER Benjamin: "[OMPI users] RE : RE : Bug when mixing sent types in version 1.6"</a>
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
