<?
$subject_val = "Re: [OMPI devel] New address selection for btl-tcp (was Re: [OMPI svn]	svn:open-mpi r17307)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 22 10:04:29 2008" -->
<!-- isoreceived="20080222150429" -->
<!-- sent="Fri, 22 Feb 2008 16:04:08 +0100" -->
<!-- isosent="20080222150408" -->
<!-- name="Adrian Knoth" -->
<!-- email="adi_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] New address selection for btl-tcp (was Re: [OMPI svn]	svn:open-mpi r17307)" -->
<!-- id="20080222150408.GN493_at_ltw.loris.tv" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="47B59B62.1050801_at_cs.indiana.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] New address selection for btl-tcp (was Re: [OMPI svn]	svn:open-mpi r17307)<br>
<strong>From:</strong> Adrian Knoth (<em>adi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-22 10:04:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3290.php">Brian W. Barrett: "Re: [OMPI devel] New address selection for btl-tcp (was Re: [OMPI svn] svn:open-mpi r17307)"</a>
<li><strong>Previous message:</strong> <a href="3288.php">George Bosilca: "Re: [OMPI devel] 1.3 Release schedule and contents"</a>
<li><strong>In reply to:</strong> <a href="3253.php">Tim Prins: "Re: [OMPI devel] New address selection for btl-tcp (was Re: [OMPI svn]	svn:open-mpi r17307)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3290.php">Brian W. Barrett: "Re: [OMPI devel] New address selection for btl-tcp (was Re: [OMPI svn] svn:open-mpi r17307)"</a>
<li><strong>Reply:</strong> <a href="3290.php">Brian W. Barrett: "Re: [OMPI devel] New address selection for btl-tcp (was Re: [OMPI svn] svn:open-mpi r17307)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, Feb 15, 2008 at 09:02:10AM -0500, Tim Prins wrote:
<br>
<p><span class="quotelev3">&gt; &gt;&gt; 3. If the exclude list does not contain 'lo', or the include list 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; contains 'lo', the job hangs when using multiple nodes:
</span><br>
<span class="quotelev2">&gt; &gt; That's weird. Loopback interfaces should automatically be excluded right
</span><br>
<span class="quotelev2">&gt; &gt; from the beginning. See opal/util/if.c.
</span><br>
<span class="quotelev1">&gt; I took a quick glance at this file, and I'd be lying if I said I 
</span><br>
<span class="quotelev1">&gt; understood what was going on in it. One thing I did notice is that the 
</span><br>
<span class="quotelev1">&gt; parameter btl_tcp_if_exclude defaults to 'lo', but the user can of 
</span><br>
<span class="quotelev1">&gt; course overwrite it.
</span><br>
<p>I was wrong. To be more precise, there are conflicting comments in if.c:
<br>
<p>#if 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if ((ifr-&gt;ifr_flags &amp; IFF_LOOPBACK) != 0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;continue;
<br>
#endif
<br>
<p><p>And:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* skip interface if it is a loopback device (IFF_LOOPBACK set) */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* or if it is a point-to-point interface */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* TODO: do we really skip p2p? */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(0 != (cur_ifaddrs-&gt;ifa_flags &amp; IFF_LOOPBACK)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| 0!= (cur_ifaddrs-&gt;ifa_flags &amp; IFF_POINTOPOINT)) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;continue;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>and:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if ( (! IN6_IS_ADDR_LOOPBACK (&amp;my_addr-&gt;sin6_addr)) &amp;&amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(! IN6_IS_ADDR_LINKLOCAL (&amp;my_addr-&gt;sin6_addr))) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* create interface for newly found address */
<br>
<p><p>and:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* generate the interface name on your own ....
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;loopback: lo
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rest:    eth0, eth1, ..... */
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (if_list[i].iiFlags &amp; IFF_LOOPBACK) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sprintf (intf.if_name, &quot;lo&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} else {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sprintf (intf.if_name, &quot;eth%u&quot;, interface_counter++);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p><p>To be honest: When porting to IPv6, I've excluded lo, because I see no
<br>
use in using it.
<br>
<p>That is what the code reflects: 127.0.0.1 is included (IPv4-lo), but ::1
<br>
is excluded (IPv6-lo).
<br>
<p><p><span class="quotelev1">&gt; It might be worth looking into this further. If the user got an error or 
</span><br>
<span class="quotelev1">&gt; the job aborted if they did something wrong with 'lo' I would not worry 
</span><br>
<span class="quotelev1">&gt; about it at all. But the fact that it causes a hang is worrisome to me.
</span><br>
<p>It could be treated as the user's fault.
<br>
<p>I see three approaches:
<br>
<p>&nbsp;&nbsp;&nbsp;a) remove lo globally (in if.c). I expect objections. ;)
<br>
<p>&nbsp;&nbsp;&nbsp;b) print a warning from BTL/TCP if the interfaces in use contain lo.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Like &quot;Warning: You've included the loopback for communication.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;This may cause hanging processes due to unreachable peers.&quot;
<br>
<p>&nbsp;&nbsp;&nbsp;c) Throw away 127.0.0.1 on the remote side. But when doing so, what's
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;the use for including it at all?
<br>
<p><p>So as mentioned earlier: It could be the user's fault. ;) If he includes
<br>
lo, this means he wants to announce 127.0.0.1 to remote peers. And this
<br>
sounds useless (unless you want local communication without SM).
<br>
<p><p><p><p><pre>
-- 
Cluster and Metacomputing Working Group
Friedrich-Schiller-Universit&#228;t Jena, Germany
private: <a href="http://adi.thur.de">http://adi.thur.de</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3290.php">Brian W. Barrett: "Re: [OMPI devel] New address selection for btl-tcp (was Re: [OMPI svn] svn:open-mpi r17307)"</a>
<li><strong>Previous message:</strong> <a href="3288.php">George Bosilca: "Re: [OMPI devel] 1.3 Release schedule and contents"</a>
<li><strong>In reply to:</strong> <a href="3253.php">Tim Prins: "Re: [OMPI devel] New address selection for btl-tcp (was Re: [OMPI svn]	svn:open-mpi r17307)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3290.php">Brian W. Barrett: "Re: [OMPI devel] New address selection for btl-tcp (was Re: [OMPI svn] svn:open-mpi r17307)"</a>
<li><strong>Reply:</strong> <a href="3290.php">Brian W. Barrett: "Re: [OMPI devel] New address selection for btl-tcp (was Re: [OMPI svn] svn:open-mpi r17307)"</a>
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
