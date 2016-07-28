<?
$subject_val = "Re: [OMPI users] OrangeFS ROMIO support";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 25 08:26:31 2014" -->
<!-- isoreceived="20140225132631" -->
<!-- sent="Tue, 25 Feb 2014 07:26:25 -0600" -->
<!-- isosent="20140225132625" -->
<!-- name="Edgar Gabriel" -->
<!-- email="gabriel_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OrangeFS ROMIO support" -->
<!-- id="530C9A01.2020400_at_cs.uh.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="16F.F2Rm.5iqEc4uISIM.1J39UF_at_seznam.cz" -->
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
<strong>Subject:</strong> Re: [OMPI users] OrangeFS ROMIO support<br>
<strong>From:</strong> Edgar Gabriel (<em>gabriel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-25 08:26:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23640.php">vithanousek: "Re: [OMPI users] OrangeFS ROMIO support"</a>
<li><strong>Previous message:</strong> <a href="23638.php">vithanousek: "[OMPI users] OrangeFS ROMIO support"</a>
<li><strong>In reply to:</strong> <a href="23638.php">vithanousek: "[OMPI users] OrangeFS ROMIO support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23640.php">vithanousek: "Re: [OMPI users] OrangeFS ROMIO support"</a>
<li><strong>Reply:</strong> <a href="23640.php">vithanousek: "Re: [OMPI users] OrangeFS ROMIO support"</a>
<li><strong>Reply:</strong> <a href="23641.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OrangeFS ROMIO support"</a>
<li><strong>Reply:</strong> <a href="23676.php">Latham, Robert J.: "Re: [OMPI users] OrangeFS ROMIO support"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
this was/is a bug in ROMIO, in which they assume a datatype is an int. I
<br>
fixed it originally in a previous version of Open MPI on the trunk, but
<br>
it did not get ported upstream, so we might have to do the same fix again.
<br>
<p>Thanks
<br>
Edgar
<br>
<p>On 2/25/2014 7:15 AM, vithanousek wrote:
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; At fisrt, please, excuse my poor level of english.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm little bit confused by versions of OpenMPI and ROMIO, because i met
</span><br>
<span class="quotelev1">&gt; siliar bugs reported in multiple versions. Im buliding version 1.6.5
</span><br>
<span class="quotelev1">&gt; (current stable).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I compiled OpenMPI 1.6.5 with included ROMIO by doing this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/usr/local/openmpi_1.6.5_romio \
</span><br>
<span class="quotelev1">&gt; --with-io-romio-flags='--with-pvfs2=/usr/local/orangefs'
</span><br>
<span class="quotelev1">&gt; make -j 32
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and I got error message:
</span><br>
<span class="quotelev1">&gt; (...)
</span><br>
<span class="quotelev1">&gt; ad_pvfs2_io_dtype.c: In function 'convert_named':
</span><br>
<span class="quotelev1">&gt; ad_pvfs2_io_dtype.c:581: error: switch quantity not an integer
</span><br>
<span class="quotelev1">&gt; ad_pvfs2_io_dtype.c:583: error: pointers are not permitted as case values
</span><br>
<span class="quotelev1">&gt; (...)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I rewrited &quot;switch&quot; construction to multiple &quot;if&quot; constructions. This
</span><br>
<span class="quotelev1">&gt; solve compiling problem.
</span><br>
<span class="quotelev1">&gt; But I cant use myself edited source code of OpenMPI on our cluster.
</span><br>
<span class="quotelev1">&gt; Is this bug of sourcecode and will be fixed, or am I doing something wrong?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for reply
</span><br>
<span class="quotelev1">&gt; Hanousek V&#237;t
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><pre>
-- 
Edgar Gabriel
Associate Professor
Parallel Software Technologies Lab      <a href="http://pstl.cs.uh.edu">http://pstl.cs.uh.edu</a>
Department of Computer Science          University of Houston
Philip G. Hoffman Hall, Room 524        Houston, TX-77204, USA
Tel: +1 (713) 743-3857                  Fax: +1 (713) 743-3335

</pre>
<hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23639/signature.asc">OpenPGP digital signature</a>
</ul>
<!-- attachment="signature.asc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23640.php">vithanousek: "Re: [OMPI users] OrangeFS ROMIO support"</a>
<li><strong>Previous message:</strong> <a href="23638.php">vithanousek: "[OMPI users] OrangeFS ROMIO support"</a>
<li><strong>In reply to:</strong> <a href="23638.php">vithanousek: "[OMPI users] OrangeFS ROMIO support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23640.php">vithanousek: "Re: [OMPI users] OrangeFS ROMIO support"</a>
<li><strong>Reply:</strong> <a href="23640.php">vithanousek: "Re: [OMPI users] OrangeFS ROMIO support"</a>
<li><strong>Reply:</strong> <a href="23641.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OrangeFS ROMIO support"</a>
<li><strong>Reply:</strong> <a href="23676.php">Latham, Robert J.: "Re: [OMPI users] OrangeFS ROMIO support"</a>
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
