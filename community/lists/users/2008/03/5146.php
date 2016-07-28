<?
$subject_val = "Re: [OMPI users] ScaLapack and BLACS on Leopard";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar  6 12:20:27 2008" -->
<!-- isoreceived="20080306172027" -->
<!-- sent="Thu, 6 Mar 2008 12:20:06 -0500" -->
<!-- isosent="20080306172006" -->
<!-- name="Gregory John Orris" -->
<!-- email="gregory.orris_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ScaLapack and BLACS on Leopard" -->
<!-- id="23F45D02-4EDC-4780-BFEC-07E4C981BBED_at_nrl.navy.mil" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Gregory John Orris (<em>gregory.orris_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-06 12:20:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5147.php">Doug Reeder: "Re: [OMPI users] ScaLapack and BLACS on Leopard"</a>
<li><strong>Previous message:</strong> <a href="5145.php">Terry Dontje: "Re: [OMPI users] ScaLapack and BLACS on Leopard"</a>
<li><strong>In reply to:</strong> <a href="5145.php">Terry Dontje: "Re: [OMPI users] ScaLapack and BLACS on Leopard"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5147.php">Doug Reeder: "Re: [OMPI users] ScaLapack and BLACS on Leopard"</a>
<li><strong>Reply:</strong> <a href="5147.php">Doug Reeder: "Re: [OMPI users] ScaLapack and BLACS on Leopard"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry for the long delay in response.
<br>
<p>Let's get back to the beginning:
<br>
My original compiler configuration was gcc from the standard Leopard  
<br>
Developer Tools supplied off the installation DVD. This version was  
<br>
4.0.1. However, it has been significantly modified by Apple to work  
<br>
with Leopard. If you haven't used Apple's Developer Environment,  
<br>
you're missing out on something. It's pretty sweet. But the price you  
<br>
pay for it is no fortran support (not usually a problem for me but it  
<br>
is relevant here) and usually a somewhat time-lagged compiler. I'm not  
<br>
as plugged into Apple as perhaps I should be, but I can only imagine  
<br>
that their philosophy is to really over test their compiler. Gratis,  
<br>
Apple throws into it's &quot;frameworks&quot; a shared library called vecLib,  
<br>
that includes machine optimized BLAS and CLAPACK routines. Also, with  
<br>
Leopard, Apple has integrated open-mpi (yea!). But they have once  
<br>
again not included fortran support (boo!).
<br>
<p>Now, to get fortran on a Mac you have several options (most of which  
<br>
cannot really survive the cost-benefit analysis of a competent  
<br>
manager), but a perfectly fine freeware option is to get it off of  
<br>
hpc.sourceforge.net. This version is based on gcc 4.3.0. There are a  
<br>
few legitimate reasons to stick with Apple's older gcc. As it's not  
<br>
really a good idea to try an mix libraries from one compiler version  
<br>
with another. Especially here, because (without knowing precisely what  
<br>
Apple has done) there is a tremendous difference in execution speed of  
<br>
code written with gcc 4.0 and 4.1 as opposed to 4.2 and later. (This  
<br>
has been well documented on many systems.) Also, out of a bit of  
<br>
laziness, I really didn't want to go to the trouble of re-writing (or  
<br>
finding) all of the compiler scripts in the Developer Environment to  
<br>
use the new gcc.
<br>
<p>So, I compiled open-mpi-1.2.5 with gcc, g++ 4.0.1, and gfortran 4.3.  
<br>
Then, I compiled BLACS and ScaLAPACK using the configuration from the  
<br>
open-mpi FAQ page. Everything compiles perfectly ok, independent of  
<br>
whether you choose 32 or 64 bit addressing. First problem was that I  
<br>
was still calling mpicc from the Apple supplied openmpi and mpif77  
<br>
from the newly installed distribution. Once again, I've not a clue  
<br>
what Apple has done, but while the two would compile items together,  
<br>
they DO NOT COMMUNICATE properly in 64-bit mode. MPI_COMM_WORLD even  
<br>
in the test routines of openMPI would fail! This is the point at which  
<br>
I originated the message asking if anyone had gotten a 64-bit version  
<br>
to actually work. The errors were in libSystem and were not what I'd  
<br>
expect from a simple openmpi error. I believe this problem is caused  
<br>
by a difference in how pointers were/are treated within gcc from  
<br>
version to version. Thus mixing versions essentially caused failure  
<br>
within the Apple supplied openmpi distribution and the new one I  
<br>
installed.
<br>
<p>How to get over this hurdle? Install the complete gcc 4.3.0 from the  
<br>
hpc.sourceforge.net site and recompile EVERYTHING!
<br>
<p>You might think you were done here, but there is one (or actually  
<br>
four) additional problem(s). Now NONE of the complex routines worked.  
<br>
All of the test routines returned failure. And I tracked it down the  
<br>
the fact that pzdotc, pzdotu, pcdotc, and pcdotu inside of the PBLAS  
<br>
routines were failing. Potentially this was a much more difficult  
<br>
problem, since rewriting these codes is really not what I'm paid to  
<br>
do. Tracing down these errors further I found that the actual problem  
<br>
is with the zdotc, zdotu, cdotc, and cdotu BLAS routines inside of  
<br>
Apple's vecLib. So, the problem seemed as though a faulty manufacturer  
<br>
supplied and optimized library was not functioning properly. Well, as  
<br>
it turns out there is a peculiar difference (again) between versions  
<br>
of the gcc suite in how it regards, returned values from complex  
<br>
fortran functions (I'm only assuming this since the workaround was  
<br>
successful). This problem has been know for some time now (perhaps 4  
<br>
years or more). See,  <a href="http://developer.apple.com/hardware/ve/errata.html#fortran_conventions">http://developer.apple.com/hardware/ve/errata.html#fortran_conventions</a>
<br>
<p>How to get over this hurdle? Install ATLAS, CLAPACK, and CBLAS off the  
<br>
netlib.org web site, and compile them with the gcc 4.3.0 suite.
<br>
<p>So, where am I now? BLACS and ScaLAPACK, and PBLAS work in 64-bit mode  
<br>
with CLAPACK-3.1.1, ATLAS 3.8.1, Open-MPI-1.2.5, and GCC 4.3.0 and  
<br>
link with ATLAS and CLAPACK and NOT vecLib!
<br>
<p>Long way of saying that the problem appears to be solved, but not well  
<br>
documented (until now)!
<br>
<p>Regards,
<br>
Greg
<br>
<p>On Mar 6, 2008, at 8:25 AM, Terry Dontje wrote:
<br>
<p><span class="quotelev1">&gt; Ok, I think I found the cause of the SPARC segv when trying to use a
</span><br>
<span class="quotelev1">&gt; 64-bit compiled Open MPI library.  If one does not set the WHATMPI
</span><br>
<span class="quotelev1">&gt; variable in the Bmake.inc it defaults to UseF77Mpi which assumes all
</span><br>
<span class="quotelev1">&gt; handles are ints.  This is a correct assumption if you are using the  
</span><br>
<span class="quotelev1">&gt; F77
</span><br>
<span class="quotelev1">&gt; interfaces but the way BLACS seems to compile for Open MPI it uses  
</span><br>
<span class="quotelev1">&gt; the C
</span><br>
<span class="quotelev1">&gt; versions.  So the handles are stored as 32 bits in BLACS and passed to
</span><br>
<span class="quotelev1">&gt; the C Open MPI interfaces which expects 64 bits.  In cases where your
</span><br>
<span class="quotelev1">&gt; addresses need more than 32 bits this will cause MPI to segv when  
</span><br>
<span class="quotelev1">&gt; passed
</span><br>
<span class="quotelev1">&gt; an invalid address due to this coersion.
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
<span class="quotelev1">&gt; 32
</span><br>
<span class="quotelev1">&gt; bits.  I am amazed still that we haven't seen this fail in user codes.
</span><br>
<span class="quotelev1">&gt; Note, I have not confirmed this failure with a test case but the code
</span><br>
<span class="quotelev1">&gt; stack in dbx looks the same on X64 platforms as the code on SPARC  
</span><br>
<span class="quotelev1">&gt; except
</span><br>
<span class="quotelev1">&gt; the address is smaller on the former.
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
<span class="quotelev2">&gt;&gt; trace? Note, I was trying something similar with Solaris and 64-bit  
</span><br>
<span class="quotelev2">&gt;&gt; on
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
<span class="quotelev3">&gt;&gt;&gt; Date: Thu, 28 Feb 2008 17:50:28 -0500
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From: Gregory John Orris &lt;gregory.orris_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subject: [OMPI users] ScaLapack and BLACS on Leopard
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Message-ID: &lt;528FD4C0-6157-49CB-80E6-1C62684E4545_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Content-Type: text/plain; charset=&quot;us-ascii&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hey Folks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Anyone got ScaLapack and BLACS working and not just compiled under
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OSX10.5 in 64-bit mode?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The FAQ site directions were followed and every thing compiles just
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fine. But ALL of the single precision routines and many of the  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; double
</span><br>
<span class="quotelev3">&gt;&gt;&gt; precisions routines in the TESTING directory fail with system lib
</span><br>
<span class="quotelev3">&gt;&gt;&gt; errors.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I've gotten some interesting errors and am wondering what the magic
</span><br>
<span class="quotelev3">&gt;&gt;&gt; touch is.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Greg
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-5146/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5147.php">Doug Reeder: "Re: [OMPI users] ScaLapack and BLACS on Leopard"</a>
<li><strong>Previous message:</strong> <a href="5145.php">Terry Dontje: "Re: [OMPI users] ScaLapack and BLACS on Leopard"</a>
<li><strong>In reply to:</strong> <a href="5145.php">Terry Dontje: "Re: [OMPI users] ScaLapack and BLACS on Leopard"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5147.php">Doug Reeder: "Re: [OMPI users] ScaLapack and BLACS on Leopard"</a>
<li><strong>Reply:</strong> <a href="5147.php">Doug Reeder: "Re: [OMPI users] ScaLapack and BLACS on Leopard"</a>
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
