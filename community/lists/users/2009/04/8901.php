<?
$subject_val = "Re: [OMPI users] help: seg fault when freeing communicator";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 14 10:53:51 2009" -->
<!-- isoreceived="20090414145351" -->
<!-- sent="Tue, 14 Apr 2009 10:53:46 -0400" -->
<!-- isosent="20090414145346" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] help: seg fault when freeing communicator" -->
<!-- id="740523E4-81B1-4F3B-9073-9069B9773149_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4980_1239631302_n3DE1ciX003042_E1C9153C-9E4A-4192-9963-A7EA93EA478E_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] help: seg fault when freeing communicator<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-14 10:53:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8902.php">Orion Poplawski: "Re: [OMPI users] PGI Fortran pthread support"</a>
<li><strong>Previous message:</strong> <a href="8900.php">Jeff Squyres: "Re: [OMPI users] shared libraries issue compiling1.3.1/intel10.1.022"</a>
<li><strong>In reply to:</strong> <a href="8881.php">Graham Mark: "[OMPI users] help: seg fault when freeing communicator"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
In this case, I think we would need a little more information such as  
<br>
your application itself.  Is there any chance you can make a small  
<br>
reproducer of the application that we can easily study and reproduce  
<br>
the problem?
<br>
<p>Have you tried running your application through a memory-checking  
<br>
debugger, perchance?
<br>
<p><p>On Apr 13, 2009, at 10:01 AM, Graham Mark wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This has me stumped. My code seg faults (sometimes) while
</span><br>
<span class="quotelev1">&gt; it's attempting to free a communicator--at least, that's what the
</span><br>
<span class="quotelev1">&gt; stack trace indicates, and that's what Totalview also shows.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This happens when I run the program with 27 processes. If I run with  
</span><br>
<span class="quotelev1">&gt; 8,
</span><br>
<span class="quotelev1">&gt; the program finishes without error. (The program requires that the
</span><br>
<span class="quotelev1">&gt; number of
</span><br>
<span class="quotelev1">&gt; processes be a perfect cube.) It happens on two different machines.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The program reads input files and creates a 1-D circular MPI topology
</span><br>
<span class="quotelev1">&gt; in order to pass input data round robin to all processes. When that is
</span><br>
<span class="quotelev1">&gt; done, each process does some computation and writes out a file. Then
</span><br>
<span class="quotelev1">&gt; the program finishes. The seg fault occurs when the communicator
</span><br>
<span class="quotelev1">&gt; associated with the topoology is supposedly being freed as the program
</span><br>
<span class="quotelev1">&gt; ends.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The openmpi help web page lists information that should be included in
</span><br>
<span class="quotelev1">&gt; a help request. I'm attaching all of that that I could find: my
</span><br>
<span class="quotelev1">&gt; command to run the program, the stack trace, the outputs of
</span><br>
<span class="quotelev1">&gt; 'ompi_info', 'limit', 'ibv_devinfo', 'ifconfig', 'uname' and values of
</span><br>
<span class="quotelev1">&gt; my
</span><br>
<span class="quotelev1">&gt; PATH and LD_LIBRARY_PATH.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for your help.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Graham Mark
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *****************************************************************************
</span><br>
<span class="quotelev1">&gt; **                                                                         **
</span><br>
<span class="quotelev1">&gt; ** WARNING:  This email contains an attachment of a very suspicious  
</span><br>
<span class="quotelev1">&gt; type.  **
</span><br>
<span class="quotelev1">&gt; ** You are urged NOT to open this attachment unless you are  
</span><br>
<span class="quotelev1">&gt; absolutely     **
</span><br>
<span class="quotelev1">&gt; ** sure it is legitimate.  Opening this attachment may cause  
</span><br>
<span class="quotelev1">&gt; irreparable   **
</span><br>
<span class="quotelev1">&gt; ** damage to your computer and your files.  If you have any  
</span><br>
<span class="quotelev1">&gt; questions      **
</span><br>
<span class="quotelev1">&gt; ** about the validity of this message, PLEASE SEEK HELP BEFORE  
</span><br>
<span class="quotelev1">&gt; OPENING IT. **
</span><br>
<span class="quotelev1">&gt; **                                                                         **
</span><br>
<span class="quotelev1">&gt; ** This warning was added by the IU Computer Science Dept. mail  
</span><br>
<span class="quotelev1">&gt; scanner.   **
</span><br>
<span class="quotelev1">&gt; *****************************************************************************
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;openmpi-info.zip&gt;&lt;ATT1732589.txt&gt;&lt;ATT1732591.txt&gt;
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
<li><strong>Next message:</strong> <a href="8902.php">Orion Poplawski: "Re: [OMPI users] PGI Fortran pthread support"</a>
<li><strong>Previous message:</strong> <a href="8900.php">Jeff Squyres: "Re: [OMPI users] shared libraries issue compiling1.3.1/intel10.1.022"</a>
<li><strong>In reply to:</strong> <a href="8881.php">Graham Mark: "[OMPI users] help: seg fault when freeing communicator"</a>
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
