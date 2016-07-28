<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Mar 20 21:13:07 2006" -->
<!-- isoreceived="20060321021307" -->
<!-- sent="Mon, 20 Mar 2006 21:13:00 -0500" -->
<!-- isosent="20060321021300" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problems with OpenMPI-1.0.1 on SunOS 5.9; problems on heterogeneous cluster" -->
<!-- id="A18C3461-F4BC-4993-B610-5BDC564C60DD_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="f96085e03de0.3de0f96085e0_at_ucd.ie" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-03-20 21:13:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0892.php">Warner Yuen: "[OMPI users]  Mac OS X 10.4.5 and XGrid, Open-MPI V1.0.1"</a>
<li><strong>Previous message:</strong> <a href="0890.php">Brian Barrett: "Re: [OMPI users] mpif90 broken in recent tarballs of 1.1a1"</a>
<li><strong>In reply to:</strong> <a href="0870.php">Ravi Manumachu: "Re: [OMPI users] problems with OpenMPI-1.0.1 on SunOS 5.9; problems on heterogeneous cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0897.php">Ralph Castain: "Re: [OMPI users] problems with OpenMPI-1.0.1 on SunOS 5.9; problems on heterogeneous cluster"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 16, 2006, at 1:32 AM, Ravi Manumachu wrote:
<br>
<p><span class="quotelev1">&gt; I have installed OpenMPI-1.1a1r9260 on my SunOS machines. It has  
</span><br>
<span class="quotelev1">&gt; solved
</span><br>
<span class="quotelev1">&gt; the problems. However there is one more issue that I found in my  
</span><br>
<span class="quotelev1">&gt; testing
</span><br>
<span class="quotelev1">&gt; and that I failed to report. This concerns Linux machines too.
</span><br>
<p>&lt;snip&gt;
<br>
<p><span class="quotelev1">&gt; csultra06$ mpirun --hostfile hosts.txt --app mpiinit_appfile
</span><br>
<span class="quotelev1">&gt; csultra02:Hello world from 5
</span><br>
<span class="quotelev1">&gt; csultra06:Hello world from 0
</span><br>
<span class="quotelev1">&gt; csultra06:Hello world from 4
</span><br>
<span class="quotelev1">&gt; csultra02:Hello world from 1
</span><br>
<span class="quotelev1">&gt; csultra08:Hello world from 3
</span><br>
<span class="quotelev1">&gt; csultra05:Hello world from 2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The following two more statements are not printed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; csultra05:Hello world from 6
</span><br>
<span class="quotelev1">&gt; csultra08:Hello world from 7
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This behavior I observed on my Linux cluster too.
</span><br>
<p>Hi Ravi -
<br>
<p>Thanks for the bug report.  We've determined that there is definitely  
<br>
a problem with starting applications from an app context file on the  
<br>
trunk.  The issue appears to be a regression that slipped into our  
<br>
development trunk, but is not in our release branch.  I've passed the  
<br>
bug report on to the author of that code and he is looking into the  
<br>
issue, but I don't have a timeline to having the issue resolved.
<br>
<p>For good news, the issue with Solaris has been resolved in the v1.0  
<br>
release branch and the app context bug does not exist there.  So the  
<br>
upcoming Open MPI 1.0.2 release (and the currently available Open MPI  
<br>
1.0.2a10 alpha release) should work properly for your environment.   
<br>
Hopefully now that we have some Solaris users regularly testing Open  
<br>
MPI, your experiences with the release branches on Solaris should be  
<br>
much more stable :).
<br>
<p>Brian
<br>
<p><p><pre>
-- 
   Brian Barrett
   Open MPI developer
   <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0892.php">Warner Yuen: "[OMPI users]  Mac OS X 10.4.5 and XGrid, Open-MPI V1.0.1"</a>
<li><strong>Previous message:</strong> <a href="0890.php">Brian Barrett: "Re: [OMPI users] mpif90 broken in recent tarballs of 1.1a1"</a>
<li><strong>In reply to:</strong> <a href="0870.php">Ravi Manumachu: "Re: [OMPI users] problems with OpenMPI-1.0.1 on SunOS 5.9; problems on heterogeneous cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0897.php">Ralph Castain: "Re: [OMPI users] problems with OpenMPI-1.0.1 on SunOS 5.9; problems on heterogeneous cluster"</a>
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
