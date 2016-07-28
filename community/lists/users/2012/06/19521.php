<?
$subject_val = "Re: [OMPI users] Help with buidling MPI(Error: mpi.h not found)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 13 09:35:35 2012" -->
<!-- isoreceived="20120613133535" -->
<!-- sent="Wed, 13 Jun 2012 15:36:38 +0200" -->
<!-- isosent="20120613133638" -->
<!-- name="Shiqing Fan" -->
<!-- email="fan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Help with buidling MPI(Error: mpi.h not found)" -->
<!-- id="4FD89766.3060704_at_hlrs.de" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="DE2CB86A93428A408B1E6BE8E73DCCB40187A8BE_at_CLEOHSMB13.napa.ad.etn.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Help with buidling MPI(Error: mpi.h not found)<br>
<strong>From:</strong> Shiqing Fan (<em>fan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-13 09:36:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19522.php">Ralph Castain: "Re: [OMPI users] An idea about a semi-automatic optimized parallel	I/O with Open MPI"</a>
<li><strong>Previous message:</strong> <a href="19520.php">Nicola J. Calder: "[OMPI users] Unable to configure with f77 bindings"</a>
<li><strong>Maybe in reply to:</strong> <a href="19504.php">VimalMathew_at_[hidden]: "[OMPI users] Help with buidling MPI(Error: mpi.h not found)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19534.php">VimalMathew_at_[hidden]: "Re: [OMPI users] Help with buidling MPI(Error: mpi.h not found)"</a>
<li><strong>Reply:</strong> <a href="19534.php">VimalMathew_at_[hidden]: "Re: [OMPI users] Help with buidling MPI(Error: mpi.h not found)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Vimal,
<br>
<p>I'm not sure how you can uninstall  the other one, may be 'make 
<br>
uninstall' from the source? Or you may also ask in their mailing list.
<br>
<p>Another solution might use the full path for the executables, like 
<br>
&quot;c:\Program Files\OpenMPI_v1.6-win32\bin\mpicc hello.c&quot; or under Cygwin: 
<br>
&quot;/cygdrive/c/Program\ Files/OpenMPI_v1.6-win32/bin/mpicc.exe hello.c&quot;.
<br>
<p>Of course, I suggest to get rid of the other MPI implementation.
<br>
<p>Shiqing
<br>
<p><p>On 2012-06-13 3:17 PM, VimalMathew_at_[hidden] wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Shiqing,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I installed the LAN/MPI implementation first then the Open MPI 
</span><br>
<span class="quotelev1">&gt; implementation.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Could this be the problem? If yes, how do I get rid of the LAN/MPI 
</span><br>
<span class="quotelev1">&gt; implementation?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Vimal
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *From:*Shiqing Fan [mailto:fan_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; *Sent:* Wednesday, June 13, 2012 4:49 AM
</span><br>
<span class="quotelev1">&gt; *To:* Open MPI Users
</span><br>
<span class="quotelev1">&gt; *Cc:* Mathew, Vimal
</span><br>
<span class="quotelev1">&gt; *Subject:* Re: [OMPI users] Help with buidling MPI(Error: mpi.h not found)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Vimal,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The output looks strange. If you use the installer under Cygwin, mpicc 
</span><br>
<span class="quotelev1">&gt; shouldn't try to link with liblammpio.* or any library in 
</span><br>
<span class="quotelev1">&gt; /usr/local/lib. So I guess the mpicc is messed up with some previously 
</span><br>
<span class="quotelev1">&gt; installed MPI implementations. Could you please verify that 'which 
</span><br>
<span class="quotelev1">&gt; mpicc' is the one you installed?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Anyway, here I sent some screen shots that how it should look like 
</span><br>
<span class="quotelev1">&gt; under Cygwin.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1 - run command 'mpicc chello.c'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2 - run command 'mpicc chello.c -o chello'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Shiqing
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 2012-06-12 8:44 PM, VimalMathew_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:VimalMathew_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I ran OpenMPI_v1.6-1_win64.exe.
</span><br>
<span class="quotelev1">&gt;   Now I get this message:
</span><br>
<span class="quotelev1">&gt;          C9995799_at_SOUMIWHP5003567 ~/openmpi-1.6
</span><br>
<span class="quotelev1">&gt;          $ mpicc hello.c -o hello
</span><br>
<span class="quotelev1">&gt;          WARNING: mpicc expected to find liblammpio.* in /usr/local/lib
</span><br>
<span class="quotelev1">&gt;          WARNING: MPI-2 IO support will be disabled
</span><br>
<span class="quotelev1">&gt;          gcc: hello.c: No such file or directory
</span><br>
<span class="quotelev1">&gt;          mpicc: No such file or directory
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Vimal
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From:users-bounces_at_[hidden]  &lt;mailto:users-bounces_at_[hidden]&gt;  [mailto:users-bounces_at_[hidden]] On
</span><br>
<span class="quotelev1">&gt; Behalf Of Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Sent: Tuesday, June 12, 2012 2:30 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Help with buidling MPI(Error: mpi.h not found)
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev1">&gt; Probably easier to just run the Open MPI binary installer.
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev1">&gt; On Jun 12, 2012, at 2:24 PM,&lt;VimalMathew_at_[hidden]&gt;  &lt;mailto:VimalMathew_at_[hidden]&gt;  wrote:
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     So I simply download and run OpenMPI_v1.6-1_win64.exe?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Or is there a way to fix the Fortran compiler?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Vimal
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
<span class="quotelev1">&gt;     -----Original Message-----
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     From:users-bounces_at_[hidden]  &lt;mailto:users-bounces_at_[hidden]&gt;  [mailto:users-bounces_at_[hidden]]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     On Behalf Of Jeff Squyres
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Sent: Tuesday, June 12, 2012 2:20 PM
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     To: Open MPI Users
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Subject: Re: [OMPI users] Help with buidling MPI(Error: mpi.h not
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     found)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     It does not look like you successfully built Open MPI -- it looks like
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Open MPI's configure script aborted because your Fortran compiler
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     wasn't
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     behaving:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     -----
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     checking if Fortran 77 compiler supports COMPLEX*16... yes checking
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     size of Fortran 77 COMPLEX*16... 16 checking alignment of Fortran
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     COMPLEX*16... 8 checking if Fortran 77 compiler supports COMPLEX*32...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     no checking for max Fortran MPI handle index... ( 0x7fffffff&lt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     2147483647 ? 0x7fffffff : 2147483647 ) checking Fortran value for
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; .TRUE.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     logical type... configure: error: Could not determine value of Fortran
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     .TRUE..  Aborting.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     -----
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Anything that happened after that is somewhat irrelevant because Open
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     MPI didn't configure properly.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Looking in config.log, I see why:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     -----
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     configure:44290: checking Fortran value for .TRUE. logical type
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     configure:44386: gcc -DNDEBUG -g -O2 -finline-functions
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     -fno-strict-aliasing -I. -c conftest.c
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     configure:44393: $? = 0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     configure:44403: gfortran  -o conftest conftest.o conftestf.f
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     /usr/lib/gcc/i686-pc-cygwin/4.5.3/../../../../i686-pc-cygwin/bin/ld:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     reopening conftest.exe: Device or resource busy
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     /usr/lib/gcc/i686-pc-cygwin/4.5.3/../../../../i686-pc-cygwin/bin/ld:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     final link failed: Device or resource busy
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     collect2: ld returned 1 exit status
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     configure:44410: $? = 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     configure:44427: error: Could not determine value of Fortran .TRUE..
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Aborting.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     -----
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     All this may be irrelevant, though, because it looks like you're
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     building on Windows.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     In that case, you might well want to just download the OMPI Windows
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     binaries.  I don't know offhand if we support building on Windows with
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     the normal configure / make methodology; we normally use cmake to
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     build from source on Windows.
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
<span class="quotelev1">&gt;       
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     On Jun 12, 2012, at 1:25 PM,&lt;VimalMathew_at_[hidden]&gt;  &lt;mailto:VimalMathew_at_[hidden]&gt;  wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;           
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         I was directed to the OpenMPI website from the Boost Libraries page
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         to
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     install an MPI Installation.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         I've followed all the steps in the installation guide to configure
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         and
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     build MPI. When I try to compile the hello.c program which contains
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     &lt;mpi.h&gt;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         I get an error message saying mpi.h does not exist I've attached the
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         config.log, config.out, make.out , ompi_info all and make-install.out
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     files.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;           
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Any help will be greatly appreciated!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;           
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Vimal Mathew
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;           
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         &lt;openmpi-1.6.7z&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         users mailing list
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         users_at_[hidden]  &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt;     --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Jeff Squyres
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     jsquyres_at_[hidden]  &lt;mailto:jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt;     _______________________________________________
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     users mailing list
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     users_at_[hidden]  &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     _______________________________________________
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     users mailing list
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     users_at_[hidden]  &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]  &lt;mailto:jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]  &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]  &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Shiqing Fan
</span><br>
<span class="quotelev1">&gt; High Performance Computing Center Stuttgart (HLRS)
</span><br>
<span class="quotelev1">&gt; Tel: ++49(0)711-685-87234      Nobelstrasse 19
</span><br>
<span class="quotelev1">&gt; Fax: ++49(0)711-685-65832      70569 Stuttgart
</span><br>
<span class="quotelev1">&gt; <a href="http://www.hlrs.de/organization/people/shiqing-fan/">http://www.hlrs.de/organization/people/shiqing-fan/</a>
</span><br>
<span class="quotelev1">&gt; email:fan_at_[hidden]  &lt;mailto:fan_at_[hidden]&gt;
</span><br>
<p><p><pre>
-- 
---------------------------------------------------------------
Shiqing Fan
High Performance Computing Center Stuttgart (HLRS)
Tel: ++49(0)711-685-87234      Nobelstrasse 19
Fax: ++49(0)711-685-65832      70569 Stuttgart
<a href="http://www.hlrs.de/organization/people/shiqing-fan/">http://www.hlrs.de/organization/people/shiqing-fan/</a>
email: fan_at_[hidden]
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19521/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19522.php">Ralph Castain: "Re: [OMPI users] An idea about a semi-automatic optimized parallel	I/O with Open MPI"</a>
<li><strong>Previous message:</strong> <a href="19520.php">Nicola J. Calder: "[OMPI users] Unable to configure with f77 bindings"</a>
<li><strong>Maybe in reply to:</strong> <a href="19504.php">VimalMathew_at_[hidden]: "[OMPI users] Help with buidling MPI(Error: mpi.h not found)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19534.php">VimalMathew_at_[hidden]: "Re: [OMPI users] Help with buidling MPI(Error: mpi.h not found)"</a>
<li><strong>Reply:</strong> <a href="19534.php">VimalMathew_at_[hidden]: "Re: [OMPI users] Help with buidling MPI(Error: mpi.h not found)"</a>
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
