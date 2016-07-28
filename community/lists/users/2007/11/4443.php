<?
$subject_val = "[OMPI users] openib errors as user, but not root";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov  7 19:22:56 2007" -->
<!-- isoreceived="20071108002256" -->
<!-- sent="Wed, 7 Nov 2007 16:22:52 -0800" -->
<!-- isosent="20071108002252" -->
<!-- name="Andrus, Mr. Brian (Contractor)" -->
<!-- email="brian.andrus_at_[hidden]" -->
<!-- subject="[OMPI users] openib errors as user, but not root" -->
<!-- id="D392D4803D14354CBC49D772E19DD0CD84C29D_at_zeus.w2k.nrlmry.navy.mil" -->
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
<strong>From:</strong> Andrus, Mr. Brian (Contractor) (<em>brian.andrus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-07 19:22:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4444.php">Jeff Squyres: "Re: [OMPI users] openib errors as user, but not root"</a>
<li><strong>Previous message:</strong> <a href="4442.php">Benjamin, Ted G.: "Re: [OMPI users] Double Standard Output for Non-MPI on ItaniumRunning Red Hat Enterprise Linux 4.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4444.php">Jeff Squyres: "Re: [OMPI users] openib errors as user, but not root"</a>
<li><strong>Reply:</strong> <a href="4444.php">Jeff Squyres: "Re: [OMPI users] openib errors as user, but not root"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ok, I am having some difficulty troubleshooting this.
<br>
<p>If I run my hello program without torque, it works fine:
<br>
[root_at_login1 root]# mpirun --mca btl openib,self -host
<br>
n01,n02,n03,n04,n05 /data/root/hello
<br>
Hello from process 0 of 5 on node n01
<br>
Hello from process 1 of 5 on node n02
<br>
Hello from process 2 of 5 on node n03
<br>
Hello from process 3 of 5 on node n04
<br>
Hello from process 4 of 5 on node n05
<br>
<p>If I submit it as root, it seems happy:
<br>
[root_at_login1 root]# qsub
<br>
#!/bin/bash
<br>
#PBS -j oe
<br>
#PBS -l nodes=5:ppn=1
<br>
#PBS -W x=NACCESSPOLICY:SINGLEJOB
<br>
#PBS -N TestJob
<br>
#PBS -q long
<br>
#PBS -o output.txt
<br>
#PBS -V
<br>
cd $PBS_O_WORKDIR
<br>
rm -f output.txt
<br>
date
<br>
mpirun --mca btl openib,self /data/root/hello
<br>
103.cluster.default.domain
<br>
[root_at_login1 root]# cat output.txt
<br>
Wed Nov  7 16:20:33 PST 2007
<br>
Hello from process 0 of 5 on node n05
<br>
Hello from process 1 of 5 on node n04
<br>
Hello from process 2 of 5 on node n03
<br>
Hello from process 3 of 5 on node n02
<br>
Hello from process 4 of 5 on node n01
<br>
<p>If I do it as me, not so good:
<br>
[andrus_at_login1 data]$ qsub
<br>
[andrus_at_login1 data]$ qsub
<br>
#!/bin/bash
<br>
#PBS -j oe
<br>
#PBS -l nodes=1:ppn=1
<br>
#PBS -W x=NACCESSPOLICY:SINGLEJOB
<br>
#PBS -N TestJob
<br>
#PBS -q long
<br>
#PBS -o output.txt
<br>
#PBS -V
<br>
cd $PBS_O_WORKDIR
<br>
rm -f output.txt
<br>
date
<br>
mpirun --mca btl openib,self /data/root/hello
<br>
105.littlemac.default.domain
<br>
[andrus_at_login1 data]$ cat output.txt
<br>
Wed Nov  7 16:23:00 PST 2007
<br>
------------------------------------------------------------------------
<br>
<pre>
--
The OpenIB BTL failed to initialize while trying to allocate some
locked memory.  This typically can indicate that the memlock limits
are set too low.  For most HPC installations, the memlock limits
should be set to &quot;unlimited&quot;.  The failure occured here:
    Host:          n01
    OMPI source:   btl_openib.c:828
    Function:      ibv_create_cq()
    Device:        mthca0
    Memlock limit: 32768
You may need to consult with your system administrator to get this
problem fixed.  This FAQ entry on the Open MPI web site may also be
helpful:
    <a href="http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages">http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages</a>
------------------------------------------------------------------------
--
------------------------------------------------------------------------
--
It looks like MPI_INIT failed for some reason; your parallel process is
likely to abort.  There are many reasons that a parallel process can
fail during MPI_INIT; some of which are due to configuration or
environment
problems.  This failure appears to be an internal failure; here's some
additional information (which may only be relevant to an Open MPI
developer):
  PML add procs failed
  --&gt; Returned &quot;Error&quot; (-1) instead of &quot;Success&quot; (0)
------------------------------------------------------------------------
--
*** An error occurred in MPI_Init
*** before MPI was initialized
*** MPI_ERRORS_ARE_FATAL (goodbye)
I have checked that ulimit is unlimited. I cannot seem to figure this.
Any help?
Brian Andrus perotsystems 
Site Manager | Sr. Computer Scientist 
Naval Research Lab
7 Grace Hopper Ave, Monterey, CA  93943
Phone (831) 656-4839 | Fax (831) 656-4866 
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-4443/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4444.php">Jeff Squyres: "Re: [OMPI users] openib errors as user, but not root"</a>
<li><strong>Previous message:</strong> <a href="4442.php">Benjamin, Ted G.: "Re: [OMPI users] Double Standard Output for Non-MPI on ItaniumRunning Red Hat Enterprise Linux 4.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4444.php">Jeff Squyres: "Re: [OMPI users] openib errors as user, but not root"</a>
<li><strong>Reply:</strong> <a href="4444.php">Jeff Squyres: "Re: [OMPI users] openib errors as user, but not root"</a>
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
