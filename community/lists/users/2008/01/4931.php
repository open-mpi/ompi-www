<?
$subject_val = "Re: [OMPI users] general problems with Open mpi and WRF";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 30 21:26:54 2008" -->
<!-- isoreceived="20080131022654" -->
<!-- sent="Wed, 30 Jan 2008 21:26:27 -0500" -->
<!-- isosent="20080131022627" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] general problems with Open mpi and WRF" -->
<!-- id="4AE3B7AC-8B05-42A9-AE58-FEF36C22D4A7_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20080130083606.1cb3e0e8_at_localhost.localdomain" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-30 21:26:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4932.php">Åke Sandgren: "Re: [OMPI users] SCALAPACK: Segmentation Fault (11) and Signal	code:Address not mapped (1)"</a>
<li><strong>Previous message:</strong> <a href="4930.php">Jeff Squyres: "Re: [OMPI users] Can't compile C++ program with extern &quot;C&quot;	{	#include mpi.h }"</a>
<li><strong>In reply to:</strong> <a href="4911.php">Martin Horvat: "[OMPI users] general problems with Open mpi and WRF"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4933.php">Martin Horvat: "Re: [OMPI users] general problems with Open mpi and WRF"</a>
<li><strong>Reply:</strong> <a href="4933.php">Martin Horvat: "Re: [OMPI users] general problems with Open mpi and WRF"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 30, 2008, at 2:36 AM, Martin Horvat wrote:
<br>
<p><span class="quotelev1">&gt; (1) First I would like to clarify the problem connected to open-mpi.  
</span><br>
<span class="quotelev1">&gt; It was compiled with intel suit:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ifort --version
</span><br>
<span class="quotelev1">&gt; ifort (IFORT) 10.0 20070613
</span><br>
<span class="quotelev1">&gt; Copyright (C) 1985-2007 Intel Corporation.  All rights reserved.
</span><br>
<p>I build and test with the intel 10.0 compilers every night; they  
<br>
should work fine.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; using configuraton
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/data/horvat/rahela/openmpi CC=icc CXX=icpc  
</span><br>
<span class="quotelev1">&gt; F77=ifort FC=ifort --without-memory-manager
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The flag &quot;--without-memory-manager&quot; is used as I had problems with  
</span><br>
<span class="quotelev1">&gt; some &quot;opal wrapper&quot; at compiling stage.
</span><br>
<p>What problem did you have that forced you to use --without-memory- 
<br>
manager?
<br>
<p><span class="quotelev1">&gt; Perhaps it is important to mention that I have compiled open_mpi as  
</span><br>
<span class="quotelev1">&gt; a normal user on the cluster with maui/torque schedule manager.
</span><br>
<p>That should be fine; I do this all the time.
<br>
<p><span class="quotelev1">&gt; By running &quot;ompi_info -a&quot; in by bash shell i get first number  
</span><br>
<span class="quotelev1">&gt; numerious such messages
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mca: base: component_find: unable to open ***
</span><br>
<p>It looks like you have some kind of fundamental problem with your Open  
<br>
MPI installation.  If all those plugins can't be found, Open MPI will  
<br>
not function properly at all.
<br>
<p>Can you provide all the information listed here:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4932.php">Åke Sandgren: "Re: [OMPI users] SCALAPACK: Segmentation Fault (11) and Signal	code:Address not mapped (1)"</a>
<li><strong>Previous message:</strong> <a href="4930.php">Jeff Squyres: "Re: [OMPI users] Can't compile C++ program with extern &quot;C&quot;	{	#include mpi.h }"</a>
<li><strong>In reply to:</strong> <a href="4911.php">Martin Horvat: "[OMPI users] general problems with Open mpi and WRF"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4933.php">Martin Horvat: "Re: [OMPI users] general problems with Open mpi and WRF"</a>
<li><strong>Reply:</strong> <a href="4933.php">Martin Horvat: "Re: [OMPI users] general problems with Open mpi and WRF"</a>
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
