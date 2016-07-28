<?
$subject_val = "Re: [OMPI devel] How to add a schedule algorithm to the pml";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 22 11:53:18 2010" -->
<!-- isoreceived="20100922155318" -->
<!-- sent="Wed, 22 Sep 2010 09:53:12 -0600" -->
<!-- isosent="20100922155312" -->
<!-- name="Kenneth Lloyd" -->
<!-- email="kenneth.lloyd_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] How to add a schedule algorithm to the pml" -->
<!-- id="006201cb5a6e$43644be0$ca2ce3a0$_at_lloyd@wattsys.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="21216A84-AE0F-44BE-86E3-4C1D954ED0D9_at_cisco.com" -->
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
<strong>From:</strong> Kenneth Lloyd (<em>kenneth.lloyd_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-22 11:53:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8528.php">Jeff Squyres: "Re: [OMPI devel] How to add a schedule algorithm to the pml"</a>
<li><strong>Previous message:</strong> <a href="8526.php">Jeff Squyres: "Re: [OMPI devel] Question regarding recently common shared-memory component"</a>
<li><strong>In reply to:</strong> <a href="8519.php">Jeff Squyres: "Re: [OMPI devel] How to add a schedule algorithm to the pml"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8528.php">Jeff Squyres: "Re: [OMPI devel] How to add a schedule algorithm to the pml"</a>
<li><strong>Reply:</strong> <a href="8528.php">Jeff Squyres: "Re: [OMPI devel] How to add a schedule algorithm to the pml"</a>
<li><strong>Reply:</strong> <a href="8557.php">Rainer Keller: "Re: [OMPI devel] How to add a schedule algorithm to the pml"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff,
<br>
<p>Is that EuroMPI2010 ob1 paper publicly available? I get involved in various NUMA partitioning/architecting studies and it seems there is not a lot of discussion in this area.
<br>
<p>Ken Lloyd
<br>
<p>==================
<br>
Kenneth A. Lloyd
<br>
Watt Systems Technologies Inc.
<br>
<p><p><p>-----Original Message-----
<br>
From: devel-bounces_at_[hidden] [mailto:devel-bounces_at_[hidden]] On Behalf Of Jeff Squyres
<br>
Sent: Wednesday, September 22, 2010 6:00 AM
<br>
To: Open MPI Developers
<br>
Subject: Re: [OMPI devel] How to add a schedule algorithm to the pml
<br>
<p>Sorry for the delay in replying -- I was in Europe for the past two weeks; travel always makes me waaaay behind on my INBOX...
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
_______________________________________________
devel mailing list
devel_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8528.php">Jeff Squyres: "Re: [OMPI devel] How to add a schedule algorithm to the pml"</a>
<li><strong>Previous message:</strong> <a href="8526.php">Jeff Squyres: "Re: [OMPI devel] Question regarding recently common shared-memory component"</a>
<li><strong>In reply to:</strong> <a href="8519.php">Jeff Squyres: "Re: [OMPI devel] How to add a schedule algorithm to the pml"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8528.php">Jeff Squyres: "Re: [OMPI devel] How to add a schedule algorithm to the pml"</a>
<li><strong>Reply:</strong> <a href="8528.php">Jeff Squyres: "Re: [OMPI devel] How to add a schedule algorithm to the pml"</a>
<li><strong>Reply:</strong> <a href="8557.php">Rainer Keller: "Re: [OMPI devel] How to add a schedule algorithm to the pml"</a>
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
