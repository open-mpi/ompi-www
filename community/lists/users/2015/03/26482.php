<?
$subject_val = "Re: [OMPI users] compiling OpenMPI 1.8.4 on system with multiarched SLURM libs (Ubuntu 15.04 prerelease)";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 16 15:54:24 2015" -->
<!-- isoreceived="20150316195424" -->
<!-- sent="Mon, 16 Mar 2015 12:54:19 -0700" -->
<!-- isosent="20150316195419" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] compiling OpenMPI 1.8.4 on system with multiarched SLURM libs (Ubuntu 15.04 prerelease)" -->
<!-- id="FB107A00-E3A2-45ED-B2F3-CF2404CA1B9F_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="47DDBF09-DBFE-415B-B07D-CD4A0B487EDA_at_open-mpi.org" -->
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
<strong>Date:</strong> 2015-03-16 15:54:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26483.php">Tobias Kloeffel: "Re: [OMPI users] Questions regarding xpmem"</a>
<li><strong>Previous message:</strong> <a href="26481.php">Davide Cesari: "Re: [OMPI users] Custom MPI_DATA_TYPE with allocatable arrays in fortran derived data type"</a>
<li><strong>In reply to:</strong> <a href="26427.php">Ralph Castain: "Re: [OMPI users] compiling OpenMPI 1.8.4 on system with multiarched SLURM libs (Ubuntu 15.04 prerelease)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26530.php">Lev Givon: "Re: [OMPI users] compiling OpenMPI 1.8.4 on system with multiarched SLURM libs (Ubuntu 15.04 prerelease)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This is now in the nightly tarball - can you see if this meets the need?
<br>
<p><p><span class="quotelev1">&gt; On Mar 4, 2015, at 7:03 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Rats - the backport missed that part. I&#226;&#128;&#153;ll fix it. Thanks!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Mar 3, 2015, at 9:41 AM, Lev Givon &lt;lev_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Received from Ralph Castain on Sun, Mar 01, 2015 at 10:31:15AM EST:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Feb 26, 2015, at 1:19 PM, Lev Givon &lt;lev_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Received from Ralph Castain on Thu, Feb 26, 2015 at 04:14:05PM EST:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On Feb 26, 2015, at 1:07 PM, Lev Givon &lt;lev_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I recently tried to build OpenMPI 1.8.4 on a daily release of what will
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; eventually become Ubuntu 15.04 (64-bit) with the --with-slurm and --with-pmi
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; options on.  I noticed that the libpmi.so.0.0.0 library in Ubuntu 15.04 is now
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; in the multiarch location /usr/lib/x86_64-linux-gnu rather than /usr/lib; this
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; causes the configure script to complain that it can't find libpmi/libpmi2 in
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; /usr/lib or /usr/lib64. Setting LDFLAGS=-L/usr/lib/x86_64-linux-gnu and/or
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; LD_LIBRARY_PATH=/usr/lib/x86_64-linux-gnu doesn't seem to help. How can I get
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; configure find the pmi library when it is in a multiarch location?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Looks like we don&#226;&#128;&#153;t have a separate pmi-libdir configure option, so it may not
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; work. I can add one to the master and set to pull it across to 1.8.5.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; That would be great. Another possibility is to add /usr/lib/x86_64-linux-gnu and
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /usr/lib/i386-linux-gnu to the default libdirs searched when testing for pmi.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Could you please check the nightly 1.8 tarball? I added the pmi-libdir
</span><br>
<span class="quotelev3">&gt;&gt;&gt; option. Having it default to look for x86 etc subdirs is a little too
</span><br>
<span class="quotelev3">&gt;&gt;&gt; system-specific - if that ever becomes a broader standard way of installing
</span><br>
<span class="quotelev3">&gt;&gt;&gt; things, then I'd be more inclined to add it to the default search algo.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/nightly/v1.8/">http://www.open-mpi.org/nightly/v1.8/</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The libpmi library file in Ubuntu 15.04 is in /usr/lib/x86_64-linux-gnu, not
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib/x86_64-linux-gnu/lib or /usr/lib/x86_64-linux-gnu/lib64. Could the
</span><br>
<span class="quotelev2">&gt;&gt; pmi-libdir option be modified to use the specified directory as-is rather than
</span><br>
<span class="quotelev2">&gt;&gt; appending lib or lib64 to it?
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Lev Givon
</span><br>
<span class="quotelev2">&gt;&gt; Bionet Group | Neurokernel Project
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.columbia.edu/~lev/">http://www.columbia.edu/~lev/</a>
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://lebedov.github.io/">http://lebedov.github.io/</a>
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://neurokernel.github.io/">http://neurokernel.github.io/</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/03/26425.php">http://www.open-mpi.org/community/lists/users/2015/03/26425.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26483.php">Tobias Kloeffel: "Re: [OMPI users] Questions regarding xpmem"</a>
<li><strong>Previous message:</strong> <a href="26481.php">Davide Cesari: "Re: [OMPI users] Custom MPI_DATA_TYPE with allocatable arrays in fortran derived data type"</a>
<li><strong>In reply to:</strong> <a href="26427.php">Ralph Castain: "Re: [OMPI users] compiling OpenMPI 1.8.4 on system with multiarched SLURM libs (Ubuntu 15.04 prerelease)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26530.php">Lev Givon: "Re: [OMPI users] compiling OpenMPI 1.8.4 on system with multiarched SLURM libs (Ubuntu 15.04 prerelease)"</a>
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
