<?
$subject_val = "[OMPI users] defining different values for same environment variable";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 27 12:36:10 2009" -->
<!-- isoreceived="20090227173610" -->
<!-- sent="Fri, 27 Feb 2009 18:36:05 +0100" -->
<!-- isosent="20090227173605" -->
<!-- name="Nicolas Deladerriere" -->
<!-- email="nicolas.deladerriere_at_[hidden]" -->
<!-- subject="[OMPI users] defining different values for same environment variable" -->
<!-- id="7dd7eb6e0902270936i7d397955y43949be00a12be73_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] defining different values for same environment variable<br>
<strong>From:</strong> Nicolas Deladerriere (<em>nicolas.deladerriere_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-27 12:36:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8247.php">Matt Hughes: "Re: [OMPI users] defining different values for same environment variable"</a>
<li><strong>Previous message:</strong> <a href="8245.php">Pavel Shamis (Pasha): "Re: [OMPI users] openib RETRY EXCEEDED ERROR"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8247.php">Matt Hughes: "Re: [OMPI users] defining different values for same environment variable"</a>
<li><strong>Reply:</strong> <a href="8247.php">Matt Hughes: "Re: [OMPI users] defining different values for same environment variable"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello
<br>
<p>I am looking for a way to set environment variable with different value on
<br>
each node before running MPI executable. (not only export the environment
<br>
variable !)
<br>
Let's consider that I have cluster with two nodes (n001 and n002) and I want
<br>
to set the environment variable GMON_OUT_PREFIX with different value on each
<br>
node.
<br>
<p>I would like to set this variable with the following form :
<br>
*nicolas_at_n001 % setenv GMON_OUT_PREFIX 'gmon.out_'`/bin/uname -n`
<br>
nicolas_at_n001 % echo $GMON_OUT_PREFIX
<br>
gmon.out_n001*
<br>
<p>my mpirun command looks like :
<br>
*nicolas_at_n001 % cat CLUSTER_NODES
<br>
n001 slots=1
<br>
n002 slots=1
<br>
nicolas_at_n001 % mpirun -np 2 --bynode --hostfile CLUSTER_NODES myexe*
<br>
<p>I would like to export the GMON_OUT_PREFIX environment variable in order to
<br>
have &#171; gmon.out_n001 &#187; on first node and &#171; gmon.out_n002 &#187; on second one.
<br>
<p>I cannot use '-x' option of mpirun command since it is only use to export
<br>
(not set) variable.
<br>
MPI executable is running on cluster nodes where HOME directory is not
<br>
mounted such that I cannot use ~/.cshrc file.
<br>
<p>Is there another way to do it?
<br>
<p><p>Regards
<br>
Nicolas
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-8246/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8247.php">Matt Hughes: "Re: [OMPI users] defining different values for same environment variable"</a>
<li><strong>Previous message:</strong> <a href="8245.php">Pavel Shamis (Pasha): "Re: [OMPI users] openib RETRY EXCEEDED ERROR"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8247.php">Matt Hughes: "Re: [OMPI users] defining different values for same environment variable"</a>
<li><strong>Reply:</strong> <a href="8247.php">Matt Hughes: "Re: [OMPI users] defining different values for same environment variable"</a>
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
