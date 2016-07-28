<?
$subject_val = "Re: [OMPI users] Bug with 1.2.5?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 17 12:51:48 2008" -->
<!-- isoreceived="20080317165148" -->
<!-- sent="Mon, 17 Mar 2008 12:51:38 -0400" -->
<!-- isosent="20080317165138" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Bug with 1.2.5?" -->
<!-- id="31ABD89A-1CF9-4EBC-90DD-029AE8D97080_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="2B00361EE3107A4F88383EC1B041DC9A0335E989_at_VFOHMLAO01.Enterprise.afmc.ds.af.mil" -->
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
<strong>Subject:</strong> Re: [OMPI users] Bug with 1.2.5?<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-17 12:51:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5211.php">Grismer, Matthew J Civ USAF AFMC AFRL/RBAC: "Re: [OMPI users] Bug with 1.2.5?"</a>
<li><strong>Previous message:</strong> <a href="5209.php">Jim Hill: "Re: [OMPI users] What architecture?  X86_64, that's what architecture!"</a>
<li><strong>In reply to:</strong> <a href="5208.php">Grismer, Matthew J Civ USAF AFMC AFRL/RBAC: "[OMPI users] Bug with 1.2.5?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5211.php">Grismer, Matthew J Civ USAF AFMC AFRL/RBAC: "Re: [OMPI users] Bug with 1.2.5?"</a>
<li><strong>Reply:</strong> <a href="5211.php">Grismer, Matthew J Civ USAF AFMC AFRL/RBAC: "Re: [OMPI users] Bug with 1.2.5?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm not very familiar with Fortran 90, but the code looks wrong to me.  
<br>
Here is a snippet from the code:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_ISEND(VTMP,int(NCFACES(I)),MPI_FP,NZINT(I)-1, &amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int(GLOBINT(I)),AVUS_COMM_WORLD,REQUEST(MXIPZ 
<br>
+I),IERR)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;deallocate(VTMP)
<br>
<p>The problem seems to come from the fact that you start a non blocking  
<br>
send and then you release the buffer, which is completely illegal !!!  
<br>
The free should happen only once you know the send is completed, which  
<br>
means after the MPI_Waitall.
<br>
<p>This works with MPICH because they buffer data in some cases. And  
<br>
works for Open MPI on small problem sizes, because then the message  
<br>
can be send directly without buffering. However, once you're over the  
<br>
eager limit, a rendez-vous message is required, and the MPI_Isend will  
<br>
be completed only later.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p><p>On Mar 17, 2008, at 12:33 PM, Grismer, Matthew J Civ USAF AFMC AFRL/ 
<br>
RBAC wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've attached the requested configuration and ompi_info output, as  
</span><br>
<span class="quotelev1">&gt; well
</span><br>
<span class="quotelev1">&gt; as the actual error messages that appear (run.out) when the code is  
</span><br>
<span class="quotelev1">&gt; run.
</span><br>
<span class="quotelev1">&gt; I traced it down to the section of code included that is in
</span><br>
<span class="quotelev1">&gt; fail_section.F.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The platform is a Mac Pro running Mac OS X 10.5.2, but I also tried it
</span><br>
<span class="quotelev1">&gt; on Mac OS X Server 10.4.11 (Xserve Xeon) with the same result. Also
</span><br>
<span class="quotelev1">&gt; tried compiling OpenMPI with the Intel C/C++ compilers (version
</span><br>
<span class="quotelev1">&gt; 10.1.012), same result.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The code has been run without issue on numerous HPC platforms, and  
</span><br>
<span class="quotelev1">&gt; runs
</span><br>
<span class="quotelev1">&gt; with OpenMPI on this platform for small problems. Issue shows up when
</span><br>
<span class="quotelev1">&gt; running larger problems. Using MPICH2 on this platform with same large
</span><br>
<span class="quotelev1">&gt; problem runs fine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The issue appears to occur when calling the MPI_WAITALL statement at  
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev1">&gt; end of the code section; the MPI_IRECV and MPI_ISEND statements
</span><br>
<span class="quotelev1">&gt; complete.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any help is greatly appreciated.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _____________________________________________________
</span><br>
<span class="quotelev1">&gt; Matthew Grismer
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt; 
</span><br>
<span class="quotelev1">&gt; run 
</span><br>
<span class="quotelev1">&gt; .out 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &lt; 
</span><br>
<span class="quotelev1">&gt; config 
</span><br>
<span class="quotelev1">&gt; .log 
</span><br>
<span class="quotelev1">&gt; .gz 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &lt; 
</span><br>
<span class="quotelev1">&gt; fail_section 
</span><br>
<span class="quotelev1">&gt; .F&gt;&lt;mpi_info.txt.gz&gt;_______________________________________________
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
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-5210/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5211.php">Grismer, Matthew J Civ USAF AFMC AFRL/RBAC: "Re: [OMPI users] Bug with 1.2.5?"</a>
<li><strong>Previous message:</strong> <a href="5209.php">Jim Hill: "Re: [OMPI users] What architecture?  X86_64, that's what architecture!"</a>
<li><strong>In reply to:</strong> <a href="5208.php">Grismer, Matthew J Civ USAF AFMC AFRL/RBAC: "[OMPI users] Bug with 1.2.5?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5211.php">Grismer, Matthew J Civ USAF AFMC AFRL/RBAC: "Re: [OMPI users] Bug with 1.2.5?"</a>
<li><strong>Reply:</strong> <a href="5211.php">Grismer, Matthew J Civ USAF AFMC AFRL/RBAC: "Re: [OMPI users] Bug with 1.2.5?"</a>
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
