<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Sep 21 09:26:48 2006" -->
<!-- isoreceived="20060921132648" -->
<!-- sent="Thu, 21 Sep 2006 09:26:16 -0400" -->
<!-- isosent="20060921132616" -->
<!-- name="Benjamin Gaudio" -->
<!-- email="benjamin.gaudio_at_[hidden]" -->
<!-- subject="[OMPI users] BLACS Tester installation errors" -->
<!-- id="45125AB80200005100004051_at_groupwise.wmich.edu" -->
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
<strong>From:</strong> Benjamin Gaudio (<em>benjamin.gaudio_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-09-21 09:26:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1885.php">흆e Sandgren: "Re: [OMPI users] BLACS Tester installation errors"</a>
<li><strong>Previous message:</strong> <a href="1883.php">Renato Golin: "[OMPI users] Boost bindings to MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1885.php">흆e Sandgren: "Re: [OMPI users] BLACS Tester installation errors"</a>
<li><strong>Reply:</strong> <a href="1885.php">흆e Sandgren: "Re: [OMPI users] BLACS Tester installation errors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have installed OpenMPI 1.1.1 for the first time yesterday and am
<br>
now having trouble getting the BLACS Tester to install properly. 
<br>
OpenMPI seemed to build without error, and BLACS also built without
<br>
any apparent errors.  When I tried to install the Blacs tester, one
<br>
of the first lines of output was:
<br>
<p>g77: unrecognized option `-Nx400'
<br>
<p>So, I tried removing it from Bmake.inc so that it read:
<br>
<p>&nbsp;&nbsp;&nbsp;F77NO_OPTFLAGS = 
<br>
<p>which results in several &quot;warnings&quot; and also ends in rather
<br>
uninformative errors.  
<br>
<p>I am very new to MPI / BLACS, so please forgive me if I am
<br>
overlooking something obvious.  
<br>
<p>Here is some system information:
<br>
SUSE 10.1
<br>
g77 fortran compiler (does the same thing with gfortran)
<br>
openmpi 1.1.1
<br>
<p>Attached is the output from both attempts, with the -Nx400 and
<br>
without.
<br>
<p>Benjamin Gaudio
<br>
<p>
<br><hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-1884/blacstester-output.tar.gz">blacstester-output.tar.gz</a>
</ul>
<!-- attachment="blacstester-output.tar.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1885.php">흆e Sandgren: "Re: [OMPI users] BLACS Tester installation errors"</a>
<li><strong>Previous message:</strong> <a href="1883.php">Renato Golin: "[OMPI users] Boost bindings to MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1885.php">흆e Sandgren: "Re: [OMPI users] BLACS Tester installation errors"</a>
<li><strong>Reply:</strong> <a href="1885.php">흆e Sandgren: "Re: [OMPI users] BLACS Tester installation errors"</a>
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
