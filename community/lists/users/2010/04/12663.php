<?
$subject_val = "[OMPI users] OS X - Can't find the absoft directory";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 16 19:19:12 2010" -->
<!-- isoreceived="20100416231912" -->
<!-- sent="Fri, 16 Apr 2010 18:18:35 -0500" -->
<!-- isosent="20100416231835" -->
<!-- name="Paul Cizmas" -->
<!-- email="cizmas_at_[hidden]" -->
<!-- subject="[OMPI users] OS X - Can't find the absoft directory" -->
<!-- id="73868DDB-373A-4FAB-A851-5BAB5C409FDA_at_mac.com" -->
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
<strong>Subject:</strong> [OMPI users] OS X - Can't find the absoft directory<br>
<strong>From:</strong> Paul Cizmas (<em>cizmas_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-16 19:18:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12664.php">Ralph Castain: "Re: [OMPI users] Fwd: Open MPI v1.4 cant find default hostfile"</a>
<li><strong>Previous message:</strong> <a href="12662.php">Mario Ogrizek: "Re: [OMPI users] Fwd: Open MPI v1.4 cant find default hostfile"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12666.php">Ricardo Reis: "Re: [OMPI users] OS X - Can't find the absoft directory"</a>
<li><strong>Reply:</strong> <a href="12666.php">Ricardo Reis: "Re: [OMPI users] OS X - Can't find the absoft directory"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello:
<br>
<p>I am trying to install openmpi with Absoft on Mac running OS X  
<br>
10.5.8.  When I do &quot;sudo make all install&quot;, the installation ends with  
<br>
the following message:
<br>
<p>Making all in scripts
<br>
make[4]: Nothing to be done for `all'.
<br>
/bin/sh ../../../libtool   --mode=compile /Applications/Absoft11.0/bin/ 
<br>
f90 -I../../../ompi/include -I../../../ompi/include -p. -I. -I../../../ 
<br>
ompi/mpi/f90  -m64 -lU77 -c -o mpi.lo mpi.f90
<br>
libtool: compile:  /Applications/Absoft11.0/bin/f90 -I../../../ompi/ 
<br>
include -I../../../ompi/include -p. -I. -I../../../ompi/mpi/f90 -m64 - 
<br>
lU77 -c mpi.f90  -o .libs/mpi.o
<br>
Can't find the absoft directory.
<br>
Please set the ABSOFT environment variable and try again.
<br>
make[4]: *** [mpi.lo] Error 1
<br>
make[3]: *** [all-recursive] Error 1
<br>
make[2]: *** [all] Error 2
<br>
make[1]: *** [all-recursive] Error 1
<br>
make: *** [all-recursive] Error 1
<br>
<p>==========================================
<br>
<p>I tried to add in the makefile the following line
<br>
<p>ABSOFT = /Applications/Absoft11.0
<br>
<p>but this did not help.  I wonder if this definition of ABSOFT must be  
<br>
added to another file.  If so, what this file should be?
<br>
<p>Thank you,
<br>
Paul
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12664.php">Ralph Castain: "Re: [OMPI users] Fwd: Open MPI v1.4 cant find default hostfile"</a>
<li><strong>Previous message:</strong> <a href="12662.php">Mario Ogrizek: "Re: [OMPI users] Fwd: Open MPI v1.4 cant find default hostfile"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12666.php">Ricardo Reis: "Re: [OMPI users] OS X - Can't find the absoft directory"</a>
<li><strong>Reply:</strong> <a href="12666.php">Ricardo Reis: "Re: [OMPI users] OS X - Can't find the absoft directory"</a>
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
