<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Jul  8 11:10:06 2006" -->
<!-- isoreceived="20060708151006" -->
<!-- sent="Sat, 08 Jul 2006 11:10:01 -0400" -->
<!-- isosent="20060708151001" -->
<!-- name="Justin Bronder" -->
<!-- email="jsbronder_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with Openmpi 1.1" -->
<!-- id="44AFCAC9.3030507_at_gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C835B9C9CB0F1C4E9DA48913C9E8F8AFB2501C_at_xmb-rtp-215.amer.cisco.com" -->
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
<strong>From:</strong> Justin Bronder (<em>jsbronder_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-07-08 11:10:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1595.php">George Bosilca: "Re: [OMPI users] Datatype bug regression from Open MPI 1.0.2 to Open MPI 1.1"</a>
<li><strong>Previous message:</strong> <a href="1593.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Problem with Openmpi 1.1"</a>
<li><strong>In reply to:</strong> <a href="1593.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Problem with Openmpi 1.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1613.php">Galen M. Shipman: "Re: [OMPI users] Problem with Openmpi 1.1"</a>
<li><strong>Reply:</strong> <a href="1613.php">Galen M. Shipman: "Re: [OMPI users] Problem with Openmpi 1.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
1.)  Compiling without XL will take a little while, but I have the setup
<br>
for the
<br>
other questions ready now.  I figured I'd answer them right away.
<br>
<p>2.)  TCP works fine, and is quite quick compared to mpich-1.2.7p1 by the
<br>
way.
<br>
I just reverified this.
<br>
WR11C2R4        5000   160     1     2              10.10          8.253e+00
<br>
||Ax-b||_oo / ( eps * ||A||_1  * N        ) =        0.0412956 ...... PASSED
<br>
||Ax-b||_oo / ( eps * ||A||_1  * ||x||_1  ) =        0.0272613 ...... PASSED
<br>
||Ax-b||_oo / ( eps * ||A||_oo * ||x||_oo ) =        0.0053214 ...... PASSED
<br>
<p><p>3.)  Exactly same setup, using mpichgm-1.2.6..14b
<br>
WR11C2R4        5000   160     1     2              10.43          7.994e+00
<br>
----------------------------------------------------------------------------
<br>
||Ax-b||_oo / ( eps * ||A||_1  * N        ) =        0.0353693 ...... PASSED
<br>
||Ax-b||_oo / ( eps * ||A||_1  * ||x||_1  ) =        0.0233491 ...... PASSED
<br>
||Ax-b||_oo / ( eps * ||A||_oo * ||x||_oo ) =        0.0045577 ...... PASSED
<br>
<p>It also worked with mpichgm-1.2.6..15  (I believe this is the version, I
<br>
don't have
<br>
a node up with it at the moment).
<br>
<p>Obviously mpich-1.2.7p1 works as well over ethernet.
<br>
<p><p>Anyways, I'll begin the build with the standard gcc compilers that are
<br>
included
<br>
with OS X.  This is powerpc-apple-darwin8-gcc-4.0.1.
<br>
<p>Thanks,
<br>
<p>Justin.
<br>
<p>Jeff Squyres (jsquyres) wrote:
<br>
<span class="quotelev1">&gt; Justin --
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Can we eliminate some variables so that we can figure out where the
</span><br>
<span class="quotelev1">&gt; error is originating?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; - Can you try compiling without the XL compilers?
</span><br>
<span class="quotelev1">&gt; - Can you try running with just TCP (and not Myrinet)?
</span><br>
<span class="quotelev1">&gt; - With the same support library installation (such as BLAS, etc.,
</span><br>
<span class="quotelev1">&gt; assumedly also compiled with XL), can you try another MPI (e.g., LAM,
</span><br>
<span class="quotelev1">&gt; MPICH-gm, whatever)?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Let us know what you find.  Thanks!
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;     *From:* users-bounces_at_[hidden]
</span><br>
<span class="quotelev1">&gt;     [mailto:users-bounces_at_[hidden]] *On Behalf Of *Justin Bronder
</span><br>
<span class="quotelev1">&gt;     *Sent:* Thursday, July 06, 2006 3:16 PM
</span><br>
<span class="quotelev1">&gt;     *To:* Open MPI Users
</span><br>
<span class="quotelev1">&gt;     *Subject:* Re: [OMPI users] Problem with Openmpi 1.1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     With 1.0.3a1r10670 the same problem is occuring.  Again the same
</span><br>
<span class="quotelev1">&gt;     configure arguments
</span><br>
<span class="quotelev1">&gt;     as before.  For clarity, the Myrinet drive we are using is 2.0.21
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     node90:~/src/hpl/bin/ompi-xl-1.0.3 jbronder$ gm_board_info
</span><br>
<span class="quotelev1">&gt;     GM build ID is &quot;2.0.21_MacOSX_rc20050429075134PDT
</span><br>
<span class="quotelev1">&gt;     root_at_[hidden]:/usr/src/gm-2.0.21_MacOSX
</span><br>
<span class="quotelev1">&gt;     Fri Jun 16 14:39:45 EDT 2006.&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     node90:~/src/hpl/bin/ompi-xl-1.0.3 jbronder$
</span><br>
<span class="quotelev1">&gt;     /usr/local/ompi-xl-1.0.3/bin/mpirun -np 2 xhpl
</span><br>
<span class="quotelev1">&gt;     This succeeds.
</span><br>
<span class="quotelev1">&gt;     ||Ax-b||_oo / ( eps * ||A||_1  * N        ) =        0.1196787
</span><br>
<span class="quotelev1">&gt;     ...... PASSED
</span><br>
<span class="quotelev1">&gt;     ||Ax-b||_oo / ( eps * ||A||_1  * ||x||_1  ) =        0.0283195
</span><br>
<span class="quotelev1">&gt;     ...... PASSED
</span><br>
<span class="quotelev1">&gt;     ||Ax-b||_oo / ( eps * ||A||_oo * ||x||_oo ) =        0.0063300
</span><br>
<span class="quotelev1">&gt;     ...... PASSED
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     node90:~/src/hpl/bin/ompi-xl-1.0.3 jbronder$
</span><br>
<span class="quotelev1">&gt;     /usr/local/ompi-xl-1.0.3/bin/mpirun -mca btl gm -np 2 xhpl
</span><br>
<span class="quotelev1">&gt;     This fails.
</span><br>
<span class="quotelev1">&gt;     ||Ax-b||_oo / ( eps * ||A||_1  * N        ) =
</span><br>
<span class="quotelev1">&gt;     717370209518881444284334080.0000000 ...... FAILED
</span><br>
<span class="quotelev1">&gt;     ||Ax-b||_oo / ( eps * ||A||_1  * ||x||_1  ) = 226686309135.4274597
</span><br>
<span class="quotelev1">&gt;     ...... FAILED
</span><br>
<span class="quotelev1">&gt;     ||Ax-b||_oo / ( eps * ||A||_oo * ||x||_oo ) = 2386641249.6518722
</span><br>
<span class="quotelev1">&gt;     ...... FAILED
</span><br>
<span class="quotelev1">&gt;     ||Ax-b||_oo  . . . . . . . . . . . . . . . . . =
</span><br>
<span class="quotelev1">&gt;     2037398812542965504.000000
</span><br>
<span class="quotelev1">&gt;     ||A||_oo . . . . . . . . . . . . . . . . . . . =        2561.554752
</span><br>
<span class="quotelev1">&gt;     ||A||_1  . . . . . . . . . . . . . . . . . . . =        2558.129237
</span><br>
<span class="quotelev1">&gt;     ||x||_oo . . . . . . . . . . . . . . . . . . . =
</span><br>
<span class="quotelev1">&gt;     300175355203841216.000000
</span><br>
<span class="quotelev1">&gt;     ||x||_1  . . . . . . . . . . . . . . . . . . . =
</span><br>
<span class="quotelev1">&gt;     31645943341479366656.000000
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Does anyone have a working system with OS X and Myrinet (GM)?  If
</span><br>
<span class="quotelev1">&gt;     so, I'd love to hear
</span><br>
<span class="quotelev1">&gt;     the configure arguments and various versions you are using.  Bonus
</span><br>
<span class="quotelev1">&gt;     points if you are
</span><br>
<span class="quotelev1">&gt;     using the IBM XL compilers.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Thanks,
</span><br>
<span class="quotelev1">&gt;     Justin.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     On 7/6/06, *Justin Bronder* &lt;jsbronder_at_[hidden]
</span><br>
<span class="quotelev1">&gt;     &lt;mailto:jsbronder_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Yes, that output was actually cut and pasted from an OS X
</span><br>
<span class="quotelev1">&gt;         run.  I'm about to test
</span><br>
<span class="quotelev1">&gt;         against 1.0.3a1r10670.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Justin.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         On 7/6/06, *Galen M. Shipman* &lt; gshipman_at_[hidden]
</span><br>
<span class="quotelev1">&gt;         &lt;mailto:gshipman_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             Justin, 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             Is the OS X run showing the same residual failure?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             - Galen 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             On Jul 6, 2006, at 10:49 AM, Justin Bronder wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             Disregard the failure on Linux, a rebuild from scratch of
</span><br>
<span class="quotelev1">&gt;             HPL and OpenMPI
</span><br>
<span class="quotelev1">&gt;             seems to have resolved the issue.  At least I'm not
</span><br>
<span class="quotelev1">&gt;             getting the errors during
</span><br>
<span class="quotelev1">&gt;             the residual checks.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             However, this is persisting under OS X.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             Thanks,
</span><br>
<span class="quotelev1">&gt;             Justin.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             On 7/6/06, *Justin Bronder* &lt; jsbronder_at_[hidden]
</span><br>
<span class="quotelev1">&gt;             &lt;mailto:jsbronder_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 For OS X:
</span><br>
<span class="quotelev1">&gt;                 /usr/local/ompi-xl/bin/mpirun -mca btl gm -np 4 ./xhpl
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 For Linux:
</span><br>
<span class="quotelev1">&gt;                 ARCH=ompi-gnu-1.1.1a
</span><br>
<span class="quotelev1">&gt;                 /usr/local/$ARCH/bin/mpiexec -mca btl gm -np 2 -path
</span><br>
<span class="quotelev1">&gt;                 /usr/local/$ARCH/bin ./xhpl
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 Thanks for the speedy response,
</span><br>
<span class="quotelev1">&gt;                 Justin.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 On 7/6/06, *Galen M. Shipman* &lt; gshipman_at_[hidden]
</span><br>
<span class="quotelev1">&gt;                 &lt;mailto:gshipman_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;                 Hey Justin, 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 Please provide us your mca parameters (if any), these
</span><br>
<span class="quotelev1">&gt;                 could be in a config file, environment variables or on
</span><br>
<span class="quotelev1">&gt;                 the command line. 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 Thanks, 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 Galen 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 On Jul 6, 2006, at 9:22 AM, Justin Bronder wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 As far as the nightly builds go, I'm still seeing what
</span><br>
<span class="quotelev1">&gt;                 I believe to be
</span><br>
<span class="quotelev1">&gt;                 this problem in both r10670 and r10652.  This is
</span><br>
<span class="quotelev1">&gt;                 happening with
</span><br>
<span class="quotelev1">&gt;                 both Linux and OS X.  Below are the systems and
</span><br>
<span class="quotelev1">&gt;                 ompi_info for the
</span><br>
<span class="quotelev1">&gt;                 newest revision 10670.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 As an example of the error, when running HPL with
</span><br>
<span class="quotelev1">&gt;                 Myrinet I get the
</span><br>
<span class="quotelev1">&gt;                 following error.  Using tcp everything is fine and I
</span><br>
<span class="quotelev1">&gt;                 see the results I'd
</span><br>
<span class="quotelev1">&gt;                 expect.
</span><br>
<span class="quotelev1">&gt;                 ----------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;                 ||Ax-b||_oo / ( eps * ||A||_1  * N        ) =
</span><br>
<span class="quotelev1">&gt;                 42820214496954887558164928727596662784.0000000 ......
</span><br>
<span class="quotelev1">&gt;                 FAILED
</span><br>
<span class="quotelev1">&gt;                 ||Ax-b||_oo / ( eps * ||A||_1  * ||x||_1  ) =
</span><br>
<span class="quotelev1">&gt;                 156556068835.2711182 ...... FAILED
</span><br>
<span class="quotelev1">&gt;                 ||Ax-b||_oo / ( eps * ||A||_oo * ||x||_oo ) =
</span><br>
<span class="quotelev1">&gt;                 1156439380.5172558 ...... FAILED
</span><br>
<span class="quotelev1">&gt;                 ||Ax-b||_oo  . . . . . . . . . . . . . . . . . =
</span><br>
<span class="quotelev1">&gt;                 272683853978565028754868928512.000000
</span><br>
<span class="quotelev1">&gt;                 ||A||_oo . . . . . . . . . . . . . . . . . . .
</span><br>
<span class="quotelev1">&gt;                 =        3822.884181
</span><br>
<span class="quotelev1">&gt;                 ||A||_1  . . . . . . . . . . . . . . . . . . .
</span><br>
<span class="quotelev1">&gt;                 =        3823.922627
</span><br>
<span class="quotelev1">&gt;                 ||x||_oo . . . . . . . . . . . . . . . . . . . =
</span><br>
<span class="quotelev1">&gt;                 37037692483529688659798261760.000000
</span><br>
<span class="quotelev1">&gt;                 ||x||_1  . . . . . . . . . . . . . . . . . . . =
</span><br>
<span class="quotelev1">&gt;                 4102704048669982798475494948864.000000
</span><br>
<span class="quotelev1">&gt;                 ===================================================
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 Finished      1 tests with the following results:
</span><br>
<span class="quotelev1">&gt;                               0 tests completed and passed residual
</span><br>
<span class="quotelev1">&gt;                 checks,
</span><br>
<span class="quotelev1">&gt;                               1 tests completed and failed residual
</span><br>
<span class="quotelev1">&gt;                 checks,
</span><br>
<span class="quotelev1">&gt;                               0 tests skipped because of illegal input
</span><br>
<span class="quotelev1">&gt;                 values.
</span><br>
<span class="quotelev1">&gt;                 ----------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 Linux node41 2.6.16.19 &lt;<a href="http://2.6.16.19">http://2.6.16.19</a>&gt; #1 SMP Wed
</span><br>
<span class="quotelev1">&gt;                 Jun 21 17:22:01 EDT 2006 ppc64 PPC970FX, altivec
</span><br>
<span class="quotelev1">&gt;                 supported GNU/Linux
</span><br>
<span class="quotelev1">&gt;                 jbronder_at_node41 ~ $ /usr/local/ompi-
</span><br>
<span class="quotelev1">&gt;                 gnu-1.1.1a/bin/ompi_info
</span><br>
<span class="quotelev1">&gt;                                 Open MPI: 1.1.1a1r10670
</span><br>
<span class="quotelev1">&gt;                    Open MPI SVN revision: r10670
</span><br>
<span class="quotelev1">&gt;                                 Open RTE: 1.1.1a1r10670
</span><br>
<span class="quotelev1">&gt;                    Open RTE SVN revision: r10670
</span><br>
<span class="quotelev1">&gt;                                     OPAL: 1.1.1a1r10670
</span><br>
<span class="quotelev1">&gt;                        OPAL SVN revision: r10670
</span><br>
<span class="quotelev1">&gt;                                   Prefix: /usr/local/ompi-gnu-1.1.1a
</span><br>
<span class="quotelev1">&gt;                  Configured architecture: powerpc64-unknown-linux-gnu
</span><br>
<span class="quotelev1">&gt;                            Configured by: root
</span><br>
<span class="quotelev1">&gt;                            Configured on: Thu Jul  6 10:15:37 EDT 2006
</span><br>
<span class="quotelev1">&gt;                           Configure host: node41
</span><br>
<span class="quotelev1">&gt;                                 Built by: root
</span><br>
<span class="quotelev1">&gt;                                 Built on: Thu Jul  6 10:28:14 EDT 2006
</span><br>
<span class="quotelev1">&gt;                               Built host: node41
</span><br>
<span class="quotelev1">&gt;                               C bindings: yes
</span><br>
<span class="quotelev1">&gt;                             C++ bindings: yes
</span><br>
<span class="quotelev1">&gt;                       Fortran77 bindings: yes (all)
</span><br>
<span class="quotelev1">&gt;                       Fortran90 bindings: yes
</span><br>
<span class="quotelev1">&gt;                  Fortran90 bindings size: small
</span><br>
<span class="quotelev1">&gt;                               C compiler: gcc
</span><br>
<span class="quotelev1">&gt;                      C compiler absolute: /usr/bin/gcc
</span><br>
<span class="quotelev1">&gt;                             C++ compiler: g++
</span><br>
<span class="quotelev1">&gt;                    C++ compiler absolute: /usr/bin/g++
</span><br>
<span class="quotelev1">&gt;                       Fortran77 compiler: gfortran
</span><br>
<span class="quotelev1">&gt;                   Fortran77 compiler abs:
</span><br>
<span class="quotelev1">&gt;                 /usr/powerpc64-unknown-linux-gnu/gcc-bin/4.1.0/gfortran
</span><br>
<span class="quotelev1">&gt;                       Fortran90 compiler: gfortran
</span><br>
<span class="quotelev1">&gt;                   Fortran90 compiler abs:
</span><br>
<span class="quotelev1">&gt;                 /usr/powerpc64-unknown-linux-gnu/gcc-bin/4.1.0/gfortran
</span><br>
<span class="quotelev1">&gt;                              C profiling: yes
</span><br>
<span class="quotelev1">&gt;                            C++ profiling: yes
</span><br>
<span class="quotelev1">&gt;                      Fortran77 profiling: yes
</span><br>
<span class="quotelev1">&gt;                      Fortran90 profiling: yes
</span><br>
<span class="quotelev1">&gt;                           C++ exceptions: no
</span><br>
<span class="quotelev1">&gt;                           Thread support: posix (mpi: no, progress: no)
</span><br>
<span class="quotelev1">&gt;                   Internal debug support: no
</span><br>
<span class="quotelev1">&gt;                      MPI parameter check: runtime
</span><br>
<span class="quotelev1">&gt;                 Memory profiling support: no
</span><br>
<span class="quotelev1">&gt;                 Memory debugging support: no
</span><br>
<span class="quotelev1">&gt;                          libltdl support: yes
</span><br>
<span class="quotelev1">&gt;                               MCA memory: ptmalloc2 (MCA v1.0, API
</span><br>
<span class="quotelev1">&gt;                 v1.0, Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                            MCA paffinity: linux (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev1">&gt;                 Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                            MCA maffinity: first_use (MCA v1.0, API
</span><br>
<span class="quotelev1">&gt;                 v1.0, Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                                MCA timer: linux (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev1">&gt;                 Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                            MCA allocator: basic (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev1">&gt;                 Component v1.0)
</span><br>
<span class="quotelev1">&gt;                            MCA allocator: bucket (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev1">&gt;                 Component v1.0)
</span><br>
<span class="quotelev1">&gt;                                 MCA coll: basic (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev1">&gt;                 Componentv1.1.1)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                            MCA coll: hierarch (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev1">&gt;                 Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                                 MCA coll: self (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev1">&gt;                 Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                                 MCA coll: sm (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev1">&gt;                 Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                                 MCA coll: tuned (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev1">&gt;                 Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                                   MCA io: romio (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev1">&gt;                 Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                                MCA mpool: gm (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev1">&gt;                 Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                                MCA mpool: sm (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev1">&gt;                 Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                                  MCA pml: ob1 (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev1">&gt;                 Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                                  MCA bml: r2 (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev1">&gt;                 Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                               MCA rcache: rb (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev1">&gt;                 Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                                  MCA btl: gm (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev1">&gt;                 Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                                  MCA btl: self (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev1">&gt;                 Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                                  MCA btl: sm (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev1">&gt;                 Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                                  MCA btl: tcp (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev1">&gt;                 Component v1.0)
</span><br>
<span class="quotelev1">&gt;                                 MCA topo: unity (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev1">&gt;                 Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                                  MCA osc: pt2pt (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev1">&gt;                 Component v1.0)
</span><br>
<span class="quotelev1">&gt;                                  MCA gpr: null (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev1">&gt;                 Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                                  MCA gpr: proxy (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev1">&gt;                 Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                                  MCA gpr: replica (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev1">&gt;                 Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                                  MCA iof: proxy (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev1">&gt;                 Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                                  MCA iof: svc (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev1">&gt;                 Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                                   MCA ns: proxy (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev1">&gt;                 Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                                   MCA ns: replica (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev1">&gt;                 Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                                  MCA oob: tcp (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev1">&gt;                 Component v1.0)
</span><br>
<span class="quotelev1">&gt;                                  MCA ras: dash_host (MCA v1.0, API
</span><br>
<span class="quotelev1">&gt;                 v1.0, Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                                  MCA ras: hostfile (MCA v1.0, API
</span><br>
<span class="quotelev1">&gt;                 v1.0, Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                                  MCA ras: localhost (MCA v1.0, API
</span><br>
<span class="quotelev1">&gt;                 v1.0, Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                                  MCA ras: tm (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev1">&gt;                 Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                                  MCA rds: hostfile (MCA v1.0, API
</span><br>
<span class="quotelev1">&gt;                 v1.0, Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                                 MCA rds: resfile (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev1">&gt;                 Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                                MCA rmaps: round_robin (MCA v1.0, API
</span><br>
<span class="quotelev1">&gt;                 v1.0, Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                                 MCA rmgr: proxy (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev1">&gt;                 Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                                 MCA rmgr: urm (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev1">&gt;                 Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                                  MCA rml: oob (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev1">&gt;                 Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                                  MCA pls: fork (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev1">&gt;                 Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                                  MCA pls: rsh (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev1">&gt;                 Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                                  MCA pls: tm (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev1">&gt;                 Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                                  MCA sds: env (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev1">&gt;                 Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                                  MCA sds: pipe (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev1">&gt;                 Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                                  MCA sds: seed (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev1">&gt;                 Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                                  MCA sds: singleton (MCA v1.0, API
</span><br>
<span class="quotelev1">&gt;                 v1.0, Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                 Configured as:
</span><br>
<span class="quotelev1">&gt;                 ./configure \
</span><br>
<span class="quotelev1">&gt;                     --prefix=$PREFIX \
</span><br>
<span class="quotelev1">&gt;                     --enable-mpi-f77 \
</span><br>
<span class="quotelev1">&gt;                     --enable-mpi-f90 \
</span><br>
<span class="quotelev1">&gt;                     --enable-mpi-profile \
</span><br>
<span class="quotelev1">&gt;                     --enable-mpi-cxx \
</span><br>
<span class="quotelev1">&gt;                     --enable-pty-support \
</span><br>
<span class="quotelev1">&gt;                     --enable-shared \
</span><br>
<span class="quotelev1">&gt;                     --enable-smp-locks \
</span><br>
<span class="quotelev1">&gt;                     --enable-io-romio \
</span><br>
<span class="quotelev1">&gt;                     --with-tm=/usr/local/pbs \
</span><br>
<span class="quotelev1">&gt;                     --without-xgrid \
</span><br>
<span class="quotelev1">&gt;                     --without-slurm \
</span><br>
<span class="quotelev1">&gt;                     --with-gm=/opt/gm
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 Darwin node90.meldrew.clusters.umaine.edu
</span><br>
<span class="quotelev1">&gt;                 &lt;<a href="http://node90.meldrew.clusters.umaine.edu">http://node90.meldrew.clusters.umaine.edu</a>&gt; 8.6.0
</span><br>
<span class="quotelev1">&gt;                 Darwin Kernel Version 8.6.0: Tue Mar  7 16:58:48 PST
</span><br>
<span class="quotelev1">&gt;                 2006; root:xnu-792.6.70.obj~1/RELEASE_PPC Power
</span><br>
<span class="quotelev1">&gt;                 Macintosh powerpc
</span><br>
<span class="quotelev1">&gt;                 node90:~/src/hpl jbronder$
</span><br>
<span class="quotelev1">&gt;                 /usr/local/ompi-xl/bin/ompi_info
</span><br>
<span class="quotelev1">&gt;                                 Open MPI: 1.1.1a1r10670
</span><br>
<span class="quotelev1">&gt;                    Open MPI SVN revision: r10670
</span><br>
<span class="quotelev1">&gt;                                 Open RTE: 1.1.1a1r10670
</span><br>
<span class="quotelev1">&gt;                    Open RTE SVN revision: r10670
</span><br>
<span class="quotelev1">&gt;                                     OPAL: 1.1.1a1r10670
</span><br>
<span class="quotelev1">&gt;                        OPAL SVN revision: r10670
</span><br>
<span class="quotelev1">&gt;                                   Prefix: /usr/local/ompi-xl
</span><br>
<span class="quotelev1">&gt;                  Configured architecture: powerpc-apple-darwin8.6.0
</span><br>
<span class="quotelev1">&gt;                            Configured by:
</span><br>
<span class="quotelev1">&gt;                            Configured on: Thu Jul  6 10:05:20 EDT 2006
</span><br>
<span class="quotelev1">&gt;                           Configure host:
</span><br>
<span class="quotelev1">&gt;                 node90.meldrew.clusters.umaine.edu
</span><br>
<span class="quotelev1">&gt;                 &lt;<a href="http://node90.meldrew.clusters.umaine.edu">http://node90.meldrew.clusters.umaine.edu</a>&gt;
</span><br>
<span class="quotelev1">&gt;                                 Built by: root
</span><br>
<span class="quotelev1">&gt;                                 Built on: Thu Jul  6 10:37:40 EDT 2006
</span><br>
<span class="quotelev1">&gt;                               Built host:
</span><br>
<span class="quotelev1">&gt;                 node90.meldrew.clusters.umaine.edu
</span><br>
<span class="quotelev1">&gt;                 &lt;<a href="http://node90.meldrew.clusters.umaine.edu">http://node90.meldrew.clusters.umaine.edu</a>&gt;
</span><br>
<span class="quotelev1">&gt;                               C bindings: yes
</span><br>
<span class="quotelev1">&gt;                             C++ bindings: yes
</span><br>
<span class="quotelev1">&gt;                       Fortran77 bindings: yes (lower case)
</span><br>
<span class="quotelev1">&gt;                       Fortran90 bindings: yes
</span><br>
<span class="quotelev1">&gt;                  Fortran90 bindings size: small
</span><br>
<span class="quotelev1">&gt;                               C compiler: /opt/ibmcmp/vac/6.0/bin/xlc
</span><br>
<span class="quotelev1">&gt;                      C compiler absolute: /opt/ibmcmp/vac/6.0/bin/xlc
</span><br>
<span class="quotelev1">&gt;                             C++ compiler: /opt/ibmcmp/vacpp/6.0/bin/xlc++
</span><br>
<span class="quotelev1">&gt;                    C++ compiler absolute: /opt/ibmcmp/vacpp/6.0/bin/xlc++
</span><br>
<span class="quotelev1">&gt;                       Fortran77 compiler: /opt/ibmcmp/xlf/8.1/bin/xlf_r
</span><br>
<span class="quotelev1">&gt;                   Fortran77 compiler abs: /opt/ibmcmp/xlf/8.1/bin/xlf_r
</span><br>
<span class="quotelev1">&gt;                       Fortran90 compiler: /opt/ibmcmp/xlf/8.1/bin/xlf90_r
</span><br>
<span class="quotelev1">&gt;                   Fortran90 compiler abs: /opt/ibmcmp/xlf/8.1/bin/xlf90_r
</span><br>
<span class="quotelev1">&gt;                              C profiling: yes
</span><br>
<span class="quotelev1">&gt;                            C++ profiling: yes
</span><br>
<span class="quotelev1">&gt;                      Fortran77 profiling: yes
</span><br>
<span class="quotelev1">&gt;                      Fortran90 profiling: yes
</span><br>
<span class="quotelev1">&gt;                           C++ exceptions: no
</span><br>
<span class="quotelev1">&gt;                           Thread support: posix (mpi: no, progress: no)
</span><br>
<span class="quotelev1">&gt;                   Internal debug support: no
</span><br>
<span class="quotelev1">&gt;                      MPI parameter check: runtime
</span><br>
<span class="quotelev1">&gt;                 Memory profiling support: no
</span><br>
<span class="quotelev1">&gt;                 Memory debugging support: no
</span><br>
<span class="quotelev1">&gt;                          libltdl support: yes
</span><br>
<span class="quotelev1">&gt;                               MCA memory: darwin (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev1">&gt;                 Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                            MCA maffinity: first_use (MCA v1.0, API
</span><br>
<span class="quotelev1">&gt;                 v1.0, Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                                MCA timer: darwin (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev1">&gt;                 Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                            MCA allocator: basic (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev1">&gt;                 Component v1.0)
</span><br>
<span class="quotelev1">&gt;                            MCA allocator: bucket (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev1">&gt;                 Component v1.0)
</span><br>
<span class="quotelev1">&gt;                           MCA coll: basic (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev1">&gt;                 Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                                 MCA coll: hierarch (MCA v1.0, API
</span><br>
<span class="quotelev1">&gt;                 v1.0, Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                                 MCA coll: self (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev1">&gt;                 Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                                 MCA coll: sm (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev1">&gt;                 Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                                 MCA coll: tuned (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev1">&gt;                 Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                                   MCA io: romio (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev1">&gt;                 Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                                MCA mpool: sm (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev1">&gt;                 Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                                MCA mpool: gm (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev1">&gt;                 Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                                  MCA pml: ob1 (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev1">&gt;                 Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                                  MCA bml: r2 (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev1">&gt;                 Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                               MCA rcache: rb (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev1">&gt;                 Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                                  MCA btl: self (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev1">&gt;                 Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                                  MCA btl: sm (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev1">&gt;                 Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                                  MCA btl: gm (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev1">&gt;                 Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                                  MCA btl: tcp (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev1">&gt;                 Component v1.0)
</span><br>
<span class="quotelev1">&gt;                                 MCA topo: unity (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev1">&gt;                 Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                                  MCA osc: pt2pt (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev1">&gt;                 Component v1.0)
</span><br>
<span class="quotelev1">&gt;                                  MCA gpr: null (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev1">&gt;                 Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                                  MCA gpr: proxy (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev1">&gt;                 Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                                  MCA gpr: replica (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev1">&gt;                 Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                                  MCA iof: proxy (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev1">&gt;                 Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                                  MCA iof: svc (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev1">&gt;                 Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                                   MCA ns: proxy (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev1">&gt;                 Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                                   MCA ns: replica (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev1">&gt;                 Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                                  MCA oob: tcp (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev1">&gt;                 Component v1.0)
</span><br>
<span class="quotelev1">&gt;                                  MCA ras: dash_host (MCA v1.0, API
</span><br>
<span class="quotelev1">&gt;                 v1.0, Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                                  MCA ras: hostfile (MCA v1.0, API
</span><br>
<span class="quotelev1">&gt;                 v1.0, Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                                  MCA ras: localhost (MCA v1.0, API
</span><br>
<span class="quotelev1">&gt;                 v1.0, Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                                  MCA ras: tm (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev1">&gt;                 Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                                MCA rds: hostfile (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev1">&gt;                 Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                                  MCA rds: resfile (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev1">&gt;                 Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                                MCA rmaps: round_robin (MCA v1.0, API
</span><br>
<span class="quotelev1">&gt;                 v1.0, Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                                 MCA rmgr: proxy (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev1">&gt;                 Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                                 MCA rmgr: urm (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev1">&gt;                 Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                                  MCA rml: oob (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev1">&gt;                 Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                                  MCA pls: fork (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev1">&gt;                 Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                                  MCA pls: rsh (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev1">&gt;                 Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                                  MCA pls: tm (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev1">&gt;                 Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                                  MCA sds: env (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev1">&gt;                 Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                                  MCA sds: seed (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev1">&gt;                 Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                                  MCA sds: singleton (MCA v1.0, API
</span><br>
<span class="quotelev1">&gt;                 v1.0, Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                                  MCA sds: pipe (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev1">&gt;                 Component v1.1.1)
</span><br>
<span class="quotelev1">&gt;                 Configured as:
</span><br>
<span class="quotelev1">&gt;                 ./configure \
</span><br>
<span class="quotelev1">&gt;                     --prefix=$PREFIX \
</span><br>
<span class="quotelev1">&gt;                     --with-tm=/usr/local/pbs/ \
</span><br>
<span class="quotelev1">&gt;                     --with-gm=/opt/gm \
</span><br>
<span class="quotelev1">&gt;                     --enable-static \
</span><br>
<span class="quotelev1">&gt;                     --disable-cxx
</span><br>
<span class="quotelev1">&gt;                 On 7/3/06, *George Bosilca* &lt; bosilca_at_[hidden]
</span><br>
<span class="quotelev1">&gt;                 &lt;mailto:bosilca_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;                 Bernard,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 A bug in the Open MPI GM driver was discovered after
</span><br>
<span class="quotelev1">&gt;                 the 1.1 release.
</span><br>
<span class="quotelev1">&gt;                 A patch for the 1.1 is on the way. However, I don't
</span><br>
<span class="quotelev1">&gt;                 know if it will
</span><br>
<span class="quotelev1">&gt;                 be available before the 1.1.1. Meanwhile, you can use
</span><br>
<span class="quotelev1">&gt;                 the nightly
</span><br>
<span class="quotelev1">&gt;                 build version or a fresh check-out from the SVN
</span><br>
<span class="quotelev1">&gt;                 repository. Both of
</span><br>
<span class="quotelev1">&gt;                 them have the GM bug corrected.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                    Sorry for the troubles,
</span><br>
<span class="quotelev1">&gt;                      george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 On Jul 3, 2006, at 12:58 PM, Borenstein, Bernard S wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;                 &gt; I've built and sucessfully run the Nasa Overflow
</span><br>
<span class="quotelev1">&gt;                 2.0aa program with
</span><br>
<span class="quotelev2">&gt;                 &gt; Openmpi 1.0.2.  I'm running on an opteron linux
</span><br>
<span class="quotelev1">&gt;                 cluster running SLES 9
</span><br>
<span class="quotelev2">&gt;                 &gt; and GM 2.0.24. I built Openmpi 1.1 with the intel 9
</span><br>
<span class="quotelev1">&gt;                 compilers and
</span><br>
<span class="quotelev2">&gt;                 &gt; try to
</span><br>
<span class="quotelev2">&gt;                 &gt; run Overflow 2.0aa with myrinet, it get what looks
</span><br>
<span class="quotelev1">&gt;                 like a data
</span><br>
<span class="quotelev2">&gt;                 &gt; corruption error and the program dies quickly.
</span><br>
<span class="quotelev2">&gt;                 &gt; There are no mpi errors at all.If I run using GIGE
</span><br>
<span class="quotelev1">&gt;                 (--mca btl
</span><br>
<span class="quotelev2">&gt;                 &gt; self,tcp),
</span><br>
<span class="quotelev2">&gt;                 &gt; the program runs to competion correctly.  Here is my
</span><br>
<span class="quotelev1">&gt;                 ompi_info
</span><br>
<span class="quotelev2">&gt;                 &gt; output :
</span><br>
<span class="quotelev2">&gt;                 &gt;
</span><br>
<span class="quotelev2">&gt;                 &gt; bsb3227_at_mahler:~/openmpi_1.1/bin&gt; ./ompi_info
</span><br>
<span class="quotelev2">&gt;                 &gt;                 Open MPI: 1.1
</span><br>
<span class="quotelev2">&gt;                 &gt;    Open MPI SVN revision: r10477
</span><br>
<span class="quotelev2">&gt;                 &gt;                 Open RTE: 1.1
</span><br>
<span class="quotelev2">&gt;                 &gt;    Open RTE SVN revision: r10477
</span><br>
<span class="quotelev2">&gt;                 &gt;                     OPAL: 1.1
</span><br>
<span class="quotelev2">&gt;                 &gt;        OPAL SVN revision: r10477
</span><br>
<span class="quotelev2">&gt;                 &gt;                   Prefix: /home/bsb3227/openmpi_1.1
</span><br>
<span class="quotelev2">&gt;                 &gt;  Configured architecture: x86_64-unknown-linux-gnu
</span><br>
<span class="quotelev2">&gt;                 &gt;            Configured by: bsb3227
</span><br>
<span class="quotelev2">&gt;                 &gt;            Configured on: Fri Jun 30 07:08:54 PDT 2006
</span><br>
<span class="quotelev2">&gt;                 &gt;           Configure host: mahler
</span><br>
<span class="quotelev2">&gt;                 &gt;                 Built by: bsb3227
</span><br>
<span class="quotelev2">&gt;                 &gt;                 Built on: Fri Jun 30 07:54:46 PDT 2006
</span><br>
<span class="quotelev2">&gt;                 &gt;               Built host: mahler
</span><br>
<span class="quotelev2">&gt;                 &gt;               C bindings: yes
</span><br>
<span class="quotelev2">&gt;                 &gt;             C++ bindings: yes
</span><br>
<span class="quotelev2">&gt;                 &gt;       Fortran77 bindings: yes (all)
</span><br>
<span class="quotelev2">&gt;                 &gt;       Fortran90 bindings: yes
</span><br>
<span class="quotelev2">&gt;                 &gt;  Fortran90 bindings size: small
</span><br>
<span class="quotelev2">&gt;                 &gt;               C compiler: icc
</span><br>
<span class="quotelev2">&gt;                 &gt;      C compiler absolute: /opt/intel/cce/9.0.25/bin/icc
</span><br>
<span class="quotelev2">&gt;                 &gt;             C++ compiler: icpc
</span><br>
<span class="quotelev2">&gt;                 &gt;    C++ compiler absolute: /opt/intel/cce/9.0.25/bin/icpc
</span><br>
<span class="quotelev2">&gt;                 &gt;       Fortran77 compiler: ifort
</span><br>
<span class="quotelev2">&gt;                 &gt;   Fortran77 compiler abs: /opt/intel/fce/9.0.25/bin/ifort
</span><br>
<span class="quotelev2">&gt;                 &gt;       Fortran90 compiler: /opt/intel/fce/9.0.25/bin/ifort
</span><br>
<span class="quotelev2">&gt;                 &gt;   Fortran90 compiler abs:
</span><br>
<span class="quotelev1">&gt;                 /opt/intel/fce/9.0.25/bin/ifort
</span><br>
<span class="quotelev2">&gt;                 &gt;              C profiling: yes
</span><br>
<span class="quotelev2">&gt;                 &gt;            C++ profiling: yes
</span><br>
<span class="quotelev2">&gt;                 &gt;      Fortran77 profiling: yes
</span><br>
<span class="quotelev2">&gt;                 &gt;      Fortran90 profiling: yes
</span><br>
<span class="quotelev2">&gt;                 &gt;           C++ exceptions: no
</span><br>
<span class="quotelev2">&gt;                 &gt;           Thread support: posix (mpi: no, progress: no)
</span><br>
<span class="quotelev2">&gt;                 &gt;   Internal debug support: no
</span><br>
<span class="quotelev2">&gt;                 &gt;      MPI parameter check: runtime
</span><br>
<span class="quotelev2">&gt;                 &gt; Memory profiling support: no
</span><br>
<span class="quotelev2">&gt;                 &gt; Memory debugging support: no
</span><br>
<span class="quotelev2">&gt;                 &gt;          libltdl support: yes
</span><br>
<span class="quotelev2">&gt;                 &gt;               MCA memory: ptmalloc2 (MCA v1.0, API
</span><br>
<span class="quotelev1">&gt;                 v1.0, Component
</span><br>
<span class="quotelev2">&gt;                 &gt; v1.1)
</span><br>
<span class="quotelev2">&gt;                 &gt;            MCA paffinity: linux (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev1">&gt;                 Component v1.1)
</span><br>
<span class="quotelev2">&gt;                 &gt;            MCA maffinity: first_use (MCA v1.0, API
</span><br>
<span class="quotelev1">&gt;                 v1.0, Component
</span><br>
<span class="quotelev2">&gt;                 &gt; v1.1)
</span><br>
<span class="quotelev2">&gt;                 &gt;            MCA maffinity: libnuma (MCA v1.0, API
</span><br>
<span class="quotelev1">&gt;                 v1.0, Component v1.1)
</span><br>
<span class="quotelev2">&gt;                 &gt;                MCA timer: linux (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev1">&gt;                 Component v1.1)
</span><br>
<span class="quotelev2">&gt;                 &gt;            MCA allocator: basic (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev1">&gt;                 Component v1.0)
</span><br>
<span class="quotelev2">&gt;                 &gt;            MCA allocator: bucket (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev1">&gt;                 Component v1.0)
</span><br>
<span class="quotelev2">&gt;                 &gt;                 MCA coll: basic (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev1">&gt;                 Component v1.1)
</span><br>
<span class="quotelev2">&gt;                 &gt;                 MCA coll: hierarch (MCA v1.0, API
</span><br>
<span class="quotelev1">&gt;                 v1.0, Component
</span><br>
<span class="quotelev2">&gt;                 &gt; v1.1)
</span><br>
<span class="quotelev2">&gt;                 &gt;                 MCA coll: self (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev1">&gt;                 Component v1.1)
</span><br>
<span class="quotelev2">&gt;                 &gt;                 MCA coll: sm (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev1">&gt;                 Component v1.1)
</span><br>
<span class="quotelev2">&gt;                 &gt;                 MCA coll: tuned (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev1">&gt;                 Component v1.1)
</span><br>
<span class="quotelev2">&gt;                 &gt;                   MCA io: romio (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev1">&gt;                 Component v1.1)
</span><br>
<span class="quotelev2">&gt;                 &gt;                MCA mpool: sm (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev1">&gt;                 Component v1.1)
</span><br>
<span class="quotelev2">&gt;                 &gt;                MCA mpool: gm (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev1">&gt;                 Component v1.1)
</span><br>
<span class="quotelev2">&gt;                 &gt;                  MCA pml: ob1 (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev1">&gt;                 Component v1.1)
</span><br>
<span class="quotelev2">&gt;                 &gt;                  MCA bml: r2 (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev1">&gt;                 Component v1.1)
</span><br>
<span class="quotelev2">&gt;                 &gt;               MCA rcache: rb (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev1">&gt;                 Component v1.1)
</span><br>
<span class="quotelev2">&gt;                 &gt;                  MCA btl: self (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev1">&gt;                 Component v1.1)
</span><br>
<span class="quotelev2">&gt;                 &gt;                  MCA btl: sm (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev1">&gt;                 Component v1.1)
</span><br>
<span class="quotelev2">&gt;                 &gt;                  MCA btl: gm (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev1">&gt;                 Component v1.1)
</span><br>
<span class="quotelev2">&gt;                 &gt;                  MCA btl: tcp (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev1">&gt;                 Component v1.0)
</span><br>
<span class="quotelev2">&gt;                 &gt;                 MCA topo: unity (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev1">&gt;                 Component v1.1)
</span><br>
<span class="quotelev2">&gt;                 &gt;                  MCA osc: pt2pt (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev1">&gt;                 Component v1.0)
</span><br>
<span class="quotelev2">&gt;                 &gt;                  MCA gpr: null (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev1">&gt;                 Component v1.1)
</span><br>
<span class="quotelev2">&gt;                 &gt;                  MCA gpr: proxy (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev1">&gt;                 Component v1.1)
</span><br>
<span class="quotelev2">&gt;                 &gt;                  MCA gpr: replica (MCA v1.0, API
</span><br>
<span class="quotelev1">&gt;                 v1.0, Component v1.1)
</span><br>
<span class="quotelev2">&gt;                 &gt;                  MCA iof: proxy (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev1">&gt;                 Component v1.1)
</span><br>
<span class="quotelev2">&gt;                 &gt;                  MCA iof: svc (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev1">&gt;                 Component v1.1)
</span><br>
<span class="quotelev2">&gt;                 &gt;                   MCA ns: proxy (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev1">&gt;                 Component v1.1)
</span><br>
<span class="quotelev2">&gt;                 &gt;                   MCA ns: replica (MCA v1.0, API
</span><br>
<span class="quotelev1">&gt;                 v1.0, Component v1.1)
</span><br>
<span class="quotelev2">&gt;                 &gt;                  MCA oob: tcp (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev1">&gt;                 Component v1.0)
</span><br>
<span class="quotelev2">&gt;                 &gt;                  MCA ras: dash_host (MCA v1.0, API
</span><br>
<span class="quotelev1">&gt;                 v1.0, Component
</span><br>
<span class="quotelev2">&gt;                 &gt; v1.1)
</span><br>
<span class="quotelev2">&gt;                 &gt;                  MCA ras: hostfile (MCA v1.0, API
</span><br>
<span class="quotelev1">&gt;                 v1.0, Component
</span><br>
<span class="quotelev2">&gt;                 &gt; v1.1)
</span><br>
<span class="quotelev2">&gt;                 &gt;                  MCA ras: localhost (MCA v1.0, API
</span><br>
<span class="quotelev1">&gt;                 v1.0, Component
</span><br>
<span class="quotelev2">&gt;                 &gt; v1.1)
</span><br>
<span class="quotelev2">&gt;                 &gt;                  MCA ras: slurm (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev1">&gt;                 Component v1.1)
</span><br>
<span class="quotelev2">&gt;                 &gt;                  MCA ras: tm (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev1">&gt;                 Component v1.1)
</span><br>
<span class="quotelev2">&gt;                 &gt;                  MCA rds: hostfile (MCA v1.0, API
</span><br>
<span class="quotelev1">&gt;                 v1.0, Component
</span><br>
<span class="quotelev2">&gt;                 &gt; v1.1)
</span><br>
<span class="quotelev2">&gt;                 &gt;                  MCA rds: resfile (MCA v1.0, API
</span><br>
<span class="quotelev1">&gt;                 v1.0, Component v1.1)
</span><br>
<span class="quotelev2">&gt;                 &gt;                MCA rmaps: round_robin (MCA v1.0, API
</span><br>
<span class="quotelev1">&gt;                 v1.0, Component
</span><br>
<span class="quotelev2">&gt;                 &gt; v1.1)
</span><br>
<span class="quotelev2">&gt;                 &gt;                 MCA rmgr: proxy (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev1">&gt;                 Component v1.1)
</span><br>
<span class="quotelev2">&gt;                 &gt;                 MCA rmgr: urm (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev1">&gt;                 Component v1.1)
</span><br>
<span class="quotelev2">&gt;                 &gt;                  MCA rml: oob (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev1">&gt;                 Component v1.1)
</span><br>
<span class="quotelev2">&gt;                 &gt;                  MCA pls: fork (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev1">&gt;                 Component v1.1)
</span><br>
<span class="quotelev2">&gt;                 &gt;                  MCA pls: rsh (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev1">&gt;                 Component v1.1)
</span><br>
<span class="quotelev2">&gt;                 &gt;                  MCA pls: slurm (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev1">&gt;                 Component v1.1)
</span><br>
<span class="quotelev2">&gt;                 &gt;                  MCA pls: tm (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev1">&gt;                 Component v1.1)
</span><br>
<span class="quotelev2">&gt;                 &gt;                  MCA sds: env (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev1">&gt;                 Component v1.1)
</span><br>
<span class="quotelev2">&gt;                 &gt;                  MCA sds: seed (MCA v1.0, APIv1.0,
</span><br>
<span class="quotelev1">&gt;                 Component v1.1)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;                 &gt;                  MCA sds: singleton (MCA v1.0, API
</span><br>
<span class="quotelev1">&gt;                 v1.0, Component
</span><br>
<span class="quotelev2">&gt;                 &gt; v1.1)
</span><br>
<span class="quotelev2">&gt;                 &gt;                  MCA sds: pipe (MCAv1.0, API v1.0,
</span><br>
<span class="quotelev1">&gt;                 Component v1.1)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;                 &gt;                  MCA sds: slurm (MCA v1.0, API v1.0,
</span><br>
<span class="quotelev1">&gt;                 Component v1.1)
</span><br>
<span class="quotelev2">&gt;                 &gt;
</span><br>
<span class="quotelev2">&gt;                 &gt; Here is the ifconfig for one of the nodes :
</span><br>
<span class="quotelev2">&gt;                 &gt;
</span><br>
<span class="quotelev2">&gt;                 &gt; bsb3227_at_m045:~&gt; /sbin/ifconfig
</span><br>
<span class="quotelev2">&gt;                 &gt; eth0      Link encap:Ethernet  HWaddr 00:50:45:5D:CD:FE
</span><br>
<span class="quotelev2">&gt;                 &gt;           inet addr:10.241.194.45
</span><br>
<span class="quotelev1">&gt;                 &lt;<a href="http://10.241.194.45">http://10.241.194.45</a>&gt;  Bcast: 10.241.195.255
</span><br>
<span class="quotelev1">&gt;                 &lt;<a href="http://10.241.195.255">http://10.241.195.255</a>&gt;
</span><br>
<span class="quotelev2">&gt;                 &gt; Mask:255.255.254.0 &lt;<a href="http://255.255.254.0">http://255.255.254.0</a>&gt;
</span><br>
<span class="quotelev2">&gt;                 &gt;           inet6 addr: fe80::250:45ff:fe5d:cdfe/64
</span><br>
<span class="quotelev1">&gt;                 Scope:Link
</span><br>
<span class="quotelev2">&gt;                 &gt;           UP BROADCAST NOTRAILERS RUNNING
</span><br>
<span class="quotelev1">&gt;                 MULTICAST  MTU:1500
</span><br>
<span class="quotelev2">&gt;                 &gt; Metric:1
</span><br>
<span class="quotelev2">&gt;                 &gt;           RX packets:39913407 errors:0 dropped:0
</span><br>
<span class="quotelev1">&gt;                 overruns:0 frame:0
</span><br>
<span class="quotelev2">&gt;                 &gt;           TX packets:48794587 errors:0 dropped:0
</span><br>
<span class="quotelev1">&gt;                 overruns:0 carrier:0
</span><br>
<span class="quotelev2">&gt;                 &gt;           collisions:0 txqueuelen:1000
</span><br>
<span class="quotelev2">&gt;                 &gt;           RX bytes:31847343907 (30371.9 Mb)  TX
</span><br>
<span class="quotelev1">&gt;                 bytes:48231713866
</span><br>
<span class="quotelev2">&gt;                 &gt; (45997.3 Mb)
</span><br>
<span class="quotelev2">&gt;                 &gt;           Interrupt:19
</span><br>
<span class="quotelev2">&gt;                 &gt;
</span><br>
<span class="quotelev2">&gt;                 &gt; eth1      Link encap:Ethernet  HWaddr 00:50:45:5D:CD:FF
</span><br>
<span class="quotelev2">&gt;                 &gt;           inet6 addr: fe80::250:45ff:fe5d:cdff/64
</span><br>
<span class="quotelev1">&gt;                 Scope:Link
</span><br>
<span class="quotelev2">&gt;                 &gt;           UP BROADCAST MULTICAST  MTU:1500  Metric:1
</span><br>
<span class="quotelev2">&gt;                 &gt;           RX packets:0 errors:0 dropped:0 overruns:0
</span><br>
<span class="quotelev1">&gt;                 frame:0
</span><br>
<span class="quotelev2">&gt;                 &gt;           TX packets:0 errors:0 dropped:0 overruns:0
</span><br>
<span class="quotelev1">&gt;                 carrier:0
</span><br>
<span class="quotelev2">&gt;                 &gt;           collisions:0 txqueuelen:1000
</span><br>
<span class="quotelev2">&gt;                 &gt;           RX bytes:0 (0.0 b)  TX bytes:0 (0.0 b)
</span><br>
<span class="quotelev2">&gt;                 &gt;           Interrupt:19
</span><br>
<span class="quotelev2">&gt;                 &gt;
</span><br>
<span class="quotelev2">&gt;                 &gt; lo        Link encap:Local Loopback
</span><br>
<span class="quotelev2">&gt;                 &gt;           inet addr: 127.0.0.1
</span><br>
<span class="quotelev1">&gt;                 &lt;<a href="http://127.0.0.1">http://127.0.0.1</a>&gt;  Mask: 255.0.0.0 &lt;<a href="http://255.0.0.0">http://255.0.0.0</a>&gt;
</span><br>
<span class="quotelev2">&gt;                 &gt;           inet6 addr: ::1/128 Scope:Host
</span><br>
<span class="quotelev2">&gt;                 &gt;           UP LOOPBACK RUNNING  MTU:16436  Metric:1
</span><br>
<span class="quotelev2">&gt;                 &gt;           RX packets:23141 errors:0 dropped:0
</span><br>
<span class="quotelev1">&gt;                 overruns:0 frame:0
</span><br>
<span class="quotelev2">&gt;                 &gt;           TX packets:23141 errors:0 dropped:0
</span><br>
<span class="quotelev1">&gt;                 overruns:0 carrier:0
</span><br>
<span class="quotelev2">&gt;                 &gt;           collisions:0 txqueuelen:0
</span><br>
<span class="quotelev2">&gt;                 &gt;           RX bytes:20145689 (19.2 Mb)  TX
</span><br>
<span class="quotelev1">&gt;                 bytes:20145689 (19.2 Mb)
</span><br>
<span class="quotelev2">&gt;                 &gt;
</span><br>
<span class="quotelev2">&gt;                 &gt; I hope someone can give me some guidance on how to
</span><br>
<span class="quotelev1">&gt;                 debug this problem.
</span><br>
<span class="quotelev2">&gt;                 &gt; Thanx in advance for any help
</span><br>
<span class="quotelev2">&gt;                 &gt; that can be provided.
</span><br>
<span class="quotelev2">&gt;                 &gt;
</span><br>
<span class="quotelev2">&gt;                 &gt; Bernie Borenstein
</span><br>
<span class="quotelev2">&gt;                 &gt; The Boeing Company
</span><br>
<span class="quotelev2">&gt;                 &gt; &lt;config.log.gz&gt;
</span><br>
<span class="quotelev2">&gt;                 &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;                 &gt; users mailing list
</span><br>
<span class="quotelev2">&gt;                 &gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;                 &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 &quot;Half of what I say is meaningless; but I say it so
</span><br>
<span class="quotelev1">&gt;                 that the other
</span><br>
<span class="quotelev1">&gt;                 half may reach you&quot;
</span><br>
<span class="quotelev1">&gt;                                                    Kahlil Gibran
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 _______________________________________________
</span><br>
<span class="quotelev1">&gt;                 users mailing list
</span><br>
<span class="quotelev1">&gt;                 users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;                 <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             _______________________________________________
</span><br>
<span class="quotelev1">&gt;             users mailing list
</span><br>
<span class="quotelev1">&gt;             users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;             <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         _______________________________________________
</span><br>
<span class="quotelev1">&gt;         users mailing list
</span><br>
<span class="quotelev1">&gt;         users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;         <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;         &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
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
<p><pre>
-- 
Justin Bronder
University of Maine, Orono
Advanced Computing Research Lab
20 Godfrey Dr
Orono, ME 04473
www.clusters.umaine.edu
Mathematics Department
425 Neville Hall
Orono, ME 04469
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1595.php">George Bosilca: "Re: [OMPI users] Datatype bug regression from Open MPI 1.0.2 to Open MPI 1.1"</a>
<li><strong>Previous message:</strong> <a href="1593.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Problem with Openmpi 1.1"</a>
<li><strong>In reply to:</strong> <a href="1593.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Problem with Openmpi 1.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1613.php">Galen M. Shipman: "Re: [OMPI users] Problem with Openmpi 1.1"</a>
<li><strong>Reply:</strong> <a href="1613.php">Galen M. Shipman: "Re: [OMPI users] Problem with Openmpi 1.1"</a>
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
