<?
$subject_val = "Re: [OMPI devel] System V Shared Memory for Open MPI: Request for	Community Input and Testing";
include("../../include/msg-header.inc");
?>
<!-- received="Sat May  1 23:03:52 2010" -->
<!-- isoreceived="20100502030352" -->
<!-- sent="Sat, 1 May 2010 21:03:46 -0600 (MDT)" -->
<!-- isosent="20100502030346" -->
<!-- name="Samuel K. Gutierrez" -->
<!-- email="samuel_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] System V Shared Memory for Open MPI: Request for	Community Input and Testing" -->
<!-- id="29334.128.165.0.81.1272769426.squirrel_at_webmail.lanl.gov" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="20100430153355.GB30566_at_oracle.com" -->
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
<strong>Date:</strong> 2010-05-01 23:03:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7863.php">Ashley Pittman: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request for	Community Input and Testing"</a>
<li><strong>Previous message:</strong> <a href="7861.php">N.M. Maclaren: "Re: [OMPI devel] MPI Forum question?"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/04/7857.php">Ethan Mallove: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request for	Community Input and Testing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7863.php">Ashley Pittman: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request for	Community Input and Testing"</a>
<li><strong>Reply:</strong> <a href="7863.php">Ashley Pittman: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request for	Community Input and Testing"</a>
<li><strong>Reply:</strong> <a href="7864.php">Christopher Samuel: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request for Community Input and Testing"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ethan,
<br>
<p>Sorry about the lag.
<br>
<p>As far as I can tell, calling shmctl IPC_RMID is immediately destroying
<br>
the shared memory segment even though there is at least one process
<br>
attached to it.  This is interesting and confusing because Solaris 10's
<br>
behavior description of shmctl IPC_RMID is similar to that of Linux'.
<br>
<p>I call shmctl IPC_RMID immediately after one process has attached to the
<br>
segment because, at least on Linux, this only marks the segment for
<br>
destruction.  The segment is only actually destroyed after all attached
<br>
processes have terminated.  I'm relying on this behavior for resource
<br>
cleanup upon application termination (normal/abnormal).
<br>
<p>Because of this, sysv support may be limited to Linux systems - that is,
<br>
until we can get a better sense of which systems provide the shmctl
<br>
IPC_RMID behavior that I am relying on.
<br>
<p>Any other ideas are greatly appreciated.
<br>
<p>Thanks for testing!
<br>
<p><pre>
--
Samuel K. Gutierrez
Los Alamos National Laboratory
&gt; On Thu, Apr/29/2010 02:52:24PM, Samuel K. Gutierrez wrote:
&gt;&gt;  Hi Ethan,
&gt;&gt;  Bummer.  What does the following command show?
&gt;&gt;  sysctl -a | grep shm
&gt;
&gt; In this case, I think the Solaris equivalent to sysctl is prctl, e.g.,
&gt;
&gt;   $ prctl -i project group.staff
&gt;   project: 10: group.staff
&gt;   NAME    PRIVILEGE       VALUE    FLAG   ACTION
&gt; RECIPIENT
&gt;   ...
&gt;   project.max-shm-memory
&gt;           privileged      3.92GB      -   deny
&gt;     -
&gt;           system          16.0EB    max   deny
&gt;     -
&gt;   project.max-shm-ids
&gt;           privileged        128       -   deny
&gt;     -
&gt;           system          16.8M     max   deny
&gt;     -
&gt;   ...
&gt;
&gt; Is that the info you need?
&gt;
&gt; -Ethan
&gt;
&gt;&gt;  Thanks!
&gt;&gt;  --
&gt;&gt;  Samuel K. Gutierrez
&gt;&gt;  Los Alamos National Laboratory
&gt;&gt;  On Apr 29, 2010, at 1:32 PM, Ethan Mallove wrote:
&gt;&gt; &gt; Hi Samuel,
&gt;&gt; &gt;
&gt;&gt; &gt; I'm trying to run off your HG clone, but I'm seeing issues with
c_hello, e.g.,
&gt;&gt; &gt;
&gt;&gt; &gt;  $ mpirun -mca mpi_common_sm sysv --mca btl self,sm,tcp --host
&gt;&gt; &gt; burl-ct-v440-2,burl-ct-v440-2 -np 2 ./c_hello
&gt;&gt; &gt;  --------------------------------------------------------------------------
A system call failed during shared memory initialization that should not
have.  It is likely that your MPI job will now either abort or experience
performance degradation.
&gt;&gt; &gt;
&gt;&gt; &gt;    Local host:  burl-ct-v440-2
&gt;&gt; &gt;    System call: shmat(2)
&gt;&gt; &gt;    Process:     [[43408,1],1]
&gt;&gt; &gt;    Error:       Invalid argument (errno 22)
&gt;&gt; &gt;  --------------------------------------------------------------------------
^Cmpirun: killing job...
&gt;&gt; &gt;
&gt;&gt; &gt;  $ uname -a
&gt;&gt; &gt;  SunOS burl-ct-v440-2 5.10 Generic_118833-33 sun4u sparc
&gt;&gt; SUNW,Sun-Fire-V440
&gt;&gt; &gt;
&gt;&gt; &gt; The same test works okay if I s/sysv/mmap/.
&gt;&gt; &gt;
&gt;&gt; &gt; Regards,
&gt;&gt; &gt; Ethan
&gt;&gt; &gt;
&gt;&gt; &gt;
&gt;&gt; &gt; On Wed, Apr/28/2010 07:16:12AM, Samuel K. Gutierrez wrote:
&gt;&gt; &gt;&gt; Hi,
&gt;&gt; &gt;&gt;
&gt;&gt; &gt;&gt; Faster component initialization/finalization times is one of the
main
&gt;&gt; &gt;&gt; motivating factors of this work.  The general idea is to get away
&gt;&gt; from
&gt;&gt; &gt;&gt; creating a rather large backing file.  With respect to module
&gt;&gt; bandwidth
&gt;&gt; &gt;&gt; and
&gt;&gt; &gt;&gt; latency, mmap and sysv seem to be comparable - at least that is what
&gt;&gt; my
&gt;&gt; &gt;&gt; preliminary tests have shown.  As it stands, I have not come across
a
&gt;&gt; &gt;&gt; situation where the mmap SM component doesn't work or is slower.
&gt;&gt; &gt;&gt;
&gt;&gt; &gt;&gt; Hope that helps,
&gt;&gt; &gt;&gt;
&gt;&gt; &gt;&gt; --
&gt;&gt; &gt;&gt; Samuel K. Gutierrez
&gt;&gt; &gt;&gt; Los Alamos National Laboratory
&gt;&gt; &gt;&gt;
&gt;&gt; &gt;&gt;
&gt;&gt; &gt;&gt;
&gt;&gt; &gt;&gt;
&gt;&gt; &gt;&gt;
&gt;&gt; &gt;&gt; On Apr 28, 2010, at 5:35 AM, Bogdan Costescu wrote:
&gt;&gt; &gt;&gt;
&gt;&gt; &gt;&gt;&gt; On Tue, Apr 27, 2010 at 7:55 PM, Samuel K. Gutierrez
&gt;&gt; &lt;samuel_at_[hidden]&gt;
&gt;&gt; &gt;&gt;&gt; wrote:
&gt;&gt; &gt;&gt;&gt;&gt; With Jeff and Ralph's help, I have completed a System V shared
&gt;&gt; memory
&gt;&gt; &gt;&gt;&gt;&gt; component for Open MPI.
&gt;&gt; &gt;&gt;&gt;
&gt;&gt; &gt;&gt;&gt; What is the motivation for this work ? Are there situations where
&gt;&gt; the
&gt;&gt; &gt;&gt;&gt; mmap based SM component doesn't work or is slow(er) ?
&gt;&gt; &gt;&gt;&gt;
&gt;&gt; &gt;&gt;&gt; Kind regards,
&gt;&gt; &gt;&gt;&gt; Bogdan
&gt;&gt; &gt;&gt;&gt; _______________________________________________
&gt;&gt; &gt;&gt;&gt; devel mailing list
&gt;&gt; &gt;&gt;&gt; devel_at_[hidden]
&gt;&gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
&gt;&gt; &gt;&gt;
&gt;&gt; &gt;&gt; _______________________________________________
&gt;&gt; &gt;&gt; devel mailing list
&gt;&gt; &gt;&gt; devel_at_[hidden]
&gt;&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
&gt;&gt; &gt; _______________________________________________
&gt;&gt; &gt; devel mailing list
&gt;&gt; &gt; devel_at_[hidden]
&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
&gt;&gt;  _______________________________________________
&gt;&gt;  devel mailing list
&gt;&gt;  devel_at_[hidden]
&gt;&gt;  <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
&gt; _______________________________________________
&gt; devel mailing list
&gt; devel_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
&gt;
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7863.php">Ashley Pittman: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request for	Community Input and Testing"</a>
<li><strong>Previous message:</strong> <a href="7861.php">N.M. Maclaren: "Re: [OMPI devel] MPI Forum question?"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/04/7857.php">Ethan Mallove: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request for	Community Input and Testing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7863.php">Ashley Pittman: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request for	Community Input and Testing"</a>
<li><strong>Reply:</strong> <a href="7863.php">Ashley Pittman: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request for	Community Input and Testing"</a>
<li><strong>Reply:</strong> <a href="7864.php">Christopher Samuel: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request for Community Input and Testing"</a>
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
