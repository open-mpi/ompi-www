<?
$subject_val = "Re: [OMPI users] ScaLapack and BLACS on Leopard";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar  6 08:25:12 2008" -->
<!-- isoreceived="20080306132512" -->
<!-- sent="Thu, 06 Mar 2008 08:25:05 -0500" -->
<!-- isosent="20080306132505" -->
<!-- name="Terry Dontje" -->
<!-- email="Terry.Dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ScaLapack and BLACS on Leopard" -->
<!-- id="47CFF0B1.4000004_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="[OMPI users] ScaLapack and BLACS on Leopard" -->
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
<strong>Subject:</strong> Re: [OMPI users] ScaLapack and BLACS on Leopard<br>
<strong>From:</strong> Terry Dontje (<em>Terry.Dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-06 08:25:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5146.php">Gregory John Orris: "Re: [OMPI users] ScaLapack and BLACS on Leopard"</a>
<li><strong>Previous message:</strong> <a href="5144.php">Jeff Squyres: "Re: [OMPI users] General Design Question"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/02/5099.php">Gregory John Orris: "[OMPI users] ScaLapack and BLACS on Leopard"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5146.php">Gregory John Orris: "Re: [OMPI users] ScaLapack and BLACS on Leopard"</a>
<li><strong>Reply:</strong> <a href="5146.php">Gregory John Orris: "Re: [OMPI users] ScaLapack and BLACS on Leopard"</a>
<li><strong>Reply:</strong> <a href="5155.php">Terry Dontje: "Re: [OMPI users] ScaLapack and BLACS on Leopard"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ok, I think I found the cause of the SPARC segv when trying to use a 
<br>
64-bit compiled Open MPI library.  If one does not set the WHATMPI 
<br>
variable in the Bmake.inc it defaults to UseF77Mpi which assumes all 
<br>
handles are ints.  This is a correct assumption if you are using the F77 
<br>
interfaces but the way BLACS seems to compile for Open MPI it uses the C 
<br>
versions.  So the handles are stored as 32 bits in BLACS and passed to 
<br>
the C Open MPI interfaces which expects 64 bits.  In cases where your 
<br>
addresses need more than 32 bits this will cause MPI to segv when passed 
<br>
an invalid address due to this coersion.
<br>
<p>So by setting &quot;WHATMPI= -DUseCMpi&quot; I've gotten the SPARC version of 
<br>
BLACS compiled for 64 bits to pass its tests without segv'ing.  I do 
<br>
believe this issue actually exists for other platforms (ie AMD64 and 
<br>
IA64) with other OSes and compilers.  Just that we've been lucky that 
<br>
MPI_COMM_WORLD is allocated such that it has an address that fits in 32 
<br>
bits.  I am amazed still that we haven't seen this fail in user codes.  
<br>
Note, I have not confirmed this failure with a test case but the code 
<br>
stack in dbx looks the same on X64 platforms as the code on SPARC except 
<br>
the address is smaller on the former.
<br>
<p>Greg, I would be interested in knowing if you are still seeing the 
<br>
problem on Leopard and whether the above setting helps any.
<br>
<p>--td
<br>
<p>*
<br>
<span class="quotelev1">&gt; *Subject:* Re: [OMPI users] ScaLapack and BLACS on Leopard
</span><br>
<span class="quotelev1">&gt; *From:* Terry Dontje (/Terry.Dontje_at_[hidden]/)
</span><br>
<span class="quotelev1">&gt; *Date:* 2008-03-03 07:34:17
</span><br>
*
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What kind of system lib errors are you seeing and do you have a stack
</span><br>
<span class="quotelev1">&gt; trace? Note, I was trying something similar with Solaris and 64-bit on
</span><br>
<span class="quotelev1">&gt; a SPARC machine and was seeing segv's inside the MPI Library due to a
</span><br>
<span class="quotelev1">&gt; pointer being passed through an integer (thus dropping the upper 32
</span><br>
<span class="quotelev1">&gt; bits). Funny thing is it all works under Solaris on AMD64 or IA-64
</span><br>
<span class="quotelev1">&gt; platforms.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --td
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Date: Thu, 28 Feb 2008 17:50:28 -0500
</span><br>
<span class="quotelev2">&gt; &gt; From: Gregory John Orris &lt;gregory.orris_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Subject: [OMPI users] ScaLapack and BLACS on Leopard
</span><br>
<span class="quotelev2">&gt; &gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Message-ID: &lt;528FD4C0-6157-49CB-80E6-1C62684E4545_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Content-Type: text/plain; charset=&quot;us-ascii&quot;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hey Folks,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Anyone got ScaLapack and BLACS working and not just compiled under
</span><br>
<span class="quotelev2">&gt; &gt; OSX10.5 in 64-bit mode?
</span><br>
<span class="quotelev2">&gt; &gt; The FAQ site directions were followed and every thing compiles just
</span><br>
<span class="quotelev2">&gt; &gt; fine. But ALL of the single precision routines and many of the double
</span><br>
<span class="quotelev2">&gt; &gt; precisions routines in the TESTING directory fail with system lib
</span><br>
<span class="quotelev2">&gt; &gt; errors.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I've gotten some interesting errors and am wondering what the magic
</span><br>
<span class="quotelev2">&gt; &gt; touch is.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Regards,
</span><br>
<span class="quotelev2">&gt; &gt; Greg
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5146.php">Gregory John Orris: "Re: [OMPI users] ScaLapack and BLACS on Leopard"</a>
<li><strong>Previous message:</strong> <a href="5144.php">Jeff Squyres: "Re: [OMPI users] General Design Question"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/02/5099.php">Gregory John Orris: "[OMPI users] ScaLapack and BLACS on Leopard"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5146.php">Gregory John Orris: "Re: [OMPI users] ScaLapack and BLACS on Leopard"</a>
<li><strong>Reply:</strong> <a href="5146.php">Gregory John Orris: "Re: [OMPI users] ScaLapack and BLACS on Leopard"</a>
<li><strong>Reply:</strong> <a href="5155.php">Terry Dontje: "Re: [OMPI users] ScaLapack and BLACS on Leopard"</a>
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
