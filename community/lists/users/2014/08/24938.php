<?
$subject_val = "[OMPI users] Newbie query - mpirun will not run if it's previously been killed with Control-C";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug  7 11:17:04 2014" -->
<!-- isoreceived="20140807151704" -->
<!-- sent="Thu, 7 Aug 2014 15:16:55 +0000" -->
<!-- isosent="20140807151655" -->
<!-- name="Jane Lewis" -->
<!-- email="j.p.lewis_at_[hidden]" -->
<!-- subject="[OMPI users] Newbie query - mpirun will not run if it's previously been killed with Control-C" -->
<!-- id="2DA00190D12F2143B16E21D8FC3438AA538F0842_at_vime-mbx6.rdg.ac.uk" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] Newbie query - mpirun will not run if it's previously been killed with Control-C<br>
<strong>From:</strong> Jane Lewis (<em>j.p.lewis_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-07 11:16:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24939.php">Gus Correa: "Re: [OMPI users] Newbie query - mpirun will not run if it's previously been killed with Control-C"</a>
<li><strong>Previous message:</strong> <a href="24937.php">Ralph Castain: "Re: [OMPI users] problem with rankfile in openmpi-1.8.2rc3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24939.php">Gus Correa: "Re: [OMPI users] Newbie query - mpirun will not run if it's previously been killed with Control-C"</a>
<li><strong>Reply:</strong> <a href="24939.php">Gus Correa: "Re: [OMPI users] Newbie query - mpirun will not run if it's previously been killed with Control-C"</a>
<li><strong>Reply:</strong> <a href="24942.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Newbie query - mpirun will not run if it's previously been killed with Control-C"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>This is a really simple problem (I hope) where I've introduced MPI to a complex numerical model which I have to kill occasionally with Control-C as I don't want it running forever.
<br>
I have only used mpi_init(), mpi_comm_size(), mpi_comm_rank() and mpi_finalize()- there are no send/receive calls going on at the moment - and I only have two instances. My startup command is:
<br>
<p>#/bin/bash
<br>
/opt/openmpi/bin/mpirun  -np 2 -hostfile hostfile jules.exe
<br>
<p>where hostfile has one entry : localhost
<br>
<p>The result of terminating the process with Control-C at the command prompt from where I launched it, is that I am then unable to run it again. I get the
<br>
&quot;mpirun has exited due to process rank 0 with PID 10094 on node metclcv10.local exiting improperly. There are two reasons this could occur:...&quot; error each time despite checking running processes for stragglers, closing my terminal, or changing node.
<br>
<p>I have spent several hours searching for an answer to this, if it's already somewhere then please point me in the right direction.
<br>
<p>many thanks in advance
<br>
Jane
<br>
<p>For info:
<br>
#ompi_info -v ompi full --parsable
<br>
package:Open MPI root_at_centos-6-3.localdomain Distribution
<br>
ompi:version:full:1.6.2
<br>
ompi:version:svn:r27344
<br>
ompi:version:release_date:Sep 18, 2012
<br>
orte:version:full:1.6.2
<br>
orte:version:svn:r27344
<br>
orte:version:release_date:Sep 18, 2012
<br>
opal:version:full:1.6.2
<br>
opal:version:svn:r27344
<br>
opal:version:release_date:Sep 18, 2012
<br>
mpi-api:version:full:2.1
<br>
ident:1.6.2
<br>
<p>I'm using centos-6-3 and FORTRAN.
<br>
<p><p>Jane Lewis
<br>
Deputy Technical Director, Reading e-Science Centre
<br>
Department of Meteorology
<br>
University of Reading, UK
<br>
Tel: +44 (0)118 378 5173
<br>
<a href="http://www.resc.reading.ac.uk<http://www.resc.reading.ac.uk/">http://www.resc.reading.ac.uk<http://www.resc.reading.ac.uk/</a>&gt;
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24938/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24939.php">Gus Correa: "Re: [OMPI users] Newbie query - mpirun will not run if it's previously been killed with Control-C"</a>
<li><strong>Previous message:</strong> <a href="24937.php">Ralph Castain: "Re: [OMPI users] problem with rankfile in openmpi-1.8.2rc3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24939.php">Gus Correa: "Re: [OMPI users] Newbie query - mpirun will not run if it's previously been killed with Control-C"</a>
<li><strong>Reply:</strong> <a href="24939.php">Gus Correa: "Re: [OMPI users] Newbie query - mpirun will not run if it's previously been killed with Control-C"</a>
<li><strong>Reply:</strong> <a href="24942.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Newbie query - mpirun will not run if it's previously been killed with Control-C"</a>
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
