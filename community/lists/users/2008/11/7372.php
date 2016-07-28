<?
$subject_val = "Re: [OMPI users] MPI_Gather bug with reproducer code attached";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 25 07:19:33 2008" -->
<!-- isoreceived="20081125121933" -->
<!-- sent="Tue, 25 Nov 2008 07:19:27 -0500" -->
<!-- isosent="20081125121927" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Gather bug with reproducer code attached" -->
<!-- id="17D294A0-949C-4BC7-8473-6FF1B31FB8CC_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200811170141.07215.cap_at_nsc.liu.se" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Gather bug with reproducer code attached<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-25 07:19:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7373.php">Максим Чусовлянов: "[OMPI users] (no subject)"</a>
<li><strong>Previous message:</strong> <a href="7371.php">Brock Palen: "Re: [OMPI users] Want to use MPI using TCP/IP"</a>
<li><strong>In reply to:</strong> <a href="7318.php">Peter Kjellstrom: "[OMPI users] MPI_Gather bug with reproducer code attached"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for the bug report!  We discussed this in person at SC08 last  
<br>
week, and the thread moved to the devel list, here:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/lists/devel/2008/11/4948.php">http://www.open-mpi.org/community/lists/devel/2008/11/4948.php</a>
<br>
<p><p>On Nov 16, 2008, at 7:41 PM, Peter Kjellstrom wrote:
<br>
<p><span class="quotelev1">&gt; Problem description:
</span><br>
<span class="quotelev1">&gt; Elements from all ranks are gathered correctly except for the
</span><br>
<span class="quotelev1">&gt; element belonging to the root/target rank of the gather operation
</span><br>
<span class="quotelev1">&gt; when using certain custom MPI-datatypes (see reproducer code).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The bug can be toggled by commenting/uncommenting line 11 in  
</span><br>
<span class="quotelev1">&gt; the .F90-file.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Even though all this is for MPI_Gather the same seems to go for  
</span><br>
<span class="quotelev1">&gt; MPI_Gatherv
</span><br>
<span class="quotelev1">&gt; too.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have verified the bad behaviour with several OpenMPI versions from  
</span><br>
<span class="quotelev1">&gt; 1.2.3 to
</span><br>
<span class="quotelev1">&gt; 1.3b2. Correct behaviour has been observed on mvapich2 and  
</span><br>
<span class="quotelev1">&gt; PlatformMPI. Both
</span><br>
<span class="quotelev1">&gt; gfortran and ifort has been tried.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Attached files:
</span><br>
<span class="quotelev1">&gt; BUILD                      Build instructions
</span><br>
<span class="quotelev1">&gt; RUN                        Run instructions
</span><br>
<span class="quotelev1">&gt; mpi_gather_test.F90        Reproducer source code
</span><br>
<span class="quotelev1">&gt; 4rank_bad_output.txt       Bad output
</span><br>
<span class="quotelev1">&gt; 4rank_expected_output.txt  Good output
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /Peter
</span><br>
<span class="quotelev1">&gt; &lt; 
</span><br>
<span class="quotelev1">&gt; BUILD 
</span><br>
<span class="quotelev1">&gt; .txt 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &lt; 
</span><br>
<span class="quotelev1">&gt; RUN 
</span><br>
<span class="quotelev1">&gt; .txt 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &lt; 
</span><br>
<span class="quotelev1">&gt; mpi_gather_test 
</span><br>
<span class="quotelev1">&gt; .F90 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &lt; 
</span><br>
<span class="quotelev1">&gt; 4rank_bad_output 
</span><br>
<span class="quotelev1">&gt; .txt 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &lt; 
</span><br>
<span class="quotelev1">&gt; 4rank_expected_output 
</span><br>
<span class="quotelev1">&gt; .txt&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7373.php">Максим Чусовлянов: "[OMPI users] (no subject)"</a>
<li><strong>Previous message:</strong> <a href="7371.php">Brock Palen: "Re: [OMPI users] Want to use MPI using TCP/IP"</a>
<li><strong>In reply to:</strong> <a href="7318.php">Peter Kjellstrom: "[OMPI users] MPI_Gather bug with reproducer code attached"</a>
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
