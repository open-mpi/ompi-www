<?
$subject_val = "Re: [OMPI users] problem compiling openmpi-1.8.1 on Mac running Mavericks";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Aug 10 15:38:13 2014" -->
<!-- isoreceived="20140810193813" -->
<!-- sent="Sun, 10 Aug 2014 12:37:32 -0700" -->
<!-- isosent="20140810193732" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problem compiling openmpi-1.8.1 on Mac running Mavericks" -->
<!-- id="532FC3B8-DB1F-4D8F-A19C-0D26D15D18E3_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="E9EFF36C-3E9F-4011-9681-BDC0F4E3AF09_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] problem compiling openmpi-1.8.1 on Mac running Mavericks<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-10 15:37:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24961.php">Lenny Verkhovsky: "[OMPI users] OpenMPI fails with np &gt; 65"</a>
<li><strong>Previous message:</strong> <a href="24959.php">Jorge D'Elia: "Re: [OMPI users] Open MPI 1.8.1: &quot;make all&quot; error: symbol	`Lhwloc1'	is already defined"</a>
<li><strong>In reply to:</strong> <a href="24954.php">Yang, David: "[OMPI users] problem compiling openmpi-1.8.1 on Mac running Mavericks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24970.php">Jeff Squyres (jsquyres): "Re: [OMPI users] problem compiling openmpi-1.8.1 on Mac running	Mavericks"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Odd - I just downloaded and built the 1.8.2rc3 tarball on Mavericks without trouble. I'll have to look at the log and see where our differences might lie
<br>
<p>Do you have Xcode installed? It's required even with the gcc compiler.
<br>
<p><p>On Aug 10, 2014, at 9:20 AM, Yang, David &lt;xyang_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have encountered a problem compiling openmpi 1.8.1 on a Mac running Mavericks. When I ran ./configure, I got the following error.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ============================================================================
</span><br>
<span class="quotelev1">&gt; == Configuring Open MPI
</span><br>
<span class="quotelev1">&gt; ============================================================================
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; *** Startup tests
</span><br>
<span class="quotelev1">&gt; checking build system type... x86_64-apple-darwin13.3.0
</span><br>
<span class="quotelev1">&gt; checking host system type... x86_64-apple-darwin13.3.0
</span><br>
<span class="quotelev1">&gt; checking target system type... x86_64-apple-darwin13.3.0
</span><br>
<span class="quotelev1">&gt; checking for gcc... gcc
</span><br>
<span class="quotelev1">&gt; checking whether the C compiler works... yes
</span><br>
<span class="quotelev1">&gt; checking for C compiler default output file name... a.out
</span><br>
<span class="quotelev1">&gt; checking for suffix of executables... 
</span><br>
<span class="quotelev1">&gt; checking whether we are cross compiling... configure: error: in `/Users/xyang/programs/openmpi-1.8.1':
</span><br>
<span class="quotelev1">&gt; configure: error: cannot run C compiled programs.
</span><br>
<span class="quotelev1">&gt; If you meant to cross compile, use `--host'.
</span><br>
<span class="quotelev1">&gt; See `config.log' for more details
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Could someone please help? Thanks!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; David
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Correspondence/TSPA
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/08/24954.php">http://www.open-mpi.org/community/lists/users/2014/08/24954.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24960/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24961.php">Lenny Verkhovsky: "[OMPI users] OpenMPI fails with np &gt; 65"</a>
<li><strong>Previous message:</strong> <a href="24959.php">Jorge D'Elia: "Re: [OMPI users] Open MPI 1.8.1: &quot;make all&quot; error: symbol	`Lhwloc1'	is already defined"</a>
<li><strong>In reply to:</strong> <a href="24954.php">Yang, David: "[OMPI users] problem compiling openmpi-1.8.1 on Mac running Mavericks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24970.php">Jeff Squyres (jsquyres): "Re: [OMPI users] problem compiling openmpi-1.8.1 on Mac running	Mavericks"</a>
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
