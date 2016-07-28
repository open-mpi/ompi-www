<?
$subject_val = "Re: [OMPI users] Building MPI on Windows";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 13 16:12:47 2012" -->
<!-- isoreceived="20120613201247" -->
<!-- sent="Wed, 13 Jun 2012 16:12:41 -0400" -->
<!-- isosent="20120613201241" -->
<!-- name="VimalMathew_at_[hidden]" -->
<!-- email="VimalMathew_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Building MPI on Windows" -->
<!-- id="DE2CB86A93428A408B1E6BE8E73DCCB4018B0282_at_CLEOHSMB13.napa.ad.etn.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="02a501cd499d$f90240e0$eb06c2a0$_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Building MPI on Windows<br>
<strong>From:</strong> <a href="mailto:VimalMathew_at_[hidden]?Subject=Re:%20[OMPI%20users]%20Building%20MPI%20on%20Windows"><em>VimalMathew_at_[hidden]</em></a><br>
<strong>Date:</strong> 2012-06-13 16:12:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19548.php">Trent Creekmore: "Re: [OMPI users] Building MPI on Windows"</a>
<li><strong>Previous message:</strong> <a href="19546.php">Trent Creekmore: "Re: [OMPI users] Building MPI on Windows"</a>
<li><strong>In reply to:</strong> <a href="19546.php">Trent Creekmore: "Re: [OMPI users] Building MPI on Windows"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19548.php">Trent Creekmore: "Re: [OMPI users] Building MPI on Windows"</a>
<li><strong>Reply:</strong> <a href="19548.php">Trent Creekmore: "Re: [OMPI users] Building MPI on Windows"</a>
<li><strong>Reply:</strong> <a href="19556.php">Shiqing Fan: "Re: [OMPI users] Building MPI on Windows"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I put all the folders (bin, include, etc, lib and share) in the root folder of the project. No success.
<br>
<p>Tried adding all the .h files in include in the Header files folder under the Project in VS. Still no go.
<br>
<p>&nbsp;
<br>
<p>--Vimal 
<br>
<p>&nbsp;
<br>
<p>From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of Trent Creekmore
<br>
Sent: Wednesday, June 13, 2012 3:52 PM
<br>
To: 'Open MPI Users'
<br>
Subject: Re: [OMPI users] Building MPI on Windows
<br>
<p>&nbsp;
<br>
<p>I find the easiest way to know if LIB and DLL function correctly, and avoiding  confusion on correct setup is it just drop them all in the root directory of your project. VS should see them upon load of that project.
<br>
<p>&nbsp;
<br>
<p>From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of VimalMathew_at_[hidden]
<br>
Sent: Wednesday, June 13, 2012 2:47 PM
<br>
To: users_at_[hidden]
<br>
Subject: Re: [OMPI users] Building MPI on Windows
<br>
<p>&nbsp;
<br>
<p>Yes, and then I added the libraries folder in Visual Studio under Project Properties&gt;Linker&gt;General&gt;Additional Library Directories.
<br>
<p>I tried compiling simple &#226;&#128;&#152;Hello World&#226;&#128;&#153;&#226;&#128;&#153; code and I get an error message saying &#226;&#128;&#152;Cannot open &lt;mpi.h&gt;: No such file or directory.
<br>
<p>&nbsp;
<br>
<p>What step am I missing?
<br>
<p>&nbsp;
<br>
<p><pre>
--
Vimal
 
From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of Damien
Sent: Wednesday, June 13, 2012 3:43 PM
To: Open MPI Users
Subject: Re: [OMPI users] Building MPI on Windows
 
Once you've run the installer, you'll have a set of OpenMPI debug and release dlls, libraries to link to and the necessary include files.  If you're installing the 64-bit version, it will end up here by default:
C:\Program Files (x86)\OpenMPI_v1.6-x64
Damien 
On 13/06/2012 1:35 PM, VimalMathew_at_[hidden] wrote: 
What do I do after I run it?
 
