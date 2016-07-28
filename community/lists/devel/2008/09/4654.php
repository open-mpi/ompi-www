<?
$subject_val = "[OMPI devel] gdb libmpi.dylib on Leopard";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 17 12:32:24 2008" -->
<!-- isoreceived="20080917163224" -->
<!-- sent="Wed, 17 Sep 2008 12:32:11 -0400" -->
<!-- isosent="20080917163211" -->
<!-- name="Aur&#233;lien Bouteiller" -->
<!-- email="bouteill_at_[hidden]" -->
<!-- subject="[OMPI devel] gdb libmpi.dylib on Leopard" -->
<!-- id="DBA84ED0-9985-4207-99A2-0ED9BD3896AA_at_eecs.utk.edu" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] gdb libmpi.dylib on Leopard<br>
<strong>From:</strong> Aur&#233;lien Bouteiller (<em>bouteill_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-17 12:32:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4655.php">Ralf Wildenhues: "Re: [OMPI devel] gdb libmpi.dylib on Leopard"</a>
<li><strong>Previous message:</strong> <a href="4653.php">Jeff Squyres: "Re: [OMPI devel] mtt IBM reduce_scatter_in_place test failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4655.php">Ralf Wildenhues: "Re: [OMPI devel] gdb libmpi.dylib on Leopard"</a>
<li><strong>Reply:</strong> <a href="4655.php">Ralf Wildenhues: "Re: [OMPI devel] gdb libmpi.dylib on Leopard"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have been facing a weird problem for several month now (I guess  
<br>
since I upgraded from Tiger to Leopard). I am unable to debug Open MPI  
<br>
using gdb on my mac. The problem comes from gdb not being able to load  
<br>
symbols from the dynamic libraries of Open MPI. I receive a message  
<br>
&quot;warning: Could not find object file &quot;/Users/bouteill/ompi/debug.build/ 
<br>
opal/.libs/libopen-pal.lax/libmca_memory.a/memory_base_close.o&quot; - no  
<br>
debug information available for &quot;../../../../trunk/opal/mca/memory/ 
<br>
base/memory_base_close.c&quot;.&quot;. As you can see, the path to the object  
<br>
file containing the symbols is not correct. It links to the temporary  
<br>
files expanded during the final stage link. As those files do not  
<br>
exist anymore, gdb gets confused.
<br>
<p>supposedly, the rpath option of libtool should take care of this and  
<br>
correct the path to the symbols. Is anybody successful at debugging  
<br>
Open MPI on Leopard ? Is this a bug of Open MPI or a bug in libtool/ 
<br>
gdb ?  Any known fix ?
<br>
<p>Aurelien
<br>
<p><pre>
--
* Dr. Aur&#233;lien Bouteiller
* Sr. Research Associate at Innovative Computing Laboratory
* University of Tennessee
* 1122 Volunteer Boulevard, suite 350
* Knoxville, TN 37996
* 865 974 6321
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4655.php">Ralf Wildenhues: "Re: [OMPI devel] gdb libmpi.dylib on Leopard"</a>
<li><strong>Previous message:</strong> <a href="4653.php">Jeff Squyres: "Re: [OMPI devel] mtt IBM reduce_scatter_in_place test failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4655.php">Ralf Wildenhues: "Re: [OMPI devel] gdb libmpi.dylib on Leopard"</a>
<li><strong>Reply:</strong> <a href="4655.php">Ralf Wildenhues: "Re: [OMPI devel] gdb libmpi.dylib on Leopard"</a>
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
