<?
$subject_val = "[OMPI users] vs2010: MPI_Address() unresolved";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov 18 19:02:24 2011" -->
<!-- isoreceived="20111119000224" -->
<!-- sent="Sat, 19 Nov 2011 00:02:24 -0000" -->
<!-- isosent="20111119000224" -->
<!-- name="MM" -->
<!-- email="finjulhich_at_[hidden]" -->
<!-- subject="[OMPI users] vs2010: MPI_Address() unresolved" -->
<!-- id="000001cca64e$8517ef60$8f47ce20$_at_com" -->
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
<strong>Subject:</strong> [OMPI users] vs2010: MPI_Address() unresolved<br>
<strong>From:</strong> MM (<em>finjulhich_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-18 19:02:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17785.php">Shiqing Fan: "Re: [OMPI users] mpic++-wrapper-data.txt msvc10 Release/Debug 1.5.4"</a>
<li><strong>Previous message:</strong> <a href="17783.php">MM: "[OMPI users] mpic++-wrapper-data.txt msvc10 Release/Debug 1.5.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17786.php">Shiqing Fan: "Re: [OMPI users] vs2010: MPI_Address() unresolved"</a>
<li><strong>Reply:</strong> <a href="17786.php">Shiqing Fan: "Re: [OMPI users] vs2010: MPI_Address() unresolved"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>&nbsp;
<br>
<p>I get this style of errors when trying to link against libmpid.lib
<br>
(compiled with instructions from README.Windows part 1 cmake):
<br>
<p>mylib.lib(myfile.obj): : error LNK2001: unresolved external symbol
<br>
__imp__MPI_Address
<br>
<p>&nbsp;
<br>
<p>I set BUILD_SHARED_LIBS to false, so I generate static libs. I've also
<br>
checked that the /MDd is set and indeed libmpid.lib are built against the
<br>
DLL version of the C++ runtime when I open the solution in vs2010.
<br>
<p>&nbsp;
<br>
<p>I myself link my application against the /MDd as well.
<br>
<p>&nbsp;
<br>
<p>I don't know why it's looking for __impl__MPI_Address  (__impl__ is a prefix
<br>
related to DLLs somehow).
<br>
<p>I gather this MPI_Address() function resides in libmpi.lib and libmpid.lib
<br>
<p>&nbsp;
<br>
<p>PS: I didn't have these link errors when I built against the prebuilt win
<br>
libraries from the website, what are the CMAke flags for those?
<br>
<p>Thanks,
<br>
<p>&nbsp;
<br>
<p>MM
<br>
<p><p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17784/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17785.php">Shiqing Fan: "Re: [OMPI users] mpic++-wrapper-data.txt msvc10 Release/Debug 1.5.4"</a>
<li><strong>Previous message:</strong> <a href="17783.php">MM: "[OMPI users] mpic++-wrapper-data.txt msvc10 Release/Debug 1.5.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17786.php">Shiqing Fan: "Re: [OMPI users] vs2010: MPI_Address() unresolved"</a>
<li><strong>Reply:</strong> <a href="17786.php">Shiqing Fan: "Re: [OMPI users] vs2010: MPI_Address() unresolved"</a>
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
