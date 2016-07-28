<?
$subject_val = "[OMPI users] libmpi.so.0 not found during gdb debugging";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 10 12:43:29 2011" -->
<!-- isoreceived="20110210174329" -->
<!-- sent="Thu, 10 Feb 2011 23:13:03 +0530" -->
<!-- isosent="20110210174303" -->
<!-- name="swagat mishra" -->
<!-- email="swagatmishra2007_at_[hidden]" -->
<!-- subject="[OMPI users] libmpi.so.0 not found during gdb debugging" -->
<!-- id="AANLkTimr5RAUnqixehDGLD6uPWNDETOMmXXXJb2N2hXc_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] libmpi.so.0 not found during gdb debugging<br>
<strong>From:</strong> swagat mishra (<em>swagatmishra2007_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-10 12:43:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15555.php">Tena Sakai: "Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)"</a>
<li><strong>Previous message:</strong> <a href="15553.php">Jeremiah Willcock: "Re: [OMPI users] MPI_ERR_IN_STATUS from MPI_Bcast?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15571.php">Prentice Bisbal: "Re: [OMPI users] libmpi.so.0 not found during gdb debugging"</a>
<li><strong>Reply:</strong> <a href="15571.php">Prentice Bisbal: "Re: [OMPI users] libmpi.so.0 not found during gdb debugging"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
hello everyone,
<br>
i have a network of systems connected over lan with each computer running
<br>
ubuntu. openmpi 1.4.x is installed on 1 machine and the installation is
<br>
mounted on other nodes through Networking File System(NFS). the source
<br>
program and compiled file(a.out) are present in the mounted directory
<br>
i run my programs by the following command:
<br>
/opt/project/bin/mpirun -np 4 --prefix  /opt/project/ --hostfile hostfile
<br>
a.out
<br>
i have not set LD_LIBRARY_PATH but as i use --prefix mpirun works
<br>
successfully
<br>
<p>however as per the open mpi debugging faq:
<br>
<a href="http://www.open-mpi.org/faq/?category=debugging">http://www.open-mpi.org/faq/?category=debugging</a>
<br>
when i run
<br>
&nbsp;/opt/project/bin/mpirun -np 4 --prefix  /opt/project/ --hostfile hostfile
<br>
-x DISPLAY=10.0.0.1:0.0 xterm -e gdb a.out
<br>
<p>4 xterm windows are opened with gdb running as expected. however when i give
<br>
the command start to gdb in the windows corresponding to remote nodes, i get
<br>
the error:
<br>
libmpi.so.0 not found: no such file/directory
<br>
<p>as mentioned other mpi jobs run fine with mpirun
<br>
<p>when i execute
<br>
/opt/project/bin/mpirun -np 4 --prefix  /opt/project/ -x DISPLAY=10.0.0.1:0.0
<br>
xterm -e gdb a.out ,the debugging continues succesfully
<br>
<p>please help
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15554/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15555.php">Tena Sakai: "Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)"</a>
<li><strong>Previous message:</strong> <a href="15553.php">Jeremiah Willcock: "Re: [OMPI users] MPI_ERR_IN_STATUS from MPI_Bcast?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15571.php">Prentice Bisbal: "Re: [OMPI users] libmpi.so.0 not found during gdb debugging"</a>
<li><strong>Reply:</strong> <a href="15571.php">Prentice Bisbal: "Re: [OMPI users] libmpi.so.0 not found during gdb debugging"</a>
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
