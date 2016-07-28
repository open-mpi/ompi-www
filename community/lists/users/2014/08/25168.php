<?
$subject_val = "Re: [OMPI users] &#181;&#170;&#206;`:  &#181;&#170;&#206;`:  Does multiple Irecv means concurrent receiving ?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 27 10:11:48 2014" -->
<!-- isoreceived="20140827141148" -->
<!-- sent="Wed, 27 Aug 2014 14:11:47 +0000" -->
<!-- isosent="20140827141147" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] &amp;#181;&amp;#170;&amp;#206;`:  &amp;#181;&amp;#170;&amp;#206;`:  Does multiple Irecv means concurrent receiving ?" -->
<!-- id="165556A0-11AD-4CBE-B711-D18813266AF0_at_cisco.com" -->
<!-- charset="big5" -->
<!-- inreplyto="674183CE400B8344A5F8DC3AA8A8080A2D14FA88_at_M1-MAIL-HQ01.internal.baidu.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] &#181;&#170;&#206;`:  &#181;&#170;&#206;`:  Does multiple Irecv means concurrent receiving ?<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-27 10:11:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25169.php">Alina Sklarevich: "Re: [OMPI users] mxm 3.0 and knem warnings"</a>
<li><strong>Previous message:</strong> <a href="25167.php">Ralph Castain: "Re: [OMPI users] long initialization"</a>
<li><strong>In reply to:</strong> <a href="25165.php">Zhang,Lei(Ecom): "[OMPI users] &#231;&#173;&#148;&#229;&#164;&#141;:  &#231;&#173;&#148;&#229;&#164;&#141;:  Does multiple Irecv means concurrent receiving ?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 27, 2014, at 9:21 AM, Zhang,Lei(Ecom) &lt;zhanglei14_at_[hidden]&gt; wrote:
<br>

<br>
<span class="quotelev1">&gt; The problem is that I profiled the receiving node and found that its network bandwidth is used only less than 50%.
</span><br>

<br>
How did you profile that?
<br>

<br>
<span class="quotelev1">&gt; That's why I want to find ways to increase the receiving throughput. Any ideas ?
</span><br>

<br>
A lot of this depends on your networking setup.  Is your fabric oversubscribed, perchance?  Are there other performance bottlenecks?  (e.g., using less-than-optimal networking hardware, etc.)
<br>

<br>
What happens when you run MPI NetPipe between the two servers in question -- can you get full bandwidth?  
<br>

<br>
What happens when you run MPI NetPipe between 2 pairs of servers that share some of the networking hardware (e.g., on the same switch) -- do you still get full bandwidth?
<br>

<br>
Repeat the experiment until you're running (num_switch_ports/2) instances MPI NetPipe -- between the first half of the ports and the 2nd half of the ports.  Do you still get full bandwidth?
<br>

<br>
Now start this experiment across multiple switches -- first with just a pair to ensure that you have a good network path from A to B (where A and B are on different switches).  Now start adding more simultaneous pairs of servers running NetPipe to simulate congestion in the network.
<br>

<br>
This type of experiment will help identify your network architecture and see if the fabric itself is leading to bandwidth constraints.
<br>

<br>
(BTW, you may be able to infer much of this information without running all of these tests if you look at the physical and logical connectivity between all your switches -- e.g., do you have 16 leaf servers off a switch, but only 8 uplinks?  And so on)
<br>

<br>
-- 
<br>
Jeff Squyres
<br>
jsquyres_at_[hidden]
<br>
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
<br>

<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25169.php">Alina Sklarevich: "Re: [OMPI users] mxm 3.0 and knem warnings"</a>
<li><strong>Previous message:</strong> <a href="25167.php">Ralph Castain: "Re: [OMPI users] long initialization"</a>
<li><strong>In reply to:</strong> <a href="25165.php">Zhang,Lei(Ecom): "[OMPI users] &#231;&#173;&#148;&#229;&#164;&#141;:  &#231;&#173;&#148;&#229;&#164;&#141;:  Does multiple Irecv means concurrent receiving ?"</a>
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
