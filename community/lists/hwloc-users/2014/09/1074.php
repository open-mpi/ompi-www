<?
$subject_val = "Re: [hwloc-users] hwloc error with &quot;node interleaving&quot; disabled";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep  5 18:00:49 2014" -->
<!-- isoreceived="20140905220049" -->
<!-- sent="Sat, 06 Sep 2014 00:00:23 +0200" -->
<!-- isosent="20140905220023" -->
<!-- name="Brice Goglin" -->
<!-- email="brice.goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] hwloc error with &amp;quot;node interleaving&amp;quot; disabled" -->
<!-- id="882974d7-d232-4e92-8764-118cce3c3410_at_email.android.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="DUB114-W54676848733A5061FC5438DFC20_at_phx.gbl" -->
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
<strong>Subject:</strong> Re: [hwloc-users] hwloc error with &quot;node interleaving&quot; disabled<br>
<strong>From:</strong> Brice Goglin (<em>brice.goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-05 18:00:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1075.php">Hartmut Kaiser: "[hwloc-users] Hartmut Kaiser"</a>
<li><strong>Previous message:</strong> <a href="1073.php">Jean-Pierre Adam: "Re: [hwloc-users] hwloc error with &quot;node interleaving&quot; disabled"</a>
<li><strong>In reply to:</strong> <a href="1073.php">Jean-Pierre Adam: "Re: [hwloc-users] hwloc error with &quot;node interleaving&quot; disabled"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Don't be sorry, I used &quot;yet another&quot; to complain about all these buggy AMD platforms, and not to complain about their owners ;)
<br>
<p>Bug reports are always welcome, that's why the big warning says you should report it.
<br>
<p>Also these warnings vary a little bit with the platform and processor model so it's hard to recognize them without training ;)
<br>
<p>That said, I may add a FAQ entry about it.
<br>
<p>Brice
<br>
<p>On 5 septembre 2014 18:43:44 UTC+02:00, Jean-Pierre Adam &lt;jean_pierre_adam_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;Silly me ! I've just seen that Andrej reported exactly the same bug
</span><br>
<span class="quotelev1">&gt;last month. I checked his .output file and it seems he got the same
</span><br>
<span class="quotelev1">&gt;hardware than me. I see now why you said &quot;yet another buggy AMD
</span><br>
<span class="quotelev1">&gt;platform&quot; !
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Sorry guys.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Date: Fri, 5 Sep 2014 13:46:25 +0200
</span><br>
<span class="quotelev1">&gt;From: Brice.Goglin_at_[hidden]
</span><br>
<span class="quotelev1">&gt;To: hwloc-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;Subject: Re: [hwloc-users] hwloc error with &quot;node interleaving&quot;
</span><br>
<span class="quotelev1">&gt;disabled
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;    
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;    Hello
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      You sent the test.output file instead of test.tar.bz2 so I can't
</span><br>
<span class="quotelev1">&gt;      check for sure. Anyway I guess this is yet another buggy AMD
</span><br>
<span class="quotelev1">&gt;      platform with magny-cours/interlagos/abu-dahbi Opterons (61xx,
</span><br>
<span class="quotelev1">&gt;      62xx or 63xx). 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      Sometimes upgrading the BIOS/kernel helps. Sometimes not.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      Some L3 caches will be missing in the hwloc topology because of
</span><br>
<span class="quotelev1">&gt;      this bug, it's likely not important for the vast majority of HPC
</span><br>
<span class="quotelev1">&gt;      libraries.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      You may hide the warning by setting HWLOC_HIDE_ERRORS=1 in your
</span><br>
<span class="quotelev1">&gt;      environment.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      Brice
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      Le 05/09/2014 12:06, Jean-Pierre Adam a &#195;&#169;crit :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    
</span><br>
<span class="quotelev1">&gt;    
</span><br>
<span class="quotelev1">&gt;      
</span><br>
<span class="quotelev1">&gt;      Hello hwloc experts
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        I encounter this bug when I'm using mpirun or hwloc directly :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;****************************************************************************
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        * hwloc has encountered what looks like an error from the
</span><br>
<span class="quotelev1">&gt;        operating system.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        *
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        * L3 (cpuset 0x000003f0) intersects with NUMANode (P#0 cpuset
</span><br>
<span class="quotelev1">&gt;        0x0000003f) without inclusion!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        * Error occurred in topology.c line 940
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        *
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        * Please report this error message to the hwloc user's mailing
</span><br>
<span class="quotelev1">&gt;        list,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        * along with the output from the hwloc-gather-topology script.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;****************************************************************************
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        The output of hwloc-gather-topology is attached. The OS is
</span><br>
<span class="quotelev1">&gt;        Centos 7.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        The tool launched with mpirun runs as expected, still the
</span><br>
<span class="quotelev1">&gt;        message is a bit worrying...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       I was able to avoid this message by enabling &quot;node interleaving&quot;
</span><br>
<span class="quotelev1">&gt;        in the bios (basically disables NUMA). In my case, I got a 5%
</span><br>
<span class="quotelev1">&gt;        performance loss with that setting. It could be acceptable, but
</span><br>
<span class="quotelev1">&gt;        I would like to understant what is going on.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        So is my motherboard / BIOS / OS buggy ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        Best regards
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      
</span><br>
<span class="quotelev1">&gt;      
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      
</span><br>
<span class="quotelev1">&gt;      
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      _______________________________________________
</span><br>
<span class="quotelev1">&gt;hwloc-users mailing list
</span><br>
<span class="quotelev1">&gt;hwloc-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<span class="quotelev1">&gt;Link to this post:
</span><br>
<span class="quotelev1">&gt;<a href="http://www.open-mpi.org/community/lists/hwloc-users/2014/09/1070.php">http://www.open-mpi.org/community/lists/hwloc-users/2014/09/1070.php</a>
</span><br>
<span class="quotelev1">&gt;    
</span><br>
<span class="quotelev1">&gt;    
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;hwloc-users mailing list
</span><br>
<span class="quotelev1">&gt;hwloc-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<span class="quotelev1">&gt;Link to this post:
</span><br>
<span class="quotelev1">&gt;<a href="http://www.open-mpi.org/community/lists/hwloc-users/2014/09/1072.php">http://www.open-mpi.org/community/lists/hwloc-users/2014/09/1072.php</a> 		
</span><br>
<span class="quotelev1">&gt;	   		  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;hwloc-users mailing list
</span><br>
<span class="quotelev1">&gt;hwloc-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<span class="quotelev1">&gt;Link to this post:
</span><br>
<span class="quotelev1">&gt;<a href="http://www.open-mpi.org/community/lists/hwloc-users/2014/09/1074.php">http://www.open-mpi.org/community/lists/hwloc-users/2014/09/1074.php</a>
</span><br>
<p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-1074/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1075.php">Hartmut Kaiser: "[hwloc-users] Hartmut Kaiser"</a>
<li><strong>Previous message:</strong> <a href="1073.php">Jean-Pierre Adam: "Re: [hwloc-users] hwloc error with &quot;node interleaving&quot; disabled"</a>
<li><strong>In reply to:</strong> <a href="1073.php">Jean-Pierre Adam: "Re: [hwloc-users] hwloc error with &quot;node interleaving&quot; disabled"</a>
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
