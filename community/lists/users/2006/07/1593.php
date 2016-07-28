<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Jul  8 08:24:28 2006" -->
<!-- isoreceived="20060708122428" -->
<!-- sent="Sat, 8 Jul 2006 08:24:02 -0400" -->
<!-- isosent="20060708122402" -->
<!-- name="Jeff Squyres \(jsquyres\)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with Openmpi 1.1" -->
<!-- id="C835B9C9CB0F1C4E9DA48913C9E8F8AFB2501C_at_xmb-rtp-215.amer.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] Problem with Openmpi 1.1" -->
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
<strong>From:</strong> Jeff Squyres \(jsquyres\) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-07-08 08:24:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1594.php">Justin Bronder: "Re: [OMPI users] Problem with Openmpi 1.1"</a>
<li><strong>Previous message:</strong> <a href="1592.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] debugging with mpirun"</a>
<li><strong>Maybe in reply to:</strong> <a href="1528.php">Borenstein, Bernard S: "[OMPI users] Problem with Openmpi 1.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1594.php">Justin Bronder: "Re: [OMPI users] Problem with Openmpi 1.1"</a>
<li><strong>Reply:</strong> <a href="1594.php">Justin Bronder: "Re: [OMPI users] Problem with Openmpi 1.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Justin --
<br>
&nbsp;
<br>
Can we eliminate some variables so that we can figure out where the
<br>
error is originating?
<br>
&nbsp;
<br>
- Can you try compiling without the XL compilers?
<br>
- Can you try running with just TCP (and not Myrinet)?
<br>
- With the same support library installation (such as BLAS, etc.,
<br>
assumedly also compiled with XL), can you try another MPI (e.g., LAM,
<br>
MPICH-gm, whatever)?
<br>
<p>Let us know what you find.  Thanks!
<br>
&nbsp;
<br>
<p>________________________________
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;From: users-bounces_at_[hidden]
<br>
[mailto:users-bounces_at_[hidden]] On Behalf Of Justin Bronder
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sent: Thursday, July 06, 2006 3:16 PM
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;To: Open MPI Users
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Subject: Re: [OMPI users] Problem with Openmpi 1.1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;With 1.0.3a1r10670 the same problem is occuring.  Again the same
<br>
configure arguments
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;as before.  For clarity, the Myrinet drive we are using is
<br>
2.0.21
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;node90:~/src/hpl/bin/ompi-xl-1.0.3 jbronder$ gm_board_info 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;GM build ID is &quot;2.0.21_MacOSX_rc20050429075134PDT
<br>
root_at_[hidden]:/usr/src/gm-2.0.21_MacOSX Fri
<br>
Jun 16 14:39:45 EDT 2006.&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;node90:~/src/hpl/bin/ompi-xl-1.0.3 jbronder$
<br>
/usr/local/ompi-xl-1.0.3/bin/mpirun -np 2 xhpl
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;This succeeds.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;||Ax-b||_oo / ( eps * ||A||_1  * N        ) =        0.1196787
<br>
...... PASSED
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;||Ax-b||_oo / ( eps * ||A||_1  * ||x||_1  ) =        0.0283195
<br>
...... PASSED
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;||Ax-b||_oo / ( eps * ||A||_oo * ||x||_oo ) =        0.0063300
<br>
...... PASSED
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;node90:~/src/hpl/bin/ompi-xl-1.0.3 jbronder$
<br>
/usr/local/ompi-xl-1.0.3/bin/mpirun -mca btl gm -np 2 xhpl 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;This fails.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;||Ax-b||_oo / ( eps * ||A||_1  * N        ) =
<br>
717370209518881444284334080.0000000 ...... FAILED
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;||Ax-b||_oo / ( eps * ||A||_1  * ||x||_1  ) =
<br>
226686309135.4274597 ...... FAILED
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;||Ax-b||_oo / ( eps * ||A||_oo * ||x||_oo ) = 2386641249.6518722
<br>
...... FAILED
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;||Ax-b||_oo  . . . . . . . . . . . . . . . . . =
<br>
2037398812542965504.000000
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;||A||_oo . . . . . . . . . . . . . . . . . . . =
<br>
2561.554752
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;||A||_1  . . . . . . . . . . . . . . . . . . . =
<br>
2558.129237
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;||x||_oo . . . . . . . . . . . . . . . . . . . =
<br>
300175355203841216.000000
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;||x||_1  . . . . . . . . . . . . . . . . . . . =
<br>
31645943341479366656.000000
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Does anyone have a working system with OS X and Myrinet (GM)?
<br>
If so, I'd love to hear
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;the configure arguments and various versions you are using.
<br>
Bonus points if you are
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;using the IBM XL compilers.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Justin.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;On 7/6/06, Justin Bronder &lt;jsbronder_at_[hidden]&gt; wrote: 
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Yes, that output was actually cut and pasted from an OS
<br>
X run.  I'm about to test
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;against 1.0.3a1r10670.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Justin.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;On 7/6/06, Galen M. Shipman &lt; gshipman_at_[hidden]
<br>
&lt;mailto:gshipman_at_[hidden]&gt; &gt; wrote:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Justin,  
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Is the OS X run showing the same residual
<br>
failure?
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Galen 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;On Jul 6, 2006, at 10:49 AM, Justin Bronder
<br>
wrote:
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Disregard the failure on Linux, a rebuild from
<br>
scratch of HPL and OpenMPI
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;seems to have resolved the issue.  At least I'm
<br>
not getting the errors during 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;the residual checks.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;However, this is persisting under OS X.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Justin.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;On 7/6/06, Justin Bronder &lt; jsbronder_at_[hidden]
<br>
&lt;mailto:jsbronder_at_[hidden]&gt; &gt; wrote:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;For OS X:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/usr/local/ompi-xl/bin/mpirun -mca btl
<br>
gm -np 4 ./xhpl 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;For Linux:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ARCH=ompi-gnu-1.1.1a
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/usr/local/$ARCH/bin/mpiexec -mca btl gm
<br>
-np 2 -path /usr/local/$ARCH/bin ./xhpl
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Thanks for the speedy response,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Justin.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;On 7/6/06, Galen M. Shipman &lt;
<br>
gshipman_at_[hidden] &lt;mailto:gshipman_at_[hidden]&gt; &gt; wrote:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hey Justin,  
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Please provide us your mca parameters
<br>
(if any), these could be in a config file, environment variables or on
<br>
the command line. 
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Thanks, 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Galen 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;On Jul 6, 2006, at 9:22 AM, Justin
<br>
Bronder wrote:
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;As far as the nightly builds go, I'm
<br>
still seeing what I believe to be 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;this problem in both r10670 and r10652.
<br>
This is happening with 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;both Linux and OS X.  Below are the
<br>
systems and ompi_info for the
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;newest revision 10670.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;As an example of the error, when running
<br>
HPL with Myrinet I get the
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;following error.  Using tcp everything
<br>
is fine and I see the results I'd 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;expect.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
------------------------------------------------------------------------
<br>
<pre>
----
				||Ax-b||_oo / ( eps * ||A||_1  * N
) = 42820214496954887558164928727596662784.0000000 ...... FAILED
				||Ax-b||_oo / ( eps * ||A||_1  * ||x||_1
) = 156556068835.2711182 ...... FAILED
				||Ax-b||_oo / ( eps * ||A||_oo *
||x||_oo ) = 1156439380.5172558 ...... FAILED
				||Ax-b||_oo  . . . . . . . . . . . . . .
