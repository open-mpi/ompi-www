<?
$subject_val = "Re: [OMPI users] Joe Griffin: &quot;Re: Cannot compile onLinuxItanium	system&quot;";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb  2 13:29:07 2009" -->
<!-- isoreceived="20090202182907" -->
<!-- sent="Mon, 2 Feb 2009 10:27:39 -0800" -->
<!-- isosent="20090202182739" -->
<!-- name="Joe Griffin" -->
<!-- email="joe.griffin_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Joe Griffin: &amp;quot;Re: Cannot compile onLinuxItanium	system&amp;quot;" -->
<!-- id="1D367926756E9848BABD800E249AA5E0426437_at_NASCMEX01.na.mscsoftware.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="03C7B507-0736-4A50-A013-11005BFF67C5_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Joe Griffin: &quot;Re: Cannot compile onLinuxItanium	system&quot;<br>
<strong>From:</strong> Joe Griffin (<em>joe.griffin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-02 13:27:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7937.php">Daniel De Marco: "Re: [OMPI users] openmpi over tcp"</a>
<li><strong>Previous message:</strong> <a href="7935.php">Ralph Castain: "Re: [OMPI users] Handling output of processes"</a>
<li><strong>In reply to:</strong> <a href="7916.php">Jeff Squyres: "Re: [OMPI users] Joe Griffin: &quot;Re: Cannot compile on LinuxItanium	system&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7944.php">Jeff Squyres: "Re: [OMPI users] Joe Griffin: &quot;Re: Cannot compile onLinuxItanium	system&quot;"</a>
<li><strong>Reply:</strong> <a href="7944.php">Jeff Squyres: "Re: [OMPI users] Joe Griffin: &quot;Re: Cannot compile onLinuxItanium	system&quot;"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff and Tony,
<br>
<p>I just tried 1.2.2 on my Itanium and got the same error.
<br>
<p>Our code uses 1.2.2, but I built it back in 2007 with
<br>
V8 of the compiler.  Now I am using V10.1.  So, perhaps
<br>
the code is incompatible with Intel V10.1.
<br>
<p>Joe
<br>
<p><p><p><p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]]
</span><br>
On
<br>
<span class="quotelev1">&gt; Behalf Of Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Sent: Sunday, February 01, 2009 3:42 AM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Joe Griffin: &quot;Re: Cannot compile
</span><br>
onLinuxItanium
<br>
<span class="quotelev1">&gt; system&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm afraid I don't have access to any Itaniums, so debugging this will
</span><br>
<span class="quotelev1">&gt; be difficult.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The source file between OMPI v1.2 and OMPI v1.3 should be the same.
</span><br>
<span class="quotelev1">&gt; So *something* is different between the two.  Can one of you examine
</span><br>
<span class="quotelev1">&gt; the output of &quot;make&quot; to determine what is different?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - check the specific compile command for the two versions:
</span><br>
<span class="quotelev1">&gt;    - see if any different assemblers/flags/etc. flags are being used
</span><br>
<span class="quotelev1">&gt;    - verify that the same file is being compiled (please also check
</span><br>
<span class="quotelev1">&gt; these files with diff to ensure that they really are the same)
</span><br>
<span class="quotelev1">&gt; - check the output of the compile after the preprocessor has been
</span><br>
<span class="quotelev1">&gt; applied (probably via the -E switch to the specific compiler/assembler
</span><br>
<span class="quotelev1">&gt; command) and see if there are differences in what is actually being
</span><br>
<span class="quotelev1">&gt; compiled
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jan 29, 2009, at 2:32 PM, Joe Griffin wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Tony,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I had tried just the compile line using -O0, but it did not help.
</span><br>
<span class="quotelev2">&gt; &gt; The last
</span><br>
<span class="quotelev2">&gt; &gt; assembly I actually wrote was for a Cray Y-MP I think, so I don't
</span><br>
<span class="quotelev2">&gt; &gt; intend on
</span><br>
<span class="quotelev2">&gt; &gt; delving into that.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Sorry I couldn't be more help.
</span><br>
<span class="quotelev2">&gt; &gt; I do have access to what I call a Frankenstein Cluster of Itaniums
</span><br>
<span class="quotelev2">&gt; &gt; ( different
</span><br>
<span class="quotelev2">&gt; &gt; manufactures and different OS's) to support our clients, so I don't
</span><br>
<span class="quotelev2">&gt; &gt; mind
</span><br>
<span class="quotelev2">&gt; &gt; testing.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Sorry I could not help,
</span><br>
<span class="quotelev2">&gt; &gt; Joe
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]]
</span><br>
<span class="quotelev2">&gt; &gt; On Behalf Of Iannetti, Anthony C. (GRC-RTB0)
</span><br>
<span class="quotelev2">&gt; &gt; Sent: Thursday, January 29, 2009 11:22 AM
</span><br>
<span class="quotelev2">&gt; &gt; To: Open MPI Users
</span><br>
<span class="quotelev2">&gt; &gt; Subject: Re: [OMPI users] Joe Griffin: &quot;Re: Cannot compile on
</span><br>
<span class="quotelev2">&gt; &gt; LinuxItanium system&quot;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Joe,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   Intel recommends to set all of the compile flags, like CCFLAGS, to
</span><br>
<span class="quotelev2">&gt; &gt; -O2.  Other than than, we are doing nothing different than what
</span><br>
<span class="quotelev2">&gt; &gt; Intel recommends.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; When I set CCAS=ias, ./configure does not make it through the
</span><br>
<span class="quotelev2">&gt; &gt; Assembler stage.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; When I set CCAS=ias and CASFLAGS= (I am setting it to nothing), it
</span><br>
<span class="quotelev2">&gt; &gt; makes it through the Assembler config stage and fails at another
</span><br>
<span class="quotelev2">&gt; &gt; point in make.  I will send another email with the actual errors.  I
</span><br>
<span class="quotelev2">&gt; &gt; thought I would relay this information to you,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Tony
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Anthony C. Iannetti, P.E.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; NASA Glenn Research Center
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Aeropropulsion Division, Combustion Branch
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 21000 Brookpark Road, MS 5-10
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Cleveland, OH 44135
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; phone: (216)433-5586
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; email: Anthony.C.Iannetti_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Please note:  All opinions expressed in this message are my own and
</span><br>
<span class="quotelev2">&gt; &gt; NOT of NASA.  Only the NASA Administrator can speak on behalf of
</span><br>
NASA.
<br>
<span class="quotelev2">&gt; &gt;
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
<li><strong>Next message:</strong> <a href="7937.php">Daniel De Marco: "Re: [OMPI users] openmpi over tcp"</a>
<li><strong>Previous message:</strong> <a href="7935.php">Ralph Castain: "Re: [OMPI users] Handling output of processes"</a>
<li><strong>In reply to:</strong> <a href="7916.php">Jeff Squyres: "Re: [OMPI users] Joe Griffin: &quot;Re: Cannot compile on LinuxItanium	system&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7944.php">Jeff Squyres: "Re: [OMPI users] Joe Griffin: &quot;Re: Cannot compile onLinuxItanium	system&quot;"</a>
<li><strong>Reply:</strong> <a href="7944.php">Jeff Squyres: "Re: [OMPI users] Joe Griffin: &quot;Re: Cannot compile onLinuxItanium	system&quot;"</a>
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
