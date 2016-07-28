<?
$subject_val = "[OMPI users] MPI_THREAD_MULTIPLE support not available (OpenMPI-1.4.4)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 16 19:17:40 2012" -->
<!-- isoreceived="20120516231740" -->
<!-- sent="Thu, 17 May 2012 00:17:34 +0100 (BST)" -->
<!-- isosent="20120516231734" -->
<!-- name="devendra rai" -->
<!-- email="rai.devendra_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_THREAD_MULTIPLE support not available (OpenMPI-1.4.4)" -->
<!-- id="1337210254.545.YahooMailNeo_at_web29602.mail.ird.yahoo.com" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] MPI_THREAD_MULTIPLE support not available (OpenMPI-1.4.4)<br>
<strong>From:</strong> devendra rai (<em>rai.devendra_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-16 19:17:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19299.php">Jeff Squyres: "Re: [OMPI users] MPI_SCAN"</a>
<li><strong>Previous message:</strong> <a href="19297.php">Jeff Squyres: "Re: [OMPI users] MPI-IO puzzlement"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19301.php">Jeff Squyres: "Re: [OMPI users] MPI_THREAD_MULTIPLE support not available (OpenMPI-1.4.4)"</a>
<li><strong>Reply:</strong> <a href="19301.php">Jeff Squyres: "Re: [OMPI users] MPI_THREAD_MULTIPLE support not available (OpenMPI-1.4.4)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Community,

I just finished building an OpenMPI version with custom configuration 
(1.4.4) on a server. I do not have root privileges on the server. 


The server already had a &quot;default&quot; version on OpenMPI, which seemed to be single-threaded:

ompi_info | grep Thread yields&#160; Thread support: posix (mpi: no, progress: no)

For my custom build, I have MPI thread support (precisely, support for MPI_THREAD_MULTIPLE):

/path/to/Custom/OpenMPI/bin/ompi_info | grep Thread yields Thread support: posix (mpi: yes, progress: no)


Thus, I run my application as:

/path/to/Custom/OpenMPI/bin/mpirun [options]...

In my application, I do make a check for whether I am getting MPI_THREAD_MULTIPLE support or not:

MPI_Init_thread(&amp;argc, &amp;argv, desired_thread_support,
&#160;&#160;&#160;&#160;&#160; &amp;provided_thread_support);/*Need provided_thread_support = desired_thread_support*/

&#160; printf (&quot;MPI: Requested thread support: %d, MPI thread support received: %d\n&quot;, MPI_THREAD_MULTIPLE, provided_thread_support);


When I run the application, I get:

MPI: Requested thread support: 3, MPI thread support received: 0


I have tried lot of things, and I am not sure why this is the case.


At the beginning of the shell script which contains /path/to/Custom/OpenMPI/bin/mpirun [options]..., I set the paths, and LD_LIBRARY_PATH:

PATH=/home/raid/private/Customizations_NODELETE/OpenMPI-1.4.4/bin:$PATH
export LD_LIBRARY_PATH=/home/raid/private/Customizations_NODELETE/gcc-4.6/lib64:/home/Morpheus/.CustomInstalledPrograms/OpenMPI-1.4.4/lib:/home/raid/private/Customizations_NODELETE/gcc-4.6/lib32


So, I think that the correct version of mpirun is being used. 


Can someone tell me why I cannot get MPI_THREAD_MULTIPLE support?

I have the same OpenMPI version on my notebook, which does provide me with MPI_THREAD_MULTIPLE. 


Thanks a lot.

Best,
Devendra
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19298/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19299.php">Jeff Squyres: "Re: [OMPI users] MPI_SCAN"</a>
<li><strong>Previous message:</strong> <a href="19297.php">Jeff Squyres: "Re: [OMPI users] MPI-IO puzzlement"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19301.php">Jeff Squyres: "Re: [OMPI users] MPI_THREAD_MULTIPLE support not available (OpenMPI-1.4.4)"</a>
<li><strong>Reply:</strong> <a href="19301.php">Jeff Squyres: "Re: [OMPI users] MPI_THREAD_MULTIPLE support not available (OpenMPI-1.4.4)"</a>
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
