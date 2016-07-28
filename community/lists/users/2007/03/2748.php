<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Mar  2 13:12:11 2007" -->
<!-- isoreceived="20070302181211" -->
<!-- sent="Fri, 2 Mar 2007 13:12:04 -0500" -->
<!-- isosent="20070302181204" -->
<!-- name="Grismer, Matthew J Civ AFRL/VAAC" -->
<!-- email="Matthew.Grismer_at_[hidden]" -->
<!-- subject="[OMPI users] Current working directory issue" -->
<!-- id="2B00361EE3107A4F88383EC1B041DC9A016AD499_at_VFOHMLAO01.Enterprise.afmc.ds.af.mil" -->
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
<strong>From:</strong> Grismer, Matthew J Civ AFRL/VAAC (<em>Matthew.Grismer_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-03-02 13:12:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2749.php">Jeff Squyres: "Re: [OMPI users] mpirun does not set the PATH and LD_LIBRARY_PATH under zsh"</a>
<li><strong>Previous message:</strong> <a href="2747.php">George Bosilca: "Re: [OMPI users] Cygwin build"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2756.php">Jeff Squyres: "Re: [OMPI users] Current working directory issue"</a>
<li><strong>Reply:</strong> <a href="2756.php">Jeff Squyres: "Re: [OMPI users] Current working directory issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm using OpenMPI on an Xserve cluster running OS X Server 10.4.8. The
<br>
user directories exist on an XserveRAID connected to the master node via
<br>
fibre channel.  So, on the master node the full pathname for the user
<br>
directories is /Volumes/RAID1/users1.  The compute nodes of the cluster
<br>
automount the user directories via NFS, so the full path to the user
<br>
directories appears on the nodes as /xhome/users1.  I created a hostfile
<br>
list of all the compute nodes on the cluster, not including the master
<br>
node.  When I attempt to run a program in my home directory matt from
<br>
the master node with
<br>
<p>&nbsp;
<br>
<p>mpirun -hostfile nodes -np 4 program
<br>
<p>&nbsp;
<br>
<p>it fails because it cannot find program.  If I add the -wdir option and
<br>
specify the directory as /xhome/users1/matt, everything is fine. 
<br>
<p>&nbsp;
<br>
<p>My question is this, how does OpenMPI determine your working directory,
<br>
and is there a way to fix this without the -wdir option?  For example,
<br>
if you look at the PWD environment variable, it is always
<br>
/xhome/users1/matt, even on the master.  If you use the pwd command,
<br>
however, you get different the two different results on the master and
<br>
the nodes.
<br>
<p>&nbsp;
<br>
<p>Thanks.
<br>
<p>&nbsp;
<br>
<p>Matt
<br>
<p>&nbsp;
<br>
<p>_____________________________________________________
<br>
<p>Matthew Grismer
<br>
<p>&nbsp;
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-2748/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2749.php">Jeff Squyres: "Re: [OMPI users] mpirun does not set the PATH and LD_LIBRARY_PATH under zsh"</a>
<li><strong>Previous message:</strong> <a href="2747.php">George Bosilca: "Re: [OMPI users] Cygwin build"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2756.php">Jeff Squyres: "Re: [OMPI users] Current working directory issue"</a>
<li><strong>Reply:</strong> <a href="2756.php">Jeff Squyres: "Re: [OMPI users] Current working directory issue"</a>
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
