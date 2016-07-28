<?
$subject_val = "[OMPI users] Runtime error while running mpirun";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 30 10:10:16 2009" -->
<!-- isoreceived="20091030141016" -->
<!-- sent="Fri, 30 Oct 2009 19:39:20 +0530" -->
<!-- isosent="20091030140920" -->
<!-- name="basant.lakhotiya_at_[hidden]" -->
<!-- email="basant.lakhotiya_at_[hidden]" -->
<!-- subject="[OMPI users] Runtime error while running mpirun" -->
<!-- id="23DA2F26196D9B4DB6F773D07E76756E13C685_at_BLR-EC-MBX05.wipro.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="23DA2F26196D9B4DB6F773D07E76756E13C684_at_BLR-EC-MBX05.wipro.com" -->
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
<strong>Subject:</strong> [OMPI users] Runtime error while running mpirun<br>
<strong>From:</strong> <a href="mailto:basant.lakhotiya_at_[hidden]?Subject=Re:%20[OMPI%20users]%20Runtime%20error%20while%20running%20mpirun"><em>basant.lakhotiya_at_[hidden]</em></a><br>
<strong>Date:</strong> 2009-10-30 10:09:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11024.php">Georg A. Reichstein: "Re: [OMPI users] Fortran Library Problem using openMPI"</a>
<li><strong>Previous message:</strong> <a href="11022.php">basant.lakhotiya_at_[hidden]: "[OMPI users] (no subject)"</a>
<li><strong>In reply to:</strong> <a href="11022.php">basant.lakhotiya_at_[hidden]: "[OMPI users] (no subject)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11029.php">Terry Dontje: "Re: [OMPI users] Runtime error while running mpirun"</a>
<li><strong>Maybe reply:</strong> <a href="11029.php">Terry Dontje: "Re: [OMPI users] Runtime error while running mpirun"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/11/11038.php">basant.lakhotiya_at_[hidden]: "Re: [OMPI users] Runtime error while running mpirun"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/11/11039.php">basant.lakhotiya_at_[hidden]: "Re: [OMPI users] Runtime error while running mpirun"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/11/11051.php">Shiqing Fan: "Re: [OMPI users] Runtime error while running mpirun"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi All,
<br>
&nbsp;
<br>
I compiled OpenMPI in windows server 2003 through Cygwin and also through CMake and Visual Studio. In both the method I successfully complied 
<br>
in cygwin I configured with following command
<br>
&nbsp;
<br>
./configure --enable-mca-no-build=timer-windows,memory_mallopt,maffinity,paffinity
<br>
&nbsp;
<br>
without these flags I was getting error.
<br>
&nbsp;
<br>
I got same error while running mpirun.exe/orterun.exe.
<br>
Can anyone help me to rectify these errors. 
<br>
&nbsp;
<br>
&nbsp;
<br>
C:\openmpi_sln\debug&gt;orterun.exe -np 2 ipconfig
<br>
[8puq2akbo:07476] mca: base: component_find: &quot;mca_paffinity_windows&quot; does
<br>
not appear to be a valid paffinity MCA dynamic component (ignored): The specifie
<br>
d module could not be found.
<br>
--------------------------------------------------------------------------
<br>
It looks like opal_init failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during opal_init; some of which are due to configuration or
<br>
environment problems.  This failure appears to be an internal failure;
<br>
here's some additional information (which may only be relevant to an
<br>
Open MPI developer):
<br>
&nbsp;
<br>
&nbsp;&nbsp;opal_paffinity_base_select failed
<br>
&nbsp;&nbsp;--&gt; Returned value -13 instead of OPAL_SUCCESS
<br>
--------------------------------------------------------------------------
<br>
[8puq2akbo:07476] [[INVALID],INVALID] ORTE_ERROR_LOG: Not found in file ..
<br>
\..\Linpack\Source\orte\runtime\orte_init.c at line 79
<br>
[8puq2akbo:07476] [[INVALID],INVALID] ORTE_ERROR_LOG: Not found in file ..
<br>
\..\..\..\Linpack\Source\orte\tools\orterun\orterun.c at line 570
<br>
&nbsp;
<br>
&nbsp;
<br>
&nbsp;
<br>
Thanks,
<br>
Basant
<br>
<p>Please do not print this email unless it is absolutely necessary. 

The information contained in this electronic message and any attachments to this message are intended for the exclusive use of the addressee(s) and may contain proprietary, confidential or privileged information. If you are not the intended recipient, you should not disseminate, distribute or copy this e-mail. Please notify the sender immediately and destroy all copies of this message and any attachments. 

WARNING: Computer viruses can be transmitted via email. The recipient should check this email and any attachments for the presence of viruses. The company accepts no liability for any damage caused by any virus transmitted by this email. 

www.wipro.com
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11023/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11024.php">Georg A. Reichstein: "Re: [OMPI users] Fortran Library Problem using openMPI"</a>
<li><strong>Previous message:</strong> <a href="11022.php">basant.lakhotiya_at_[hidden]: "[OMPI users] (no subject)"</a>
<li><strong>In reply to:</strong> <a href="11022.php">basant.lakhotiya_at_[hidden]: "[OMPI users] (no subject)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11029.php">Terry Dontje: "Re: [OMPI users] Runtime error while running mpirun"</a>
<li><strong>Maybe reply:</strong> <a href="11029.php">Terry Dontje: "Re: [OMPI users] Runtime error while running mpirun"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/11/11038.php">basant.lakhotiya_at_[hidden]: "Re: [OMPI users] Runtime error while running mpirun"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/11/11039.php">basant.lakhotiya_at_[hidden]: "Re: [OMPI users] Runtime error while running mpirun"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/11/11051.php">Shiqing Fan: "Re: [OMPI users] Runtime error while running mpirun"</a>
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
