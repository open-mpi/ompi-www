<?
$subject_val = "Re: [OMPI users] OpenMPI with cMake on Windows";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 21 06:14:22 2012" -->
<!-- isoreceived="20121221111422" -->
<!-- sent="Fri, 21 Dec 2012 11:14:12 +0000" -->
<!-- isosent="20121221111412" -->
<!-- name="MM" -->
<!-- email="finjulhich_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI with cMake on Windows" -->
<!-- id="CADsB1iDA4aShs0ZALrj9QJVL6R8GNgHP-mZSQNFhbWgz24z+6Q_at_mail.gmail.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="00b501cddd6b$a84a6760$f8df3620$_at_me.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI with cMake on Windows<br>
<strong>From:</strong> MM (<em>finjulhich_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-12-21 06:14:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21030.php">Number Cruncher: "Re: [OMPI users] MPI_Alltoallv performance regression 1.6.0 to 1.6.1"</a>
<li><strong>Previous message:</strong> <a href="21028.php">Siegmar Gross: "[OMPI users] broadcasting basic data items in Java"</a>
<li><strong>In reply to:</strong> <a href="21003.php">Stephen Conley: "[OMPI users] OpenMPI with cMake on Windows"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 18 December 2012 22:04, Stephen Conley &lt;conleysa_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hello,****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ** **
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have installed CMake version 2.8.10.2 and OpenMPI version 1.6.2 on a 64
</span><br>
<span class="quotelev1">&gt; bit Windows 7 computer.  ****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ** **
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OpenMPI is installed in &#147;C:\program files\OpenMPI&#148; and the path has been
</span><br>
<span class="quotelev1">&gt; updated to include the bin subdirectory.****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ** **
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In the cmakelists.txt file, I have: find_package(MPI REQUIRED)****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ** **
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When I run cmake, I receive the following error:****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ** **
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *C:\Users\steve\workspace\Dales\build&gt;cmake ..\src -G &quot;MinGW Makefiles&quot;*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *CMake Error at C:/Program Files (x86)/CMake
</span><br>
<span class="quotelev1">&gt; 2.8/share/cmake-2.8/Modules/FindPack*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *ageHandleStandardArgs.cmake:97 (message):*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *  Could NOT find MPI_C (missing: MPI_C_LIBRARIES)*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *Call Stack (most recent call first):*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *  C:/Program Files (x86)/CMake
</span><br>
<span class="quotelev1">&gt; 2.8/share/cmake-2.8/Modules/FindPackageHandleStan*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *dardArgs.cmake:291 (_FPHSA_FAILURE_MESSAGE)*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *  C:/Program Files (x86)/CMake
</span><br>
<span class="quotelev1">&gt; 2.8/share/cmake-2.8/Modules/FindMPI.cmake:587 (fi*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *nd_package_handle_standard_args)*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *  CMakeLists.txt:9 (find_package)*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; * *
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; * *
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *-- Configuring incomplete, errors occurred!*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; * *
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any ideas as to what I am missing?****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ** **
</span><br>
<span class="quotelev1">&gt;
</span><br>
Try to google for some changes I've made to findmpi.cmake that worked for
<br>
windows a few years ago.
<br>
They have to do with an if test syntax in that file that the cmd.exe
<br>
doesn't accept
<br>
This was 2.8.4 i believe but probably still true now.
<br>
I'll answer with more details in a month time.
<br>
<p>Regards,
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21029/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21030.php">Number Cruncher: "Re: [OMPI users] MPI_Alltoallv performance regression 1.6.0 to 1.6.1"</a>
<li><strong>Previous message:</strong> <a href="21028.php">Siegmar Gross: "[OMPI users] broadcasting basic data items in Java"</a>
<li><strong>In reply to:</strong> <a href="21003.php">Stephen Conley: "[OMPI users] OpenMPI with cMake on Windows"</a>
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
