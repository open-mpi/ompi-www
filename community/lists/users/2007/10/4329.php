<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Oct 25 15:47:55 2007" -->
<!-- isoreceived="20071025194755" -->
<!-- sent="Thu, 25 Oct 2007 15:46:49 -0400" -->
<!-- isosent="20071025194649" -->
<!-- name="Tony Sheh" -->
<!-- email="sheh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] xcode and openmpi" -->
<!-- id="67F542D5-F1AB-454E-977E-87FC018384BB_at_umich.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="[OMPI users] xcode and openmpi" -->
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
<strong>From:</strong> Tony Sheh (<em>sheh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-25 15:46:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4330.php">42aftab_at_[hidden]: "Re: [OMPI users] Process 0 with different time executing the same code"</a>
<li><strong>Previous message:</strong> <a href="4328.php">jody: "Re: [OMPI users] Process 0 with different time executing the same code"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think i found a solution, and i'll post it here:
<br>
<p>Following ./configure and make all install your open mpi libs and  
<br>
headers should be in /usr/local/lib and /usr/local/include.
<br>
<p>Header Search Paths: /usr/local/include
<br>
Library Search Paths: /usr/local/lib
<br>
<p>add the following (4) frameworks/libraries: libmpi.dylib  
<br>
libmpi_cxx.dylib libopen-pal.dylib and libopen-ret.dylib
<br>
<p>your code should work. Make sure that you recompile previous static  
<br>
libraries with these files or you will get undefined objects... (i  
<br>
think)
<br>
<p>Tony
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4330.php">42aftab_at_[hidden]: "Re: [OMPI users] Process 0 with different time executing the same code"</a>
<li><strong>Previous message:</strong> <a href="4328.php">jody: "Re: [OMPI users] Process 0 with different time executing the same code"</a>
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
