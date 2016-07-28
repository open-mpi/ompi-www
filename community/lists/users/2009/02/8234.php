<?
$subject_val = "[OMPI users] Problem with cascading derived data types";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 27 06:43:15 2009" -->
<!-- isoreceived="20090227114315" -->
<!-- sent="Fri, 27 Feb 2009 12:44:11 +0100" -->
<!-- isosent="20090227114411" -->
<!-- name="Markus Blatt" -->
<!-- email="mblatt_at_[hidden]" -->
<!-- subject="[OMPI users] Problem with cascading derived data types" -->
<!-- id="20090227114411.GG3890_at_catania.iwr.uni-heidelberg.de" -->
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
<strong>Subject:</strong> [OMPI users] Problem with cascading derived data types<br>
<strong>From:</strong> Markus Blatt (<em>mblatt_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-27 06:44:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8235.php">Jeff Squyres: "Re: [OMPI users] libmpi_f90.so not being built"</a>
<li><strong>Previous message:</strong> <a href="8233.php">Tiago Silva: "[OMPI users] libmpi_f90.so not being built"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>In one of my applications I am using cascaded derived MPI datatypes
<br>
created with MPI_Type_struct. One of these types is used to just send
<br>
a part (one MPI_Char) of a struct consisting of an int followed by two
<br>
chars. I.e, the int at the beginning is/should be ignored.
<br>
<p>This works fine if I use this data type on its own. 
<br>
<p>Unfortunately I need to send another struct that contains an int and
<br>
the int-char-char struct from above. Again I construct a custom MPI
<br>
data type for this.
<br>
<p>When sending this cascaded data type It seems that the offset of the
<br>
char in the inner custom type is disregarded on the receiving end and
<br>
the
<br>
received data ('1') is stored in the first int instead of the
<br>
following char.
<br>
<p>I have tested this code with both lam and mpich. There it worked as
<br>
expected (saving the '1' in the first char).
<br>
<p>The last two lines of the output of the attached test case read
<br>
<p>received global=10 attribute=0 (local=1 public=0)
<br>
received  attribute=1 (local=100 public=0)
<br>
<p>for openmi instead of
<br>
<p>received global=10 attribute=1 (local=100 public=0)
<br>
received  attribute=1 (local=100 public=0)
<br>
<p>for lam and mpich.
<br>
<p>The same problem is experienced when using version 1.3-2 of openmpi.
<br>
<p>Am I doing something completely wrong or have I accidentally found a bug?
<br>
<p>Cheers,
<br>
<p>Markus
<br>
<p><p><p>
<br><hr>
<ul>
<li>text/x-c++src attachment: <a href="http://www.open-mpi.org/community/lists/users/att-8234/openmpistruct.cc">openmpistruct.cc</a>
</ul>
<!-- attachment="openmpistruct.cc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8235.php">Jeff Squyres: "Re: [OMPI users] libmpi_f90.so not being built"</a>
<li><strong>Previous message:</strong> <a href="8233.php">Tiago Silva: "[OMPI users] libmpi_f90.so not being built"</a>
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
