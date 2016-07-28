<?
$subject_val = "Re: [OMPI users] compiling OpenMPI 1.8.4 on system with multiarched SLURM libs (Ubuntu 15.04 prerelease)";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Mar  1 10:31:19 2015" -->
<!-- isoreceived="20150301153119" -->
<!-- sent="Sun, 1 Mar 2015 07:31:15 -0800" -->
<!-- isosent="20150301153115" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] compiling OpenMPI 1.8.4 on system with multiarched SLURM libs (Ubuntu 15.04 prerelease)" -->
<!-- id="046EE0DE-E510-4CE1-A887-67F7EA6F29AC_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="20150226211913.GB5324_at_avicenna.ee.columbia.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] compiling OpenMPI 1.8.4 on system with multiarched SLURM libs (Ubuntu 15.04 prerelease)<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-03-01 10:31:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26421.php">Lloyd Brown: "[OMPI users] understanding BTL selection process"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/02/26419.php">Gus Correa: "Re: [OMPI users] mpirun fails across cluster"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/02/26407.php">Lev Givon: "Re: [OMPI users] compiling OpenMPI 1.8.4 on system with multiarched SLURM libs (Ubuntu 15.04 prerelease)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26425.php">Lev Givon: "Re: [OMPI users] compiling OpenMPI 1.8.4 on system with multiarched SLURM libs (Ubuntu 15.04 prerelease)"</a>
<li><strong>Reply:</strong> <a href="26425.php">Lev Givon: "Re: [OMPI users] compiling OpenMPI 1.8.4 on system with multiarched SLURM libs (Ubuntu 15.04 prerelease)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Could you please check the nightly 1.8 tarball? I added the pmi-libdir option. Having it default to look for x86 etc subdirs is a little too system-specific - if that ever becomes a broader standard way of installing things, then I'd be more inclined to add it to the default search algo.
<br>
<p><a href="http://www.open-mpi.org/nightly/v1.8/">http://www.open-mpi.org/nightly/v1.8/</a>
<br>
<p><p><span class="quotelev1">&gt; On Feb 26, 2015, at 1:19 PM, Lev Givon &lt;lev_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Received from Ralph Castain on Thu, Feb 26, 2015 at 04:14:05PM EST:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Feb 26, 2015, at 1:07 PM, Lev Givon &lt;lev_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I recently tried to build OpenMPI 1.8.4 on a daily release of what will
</span><br>
<span class="quotelev3">&gt;&gt;&gt; eventually become Ubuntu 15.04 (64-bit) with the --with-slurm and --with-pmi
</span><br>
<span class="quotelev3">&gt;&gt;&gt; options on.  I noticed that the libpmi.so.0.0.0 library in Ubuntu 15.04 is now
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in the multiarch location /usr/lib/x86_64-linux-gnu rather than /usr/lib; this
</span><br>
<span class="quotelev3">&gt;&gt;&gt; causes the configure script to complain that it can't find libpmi/libpmi2 in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/lib or /usr/lib64. Setting LDFLAGS=-L/usr/lib/x86_64-linux-gnu and/or
</span><br>
<span class="quotelev3">&gt;&gt;&gt; LD_LIBRARY_PATH=/usr/lib/x86_64-linux-gnu doesn't seem to help. How can I get
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure find the pmi library when it is in a multiarch location?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Looks like we don&#226;&#128;&#153;t have a separate pmi-libdir configure option, so it may not
</span><br>
<span class="quotelev2">&gt;&gt; work. I can add one to the master and set to pull it across to 1.8.5.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That would be great. Another possibility is to add /usr/lib/x86_64-linux-gnu and
</span><br>
<span class="quotelev1">&gt; /usr/lib/i386-linux-gnu to the default libdirs searched when testing for pmi.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Lev Givon
</span><br>
<span class="quotelev1">&gt; Bionet Group | Neurokernel Project
</span><br>
<span class="quotelev1">&gt; <a href="http://www.columbia.edu/~lev/">http://www.columbia.edu/~lev/</a>
</span><br>
<span class="quotelev1">&gt; <a href="http://lebedov.github.io/">http://lebedov.github.io/</a>
</span><br>
<span class="quotelev1">&gt; <a href="http://neurokernel.github.io/">http://neurokernel.github.io/</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/02/26407.php">http://www.open-mpi.org/community/lists/users/2015/02/26407.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26421.php">Lloyd Brown: "[OMPI users] understanding BTL selection process"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/02/26419.php">Gus Correa: "Re: [OMPI users] mpirun fails across cluster"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/02/26407.php">Lev Givon: "Re: [OMPI users] compiling OpenMPI 1.8.4 on system with multiarched SLURM libs (Ubuntu 15.04 prerelease)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26425.php">Lev Givon: "Re: [OMPI users] compiling OpenMPI 1.8.4 on system with multiarched SLURM libs (Ubuntu 15.04 prerelease)"</a>
<li><strong>Reply:</strong> <a href="26425.php">Lev Givon: "Re: [OMPI users] compiling OpenMPI 1.8.4 on system with multiarched SLURM libs (Ubuntu 15.04 prerelease)"</a>
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
