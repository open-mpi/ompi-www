<?
$subject_val = "Re: [OMPI users] mpirun error output";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 20 13:58:46 2013" -->
<!-- isoreceived="20130320175846" -->
<!-- sent="Wed, 20 Mar 2013 10:58:38 -0700" -->
<!-- isosent="20130320175838" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun error output" -->
<!-- id="39869258-2EEE-4A90-84AF-EF9656F1FA02_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAME3KzDur_4TgUHdBoDgKE34qXbU2njUWaFDAEU5UkvEhjYAQQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpirun error output<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-03-20 13:58:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21569.php">Reuti: "Re: [OMPI users] mpirun error output"</a>
<li><strong>Previous message:</strong> <a href="21567.php">Bruno Cramer: "[OMPI users] mpirun error output"</a>
<li><strong>In reply to:</strong> <a href="21567.php">Bruno Cramer: "[OMPI users] mpirun error output"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21569.php">Reuti: "Re: [OMPI users] mpirun error output"</a>
<li><strong>Reply:</strong> <a href="21569.php">Reuti: "Re: [OMPI users] mpirun error output"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Well, a couple of things come to mind - see below
<br>
<p>On Mar 20, 2013, at 9:41 AM, Bruno Cramer &lt;bruno.cramer_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 1) Openmpi in PC1
</span><br>
<span class="quotelev1">&gt; I installed openmpi-1.4.3 using the  OpenSuse 32b v. 12.1  repository
</span><br>
<span class="quotelev1">&gt; as well as openmpi devel
</span><br>
<span class="quotelev1">&gt; All mpi executables are present so are the libraries in lib directory.
</span><br>
<span class="quotelev1">&gt; I set the environment as ( .bashrc)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; PATH=$PATH:/usr/lib/mpi/gcc/openmpi/bin
</span><br>
<span class="quotelev1">&gt; PATH=$PATH:/usr/lib/mpi/gcc/openmpi/lib
</span><br>
<span class="quotelev1">&gt; export LD_LIBRARY_PATH=$LD_LIBRARY_PATH:/usr/lib/mpi/gcc/openmpi/lib
</span><br>
<span class="quotelev1">&gt; export PATH
</span><br>
<p>You should reverse the ordering here - always put the OMPI path element first, then the existing one, to ensure that you are getting the intended version. Lot of operating systems come with an older version pre-installed in a standard location.
<br>
<p><span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; When I run any of the test examples (eg. mpirun hello_c.c or any program that has mpi interface included I get the message
</span><br>
<span class="quotelev1">&gt; -----------------------------
</span><br>
<span class="quotelev1">&gt; mpirun was unable to launch the specified application as it could not find an executable:
</span><br>
<span class="quotelev1">&gt; Executable: hello_c.c
</span><br>
<span class="quotelev1">&gt; Node: linux-curie
</span><br>
<span class="quotelev1">&gt; while attempting to start process rank 0.
</span><br>
<p>Look at the executable - apparently, you tried to run the &quot;.c&quot; source code instead of the compiled executable :-)
<br>
<p><span class="quotelev1">&gt; -----------------------
</span><br>
<span class="quotelev1">&gt; typing echo $LD_LIBRARY_PATH I should get something like /usr/lib/mpi/gcc/openmpi/lib. The only output I get is   /usr/local/atlas3.10/lib (which is the blas/lapack library). Also Intel compilers library is not shown. 
</span><br>
<p>I suspect that your original LD_LIBRARY_PATH was empty, so now the path starts with a &quot;:&quot; and makes bash unhappy. Try reversing the order as above and it might work.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1) Openmpi installation in PC2
</span><br>
<span class="quotelev1">&gt; In OpenSuse v 12.1 64b I installed openmpi-1.4.3 downloading it from the openmpi site.
</span><br>
<span class="quotelev1">&gt; No error occured during ./configure, make,  make install process.
</span><br>
<span class="quotelev1">&gt; The environment settings change a little but are very similar to those mentioned under PC1.
</span><br>
<span class="quotelev1">&gt; The same message as above is occuring.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; in this case typing echo $LD_LIBRARY_PATH I get the correct output from the mpi library as /usr/local/lib64 and the executables are in /usr/local/bin.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any help is wellcome
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards
</span><br>
<span class="quotelev1">&gt; Bruno
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21568/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21569.php">Reuti: "Re: [OMPI users] mpirun error output"</a>
<li><strong>Previous message:</strong> <a href="21567.php">Bruno Cramer: "[OMPI users] mpirun error output"</a>
<li><strong>In reply to:</strong> <a href="21567.php">Bruno Cramer: "[OMPI users] mpirun error output"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21569.php">Reuti: "Re: [OMPI users] mpirun error output"</a>
<li><strong>Reply:</strong> <a href="21569.php">Reuti: "Re: [OMPI users] mpirun error output"</a>
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
