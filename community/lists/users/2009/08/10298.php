<?
$subject_val = "Re: [OMPI users] torque pbs behaviour...";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 11 09:58:51 2009" -->
<!-- isoreceived="20090811135851" -->
<!-- sent="Tue, 11 Aug 2009 09:58:45 -0400" -->
<!-- isosent="20090811135845" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] torque pbs behaviour..." -->
<!-- id="DB2F57D9-7CD2-4B2B-83E1-2CA93935AB0D_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="BDF7DE75-7AAB-42DD-896E-EED56C40F556_at_uvic.ca" -->
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
<strong>Subject:</strong> Re: [OMPI users] torque pbs behaviour...<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-11 09:58:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10299.php">Ralph Castain: "Re: [OMPI users] torque pbs behaviour..."</a>
<li><strong>Previous message:</strong> <a href="10297.php">Klymak Jody: "Re: [OMPI users] torque pbs behaviour..."</a>
<li><strong>In reply to:</strong> <a href="10297.php">Klymak Jody: "Re: [OMPI users] torque pbs behaviour..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10299.php">Ralph Castain: "Re: [OMPI users] torque pbs behaviour..."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 11, 2009, at 9:43 AM, Klymak Jody wrote:
<br>
<p><span class="quotelev1">&gt; [xserve03.local][[61029,1],4][btl_tcp_endpoint.c:
</span><br>
<span class="quotelev1">&gt; 486:mca_btl_tcp_endpoint_recv_connect_ack] received unexpected process
</span><br>
<span class="quotelev1">&gt; identifier [[61029,1],3]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>This would well be caused by a version mismatch between your nodes.   
<br>
E.g., if one node is running OMPI vx.y.z and another is running  
<br>
va.b.c.  We don't check for version mismatch in network  
<br>
communications, and our wire protocols have changed between versions.   
<br>
So if vx.y.z sends something that is not understood between va.b.c,  
<br>
something like the above message could occur.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10299.php">Ralph Castain: "Re: [OMPI users] torque pbs behaviour..."</a>
<li><strong>Previous message:</strong> <a href="10297.php">Klymak Jody: "Re: [OMPI users] torque pbs behaviour..."</a>
<li><strong>In reply to:</strong> <a href="10297.php">Klymak Jody: "Re: [OMPI users] torque pbs behaviour..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10299.php">Ralph Castain: "Re: [OMPI users] torque pbs behaviour..."</a>
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
