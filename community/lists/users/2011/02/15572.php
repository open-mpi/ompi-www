<?
$subject_val = "Re: [OMPI users] libmpi.so.0 not found during gdb debugging";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 11 09:29:04 2011" -->
<!-- isoreceived="20110211142904" -->
<!-- sent="Fri, 11 Feb 2011 19:58:57 +0530" -->
<!-- isosent="20110211142857" -->
<!-- name="swagat mishra" -->
<!-- email="swagatmishra2007_at_[hidden]" -->
<!-- subject="Re: [OMPI users] libmpi.so.0 not found during gdb debugging" -->
<!-- id="AANLkTikp=uyr4SiiBmo5c5pK+DW7GRo15-VZbHDK7brc_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4D553D44.70006_at_ias.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] libmpi.so.0 not found during gdb debugging<br>
<strong>From:</strong> swagat mishra (<em>swagatmishra2007_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-11 09:28:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15573.php">Barrett, Brian W: "Re: [OMPI users] MPI_Win_create with size=0 expose memory anyway"</a>
<li><strong>Previous message:</strong> <a href="15571.php">Prentice Bisbal: "Re: [OMPI users] libmpi.so.0 not found during gdb debugging"</a>
<li><strong>In reply to:</strong> <a href="15571.php">Prentice Bisbal: "Re: [OMPI users] libmpi.so.0 not found during gdb debugging"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
yes setting LD_LIBRARY_PATH solved the problem
<br>
thanks for the help
<br>
On Fri, Feb 11, 2011 at 7:14 PM, Prentice Bisbal &lt;prentice_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;  swagat mishra wrote:
</span><br>
<span class="quotelev2">&gt; &gt; hello everyone,
</span><br>
<span class="quotelev2">&gt; &gt; i have a network of systems connected over lan with each computer
</span><br>
<span class="quotelev2">&gt; &gt; running ubuntu. openmpi 1.4.x is installed on 1 machine and the
</span><br>
<span class="quotelev2">&gt; &gt; installation is mounted on other nodes through Networking File
</span><br>
<span class="quotelev2">&gt; &gt; System(NFS). the source program and compiled file(a.out) are present in
</span><br>
<span class="quotelev2">&gt; &gt; the mounted directory
</span><br>
<span class="quotelev2">&gt; &gt; i run my programs by the following command:
</span><br>
<span class="quotelev2">&gt; &gt; /opt/project/bin/mpirun -np 4 --prefix  /opt/project/ --hostfile
</span><br>
<span class="quotelev2">&gt; &gt; hostfile a.out
</span><br>
<span class="quotelev2">&gt; &gt; i have not set LD_LIBRARY_PATH but as i use --prefix mpirun works
</span><br>
<span class="quotelev2">&gt; &gt; successfully
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; however as per the open mpi debugging faq:
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/faq/?category=debugging">http://www.open-mpi.org/faq/?category=debugging</a>
</span><br>
<span class="quotelev2">&gt; &gt; when i run
</span><br>
<span class="quotelev2">&gt; &gt; /opt/project/bin/mpirun -np 4 --prefix  /opt/project/ --hostfile
</span><br>
<span class="quotelev2">&gt; &gt; hostfile -x DISPLAY=10.0.0.1:0.0 xterm -e gdb a.out
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 4 xterm windows are opened with gdb running as expected. however when i
</span><br>
<span class="quotelev2">&gt; &gt; give the command start to gdb in the windows corresponding to remote
</span><br>
<span class="quotelev2">&gt; &gt; nodes, i get the error:
</span><br>
<span class="quotelev2">&gt; &gt; libmpi.so.0 not found: no such file/directory
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; as mentioned other mpi jobs run fine with mpirun
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; when i execute
</span><br>
<span class="quotelev2">&gt; &gt; /opt/project/bin/mpirun -np 4 --prefix  /opt/project/ -x
</span><br>
<span class="quotelev2">&gt; &gt; DISPLAY=10.0.0.1:0.0 xterm -e gdb a.out ,the debugging continues
</span><br>
<span class="quotelev1">&gt; succesfully
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; please help
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You need to set LD_LIBRARY_PATH to include the path to the OpenMPI
</span><br>
<span class="quotelev1">&gt; libraries. The --prefix option works for OpenMPI only; it has no effect
</span><br>
<span class="quotelev1">&gt; on other programs. You also need to make sure that the LD_LIBRARY_PATH
</span><br>
<span class="quotelev1">&gt; variable is correctly passed along to the other OpenMPI programs. For
</span><br>
<span class="quotelev1">&gt; processes on other hosts, this is usually done by editing your shell's
</span><br>
<span class="quotelev1">&gt; rc file for non-interactive logins (.bash_profile for bash).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Prentice
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15572/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15573.php">Barrett, Brian W: "Re: [OMPI users] MPI_Win_create with size=0 expose memory anyway"</a>
<li><strong>Previous message:</strong> <a href="15571.php">Prentice Bisbal: "Re: [OMPI users] libmpi.so.0 not found during gdb debugging"</a>
<li><strong>In reply to:</strong> <a href="15571.php">Prentice Bisbal: "Re: [OMPI users] libmpi.so.0 not found during gdb debugging"</a>
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
