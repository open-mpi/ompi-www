<?
$subject_val = "Re: [OMPI users] MPI_THREAD_MULTIPLE support not available (OpenMPI-1.4.4)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 17 19:08:09 2012" -->
<!-- isoreceived="20120517230809" -->
<!-- sent="Thu, 17 May 2012 19:07:48 -0400" -->
<!-- isosent="20120517230748" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_THREAD_MULTIPLE support not available (OpenMPI-1.4.4)" -->
<!-- id="CDBDE23C-264F-4DA1-85EA-D8515BF8EBA3_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="1337210254.545.YahooMailNeo_at_web29602.mail.ird.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_THREAD_MULTIPLE support not available (OpenMPI-1.4.4)<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-17 19:07:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19302.php">Rohan Deshpande: "Re: [OMPI users] MPI - memory sharing?"</a>
<li><strong>Previous message:</strong> <a href="19300.php">Jeff Squyres: "Re: [OMPI users] MPI - memory sharing?"</a>
<li><strong>In reply to:</strong> <a href="19298.php">devendra rai: "[OMPI users] MPI_THREAD_MULTIPLE support not available (OpenMPI-1.4.4)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You shouldn't use MPI_THREAD_MULTIPLE in Open MPI 1.4.x -- you should upgrade to 1.6.  THREAD_MULTIPLE is a bit more robust in the 1.6 series for the TCP BTL.  See the README for more info on THREAD_MULTIPLE.
<br>
<p><p>On May 16, 2012, at 7:17 PM, devendra rai wrote:
<br>
<p><span class="quotelev1">&gt; Hello Community,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I just finished building an OpenMPI version with custom configuration (1.4.4) on a server. I do not have root privileges on the server. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The server already had a &quot;default&quot; version on OpenMPI, which seemed to be single-threaded:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ompi_info | grep Thread yields  Thread support: posix (mpi: no, progress: no)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For my custom build, I have MPI thread support (precisely, support for MPI_THREAD_MULTIPLE):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /path/to/Custom/OpenMPI/bin/ompi_info | grep Thread yields Thread support: posix (mpi: yes, progress: no)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thus, I run my application as:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /path/to/Custom/OpenMPI/bin/mpirun [options]...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In my application, I do make a check for whether I am getting MPI_THREAD_MULTIPLE support or not:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MPI_Init_thread(&amp;argc, &amp;argv, desired_thread_support,
</span><br>
<span class="quotelev1">&gt;       &amp;provided_thread_support);/*Need provided_thread_support = desired_thread_support*/
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   printf (&quot;MPI: Requested thread support: %d, MPI thread support received: %d\n&quot;, MPI_THREAD_MULTIPLE, provided_thread_support);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When I run the application, I get:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MPI: Requested thread support: 3, MPI thread support received: 0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have tried lot of things, and I am not sure why this is the case.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; At the beginning of the shell script which contains /path/to/Custom/OpenMPI/bin/mpirun [options]..., I set the paths, and LD_LIBRARY_PATH:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; PATH=/home/raid/private/Customizations_NODELETE/OpenMPI-1.4.4/bin:$PATH
</span><br>
<span class="quotelev1">&gt; export LD_LIBRARY_PATH=/home/raid/private/Customizations_NODELETE/gcc-4.6/lib64:/home/Morpheus/.CustomInstalledPrograms/OpenMPI-1.4.4/lib:/home/raid/private/Customizations_NODELETE/gcc-4.6/lib32
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So, I think that the correct version of mpirun is being used. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can someone tell me why I cannot get MPI_THREAD_MULTIPLE support?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have the same OpenMPI version on my notebook, which does provide me with MPI_THREAD_MULTIPLE. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks a lot.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Devendra
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
<li><strong>Next message:</strong> <a href="19302.php">Rohan Deshpande: "Re: [OMPI users] MPI - memory sharing?"</a>
<li><strong>Previous message:</strong> <a href="19300.php">Jeff Squyres: "Re: [OMPI users] MPI - memory sharing?"</a>
<li><strong>In reply to:</strong> <a href="19298.php">devendra rai: "[OMPI users] MPI_THREAD_MULTIPLE support not available (OpenMPI-1.4.4)"</a>
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
