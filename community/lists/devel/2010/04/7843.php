<?
$subject_val = "Re: [OMPI devel] System V Shared Memory for Open MPI: Request for	Community Input and Testing";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 29 15:32:46 2010" -->
<!-- isoreceived="20100429193246" -->
<!-- sent="Thu, 29 Apr 2010 15:32:41 -0400" -->
<!-- isosent="20100429193241" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] System V Shared Memory for Open MPI: Request for	Community Input and Testing" -->
<!-- id="20100429193240.GA30566_at_oracle.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="0DB0E148-424D-4E53-A5D2-FA4611059877_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] System V Shared Memory for Open MPI: Request for	Community Input and Testing<br>
<strong>From:</strong> Ethan Mallove (<em>ethan.mallove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-29 15:32:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7844.php">Ralph Castain: "Re: [OMPI devel] bug with /bin/sh and /bin/ksh"</a>
<li><strong>Previous message:</strong> <a href="7842.php">Jeff Squyres: "[OMPI devel] 1.4.2rc3"</a>
<li><strong>In reply to:</strong> <a href="7834.php">Samuel K. Gutierrez: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request for Community Input and Testing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7845.php">Samuel K. Gutierrez: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request for	Community Input and Testing"</a>
<li><strong>Reply:</strong> <a href="7845.php">Samuel K. Gutierrez: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request for	Community Input and Testing"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Samuel,
<br>
<p>I'm trying to run off your HG clone, but I'm seeing issues with
<br>
c_hello, e.g.,
<br>
<p>&nbsp;&nbsp;$ mpirun -mca mpi_common_sm sysv --mca btl self,sm,tcp --host burl-ct-v440-2,burl-ct-v440-2 -np 2 ./c_hello
<br>
&nbsp;&nbsp;--------------------------------------------------------------------------
<br>
&nbsp;&nbsp;A system call failed during shared memory initialization that should
<br>
&nbsp;&nbsp;not have.  It is likely that your MPI job will now either abort or
<br>
&nbsp;&nbsp;experience performance degradation.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;Local host:  burl-ct-v440-2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;System call: shmat(2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Process:     [[43408,1],1]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Error:       Invalid argument (errno 22)
<br>
&nbsp;&nbsp;--------------------------------------------------------------------------
<br>
&nbsp;&nbsp;^Cmpirun: killing job...
<br>
<p>&nbsp;&nbsp;$ uname -a
<br>
&nbsp;&nbsp;SunOS burl-ct-v440-2 5.10 Generic_118833-33 sun4u sparc SUNW,Sun-Fire-V440
<br>
<p>The same test works okay if I s/sysv/mmap/.
<br>
<p>Regards,
<br>
Ethan
<br>
<p><p>On Wed, Apr/28/2010 07:16:12AM, Samuel K. Gutierrez wrote:
<br>
<span class="quotelev1">&gt;  Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Faster component initialization/finalization times is one of the main 
</span><br>
<span class="quotelev1">&gt;  motivating factors of this work.  The general idea is to get away from 
</span><br>
<span class="quotelev1">&gt;  creating a rather large backing file.  With respect to module bandwidth and 
</span><br>
<span class="quotelev1">&gt;  latency, mmap and sysv seem to be comparable - at least that is what my 
</span><br>
<span class="quotelev1">&gt;  preliminary tests have shown.  As it stands, I have not come across a  
</span><br>
<span class="quotelev1">&gt;  situation where the mmap SM component doesn't work or is slower.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Hope that helps,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  --
</span><br>
<span class="quotelev1">&gt;  Samuel K. Gutierrez
</span><br>
<span class="quotelev1">&gt;  Los Alamos National Laboratory
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
<span class="quotelev1">&gt;  On Apr 28, 2010, at 5:35 AM, Bogdan Costescu wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Tue, Apr 27, 2010 at 7:55 PM, Samuel K. Gutierrez &lt;samuel_at_[hidden]&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; With Jeff and Ralph's help, I have completed a System V shared memory
</span><br>
<span class="quotelev3">&gt; &gt;&gt; component for Open MPI.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; What is the motivation for this work ? Are there situations where the
</span><br>
<span class="quotelev2">&gt; &gt; mmap based SM component doesn't work or is slow(er) ?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Kind regards,
</span><br>
<span class="quotelev2">&gt; &gt; Bogdan
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  _______________________________________________
</span><br>
<span class="quotelev1">&gt;  devel mailing list
</span><br>
<span class="quotelev1">&gt;  devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;  <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7844.php">Ralph Castain: "Re: [OMPI devel] bug with /bin/sh and /bin/ksh"</a>
<li><strong>Previous message:</strong> <a href="7842.php">Jeff Squyres: "[OMPI devel] 1.4.2rc3"</a>
<li><strong>In reply to:</strong> <a href="7834.php">Samuel K. Gutierrez: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request for Community Input and Testing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7845.php">Samuel K. Gutierrez: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request for	Community Input and Testing"</a>
<li><strong>Reply:</strong> <a href="7845.php">Samuel K. Gutierrez: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request for	Community Input and Testing"</a>
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
