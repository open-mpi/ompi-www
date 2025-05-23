<?
$subject_val = "Re: [OMPI users] Undefined symbols with MPI_Get_address";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug  5 10:04:53 2013" -->
<!-- isoreceived="20130805140453" -->
<!-- sent="Mon, 05 Aug 2013 10:04:49 -0400" -->
<!-- isosent="20130805140449" -->
<!-- name="Hugo Gagnon" -->
<!-- email="opensource.openmpi_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Undefined symbols with MPI_Get_address" -->
<!-- id="1375711489.5750.5982039.041B8727_at_webmail.messagingengine.com" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC4F7A7C90_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Date:</strong> 2013-08-05 10:04:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22443.php">Hugo Gagnon: "Re: [OMPI users] Undefined symbols with MPI_Get_address"</a>
<li><strong>Previous message:</strong> <a href="22441.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Undefined symbols with MPI_Get_address"</a>
<li><strong>In reply to:</strong> <a href="22441.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Undefined symbols with MPI_Get_address"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22443.php">Hugo Gagnon: "Re: [OMPI users] Undefined symbols with MPI_Get_address"</a>
<li><strong>Reply:</strong> <a href="22443.php">Hugo Gagnon: "Re: [OMPI users] Undefined symbols with MPI_Get_address"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Will do, for now the best I can give is the portfile containing some
<br>
config options:
<br>
<p><a href="https://trac.macports.org/browser/trunk/dports/science/openmpi/Portfile">https://trac.macports.org/browser/trunk/dports/science/openmpi/Portfile</a>
<br>
<p>I used the gcc48 variant.
<br>
<p><pre>
-- 
  Hugo Gagnon
On Mon, Aug 5, 2013, at 9:52, Jeff Squyres (jsquyres) wrote:
&gt; Can you send your build logs?  See:
&gt; 
&gt;     <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
&gt; 
&gt; (I know you said you installed via macports, but we don't package that,
&gt; so we don't know how it's built)
&gt; 
&gt; 
&gt; On Aug 5, 2013, at 8:50 AM, Hugo Gagnon
&gt; &lt;opensource.openmpi_at_[hidden]&gt; wrote:
&gt; 
&gt; &gt; I could replicate the problem with the following:
&gt; &gt; 
&gt; &gt; program test
&gt; &gt; use mpi
&gt; &gt; integer :: ierr, a
&gt; &gt; integer(kind=MPI_ADDRESS_KIND) :: address
&gt; &gt; call MPI_Init(ierr)
&gt; &gt; a = 0
&gt; &gt; call MPI_Get_address(a,address,ierr)
&gt; &gt; write(*,*) address
&gt; &gt; call MPI_Finalize(ierr)
&gt; &gt; end program test
&gt; &gt; 
&gt; &gt; $ openmpif90 test.f90
&gt; &gt; Undefined symbols for architecture x86_64:
&gt; &gt; &quot;_mpi_get_address0di4_&quot;, referenced from:
&gt; &gt;     _MAIN__ in ccLLbLGQ.o
&gt; &gt; ld: symbol(s) not found for architecture x86_64
&gt; &gt; 
&gt; &gt; -- 
&gt; &gt;  Hugo Gagnon
&gt; &gt; 
&gt; &gt; On Mon, Aug 5, 2013, at 9:42, Jeff Squyres (jsquyres) wrote:
&gt; &gt;&gt; Can you send a small reproducing example?
&gt; &gt;&gt; 
&gt; &gt;&gt; 
&gt; &gt;&gt; On Aug 4, 2013, at 1:46 PM, Hugo Gagnon
&gt; &gt;&gt; &lt;opensource.openmpi_at_[hidden]&gt; wrote:
&gt; &gt;&gt; 
&gt; &gt;&gt;&gt; Hi,
&gt; &gt;&gt;&gt; 
&gt; &gt;&gt;&gt; I have a .f90 module containing several lines of the form:
&gt; &gt;&gt;&gt; 
&gt; &gt;&gt;&gt; call mpi_get_address(location, address, error)
&gt; &gt;&gt;&gt; 
&gt; &gt;&gt;&gt; The module compiles fine (though only if I set the &quot;kind&quot; of &quot;address&quot;
&gt; &gt;&gt;&gt; to MPI_OFFSET_KIND) but I get this error at the linking stage:
&gt; &gt;&gt;&gt; 
&gt; &gt;&gt;&gt; Undefined symbols for architecture x86_64:
&gt; &gt;&gt;&gt; &quot;_mpi_get_address0di4_&quot;, referenced from:
&gt; &gt;&gt;&gt;     ___io_mod_MOD_writegridparallel in IO_Mod.o
&gt; &gt;&gt;&gt;     ___io_mod_MOD_writemeanstats in IO_Mod.o
&gt; &gt;&gt;&gt;     ___io_mod_MOD_writeinststats in IO_Mod.o
&gt; &gt;&gt;&gt;     ___io_mod_MOD_writequbckp in IO_Mod.o
&gt; &gt;&gt;&gt; &quot;_mpi_get_address0dr8_&quot;, referenced from:
&gt; &gt;&gt;&gt;     ___io_mod_MOD_writegridparallel in IO_Mod.o
&gt; &gt;&gt;&gt;     ___io_mod_MOD_writequbckp in IO_Mod.o
&gt; &gt;&gt;&gt; &quot;_mpi_get_address1dr8_&quot;, referenced from:
&gt; &gt;&gt;&gt;     ___io_mod_MOD_writemeanstats in IO_Mod.o
&gt; &gt;&gt;&gt;     ___io_mod_MOD_writeinststats in IO_Mod.o
&gt; &gt;&gt;&gt; ld: symbol(s) not found for architecture x86_64
&gt; &gt;&gt;&gt; 
&gt; &gt;&gt;&gt; I'm using gcc 4.8.1 and openmpi 1.7.2, both built from macports.
&gt; &gt;&gt;&gt; 
&gt; &gt;&gt;&gt; Inputs appreciated,
&gt; &gt;&gt;&gt; -- 
&gt; &gt;&gt;&gt; Hugo Gagnon
&gt; &gt;&gt;&gt; _______________________________________________
&gt; &gt;&gt;&gt; users mailing list
&gt; &gt;&gt;&gt; users_at_[hidden]
&gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; &gt;&gt; 
&gt; &gt;&gt; 
&gt; &gt;&gt; -- 
&gt; &gt;&gt; Jeff Squyres
&gt; &gt;&gt; jsquyres_at_[hidden]
&gt; &gt;&gt; For corporate legal information go to:
&gt; &gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
&gt; &gt;&gt; 
&gt; &gt;&gt; 
&gt; &gt;&gt; _______________________________________________
&gt; &gt;&gt; users mailing list
&gt; &gt;&gt; users_at_[hidden]
&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="22443.php">Hugo Gagnon: "Re: [OMPI users] Undefined symbols with MPI_Get_address"</a>
<li><strong>Previous message:</strong> <a href="22441.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Undefined symbols with MPI_Get_address"</a>
<li><strong>In reply to:</strong> <a href="22441.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Undefined symbols with MPI_Get_address"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22443.php">Hugo Gagnon: "Re: [OMPI users] Undefined symbols with MPI_Get_address"</a>
<li><strong>Reply:</strong> <a href="22443.php">Hugo Gagnon: "Re: [OMPI users] Undefined symbols with MPI_Get_address"</a>
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
