<?
$subject_val = "Re: [OMPI users] Finalize() does not return (UNCLASSIFIED)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 22 14:33:50 2013" -->
<!-- isoreceived="20130822183350" -->
<!-- sent="Thu, 22 Aug 2013 13:33:43 -0500" -->
<!-- isosent="20130822183343" -->
<!-- name="Hazelrig, Chris CTR (US)" -->
<!-- email="christopher.c.hazelrig.ctr_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Finalize() does not return (UNCLASSIFIED)" -->
<!-- id="F3EE0B1262F8B844B5E2FFF4313AE00F04033F6B_at_rdmr-ex18.ds.amrdec.army.mil" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="bd7f3c21f9b8473c96e1b02a67e094f5_at_UHUNHP25.easf.csd.disa.mil" -->
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
<strong>Subject:</strong> Re: [OMPI users] Finalize() does not return (UNCLASSIFIED)<br>
<strong>From:</strong> Hazelrig, Chris CTR (US) (<em>christopher.c.hazelrig.ctr_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-08-22 14:33:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22542.php">Noah Knowles: "[OMPI users] bind-to-socket across sockets with different core counts"</a>
<li><strong>Previous message:</strong> <a href="22540.php">George Bosilca: "Re: [OMPI users] Addendum to: Assembler instruction errors for push and pop during make"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Classification:  UNCLASSIFIED 
<br>
Caveats: NONE
<br>
<p>Thank you, Jeff and Eloi, for your help.  Yes, any suggestions regarding
<br>
profiling tools would be appreciated.
<br>
<p>I was also wondering if there are any MPI functions that can be used to
<br>
assess communications status, too.  The only MPI calls I am using are
<br>
Init(), Bcast(), Barrier(), and Finalize().  The Bcast() call is being used
<br>
to transfer a single boolean value from the rank 0 process to the others.
<br>
The Barrier() calls are used to resync the otherwise independent processes
<br>
at various stages during program execution.  It seems unlikely there is a
<br>
communication issue since any rank that does not receive the Boolean value
<br>
would not be able to proceed as needed and the next Barrier() call would
<br>
effectively stall the program while the other ranks waited on the one to
<br>
catch up, but they are all reaching the Finalize() routine at the end of the
<br>
run.
<br>
<p><p>Thanks again,
<br>
Chris
<br>
<p><p>-----Original Message-----
<br>
From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Eloi Gaudry
<br>
Sent: Wednesday, August 21, 2013 8:08 AM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] Finalize() does not return
<br>
<p><span class="quotelev2">&gt;&gt; Is there any other information I could provide that might be useful?
</span><br>
<p><span class="quotelev1">&gt;You might want to audit the code and ensure that you have no pending
</span><br>
communications that haven't finished -- check all your sends and receives,
<br>
not just in the code, but at run-time (e.g., use an MPI profiling tool to
<br>
match up the sends and receives, and see what's left at Finalize time).
<br>
<p>Jeff, could you advice one tool or set of options to perform such a check ?
<br>
<p><p><p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
Classification:  UNCLASSIFIED 
<br>
Caveats: NONE
<br>
<p><p>
<br><hr>
<ul>
<li>application/x-pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22541/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22542.php">Noah Knowles: "[OMPI users] bind-to-socket across sockets with different core counts"</a>
<li><strong>Previous message:</strong> <a href="22540.php">George Bosilca: "Re: [OMPI users] Addendum to: Assembler instruction errors for push and pop during make"</a>
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