. . . = 272683853978565028754868928512.000000
				||A||_oo . . . . . . . . . . . . . . . .
. . . =        3822.884181
				||A||_1  . . . . . . . . . . . . . . . .
. . . =        3823.922627
				||x||_oo . . . . . . . . . . . . . . . .
. . . = 37037692483529688659798261760.000000
				||x||_1  . . . . . . . . . . . . . . . .
. . . = 4102704048669982798475494948864.000000
	
===================================================
				
				Finished      1 tests with the following
results:
				              0 tests completed and
passed residual checks,
				              1 tests completed and
failed residual checks,
				              0 tests skipped because of
illegal input values.
	
------------------------------------------------------------------------
----
				
				Linux node41 2.6.16.19 #1 SMP Wed Jun 21
17:22:01 EDT 2006 ppc64 PPC970FX, altivec supported GNU/Linux
				jbronder_at_node41 ~ $ /usr/local/ompi-
gnu-1.1.1a/bin/ompi_info 
				                Open MPI: 1.1.1a1r10670
				   Open MPI SVN revision: r10670
				                Open RTE: 1.1.1a1r10670
				   Open RTE SVN revision: r10670
				                    OPAL: 1.1.1a1r10670
				       OPAL SVN revision: r10670
				                  Prefix:
/usr/local/ompi-gnu-1.1.1a
				 Configured architecture:
