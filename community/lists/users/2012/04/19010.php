<?
$subject_val = "Re: [OMPI users] OpenMpi on a windows Xp tcp network";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 16 04:45:44 2012" -->
<!-- isoreceived="20120416084544" -->
<!-- sent="Mon, 16 Apr 2012 10:45:37 +0200" -->
<!-- isosent="20120416084537" -->
<!-- name="Shiqing Fan" -->
<!-- email="fan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMpi on a windows Xp tcp network" -->
<!-- id="4F8BDC31.2060809_at_hlrs.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1639_1334477493_q3F8BTvQ012037_CAO7xhKGuoMF6ivA0vGNGvo22ukhCvyuyJfgrMTY24WVy+bcQrA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMpi on a windows Xp tcp network<br>
<strong>From:</strong> Shiqing Fan (<em>fan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-16 04:45:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19011.php">Shiqing Fan: "Re: [OMPI users] configuration of openmpi-1.5.4 with visual studio"</a>
<li><strong>Previous message:</strong> <a href="19009.php">Seyyed Mohtadin Hashemi: "Re: [OMPI users] OpenMPI fails to run with -np larger than 10"</a>
<li><strong>In reply to:</strong> <a href="19008.php">Bradi Rares: "[OMPI users] OpenMpi on a windows Xp tcp network"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Bradi,
<br>
<p>Yes, as you are on an XP machine, the io forwarding is not working for 
<br>
Open MPI. So you won't see the remote output from the local command 
<br>
windows. The only way is to direct the output into a file, for example: 
<br>
mpirun -n 2 app.exe &gt; output.txt . This will generate the output file on 
<br>
remote computer under the same path where you run on local computer.
<br>
<p>Regards,
<br>
Shiqing
<br>
<p>On 2012-04-15 10:11 AM, Bradi Rares wrote:
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have 2 windows Xp computers connected through an ethernet network. I 
</span><br>
<span class="quotelev1">&gt; have installed openMPI using the windows installer 
</span><br>
<span class="quotelev1">&gt; OpenMPI_v1.5.4-1_win32.exe 
</span><br>
<span class="quotelev1">&gt; &lt;<a href="http://www.open-mpi.org/software/ompi/v1.5/downloads/OpenMPI_v1.5.4-1_win32.exe">http://www.open-mpi.org/software/ompi/v1.5/downloads/OpenMPI_v1.5.4-1_win32.exe</a>&gt; 
</span><br>
<span class="quotelev1">&gt; on every computer. I have set the LD_LIBRARY_PATH variable to 
</span><br>
<span class="quotelev1">&gt; &quot;C:\Program Files\OpenMPI_v1.5.4-win32\lib&quot; (this is the directory 
</span><br>
<span class="quotelev1">&gt; where the installation extracted my files)
</span><br>
<span class="quotelev1">&gt; and the PATH &quot;C:\Program Files\OpenMPI_v1.5.4-win32\bin&quot;. I have 
</span><br>
<span class="quotelev1">&gt; configured the 2 computers so that I can launch processes remotely. 
</span><br>
<span class="quotelev1">&gt; The command used to launch the process is
</span><br>
<span class="quotelev1">&gt; *mpirun -H Cooler.lan,mugiwara-4adeb0 -n 2 MPI1.exe
</span><br>
<span class="quotelev1">&gt; *where the program simply outputs the rank and the processor name.
</span><br>
<span class="quotelev1">&gt; My problem is that the output is not collected to the stdout of the 
</span><br>
<span class="quotelev1">&gt; rank 0 process. On the remote machine I simply see that the process is 
</span><br>
<span class="quotelev1">&gt; launched and when execution finishes is destroyed. I want to find a 
</span><br>
<span class="quotelev1">&gt; solution to this , because I have no ideea what could be causing this. 
</span><br>
<span class="quotelev1">&gt; Please if you could suggest a solution to my problem I would be very 
</span><br>
<span class="quotelev1">&gt; thankful.
</span><br>
<span class="quotelev1">&gt; The process can be launched locally with success. ethNode1.txt 
</span><br>
<span class="quotelev1">&gt; contains the ipconfig /all on node 1, ompi_infoNode1.txt contains the 
</span><br>
<span class="quotelev1">&gt; result of command *ompi_info -v ompi full --parsable *and 
</span><br>
<span class="quotelev1">&gt; ompi_info.txt the result of ompi_info -all command.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank-you in advance.
</span><br>
<span class="quotelev1">&gt; *****************************************************************************
</span><br>
<span class="quotelev1">&gt; **                                                                         **
</span><br>
<span class="quotelev1">&gt; ** WARNING:  This email contains an attachment of a very suspicious type.  **
</span><br>
<span class="quotelev1">&gt; ** You are urged NOT to open this attachment unless you are absolutely     **
</span><br>
<span class="quotelev1">&gt; ** sure it is legitimate.  Opening this attachment may cause irreparable   **
</span><br>
<span class="quotelev1">&gt; ** damage to your computer and your files.  If you have any questions      **
</span><br>
<span class="quotelev1">&gt; ** about the validity of this message, PLEASE SEEK HELP BEFORE OPENING IT. **
</span><br>
<span class="quotelev1">&gt; **                                                                         **
</span><br>
<span class="quotelev1">&gt; ** This warning was added by the IU Computer Science Dept. mail scanner.   **
</span><br>
<span class="quotelev1">&gt; *****************************************************************************
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
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19010/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19011.php">Shiqing Fan: "Re: [OMPI users] configuration of openmpi-1.5.4 with visual studio"</a>
<li><strong>Previous message:</strong> <a href="19009.php">Seyyed Mohtadin Hashemi: "Re: [OMPI users] OpenMPI fails to run with -np larger than 10"</a>
<li><strong>In reply to:</strong> <a href="19008.php">Bradi Rares: "[OMPI users] OpenMpi on a windows Xp tcp network"</a>
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
