<?
$subject_val = "[OMPI users] import/export issues on Windows";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 15 03:53:02 2010" -->
<!-- isoreceived="20100415075302" -->
<!-- sent="Thu, 15 Apr 2010 09:52:32 +0200" -->
<!-- isosent="20100415075232" -->
<!-- name="Ben.Kuppers_at_[hidden]" -->
<!-- email="Ben.Kuppers_at_[hidden]" -->
<!-- subject="[OMPI users] import/export issues on Windows" -->
<!-- id="FA35C5CD419A6A499BEA69EF175460AA1EF3DF_at_amsdc1-s-02348.europe.shell.com" -->
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
<strong>Subject:</strong> [OMPI users] import/export issues on Windows<br>
<strong>From:</strong> <a href="mailto:Ben.Kuppers_at_[hidden]?Subject=Re:%20[OMPI%20users]%20import/export%20issues%20on%20Windows"><em>Ben.Kuppers_at_[hidden]</em></a><br>
<strong>Date:</strong> 2010-04-15 03:52:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12637.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Segmentation fault in mca_btl_tcp"</a>
<li><strong>Previous message:</strong> <a href="12635.php">Ake Sandgren: "Re: [OMPI users] Segmentation fault in mca_btl_tcp"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12639.php">Shiqing Fan: "Re: [OMPI users] import/export issues on Windows"</a>
<li><strong>Reply:</strong> <a href="12639.php">Shiqing Fan: "Re: [OMPI users] import/export issues on Windows"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12636/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12637.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Segmentation fault in mca_btl_tcp"</a>
<li><strong>Previous message:</strong> <a href="12635.php">Ake Sandgren: "Re: [OMPI users] Segmentation fault in mca_btl_tcp"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12639.php">Shiqing Fan: "Re: [OMPI users] import/export issues on Windows"</a>
<li><strong>Reply:</strong> <a href="12639.php">Shiqing Fan: "Re: [OMPI users] import/export issues on Windows"</a>
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