powerpc64-unknown-linux-gnu
				           Configured by: root
				           Configured on: Thu Jul  6
10:15:37 EDT 2006
				          Configure host: node41 
				                Built by: root
				                Built on: Thu Jul  6
10:28:14 EDT 2006
				              Built host: node41
				              C bindings: yes
				            C++ bindings: yes
				      Fortran77 bindings: yes (all)
				      Fortran90 bindings: yes
				 Fortran90 bindings size: small
				              C compiler: gcc
				     C compiler absolute: /usr/bin/gcc
				            C++ compiler: g++
				   C++ compiler absolute: /usr/bin/g++
				      Fortran77 compiler: gfortran 
				  Fortran77 compiler abs:
/usr/powerpc64-unknown-linux-gnu/gcc-bin/4.1.0/gfortran
				      Fortran90 compiler: gfortran
				  Fortran90 compiler abs:
/usr/powerpc64-unknown-linux-gnu/gcc-bin/4.1.0/gfortran
				             C profiling: yes 
				           C++ profiling: yes
				     Fortran77 profiling: yes
				     Fortran90 profiling: yes
				          C++ exceptions: no
				          Thread support: posix (mpi:
no, progress: no)
				  Internal debug support: no 
				     MPI parameter check: runtime
				Memory profiling support: no
				Memory debugging support: no
				         libltdl support: yes
				              MCA memory: ptmalloc2 (MCA
v1.0, API v1.0, Component v1.1.1)
				           MCA paffinity: linux (MCA
v1.0, API v1.0, Component v1.1.1)
				           MCA maffinity: first_use (MCA
v1.0, API v1.0, Component v1.1.1)
				               MCA timer: linux (MCA
v1.0, API v1.0, Component v1.1.1)
				           MCA allocator: basic (MCA
v1.0, API v1.0, Component v1.0)
				           MCA allocator: bucket (MCA
v1.0, API v1.0, Component v1.0)
				
				                MCA coll: basic (MCA
v1.0, API v1.0, Componentv1.1.1) 
				
				           MCA coll: hierarch (MCA v1.0,
API v1.0, Component v1.1.1)
				                MCA coll: self (MCA
v1.0, API v1.0, Component v1.1.1)
				                MCA coll: sm (MCA v1.0,
API v1.0, Component v1.1.1)
				                MCA coll: tuned (MCA
v1.0, API v1.0, Component v1.1.1)
				                  MCA io: romio (MCA
v1.0, API v1.0, Component v1.1.1)
				               MCA mpool: gm (MCA v1.0,
API v1.0, Component v1.1.1)
				               MCA mpool: sm (MCA v1.0,
API v1.0, Component v1.1.1)
				                 MCA pml: ob1 (MCA v1.0,
API v1.0, Component v1.1.1)
				                 MCA bml: r2 (MCA v1.0,
API v1.0, Component v1.1.1)
				              MCA rcache: rb (MCA v1.0,
API v1.0, Component v1.1.1)
				                 MCA btl: gm (MCA v1.0,
API v1.0, Component v1.1.1)
				                 MCA btl: self (MCA
v1.0, API v1.0, Component v1.1.1)
				                 MCA btl: sm (MCA v1.0,
API v1.0, Component v1.1.1)
				                 MCA btl: tcp (MCA v1.0,
API v1.0, Component v1.0)
				                MCA topo: unity (MCA
v1.0, API v1.0, Component v1.1.1)
				                 MCA osc: pt2pt (MCA
v1.0, API v1.0, Component v1.0)
				                 MCA gpr: null (MCA
v1.0, API v1.0, Component v1.1.1)
				                 MCA gpr: proxy (MCA
v1.0, API v1.0, Component v1.1.1)
				                 MCA gpr: replica (MCA
v1.0, API v1.0, Component v1.1.1)
				                 MCA iof: proxy (MCA
v1.0, API v1.0, Component v1.1.1)
				                 MCA iof: svc (MCA v1.0,
API v1.0, Component v1.1.1)
				                  MCA ns: proxy (MCA
v1.0, API v1.0, Component v1.1.1)
				                  MCA ns: replica (MCA
v1.0, API v1.0, Component v1.1.1)
				                 MCA oob: tcp (MCA v1.0,
API v1.0, Component v1.0)
				                 MCA ras: dash_host (MCA
v1.0, API v1.0, Component v1.1.1)
				                 MCA ras: hostfile (MCA
v1.0, API v1.0, Component v1.1.1)
				                 MCA ras: localhost (MCA
v1.0, API v1.0, Component v1.1.1)
				                 MCA ras: tm (MCA v1.0,
API v1.0, Component v1.1.1)
				                 MCA rds: hostfile (MCA
v1.0, API v1.0, Component v1.1.1)
				                MCA rds: resfile (MCA
v1.0, API v1.0, Component v1.1.1)
				               MCA rmaps: round_robin
