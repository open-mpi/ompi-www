<?
$subject_val = "Re: [OMPI users] Onesided + derived datatypes";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 12 07:45:41 2008" -->
<!-- isoreceived="20081212124541" -->
<!-- sent="Fri, 12 Dec 2008 13:45:36 +0100" -->
<!-- isosent="20081212124536" -->
<!-- name="Dorian Krause" -->
<!-- email="doriankrause_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Onesided + derived datatypes" -->
<!-- id="964872294_at_web.de" -->
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
<strong>Date:</strong> 2008-12-12 07:45:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7515.php">Jeff Squyres: "Re: [OMPI users] Axon BTL for OpenMPI?"</a>
<li><strong>Previous message:</strong> <a href="7513.php">Catrina Nguyen: "[OMPI users] bug of openmpi-1.3b3r20000"</a>
<li><strong>Maybe in reply to:</strong> <a href="7502.php">doriankrause: "[OMPI users] Onesided + derived datatypes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7516.php">Dorian Krause: "Re: [OMPI users] Onesided + derived datatypes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks George (and Brian :)).
<br>
<p>The MPI_Put error is gone. Did you take a look at the problem
<br>
that with the block_indexed type the PUT doesn't work? I'm
<br>
still getting the following output (V1 corresponds to the datatype
<br>
created with MPI_Type_create_indexed_block while the V2 type
<br>
is created with MPI_Type_contiguous, the ordering doesn't care anymore after
<br>
your fix) which confuses me 
<br>
because I remember that (on one machine) MPI_Put with MPI_Type_create_indexed
<br>
worked until the invalid datatype error showed up (after a couple of timesteps).
<br>
<p>*** -DO1=1 -DV1=1 ***
<br>
mem[0] = {  0.0000,  0.0000,  0.0000}
<br>
mem[1] = {  0.0000,  0.0000,  0.0000}
<br>
mem[2] = {  0.0000,  0.0000,  0.0000}
<br>
mem[3] = {  0.0000,  0.0000,  0.0000}
<br>
mem[4] = {  0.0000,  0.0000,  0.0000}
<br>
mem[5] = {  0.0000,  0.0000,  0.0000}
<br>
mem[6] = {  0.0000,  0.0000,  0.0000}
<br>
mem[7] = {  0.0000,  0.0000,  0.0000}
<br>
mem[8] = {  0.0000,  0.0000,  0.0000}
<br>
mem[9] = {  0.0000,  0.0000,  0.0000}
<br>
*** -DO1=1 -DV2=1 ***
<br>
mem[0] = {  5.0000,  0.0000,  0.0000}
<br>
mem[1] = {  0.0000,  0.0000, -1.0000}
<br>
mem[2] = {  0.0000,  0.0000,  0.0000}
<br>
mem[3] = {  0.0000,  0.0000,  0.0000}
<br>
mem[4] = {  0.0000,  0.0000,  0.0000}
<br>
mem[5] = {  0.0000,  0.0000,  0.0000}
<br>
mem[6] = {  0.0000,  0.0000,  0.0000}
<br>
mem[7] = {  0.0000,  0.0000,  0.0000}
<br>
mem[8] = {  0.0000,  0.0000,  0.0000}
<br>
mem[9] = {  0.0000,  0.0000,  0.0000}
<br>
*** -DO2=1 -DV1=1 ***
<br>
mem[0] = {  0.0000,  0.0000,  0.0000}
<br>
mem[1] = {  0.0000,  0.0000,  0.0000}
<br>
mem[2] = {  0.0000,  0.0000,  0.0000}
<br>
mem[3] = {  0.0000,  0.0000,  0.0000}
<br>
mem[4] = {  0.0000,  0.0000,  0.0000}
<br>
mem[5] = {  0.0000,  0.0000,  0.0000}
<br>
mem[6] = {  0.0000,  0.0000,  0.0000}
<br>
mem[7] = {  0.0000,  0.0000,  0.0000}
<br>
mem[8] = {  0.0000,  0.0000,  0.0000}
<br>
mem[9] = {  0.0000,  0.0000,  0.0000}
<br>
*** -DO2=1 -DV2=1 ***
<br>
mem[0] = {  5.0000,  0.0000,  0.0000}
<br>
mem[1] = {  0.0000,  0.0000, -1.0000}
<br>
mem[2] = {  0.0000,  0.0000,  0.0000}
<br>
mem[3] = {  0.0000,  0.0000,  0.0000}
<br>
mem[4] = {  0.0000,  0.0000,  0.0000}
<br>
mem[5] = {  0.0000,  0.0000,  0.0000}
<br>
mem[6] = {  0.0000,  0.0000,  0.0000}
<br>
mem[7] = {  0.0000,  0.0000,  0.0000}
<br>
mem[8] = {  0.0000,  0.0000,  0.0000}
<br>
mem[9] = {  0.0000,  0.0000,  0.0000}
<br>
<p><p>Thanks for your help.
<br>
<p>Dorian
<br>
<p><p><span class="quotelev1">&gt; -----Urspr&#252;ngliche Nachricht-----
</span><br>
<span class="quotelev1">&gt; Von: &quot;George Bosilca&quot; &lt;bosilca_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Gesendet: 12.12.08 01:35:57
</span><br>
<span class="quotelev1">&gt; An: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Betreff: Re: [OMPI users] Onesided + derived datatypes
</span><br>
<p><p><span class="quotelev1">&gt; Dorian,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You are right, the datatype generated using the block_index function  
</span><br>
<span class="quotelev1">&gt; is a legal data-type. We wrongly determined some overlapping regions  
</span><br>
<span class="quotelev1">&gt; in the description [which is illegal based on the MPI standard]. The  
</span><br>
<span class="quotelev1">&gt; detection of such overlapping regions being a very expensive process  
</span><br>
<span class="quotelev1">&gt; if we don't want any false positives (such as your datatype), I prefer  
</span><br>
<span class="quotelev1">&gt; to remove it completely.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; To keep it short I just committed a patch (r20120) in the trunk, and  
</span><br>
<span class="quotelev1">&gt; I'll take care to move it in the 1.3 and the 1.2.9.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Thanks for your help,
</span><br>
<span class="quotelev1">&gt;      george.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Dec 10, 2008, at 18:07 , doriankrause wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hi List,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I have a MPI program which uses one sided communication with derived
</span><br>
<span class="quotelev2">&gt; &gt; datatypes (MPI_Type_create_indexed_block). I developed the code with
</span><br>
<span class="quotelev2">&gt; &gt; MPICH2 and unfortunately didn't thought about trying it out with
</span><br>
<span class="quotelev2">&gt; &gt; OpenMPI. Now that I'm &quot;porting&quot; the Application to OpenMPI I'm facing
</span><br>
<span class="quotelev2">&gt; &gt; some problems. On the most machines I get an SIGSEGV in MPI_Win_fence,
</span><br>
<span class="quotelev2">&gt; &gt; sometimes an invalid datatype shows up. I ran the program in Valgrind
</span><br>
<span class="quotelev2">&gt; &gt; and didn't get anything valuable. Since I can't see a reason for this
</span><br>
<span class="quotelev2">&gt; &gt; problem (at least if I understand the standard correctly), I wrote the
</span><br>
<span class="quotelev2">&gt; &gt; attached testprogram.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Here are my experiences:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; * If I compile without ONESIDED defined, everything works and V1 and  
</span><br>
<span class="quotelev2">&gt; &gt; V2
</span><br>
<span class="quotelev2">&gt; &gt; give the same results
</span><br>
<span class="quotelev2">&gt; &gt; * If I compile with ONESIDED and V2 defined (MPI_Type_contiguous) it  
</span><br>
<span class="quotelev2">&gt; &gt; works.
</span><br>
<span class="quotelev2">&gt; &gt; * ONESIDED + V1 + O2: No errors but obviously nothing is send? (Am I  
</span><br>
<span class="quotelev2">&gt; &gt; in
</span><br>
<span class="quotelev2">&gt; &gt; assuming that V1+O2 and V2 should be equivalent?)
</span><br>
<span class="quotelev2">&gt; &gt; * ONESIDED + V1 + O1:
</span><br>
<span class="quotelev2">&gt; &gt; [m02:03115] *** An error occurred in MPI_Put
</span><br>
<span class="quotelev2">&gt; &gt; [m02:03115] *** on win
</span><br>
<span class="quotelev2">&gt; &gt; [m02:03115] *** MPI_ERR_TYPE: invalid datatype
</span><br>
<span class="quotelev2">&gt; &gt; [m02:03115] *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I didn't get a segfault as in the &quot;real life example&quot; but if  
</span><br>
<span class="quotelev2">&gt; &gt; ompitest.cc
</span><br>
<span class="quotelev2">&gt; &gt; is correct it means that OpenMPI is buggy when it comes to onesided
</span><br>
<span class="quotelev2">&gt; &gt; communication and (some) derived datatypes, so that it is probably not
</span><br>
<span class="quotelev2">&gt; &gt; of problem in my code.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I'm using OpenMPI-1.2.8 with the newest gcc 4.3.2 but the same  
</span><br>
<span class="quotelev2">&gt; &gt; behaviour
</span><br>
<span class="quotelev2">&gt; &gt; can be be seen with gcc-3.3.1 and intel 10.1.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Please correct me if ompitest.cc contains errors. Otherwise I would be
</span><br>
<span class="quotelev2">&gt; &gt; glad to hear how I should report these problems to the develepors (if
</span><br>
<span class="quotelev2">&gt; &gt; they don't read this).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks + best regards
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Dorian
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; &lt;ompitest.tar.gz&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="7515.php">Jeff Squyres: "Re: [OMPI users] Axon BTL for OpenMPI?"</a>
<li><strong>Previous message:</strong> <a href="7513.php">Catrina Nguyen: "[OMPI users] bug of openmpi-1.3b3r20000"</a>
<li><strong>Maybe in reply to:</strong> <a href="7502.php">doriankrause: "[OMPI users] Onesided + derived datatypes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7516.php">Dorian Krause: "Re: [OMPI users] Onesided + derived datatypes"</a>
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