--
Vimal
 
From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of Ralph Castain
Sent: Wednesday, June 13, 2012 3:32 PM
To: Open MPI Users
Subject: Re: [OMPI users] Building MPI on Windows
 
I'm not a Windozer, so I can't speak to the port for that platform. However, the conversation here seems strange to me. Have you actually read the instructions on the open-mpi.org web site?
 
Looks pretty simple to me. You download the .exe installer for either 32 or 64 bits, and run it. You don't build OMPI from source - the distro contains everything you need to just run.
 
See:
 
<a href="http://www.open-mpi.org/software/ompi/v1.6/">http://www.open-mpi.org/software/ompi/v1.6/</a>
 
for the software and some Windows notes.
 
 
On Jun 13, 2012, at 1:20 PM, Trent Creekmore wrote:
 
I just gave up and stuck with Unix/Linux.  Eclipse IDE offers a very nice plugin for developing and debugging MPI code named Parallel Tools Platform. Something not available in Visual Studio, except for similar one made by Intel, but I believe you have to use their compiler.
 
You could always run Eclipse remotely from any Windows OS using a Secure Shell client and Xming (A Windows based X Server). That is what I do, and no more wasting time trying to get OMPI trying to run on Windows.
 
From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of VimalMathew_at_[hidden]
Sent: Wednesday, June 13, 2012 2:09 PM
To: users_at_[hidden]; users_at_[hidden]
Subject: Re: [OMPI users] Building MPI on Windows
 
I've tried the Cygwin way.
Been hitting roadblocks for a week now. I've just uninstalled everything and started from scratch again.
--
Vimal
-----Original Message-----
From: users-bounces_at_[hidden] on behalf of Trent Creekmore
Sent: Wed 6/13/2012 2:47 PM
To: 'Open MPI Users'
Subject: Re: [OMPI users] Building MPI on Windows
This may, or may not be helpful, but I have tried the Windows offerings. I have never gotten anything to function was expected. Compiling, or the available binaries. I think they just don't work at all.
My suggestion which I feel would be easier, and less headache way would be to install something like CygWin, which would give you a Unix/Linux like environment running under Windows.
You would only need to compile it in CygWin just like the Linux/Unix docs say to do.
I don't know if anyone else has done it this way or not.
From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of VimalMathew_at_[hidden]
Sent: Wednesday, June 13, 2012 1:32 PM
To: users_at_[hidden]
Subject: [OMPI users] Building MPI on Windows
Hi,
I'm trying to follow the ReadMe file to build OpenMPI on Windows:
Step 1: Untar the contrib/platform/win32/ompi-static.tgz tarball in the root directory of the Open MPI distribution.
I do not have ompi-static.tgz in the mentioned path.
Step 2: Go in the ompi/datatype subdirectory in the Open MPI distribution and copy the following:  
datatype_pack.c   to datatype_pack_checksum.c        
datatype_unpack.c to datatype_unpack_checksum.c
I do not see these files in the mentioned path.
Step 4: Open the Open MPI project (.sln file) from the root directory of the distribution.
I don't have a .sln file anywhere
Help anyone? Shiqing?
Thanks,
Vimal
From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of VimalMathew_at_[hidden]
Sent: Wednesday, June 13, 2012 11:21 AM
To: fan_at_[hidden]
Cc: users_at_[hidden]
Subject: Re: [OMPI users] Help with buidling MPI(Error: mpi.h not found)
I did make uninstall. I also deleted the folders of the other implementation.
I ran ./configure and make all install.
At the end of the make I saw a bunch of errors for the makefiles. I've attached the .log and .out files.
Please tell me if I'm on the right track.
Thanks,
Vimal
From: Shiqing Fan [mailto:fan_at_[hidden]]
Sent: Wednesday, June 13, 2012 9:37 AM
To: Mathew, Vimal
Cc: Open MPI Users
Subject: Re: [OMPI users] Help with buidling MPI(Error: mpi.h not found)
Hi Vimal,
I'm not sure how you can uninstall  the other one, may be 'make uninstall' from the source? Or you may also ask in their mailing list.
Another solution might use the full path for the executables, like &quot;c:\Program Files\OpenMPI_v1.6-win32\bin\mpicc hello.c&quot; or under Cygwin: &quot;/cygdrive/c/Program\ Files/OpenMPI_v1.6-win32/bin/mpicc.exe hello.c&quot;.
Of course, I suggest to get rid of the other MPI implementation.
Shiqing
On 2012-06-13 3:17 PM, VimalMathew_at_[hidden] wrote:
Hi Shiqing,
I installed the LAN/MPI implementation first then the Open MPI implementation.
Could this be the problem? If yes, how do I get rid of the LAN/MPI implementation?
Thanks,
Vimal
From: Shiqing Fan [mailto:fan_at_[hidden]]
Sent: Wednesday, June 13, 2012 4:49 AM
To: Open MPI Users
Cc: Mathew, Vimal
Subject: Re: [OMPI users] Help with buidling MPI(Error: mpi.h not found)
Hi Vimal,
The output looks strange. If you use the installer under Cygwin, mpicc shouldn't try to link with liblammpio.* or any library in /usr/local/lib. So I guess the mpicc is messed up with some previously installed MPI implementations. Could you please verify that 'which mpicc' is the one you installed?
Anyway, here I sent some screen shots that how it should look like under Cygwin.
1 - run command 'mpicc chello.c'
2 - run command 'mpicc chello.c -o chello'
Regards,
Shiqing
 