(MCA v1.0, API v1.0, Component v1.1.1)
				                MCA rmgr: proxy (MCA
v1.0, API v1.0, Component v1.1.1)
				                MCA rmgr: urm (MCA v1.0,
API v1.0, Component v1.1.1)
				                 MCA rml: oob (MCA v1.0,
API v1.0, Component v1.1.1)
				                 MCA pls: fork (MCA
v1.0, API v1.0, Component v1.1.1)
				                 MCA pls: rsh (MCA v1.0,
API v1.0, Component v1.1.1)
				                 MCA pls: tm (MCA v1.0,
API v1.0, Component v1.1.1)
				                 MCA sds: env (MCA v1.0,
API v1.0, Component v1.1.1)
				                 MCA sds: pipe (MCA
v1.0, API v1.0, Component v1.1.1)
				                 MCA sds: seed (MCA
v1.0, API v1.0, Component v1.1.1)
				                 MCA sds: singleton (MCA
v1.0, API v1.0, Component v1.1.1)
				Configured as:
				./configure \
				    --prefix=$PREFIX \
				    --enable-mpi-f77 \
				    --enable-mpi-f90 \
				    --enable-mpi-profile \
				    --enable-mpi-cxx \ 
				    --enable-pty-support \
				    --enable-shared \
				    --enable-smp-locks \
				    --enable-io-romio \
				    --with-tm=/usr/local/pbs \
				    --without-xgrid \
				    --without-slurm \
				    --with-gm=/opt/gm 
				
				Darwin
node90.meldrew.clusters.umaine.edu 8.6.0 Darwin Kernel Version 8.6.0:
Tue Mar  7 16:58:48 PST 2006; root:xnu-792.6.70.obj~1/RELEASE_PPC Power
Macintosh powerpc
				node90:~/src/hpl jbronder$
/usr/local/ompi-xl/bin/ompi_info 
				                Open MPI: 1.1.1a1r10670
				   Open MPI SVN revision: r10670
				                Open RTE: 1.1.1a1r10670
				   Open RTE SVN revision: r10670
				                    OPAL: 1.1.1a1r10670
				       OPAL SVN revision: r10670
				                  Prefix:
/usr/local/ompi-xl
				 Configured architecture:
powerpc-apple-darwin8.6.0
				           Configured by: 
				           Configured on: Thu Jul  6
10:05:20 EDT 2006
				          Configure host:
node90.meldrew.clusters.umaine.edu
				                Built by: root
				                Built on: Thu Jul  6
10:37:40 EDT 2006
				              Built host:
node90.meldrew.clusters.umaine.edu 
				              C bindings: yes
				            C++ bindings: yes
				      Fortran77 bindings: yes (lower
case)
				      Fortran90 bindings: yes
				 Fortran90 bindings size: small
				              C compiler:
/opt/ibmcmp/vac/6.0/bin/xlc 
				     C compiler absolute:
/opt/ibmcmp/vac/6.0/bin/xlc
				            C++ compiler:
/opt/ibmcmp/vacpp/6.0/bin/xlc++
				   C++ compiler absolute:
/opt/ibmcmp/vacpp/6.0/bin/xlc++
				      Fortran77 compiler:
/opt/ibmcmp/xlf/8.1/bin/xlf_r 
				  Fortran77 compiler abs:
/opt/ibmcmp/xlf/8.1/bin/xlf_r
				      Fortran90 compiler:
/opt/ibmcmp/xlf/8.1/bin/xlf90_r
				  Fortran90 compiler abs:
