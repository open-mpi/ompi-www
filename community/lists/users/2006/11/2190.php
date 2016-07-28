<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Nov 20 08:08:10 2006" -->
<!-- isoreceived="20061120130810" -->
<!-- sent="Mon, 20 Nov 2006 08:04:02 -0500" -->
<!-- isosent="20061120130402" -->
<!-- name="Michael" -->
<!-- email="mklus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error: SAVE statement at (1) follows blanket SAVE statement in file mpif.h" -->
<!-- id="7D169FAA-B41C-4057-9559-4B6FD367B624_at_ieee.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="8336AD7B-8811-4400-B795-64160C35489A_at_cisco.com" -->
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
<strong>From:</strong> Michael (<em>mklus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-11-20 08:04:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2191.php">Reuti: "Re: [OMPI users] Advice for a cluster software"</a>
<li><strong>Previous message:</strong> <a href="2189.php">Epitropakis Mixalis 00064: "[OMPI users] Advice for a cluster software"</a>
<li><strong>In reply to:</strong> <a href="2186.php">Jeff Squyres: "Re: [OMPI users] Error: SAVE statement at (1) follows blanket SAVE statement in file mpif.h"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The problem discussed here is with MPICH2 version of MPI not OpenMPI.
<br>
<p><p>Michael
<br>
<p>On Nov 18, 2006, at 9:22 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; We do not appear to have the token &quot;save&quot; anywhere in our mpif.h file.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you send a copy of the mpif.h file that your compiler is finding
</span><br>
<span class="quotelev1">&gt; (and ensure that it belongs to Open MPI)?  Also please send the
</span><br>
<span class="quotelev1">&gt; information regarding compilation problems listed on the &quot;Getting
</span><br>
<span class="quotelev1">&gt; help&quot; page on the web site.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Nov 16, 2006, at 4:11 PM, Yu Chen wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Not sure if it's openmpi related or the program I am installing.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I installed openmpi using g95 as F77 and F90 compiler with flags
</span><br>
<span class="quotelev2">&gt;&gt; &quot;-ffixed-line-length-132  -fno-underscoring&quot; on PowerMac G5 with OS X
</span><br>
<span class="quotelev2">&gt;&gt; 10.4 without any problems.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Then I tried to compile this program (CYANA if it matters, it's a
</span><br>
<span class="quotelev2">&gt;&gt; molucular caculation program) with openmpi generated mpif90 wrapper
</span><br>
<span class="quotelev2">&gt;&gt; with
</span><br>
<span class="quotelev2">&gt;&gt; same flags, then it gave out the following errors, wondering if
</span><br>
<span class="quotelev2">&gt;&gt; someone
</span><br>
<span class="quotelev2">&gt;&gt; has idea about this, googled it without much help. Thanks a lot in
</span><br>
<span class="quotelev2">&gt;&gt; advance.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; .....
</span><br>
<span class="quotelev2">&gt;&gt; .....
</span><br>
<span class="quotelev2">&gt;&gt; ../../etc/prepare -c -Dg95 -Dmpi -Dapple -Dapple_ompig95-withflags -w
</span><br>
<span class="quotelev2">&gt;&gt; inclan.for &gt; inclan.f
</span><br>
<span class="quotelev2">&gt;&gt; /sw/mpich2_g95_withflags/bin/mpif90 -c -ffixed-line-length-132
</span><br>
<span class="quotelev2">&gt;&gt; -fno-underscoring inclan.f
</span><br>
<span class="quotelev2">&gt;&gt; In file mpif.h:420
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      Included at inclan.f:26
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         SAVE /MPIPRIV1/,/MPIPRIV2/
</span><br>
<span class="quotelev2">&gt;&gt;            1
</span><br>
<span class="quotelev2">&gt;&gt; Error: SAVE statement at (1) follows blanket SAVE statement
</span><br>
<span class="quotelev2">&gt;&gt; In file mpif.h:423
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      Included at inclan.f:26
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         SAVE   /MPIPRIVC/
</span><br>
<span class="quotelev2">&gt;&gt;            1
</span><br>
<span class="quotelev2">&gt;&gt; Error: SAVE statement at (1) follows blanket SAVE statement
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: *** [inclan.o] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; .....
</span><br>
<span class="quotelev2">&gt;&gt; .....
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ===========================================
</span><br>
<span class="quotelev2">&gt;&gt; Yu Chen
</span><br>
<span class="quotelev2">&gt;&gt; Howard Hughes Medical Institute
</span><br>
<span class="quotelev2">&gt;&gt; Chemistry Building, Rm 182
</span><br>
<span class="quotelev2">&gt;&gt; University of Maryland at Baltimore County
</span><br>
<span class="quotelev2">&gt;&gt; 1000 Hilltop Circle
</span><br>
<span class="quotelev2">&gt;&gt; Baltimore, MD 21250
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; phone: 	(410)455-6347 (primary)
</span><br>
<span class="quotelev2">&gt;&gt;  	(410)455-2718 (secondary)
</span><br>
<span class="quotelev2">&gt;&gt; fax: 	(410)455-1174
</span><br>
<span class="quotelev2">&gt;&gt; email: 	chen_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; ===========================================
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
<span class="quotelev1">&gt; Server Virtualization Business Unit
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2191.php">Reuti: "Re: [OMPI users] Advice for a cluster software"</a>
<li><strong>Previous message:</strong> <a href="2189.php">Epitropakis Mixalis 00064: "[OMPI users] Advice for a cluster software"</a>
<li><strong>In reply to:</strong> <a href="2186.php">Jeff Squyres: "Re: [OMPI users] Error: SAVE statement at (1) follows blanket SAVE statement in file mpif.h"</a>
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
