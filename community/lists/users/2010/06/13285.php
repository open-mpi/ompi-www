<?
$subject_val = "Re: [OMPI users] Unable to connect to a server using MX MTL with TCP";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun  9 15:33:45 2010" -->
<!-- isoreceived="20100609193345" -->
<!-- sent="Wed, 9 Jun 2010 15:33:40 -0400" -->
<!-- isosent="20100609193340" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Unable to connect to a server using MX MTL with TCP" -->
<!-- id="CDA46015-F51A-41F0-856A-485ECD9AEB0D_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="3C7F9F32-1CC5-4415-8A5F-65CA34C777BF_at_myri.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Unable to connect to a server using MX MTL with TCP<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-09 15:33:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13286.php">Jeff Squyres: "Re: [OMPI users] Behaviour of MPI_Cancel when using 'large' messages"</a>
<li><strong>Previous message:</strong> <a href="13284.php">Jeff Squyres: "Re: [OMPI users] Debug info on Darwin"</a>
<li><strong>In reply to:</strong> <a href="13229.php">Scott Atchley: "Re: [OMPI users] Unable to connect to a server using MX MTL with TCP"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13293.php">Audet, Martin: "Re: [OMPI users] Unable to connect to a server using MX MTL with TCP"</a>
<li><strong>Reply:</strong> <a href="13293.php">Audet, Martin: "Re: [OMPI users] Unable to connect to a server using MX MTL with TCP"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 5, 2010, at 7:52 AM, Scott Atchley wrote:
<br>
<p><span class="quotelev1">&gt; I do not think this is a supported scenario. George or Jeff can correct me, but when you use the MX MTL you are using the pml cm and not the pml ob1. The BTLs are part of ob1. When using the MX MTL, it cannot use the TCP BTL.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You only solution would be to use the MX BTL.
</span><br>
<p>Sorry for the delayed reply.
<br>
<p>Scott is correct; the MX MTL uses the &quot;cm&quot; PML.  The &quot;cm&quot; PML can only use *one* MTL at a time (little known fact of Open MPI lore: &quot;cm&quot; stands for several things, one of which is &quot;Connor MacLeod&quot; -- there can only be one).
<br>
<p>Here's a chunk of text from the README:
<br>
<p>- There are three MPI network models available: &quot;ob1&quot;, &quot;csum&quot;, and
<br>
&nbsp;&nbsp;&quot;cm&quot;.  &quot;ob1&quot; and &quot;csum&quot; use BTL (&quot;Byte Transfer Layer&quot;) components
<br>
&nbsp;&nbsp;for each supported network.  &quot;cm&quot; uses MTL (&quot;Matching Tranport
<br>
&nbsp;&nbsp;Layer&quot;) components for each supported network.
<br>
<p>&nbsp;&nbsp;- &quot;ob1&quot; supports a variety of networks that can be used in
<br>
&nbsp;&nbsp;&nbsp;&nbsp;combination with each other (per OS constraints; e.g., there are
<br>
&nbsp;&nbsp;&nbsp;&nbsp;reports that the GM and OpenFabrics kernel drivers do not operate
<br>
&nbsp;&nbsp;&nbsp;&nbsp;well together):
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- OpenFabrics: InfiniBand and iWARP
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- Loopback (send-to-self)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- Myrinet: GM and MX (including Open-MX)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- Portals
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- Quadrics Elan
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- Shared memory
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- TCP
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- SCTP
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- uDAPL
<br>
<p>&nbsp;&nbsp;- &quot;csum&quot; is exactly the same as &quot;ob1&quot;, except that it performs
<br>
&nbsp;&nbsp;&nbsp;&nbsp;additional data integrity checks to ensure that the received data
<br>
&nbsp;&nbsp;&nbsp;&nbsp;is intact (vs. trusting the underlying network to deliver the data
<br>
&nbsp;&nbsp;&nbsp;&nbsp;correctly).  csum supports all the same networks as ob1, but there
<br>
&nbsp;&nbsp;&nbsp;&nbsp;is a performance penalty for the additional integrity checks.
<br>
<p>&nbsp;&nbsp;- &quot;cm&quot; supports a smaller number of networks (and they cannot be
<br>
&nbsp;&nbsp;&nbsp;&nbsp;used together), but may provide better better overall MPI
<br>
&nbsp;&nbsp;&nbsp;&nbsp;performance:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- Myrinet MX (including Open-MX, but not GM)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- InfiniPath PSM
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- Portals
<br>
<p>&nbsp;&nbsp;Open MPI will, by default, choose to use &quot;cm&quot; when the InfiniPath
<br>
&nbsp;&nbsp;PSM MTL can be used.  Otherwise, &quot;ob1&quot; will be used and the
<br>
&nbsp;&nbsp;corresponding BTLs will be selected.  &quot;csum&quot; will never be selected
<br>
&nbsp;&nbsp;by default.  Users can force the use of ob1 or cm if desired by
<br>
&nbsp;&nbsp;setting the &quot;pml&quot; MCA parameter at run-time:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;shell$ mpirun --mca pml ob1 ...
<br>
&nbsp;&nbsp;&nbsp;&nbsp;or
<br>
&nbsp;&nbsp;&nbsp;&nbsp;shell$ mpirun --mca pml csum ...
<br>
&nbsp;&nbsp;&nbsp;&nbsp;or
<br>
&nbsp;&nbsp;&nbsp;&nbsp;shell$ mpirun --mca pml cm ...
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
<li><strong>Next message:</strong> <a href="13286.php">Jeff Squyres: "Re: [OMPI users] Behaviour of MPI_Cancel when using 'large' messages"</a>
<li><strong>Previous message:</strong> <a href="13284.php">Jeff Squyres: "Re: [OMPI users] Debug info on Darwin"</a>
<li><strong>In reply to:</strong> <a href="13229.php">Scott Atchley: "Re: [OMPI users] Unable to connect to a server using MX MTL with TCP"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13293.php">Audet, Martin: "Re: [OMPI users] Unable to connect to a server using MX MTL with TCP"</a>
<li><strong>Reply:</strong> <a href="13293.php">Audet, Martin: "Re: [OMPI users] Unable to connect to a server using MX MTL with TCP"</a>
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