/opt/ibmcmp/xlf/8.1/bin/xlf90_r
				             C profiling: yes
				           C++ profiling: yes
				     Fortran77 profiling: yes
				     Fortran90 profiling: yes
				          C++ exceptions: no
				          Thread support: posix (mpi:
no, progress: no)
				  Internal debug support: no 
				     MPI parameter check: runtime
				Memory profiling support: no
				Memory debugging support: no
				         libltdl support: yes
				              MCA memory: darwin (MCA
v1.0, API v1.0, Component v1.1.1)
				           MCA maffinity: first_use (MCA
v1.0, API v1.0, Component v1.1.1)
				               MCA timer: darwin (MCA
v1.0, API v1.0, Component v1.1.1)
				           MCA allocator: basic (MCA
v1.0, API v1.0, Component v1.0)
				           MCA allocator: bucket (MCA
v1.0, API v1.0, Component v1.0)
				          MCA coll: basic (MCA v1.0, API
v1.0, Component v1.1.1)
				                MCA coll: hierarch (MCA
v1.0, API v1.0, Component v1.1.1)
				                MCA coll: self (MCA
v1.0, API v1.0, Component v1.1.1)
				                MCA coll: sm (MCA v1.0,
API v1.0, Component v1.1.1)
				                MCA coll: tuned (MCA
v1.0, API v1.0, Component v1.1.1)
				                  MCA io: romio (MCA
v1.0, API v1.0, Component v1.1.1)
				               MCA mpool: sm (MCA v1.0,
API v1.0, Component v1.1.1)
				               MCA mpool: gm (MCA v1.0,
API v1.0, Component v1.1.1)
				                 MCA pml: ob1 (MCA v1.0,
API v1.0, Component v1.1.1)
				                 MCA bml: r2 (MCA v1.0,
API v1.0, Component v1.1.1)
				              MCA rcache: rb (MCA v1.0,
API v1.0, Component v1.1.1)
				                 MCA btl: self (MCA
v1.0, API v1.0, Component v1.1.1)
				                 MCA btl: sm (MCA v1.0,
API v1.0, Component v1.1.1)
				                 MCA btl: gm (MCA v1.0,
API v1.0, Component v1.1.1)
				                 MCA btl: tcp (MCA v1.0,
API v1.0, Component v1.0)
				                MCA topo: unity (MCA
v1.0, API v1.0, Component v1.1.1)
				                 MCA osc: pt2pt (MCA
v1.0, API v1.0, Component v1.0)
				                 MCA gpr: null (MCA
v1.0, API v1.0, Component v1.1.1)
				                 MCA gpr: proxy (MCA
v1.0, API v1.0, Component v1.1.1)
				                 MCA gpr: replica (MCA
v1.0, API v1.0, Component v1.1.1)
				                 MCA iof: proxy (MCA
v1.0, API v1.0, Component v1.1.1)
				                 MCA iof: svc (MCA v1.0,
API v1.0, Component v1.1.1)
				                  MCA ns: proxy (MCA
v1.0, API v1.0, Component v1.1.1)
				                  MCA ns: replica (MCA
v1.0, API v1.0, Component v1.1.1)
				                 MCA oob: tcp (MCA v1.0,
API v1.0, Component v1.0)
				                 MCA ras: dash_host (MCA
v1.0, API v1.0, Component v1.1.1)
				                 MCA ras: hostfile (MCA
v1.0, API v1.0, Component v1.1.1)
				                 MCA ras: localhost (MCA
v1.0, API v1.0, Component v1.1.1)
				                 MCA ras: tm (MCA v1.0,
API v1.0, Component v1.1.1)
				               MCA rds: hostfile (MCA
v1.0, API v1.0, Component v1.1.1)
				                 MCA rds: resfile (MCA
v1.0, API v1.0, Component v1.1.1)
				               MCA rmaps: round_robin
(MCA v1.0, API v1.0, Component v1.1.1)
				                MCA rmgr: proxy (MCA
v1.0, API v1.0, Component v1.1.1)
				                MCA rmgr: urm (MCA v1.0,
API v1.0, Component v1.1.1)
				                 MCA rml: oob (MCA v1.0,
API v1.0, Component v1.1.1)
				                 MCA pls: fork (MCA
v1.0, API v1.0, Component v1.1.1)
				                 MCA pls: rsh (MCA v1.0,
API v1.0, Component v1.1.1)
				                 MCA pls: tm (MCA v1.0,
API v1.0, Component v1.1.1)
				                 MCA sds: env (MCA v1.0,
API v1.0, Component v1.1.1)
				                 MCA sds: seed (MCA
v1.0, API v1.0, Component v1.1.1)
				                 MCA sds: singleton (MCA
v1.0, API v1.0, Component v1.1.1)
				                 MCA sds: pipe (MCA
v1.0, API v1.0, Component v1.1.1)
				Configured as:
				./configure \
				    --prefix=$PREFIX \
				    --with-tm=/usr/local/pbs/ \
				    --with-gm=/opt/gm \
				    --enable-static \
				    --disable-cxx 
				
				
				On 7/3/06, George Bosilca &lt;
