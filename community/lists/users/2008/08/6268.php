<?
$subject_val = "Re: [OMPI users] Heap profiling with OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug  5 11:52:06 2008" -->
<!-- isoreceived="20080805155206" -->
<!-- sent="Tue, 5 Aug 2008 17:51:51 +0200" -->
<!-- isosent="20080805155151" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Heap profiling with OpenMPI" -->
<!-- id="13290745-B09D-499D-8006-D756E6D9B5CC_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="OF21E4FDE2.C51BBE9E-ONC125749C.0053C677-C125749C.0054600C_at_offis.uni-oldenburg.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] Heap profiling with OpenMPI<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-05 11:51:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6269.php">Sergio Yanuen Rodriguez: "[OMPI users] WIEN2k compilation using openmpi"</a>
<li><strong>Previous message:</strong> <a href="6267.php">Jan Ploski: "[OMPI users] Heap profiling with OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="6267.php">Jan Ploski: "[OMPI users] Heap profiling with OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6270.php">Ashley Pittman: "Re: [OMPI users] Heap profiling with OpenMPI"</a>
<li><strong>Reply:</strong> <a href="6270.php">Ashley Pittman: "Re: [OMPI users] Heap profiling with OpenMPI"</a>
<li><strong>Reply:</strong> <a href="6276.php">Jan Ploski: "Re: [OMPI users] Heap profiling with OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jan,
<br>
<p>I'm using valgrind with Open MPI on a [very] regular basis and I never  
<br>
had any problems. I usually want to know the execution path on the MPI  
<br>
applications. For this I use:
<br>
mpirun -np XX valgrind --tool=callgrind -q --log-file=some_file ./my_app
<br>
<p>I just run your example:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpirun -np 2 -bynode --mca btl tcp,self valgrind --tool=massif - 
<br>
q ./NPmpi -u 4
<br>
and I got 2 non empty files in the current directory:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;bosilca_at_dancer:~/NetPIPE_3.6.2$ ls -l massif.out.*
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-rw------- 1 bosilca bosilca 140451 2008-08-05 11:57 massif.out. 
<br>
21197
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-rw------- 1 bosilca bosilca 131471 2008-08-05 11:57 massif.out. 
<br>
21210
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Aug 5, 2008, at 5:21 PM, Jan Ploski wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I wanted to determine the peak heap memory usage of each MPI process  
</span><br>
<span class="quotelev1">&gt; in my
</span><br>
<span class="quotelev1">&gt; application. Using MVAPICH it can be done by simply substituting a  
</span><br>
<span class="quotelev1">&gt; wrapper
</span><br>
<span class="quotelev1">&gt; shell script for the MPI executable and from that wrapper script  
</span><br>
<span class="quotelev1">&gt; starting
</span><br>
<span class="quotelev1">&gt; &quot;valgrind --tool=massif ./prog.exe&quot;. However, when I tried the same
</span><br>
<span class="quotelev1">&gt; approach with OpenMPI, I got no output from massif (empty output  
</span><br>
<span class="quotelev1">&gt; file),
</span><br>
<span class="quotelev1">&gt; even though the MPI process ran and finished as expected. Can someone
</span><br>
<span class="quotelev1">&gt; explain this or provide an alternative way of obtaining the same
</span><br>
<span class="quotelev1">&gt; information (preferably one that does not require source code
</span><br>
<span class="quotelev1">&gt; instrumentation and recompiling)?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt; Jan Ploski
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Dipl.-Inform. (FH) Jan Ploski
</span><br>
<span class="quotelev1">&gt; OFFIS
</span><br>
<span class="quotelev1">&gt; FuE Bereich Energie | R&amp;D Division Energy
</span><br>
<span class="quotelev1">&gt; Escherweg 2  - 26121 Oldenburg - Germany
</span><br>
<span class="quotelev1">&gt; Phone/Fax: +49 441 9722 - 184 / 202
</span><br>
<span class="quotelev1">&gt; E-Mail: Jan.Ploski_at_[hidden]
</span><br>
<span class="quotelev1">&gt; URL: <a href="http://www.offis.de">http://www.offis.de</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6268/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6269.php">Sergio Yanuen Rodriguez: "[OMPI users] WIEN2k compilation using openmpi"</a>
<li><strong>Previous message:</strong> <a href="6267.php">Jan Ploski: "[OMPI users] Heap profiling with OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="6267.php">Jan Ploski: "[OMPI users] Heap profiling with OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6270.php">Ashley Pittman: "Re: [OMPI users] Heap profiling with OpenMPI"</a>
<li><strong>Reply:</strong> <a href="6270.php">Ashley Pittman: "Re: [OMPI users] Heap profiling with OpenMPI"</a>
<li><strong>Reply:</strong> <a href="6276.php">Jan Ploski: "Re: [OMPI users] Heap profiling with OpenMPI"</a>
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
