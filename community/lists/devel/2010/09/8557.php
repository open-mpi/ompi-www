<?
$subject_val = "Re: [OMPI devel] How to add a schedule algorithm to the pml";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 27 05:36:28 2010" -->
<!-- isoreceived="20100927093628" -->
<!-- sent="Mon, 27 Sep 2010 11:37:34 +0200" -->
<!-- isosent="20100927093734" -->
<!-- name="Rainer Keller" -->
<!-- email="keller_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] How to add a schedule algorithm to the pml" -->
<!-- id="201009271137.34672.keller_at_hlrs.de" -->
<!-- charset="utf-8" -->
<!-- inreplyto="006201cb5a6e$43644be0$ca2ce3a0$_at_lloyd@wattsys.com" -->
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
<strong>From:</strong> Rainer Keller (<em>keller_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-27 05:37:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8558.php">Jeff Squyres: "Re: [OMPI devel] Setting AUTOMAKE_JOBS"</a>
<li><strong>Previous message:</strong> <a href="8556.php">Ralph Castain: "Re: [OMPI devel] Setting AUTOMAKE_JOBS"</a>
<li><strong>In reply to:</strong> <a href="8527.php">Kenneth Lloyd: "Re: [OMPI devel] How to add a schedule algorithm to the pml"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Kenneth,
<br>
please note, that the slides of the conference's program have been uploaded to
<br>
&nbsp;&nbsp;<a href="http://www.eurompi2010.org/program/">http://www.eurompi2010.org/program/</a>
<br>
<p>Best regards,
<br>
Rainer
<br>
<p><p>On Wednesday 22 September 2010 17:53:12 Kenneth Lloyd wrote:
<br>
<span class="quotelev1">&gt; Jeff,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is that EuroMPI2010 ob1 paper publicly available? I get involved in various
</span><br>
<span class="quotelev1">&gt; NUMA partitioning/architecting studies and it seems there is not a lot of
</span><br>
<span class="quotelev1">&gt; discussion in this area.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ken Lloyd
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ==================
</span><br>
<span class="quotelev1">&gt; Kenneth A. Lloyd
</span><br>
<span class="quotelev1">&gt; Watt Systems Technologies Inc.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: devel-bounces_at_[hidden] [mailto:devel-bounces_at_[hidden]] On
</span><br>
<span class="quotelev1">&gt; Behalf Of Jeff Squyres Sent: Wednesday, September 22, 2010 6:00 AM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Developers
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI devel] How to add a schedule algorithm to the pml
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sorry for the delay in replying -- I was in Europe for the past two weeks;
</span><br>
<span class="quotelev1">&gt; travel always makes me waaaay behind on my INBOX...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Sep 14, 2010, at 9:56 PM, &#229;&#188;&#160;&#230;&#153;&#182; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; I tried to add a schedule algorithm to the pml component ,ob1 etc. Poorly
</span><br>
<span class="quotelev2">&gt; &gt; I can only find a  paper named  &quot;Open MPI: A Flexible High Performance
</span><br>
<span class="quotelev2">&gt; &gt; MPI&quot; and some annotation in the source file.  From them , I know ob1 has
</span><br>
<span class="quotelev2">&gt; &gt; implemented   round-robin&amp; weighted distribution algorithm. But after
</span><br>
<span class="quotelev2">&gt; &gt; tracking the MPI_Send(),I cann't figure out the location of these
</span><br>
<span class="quotelev2">&gt; &gt; implement ,let alone to add a new schedule algorithm. I have two
</span><br>
<span class="quotelev2">&gt; &gt; questions :
</span><br>
<span class="quotelev2">&gt; &gt; 1.The location of the schedule algorithm ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It's complicated -- I'd say that the PML is probably among the most
</span><br>
<span class="quotelev1">&gt; complicated sections of Open MPI because it is the main &quot;engine&quot; that
</span><br>
<span class="quotelev1">&gt; enforces the MPI point-to-point semantics.  The algorithm is fairly well
</span><br>
<span class="quotelev1">&gt; distribute throughout the PML source code.  :-\
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 2.There are five components :cm,crcpw ,csum ,ob1,V in the pml framework .
</span><br>
<span class="quotelev2">&gt; &gt; The function of these components?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; cm: this component drives the MTL point-to-point components.  It is mainly
</span><br>
<span class="quotelev1">&gt; a thin wrapper for network transports that provide their own MPI-like
</span><br>
<span class="quotelev1">&gt; matching semantics.  Hence, most of the MPI semantics are effectively done
</span><br>
<span class="quotelev1">&gt; in the lower layer (i.e., in the MTL components and their dependent
</span><br>
<span class="quotelev1">&gt; libraries).  You probably won't be able to do much here, because such
</span><br>
<span class="quotelev1">&gt; transports (MX, Portals, etc.) do most of their semantics in the network
</span><br>
<span class="quotelev1">&gt; layer -- not in Open MPI.  If you have a matching network layer, this is
</span><br>
<span class="quotelev1">&gt; the PML that you probably use (MX, Portals, PSM).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; crcpw: this is a fork of the ob1 PML; it add some failover semantics.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; csum: this is also a fork of the ob1 PML; it adds checksumming semantics
</span><br>
<span class="quotelev1">&gt; (so you can tell if the underlying transport had an error).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; v: this PML uses logging and replay to effect some level of fault
</span><br>
<span class="quotelev1">&gt; tolerance.  It's a distant fork of the ob1 PML, but has quite a few
</span><br>
<span class="quotelev1">&gt; significant differences.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ob1: this is the &quot;main&quot; PML that most users use (TCP, shared memory,
</span><br>
<span class="quotelev1">&gt; OpenFabrics, etc.).  It gangs together one or more BTLs to send/receive
</span><br>
<span class="quotelev1">&gt; messages across individual network transports.  Hence, it supports true
</span><br>
<span class="quotelev1">&gt; multi-device/multi-rail algorithms.  The BML (BTL multiplexing layer) is a
</span><br>
<span class="quotelev1">&gt; thin management later that marshals all the BTLs in the process together
</span><br>
<span class="quotelev1">&gt; -- it's mainly array handling, etc.  The ob1 PML is the one that decides
</span><br>
<span class="quotelev1">&gt; multi-rail/device splitting, etc.  The INRIA folks just published a paper
</span><br>
<span class="quotelev1">&gt; last week at Euro MPI about adjusting the ob1 scheduling algorithm to also
</span><br>
<span class="quotelev1">&gt; take NUMA/NUNA/NUIOA effects into account, not just raw bandwidth
</span><br>
<span class="quotelev1">&gt; calculations.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hope this helps!
</span><br>
<p><pre>
-- 
----------------------------------------------------------------
 Dr.-Ing. Rainer Keller  <a href="http://www.hlrs.de/people/keller">http://www.hlrs.de/people/keller</a>
 HLRS                         Tel: ++49 (0)711-685 6 5858
 Nobelstrasse 19                 Fax: ++49 (0)711-685 6 5832
 70550 Stuttgart                    email: keller_at_[hidden]     
 Germany                             AIM/Skype:rusraink
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8558.php">Jeff Squyres: "Re: [OMPI devel] Setting AUTOMAKE_JOBS"</a>
<li><strong>Previous message:</strong> <a href="8556.php">Ralph Castain: "Re: [OMPI devel] Setting AUTOMAKE_JOBS"</a>
<li><strong>In reply to:</strong> <a href="8527.php">Kenneth Lloyd: "Re: [OMPI devel] How to add a schedule algorithm to the pml"</a>
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
