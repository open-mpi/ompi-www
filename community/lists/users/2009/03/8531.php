<?
$subject_val = "Re: [OMPI users] Myrinet optimization with OMP1.3 and macosX";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 20 09:21:20 2009" -->
<!-- isoreceived="20090320132120" -->
<!-- sent="Fri, 20 Mar 2009 09:21:01 -0400" -->
<!-- isosent="20090320132101" -->
<!-- name="Scott Atchley" -->
<!-- email="atchley_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Myrinet optimization with OMP1.3 and macosX" -->
<!-- id="62868E09-9B0E-4CF7-9613-6820F5A8ABCF_at_myri.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="ebd2bd0b0903200259o3fa82b81u5394701ab58ef1b_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Myrinet optimization with OMP1.3 and macosX<br>
<strong>From:</strong> Scott Atchley (<em>atchley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-20 09:21:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8532.php">Ricardo Fernández-Perea: "Re: [OMPI users] Myrinet optimization with OMP1.3 and macosX"</a>
<li><strong>Previous message:</strong> <a href="8530.php">Gary Draving: "Re: [OMPI users] btl_openib_ib_max_inline_data warnings"</a>
<li><strong>In reply to:</strong> <a href="8524.php">Ricardo Fern&#225;ndez-Perea: "[OMPI users] Myrinet optimization with OMP1.3 and macosX"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8532.php">Ricardo Fernández-Perea: "Re: [OMPI users] Myrinet optimization with OMP1.3 and macosX"</a>
<li><strong>Reply:</strong> <a href="8532.php">Ricardo Fernández-Perea: "Re: [OMPI users] Myrinet optimization with OMP1.3 and macosX"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 20, 2009, at 5:59 AM, Ricardo Fern&#225;ndez-Perea wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am running DL_POLY in various Xserver 8 processor with a myrinet  
</span><br>
<span class="quotelev1">&gt; network.using mx-1.2.7
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; While I keep in the same node the process scales reasonably well but  
</span><br>
<span class="quotelev1">&gt; in the moment I hit the network ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I will like to try to maximize  the mx network before trying to  
</span><br>
<span class="quotelev1">&gt; touch the program code.
</span><br>
<p>Have you run mx_pingpong between the nodes to determine what raw  
<br>
performance you are getting?
<br>
<p>For each pair of machines, run:
<br>
<p>Host foo:
<br>
$ mx_pingpong -s
<br>
<p>Host bar:
<br>
$ mx_pingpong -d foo -S 0 -E 5000000 -M 2
<br>
<p>where &quot;-d foo&quot; means the MX hostname of foo. It could be foo or foo:0  
<br>
(or foo:1 if you have two NICs, etc.).
<br>
<p>See <a href="http://www.myri.com/serve/cache/455.html">http://www.myri.com/serve/cache/455.html</a> for more details.
<br>
<p>Repeat the above after setting MX_RCACHE=1 on both hosts.
<br>
<p>Scott
<br>
<p><span class="quotelev1">&gt; Is there some place where I can check what the mca params really  
</span><br>
<span class="quotelev1">&gt; means?
</span><br>
<span class="quotelev1">&gt; Can anyone give me a hint where it would be better to look to  
</span><br>
<span class="quotelev1">&gt; optimize OMPI1.3 for macosx?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ricardo
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8532.php">Ricardo Fernández-Perea: "Re: [OMPI users] Myrinet optimization with OMP1.3 and macosX"</a>
<li><strong>Previous message:</strong> <a href="8530.php">Gary Draving: "Re: [OMPI users] btl_openib_ib_max_inline_data warnings"</a>
<li><strong>In reply to:</strong> <a href="8524.php">Ricardo Fern&#225;ndez-Perea: "[OMPI users] Myrinet optimization with OMP1.3 and macosX"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8532.php">Ricardo Fernández-Perea: "Re: [OMPI users] Myrinet optimization with OMP1.3 and macosX"</a>
<li><strong>Reply:</strong> <a href="8532.php">Ricardo Fernández-Perea: "Re: [OMPI users] Myrinet optimization with OMP1.3 and macosX"</a>
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
