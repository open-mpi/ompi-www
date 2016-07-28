<?
$subject_val = "Re: [OMPI users] After OS Update MPI_Init fails on one host";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 19 20:27:57 2013" -->
<!-- isoreceived="20130720002757" -->
<!-- sent="Sat, 20 Jul 2013 00:27:39 +0000" -->
<!-- isosent="20130720002739" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] After OS Update MPI_Init fails on one host" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F7305BF_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="51E9C68B.2000700_at_ohio.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] After OS Update MPI_Init fails on one host<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-19 20:27:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22352.php">Kevin H. Hobbs: "Re: [OMPI users] After OS Update MPI_Init fails on one host"</a>
<li><strong>Previous message:</strong> <a href="22350.php">Erik Nelson: "Re: [OMPI users] check point restart"</a>
<li><strong>In reply to:</strong> <a href="22349.php">Kevin H. Hobbs: "Re: [OMPI users] After OS Update MPI_Init fails on one host"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22352.php">Kevin H. Hobbs: "Re: [OMPI users] After OS Update MPI_Init fails on one host"</a>
<li><strong>Reply:</strong> <a href="22352.php">Kevin H. Hobbs: "Re: [OMPI users] After OS Update MPI_Init fails on one host"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Not offhand.  The error you're seeing *typically* indicates that you've got a mismatch of OMPI version somewhere.  Are you running on multiple machines with different Open MPI versions, perchance?
<br>
<p>If you're running only on a single machine, try completely uninstalling the Open MPI package, re-installing it, recompiling your trivial app, and see what happens.
<br>
<p>Also, you might want to check the output of &quot;mpicc yourapp.c --showme&quot; and see if it's pointing to the right libraries, etc.
<br>
<p><p>On Jul 19, 2013, at 7:06 PM, &quot;Kevin H. Hobbs&quot; &lt;hobbsk_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On 07/19/2013 05:11 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Are you sure you're using the same version of OMPI on this new OS?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; No, I'm sure I'm using a different version of Open MPI in Fedora
</span><br>
<span class="quotelev1">&gt; 18 from the one I was using in Fedora 17.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have only the Open MPI provided by the Fedora distribution.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; They typically distribute one in your default path, 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Fedora allows both Open MPI and MPICH to be installed at the same
</span><br>
<span class="quotelev1">&gt; time by using the module system.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Neither is in the default path, I have to put them in my path with :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  module load mpi/openmpi-x86_64
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; which is in my ~/.bashrc .
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; so I'd check to ensure that you really are using the version you think.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 'locate mpicc' and 'locate mpirun' only find one hit each so I'm
</span><br>
<span class="quotelev1">&gt; reasonably sure I'm running what I think I'm running.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That being said packaging bugs have happened before is there any
</span><br>
<span class="quotelev1">&gt; library, config file, or executable that you would suggest I look
</span><br>
<span class="quotelev1">&gt; for that might have come from a prior version of Open MPI or its
</span><br>
<span class="quotelev1">&gt; dependencies?
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
<li><strong>Next message:</strong> <a href="22352.php">Kevin H. Hobbs: "Re: [OMPI users] After OS Update MPI_Init fails on one host"</a>
<li><strong>Previous message:</strong> <a href="22350.php">Erik Nelson: "Re: [OMPI users] check point restart"</a>
<li><strong>In reply to:</strong> <a href="22349.php">Kevin H. Hobbs: "Re: [OMPI users] After OS Update MPI_Init fails on one host"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22352.php">Kevin H. Hobbs: "Re: [OMPI users] After OS Update MPI_Init fails on one host"</a>
<li><strong>Reply:</strong> <a href="22352.php">Kevin H. Hobbs: "Re: [OMPI users] After OS Update MPI_Init fails on one host"</a>
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
