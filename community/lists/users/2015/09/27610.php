<?
$subject_val = "Re: [OMPI users] Problem with using MPI in a Python extension";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 17 11:44:58 2015" -->
<!-- isoreceived="20150917154458" -->
<!-- sent="Thu, 17 Sep 2015 17:44:54 +0200" -->
<!-- isosent="20150917154454" -->
<!-- name="Joel Hermanns" -->
<!-- email="joel.hermanns_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with using MPI in a Python extension" -->
<!-- id="6CD52BCF-8237-4545-981F-E0BFD701ACA3_at_gmail.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="BE2233F5-3E5B-459A-9E1B-E6258E980FF7_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem with using MPI in a Python extension<br>
<strong>From:</strong> Joel Hermanns (<em>joel.hermanns_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-17 11:44:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27611.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problem with using MPI in a Python extension"</a>
<li><strong>Previous message:</strong> <a href="27609.php">Nick Papior: "Re: [OMPI users] Problem with using MPI in a Python extension"</a>
<li><strong>In reply to:</strong> <a href="27608.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problem with using MPI in a Python extension"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27611.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problem with using MPI in a Python extension"</a>
<li><strong>Reply:</strong> <a href="27611.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problem with using MPI in a Python extension"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for the quick answer!
<br>
<p>I have a few questions now:
<br>
<p>1. Are there any downsides of using &#151;disable-dlopen?
<br>
2. Are there any other options? We might not be able to change MPI installation, when this is running on a supercomputer.
<br>
<p>Joel
<br>
On 17 Sep 2015, at 17:21, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Short version:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The easiest way to do this is to configure your Open MPI installation with --disable-dlopen.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; More detail:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Open MPI uses a bunch of plugins for its functionality.  When you dlopen libmpi in a private namespace (like Python does), and then libmpi tries to dlopen its plugins, the plugins can't find the symbols that they need in the main libmpi library (because they're in a private namespace).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The workaround is to build Open MPI with all of its plugins slurped up into the libmpi library itself (i.e., so that Open MPI doesn't have to dlopen its plugins).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Sep 17, 2015, at 11:08 AM, Joel Hermanns &lt;joel.hermanns_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi all,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I&#146;m currently trying to use MPI within a Python extension (written in C++). I was able to compile the extension and import it correctly, but as soon as I run the function, which contains the MPI code, I get the following error:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ```
</span><br>
<span class="quotelev2">&gt;&gt; [aia256:15841] mca: base: component_find: unable to open /pds/opt/openmpi-1.8.7/lib64/openmpi/mca_shmem_posix: /pds/opt/openmpi-1.8.7/lib64/openmpi/mca_shmem_posix.so: undefined symbol: opal_shmem_base_framework (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; [aia256:15841] mca: base: component_find: unable to open /pds/opt/openmpi-1.8.7/lib64/openmpi/mca_shmem_mmap: /pds/opt/openmpi-1.8.7/lib64/openmpi/mca_shmem_mmap.so: undefined symbol: opal_show_help (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; [aia256:15841] mca: base: component_find: unable to open /pds/opt/openmpi-1.8.7/lib64/openmpi/mca_shmem_sysv: /pds/opt/openmpi-1.8.7/lib64/openmpi/mca_shmem_sysv.so: undefined symbol: opal_show_help (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt; ```
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; (for the full message please have a look at [1])
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I put together a minimal example to reproduce this problem, which can be found at [1]. Essentially, it is an extension that consist of only one function. The function basically just runs MPI_Init and MPI_Finalize. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Maybe someone has some ideas what I could try to do.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks in advance!
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Best,
</span><br>
<span class="quotelev2">&gt;&gt; Joel
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; [1] <a href="https://github.com/jhedev/mpi_python">https://github.com/jhedev/mpi_python</a>
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/09/27607.php">http://www.open-mpi.org/community/lists/users/2015/09/27607.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/09/27608.php">http://www.open-mpi.org/community/lists/users/2015/09/27608.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27611.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problem with using MPI in a Python extension"</a>
<li><strong>Previous message:</strong> <a href="27609.php">Nick Papior: "Re: [OMPI users] Problem with using MPI in a Python extension"</a>
<li><strong>In reply to:</strong> <a href="27608.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problem with using MPI in a Python extension"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27611.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problem with using MPI in a Python extension"</a>
<li><strong>Reply:</strong> <a href="27611.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problem with using MPI in a Python extension"</a>
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
