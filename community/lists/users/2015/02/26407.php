<?
$subject_val = "Re: [OMPI users] compiling OpenMPI 1.8.4 on system with multiarched SLURM libs (Ubuntu 15.04 prerelease)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 26 16:19:17 2015" -->
<!-- isoreceived="20150226211917" -->
<!-- sent="Thu, 26 Feb 2015 16:19:13 -0500" -->
<!-- isosent="20150226211913" -->
<!-- name="Lev Givon" -->
<!-- email="lev_at_[hidden]" -->
<!-- subject="Re: [OMPI users] compiling OpenMPI 1.8.4 on system with multiarched SLURM libs (Ubuntu 15.04 prerelease)" -->
<!-- id="20150226211913.GB5324_at_avicenna.ee.columbia.edu" -->
<!-- charset="utf-8" -->
<!-- inreplyto="9F5B16B9-46C6-4EF5-BDF1-79B4840263EC_at_open-mpi.org" -->
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
<strong>From:</strong> Lev Givon (<em>lev_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-26 16:19:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26408.php">Sasso, John (GE Power & Water, Non-GE): "[OMPI users] LAM/MPI -&gt; OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="26406.php">Ralph Castain: "Re: [OMPI users] compiling OpenMPI 1.8.4 on system with multiarched SLURM libs (Ubuntu 15.04 prerelease)"</a>
<li><strong>In reply to:</strong> <a href="26406.php">Ralph Castain: "Re: [OMPI users] compiling OpenMPI 1.8.4 on system with multiarched SLURM libs (Ubuntu 15.04 prerelease)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/03/26420.php">Ralph Castain: "Re: [OMPI users] compiling OpenMPI 1.8.4 on system with multiarched SLURM libs (Ubuntu 15.04 prerelease)"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/03/26420.php">Ralph Castain: "Re: [OMPI users] compiling OpenMPI 1.8.4 on system with multiarched SLURM libs (Ubuntu 15.04 prerelease)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Received from Ralph Castain on Thu, Feb 26, 2015 at 04:14:05PM EST:
<br>
<span class="quotelev2">&gt; &gt; On Feb 26, 2015, at 1:07 PM, Lev Givon &lt;lev_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I recently tried to build OpenMPI 1.8.4 on a daily release of what will
</span><br>
<span class="quotelev2">&gt; &gt; eventually become Ubuntu 15.04 (64-bit) with the --with-slurm and --with-pmi
</span><br>
<span class="quotelev2">&gt; &gt; options on.  I noticed that the libpmi.so.0.0.0 library in Ubuntu 15.04 is now
</span><br>
<span class="quotelev2">&gt; &gt; in the multiarch location /usr/lib/x86_64-linux-gnu rather than /usr/lib; this
</span><br>
<span class="quotelev2">&gt; &gt; causes the configure script to complain that it can't find libpmi/libpmi2 in
</span><br>
<span class="quotelev2">&gt; &gt; /usr/lib or /usr/lib64. Setting LDFLAGS=-L/usr/lib/x86_64-linux-gnu and/or
</span><br>
<span class="quotelev2">&gt; &gt; LD_LIBRARY_PATH=/usr/lib/x86_64-linux-gnu doesn't seem to help. How can I get
</span><br>
<span class="quotelev2">&gt; &gt; configure find the pmi library when it is in a multiarch location?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Looks like we don&#226;&#128;&#153;t have a separate pmi-libdir configure option, so it may not
</span><br>
<span class="quotelev1">&gt; work. I can add one to the master and set to pull it across to 1.8.5.
</span><br>
<p>That would be great. Another possibility is to add /usr/lib/x86_64-linux-gnu and
<br>
/usr/lib/i386-linux-gnu to the default libdirs searched when testing for pmi.
<br>
<p>Thanks,
<br>
<pre>
-- 
Lev Givon
Bionet Group | Neurokernel Project
<a href="http://www.columbia.edu/~lev/">http://www.columbia.edu/~lev/</a>
<a href="http://lebedov.github.io/">http://lebedov.github.io/</a>
<a href="http://neurokernel.github.io/">http://neurokernel.github.io/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26408.php">Sasso, John (GE Power & Water, Non-GE): "[OMPI users] LAM/MPI -&gt; OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="26406.php">Ralph Castain: "Re: [OMPI users] compiling OpenMPI 1.8.4 on system with multiarched SLURM libs (Ubuntu 15.04 prerelease)"</a>
<li><strong>In reply to:</strong> <a href="26406.php">Ralph Castain: "Re: [OMPI users] compiling OpenMPI 1.8.4 on system with multiarched SLURM libs (Ubuntu 15.04 prerelease)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/03/26420.php">Ralph Castain: "Re: [OMPI users] compiling OpenMPI 1.8.4 on system with multiarched SLURM libs (Ubuntu 15.04 prerelease)"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/03/26420.php">Ralph Castain: "Re: [OMPI users] compiling OpenMPI 1.8.4 on system with multiarched SLURM libs (Ubuntu 15.04 prerelease)"</a>
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