bosilca_at_[hidden] &lt;mailto:bosilca_at_[hidden]&gt; &gt; wrote:
				Bernard, 
				
				A bug in the Open MPI GM driver was
discovered after the 1.1 release.
				A patch for the 1.1 is on the way.
However, I don't know if it will
				be available before the 1.1.1.
Meanwhile, you can use the nightly 
				build version or a fresh check-out from
the SVN repository. Both of 
				them have the GM bug corrected.
				
				   Sorry for the troubles,
				     george.
				
				On Jul 3, 2006, at 12:58 PM, Borenstein,
Bernard S wrote: 
				
				&gt; I've built and sucessfully run the
Nasa Overflow 2.0aa program with 
				&gt; Openmpi 1.0.2.  I'm running on an
opteron linux cluster running SLES 9
				&gt; and GM 2.0.24. I built Openmpi 1.1
with the intel 9 compilers and 
				&gt; try to
				&gt; run Overflow 2.0aa with myrinet, it
get what looks like a data 
				&gt; corruption error and the program dies
quickly.
				&gt; There are no mpi errors at all.If I
run using GIGE (--mca btl
				&gt; self,tcp), 
				&gt; the program runs to competion
correctly.  Here is my ompi_info
				&gt; output : 
				&gt;
				&gt; bsb3227_at_mahler:~/openmpi_1.1/bin&gt;
./ompi_info
				&gt;                 Open MPI: 1.1
				&gt;    Open MPI SVN revision: r10477 
				&gt;                 Open RTE: 1.1
				&gt;    Open RTE SVN revision: r10477 
				&gt;                     OPAL: 1.1
				&gt;        OPAL SVN revision: r10477
				&gt;                   Prefix:
/home/bsb3227/openmpi_1.1
				&gt;  Configured architecture:
x86_64-unknown-linux-gnu
				&gt;            Configured by: bsb3227
				&gt;            Configured on: Fri Jun 30
07:08:54 PDT 2006
				&gt;           Configure host: mahler 
				&gt;                 Built by: bsb3227
				&gt;                 Built on: Fri Jun 30
07:54:46 PDT 2006
				&gt;               Built host: mahler
				&gt;               C bindings: yes
				&gt;             C++ bindings: yes
				&gt;       Fortran77 bindings: yes (all)
				&gt;       Fortran90 bindings: yes 
				&gt;  Fortran90 bindings size: small
				&gt;               C compiler: icc
				&gt;      C compiler absolute:
/opt/intel/cce/9.0.25/bin/icc
				&gt;             C++ compiler: icpc
				&gt;    C++ compiler absolute:
/opt/intel/cce/9.0.25/bin/icpc 
				&gt;       Fortran77 compiler: ifort
				&gt;   Fortran77 compiler abs:
/opt/intel/fce/9.0.25/bin/ifort
				&gt;       Fortran90 compiler:
/opt/intel/fce/9.0.25/bin/ifort
				&gt;   Fortran90 compiler abs:
/opt/intel/fce/9.0.25/bin/ifort 
				&gt;              C profiling: yes
				&gt;            C++ profiling: yes
				&gt;      Fortran77 profiling: yes
				&gt;      Fortran90 profiling: yes
				&gt;           C++ exceptions: no
				&gt;           Thread support: posix (mpi:
no, progress: no) 
				&gt;   Internal debug support: no
				&gt;      MPI parameter check: runtime
				&gt; Memory profiling support: no
				&gt; Memory debugging support: no
				&gt;          libltdl support: yes
				&gt;               MCA memory: ptmalloc2
(MCA v1.0, API v1.0, Component
				&gt; v1.1)
				&gt;            MCA paffinity: linux (MCA
v1.0, API v1.0, Component v1.1)
				&gt;            MCA maffinity: first_use
(MCA v1.0, API v1.0, Component
				&gt; v1.1)
				&gt;            MCA maffinity: libnuma (MCA
v1.0, API v1.0, Component v1.1)
				&gt;                MCA timer: linux (MCA
v1.0, API v1.0, Component v1.1)
				&gt;            MCA allocator: basic (MCA
v1.0, API v1.0, Component v1.0)
				&gt;            MCA allocator: bucket (MCA
v1.0, API v1.0, Component v1.0)
				&gt;                 MCA coll: basic (MCA
v1.0, API v1.0, Component v1.1)
				&gt;                 MCA coll: hierarch
