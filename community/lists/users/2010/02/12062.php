<?
$subject_val = "Re: [OMPI users] openmpi errors on ubuntu:no connectivity";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb  9 15:34:30 2010" -->
<!-- isoreceived="20100209203430" -->
<!-- sent="Tue, 9 Feb 2010 15:34:16 -0500" -->
<!-- isosent="20100209203416" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi errors on ubuntu:no connectivity" -->
<!-- id="1FFD00A5-5AA1-418C-9B5E-416FF26E691C_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="d592c6131002091117x3012e966nb65bd265e2e80d1a_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi errors on ubuntu:no connectivity<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-09 15:34:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12063.php">Mostyn Lewis: "Re: [OMPI users] Problems building Open MPI 1.4.1 with Pathscale"</a>
<li><strong>Previous message:</strong> <a href="12061.php">swagat mishra: "[OMPI users] openmpi errors on ubuntu:no connectivity"</a>
<li><strong>In reply to:</strong> <a href="12061.php">swagat mishra: "[OMPI users] openmpi errors on ubuntu:no connectivity"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Is there any chance you can upgrade to Open MPI v1.4?  1.2.x. is fairly ancient.
<br>
<p>Upgrading to 1.4.x will fix the &quot;unable to find any HCAs...&quot; warning message.
<br>
<p>For the a.out message, however, it is generally easiest to have the executable available on all nodes in the same filesystem location.  For small clusters, using NFS can be convenient here.  E.g., NFS share /home, and have your a.out under /home/mpi/a.out.  Then you can mpirun -np 2 --host a,b /home/mpi/a.out.
<br>
<p><p>On Feb 9, 2010, at 2:17 PM, swagat mishra wrote:
<br>
<p><span class="quotelev1">&gt; hello,
</span><br>
<span class="quotelev1">&gt; we have installed open mpi 1.2 using synaptic package manager in 2 machines running on ubuntu 8.10 and ubuntu 8.04.the hello.c program runs correctly,but connectivity_c.c program included in the openmpi tarball example fails when we it tries to communicate between both computers.also on the 8.04 version we get  an error of &quot;unable to find any HCA's will use another transport instead&quot;.on the 8.10 machine we get an error &quot;unable to find executable:a.out host:ip of node&quot;.
</span><br>
<span class="quotelev1">&gt; however the programs run without errors when we specify  only localhost in hostfile.we have set up PATH and LD_LIBRARY_PATH,but still get same errors. 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
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
<li><strong>Next message:</strong> <a href="12063.php">Mostyn Lewis: "Re: [OMPI users] Problems building Open MPI 1.4.1 with Pathscale"</a>
<li><strong>Previous message:</strong> <a href="12061.php">swagat mishra: "[OMPI users] openmpi errors on ubuntu:no connectivity"</a>
<li><strong>In reply to:</strong> <a href="12061.php">swagat mishra: "[OMPI users] openmpi errors on ubuntu:no connectivity"</a>
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
