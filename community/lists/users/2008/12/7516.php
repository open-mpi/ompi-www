<?
$subject_val = "Re: [OMPI users] Onesided + derived datatypes";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 12 08:20:26 2008" -->
<!-- isoreceived="20081212132026" -->
<!-- sent="Fri, 12 Dec 2008 14:20:21 +0100" -->
<!-- isosent="20081212132021" -->
<!-- name="Dorian Krause" -->
<!-- email="doriankrause_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Onesided + derived datatypes" -->
<!-- id="964931289_at_web.de" -->
<!-- charset="iso-8859-15" -->
<!-- inreplyto="[OMPI users] Onesided + derived datatypes" -->
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
<strong>Subject:</strong> Re: [OMPI users] Onesided + derived datatypes<br>
<strong>From:</strong> Dorian Krause (<em>doriankrause_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-12 08:20:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7517.php">Jeff Squyres: "Re: [OMPI users] trouble using --mca mpi_yield_when_idle 1"</a>
<li><strong>Previous message:</strong> <a href="7515.php">Jeff Squyres: "Re: [OMPI users] Axon BTL for OpenMPI?"</a>
<li><strong>Maybe in reply to:</strong> <a href="7502.php">doriankrause: "[OMPI users] Onesided + derived datatypes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7529.php">George Bosilca: "Re: [OMPI users] Onesided + derived datatypes"</a>
<li><strong>Reply:</strong> <a href="7529.php">George Bosilca: "Re: [OMPI users] Onesided + derived datatypes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi again.
<br>
<p>I adapted my testing program by overwriting the window buffer
<br>
complete with 1. This allows me to see at which places OpenMPI writes.
<br>
The result is:
<br>
<p>*** -DO1=1 -DV1=1 *** (displ 3,2,1,0 , MPI_Type_create_indexed_block)
<br>
mem[0] = {  0.0000,  0.0000,  0.0000}
<br>
mem[1] = {  0.0000,  0.0000,  0.0000}
<br>
mem[2] = {  0.0000,  0.0000,  0.0000}
<br>
mem[3] = {     nan,     nan,     nan}
<br>
mem[4] = {     nan,     nan,     nan}
<br>
mem[5] = {     nan,     nan,     nan}
<br>
mem[6] = {     nan,     nan,     nan}
<br>
mem[7] = {     nan,     nan,     nan}
<br>
mem[8] = {     nan,     nan,     nan}
<br>
mem[9] = {     nan,     nan,     nan}
<br>
*** -DO1=1 -DV2=1 *** MPI_Type_contiguous(4, mpi_double3, &amp;mpit)
<br>
mem[0] = {  0.0000,  1.0000,  2.0000}
<br>
mem[1] = {  3.0000,  4.0000,  5.0000}
<br>
mem[2] = {  6.0000,  7.0000,  8.0000}
<br>
mem[3] = {  9.0000, 10.0000, 11.0000}
<br>
mem[4] = {     nan,     nan,     nan}
<br>
mem[5] = {     nan,     nan,     nan}
<br>
mem[6] = {     nan,     nan,     nan}
<br>
mem[7] = {     nan,     nan,     nan}
<br>
mem[8] = {     nan,     nan,     nan}
<br>
mem[9] = {     nan,     nan,     nan}
<br>
*** -DO2=1 -DV1=1 *** (displ 0,1,2,3 , MPI_Type_create_indexed_block)
<br>
mem[0] = {  0.0000,  0.0000,  0.0000}
<br>
mem[1] = {  0.0000,  0.0000,  0.0000}
<br>
mem[2] = {  0.0000,  0.0000,  0.0000}
<br>
mem[3] = {  0.0000,  0.0000,  0.0000}
<br>
mem[4] = {     nan,     nan,     nan}
<br>
mem[5] = {     nan,     nan,     nan}
<br>
mem[6] = {     nan,     nan,     nan}
<br>
mem[7] = {     nan,     nan,     nan}
<br>
mem[8] = {     nan,     nan,     nan}
<br>
mem[9] = {     nan,     nan,     nan}
<br>
*** -DO2=1 -DV2=1 *** MPI_Type_contiguous(4, mpi_double3, &amp;mpit)
<br>
mem[0] = {  0.0000,  1.0000,  2.0000}
<br>
mem[1] = {  3.0000,  4.0000,  5.0000}
<br>
mem[2] = {  6.0000,  7.0000,  8.0000}
<br>
mem[3] = {  9.0000, 10.0000, 11.0000}
<br>
mem[4] = {     nan,     nan,     nan}
<br>
mem[5] = {     nan,     nan,     nan}
<br>
mem[6] = {     nan,     nan,     nan}
<br>
mem[7] = {     nan,     nan,     nan}
<br>
mem[8] = {     nan,     nan,     nan}
<br>
mem[9] = {     nan,     nan,     nan}
<br>
<p>Note that for the reversed ordering (3,2,1,0) only 3 lines are written. If I use displacements 3,2,1,8
<br>
I get
<br>
<p>*** -DO1=1 -DV1=1 ***
<br>
mem[0] = {  0.0000,  0.0000,  0.0000}
<br>
mem[1] = {  0.0000,  0.0000,  0.0000}
<br>
mem[2] = {  0.0000,  0.0000,  0.0000}
<br>
mem[3] = {     nan,     nan,     nan}
<br>
mem[4] = {     nan,     nan,     nan}
<br>
mem[5] = {     nan,     nan,     nan}
<br>
mem[6] = {     nan,     nan,     nan}
<br>
mem[7] = {     nan,     nan,     nan}
<br>
mem[8] = {  0.0000,  0.0000,  0.0000}
<br>
mem[9] = {     nan,     nan,     nan}
<br>
<p>but 3,2,8,1 yields
<br>
<p>*** -DO1=1 -DV1=1 ***
<br>
mem[0] = {  0.0000,  0.0000,  0.0000}
<br>
mem[1] = {  0.0000,  0.0000,  0.0000}
<br>
mem[2] = {  0.0000,  0.0000,  0.0000}
<br>
mem[3] = {     nan,     nan,     nan}
<br>
mem[4] = {     nan,     nan,     nan}
<br>
mem[5] = {     nan,     nan,     nan}
<br>
mem[6] = {     nan,     nan,     nan}
<br>
mem[7] = {     nan,     nan,     nan}
<br>
mem[8] = {     nan,     nan,     nan}
<br>
mem[9] = {     nan,     nan,     nan}
<br>
<p>Dorian
<br>
<p><p><span class="quotelev1">&gt; -----Urspr&#252;ngliche Nachricht-----
</span><br>
<span class="quotelev1">&gt; Von: &quot;Dorian Krause&quot; &lt;doriankrause_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Gesendet: 12.12.08 13:49:25
</span><br>
<span class="quotelev1">&gt; An: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Betreff: Re: [OMPI users] Onesided + derived datatypes
</span><br>
<p><p><span class="quotelev1">&gt; Thanks George (and Brian :)).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The MPI_Put error is gone. Did you take a look at the problem
</span><br>
<span class="quotelev1">&gt; that with the block_indexed type the PUT doesn't work? I'm
</span><br>
<span class="quotelev1">&gt; still getting the following output (V1 corresponds to the datatype
</span><br>
<span class="quotelev1">&gt; created with MPI_Type_create_indexed_block while the V2 type
</span><br>
<span class="quotelev1">&gt; is created with MPI_Type_contiguous, the ordering doesn't care anymore after
</span><br>
<span class="quotelev1">&gt; your fix) which confuses me 
</span><br>
<span class="quotelev1">&gt; because I remember that (on one machine) MPI_Put with MPI_Type_create_indexed
</span><br>
<span class="quotelev1">&gt; worked until the invalid datatype error showed up (after a couple of timesteps).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; *** -DO1=1 -DV1=1 ***
</span><br>
<span class="quotelev1">&gt; mem[0] = {  0.0000,  0.0000,  0.0000}
</span><br>
<span class="quotelev1">&gt; mem[1] = {  0.0000,  0.0000,  0.0000}
</span><br>
<span class="quotelev1">&gt; mem[2] = {  0.0000,  0.0000,  0.0000}
</span><br>
<span class="quotelev1">&gt; mem[3] = {  0.0000,  0.0000,  0.0000}
</span><br>
<span class="quotelev1">&gt; mem[4] = {  0.0000,  0.0000,  0.0000}
</span><br>
<span class="quotelev1">&gt; mem[5] = {  0.0000,  0.0000,  0.0000}
</span><br>
<span class="quotelev1">&gt; mem[6] = {  0.0000,  0.0000,  0.0000}
</span><br>
<span class="quotelev1">&gt; mem[7] = {  0.0000,  0.0000,  0.0000}
</span><br>
<span class="quotelev1">&gt; mem[8] = {  0.0000,  0.0000,  0.0000}
</span><br>
<span class="quotelev1">&gt; mem[9] = {  0.0000,  0.0000,  0.0000}
</span><br>
<span class="quotelev1">&gt; *** -DO1=1 -DV2=1 ***
</span><br>
<span class="quotelev1">&gt; mem[0] = {  5.0000,  0.0000,  0.0000}
</span><br>
<span class="quotelev1">&gt; mem[1] = {  0.0000,  0.0000, -1.0000}
</span><br>
<span class="quotelev1">&gt; mem[2] = {  0.0000,  0.0000,  0.0000}
</span><br>
<span class="quotelev1">&gt; mem[3] = {  0.0000,  0.0000,  0.0000}
</span><br>
<span class="quotelev1">&gt; mem[4] = {  0.0000,  0.0000,  0.0000}
</span><br>
<span class="quotelev1">&gt; mem[5] = {  0.0000,  0.0000,  0.0000}
</span><br>
<span class="quotelev1">&gt; mem[6] = {  0.0000,  0.0000,  0.0000}
</span><br>
<span class="quotelev1">&gt; mem[7] = {  0.0000,  0.0000,  0.0000}
</span><br>
<span class="quotelev1">&gt; mem[8] = {  0.0000,  0.0000,  0.0000}
</span><br>
<span class="quotelev1">&gt; mem[9] = {  0.0000,  0.0000,  0.0000}
</span><br>
<span class="quotelev1">&gt; *** -DO2=1 -DV1=1 ***
</span><br>
<span class="quotelev1">&gt; mem[0] = {  0.0000,  0.0000,  0.0000}
</span><br>
<span class="quotelev1">&gt; mem[1] = {  0.0000,  0.0000,  0.0000}
</span><br>
<span class="quotelev1">&gt; mem[2] = {  0.0000,  0.0000,  0.0000}
</span><br>
<span class="quotelev1">&gt; mem[3] = {  0.0000,  0.0000,  0.0000}
</span><br>
<span class="quotelev1">&gt; mem[4] = {  0.0000,  0.0000,  0.0000}
</span><br>
<span class="quotelev1">&gt; mem[5] = {  0.0000,  0.0000,  0.0000}
</span><br>
<span class="quotelev1">&gt; mem[6] = {  0.0000,  0.0000,  0.0000}
</span><br>
<span class="quotelev1">&gt; mem[7] = {  0.0000,  0.0000,  0.0000}
</span><br>
<span class="quotelev1">&gt; mem[8] = {  0.0000,  0.0000,  0.0000}
</span><br>
<span class="quotelev1">&gt; mem[9] = {  0.0000,  0.0000,  0.0000}
</span><br>
<span class="quotelev1">&gt; *** -DO2=1 -DV2=1 ***
</span><br>
<span class="quotelev1">&gt; mem[0] = {  5.0000,  0.0000,  0.0000}
</span><br>
<span class="quotelev1">&gt; mem[1] = {  0.0000,  0.0000, -1.0000}
</span><br>
<span class="quotelev1">&gt; mem[2] = {  0.0000,  0.0000,  0.0000}
</span><br>
<span class="quotelev1">&gt; mem[3] = {  0.0000,  0.0000,  0.0000}
</span><br>
<span class="quotelev1">&gt; mem[4] = {  0.0000,  0.0000,  0.0000}
</span><br>
<span class="quotelev1">&gt; mem[5] = {  0.0000,  0.0000,  0.0000}
</span><br>
<span class="quotelev1">&gt; mem[6] = {  0.0000,  0.0000,  0.0000}
</span><br>
<span class="quotelev1">&gt; mem[7] = {  0.0000,  0.0000,  0.0000}
</span><br>
<span class="quotelev1">&gt; mem[8] = {  0.0000,  0.0000,  0.0000}
</span><br>
<span class="quotelev1">&gt; mem[9] = {  0.0000,  0.0000,  0.0000}
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for your help.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Dorian
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; -----Urspr&#252;ngliche Nachricht-----
</span><br>
<span class="quotelev2">&gt; &gt; Von: &quot;George Bosilca&quot; &lt;bosilca_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Gesendet: 12.12.08 01:35:57
</span><br>
<span class="quotelev2">&gt; &gt; An: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Betreff: Re: [OMPI users] Onesided + derived datatypes
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Dorian,
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; You are right, the datatype generated using the block_index function  
</span><br>
<span class="quotelev2">&gt; &gt; is a legal data-type. We wrongly determined some overlapping regions  
</span><br>
<span class="quotelev2">&gt; &gt; in the description [which is illegal based on the MPI standard]. The  
</span><br>
<span class="quotelev2">&gt; &gt; detection of such overlapping regions being a very expensive process  
</span><br>
<span class="quotelev2">&gt; &gt; if we don't want any false positives (such as your datatype), I prefer  
</span><br>
<span class="quotelev2">&gt; &gt; to remove it completely.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; To keep it short I just committed a patch (r20120) in the trunk, and  
</span><br>
<span class="quotelev2">&gt; &gt; I'll take care to move it in the 1.3 and the 1.2.9.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;    Thanks for your help,
</span><br>
<span class="quotelev2">&gt; &gt;      george.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Dec 10, 2008, at 18:07 , doriankrause wrote:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Hi List,
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I have a MPI program which uses one sided communication with derived
</span><br>
<span class="quotelev3">&gt; &gt; &gt; datatypes (MPI_Type_create_indexed_block). I developed the code with
</span><br>
<span class="quotelev3">&gt; &gt; &gt; MPICH2 and unfortunately didn't thought about trying it out with
</span><br>
<span class="quotelev3">&gt; &gt; &gt; OpenMPI. Now that I'm &quot;porting&quot; the Application to OpenMPI I'm facing
</span><br>
<span class="quotelev3">&gt; &gt; &gt; some problems. On the most machines I get an SIGSEGV in MPI_Win_fence,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; sometimes an invalid datatype shows up. I ran the program in Valgrind
</span><br>
<span class="quotelev3">&gt; &gt; &gt; and didn't get anything valuable. Since I can't see a reason for this
</span><br>
<span class="quotelev3">&gt; &gt; &gt; problem (at least if I understand the standard correctly), I wrote the
</span><br>
<span class="quotelev3">&gt; &gt; &gt; attached testprogram.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Here are my experiences:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; * If I compile without ONESIDED defined, everything works and V1 and  
</span><br>
<span class="quotelev3">&gt; &gt; &gt; V2
</span><br>
<span class="quotelev3">&gt; &gt; &gt; give the same results
</span><br>
<span class="quotelev3">&gt; &gt; &gt; * If I compile with ONESIDED and V2 defined (MPI_Type_contiguous) it  
</span><br>
<span class="quotelev3">&gt; &gt; &gt; works.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; * ONESIDED + V1 + O2: No errors but obviously nothing is send? (Am I  
</span><br>
<span class="quotelev3">&gt; &gt; &gt; in
</span><br>
<span class="quotelev3">&gt; &gt; &gt; assuming that V1+O2 and V2 should be equivalent?)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; * ONESIDED + V1 + O1:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [m02:03115] *** An error occurred in MPI_Put
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [m02:03115] *** on win
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [m02:03115] *** MPI_ERR_TYPE: invalid datatype
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [m02:03115] *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I didn't get a segfault as in the &quot;real life example&quot; but if  
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ompitest.cc
</span><br>
<span class="quotelev3">&gt; &gt; &gt; is correct it means that OpenMPI is buggy when it comes to onesided
</span><br>
<span class="quotelev3">&gt; &gt; &gt; communication and (some) derived datatypes, so that it is probably not
</span><br>
<span class="quotelev3">&gt; &gt; &gt; of problem in my code.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I'm using OpenMPI-1.2.8 with the newest gcc 4.3.2 but the same  
</span><br>
<span class="quotelev3">&gt; &gt; &gt; behaviour
</span><br>
<span class="quotelev3">&gt; &gt; &gt; can be be seen with gcc-3.3.1 and intel 10.1.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Please correct me if ompitest.cc contains errors. Otherwise I would be
</span><br>
<span class="quotelev3">&gt; &gt; &gt; glad to hear how I should report these problems to the develepors (if
</span><br>
<span class="quotelev3">&gt; &gt; &gt; they don't read this).
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Thanks + best regards
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Dorian
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &lt;ompitest.tar.gz&gt;_______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ____________________________________________________________________
</span><br>
<span class="quotelev1">&gt; Psssst! Schon vom neuen WEB.DE MultiMessenger geh&#246;rt? 
</span><br>
<span class="quotelev1">&gt; Der kann`s mit allen: <a href="http://www.produkte.web.de/messenger/?did=3123">http://www.produkte.web.de/messenger/?did=3123</a>
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
<span class="quotelev1">&gt; 
</span><br>
<p><p>____________________________________________________________________
<br>
Psssst! Schon vom neuen WEB.DE MultiMessenger geh&#246;rt? 
<br>
Der kann`s mit allen: <a href="http://www.produkte.web.de/messenger/?did=3123">http://www.produkte.web.de/messenger/?did=3123</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7517.php">Jeff Squyres: "Re: [OMPI users] trouble using --mca mpi_yield_when_idle 1"</a>
<li><strong>Previous message:</strong> <a href="7515.php">Jeff Squyres: "Re: [OMPI users] Axon BTL for OpenMPI?"</a>
<li><strong>Maybe in reply to:</strong> <a href="7502.php">doriankrause: "[OMPI users] Onesided + derived datatypes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7529.php">George Bosilca: "Re: [OMPI users] Onesided + derived datatypes"</a>
<li><strong>Reply:</strong> <a href="7529.php">George Bosilca: "Re: [OMPI users] Onesided + derived datatypes"</a>
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
