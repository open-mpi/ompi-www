<?
$subject_val = "Re: [OMPI users] Joe Griffin: &quot;Re: Cannot compile on LinuxItanium	system&quot;";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Feb  1 06:41:55 2009" -->
<!-- isoreceived="20090201114155" -->
<!-- sent="Sun, 1 Feb 2009 06:41:49 -0500" -->
<!-- isosent="20090201114149" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Joe Griffin: &amp;quot;Re: Cannot compile on LinuxItanium	system&amp;quot;" -->
<!-- id="03C7B507-0736-4A50-A013-11005BFF67C5_at_cisco.com" -->
<!-- charset="WINDOWS-1252" -->
<!-- inreplyto="1D367926756E9848BABD800E249AA5E04263E0_at_NASCMEX01.na.mscsoftware.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Joe Griffin: &quot;Re: Cannot compile on LinuxItanium	system&quot;<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-01 06:41:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7917.php">Jeff Squyres: "Re: [OMPI users] v1.3: mca_common_sm_mmap_init error"</a>
<li><strong>Previous message:</strong> <a href="7915.php">Jeff Squyres: "Re: [OMPI users] Compilers"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/01/7880.php">Joe Griffin: "Re: [OMPI users] Joe Griffin: &quot;Re: Cannot compile on LinuxItanium	system&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7936.php">Joe Griffin: "Re: [OMPI users] Joe Griffin: &quot;Re: Cannot compile onLinuxItanium	system&quot;"</a>
<li><strong>Reply:</strong> <a href="7936.php">Joe Griffin: "Re: [OMPI users] Joe Griffin: &quot;Re: Cannot compile onLinuxItanium	system&quot;"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm afraid I don't have access to any Itaniums, so debugging this will  
<br>
be difficult.
<br>
<p>The source file between OMPI v1.2 and OMPI v1.3 should be the same.   
<br>
So *something* is different between the two.  Can one of you examine  
<br>
the output of &quot;make&quot; to determine what is different?
<br>
<p>- check the specific compile command for the two versions:
<br>
&nbsp;&nbsp;&nbsp;- see if any different assemblers/flags/etc. flags are being used
<br>
&nbsp;&nbsp;&nbsp;- verify that the same file is being compiled (please also check  
<br>
these files with diff to ensure that they really are the same)
<br>
- check the output of the compile after the preprocessor has been  
<br>
applied (probably via the -E switch to the specific compiler/assembler  
<br>
command) and see if there are differences in what is actually being  
<br>
compiled
<br>
<p><p><p>On Jan 29, 2009, at 2:32 PM, Joe Griffin wrote:
<br>
<p><span class="quotelev1">&gt; Tony,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I had tried just the compile line using &#150;O0, but it did not help.   
</span><br>
<span class="quotelev1">&gt; The last
</span><br>
<span class="quotelev1">&gt; assembly I actually wrote was for a Cray Y-MP I think, so I don&#146;t  
</span><br>
<span class="quotelev1">&gt; intend on
</span><br>
<span class="quotelev1">&gt; delving into that.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sorry I couldn&#146;t be more help.
</span><br>
<span class="quotelev1">&gt; I do have access to what I call a Frankenstein Cluster of Itaniums  
</span><br>
<span class="quotelev1">&gt; ( different
</span><br>
<span class="quotelev1">&gt; manufactures and different OS&#146;s) to support our clients, so I don&#146;t  
</span><br>
<span class="quotelev1">&gt; mind
</span><br>
<span class="quotelev1">&gt; testing.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sorry I could not help,
</span><br>
<span class="quotelev1">&gt; Joe
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]]  
</span><br>
<span class="quotelev1">&gt; On Behalf Of Iannetti, Anthony C. (GRC-RTB0)
</span><br>
<span class="quotelev1">&gt; Sent: Thursday, January 29, 2009 11:22 AM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Joe Griffin: &quot;Re: Cannot compile on  
</span><br>
<span class="quotelev1">&gt; LinuxItanium system&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Joe,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Intel recommends to set all of the compile flags, like CCFLAGS, to  
</span><br>
<span class="quotelev1">&gt; -O2.  Other than than, we are doing nothing different than what  
</span><br>
<span class="quotelev1">&gt; Intel recommends.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When I set CCAS=ias, ./configure does not make it through the  
</span><br>
<span class="quotelev1">&gt; Assembler stage.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When I set CCAS=ias and CASFLAGS= (I am setting it to nothing), it  
</span><br>
<span class="quotelev1">&gt; makes it through the Assembler config stage and fails at another  
</span><br>
<span class="quotelev1">&gt; point in make.  I will send another email with the actual errors.  I  
</span><br>
<span class="quotelev1">&gt; thought I would relay this information to you,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Tony
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Anthony C. Iannetti, P.E.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; NASA Glenn Research Center
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Aeropropulsion Division, Combustion Branch
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 21000 Brookpark Road, MS 5-10
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cleveland, OH 44135
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; phone: (216)433-5586
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; email: Anthony.C.Iannetti_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please note:  All opinions expressed in this message are my own and  
</span><br>
<span class="quotelev1">&gt; NOT of NASA.  Only the NASA Administrator can speak on behalf of NASA.
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7917.php">Jeff Squyres: "Re: [OMPI users] v1.3: mca_common_sm_mmap_init error"</a>
<li><strong>Previous message:</strong> <a href="7915.php">Jeff Squyres: "Re: [OMPI users] Compilers"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/01/7880.php">Joe Griffin: "Re: [OMPI users] Joe Griffin: &quot;Re: Cannot compile on LinuxItanium	system&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7936.php">Joe Griffin: "Re: [OMPI users] Joe Griffin: &quot;Re: Cannot compile onLinuxItanium	system&quot;"</a>
<li><strong>Reply:</strong> <a href="7936.php">Joe Griffin: "Re: [OMPI users] Joe Griffin: &quot;Re: Cannot compile onLinuxItanium	system&quot;"</a>
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
