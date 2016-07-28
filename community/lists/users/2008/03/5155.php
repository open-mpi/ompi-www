<?
$subject_val = "Re: [OMPI users] ScaLapack and BLACS on Leopard";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar  7 07:26:09 2008" -->
<!-- isoreceived="20080307122609" -->
<!-- sent="Fri, 07 Mar 2008 07:26:01 -0500" -->
<!-- isosent="20080307122601" -->
<!-- name="Terry Dontje" -->
<!-- email="Terry.Dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ScaLapack and BLACS on Leopard" -->
<!-- id="47D13459.4000004_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="47CFF0B1.4000004_at_sun.com" -->
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
<strong>Date:</strong> 2008-03-07 07:26:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5156.php">Jeff Pummill: "[OMPI users] MPI-2 Supported on Open MPI 1.2.5?"</a>
<li><strong>Previous message:</strong> <a href="5154.php">Jeff Squyres: "Re: [OMPI users] build OpenMPI with OpenIB"</a>
<li><strong>In reply to:</strong> <a href="5145.php">Terry Dontje: "Re: [OMPI users] ScaLapack and BLACS on Leopard"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
To close out this issue and eat some crow.  It ended up the issue I saw 
<br>
below was caused by a messed up version of BLACS and that using the 
<br>
scalapack installer to retrieve BLACS and the options mentioned in the 
<br>
Open MPI FAQ does produce a working BLACS.  So there is no need for 
<br>
changing WHATMPI.
<br>
<p>Sorry for the misinformation,
<br>
<p>--td
<br>
<p>Terry Dontje wrote:
<br>
<span class="quotelev1">&gt; Ok, I think I found the cause of the SPARC segv when trying to use a 
</span><br>
<span class="quotelev1">&gt; 64-bit compiled Open MPI library.  If one does not set the WHATMPI 
</span><br>
<span class="quotelev1">&gt; variable in the Bmake.inc it defaults to UseF77Mpi which assumes all 
</span><br>
<span class="quotelev1">&gt; handles are ints.  This is a correct assumption if you are using the 
</span><br>
<span class="quotelev1">&gt; F77 interfaces but the way BLACS seems to compile for Open MPI it uses 
</span><br>
<span class="quotelev1">&gt; the C versions.  So the handles are stored as 32 bits in BLACS and 
</span><br>
<span class="quotelev1">&gt; passed to the C Open MPI interfaces which expects 64 bits.  In cases 
</span><br>
<span class="quotelev1">&gt; where your addresses need more than 32 bits this will cause MPI to 
</span><br>
<span class="quotelev1">&gt; segv when passed an invalid address due to this coersion.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So by setting &quot;WHATMPI= -DUseCMpi&quot; I've gotten the SPARC version of 
</span><br>
<span class="quotelev1">&gt; BLACS compiled for 64 bits to pass its tests without segv'ing.  I do 
</span><br>
<span class="quotelev1">&gt; believe this issue actually exists for other platforms (ie AMD64 and 
</span><br>
<span class="quotelev1">&gt; IA64) with other OSes and compilers.  Just that we've been lucky that 
</span><br>
<span class="quotelev1">&gt; MPI_COMM_WORLD is allocated such that it has an address that fits in 
</span><br>
<span class="quotelev1">&gt; 32 bits.  I am amazed still that we haven't seen this fail in user 
</span><br>
<span class="quotelev1">&gt; codes.  Note, I have not confirmed this failure with a test case but 
</span><br>
<span class="quotelev1">&gt; the code stack in dbx looks the same on X64 platforms as the code on 
</span><br>
<span class="quotelev1">&gt; SPARC except the address is smaller on the former.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Greg, I would be interested in knowing if you are still seeing the 
</span><br>
<span class="quotelev1">&gt; problem on Leopard and whether the above setting helps any.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --td
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *
</span><br>
<span class="quotelev2">&gt;&gt; *Subject:* Re: [OMPI users] ScaLapack and BLACS on Leopard
</span><br>
<span class="quotelev2">&gt;&gt; *From:* Terry Dontje (/Terry.Dontje_at_[hidden]/)
</span><br>
<span class="quotelev2">&gt;&gt; *Date:* 2008-03-03 07:34:17
</span><br>
<span class="quotelev1">&gt; *
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; What kind of system lib errors are you seeing and do you have a stack
</span><br>
<span class="quotelev2">&gt;&gt; trace? Note, I was trying something similar with Solaris and 64-bit on
</span><br>
<span class="quotelev2">&gt;&gt; a SPARC machine and was seeing segv's inside the MPI Library due to a
</span><br>
<span class="quotelev2">&gt;&gt; pointer being passed through an integer (thus dropping the upper 32
</span><br>
<span class="quotelev2">&gt;&gt; bits). Funny thing is it all works under Solaris on AMD64 or IA-64
</span><br>
<span class="quotelev2">&gt;&gt; platforms.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --td
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Date: Thu, 28 Feb 2008 17:50:28 -0500
</span><br>
<span class="quotelev3">&gt;&gt; &gt; From: Gregory John Orris &lt;gregory.orris_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Subject: [OMPI users] ScaLapack and BLACS on Leopard
</span><br>
<span class="quotelev3">&gt;&gt; &gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Message-ID: &lt;528FD4C0-6157-49CB-80E6-1C62684E4545_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Content-Type: text/plain; charset=&quot;us-ascii&quot;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Hey Folks,
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Anyone got ScaLapack and BLACS working and not just compiled under
</span><br>
<span class="quotelev3">&gt;&gt; &gt; OSX10.5 in 64-bit mode?
</span><br>
<span class="quotelev3">&gt;&gt; &gt; The FAQ site directions were followed and every thing compiles just
</span><br>
<span class="quotelev3">&gt;&gt; &gt; fine. But ALL of the single precision routines and many of the double
</span><br>
<span class="quotelev3">&gt;&gt; &gt; precisions routines in the TESTING directory fail with system lib
</span><br>
<span class="quotelev3">&gt;&gt; &gt; errors.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I've gotten some interesting errors and am wondering what the magic
</span><br>
<span class="quotelev3">&gt;&gt; &gt; touch is.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Regards,
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Greg
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5156.php">Jeff Pummill: "[OMPI users] MPI-2 Supported on Open MPI 1.2.5?"</a>
<li><strong>Previous message:</strong> <a href="5154.php">Jeff Squyres: "Re: [OMPI users] build OpenMPI with OpenIB"</a>
<li><strong>In reply to:</strong> <a href="5145.php">Terry Dontje: "Re: [OMPI users] ScaLapack and BLACS on Leopard"</a>
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
