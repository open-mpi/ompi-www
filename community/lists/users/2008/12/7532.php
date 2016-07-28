<?
$subject_val = "Re: [OMPI users] Onesided + derived datatypes";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Dec 13 14:58:55 2008" -->
<!-- isoreceived="20081213195855" -->
<!-- sent="Sat, 13 Dec 2008 14:58:48 -0500" -->
<!-- isosent="20081213195848" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Onesided + derived datatypes" -->
<!-- id="37739F86-611F-4D57-A098-07C28D652E02_at_eecs.utk.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="71A5CF12-A620-458C-B41C-B1ACE8B3A581_at_cisco.com" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-13 14:58:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7533.php">Gabriele Fatigati: "[OMPI users] Valgrind Warning"</a>
<li><strong>Previous message:</strong> <a href="7531.php">Jeff Squyres: "Re: [OMPI users] Interactive OMPI job, stdin problem"</a>
<li><strong>In reply to:</strong> <a href="7530.php">Jeff Squyres: "Re: [OMPI users] Onesided + derived datatypes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7552.php">George Bosilca: "Re: [OMPI users] Onesided + derived datatypes"</a>
<li><strong>Reply:</strong> <a href="7552.php">George Bosilca: "Re: [OMPI users] Onesided + derived datatypes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
No. It fixes an issue when correctly rebuilding (i.e. with the real  
<br>
displacements) the data-type on the remote side, but it didn't fix the  
<br>
wrong values problem.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Dec 13, 2008, at 07:59 , Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; George -- you had a commit after this (r20123) -- did that fix the  
</span><br>
<span class="quotelev1">&gt; problem?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Dec 12, 2008, at 8:14 PM, George Bosilca wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Dorian,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I looked into this again. So far I can confirm that the datatype is  
</span><br>
<span class="quotelev2">&gt;&gt; correctly created, and always contain the correct values  
</span><br>
<span class="quotelev2">&gt;&gt; (internally). If instead of one sided you use send/recv then the  
</span><br>
<span class="quotelev2">&gt;&gt; output is exactly what you expect. With the one sided there are  
</span><br>
<span class="quotelev2">&gt;&gt; several strange things. What I can say so far is that everything  
</span><br>
<span class="quotelev2">&gt;&gt; works fine, except when the block indexed datatype is used as the  
</span><br>
<span class="quotelev2">&gt;&gt; remote datatype in the MPI_Put operation. In this case the remote  
</span><br>
<span class="quotelev2">&gt;&gt; memory is not modified.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; george.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Dec 12, 2008, at 08:20 , Dorian Krause wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi again.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I adapted my testing program by overwriting the window buffer
</span><br>
<span class="quotelev3">&gt;&gt;&gt; complete with 1. This allows me to see at which places OpenMPI  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; writes.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The result is:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *** -DO1=1 -DV1=1 *** (displ 3,2,1,0 ,  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Type_create_indexed_block)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mem[0] = {  0.0000,  0.0000,  0.0000}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mem[1] = {  0.0000,  0.0000,  0.0000}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mem[2] = {  0.0000,  0.0000,  0.0000}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mem[3] = {     nan,     nan,     nan}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mem[4] = {     nan,     nan,     nan}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mem[5] = {     nan,     nan,     nan}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mem[6] = {     nan,     nan,     nan}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mem[7] = {     nan,     nan,     nan}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mem[8] = {     nan,     nan,     nan}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mem[9] = {     nan,     nan,     nan}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *** -DO1=1 -DV2=1 *** MPI_Type_contiguous(4, mpi_double3, &amp;mpit)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mem[0] = {  0.0000,  1.0000,  2.0000}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mem[1] = {  3.0000,  4.0000,  5.0000}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mem[2] = {  6.0000,  7.0000,  8.0000}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mem[3] = {  9.0000, 10.0000, 11.0000}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mem[4] = {     nan,     nan,     nan}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mem[5] = {     nan,     nan,     nan}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mem[6] = {     nan,     nan,     nan}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mem[7] = {     nan,     nan,     nan}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mem[8] = {     nan,     nan,     nan}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mem[9] = {     nan,     nan,     nan}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *** -DO2=1 -DV1=1 *** (displ 0,1,2,3 ,  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Type_create_indexed_block)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mem[0] = {  0.0000,  0.0000,  0.0000}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mem[1] = {  0.0000,  0.0000,  0.0000}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mem[2] = {  0.0000,  0.0000,  0.0000}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mem[3] = {  0.0000,  0.0000,  0.0000}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mem[4] = {     nan,     nan,     nan}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mem[5] = {     nan,     nan,     nan}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mem[6] = {     nan,     nan,     nan}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mem[7] = {     nan,     nan,     nan}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mem[8] = {     nan,     nan,     nan}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mem[9] = {     nan,     nan,     nan}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *** -DO2=1 -DV2=1 *** MPI_Type_contiguous(4, mpi_double3, &amp;mpit)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mem[0] = {  0.0000,  1.0000,  2.0000}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mem[1] = {  3.0000,  4.0000,  5.0000}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mem[2] = {  6.0000,  7.0000,  8.0000}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mem[3] = {  9.0000, 10.0000, 11.0000}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mem[4] = {     nan,     nan,     nan}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mem[5] = {     nan,     nan,     nan}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mem[6] = {     nan,     nan,     nan}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mem[7] = {     nan,     nan,     nan}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mem[8] = {     nan,     nan,     nan}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mem[9] = {     nan,     nan,     nan}
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Note that for the reversed ordering (3,2,1,0) only 3 lines are  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; written. If I use displacements 3,2,1,8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I get
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *** -DO1=1 -DV1=1 ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mem[0] = {  0.0000,  0.0000,  0.0000}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mem[1] = {  0.0000,  0.0000,  0.0000}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mem[2] = {  0.0000,  0.0000,  0.0000}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mem[3] = {     nan,     nan,     nan}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mem[4] = {     nan,     nan,     nan}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mem[5] = {     nan,     nan,     nan}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mem[6] = {     nan,     nan,     nan}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mem[7] = {     nan,     nan,     nan}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mem[8] = {  0.0000,  0.0000,  0.0000}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mem[9] = {     nan,     nan,     nan}
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; but 3,2,8,1 yields
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *** -DO1=1 -DV1=1 ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mem[0] = {  0.0000,  0.0000,  0.0000}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mem[1] = {  0.0000,  0.0000,  0.0000}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mem[2] = {  0.0000,  0.0000,  0.0000}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mem[3] = {     nan,     nan,     nan}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mem[4] = {     nan,     nan,     nan}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mem[5] = {     nan,     nan,     nan}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mem[6] = {     nan,     nan,     nan}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mem[7] = {     nan,     nan,     nan}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mem[8] = {     nan,     nan,     nan}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mem[9] = {     nan,     nan,     nan}
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Dorian
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -----Urspr&#252;ngliche Nachricht-----
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Von: &quot;Dorian Krause&quot; &lt;doriankrause_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Gesendet: 12.12.08 13:49:25
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; An: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Betreff: Re: [OMPI users] Onesided + derived datatypes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks George (and Brian :)).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The MPI_Put error is gone. Did you take a look at the problem
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; that with the block_indexed type the PUT doesn't work? I'm
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; still getting the following output (V1 corresponds to the datatype
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; created with MPI_Type_create_indexed_block while the V2 type
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; is created with MPI_Type_contiguous, the ordering doesn't care  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; anymore after
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; your fix) which confuses me
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; because I remember that (on one machine) MPI_Put with  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI_Type_create_indexed
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; worked until the invalid datatype error showed up (after a couple  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; of timesteps).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *** -DO1=1 -DV1=1 ***
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mem[0] = {  0.0000,  0.0000,  0.0000}
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mem[1] = {  0.0000,  0.0000,  0.0000}
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mem[2] = {  0.0000,  0.0000,  0.0000}
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mem[3] = {  0.0000,  0.0000,  0.0000}
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mem[4] = {  0.0000,  0.0000,  0.0000}
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mem[5] = {  0.0000,  0.0000,  0.0000}
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mem[6] = {  0.0000,  0.0000,  0.0000}
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mem[7] = {  0.0000,  0.0000,  0.0000}
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mem[8] = {  0.0000,  0.0000,  0.0000}
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mem[9] = {  0.0000,  0.0000,  0.0000}
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *** -DO1=1 -DV2=1 ***
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mem[0] = {  5.0000,  0.0000,  0.0000}
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mem[1] = {  0.0000,  0.0000, -1.0000}
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mem[2] = {  0.0000,  0.0000,  0.0000}
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mem[3] = {  0.0000,  0.0000,  0.0000}
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mem[4] = {  0.0000,  0.0000,  0.0000}
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mem[5] = {  0.0000,  0.0000,  0.0000}
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mem[6] = {  0.0000,  0.0000,  0.0000}
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mem[7] = {  0.0000,  0.0000,  0.0000}
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mem[8] = {  0.0000,  0.0000,  0.0000}
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mem[9] = {  0.0000,  0.0000,  0.0000}
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *** -DO2=1 -DV1=1 ***
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mem[0] = {  0.0000,  0.0000,  0.0000}
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mem[1] = {  0.0000,  0.0000,  0.0000}
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mem[2] = {  0.0000,  0.0000,  0.0000}
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mem[3] = {  0.0000,  0.0000,  0.0000}
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mem[4] = {  0.0000,  0.0000,  0.0000}
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mem[5] = {  0.0000,  0.0000,  0.0000}
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mem[6] = {  0.0000,  0.0000,  0.0000}
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mem[7] = {  0.0000,  0.0000,  0.0000}
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mem[8] = {  0.0000,  0.0000,  0.0000}
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mem[9] = {  0.0000,  0.0000,  0.0000}
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *** -DO2=1 -DV2=1 ***
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mem[0] = {  5.0000,  0.0000,  0.0000}
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mem[1] = {  0.0000,  0.0000, -1.0000}
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mem[2] = {  0.0000,  0.0000,  0.0000}
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mem[3] = {  0.0000,  0.0000,  0.0000}
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mem[4] = {  0.0000,  0.0000,  0.0000}
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mem[5] = {  0.0000,  0.0000,  0.0000}
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mem[6] = {  0.0000,  0.0000,  0.0000}
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mem[7] = {  0.0000,  0.0000,  0.0000}
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mem[8] = {  0.0000,  0.0000,  0.0000}
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mem[9] = {  0.0000,  0.0000,  0.0000}
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks for your help.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Dorian
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -----Urspr&#252;ngliche Nachricht-----
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Von: &quot;George Bosilca&quot; &lt;bosilca_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Gesendet: 12.12.08 01:35:57
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; An: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Betreff: Re: [OMPI users] Onesided + derived datatypes
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Dorian,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; You are right, the datatype generated using the block_index  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; function
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; is a legal data-type. We wrongly determined some overlapping  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; regions
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; in the description [which is illegal based on the MPI standard].  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; The
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; detection of such overlapping regions being a very expensive  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; process
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; if we don't want any false positives (such as your datatype), I  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; prefer
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; to remove it completely.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; To keep it short I just committed a patch (r20120) in the trunk,  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; and
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I'll take care to move it in the 1.3 and the 1.2.9.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Thanks for your help,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   george.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Dec 10, 2008, at 18:07 , doriankrause wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Hi List,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I have a MPI program which uses one sided communication with  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; derived
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; datatypes (MPI_Type_create_indexed_block). I developed the code  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; with
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; MPICH2 and unfortunately didn't thought about trying it out with
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; OpenMPI. Now that I'm &quot;porting&quot; the Application to OpenMPI I'm  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; facing
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; some problems. On the most machines I get an SIGSEGV in  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; MPI_Win_fence,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; sometimes an invalid datatype shows up. I ran the program in  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Valgrind
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; and didn't get anything valuable. Since I can't see a reason  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; for this
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; problem (at least if I understand the standard correctly), I  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; wrote the
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; attached testprogram.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Here are my experiences:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; * If I compile without ONESIDED defined, everything works and  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; V1 and
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; V2
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; give the same results
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; * If I compile with ONESIDED and V2 defined  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; (MPI_Type_contiguous) it
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; works.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; * ONESIDED + V1 + O2: No errors but obviously nothing is send?  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; (Am I
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; in
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; assuming that V1+O2 and V2 should be equivalent?)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; * ONESIDED + V1 + O1:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [m02:03115] *** An error occurred in MPI_Put
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [m02:03115] *** on win
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [m02:03115] *** MPI_ERR_TYPE: invalid datatype
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [m02:03115] *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I didn't get a segfault as in the &quot;real life example&quot; but if
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ompitest.cc
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; is correct it means that OpenMPI is buggy when it comes to  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; onesided
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; communication and (some) derived datatypes, so that it is  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; probably not
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; of problem in my code.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I'm using OpenMPI-1.2.8 with the newest gcc 4.3.2 but the same
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; behaviour
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; can be be seen with gcc-3.3.1 and intel 10.1.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Please correct me if ompitest.cc contains errors. Otherwise I  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; would be
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; glad to hear how I should report these problems to the  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; develepors (if
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; they don't read this).
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Thanks + best regards
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Dorian
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &lt;ompitest.tar.gz&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ____________________________________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Psssst! Schon vom neuen WEB.DE MultiMessenger geh&#246;rt?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Der kann`s mit allen: <a href="http://www.produkte.web.de/messenger/">http://www.produkte.web.de/messenger/</a>? 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; did=3123
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ____________________________________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Psssst! Schon vom neuen WEB.DE MultiMessenger geh&#246;rt?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Der kann`s mit allen: <a href="http://www.produkte.web.de/messenger/?did=3123">http://www.produkte.web.de/messenger/?did=3123</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<li><strong>Next message:</strong> <a href="7533.php">Gabriele Fatigati: "[OMPI users] Valgrind Warning"</a>
<li><strong>Previous message:</strong> <a href="7531.php">Jeff Squyres: "Re: [OMPI users] Interactive OMPI job, stdin problem"</a>
<li><strong>In reply to:</strong> <a href="7530.php">Jeff Squyres: "Re: [OMPI users] Onesided + derived datatypes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7552.php">George Bosilca: "Re: [OMPI users] Onesided + derived datatypes"</a>
<li><strong>Reply:</strong> <a href="7552.php">George Bosilca: "Re: [OMPI users] Onesided + derived datatypes"</a>
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
