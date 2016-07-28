<?
$subject_val = "Re: [OMPI users] Sandy Bridge performance question";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun  6 19:43:04 2013" -->
<!-- isoreceived="20130606234304" -->
<!-- sent="Thu, 6 Jun 2013 16:42:57 -0700" -->
<!-- isosent="20130606234257" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Sandy Bridge performance question" -->
<!-- id="919B58AC-36F6-47EE-9FDF-5615E4EC4880_at_open-mpi.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="25AE6277FDC12F408393C11ACE6C400F0CA150F3_at_HDXDSP53.us.lmco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Sandy Bridge performance question<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-06-06 19:42:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22056.php">vacate: "Re: [OMPI users] &quot;ssh: connect to host XXX.XXX.XXX.XX port 22: connection timed out&quot; errors during mpirun"</a>
<li><strong>Previous message:</strong> <a href="22054.php">Blosch, Edwin L: "[OMPI users] Sandy Bridge performance question"</a>
<li><strong>In reply to:</strong> <a href="22054.php">Blosch, Edwin L: "[OMPI users] Sandy Bridge performance question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22058.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Sandy Bridge performance question"</a>
<li><strong>Reply:</strong> <a href="22058.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Sandy Bridge performance question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It depends on the application you are using. Some are &quot;balanced&quot; - i.e., they run faster if the number of processes is a power of two. You'll see that n8 is faster than n7, so this is likely the situation.
<br>
<p><p>On Jun 6, 2013, at 4:10 PM, &quot;Blosch, Edwin L&quot; &lt;edwin.l.blosch_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I am running single-node Sandy Bridge cases with OpenMPI and looking at scaling.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I&#146;m using &#150;bind-to-core without any other options (default is &#150;bycore I believe).
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; These numbers indicate number of cores first, then the second digit is the run number (except for n=1, all runs repeated 3 times).  Any thought why n15 should be so much slower than n16?   I also measure the RSS of the running processes, and the rank 0 process for n=15 cases uses about 2x more memory than all the other ranks, whereas all the ranks use the same amount of memory for the n=16 cases.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Thanks for insights,
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Ed
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; n1.1:    6.9530   
</span><br>
<span class="quotelev1">&gt; n2.1:    7.0185   
</span><br>
<span class="quotelev1">&gt; n2.2:    7.0313   
</span><br>
<span class="quotelev1">&gt; n3.1:    8.2069
</span><br>
<span class="quotelev1">&gt; n3.2:    8.1628   
</span><br>
<span class="quotelev1">&gt; n3.3:    8.1311   
</span><br>
<span class="quotelev1">&gt; n4.1:    7.5307   
</span><br>
<span class="quotelev1">&gt; n4.2:    7.5323   
</span><br>
<span class="quotelev1">&gt; n4.3:    7.5858   
</span><br>
<span class="quotelev1">&gt; n5.1:    9.5693   
</span><br>
<span class="quotelev1">&gt; n5.2:    9.5104   
</span><br>
<span class="quotelev1">&gt; n5.3:    9.4821   
</span><br>
<span class="quotelev1">&gt; n6.1:    8.9821   
</span><br>
<span class="quotelev1">&gt; n6.2:    8.9720   
</span><br>
<span class="quotelev1">&gt; n6.3:    8.9541   
</span><br>
<span class="quotelev1">&gt; n7.1:    10.640   
</span><br>
<span class="quotelev1">&gt; n7.2:    10.650   
</span><br>
<span class="quotelev1">&gt; n7.3:    10.638   
</span><br>
<span class="quotelev1">&gt; n8.1:    8.6822   
</span><br>
<span class="quotelev1">&gt; n8.2:    8.6630   
</span><br>
<span class="quotelev1">&gt; n8.3:    8.6903   
</span><br>
<span class="quotelev1">&gt; n9.1:    9.5058   
</span><br>
<span class="quotelev1">&gt; n9.2:    9.5255   
</span><br>
<span class="quotelev1">&gt; n9.3:    9.4809   
</span><br>
<span class="quotelev1">&gt; n10.1:    10.484    
</span><br>
<span class="quotelev1">&gt; n10.2:    10.452    
</span><br>
<span class="quotelev1">&gt; n10.3:    10.516    
</span><br>
<span class="quotelev1">&gt; n11.1:    11.327    
</span><br>
<span class="quotelev1">&gt; n11.2:    11.316    
</span><br>
<span class="quotelev1">&gt; n11.3:    11.318    
</span><br>
<span class="quotelev1">&gt; n12.1:    12.285    
</span><br>
<span class="quotelev1">&gt; n12.2:    12.303    
</span><br>
<span class="quotelev1">&gt; n12.3:    12.272    
</span><br>
<span class="quotelev1">&gt; n13.1:    13.127    
</span><br>
<span class="quotelev1">&gt; n13.2:    13.113    
</span><br>
<span class="quotelev1">&gt; n13.3:    13.113    
</span><br>
<span class="quotelev1">&gt; n14.1:    14.035    
</span><br>
<span class="quotelev1">&gt; n14.2:    13.989    
</span><br>
<span class="quotelev1">&gt; n14.3:    14.021    
</span><br>
<span class="quotelev1">&gt; n15.1:    14.533    
</span><br>
<span class="quotelev1">&gt; n15.2:    14.529    
</span><br>
<span class="quotelev1">&gt; n15.3:    14.586    
</span><br>
<span class="quotelev1">&gt; n16.1:    8.6542    
</span><br>
<span class="quotelev1">&gt; n16.2:    8.6731    
</span><br>
<span class="quotelev1">&gt; n16.3:    8.6586    
</span><br>
<span class="quotelev1">&gt; ~                                
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22055/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22056.php">vacate: "Re: [OMPI users] &quot;ssh: connect to host XXX.XXX.XXX.XX port 22: connection timed out&quot; errors during mpirun"</a>
<li><strong>Previous message:</strong> <a href="22054.php">Blosch, Edwin L: "[OMPI users] Sandy Bridge performance question"</a>
<li><strong>In reply to:</strong> <a href="22054.php">Blosch, Edwin L: "[OMPI users] Sandy Bridge performance question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22058.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Sandy Bridge performance question"</a>
<li><strong>Reply:</strong> <a href="22058.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Sandy Bridge performance question"</a>
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
