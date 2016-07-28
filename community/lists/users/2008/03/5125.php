<?
$subject_val = "Re: [OMPI users] -prefix option to mpirun.";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  4 09:38:00 2008" -->
<!-- isoreceived="20080304143800" -->
<!-- sent="Tue, 04 Mar 2008 09:37:50 -0500" -->
<!-- isosent="20080304143750" -->
<!-- name="Tim Prins" -->
<!-- email="tprins_at_[hidden]" -->
<!-- subject="Re: [OMPI users] -prefix option to mpirun." -->
<!-- id="47CD5EBE.50402_at_open-mpi.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1204640900.6621.20.camel_at_bruce.priv.wark.uk.streamline-computing.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] -prefix option to mpirun.<br>
<strong>From:</strong> Tim Prins (<em>tprins_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-04 09:37:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5126.php">Chase Latta: "[OMPI users] Problems Compiling gfortran on mac os-x 10.5.3"</a>
<li><strong>Previous message:</strong> <a href="5124.php">Ashley Pittman: "[OMPI users] -prefix option to mpirun."</a>
<li><strong>In reply to:</strong> <a href="5124.php">Ashley Pittman: "[OMPI users] -prefix option to mpirun."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5130.php">Ashley Pittman: "Re: [OMPI users] -prefix option to mpirun."</a>
<li><strong>Reply:</strong> <a href="5130.php">Ashley Pittman: "Re: [OMPI users] -prefix option to mpirun."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ashley,
<br>
<p>Yes, you can have this done automatically. Just use the 
<br>
'--enable-mpirun-prefix-by-default' option to configure.
<br>
<p>I'm actually a bit surprised this is not in the FAQ. I'll have to add it.
<br>
<p>Hope this helps,
<br>
<p>Tim
<br>
<p>Ashley Pittman wrote:
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I work for medium sized UK based ISV and am packaging open-mpi so that
</span><br>
<span class="quotelev1">&gt; is can be made available as an option to our users, so far I've been
</span><br>
<span class="quotelev1">&gt; very impressed by how smoothly things have gone but I've got one problem
</span><br>
<span class="quotelev1">&gt; which doesn't seem to be covered by the FAQ.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We install openmpi to /opt/openmpi-1.2.5 and are using the modules
</span><br>
<span class="quotelev1">&gt; command to select which mpi to use, the modules command correctly sets
</span><br>
<span class="quotelev1">&gt; PATH to pick up mpicc and mpirun on the head node however the issue
</span><br>
<span class="quotelev1">&gt; comes with running a job, users need to specify -prefix on the mpirun
</span><br>
<span class="quotelev1">&gt; command line.  Is there a way to specify this in the environment so I
</span><br>
<span class="quotelev1">&gt; could make it happen automatically as part of the modules environment?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've searched the archives for this, the closest I can find is this
</span><br>
<span class="quotelev1">&gt; exchange in 2006, if I specify a full path to mpirun then it does the
</span><br>
<span class="quotelev1">&gt; right thing but is there a way to extend this functionality to the case
</span><br>
<span class="quotelev1">&gt; where mpirun is run from path?
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2006/01/0480.php">http://www.open-mpi.org/community/lists/users/2006/01/0480.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yours,  Ashley Pittman.
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
<li><strong>Next message:</strong> <a href="5126.php">Chase Latta: "[OMPI users] Problems Compiling gfortran on mac os-x 10.5.3"</a>
<li><strong>Previous message:</strong> <a href="5124.php">Ashley Pittman: "[OMPI users] -prefix option to mpirun."</a>
<li><strong>In reply to:</strong> <a href="5124.php">Ashley Pittman: "[OMPI users] -prefix option to mpirun."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5130.php">Ashley Pittman: "Re: [OMPI users] -prefix option to mpirun."</a>
<li><strong>Reply:</strong> <a href="5130.php">Ashley Pittman: "Re: [OMPI users] -prefix option to mpirun."</a>
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
