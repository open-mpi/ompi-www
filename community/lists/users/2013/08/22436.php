<?
$subject_val = "[OMPI users] Undefined symbols with MPI_Get_address";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Aug  4 14:46:27 2013" -->
<!-- isoreceived="20130804184627" -->
<!-- sent="Sun, 04 Aug 2013 14:46:23 -0400" -->
<!-- isosent="20130804184623" -->
<!-- name="Hugo Gagnon" -->
<!-- email="opensource.openmpi_at_[hidden]" -->
<!-- subject="[OMPI users] Undefined symbols with MPI_Get_address" -->
<!-- id="1375641983.3840.5699611.048C7AD7_at_webmail.messagingengine.com" -->
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
<strong>Subject:</strong> [OMPI users] Undefined symbols with MPI_Get_address<br>
<strong>From:</strong> Hugo Gagnon (<em>opensource.openmpi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-08-04 14:46:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22437.php">RoboBeans: "Re: [OMPI users] ERROR: At least one pair of MPI processes are unable to reach each other for MPI communications."</a>
<li><strong>Previous message:</strong> <a href="22435.php">Elken, Tom: "Re: [OMPI users] ERROR: At least one pair of MPI processes are unable to reach each other for MPI communications."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22439.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Undefined symbols with MPI_Get_address"</a>
<li><strong>Reply:</strong> <a href="22439.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Undefined symbols with MPI_Get_address"</a>
<li><strong>Maybe reply:</strong> <a href="22451.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Undefined symbols with MPI_Get_address"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I have a .f90 module containing several lines of the form:
<br>
<p>call mpi_get_address(location, address, error)
<br>
<p>The module compiles fine (though only if I set the &quot;kind&quot; of &quot;address&quot;
<br>
to MPI_OFFSET_KIND) but I get this error at the linking stage:
<br>
<p>Undefined symbols for architecture x86_64:
<br>
&nbsp;&nbsp;&quot;_mpi_get_address0di4_&quot;, referenced from:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;___io_mod_MOD_writegridparallel in IO_Mod.o
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;___io_mod_MOD_writemeanstats in IO_Mod.o
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;___io_mod_MOD_writeinststats in IO_Mod.o
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;___io_mod_MOD_writequbckp in IO_Mod.o
<br>
&nbsp;&nbsp;&quot;_mpi_get_address0dr8_&quot;, referenced from:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;___io_mod_MOD_writegridparallel in IO_Mod.o
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;___io_mod_MOD_writequbckp in IO_Mod.o
<br>
&nbsp;&nbsp;&quot;_mpi_get_address1dr8_&quot;, referenced from:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;___io_mod_MOD_writemeanstats in IO_Mod.o
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;___io_mod_MOD_writeinststats in IO_Mod.o
<br>
ld: symbol(s) not found for architecture x86_64
<br>
<p>I'm using gcc 4.8.1 and openmpi 1.7.2, both built from macports.
<br>
<p>Inputs appreciated,
<br>
<pre>
-- 
  Hugo Gagnon
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22437.php">RoboBeans: "Re: [OMPI users] ERROR: At least one pair of MPI processes are unable to reach each other for MPI communications."</a>
<li><strong>Previous message:</strong> <a href="22435.php">Elken, Tom: "Re: [OMPI users] ERROR: At least one pair of MPI processes are unable to reach each other for MPI communications."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22439.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Undefined symbols with MPI_Get_address"</a>
<li><strong>Reply:</strong> <a href="22439.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Undefined symbols with MPI_Get_address"</a>
<li><strong>Maybe reply:</strong> <a href="22451.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Undefined symbols with MPI_Get_address"</a>
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
