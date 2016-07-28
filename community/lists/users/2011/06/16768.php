<?
$subject_val = "Re: [OMPI users] Building OpenMPI v. 1.4.3 in VS2008";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 27 04:33:03 2011" -->
<!-- isoreceived="20110627083303" -->
<!-- sent="Mon, 27 Jun 2011 10:33:07 +0200" -->
<!-- isosent="20110627083307" -->
<!-- name="Shiqing Fan" -->
<!-- email="fan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Building OpenMPI v. 1.4.3 in VS2008" -->
<!-- id="4E084043.80306_at_hlrs.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CCC13BC82DE1884E80B95641984EFFA71A323A68_at_ex2a.awr.local" -->
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
<strong>Subject:</strong> Re: [OMPI users] Building OpenMPI v. 1.4.3 in VS2008<br>
<strong>From:</strong> Shiqing Fan (<em>fan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-06-27 04:33:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16769.php">Ning Li: "[OMPI users] OpenMPI with NAG compiler and gcc 4.6"</a>
<li><strong>Previous message:</strong> <a href="16767.php">Thorsten Schuett: "Re: [OMPI users] Problems on large clusters"</a>
<li><strong>In reply to:</strong> <a href="16758.php">Alan Nichols: "Re: [OMPI users] Building OpenMPI v. 1.4.3 in VS2008"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Alan,
<br>
<p><p><span class="quotelev1">&gt; Thanks Shiqing,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It turns out that I was able to get the build to work in VS2008, by 
</span><br>
<span class="quotelev1">&gt; stepping back to CMake 2.6 to build it.  Not sure why that did the 
</span><br>
<span class="quotelev1">&gt; trick but I'm not complaining...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Which version did you use before?
<br>
<p><span class="quotelev1">&gt; Another question:  Is it possible to run an OpenMPI-based executable 
</span><br>
<span class="quotelev1">&gt; on a single process, without invoking mpiexec?  Say for example that I 
</span><br>
<span class="quotelev1">&gt; compiled a simple &quot;Hello world&quot; program such as 
</span><br>
<span class="quotelev1">&gt; src/examples/hello_cxx.cc that calls MPI_Init(...).  I'd like to start 
</span><br>
<span class="quotelev1">&gt; it up (as a serial process) by just calling it from the command line, 
</span><br>
<span class="quotelev1">&gt; without reference to mpiexec.  Can this be done?  If so, could you 
</span><br>
<span class="quotelev1">&gt; provide an example syntax?  I'm used to doing this with MPICH2, where 
</span><br>
<span class="quotelev1">&gt; it works with no problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Yes, just run your compiled hello_cxx.exe in the command line prompt, 
<br>
nothing special.
<br>
<p><p>Regards,
<br>
Shiqing
<br>
<p><span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Alan Nichols
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; AWR - STAAR
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 11520 N. Port Washington Rd.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Mequon, WI 53092
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; P: 1.262.240.0291 x 103
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; F: 1.262.240.0294
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; E: anichols_at_[hidden] &lt;mailto:anichols_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.awrcorp.com">http://www.awrcorp.com</a> &lt;<a href="http://www.awrcorp.com/">http://www.awrcorp.com/</a>&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *From:*Shiqing Fan [mailto:fan_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; *Sent:* Tuesday, June 21, 2011 3:10 AM
</span><br>
<span class="quotelev1">&gt; *To:* Alan Nichols
</span><br>
<span class="quotelev1">&gt; *Cc:* Open MPI Users
</span><br>
<span class="quotelev1">&gt; *Subject:* Re: [OMPI users] Building OpenMPI v. 1.4.3 in VS2008
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Alan,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I was able to test it again on a machine that has a VS2008 installed. 
</span><br>
<span class="quotelev1">&gt; But everything worked just fine for me. I looked into the generated 
</span><br>
<span class="quotelev1">&gt; config file(build_dir/opal/include/opal_config.h), and the CMake build 
</span><br>
<span class="quotelev1">&gt; system didn't find stdint.h, but it still compiled.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So it was probably some other issues on your platform. It would be 
</span><br>
<span class="quotelev1">&gt; very helpful for me to figure out the problem, if you can provide more 
</span><br>
<span class="quotelev1">&gt; information, e.g. configure log, compilation error messages and so on.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Shiqing
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 2011-06-10 8:34 PM, Alan Nichols wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Shiquing,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OK I'll give this a try... however, I realized after some Google 
</span><br>
<span class="quotelev1">&gt; searching in the aftermath of my previous attempt to build on VS2008 
</span><br>
<span class="quotelev1">&gt; that the file that I'm missing on that platform is shipped with VS2010.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So I suspect that building on VS2010 will go smoothly as you said. My 
</span><br>
<span class="quotelev1">&gt; problem is that my current effort is part of a much larger project 
</span><br>
<span class="quotelev1">&gt; that is being built on VS2008. On the one hand I don't want at all to 
</span><br>
<span class="quotelev1">&gt; shift that larger code base from VS2008 to VS2010 (and fight the 
</span><br>
<span class="quotelev1">&gt; numerous problems that always follow an upheaval of that sort); on the 
</span><br>
<span class="quotelev1">&gt; other hand I'm dubious about trying to build my parallel support 
</span><br>
<span class="quotelev1">&gt; library on VS2010 and the rest of the code  on VS2008.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is there a way to do what I really want to do, which is build the 
</span><br>
<span class="quotelev1">&gt; openmpi source on VS2008?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Alan Nichols
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; AWR - STAAR
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 11520 N. Port Washington Rd.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Mequon, WI 53092
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; P: 1.262.240.0291 x 103
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; F: 1.262.240.0294
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; E: anichols_at_[hidden] &lt;mailto:anichols_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.awrcorp.com">http://www.awrcorp.com</a> &lt;<a href="http://www.awrcorp.com/">http://www.awrcorp.com/</a>&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *From:*Shiqing Fan [mailto:fan_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; *Sent:* Thursday, June 09, 2011 6:43 PM
</span><br>
<span class="quotelev1">&gt; *To:* Open MPI Users
</span><br>
<span class="quotelev1">&gt; *Cc:* Alan Nichols
</span><br>
<span class="quotelev1">&gt; *Subject:* Re: [OMPI users] Building OpenMPI v. 1.4.3 in VS2008
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Alan,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It looks like a problem of using a wrong generator in CMake GUI. I 
</span><br>
<span class="quotelev1">&gt; double tested a fresh new downloaded 1.4.3 on my win7 machine with 
</span><br>
<span class="quotelev1">&gt; VS2010, everything worked well.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please check:
</span><br>
<span class="quotelev1">&gt; 1.  a proper CMake generator is used.
</span><br>
<span class="quotelev1">&gt; 2.  the CMAKE_BUILD_TYPE in CMake GUI and the build type in VS are 
</span><br>
<span class="quotelev1">&gt; both Release
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If the error still happens, please provide me the file name and  line 
</span><br>
<span class="quotelev1">&gt; number where triggers the error when compiling it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Shiqing
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 2011-06-07 5:37 PM, Alan Nichols wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm currently trying to build OpenMPI v. 1.4.3 from source, in 
</span><br>
<span class="quotelev1">&gt; VS2008.  Platform is Win7, SP1 installed ( I realize that this is 
</span><br>
<span class="quotelev1">&gt; possibly not an ideal approach as v. 1.5.3 has installers for Windows 
</span><br>
<span class="quotelev1">&gt; binaries.  However for compatibility with other programs I need to use 
</span><br>
<span class="quotelev1">&gt; v. 1.4.3 if at all possible;  also as I have many other libraries 
</span><br>
<span class="quotelev1">&gt; build under VS2008, I need to use the VS2008 compiler if at all possible).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Following the README.WINDOWS file I found, I used CMake to build a 
</span><br>
<span class="quotelev1">&gt; Windows .sln file.  I accepted the default CMake settings, with the 
</span><br>
<span class="quotelev1">&gt; exception that I only created a Release build of OpenMPI.  Upon my 
</span><br>
<span class="quotelev1">&gt; first attempt to build the solution, I got an error about a missing 
</span><br>
<span class="quotelev1">&gt; file stdint.h.  I was able to fix this by including the stdint.h from 
</span><br>
<span class="quotelev1">&gt; VS2010.  However I now get new errors referencing
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; __attribute__((__always_inline__))
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; __asm____volatile__(&quot;&quot;: : :&quot;memory&quot;)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; These look to me like linux-specific problems -- is it even possible 
</span><br>
<span class="quotelev1">&gt; to do what I'm attempting, or are the code bases and compiler 
</span><br>
<span class="quotelev1">&gt; fundamentally at odds here?  If it is possible can you explain where 
</span><br>
<span class="quotelev1">&gt; my error lies?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for your help,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Alan Nichols
</span><br>
<span class="quotelev1">&gt;
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16768/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16769.php">Ning Li: "[OMPI users] OpenMPI with NAG compiler and gcc 4.6"</a>
<li><strong>Previous message:</strong> <a href="16767.php">Thorsten Schuett: "Re: [OMPI users] Problems on large clusters"</a>
<li><strong>In reply to:</strong> <a href="16758.php">Alan Nichols: "Re: [OMPI users] Building OpenMPI v. 1.4.3 in VS2008"</a>
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
