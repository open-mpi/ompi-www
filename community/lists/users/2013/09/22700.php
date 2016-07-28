<?
$subject_val = "Re: [OMPI users] Debugging Runtime/Ethernet Problems";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 20 12:27:16 2013" -->
<!-- isoreceived="20130920162716" -->
<!-- sent="Fri, 20 Sep 2013 10:27:11 -0600" -->
<!-- isosent="20130920162711" -->
<!-- name="Lloyd Brown" -->
<!-- email="lloyd_brown_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Debugging Runtime/Ethernet Problems" -->
<!-- id="523C775F.2030501_at_byu.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC4F8BC892_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Date:</strong> 2013-09-20 12:27:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22701.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Debugging Runtime/Ethernet Problems"</a>
<li><strong>Previous message:</strong> <a href="22699.php">Jeff Squyres (jsquyres): "Re: [OMPI users] error building openmpi-1.7.3a1r29213 on Solaris"</a>
<li><strong>In reply to:</strong> <a href="22696.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Debugging Runtime/Ethernet Problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22701.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Debugging Runtime/Ethernet Problems"</a>
<li><strong>Reply:</strong> <a href="22701.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Debugging Runtime/Ethernet Problems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Interesting.  I was taking the approach of &quot;only exclude what you're
<br>
certain you don't want&quot; (the native IB and TCP/IPoIB stuff) since I
<br>
wasn't confident enough in my knowledge of the OpenMPI internals, to
<br>
know what I should explicitly include.
<br>
<p>However, taking Jeff's suggestion, this does seem to work, and gives me
<br>
the expected Ethernet performance:
<br>
<p>&quot;mpirun --mca btl tcp,sm,self --mca btl_tcp_if_include em1 ./osu_bw&quot;
<br>
<p>So, in short, I'm still not sure why my exclude syntax doesn't work.
<br>
But the include-driven syntax that Jeff suggested, does seem to work.  I
<br>
admit I'm still curious to understand how to get OpenMPI to give me the
<br>
details of what's going on.  But the immediate problem of getting the
<br>
numbers out of osu_bw and osu_latency, seems to be solved.
<br>
<p>Thanks everyone.  I really appreciate it.
<br>
<p><p><pre>
--
Lloyd Brown
Systems Administrator
Fulton Supercomputing Lab
Brigham Young University
<a href="http://marylou.byu.edu">http://marylou.byu.edu</a>
On 09/20/2013 09:33 AM, Jeff Squyres (jsquyres) wrote:
&gt; Correct -- it doesn't make sense to specify both include *and* exclude: by specifying one, you're implicitly (but exactly/precisely) specifying the other.
&gt; 
&gt; My suggestion would be to use positive notation, not negative notation.  For example:
&gt; 
&gt; mpirun --mca btl tcp,self --mca btl_tcp_if_include eth0 ...
&gt; 
&gt; That way, you *know* you're only getting the TCP and self BTLs, and you *know* you're only getting eth0.  If that works, then spread out from there, e.g.:
&gt; 
&gt; mpirun --mca btl tcp,sm,self --mca btl_tcp_if_include eth0,eth1 ...
&gt; 
&gt; E.g., also include the &quot;sm&quot; BTL (which is only used for shared memory communications between 2 procs on the same server, and is therefore useless for a 2-proc-across-2-server run of osu_bw, but you get the idea), but also use eth0 and eth1.  
&gt; 
&gt; And so on.
&gt; 
&gt; The problem with using ^openib and/or btl_tcp_if_exclude is that you might end up using some BTLs and/or TCP interfaces that you don't expect, and therefore can run into problems.
&gt; 
&gt; Make sense?
&gt; 
&gt; 
&gt; 
&gt; On Sep 20, 2013, at 11:17 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
&gt; 
&gt;&gt; I don't think you are allowed to specify both include and exclude options at the same time as they conflict - you should either exclude ib0 or include eth0 (or whatever).
&gt;&gt;
&gt;&gt; My guess is that the various nodes are trying to communicate across disjoint networks. We've seen that before when, for example, eth0 on one node is on one subnet, and eth0 on another node is on a different subnet. You might look for that kind of arrangement.
&gt;&gt;
&gt;&gt;
&gt;&gt; On Sep 20, 2013, at 8:05 AM, &quot;Elken, Tom&quot; &lt;tom.elken_at_[hidden]&gt; wrote:
&gt;&gt;
&gt;&gt;&gt;&gt; The trouble is when I try to add some &quot;--mca&quot; parameters to force it to
&gt;&gt;&gt;&gt; use TCP/Ethernet, the program seems to hang.  I get the headers of the
&gt;&gt;&gt;&gt; &quot;osu_bw&quot; output, but no results, even on the first case (1 byte payload
&gt;&gt;&gt;&gt; per packet).  This is occurring on both the IB-enabled nodes, and on the
&gt;&gt;&gt;&gt; Ethernet-only nodes.  The specific syntax I was using was:  &quot;mpirun
&gt;&gt;&gt;&gt; --mca btl ^openib --mca btl_tcp_if_exclude ib0 ./osu_bw&quot;
&gt;&gt;&gt;
&gt;&gt;&gt; When we want to run over TCP and IPoIB on an IB/PSM equipped cluster, we use:
&gt;&gt;&gt; --mca btl sm --mca btl tcp,self --mca btl_tcp_if_exclude eth0 --mca btl_tcp_if_include ib0 --mca mtl ^psm
&gt;&gt;&gt;
&gt;&gt;&gt; based on this, it looks like the following might work for you:
&gt;&gt;&gt; --mca btl sm,tcp,self --mca btl_tcp_if_exclude ib0 --mca btl_tcp_if_include eth0 --mca btl ^openib
&gt;&gt;&gt;
&gt;&gt;&gt; If you don't have ib0 ports configured on the IB nodes, probably you don't need the&quot; --mca btl_tcp_if_exclude ib0.&quot;
&gt;&gt;&gt;
&gt;&gt;&gt; -Tom
&gt;&gt;&gt;
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt; The problem occurs at least with OpenMPI 1.6.3 compiled with GNU 4.4
&gt;&gt;&gt;&gt; compilers, with 1.6.3 compiled with Intel 13.0.1 compilers, and with
&gt;&gt;&gt;&gt; 1.6.5 compiled with Intel 13.0.1 compilers.  I haven't tested any other
&gt;&gt;&gt;&gt; combinations yet.
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt; Any ideas here?  It's very possible this is a system configuration
&gt;&gt;&gt;&gt; problem, but I don't know where to look.  At this point, any ideas would
&gt;&gt;&gt;&gt; be welcome, either about the specific situation, or general pointers on
&gt;&gt;&gt;&gt; mpirun debugging flags to use.  I can't find much in the docs yet on
&gt;&gt;&gt;&gt; run-time debugging for OpenMPI, as opposed to debugging the application.
&gt;&gt;&gt;&gt; Maybe I'm just looking in the wrong place.
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt; Thanks,
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt; --
&gt;&gt;&gt;&gt; Lloyd Brown
&gt;&gt;&gt;&gt; Systems Administrator
&gt;&gt;&gt;&gt; Fulton Supercomputing Lab
&gt;&gt;&gt;&gt; Brigham Young University
&gt;&gt;&gt;&gt; <a href="http://marylou.byu.edu">http://marylou.byu.edu</a>
&gt;&gt;&gt;&gt; _______________________________________________
&gt;&gt;&gt;&gt; users mailing list
&gt;&gt;&gt;&gt; users_at_[hidden]
&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;&gt;&gt; _______________________________________________
&gt;&gt;&gt; users mailing list
&gt;&gt;&gt; users_at_[hidden]
&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;&gt;
&gt;&gt; _______________________________________________
&gt;&gt; users mailing list
&gt;&gt; users_at_[hidden]
&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; 
&gt; 
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22701.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Debugging Runtime/Ethernet Problems"</a>
<li><strong>Previous message:</strong> <a href="22699.php">Jeff Squyres (jsquyres): "Re: [OMPI users] error building openmpi-1.7.3a1r29213 on Solaris"</a>
<li><strong>In reply to:</strong> <a href="22696.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Debugging Runtime/Ethernet Problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22701.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Debugging Runtime/Ethernet Problems"</a>
<li><strong>Reply:</strong> <a href="22701.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Debugging Runtime/Ethernet Problems"</a>
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
