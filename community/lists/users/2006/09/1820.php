<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Sep  5 03:42:43 2006" -->
<!-- isoreceived="20060905074243" -->
<!-- sent="Tue, 5 Sep 2006 16:42:42 +0900" -->
<!-- isosent="20060905074242" -->
<!-- name="Paul Fons" -->
<!-- email="paul-fons_at_[hidden]" -->
<!-- subject="[OMPI users] Remote node processes stuck" -->
<!-- id="4098DF1D-1BE9-4EB0-BA8C-DEC89E8EA422_at_aist.go.jp" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="mailman.9249.1157440723.4352.users_at_open-mpi.org" -->
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
<strong>From:</strong> Paul Fons (<em>paul-fons_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-09-05 03:42:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1821.php">Eng. A.A. Isola: "[OMPI users] MPI_Lookup_name ERROR!!"</a>
<li><strong>Previous message:</strong> <a href="1819.php">Aidaros Dev: "[OMPI users] Does current Intel dual processor support MPI?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;&nbsp;I have what is probably a simple question (I hope). I have built  
<br>
openmpi-1.1.1 from source using gfortran on Mac OS X 10.4.7.  I can  
<br>
run parallel jobs on my own using the mpiexec -np command.  My  
<br>
machinefile contains the lines:
<br>
<p>tachyon.a04.aist.go.jp
<br>
tachyon.a04.aist.go.jp
<br>
gehirn.local
<br>
gehirn.local
<br>
<p>(the .local uses zeroconfig to find the address of gehirn -- it  
<br>
works).  Running a parallel job on my own machine (-np 2) everything  
<br>
is fine. The job runs in parallel; it is faster and the output is  
<br>
correct.  When I try running with -np 4 to use an additional g5 dual  
<br>
cpu machine, my job hangs whilst churning large amounts of cpu  
<br>
(runaway processes).  This continues without output until I break the  
<br>
process with a ^C (which terminates them on all machines).  I am  
<br>
running the task via ssh using a ssh-agent.  Might anyone have any  
<br>
idea what possibly could be wrong.  I have attached my config.log and  
<br>
ompi_info files (bzip2'ed) to this mail as specified in the mailing  
<br>
list instructions.  This should be a simple thing I am guessing, but  
<br>
it is taking too much time to figure it out on my own (e.g. I  
<br>
couldn't find a FAQ or a user question/reply that answered this).
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Paul Fons
<br>



<br><p>
<p><p>Script started on Tue Sep  5 16:01:18 2006
<br>
[tachyon:exafs/feff85/zno] paulfons% mpiexec -machinefile machinefile  
<br>
-np 2 host name
<br>
<p>tachyon.a04.aist.go.jp
<br>
tachyon.a04.aist.go.jp
<br>
[tachyon:exafs/feff85/zno] paulfons% mpiexec -machinefile machinefile  
<br>
-np 2 /opt/feff/feff85/rdinp
<br>
<p>Number of processors =            2
<br>
Feff 8.40
<br>
&nbsp;&nbsp;&nbsp;XANES:
<br>
name:     zincite ZnO
<br>
formula:  ZnO
<br>
sites:    Zn1,O1
<br>
refer1:   wyckoff, vol 1, ch III, p 111
<br>
refer2:
<br>
schoen:
<br>
notes1:
<br>
[tachyon:exafs/feff85/zno] paulfons% mpiexec -machinefile machinefile  
<br>
-np 2 hostname
<br>
<p>tachyon.a04.aist.go.jp
<br>
tachyon.a04.aist.go.jp
<br>
dhcp054092.a04.aist.go.jp
<br>
dhcp054092.a04.aist.go.jp
<br>
[tachyon:exafs/feff85/zno] paulfons% mpiexec -machinefile machinefile  
<br>
-np 4 /opt/feff/feff85/rdinp
<br>
<p>Number of processors =            4
<br>
Feff 8.40
<br>
&nbsp;&nbsp;&nbsp;XANES:
<br>
name:     zincite ZnO
<br>
formula:  ZnO
<br>
sites:    Zn1,O1
<br>
refer1:   wyckoff, vol 1, ch III, p 111
<br>
refer2:
<br>
schoen:
<br>
notes1:
<br>
<p><p>^Cmpiexec: killing job...
<br>
<p><p><p><p><p><p><p>
<br><hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-1820/config.log.bz2">config.log.bz2</a>
</ul>
<!-- attachment="config.log.bz2" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-1820/ompi_info.log.bz2">ompi_info.log.bz2</a>
</ul>
<!-- attachment="ompi_info.log.bz2" -->
<hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-1820/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1821.php">Eng. A.A. Isola: "[OMPI users] MPI_Lookup_name ERROR!!"</a>
<li><strong>Previous message:</strong> <a href="1819.php">Aidaros Dev: "[OMPI users] Does current Intel dual processor support MPI?"</a>
<!-- nextthread="start" -->
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
