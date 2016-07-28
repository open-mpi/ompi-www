<?
$subject_val = "Re: [OMPI users] import/export issues on Windows";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 16 01:52:00 2010" -->
<!-- isoreceived="20100416055200" -->
<!-- sent="Fri, 16 Apr 2010 07:51:43 +0200" -->
<!-- isosent="20100416055143" -->
<!-- name="Ben.Kuppers_at_[hidden]" -->
<!-- email="Ben.Kuppers_at_[hidden]" -->
<!-- subject="Re: [OMPI users] import/export issues on Windows" -->
<!-- id="FA35C5CD419A6A499BEA69EF175460AA1EF530_at_amsdc1-s-02348.europe.shell.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4BC6F857.8070900_at_hlrs.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] import/export issues on Windows<br>
<strong>From:</strong> <a href="mailto:Ben.Kuppers_at_[hidden]?Subject=Re:%20[OMPI%20users]%20import/export%20issues%20on%20Windows"><em>Ben.Kuppers_at_[hidden]</em></a><br>
<strong>Date:</strong> 2010-04-16 01:51:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12648.php">Mallikarjuna Shastry: "[OMPI users] mpi programs"</a>
<li><strong>Previous message:</strong> <a href="12646.php">max marconi: "Re: [OMPI users] libmpi_f90.so.0 problem"</a>
<li><strong>In reply to:</strong> <a href="12639.php">Shiqing Fan: "Re: [OMPI users] import/export issues on Windows"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12649.php">Shiqing Fan: "Re: [OMPI users] import/export issues on Windows"</a>
<li><strong>Reply:</strong> <a href="12649.php">Shiqing Fan: "Re: [OMPI users] import/export issues on Windows"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Shiqing,
<br>
<p>&nbsp;
<br>
<p>I believe changing OMPI_DECLSPEC to __declspec(dllexport) inside
<br>
functions.h will allow the cxx module to build (and export the function)
<br>
but will break any client using (and thus trying to import) it.
<br>
OMPI_DECLSPEC should only be defined as __declspec(dllexport) while
<br>
compiling the cxx module (say when libmpi_cxx_EXPORTS is defined).
<br>
<p>&nbsp;
<br>
<p>BTW, I also noticed that the Intel compiler has issues with the
<br>
preprocessor definitions for ompi_info &quot;OMPI_CONFIGURE_DATE=\&quot;03:18 PM
<br>
Wed 04/14/2010 \&quot;&quot; and
<br>
<p>&quot;OMPI_BUILD_DATE=\&quot;03:18 PM Wed 04/14/2010 \&quot;&quot;. The quotes around the
<br>
definitions throw it off completely. Is that something that CMake does
<br>
or do you instruct CMake to do this? Both the Intel and Microsoft
<br>
compiler work correctly without them.
<br>
<p>&nbsp;
<br>
<p>Thanks,
<br>
<p>Ben
<br>
<p>&nbsp;
<br>
<p>From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
<br>
Behalf Of Shiqing Fan
<br>
Sent: Thursday, April 15, 2010 1:28 PM
<br>
To: users_at_[hidden]
<br>
Cc: Kuppers, Ben SIEP-PTT/SDRM
<br>
Subject: Re: [OMPI users] import/export issues on Windows
<br>
<p>&nbsp;
<br>
<p><p>Hi,
<br>
<p>It seems Microsoft C++ compiler could recognize what the code wants to
<br>
do, while Intel C++ compiler couldn't. I know a solution for this kind
<br>
of problem, but it involves some code base changes,  I need some time to
<br>
test it. At moment, if you want to use Intel C++ compiler, the dirty
<br>
solution is just changing &quot;OMPI_DECLSPEC&quot; in ompi/mpi/cxx/functions.h to
<br>
&quot;__declspec(dllexport)&quot;. Or you could switch to use Microsoft compiler
<br>
only for this libmpi_cxx project. 
<br>
<p><p>Thanks,
<br>
Shiqing
<br>
<p><p><p><p>On 2010-4-15 9:52 AM, Ben.Kuppers_at_[hidden] wrote: 
<br>
<p>Hello,
<br>
<p>&nbsp;
<br>
<p>When I use 1.4.2rc1 I am able build in Visual Studio 2005 (CMake 2.6.4
<br>
default settings VS2005 x64)but I get the following warning (among
<br>
others):
<br>
<p>&nbsp;
<br>
<p>11&gt;..\..\..\..\..\ompi\mpi\cxx\intercepts.cc(81) : warning C4273:
<br>
'MPI::InitializeIntercepts' : inconsistent dll linkage
<br>
<p>11&gt;        E:\source\openmpi-1.4.1\ompi/mpi/cxx/functions.h(64) : see
<br>
previous definition of 'InitializeIntercepts' 
<br>
<p>&nbsp;
<br>
<p>When I convert the Visual Studio projects to use the Intel 10.1 compiler
<br>
(required for our production environment) this warning becomes an error:
<br>
<p>&nbsp;
<br>
<p>11&gt;E:\source\openmpi-1.4.2rc1\ompi\mpi\cxx\intercepts.cc(80): error: a
<br>
function declared &quot;dllimport&quot; may not be defined
<br>
<p>11&gt;  MPI::InitializeIntercepts()
<br>
<p>&nbsp;
<br>
<p>This issue seems related to
<br>
<a href="http://www.open-mpi.org/community/lists/users/2010/03/12392.php">http://www.open-mpi.org/community/lists/users/2010/03/12392.php</a>.
<br>
<p>&nbsp;
<br>
<p>It appears to me that you are trying to use a single symbol to import
<br>
from the c module and export from cxx module at the same time.
<br>
<p>&nbsp;
<br>
<p>Any help would be appreciated,
<br>
<p>&nbsp;
<br>
<p>Ben
<br>
<p>&nbsp;
<br>
&nbsp;
<br>
_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p><p><p><p><p><p><pre>
-- 
--------------------------------------------------------------
Shiqing Fan                          <a href="http://www.hlrs.de/people/fan">http://www.hlrs.de/people/fan</a>
High Performance Computing           Tel.: +49 711 685 87234
  Center Stuttgart (HLRS)            Fax.: +49 711 685 65832
Address:Allmandring 30               email: fan_at_[hidden]    
70569 Stuttgart
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12647/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12648.php">Mallikarjuna Shastry: "[OMPI users] mpi programs"</a>
<li><strong>Previous message:</strong> <a href="12646.php">max marconi: "Re: [OMPI users] libmpi_f90.so.0 problem"</a>
<li><strong>In reply to:</strong> <a href="12639.php">Shiqing Fan: "Re: [OMPI users] import/export issues on Windows"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12649.php">Shiqing Fan: "Re: [OMPI users] import/export issues on Windows"</a>
<li><strong>Reply:</strong> <a href="12649.php">Shiqing Fan: "Re: [OMPI users] import/export issues on Windows"</a>
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
