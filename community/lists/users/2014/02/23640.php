<?
$subject_val = "Re: [OMPI users] OrangeFS ROMIO support";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 25 08:33:47 2014" -->
<!-- isoreceived="20140225133347" -->
<!-- sent="Tue, 25 Feb 2014 14:33:44 +0100 (CET)" -->
<!-- isosent="20140225133344" -->
<!-- name="vithanousek" -->
<!-- email="vithanousek_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OrangeFS ROMIO support" -->
<!-- id="1C3.F2OC.4JAx}yOooIQ.1J39ku_at_seznam.cz" -->
<!-- charset="utf-8" -->
<!-- inreplyto="530C9A01.2020400_at_cs.uh.edu" -->
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
<strong>From:</strong> vithanousek (<em>vithanousek_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-25 08:33:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23641.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OrangeFS ROMIO support"</a>
<li><strong>Previous message:</strong> <a href="23639.php">Edgar Gabriel: "Re: [OMPI users] OrangeFS ROMIO support"</a>
<li><strong>In reply to:</strong> <a href="23639.php">Edgar Gabriel: "Re: [OMPI users] OrangeFS ROMIO support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23641.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OrangeFS ROMIO support"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Okey.
Thanks You for you reply.

Hanousek V&#195;&#173;t




---------- P&#197;&#175;vodn&#195;&#173; zpr&#195;&#161;va ----------
Od: Edgar Gabriel &lt;gabriel_at_[hidden]&gt;
Komu: Open MPI Users &lt;users_at_[hidden]&gt;
Datum: 25. 2. 2014 14:26:43
P&#197;&#153;edm&#196;&#155;t: Re: [OMPI users] OrangeFS ROMIO support

&quot;this was/is a bug in ROMIO, in which they assume a datatype is an int. I
fixed it originally in a previous version of Open MPI on the trunk, but
it did not get ported upstream, so we might have to do the same fix again.

Thanks
Edgar

On 2/25/2014 7:15 AM, vithanousek wrote:
&gt; Hello,
&gt; 
&gt; At fisrt, please, excuse my poor level of english.
&gt; 
&gt; I'm little bit confused by versions of OpenMPI and ROMIO, because i met
&gt; siliar bugs reported in multiple versions. Im buliding version 1.6.5
&gt; (current stable).
&gt; 
&gt; I compiled OpenMPI 1.6.5 with included ROMIO by doing this:
&gt; 
&gt; ./configure --prefix=/usr/local/openmpi_1.6.5_romio \
&gt; --with-io-romio-flags='--with-pvfs2=/usr/local/orangefs'
&gt; make -j 32
&gt; 
&gt; and I got error message:
&gt; (...)
&gt; ad_pvfs2_io_dtype.c: In function 'convert_named':
&gt; ad_pvfs2_io_dtype.c:581: error: switch quantity not an integer
&gt; ad_pvfs2_io_dtype.c:583: error: pointers are not permitted as case values
&gt; (...)
&gt; 
&gt; I rewrited &quot;switch&quot; construction to multiple &quot;if&quot; constructions. This
&gt; solve compiling problem.
&gt; But I cant use myself edited source code of OpenMPI on our cluster.
&gt; Is this bug of sourcecode and will be fixed, or am I doing something 
wrong?
&gt; 
&gt; Thanks for reply
&gt; Hanousek V&#195;&#173;t
&gt; 
&gt; 
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; 

-- 
Edgar Gabriel
Associate Professor
Parallel Software Technologies Lab <a href="http://pstl.cs.uh.edu">http://pstl.cs.uh.edu</a>
Department of Computer Science University of Houston
Philip G. Hoffman Hall, Room 524 Houston, TX-77204, USA
Tel: +1 (713) 743-3857 Fax: +1 (713) 743-3335_______________________________
________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&quot;--=_0811fc0954ba75c249f6dc17&#170;8dba96-fcaa-5da1-a4d4-c455285ba8e2_Content-Type: text/html;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;charset=utf-8
<br>
Content-Transfer-Encoding: quoted-printable
<br>
<p>&lt;html&gt;&lt;body&gt;Okey.&lt;br&gt;Thanks You for you reply.&lt;br&gt;&lt;br&gt;Hanousek V&#195;&#173;t&lt;br&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;---------- P&#197;&#175;vodn&#195;&#173; zpr&#195;&#161;va ----------&lt;br&gt;Od: Edgar Gabriel &amp;lt;gabriel_at_[hidden]&amp;gt;&lt;br&gt;Komu: Open MPI Users &amp;lt;users_at_[hidden]&amp;gt;&lt;br&gt;Datum: 25. 2. 2014 14:26:43&lt;br&gt;P&#197;&#153;edm&#196;&#155;t: Re: [OMPI users] OrangeFS ROMIO support&lt;/p&gt;&lt;br&gt;&lt;blockquote&gt;this was/is a bug in ROMIO, in which they assume a datatype is an int. I&lt;br&gt;fixed it originally in a previous version of Open MPI on the trunk, but&lt;br&gt;it did not get ported upstream, so we might have to do the same fix again.&lt;br&gt;&lt;br&gt;Thanks&lt;br&gt;Edgar&lt;br&gt;&lt;br&gt;On 2/25/2014 7:15 AM, vithanousek wrote:&lt;br&gt;&amp;gt; Hello,&lt;br&gt;&amp;gt; &lt;br&gt;&amp;gt; At fisrt, please, excuse my poor level of english.&lt;br&gt;&amp;gt; &lt;br&gt;&amp;gt; I'm little bit confused by versions of OpenMPI and ROMIO, because i met&lt;br&gt;&amp;gt; siliar bugs reported in multiple versions. Im buliding version 1.6.5&lt;br&gt;&amp;gt; (current stable).&lt;br&gt;&amp;gt; &lt;br&gt;&amp;gt; I compiled OpenMPI 1.6.5 with included ROMIO by doing this:&lt;br&gt;&amp;gt; &lt;br&gt;&amp;gt; ./configure --prefix=/usr/local/openmpi_1.6.5_romio \&lt;br&gt;&amp;gt; --with-io-romio-flags='--with-pvfs2=/usr/local/orangefs'&lt;br&gt;&amp;gt; make -j 32&lt;br&gt;&amp;gt; &lt;br&gt;&amp;gt; and I got error message:&lt;br&gt;&amp;gt; (...)&lt;br&gt;&amp;gt; ad_pvfs2_io_dtype.c: In function 'convert_named':&lt;br&gt;&amp;gt; ad_pvfs2_io_dtype.c:581: error: switch quantity not an integer&lt;br&gt;&amp;gt; ad_pvfs2_io_dtype.c:583: error: pointers are not permitted as case values&lt;br&gt;&amp;gt; (...)&lt;br&gt;&amp;gt; &lt;br&gt;&amp;gt; I rewrited &quot;switch&quot; construction to multiple &quot;if&quot; constructions. This&lt;br&gt;&amp;gt; solve compiling problem.&lt;br&gt;&amp;gt; But I cant use myself edited source code of OpenMPI on our cluster.&lt;br&gt;&amp;gt; Is this bug of sourcecode and will be fixed, or am I doing something wrong?&lt;br&gt;&amp;gt; &lt;br&gt;&amp;gt; Thanks for reply&lt;br&gt;&amp;gt; Hanousek V&#195;&#173;t&lt;br&gt;&amp;gt; &lt;br&gt;&amp;gt; &lt;br&gt;&amp;gt; _______________________________________________&lt;br&gt;&amp;gt; users mailing list&lt;br&gt;&amp;gt; users_at_[hidden]&lt;br&gt;&amp;gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users<br">http://www.open-mpi.org/mailman/listinfo.cgi/users<br</a>&gt;&amp;gt; &lt;br&gt;&lt;br&gt;-- &lt;br&gt;Edgar Gabriel&lt;br&gt;Associate Professor&lt;br&gt;Parallel Software Technologies Lab      <a href="http://pstl.cs.uh.edu<br">http://pstl.cs.uh.edu<br</a>&gt;Department of Computer Science          University of Houston&lt;br&gt;Philip G. Hoffman Hall, Room 524        Houston, TX-77204, USA&lt;br&gt;Tel: +1 (713) 743-3857                  Fax: +1 (713) 743-3335_______________________________________________&lt;br&gt;users mailing list&lt;br&gt;users_at_[hidden]&lt;br&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users</blockquote">http://www.open-mpi.org/mailman/listinfo.cgi/users</blockquote</a>&gt;&lt;/body&gt;&lt;/html&gt;--=_0811fc0954ba75c249f6dc17&#170;8dba96-fcaa-5da1-a4d4-c455285ba8e2_=--
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23641.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OrangeFS ROMIO support"</a>
<li><strong>Previous message:</strong> <a href="23639.php">Edgar Gabriel: "Re: [OMPI users] OrangeFS ROMIO support"</a>
<li><strong>In reply to:</strong> <a href="23639.php">Edgar Gabriel: "Re: [OMPI users] OrangeFS ROMIO support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23641.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OrangeFS ROMIO support"</a>
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
