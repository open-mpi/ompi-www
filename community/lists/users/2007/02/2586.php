<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Feb  2 05:16:58 2007" -->
<!-- isoreceived="20070202101658" -->
<!-- sent="Fri, 2 Feb 2007 10:16:50 +0000 (GMT)" -->
<!-- isosent="20070202101650" -->
<!-- name="Vadivelan Ranjith" -->
<!-- email="achillesvelan_at_[hidden]" -->
<!-- subject="[OMPI users] ERROR: gfortran compiler is not in PATH for driver: mpif90" -->
<!-- id="20070202101650.15533.qmail_at_web7602.mail.in.yahoo.com" -->
<!-- charset="iso-8859-1" -->
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
<strong>From:</strong> Vadivelan Ranjith (<em>achillesvelan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-02-02 05:16:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2587.php">Alex Tumanov: "Re: [OMPI users] [OMPI Users] OpenMPI 1.1.4 over ethernet fails"</a>
<li><strong>Previous message:</strong> <a href="2585.php">Bert Wesarg: "Re: [OMPI users] Suggestion: adding OMPI_ versions macros in mpi.h"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2589.php">George Bosilca: "Re: [OMPI users] ERROR: gfortran compiler is not in PATH for driver: mpif90"</a>
<li><strong>Reply:</strong> <a href="2589.php">George Bosilca: "Re: [OMPI users] ERROR: gfortran compiler is not in PATH for driver: mpif90"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi All
<br>
I used mpich2-1.0.3 to compile our code. Our code compiled fine. But when I try to test our code in intel mpi, It gave the following error
<br>
<p>ERROR: gfortran compiler is not in PATH for driver: mpif90
<br>
<p>my .bashrc having following path
<br>
source /opt/intel/fc/9.1.037/bin/ifortvars.sh
<br>
source /opt/intel/mpi/3.0/bin32/mpivars.sh
<br>
export PATH=/opt/intel/mpi/3.0/bin32:$PATH
<br>
<p>Then i changed the path to 
<br>
#export PATH=/opt/ofed1.1/mpi/intel/mvapich-0.9.7-mlx2.20/bin:$PATH
<br>
#export LD_LIBRARY_PATH=/opt/ofed1.1/mpi/intel/mpvapich-0.9.7-mlx2.20/lib/shared:$LD_LIBRARY_PATH
<br>
<p>Now i got different error while compiling our code
<br>
<p>ld: skipping incompatible ///opt/ofed1.1/mpi/intel/mvapich-0.9.7-mlx2.2.0/lib/libmpichf90.a when searching for -lmpichf90
<br>
ld: cannot find -lmpichf90
<br>
<p>I dont know what is the error mean. Our code is working fine with opensource mpich.
<br>
Can anyone please help me to compile our code. 
<br>
<p>Advance Thanks
<br>
Velan
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
---------------------------------
<br>
&nbsp;Here&#146;s a new way to find what you're looking for - Yahoo! Answers 
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-2586/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2587.php">Alex Tumanov: "Re: [OMPI users] [OMPI Users] OpenMPI 1.1.4 over ethernet fails"</a>
<li><strong>Previous message:</strong> <a href="2585.php">Bert Wesarg: "Re: [OMPI users] Suggestion: adding OMPI_ versions macros in mpi.h"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2589.php">George Bosilca: "Re: [OMPI users] ERROR: gfortran compiler is not in PATH for driver: mpif90"</a>
<li><strong>Reply:</strong> <a href="2589.php">George Bosilca: "Re: [OMPI users] ERROR: gfortran compiler is not in PATH for driver: mpif90"</a>
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
