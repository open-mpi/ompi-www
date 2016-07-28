<?
$subject_val = "[OMPI users] PML add procs failed --&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 26 11:00:11 2009" -->
<!-- isoreceived="20090326150011" -->
<!-- sent="Thu, 26 Mar 2009 16:00:02 +0100" -->
<!-- isosent="20090326150002" -->
<!-- name="Alessandro Surace" -->
<!-- email="zioalex_at_[hidden]" -->
<!-- subject="[OMPI users] PML add procs failed --&amp;gt; Returned &amp;quot;Unreachable&amp;quot; (-12) instead of &amp;quot;Success&amp;quot; (0)" -->
<!-- id="adbbb9af0903260800o52e22bd3vfb6d6e72b215081d_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] PML add procs failed --&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)<br>
<strong>From:</strong> Alessandro Surace (<em>zioalex_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-26 11:00:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8595.php">Ralph Castain: "Re: [OMPI users] PML add procs failed --&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)"</a>
<li><strong>Previous message:</strong> <a href="8593.php">Richard Treumann: "Re: [OMPI users] MPI_Test without deallocation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8595.php">Ralph Castain: "Re: [OMPI users] PML add procs failed --&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)"</a>
<li><strong>Reply:</strong> <a href="8595.php">Ralph Castain: "Re: [OMPI users] PML add procs failed --&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)"</a>
<li><strong>Maybe reply:</strong> <a href="8597.php">Alessandro Surace: "Re: [OMPI users] PML add procs failed --&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)"</a>
<li><strong>Maybe reply:</strong> <a href="8606.php">Alessandro Surace: "Re: [OMPI users] PML add procs failed --&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)"</a>
<li><strong>Maybe reply:</strong> <a href="8628.php">Alessandro Surace: "Re: [OMPI users] PML add procs failed --&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Guys,
<br>
I'm really new in mpi. I've created a small grid composed of virtual and
<br>
real host.
<br>
grid01 real/Centos/(Open MPI) 1.2.5
<br>
grid03 virtual (xen)/Centos/(Open MPI) 1.2.5
<br>
grid04 virtual (vmware)/Centos/(Open MPI) 1.2.5
<br>
<p>When I try to run a parallel job like this:
<br>
mpirun  -v -H grid01,grid04 -np 2  /mnt/ewd/mpi/fibonacci/fibonacci_mpi
<br>
The job run
<br>
<p>If I try instead
<br>
mpirun  -v -H grid03,grid04 -np 2  /mnt/ewd/mpi/fibonacci/fibonacci_mpi
<br>
or with all 3 nodes I get the error:
<br>
<p>It looks like MPI_INIT failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during MPI_INIT; some of which are due to configuration or environment
<br>
problems.  This failure appears to be an internal failure; here's some
<br>
additional information (which may only be relevant to an Open MPI
<br>
developer):
<br>
<p>&nbsp;PML add procs failed
<br>
&nbsp;--&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)
<br>
<p>Seems like there is something wrong between grid03, grid04.
<br>
But If I run the job indivdually on every host it runs without problem.
<br>
<p>I can't understand what happens.
<br>
Any Ideas?
<br>
In attach all the details.
<br>
But Does Exist a guide / howto configure and setup openmpi (not build) ?
<br>
<p>Thanks
<br>
Alex
<br>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-8594/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-8594/DEBUG.tar.gz">DEBUG.tar.gz</a>
</ul>
<!-- attachment="DEBUG.tar.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8595.php">Ralph Castain: "Re: [OMPI users] PML add procs failed --&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)"</a>
<li><strong>Previous message:</strong> <a href="8593.php">Richard Treumann: "Re: [OMPI users] MPI_Test without deallocation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8595.php">Ralph Castain: "Re: [OMPI users] PML add procs failed --&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)"</a>
<li><strong>Reply:</strong> <a href="8595.php">Ralph Castain: "Re: [OMPI users] PML add procs failed --&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)"</a>
<li><strong>Maybe reply:</strong> <a href="8597.php">Alessandro Surace: "Re: [OMPI users] PML add procs failed --&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)"</a>
<li><strong>Maybe reply:</strong> <a href="8606.php">Alessandro Surace: "Re: [OMPI users] PML add procs failed --&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)"</a>
<li><strong>Maybe reply:</strong> <a href="8628.php">Alessandro Surace: "Re: [OMPI users] PML add procs failed --&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)"</a>
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
