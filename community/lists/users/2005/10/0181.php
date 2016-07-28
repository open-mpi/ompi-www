<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Oct 12 03:42:26 2005" -->
<!-- isoreceived="20051012084226" -->
<!-- sent="Wed, 12 Oct 2005 09:42:19 +0100" -->
<!-- isosent="20051012084219" -->
<!-- name="Neil Storer" -->
<!-- email="Neil.Storer_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] [Beowulf] MPI ABI" -->
<!-- id="434CCC6B.8080905_at_ecmwf.int" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="434B9E6C.4030405_at_fft.be" -->
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
<strong>From:</strong> Neil Storer (<em>Neil.Storer_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-10-12 03:42:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0182.php">Toon Knapen: "[O-MPI users] MorphMPI based on fortran itf (was: MPI ABI)"</a>
<li><strong>Previous message:</strong> <a href="0180.php">Greg Lindahl: "Re: [O-MPI users] [Beowulf] MPI ABI"</a>
<li><strong>In reply to:</strong> <a href="0175.php">Toon Knapen: "Re: [O-MPI users] [Beowulf] MPI ABI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0172.php">Patrick Geoffray: "Re: [O-MPI users] [Beowulf] MPI ABI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Toon Knapen wrote:
<br>
<p><span class="quotelev1">&gt;Fortran LOGICAL
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;could you elaborate?
</span><br>
<span class="quotelev1">&gt;
</span><br>
Toon,
<br>
<p>There is no universally-agreed Fortran convention for how .TRUE. and 
<br>
.FALSE. boolean values are represented and how a value is checked for 
<br>
.TRUE. and .FALSE.
<br>
<p>Some Fortran implementations use  0 for .FALSE. and 1  for .TRUE. (they 
<br>
may test for .TRUE. as being NON-ZERO)
<br>
Some Fortran implementations use  0 for .FALSE. and -1 for .TRUE. (they 
<br>
may test for .TRUE. as being NEGATIVE)
<br>
Some Fortran implementations use -1 for .FALSE. and +1 for .TRUE. (they 
<br>
may test for POSITIVE .TRUE. and NEGATIVE .FALSE.)
<br>
<p>Checkout the PGI and ABSOFT Fortran compilers for example.
<br>
<p>Regards
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Neil
<br>
<p><pre>
-- 
+-----------------+---------------------------------+------------------+
| Neil Storer     |    Head: Systems S/W Section    | Operations Dept. |
+-----------------+---------------------------------+------------------+
| ECMWF,          | email: neil.storer_at_[hidden]    |    //=\\  //=\\  |
| Shinfield Park, | Tel:   (+44 118) 9499353        |   //   \\//   \\ |
| Reading,        |        (+44 118) 9499000 x 2353 | ECMWF            |
| Berkshire,      | Fax:   (+44 118) 9869450        | ECMWF            |
| RG2 9AX,        |                                 |   \\   //\\   // |
| UK              | URL:   <a href="http://www.ecmwf.int/">http://www.ecmwf.int/</a>    |    \\=//  \\=//  |
+--+--------------+---------------------------------+----------------+-+
   | ECMWF is the European Centre for Medium-Range Weather Forecasts |
   +-----------------------------------------------------------------+
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-0181/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0182.php">Toon Knapen: "[O-MPI users] MorphMPI based on fortran itf (was: MPI ABI)"</a>
<li><strong>Previous message:</strong> <a href="0180.php">Greg Lindahl: "Re: [O-MPI users] [Beowulf] MPI ABI"</a>
<li><strong>In reply to:</strong> <a href="0175.php">Toon Knapen: "Re: [O-MPI users] [Beowulf] MPI ABI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0172.php">Patrick Geoffray: "Re: [O-MPI users] [Beowulf] MPI ABI"</a>
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
