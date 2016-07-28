<?
$subject_val = "Re: [OMPI users] some mpi processes &quot;disappear&quot; on a cluster of servers";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep  7 18:12:29 2012" -->
<!-- isoreceived="20120907221229" -->
<!-- sent="Fri, 07 Sep 2012 18:12:20 -0400" -->
<!-- isosent="20120907221220" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] some mpi processes &amp;quot;disappear&amp;quot; on a cluster of servers" -->
<!-- id="504A7144.1000108_at_ldeo.columbia.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="09709488-9458-432C-8971-1090942552E0_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] some mpi processes &quot;disappear&quot; on a cluster of servers<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-07 18:12:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20156.php">Jeff Squyres: "Re: [OMPI users] MPI_Allreduce fail (minGW gfortran + OpenMPI 1.6.1)"</a>
<li><strong>Previous message:</strong> <a href="20154.php">Gus Correa: "Re: [OMPI users] some mpi processes &quot;disappear&quot; on a cluster of servers"</a>
<li><strong>In reply to:</strong> <a href="20151.php">Jeff Squyres: "Re: [OMPI users] some mpi processes &quot;disappear&quot; on a cluster of servers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20167.php">Andrea Negri: "Re: [OMPI users] some mpi processes &quot;disappear&quot; on a cluster of servers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 09/07/2012 08:02 AM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Sep 7, 2012, at 5:58 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Also look for hardware errors.  Perhaps you have some bad RAM somewhere.  Is it always the same node that crashes?  And so on.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Another thought on hardware errors... I actually have seen bad RAM cause spontaneous reboots with no Linux warnings.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Do you have any hardware diagnostics from your server
</span><br>
<span class="quotelev1">&gt; vendor that you can run?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>If you don't have a vendor provided diagnostic tool,
<br>
you or your sys admin could try Advanced Clustering &quot;breakin&quot;:
<br>
<p><a href="http://www.advancedclustering.com/our-software/view-category.html">http://www.advancedclustering.com/our-software/view-category.html</a>
<br>
<p>Download the ISO version, burn a CD, put in the node CD drive,
<br>
assuming it has one, reboot, chose breakin in the menu options.
<br>
If there is no CD drive, there is an alternative with network boot,
<br>
although more involved.
<br>
<p>I hope it helps,
<br>
Gus Correa
<br>
<p><span class="quotelev1">&gt; A simple way to test your RAM (it's not completely comprehensive, but it does check for a surprisingly wide array of memory issues) is to do something like this (pseudocode):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; size_t i, size, increment;
</span><br>
<span class="quotelev1">&gt; increment = 1GB;
</span><br>
<span class="quotelev1">&gt; size = 1GB;
</span><br>
<span class="quotelev1">&gt; int *ptr;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; // Find the biggest amount of memory that you can malloc
</span><br>
<span class="quotelev1">&gt; while (increment&gt;= 1024) {
</span><br>
<span class="quotelev1">&gt;      ptr = malloc(size);
</span><br>
<span class="quotelev1">&gt;      if (NULL != ptr) {
</span><br>
<span class="quotelev1">&gt;           free(ptr);
</span><br>
<span class="quotelev1">&gt;           size += increment;
</span><br>
<span class="quotelev1">&gt;      } else {
</span><br>
<span class="quotelev1">&gt;           size -= increment;
</span><br>
<span class="quotelev1">&gt;           increment /= 2;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; printf(&quot;I can malloc %lu bytes\n&quot;, size);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; // Malloc that huge chunk of memory
</span><br>
<span class="quotelev1">&gt; ptr = malloc(size);
</span><br>
<span class="quotelev1">&gt; for (i = 0; i&lt;  size / sizeof(int); ++i, ++ptr) {
</span><br>
<span class="quotelev1">&gt;      *ptr = 37;
</span><br>
<span class="quotelev1">&gt;      if (*ptr != 37) {
</span><br>
<span class="quotelev1">&gt;          printf(&quot;Readback error!\n&quot;);
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; printf(&quot;All done\n&quot;);
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Depending on how much memory you have,
</span><br>
that might take a little while to run
<br>
(all the memory has to be paged in, etc.).
<br>
You might want to add a status output to show progress,
<br>
and/or write/read a page at a time for better efficiency, etc.
<br>
But you get the idea.
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hope that helps.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20156.php">Jeff Squyres: "Re: [OMPI users] MPI_Allreduce fail (minGW gfortran + OpenMPI 1.6.1)"</a>
<li><strong>Previous message:</strong> <a href="20154.php">Gus Correa: "Re: [OMPI users] some mpi processes &quot;disappear&quot; on a cluster of servers"</a>
<li><strong>In reply to:</strong> <a href="20151.php">Jeff Squyres: "Re: [OMPI users] some mpi processes &quot;disappear&quot; on a cluster of servers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20167.php">Andrea Negri: "Re: [OMPI users] some mpi processes &quot;disappear&quot; on a cluster of servers"</a>
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
