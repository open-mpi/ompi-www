<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Mar 26 16:06:58 2007" -->
<!-- isoreceived="20070326200658" -->
<!-- sent="Mon, 26 Mar 2007 14:06:13 -0600" -->
<!-- isosent="20070326200613" -->
<!-- name="Brian Barrett" -->
<!-- email="bbarrett_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Installation fails on Mac Os" -->
<!-- id="BF5740B8-5A87-442E-83A4-D1564DC58C2C_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="6c915be80703251020yd3303a0kfc0a998a28cd9010_at_mail.gmail.com" -->
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
<strong>From:</strong> Brian Barrett (<em>bbarrett_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-03-26 16:06:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2921.php">Brian Barrett: "Re: [OMPI users] Issues with Get/Put and IRecv"</a>
<li><strong>Previous message:</strong> <a href="2919.php">Jeff Squyres: "Re: [OMPI users] Open MPI 1.2 on new release of ParallelKnoppix"</a>
<li><strong>In reply to:</strong> <a href="2916.php">Daniele Avitabile: "[OMPI users] Installation fails on Mac Os"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2923.php">Daniele Avitabile: "Re: [OMPI users] Installation fails on Mac Os"</a>
<li><strong>Reply:</strong> <a href="2923.php">Daniele Avitabile: "Re: [OMPI users] Installation fails on Mac Os"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 25, 2007, at 11:20 AM, Daniele Avitabile wrote:
<br>
<p><span class="quotelev1">&gt; Hi everybody,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am trying to install open mpi on a Mac Os XServer, and the make  
</span><br>
<span class="quotelev1">&gt; all command exits with the error
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; openmpi_install_failed.tar.gz
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; as you can see from the output files I attached.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Some comments that may be helpful:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1) I am not root on the machine, but I have permissions to write  
</span><br>
<span class="quotelev1">&gt; in /usr/local/applications/, which is the directory in which I want  
</span><br>
<span class="quotelev1">&gt; to install openmpi.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2) In the same directory there is already an openmpi 1.1.2  
</span><br>
<span class="quotelev1">&gt; installation, with gcc-4.0.1 compilers. I want to install the  
</span><br>
<span class="quotelev1">&gt; current version of openmpi
</span><br>
<span class="quotelev1">&gt; and use a different compiler, namely the gcc compilers optimised  
</span><br>
<span class="quotelev1">&gt; for apple intel. They reside in the folder /usr/local/bin, and I  
</span><br>
<span class="quotelev1">&gt; pass them in the make command, as you can see from the attached file.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any idea as to why I receive that error?
</span><br>
<p>Short answer:
<br>
You need to either use the system-provided GCC or rebuild your  
<br>
version of GCC to use /usr/bin/libtool instead of /usr/bin/ld to link.
<br>
<p>Long answer:
<br>
There are some things that are a little complicated to do with Mach-O  
<br>
if you want library versioning and plug-ins and all that to work  
<br>
properly.  GNU Libtool (and therefore Open MPI) assume that if you  
<br>
are using GCC, it can emit options to the linker that are meant for / 
<br>
usr/bin/libtool, the library creation helper for OS X.  - 
<br>
compatibility_version is one of those things.  Your version of GCC is  
<br>
instead invoking /usr/bin/ld directly, so things are going wrong.
<br>
<p>You can still use the &quot;intel optimized&quot; version of GCC to compile  
<br>
your application, as long as it doesn't use GNU libtool, of course.   
<br>
Just use the system GCC to compile Open MPI and all will be fine.
<br>
<p><p>Hope this helps,
<br>
<p>Brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2921.php">Brian Barrett: "Re: [OMPI users] Issues with Get/Put and IRecv"</a>
<li><strong>Previous message:</strong> <a href="2919.php">Jeff Squyres: "Re: [OMPI users] Open MPI 1.2 on new release of ParallelKnoppix"</a>
<li><strong>In reply to:</strong> <a href="2916.php">Daniele Avitabile: "[OMPI users] Installation fails on Mac Os"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2923.php">Daniele Avitabile: "Re: [OMPI users] Installation fails on Mac Os"</a>
<li><strong>Reply:</strong> <a href="2923.php">Daniele Avitabile: "Re: [OMPI users] Installation fails on Mac Os"</a>
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
