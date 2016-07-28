<?
$subject_val = "Re: [OMPI users] Undefined symbols with MPI_Get_address";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug  5 09:42:31 2013" -->
<!-- isoreceived="20130805134231" -->
<!-- sent="Mon, 5 Aug 2013 13:42:26 +0000" -->
<!-- isosent="20130805134226" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Undefined symbols with MPI_Get_address" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F7A7B05_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1375641983.3840.5699611.048C7AD7_at_webmail.messagingengine.com" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-08-05 09:42:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22440.php">Hugo Gagnon: "Re: [OMPI users] Undefined symbols with MPI_Get_address"</a>
<li><strong>Previous message:</strong> <a href="22438.php">Ralph Castain: "Re: [OMPI users] ERROR: At least one pair of MPI processes are unable to reach each other for MPI communications."</a>
<li><strong>In reply to:</strong> <a href="22436.php">Hugo Gagnon: "[OMPI users] Undefined symbols with MPI_Get_address"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22440.php">Hugo Gagnon: "Re: [OMPI users] Undefined symbols with MPI_Get_address"</a>
<li><strong>Reply:</strong> <a href="22440.php">Hugo Gagnon: "Re: [OMPI users] Undefined symbols with MPI_Get_address"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Can you send a small reproducing example?
<br>
<p><p>On Aug 4, 2013, at 1:46 PM, Hugo Gagnon &lt;opensource.openmpi_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have a .f90 module containing several lines of the form:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; call mpi_get_address(location, address, error)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The module compiles fine (though only if I set the &quot;kind&quot; of &quot;address&quot;
</span><br>
<span class="quotelev1">&gt; to MPI_OFFSET_KIND) but I get this error at the linking stage:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Undefined symbols for architecture x86_64:
</span><br>
<span class="quotelev1">&gt;  &quot;_mpi_get_address0di4_&quot;, referenced from:
</span><br>
<span class="quotelev1">&gt;      ___io_mod_MOD_writegridparallel in IO_Mod.o
</span><br>
<span class="quotelev1">&gt;      ___io_mod_MOD_writemeanstats in IO_Mod.o
</span><br>
<span class="quotelev1">&gt;      ___io_mod_MOD_writeinststats in IO_Mod.o
</span><br>
<span class="quotelev1">&gt;      ___io_mod_MOD_writequbckp in IO_Mod.o
</span><br>
<span class="quotelev1">&gt;  &quot;_mpi_get_address0dr8_&quot;, referenced from:
</span><br>
<span class="quotelev1">&gt;      ___io_mod_MOD_writegridparallel in IO_Mod.o
</span><br>
<span class="quotelev1">&gt;      ___io_mod_MOD_writequbckp in IO_Mod.o
</span><br>
<span class="quotelev1">&gt;  &quot;_mpi_get_address1dr8_&quot;, referenced from:
</span><br>
<span class="quotelev1">&gt;      ___io_mod_MOD_writemeanstats in IO_Mod.o
</span><br>
<span class="quotelev1">&gt;      ___io_mod_MOD_writeinststats in IO_Mod.o
</span><br>
<span class="quotelev1">&gt; ld: symbol(s) not found for architecture x86_64
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm using gcc 4.8.1 and openmpi 1.7.2, both built from macports.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Inputs appreciated,
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt;  Hugo Gagnon
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22440.php">Hugo Gagnon: "Re: [OMPI users] Undefined symbols with MPI_Get_address"</a>
<li><strong>Previous message:</strong> <a href="22438.php">Ralph Castain: "Re: [OMPI users] ERROR: At least one pair of MPI processes are unable to reach each other for MPI communications."</a>
<li><strong>In reply to:</strong> <a href="22436.php">Hugo Gagnon: "[OMPI users] Undefined symbols with MPI_Get_address"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22440.php">Hugo Gagnon: "Re: [OMPI users] Undefined symbols with MPI_Get_address"</a>
<li><strong>Reply:</strong> <a href="22440.php">Hugo Gagnon: "Re: [OMPI users] Undefined symbols with MPI_Get_address"</a>
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
