<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Nov 28 01:26:32 2005" -->
<!-- isoreceived="20051128062632" -->
<!-- sent="Mon, 28 Nov 2005 01:26:29 -0500 (Eastern Standard Time)" -->
<!-- isosent="20051128062629" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="FORTRAN TRUE" -->
<!-- id="Pine.WNT.4.63.0511272314460.3552_at_bosilca" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-11-28 01:26:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0554.php">Rainer Keller: "Re:  FORTRAN TRUE"</a>
<li><strong>Previous message:</strong> <a href="0552.php">Jeff Squyres: "Re:  [O-MPI svn-full] svn:open-mpi r8262 - trunk/opal/runtime"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0554.php">Rainer Keller: "Re:  FORTRAN TRUE"</a>
<li><strong>Reply:</strong> <a href="0554.php">Rainer Keller: "Re:  FORTRAN TRUE"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The latest set of changes for the detection of the compiler TRUE value 
<br>
seems to work fine for g77 but not for the newest GNU fortran compiler 
<br>
gfortran. Digging a little bit into the gfortran mailing list, I found a 
<br>
thread about this issue (quite recent only few months old). After debating 
<br>
over the Fortran language and GNU point of view, they decided that the 
<br>
default conversion between INTEGER and LOGICAL is a bad idea (even if it's 
<br>
supported by other compilers). Here is the link to the full discussion on 
<br>
the gfortran ML (<a href="http://gcc.gnu.org/ml/fortran/2005-05/msg00325.html">http://gcc.gnu.org/ml/fortran/2005-05/msg00325.html</a>).
<br>
<p>This implicit conversion (LOGICAL to INTEGER) is used on the patch when 
<br>
write use the 'I5' to print out the value of the LOGICAL as an int.
<br>
<p>Now, as far as I remember about my classes of F77 there is no casting 
<br>
operators and no implicit casting is allowed. So the way we detect the 
<br>
value of .TRUE. is not correct even if it's accepted by some compilers. I 
<br>
modify the config/f77_get_value_true.m4 file to (*I hope*) a slightly more 
<br>
F77 friendly version. The patch is attached to the email.
<br>
<p>I'm waiting for comments before committing.
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>&quot;We must accept finite disappointment, but we must never lose infinite
<br>
hope.&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Martin Luther King
<br>
<p>
<br><p>
<p><hr>
<ul>
<li>APPLICATION/octet-stream attachment: <a href="../../att-0553/true_detection.patch">true_detection.patch</a>
</ul>
<!-- attachment="true_detection.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0554.php">Rainer Keller: "Re:  FORTRAN TRUE"</a>
<li><strong>Previous message:</strong> <a href="0552.php">Jeff Squyres: "Re:  [O-MPI svn-full] svn:open-mpi r8262 - trunk/opal/runtime"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0554.php">Rainer Keller: "Re:  FORTRAN TRUE"</a>
<li><strong>Reply:</strong> <a href="0554.php">Rainer Keller: "Re:  FORTRAN TRUE"</a>
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
