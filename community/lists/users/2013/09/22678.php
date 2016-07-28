<?
$subject_val = "Re: [OMPI users] openmpi, stdin and qlogic infiniband";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 19 09:09:29 2013" -->
<!-- isoreceived="20130919130929" -->
<!-- sent="Thu, 19 Sep 2013 15:09:17 +0200" -->
<!-- isosent="20130919130917" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi, stdin and qlogic infiniband" -->
<!-- id="739CB19A-73D9-401A-A7CD-DD5EF7C63804_at_staff.uni-marburg.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20130919114233.GA13313_at_lapinou2.lsd.univ-montp2.fr" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi, stdin and qlogic infiniband<br>
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-19 09:09:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22679.php">Jeff Hammond: "Re: [OMPI users] openmpi, stdin and qlogic infiniband"</a>
<li><strong>Previous message:</strong> <a href="22677.php">Matthieu Brucher: "Re: [OMPI users] Segmentation fault with fresh compilation of 1.7.2"</a>
<li><strong>In reply to:</strong> <a href="22676.php">Fabrice Boyrie: "[OMPI users] openmpi, stdin and qlogic infiniband"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22679.php">Jeff Hammond: "Re: [OMPI users] openmpi, stdin and qlogic infiniband"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Am 19.09.2013 um 13:42 schrieb Fabrice Boyrie:
<br>
<p><span class="quotelev1">&gt; I have to compile a program (abinit) reading data from stdin and it
</span><br>
<span class="quotelev1">&gt; doesn't works.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   I made a simplified version of the program
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;snip&gt;
</span><br>
<span class="quotelev1">&gt; I've tried openmpi 1.6.5 and 1.7.2
</span><br>
<span class="quotelev1">&gt; The fortran compiler is ifort (tried Version 14.0.0.080 Build 20130728
</span><br>
<p>Using:
<br>
<p>openmpi-1.4.5_gcc_4.7.2_shared
<br>
openmpi-1.6.5_intel_12.1.5_static
<br>
openmpi-1.6.5_intel_13.1.3_static
<br>
<p>it's working as intended for me - no Infiniband in the game though.
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev1">&gt; and Version 11.1    Build 20100806)
</span><br>
<span class="quotelev1">&gt; (c compiler is gcc, centos 6.x, infiniband stack from qlogic
</span><br>
<span class="quotelev1">&gt; infinipath-libs-3.1-3420.1122_rhel6_qlc.x86_64)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Trying with and without infiniband (qlogic card)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun -np 8 ./teststdin &lt; /tmp/a
</span><br>
<span class="quotelev1">&gt; forrtl: Bad file descriptor
</span><br>
<span class="quotelev1">&gt; forrtl: severe (108): cannot stat file, unit 5, file /proc/43811/fd/0
</span><br>
<span class="quotelev1">&gt; Image              PC                Routine            Line        
</span><br>
<span class="quotelev1">&gt; Source             
</span><br>
<span class="quotelev1">&gt; teststdin          000000000040BF48  Unknown               Unknown  Unknown
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun -mca mtl ^psm -mca btl self,sm -np 8 ./teststdin &lt; /tmp/a
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; id0
</span><br>
<span class="quotelev1">&gt;  Process        0 says &quot;Hello, world!&quot;
</span><br>
<span class="quotelev1">&gt; READ from stdin
</span><br>
<span class="quotelev1">&gt; zer                                                                                                                                                                                                                                                            
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Process        1 says &quot;Hello, world!&quot;
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is it a known problem ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Fabrice BOYRIE
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="22679.php">Jeff Hammond: "Re: [OMPI users] openmpi, stdin and qlogic infiniband"</a>
<li><strong>Previous message:</strong> <a href="22677.php">Matthieu Brucher: "Re: [OMPI users] Segmentation fault with fresh compilation of 1.7.2"</a>
<li><strong>In reply to:</strong> <a href="22676.php">Fabrice Boyrie: "[OMPI users] openmpi, stdin and qlogic infiniband"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22679.php">Jeff Hammond: "Re: [OMPI users] openmpi, stdin and qlogic infiniband"</a>
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
