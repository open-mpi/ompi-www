<?
$subject_val = "[OMPI users] Error when using more than 88 processors for a specific executable -Abyss";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 14 14:07:55 2011" -->
<!-- isoreceived="20111014180755" -->
<!-- sent="Fri, 14 Oct 2011 23:37:49 +0530" -->
<!-- isosent="20111014180749" -->
<!-- name="Ashwani Kumar Mishra" -->
<!-- email="ashwanimishra_at_[hidden]" -->
<!-- subject="[OMPI users] Error when using more than 88 processors for a specific executable -Abyss" -->
<!-- id="CAAx9Y01erey7gi0wdoGLfkMMzqnNeowG4q3XKj8=z+XRLCELKg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Error when using more than 88 processors for a specific executable -Abyss<br>
<strong>From:</strong> Ashwani Kumar Mishra (<em>ashwanimishra_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-10-14 14:07:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17542.php">Ralph Castain: "Re: [OMPI users] Error when using more than 88 processors for a specific executable -Abyss"</a>
<li><strong>Previous message:</strong> <a href="17540.php">Francesco Salvadore: "Re: [OMPI users] MPI_Waitany segfaults or (maybe) hangs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17542.php">Ralph Castain: "Re: [OMPI users] Error when using more than 88 processors for a specific executable -Abyss"</a>
<li><strong>Reply:</strong> <a href="17542.php">Ralph Castain: "Re: [OMPI users] Error when using more than 88 processors for a specific executable -Abyss"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
When i try to run the following command i receive the following error when i
<br>
try to submit this job on the cluster having 40 nodes with each node having
<br>
8 processor &amp; 8 GB RAM:
<br>
<p>Both the command work well, as long as i use only upto 88 processors in the
<br>
cluster, but the moment i allocate more than 88 processors it gives me the
<br>
below 2 errors:
<br>
<p>I tried to set the ulimit to unlimited &amp; setting mca parameter
<br>
opal_set_max_sys_limits to 1 but still the problem wont go.
<br>
<p><p>$ mpirun=/*opt*/psc/ompi/bin/mpirun abyss-pe np=100 name=cattle k=50 n=10
<br>
in=s_1_1_sequence.txt
<br>
<p>/opt/mpi/openmpi/1.3.3/intel/
<br>
bin/mpirun -np 100 ABYSS-P -k50 -q3  --coverage-hist=coverage.hist -s
<br>
cattle-bubbles.fa  -o cattle-1.fa s_1_1_sequence.txt
<br>
[coe:19807 &lt;<a href="http://coe.iitd.ac.in:19807/">http://coe.iitd.ac.in:19807/</a>&gt;] [[62863,0],0] ORTE_ERROR_LOG: The
<br>
system limit on number of pipes a process can open was reached in file
<br>
base/iof_base_setup.c at line 107
<br>
[coe.:19807 &lt;<a href="http://coe.iitd.ac.in:19807/">http://coe.iitd.ac.in:19807/</a>&gt;] [[62863,0],0] ORTE_ERROR_LOG:
<br>
The system limit on number of pipes a process can open was reached in file
<br>
odls_default_module.c at line 203
<br>
[coe.:19807 &lt;<a href="http://coe.iitd.ac.in:19807/">http://coe.iitd.ac.in:19807/</a>&gt;] [[62863,0],0] ORTE_ERROR_LOG:
<br>
The system limit on number of network connections a process can open was
<br>
reached in file oob_tcp.c at line 447
<br>
--------------------------------------------------------------------------
<br>
Error: system limit exceeded on number of network connections that can be
<br>
open
<br>
<p>This can be resolved by setting the mca parameter opal_set_max_sys_limits to
<br>
1,
<br>
increasing your limit descriptor setting (using limit or ulimit commands),
<br>
or asking the system administrator to increase the system limit.
<br>
--------------------------------------------------------------------------
<br>
make: *** [cattle-1.fa] Error 1
<br>
<p><p><p>*
<br>
When i submit the same job through qsub, i receive the following error:*
<br>
$ qsub  -cwd -pe  orte 100 -o qsub.out -e qsub.err -b y -N  abyss `which
<br>
mpirun` /home/genome/abyss/bin/ABYSS-P -k 50 s_1_1_sequence.txt -o av
<br>
<p><p>[compute-0-19.local][[28273,1]
<br>
,125][btl_tcp_endpoint.c:636:mca_btl_tcp_endpoint_complete_connect]
<br>
connect() to 173.16.255.231 failed: Connection refused (111)
<br>
[compute-0-19.local][[28273,1],127][btl_tcp_endpoint.c:636:mca_btl_tcp_endpoint_complete_connect]
<br>
connect() to 173.16.255.231 failed: Connection refused (111)
<br>
[compute-0-23.local][[28273,1],135][btl_tcp_endpoint.c:636:mca_btl_tcp_endpoint_complete_connect]
<br>
connect() to 173.16.255.228 failed: Connection refused (111)
<br>
[compute-0-23.local][[28273,1],133][btl_tcp_endpoint.c:636:mca_btl_tcp_endpoint_complete_connect]
<br>
connect() to 173.16.255.228 failed: Connection refused (111)
<br>
[compute-0-4.local][[28273,1],113][btl_tcp_endpoint.c:636:mca_btl_tcp_endpoint_complete_connect]
<br>
connect() to 173.16.255.231 failed: Connection refused (111)
<br>
<p><p><p>Best Regards,
<br>
Ashwani
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17541/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17542.php">Ralph Castain: "Re: [OMPI users] Error when using more than 88 processors for a specific executable -Abyss"</a>
<li><strong>Previous message:</strong> <a href="17540.php">Francesco Salvadore: "Re: [OMPI users] MPI_Waitany segfaults or (maybe) hangs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17542.php">Ralph Castain: "Re: [OMPI users] Error when using more than 88 processors for a specific executable -Abyss"</a>
<li><strong>Reply:</strong> <a href="17542.php">Ralph Castain: "Re: [OMPI users] Error when using more than 88 processors for a specific executable -Abyss"</a>
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
