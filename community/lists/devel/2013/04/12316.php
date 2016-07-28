<?
$subject_val = "Re: [OMPI devel] Using external libevent";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 26 22:40:23 2013" -->
<!-- isoreceived="20130427024023" -->
<!-- sent="Fri, 26 Apr 2013 20:40:15 -0600" -->
<!-- isosent="20130427024015" -->
<!-- name="Orion Poplawski" -->
<!-- email="orion_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Using external libevent" -->
<!-- id="517B3A8F.1050401_at_cora.nwra.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC440502C3_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Using external libevent<br>
<strong>From:</strong> Orion Poplawski (<em>orion_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-04-26 22:40:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12317.php">Ralph Castain: "Re: [OMPI devel] Using external libevent"</a>
<li><strong>Previous message:</strong> <a href="12315.php">Ralph Castain: "Re: [OMPI devel] mpi_param_check value changed to false"</a>
<li><strong>In reply to:</strong> <a href="12304.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Using external libevent"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12317.php">Ralph Castain: "Re: [OMPI devel] Using external libevent"</a>
<li><strong>Reply:</strong> <a href="12317.php">Ralph Castain: "Re: [OMPI devel] Using external libevent"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 04/25/2013 04:48 AM, Jeff Squyres (jsquyres) wrote:
<br>
<span class="quotelev1">&gt; Orion --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I would just caution against using Open MPI with a thread-enabled libevent.  In most cases, the performance impact wouldn't matter, but the whole point of MPI is to be high performance.  The current 1.7 series does *not* use a thread-enabled libevent because it detracts from performance.  Hence, using a thread-enabled libevent detracts from Open MPI's main purpose.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If Open MPI is suddenly bundled with a thread-enabled libevent, *performance will go down* and users will be unhappy.  We have learned painfully over the years that users expect good performance out of the box -- if they have get &quot;bad&quot; performance out of the box and have to do something special to enable &quot;good&quot; performance, they'll be annoyed and blame Open MPI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So I would request that you do *not* link Open MPI against a thread-enabled libevent until we are able integrate such functionality properly, and take measures to mitigate the performance implications (which likely won't be until at least the 1.9 series).
</span><br>
<p>So, the Fedora Packaging committee has taken that part to heart, but not 
<br>
the bundling:
<br>
<p>* Bundling exception for libevent in openmpi -
<br>
&nbsp;&nbsp;&nbsp;<a href="https://fedorahosted.org/fpc/ticket/273">https://fedorahosted.org/fpc/ticket/273</a>  (spot, 16:16:52)
<br>
&nbsp;&nbsp;&nbsp;* ACTION: FPC is pretty universally against this bundling, spot will
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;try to make a libevent-nothread.so and update libevent.  (spot,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;16:26:38)
<br>
<p>So it looks like I will need to shortly be looking at how to link 
<br>
against an external libevent.  Any help with that would be greatly 
<br>
appreciated.
<br>
<p><pre>
-- 
Orion Poplawski
Technical Manager                     303-415-9701 x222
NWRA/CoRA Division                    FAX: 303-415-9702
3380 Mitchell Lane                  orion_at_[hidden]
Boulder, CO 80301              <a href="http://www.cora.nwra.com">http://www.cora.nwra.com</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12317.php">Ralph Castain: "Re: [OMPI devel] Using external libevent"</a>
<li><strong>Previous message:</strong> <a href="12315.php">Ralph Castain: "Re: [OMPI devel] mpi_param_check value changed to false"</a>
<li><strong>In reply to:</strong> <a href="12304.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Using external libevent"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12317.php">Ralph Castain: "Re: [OMPI devel] Using external libevent"</a>
<li><strong>Reply:</strong> <a href="12317.php">Ralph Castain: "Re: [OMPI devel] Using external libevent"</a>
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
