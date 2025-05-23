<?
$subject_val = "[OMPI users]  Building MPI on Windows";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 13 14:32:06 2012" -->
<!-- isoreceived="20120613183206" -->
<!-- sent="Wed, 13 Jun 2012 14:32:00 -0400" -->
<!-- isosent="20120613183200" -->
<!-- name="VimalMathew_at_[hidden]" -->
<!-- email="VimalMathew_at_[hidden]" -->
<!-- subject="[OMPI users]  Building MPI on Windows" -->
<!-- id="DE2CB86A93428A408B1E6BE8E73DCCB40187ACCB_at_CLEOHSMB13.napa.ad.etn.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users]  Building MPI on Windows<br>
<strong>From:</strong> <a href="mailto:VimalMathew_at_[hidden]?Subject=Re:%20[OMPI%20users]%20%20Building%20MPI%20on%20Windows"><em>VimalMathew_at_[hidden]</em></a><br>
<strong>Date:</strong> 2012-06-13 14:32:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19536.php">Trent Creekmore: "Re: [OMPI users] Building MPI on Windows"</a>
<li><strong>Previous message:</strong> <a href="19534.php">VimalMathew_at_[hidden]: "Re: [OMPI users] Help with buidling MPI(Error: mpi.h not found)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19536.php">Trent Creekmore: "Re: [OMPI users] Building MPI on Windows"</a>
<li><strong>Reply:</strong> <a href="19536.php">Trent Creekmore: "Re: [OMPI users] Building MPI on Windows"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi, 
<br>
<p>&nbsp;
<br>
<p>I&#226;&#128;&#153;m trying to follow the ReadMe file to build OpenMPI on Windows:
<br>
<p>&nbsp;
<br>
<p>Step 1: Untar the contrib/platform/win32/ompi-static.tgz tarball in the root directory of the Open MPI distribution.
<br>
<p>I do not have ompi-static.tgz in the mentioned path.
<br>
<p>&nbsp;
<br>
<p>Step 2: Go in the ompi/datatype subdirectory in the Open MPI distribution and copy the following:   
<br>
<p>datatype_pack.c   to datatype_pack_checksum.c         
<br>
<p>datatype_unpack.c to datatype_unpack_checksum.c
<br>
<p>I do not see these files in the mentioned path.
<br>
<p>&nbsp;
<br>
<p>Step 4: Open the Open MPI project (.sln file) from the root directory of the distribution.
<br>
<p>I don&#226;&#128;&#153;t have a .sln file anywhere
<br>
<p>&nbsp;
<br>
<p>Help anyone? Shiqing?
<br>
<p>&nbsp;
<br>
<p>Thanks,
<br>
<p>Vimal
<br>
<p>&nbsp;
<br>
<p>From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of VimalMathew_at_[hidden]
<br>
Sent: Wednesday, June 13, 2012 11:21 AM
<br>
To: fan_at_[hidden]
<br>
Cc: users_at_[hidden]
<br>
Subject: Re: [OMPI users] Help with buidling MPI(Error: mpi.h not found)
<br>
<p>&nbsp;
<br>
<p>I did make uninstall. I also deleted the folders of the other implementation.
<br>
<p>I ran ./configure and make all install.
<br>
<p>At the end of the make I saw a bunch of errors for the makefiles. I&#226;&#128;&#153;ve attached the .log and .out files.
<br>
<p>&nbsp;
<br>
<p>Please tell me if I&#226;&#128;&#153;m on the right track.
<br>
<p>&nbsp;
<br>
<p>Thanks,
<br>
<p>Vimal
<br>
<p>&nbsp;
<br>
<p>From: Shiqing Fan [mailto:fan_at_[hidden]] 
<br>
Sent: Wednesday, June 13, 2012 9:37 AM
<br>
To: Mathew, Vimal
<br>
Cc: Open MPI Users
<br>
Subject: Re: [OMPI users] Help with buidling MPI(Error: mpi.h not found)
<br>
<p>&nbsp;
<br>
<p>Hi Vimal,
<br>
<p>I'm not sure how you can uninstall  the other one, may be 'make uninstall' from the source? Or you may also ask in their mailing list.
<br>
<p>Another solution might use the full path for the executables, like &quot;c:\Program Files\OpenMPI_v1.6-win32\bin\mpicc hello.c&quot; or under Cygwin: &quot;/cygdrive/c/Program\ Files/OpenMPI_v1.6-win32/bin/mpicc.exe hello.c&quot;.
<br>
<p>Of course, I suggest to get rid of the other MPI implementation.
<br>
<p>Shiqing
<br>
<p><p>On 2012-06-13 3:17 PM, VimalMathew_at_[hidden] wrote: 
<br>
<p>Hi Shiqing,
<br>
<p>&nbsp;
<br>
<p>I installed the LAN/MPI implementation first then the Open MPI implementation.
<br>
<p>Could this be the problem? If yes, how do I get rid of the LAN/MPI implementation?
<br>
<p>&nbsp;
<br>
<p>Thanks,
<br>
<p>Vimal
<br>
<p>&nbsp;
<br>
<p>From: Shiqing Fan [mailto:fan_at_[hidden]] 
<br>
Sent: Wednesday, June 13, 2012 4:49 AM
<br>
To: Open MPI Users
<br>
Cc: Mathew, Vimal
<br>
Subject: Re: [OMPI users] Help with buidling MPI(Error: mpi.h not found)
<br>
<p>&nbsp;
<br>
<p>Hi Vimal,
<br>
<p>The output looks strange. If you use the installer under Cygwin, mpicc shouldn't try to link with liblammpio.* or any library in /usr/local/lib. So I guess the mpicc is messed up with some previously installed MPI implementations. Could you please verify that 'which mpicc' is the one you installed?
<br>
<p>Anyway, here I sent some screen shots that how it should look like under Cygwin.
<br>
<p>1 - run command 'mpicc chello.c'
<br>
<p>2 - run command 'mpicc chello.c -o chello'
<br>
<p>Regards,
<br>
Shiqing
<br>
<p><p>&nbsp;&nbsp;
<br>
On 2012-06-12 8:44 PM, VimalMathew_at_[hidden] wrote: 
<br>
<p>I ran OpenMPI_v1.6-1_win64.exe.
<br>
&nbsp;Now I get this message:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C9995799_at_SOUMIWHP5003567 ~/openmpi-1.6
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$ mpicc hello.c -o hello
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;WARNING: mpicc expected to find liblammpio.* in /usr/local/lib
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;WARNING: MPI-2 IO support will be disabled
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;gcc: hello.c: No such file or directory
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpicc: No such file or directory
<br>
<pre>
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
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19535/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19536.php">Trent Creekmore: "Re: [OMPI users] Building MPI on Windows"</a>
<li><strong>Previous message:</strong> <a href="19534.php">VimalMathew_at_[hidden]: "Re: [OMPI users] Help with buidling MPI(Error: mpi.h not found)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19536.php">Trent Creekmore: "Re: [OMPI users] Building MPI on Windows"</a>
<li><strong>Reply:</strong> <a href="19536.php">Trent Creekmore: "Re: [OMPI users] Building MPI on Windows"</a>
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
