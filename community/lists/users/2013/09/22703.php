<?
$subject_val = "Re: [OMPI users] Debugging Runtime/Ethernet Problems";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 20 13:00:38 2013" -->
<!-- isoreceived="20130920170038" -->
<!-- sent="Fri, 20 Sep 2013 11:00:33 -0600" -->
<!-- isosent="20130920170033" -->
<!-- name="Lloyd Brown" -->
<!-- email="lloyd_brown_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Debugging Runtime/Ethernet Problems" -->
<!-- id="523C7F31.7030804_at_byu.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC4F8BCDE6_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Debugging Runtime/Ethernet Problems<br>
<strong>From:</strong> Lloyd Brown (<em>lloyd_brown_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-20 13:00:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22704.php">Gus Correa: "Re: [OMPI users] intermittent node file error running with torque/maui integration"</a>
<li><strong>Previous message:</strong> <a href="22702.php">Noam Bernstein: "Re: [OMPI users] intermittent node file error running with torque/maui integration"</a>
<li><strong>In reply to:</strong> <a href="22701.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Debugging Runtime/Ethernet Problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22705.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Debugging Runtime/Ethernet Problems"</a>
<li><strong>Reply:</strong> <a href="22705.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Debugging Runtime/Ethernet Problems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
1 - How do I check the BTLs available?  Something like &quot;ompi_info | grep
<br>
-i btl&quot;?  If so, here's the list:
<br>
<p><span class="quotelev1">&gt;                  MCA btl: ofud (MCA v2.0, API v2.0, Component v1.6.3)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: openib (MCA v2.0, API v2.0, Component v1.6.3)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: self (MCA v2.0, API v2.0, Component v1.6.3)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: sm (MCA v2.0, API v2.0, Component v1.6.3)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: tcp (MCA v2.0, API v2.0, Component v1.6.3)
</span><br>
<p>2 - The IP interfaces on all nodes are:
<br>
- em1 - Ethernet - IP in the 192.168.216.0/22 range
<br>
- ib0 - IPoIB (only on IB-enabled nodes) - IP in the 192.168.212.0/22 range
<br>
- lo - loopback - 127.0.0.1/8
<br>
<p>And I think that Jeff is absolutely right.  This syntax did work:
<br>
<p><span class="quotelev1">&gt; mpirun --mca btl ^openib --mca btl_tcp_if_exclude 192.168.212.0/22,127.0.0.1/8 ./osu_bw
</span><br>
<p><p>And this one too, which is basically equivalent in this case:
<br>
<p><span class="quotelev1">&gt; mpirun --mca btl ^openib --mca btl_tcp_if_exclude ib0,lo ./osu_bw
</span><br>
<p><p>It is interesting to me, though, that I need to explicitly exclude
<br>
lo/127.0.0.1 in this case, but when I'm on an Ethernet-only node, and I
<br>
just do the plain &quot;mpirun ./appname&quot;, I don't have to exclude anything,
<br>
and it figures out to use em1, and not lo.
<br>
<p><p><p>Lloyd Brown
<br>
Systems Administrator
<br>
Fulton Supercomputing Lab
<br>
Brigham Young University
<br>
<a href="http://marylou.byu.edu">http://marylou.byu.edu</a>
<br>
<p>On 09/20/2013 10:31 AM, Jeff Squyres (jsquyres) wrote:
<br>
<span class="quotelev1">&gt; On Sep 20, 2013, at 12:27 PM, Lloyd Brown &lt;lloyd_brown_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Interesting.  I was taking the approach of &quot;only exclude what you're
</span><br>
<span class="quotelev2">&gt;&gt; certain you don't want&quot; (the native IB and TCP/IPoIB stuff) since I
</span><br>
<span class="quotelev2">&gt;&gt; wasn't confident enough in my knowledge of the OpenMPI internals, to
</span><br>
<span class="quotelev2">&gt;&gt; know what I should explicitly include.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; However, taking Jeff's suggestion, this does seem to work, and gives me
</span><br>
<span class="quotelev2">&gt;&gt; the expected Ethernet performance:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &quot;mpirun --mca btl tcp,sm,self --mca btl_tcp_if_include em1 ./osu_bw&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So, in short, I'm still not sure why my exclude syntax doesn't work.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Check two things:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. What BTLs are available?  Is there some other BTL that may be used instead of openib?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2. (this one is more likely) What IP interfaces are available on all nodes?  The most obvious guess here is that you didn't exclude 127.0.0.1/8, and OMPI found this interface on all nodes, and therefore assumed that it was routable/usable on all nodes.  Hence, one quick experiment might be to try your exclude syntax again, but *also* exclude 127.0.0.8/8.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22704.php">Gus Correa: "Re: [OMPI users] intermittent node file error running with torque/maui integration"</a>
<li><strong>Previous message:</strong> <a href="22702.php">Noam Bernstein: "Re: [OMPI users] intermittent node file error running with torque/maui integration"</a>
<li><strong>In reply to:</strong> <a href="22701.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Debugging Runtime/Ethernet Problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22705.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Debugging Runtime/Ethernet Problems"</a>
<li><strong>Reply:</strong> <a href="22705.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Debugging Runtime/Ethernet Problems"</a>
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
