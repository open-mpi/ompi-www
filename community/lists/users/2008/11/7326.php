<?
$subject_val = "[OMPI users] Fwd: OpenMPI-1.2.8 issues on 64-bit Itanium platforms (IA64)";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 17 10:03:38 2008" -->
<!-- isoreceived="20081117150338" -->
<!-- sent="Mon, 17 Nov 2008 16:03:29 +0100" -->
<!-- isosent="20081117150329" -->
<!-- name="Ravi Manumachu" -->
<!-- email="manumachu.reddy_at_[hidden]" -->
<!-- subject="[OMPI users] Fwd: OpenMPI-1.2.8 issues on 64-bit Itanium platforms (IA64)" -->
<!-- id="393_1226934218_mAHF3WfU027434_fbf4996d1136f.492195d1_at_ucd.ie" -->
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
<strong>Subject:</strong> [OMPI users] Fwd: OpenMPI-1.2.8 issues on 64-bit Itanium platforms (IA64)<br>
<strong>From:</strong> Ravi Manumachu (<em>manumachu.reddy_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-17 10:03:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7327.php">Sun, Yongqi (E F ES EN 72): "Re: [OMPI users] avoid usage of ssh on local machine"</a>
<li><strong>Previous message:</strong> <a href="7325.php">Jeff Squyres: "Re: [OMPI users] avoid usage of ssh on local machine"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
&nbsp;<BR>Dear Users, Support Engineers,<BR><BR>I am sorry for this extra post. But it has more accurate results in the file 'eresults.txt'.<BR>&nbsp;<BR>I am using OpenMPI-1.2.8 on two sets of machines. The first set has three 64-bit Itanium machines and the second set has three 32-bit i386 machines. The machines in the first set are multicores. All the machines are connected by 1 Gigabit Ethernet. <BR>&nbsp;<BR>My complaint is I am observing large communication times between the machines, i.e., inter-node communications. My comparisions are with MPICH-1.2.7p1. I am attaching communication times for simple Ping experiments. The Ping application is attached in the file 'MPI_ping.c'. However, my real application is parallel matrix-matrix application where I am observing communication times some five times more than the computation times.<BR>&nbsp;<BR>On both the sets of machines, OpenMPI is installed using the simplest configure command, which is "configure --prefix=&lt;...&gt;". Could you please tell me if I should provide any special installation options for efficient communications?<BR>&nbsp;<BR>All the information related to the tests is present in the ZIP file attached.<BR>&nbsp;<BR>The platform information of the machines obtained using "uname -a" is printed below:<BR>ia64$ uname -a<BR>Linux rosebud08 2.6.9-42.EL #1 SMP Wed Jul 12 23:25:09 EDT 2006 ia64 ia64 ia64 GNU/Linux<BR>i386$ uname -a<BR>Linux rosebud04 2.6.9-42.0.2.ELsmp #1 SMP Wed Aug 23 00:17:26 CDT 2006 i686 i686 i386 GNU/Linux<BR>&nbsp;<BR>The compiler used on all these machines is Intel 'icc' 9.1.046. <BR>&nbsp;<BR>The CPU information for the Itanium machines is attached in the text file 'cpuinfo_ia64.txt'.<BR>&nbsp;<BR>The installation information for the machines (ia64, i386) are attached in the files 'config_ia64.log' and 'config_i386.log' respectively.<BR>&nbsp;<BR>The output from the ompi_info command for the machines (ia64, i386) are attached in the files 'ompi_info_ia64.log' and 'ompi_info_i386.log' respectively.<BR>&nbsp;<BR>The experiments results are shown at the end of the mail (also in the text file eresults.txt). I am also presenting below results using MPICH-1.2.7p1, whose inter-node communication times between two ia64 nodes are faster. As you can see, OpenMPI communications are expensive.<BR>&nbsp;<BR>My question is are there any special installation options to use for ia64 platforms? I would be using a mix of ia64 and i386 platforms in the future. Are there any issues that need to be taken care of?<BR>&nbsp;<BR>Thanking you for your cooperation.<BR>&nbsp;<BR>Best regards<BR>Ravi Reddy<BR>School of Computer Science and Informatics<BR>University College Dublin<BR><PRE>
*****************************************************************************
**                                                                         **
** WARNING:  This email contains an attachment of a very suspicious type.  **
** You are urged NOT to open this attachment unless you are absolutely     **
** sure it is legitimate.  Opening this attachment may cause irreparable   **
** damage to your computer and your files.  If you have any questions      **
** about the validity of this message, PLEASE SEEK HELP BEFORE OPENING IT. **
**                                                                         **
** This warning was added by the IU Computer Science Dept. mail scanner.   **
*****************************************************************************

</PRE>

<hr>
<ul>
<li>application/x-zip-compressed attachment: <a href="http://www.open-mpi.org/community/lists/users/att-7326/OpenMPI-1.2.8_IA64.zip">OpenMPI-1.2.8_IA64.zip</a>
</ul>
<!-- attachment="OpenMPI-1.2.8_IA64.zip" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7327.php">Sun, Yongqi (E F ES EN 72): "Re: [OMPI users] avoid usage of ssh on local machine"</a>
<li><strong>Previous message:</strong> <a href="7325.php">Jeff Squyres: "Re: [OMPI users] avoid usage of ssh on local machine"</a>
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