On 2012-06-12 8:44 PM, VimalMathew_at_[hidden] wrote:
I ran OpenMPI_v1.6-1_win64.exe.
 Now I get this message:
        C9995799_at_SOUMIWHP5003567 ~/openmpi-1.6
        $ mpicc hello.c -o hello
        WARNING: mpicc expected to find liblammpio.* in /usr/local/lib
        WARNING: MPI-2 IO support will be disabled
        gcc: hello.c: No such file or directory
        mpicc: No such file or directory
--
Vimal
-----Original Message-----
From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
Behalf Of Jeff Squyres
Sent: Tuesday, June 12, 2012 2:30 PM
To: Open MPI Users
Subject: Re: [OMPI users] Help with buidling MPI(Error: mpi.h not found)
Probably easier to just run the Open MPI binary installer.
On Jun 12, 2012, at 2:24 PM, &lt;VimalMathew_at_[hidden]&gt; &lt;mailto:VimalMathew_at_[hidden]&gt;  wrote:
        So I simply download and run OpenMPI_v1.6-1_win64.exe?
        Or is there a way to fix the Fortran compiler?
        
        --
        Vimal
        
        
        -----Original Message-----
        From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]]
        On Behalf Of Jeff Squyres
        Sent: Tuesday, June 12, 2012 2:20 PM
        To: Open MPI Users
        Subject: Re: [OMPI users] Help with buidling MPI(Error: mpi.h not
        found)
        
        It does not look like you successfully built Open MPI -- it looks like
        Open MPI's configure script aborted because your Fortran compiler
        wasn't
        behaving:
        
        -----
        checking if Fortran 77 compiler supports COMPLEX*16... yes checking
        size of Fortran 77 COMPLEX*16... 16 checking alignment of Fortran
        COMPLEX*16... 8 checking if Fortran 77 compiler supports COMPLEX*32...
        no checking for max Fortran MPI handle index... ( 0x7fffffff &lt;
        2147483647 ? 0x7fffffff : 2147483647 ) checking Fortran value for
