<?
$subject_val = "[OMPI users] Strange OpenMPI messages";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 14 04:48:10 2012" -->
<!-- isoreceived="20120214094810" -->
<!-- sent="Tue, 14 Feb 2012 12:48:05 +0300" -->
<!-- isosent="20120214094805" -->
<!-- name="Tohiko Looka" -->
<!-- email="tohiko.looka_at_[hidden]" -->
<!-- subject="[OMPI users] Strange OpenMPI messages" -->
<!-- id="CALd0-5320BeAY4bVQhx44KHBaWbQj_dpud60bGVZ8BZ8BfrvcA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Strange OpenMPI messages<br>
<strong>From:</strong> Tohiko Looka (<em>tohiko.looka_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-14 04:48:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18450.php">Richard Bardwell: "Re: [OMPI users] MPI orte_init fails on remote nodes"</a>
<li><strong>Previous message:</strong> <a href="18448.php">Jeff Squyres: "Re: [OMPI users] OpenMPI build fails with &quot;undefined reference to symbol 'opal_cmd_line_get_usage_msg'&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18453.php">Jeff Squyres: "Re: [OMPI users] Strange OpenMPI messages"</a>
<li><strong>Reply:</strong> <a href="18453.php">Jeff Squyres: "Re: [OMPI users] Strange OpenMPI messages"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Greetings,
<br>
<p>Until today I was running my openmpi applications with no errors/warnings
<br>
Today I restarted my computer (possibly after an automatic openmpi update)
<br>
and got these warnings when
<br>
running my program
<br>
[tohiko_at_kw12614 1d]$ mpirun -x LD_LIBRARY_PATH -hostfile hosts -np 10 hello
<br>
librdmacm: couldn't read ABI version.
<br>
librdmacm: assuming: 4
<br>
CMA: unable to get RDMA device list
<br>
--------------------------------------------------------------------------
<br>
[[21652,1],0]: A high-performance Open MPI point-to-point messaging module
<br>
was unable to find any relevant network interfaces:
<br>
<p>Module: OpenFabrics (openib)
<br>
&nbsp;&nbsp;Host: kw12614
<br>
<p>Another transport will be used instead, although this may result in
<br>
lower performance.
<br>
--------------------------------------------------------------------------
<br>
[kw12614:03195] 10 more processes have sent help message
<br>
help-mpi-btl-base.txt / btl:no-nics
<br>
[kw12614:03195] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to see
<br>
all help / error messages
<br>
<p><p>Is this normal? And how come it happened now?
<br>
-- Tohiko
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18449/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18450.php">Richard Bardwell: "Re: [OMPI users] MPI orte_init fails on remote nodes"</a>
<li><strong>Previous message:</strong> <a href="18448.php">Jeff Squyres: "Re: [OMPI users] OpenMPI build fails with &quot;undefined reference to symbol 'opal_cmd_line_get_usage_msg'&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18453.php">Jeff Squyres: "Re: [OMPI users] Strange OpenMPI messages"</a>
<li><strong>Reply:</strong> <a href="18453.php">Jeff Squyres: "Re: [OMPI users] Strange OpenMPI messages"</a>
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
