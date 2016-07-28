<?
$subject_val = "[OMPI users] compilation application with openmpi question";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May  1 11:11:30 2009" -->
<!-- isoreceived="20090501151130" -->
<!-- sent="Fri, 01 May 2009 11:07:57 -0400" -->
<!-- isosent="20090501150757" -->
<!-- name="David Wong" -->
<!-- email="wong.david-c_at_[hidden]" -->
<!-- subject="[OMPI users] compilation application with openmpi question" -->
<!-- id="49FB104D.1010803_at_epa.gov" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] compilation application with openmpi question<br>
<strong>From:</strong> David Wong (<em>wong.david-c_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-01 11:07:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9157.php">Ralph Castain: "Re: [OMPI users] compilation application with openmpi question"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/04/9155.php">Eugene Loh: "Re: [OMPI users] MPI processes hang when using OpenMPI 1.3.2 and Gcc-4.4.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9157.php">Ralph Castain: "Re: [OMPI users] compilation application with openmpi question"</a>
<li><strong>Reply:</strong> <a href="9157.php">Ralph Castain: "Re: [OMPI users] compilation application with openmpi question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>&nbsp;&nbsp;&nbsp;I have installed openmpi on my machine and tested with some simple 
<br>
programs such as ring and fpi. Everything works. When I tried to compile 
<br>
my application, I got the following:
<br>
<p>/work/wdx/ptmp/openmpi/openmpi-1.3.2/lib/libotf.a(OTF_File.o): In 
<br>
function `OTF_File_open_zlevel':
<br>
OTF_File.c:(.text+0x5a2): undefined reference to `inflateInit_'
<br>
OTF_File.c:(.text+0x762): undefined reference to `deflateInit_'
<br>
/work/wdx/ptmp/openmpi/openmpi-1.3.2/lib/libotf.a(OTF_File.o): In 
<br>
function `OTF_File_seek':
<br>
OTF_File.c:(.text+0x1172): undefined reference to `inflateEnd'
<br>
OTF_File.c:(.text+0x11a2): undefined reference to `inflateInit_'
<br>
OTF_File.c:(.text+0x11c2): undefined reference to `inflateSync'
<br>
/work/wdx/ptmp/openmpi/openmpi-1.3.2/lib/libotf.a(OTF_File.o): In 
<br>
function `OTF_File_read':
<br>
OTF_File.c:(.text+0x1322): undefined reference to `inflate'
<br>
/work/wdx/ptmp/openmpi/openmpi-1.3.2/lib/libotf.a(OTF_File.o): In 
<br>
function `OTF_File_write':
<br>
OTF_File.c:(.text+0x1622): undefined reference to `deflate'
<br>
OTF_File.c:(.text+0x1772): undefined reference to `deflate'
<br>
/work/wdx/ptmp/openmpi/openmpi-1.3.2/lib/libotf.a(OTF_File.o): In 
<br>
function `OTF_File_close':
<br>
OTF_File.c:(.text+0x19d2): undefined reference to `inflateEnd'
<br>
OTF_File.c:(.text+0x1bc2): undefined reference to `deflate'
<br>
OTF_File.c:(.text+0x1c82): undefined reference to `deflateEnd'
<br>
make: *** [CCTM_e1a_Linux2_i686intel] Error 1
<br>
<p>Am I missing something in the openmpi building process? Please advise. 
<br>
Your help is greatly appreciated.
<br>
<p>Thanks,
<br>
David
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9157.php">Ralph Castain: "Re: [OMPI users] compilation application with openmpi question"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/04/9155.php">Eugene Loh: "Re: [OMPI users] MPI processes hang when using OpenMPI 1.3.2 and Gcc-4.4.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9157.php">Ralph Castain: "Re: [OMPI users] compilation application with openmpi question"</a>
<li><strong>Reply:</strong> <a href="9157.php">Ralph Castain: "Re: [OMPI users] compilation application with openmpi question"</a>
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
