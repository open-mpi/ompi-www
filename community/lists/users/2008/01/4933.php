<?
$subject_val = "Re: [OMPI users] general problems with Open mpi and WRF";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 31 07:44:13 2008" -->
<!-- isoreceived="20080131124413" -->
<!-- sent="Thu, 31 Jan 2008 13:44:04 +0100" -->
<!-- isosent="20080131124404" -->
<!-- name="Martin Horvat" -->
<!-- email="martin.horvat_at_[hidden]" -->
<!-- subject="Re: [OMPI users] general problems with Open mpi and WRF" -->
<!-- id="20080131134404.762d07da_at_localhost.localdomain" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4AE3B7AC-8B05-42A9-AE58-FEF36C22D4A7_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] general problems with Open mpi and WRF<br>
<strong>From:</strong> Martin Horvat (<em>martin.horvat_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-31 07:44:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4934.php">Robert Latham: "Re: [OMPI users] ADIOI_Set_lock failure"</a>
<li><strong>Previous message:</strong> <a href="4932.php">&#197;ke Sandgren: "Re: [OMPI users] SCALAPACK: Segmentation Fault (11) and Signal	code:Address not mapped (1)"</a>
<li><strong>In reply to:</strong> <a href="4931.php">Jeff Squyres: "Re: [OMPI users] general problems with Open mpi and WRF"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thank you for the response and help.
<br>
<p>I have now compiled the openmpi and WRF again and magically there was no errors. I think that previously I forgot to load ifort+icc variables. So this could be source of the problems
<br>
<p>I hope that now everything will go without any problems.
<br>
<p>Thank you again.
<br>
<p><pre>
--
Martin
On Wed, 30 Jan 2008 21:26:27 -0500
Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
&gt; On Jan 30, 2008, at 2:36 AM, Martin Horvat wrote:
&gt; 
&gt; &gt; (1) First I would like to clarify the problem connected to open-mpi.  
&gt; &gt; It was compiled with intel suit:
&gt; &gt;
&gt; &gt; ifort --version
&gt; &gt; ifort (IFORT) 10.0 20070613
&gt; &gt; Copyright (C) 1985-2007 Intel Corporation.  All rights reserved.
&gt; 
&gt; I build and test with the intel 10.0 compilers every night; they  
&gt; should work fine.
&gt; 
&gt; &gt;
&gt; &gt; using configuraton
&gt; &gt;
&gt; &gt; ./configure --prefix=/data/horvat/rahela/openmpi CC=icc CXX=icpc  
&gt; &gt; F77=ifort FC=ifort --without-memory-manager
&gt; &gt;
&gt; &gt; The flag &quot;--without-memory-manager&quot; is used as I had problems with  
&gt; &gt; some &quot;opal wrapper&quot; at compiling stage.
&gt; 
&gt; What problem did you have that forced you to use --without-memory- 
&gt; manager?
&gt; 
&gt; &gt; Perhaps it is important to mention that I have compiled open_mpi as  
&gt; &gt; a normal user on the cluster with maui/torque schedule manager.
&gt; 
&gt; That should be fine; I do this all the time.
&gt; 
&gt; &gt; By running &quot;ompi_info -a&quot; in by bash shell i get first number  
&gt; &gt; numerious such messages
&gt; &gt;
&gt; &gt; mca: base: component_find: unable to open ***
&gt; 
&gt; It looks like you have some kind of fundamental problem with your Open  
&gt; MPI installation.  If all those plugins can't be found, Open MPI will  
&gt; not function properly at all.
&gt; 
&gt; Can you provide all the information listed here:
&gt; 
&gt;      <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
&gt; 
&gt; -- 
&gt; Jeff Squyres
&gt; Cisco Systems
&gt; 
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
-- 
Martin Horvat,  PhD in theoretical physics
Faculty of Mathematics and Physics
Department of Physics
University of Ljubljana
Jadranska 19
SI-1000 Ljubljana
Slovenia
tel: +386 (0) 1 4766-588, 
fax: +386  (0) 1 2517-281
web: <a href="http://chaos.fiz.uni-lj.si/~horvat/">http://chaos.fiz.uni-lj.si/~horvat/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4934.php">Robert Latham: "Re: [OMPI users] ADIOI_Set_lock failure"</a>
<li><strong>Previous message:</strong> <a href="4932.php">&#197;ke Sandgren: "Re: [OMPI users] SCALAPACK: Segmentation Fault (11) and Signal	code:Address not mapped (1)"</a>
<li><strong>In reply to:</strong> <a href="4931.php">Jeff Squyres: "Re: [OMPI users] general problems with Open mpi and WRF"</a>
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
