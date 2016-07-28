<?
$subject_val = "Re: [OMPI users] Newbie query - mpirun will not run if it's previously been killed with Control-C";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug  7 11:57:00 2014" -->
<!-- isoreceived="20140807155700" -->
<!-- sent="Thu, 7 Aug 2014 15:56:58 +0000" -->
<!-- isosent="20140807155658" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Newbie query - mpirun will not run if it's previously been killed with Control-C" -->
<!-- id="5BF6C34A-B769-44BF-8FAC-F926564343C5_at_cisco.com" -->
<!-- charset="Windows-1252" -->
<!-- inreplyto="2DA00190D12F2143B16E21D8FC3438AA538F0842_at_vime-mbx6.rdg.ac.uk" -->
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
<strong>Subject:</strong> Re: [OMPI users] Newbie query - mpirun will not run if it's previously been killed with Control-C<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-07 11:56:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24943.php">Gus Correa: "Re: [OMPI users] Newbie query - mpirun will not run if it's previously been killed with Control-C"</a>
<li><strong>Previous message:</strong> <a href="24941.php">Ralph Castain: "Re: [OMPI users] Newbie query - mpirun will not run if it's previously been killed with Control-C"</a>
<li><strong>In reply to:</strong> <a href="24938.php">Jane Lewis: "[OMPI users] Newbie query - mpirun will not run if it's previously been killed with Control-C"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Can you try upgrading?  1.6.x is super old.  1.8.1 is the current stable release.
<br>
<p><p>On Aug 7, 2014, at 11:16 AM, Jane Lewis &lt;j.p.lewis_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; This is a really simple problem (I hope) where I&#146;ve introduced MPI to a complex numerical model which I have to kill occasionally with Control-C as I don&#146;t want it running forever.
</span><br>
<span class="quotelev1">&gt; I have only used mpi_init(), mpi_comm_size(), mpi_comm_rank() and mpi_finalize()&#150; there are no send/receive calls going on at the moment &#150; and I only have two instances. My startup command is:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; #/bin/bash
</span><br>
<span class="quotelev1">&gt; /opt/openmpi/bin/mpirun  -np 2 -hostfile hostfile jules.exe
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; where hostfile has one entry : localhost
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; The result of terminating the process with Control-C at the command prompt from where I launched it, is that I am then unable to run it again. I get the
</span><br>
<span class="quotelev1">&gt; &#147;mpirun has exited due to process rank 0 with PID 10094 on node metclcv10.local exiting improperly. There are two reasons this could occur:&#133;&#148; error each time despite checking running processes for stragglers, closing my terminal, or changing node.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I have spent several hours searching for an answer to this, if it&#146;s already somewhere then please point me in the right direction.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; many thanks in advance
</span><br>
<span class="quotelev1">&gt; Jane
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; For info:
</span><br>
<span class="quotelev1">&gt; #ompi_info -v ompi full --parsable
</span><br>
<span class="quotelev1">&gt; package:Open MPI root_at_centos-6-3.localdomain Distribution
</span><br>
<span class="quotelev1">&gt; ompi:version:full:1.6.2
</span><br>
<span class="quotelev1">&gt; ompi:version:svn:r27344
</span><br>
<span class="quotelev1">&gt; ompi:version:release_date:Sep 18, 2012
</span><br>
<span class="quotelev1">&gt; orte:version:full:1.6.2
</span><br>
<span class="quotelev1">&gt; orte:version:svn:r27344
</span><br>
<span class="quotelev1">&gt; orte:version:release_date:Sep 18, 2012
</span><br>
<span class="quotelev1">&gt; opal:version:full:1.6.2
</span><br>
<span class="quotelev1">&gt; opal:version:svn:r27344
</span><br>
<span class="quotelev1">&gt; opal:version:release_date:Sep 18, 2012
</span><br>
<span class="quotelev1">&gt; mpi-api:version:full:2.1
</span><br>
<span class="quotelev1">&gt; ident:1.6.2
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I&#146;m using centos-6-3 and FORTRAN.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Jane Lewis
</span><br>
<span class="quotelev1">&gt; Deputy Technical Director, Reading e-Science Centre
</span><br>
<span class="quotelev1">&gt; Department of Meteorology
</span><br>
<span class="quotelev1">&gt; University of Reading, UK
</span><br>
<span class="quotelev1">&gt; Tel: +44 (0)118 378 5173
</span><br>
<span class="quotelev1">&gt; <a href="http://www.resc.reading.ac.uk">http://www.resc.reading.ac.uk</a>
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/08/24938.php">http://www.open-mpi.org/community/lists/users/2014/08/24938.php</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24943.php">Gus Correa: "Re: [OMPI users] Newbie query - mpirun will not run if it's previously been killed with Control-C"</a>
<li><strong>Previous message:</strong> <a href="24941.php">Ralph Castain: "Re: [OMPI users] Newbie query - mpirun will not run if it's previously been killed with Control-C"</a>
<li><strong>In reply to:</strong> <a href="24938.php">Jane Lewis: "[OMPI users] Newbie query - mpirun will not run if it's previously been killed with Control-C"</a>
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
