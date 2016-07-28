<?
$subject_val = "Re: [OMPI users] OrangeFS ROMIO support";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 25 09:05:36 2014" -->
<!-- isoreceived="20140225140536" -->
<!-- sent="Tue, 25 Feb 2014 14:05:20 +0000" -->
<!-- isosent="20140225140520" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OrangeFS ROMIO support" -->
<!-- id="776A8739-29DA-4BDE-A04C-F082BF3FBD55_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="530C9E96.6070301_at_cs.uh.edu" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-25 09:05:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23644.php">Filippo Spiga: "[OMPI users] Compiling Open MPI 1.7.4 using PGI 14.2 and Mellanox HCOLL enabled"</a>
<li><strong>Previous message:</strong> <a href="23642.php">Edgar Gabriel: "Re: [OMPI users] OrangeFS ROMIO support"</a>
<li><strong>In reply to:</strong> <a href="23642.php">Edgar Gabriel: "Re: [OMPI users] OrangeFS ROMIO support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23676.php">Latham, Robert J.: "Re: [OMPI users] OrangeFS ROMIO support"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks!
<br>
<p>On Feb 25, 2014, at 8:45 AM, Edgar Gabriel &lt;gabriel_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; give me day ( I am currently out of town) to dig up the patch again, and
</span><br>
<span class="quotelev1">&gt; reapply it again to the trunk, we can CMR it to 1.6 and 1.7. I did not
</span><br>
<span class="quotelev1">&gt; follow up at that time, since nobody else seemed to care. I guess the
</span><br>
<span class="quotelev1">&gt; number of users using the combination of OPen MPI + ROMIO + PVFS2 is
</span><br>
<span class="quotelev1">&gt; pretty low.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Edgar
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 2/25/2014 7:34 AM, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Edgar --
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Is there a fix that we should CMR to the v1.6 branch?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Feb 25, 2014, at 8:26 AM, Edgar Gabriel &lt;gabriel_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; this was/is a bug in ROMIO, in which they assume a datatype is an int. I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fixed it originally in a previous version of Open MPI on the trunk, but
</span><br>
<span class="quotelev3">&gt;&gt;&gt; it did not get ported upstream, so we might have to do the same fix again.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Edgar
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 2/25/2014 7:15 AM, vithanousek wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; At fisrt, please, excuse my poor level of english.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I'm little bit confused by versions of OpenMPI and ROMIO, because i met
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; siliar bugs reported in multiple versions. Im buliding version 1.6.5
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (current stable).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I compiled OpenMPI 1.6.5 with included ROMIO by doing this:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ./configure --prefix=/usr/local/openmpi_1.6.5_romio \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --with-io-romio-flags='--with-pvfs2=/usr/local/orangefs'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; make -j 32
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and I got error message:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (...)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ad_pvfs2_io_dtype.c: In function 'convert_named':
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ad_pvfs2_io_dtype.c:581: error: switch quantity not an integer
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ad_pvfs2_io_dtype.c:583: error: pointers are not permitted as case values
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (...)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I rewrited &quot;switch&quot; construction to multiple &quot;if&quot; constructions. This
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; solve compiling problem.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; But I cant use myself edited source code of OpenMPI on our cluster.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Is this bug of sourcecode and will be fixed, or am I doing something wrong?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks for reply
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hanousek V&#237;t
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Edgar Gabriel
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Associate Professor
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Parallel Software Technologies Lab      <a href="http://pstl.cs.uh.edu">http://pstl.cs.uh.edu</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Department of Computer Science          University of Houston
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Philip G. Hoffman Hall, Room 524        Houston, TX-77204, USA
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Tel: +1 (713) 743-3857                  Fax: +1 (713) 743-3335
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
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Edgar Gabriel
</span><br>
<span class="quotelev1">&gt; Associate Professor
</span><br>
<span class="quotelev1">&gt; Parallel Software Technologies Lab      <a href="http://pstl.cs.uh.edu">http://pstl.cs.uh.edu</a>
</span><br>
<span class="quotelev1">&gt; Department of Computer Science          University of Houston
</span><br>
<span class="quotelev1">&gt; Philip G. Hoffman Hall, Room 524        Houston, TX-77204, USA
</span><br>
<span class="quotelev1">&gt; Tel: +1 (713) 743-3857                  Fax: +1 (713) 743-3335
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
<li><strong>Next message:</strong> <a href="23644.php">Filippo Spiga: "[OMPI users] Compiling Open MPI 1.7.4 using PGI 14.2 and Mellanox HCOLL enabled"</a>
<li><strong>Previous message:</strong> <a href="23642.php">Edgar Gabriel: "Re: [OMPI users] OrangeFS ROMIO support"</a>
<li><strong>In reply to:</strong> <a href="23642.php">Edgar Gabriel: "Re: [OMPI users] OrangeFS ROMIO support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23676.php">Latham, Robert J.: "Re: [OMPI users] OrangeFS ROMIO support"</a>
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
