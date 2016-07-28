<?
$subject_val = "Re: [OMPI users] -prefix option to mpirun.";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  4 11:49:56 2008" -->
<!-- isoreceived="20080304164956" -->
<!-- sent="Tue, 04 Mar 2008 16:49:50 +0000" -->
<!-- isosent="20080304164950" -->
<!-- name="Ashley Pittman" -->
<!-- email="apittman_at_[hidden]" -->
<!-- subject="Re: [OMPI users] -prefix option to mpirun." -->
<!-- id="1204649390.8828.4.camel_at_bruce.priv.wark.uk.streamline-computing.com" -->
<!-- inreplyto="47CD5EBE.50402_at_open-mpi.org" -->
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
<strong>From:</strong> Ashley Pittman (<em>apittman_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-04 11:49:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5131.php">Tim Prins: "Re: [OMPI users] -prefix option to mpirun."</a>
<li><strong>Previous message:</strong> <a href="5129.php">Doug Reeder: "Re: [OMPI users] -prefix option to mpirun."</a>
<li><strong>In reply to:</strong> <a href="5125.php">Tim Prins: "Re: [OMPI users] -prefix option to mpirun."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5131.php">Tim Prins: "Re: [OMPI users] -prefix option to mpirun."</a>
<li><strong>Reply:</strong> <a href="5131.php">Tim Prins: "Re: [OMPI users] -prefix option to mpirun."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
That looks like just what I need, thank you for the quick response.
<br>
<p>The closest I could find in the FAQ is this entry which has a broken
<br>
link to the second entry.
<br>
<p><a href="http://www.open-mpi.org/faq/?category=running#mpirun-prefix">http://www.open-mpi.org/faq/?category=running#mpirun-prefix</a>
<br>
<p><a href="http://www.open-mpi.org/faq/?category=mpi-aps#why-no-rpath">http://www.open-mpi.org/faq/?category=mpi-aps#why-no-rpath</a>
<br>
<p>I need to avoid modifying ld.so.conf or setting up aliases so openmpi
<br>
can be properly loaded and unloaded with the modules command.
<br>
<p>Ashley,
<br>
<p>On Tue, 2008-03-04 at 09:37 -0500, Tim Prins wrote:
<br>
<span class="quotelev1">&gt; Hi Ashley,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes, you can have this done automatically. Just use the 
</span><br>
<span class="quotelev1">&gt; '--enable-mpirun-prefix-by-default' option to configure.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm actually a bit surprised this is not in the FAQ. I'll have to add it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hope this helps,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Tim
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ashley Pittman wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hello,
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I work for medium sized UK based ISV and am packaging open-mpi so that
</span><br>
<span class="quotelev2">&gt; &gt; is can be made available as an option to our users, so far I've been
</span><br>
<span class="quotelev2">&gt; &gt; very impressed by how smoothly things have gone but I've got one problem
</span><br>
<span class="quotelev2">&gt; &gt; which doesn't seem to be covered by the FAQ.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; We install openmpi to /opt/openmpi-1.2.5 and are using the modules
</span><br>
<span class="quotelev2">&gt; &gt; command to select which mpi to use, the modules command correctly sets
</span><br>
<span class="quotelev2">&gt; &gt; PATH to pick up mpicc and mpirun on the head node however the issue
</span><br>
<span class="quotelev2">&gt; &gt; comes with running a job, users need to specify -prefix on the mpirun
</span><br>
<span class="quotelev2">&gt; &gt; command line.  Is there a way to specify this in the environment so I
</span><br>
<span class="quotelev2">&gt; &gt; could make it happen automatically as part of the modules environment?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I've searched the archives for this, the closest I can find is this
</span><br>
<span class="quotelev2">&gt; &gt; exchange in 2006, if I specify a full path to mpirun then it does the
</span><br>
<span class="quotelev2">&gt; &gt; right thing but is there a way to extend this functionality to the case
</span><br>
<span class="quotelev2">&gt; &gt; where mpirun is run from path?
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/community/lists/users/2006/01/0480.php">http://www.open-mpi.org/community/lists/users/2006/01/0480.php</a>
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Yours,  Ashley Pittman.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="5131.php">Tim Prins: "Re: [OMPI users] -prefix option to mpirun."</a>
<li><strong>Previous message:</strong> <a href="5129.php">Doug Reeder: "Re: [OMPI users] -prefix option to mpirun."</a>
<li><strong>In reply to:</strong> <a href="5125.php">Tim Prins: "Re: [OMPI users] -prefix option to mpirun."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5131.php">Tim Prins: "Re: [OMPI users] -prefix option to mpirun."</a>
<li><strong>Reply:</strong> <a href="5131.php">Tim Prins: "Re: [OMPI users] -prefix option to mpirun."</a>
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