.TRUE.
        logical type... configure: error: Could not determine value of Fortran
        .TRUE..  Aborting.
        -----
        
        Anything that happened after that is somewhat irrelevant because Open
        MPI didn't configure properly.
        
        Looking in config.log, I see why:
        
        -----
        configure:44290: checking Fortran value for .TRUE. logical type
        configure:44386: gcc -DNDEBUG -g -O2 -finline-functions
        -fno-strict-aliasing -I. -c conftest.c
        configure:44393: $? = 0
        configure:44403: gfortran  -o conftest conftest.o conftestf.f
        /usr/lib/gcc/i686-pc-cygwin/4.5.3/../../../../i686-pc-cygwin/bin/ld:
        reopening conftest.exe: Device or resource busy
        
        /usr/lib/gcc/i686-pc-cygwin/4.5.3/../../../../i686-pc-cygwin/bin/ld:
        final link failed: Device or resource busy
        collect2: ld returned 1 exit status
        configure:44410: $? = 1
        configure:44427: error: Could not determine value of Fortran .TRUE..
        Aborting.
        -----
        
        All this may be irrelevant, though, because it looks like you're
        building on Windows.
        
        In that case, you might well want to just download the OMPI Windows
        binaries.  I don't know offhand if we support building on Windows with
        the normal configure / make methodology; we normally use cmake to
        build from source on Windows.
        
        
        
        On Jun 12, 2012, at 1:25 PM, &lt;VimalMathew_at_[hidden]&gt; &lt;mailto:VimalMathew_at_[hidden]&gt;  wrote:
        
                Hi,
                
                I was directed to the OpenMPI website from the Boost Libraries page
                to
        install an MPI Installation.
                I've followed all the steps in the installation guide to configure
                and
        build MPI. When I try to compile the hello.c program which contains
        &lt;mpi.h&gt;.
                I get an error message saying mpi.h does not exist I've attached the
                config.log, config.out, make.out , ompi_info all and make-install.out
        files.
                
                Any help will be greatly appreciated!
                
                Thanks,
                Vimal Mathew
                
                &lt;openmpi-1.6.7z&gt;_______________________________________________
                users mailing list
                users_at_[hidden]
                <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
        
        
        --
        Jeff Squyres
        jsquyres_at_[hidden]
        For corporate legal information go to:
        <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
        
        
        _______________________________________________
        users mailing list
        users_at_[hidden]
        <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
        
        _______________________________________________
        users mailing list
        users_at_[hidden]
        <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
--
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
--
---------------------------------------------------------------
Shiqing Fan
High Performance Computing Center Stuttgart (HLRS)
Tel: ++49(0)711-685-87234      Nobelstrasse 19
Fax: ++49(0)711-685-65832      70569 Stuttgart
<a href="http://www.hlrs.de/organization/people/shiqing-fan/">http://www.hlrs.de/organization/people/shiqing-fan/</a>
email: fan_at_[hidden]
--
---------------------------------------------------------------
Shiqing Fan
High Performance Computing Center Stuttgart (HLRS)
Tel: ++49(0)711-685-87234      Nobelstrasse 19
Fax: ++49(0)711-685-65832      70569 Stuttgart
<a href="http://www.hlrs.de/organization/people/shiqing-fan/">http://www.hlrs.de/organization/people/shiqing-fan/</a>
email: fan_at_[hidden]
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19547/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19548.php">Trent Creekmore: "Re: [OMPI users] Building MPI on Windows"</a>
<li><strong>Previous message:</strong> <a href="19546.php">Trent Creekmore: "Re: [OMPI users] Building MPI on Windows"</a>
<li><strong>In reply to:</strong> <a href="19546.php">Trent Creekmore: "Re: [OMPI users] Building MPI on Windows"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19548.php">Trent Creekmore: "Re: [OMPI users] Building MPI on Windows"</a>
<li><strong>Reply:</strong> <a href="19548.php">Trent Creekmore: "Re: [OMPI users] Building MPI on Windows"</a>
<li><strong>Reply:</strong> <a href="19556.php">Shiqing Fan: "Re: [OMPI users] Building MPI on Windows"</a>
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
