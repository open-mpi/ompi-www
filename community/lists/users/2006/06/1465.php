<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jun 26 16:34:19 2006" -->
<!-- isoreceived="20060626203419" -->
<!-- sent="Mon, 26 Jun 2006 15:34:19 -0500" -->
<!-- isosent="20060626203419" -->
<!-- name="Benjamin Landsteiner" -->
<!-- email="landstei_at_[hidden]" -->
<!-- subject="[OMPI users] keyval parser error after v1.1 upgrade" -->
<!-- id="BE817836-AF03-4E1A-AEA9-65F5CDDE486B_at_stolaf.edu" -->
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
<strong>From:</strong> Benjamin Landsteiner (<em>landstei_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-06-26 16:34:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1466.php">Michael Kluskens: "Re: [OMPI users] keyval parser error after v1.1 upgrade"</a>
<li><strong>Previous message:</strong> <a href="1464.php">Patrick Jessee: "[OMPI users] &quot;mca_oob_tcp_accept: accept() failed&quot; messages with openmpi 1.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1466.php">Michael Kluskens: "Re: [OMPI users] keyval parser error after v1.1 upgrade"</a>
<li><strong>Reply:</strong> <a href="1466.php">Michael Kluskens: "Re: [OMPI users] keyval parser error after v1.1 upgrade"</a>
<li><strong>Maybe reply:</strong> <a href="1503.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] keyval parser error after v1.1 upgrade"</a>
<li><strong>Maybe reply:</strong> <a href="1513.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] keyval parser error after v1.1 upgrade"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello all,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I recently upgraded to v1.1 of Open MPI and ran into a problem on my  
<br>
head node that I can't seem to solve.  Upon running mpicc, mpiCC, mpic 
<br>
++, and so forth, I get an error like this:
<br>
<p>[root_at_wolfhead ~]# mpicc -o hello_mpi hello.c
<br>
[wolfhead:32258] keyval parser: error 1 reading file /usr/local/share/ 
<br>
openmpi/mpicc-wrapper-data.txt at line 1:
<br>
&nbsp;&nbsp;&nbsp;project=Open MPI
<br>
<p>I have uninstalled and reinstalled several times, and this error  
<br>
remains.  A few other notes:
<br>
* The machine is running Fedora Core 5 x86
<br>
* I did not reinstall v1.0.2 first, but have since done that (which  
<br>
solved a few other errors I had)
<br>
* Nearly identical machines (ie, the worker nodes) do NOT exhibit  
<br>
this problem
<br>
* The file referenced in the error (mpicc-wraper-data.txt) is  
<br>
identical to the same file on the worker nodes (as are permissions,  
<br>
et cetera)
<br>
* The resultant compiled file works just fine
<br>
* My ompi-output.tar.gz file can be found here: <a href="http://www.stolaf.edu/">http://www.stolaf.edu/</a> 
<br>
people/landstei/ompi-output.tar.gz
<br>
<p>Thanks,
<br>
Ben Landsteiner
<br>
<p>+--------------------+
<br>
Benjamin Landsteiner
<br>
St. Olaf College
<br>
landstei_at_[hidden]
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1466.php">Michael Kluskens: "Re: [OMPI users] keyval parser error after v1.1 upgrade"</a>
<li><strong>Previous message:</strong> <a href="1464.php">Patrick Jessee: "[OMPI users] &quot;mca_oob_tcp_accept: accept() failed&quot; messages with openmpi 1.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1466.php">Michael Kluskens: "Re: [OMPI users] keyval parser error after v1.1 upgrade"</a>
<li><strong>Reply:</strong> <a href="1466.php">Michael Kluskens: "Re: [OMPI users] keyval parser error after v1.1 upgrade"</a>
<li><strong>Maybe reply:</strong> <a href="1503.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] keyval parser error after v1.1 upgrade"</a>
<li><strong>Maybe reply:</strong> <a href="1513.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] keyval parser error after v1.1 upgrade"</a>
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
