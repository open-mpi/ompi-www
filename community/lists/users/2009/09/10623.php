<?
$subject_val = "[OMPI users] OpenMPI on OS X - file is not of required architecture";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 11 10:05:36 2009" -->
<!-- isoreceived="20090911140536" -->
<!-- sent="Fri, 11 Sep 2009 10:05:29 -0400" -->
<!-- isosent="20090911140529" -->
<!-- name="Andreas Haselbacher" -->
<!-- email="haselbac_at_[hidden]" -->
<!-- subject="[OMPI users] OpenMPI on OS X - file is not of required architecture" -->
<!-- id="4C10FCED-3DC3-46BE-A730-A6948A5D9F54_at_ufl.edu" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI users] OpenMPI on OS X - file is not of required architecture<br>
<strong>From:</strong> Andreas Haselbacher (<em>haselbac_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-11 10:05:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10624.php">jgans: "Re: [OMPI users] Disable use of Torque at run-time"</a>
<li><strong>Previous message:</strong> <a href="10622.php">Jean Potsam: "[OMPI users] Application hangs when checkpointing application (update)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10625.php">Jeff Squyres: "Re: [OMPI users] OpenMPI on OS X - file is not of required architecture"</a>
<li><strong>Reply:</strong> <a href="10625.php">Jeff Squyres: "Re: [OMPI users] OpenMPI on OS X - file is not of required architecture"</a>
<li><strong>Maybe reply:</strong> <a href="10637.php">Warner Yuen: "Re: [OMPI users] OpenMPI on OS X - file is not of required architecture"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I've built openmpi version 1.3.3 on a MacPro with OS X 10.5.8 and the  
<br>
Intel 10.1.006 Fortran compiler and gcc 4.0.  As far as I can tell,  
<br>
the configure and make commands completed fine. There are some  
<br>
warnings, but it's not clear to me that they are critical - or the  
<br>
explanation for what's not working. After installing, I try to compile  
<br>
a simple F77 hello world code. The output is:
<br>
<p>% mpif77 helloworld_mpi.f -o helloworld_mpi
<br>
ld: warning in /opt/openmpi/lib/libmpi_f77.a, file is not of required  
<br>
architecture
<br>
Undefined symbols:
<br>
&nbsp;&nbsp;&nbsp;&quot;_mpi_init_&quot;, referenced from:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_MAIN__ in ifortIsUNoZ.o
<br>
&nbsp;&nbsp;&nbsp;&quot;_mpi_comm_size_&quot;, referenced from:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_MAIN__ in ifortIsUNoZ.o
<br>
&nbsp;&nbsp;&nbsp;&quot;_mpi_finalize_&quot;, referenced from:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_MAIN__ in ifortIsUNoZ.o
<br>
&nbsp;&nbsp;&nbsp;&quot;_mpi_comm_rank_&quot;, referenced from:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_MAIN__ in ifortIsUNoZ.o
<br>
ld: symbol(s) not found
<br>
<p>I don't know what the warning about the &quot;required architecture&quot; means  
<br>
and cannot find any relevant info in the archives or with google. I'd  
<br>
appreciate any help. More info is below, including the config.log file  
<br>
as an attachment.
<br>
<p>Here's my configure command:
<br>
<p>./configure --prefix=/opt/openmpi --enable-static --disable-shared  
<br>
CC=gcc CFLAGS=-m64 CXX=g++ CXXFLAGS=-m64 F77=ifort FC=ifort FFLAGS=- 
<br>
assume nounderscore FCFLAGS=-assume nounderscore
<br>
<p>The output of the ompi_info --all command is also attached.
<br>
<p>Thanks,
<br>
<p>Andreas
<br>
<p><p><p><p><p><p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10623/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10623/config.log.gz">config.log.gz</a>
</ul>
<!-- attachment="config.log.gz" -->
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10623/03-attachment">attachment</a>
</ul>
<!-- attachment="03-attachment" -->
<hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10623/open_info_all.out.gz">open_info_all.out.gz</a>
</ul>
<!-- attachment="open_info_all.out.gz" -->
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10623/05-attachment">attachment</a>
</ul>
<!-- attachment="05-attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10624.php">jgans: "Re: [OMPI users] Disable use of Torque at run-time"</a>
<li><strong>Previous message:</strong> <a href="10622.php">Jean Potsam: "[OMPI users] Application hangs when checkpointing application (update)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10625.php">Jeff Squyres: "Re: [OMPI users] OpenMPI on OS X - file is not of required architecture"</a>
<li><strong>Reply:</strong> <a href="10625.php">Jeff Squyres: "Re: [OMPI users] OpenMPI on OS X - file is not of required architecture"</a>
<li><strong>Maybe reply:</strong> <a href="10637.php">Warner Yuen: "Re: [OMPI users] OpenMPI on OS X - file is not of required architecture"</a>
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