(MCA v1.0, API v1.0, Component
				&gt; v1.1)
				&gt;                 MCA coll: self (MCA
v1.0, API v1.0, Component v1.1)
				&gt;                 MCA coll: sm (MCA
v1.0, API v1.0, Component v1.1)
				&gt;                 MCA coll: tuned (MCA
v1.0, API v1.0, Component v1.1)
				&gt;                   MCA io: romio (MCA
v1.0, API v1.0, Component v1.1)
				&gt;                MCA mpool: sm (MCA
v1.0, API v1.0, Component v1.1)
				&gt;                MCA mpool: gm (MCA
v1.0, API v1.0, Component v1.1)
				&gt;                  MCA pml: ob1 (MCA
v1.0, API v1.0, Component v1.1)
				&gt;                  MCA bml: r2 (MCA
v1.0, API v1.0, Component v1.1)
				&gt;               MCA rcache: rb (MCA
v1.0, API v1.0, Component v1.1)
				&gt;                  MCA btl: self (MCA
v1.0, API v1.0, Component v1.1)
				&gt;                  MCA btl: sm (MCA
v1.0, API v1.0, Component v1.1)
				&gt;                  MCA btl: gm (MCA
v1.0, API v1.0, Component v1.1)
				&gt;                  MCA btl: tcp (MCA
v1.0, API v1.0, Component v1.0)
				&gt;                 MCA topo: unity (MCA
v1.0, API v1.0, Component v1.1)
				&gt;                  MCA osc: pt2pt (MCA
v1.0, API v1.0, Component v1.0)
				&gt;                  MCA gpr: null (MCA
v1.0, API v1.0, Component v1.1)
				&gt;                  MCA gpr: proxy (MCA
v1.0, API v1.0, Component v1.1)
				&gt;                  MCA gpr: replica (MCA
v1.0, API v1.0, Component v1.1)
				&gt;                  MCA iof: proxy (MCA
v1.0, API v1.0, Component v1.1)
				&gt;                  MCA iof: svc (MCA
v1.0, API v1.0, Component v1.1)
				&gt;                   MCA ns: proxy (MCA
v1.0, API v1.0, Component v1.1)
				&gt;                   MCA ns: replica (MCA
v1.0, API v1.0, Component v1.1)
				&gt;                  MCA oob: tcp (MCA
v1.0, API v1.0, Component v1.0)
				&gt;                  MCA ras: dash_host
(MCA v1.0, API v1.0, Component
				&gt; v1.1)
				&gt;                  MCA ras: hostfile
(MCA v1.0, API v1.0, Component
				&gt; v1.1)
				&gt;                  MCA ras: localhost
(MCA v1.0, API v1.0, Component
				&gt; v1.1)
				&gt;                  MCA ras: slurm (MCA
v1.0, API v1.0, Component v1.1)
				&gt;                  MCA ras: tm (MCA
v1.0, API v1.0, Component v1.1)
				&gt;                  MCA rds: hostfile
(MCA v1.0, API v1.0, Component
				&gt; v1.1)
				&gt;                  MCA rds: resfile (MCA
v1.0, API v1.0, Component v1.1)
				&gt;                MCA rmaps: round_robin
(MCA v1.0, API v1.0, Component
				&gt; v1.1)
				&gt;                 MCA rmgr: proxy (MCA
v1.0, API v1.0, Component v1.1)
				&gt;                 MCA rmgr: urm (MCA
v1.0, API v1.0, Component v1.1)
				&gt;                  MCA rml: oob (MCA
v1.0, API v1.0, Component v1.1)
				&gt;                  MCA pls: fork (MCA
v1.0, API v1.0, Component v1.1)
				&gt;                  MCA pls: rsh (MCA
v1.0, API v1.0, Component v1.1)
				&gt;                  MCA pls: slurm (MCA
v1.0, API v1.0, Component v1.1)
				&gt;                  MCA pls: tm (MCA
v1.0, API v1.0, Component v1.1)
				&gt;                  MCA sds: env (MCA
v1.0, API v1.0, Component v1.1)
				
				&gt;                  MCA sds: seed (MCA
v1.0, APIv1.0, Component v1.1) 
				
				
				&gt;                  MCA sds: singleton
