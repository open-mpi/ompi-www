<?
$subject_val = "Re: [OMPI users] Fixing Intel Compiler and OpenMPI 1.6.X (or any version)";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jun 30 20:00:20 2013" -->
<!-- isoreceived="20130701000020" -->
<!-- sent="Sun, 30 Jun 2013 17:00:11 -0700" -->
<!-- isosent="20130701000011" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Fixing Intel Compiler and OpenMPI 1.6.X (or any version)" -->
<!-- id="A5421F27-6ED3-4960-8F31-A2A17B04A91A_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAATyho5oRaWEJdsjHPZs6D62XyMBBGeXw3AiV2i-rHOZ7SKpyw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Fixing Intel Compiler and OpenMPI 1.6.X (or any version)<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-06-30 20:00:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/07/22237.php">Justin Bronder: "[OMPI users] [PATCH] hooks: disable malloc override inside of Gentoo sandbox"</a>
<li><strong>Previous message:</strong> <a href="22235.php">Alan Wild: "[OMPI users] Fixing Intel Compiler and OpenMPI 1.6.X (or any version)"</a>
<li><strong>In reply to:</strong> <a href="22235.php">Alan Wild: "[OMPI users] Fixing Intel Compiler and OpenMPI 1.6.X (or any version)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Well, there are some other rather simple ways to do it too.
<br>
<p>1. Follow the FAQs and setup your remote login environment properly
<br>
<p><a href="http://www.open-mpi.org/faq/?category=running#adding-ompi-to-path">http://www.open-mpi.org/faq/?category=running#adding-ompi-to-path</a>
<br>
<p>2. add &quot;-x LD_LIBRARY_PATH&quot; to your mpirun cmd line, as explained in this FAQ
<br>
<p><a href="http://www.open-mpi.org/faq/?category=running#mpirun-options">http://www.open-mpi.org/faq/?category=running#mpirun-options</a>
<br>
<p>If you are using ssh/rsh for your launch, then #2 will resolve the problem as we set the LD_LIBRARY_PATH in ssh prior to actually starting the orted. If you are launching via some other resource manager, then #2 will indeed not solve the problem as there is no way to preset the environment. However, most RMs (including Torque, Slurm, LSF, and SGE) allow passing of the environment if configured to do so - you might check with your sys admin to see if they will do it for you.
<br>
<p><p><p>On Jun 30, 2013, at 12:52 PM, Alan Wild &lt;alan_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I'm surprised that there are users still reporting issues getting this to work, but as I'm still seeing notes in the digest I wanted to share (what I believe the issue is) and how I've fixed it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If you don't take special measures, OpenMPI will be dynamically linked and have runtime dependencies on several of Intel's .so files.  However, passing LD_LIBRARY_PATH has an option on mpirun is often not sufficient because the orted process itself has these dyanmic dependencies... so when you invoke mpirun, it fires up and launches orted on the remote hosts (with the intention of passing LD_LIBRARY_PATH or whatever to the remote process but the remote process immediately fails because it cannot resolve its dependencies (and LD_LIBRARY_PATH is never setup on the far side).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So I see two options:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1) linking orted statically.  (Not sure if I've ever done this)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2) Passing an rpath in your openmpi link options so that oreted can resolve its own dependencies without needing an LD_LIBRARY_PATH
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You can do #2 by using something similar to the following on your configure line
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/path/to/where/to/install/openmpi LDFLAGS=&quot;-Wl,--enable-new-dtags -Wl,-rpath,/path/to/intel/compiler/lib_directory&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Alan
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; alan_at_[hidden] <a href="http://humbleville.blogspot.com">http://humbleville.blogspot.com</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22236/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/07/22237.php">Justin Bronder: "[OMPI users] [PATCH] hooks: disable malloc override inside of Gentoo sandbox"</a>
<li><strong>Previous message:</strong> <a href="22235.php">Alan Wild: "[OMPI users] Fixing Intel Compiler and OpenMPI 1.6.X (or any version)"</a>
<li><strong>In reply to:</strong> <a href="22235.php">Alan Wild: "[OMPI users] Fixing Intel Compiler and OpenMPI 1.6.X (or any version)"</a>
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
