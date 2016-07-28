<?
$subject_val = "[OMPI users] OpenMPI 1.8.4 - Java Library - allToAllv()";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Apr  5 15:11:48 2015" -->
<!-- isoreceived="20150405191148" -->
<!-- sent="Sun, 5 Apr 2015 13:11:27 -0600" -->
<!-- isosent="20150405191127" -->
<!-- name="Hamidreza Anvari" -->
<!-- email="hr.anvari_at_[hidden]" -->
<!-- subject="[OMPI users] OpenMPI 1.8.4 - Java Library - allToAllv()" -->
<!-- id="CACRiV2ivhqAHgTRbGZAQSA2gACjgAk3RC+Hix=d7OSAqJVAM5A_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] OpenMPI 1.8.4 - Java Library - allToAllv()<br>
<strong>From:</strong> Hamidreza Anvari (<em>hr.anvari_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-05 15:11:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26611.php">Lane, William: "Re: [OMPI users] OpenMPI 1.8.2 problems on CentOS 6.3"</a>
<li><strong>Previous message:</strong> <a href="26609.php">Andreas Sch&#228;fer: "Re: [OMPI users] Hang in MPI_Send"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26613.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.8.4 - Java Library - allToAllv()"</a>
<li><strong>Reply:</strong> <a href="26613.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.8.4 - Java Library - allToAllv()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I am converting an existing MPI program in C++ to Java using OpenMPI 1.8.4,
<br>
At some point I have a allToAllv() code which works fine in C++ but
<br>
receives error in Java version:
<br>
<p>MPI.COMM_WORLD.allToAllv(data, subpartition_size, subpartition_offset,
<br>
MPI.INT,
<br>
data2,subpartition_size2,subpartition_offset2,MPI.INT);
<br>
<p>Error:
<br>
*** An error occurred in MPI_Alltoallv
<br>
*** reported by process [3621322753,9223372036854775811]
<br>
*** on communicator MPI_COMM_WORLD
<br>
*** MPI_ERR_TRUNCATE: message truncated
<br>
*** MPI_ERRORS_ARE_FATAL (processes in this communicator will now abort,
<br>
***    and potentially your MPI job)
<br>
3 more processes have sent help message help-mpi-errors.txt /
<br>
mpi_errors_are_fatal
<br>
Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to see all help / error
<br>
messages
<br>
<p>Here are the values for parameters:
<br>
<p>data.length = 5
<br>
data2.length = 20
<br>
<p>---------- Rank 0 of 4 ----------
<br>
subpartition_offset:0,2,3,3,
<br>
subpartition_size:2,1,0,2,
<br>
subpartition_offset2:0,5,10,15,
<br>
subpartition_size2:5,5,5,5,
<br>
----------
<br>
---------- Rank 1 of 4 ----------
<br>
subpartition_offset:0,2,3,4,
<br>
subpartition_size:2,1,1,1,
<br>
subpartition_offset2:0,5,10,15,
<br>
subpartition_size2:5,5,5,5,
<br>
----------
<br>
---------- Rank 2 of 4 ----------
<br>
subpartition_offset:0,1,2,3,
<br>
subpartition_size:1,1,1,2,
<br>
subpartition_offset2:0,5,10,15,
<br>
subpartition_size2:5,5,5,5,
<br>
----------
<br>
---------- Rank 3 of 4 ----------
<br>
subpartition_offset:0,1,2,4,
<br>
subpartition_size:1,1,2,1,
<br>
subpartition_offset2:0,5,10,15,
<br>
subpartition_size2:5,5,5,5,
<br>
----------
<br>
<p>Again, this is a code which works in C++ version.
<br>
<p>Any help or advice is greatly appreciated.
<br>
<p>Thanks,
<br>
-- HR
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26610/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26611.php">Lane, William: "Re: [OMPI users] OpenMPI 1.8.2 problems on CentOS 6.3"</a>
<li><strong>Previous message:</strong> <a href="26609.php">Andreas Sch&#228;fer: "Re: [OMPI users] Hang in MPI_Send"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26613.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.8.4 - Java Library - allToAllv()"</a>
<li><strong>Reply:</strong> <a href="26613.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.8.4 - Java Library - allToAllv()"</a>
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
