<?
$subject_val = "Re: [OMPI users] mpirun error output";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 20 15:04:49 2013" -->
<!-- isoreceived="20130320190449" -->
<!-- sent="Wed, 20 Mar 2013 20:04:35 +0100" -->
<!-- isosent="20130320190435" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun error output" -->
<!-- id="D49162F1-716E-4D10-B5A3-A617D626B14A_at_staff.uni-marburg.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="39869258-2EEE-4A90-84AF-EF9656F1FA02_at_open-mpi.org" -->
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
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-03-20 15:04:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21570.php">kmehta_at_[hidden]: "[OMPI users] &quot;Error setting file view&quot; NPB BTIO"</a>
<li><strong>Previous message:</strong> <a href="21568.php">Ralph Castain: "Re: [OMPI users] mpirun error output"</a>
<li><strong>In reply to:</strong> <a href="21568.php">Ralph Castain: "Re: [OMPI users] mpirun error output"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21579.php">Bruno Cramer: "Re: [OMPI users] mpirun error output"</a>
<li><strong>Reply:</strong> <a href="21579.php">Bruno Cramer: "Re: [OMPI users] mpirun error output"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Am 20.03.2013 um 18:58 schrieb Ralph Castain:
<br>
<p><span class="quotelev1">&gt; Well, a couple of things come to mind - see below
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mar 20, 2013, at 9:41 AM, Bruno Cramer &lt;bruno.cramer_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt; 1) Openmpi in PC1
</span><br>
<span class="quotelev2">&gt;&gt; I installed openmpi-1.4.3 using the  OpenSuse 32b v. 12.1  repository
</span><br>
<span class="quotelev2">&gt;&gt; as well as openmpi devel
</span><br>
<span class="quotelev2">&gt;&gt; All mpi executables are present so are the libraries in lib directory.
</span><br>
<span class="quotelev2">&gt;&gt; I set the environment as ( .bashrc)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; PATH=$PATH:/usr/lib/mpi/gcc/openmpi/bin
</span><br>
<span class="quotelev2">&gt;&gt; PATH=$PATH:/usr/lib/mpi/gcc/openmpi/lib
</span><br>
<span class="quotelev2">&gt;&gt; export LD_LIBRARY_PATH=$LD_LIBRARY_PATH:/usr/lib/mpi/gcc/openmpi/lib
</span><br>
<span class="quotelev2">&gt;&gt; export PATH
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You should reverse the ordering here - always put the OMPI path element first, then the existing one, to ensure that you are getting the intended version. Lot of operating systems come with an older version pre-installed in a standard location.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; When I run any of the test examples (eg. mpirun hello_c.c or any program that has mpi interface included I get the message
</span><br>
<span class="quotelev2">&gt;&gt; -----------------------------
</span><br>
<span class="quotelev2">&gt;&gt; mpirun was unable to launch the specified application as it could not find an executable:
</span><br>
<span class="quotelev2">&gt;&gt; Executable: hello_c.c
</span><br>
<span class="quotelev2">&gt;&gt; Node: linux-curie
</span><br>
<span class="quotelev2">&gt;&gt; while attempting to start process rank 0.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Look at the executable - apparently, you tried to run the &quot;.c&quot; source code instead of the compiled executable :-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -----------------------
</span><br>
<span class="quotelev2">&gt;&gt; typing echo $LD_LIBRARY_PATH I should get something like /usr/lib/mpi/gcc/openmpi/lib. The only output I get is   /usr/local/atlas3.10/lib (which is the blas/lapack library). Also Intel compilers library is not shown. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I suspect that your original LD_LIBRARY_PATH was empty, so now the path starts with a &quot;:&quot; and makes bash unhappy. Try reversing the order as above and it might work.
</span><br>
<p>AFAIK additional colons don't matter, but nevertheless I prefer indeed for cosmetic reasons:
<br>
<p>$ export LD_LIBRARY_PATH=/usr/lib/mpi/gcc/openmpi/lib${LD_LIBRARY_PATH:+:$LD_LIBRARY_PATH}
<br>
<p>to avoid a superfluous colon too.
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 1) Openmpi installation in PC2
</span><br>
<span class="quotelev2">&gt;&gt; In OpenSuse v 12.1 64b I installed openmpi-1.4.3 downloading it from the openmpi site.
</span><br>
<span class="quotelev2">&gt;&gt; No error occured during ./configure, make,  make install process.
</span><br>
<span class="quotelev2">&gt;&gt; The environment settings change a little but are very similar to those mentioned under PC1.
</span><br>
<span class="quotelev2">&gt;&gt; The same message as above is occuring.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; in this case typing echo $LD_LIBRARY_PATH I get the correct output from the mpi library as /usr/local/lib64 and the executables are in /usr/local/bin.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Any help is wellcome
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Regards
</span><br>
<span class="quotelev2">&gt;&gt; Bruno
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21570.php">kmehta_at_[hidden]: "[OMPI users] &quot;Error setting file view&quot; NPB BTIO"</a>
<li><strong>Previous message:</strong> <a href="21568.php">Ralph Castain: "Re: [OMPI users] mpirun error output"</a>
<li><strong>In reply to:</strong> <a href="21568.php">Ralph Castain: "Re: [OMPI users] mpirun error output"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21579.php">Bruno Cramer: "Re: [OMPI users] mpirun error output"</a>
<li><strong>Reply:</strong> <a href="21579.php">Bruno Cramer: "Re: [OMPI users] mpirun error output"</a>
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
