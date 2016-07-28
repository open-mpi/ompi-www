<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Aug  7 08:14:51 2007" -->
<!-- isoreceived="20070807121451" -->
<!-- sent="Tue, 7 Aug 2007 06:14:32 -0600" -->
<!-- isosent="20070807121432" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] homogeneous environment" -->
<!-- id="C78C460B-587B-4BE1-B061-F7077B86EFB0_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="46B85BDD.2060404_at_cggveritas.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-07 08:14:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3823.php">Jeff Squyres: "Re: [OMPI users] memory leaks on solaris"</a>
<li><strong>Previous message:</strong> <a href="3821.php">Geoffroy PIGNOT: "[OMPI users] homogeneous environment"</a>
<li><strong>In reply to:</strong> <a href="3821.php">Geoffroy PIGNOT: "[OMPI users] homogeneous environment"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Open MPI figures out that peers are homogeneous automatically;  
<br>
there's no need for a LAM-like -O option to mpirun.
<br>
<p>FWIW: recent versions of LAM (7.1 and beyond?  I don't remember when  
<br>
the feature was introduced offhand) automatically figure out when  
<br>
you're in a homogeneous environment and skip all the byte-swapping  
<br>
stuff.  Using the -O option doesn't hurt, but it shouldn't be necessary.
<br>
<p><p>On Aug 7, 2007, at 5:47 AM, Geoffroy PIGNOT wrote:
<br>
<p><span class="quotelev1">&gt; Does openmpi mpirun command have the equivalent option &quot;-O&quot; as lam  
</span><br>
<span class="quotelev1">&gt; (homogeneous universe)
</span><br>
<span class="quotelev1">&gt; I would like avoid automatic byteswap in heterogeneous execution  
</span><br>
<span class="quotelev1">&gt; environment
</span><br>
<span class="quotelev1">&gt; Thanks in advance
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Geoffroy
</span><br>
<span class="quotelev1">&gt; &lt;geoffroy.pignot.vcf&gt;
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
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3823.php">Jeff Squyres: "Re: [OMPI users] memory leaks on solaris"</a>
<li><strong>Previous message:</strong> <a href="3821.php">Geoffroy PIGNOT: "[OMPI users] homogeneous environment"</a>
<li><strong>In reply to:</strong> <a href="3821.php">Geoffroy PIGNOT: "[OMPI users] homogeneous environment"</a>
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
