<?
$subject_val = "Re: [OMPI users] Undefined symbols with MPI_Get_address";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug  5 09:50:14 2013" -->
<!-- isoreceived="20130805135014" -->
<!-- sent="Mon, 05 Aug 2013 09:50:10 -0400" -->
<!-- isosent="20130805135010" -->
<!-- name="Hugo Gagnon" -->
<!-- email="opensource.openmpi_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Undefined symbols with MPI_Get_address" -->
<!-- id="1375710610.2783.5976899.3005FB12_at_webmail.messagingengine.com" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC4F7A7B05_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Undefined symbols with MPI_Get_address<br>
<strong>From:</strong> Hugo Gagnon (<em>opensource.openmpi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-08-05 09:50:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22441.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Undefined symbols with MPI_Get_address"</a>
<li><strong>Previous message:</strong> <a href="22439.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Undefined symbols with MPI_Get_address"</a>
<li><strong>In reply to:</strong> <a href="22439.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Undefined symbols with MPI_Get_address"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22441.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Undefined symbols with MPI_Get_address"</a>
<li><strong>Reply:</strong> <a href="22441.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Undefined symbols with MPI_Get_address"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I could replicate the problem with the following:
<br>
<p>program test
<br>
use mpi
<br>
integer :: ierr, a
<br>
integer(kind=MPI_ADDRESS_KIND) :: address
<br>
call MPI_Init(ierr)
<br>
a = 0
<br>
call MPI_Get_address(a,address,ierr)
<br>
write(*,*) address
<br>
call MPI_Finalize(ierr)
<br>
end program test
<br>
<p>$ openmpif90 test.f90
<br>
Undefined symbols for architecture x86_64:
<br>
&nbsp;&quot;_mpi_get_address0di4_&quot;, referenced from:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_MAIN__ in ccLLbLGQ.o
<br>
ld: symbol(s) not found for architecture x86_64
<br>
<p><pre>
-- 
  Hugo Gagnon
On Mon, Aug 5, 2013, at 9:42, Jeff Squyres (jsquyres) wrote:
&gt; Can you send a small reproducing example?
&gt; 
&gt; 
&gt; On Aug 4, 2013, at 1:46 PM, Hugo Gagnon
&gt; &lt;opensource.openmpi_at_[hidden]&gt; wrote:
&gt; 
&gt; &gt; Hi,
&gt; &gt; 
&gt; &gt; I have a .f90 module containing several lines of the form:
&gt; &gt; 
&gt; &gt; call mpi_get_address(location, address, error)
&gt; &gt; 
&gt; &gt; The module compiles fine (though only if I set the &quot;kind&quot; of &quot;address&quot;
&gt; &gt; to MPI_OFFSET_KIND) but I get this error at the linking stage:
&gt; &gt; 
&gt; &gt; Undefined symbols for architecture x86_64:
&gt; &gt;  &quot;_mpi_get_address0di4_&quot;, referenced from:
&gt; &gt;      ___io_mod_MOD_writegridparallel in IO_Mod.o
&gt; &gt;      ___io_mod_MOD_writemeanstats in IO_Mod.o
&gt; &gt;      ___io_mod_MOD_writeinststats in IO_Mod.o
&gt; &gt;      ___io_mod_MOD_writequbckp in IO_Mod.o
&gt; &gt;  &quot;_mpi_get_address0dr8_&quot;, referenced from:
&gt; &gt;      ___io_mod_MOD_writegridparallel in IO_Mod.o
&gt; &gt;      ___io_mod_MOD_writequbckp in IO_Mod.o
&gt; &gt;  &quot;_mpi_get_address1dr8_&quot;, referenced from:
&gt; &gt;      ___io_mod_MOD_writemeanstats in IO_Mod.o
&gt; &gt;      ___io_mod_MOD_writeinststats in IO_Mod.o
&gt; &gt; ld: symbol(s) not found for architecture x86_64
&gt; &gt; 
&gt; &gt; I'm using gcc 4.8.1 and openmpi 1.7.2, both built from macports.
&gt; &gt; 
&gt; &gt; Inputs appreciated,
&gt; &gt; -- 
&gt; &gt;  Hugo Gagnon
&gt; &gt; _______________________________________________
&gt; &gt; users mailing list
&gt; &gt; users_at_[hidden]
&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; 
&gt; 
&gt; -- 
&gt; Jeff Squyres
&gt; jsquyres_at_[hidden]
&gt; For corporate legal information go to:
&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
&gt; 
&gt; 
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22441.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Undefined symbols with MPI_Get_address"</a>
<li><strong>Previous message:</strong> <a href="22439.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Undefined symbols with MPI_Get_address"</a>
<li><strong>In reply to:</strong> <a href="22439.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Undefined symbols with MPI_Get_address"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22441.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Undefined symbols with MPI_Get_address"</a>
<li><strong>Reply:</strong> <a href="22441.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Undefined symbols with MPI_Get_address"</a>
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
