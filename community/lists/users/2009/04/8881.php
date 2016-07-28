<?
$subject_val = "[OMPI users] help: seg fault when freeing communicator";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 13 10:01:42 2009" -->
<!-- isoreceived="20090413140142" -->
<!-- sent="Mon, 13 Apr 2009 08:01:32 -0600" -->
<!-- isosent="20090413140132" -->
<!-- name="Graham Mark" -->
<!-- email="gam_at_[hidden]" -->
<!-- subject="[OMPI users] help: seg fault when freeing communicator" -->
<!-- id="4980_1239631302_n3DE1ciX003042_E1C9153C-9E4A-4192-9963-A7EA93EA478E_at_lanl.gov" -->
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
<strong>Subject:</strong> [OMPI users] help: seg fault when freeing communicator<br>
<strong>From:</strong> Graham Mark (<em>gam_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-13 10:01:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8882.php">Francesco Pietra: "Re: [OMPI users] shared libraries issue compiling 1.3.1/intel10.1.022"</a>
<li><strong>Previous message:</strong> <a href="8880.php">Tom Rosmond: "[OMPI users] all2all algorithms"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8901.php">Jeff Squyres: "Re: [OMPI users] help: seg fault when freeing communicator"</a>
<li><strong>Reply:</strong> <a href="8901.php">Jeff Squyres: "Re: [OMPI users] help: seg fault when freeing communicator"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This has me stumped. My code seg faults (sometimes) while
<br>
it's attempting to free a communicator--at least, that's what the
<br>
stack trace indicates, and that's what Totalview also shows.
<br>
<p>This happens when I run the program with 27 processes. If I run with 8,
<br>
the program finishes without error. (The program requires that the  
<br>
number of
<br>
processes be a perfect cube.) It happens on two different machines.
<br>
<p>The program reads input files and creates a 1-D circular MPI topology
<br>
in order to pass input data round robin to all processes. When that is
<br>
done, each process does some computation and writes out a file. Then
<br>
the program finishes. The seg fault occurs when the communicator
<br>
associated with the topoology is supposedly being freed as the program
<br>
ends.
<br>
<p>The openmpi help web page lists information that should be included in
<br>
a help request. I'm attaching all of that that I could find: my
<br>
command to run the program, the stack trace, the outputs of
<br>
'ompi_info', 'limit', 'ibv_devinfo', 'ifconfig', 'uname' and values of  
<br>
my
<br>
PATH and LD_LIBRARY_PATH.
<br>
<p>Thanks for your help.
<br>
<p>Graham Mark
<br>
<p><p><p><p>*****************************************************************************
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
<p><p><p>

<br><p>
<p><p><p>==========================
<br>
<p>Graham Mark
<br>
CCS-3
<br>
Information Sciences
<br>
Los Alamos National Laboratory
<br>
505-667-8147
<br>
<p><p><p><p><hr>
<ul>
<li>application/zip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-8881/openmpi-info.zip">openmpi-info.zip</a>
</ul>
<!-- attachment="openmpi-info.zip" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8882.php">Francesco Pietra: "Re: [OMPI users] shared libraries issue compiling 1.3.1/intel10.1.022"</a>
<li><strong>Previous message:</strong> <a href="8880.php">Tom Rosmond: "[OMPI users] all2all algorithms"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8901.php">Jeff Squyres: "Re: [OMPI users] help: seg fault when freeing communicator"</a>
<li><strong>Reply:</strong> <a href="8901.php">Jeff Squyres: "Re: [OMPI users] help: seg fault when freeing communicator"</a>
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
