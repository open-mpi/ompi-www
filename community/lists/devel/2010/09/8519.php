<?
$subject_val = "Re: [OMPI devel] How to add a schedule algorithm to the pml";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 22 08:00:17 2010" -->
<!-- isoreceived="20100922120017" -->
<!-- sent="Wed, 22 Sep 2010 08:00:13 -0400" -->
<!-- isosent="20100922120013" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] How to add a schedule algorithm to the pml" -->
<!-- id="21216A84-AE0F-44BE-86E3-4C1D954ED0D9_at_cisco.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="AANLkTi=FmDdHsNpTTXLqM8vdg3D4s7st5tnoA2rP32e+_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] How to add a schedule algorithm to the pml<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-22 08:00:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8520.php">Jeff Squyres: "Re: [OMPI devel] How to add a schedule algorithm to the pml"</a>
<li><strong>Previous message:</strong> <a href="8518.php">Jeff Squyres: "Re: [OMPI devel] New Romio for OpenMPI available in bitbucket"</a>
<li><strong>In reply to:</strong> <a href="8482.php">&#213;&#197;&#190;&#167;: "[OMPI devel] How to add a schedule algorithm to the pml"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8520.php">Jeff Squyres: "Re: [OMPI devel] How to add a schedule algorithm to the pml"</a>
<li><strong>Reply:</strong> <a href="8520.php">Jeff Squyres: "Re: [OMPI devel] How to add a schedule algorithm to the pml"</a>
<li><strong>Reply:</strong> <a href="8527.php">Kenneth Lloyd: "Re: [OMPI devel] How to add a schedule algorithm to the pml"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry for the delay in replying -- I was in Europe for the past two weeks; travel always makes me waaaay behind on my INBOX...
<br>
<p><p>On Sep 14, 2010, at 9:56 PM, &#229;&#188;&#160;&#230;&#153;&#182; wrote:
<br>
<p><span class="quotelev1">&gt; I tried to add a schedule algorithm to the pml component ,ob1 etc. Poorly I can only find a  paper named  &quot;Open MPI: A Flexible High Performance MPI&quot; and some annotation in the source file.  From them , I know ob1 has implemented   round-robin&amp; weighted distribution algorithm. But after tracking the MPI_Send(),I cann't figure out 
</span><br>
<span class="quotelev1">&gt; the location of these implement ,let alone to add a new schedule algorithm. 
</span><br>
<span class="quotelev1">&gt; I have two questions :
</span><br>
<span class="quotelev1">&gt; 1.The location of the schedule algorithm ?
</span><br>
<p>It's complicated -- I'd say that the PML is probably among the most complicated sections of Open MPI because it is the main &quot;engine&quot; that enforces the MPI point-to-point semantics.  The algorithm is fairly well distribute throughout the PML source code.  :-\
<br>
<p><span class="quotelev1">&gt; 2.There are five components :cm,crcpw ,csum ,ob1,V in the pml framework . The function of these components?
</span><br>
<p>cm: this component drives the MTL point-to-point components.  It is mainly a thin wrapper for network transports that provide their own MPI-like matching semantics.  Hence, most of the MPI semantics are effectively done in the lower layer (i.e., in the MTL components and their dependent libraries).  You probably won't be able to do much here, because such transports (MX, Portals, etc.) do most of their semantics in the network layer -- not in Open MPI.  If you have a matching network layer, this is the PML that you probably use (MX, Portals, PSM).
<br>
<p>crcpw: this is a fork of the ob1 PML; it add some failover semantics.
<br>
<p>csum: this is also a fork of the ob1 PML; it adds checksumming semantics (so you can tell if the underlying transport had an error).
<br>
<p>v: this PML uses logging and replay to effect some level of fault tolerance.  It's a distant fork of the ob1 PML, but has quite a few significant differences.
<br>
<p>ob1: this is the &quot;main&quot; PML that most users use (TCP, shared memory, OpenFabrics, etc.).  It gangs together one or more BTLs to send/receive messages across individual network transports.  Hence, it supports true multi-device/multi-rail algorithms.  The BML (BTL multiplexing layer) is a thin management later that marshals all the BTLs in the process together -- it's mainly array handling, etc.  The ob1 PML is the one that decides multi-rail/device splitting, etc.  The INRIA folks just published a paper last week at Euro MPI about adjusting the ob1 scheduling algorithm to also take NUMA/NUNA/NUIOA effects into account, not just raw bandwidth calculations.
<br>
<p>Hope this helps!
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8520.php">Jeff Squyres: "Re: [OMPI devel] How to add a schedule algorithm to the pml"</a>
<li><strong>Previous message:</strong> <a href="8518.php">Jeff Squyres: "Re: [OMPI devel] New Romio for OpenMPI available in bitbucket"</a>
<li><strong>In reply to:</strong> <a href="8482.php">&#213;&#197;&#190;&#167;: "[OMPI devel] How to add a schedule algorithm to the pml"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8520.php">Jeff Squyres: "Re: [OMPI devel] How to add a schedule algorithm to the pml"</a>
<li><strong>Reply:</strong> <a href="8520.php">Jeff Squyres: "Re: [OMPI devel] How to add a schedule algorithm to the pml"</a>
<li><strong>Reply:</strong> <a href="8527.php">Kenneth Lloyd: "Re: [OMPI devel] How to add a schedule algorithm to the pml"</a>
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
