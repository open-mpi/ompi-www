<?
$subject_val = "[OMPI users] difference of behaviour for MPI_Publish_name between openmpi-1.4.5 and openmpi-1.8.4";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan  7 06:14:43 2015" -->
<!-- isoreceived="20150107111443" -->
<!-- sent="Wed, 07 Jan 2015 12:14:49 +0100" -->
<!-- isosent="20150107111449" -->
<!-- name="Bernard Secher" -->
<!-- email="bernard.secher_at_[hidden]" -->
<!-- subject="[OMPI users] difference of behaviour for MPI_Publish_name between openmpi-1.4.5 and openmpi-1.8.4" -->
<!-- id="54AD1529.2060408_at_cea.fr" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI users] difference of behaviour for MPI_Publish_name between openmpi-1.4.5 and openmpi-1.8.4<br>
<strong>From:</strong> Bernard Secher (<em>bernard.secher_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-01-07 06:14:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26115.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Accessing Process Affinity within MPI Program"</a>
<li><strong>Previous message:</strong> <a href="26113.php">Saliya Ekanayake: "Re: [OMPI users] Accessing Process Affinity within MPI Program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26117.php">Ralph Castain: "Re: [OMPI users] difference of behaviour for MPI_Publish_name between openmpi-1.4.5 and openmpi-1.8.4"</a>
<li><strong>Reply:</strong> <a href="26117.php">Ralph Castain: "Re: [OMPI users] difference of behaviour for MPI_Publish_name between openmpi-1.4.5 and openmpi-1.8.4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>With the version openmpi-1.4.5 I got an error  when I tried to publish 
<br>
the same name twice with the MPI_Publish_name routine
<br>
With the version openmpi-1.8.4 I got no error when I published the same 
<br>
name twice with the MPI_Publish_name routine
<br>
<p>I used the attached script and source code to perform the test.
<br>
<p>With this test, it works well with openmpi-1.4.5, but I get a deadlock 
<br>
with openmpi-1.8.4. I can suppress the deadlock with openmpi-1.8.4 if I 
<br>
modify the shell script and add a &quot;sleep 1&quot; command between the 2 mpirun 
<br>
commands.
<br>
<p>Bernard
<br>
<p>

<br><hr>
<ul>
<li>text/x-c++src attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26114/testMPI2.cxx">testMPI2.cxx</a>
</ul>
<!-- attachment="testMPI2.cxx" -->
<hr>
<ul>
<li>application/x-csh attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26114/launch_testMPI2.csh">launch_testMPI2.csh</a>
</ul>
<!-- attachment="launch_testMPI2.csh" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26115.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Accessing Process Affinity within MPI Program"</a>
<li><strong>Previous message:</strong> <a href="26113.php">Saliya Ekanayake: "Re: [OMPI users] Accessing Process Affinity within MPI Program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26117.php">Ralph Castain: "Re: [OMPI users] difference of behaviour for MPI_Publish_name between openmpi-1.4.5 and openmpi-1.8.4"</a>
<li><strong>Reply:</strong> <a href="26117.php">Ralph Castain: "Re: [OMPI users] difference of behaviour for MPI_Publish_name between openmpi-1.4.5 and openmpi-1.8.4"</a>
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
