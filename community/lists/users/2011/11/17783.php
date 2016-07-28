<?
$subject_val = "[OMPI users] mpic++-wrapper-data.txt msvc10 Release/Debug 1.5.4";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov 18 15:44:48 2011" -->
<!-- isoreceived="20111118204448" -->
<!-- sent="Fri, 18 Nov 2011 20:44:43 -0000" -->
<!-- isosent="20111118204443" -->
<!-- name="MM" -->
<!-- email="finjulhich_at_[hidden]" -->
<!-- subject="[OMPI users] mpic++-wrapper-data.txt msvc10 Release/Debug 1.5.4" -->
<!-- id="000001cca632$e77ac4a0$b6704de0$_at_com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] mpic++-wrapper-data.txt msvc10 Release/Debug 1.5.4<br>
<strong>From:</strong> MM (<em>finjulhich_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-18 15:44:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17784.php">MM: "[OMPI users] vs2010: MPI_Address() unresolved"</a>
<li><strong>Previous message:</strong> <a href="17782.php">Fran&#231;ois Trahay: "Re: [OMPI users] Memory corruption due to MPI_Status_c2f"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17785.php">Shiqing Fan: "Re: [OMPI users] mpic++-wrapper-data.txt msvc10 Release/Debug 1.5.4"</a>
<li><strong>Reply:</strong> <a href="17785.php">Shiqing Fan: "Re: [OMPI users] mpic++-wrapper-data.txt msvc10 Release/Debug 1.5.4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>&nbsp;
<br>
<p>Compiling boost mpi library uses mpic++ to get the compile flags to pass to
<br>
cl.exe and link libs to pass to the linker.
<br>
<p>In my case:
<br>
<p><span class="quotelev3">&gt;&gt;&gt; mpic++ -showme:compile
</span><br>
<p>/I&quot;C:\Program Files\openmpi\bin/../include&quot; /TP /EHsc /MD
<br>
<p><span class="quotelev3">&gt;&gt;&gt; mpic++ -showme:link
</span><br>
<p>/link /LIBPATH:&quot;C:\Program Files\openmpi\bin/../lib&quot; libmpi_cxx.lib
<br>
libmpi.lib libopen-pal.lib libopen-rte.lib advapi32.lib Ws2_32.lib
<br>
shlwapi.lib
<br>
<p>&nbsp;
<br>
<p>To choose Release build or Debug build, is it possible to use
<br>
mpic++-wrapper-data.txt to specify both options?
<br>
<p>&nbsp;
<br>
<p>Release
<br>
<p>/MD
<br>
<p>libmpi_cxx.lib libmpi.lib libopen-pal.lib libopen-rte.lib advapi32.lib
<br>
Ws2_32.lib shlwapi.lib
<br>
<p>&nbsp;
<br>
<p>Debug
<br>
<p>/MDd
<br>
<p>libmpi_cxxd.lib libmpid.lib libopen-pald.lib libopen-rted.lib advapi32.lib
<br>
Ws2_32.lib shlwapi.lib
<br>
<p>is there a debug version of &quot;advapi32.lib Ws2_32.lib shlwapi.lib&quot;
<br>
<p>&nbsp;
<br>
<p>For now, I will just override that file for Release, build boost mpi,
<br>
override for Debug, build for Debug.
<br>
<p>&nbsp;
<br>
<p>thanks,
<br>
<p>&nbsp;
<br>
<p>MM
<br>
<p><p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17783/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17784.php">MM: "[OMPI users] vs2010: MPI_Address() unresolved"</a>
<li><strong>Previous message:</strong> <a href="17782.php">Fran&#231;ois Trahay: "Re: [OMPI users] Memory corruption due to MPI_Status_c2f"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17785.php">Shiqing Fan: "Re: [OMPI users] mpic++-wrapper-data.txt msvc10 Release/Debug 1.5.4"</a>
<li><strong>Reply:</strong> <a href="17785.php">Shiqing Fan: "Re: [OMPI users] mpic++-wrapper-data.txt msvc10 Release/Debug 1.5.4"</a>
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
