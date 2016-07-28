<?
$subject_val = "Re: [OMPI devel] System V Shared Memory for Open MPI: Request for	Community Input and Testing";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 30 11:34:00 2010" -->
<!-- isoreceived="20100430153400" -->
<!-- sent="Fri, 30 Apr 2010 11:33:55 -0400" -->
<!-- isosent="20100430153355" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] System V Shared Memory for Open MPI: Request for	Community Input and Testing" -->
<!-- id="20100430153355.GB30566_at_oracle.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CD9C0FB8-5C35-4BDF-BD4A-20A486A3417E_at_lanl.gov" -->
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
<strong>Date:</strong> 2010-04-30 11:33:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7858.php">Ralph Castain: "Re: [OMPI devel] MPI Forum question?"</a>
<li><strong>Previous message:</strong> <a href="7856.php">N.M. Maclaren: "Re: [OMPI devel] MPI Forum question?"</a>
<li><strong>In reply to:</strong> <a href="7845.php">Samuel K. Gutierrez: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request for	Community Input and Testing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/05/7862.php">Samuel K. Gutierrez: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request for	Community Input and Testing"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/05/7862.php">Samuel K. Gutierrez: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request for	Community Input and Testing"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, Apr/29/2010 02:52:24PM, Samuel K. Gutierrez wrote:
<br>
<span class="quotelev1">&gt;  Hi Ethan,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Bummer.  What does the following command show?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  sysctl -a | grep shm
</span><br>
<p>In this case, I think the Solaris equivalent to sysctl is prctl, e.g.,
<br>
<p>&nbsp;&nbsp;$ prctl -i project group.staff
<br>
&nbsp;&nbsp;project: 10: group.staff
<br>
&nbsp;&nbsp;NAME    PRIVILEGE       VALUE    FLAG   ACTION                       RECIPIENT
<br>
&nbsp;&nbsp;...
<br>
&nbsp;&nbsp;project.max-shm-memory
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;privileged      3.92GB      -   deny                                 -
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;system          16.0EB    max   deny                                 -
<br>
&nbsp;&nbsp;project.max-shm-ids
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;privileged        128       -   deny                                 -
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;system          16.8M     max   deny                                 -
<br>
&nbsp;&nbsp;...
<br>
<p>Is that the info you need?
<br>
<p>-Ethan
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Thanks!
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
<span class="quotelev1">&gt;  On Apr 29, 2010, at 1:32 PM, Ethan Mallove wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hi Samuel,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I'm trying to run off your HG clone, but I'm seeing issues with
</span><br>
<span class="quotelev2">&gt; &gt; c_hello, e.g.,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  $ mpirun -mca mpi_common_sm sysv --mca btl self,sm,tcp --host 
</span><br>
<span class="quotelev2">&gt; &gt; burl-ct-v440-2,burl-ct-v440-2 -np 2 ./c_hello
</span><br>
<span class="quotelev2">&gt; &gt;  --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;  A system call failed during shared memory initialization that should
</span><br>
<span class="quotelev2">&gt; &gt;  not have.  It is likely that your MPI job will now either abort or
</span><br>
<span class="quotelev2">&gt; &gt;  experience performance degradation.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    Local host:  burl-ct-v440-2
</span><br>
<span class="quotelev2">&gt; &gt;    System call: shmat(2)
</span><br>
<span class="quotelev2">&gt; &gt;    Process:     [[43408,1],1]
</span><br>
<span class="quotelev2">&gt; &gt;    Error:       Invalid argument (errno 22)
</span><br>
<span class="quotelev2">&gt; &gt;  --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;  ^Cmpirun: killing job...
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  $ uname -a
</span><br>
<span class="quotelev2">&gt; &gt;  SunOS burl-ct-v440-2 5.10 Generic_118833-33 sun4u sparc SUNW,Sun-Fire-V440
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The same test works okay if I s/sysv/mmap/.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Regards,
</span><br>
<span class="quotelev2">&gt; &gt; Ethan
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Wed, Apr/28/2010 07:16:12AM, Samuel K. Gutierrez wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Faster component initialization/finalization times is one of the main
</span><br>
<span class="quotelev3">&gt; &gt;&gt; motivating factors of this work.  The general idea is to get away from
</span><br>
<span class="quotelev3">&gt; &gt;&gt; creating a rather large backing file.  With respect to module bandwidth 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; and
</span><br>
<span class="quotelev3">&gt; &gt;&gt; latency, mmap and sysv seem to be comparable - at least that is what my
</span><br>
<span class="quotelev3">&gt; &gt;&gt; preliminary tests have shown.  As it stands, I have not come across a
</span><br>
<span class="quotelev3">&gt; &gt;&gt; situation where the mmap SM component doesn't work or is slower.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hope that helps,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; --
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Samuel K. Gutierrez
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Los Alamos National Laboratory
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Apr 28, 2010, at 5:35 AM, Bogdan Costescu wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; On Tue, Apr 27, 2010 at 7:55 PM, Samuel K. Gutierrez &lt;samuel_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; With Jeff and Ralph's help, I have completed a System V shared memory
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; component for Open MPI.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; What is the motivation for this work ? Are there situations where the
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; mmap based SM component doesn't work or is slow(er) ?
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Kind regards,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Bogdan
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li><strong>Next message:</strong> <a href="7858.php">Ralph Castain: "Re: [OMPI devel] MPI Forum question?"</a>
<li><strong>Previous message:</strong> <a href="7856.php">N.M. Maclaren: "Re: [OMPI devel] MPI Forum question?"</a>
<li><strong>In reply to:</strong> <a href="7845.php">Samuel K. Gutierrez: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request for	Community Input and Testing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/05/7862.php">Samuel K. Gutierrez: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request for	Community Input and Testing"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/05/7862.php">Samuel K. Gutierrez: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request for	Community Input and Testing"</a>
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
