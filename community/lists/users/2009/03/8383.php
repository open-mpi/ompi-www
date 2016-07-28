<?
$subject_val = "[OMPI users] pcart_coords_f.c:74: error: lvalue required as decrement operand";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 10 14:07:12 2009" -->
<!-- isoreceived="20090310180712" -->
<!-- sent="Tue, 10 Mar 2009 14:07:06 -0400" -->
<!-- isosent="20090310180706" -->
<!-- name="Yu Chen" -->
<!-- email="chen_at_[hidden]" -->
<!-- subject="[OMPI users] pcart_coords_f.c:74: error: lvalue required as decrement operand" -->
<!-- id="492E359D-8707-4D2A-B9F7-7B6C7C647203_at_hhmi.umbc.edu" -->
<!-- charset="WINDOWS-1252" -->
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
<strong>Subject:</strong> [OMPI users] pcart_coords_f.c:74: error: lvalue required as decrement operand<br>
<strong>From:</strong> Yu Chen (<em>chen_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-10 14:07:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8384.php">Ralph Castain: "Re: [OMPI users] Latest SVN failures"</a>
<li><strong>Previous message:</strong> <a href="8382.php">&#197;ke Sandgren: "Re: [OMPI users] valgrind complaint in openmpi 1.3	(mca_mpool_sm_alloc)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8385.php">Jeff Squyres: "Re: [OMPI users] pcart_coords_f.c:74: error: lvalue required asdecrement operand"</a>
<li><strong>Reply:</strong> <a href="8385.php">Jeff Squyres: "Re: [OMPI users] pcart_coords_f.c:74: error: lvalue required asdecrement operand"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I downloaded 1.3, and try to compile it with gcc(4.2.0) and g95(0.91)  
<br>
on RHEL AS 4. But I got following errors. Any help are greatly  
<br>
appreciated.  (If I compile with gcc(3.4.5) and g95(0.91), it passes.)
<br>
<p>...
<br>
libtool: compile:  /usr/local/gcc/bin/gcc -DHAVE_CONFIG_H -I. - 
<br>
I../../../../opal/include -I../../../../orte/include -I../../../../ 
<br>
ompi/include -I../../../../opal/mca/paffinity/linux/plpa/src/libplpa - 
<br>
DOMPI_PROFILE_LAYER=1 -DOMPI_COMPILING_F77_WRAPPERS=1 -I../../../.. - 
<br>
O3 -DNDEBUG -finline-functions -fno-strict-aliasing -pthread - 
<br>
fvisibility=hidden -MT pcart_create_f.lo -MD -MP -MF .deps/ 
<br>
pcart_create_f.Tpo -c pcart_create_f.c -fPIC -DPIC -o .libs/ 
<br>
pcart_create_f.o
<br>
libtool: compile:  /usr/local/gcc/bin/gcc -DHAVE_CONFIG_H -I. - 
<br>
I../../../../opal/include -I../../../../orte/include -I../../../../ 
<br>
ompi/include -I../../../../opal/mca/paffinity/linux/plpa/src/libplpa - 
<br>
DOMPI_PROFILE_LAYER=1 -DOMPI_COMPILING_F77_WRAPPERS=1 -I../../../.. - 
<br>
O3 -DNDEBUG -finline-functions -fno-strict-aliasing -pthread - 
<br>
fvisibility=hidden -MT pcart_coords_f.lo -MD -MP -MF .deps/ 
<br>
pcart_coords_f.Tpo -c pcart_coords_f.c  -fPIC -DPIC -o .libs/ 
<br>
pcart_coords_f.o
<br>
pcart_coords_f.c: In function &#145;mpi_cart_coords_f&#146;:
<br>
pcart_coords_f.c:74: error: lvalue required as decrement operand
<br>
make[3]: *** [pcart_coords_f.lo] Error 1
<br>
make[3]: *** Waiting for unfinished jobs....
<br>
make[3]: Leaving directory `/groups/visitors/home/cheny/Builds/ 
<br>
openmpi-1.3-g95/ompi/mpi/f77/profile'
<br>
make[2]: *** [all-recursive] Error 1
<br>
<p>Thanks
<br>
CY
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8384.php">Ralph Castain: "Re: [OMPI users] Latest SVN failures"</a>
<li><strong>Previous message:</strong> <a href="8382.php">&#197;ke Sandgren: "Re: [OMPI users] valgrind complaint in openmpi 1.3	(mca_mpool_sm_alloc)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8385.php">Jeff Squyres: "Re: [OMPI users] pcart_coords_f.c:74: error: lvalue required asdecrement operand"</a>
<li><strong>Reply:</strong> <a href="8385.php">Jeff Squyres: "Re: [OMPI users] pcart_coords_f.c:74: error: lvalue required asdecrement operand"</a>
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
