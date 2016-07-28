<?
$subject_val = "Re: [OMPI users] setup of a basic system on RHEL or Fedora";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr  3 20:41:21 2008" -->
<!-- isoreceived="20080404004121" -->
<!-- sent="Thu, 03 Apr 2008 19:41:08 -0500" -->
<!-- isosent="20080404004108" -->
<!-- name="Elvedin Trnjanin" -->
<!-- email="trnja001_at_[hidden]" -->
<!-- subject="Re: [OMPI users] setup of a basic system on RHEL or Fedora" -->
<!-- id="47F57924.5010907_at_umn.edu" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="W6578413294304181207266460_at_webmail22" -->
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
<strong>Subject:</strong> Re: [OMPI users] setup of a basic system on RHEL or Fedora<br>
<strong>From:</strong> Elvedin Trnjanin (<em>trnja001_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-03 20:41:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5309.php">Terry Frankcombe: "Re: [OMPI users] setup of a basic system on RHEL or Fedora"</a>
<li><strong>Previous message:</strong> <a href="5307.php">clarkmpi_at_[hidden]: "[OMPI users] setup of a basic system on RHEL or Fedora"</a>
<li><strong>In reply to:</strong> <a href="5307.php">clarkmpi_at_[hidden]: "[OMPI users] setup of a basic system on RHEL or Fedora"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5309.php">Terry Frankcombe: "Re: [OMPI users] setup of a basic system on RHEL or Fedora"</a>
<li><strong>Reply:</strong> <a href="5309.php">Terry Frankcombe: "Re: [OMPI users] setup of a basic system on RHEL or Fedora"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<a href="http://www.open-mpi.org/software/ompi/v1.2/">http://www.open-mpi.org/software/ompi/v1.2/</a>
<br>
<p>Download either the gzip or bzip, extract it, then &quot;./configure&quot; and 
<br>
&quot;make all install&quot; is pretty simple. The library will go into 
<br>
/usr/local/lib so you might need to add that path to your linker. You 
<br>
can do this on all three systems. OpenMPI will handle everything else as 
<br>
all you need is gigabit Ethernet.
<br>
<p>Running programs is done with mpirun and you can look at th manual page 
<br>
to get the arguments to that. The next important option is the 
<br>
&quot;-machinefile&quot; option for mpirun where you can specify all the hosts you 
<br>
want to connect to. I suggest setting up SSH authorized keys/auto login 
<br>
on each system as mpirun will go over SSH and will ask you to login 
<br>
whenever you run a program.
<br>
<p>One thing about running programs is that the binaries need to be in the 
<br>
same absolute path on all systems. This means if you're running the 
<br>
program from /home/me on system1, the program you're running must also 
<br>
be in /home/me on all the other systems. OpenMPI will not transfer those 
<br>
binaries for you. An easy way for this is have an NFS mount for your MPI 
<br>
programs that all of the systems can access and run from there. The 
<br>
system specs make no difference as long as you're not going to switch to 
<br>
a high speed interconnect soon.
<br>
<p>That should get you started, the documents on the OpenMPI web site 
<br>
should give you the answers for everything else.  
<br>
<a href="http://www.open-mpi.org/projects/user-docs/">http://www.open-mpi.org/projects/user-docs/</a>
<br>
<p>clarkmpi_at_[hidden] wrote:
<br>
<span class="quotelev1">&gt; I am looking for the basic steps for setup of an MPI cluster on a RHEL 
</span><br>
<span class="quotelev1">&gt; or Fedora system with mpi-1.1.
</span><br>
<span class="quotelev1">&gt; IBM used to have a tutorial on this but I cannot find a complete one now.
</span><br>
<span class="quotelev1">&gt; I have 3 white box computers which I would like to setup and run basic 
</span><br>
<span class="quotelev1">&gt; programs on and start working with MPI.
</span><br>
<span class="quotelev1">&gt; I currently plan to just set them up on a gigabit network.  All three 
</span><br>
<span class="quotelev1">&gt; are dual core if that makes a difference and I might get another one 
</span><br>
<span class="quotelev1">&gt; which is quad core in the near future.
</span><br>
<span class="quotelev1">&gt; I have found quite a few books on programming but not very much on the 
</span><br>
<span class="quotelev1">&gt; setup.  Judging by the size of the tutorial that was on IBM site 
</span><br>
<span class="quotelev1">&gt; someone has done a good job of making this simple and easy, but I 
</span><br>
<span class="quotelev1">&gt; haven't found the basic information on where to setup information on 
</span><br>
<span class="quotelev1">&gt; nodes and the like.
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5309.php">Terry Frankcombe: "Re: [OMPI users] setup of a basic system on RHEL or Fedora"</a>
<li><strong>Previous message:</strong> <a href="5307.php">clarkmpi_at_[hidden]: "[OMPI users] setup of a basic system on RHEL or Fedora"</a>
<li><strong>In reply to:</strong> <a href="5307.php">clarkmpi_at_[hidden]: "[OMPI users] setup of a basic system on RHEL or Fedora"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5309.php">Terry Frankcombe: "Re: [OMPI users] setup of a basic system on RHEL or Fedora"</a>
<li><strong>Reply:</strong> <a href="5309.php">Terry Frankcombe: "Re: [OMPI users] setup of a basic system on RHEL or Fedora"</a>
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