(MCA v1.0, API v1.0, Component
				&gt; v1.1)
				
				&gt;                  MCA sds: pipe
(MCAv1.0, API v1.0, Component v1.1) 
				
				&gt;                  MCA sds: slurm (MCA
v1.0, API v1.0, Component v1.1)
				&gt;
				&gt; Here is the ifconfig for one of the
nodes :
				&gt;
				&gt; bsb3227_at_m045:~&gt; /sbin/ifconfig
				&gt; eth0      Link encap:Ethernet  HWaddr
00:50:45:5D:CD:FE 
				&gt;           inet addr:10.241.194.45
Bcast: 10.241.195.255 &lt;<a href="http://10.241.195.255">http://10.241.195.255</a>&gt; 
				&gt; Mask:255.255.254.0
				&gt;           inet6 addr:
fe80::250:45ff:fe5d:cdfe/64 Scope:Link 
				&gt;           UP BROADCAST NOTRAILERS
RUNNING MULTICAST  MTU:1500
				&gt; Metric:1
				&gt;           RX packets:39913407 errors:0
dropped:0 overruns:0 frame:0
				&gt;           TX packets:48794587 errors:0
dropped:0 overruns:0 carrier:0 
				&gt;           collisions:0 txqueuelen:1000
				&gt;           RX bytes:31847343907
(30371.9 Mb)  TX bytes:48231713866
				&gt; (45997.3 Mb)
				&gt;           Interrupt:19
				&gt;
				&gt; eth1      Link encap:Ethernet  HWaddr
00:50:45:5D:CD:FF
				&gt;           inet6 addr:
fe80::250:45ff:fe5d:cdff/64 Scope:Link 
				&gt;           UP BROADCAST MULTICAST
MTU:1500  Metric:1
				&gt;           RX packets:0 errors:0
dropped:0 overruns:0 frame:0
				&gt;           TX packets:0 errors:0
dropped:0 overruns:0 carrier:0
				&gt;           collisions:0 txqueuelen:1000
				&gt;           RX bytes:0 (0.0 b)  TX
bytes:0 (0.0 b)
				&gt;           Interrupt:19
				&gt;
				&gt; lo        Link encap:Local Loopback
				&gt;           inet addr: 127.0.0.1
&lt;<a href="http://127.0.0.1">http://127.0.0.1</a>&gt;   Mask: 255.0.0.0 &lt;<a href="http://255.0.0.0">http://255.0.0.0</a>&gt; 
				&gt;           inet6 addr: ::1/128
Scope:Host
				&gt;           UP LOOPBACK RUNNING
MTU:16436  Metric:1 
				&gt;           RX packets:23141 errors:0
dropped:0 overruns:0 frame:0
				&gt;           TX packets:23141 errors:0
dropped:0 overruns:0 carrier:0 
				&gt;           collisions:0 txqueuelen:0
				&gt;           RX bytes:20145689 (19.2 Mb)
TX bytes:20145689 (19.2 Mb)
				&gt;
				&gt; I hope someone can give me some
guidance on how to debug this problem.
				&gt; Thanx in advance for any help
				&gt; that can be provided.
				&gt;
				&gt; Bernie Borenstein
				&gt; The Boeing Company
				&gt; &lt;config.log.gz&gt;
				&gt;
_______________________________________________
				&gt; users mailing list
				&gt; users_at_[hidden] 
				&gt;
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
				
				&quot;Half of what I say is meaningless; but
I say it so that the other
				half may reach you&quot; 
	
Kahlil Gibran
				
				
	
_______________________________________________
				users mailing list 
				users_at_[hidden]
	
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
				
			
			
			
			_______________________________________________ 
			users mailing list
			users_at_[hidden]
	
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
		
		
		_______________________________________________
		users mailing list
		users_at_[hidden]
		<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> 
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-1593/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1594.php">Justin Bronder: "Re: [OMPI users] Problem with Openmpi 1.1"</a>
<li><strong>Previous message:</strong> <a href="1592.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] debugging with mpirun"</a>
<li><strong>Maybe in reply to:</strong> <a href="1528.php">Borenstein, Bernard S: "[OMPI users] Problem with Openmpi 1.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1594.php">Justin Bronder: "Re: [OMPI users] Problem with Openmpi 1.1"</a>
<li><strong>Reply:</strong> <a href="1594.php">Justin Bronder: "Re: [OMPI users] Problem with Openmpi 1.1"</a>
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
