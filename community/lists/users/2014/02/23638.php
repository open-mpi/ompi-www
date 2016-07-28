<?
$subject_val = "[OMPI users] OrangeFS ROMIO support";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 25 08:16:05 2014" -->
<!-- isoreceived="20140225131605" -->
<!-- sent="Tue, 25 Feb 2014 14:15:59 +0100 (CET)" -->
<!-- isosent="20140225131559" -->
<!-- name="vithanousek" -->
<!-- email="vithanousek_at_[hidden]" -->
<!-- subject="[OMPI users] OrangeFS ROMIO support" -->
<!-- id="16F.F2Rm.5iqEc4uISIM.1J39UF_at_seznam.cz" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI users] OrangeFS ROMIO support<br>
<strong>From:</strong> vithanousek (<em>vithanousek_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-25 08:15:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23639.php">Edgar Gabriel: "Re: [OMPI users] OrangeFS ROMIO support"</a>
<li><strong>Previous message:</strong> <a href="23637.php">Jeff Squyres (jsquyres): "Re: [OMPI users] linking with openmpi version 1.6.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23639.php">Edgar Gabriel: "Re: [OMPI users] OrangeFS ROMIO support"</a>
<li><strong>Reply:</strong> <a href="23639.php">Edgar Gabriel: "Re: [OMPI users] OrangeFS ROMIO support"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,

At fisrt, please, excuse my poor level of english.

I'm little bit confused by versions of OpenMPI and ROMIO, because i met 
siliar bugs reported in multiple versions. Im buliding version 1.6.5 
(current stable).

I compiled OpenMPI 1.6.5 with included ROMIO by doing this:

./configure --prefix=/usr/local/openmpi_1.6.5_romio \ --with-io-romio-flags=
'--with-pvfs2=/usr/local/orangefs'
make -j 32

and I got error message:
(...)
ad_pvfs2_io_dtype.c: In function 'convert_named': 
ad_pvfs2_io_dtype.c:581: error: switch quantity not an integer 
ad_pvfs2_io_dtype.c:583: error: pointers are not permitted as case values 
(...)

I rewrited &quot;switch&quot; construction to multiple &quot;if&quot; constructions. This solve 
compiling problem. 
But I cant use myself edited source code of OpenMPI on our cluster. 
Is this bug of sourcecode and will be fixed, or am I doing something wrong?

Thanks for reply
Hanousek V&#195;&#173;t
--=_7a3ed345095707f848fbbe20&#170;8dba96-fcaa-5da1-a4d4-c455285ba8e2_Content-Type: text/html;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;charset=utf-8
<br>
Content-Transfer-Encoding: quoted-printable
<br>
<p>&lt;html&gt;&lt;body&gt;Hello,&lt;br&gt;&lt;br&gt;At fisrt, please, excuse my poor level of english.&lt;br&gt;&lt;br&gt;I'm little bit confused by versions of OpenMPI and ROMIO, because i met siliar bugs reported in multiple versions. Im buliding version 1.6.5 (current stable).&lt;br&gt;&lt;br&gt;I compiled OpenMPI 1.6.5 with included ROMIO by doing this:&lt;br&gt;&lt;br&gt;./configure --prefix=/usr/local/openmpi_1.6.5_romio \
--with-io-romio-flags='--with-pvfs2=/usr/local/orangefs'&lt;br&gt;make -j 32&lt;br&gt;&lt;br&gt;and I got error message:&lt;br&gt;(...)&lt;br&gt;ad_pvfs2_io_dtype.c: In function 'convert_named':
&lt;br&gt;ad_pvfs2_io_dtype.c:581: error: switch quantity not an integer
&lt;br&gt;ad_pvfs2_io_dtype.c:583: error: pointers are not permitted as case values

&lt;br&gt;(...)&lt;br&gt;&lt;br&gt;I rewrited &quot;switch&quot; construction to multiple &quot;if&quot; constructions. This solve compiling problem. &lt;br&gt;But I cant use myself edited source code of OpenMPI on our cluster. &lt;br&gt;Is this bug of sourcecode and will be fixed, or am I doing something wrong?&lt;br&gt;&lt;br&gt;Thanks for reply&lt;br&gt;Hanousek V&#195;&#173;t&lt;br&gt;&lt;/body&gt;&lt;/html&gt;--=_7a3ed345095707f848fbbe20&#170;8dba96-fcaa-5da1-a4d4-c455285ba8e2_=--
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23639.php">Edgar Gabriel: "Re: [OMPI users] OrangeFS ROMIO support"</a>
<li><strong>Previous message:</strong> <a href="23637.php">Jeff Squyres (jsquyres): "Re: [OMPI users] linking with openmpi version 1.6.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23639.php">Edgar Gabriel: "Re: [OMPI users] OrangeFS ROMIO support"</a>
<li><strong>Reply:</strong> <a href="23639.php">Edgar Gabriel: "Re: [OMPI users] OrangeFS ROMIO support"</a>
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
