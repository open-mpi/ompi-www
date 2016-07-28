<?
$subject_val = "Re: [OMPI devel] System V Shared Memory for Open MPI: Request for	Community Input and Testing";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 29 16:52:54 2010" -->
<!-- isoreceived="20100429205254" -->
<!-- sent="Thu, 29 Apr 2010 14:52:24 -0600" -->
<!-- isosent="20100429205224" -->
<!-- name="Samuel K. Gutierrez" -->
<!-- email="samuel_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] System V Shared Memory for Open MPI: Request for	Community Input and Testing" -->
<!-- id="CD9C0FB8-5C35-4BDF-BD4A-20A486A3417E_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20100429193240.GA30566_at_oracle.com" -->
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
<strong>From:</strong> Samuel K. Gutierrez (<em>samuel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-29 16:52:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7846.php">Ralph Castain: "[OMPI devel] MPI Forum question?"</a>
<li><strong>Previous message:</strong> <a href="7844.php">Ralph Castain: "Re: [OMPI devel] bug with /bin/sh and /bin/ksh"</a>
<li><strong>In reply to:</strong> <a href="7843.php">Ethan Mallove: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request for	Community Input and Testing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7857.php">Ethan Mallove: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request for	Community Input and Testing"</a>
<li><strong>Reply:</strong> <a href="7857.php">Ethan Mallove: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request for	Community Input and Testing"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ethan,
<br>
<p>Bummer.  What does the following command show?
<br>
<p>sysctl -a | grep shm
<br>
<p>Thanks!
<br>
<p><pre>
--
Samuel K. Gutierrez
Los Alamos National Laboratory
On Apr 29, 2010, at 1:32 PM, Ethan Mallove wrote:
&gt; Hi Samuel,
&gt;
&gt; I'm trying to run off your HG clone, but I'm seeing issues with
&gt; c_hello, e.g.,
&gt;
&gt;  $ mpirun -mca mpi_common_sm sysv --mca btl self,sm,tcp --host burl- 
&gt; ct-v440-2,burl-ct-v440-2 -np 2 ./c_hello
&gt;   
&gt; --------------------------------------------------------------------------
&gt;  A system call failed during shared memory initialization that should
&gt;  not have.  It is likely that your MPI job will now either abort or
&gt;  experience performance degradation.
&gt;
&gt;    Local host:  burl-ct-v440-2
&gt;    System call: shmat(2)
&gt;    Process:     [[43408,1],1]
&gt;    Error:       Invalid argument (errno 22)
&gt;   
&gt; --------------------------------------------------------------------------
&gt;  ^Cmpirun: killing job...
&gt;
&gt;  $ uname -a
&gt;  SunOS burl-ct-v440-2 5.10 Generic_118833-33 sun4u sparc SUNW,Sun- 
&gt; Fire-V440
&gt;
&gt; The same test works okay if I s/sysv/mmap/.
&gt;
&gt; Regards,
&gt; Ethan
&gt;
&gt;
&gt; On Wed, Apr/28/2010 07:16:12AM, Samuel K. Gutierrez wrote:
&gt;&gt; Hi,
&gt;&gt;
&gt;&gt; Faster component initialization/finalization times is one of the main
&gt;&gt; motivating factors of this work.  The general idea is to get away  
&gt;&gt; from
&gt;&gt; creating a rather large backing file.  With respect to module  
&gt;&gt; bandwidth and
&gt;&gt; latency, mmap and sysv seem to be comparable - at least that is  
&gt;&gt; what my
&gt;&gt; preliminary tests have shown.  As it stands, I have not come across a
&gt;&gt; situation where the mmap SM component doesn't work or is slower.
&gt;&gt;
&gt;&gt; Hope that helps,
&gt;&gt;
&gt;&gt; --
&gt;&gt; Samuel K. Gutierrez
&gt;&gt; Los Alamos National Laboratory
&gt;&gt;
&gt;&gt;
&gt;&gt;
&gt;&gt;
&gt;&gt;
&gt;&gt; On Apr 28, 2010, at 5:35 AM, Bogdan Costescu wrote:
&gt;&gt;
&gt;&gt;&gt; On Tue, Apr 27, 2010 at 7:55 PM, Samuel K. Gutierrez &lt;samuel_at_[hidden] 
&gt;&gt;&gt; &gt;
&gt;&gt;&gt; wrote:
&gt;&gt;&gt;&gt; With Jeff and Ralph's help, I have completed a System V shared  
&gt;&gt;&gt;&gt; memory
&gt;&gt;&gt;&gt; component for Open MPI.
&gt;&gt;&gt;
&gt;&gt;&gt; What is the motivation for this work ? Are there situations where  
&gt;&gt;&gt; the
&gt;&gt;&gt; mmap based SM component doesn't work or is slow(er) ?
&gt;&gt;&gt;
&gt;&gt;&gt; Kind regards,
&gt;&gt;&gt; Bogdan
&gt;&gt;&gt; _______________________________________________
&gt;&gt;&gt; devel mailing list
&gt;&gt;&gt; devel_at_[hidden]
&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
&gt;&gt;
&gt;&gt; _______________________________________________
&gt;&gt; devel mailing list
&gt;&gt; devel_at_[hidden]
&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
&gt; _______________________________________________
&gt; devel mailing list
&gt; devel_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7846.php">Ralph Castain: "[OMPI devel] MPI Forum question?"</a>
<li><strong>Previous message:</strong> <a href="7844.php">Ralph Castain: "Re: [OMPI devel] bug with /bin/sh and /bin/ksh"</a>
<li><strong>In reply to:</strong> <a href="7843.php">Ethan Mallove: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request for	Community Input and Testing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7857.php">Ethan Mallove: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request for	Community Input and Testing"</a>
<li><strong>Reply:</strong> <a href="7857.php">Ethan Mallove: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request for	Community Input and Testing"</a>
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
