<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Sep  7 01:21:41 2006" -->
<!-- isoreceived="20060907052141" -->
<!-- sent="Thu, 7 Sep 2006 14:21:51 +0900" -->
<!-- isosent="20060907052151" -->
<!-- name="Paul Fons" -->
<!-- email="paul-fons_at_[hidden]" -->
<!-- subject="[OMPI users] configuration file problem?" -->
<!-- id="1054C976-5494-44A2-A645-64131EA91FCE_at_aist.go.jp" -->
<!-- charset="US-ASCII" -->
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
<strong>Date:</strong> 2006-09-07 01:21:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1836.php">Eng. A.A. Isola: "[OMPI users] MPI_LOOKUP_NAME BUG"</a>
<li><strong>Previous message:</strong> <a href="1834.php">Brignone, Sergio: "[OMPI users] problems when creating library for AIX"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1837.php">Renato Golin: "Re: [OMPI users] configuration file problem?"</a>
<li><strong>Reply:</strong> <a href="1837.php">Renato Golin: "Re: [OMPI users] configuration file problem?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;&nbsp;&nbsp;I solved my own question the other day regarding a openmpi job  
<br>
running in parallel on my own g5 computer and failing on a remote.   
<br>
The problem apparently has to do with the fact there are two NICs in  
<br>
the remote machine.  By specifying a command line like:
<br>
<p>mpiexec --mca btl_tcp_if_include en0 -np 4 /opt/feff/feff85/ffmod2
<br>
<p>I was able to get my job running on the remote machine just fine (and  
<br>
a nice speed up too!).  I am puzzled why I can't put this option (to  
<br>
force the use of the en0 NIC) in the startup file ~/.openmpi/mca- 
<br>
params.conf.  In this file, I have the lines
<br>
<p>btl_base_include=tcp,sm,self
<br>
btl_tcp_if_include=en0
<br>
rds_hostfile_path = /Users/paulfons/Ports/openmpi-1.1.1/machinefile
<br>
<p>and yet when I drop the --mca parameter setting option from the  
<br>
command line, the mpiexec command hangs exactly as it did before when  
<br>
I didn't have the interface specified at all.  The machinefile is  
<br>
being read so I believe the config file is being read.  Any ideas?
<br>
<p><p>I would be happy if I could just solve this problem, but I do have  
<br>
another (more complicated) question.  Soon I will have yet another  
<br>
remote machine (a new &quot;woodcrest&quot; quad core macintosh) to connect  
<br>
to.  The two remote machines have two NICs.  Routine communications  
<br>
are set within the OS to use en0 (ethernet 0).  I would like openmpi  
<br>
to use en1 on the remote boxes and en0 on my main box (dual 3 GHz  
<br>
G5's) as I only have a single NIC on the main box.  To put it in  
<br>
other words, how can I specify a preferred interface on each box  
<br>
(hopefully not all from the command line!).
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Thanks.
<br>
<p><p><p><p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-1835/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1836.php">Eng. A.A. Isola: "[OMPI users] MPI_LOOKUP_NAME BUG"</a>
<li><strong>Previous message:</strong> <a href="1834.php">Brignone, Sergio: "[OMPI users] problems when creating library for AIX"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1837.php">Renato Golin: "Re: [OMPI users] configuration file problem?"</a>
<li><strong>Reply:</strong> <a href="1837.php">Renato Golin: "Re: [OMPI users] configuration file problem?"</a>
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
