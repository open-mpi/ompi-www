<?
$subject_val = "Re: [OMPI users] OrangeFS ROMIO support";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 25 08:46:13 2014" -->
<!-- isoreceived="20140225134613" -->
<!-- sent="Tue, 25 Feb 2014 07:45:58 -0600" -->
<!-- isosent="20140225134558" -->
<!-- name="Edgar Gabriel" -->
<!-- email="gabriel_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OrangeFS ROMIO support" -->
<!-- id="530C9E96.6070301_at_cs.uh.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="9060B667-60CC-4875-9CEF-130D663810C3_at_cisco.com" -->
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
<strong>Date:</strong> 2014-02-25 08:45:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23643.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OrangeFS ROMIO support"</a>
<li><strong>Previous message:</strong> <a href="23641.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OrangeFS ROMIO support"</a>
<li><strong>In reply to:</strong> <a href="23641.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OrangeFS ROMIO support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23643.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OrangeFS ROMIO support"</a>
<li><strong>Reply:</strong> <a href="23643.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OrangeFS ROMIO support"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
give me day ( I am currently out of town) to dig up the patch again, and
<br>
reapply it again to the trunk, we can CMR it to 1.6 and 1.7. I did not
<br>
follow up at that time, since nobody else seemed to care. I guess the
<br>
number of users using the combination of OPen MPI + ROMIO + PVFS2 is
<br>
pretty low.
<br>
<p>Thanks
<br>
Edgar
<br>
<p>On 2/25/2014 7:34 AM, Jeff Squyres (jsquyres) wrote:
<br>
<span class="quotelev1">&gt; Edgar --
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is there a fix that we should CMR to the v1.6 branch?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Feb 25, 2014, at 8:26 AM, Edgar Gabriel &lt;gabriel_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; this was/is a bug in ROMIO, in which they assume a datatype is an int. I
</span><br>
<span class="quotelev2">&gt;&gt; fixed it originally in a previous version of Open MPI on the trunk, but
</span><br>
<span class="quotelev2">&gt;&gt; it did not get ported upstream, so we might have to do the same fix again.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt; Edgar
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 2/25/2014 7:15 AM, vithanousek wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; At fisrt, please, excuse my poor level of english.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm little bit confused by versions of OpenMPI and ROMIO, because i met
</span><br>
<span class="quotelev3">&gt;&gt;&gt; siliar bugs reported in multiple versions. Im buliding version 1.6.5
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (current stable).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I compiled OpenMPI 1.6.5 with included ROMIO by doing this:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ./configure --prefix=/usr/local/openmpi_1.6.5_romio \
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --with-io-romio-flags='--with-pvfs2=/usr/local/orangefs'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make -j 32
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and I got error message:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (...)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ad_pvfs2_io_dtype.c: In function 'convert_named':
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ad_pvfs2_io_dtype.c:581: error: switch quantity not an integer
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ad_pvfs2_io_dtype.c:583: error: pointers are not permitted as case values
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (...)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I rewrited &quot;switch&quot; construction to multiple &quot;if&quot; constructions. This
</span><br>
<span class="quotelev3">&gt;&gt;&gt; solve compiling problem.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; But I cant use myself edited source code of OpenMPI on our cluster.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is this bug of sourcecode and will be fixed, or am I doing something wrong?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks for reply
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hanousek V&#237;t
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Edgar Gabriel
</span><br>
<span class="quotelev2">&gt;&gt; Associate Professor
</span><br>
<span class="quotelev2">&gt;&gt; Parallel Software Technologies Lab      <a href="http://pstl.cs.uh.edu">http://pstl.cs.uh.edu</a>
</span><br>
<span class="quotelev2">&gt;&gt; Department of Computer Science          University of Houston
</span><br>
<span class="quotelev2">&gt;&gt; Philip G. Hoffman Hall, Room 524        Houston, TX-77204, USA
</span><br>
<span class="quotelev2">&gt;&gt; Tel: +1 (713) 743-3857                  Fax: +1 (713) 743-3335
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
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
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23642/signature.asc">OpenPGP digital signature</a>
</ul>
<!-- attachment="signature.asc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23643.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OrangeFS ROMIO support"</a>
<li><strong>Previous message:</strong> <a href="23641.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OrangeFS ROMIO support"</a>
<li><strong>In reply to:</strong> <a href="23641.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OrangeFS ROMIO support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23643.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OrangeFS ROMIO support"</a>
<li><strong>Reply:</strong> <a href="23643.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OrangeFS ROMIO support"</a>
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
