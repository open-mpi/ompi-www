<?
$subject_val = "Re: [OMPI users] ScaLapack and BLACS on Leopard";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar  6 12:54:36 2008" -->
<!-- isoreceived="20080306175436" -->
<!-- sent="Thu, 6 Mar 2008 09:49:20 -0800" -->
<!-- isosent="20080306174920" -->
<!-- name="Doug Reeder" -->
<!-- email="dlr_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ScaLapack and BLACS on Leopard" -->
<!-- id="91DCF7E2-34C6-45EA-80E1-CE99B8F7D2EB_at_rain.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="23F45D02-4EDC-4780-BFEC-07E4C981BBED_at_nrl.navy.mil" -->
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
<strong>From:</strong> Doug Reeder (<em>dlr_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-06 12:49:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5148.php">Sacerdoti, Federico: "[OMPI users] FW:  slurm and all-srun orterun"</a>
<li><strong>Previous message:</strong> <a href="5146.php">Gregory John Orris: "Re: [OMPI users] ScaLapack and BLACS on Leopard"</a>
<li><strong>In reply to:</strong> <a href="5146.php">Gregory John Orris: "Re: [OMPI users] ScaLapack and BLACS on Leopard"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5149.php">Michael: "Re: [OMPI users] ScaLapack and BLACS on Leopard"</a>
<li><strong>Reply:</strong> <a href="5149.php">Michael: "Re: [OMPI users] ScaLapack and BLACS on Leopard"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Greg,
<br>
<p>I would disagree with your statement that the available fortran  
<br>
options can't pass a cost-benefit analysis. I have found that for  
<br>
scientific programming (e.g., Livermore Fortran Kernels and actual  
<br>
PDE solvers) that code produced by the intel compiler runs 25 to 55%  
<br>
faster than code from gfortran or g95. Looking at the cost of adding  
<br>
processors with g95/gfortran to get the same throughput as with ifort  
<br>
you recover the $549 compiler cost real quickly.
<br>
<p>Doug Reeder
<br>
On Mar 6, 2008, at 9:20 AM, Gregory John Orris wrote:
<br>
<p><span class="quotelev1">&gt; Sorry for the long delay in response.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Let's get back to the beginning:
</span><br>
<span class="quotelev1">&gt; My original compiler configuration was gcc from the standard  
</span><br>
<span class="quotelev1">&gt; Leopard Developer Tools supplied off the installation DVD. This  
</span><br>
<span class="quotelev1">&gt; version was 4.0.1. However, it has been significantly modified by  
</span><br>
<span class="quotelev1">&gt; Apple to work with Leopard. If you haven't used Apple's Developer  
</span><br>
<span class="quotelev1">&gt; Environment, you're missing out on something. It's pretty sweet.  
</span><br>
<span class="quotelev1">&gt; But the price you pay for it is no fortran support (not usually a  
</span><br>
<span class="quotelev1">&gt; problem for me but it is relevant here) and usually a somewhat time- 
</span><br>
<span class="quotelev1">&gt; lagged compiler. I'm not as plugged into Apple as perhaps I should  
</span><br>
<span class="quotelev1">&gt; be, but I can only imagine that their philosophy is to really over  
</span><br>
<span class="quotelev1">&gt; test their compiler. Gratis, Apple throws into it's &quot;frameworks&quot; a  
</span><br>
<span class="quotelev1">&gt; shared library called vecLib, that includes machine optimized BLAS  
</span><br>
<span class="quotelev1">&gt; and CLAPACK routines. Also, with Leopard, Apple has integrated open- 
</span><br>
<span class="quotelev1">&gt; mpi (yea!). But they have once again not included fortran support  
</span><br>
<span class="quotelev1">&gt; (boo!).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Now, to get fortran on a Mac you have several options (most of  
</span><br>
<span class="quotelev1">&gt; which cannot really survive the cost-benefit analysis of a  
</span><br>
<span class="quotelev1">&gt; competent manager), but a perfectly fine freeware option is to get  
</span><br>
<span class="quotelev1">&gt; it off of hpc.sourceforge.net. This version is based on gcc 4.3.0.  
</span><br>
<span class="quotelev1">&gt; There are a few legitimate reasons to stick with Apple's older gcc.  
</span><br>
<span class="quotelev1">&gt; As it's not really a good idea to try an mix libraries from one  
</span><br>
<span class="quotelev1">&gt; compiler version with another. Especially here, because (without  
</span><br>
<span class="quotelev1">&gt; knowing precisely what Apple has done) there is a tremendous  
</span><br>
<span class="quotelev1">&gt; difference in execution speed of code written with gcc 4.0 and 4.1  
</span><br>
<span class="quotelev1">&gt; as opposed to 4.2 and later. (This has been well documented on many  
</span><br>
<span class="quotelev1">&gt; systems.) Also, out of a bit of laziness, I really didn't want to  
</span><br>
<span class="quotelev1">&gt; go to the trouble of re-writing (or finding) all of the compiler  
</span><br>
<span class="quotelev1">&gt; scripts in the Developer Environment to use the new gcc.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So, I compiled open-mpi-1.2.5 with gcc, g++ 4.0.1, and gfortran  
</span><br>
<span class="quotelev1">&gt; 4.3. Then, I compiled BLACS and ScaLAPACK using the configuration  
</span><br>
<span class="quotelev1">&gt; from the open-mpi FAQ page. Everything compiles perfectly ok,  
</span><br>
<span class="quotelev1">&gt; independent of whether you choose 32 or 64 bit addressing. First  
</span><br>
<span class="quotelev1">&gt; problem was that I was still calling mpicc from the Apple supplied  
</span><br>
<span class="quotelev1">&gt; openmpi and mpif77 from the newly installed distribution. Once  
</span><br>
<span class="quotelev1">&gt; again, I've not a clue what Apple has done, but while the two would  
</span><br>
<span class="quotelev1">&gt; compile items together, they DO NOT COMMUNICATE properly in 64-bit  
</span><br>
<span class="quotelev1">&gt; mode. MPI_COMM_WORLD even in the test routines of openMPI would  
</span><br>
<span class="quotelev1">&gt; fail! This is the point at which I originated the message asking if  
</span><br>
<span class="quotelev1">&gt; anyone had gotten a 64-bit version to actually work. The errors  
</span><br>
<span class="quotelev1">&gt; were in libSystem and were not what I'd expect from a simple  
</span><br>
<span class="quotelev1">&gt; openmpi error. I believe this problem is caused by a difference in  
</span><br>
<span class="quotelev1">&gt; how pointers were/are treated within gcc from version to version.  
</span><br>
<span class="quotelev1">&gt; Thus mixing versions essentially caused failure within the Apple  
</span><br>
<span class="quotelev1">&gt; supplied openmpi distribution and the new one I installed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; How to get over this hurdle? Install the complete gcc 4.3.0 from  
</span><br>
<span class="quotelev1">&gt; the hpc.sourceforge.net site and recompile EVERYTHING!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You might think you were done here, but there is one (or actually  
</span><br>
<span class="quotelev1">&gt; four) additional problem(s). Now NONE of the complex routines  
</span><br>
<span class="quotelev1">&gt; worked. All of the test routines returned failure. And I tracked it  
</span><br>
<span class="quotelev1">&gt; down the the fact that pzdotc, pzdotu, pcdotc, and pcdotu inside of  
</span><br>
<span class="quotelev1">&gt; the PBLAS routines were failing. Potentially this was a much more  
</span><br>
<span class="quotelev1">&gt; difficult problem, since rewriting these codes is really not what  
</span><br>
<span class="quotelev1">&gt; I'm paid to do. Tracing down these errors further I found that the  
</span><br>
<span class="quotelev1">&gt; actual problem is with the zdotc, zdotu, cdotc, and cdotu BLAS  
</span><br>
<span class="quotelev1">&gt; routines inside of Apple's vecLib. So, the problem seemed as though  
</span><br>
<span class="quotelev1">&gt; a faulty manufacturer supplied and optimized library was not  
</span><br>
<span class="quotelev1">&gt; functioning properly. Well, as it turns out there is a peculiar  
</span><br>
<span class="quotelev1">&gt; difference (again) between versions of the gcc suite in how it  
</span><br>
<span class="quotelev1">&gt; regards, returned values from complex fortran functions (I'm only  
</span><br>
<span class="quotelev1">&gt; assuming this since the workaround was successful). This problem  
</span><br>
<span class="quotelev1">&gt; has been know for some time now (perhaps 4 years or more). See,   
</span><br>
<span class="quotelev1">&gt; <a href="http://developer.apple.com/hardware/ve/errata.html#fortran_conventions">http://developer.apple.com/hardware/ve/errata.html#fortran_conventions</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; How to get over this hurdle? Install ATLAS, CLAPACK, and CBLAS off  
</span><br>
<span class="quotelev1">&gt; the netlib.org web site, and compile them with the gcc 4.3.0 suite.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So, where am I now? BLACS and ScaLAPACK, and PBLAS work in 64-bit  
</span><br>
<span class="quotelev1">&gt; mode with CLAPACK-3.1.1, ATLAS 3.8.1, Open-MPI-1.2.5, and GCC 4.3.0  
</span><br>
<span class="quotelev1">&gt; and link with ATLAS and CLAPACK and NOT vecLib!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Long way of saying that the problem appears to be solved, but not  
</span><br>
<span class="quotelev1">&gt; well documented (until now)!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Greg
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 6, 2008, at 8:25 AM, Terry Dontje wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ok, I think I found the cause of the SPARC segv when trying to use a
</span><br>
<span class="quotelev2">&gt;&gt; 64-bit compiled Open MPI library.  If one does not set the WHATMPI
</span><br>
<span class="quotelev2">&gt;&gt; variable in the Bmake.inc it defaults to UseF77Mpi which assumes all
</span><br>
<span class="quotelev2">&gt;&gt; handles are ints.  This is a correct assumption if you are using  
</span><br>
<span class="quotelev2">&gt;&gt; the F77
</span><br>
<span class="quotelev2">&gt;&gt; interfaces but the way BLACS seems to compile for Open MPI it uses  
</span><br>
<span class="quotelev2">&gt;&gt; the C
</span><br>
<span class="quotelev2">&gt;&gt; versions.  So the handles are stored as 32 bits in BLACS and  
</span><br>
<span class="quotelev2">&gt;&gt; passed to
</span><br>
<span class="quotelev2">&gt;&gt; the C Open MPI interfaces which expects 64 bits.  In cases where your
</span><br>
<span class="quotelev2">&gt;&gt; addresses need more than 32 bits this will cause MPI to segv when  
</span><br>
<span class="quotelev2">&gt;&gt; passed
</span><br>
<span class="quotelev2">&gt;&gt; an invalid address due to this coersion.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So by setting &quot;WHATMPI= -DUseCMpi&quot; I've gotten the SPARC version of
</span><br>
<span class="quotelev2">&gt;&gt; BLACS compiled for 64 bits to pass its tests without segv'ing.  I do
</span><br>
<span class="quotelev2">&gt;&gt; believe this issue actually exists for other platforms (ie AMD64 and
</span><br>
<span class="quotelev2">&gt;&gt; IA64) with other OSes and compilers.  Just that we've been lucky that
</span><br>
<span class="quotelev2">&gt;&gt; MPI_COMM_WORLD is allocated such that it has an address that fits  
</span><br>
<span class="quotelev2">&gt;&gt; in 32
</span><br>
<span class="quotelev2">&gt;&gt; bits.  I am amazed still that we haven't seen this fail in user  
</span><br>
<span class="quotelev2">&gt;&gt; codes.
</span><br>
<span class="quotelev2">&gt;&gt; Note, I have not confirmed this failure with a test case but the code
</span><br>
<span class="quotelev2">&gt;&gt; stack in dbx looks the same on X64 platforms as the code on SPARC  
</span><br>
<span class="quotelev2">&gt;&gt; except
</span><br>
<span class="quotelev2">&gt;&gt; the address is smaller on the former.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Greg, I would be interested in knowing if you are still seeing the
</span><br>
<span class="quotelev2">&gt;&gt; problem on Leopard and whether the above setting helps any.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --td
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; *
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *Subject:* Re: [OMPI users] ScaLapack and BLACS on Leopard
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *From:* Terry Dontje (/Terry.Dontje_at_[hidden]/)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *Date:* 2008-03-03 07:34:17
</span><br>
<span class="quotelev2">&gt;&gt; *
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; What kind of system lib errors are you seeing and do you have a  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; stack
</span><br>
<span class="quotelev3">&gt;&gt;&gt; trace? Note, I was trying something similar with Solaris and 64- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; bit on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; a SPARC machine and was seeing segv's inside the MPI Library due  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pointer being passed through an integer (thus dropping the upper 32
</span><br>
<span class="quotelev3">&gt;&gt;&gt; bits). Funny thing is it all works under Solaris on AMD64 or IA-64
</span><br>
<span class="quotelev3">&gt;&gt;&gt; platforms.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --td
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Date: Thu, 28 Feb 2008 17:50:28 -0500
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; From: Gregory John Orris &lt;gregory.orris_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subject: [OMPI users] ScaLapack and BLACS on Leopard
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Message-ID: &lt;528FD4C0-6157-49CB-80E6-1C62684E4545_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Content-Type: text/plain; charset=&quot;us-ascii&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hey Folks,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Anyone got ScaLapack and BLACS working and not just compiled under
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OSX10.5 in 64-bit mode?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The FAQ site directions were followed and every thing compiles just
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; fine. But ALL of the single precision routines and many of the  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; double
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; precisions routines in the TESTING directory fail with system lib
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; errors.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I've gotten some interesting errors and am wondering what the magic
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; touch is.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Greg
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-5147/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5148.php">Sacerdoti, Federico: "[OMPI users] FW:  slurm and all-srun orterun"</a>
<li><strong>Previous message:</strong> <a href="5146.php">Gregory John Orris: "Re: [OMPI users] ScaLapack and BLACS on Leopard"</a>
<li><strong>In reply to:</strong> <a href="5146.php">Gregory John Orris: "Re: [OMPI users] ScaLapack and BLACS on Leopard"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5149.php">Michael: "Re: [OMPI users] ScaLapack and BLACS on Leopard"</a>
<li><strong>Reply:</strong> <a href="5149.php">Michael: "Re: [OMPI users] ScaLapack and BLACS on Leopard"</a>
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
