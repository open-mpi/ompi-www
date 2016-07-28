<? include("../../include/msg-header.inc"); ?>
<!-- received="Sun Nov 19 09:00:11 2006" -->
<!-- isoreceived="20061119140011" -->
<!-- sent="Sat, 18 Nov 2006 09:22:18 -0500" -->
<!-- isosent="20061118142218" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error: SAVE statement at (1) follows blanket SAVE statement in file mpif.h" -->
<!-- id="8336AD7B-8811-4400-B795-64160C35489A_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="Pine.LNX.4.64.0611161552251.28024_at_iridium.hhmi.umbc.edu" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-11-18 09:22:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2187.php">trasz_at_[hidden]: "[OMPI users] IMB-EXT problems"</a>
<li><strong>Previous message:</strong> <a href="2185.php">George Bosilca: "Re: [OMPI users] btl mx : file not found"</a>
<li><strong>In reply to:</strong> <a href="2179.php">Yu Chen: "[OMPI users] Error: SAVE statement at (1) follows blanket SAVE statement in file mpif.h"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2190.php">Michael: "Re: [OMPI users] Error: SAVE statement at (1) follows blanket SAVE statement in file mpif.h"</a>
<li><strong>Reply:</strong> <a href="2190.php">Michael: "Re: [OMPI users] Error: SAVE statement at (1) follows blanket SAVE statement in file mpif.h"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We do not appear to have the token &quot;save&quot; anywhere in our mpif.h file.
<br>
<p>Can you send a copy of the mpif.h file that your compiler is finding  
<br>
(and ensure that it belongs to Open MPI)?  Also please send the  
<br>
information regarding compilation problems listed on the &quot;Getting  
<br>
help&quot; page on the web site.
<br>
<p>Thanks!
<br>
<p><p>On Nov 16, 2006, at 4:11 PM, Yu Chen wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Not sure if it's openmpi related or the program I am installing.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I installed openmpi using g95 as F77 and F90 compiler with flags
</span><br>
<span class="quotelev1">&gt; &quot;-ffixed-line-length-132  -fno-underscoring&quot; on PowerMac G5 with OS X
</span><br>
<span class="quotelev1">&gt; 10.4 without any problems.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Then I tried to compile this program (CYANA if it matters, it's a
</span><br>
<span class="quotelev1">&gt; molucular caculation program) with openmpi generated mpif90 wrapper  
</span><br>
<span class="quotelev1">&gt; with
</span><br>
<span class="quotelev1">&gt; same flags, then it gave out the following errors, wondering if  
</span><br>
<span class="quotelev1">&gt; someone
</span><br>
<span class="quotelev1">&gt; has idea about this, googled it without much help. Thanks a lot in
</span><br>
<span class="quotelev1">&gt; advance.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; .....
</span><br>
<span class="quotelev1">&gt; .....
</span><br>
<span class="quotelev1">&gt; ../../etc/prepare -c -Dg95 -Dmpi -Dapple -Dapple_ompig95-withflags -w
</span><br>
<span class="quotelev1">&gt; inclan.for &gt; inclan.f
</span><br>
<span class="quotelev1">&gt; /sw/mpich2_g95_withflags/bin/mpif90 -c -ffixed-line-length-132
</span><br>
<span class="quotelev1">&gt; -fno-underscoring inclan.f
</span><br>
<span class="quotelev1">&gt; In file mpif.h:420
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      Included at inclan.f:26
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         SAVE /MPIPRIV1/,/MPIPRIV2/
</span><br>
<span class="quotelev1">&gt;            1
</span><br>
<span class="quotelev1">&gt; Error: SAVE statement at (1) follows blanket SAVE statement
</span><br>
<span class="quotelev1">&gt; In file mpif.h:423
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      Included at inclan.f:26
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         SAVE   /MPIPRIVC/
</span><br>
<span class="quotelev1">&gt;            1
</span><br>
<span class="quotelev1">&gt; Error: SAVE statement at (1) follows blanket SAVE statement
</span><br>
<span class="quotelev1">&gt; make[2]: *** [inclan.o] Error 1
</span><br>
<span class="quotelev1">&gt; .....
</span><br>
<span class="quotelev1">&gt; .....
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ===========================================
</span><br>
<span class="quotelev1">&gt; Yu Chen
</span><br>
<span class="quotelev1">&gt; Howard Hughes Medical Institute
</span><br>
<span class="quotelev1">&gt; Chemistry Building, Rm 182
</span><br>
<span class="quotelev1">&gt; University of Maryland at Baltimore County
</span><br>
<span class="quotelev1">&gt; 1000 Hilltop Circle
</span><br>
<span class="quotelev1">&gt; Baltimore, MD 21250
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; phone: 	(410)455-6347 (primary)
</span><br>
<span class="quotelev1">&gt;  	(410)455-2718 (secondary)
</span><br>
<span class="quotelev1">&gt; fax: 	(410)455-1174
</span><br>
<span class="quotelev1">&gt; email: 	chen_at_[hidden]
</span><br>
<span class="quotelev1">&gt; ===========================================
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
Server Virtualization Business Unit
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2187.php">trasz_at_[hidden]: "[OMPI users] IMB-EXT problems"</a>
<li><strong>Previous message:</strong> <a href="2185.php">George Bosilca: "Re: [OMPI users] btl mx : file not found"</a>
<li><strong>In reply to:</strong> <a href="2179.php">Yu Chen: "[OMPI users] Error: SAVE statement at (1) follows blanket SAVE statement in file mpif.h"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2190.php">Michael: "Re: [OMPI users] Error: SAVE statement at (1) follows blanket SAVE statement in file mpif.h"</a>
<li><strong>Reply:</strong> <a href="2190.php">Michael: "Re: [OMPI users] Error: SAVE statement at (1) follows blanket SAVE statement in file mpif.h"</a>
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
