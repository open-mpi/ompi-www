<?
$subject_val = "[OMPI users] OpenMpi on a windows Xp tcp network";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Apr 15 04:11:33 2012" -->
<!-- isoreceived="20120415081133" -->
<!-- sent="Sun, 15 Apr 2012 11:11:28 +0300" -->
<!-- isosent="20120415081128" -->
<!-- name="Bradi Rares" -->
<!-- email="bradi.rares_at_[hidden]" -->
<!-- subject="[OMPI users] OpenMpi on a windows Xp tcp network" -->
<!-- id="1639_1334477493_q3F8BTvQ012037_CAO7xhKGuoMF6ivA0vGNGvo22ukhCvyuyJfgrMTY24WVy+bcQrA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] OpenMpi on a windows Xp tcp network<br>
<strong>From:</strong> Bradi Rares (<em>bradi.rares_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-15 04:11:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19009.php">Seyyed Mohtadin Hashemi: "Re: [OMPI users] OpenMPI fails to run with -np larger than 10"</a>
<li><strong>Previous message:</strong> <a href="19007.php">Tim Miller: "Re: [OMPI users] OpenMPI fails to run with -np larger than 10"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19010.php">Shiqing Fan: "Re: [OMPI users] OpenMpi on a windows Xp tcp network"</a>
<li><strong>Reply:</strong> <a href="19010.php">Shiqing Fan: "Re: [OMPI users] OpenMpi on a windows Xp tcp network"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I have 2 windows Xp computers connected through an ethernet network. I have
<br>
installed openMPI using the windows installer
<br>
OpenMPI_v1.5.4-1_win32.exe&lt;<a href="http://www.open-mpi.org/software/ompi/v1.5/downloads/OpenMPI_v1.5.4-1_win32.exe">http://www.open-mpi.org/software/ompi/v1.5/downloads/OpenMPI_v1.5.4-1_win32.exe</a>&gt;on
<br>
every computer. I have set the LD_LIBRARY_PATH variable to &quot;C:\Program
<br>
Files\OpenMPI_v1.5.4-win32\lib&quot; (this is the directory where the
<br>
installation extracted my files)
<br>
and the PATH &quot;C:\Program Files\OpenMPI_v1.5.4-win32\bin&quot;. I have configured
<br>
the 2 computers so that I can launch processes remotely. The command used
<br>
to launch the process is
<br>
*mpirun -H Cooler.lan,mugiwara-4adeb0 -n 2 MPI1.exe
<br>
*where the program simply outputs the rank and the processor name.
<br>
My problem is that the output is not collected to the stdout of the rank 0
<br>
process. On the remote machine I simply see that the process is launched
<br>
and when execution finishes is destroyed. I want to find a solution to this
<br>
, because I have no ideea what could be causing this. Please if you could
<br>
suggest a solution to my problem I would be very thankful.
<br>
The process can be launched locally with success. ethNode1.txt contains the
<br>
ipconfig /all on node 1, ompi_infoNode1.txt contains the result of
<br>
command *ompi_info
<br>
-v ompi full --parsable *and ompi_info.txt the result of ompi_info -all
<br>
command.
<br>
<p>Thank-you in advance.
<br>
<p><p>*****************************************************************************
<br>
**                                                                         **
<br>
** WARNING:  This email contains an attachment of a very suspicious type.  **
<br>
** You are urged NOT to open this attachment unless you are absolutely     **
<br>
** sure it is legitimate.  Opening this attachment may cause irreparable   **
<br>
** damage to your computer and your files.  If you have any questions      **
<br>
** about the validity of this message, PLEASE SEEK HELP BEFORE OPENING IT. **
<br>
**                                                                         **
<br>
** This warning was added by the IU Computer Science Dept. mail scanner.   **
<br>
*****************************************************************************
<br>
<p><p><p><p>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19008/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/zip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19008/ompi_Info.zip">ompi_Info.zip</a>
</ul>
<!-- attachment="ompi_Info.zip" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19009.php">Seyyed Mohtadin Hashemi: "Re: [OMPI users] OpenMPI fails to run with -np larger than 10"</a>
<li><strong>Previous message:</strong> <a href="19007.php">Tim Miller: "Re: [OMPI users] OpenMPI fails to run with -np larger than 10"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19010.php">Shiqing Fan: "Re: [OMPI users] OpenMpi on a windows Xp tcp network"</a>
<li><strong>Reply:</strong> <a href="19010.php">Shiqing Fan: "Re: [OMPI users] OpenMpi on a windows Xp tcp network"</a>
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
